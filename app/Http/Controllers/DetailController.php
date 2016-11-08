<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use App\ITEM;

class DetailController extends BaseController
{
    public function index(Request $request){
      $item = ITEM::where('item_id',$request->get('id'))
                        ->get();
      $item = $item[0];
      return view('detail',compact('item'));
    }
}
