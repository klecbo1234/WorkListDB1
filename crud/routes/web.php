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

Route::get('/', 'HomeController@home');
Route::post('/search', 'HomeController@search');
Route::get('/jobs', 'JobsController@index');
Route::get('/add', 'JobsController@add');
Route::post('/add', 'JobsController@store');