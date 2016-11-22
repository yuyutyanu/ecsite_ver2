<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

use App\PRODUCT;
use App\User;

class CART extends Model
{
    protected $table = 'CART';

    public function cartUsers(){
        return $this->hasMany('App\User', 'id', 'user_id');
    }
    public function cartProduct(){
        return $this->hasMany('App\PRODUCT', 'product_id', 'product_id');
    }
}
