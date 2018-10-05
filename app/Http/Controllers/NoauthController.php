<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoauthController extends Controller
{
    public function accessSessionData(Request $request){
    	if($request->session()->has('id'))
    	{
  
    		$data = $request->session()->all();
    		echo "<pre>";print_r($data);exit();
    		
			
    	}	
      	else
      		echo 'No data in the session';
    }


}
