<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use Validator;
class GenreEditController extends Controller
{
    public function execute(Genre $genre,Request $request){

        if($request->isMethod('delete')){
            $genre->delete();
            return redirect('admin')->with('status','Жанр удален'); 
        }

        if($request->isMethod('post')){
            $input = $request->except('_token');
            $validator = Validator::make($input,[
                'genre'=>'required|max:255|unique:genres,genre,'.$input['id'],
            ]);
            if($validator->fails()){
                return redirect()
                        ->route('genreEdit',['genre'=>$input['id']])
                        ->withErrors($validator);
            }
       
            
                $genre->fill($input);
                if($genre->update()){
                    return redirect('admin')->with('status','Жанр обновлен');
                }
        }


    	
    	if(view()->exists('admin.genre_edit')){
    		$old = $genre->toArray();

    		$data = [
    					'title' =>'Редактирование жанра - '.$old['genre'],
    					'data' =>$old
    				];
    		return view('admin.genre_edit',$data);
    	}
    }
}
