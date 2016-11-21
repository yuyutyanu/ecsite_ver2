<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

use App\ITEM;
use App\User;

class REVIEW extends Model
{
    protected $table = 'REVIEWS';

    public function reviewProduct(){
        return $this->hasMany('App\ITEM', 'item_id','product_id');
    }
    public function reviewUsers(){
        return $this->hasMany('App\User', 'id', 'user_id');
    }
}
