<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingPreference extends Model
{
    protected $table = 'shipping_preferences';

    protected $fillable = ['customer_id', 'email_alt', 'photo_login', 'schedule', 'repack', 'sticker', 'pack_extra', 'orginal_box', 'box_weight', 'tax_id', 'personal', 'include_invoice'];
}
