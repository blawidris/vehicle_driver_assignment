<?php

use App\Http\Controllers\AssignedController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehicleController;
use App\Models\Driver;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::group(
    ['prefix' => 'driver'],
    function () {
        Route::get('/', [DriverController::class, 'index'])->name('drivers');
        Route::get('/{slug}/{id}', [DriverController::class, 'show'])->where(['slug' => '^([\a-z\-]+)$', 'id' => '[0-9]+'])->name('driver.view');
        Route::get('/edit/{slug}/{id}', [DriverController::class, 'show'])->where(['slug' => '^([\a-z\-]+)$', 'id' => '[0-9]+'])->name('driver.edit');


        Route::post('/add', [DriverController::class, 'store'])->name('driver.add');
    }
);

Route::group(
    ['prefix' => 'vehicle'],
    function () {
        Route::get('/', [VehicleController::class, 'index'])->name('vehicles');
        Route::get('/{slug}', [VehicleController::class, 'view'])->where(['slug' => '^([\a-z\-]+)$'])->name('vehicle.view');


        // POST
        Route::post('/store', [VehicleController::class, 'store'])->name('vehicle.add');
    }
);

Route::group(
    ['prefix' => 'assigned'],
    function () {
        Route::get('/', [AssignedController::class, 'index'])->name('assigned.vehicle');

        Route::post('/store', [AssignedController::class, 'store'])->name('assigned.add');
    }
);