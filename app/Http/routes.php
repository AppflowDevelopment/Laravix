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
    return view('includes.index');
});

Route::get('about', ['as' => 'page', 'uses' => 'PageController@index']);

Route::get('contact', array('as' => 'contact', 'uses' => 'ContactController@index'));
Route::post('contact', array('as' => 'contact.send', 'uses' => 'ContactController@send'));