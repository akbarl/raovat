<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Thread, App\Type, App\Category, App\Condition, App\Brand, App\Location, App\User, App\Image, App\SubCategory;

use Auth;

use File, Storage, App\Setting;



class ThreadController extends Controller
{
    //
	public static $m;
	public static $stt;
	/*
	public function __construct()
    {
        $this->middleware('auth');
    }
	*/
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
			$name = 'Tất cả bài viết';
			return view('category.show')->with(['threads' => $threads, 'name' => $name]);
		}else
			return view('errors.404');
	}
	
	public function create()
	{
		return redirect('/account/thread/create');
	}
	public function show($id)
	{
		$thread = Thread::find($id);
		$isAdmin = 0;
		if(Auth::check())
			$isAdmin = Auth::user()->isAdmin() ? 1 : 0;
		
		if($thread['approval'] || $isAdmin || $thread['user_id'] == Auth::id())
		{
			if(!$thread['approval'])
			{
				self::$m = "Bài viết đang chờ phê duyệt";
				self::$stt = "danger";
			}
			$types = Type::all();
			$images = Image::where('thread_id',$id)->get();
			$categories = Category::all();
			$conditions = Condition::all();
			$brands = Brand::all();
			$locations = Location::all();
			$user = User::find($thread['user_id']);
			$thread->view = $thread->view+1;
			$thread->save();
			return view('thread.show')->with(['user'=> $user, 'thread'=> $thread, 'categories'=> $categories, 'types'=> $types, 'conditions'=> $conditions, 'brands'=> $brands, 'locations'=> $locations, 'images' => $images, 'm' => self::$m, 'stt' => self::$stt]);
		}else
		{
			self::$m = "Bài viết này chưa được phê duyệt hoặc đã bị xóa";
			self::$stt = "warning";
			return view('errors.404')->with(['m' => self::$m, 'stt' => self::$stt]);
		}
	}
}
