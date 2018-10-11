<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LinkedIn;
use App\Events;
use App\User;
use Session;
use App\event_registration;
class OrganizerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('users');
        $this->middleware('preventBackHistory');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $events = Events::where('organizer_id','=',session('id'))->get();
        return view("organizersHome")->with("events", $events);
        // return view('home');
    }

    public function profile()
    {
        $user=User::where('id',Session::get('id'))->get();
        // print_r($user);
        // exit;
        return view('profile')->with('user',$user);
    }
    public function linkedin()
    {
        // echo "string";
        // $events = Events::all();
        $user=[];
        return view("linkedin")->with('user',$user);
        // return view('home');
    }

    public function authlink()
    {
        if (LinkedIn::isAuthenticated()) {
             //we know that the user is authenticated now. Start query the API

             $user=LinkedIn::get('v1/people/~:(id,firstName,headline,current-share,public-profile-url,num-connections,picture-url,summary,specialties,positions,location,industry)');
             echo "<pre>";
             // return view("linkedin")->with('user',$user);
             print_r($user);
             exit();
        }elseif (LinkedIn::hasError()) {
             echo  "User canceled the login.";
             exit();
        }

        //if not authenticated
        $url = LinkedIn::getLoginUrl();
        echo "<div class='container'><a href='$url'>Login with LinkedIn</a></div>";
        exit();
    }



    public function viewParticipants($id)
    {

        $participants = event_registration::where("event_id", "=", $id)->orderBy("score", "DESC")->get();
        $users = User::all();


        // $parti = $participants->map(function($participants){
        //     $user_name = User::where('id',$participants->user_id)->pluck('name');
        //     return collect($participants)->merge($user_name);
        // });
        
        
        return $parti;

        return view('organizers.event')->with('participants',$participants)->with('users',$users);
    }

}
