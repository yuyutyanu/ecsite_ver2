<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthcartController extends Controller
{
      public function index()
      {
        return view('cart',compact('items','sum'));
      }

      public function add(Request $request)
      {
        $user = $request->user();
        $cart = new \App\Service\AuthcartService;
        $items = $cart->addItem($user->id,$request->get('id'),$request->get('number'));

        $sum=100;
        return view('authcart',compact('items','sum'));
      }

      public function delete(Request $request)
      {
        return view('authcart',compact('items','sum'));
      }
}
