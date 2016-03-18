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

//Route::get('/', 'WelcomeController@index');
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	'home' => 'HomeController',
]);

Route::get('setlang/{lang}', function($lang)
{
//    $input = Input::only('lang');
	Session::put('locale', $lang);
	return redirect('/');
});

Route::get('testlang', function(){
	return trans('myapp.login');
});
