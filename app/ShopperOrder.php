<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopperOrder extends Model
{
    public function requests(){
    	return $this->hasMany('App\ShopperRequest','order_id');
   	}

   	public function customer(){
      return $this->hasOne('App\Customer', 'id','customer_id');
    }
}
