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

Route::get('room/details/{id}', 'Room\RoomDetailsController@index');
Route::get('room/new', 'Room\RoomNewController@index');
Route::get('room/access/{id}', 'Room\RoomAccessController@index');

Route::get('exam/details/{id}', 'Exam\ExamDetailsController@index');
Route::get('exam/new', 'Exam\ExamNewController@index');

Route::get('exam/details/{examId}/question/details/{questionId}', 'Question\QuestionDetailsController@index');
Route::get('exam/details/{examId}/question/new', 'Question\QuestionNewController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
