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

/*Route::get('/', function () {
    // return view('welcome');
});*/

Route::get('/','Home\IndexController@index');

// 后台首页模块 结合登录中间件
Route::resource('/admin','Admin\IndexController')->middleware('adminlogin');
// 后台登录界面
Route::get('/adminlogin','Admin\AdminLoginController@login');
// 登录逻辑
Route::post('/admindologin','Admin\AdminLoginController@dologin');
// 登出
Route::get('/adminlogout','Admin\AdminLoginController@logout');

//商品分类模块
Route::resource('/type','Admin\TypeController');

//广告模块
Route::resource('/ads','Admin\AdsController');

//会员模块
Route::resource('/user','Admin\UserController');