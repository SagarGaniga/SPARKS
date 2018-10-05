<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
