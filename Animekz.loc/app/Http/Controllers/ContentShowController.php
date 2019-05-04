<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use DB;
use Session;
class ContentShowController extends Controller
{
    //
    public function execute($id,Request $request){
        if(session('error') == 'error' or session('error') == 'exit' or !Session::has('error')){
            session(['pass'=>'no']);
            return redirect()->route('main');
        }
    	$content = DB::table('contents')
    			->where('id',$id)
    			->first();

    	DB::table('contents')
            ->where('id', $id)
            ->update(['votes' => $content->votes+1]);

        $content = DB::table('contents')
    			->where('id',$id)
    			->first();   
    	$comments = DB::table('comments')
                ->where('anime_id',$id)
                 ->orderBy('created_at', 'desc')
                ->get();
    	$data = [
    			'title' => $content->name,
    			'content'=>$content,
                'comments' =>$comments,
    	];
    	return view('site.content',$data);
    }
}
