<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;
use Validator;
class RegController extends Controller
{
    //
    public function execute(Request $request){
    	if($request->isMethod('post')){
    		$input = $request->except('_token');
    		$validator = Validator::make($input,[
                'email'=>'required|max:255|unique:guests',
    			'password' => 'required|max:255',
            ]);
            if($validator->fails()){
            	
                return redirect()
                        ->route('main')
                        ->withErrors($validator);
            }
            
    		$guest = new Guest($input);
            
    		if($guest->save()){
    			return redirect('main')->with('status','Registration completed');
    		}
    	}
    }
}
