<?php

namespace App\Http\Controllers;

use App\Models\AssignedVehicle;
use App\Models\Drivers;
use App\Models\Vehicles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $drivers = Drivers::orderBy('created_at', 'desc')->get();
        $vehicles = Vehicles::orderBy('created_at', 'desc')->get();
        $assignedVehicles =  AssignedVehicle::orderBy('created_at', 'desc')->get();


        $unAssignedVehicles = $vehicles->reject(function ($vehicle) use ($assignedVehicles) {
            return $assignedVehicles->contains('vehicle_id', $vehicle->id);
        });

        $unAssignedDrivers = $drivers->reject(function ($driver) use ($assignedVehicles) {
            return $assignedVehicles->contains('driver_id', $driver->id);
        });

        // dd($unAssignedDrivers);


        $data = [
            'drivers' => $drivers,
            'vehicles' => $vehicles,
            'assignedVehicles' => $assignedVehicles,
            'unassignedDrivers' => $unAssignedDrivers,
            'unassignedVehicles' => $unAssignedVehicles
        ];

        return view('dashboard', $data);
    }

    private function findUnassignedVehicles($vehicles, $assignedVehicles)
    {
        $unassignedVehicles = array();

        $vehicleIdsAssigned = array_column($assignedVehicles, 'vehicle_id');

        foreach ($vehicles as $vehicle) {
            if (!in_array($vehicle['id'], $vehicleIdsAssigned)) {
                $unassignedVehicles[] = $vehicle;
            }
        }

        return $unassignedVehicles;
    }

    private function findUnassignedDrivers($drivers, $assignedDrivers)
    {
        $unassignedDrivers = array();

        $driverIdsAssigned = array_column($assignedDrivers, 'driver_id');

        foreach ($drivers as $driver) {
            if (!in_array($driver['id'], $driverIdsAssigned)) {
                $unassignedDrivers[] = $driver;
            }
        }

        return $unassignedDrivers;
    }
}
