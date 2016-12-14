<?php

namespace App\Service;

use App\REVIEW;
use DB;
use Carbon\Carbon;

class ReviewService{

  public function getReview($product_id)
  {
    $reviews = REVIEW::with('reviewProduct')
    ->with('reviewUsers')
    ->where('product_id',$product_id)
    ->get();

    return $reviews;
  }

  public function addReview($product_id,$user_id,$star,$text){

        $edit_review = REVIEW::where('user_id',$user_id)
        ->where('product_id',$product_id)
        ->first();
        /*
        * すでにその商品のレビューを書いていた場合は編集、書いてない場合は追加
        */
          if(!empty($edit_review))
          {
            REVIEW::where('product_id', $edit_review->product_id)
            ->where('user_id', $edit_review->user_id)
            ->update(['review' => $star,'review_text' => $text,'entry_time' => Carbon::now()]);
          }
          else{
            DB::table('REVIEWS')->insert(
              [ 'product_id'=>$product_id,
                'user_id' => $user_id,
                'review' => $star,
                'review_text' => $text,
                'entry_time' =>Carbon::now()
              ]
            );
          }
    
        return  $this->getReview($product_id);
  }
}
