<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchedulePickup extends Model
{
    //

    protected $fillable = ['id', 'first_name', 'last_name', 'email_id', 'phone_code', 'mobile', 'pickup_address', 'dest_address', 'no_of_packages', 'package_weight', 'size_of_package', 'package_items', 'special_items', 'other_items', 'payment_option', 'pc_fname', 'pc_lname', 'pc_street', 'pc_pincode', 'pc_city', 'pc_state', 'pc_contact_no' , 'dc_fname', 'dc_lname', 'dc_street', 'dc_state', 'dc_city', 'dc_country', 'dc_pincode', 'dc_phone_code', 'dc_contact_no'];
}

