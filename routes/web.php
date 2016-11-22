<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Http\Request;


Route::get('/','ToppageController@index');
Route::get('/detail','DetailController@index');
Route::get('/addreview','ReviewController@add');

/*
  ログインカート
*/
Route::get('/authcart','AuthcartController@index');
Route::get('/addauthcart','AuthcartController@add');
Route::get('/deleteauthcart','AuthcartController@delete');

/*
  sessionカート
*/
Route::get('/sessioncart','SessioncartController@index');
Route::get('/addsessioncart','SessioncartController@add');
Route::get('/delsessioncart','SessioncartController@delete');

Auth::routes();
Route::get('/home', 'HomeController@index');
