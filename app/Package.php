<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function items()
    {
        return $this->hasMany('App\PackageItem','package_id');
    }
    public function photos()
    {
        return $this->hasMany('App\PackagePhoto','package_id');
    }
}
