<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $fillable = [
        'group_id', 'name', 'image', 'shortdesc', 'desc', 'price'
    ];

    protected $hidden = [];
}