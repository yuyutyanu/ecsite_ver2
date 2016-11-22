<?php

namespace App\Service;
use App\PRODUCT;
use App\CART;

use DB;

class AuthcartService{

  public function addItem($user_id,$product_id,$number){
    DB::table('CART')->insert(
      [ 'user_id'=> $user_id,
        'product_id' => $product_id,
        'product_cart_number'=>$number
      ]
    );

    $items = CART::with('cartProduct')
    ->with('cartUsers')
    ->where('user_id',$user_id)
    ->get();

    return $items;
  }

  public function getSum(){
  }

  public function getItems(){
  }

  public function deleteItem($index){
  }

  public function changeQuantity($index){
  }

  public function allDelete(){
  }

}
