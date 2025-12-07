<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category',
        'sell_price',
        'min_stock',
        'measure_unit',
        'description',
        'is_active'
    ];
}
