<?php

namespace App\Models\general;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'driver_id', 'customer_id', 'shop_id', 'order_id', 'description', 'date', 'time', 'status'
    ];
}
