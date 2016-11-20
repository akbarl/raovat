<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Thread, App\Type, App\Category, App\Condition, App\Brand, App\Location, App\User, App\SubCategory;

class ThreadController extends Controller
{
    //
	public static $m;
	public static $stt;
	public function index(Request $request)
	{
		if($request->input('content') != null && $request->input('type') != null)
		{
			$content = $request->input('content');
			$type = $request->input('type');
			
			if($type == 1)
				$type = "id";
			else if($type == 2)
				$type = "title";
			else if($type == 3)
			{
				$user_id = User::where('name','like','%'.$content.'%')->first();
				$content = $user_id["id"];
				$type = "user_id";
			}else if($type == 4)
				$type = "user_id";
			$threads = Thread::where($type,'like','%'.$content.'%')->get();
		}else
			$threads = Thread::all();
		return view('admin.thread.index')->with(['threads'=> $threads,'m' => self::$m, 'stt' => self::$stt]);
	}
	
	public function edit($id)
	{
		$thread = Thread::find($id);
		$types = Type::all();
		$categories = Category::all();
		$conditions = Condition::all();
		$subcategories = SubCategory::all();
		$brands = Brand::all();
		$locations = Location::all();
		return view('admin.thread.edit')->with(['thread'=> $thread, 'subcategories' => $subcategories,'categories'=> $categories, 'types'=> $types, 'conditions'=> $conditions, 'brands'=> $brands, 'locations'=> $locations]);
	}
	
	public function update($id, Request $request)
	{
		$thread = Thread::find($id);
		$thread->description = $request->description;
		$thread->title = $request->title;
		$thread->type_id = $request->type;;
		$thread->subcategory_id = $request->category;
		$thread->price = $request->price;;
		$thread->brand = $request->brand;
		$thread->condition = $request->condition;
		$thread->location = $request->location;
		$thread->save();
		self::$m = "Cập nhật bài viết thành công";
		self::$stt = "success";
		return self::index();
	}
	
	public function destroy($id)
	{
		$images = Image::where('thread_id',$id)->get();
		foreach($images as $i)
		{
			File::delete('uploads/'.$i->name);
		}
		$images = Image::where('thread_id',$id)->delete();
		
		$thread = Thread::find($id);
		$thread->delete();
		self::$m = "Xóa thành công bài viết ID là ".$id;
		self::$stt = "danger";
		return self::index();
	}
	
	public static function uploadFile(Request $request, $thread_id)
	{
		if($request->hasFile('images'))
		{
			$length = count($request->images);
			for($i = 0 ;$i< $length;$i++)
			{
				$extension = $request->images[$i]->getClientOriginalExtension();
				$destinationPath = 'uploads';
				$filename = $thread_id.'_'.uniqid();
				$filename = $filename.'.'.$extension;
				$images = new Image;
				$images->name = $filename;
				$images->thread_id = $thread_id;
				$request->images[$i]->move($destinationPath, $filename);
				$images->save();
			}
		}
	}
	
}
