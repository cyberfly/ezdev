<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/** ------------------------------------------
* Route model binding
* ------------------------------------------
*/

// Route::model('user', 'User');

Route::get('/', function()
{
	// return View::make('hello');
	return View::make('bookings/bookings_list');
});

Route::get('register', function()
{
	// return View::make('hello');
	return View::make('auth/registration');
});

Route::get('login', function()
{
	return View::make('auth/login');
});

// Route::get('dashboard', 'HomeController@showWelcome');
Route::get('dashboard', 'AdminDashboardController@index');
Route::get('edit_user', 'AdminDashboardController@edit');

// route to process the form
Route::post('login', array('uses' => 'HomeController@postLogin'));

Route::post('register', array('uses' => 'HomeController@postRegister'));



Route::group(array('prefix' => 'admin'), function()
{

    Route::resource('packages', 'AdminPackagesController');

});


