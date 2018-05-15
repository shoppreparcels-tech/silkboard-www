<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryGuide extends Model
{
    protected $fillable = ['country_id', 'banner_img', 'dutytax', 'dutytax_meta', 'transits', 'transits_meta', 'forbidden', 'forbidden_meta', 'video_url', 'video_head', 'video_desc'];
}
