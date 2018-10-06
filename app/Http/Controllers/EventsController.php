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
use App\Event_Domain;
use App\Domain;
use App\event_registration;
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
            $internship_details = $internship_details.", ".$intern->Description;
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
            $project_details = $project_details.", ".$proj->details;
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
        $event_skill = array();

        $event_id = $request->event_id;

        $event_domain = Event_Domain::where("event_id", "=", $event_id)->first();

        $event_skills_get = Skills::where("domain_id", "=", $event_domain->event_domain)->get();

        foreach($event_skills_get as $event_skills){
            array_push($event_skill, $event_skills->name);   
        }

        $specific_skills = $request->skills;
        
        $specific_skills =  explode(",", $specific_skills);
        


        $skills = array([
            "specific_skills" => $specific_skills,
            "project_description" => explode(",", $project_details),
            "project_skills" => $project_skills,
            "internship_skills" => $internship_skills,
            "internship_description" => explode(",", $internship_details),
            "event_id" => $event_id,
            "event_skills" => $event_skill
        ]);

        $score = $this->getScore($skills[0]);
        // return $score;

        $obj = new event_registration();
        $obj->user_id = $user_id;
        $obj->event_id = $event_id;
        $obj->score = $score;
        $obj->save();
        
        return redirect("userHome");


    }


    public function getScore($skills){
        // print_r($skills);

        // Complete this
        $skill_set_temp = $skills["event_skills"];
        $skill_set  = array();
        foreach($skill_set_temp as $gg){
            array_push($skill_set, trim($gg));
        }
        // return ($skill_set);
        $total_score = 0;

        //  call for specific_skills
        // return $skills["specific_skills"];
        // return $skill_set;
        $gg = $this->utility($skills["specific_skills"], $skill_set);
        $total_score = $total_score + $gg;
        

        // // call for project_description
        $gg = $this->utility($skills["project_description"], $skill_set);
        $total_score = $total_score + $gg;
        
        // // call for project_skills
        $gg = $this->utility($skills["project_skills"], $skill_set);
        $total_score = $total_score + $gg;
        
        // // # call for internship_skills
        $total_score = $total_score + $this->utility($skills["internship_skills"], $skill_set);

        // // call for internship_description
        $total_score = $total_score + $this->utility($skills["internship_description"], $skill_set);
        
        
        return ($total_score/15)*100;
        
    }


    public function utility($user_skills_temp, $required_skill_set){

        $user_skills  = array();
        foreach($user_skills_temp as $gg){
            array_push($user_skills, trim($gg));
        }
                
        // return $user_skills;
        $score = 0;
        foreach($required_skill_set as $skill){
            if(in_array(trim($skill), $user_skills)){
                $score = $score+1;

            }
            // echo "\n";
            // echo "<pre>";
            // print_r($skill);

            // print_r($user_skills);
            // // print()
            // echo "\n";
                
        }   
        
        if($score >= 2)
            return 3;
        else
            return 1;
    }
}
