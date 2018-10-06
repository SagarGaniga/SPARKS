<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\internships;
use App\internshipSkills;
use App\Skills;
class EventsController extends Controller
{
    public function registerForEvent(Request $request){
        // return $request;
        
        // Get user id
        $user_id = Auth::id();

        // Get internship details of all internship done by participant
        $internship_details = "";

        $internship_skills = array();

        $internships = internships::where("user_id", "=", $user_id)->get();
        
        foreach($internships as $intern){
            $internship_details = $internship_details." ".$intern->Description;
            $internship_id = $intern->id;
            $skills = internshipSkills::where("internship_id", "=", $internship_id)->get();
            // return $skills;
            foreach($skills  as $skill){
                // return $skill;
                $s = Skills::where("id", "=", $skill->skill_id)->get();
                // $internship_skills.push($skill);
                array_push($internship_skills, $s->name);
            }
        }

        return $internship_skills;
        


    }
}
