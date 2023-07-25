@extends('layout.master')


@section('content')
    <div class="tab-content my-5" id="pills-tabContent">
        <div class="tab-pane" id="pills-dashboard" role="tabpanel" aria-labelledby="pills-dashboard-tab" tabindex="0">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Drivers</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            {{-- <th scope="col">#</th> --}}
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Drivers' Licensce</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($drivers as $driver)
                                            {{-- @dd($driver->name) --}}
                                            <x-dashboard.driver-table :driver="$driver" />
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8"></div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show active" id="pills-driver" role="tabpanel" aria-labelledby="pills-driver-tab"
            tabindex="1">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header bg-transparent">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title">All Drivers</h4>

                                    <div class="d-inline-flex gap-3">
                                        <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#addDriverModal">Add Driver</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            {{-- <th scope="col">#</th> --}}
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Drivers' Licensce</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($drivers as $driver)
                                            {{-- @dd($driver->name) --}}
                                            <x-dashboard.driver-table :driver="$driver" />
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8"></div>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="pills-vehicle" role="tabpanel" aria-labelledby="pills-vehicle-tab" tabindex="2">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header bg-transparent">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title">All Vehicles</h4>

                                    <div class="d-inline-flex gap-3">
                                        <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#vehicleModal"><i class="bi bi-truck"></i> Add Vehicle</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Brand</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Seat Capacity</th>
                                            <th scope="col">Licensce Plate</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vehicles as $vehicle)
                                            {{-- @dd($driver->name) --}}
                                            <x-dashboard.vehicle-table :vehicle="$vehicle" />
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8"></div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-assigned" role="tabpanel" aria-labelledby="pills-assigned-tab" tabindex="3">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="card border-0">
                            <div class="card-header bg-transparent">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title">All Vehicles</h4>

                                    <div class="d-inline-flex gap-3">
                                        <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#assignVehicleModal">
                                            <i class="bi bi-truck"></i>
                                            Assign Driver
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Car name</th>
                                            <th scope="col">Driver name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($assignedVehicles as $assigned)
                                            {{-- @dd($driver->name) --}}
                                            <x-dashboard.assigned-table :assigned="$assigned" />
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addDriverModal" tabindex="-1" aria-labelledby="addDriverModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Driver</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('driver.add') }}" method="POST">
                        @csrf
                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dob" class="form-label">Date of birth</label>
                                        <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                            id="dob" name="dob" value="{{ old('dob') }}">
                                        @error('dob')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Date of birth</label>
                                        <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                            id="phone" name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                                            id="address" name="address" value="{{ old('address') }}">
                                        @error('address')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control @error('city') is-invalid @enderror"
                                            id="city" name="city" value="{{ old('city') }}">
                                        @error('city')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control @error('state') is-invalid @enderror"
                                            id="state" name="state" value="{{ old('state') }}">
                                        @error('state')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <select name="country" id="country"
                                            class="form-control form-select @error('country') is-invalid @enderror">
                                            <option value="">Select Country</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Ghana">Ghana</option>
                                        </select>
                                        @error('country')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="licensce" class="form-label">Driver's Licensce No</label>
                                        <input type="text"
                                            class="form-control @error('driver_licensce') is-invalid @enderror"
                                            id="licensce" name="driver_licensce">
                                        @error('licensce_no')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary px-5" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="vehicleModal" tabindex="-1" aria-labelledby="vehicleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Vehicle</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('vehicle.add') }}" method="POST">
                        @csrf
                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="color" class="form-label">Color</label>
                                        <input type="text" class="form-control @error('color') is-invalid @enderror"
                                            id="color" name="color">

                                        @error('color')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="brand" class="form-label">Brand</label>
                                        <input type="text" class="form-control @error('maker') is-invalid @enderror"
                                            id="brand" name="maker" placeholder="e.g Toyota">

                                        @error('maker')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="model" class="form-label">Car Name</label>
                                        <input type="text" class="form-control @error('model') is-invalid @enderror"
                                            id="model" name="model" placeholder="e.g Venza">
                                        @error('model')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label for="seat" class="form-label">Seat Capacity</label>
                                        <input type="number"
                                            class="form-control @error('seating_capacity') is-invalid @enderror"
                                            id="seat" name="seating_capacity" placeholder="e.g 1">
                                        @error('seating_capacity')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="year" class="form-label">Year</label>
                                        <input type="text" class="form-control @error('year') is-invalid @enderror"
                                            id="year" name="year" placeholder="2021">
                                        @error('year')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="registered_date" class="form-label">Registered Date</label>
                                        <input type="date" name="registered_date" id="registered_date"
                                            class="form-control @error('registered_date') is-invalid @enderror">
                                        @error('registered_date')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="license_plate" class="form-label">Plate Number</label>
                                        <input type="text" name="license_plate" id="license_plate"
                                            class="form-control @error('license_plate') is-invalid @enderror">
                                        @error('license_plate')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="assignVehicleModal" tabindex="-1" aria-labelledby="assignVehicleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Vehicle</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('assigned.add') }}" method="POST">
                        @csrf
                        <div class="container">
                            <div class="row align-items-center">


                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="vehicle" class="form-label">Available Vehicles</label>
                                        <select name="vehicle_id" id="vehicle"
                                            class="form-control @error('vehicle_id') is-invalid @enderror">
                                            <option value="">Select Vehicle</option>

                                            @foreach ($unassignedVehicles as $aVehicle)
                                                <option value="{{ $aVehicle->id }}">{{ $aVehicle->model }}</option>
                                            @endforeach
                                        </select>
                                        @error('vehicle_id')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="driver_id" class="form-label">Available Drivers</label>
                                        <select name="driver_id" id="driver_id"
                                            class="form-control @error('driver_id') is-invalid @enderror">
                                            <option value="">Select Driver</option>

                                            @foreach ($unassignedDrivers as $aDriver)
                                                <option value="{{ $aDriver->id }}">{{ $aDriver->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('driver_id')
                                            <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
