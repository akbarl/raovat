<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Config;

use App\Http\Requests;

use Auth;

use DB;

use App\User, App\Thread, App\Category, App\Setting, App\Image;
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
		$pagination = Setting::all()->where('key', 'pagination');
		//$threads = Thread::where('category_id', $id)->where('approval',1)->paginate($pagination[1]['value']);
		$threads = DB::table('threads')->join('subcategories','subcategories.id','=','threads.subcategory_id')->join('categories','categories.id','=','subcategories.category_id')->where('category_id',$id)->paginate($pagination[1]['value']);
		//if(count($threads))
		//{
			$name = Category::find($id);
			return view('category.show')->with(['threads' => $threads, 'name' => $name['name'] ]);
		//}
		/*
		else
			return view('errors.404');
		*/
	}
	
	public function hehe()
	{
		return "bb";
	}
}
