<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\invoice;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $today=invoice::whereDay('created_at', now()->day)->get();
        $month=invoice::Date($request->star,$request->end);
        $expire=Product::whereDate('expire_date', '<', Carbon::now())->count();
        return view('admin.dashboard',compact('today','month','expire'));
    }
}
