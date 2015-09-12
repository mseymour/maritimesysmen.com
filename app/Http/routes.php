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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('about', ['as' => 'about', 'uses' => 'AboutController@showTheRegion']);
Route::resource('clubs', 'RegionalClubController', ['only' => ['index', 'show']]);
Route::get('team', ['as' => 'regional_team', 'uses' => 'RegionalTeamController@index']);
Route::resource('events', 'EventController', ['only' => ['index', 'show']]);

Route::group(['prefix' => 'api'], function () {
    Route::get('clubs', ['uses' => 'RegionalClubController@clubsGeoJson']);
});