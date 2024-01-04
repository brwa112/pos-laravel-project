<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\supplier;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $data=Product::with('category')->barcode($request->search);
        return view('admin.product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies=supplier::all();
        $category=Category::all();
        return view('admin.product.create',compact('category','companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {

        Product::create([
            'barcode'=>$request->barcode,
            'name'=>$request->name,
            'buy_price'=>$request->buy_price,
            'selling_price'=>$request->selling_price,
            'quantity'=>$request->quantity,
            'create_date'=>$request->create_date,
            'expire_date'=>$request->expire_date,
            'category_id'=>$request->category_id,
            'suppliers_id'=>$request->suppliers_id	

        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Product::find($id)->delete();
        return redirect()->back();
    }
}
