<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nerds', 'NerdController@index');
Route::get('/nerds/create', 'NerdController@create');
Route::post('/nerds', 'NerdController@store');
Route::get('/nerds/{id}', 'NerdController@show');
Route::get('/nerds/{id}/edit', 'NerdController@edit');
Route::put('{id}', 'NerdController@update')->name('nerds.update');
Route::delete('/nerds/{id}', 'NerdController@destroy');
