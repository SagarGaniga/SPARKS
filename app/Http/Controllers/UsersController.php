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

    public function getgithub(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.github.com/users/UjalaJha",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                // Set Here Your Requested Headers
                'Content-Type: application/json',
                'User-Agent: UjalaJha'
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data = json_decode($response);
        }

        return(view('users.temp')->with('data', $data));
    }
}
