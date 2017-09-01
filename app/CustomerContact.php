<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerContact extends Model
{
	protected $table = 'customer_contacts';

    protected $fillable = ['customer_id', 'alt_phone', 'alt_code', 'alt_email', 'address', 'city', 'state', 'country', 'pin'];
}
