<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = ['category_id', 'size_id', 'color', 'price', 'depth', 'lin'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function size()
    {
        return $this->belongsTo('App\Sizechart');
    }

    public function sales()
    {
        return $this->hasMany('App\SaleDetail');
    }

    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }
}
