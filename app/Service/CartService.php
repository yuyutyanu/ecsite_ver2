<?php

namespace App\Service;
use App\ITEM;

class CartService{

  public function addCart($product_id){
    $item =  ITEM::where('item_id',$product_id)
              ->first();
    $cart = session()->get("cart",[]);
    $cart[] = $item;
    session()->put("cart",$cart);
    $items = session()->get("cart",[]);

    return $items;
  }

  public function getSum(){
    $items = session()->get("cart",[]);
    $sum = 0;
    foreach ($items as $item) {
      $sum += $item->price;
    }
    return $sum;
  }

  public function getItems(){
    $items = session()->get("cart",[]);

    return $items;
  }

  public function deleteItem($index){
    session()->forget("cart.$index");
    $items = session()->get("cart",[]);
    return $items;
  }

  public function allDelete(){
    session()->flush();
  }
}
