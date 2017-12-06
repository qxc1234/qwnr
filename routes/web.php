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

// 前台注册
Route::get('/zhuce','UserController@zhuce');
Route::post('/zhuce','UserController@dozc');
Route::get('/message','CommonController@message');

