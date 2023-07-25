<?php

namespace App\Http\Controllers;

use App\Models\Vehicles;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function view()
    {

        return view('vehicle.view');
    }

    public function store(Request $req)
    {

        $req->validate([
            'color' => 'required',
            'maker' => 'required',
            'model' => 'required',
            'seating_capacity' => 'required',
            'registered_date' => 'required',
            'license_plate' => 'required|unique:vehicles',
            'year' => 'required'
        ], [
            'color' => 'Please specify vehicle color',
            'registered_date' => 'Please specify when the vehicle was registered',
            'maker' => 'Vehicle brand is required',
            'model' => 'Vehicle name is required',
            'license_plate' => 'Vehicle plate number is required',
            'year' => 'please specify the year this vehicle is manufactured',
            'seating_capacity' => 'Please specify your vehicle seat capacity'
        ]);

        $vehicle = Vehicles::create($req->all());

        if (!$vehicle) {
            return back()->with('error', 'An error occured');
        }

        return back()->with('message', 'Successfully added');
    }
}