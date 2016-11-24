<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User, App\Location, App\Thread;

class ProfileController extends Controller
{
    //
	public function show($id, Request $request)
	{
		$user = User::find($id);
		$threads = Thread::where('user_id', $user['id'])->where('approval',1)->take(5)->get();
		if(isset($user))
		{
			$location = Location::find($user['location']);
			return view('profile')->with(['user' => $user, 'location' => $location['name'], 'threads' => $threads]);
		}else
			return view('errors.404');
	}
}
