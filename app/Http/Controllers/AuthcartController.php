<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthcartController extends Controller
{
      public function index(Request $request)
      {
        $user = $request->user();
        $cart = new \App\Service\AuthcartService;
        $items = $cart->getItems($user->id);
        $sum = $cart->getSum($user->id);

        return view('authcart',compact('items','sum'));
      }

      public function add(Request $request)
      {
        $user = $request->user();
        $cart = new \App\Service\AuthcartService;
        $items = $cart->addItem($user->id,$request->get('product_id'),$request->get('number'));
        $sum = $cart->getSum($user->id);

        return view('authcart',compact('items','sum'));
      }

      public function delete(Request $request)
      {
          $user = $request->user();
          $cart = new \App\Service\AuthcartService;
          $items = $cart->deleteItem($user->id,$request->get('product_id'));
          $sum = $cart->getSum($user->id);

          return view('authcart',compact('items','sum'));
      }
}
