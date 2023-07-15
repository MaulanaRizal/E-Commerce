@extends('admin.layouts.layout')

<?php 
    $product = $data['product'];
    $productCodeStock = str_replace("STCK-", "", $product['code_stock']);
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
    .frame{
        margin: auto;
        width: 300px;
        height: 200px;;
        background-color: #f3f3f3;
        
    }
    .frame #imagePreview{
        margin: auto;
        width: 300px;
        height: 200px;;
        object-fit: cover;
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
        <li class="breadcrumb-item"><a href="{{ route('product') }}">Products</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Stock</li>
    </ol>
</nav>

<div class="card">
    <div class="card-body container">

        <form action="{{ route('product-edit',['id'=>$product['id']]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="frame">
                @if($product['image_product'])
                <img src="{{ asset('product/'.$product['image_product']) }}" alt="Preview" id="imagePreview">
                @else
                <img src="{{ asset('assets/images/upload.jpg') }}" alt="Preview" id="imagePreview">
                @endif
            </div>
            <div class="form-group row mt-4">
                <label for="productName" class="col-sm-4 col-form-label text-right">Image Product : </label>
                <input type="file" name="image" class="bg-light border-0 col-sm-6" id="imageInput">
                @error('image')
                    <span class="text-danger small text-danger small col-12 col-md-3 offset-md-4">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row mt-4">
                <label for="productName" class="col-sm-4 col-form-label text-right">Product : </label>
                <input value="{{ $product['product_name'] }}" name="productName" id="productName" type="text" class="form-control bg-light border-0 small col-sm-6" placeholder="product name..." >
                @error('productName')
                    <span class="text-danger small text-danger small col-12 col-md-3 offset-md-4">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row mt-4">
                <label for="productName" class="col-sm-4 col-form-label text-right">Price : </label>
                <input name="price" value="{{ $product['price'] }}"  id="price" type="text" class="form-control bg-light border-0 small col-sm-6" placeholder="product price..." >
                @error('price')
                    <span class="text-danger small text-danger small col-12 col-md-3 offset-md-4">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row mt-4">
                <label for="quantity" class="col-sm-4 col-form-label text-right">Qty : </label>
                <input value="{{ $product['quantity'] }}" type="number" name="quantity" id="quantity" class="form-control bg-light border-0 small col-sm-6" value="0">
                @error('quantity')
                    <span class="text-danger small text-danger small col-12 col-md-3 offset-md-4">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row mt-4">
                <label for="codeStock" class="col-sm-4 col-form-label text-right">Code Stock : </label>
                <div class="col-sm-6 input-code-stock">
                    <span class="mt-2 initial-code">STCK—</span>
                    <input readonly value="{{ $productCodeStock }}" type="text" name="codeStock" id="codeStock" class="form-control bg-light border-0 small ml-2" style="margin-right: -10px;" placeholder="code..." >
                </div>
                <div class="">
                    
                </div>
                @error('codeStock')
                    <span class="text-danger small text-danger small col-12 col-md-3 offset-md-4">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row mt-4">
                <label for="expiredDate" class="col-sm-4 col-form-label text-right">Expired Date : </label>
                <input value="{{ $product['expired_date'] }}" type="date" name="expiredDate" id="expiredDate" class="form-control bg-light border-0 small col-sm-6">
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
<script>
    $(document).ready(function() {
        $('#imageInput').change(function() {
            var file = this.files[0];
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result).show();
            }
            
            reader.readAsDataURL(file);
        });
    });
</script>
@endsection