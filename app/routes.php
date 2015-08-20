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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/resume', function()
{
    return View::make('resume');
});

Route::get('/portfolio', function()
{
    return View::make('portfolio');
});

Route::get('/sayhello/{name?}', function($name)
{
    if ($name == "Chris") {
        return Redirect::to('/');
    } else {
        return View::make('sayhello')->with('name', $name);
    }
});

Route::get('/rolldice/{guess}', function($guess)
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

});



