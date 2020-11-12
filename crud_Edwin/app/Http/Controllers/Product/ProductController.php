<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Company;
use App\Models\TpProducts;
use DB;

class ProductController extends Controller
{
    public function index(){
        $products=Product::select('products.id','products.name_products','products.description',
        'products.price','products.created_at','companies.name_companies','product_types.name_tp_products')
            ->join('companies', function ($query){
                $query->on('companies.id', '=', 'products.company_id');
            })->join('product_types', function ($query){
                $query->on('product_types.id', '=', 'products.product_type_id');
            })->get();
        return view('product.index',compact('products'));
    }

    public function create(){
        $companies=Company::all();
        $tpproducts=TpProducts::all();
        return view('product.create',compact('companies','tpproducts'));

    }
    public function store(Request $request){
        $product=Product::create($request->all());
        return redirect()->route('product.index');
    }

    public function show($id){
        // SELECT * FROM entity WHERE ID = ? 111  FIND
        $product=Product::find($id);
        return view('product.show',compact('product'));
    }


    //Eliminar
    public function destroy($id){
        $product=Product::find($id)->delete();
        return redirect()->route('product.index');
    }

}
