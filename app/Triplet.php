<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Triplet extends Model
{
    protected $table = 'triplet';

    protected $fillable = [
        'title', 'content',
    ];

    protected $hidden = [];
}
