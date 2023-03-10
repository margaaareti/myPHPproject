<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [

        'name', 'price',
        'active', 'sort',

    ];


    protected $hidden = [

        'price'

    ];

    protected $casts = [

        'price' => 'float',
        'active' => 'true',
        'sort' => 'integer',

    ];

    //protected $connection = 'second'; если другая БД
}
