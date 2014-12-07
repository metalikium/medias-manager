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

// Set route for elFinder
Route::group(array('before' => 'auth'), function()
{
	\Route::get('elfinder', 'Barryvdh\Elfinder\ElfinderController@showIndex');
	\Route::any('elfinder/connector', 'Barryvdh\Elfinder\ElfinderController@showConnector');
});