<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\internships;
use App\internshipSkills;
use App\Skills;
use App\events;
use App\projects;
use App\projectSkills;
use App\EventDomain;
use App\Domain;
class EventsController extends Controller
{
    public function registerForEvent(Request $request){
        // return $request;
        
        // Get user id
        $user_id = Auth::id();

        // Get internship details of all internship done by participant
        $internship_details = "";

        // Internship Skills
        $internship_skills = array();

        $internships = internships::where("user_id", "=", $user_id)->get();
        
        foreach($internships as $intern){
            $internship_details = $internship_details." ".$intern->Description;
            $internship_id = $intern->id;
            $skills = internshipSkills::where("internship_id", "=", $internship_id)->get();
            // return $skills;
            foreach($skills  as $skill){
                // return $skill;
                $s = Skills::where("id", "=", $skill->skill_id)->first();
                // $internship_skills.push($skill);
                // return $s;
                
                array_push($internship_skills, $s->name);
            }
        }

        // project_description
        $project_details = "";
        $projects = projects::where("user_id", "=", $user_id)->get();

        // project_skills
        $project_skills = array();

        foreach($projects as $proj){
            $project_details = $project_details." ".$proj->details;
            $project_id = $proj->id;
            $skills = projectSkills::where("project_id", "=", $project_id)->get();
            // return $skills;
            foreach($skills  as $skill){
                // return $skill;
                $s = Skills::where("id", "=", $skill->skill_id)->first();
                // $internship_skills.push($skill);
                // return $s;
                
                array_push($project_skills, $s->name);
            }
        }

        // Event related skills
        $event_id = $request->event_id;

        $event_domain = EventDomain::where("event_id", "=", $event_id)->first();

        $event_skills_get = Skills::where("domain_id", "=", $event_domain)->get();

        return $event_skills_get;



    }


    public function getScore($skills){

        // Complete this

    }
}
