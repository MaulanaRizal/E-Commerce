@extends('admin.layouts.layout')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link href="{{ url('assets/css/cashier.css') }}" rel="stylesheet" type="text/css">


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
        <div class="card product-container">
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
                    {{-- <div class="order-item mb-2" id="order-STCK-indo">
                        <div class="product">
                            <p class="mb-0">Indomie </p>
                            <span>Rp&nbsp;4.000,00</span>
                        </div>
                        <input type="number" class="quantity float-right form-control" value="1" min="1">
                        <button class="btn btn-danger btn-delete-order"><i class="fa fa-trash"></i></button>
                        
                    </div> --}}
                    
                </div>
                <hr>
                <div class="result-order">
                    <h4 class="float-right" id="totalOrder"></h4>
                    <p>Total:</p>
                </div>
                <button class="btn btn-primary">Check Out</button>

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
   
</script>
@endsection
