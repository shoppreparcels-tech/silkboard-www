<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipRequest extends Model
{
    protected $fillable = [
        'order_id', 'customer_id', 'full_name', 'address', 'phone', 'country', 'payment_gateway_name', 'package_ids',
        'count', 'weight', 'value', 'sub_total', 'discount', 'package_level_charges', 'estimated', 'wallet', 'coupon',
        'loyalty', 'payment_gateway_fee', 'final_amount', 'courier_charge', 'payment_status', 'shipping_status',
        'admin_info', 'admin_read', 'is_axis_banned_item'
    ];

    public function option(){
    	return $this->hasOne('App\ShipOption','ship_request_id');
   	}

   	public function tracking(){
    	return $this->hasOne('App\ShipTracking','ship_request_id');
   	}

   	public function location(){
    	return $this->hasOne('App\Country', 'id','country');
   	}

   	public function customer(){
    	return $this->hasOne('App\Customer', 'id','customer_id');
   	}

    public function mails(){
      return $this->hasMany('App\ShipMail','ship_request_id');
    }
}
