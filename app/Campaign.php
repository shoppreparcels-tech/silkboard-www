<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    protected $fillable = ['customer_id', 'name', 'comment', 'github_url', 'coupon_code', 'begain_date', 'end_date'];
}