<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LinkedIn;
use App\Events;
class HomeController extends Controller
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
        // echo "string";
        $events = Events::all();
        return view("home")->with("events", $events);
        // return view('home');
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
        echo "<a href='$url'>Login with LinkedIn</a>";
        exit();
    }
}
