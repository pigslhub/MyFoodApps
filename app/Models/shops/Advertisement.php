<?php

namespace App\Models\shops;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $guard = 'shop';
    protected $fillable = [
        'shop_id', 'title', 'description','due_date', 'status', 'add_type', 'add_file'
    ];
}
