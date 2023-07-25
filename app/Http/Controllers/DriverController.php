<?php

namespace App\Http\Controllers;

use App\Models\Drivers;
use Illuminate\Http\Request;

class DriverController extends Controller
{

    public function show(string $slug, int $id)
    {

        $slug = str_replace('-', ' ', $slug);

        $fetchData = Drivers::where('id', $id)->first();

        // dd($fetchData);

        $data = [
            'driver' => $fetchData,
        ];

        return view('driver.view', $data);
    }


    public function store(Request $req)
    {

        $req->validate([
            'name' => 'required',
            'phone' => 'required',
            'dob' => 'required|date',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'driver_licensce' => 'required|unique:drivers'
        ]);

        $data = [
            'name' => $req->name,
            'phone' => $req->phone,
            'dob' => $req->dob,
            'address' => $req->address,
            'city' => $req->city,
            'state' => $req->state,
            'country' => $req->country,
            'driver_licensce' => $req->driver_licensce
        ];

        $createDriver =  Drivers::create($data);

        if (!$createDriver) {
            return back('/')->with('error', 'Sorry, Something occurred while creating data');
        }

        return back()->with('success', 'Driver successfully added');
    }
}
