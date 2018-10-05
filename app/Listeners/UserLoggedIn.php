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
        

        if(!empty(Auth::guard('user')))
        {
            Session::set('configuration', NULL);
            app('request')->session()->regenerate(true);
            Session::put('message', "Im User"); 
            app('request')->session()->put('user_id', Auth::guard('user')->user()->id);
            app('request')->session()->put('email_id', Auth::guard('user')->user()->email);
            app('request')->session()->put('user_name', Auth::guard('user')->user()->name);
        }
        elseif(!empty(Auth::guard('organizers')))
        {

            Session::put('message', "Im organizers"); 
            app('request')->session()->put('user_id', Auth::guard('organizers')->user()->id);
            app('request')->session()->put('email_id', Auth::guard('organizers')->user()->email);
            app('request')->session()->put('user_name', Auth::guard('organizers')->user()->name);
            // $result = app('App\Http\Controllers\Admin\PriviledgeController')->getByUsername();
            // app('request')->session()->put('success', $result); 
        }
        
        
    }
}