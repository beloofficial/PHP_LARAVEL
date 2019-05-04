<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

  

class AjaxController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function ajaxRequest()

    {

        return view('message');

    }

   

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function ajaxRequestPost(Request $request)

    {

        $input = $request->all();
     
        return response()->json(['success'=>'Got Simple Ajax Request.']);

    }

}