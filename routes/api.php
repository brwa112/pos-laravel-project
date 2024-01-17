<?php

use Carbon\Carbon;
use App\Models\invoice;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\ExpireController;
use App\Http\Controllers\admin\SallesController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SupplierController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function (Request $request) {
    $today=invoice::whereDay('created_at', now()->day)->get();
    $month=invoice::Date($request->star,$request->end);
    $expire=Product::whereDate('expire_date', '<', Carbon::now())->count();
    return view('admin.dashboard',compact('today','month','expire'));
})->name('dashboard');

Route::resource('admin/category',CategoryController::class)->except('create','show','edit');
Route::resource('admin/product',ProductController::class)->except('show');
Route::resource('admin/supplier',SupplierController::class)->except('show');
Route::resource('/pos',PosController::class)->except('create','show','destroy','update','edit');
Route::resource('/cart',cartController::class)->except('create','show','index','update','edit');
Route::get('admin/sales',[SallesController::class,'index'])->name('sales');
Route::get('admin/sales/show/{id}',[SallesController::class,'show'])->name('showSale');
Route::get('admin/expire',[ExpireController::class,'index'])->name('expire');
