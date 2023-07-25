@extends('layout.master')


@section('content')
    <div class="container mt-5">
        <div class="row justify-content-start">
            <div class="col-4 card border-0">
                <div class="card-body d-flex flex-column">
                    <div class="mb-2 d-inline-flex gap-2">
                        <label for="" class="text-muted fs-6 text-capitalize">Name:</label>
                        <span class="fs-6">{{ $driver->name }}</span>
                    </div>
                    <div class="mb-2 d-inline-flex gap-2">
                        <label for="" class="text-muted fs-6 text-capitalize">Phone:</label>
                        <span class="fs-6">{{ $driver->phone }}</span>
                    </div>
                    <div class="mb-2 d-inline-flex gap-2">
                        <label for="" class="text-muted fs-6 text-capitalize">address:</label>
                        <span class="fs-6">{{ $driver->address }}</span>
                    </div>
                    <div class="mb-2 d-inline-flex gap-2">
                        <label for="" class="text-muted fs-6 text-capitalize">city:</label>
                        <span class="fs-6">{{ $driver->city }}</span>
                    </div>
                    <div class="mb-2 d-inline-flex gap-2">
                        <label for="" class="text-muted fs-6 text-capitalize">state:</label>
                        <span class="fs-6">{{ $driver->state }}</span>
                    </div>
                    <div class="mb-2 d-inline-flex gap-2">
                        <label for="" class="text-muted fs-6 text-capitalize">country:</label>
                        <span class="fs-6">{{ $driver->country }}</span>
                    </div>
                    <div class="mb-2 d-inline-flex gap-2">
                        <label for="" class="text-muted fs-6 text-capitalize">Driver's Licensce:</label>
                        <span class="fs-6">{{ $driver->driver_licensce }}</span>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <a href="{{ route('dashboard') }}" class="btn btn-primary">Back</a>
                <div class="card border-0">
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
