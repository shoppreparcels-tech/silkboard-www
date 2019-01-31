<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    public function items(){
    	return $this->hasMany('App\PackageItem','package_id');
   	}

   	public function photoRequests(){
    	return $this->hasMany('App\PhotoRequest','package_id');
   	}

   	public function photos(){
    	return $this->hasMany('App\PackagePhoto','package_id');
   	}

    public function scanRequest(){
      return $this->hasOne('App\ScanRequest','package_id');
    }

    public function scans(){
      return $this->hasMany('App\ScanDocument','package_id');
    }

   	public function charges(){
    	return $this->hasOne('App\PackageCharge','package_id');
   	}

    public function customer(){
      return $this->hasOne('App\Customer', 'id','customer_id');
    }

    public function mails(){
      return $this->hasMany('App\PackageMail','package_id');
    }
    public function categories(){
        return $this->hasMany('App\ItemCategory','item_category_id');
    }

}

