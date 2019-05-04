<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class LogoutController extends Controller
{
    //
    public function execute(Request $request){
    	if(Session::has('login1'))
 			Session::forget('login1');
 		if(Session::has('login2'))
 			Session::forget('login2');  
  		if(!Session::has('login1') and !Session::has('login2'))
   		{
     		 return view('welcome');
   		}
    }
}
