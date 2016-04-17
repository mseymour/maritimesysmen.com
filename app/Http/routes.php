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
Route::resource('regional-team', 'RegionalTeamController', ['only' => ['index', 'show']]);
Route::resource('events', 'EventController', ['only' => ['index', 'show']]);

Route::get('reports', ['as' => 'reports.index', 'uses' => 'ReportController@index']);
Route::get('reports/{reportform}', ['as' => 'reports.create', 'uses' => 'ReportController@create']);
Route::post('reports/{reportform}', ['as' => 'reports.store', 'uses' => 'ReportController@store']);

Route::group(['prefix' => 'api/v1', 'namespace' => 'API\V1'], function () {
    Route::get('clubs.geojson', ['as' => 'api.v1.clubs.index', 'uses' => 'ClubController@index']);
    Route::get('event/{event}.geojson', ['as' => 'api.v1.event.show', 'uses' => 'EventController@show']);
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');