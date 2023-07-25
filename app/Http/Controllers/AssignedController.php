<?php

namespace App\Http\Controllers;

use App\Models\AssignedVehicle;
use Illuminate\Http\Request;

class AssignedController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'vehicle_id' => 'required',
            'driver_id' => 'required'
        ], [
            'driver_id' => 'Select a driver please',
            'vehicle_id' => 'Select a vehicle'
        ]);


        $data = [
            'vehicle_id' => $request->vehicle_id,
            'driver_id' => $request->driver_id,
            'assigned_date' => date('d-m-Y H:i:s')
        ];

        $assVehicle = AssignedVehicle::create($data);

        if (!$assVehicle) {
            return back()->with('error', 'An error occur');
        }

        return back()->with('success', 'Driver has been assigned to a vehicle');
    }
}
