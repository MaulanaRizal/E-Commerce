<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CashierController extends Controller
{
    public function index(){
        return view('admin.pages.cashier.index');
    }

    public function load(){

    }

    public function insert(){

    }

    public function update(){

    }

    public function delete(){

    }

    public function getProduct(Request $request){

        $temp = $request->all();
        if($request->has('search')){
            $searchTerm = $temp['search'];
            $data = Product::where(function ($query) use ($searchTerm){
                $columns = ['product_name','code_stock'];

                foreach($columns as $column){
                    $query->orWhere($column,'LIKE','%'.$searchTerm.'%');
                }

            })->orderBy('id','desc')->get();
        }else{
            $data = Product::orderBy('id','desc')->get();
        }
        $data = response()->json($data);
        return $data;
    }

}
