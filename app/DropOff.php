<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DropOff extends Model
{
    protected $table = 'drop_offs';

    protected $fillable = [
        'id', 'name', 'address', 'city', 'state', 'pincode'
    ];

}
