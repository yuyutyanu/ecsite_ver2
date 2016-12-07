<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;


class DetailController extends BaseController
{
    public function index(Request $request){

      $item = new \App\Service\DetailService;
      $reviews = new \App\Service\ReviewService;

      $item = $item->getDetail($request->get("id"));
      $reviews = $reviews->getReview($request->get("id"));

      return view('detail',compact('item','reviews'));
    }
}
