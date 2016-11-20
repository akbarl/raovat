<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Setting;
class SettingsController extends Controller
{
    //
	public static $m;
	public static $stt;
	public function index()
	{
		$settings = Setting::all();
		return view('admin.setting.index')->with(['settings' => $settings, 'm' => self::$m, 'stt' => self::$stt]);
	}
	
	public function store(Request $request)
	{
		$setting = new Setting;
		$setting->name = $request->category;
		$setting->save();
		self::$m = "Thêm thành công danh mục: ". $request->category;
		self::$stt = "success";
		return self::index();
	}
	
	public function edit($id)
	{
		$setting = Setting::find($id);
		return view('admin.setting.edit')->with('setting', $setting);
	}
	
	public function update($id, Request $request)
	{
		$setting = Setting::find($id);
		$setting->description = $request->description;
		$setting->value = $request->value;
		$setting->key = $request->key;
		$setting->save();
		self::$m = "Cập nhật thành công cấu hình website: ". $request->description ." với giá trị ".$request->value;
		self::$stt = "success";
		return self::index();
	}
}
