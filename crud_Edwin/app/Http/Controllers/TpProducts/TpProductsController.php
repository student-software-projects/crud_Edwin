<?php

namespace App\Http\Controllers\TpProducts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TpProducts;

class TpProductsController extends Controller
{
    public function index(){
        $TpProducts=TpProducts::all();
        return view('tpProducts.index', compact('TpProducts'));
    }

    public function create(){
        return view('tpProducts.create');
    }

    public function store(Request $request){

        $tpProducts=TpProducts::create($request->all());
        return redirect()->route('tpproducto.index');
    }

    public function show($id){
        // SELECT * FROM entity WHERE ID = ? 111  FIND
        $tpProducts=TpProducts::find($id);
        return view('tpProducts.show',compact('tpProducts'));
    }
    //Editar
    public function edit($id){
        $tpProducts=TpProducts::find($id);
        return view('tpProducts.edit', compact('tpProducts'));
    }
    //Update
    public function update(Request $request,$id){
        $tpProducts=TpProducts::find($id)->update($request->all());
        return redirect()->route('tpproducto.index');
    }
    //Delete
    public function destroy($id){
        $tpProducts=TpProducts::find($id)->delete();
        return redirect()->route('tpproducto.index');
    }
}
