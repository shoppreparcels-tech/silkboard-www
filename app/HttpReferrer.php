<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HttpReferrer extends Model
{
    //


    protected $fillable = ['url', 'created_by','visitor_id'];
}

