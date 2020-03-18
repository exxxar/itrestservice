<?php

namespace App\Parts\Models\Fastoran;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = "orders";

    protected $fillable = [
        "rest",
        "user_id",
        "summ",
        "pers",
        "dat",
        "tim",
        "remark",
        "gosti",
        "sdacha",
        "delivery_price",
        "status",
        "delivery_range",
    ];

    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'id', 'order_id');
    }

}
