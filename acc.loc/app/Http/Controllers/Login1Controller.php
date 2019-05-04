<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class Login1Controller extends Controller
{
    //
    public function execute(Request $request){
    	if($request->isMethod('POST')){
    		$login = DB::table('acc1')->first()->login;
    		$password = DB::table('acc1')->first()->password;	
    		if($login == $request['login'] and $password == $request['password']){
    			Session::put('login1',$request['login']);
    			$reqs = DB::table('request')->where('check','false')->get();
    			$data = [
    					'reqs'=> $reqs, 
    			];
    			return view('acc1',$data);
    		}
    	}
    	return view('welcome');
    }
}
