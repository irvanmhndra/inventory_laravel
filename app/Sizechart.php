<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sizechart extends Model
{
    public $timestamps = false;
    protected $table = "sizecharts";

    protected $fillable = [
        'size',
        'desc'
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
