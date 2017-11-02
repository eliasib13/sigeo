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

Route::get('login', 'Login\LoginController@index');
Route::post('doLogin', 'Login\LoginController@doLogin');
Route::get('doLogout', 'Login\LoginController@doLogout');

Route::group(['middleware' => 'auth'], function() {

	Route::get('dashboard', 'Dashboard\DashboardController@index');

	Route::get('results', 'Results\ResultsController@index');

	Route::group(['prefix' => 'room', 'namespace' => 'Room'], function() {

		Route::get('details/{id}', 'RoomDetailsController@index');
		Route::get('new', 'RoomNewController@index');
		Route::get('access/{id}', 'RoomAccessController@index');

		Route::post('new', 'RoomNewController@save');
		Route::post('edit/{id}', 'RoomDetailsController@save');
	});

	Route::group(['prefix' => 'exam'], function() {

		Route::get('details/{id}', 'Exam\ExamDetailsController@index');
		Route::get('new', 'Exam\ExamNewController@index');

		Route::post('new', 'Exam\ExamNewController@save');
		Route::post('edit/{id}', 'Exam\ExamDetailsController@save');

		Route::group(['prefix' => 'details/{examId}/question'], function() {

			Route::get('details/{questionId}', 'Question\QuestionDetailsController@index');
			Route::get('new', 'Question\QuestionNewController@index');

		});

	});

	Route::get('attempt/{attemptId}/{examId}/{questionId}', 'Attempt\AttemptController@index');

});

