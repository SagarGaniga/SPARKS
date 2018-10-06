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
// use App\events;
use Redirect;
use App\domains;
use db;
use App\eventdomains;
use App\Organizers;
use session;
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

    public function ranking($id){
        $participants = event_registration::where("event_id", "=", $id)->orderBy("score", "DESC")->get();
        return $participants;

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
    public function index()
    {
        return Redirect::to('/userHome');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $domains = domains::all();
        return view('events.create')->with('domains',$domains);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     

       
        
        $this->validate($request,[
             
            'name'=>'required',   
            'description'=>'required',
            'domainselect'=>'required',
            'cover_image'=> 'image|nullable|max:1999'  
            ]);
            
    
         
           if($request->hasFile('cover_image'))
           {
              $fileNameWithExt =$request->file('cover_image')->getClientOriginalName();
              $filename= pathinfo($fileNameWithExt, PATHINFO_FILENAME);
              $extension=$request->file('cover_image')->getClientOriginalExtension();
              $fileNameToStore=$filename.'_'.time().'.'.$extension;
             $path=$request->file('cover_image')->storeAs('public/event_images',$fileNameToStore);
             
           }
           else
           {
             $fileNameToStore = 'noimage.jpg';
           }
    
            
            $event=new events;
            
            $event->name = $request->input('name'); 
            $event->description = $request->input('description');
            
            $event->organizer_id = session('id');
            
            $event->event_image=$fileNameToStore;
            
            $event->save();
            
            foreach($request->input('domainselect') as $domain){
                {   $domain_id = domains::get()->where('name', '=', $domain)->pluck('id');
                    $eventdomain=new eventdomains;
                    $eventdomain->event_id = $event->id;
                    $eventdomain->event_domain = $domain_id[0];
                    $eventdomain->save();
                }
            }
            return redirect('/events')->with('success','Event created successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event= events::find($id);
        $organizer_name = Organizers::get()->where('id','=',$event->organizer_id)->pluck('name');
        $organizer_id = session('id');
       
        // $eventdomains = eventdomains::get()-


        return view('events.show')->with('event',$event)->with('organizer_name',$organizer_name)->with('organizer_id',$organizer_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $event= events::find($id);
        $domains = domains::all();
        $eventdomains = eventdomains::where('event_id','=',$event->id)->pluck('event_domain');
        
        if(session('id') !== $event->organizer_id)
        {  
            return redirect('/events')->with('error','Unauthorized Page');
        }
        
        return view('events.edit')->with('event',$event)->with('domains',$domains)->with('eventdomains',$eventdomains);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { $this->validate($request,[
             
        'name'=>'required',   
        'description'=>'required',
        'domainselect'=>'required',
        'cover_image'=> 'image|nullable|max:1999'  
        ]);
        

     
       if($request->hasFile('cover_image'))
       {
          $fileNameWithExt =$request->file('cover_image')->getClientOriginalName();
          $filename= pathinfo($fileNameWithExt, PATHINFO_FILENAME);
          $extension=$request->file('cover_image')->getClientOriginalExtension();
          $fileNameToStore=$filename.'_'.time().'.'.$extension;
         $path=$request->file('cover_image')->storeAs('public/event_images',$fileNameToStore);
         
       }
      
          
            $event=events::find($id);


            $event->name = $request->input('name'); 
            $event->description = $request->input('description');
            $event->organizer_id = session('id');
            
            if($request->hasFile('cover_image'))
            {  Storage::delete('public/event_images/' . $event->event_image);
              $event->event_image=$fileNameToStore;
            }
            
            $event->save();
    

            foreach($request->input('domainselect') as $domain){
                {   
                    if(eventdomains::find($domain->id)){
                    $domain_id = domains::get()->where('name', '=', $domain)->pluck('id');
                    $eventdomain=eventdomains::find($domain->id);
                    $eventdomain->event_id = $event->id;
                    $eventdomain->event_domain = $domain_id[0];
                    $eventdomain->save();
                    }
                    else{
                    $domain_id = domains::get()->where('name', '=', $domain)->pluck('id');
                    $eventdomain=new eventdomains;
                    $eventdomain->event_id = $event->id;
                    $eventdomain->event_domain = $domain_id[0];
                    $eventdomain->save();
                    }
                }
            }


            return redirect('/events')->with('success','Event Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function participation(){
        return view('events.participation');
    }
}
