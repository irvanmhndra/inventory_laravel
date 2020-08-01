<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $table = "products";

    protected $fillable = ['category_id', 'size_id', 'stock', 'color', 'price', 'depth', 'lin'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function size()
    {
        return $this->belongsTo('App\Sizechart');
    }

    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }
}
