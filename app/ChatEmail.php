<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatEmail extends Model
{
    //
    protected $fillable = ['id','name','email','mobile','address','message','chat_date'];

}
