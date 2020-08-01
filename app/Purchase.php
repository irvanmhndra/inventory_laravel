<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public $timestamps = false;
    protected $table = "purchases";

    protected $fillable = [
        'product_id',
        'price',
        'quantity'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
