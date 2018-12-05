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
Route::get('Admin/Login','Admin\LoginController@Login');
Route::get('Admin/Code','Admin\LoginController@Code');
Route::get('Admin/GetCode','Admin\LoginController@GetCode');