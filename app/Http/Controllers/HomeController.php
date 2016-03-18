<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

	public function postChangeLanguage()
	{
		$rules = [
			'language' => 'en,uk,de,ru' //list of supported languages of your application.
		];

		$language = Input::get('lang'); //lang is name of form select field.

		$validator = Validator::make(compact($language),$rules);

		if($validator->passes())
		{
			Session::put('language',$language);
			App::setLocale($language);
		}
	}

}
