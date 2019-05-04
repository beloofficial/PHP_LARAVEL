<?php

namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;
use DB;
use Carbon;
class UserController extends Controller
{
    //
    public function execude(Request $request){
        if(isset($_SESSION['login'])){
            $my_posts = DB::table('user_'.$_SESSION['login'])->get();
            $icon = DB::table('users')->where('login',$_SESSION['login'])->first();
            $friends = DB::table('user_friends_'.$_SESSION['login'])->get();
            $users = [];
            $new_users = [];
            $i = -1;
            foreach($friends as $k=>$friend){
                $login = $friend->friend_login;
                $users[$k] = DB::table('users')->where('login',$login)->first(['name','surname','icon']);
                $type = $friend->type;
                if($type == 2){
                    $i+=1;
                    $new_users[$i] = $users[$k];

                    DB::table('user_friends_'.$_SESSION['login'])->where('friend_login',$login)->where('type',2)->update(['type' => 1]);
                                      
                }
                
                
            }
            //dd($new_users);
            return view("user",['login'=>$_SESSION['login'],'icon'=>$icon->icon,'my_posts'=>$my_posts,'friends'=>$friends,'users'=>$users])
            ->with('new_users1',$new_users);
        }
        else{
            return redirect()->route('signIn')->with('login', 'error');
        }
    }
    public function add_post(Request $request){
        
        $text = $request->text;
        if($request->hasFile('images'))
            {
                $file = $request->file('images');
                $input['images'] = $file->getClientOriginalName();

                $file->move(public_path().'/assets/img',$input['images']);
                
                
            }
        $mytime = Carbon\Carbon::now();
        DB::table('user_'.$_SESSION['login'])->insert(
                ['text' => $text, 'img'=>$input['images'],'created_at' =>$mytime]
            );
        return redirect()->route('user');
    }

    public function add_like(Request $request){
        return back();
    }
    public function another_user(Request $request){
        if($request->isMethod('post')){
            $user = DB::table("users")->where('login',$request->search)->first();    
            if(!isset($_SESSION['login'])){
                return redirect()->route('user_guest',['login'=>$request->search]); 
            }
            if(!isset($user)){
                return redirect()->route('user')->with('find', 'no');
            }

            else{
                if(isset($user) and  $_SESSION['login']== $request->search){
                    return redirect()->route('user');
                }
            }
            $my_posts = DB::table('user_'.$request->search)->get();
            $icon = DB::table('users')->where('login',$request->search)->first();
            $friends = DB::table('user_friends_'.$request->search)->get();
            $users = [];
            foreach($friends as $k=>$friend){
                $login = $friend->friend_login;

                $users[$k] = DB::table('users')->where('login',$login)->first(['name','surname','icon']);
            }
            $my_friends = DB::table('user_friends_'.$_SESSION['login'])->where('friend_login',$request->search)->where('type',0)->first();
        
            if(isset($my_friends))
                $subscribed = 1;
            else
                $subscribed = 0;
            return view("another_user",['login'=>$request->search,'icon'=>$icon->icon,'my_posts'=>$my_posts,'user'=>$user,'users'=>$users,'friends'=>$friends,
                'subscribed' =>$subscribed
            ]);
        }
       
        
    }
    public function another_user_1($login){

        if(isset($_SESSION['login'])){
            $user = DB::table("users")->where('login',$login)->first();    
        
            if(!isset($user)){
                return redirect()->route('user')->with('find', 'no');
            }
            else{
                if(isset($user) and  $_SESSION['login']== $login){
                    return redirect()->route('user');
                }
            }
            $my_posts = DB::table('user_'.$login)->get();
            $icon = DB::table('users')->where('login',$login)->first();

            $friends = DB::table('user_friends_'.$login)->get();
            $users = [];
            $my_friends = DB::table('user_friends_'.$_SESSION['login'])->where('friend_login',$login)->where('type',0)->first();
            foreach($friends as $k=>$friend){
                $login = $friend->friend_login;
                $users[$k] = DB::table('users')->where('login',$login)->first(['name','surname','icon']);
            }
            
            
            if(isset($my_friends))
                $subscribed = 1;
            else
                $subscribed = 0;
            return view("another_user",['login'=>$login,'icon'=>$icon->icon,'my_posts'=>$my_posts,'user'=>$user,'users'=>$users,'friends'=>$friends,'subscribed' =>$subscribed]);
        }
        return redirect()->route('user_guest',['login'=>$login]);   
    }
    public function subscribe(Request $request){
        $check = DB::table('user_friends_'.$_SESSION['login'])->where('friend_login',$request->another_login)->where('type',0)->first();

        if(isset($check))
            return redirect()->route('another_user_sub',['login'=>$request->another_login]);
        DB::table('user_friends_'.$_SESSION['login'])->insert(
                ['type' => 0, 'friend_login'=>$request->another_login,'access'=>0]
            );
        DB::table('user_friends_'.$request->another_login)->insert(
                ['type' => 2, 'friend_login'=>$_SESSION['login'],'access'=>0]
            );

        return redirect()->route('another_user_sub',['login'=>$request->another_login]);
    }

