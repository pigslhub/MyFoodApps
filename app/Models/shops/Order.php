<?php

namespace App\Models\shops;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guard = 'shop';
    protected $fillable = [
        'order_id', 'shop_id', 'customer_id', 'driver_id', 'description', 'amount', 'due_date',
        'status','shop_rating', 'driver_rating'
    ];
}
