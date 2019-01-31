<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    protected $casts = [
        "is_default" => "boolean",
    ];

    public function country(){
        return $this->belongsTo('App\Country','country_id');
    }

    public static function fetch($customer_id) {
        return Address::where('customer_id', $customer_id)
            ->select(
                'id', 'customer_id', 'first_name', 'last_name', 'salutation', 'line1', 'line2',
                'state', 'city', 'country_id', 'pincode', 'country_code', 'phone', 'is_default'
            )
            ->with(array('country' => function ($query) {
                $query->select('id', 'name');
            }))
            ->get();
    }
}
