<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User, App\Role, App\Setting;

class UserController extends Controller
{
    //
	public static $m;
	public static $stt;
	public function index(Request $request)
	{
		$pagination = Setting::all()->where('key', 'pagination');
		if($request->input('content') != null && $request->input('type') != null)
		{
			$content = $request->input('content');
			$type = $request->input('type');
			
			if($type == 1)
				$type = "id";
			else if($type == 2)
				$type = "name";
			else if($type == 3)
				$type = "email";
			$users = User::where($type,'like','%'.$content.'%')->paginate($pagination[1]['value']);
		}
		else
			$users = User::paginate($pagination[1]['value']);
		return view('admin.user.index')->with(['users' => $users, 'm' => self::$m, 'stt' => self::$stt]);
	}
	
	public function edit($id)
	{
		$user = User::find($id);
		$roles = Role::all();
		return view('admin.user.edit')->with(['user' => $user, 'roles' => $roles]);
	}
	
	public function update($id, Request $request)
	{
		$user = User::find($id);
		$user->name = $request->name;
		$user->email = $request->email;
		$user->role_id = $request->roles;
		$user->save();
		self::$m = "Cập nhật thành công người dùng ID: ".$id;
		self::$stt = "success";
		return self::index();
	}
	
	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();
		self::$m = "Xóa thành công người dùng ID: ".$id;
		self::$stt = "danger";
		return self::index();
	}
}