    public function unsubscribe(Request $request){

        DB::table('user_friends_'.$_SESSION['login'])->where('friend_login',$request->another_login)->where('type',0)->delete();
        DB::table('user_friends_'.$request->another_login)->where('friend_login',$_SESSION['login'])->where('type',1)->delete();
        DB::table('user_friends_'.$request->another_login)->where('friend_login',$_SESSION['login'])->where('type',2)->delete();

        return redirect()->route('another_user_sub',['login'=>$request->another_login]);
    }


    public function wall(){
        if(isset($_SESSION['login'])){
            $friends = DB::table('user_friends_'.$_SESSION['login'])->where('type',0)->get(['friend_login']);
            $icon = DB::table('users')->where('login',$_SESSION['login'])->first(['icon']);
            
            $posts = [];
            $i = -1;
            foreach ($friends as $key => $friend) {
                $log = $friend->friend_login;
                $user_posts = DB::table('user_'.$log)->get();
                $user_icon = DB::table('users')->where('login',$log)->first(['icon'])->icon;
                
                foreach ($user_posts as $key1 => $user_post) {
                    $i+=1;
                    $user_post->login = $log;
                    $user_post->icon = $user_icon;
                    $posts[$i] = $user_post;
                    
                }
                
            }
            $temp = [];

            
            for($i = 0;$i<count($posts);$i++) {
                for($j = $i+1;$j<count($posts);$j++) {
                    if(strtotime($posts[$i]->created_at) < strtotime($posts[$j]->created_at))
                       {
                            $temp = $posts[$i];
                            $posts[$i] = $posts[$j];
                            $posts[$j] = $temp; 

                        }      
                    }
            }
      
            return view('wall',['icon'=>$icon->icon,'posts'=>$posts]);
        }
        else{
            return redirect()->route('signIn')->with('login', 'error');
        }



    }

    public function settings(Request $request)
    {

        $icon = DB::table('users')->where('login',$_SESSION['login'])->first(['icon']);
        if(isset($_SESSION['login']))
        {
            if($request->isMethod('post')){
                $type = $request->type;
                if($type == 1){
                    $name = $request->name;
                    DB::table('users')->where('login',$_SESSION['login'])->update(['name' => $name]);
                }
                if($type == 2){
                    $surname = $request->surname;
                    DB::table('users')->where('login',$_SESSION['login'])->update(['surname' => $surname]);
                }
                if($type == 3){
                    $email = $request->email;
                    DB::table('users')->where('login',$_SESSION['login'])->update(['email' => $email]);
                }
                if($type == 4){
                    $birthday = $request->birthday;
                    DB::table('users')->where('login',$_SESSION['login'])->update(['birthday' => $birthday]);
                }
                if($type == 5){
                    $file = $request->file('images');
                    $input['images'] = $file->getClientOriginalName();
                    $file->move(public_path().'/assets/images',$input['images']);
                    DB::table('users')->where('login',$_SESSION['login'])->update(['icon' => $input['images']]);
                }
                return redirect()->route('user');
            }
            return view('settings',['icon'=>$icon->icon]);
        }

    }


    public function delete(Request $request){
        DB::table('user_'.$_SESSION['login'])->where('id',$request->id)->delete();
        return redirect()->route('user');

    }




























}
