<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];


    protected $hidden = [
      'password', 'remember_token',
    ];


    protected $casts = [
      'email_verified_at' => 'datetime',
    ];

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function package_price() {
        return $this->belongsTo('App\Models\PackagePrice');
    }

    public function user_info() {
        return $this->hasOne('App\Models\PersonalInfo');
    }

    public function user_images() {
        return $this->hasMany('App\Models\UserProfileImage');
    }
}
