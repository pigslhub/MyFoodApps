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
        'name', 'owner_name', 'email', 'password', 'address', 'phone', 'area_code', 'about', 'commision', 'status', 'avatar', 'rating'
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


    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function getAvatarAttribute()
    {
        $default_path = 'public/assets/images/user/user.png';

        $path = $this->avatar ? $this->avatar : $default_path;

        return asset($path);
    }

    public function getNameAttribute()
    {
        $adminname = $this->name ? $this->name : "Resturant";
        return $adminname;
    }
    public function getEmailAttribute()
    {
        $adminemail = $this->email ? $this->email : "Your Email Here";
        return $adminemail;
    }
}
