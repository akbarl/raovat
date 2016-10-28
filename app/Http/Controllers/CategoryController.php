<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\User, App\Thread;
class CategoryController extends Controller
{
    //
	public function show($id, Request $request)
	{
		$threads = Thread::all()->where('category_id', $id);
		return view('category.show')->with(['threads' => $threads]);
	}
}
