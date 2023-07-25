<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    use HasFactory;

    protected $table = 'drivers';


    protected $fillable = [
        'name',
        'phone',
        'dob',
        'address',
        'city',
        'state',
        'country',
        'driver_licensce'
    ];
}