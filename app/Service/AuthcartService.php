<?php

namespace App\Service;
use App\PRODUCT;
use App\CART;

use DB;

class AuthcartService{

  public function addItem($user_id,$product_id){

  $already = CART::where('user_id',$user_id)
  ->where('product_id',$product_id)
  ->first();

  if (empty($already)) {
    DB::table('CART')->insert(
      [ 'user_id'=> $user_id,
      'product_id' => $product_id,
      'product_cart_number'=>1
    ]
  );
  }

  $items = $this->getItems($user_id);

  return $items;
  }

  public function getItems($user_id){
    $items = CART::with('cartProduct')
    ->with('cartUsers')
    ->where('user_id',$user_id)
    ->get();

    return $items;
  }

  public function deleteItem($user_id,$product_id){
     CART::where('user_id',$user_id)
    ->Where('product_id', $product_id)
    ->delete();

    $items = $this->getItems($user_id);
    return $items;
  }

  public function getSum($user_id)
  {
   $sum = 0;
   $products = $this->getItems($user_id);

   foreach ($products as $product){
     $sum += $product->cartProduct[0]->price;
   }

   return $sum;
  }

  public function sessionTakeover($user_id,$products)
  {
    foreach ($products as $product)
    {
      $product_id = $product->product_id;
      $number = $product->product_cart_number;
      $this->addItem($user_id,$product_id,$number);
    }

    for($i = 0;$i < count($products);$i++){ session()->forget("cart.$i"); }
  }
}
