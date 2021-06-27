<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'transaction_id',
        'coin_send_address',
        'coin_recieve_address',
        'send_coin',
        'send_coin_image',
        'rec_coin',
        'rec_coin_image',
        'send_amount',
        'recieve_amount'
    ];
}
