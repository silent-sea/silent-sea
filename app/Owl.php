<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owl extends Model
{
    protected $table = 'owls';

    protected $fillable = [
        'name', 'image',
    ];

    protected $hidden = [];
}
