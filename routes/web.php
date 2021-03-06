<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/theme', function () {
    return view('theme');
});
Route::get('/session', 'NoauthController@accessSessionData');


// Route::get('/user/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/userHome', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');
Route::get('/userlinkedin', 'HomeController@linkedin');
Route::get('/authlink', 'HomeController@authlink');
Route::get('/user/home/2', 'HomeController@index');

Route::get('/logoutuser','Auth\LoginController@logout');

Route::get('/getgithub', 'UsersController@getgithub');

Route::get('/updateprojintern/{userid}', 'UsersController@updateInternProj');

Route::get('/ranking/{event_id}', 'EventsController@ranking');

Route::group( [ 'prefix' => '/organizers'], function()
{
	Route::get('/', 'OrganizersController@index');
	Route::get('/login','OrganizersAuth\LoginController@showLoginForm');
	Route::post('/login','OrganizersAuth\LoginController@organizersLogin');
	Route::get('/logout','OrganizersAuth\LoginController@logout');

	// Registration Routes...
	Route::get('/register', 'OrganizersAuth\RegisterController@showRegistrationForm');
	Route::post('/register', 'OrganizersAuth\RegisterController@register');

});

Route::resource('events','EventsController');

Route::post('/eventRegister', 'EventsController@registerForEvent');
Route::get('/participation','EventsController@participation');

Route::get('/organizerHome', 'OrganizerController@index');



Route::get('/events/{id}/participants','OrganizerController@viewParticipants');
