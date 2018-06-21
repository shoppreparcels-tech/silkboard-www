<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipRequest extends Model
{
    public function tracking()
    {
        return $this->hasMany('App\ShipMails','ship_request_id');
    }
}
