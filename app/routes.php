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

Route::get('/', 'HomeController@showWelcome');

Route::get('about', 'HomeController@showAbout');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::get('simon', 'HomeController@showSimon');

Route::get('waldo', 'HomeController@showWaldo');

Route::get('contact', 'HomeController@showContact');

Route::get('sayhello/{name?}', 'HomeController@sayHello');

Route::get('rolldice/{guess}', 'HomeController@showRollDice');

Route::resource('posts', 'PostsController');

Route::get('login', 'HomeController@showLogin');

Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@doLogout');