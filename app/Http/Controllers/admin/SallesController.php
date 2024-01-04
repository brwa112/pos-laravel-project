<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\invoice;
use Illuminate\Http\Request;

class SallesController extends Controller
{
    public function index(Request $request){
        
        $data=invoice::with('order')->ById($request->search);
        return view('admin.sales.invoices',compact('data'));
    }
    public function show($id){
        $data=invoice::with('order')->find($id);
        return view('admin.sales.show',compact('data'));
    }
}
