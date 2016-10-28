<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Config;

use App\Http\Requests;

use Auth;

use App\User, App\Thread, App\Category, App\Setting;
class CategoryController extends Controller
{
    //
	
	public function index()
	{
		$pagination = Setting::all()->where('key', 'pagination');
		$threads = Thread::paginate($pagination[1]['value']);
		//Config::set('raovat.paginate', 3);
		if(count($threads))
		{
			$name = 'Tất cả danh mục';
			return view('category.show')->with(['threads' => $threads, 'name' => $name]);
		}else
			return view('errors.404');
	}
	public function show($id, Request $request)
	{
		$threads = Thread::where('category_id', $id)->paginate(1);
		if(count($threads))
		{
			$name = Category::find($id);
			return view('category.show')->with(['threads' => $threads, 'name' => $name['name'] ]);
		}else
			return view('errors.404');
	}
}
