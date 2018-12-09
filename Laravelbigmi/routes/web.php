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

// 前台

// 前台首页模块
Route::get('/','Home\IndexController@index');

// 前台buy模块(下单未支付,仅测试前台各个页面)
Route::resource('/buy','Home\BuyController');





// 后台

// 后台首页模块
Route::resource('/admin','Admin\IndexController');

//商品分类模块
Route::resource('/type','Admin\TypeController');

//广告模块
Route::resource('/ads','Admin\AdsController');

//会员模块
Route::resource('/user','Admin\UserController');