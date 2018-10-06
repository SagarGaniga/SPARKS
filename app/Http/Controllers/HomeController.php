<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LinkedIn;
use App\Events;
use App\User;
use Session;

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
             // echo "<pre>";
             $send=[];
             $send['name']=$user['firstName'];
             $send['connections']=$user['numConnections'];
             $send['location']=$user['location']['name'];
             $send['positions']=$user['positions'];
             $send['summary']=$user['summary'];

             return view("linkedin")->with('user',$send);
             // print_r($send);
             // exit();
        } elseif (LinkedIn::hasError()) {
             echo  "User canceled the login.";
             exit();
        }else
        {
            $url = LinkedIn::getLoginUrl();
            return redirect($url);
        }
       

        //if not authenticated
        // $url = LinkedIn::getLoginUrl();
        // echo "<div class='container'><a href='$url'><button type='primary'>Login with LinkedIn</a></button></div>";
        // exit();
    }
}
