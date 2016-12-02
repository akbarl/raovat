<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Auth;
class ChangePasswordController extends Controller
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
		return view("account.changepassword")->with(['m' => self::$m, 'stt' => self::$stt]);
	}
	
	public function update(Request $request)
	{
		
		$this->validate($request, [
			'newpassword' => 'required|same:confirmnewpassword',
			'confirmnewpassword' => 'required|same:newpassword',
			'oldpassword' => 'required',
		]);
		$oldpassword = $request->oldpassword;
		$newpassword = $request->newpassword;
		$confirmnewpassword = $request->confirmnewpassword;
		if(Hash::check($oldpassword, Auth::user()->password))
		{
			$request->user()->fill([
				'password' => Hash::make($request->newpassword)
			])->save();
		
		}else
		{
			self::$m = "Mật khẩu cữ không đúng";
			self::$stt = "danger";
			return self::index();
		}
		self::$m = "Đã đổi mật khẩu thành công";
		self::$stt = "success";
		return self::index();
	}
}
