<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function items(){
    	return $this->hasMany('App\PackageItem','packid');
   	}

   	public function photoRequests(){
    	return $this->hasMany('App\PhotoRequest','packid');
   	}

   	public function photos(){
    	return $this->hasMany('App\PackagePhoto','packid');
   	}

   	public function charges(){
    	return $this->hasOne('App\PackageCharge','packid');
   	}
}
