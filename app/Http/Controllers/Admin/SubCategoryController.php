<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category, App\SubCategory;
use DB;
class SubCategoryController extends Controller
{
    //
	public static $m;
	public static $stt;
	public function index()
	{
		//$categories = Category::all();
		$subcategories = DB::table('subcategories')->leftJoin('categories','subcategories.category_id','=','categories.id')->select('subcategories.name as subname','categories.name as cname','subcategories.id as id')->get();
		return view('admin.subcategory.index')->with(['subcategories' => $subcategories, 'm' => self::$m, 'stt' => self::$stt]);
	}
	
	public function create()
	{
		$categories = Category::all();
		return view('admin.subcategory.create')->with('categories', $categories);
	}
	
	public function store(Request $request)
	{
		$subcategory = new SubCategory;
		$subcategory->name = $request->subcategory;
		$subcategory->category_id = $request->category;
		$subcategory->icon = $request->icon;
		$subcategory->save();
		self::$m = "Thêm thành công danh mục con: ". $request->subcategory;
		self::$stt = "success";
		return self::index();
	}
	
	public function edit($id)
	{
		$subcategory = SubCategory::find($id);
		$categories = Category::all();
		return view('admin.subcategory.edit')->with(['subcategory' => $subcategory, 'categories' => $categories]);
	}
	
	public function update($id, Request $request)
	{
		$subcategory = SubCategory::find($id);
		$subcategory->name = $request->subcategory;
		$subcategory->category_id = $request->category;
		$subcategory->icon = $request->icon;
		$subcategory->save();
		self::$m = "Cập nhật thành công danh mục con: ". $request->subcategory;
		self::$stt = "success";
		return self::index();
	}
	
	
}
