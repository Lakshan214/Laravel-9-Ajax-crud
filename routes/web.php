<?php

use App\Models\procuct;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productCrud;

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



Route::get('/',[productCrud::class,'product_view'])->name('product.view');
Route::post('add-product',[productCrud::class,'addProduct'])->name('add.product');