<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use \App\PRODUCT;

class ToppageController extends BaseController
{
    public function index(){
      $items = PRODUCT::all();
      return view('top',compact('items'));
    }
}
