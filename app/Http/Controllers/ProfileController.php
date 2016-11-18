<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User, App\Location;

class ProfileController extends Controller
{
    //
	public function show($id, Request $request)
	{
		$user = User::find($id);
		if(isset($user))
		{
			$location = Location::find($user['location']);
			return view('profile')->with(['user' => $user, 'location' => $location['name']]);
		}else
			return view('errors.404');
	}
}
