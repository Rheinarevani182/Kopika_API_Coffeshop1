<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name',
        'address',
        'opening_hours',
        'phone',
        'latitude',
        'longitude',
    ];
}