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

/*登录页面*/
//登录
Route::any('/','Admin\LoginController@Login');
//验证码生成
Route::get('Code','Admin\LoginController@Code');