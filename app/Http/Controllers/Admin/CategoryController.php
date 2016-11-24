<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category, App\Setting;
class CategoryController extends Controller
{
    //
	public static $m;
	public static $stt;
	public function index()
	{
		$pagination = Setting::all()->where('key', 'pagination');
		$categories = Category::paginate($pagination[1]['value']);
		return view('admin.category.index')->with(['categories' => $categories, 'm' => self::$m, 'stt' => self::$stt]);
	}
	
	public function create()
	{
		return view('admin.category.create');
	}
	
	public function store(Request $request)
	{
		$category = new Category;
		$category->name = $request->category;
		$category->icon = $request->icon;
		$category->save();
		self::$m = "Thêm thành công danh mục: ". $request->category;
		self::$stt = "success";
		return self::index();
	}
	
	public function edit($id)
	{
		$category = Category::find($id);
		return view('admin.category.edit')->with('category', $category);
	}
	
	public function update($id, Request $request)
	{
		$category = Category::find($id);
		$category->name = $request->category;
		$category->icon = $request->icon;
		$category->save();
		self::$m = "Cập nhật thành công danh mục: ". $request->category;
		self::$stt = "success";
		return self::index();
	}
	
	public function destroy($id)
	{
		$category = Category::find($id);
		$category->delete();
		self::$m = "Xóa thành công danh mục: ". $category->name;
		self::$stt = "danger";
		return self::index();
	}
}
