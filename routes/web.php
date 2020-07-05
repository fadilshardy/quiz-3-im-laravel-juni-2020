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

Route::get('/artikel', 'ArticlesController@index');
Route::get('/artikel/create', 'ArticlesController@create');
Route::post('/artikel', 'ArticlesController@store');
Route::get('/artikel/{id}', 'ArticlesController@show');
Route::get('/artikel/{id}/edit', 'ArticlesController@edit');
Route::put('/artikel/{id}', 'ArticlesController@update');
Route::delete('/artikel/{id}', 'ArticlesController@destroy');
