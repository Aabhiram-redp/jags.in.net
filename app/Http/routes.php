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

  Route::get('/',['uses'=>'HomeController@index','as'=>'home']);
  Route::get('/contact',['uses'=>'HomeController@contact','as'=>'contact']);
  Route::get('/about',['uses'=>'HomeController@about','as'=>'about']);
  Route::post('/post_contact','HomeController@post_contact');

  Route::get('team','EmployeeController@index');
  Route::get('team/{name}/profile/',[
    'as'         => 'profile',
    'uses'       => 'EmployeeController@profile'
  ]);
