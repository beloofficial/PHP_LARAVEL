<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
class ContentsController extends Controller
{
    public function execute(){

    	if(view()->exists('admin.contents')){
    		$contents = Content::all();
    		$data = [
    					'title' =>"Contents",
    					'contents' => $contents
    				];
    		return view('admin.contents',$data);
    	}
    	abort(404);
    }
}
