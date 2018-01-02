<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchedulePickup extends Model
{
    //

    protected $fillable = ['id', 'first_name', 'last_name', 'email', 'mobile', 'pickup_address', 'dest_address', 'package_weight', 'size_of_package', 'package_items', 'special_items', 'other_items', 'payment_option' ];
}
