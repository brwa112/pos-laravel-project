<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Http\Request;

class ExpireController extends Controller
{
    public function index(){
        $data=Product::whereDate('expire_date', '<', Carbon::now())->get();
        return view('admin.expire.index',compact('data'));
    }
}
