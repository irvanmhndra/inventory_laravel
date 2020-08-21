<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
    public $timestamps = false;
    protected $table = "addons";

    protected $fillable = ['name', 'amount'];
}
