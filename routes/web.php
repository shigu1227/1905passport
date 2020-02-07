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



Route::post('/user/reg', 'Api\ApiController@reg');


Route::post('/user/login', 'Api\ApiController@login');
Route::get('/user/token', 'Api\ApiController@token');

Route::get('/pai/auth', 'Api\ApiController@auth');//

Route::get('/test/check','TestController@md5test');     //注册
Route::post('/test/check2','TestController@check2'); 	// 验证签名