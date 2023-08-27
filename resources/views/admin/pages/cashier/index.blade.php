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
            <div class="card-body" id="productContainer">
            </div>
        </div>
    </div>

<div class="col-md-4">
    <div class="card ">
        <div class="card-body">
            <p class="mt-1">Orders</p>
            <hr>
            <div class="order-list" id="orderList">

                <div class="order-item mb-2">
                    <div class="product">
                        <p class="mb-0">Name Product </p>
                        <span>Rp 60.000</span>
                    </div>
                    <input type="number" class="quantity float-right form-control" value="1">
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
        $(document).ready(()=>{

        })
    </script>

@endsection
