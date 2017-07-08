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
Route::get('/emp/{emp}', 'EmployeeController@show');
Route::get('/usr', 'UsrController@index');
Route::get('/usr/{usr}', 'UsrController@show');
Route::get('/post', 'PostController@index');
Route::get('/post/{post}', 'PostController@show');
Route::get('/msg', 'MsgController@index');
Route::get('/msg/{msg}', 'MsgController@show');
