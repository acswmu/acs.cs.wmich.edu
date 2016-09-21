<?php

use App\AgendaTopic;

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

Route::get('/', function () {
  return view('home');
});

/*Route::get('/about', function () {
  return view('about');
});*/

Route::get('/members', function () {
  return view('members');
});

Route::get('/projects', function () {
  return view('projects');
});

Route::get('/meetings', function () {
  $agendaTopicsNew = AgendaTopic::where('resolved', false)
    ->where('old_business', false)
    ->orderBy('important', 'desc')
    ->get();

  $agendaTopicsOld = AgendaTopic::where('resolved', false)
    ->where('old_business', true)
    ->orderBy('important', 'desc')
    ->get();

  return view('meetings')
    ->with('agendaTopicsNew', $agendaTopicsNew)
    ->with('agendaTopicsOld', $agendaTopicsOld);
});

Route::get('/schedule', function () {
  return view('schedule');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group([
  'middleware' => 'auth',
  'prefix' => 'manage',
], function() {
  Route::get('/', 'ManageController@index');
  Route::resource('/agenda_topic', 'AgendaTopicController', [
    'only' => [
      'store', 'update', 'destroy', 'edit'
    ],
  ]);
  Route::resource('/user', 'UserController');
});
