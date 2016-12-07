<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;


use \App\PRODUCT;
use Auth;

class ToppageController extends BaseController
{
    public function index(Request $request){
      /****
      *   ログイン時のsession情報の引き継ぎ
      ****/
      if (Auth::check()) {
        if (!empty(session()->get("cart",[])))
        {
          $products = session()->get("cart",[]);
          $user = $request->user();
          $cart = new \App\Service\AuthcartService;
          $cart->sessionTakeover($user->id,$products);
        }
      }

      $items = PRODUCT::all();
      return view('top',compact('items'));
    }
}
