<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DirectPayment extends Model
{
    //
    protected $fillable = ['name', 'amount', 'comment', 'payment_status','email','mobile'];
}
