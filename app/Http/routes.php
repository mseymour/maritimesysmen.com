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

Route::get('/', function () {
    return view('welcome');
});

Route::get('clubs/{id?}', ['as' => 'clubs', 'uses' => 'RegionalClubController@showIndex']);

Route::get('team', 'RegionalTeamController@showIndex');

Route::get('events/{id?}', ['as' => 'events', 'uses' => 'EventController@showIndex']);