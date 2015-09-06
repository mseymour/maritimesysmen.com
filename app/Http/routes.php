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

Route::get('/', ['as' => 'home.page', 'uses' => 'HomeController@showIndex']);

Route::get('clubs', ['as' => 'page.clubs', 'uses' => 'RegionalClubController@showIndex']);
Route::get('clubs/{id}', ['as' => 'page.club', 'uses' => 'RegionalClubController@showClub']);

Route::get('team', ['as' => 'page.team', 'uses' => 'RegionalTeamController@showIndex']);

Route::get('events', ['as' => 'page.events', 'uses' => 'EventController@showIndex']);
Route::get('events/{id}', ['as' => 'page.event', 'uses' => 'EventController@showEvent']);

Route::get('convention', ['as' => 'page.events.convention', function () {
  return Redirect::to('events/2016-maritime-regional-convention', 303);
}]);
