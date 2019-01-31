<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopperOrderSelf extends Model
{
    protected $table = 'shopper_orders_self';

    public function requests(){
    	return $this->hasMany('App\ShopperRequestSelf','order_id');
   	}

   	public function customer(){
      return $this->hasOne('App\Customer', 'id','customer_id');
    }
}
