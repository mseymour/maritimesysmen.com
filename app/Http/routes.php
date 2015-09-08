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

Route::get('/', ['as' => 'home.page', 'uses' => 'HomeController@index']);

Route::get('about', ['as' => 'page.about', 'uses' => 'AboutController@showTheRegion']);

Route::get('clubs', ['as' => 'page.clubs', 'uses' => 'RegionalClubController@index']);
Route::get('clubs/{id}', ['as' => 'page.club', 'uses' => 'RegionalClubController@show']);

Route::get('team', ['as' => 'page.team', 'uses' => 'RegionalTeamController@index']);

Route::get('events', ['as' => 'page.events', 'uses' => 'EventController@index']);
Route::get('events/{id}', ['as' => 'page.event', 'uses' => 'EventController@show']);

Route::group(['prefix' => 'api'], function () {
    Route::get('clubs', ['as' => 'api.clubs', 'uses' => 'RegionalClubController@clubsGeoJson']);
});