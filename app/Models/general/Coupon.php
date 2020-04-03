<?php

namespace App\Models\general;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
        'title', 'description', 'code', 'min_order_amount', 'discount', 'exp_date'
    ];
}
