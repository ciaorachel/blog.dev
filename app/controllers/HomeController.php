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


}
