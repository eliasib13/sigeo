<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');
//
//Route::get('hello/{name?}', function($name = 'World'){
//	return 'Hello ' . $name . '!';
//});

Route::get('login', 'Login\LoginController@index');

Route::get('dashboard', 'Dashboard\DashboardController@index');

Route::get('room/{id}', 'Room\RoomDetailsController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
