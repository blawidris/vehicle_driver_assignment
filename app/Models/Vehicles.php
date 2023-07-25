<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    use HasFactory;


    protected $fillable = [

        'color',

        'registered_date',

        'maker',

        'model',

        'license_plate',

        'seating_capacity',
    'year'
    ];
}