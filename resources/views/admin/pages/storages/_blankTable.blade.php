@extends('admin.layouts.layout')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<style>
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        border: 0px solid #4e70df;
        border-radius: 25px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: #f0f0f0;
        border: 0px solid rgba(0, 0, 0, 0);
        color: #858796 !important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background-color: #4e70df;
        border: 0px solid rgba(0, 0, 0, 0.3);
        color: white !important;
        border-radius: 25px;
        
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{
        background-color: #4e70df;
        opacity: 80%;
        color: white !important;
        border: 0px solid rgba(0, 0, 0, 0.3);
        
    }
    
</style>
@endsection

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
        {{-- <a href="#" class="btn btn-primary">Add New Product</a>
        <input type="text" class="form-control mb-3 float-right" style="width:200px" placeholder="search..."> --}}
        <table class="table" id="storageTable" width=100%>
            <thead>
              <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Qty</th>
                <th scope="col">Code Stock</th>
                <th scope="col">Expired Date</th>
                <th scope="col">Date Stock</th>
                <th scope="col"></th>
              </tr>
            </thead>
        </table>
        <hr>

        {{-- {{ $data['storages']->links() }} --}}
        
        
    </div>
</div>

@endsection

@section('scripts')

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $("#storageTable").DataTable({

            processing : true,
            serverSide : true,
            ajax: '{{ route('loadProduct') }}',
            // columns:[
            //     {data:'product_name',name:'product_name'},
            //     {data:'price',name:'price'},
            //     {data:'quantity',name:'quantity'},
            //     {data:'code_stock',name:'code_stock'},
            //     {data:'expired_date',name:'expired_date'},
            //     {data:'date_stock',name:'date_stock'},
            //     {data:'delete'},
            // ],
            // order: [[5, 'desc']]
        });
        
    </script>
@endsection