<?php

namespace App\Models\admins;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Admin extends Authenticatable implements JWTSubject
{

    use Notifiable;

    protected $guard = 'admin';
    protected $fillable = [
        'name', 'email', 'password', 'api_token', 'avatar'
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
        $adminname = $this->name ? $this->avatar : "Admin";
        return $adminname;
    }
    public function getEmailAttribute()
    {
        $adminemail = $this->email ? $this->email : "Your Email Here";
        return $adminemail;
    }
}
