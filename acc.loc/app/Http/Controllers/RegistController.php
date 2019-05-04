<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class RegistController extends Controller
{
    public function execute(Request $request){
    	DB::table('request')->insert
    	(
   			['name' => $request->name, 'mail' => $request->mail,'phone'=>$request->phone]
		);
		
		return view('welcome');
    }
}
