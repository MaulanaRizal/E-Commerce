@extends('admin.layouts.layout')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@viteReactRefresh
@vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

@section('content')
<h1 class="h3 mb-2 text-gray-800">Products</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Products</li>
    </ol>
</nav>
<div class="row">

    <div class="col-md-8">
        <div class="card ">
            <div class="card-body">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
                <hr>
                    <div class="row product-list" id="productList">
                    </div>
                <hr>
            </div>
        </div>
    </div>

<div class="col-md-4">
    <div class="card ">
        <div class="card-body">
            <p class="mt-1">Orders</p>
            <hr>
            <div class="order-list">

                <div class="order-item mb-2">
                    <input type="number" class="quantity float-right form-control" value="1">
                    <p class="mb-0">Name Product </p>
                    <span>Rp 60.000</span>
                </div>
                <div class="order-item mb-2">
                    <input type="number" class="quantity float-right form-control" value="1">
                    <p class="mb-0">Name Product </p>
                    <span>Rp 60.000</span>
                </div>
                <div class="order-item mb-2">
                    <input type="number" class="quantity float-right form-control" value="1">
                    <p class="mb-0">Name Product </p>
                    <span>Rp 60.000</span>
                </div>
                <div class="order-item mb-2">
                    <input type="number" class="quantity float-right form-control" value="1">
                    <p class="mb-0">Name Product </p>
                    <span>Rp 60.000</span>
                </div>
                <div class="order-item mb-2">
                    <input type="number" class="quantity float-right form-control" value="1">
                    <p class="mb-0">Name Product </p>
                    <span>Rp 60.000</span>
                </div>
                <div class="order-item mb-2">
                    <input type="number" class="quantity float-right form-control" value="1">
                    <p class="mb-0">Name Product </p>
                    <span>Rp 60.000</span>
                </div>
                <div class="order-item mb-2">
                    <input type="number" class="quantity float-right form-control" value="1">
                    <p class="mb-0">Name Product </p>
                    <span>Rp 60.000</span>
                </div>

            </div>
            <hr>
            <div class="result-order">
                <h4 class="float-right">3.000.000</h4>
                <p>Total:</p>
            </div>

        </div>
    </div>
</div>

    
</div>

@endsection

@push('scripts')
<script src="{{ asset('assets/js/cashier.js') }}"></script>
@endpush

@section('scripts')
    
    <script>
        const url = "{{ asset('assets/images/no-image.jpg') }}";
    </script>

@endsection
