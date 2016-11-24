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
		//$threads = Thread::where('category_id', $id)->where('approval',1)->paginate($pagination[1]['value']);
		$threads = DB::table('threads')->join('subcategories','subcategories.id','=','threads.subcategory_id')->join('categories','categories.id','=','subcategories.category_id')->where('category_id',$id)->where('approval',1)->orderBy('threads.'.$sort,$orderby)->paginate($pagination[1]['value']);
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
