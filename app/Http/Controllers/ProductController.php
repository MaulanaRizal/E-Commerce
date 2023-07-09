<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Exception;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index(){
        return view('admin.pages.products.index');
    }

    public function loadData(){
        
        $data = Product::query();

        return DataTables::of($data)
        ->addColumn('delete', function ($row) {

            $deleteLink = '
            <a href="#" data-toggle="modal" data-target="#product'.$row->id.'">Delete</a>
            
            <div class="modal fade" id="product'.$row->id.'" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      <h5 class="modal-title">Delete Stock</h5>
                      <p class="mb-3 mt-3">
                          Are you sure you want to delete data '.$row->product_name.' permanently?
                      </p>
                      <hr>
                      <div class="row justify-content-end">
                          <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                          <a href="'.route('product-delete',['id'=>$row->id]).'" class="btn btn-danger mr-2">Delete</a>
                      </div>
                  </div>
                </div>
              </div>
            </div>';

            return '<a href="'.route('product-edit',['id'=>$row->id]).'">Edit</a> '.$deleteLink;
        })
        ->rawColumns(['delete'])
        ->toJson();
    }

    public function input(){
        return view('admin.pages.products.input');

    }

    public function insert(Request $request){
        $request['codeStock'] = 'STCK-'.$request['codeStock'];
        $request->validate([
            'productName' => 'required|max:50',
            'price' => 'required|number',
            'quantity' => 'required|integer',
            'codeStock' => 'required|max:10|unique:products,code_stock',
            'expiredDate' => 'nullable|date'
        ]);

        $product = new Product();

        $product->product_name = $request->productName;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->code_stock = $request->codeStock;
        $product->expired_date = $request->expiredDate;
        $product->date_stock = date('Y-m-d H:i:s');

        $product->save();
        return redirect()->route('product')->with('success','Data stock saved successfully.');
        
    }

    public function edit($id){
        $data = [
            // 'stock' => Storage::where('id',$id)->take(1)->get(),
             'product' => Product::find($id),
        ];

        return view('admin.pages.products.edit',['data'=>$data]);
    }

    public function update($id, Request $request){
            $request->validate([
                'productName' => 'required|max:50',
                'price' => 'required|integer',
                'quantity' => 'required|integer',
                'expiredDate' => 'nullable|date'
            ]);
            
            $stock = Product::find($id);
            $stock->product_name = $request->productName;
            $stock->price = $request->price;
            $stock->quantity = $request->quantity;
            $stock->expired_date = $request->expiredDate;
            $stock->date_stock = date('Y-m-d H:i:s');
            $stock->save();
            $stock->touch();
            return redirect()->route('product')->with('success','Data stock updated.');

    }

    public function delete($id){
        DB::beginTransaction();
        try{
            $model = Product::find($id);
            $model->delete();

            DB::commit();
            return redirect()->route('product')->with('success','Data stock removed.');
        }catch(Exception $ex){
            DB::rollBack();
            return redirect()->route('product')->with('failed',$ex->getMessage());
        }
    }
}
