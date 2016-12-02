<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::get('/dang-tin', 'Thread@create');
Route::resource('thread', 'ThreadController');

Route::resource('profile', 'ProfileController@show',['only' => 'show']);

Route::resource('category', 'CategoryController', ['only' => ['show','index']]);

Route::resource('subcategory', 'SubCategoryController', ['only' => ['show','index']]);

Route::resource('search', 'SearchController', ['only' => ['show','index']]);
//Route::resource('thread', 'ThreadController');
/*
Route::group(['middleware' => ['auth', 'admin'], function() {

    Route::resource('index', 'Admin\AdminController');

}]);
*/
Route::group(['middleware' => ['auth'], 'prefix' => 'account'], function () {
    //Route::resource('admin', 'Admin\AdminController');
		Route::get('/', 'Account\AccountController@index');
		Route::get('/edit', 'Account\AccountController@edit');
		Route::post('/update', 'Account\AccountController@update');
		//Route::get('/changepassword', 'Auth\ChangePasswordController@index');
		//Route::resource('changepassword', 'Auth\ChangePasswordController', ['only' => ['index','update']]);
		Route::get('/changepassword', 'Auth\ChangePasswordController@index');
		Route::post('/changepassword/update', 'Auth\ChangePasswordController@update');
		Route::resource('thread', 'Account\ThreadController');
		//Route::resource('thread', 'Account\ThreadController');
});

Route::group(['middleware' => ['auth','admin'], 'prefix' => 'admin'], function () {
    //Route::resource('admin', 'Admin\AdminController');
		Route::get('/', function(){
			return view('admin.dashboard');
		});
		Route::resource('dashboard', 'Admin\DashboardController');
		Route::resource('user', 'Admin\UserController');
		Route::resource('thread', 'Admin\ThreadController');
		Route::resource('approval', 'Admin\ApprovalController');
		Route::resource('setting', 'Admin\SettingsController');
		/******************************************************/
		Route::resource('category', 'Admin\CategoryController');
		Route::resource('subcategory', 'Admin\SubCategoryController');
		Route::resource('brand', 'Admin\BrandController');
		Route::resource('location', 'Admin\LocationController');
		Route::resource('report', 'Admin\ReportController');
});


