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

//后台首页
Route::resource("/admin",'Admin\AdminController');
//后台用户模块
Route::resource("/adminuser",'Admin\AdminUserController');