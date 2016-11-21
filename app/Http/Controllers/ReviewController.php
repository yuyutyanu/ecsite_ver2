<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function add(Request $request){
       $reviews = new \App\Service\ReviewService;
       $user = $request->user();
       $reviews = $reviews->addReview($request->input('product_id'),$user->id,$request->input('text'));

       $item = new \App\Service\DetailService;
       $item = $item->getDetail($request->input('product_id'));
       
       return view('detail',compact('item','reviews'));
    }
}
