<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedVehicle extends Model
{
    use HasFactory;


    public function vehicles()
    {
        return $this->hasMany(Vehicles::class, 'id', 'vehicle_id');
    }

    public function driver()
    {
        return $this->hasOne(Drivers::class, 'id', 'driver_id');
    }
    public function vehicle()
    {
        return $this->hasOne(Vehicles::class, 'id', 'vehicle_id');
    }


    protected $fillable = [
        'driver_id',
        'vehicle_id',
        'assigned_date'
    ];
}