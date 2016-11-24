<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Thread, Auth, App\Setting;

class ApprovalController extends Controller
{
    //
	public static $m;
	public static $stt;
	public function index(Request $request)
	{
		/*
		$pagination = Setting::all()->where('key', 'pagination');
		$threads = Thread::orderBy('approval', 'asc')->paginate($pagination[1]['value']);
		return view('admin.approval.index')->with(['threads'=> $threads,'m' => self::$m, 'stt' => self::$stt]);
		*/
		
		$pagination = Setting::all()->where('key', 'pagination');
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
			$threads = Thread::where($type,'like','%'.$content.'%')->orderBy('approval', 'asc')->paginate($pagination[1]['value']);
		}else
			$threads = Thread::orderBy('approval', 'asc')->paginate($pagination[1]['value']);
		return view('admin.approval.index')->with(['threads'=> $threads,'m' => self::$m, 'stt' => self::$stt]);
		
	}
	
	public function update($id, Request $request)
	{
		$thread = Thread::find($id);
		$thread->approver = Auth::id();
		if($thread->approval)
			$thread->approval = 0;
		else
			$thread->approval = 1;
		$thread->save();
		if($thread->approval)
		{
			self::$m = "Bạn đã phê duyệt bài đăng ID: ". $id;
			self::$stt = "success";
		}else
		{
			self::$m = "Bạn đã hủy phê duyệt bài đăng ID: ". $id;
			self::$stt = "danger";
		}
		return self::index($request);
	}
	
	
	
}
