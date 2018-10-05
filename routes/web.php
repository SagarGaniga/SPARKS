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
    return view('welcome');
});
Route::get('/theme', function () {
    return view('theme');
});

Auth::routes();
// Route::get('/user/home', 'HomeController@index')->name('home');
Route::get('/userHome', 'HomeController@index')->name('home');
Route::get('/session', 'NoauthController@accessSessionData');
Route::get('/logoutuser','Auth\LoginController@logout');

Route::group( [ 'prefix' => '/organizers'], function()
{
	Route::get('/', 'OrganizersController@index');
	Route::get('/login','OrganizersAuth\LoginController@showLoginForm');
	Route::post('/login','OrganizersAuth\LoginController@login');
	Route::get('/logout','OrganizersAuth\LoginController@logout');

	// Registration Routes...
	Route::get('/register', 'OrganizersAuth\RegisterController@showRegistrationForm');
	Route::post('/register', 'OrganizersAuth\RegisterController@register');



});