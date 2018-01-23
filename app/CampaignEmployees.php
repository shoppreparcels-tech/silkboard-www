<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignEmployees extends Model
{
    //
    protected $table = "campaign_employees";

    protected $fillable = ['campaign_id', 'employee_id','channel', 'employee_id', 'shorten_url'];
}
