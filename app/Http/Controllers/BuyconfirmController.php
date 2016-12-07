<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Service\AuthcartService;

class BuyconfirmController extends BaseController
{
    public function index(Request $request){

      $user = $request->user();
      $cart = new AuthcartService;
      $products = $cart->getItems($user->id);

      return view('buyconfirm',compact('user','products'));
    }
}
