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
Route::match(['post'],'/acc',['uses'=>'Login1Controller@execute','as'=>'login1']);

Route::match(['post'],'/acc2',['uses'=>'Login2Controller@execute','as'=>'login2']);

Route::match(['post'],'/request',['uses'=>'RegistController@execute','as'=>'regist']);

Route::match(['get','post'],'/company/{company}',['uses'=>'CompanyController@execute','as'=>'registrate_company']);


Route::match(['get'],'/logout',['uses'=>'LogoutController@execute','as'=>'logout']);
