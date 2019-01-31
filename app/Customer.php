<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_verify'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'email_token'
    ];

    public function preference(){
        return $this->hasOne('App\ShippingPreference','customer_id');
    }
    public function contact(){
        return $this->hasOne('App\CustomerContact','customer_id');
    }
    public function loyalty(){
        return $this->hasOne('App\LoyaltyPoint','customer_id');
    }
    public function rewards(){
        return $this->hasMany('App\LoyaltyMisc','customer_id');
    }
    public function accountDocs(){
        return $this->hasMany('App\AccountDocument','customer_id');
    }
    public function balance(){
        return $this->hasOne('App\ShopperBalance','customer_id');
    }
    public function addresses(){
        return $this->hasMany('App\Address','customer_id');
    }
    public function transactions(){
        return $this->hasMany('App\WalletTransaction','customer_id');
    }
}
