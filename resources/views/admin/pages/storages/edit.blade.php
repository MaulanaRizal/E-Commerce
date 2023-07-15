@extends('admin.layouts.layout')

<?php 
    $stock = $data['stock'];
    $stockCodeStock = str_replace("STCK-", "", $stock['code_stock']);
?>

@section('styles')
<style>
    .initial-code{
        width: 110px;
        margin-left: 8px;
    }
    .form-group .input-code-stock{
        display: inline-flex;
        flex-flow: initial;
        
    }
    @media only screen and (max-width: 600px) {
        .form-group .text-right
        {
            text-align:left !important;
        }

    }
</style>
@endsection

@section('content')

<h1 class="h3 mb-2 text-gray-800">Input Stock</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('storages') }}">Storages</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Stock</li>
    </ol>
</nav>

<div class="card">
    <div class="card-body container">

        <form action="{{ route('editStock',['id'=>$stock['id']]) }}" method="POST">
            @csrf
            <div class="form-group row mt-4">
                <label for="productName" class="col-sm-4 col-form-label text-right">Product : </label>
                <input value="{{ $stock['product_name'] }}" name="productName" id="productName" type="text" class="form-control bg-light border-0 small col-sm-6" placeholder="product name..." >
                @error('productName')
                    <span class="text-danger small text-danger small col-12 col-md-3 offset-md-4">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row mt-4">
                <label for="quantity" class="col-sm-4 col-form-label text-right">Qty : </label>
                <input value="{{ $stock['quantity'] }}" type="number" name="quantity" id="quantity" class="form-control bg-light border-0 small col-sm-6" value="0">
                @error('quantity')
                    <span class="text-danger small col-12">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row mt-4">
                <label for="codeStock" class="col-sm-4 col-form-label text-right">Code Stock : </label>
                <div class="col-sm-6 input-code-stock">
                    <span class="mt-2 initial-code">STCK—</span>
                    <input readonly value="{{ $stockCodeStock }}" type="text" name="codeStock" id="codeStock" class="form-control bg-light border-0 small ml-2" style="margin-right: -10px;" placeholder="code..." >
                </div>
                <div class="">
                    
                </div>
                @error('codeStock')
                    <span class="text-danger small text-danger small col-12 col-md-3 offset-md-4">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row mt-4">
                <label for="expiredDate" class="col-sm-4 col-form-label text-right">Expired Date : </label>
                <input value="{{ $stock['expired_date'] }}" type="date" name="expiredDate" id="expiredDate" class="form-control bg-light border-0 small col-sm-6">
                @error('expiredDate')
                    <span class="text-danger small text-danger small col-12 col-md-3 offset-md-4">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row mt-4">
                <span class="col-sm-4"></span>
                <button class="btn btn-primary col-sm-2">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
    
@endsection