@extends('admin.layouts.layout')

@section('content')

<h1 class="h3 mb-2 text-gray-800">Input Stock</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('storages') }}">Storages</a></li>
        <li class="breadcrumb-item active" aria-current="page">Input Stock</li>
    </ol>
</nav>


<div class="card">
    <div class="card-body container">
        {{-- <div class="text-center">
            <img src="{{ url('startbootstrap/img/undraw_heavy_box.svg') }}" class="img-fluid px-3 px-sm-4 mt-3 mb-4" width="500px" alt="">
        </div> --}}
        <form action="{{ route('insert') }}" method="POST">
            @csrf
            <div class="form-group row mt-4">
                <label for="staticEmail" class="col-sm-4 col-form-label text-right">Product : </label>
                <input type="text" class="form-control bg-light border-0 small col-sm-6" placeholder="product name..." >
                
            </div>
            <div class="form-group row mt-4">
                <label for="staticEmail" class="col-sm-4 col-form-label text-right">Qty : </label>
                <input type="number" class="form-control bg-light border-0 small col-sm-2" value="0">
            </div>
            <div class="form-group row mt-4">
                <label for="staticEmail" class="col-sm-4 col-form-label text-right">Code Stock : </label>
                <span class="mt-2">STCK — </span>
                <input type="text" class="form-control bg-light border-0 small col-sm-3 ml-2" placeholder="code..." >
            </div>
            <div class="form-group row mt-4">
                <label for="staticEmail" class="col-sm-4 col-form-label text-right">Expired Date : </label>
                <input type="date" class="form-control bg-light border-0 small col-sm-6">
            </div>
            <div class="form-group row mt-4">
                <span class="col-sm-4"></span>
                <button class="btn btn-primary col-sm-2">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection