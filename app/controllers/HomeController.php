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
		return View::make('hello');
	}

	public function showAbout()
	{
		return View::make('about');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showContact()
	{
		return View::make('contact');
	}

	public function sayHello($name)
	{
		$data = ['name' => $name];
		if ($name == "Chris") {
	        return Redirect::to('/');
	    } else {
	        return View::make('sayhello')->with('name', $name);
	    }
	}


	public function showRollDice($guess)
	{
	    $randomRoll = mt_rand(1, 6);

	    if ($guess == $randomRoll) {
	    	$message = 'Good guess!';
	    } else {
	    	$message = 'Guess again!';
	    }

	    $data = array(
	    	'randomRoll' => $randomRoll,
	    	'guess' => $guess,
	    	'message' => $message
	    );

	    return View::make('roll-dice')->with($data);
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
		    // 2. Log email that tried to authenticate
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
