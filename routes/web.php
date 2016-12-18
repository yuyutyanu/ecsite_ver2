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
Route::get('/detail','DetailController@index'); //商品詳細ページ
Route::post('/addreview','ReviewController@add'); //レビュー追加
/*
  Authカート
*/
Route::get('/authcart','AuthcartController@index');
Route::post('/addauthcart','AuthcartController@add');
Route::post('/delauthcart','AuthcartController@delete');

/*
  sessionカート
*/
Route::get('/sessioncart','SessioncartController@index');
Route::post('/addsessioncart','SessioncartController@add');
Route::post('/delsessioncart','SessioncartController@delete');

/*
  購入ページ
*/
Route::post('/buyconfirm','BuyconfirmController@index');
Route::post('/buycomplite','BuycompliteController@index');

Auth::routes();
Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
