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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/api', function () {
    return view('welcome');
});

Route::get('/api/drivers', 'DriverController@index');
Route::post('/api/driver/insert', 'DriverController@save');
Route::post('/api/driver/{id}', 'DriverController@show');
Route::post('/api/driver/profile/{gid}', 'DriverController@profile');
Route::post('/api/driver/update/{id}', 'DriverController@update');
Route::post('/api/driver/delete/{id}', 'DriverController@destroy');

