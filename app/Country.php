<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    protected $fillable = [
        'id', 'name', 'iso3', 'phone_code', 'shipping', 'discount'
    ];

}
