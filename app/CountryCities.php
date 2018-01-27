<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryCities extends Model
{
    //

    protected $fillable = ['country_id', 'city', 'slug'];
}
