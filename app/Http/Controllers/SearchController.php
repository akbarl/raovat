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
		$content = $request->input('content');
		$location = $request->input('location');
		$pagination = Setting::all()->where('key', 'pagination');
		$threads = Thread::where('title','like','%'.$content.'%')->where('location',$location)->paginate($pagination[1]['value']);
		//Config::set('raovat.paginate', 3);
		//if(count($threads))
		//{
			$name = 'Kết quả tìm kiếm';
			return view('search.show')->with(['threads' => $threads, 'name' => $name]);
		//}
		//else
		//	return view('errors.404');
	}
}
