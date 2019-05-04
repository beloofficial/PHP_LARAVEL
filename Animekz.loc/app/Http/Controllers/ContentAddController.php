<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Content;
class ContentAddController extends Controller
{
    public function execute(Request $request){

    	if($request->isMethod('post')){
    		//dd($request);

    		$input = $request->except('_token');

            $messages = [
                'required'=>"Поле :attribute обязательна для заполнения",
                'unique'=>"Такое название уже существует"
            ];

    		$validator = Validator::make($input,[

    			'name' => 'required|max:255|unique:contents',
    			'voice' => 'required|max:255',
    			'release' => 'required|max:255',
    			'author' => 'required|max:255',
    			'text' => 'required',
    			


    		],$messages);
    		if($validator->fails()){
    			return redirect()->route('contentAdd')->withErrors($validator)->withInput();
    		}
    		
    		if($request->hasFile('images'))
    		{
	    		$file = $request->file('images');
	    		$input['images'] = $file->getClientOriginalName();

	    		$file->move(public_path().'/assets/img',$input['images']);
	  			
	  			
    		}
            $input['votes'] = 0;
    		$content = new Content($input);
            
    		if($content->save()){
    			return redirect('admin')->with('status','Контент добавлен');
    		}


    	}


    	if(view()->exists('admin.content_add')){
    		$data = [
    				'title'=>"New Genre"
    		];
    		return view('admin.content_add',$data);
    	}
    	abort(404);
    }
}
