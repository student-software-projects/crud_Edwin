<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\TpProducts\TpProductsController;
use App\Http\Controllers\Product\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Companias
Route::get('company',[CompanyController::class,'index'])->name('company.index');
Route::get('company/create',[CompanyController::class,'create'])->name('company.create');
Route::post('company',[CompanyController::class,'store'])->name('company.store');
Route::get('company/{id}',[CompanyController::class,'show'])->name('company.show');

Route::get('company/edit/{id}',[CompanyController::class,'edit'])->name('company.edit');
Route::put('company/{id}',[CompanyController::class,'update'])->name('company.update');
Route::delete('company/{id}',[CompanyController::class,'destroy'])->name('company.destroy');

//_________________________________________________________________________________________________
//Tipo de productos
Route::get('tpproducto',[TpProductsController::class,'index'])->name('tpproducto.index');
Route::get('tpproducto/create',[TpProductsController::class,'create'])->name('tpproducto.create');
Route::post('tpproducto',[TpProductsController::class,'store'])->name('tpproducto.store');
Route::get('tpproducto/{id}',[TpProductsController::class,'show'])->name('tpproducto.show');

Route::get('tpproducto/edit/{id}',[TpProductsController::class,'edit'])->name('tpproducto.edit');
Route::put('tpproducto/{id}',[TpProductsController::class,'update'])->name('tpproducto.update');
Route::delete('tpproducto/{id}',[TpProductsController::class,'destroy'])->name('tpproducto.destroy');

//_____________________________________________________________________________________________________
//Products
Route::get('product',[ProductController::class,'index'])->name('product.index');
Route::get('product/create',[ProductController::class,'create'])->name('product.create');
Route::post('product',[ProductController::class,'store'])->name('product.store');
Route::get('product/{id}',[ProductController::class,'show'])->name('product.show');


Route::delete('product/{id}',[ProductController::class,'destroy'])->name('product.destroy');
