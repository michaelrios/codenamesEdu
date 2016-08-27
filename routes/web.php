<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'AdminController@home')->name('home');

Route::group(['prefix' => 'games'], function () {
    Route::get('codenames', 'AdminController@home')->name('codenames');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
