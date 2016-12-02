<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Thread, App\Type, App\Category, App\Condition, App\Brand, App\Location, App\User, App\Image, App\SubCategory;

use Auth;

use File, Storage, App\Setting;

class ThreadController extends Controller
{
    //
	public static $m;
	public static $stt;
	
	public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function index()
	{
		$threads = Thread::where('user_id',Auth::id())->get();
		return view('account.thread.index')->with(['threads'=> $threads,'m' => self::$m, 'stt' => self::$stt]);
	}
	
	public function create()
	{
		$types = Type::all();
		$categories = Category::all();
		$subcategories = SubCategory::all();
		$conditions = Condition::all();
		$brands = Brand::all();
		$locations = Location::all();
		return view('account.thread.create')->with(['categories'=> $categories, 'subcategories' => $subcategories, 'types'=> $types, 'conditions'=> $conditions, 'brands'=> $brands, 'locations'=> $locations]);
	}
	
	public function store(Request $request)
	{
		$this->validate($request, [
			'images.*' => 'required|mimes:jpeg,jpg,png,gif',
			'title' => 'required|max:50',
			'description' => 'required|max:2000',
			'price' => 'required|numeric',
		]);
		$thread = new Thread;
		$thread->description = $request->description;
		$thread->title = $request->title;
		$thread->type_id = $request->type;
		$thread->subcategory_id = $request->category;
		$thread->user_id = Auth::id();
		$thread->price = $request->price;
		$thread->brand = $request->brand;
		$thread->condition = $request->condition;
		$thread->location = $request->location;
		//$length = count($request->images);
		$thread->save();
		$thread_id = $thread->id;
		/*
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
		*/
		self::uploadFile($request, $thread_id);
		return redirect('/account/thread');
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
		$images = Image::where('thread_id',$id)->get();
		return view('account.thread.edit')->with(['thread'=> $thread, 'categories'=> $categories, 'subcategories' => $subcategories, 'types'=> $types, 'conditions'=> $conditions, 'brands'=> $brands, 'locations'=> $locations, 'images' => $images]);
	}
	
	public function update($id, Request $request)
	{
		$this->validate($request, [
			'images.*' => 'required|mimes:jpeg,jpg,png,gif',
			'title' => 'required|max:50',
			'description' => 'required|max:2000',
			'price' => 'required|numeric',
		]);
		
		$thread = Thread::find($id);
		$thread->description = $request->description;
		$thread->title = $request->title;
		$thread->type_id = $request->type;;
		$thread->subcategory_id = $request->category;
		$thread->price = $request->price;;
		$thread->brand = $request->brand;
		$thread->condition = $request->condition;
		$thread->location = $request->location;
		if(isset($request->remove))
		{
			foreach($request->remove as $value)
			{
				$image = new Image;
				$image = Image::find($value);
				$filename = $image['name'];
				File::delete('uploads/'.$filename);
				$image->delete();
			}
		}
		self::uploadFile($request, $id);
		$thread->save();
		return redirect('/account/thread');
	}
	
	public function show($id)
	{
		$thread = Thread::find($id);
		if($thread['approval'] || Auth::user()->isAdmin() || $thread['user_id'] == Auth::id())
		{
			$types = Type::all();
			$images = Image::where('thread_id',$id)->get();
			$categories = Category::all();
			$conditions = Condition::all();
			$brands = Brand::all();
			$locations = Location::all();
			$user = User::find($thread['user_id']);
			$thread->view = $thread->view+1;
			$thread->save();
			return view('thread.show')->with(['user'=> $user, 'thread'=> $thread, 'categories'=> $categories, 'types'=> $types, 'conditions'=> $conditions, 'brands'=> $brands, 'locations'=> $locations, 'images' => $images]);
		}else
		{
			self::$m = "Bài viết này chưa được phê duyệt hoặc đã bị xóa";
			self::$stt = "warning";
			return view('errors.404')->with(['m' => self::$m, 'stt' => self::$stt]);
		}
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
		self::$m = "Xóa thành công bài viết ID: ".$id;
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
