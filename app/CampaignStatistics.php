<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignStatistics extends Model
{
    //
    protected $table = "campaigns_statistics";
    protected $fillable = ['name', 'coupon_code', 'url', 'campaign_id','channel','employee_id'];
}
