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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', function () {
    return view('index');
});

Route::get('/api/v1/work/{id?}', 'Work@index');
Route::post('/api/v1/work', 'Work@store');
Route::post('/api/v1/work/{id}', 'Work@update');
Route::delete('/api/v1/work/{id}', 'Work@destroy');