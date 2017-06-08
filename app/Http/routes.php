<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::resource('userRole', 'UserRoleController',[
		'only' => ['index']
	]);
Route::resource('profile', 'ProfileController');
Route::resource('sites', 'FacilityConfigController');
Route::resource('partner', 'PartnerController');
Route::auth();
Route::get('/home', 'HomeController@index');