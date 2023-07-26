@extends('admin.layouts.layout')

@section('content')
    <h2>Dashboard</h2>

    <div class="row">

        <!-- Storages -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Storages</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-warehouse fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reports -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Custumer Reports</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myAreaChart" style="display: block; width: 630px; height: 320px;" width="630" height="320" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 mb-4">
    
            
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Reiviews Customer</h6>
                </div>
                <div class="card-body review-customer">
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Review</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Noval (September 12, 2023) <span class="badge badge-success float-right">New</span><br>I recently purchased the ABC Portable Phone Charger, and I'm quite satisfied with it. The charger is compact and lightweight, making it easy to carry around.</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Noval (September 11, 2023) <br>I recently purchased the ABC Portable Phone Charger, and I'm quite satisfied with it. The charger is compact and lightweight, making it easy to carry around.</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Noval (September 10, 2023) <br>I recently purchased the ABC Portable Phone Charger, and I'm quite satisfied with it. The charger is compact and lightweight, making it easy to carry around.</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Noval (September 9, 2023) <br>I recently purchased the ABC Portable Phone Charger, and I'm quite satisfied with it. The charger is compact and lightweight, making it easy to carry around.</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Noval (September 8, 2023) <br>I recently purchased the ABC Portable Phone Charger, and I'm quite satisfied with it. The charger is compact and lightweight, making it easy to carry around.</td>
                        </tr>
    
                    </table>
                    <a target="_blank" rel="nofollow" href="https://undraw.co/">See More →</a>
                </div>
            </div>
    
        </div>

    </div>

    <div class="row">

    </div>
        
@endsection

@push('scripts')
    <!-- Page level plugins -->
    <script src="{{ url('startbootstrap/vendor/chart.js/Chart.min.js') }}"></script>
    
    <!-- Page level custom scripts -->
    <script src="{{ url('startbootstrap/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ url('startbootstrap/js/demo/chart-pie-demo.js') }}"></script>
@endpush