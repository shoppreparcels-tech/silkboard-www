<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    protected $fillable = ['id', 'person', 'email', 'customer_service', 'arrive_expectation', 'protected_shipment', 'package_condition', 'easy_service', 'overall_level_of_satisfaction', 'suggestions'];
}