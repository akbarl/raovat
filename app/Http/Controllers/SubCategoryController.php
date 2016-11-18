<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User, App\Thread, App\Category, App\Setting, App\SubCategory;
class SubCategoryController extends Controller
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
		$threads = Thread::where('subcategory_id', $id)->where('approval',1)->paginate($pagination[1]['value']);
		//if(count($threads))
		//{
			$subcategory = SubCategory::find($id);
			$category = Category::find($subcategory->category_id);
			return view('subcategory.show')->with(['threads' => $threads, 'subcategory' => $subcategory, 'category' => $category]);
		//}
		/*
		else
			return view('errors.404');
		*/
	}
}
