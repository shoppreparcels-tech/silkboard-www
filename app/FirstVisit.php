<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirstVisit extends Model
{
    protected $table = 'first_visits';

    protected $fillable = ['url', 'customer_id'];
}
