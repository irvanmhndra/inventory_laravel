<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = "payments";

    protected $fillable = [
            'due_date',
            'type',
            'total',
            'status'
    ];
}