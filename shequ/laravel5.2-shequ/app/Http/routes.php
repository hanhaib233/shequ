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

Route::get('/','PostsController@index');
Route::resource('discussions','PostsController');
Route::resource('comments','CommentsController');
Route::get('/user/register','UserController@register');
Route::get('/user/avatar','UserController@avatar');
Route::post('/avatar','UserController@changeAvatar');
Route::post('/crop/api','UserController@cropAvatar');
Route::get('/user/login','UserController@login');
Route::post('/user/login','UserController@signin');
Route::post('/post/upload','PostsController@upload');
Route::post('/user/register','UserController@store');
Route::get('/verify/{confirm_code}','UserController@confirmEmail');
Route::get('/logout','UserController@logout');
