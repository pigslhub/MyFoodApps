<?php

namespace App\Models\general;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'message', 'conversaiton_id', 'senderid', 'receiverid', 'amount', 'due_date', 'description', 'orderid'
    ];
}
