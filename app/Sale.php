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
}