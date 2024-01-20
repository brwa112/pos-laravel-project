<?php

use Carbon\Carbon;
use App\Models\cart;
use App\Models\invoice;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\ExpireController;
use App\Http\Controllers\admin\SallesController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SupplierController;
use App\Http\Controllers\admin\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/dashboard', function (Request $request) {
//     $today=invoice::whereDay('created_at', now()->day)->get();
//     $month=invoice::Date($request->star,$request->end);
//     $expire=Product::whereDate('expire_date', '<', Carbon::now())->count();
//     return view('admin.dashboard',compact('today','month','expire'));
// })->name('dashboard');

Route::get('/',function(){
    if (Auth::user()) {
        return redirect()->route('home');
    }else{
        return view('welcome');
    }
});


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('admin/category',CategoryController::class)->except('create','show',);
    Route::resource('admin/product',ProductController::class)->except('show');
    Route::resource('admin/user',UserController::class)->except('show');
    Route::resource('admin/supplier',SupplierController::class)->except('show');
    Route::resource('/pos',PosController::class)->except('create','show','destroy','update','edit');
    Route::resource('/cart',cartController::class)->except('create','show','index','update','edit');
    Route::get('admin/sales',[SallesController::class,'index'])->name('sales');
    Route::get('admin/sales/show/{id}',[SallesController::class,'show'])->name('showSale');
    Route::get('admin/expire',[ExpireController::class,'index'])->name('expire');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
