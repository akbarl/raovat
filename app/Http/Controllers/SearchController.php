<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User, App\Thread, App\Category, App\Setting;

class SearchController extends Controller
{
    //
	public function index(Request $request)
	{
		$sort = "id";
		$orderby = "desc";
		$content = $request->input('content');
		$location = $request->input('location');
		$pagination = Setting::all()->where('key', 'pagination');
		
		if($request->input('sort') != null && $request->input('orderby') != null)
		{
			$sort = $request->input('sort');
			$orderby = $request->input('orderby');
			if($sort == "time")
				$sort = "created_at";
			else if($sort == "price")
				$sort = "price";
			session(['location' => $location]);
		}
		$threads = Thread::where('approval',1)->where('title','like','%'.$content.'%')->where('location',$location)->orderBy($sort,$orderby)->paginate($pagination[1]['value']);
		//Config::set('raovat.paginate', 3);
		//if(count($threads))
		//{
			session(['location' => $location]);
			$name = 'Kết quả tìm kiếm';
			return view('search.show')->with(['threads' => $threads, 'name' => $name]);
		//}
		//else
		//	return view('errors.404');
	}
}
