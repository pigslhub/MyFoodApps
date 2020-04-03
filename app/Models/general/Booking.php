<?php

namespace App\Models\general;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'restaurant_id', 'customer_id', 'total_members', 'date', 'time', 'status',
    ];
}
