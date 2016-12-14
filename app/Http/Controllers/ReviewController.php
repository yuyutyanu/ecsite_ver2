<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewPost;

class ReviewController extends Controller
{
    public function add(ReviewPost $request)
    {
       $reviews = new \App\Service\ReviewService;
       $user = $request->user();
       $reviews = $reviews->addReview($request->get('product_id'),$user->id,(int)$request->get('star'),$request->get('text'));

       $item = new \App\Service\DetailService;
       $item = $item->getDetail($request->input('product_id'));

       return view('detail',compact('item','reviews'));
    }

}
