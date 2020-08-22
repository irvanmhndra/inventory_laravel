<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDiscount extends Model
{
    public $timestamps = false;
    protected $table = "sale_discount";

    protected $fillable = [
            'sale_id',
            'discount_id',
    ];
}
