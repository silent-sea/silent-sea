<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemGroup extends Model
{
    protected $table = 'itemgroup';

    protected $fillable = [
        'name', 'shortdesc', 'desc', 'image'
    ];

    protected $hidden = [];
}