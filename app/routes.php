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
	return View::make('home');
});

// Events
Route::get('events', array('as' => 'events.index', 'uses' => 'EventsController@getIndex'));
Route::get('events/{id}', array('as' => 'events.show', 'uses' => 'EventsController@getEvent'));


// routes that need a authenticated user
//Route::group(array('before' => 'auth'), function()
//{
    Route::post('statistics/store', array('as' => 'statistics.store', 'uses' => 'StatisticsController@postStore'));
//}
    Route::post('statistics/update', array('as' => 'statistics.update', 'uses' => 'StatisticsController@postUpdate'));
    Route::get('statistics/latest', array('as' => 'statistics.latest', 'uses' => 'StatisticsController@getLatest'));
    Route::get('statistics/{id}/edit', array('as' => 'statistics.edit', 'uses' => 'StatisticsController@getEdit'));