<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = "sales";

    protected $fillable = [
            'customer_id',
            'total',
            'due_date',
            'type',
            'status'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function discounts()
    {
        return $this->belongsToMany('App\Discount', 'sale_discount');
    }

    public function detail()
    {
        return $this->hasMany('App\SaleDetail');
    }
}
