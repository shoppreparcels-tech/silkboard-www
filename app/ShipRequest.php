<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipRequest extends Model
{
    public function option(){
    	return $this->hasOne('App\ShipOption','shipid');
   	}
}
