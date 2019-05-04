<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use DB;
class MainController extends Controller
{
    public function execute(Request $request){
    	if(view()->exists('site.list')){
    		$contents = DB::table('contents')
                ->orderBy('created_at', 'desc')
                ->get();
            $populars = DB::table('contents')
                ->orderBy('votes', 'desc')
                ->limit(3)
                ->get();
    		$data = [
    				'title'=>'Main Page',
    				'contents' => $contents,
                    'populars' =>$populars,
    		];
    		return view('site.list',$data);
    	}
    }
}
