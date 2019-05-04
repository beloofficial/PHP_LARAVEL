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



 Route::match(['get','post'],'/login',['uses'=>'SignController@signIn','as'=>'signIn']);
 Route::match(['get','post'],'/registr',['uses'=>'SignController@sign_up','as'=>'sign_up']);

  Route::match(['get','post'],'/user',['uses'=>'UserController@execude','as'=>'user']);
    Route::match(['post'],'/user',['uses'=>'UserController@add_post','as'=>'add_post']);
Route::match(['delete'],'/delete/{id}',['uses'=>'UserController@delete','as'=>'delete']);
   Route::match(['post'],'/another_user',['uses'=>'UserController@another_user','as'=>'another_user']);

   Route::match(['get'],'/another_user_sub/{login}',['uses'=>'UserController@another_user_1','as'=>'another_user_sub']);

Route::match(['post'],'/another_user_subs',['uses'=>'UserController@subscribe','as'=>'subscribe']);

Route::match(['post'],'/delete',['uses'=>'UserController@unsubscribe','as'=>'unsubscribe']);

Route::match(['get'],'/user/wall',['uses'=>'UserController@wall','as'=>'wall']);

Route::match(['get','post'],'/user/settings',['uses'=>'UserController@settings','as'=>'settings']);

Route::match(['get'],'/guest',['uses'=>'GuestController@guest','as'=>'guest']);

Route::match(['get'],'/guest/{login}',['uses'=>'GuestController@other_user','as'=>'user_guest']);

Route::match(['post'],'/guest/',['uses'=>'GuestController@other_user','as'=>'user_guest_post']);