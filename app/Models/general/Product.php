<?php

namespace App\Models\general;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;

    //    protected $guard = 'admin';
    protected $fillable = [
        'name', 'picture', 'category_id', 'restaurant_id', 'price',
    ];
}
