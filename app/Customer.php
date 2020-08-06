<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;
    protected $table = "customers";

    protected $fillable = [
        'name',
        'phoneNumber',
        'address'
    ];

    public function sales()
    {
        return $this->hasMany('App\Sale');
    }
}
