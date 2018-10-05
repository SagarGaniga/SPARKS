<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Internships;
use App\Projects;

class UsersController extends Controller
{
    public function updateInternProj($userid){

        $projects = Projects::where('user_id', $userid)->get();
        $internships = Internships::where('user_id', $userid)->get();
        return view('users.updateInternProj')->with(array('projects'=> $projects, 'internships'=> $internships));
    } 
}
