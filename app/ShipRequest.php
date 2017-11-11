<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipRequest extends Model
{
    public function option(){
    	return $this->hasOne('App\ShipOption','shipid');
   	}

   	public function tracking(){
    	return $this->hasOne('App\ShipTracking','shipid');
   	}

   	public function location(){
    	return $this->hasOne('App\Country', 'id','country');
   	}
}
