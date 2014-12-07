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

// Homepage route
Route::get('/', function()
{
	return View::make('index');
});

// elFinder route
Route::group(array('before' => 'auth'), function()
{
});

Route::get('elfinder', 'Barryvdh\Elfinder\ElfinderController@showIndex');
Route::any('elfinder/connector', 'Barryvdh\Elfinder\ElfinderController@showConnector');
Route::get('elfinder/standalonepopup/{input_id}', 'Barryvdh\Elfinder\ElfinderController@showPopup');