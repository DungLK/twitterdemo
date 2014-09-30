<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Basic get router
Route::get('/', array('uses' => 'HomeController@getIndex',
    'as' => 'home'));

Route::get('login', array('uses' => 'AuthController@getLogin',
'as' => 'auth.getLogin'));

Route::post('login', array('uses' => 'AuthController@postLogin',
'as' => 'auth.postLogin'));

Route::get('signup', array('uses' => 'AuthController@getSignup',
    'as' => 'auth.getSignup'));

Route::get("abc/{id?}",function($id=null){
 if($id !=null){
 	return "Hello Laravel";
 }else {
 	return "hello hacker";
 }
})->where("id","[0-9]+");

//Demo router
Route::get("demo","DemoController@index");

Route::get("demo/content/{id}",array("uses"=>"DemoController@getContent",
  "as"=>"content"));
