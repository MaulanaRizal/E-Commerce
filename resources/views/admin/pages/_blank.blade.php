@extends('admin.layouts.layout')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Products</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Products</li>
    </ol>
</nav>

<div class="card">
    <div class="card-body">
        <a href="{{ route('product-input') }}" class="btn btn-primary float-right mb-4">Add New Product</a>
        <p class="mt-1">
            The following is a table list of products.
        </p>


        {{-- {{ $data['storages']->links() }} --}}
        
        
    </div>
</div>

@endsection
