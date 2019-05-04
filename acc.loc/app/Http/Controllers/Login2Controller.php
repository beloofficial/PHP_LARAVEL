<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class Login2Controller extends Controller
{
	public function execute(Request $request){
    if($request->isMethod('POST')){
    	$name = "aaa";
    	if(isset($request->company_name)){
    		$name = $request->company_name;
    	}
    		$log = DB::table('acc2')->where('login',$request['login'])->first();
    		if(Session::has('login2') or isset($log)){
    			if(Session::has('login2') or $log->password == $request['password'])
    			{
    				if(!Session::has('login2'))
    					Session::put('login2',$request['login']);
    				$login = Session::get('login2');
    				$company = DB::table('company')->where('accountant',$login)->where('name',$name)->first();
    				if(!isset($company))
    					$company = DB::table('company')->where('accountant',$login)->first();
    				$events = [];
    				
    					if($company->regime == 'general'){//F200 is red
    						$F200 = DB::table('report')->where('name','F200.00')->get();
    						foreach ($F200 as $k1 => $value) {
                                $month = explode('-',$value->start)[1];
                                $day = explode('-',$value->start)[2];
                                $year = date('Y');
                                $start_date = $year."-".$month."-".$day;

                                $month = explode('-',$value->end)[1];
                                $day = explode('-',$value->end)[2];
                                $end_date = $year."-".$month."-".$day;
    							$events[] = \Calendar::event(
    									"F200.00",
    									true,
    									$start_date,
    									$end_date,
    									$k1,
    									[
											'url' => 'http://full-calendar.io',
											'color'=>'red',
											//any other full-calendar supported parameters
										]
    					);
                                $month = explode('-',$value->start)[1];
                                $day = explode('-',$value->start)[2];
                                $year = date('Y')+1;
                                $start_date = $year."-".$month."-".$day;

                                $month = explode('-',$value->end)[1];
                                $day = explode('-',$value->end)[2];
                                $end_date = $year."-".$month."-".$day;
                                $events[] = \Calendar::event(
                                        "F200.00",
                                        true,
                                        $start_date,
                                        $end_date,
                                        $k1,
                                        [
                                            'url' => 'http://full-calendar.io',
                                            'color'=>'red',
                                            //any other full-calendar supported parameters
                                        ]
                        );

    						}


    						$F220 = DB::table('report')->where('name','F220.00')->get();
    						foreach ($F220 as $k1 => $value) {
                                $month = explode('-',$value->start)[1];
                                $day = explode('-',$value->start)[2];
                                $year = date('Y');
                                $start_date = $year."-".$month."-".$day;

                                $month = explode('-',$value->end)[1];
                                $day = explode('-',$value->end)[2];
                                $end_date = $year."-".$month."-".$day;
    							$events[] = \Calendar::event(
    									"F220.00",
    									true,
    									$start_date,
                                        $end_date,
    									$k1,
    									[
											'url' => 'http://full-calendar.io',
											'color'=>'blue',
											//any other full-calendar supported parameters
										]
    					);
                                $month = explode('-',$value->start)[1];
                                $day = explode('-',$value->start)[2];
                                $year = date('Y')+1;
                                $start_date = $year."-".$month."-".$day;

                                $month = explode('-',$value->end)[1];
                                $day = explode('-',$value->end)[2];
                                $end_date = $year."-".$month."-".$day;
                                $events[] = \Calendar::event(
                                        "F220.00",
                                        true,
                                        $start_date,
                                        $end_date,
                                        $k1,
                                        [
                                            'url' => 'http://full-calendar.io',
                                            'color'=>'blue',
                                            //any other full-calendar supported parameters
                                        ]
                        );
    						}
    					}
    					else{//F220 is green
    						$F910 = DB::table('report')->where('name','F910.00')->get();
    						foreach ($F910 as $k2 => $value) {
                                $month = explode('-',$value->start)[1];
                                $day = explode('-',$value->start)[2];
                                $year = date('Y');
                                $start_date = $year."-".$month."-".$day;

                                $month = explode('-',$value->end)[1];
                                $day = explode('-',$value->end)[2];
                                $end_date = $year."-".$month."-".$day;
    							$events[] = \Calendar::event(
    									"F910.00",
    									true,
    									$start_date,
                                        $end_date,
    									$k2,
    									[
											'url' => 'http://full-calendar.io',
											'color'=>'green',
											//any other full-calendar supported parameters
										]
    							);
                                $month = explode('-',$value->start)[1];
                                $day = explode('-',$value->start)[2];
                                $year = date('Y')+1;
                                $start_date = $year."-".$month."-".$day;

                                $month = explode('-',$value->end)[1];
                                $day = explode('-',$value->end)[2];
                                $end_date = $year."-".$month."-".$day;
                                $events[] = \Calendar::event(
                                        "F910.00",
                                        true,
                                        $start_date,
                                        $end_date,
                                        $k2,
                                        [
                                            'url' => 'http://full-calendar.io',
                                            'color'=>'green',
                                            //any other full-calendar supported parameters
                                        ]
                                );
    						}
    					}
    					if($company->nds == 'yes'){
    						$F200 = DB::table('report')->where('name','F200.00')->get();
    						foreach ($F200 as $k2 => $value) {
                                $month = explode('-',$value->start)[1];
                                $day = explode('-',$value->start)[2];
                                $year = date('Y');
                                $start_date = $year."-".$month."-".$day;

                                $month = explode('-',$value->end)[1];
                                $day = explode('-',$value->end)[2];
                                $end_date = $year."-".$month."-".$day;
    							$events[] = \Calendar::event(
    									"F200.00",
    									true,
    									$start_date,
                                        $end_date,
    									$k2,
    									[
											'url' => 'http://full-calendar.io',
											'color'=>'black',
											//any other full-calendar supported parameters
										]
    							);
                                $month = explode('-',$value->start)[1];
                                $day = explode('-',$value->start)[2];
                                $year = date('Y')+1;
                                $start_date = $year."-".$month."-".$day;

                                $month = explode('-',$value->end)[1];
                                $day = explode('-',$value->end)[2];
                                $end_date = $year."-".$month."-".$day;
                                $events[] = \Calendar::event(
                                        "F200.00",
                                        true,
                                        $start_date,
                                        $end_date,
                                        $k2,
                                        [
                                            'url' => 'http://full-calendar.io',
                                            'color'=>'black',
                                            //any other full-calendar supported parameters
                                        ]
                                );
    						}
    					}
    					$calendar = \Calendar::addEvents($events)->setOptions(['Company'=>$name])->setCallbacks([]);
    					$comps = DB::table('company')->where('accountant',$login)->select('name')->get();

    					$data = [
    							'calendar' => $calendar,
    							'company'  => $company,
    							'comp_names' => $comps,
    					];
    					
    					
			
    				
    				return view('acc2',$data);
    			}
    			
    		}
    	}
    	return view('welcome');
    }
}
