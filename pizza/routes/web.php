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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

		Route::get('/',function()
		{
			if(view()->exists('admin.index'))
			{
				$data = ['title'=>'Administrator Panel'];
				return view('admin.index',$data);
			}
		});	

		Route::group(['prefix'=>'contents'],function(){
		//admin/pages
		Route::get('/',['uses'=>'ContentsController@execute','as'=>'contents']);

		//admin/pages/add
		Route::match(['get','post'],'/add',['uses'=>'ContentAddController@execute','as'=>'contentAdd']);

		//admin/edit/2
		Route::match(['get','post','delete'],'/edit{content}',['uses'=>'ContentEditController@execute','as'=>'contentEdit']);
	});	

});