<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class NoauthController extends Controller
{
    public function accessSessionData(Request $request){
    	
  
    		$data = $request->session()->all();
    		echo "<pre>";print_r($data);
    		echo "string";
    		print_r(Auth::guard('organizers')->user());
			print_r(Auth::user());
			// print_r(Auth::guard('users')->user());
    	
    }


}
