<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\internships;
class EventsController extends Controller
{
    public function registerForEvent(Request $request){
        // return $request;
        
        // Get user id
        $user_id = Auth::id();

        // Get internship details of all internship done by participant
        $internship_details = "";

        $internships = internships::where("user_id", "=", $user_id)->get();
        
        // return $internships;
        
        foreach($internships as $intern){
            $internship_details = $internship_details." ".$intern->Description;
        }
        return $internship_details;


    }
}
