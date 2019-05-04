<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CompanyController extends Controller
{
    public function execute(Request $request, $company){
    	if($request->isMethod('post')){
            $ch = DB::table('company')->where('name',$company)->first();
            if(isset($ch))
            {
                $reqs = DB::table('request')->where('check','false')->get();
                $data = [
                        'reqs'=> $reqs, 
                        ];

                return view('acc1',$data);
            }
    		DB::table('company')->insert([
    			'name'=>$company,
    			'criterion' => $request['criterion'],
    			'regime' => $request['regime'],
    			'nds' => $request['nds'],
    			'withdraw' => $request['withdraw'],
                'activity' => $request['activity'],
                'name_company'=>$request['name_company'],
    			'BIN' => $request['BIN'],
    			'address' => $request['address'],
    			'contacts' => $request['contacts'],
    			'head' => $request['head'],
    			'accountant'=>$request['accountant'],
    		]);
    		DB::table('request')->where('name',$company)->update(['check'=>'true']);
    		$reqs = DB::table('request')->where('check','false')->get();
    		$data = [
    					'reqs'=> $reqs, 
    		];

    		return view('acc1',$data);
    	}
    	$accs = DB::table('acc2')->select('login')->get();
    	$data = [
    		'company' =>$company,
    		'accs' =>$accs
    	];
    	return view('registrate_company',$data);
    }
}
