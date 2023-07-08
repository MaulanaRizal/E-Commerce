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
    public function index(){

        return view('admin.pages.storages.storage');
    }

    public function LoadDataStorage(){

        $data = Storage::query();

        return DataTables::of($data)
        ->addColumn('delete', function ($row) {
            return '<a href="'.route('FormEditStorage',['id'=>$row->id]).'">Edit</a> <a href="'.$row->id.'">Delete</a>';
        })
        ->rawColumns(['delete'])
        ->toJson();
    }

    public function ViewInsert(){
        return view('admin.pages.storages.insert');
    }

    public function Insert(Request $request){

        try{
            $request['codeStock'] = 'STCK-'.$request['codeStock'];
            $request->validate([
                'productName' => 'required|max:50',
                'quantity' => 'required|integer',
                'codeStock' => 'required|max:10|unique:storages,code_stock',
                'expiredDate' => 'nullable|date'
            ]);

            $stock = new Storage();
    
            $stock->product_name = $request->productName;
            $stock->quantity = $request->quantity;
            $stock->code_stock = $request->codeStock;
            $stock->expired_date = $request->expiredDate;
            $stock->date_stock = date('Y-m-d H:i:s');
    
            $stock->save();

            return redirect()->route('storages')->with('success','Data stock saved successfully.');
        }catch(Exception $ex){
            return redirect()->route('FormInputStorage')->with('failed',$ex->getMessage());
        }
        

    }

    public function ViewEdit($id){
        
        $data = [
            // 'stock' => Storage::where('id',$id)->take(1)->get(),
             'stock' => Storage::find($id),
        ];

        return view('admin.pages.storages.edit',['data'=>$data]);
    }

    public function Edit($id, Request $request){
        try{
            $request->validate([
                'productName' => 'required|max:50',
                'quantity' => 'required|integer',
                'expiredDate' => 'nullable|date'
            ]);
            
            DB::beginTransaction();
            $stock = Storage::find($id);
            $stock->product_name = $request->productName;
            $stock->quantity = $request->quantity;
            //$stock->code_stock = $request->codeStock;
            $stock->expired_date = $request->expiredDate;
            $stock->date_stock = date('Y-m-d H:i:s');
            $stock->save();
            $stock->touch();
            DB::commit();
            return redirect()->route('storages')->with('success','Data stock updated.');
        }catch(Exception $ex){
            DB::rollBack();
            return redirect()->route('FormEditStorage',['id'=>$id])->with('failed',$ex->getMessage());
        }
    }

    public function Delete($id){
        echo "Hapus";
    }
}
