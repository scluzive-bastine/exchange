<?php

namespace App;

use App\Faq;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = [
        'title', 'description', 'status'
    ];
}
