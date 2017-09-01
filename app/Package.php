<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function items(){
    	return $this->hasMany('App\PackageItem','packid');
   	}
}
