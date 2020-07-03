<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\covid_main;
use App\covid_count;
class CovidAddController extends Controller
{
    public static function send_info(Request $request){

    	//dd($request);
    	$name = $request->name;
    	$contact_no = $request->contact_no;
    	$temperature = $request->temperature;

    	$request->validate([
        'contact_no' => 'required|numeric',
        'name' => 'required|',
        'temperature' => 'required|',
        
        

        ],[

       
        'contact_no.required' => 'required phone',

        'contact_no.numeric' => 'phone must be a number',

        'name.required' => 'required name',
        
        'temperature.required' => 'required temperature',
        

          

      ]);

    	$mirr = new covid_main;
    	$mirr->name =  $name;
    	$mirr->phone = $contact_no;
    	$mirr->tempt = $temperature;
    	$mirr->save();

        $temperature = $mirr->tempt;


    	$covid_count = covid_count::find(1);

    	$old_count = $covid_count->count;
    	$new_count = $old_count + 1;
    	
    	//$time = $covid_count->updated_at;
      
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $currtime = date("M j Y g:i A");

    	
    	//dd($currtime);
 

    	covid_count::where('id','1')->update(['count'=>$new_count]);


    	
        return view ('thank-you',['count' => $new_count,'currtime' => $currtime,'temperature' => $temperature]);

    	 



    }
    public static function dashboard(Request $request){
        
        $data = covid_main::orderBy('id','desc')->get();
        return view ('dashboard',['data' => $data]);
    }
}
