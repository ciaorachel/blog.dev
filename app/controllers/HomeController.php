<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('home');
	}

	public function showAbout()
	{
		return View::make('about');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showSimon()
	{
		return View::make('portfolio.simon');
	}

	public function showContact()
	{
		return View::make('contact');
	}


	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    return Redirect::intended('/posts');
		} else {
		    Session::flash('errorMessage', 'Login failed. Please log in with your email and password.');
	    	Log::info('Login failed', array(Input::get('email')));
		    return Redirect::action('HomeController@showLogin');
		}
	}

	public function doLogout()
	{
		Auth::logout();
		Session::flash('successMessage', 'You have successfully logged out.');
		return Redirect::to('posts');
	}


}
