<?php

namespace App\Service;
use App\PRODUCT;

class SessioncartService{

  public function addItem($item_id){
  $insert_item =  PRODUCT::where('product_id',$item_id)->first();
  $current_cart = session()->get("cart",[]);
  /**
  * 選択した商品がすでにカートに入っているかの確認
  **/
  foreach ($current_cart as $cart)
  {
     if($insert_item->product_id == $cart->product_id)
     {
         $items = session()->get("cart",[]);
         return $items;
     }
   }
         $current_cart[] = $insert_item;
         session()->put("cart",$current_cart);
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
}
