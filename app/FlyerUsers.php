<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlyerUsers extends Model
{
    //

    protected $table = 'flyer_users';

    protected $fillable = ['name', 'ip_address', 'coupon_code'];
}
