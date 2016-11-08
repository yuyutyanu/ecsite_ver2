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
Route::get('/top_getitems','TopgetitemsController@index');
Route::get('/detail','DetailController@index');


Route::get('/sessioncart',function(){
  $items = session()->get("cart",[]);
  return view('cart',compact('items'));
});

Route::get('/addsessioncart',function(Request $request){
    $item =  App\ITEM::where('item_id',$request->get('id'))
              ->first();
    $cart = session()->get("cart",[]);
    $cart[] = $item;
    session()->put("cart",$cart);
    $items = session()->get("cart",[]);
    return view('cart',compact('items'));
});
//Route::resource('/sessioncart','SessioncartController');

Auth::routes();
Route::get('/home', 'HomeController@index');
