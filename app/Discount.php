<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    public $timestamps = false;
    protected $table = "discounts";

    protected $fillable = ['name', 'amount'];

    public function sales()
    {
        return $this->belongsToMany('App\Sale', 'sale_discount');
    }
}
