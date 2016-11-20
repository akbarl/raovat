<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User, App\Thread, App\Category, App\Setting, App\SubCategory;
class SubCategoryController extends Controller
{
    //
	public function index(Request $request)
	{
		$sort = "id";
		$orderby = "desc";
		if($request->input('sort') != null && $request->input('orderby') != null)
		{
			$sort = $request->input('sort');
			$orderby = $request->input('orderby');
			if($sort == "time")
				$sort = "created_at";
			else if($sort == "price")
				$sort = "price";
		}
		
		$pagination = Setting::all()->where('key', 'pagination');
		$threads = Thread::where('approval',1)->orderBy($sort,$orderby)->paginate($pagination[1]['value']);
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
		$sort = "id";
		$orderby = "desc";
		if($request->input('sort') != null && $request->input('orderby') != null)
		{
			$sort = $request->input('sort');
			$orderby = $request->input('orderby');
			if($sort == "time")
				$sort = "created_at";
			else if($sort == "price")
				$sort = "price";
		}
		
		$pagination = Setting::all()->where('key', 'pagination');
		$threads = Thread::where('subcategory_id', $id)->where('approval',1)->orderBy($sort,$orderby)->paginate($pagination[1]['value']);
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
