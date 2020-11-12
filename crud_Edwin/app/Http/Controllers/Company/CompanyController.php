<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index(){
        $companies=Company::all();
        return view('company.index',compact('companies'));
    }
    public function create(){
        return view('company.create');
    }
    public function store(Request $request){
        $company=Company::create($request->all());
        return redirect()->route('company.index');
    }
    public function show($id){
        // SELECT * FROM entity WHERE ID = ? 111  FIND
        $company=Company::find($id);
        return view('company.show',compact('company'));
    }
    //editar
    public function edit($id){
        $company=Company::find($id);
        return view('company.edit',compact('company'));
    }
    //Actualizar
    public function update(Request $request, $id){
        $company=Company::find($id)->update($request->all());
        return redirect()->route('company.index');
    }
    //Eliminar
    public function destroy($id){
        $company=Company::find($id)->delete();
        return redirect()->route('company.index');
    }
}
