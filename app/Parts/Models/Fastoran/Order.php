<?php

namespace App\Parts\Models\Fastoran;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = "orders";

    protected $fillable = [
        'rest',
        'user',
        'summ',
        'pers',
        'dat',
        'tim',
        'remark',
        'gosti',
        'sdacha',
        'delivery_price',
        'status',
        'delivery_range',
    ];
}
