<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
class GenresController extends Controller
{
    public function execute(){

    	if(view()->exists('admin.genres')){
    		$genres = Genre::all();
    		$data = [
    					'title' =>"Genre",
    					'genres' => $genres
    				];
    		return view('admin.genres',$data);
    	}
    	abort(404);
    }
}
