<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag'];

    public function new()
    {
        return $this->belongsToMany('App\News');
    }
}
