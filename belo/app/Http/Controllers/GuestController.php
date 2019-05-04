<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class GuestController extends Controller
{
    //
    public function guest(){
    	$users = DB::table('users')->orderBy('login')->get();
    	return view('guest',['users'=>$users]);
    }
    public function other_user($login){

    	$user = DB::table("users")->where('login',$login)->first();    
        	
            if(!isset($user)){
            	
                return redirect()->route('guest')->with('find', 'no');
            }
            $my_posts = DB::table('user_'.$login)->get();
            $icon = DB::table('users')->where('login',$login)->first();

            $friends = DB::table('user_friends_'.$login)->get();
            $users = [];
            foreach($friends as $k=>$friend){
                $login = $friend->friend_login;
                $users[$k] = DB::table('users')->where('login',$login)->first(['name','surname','icon']);
            }
            return view("another_user",['login'=>$login,'icon'=>$icon->icon,'my_posts'=>$my_posts,'user'=>$user,'users'=>$users,'friends'=>$friends]);
    }
}
