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
    Route::auth();
});
Route::get('/top',['uses'=>'TopController@execute','as'=>'top']);

Route::match(['get','post'],'/main',['uses'=>'MainController@execute','as'=>'main']);

Route::match(['get','post'],'/main{id}',['uses'=>'ContentShowController@execute','as'=>'contentShow']);

Route::post('/reg',['uses'=>'RegController@execute','as'=>'reg']);

Route::match(['get','post'],'/auth',['uses'=>'AuthController@execute','as'=>'auth']);

Route::match(['get','post'],'/comment{id}',['uses'=>'CommentAddController@execute','as'=>'commentAdd']);

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	//admin
	Route::get('/',function(){
			if(view()->exists('admin.index')){
				$data = ['title'=>'Administrator Panel'];
				return view('admin.index',$data);
			}
	});	
	//admin/pages
	
	Route::group(['prefix'=>'genres'],function(){
		//admin/pages
		Route::get('/',['uses'=>'GenresController@execute','as'=>'genres']);

		//admin/pages/add
		Route::match(['get','post'],'/add',['uses'=>'GenreAddController@execute','as'=>'genreAdd']);

		//admin/edit/2
		Route::match(['get','post','delete'],'/edit{genre}',['uses'=>'GenreEditController@execute','as'=>'genreEdit']);
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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
