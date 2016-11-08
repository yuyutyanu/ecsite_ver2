<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Response;
use App\ITEM;

class TopgetitemsController extends BaseController
{
    public function index(){
      $items = ITEM::all();
      return response()->json($items);
    }
}
