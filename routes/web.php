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

//Employee
Route::get('/emp', 'EmployeeController@index');
Route::get('/emp/{emp}', 'EmployeeController@show');
Route::get('/emp/create', 'EmployeeController@create');
Route::post('/emp', 'EmployeeController@store');
Route::get('/emp/{emp}/edit', 'EmployeeController@edit');
Route::patch('/emp/{emp}', 'EmployeeController@update');
Route::delete('/emp/{emp}', 'EmployeeController@destroy');

//Users
Route::get('/usr', 'UsrController@index');
Route::get('/usr/{usr}', 'UsrController@show');
Route::get('/usr/create', 'UsrController@create');
Route::post('/usr', 'UsrController@store');
Route::get('/usr/{usr}/edit', 'UsrController@edit');
Route::patch('/usr/{usr}', 'UsrController@update');
Route::delete('/usr/{usr}', 'UsrController@destroy');

//Posts
Route::get('/post', 'PostController@index');
Route::get('/post/{post}', 'PostController@show');
Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');
Route::get('/post/{post}/edit', 'PostController@edit');
Route::patch('/post/{post}', 'PostController@update');
Route::delete('/post/{post}', 'PostController@destroy');

//Messages
Route::get('/msg', 'MsgController@index');
Route::get('/msg/{msg}', 'MsgController@show');
Route::get('/msg/create', 'MsgController@create');
Route::post('/msg', 'MsgController@store');
Route::get('/msg/{msg}/edit', 'MsgController@edit');
Route::patch('/msg/{msg}', 'MsgController@update');
Route::delete('/msg/{msg}', 'MsgController@destroy');
