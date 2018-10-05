<?php

namespace App\Listeners;

// use App\Listeners\Request;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Auth\Events\Login;
use Auth;
use Session;
use App\Http\Controllers\Admin\PriviledgeController;

class UserLoggedIn
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */

    //TO Create Session Variable on Login Event
    public function handle(Login $event)
    {
        // Session::put('id', Auth::user()->id);
        Session::put('message', "Hello"); 

        app('request')->session()->put('id', Auth::user()->id);
        app('request')->session()->put('name', Auth::user()->name);
        app('request')->session()->put('email', Auth::user()->email);
            
        
        
    }
}