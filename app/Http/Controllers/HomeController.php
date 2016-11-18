<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, App\Category, App\Location, App\SubCategory;

class HomeController extends Controller
{
	
    public function index()
    {
		$locations = Location::all();
		$categories = Category::all();
		$subcategories = SubCategory::all();
        return view('home')->with(['locations' => $locations, 'categories' => $categories, 'subcategories' => $subcategories]);
    }
}
