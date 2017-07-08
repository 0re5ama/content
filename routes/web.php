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

Route::get('/emp', 'EmployeeController@index');
Route::get('/emp/{id}', 'EmployeeController@show');
Route::get('/usr', 'UsrController@index');
Route::get('/usr/{id}', 'UsrController@show');
Route::get('/post', 'PostController@index');
Route::get('/post/{id}', 'PostController@show');
Route::get('/msg', 'MsgController@index');
Route::get('/msg/{id}', 'MsgController@show');
