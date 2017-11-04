<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreCatClub extends Model
{
    public function store(){
 		return $this->hasOne('App\Store', 'id', 'store_id');
	}
}
