<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use \Cart;
use App\Comment;
use DB;
class ProductController extends Controller
{
    //
    public function main(){
        $types = Product::distinct()->get(['types']);
        $total_qty = Cart::getTotalQuantity();
        $products = Product::paginate(4);
        $data = [
                'products'=>$products,
                'types'=>$types,
                'category'=>$category,
                'total_qty' =>$total_qty,
        ];

        return view('welcome',$data);
    }
    public function execude($category = "all"){

    	
    	$types = Product::distinct()->get(['types']);
        $total_qty = Cart::getTotalQuantity();
    	if($category == "all")
    		$products = Product::paginate(4);
    	else 
    		$products = Product::where('types',$category)->paginate(4);
    	$data = [
    			'products'=>$products,
    			'types'=>$types,
    			'category'=>$category,
                'total_qty' =>$total_qty,
    	];

    	return view('welcome',$data);
    }

    public function product($code){
    	$product = Product::where('code',$code)->first();
        if(!isset($product)){
            return redirect()->route('products');
        }
        $total_qty = Cart::getTotalQuantity();
    	$data = [
    			'product'=>$product,
                'total_qty' =>$total_qty,
               
    	];
    	return view('product',$data);

    }
    public function search_get($word){
        $products = Product::get();
        //dd($products);
        $search_products = [];
        foreach ($products as $key => $product) {
            $name = $product->name;
            $text = $product->text;
            if(stripos($name, $word) !== False or stripos($text, $word) !== False){
                array_push($search_products, $product);
            }
        }
        $total_qty = Cart::getTotalQuantity();
        $count = count($search_products);
        $data = [
                'products'=>$search_products,
                'total_qty' =>$total_qty,
                'count' =>$count,
        ];
        return view('searched',$data);
    }
    public function search(Request $request){
        $search = $request->text;
        return redirect()->route('search_get',['word'=>$search]);
        
    }
}
