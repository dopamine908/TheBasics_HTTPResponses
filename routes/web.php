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

/*
|--------------------------------------------------------------------------
| return response 基本用法
|--------------------------------------------------------------------------
*/
Route::get('回應物件', 'ResponsesController@return_response');
Route::get('回應附加header', 'ResponsesController@addResponseHeader');
Route::get('回應重設header', 'ResponsesController@setResponseHeader');
Route::get('回應復加cookie', 'ResponsesController@setResponseCookie');

/*
|--------------------------------------------------------------------------
| return redirect 基本用法
|--------------------------------------------------------------------------
*/
Route::get('form/{val?}', 'ResponsesController@redirectTarget')->name('redirectTarget');
Route::post('提交表單然後重導', 'ResponsesController@return_redirect')->name('post_target');
