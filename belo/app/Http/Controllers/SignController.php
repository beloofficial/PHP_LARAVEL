<?php
namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use DB;
use Session;
use App\User;
use Schema;
class SignController extends Controller
{
    //
    public function signIn(Request $request){
    	unset($_SESSION['login']);
    	if($request->isMethod('post')){
    		$login = $request->login;
    		$password = $request->password;
    		$user = DB::table("users")->where('login',$login)->first();
    		$check = 0;
    		if(isset($user) and $user->password == $password){
    			$check = 1;
    		}
    		if($check == 0){
    			$_SESSION['validate'] = "error";
    			return view("login",[
      					'error' => 'error',]
      					);

    		}
    		
    		$_SESSION['login'] = $request->login;
    		return redirect()->route('user');

    	}
    	return view("login");
    }

	public function sign_up(Request $request){
		if($request->isMethod('post')){
			$name = $request->name;
			$surname = $request->surname;
			$login = $request->login;
			$email = $request->email;
			$password = $request->password;
    		DB::table('users')->insert(
    			['name' => $name, 'surname' =>$surname, 'login'=>$login,'email'=>$email,'password'=>$password]
			);
            //create table for user

            Schema::connection('mysql')->create('user_'.$login, function($table)
            {
                $table->increments('id');
                $table->text('text');
                $table->string('img',255);
                $table->dateTime('created_at');
            });
            Schema::connection('mysql')->create('user_friends_'.$login, function($table)
            {
                $table->increments('id');
                $table->boolean('type');
                $table->string('friend_login',255);
                $table->boolean('access');
            });

			return redirect()->route('signIn')->with('registrate', 'success');
    	}
    	return view("registrate");
    }    
}
