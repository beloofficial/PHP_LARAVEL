<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use DB;
class CommentAddController extends Controller
{
    //
    public function execute($id,Request $request){
    	if($request->isMethod('post')){
    		$input = $request->except('_token');
    		$input['name'] = session('name');
   
    		$input['anime_id'] =$id;
    		
    		$comment = new Comment($input);
    		if($comment->save()){
    			return redirect()->route('contentShow',['id'=>$id]);
    		}
    	}
    }
}
