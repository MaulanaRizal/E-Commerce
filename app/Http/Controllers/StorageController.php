<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Storage;
use Exception;
//use Dotenv\Validator;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;

class StorageController extends Controller
{
    public function index($i = null){

        return view('admin.pages.storages.storage');
    }

    public function LoadDataStorage(){

        $data = Storage::query();

        return DataTables::of($data)
        ->addColumn('delete', function ($row) {
            return '<a href="'.$row->id.'">Edit</a> <a href="'.$row->id.'">Delete</a>';
        })->rawColumns(['delete'])
        ->order(function($query){
            $query->orderBy('date_stock','desc');
        })
        ->toJson();
    }

    public function FormInput(){
        return view('admin.pages.storages.insert');
    }

    public function Insert(Request $request){
        $request['codeStock'] = 'STCK-'.$request['codeStock'];
        $request->validate([
            'productName' => 'required|max:50',
            'quantity' => 'required|integer',
            'codeStock' => 'required|max:10|unique:storages,code_stock',
            'expiredDate' => 'date'
        ]);

        try{
            $stock = new Storage();
    
            $stock->product_name = $request->productName;
            $stock->quantity = $request->quantity;
            $stock->code_stock = $request->codeStock;
            $stock->expired_date = $request->expiredDate;
            $stock->date_stock = date('Y-m-d H:i:s');
    
            $stock->save();

            return redirect()->route('storages')->with('success','Data stock saved successfully.');
        }catch(Exception $ex){
            $temp = $ex;

            return redirect()->route('storages')->with('failed','there is an error in the stock data entered, make sure to enter the data correctly.');
        }
        

    }
}
