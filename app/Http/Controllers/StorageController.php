<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Storage;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class StorageController extends Controller
{
    public function index($i = null){
        $data = [
            'storages' => Storage::paginate(10)->withQueryString(),
        ];

        return view('admin.pages.storage',['data'=>$data]);
    }

    public function LoadDataStorage(){

        $data = Storage::query();

        return DataTables::of($data)
        ->addColumn('delete', function ($row) {
            return '<a href="'.$row->id.'">Edit</a> <a href="'.$row->id.'">Delete</a>';
        })->rawColumns(['delete'])
        ->toJson();
    }
}
