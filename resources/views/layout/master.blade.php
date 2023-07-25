<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RideSharing app</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<style>
    .main-wrapper {
        width: 100%;
        height: 100vh;
    }

    .sidebar {
        width: 280px;
        height: 100vh;
        ">

    }
</style>

<body>

    <div class="main-wrapper">
        <div class="container-fluid ps-0">
            <div class="d-flex align-items-start">
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sidebar">
                    <a href="javascript:void(0)"
                        class="d-flex align-items-center mb-3 mb-md-0 mx-md-auto text-white text-decoration-none">
                        <span class="fs-4 fw-bold text-center">VehicleM</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto" id="pills-tab" role="tablist">

                        {{-- <li class="nav-item" role="presentation">
                            <a href="javascript:void(0)" class="nav-link text-white active" id="pills-dashboard-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-dashboard" type="button" role="tab"
                                aria-controls="pills-dashboard" aria-selected="true">
                                <i class="bi bi-house"></i>
                                Dashboard
                            </a>
                        </li> --}}
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0)" class="nav-link text-white active" id="pills-driver-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-driver" type="button" role="tab"
                                aria-controls="pills-driver" aria-selected="false">
                                <i class="bi bi-person"></i>
                                Drivers
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0)" class="nav-link text-white" id="pills-vehicle-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-vehicle" type="button" role="tab"
                                aria-controls="pills-vehicle" aria-selected="false">
                                <i class="bi bi-truck"></i>
                                Vehicles
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0)" class="nav-link text-white" id="pills-assigned-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-assigned" type="button" role="tab"
                                aria-controls="pills-assigned" aria-selected="false">
                                <i class="bi bi-tools"></i>
                                Assigned Vehicles
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="main-container flex-3 w-100">
                    {{-- <div class="container-fluid"> --}}

                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ Session('message') }}
                        </div>
                    @endif
                    
                    @yield('content')
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
