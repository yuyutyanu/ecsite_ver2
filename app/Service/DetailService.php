<?php

namespace App\Service;

use App\ITEM;

class DetailService{
  public function getDetail($item_id){
    $detail = ITEM::where('item_id',$item_id)
                      ->first();
    return $detail;
  }
}
