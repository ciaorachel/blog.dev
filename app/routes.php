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
    return "This page is for my resume...";
});

Route::get('/portfolio', function()
{
    return "This page is for my portfolio...";
});

Route::get('/sayhello/{name?}', function($name)
{
    if ($name == "Chris") {
        return Redirect::to('/');
    } else {
        $data = array('name' => $name);
        return View::make('my-first-view')->with($data);
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