<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
class TopController extends Controller
{
    //
    public function execute(){
		if(view()->exists('site.top')){
			$data = [
					'title' => '3 random Anime',
					'anime1' => Content::inRandomOrder()->first(),
					'anime2' => Content::inRandomOrder()->first(),
					'anime3' => Content::inRandomOrder()->first(),

			];

			return view('site.top',$data);
		}    	
    }
}
