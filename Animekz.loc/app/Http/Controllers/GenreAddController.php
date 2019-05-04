<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Genre;
class GenreAddController extends Controller
{
    public function execute(Request $request){

    	if($request->isMethod('post')){
    		//dd($request);
    		$input = $request->except('_token');

            $messages = [
                'required'=>"Поле :attribute обязательна для заполнения",
                'unique'=>"Такой жанр уже существует"
            ];

    		$validator = Validator::make($input,[
    			'genre' => 'required|max:255|unique:genres',
    		],$messages);
    		if($validator->fails()){
    			return redirect()->route('genreAdd')->withErrors($validator)->withInput();
    		}
    		$genre = new Genre($input);

    		if($genre->save()){
    			return redirect('admin')->with('status','Жанр добавлен');
    		}


    	}


    	if(view()->exists('admin.genre_add')){
    		$data = [
    				'title'=>"New Genre"
    		];
    		return view('admin.genre_add',$data);
    	}
    	abort(404);
    }
}
