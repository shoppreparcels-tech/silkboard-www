<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatEmail extends Model
{
    //
    protected $fillable = ['id','name','email','email_subject','mobile','address','query','answer','sender_name','chat_date','information_url'];

}
