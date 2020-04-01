<?php

namespace App\Models\shops;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Shop extends Authenticatable
{
    use Notifiable;

    protected $guard = 'shop';
    protected $fillable = [
        'name', 'owner_name', 'email', 'password', 'address', 'phone', 'area_code', 'commision', 'status', 'avatar', 'rating'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
