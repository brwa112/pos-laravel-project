<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Product;
use Illuminate\Http\Request;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $product=Product::where('barcode','like',$request->barcode)->first();
       $data=cart::where('barcode','like',$request->barcode)->first();
    //    $newQuantity=$product->quantity-$request->quantity;
        if ($product == '') {
            return redirect()->back()->with('msg','کاڵا نەدۆزرایەوە');
        }else{
            if ($data == '') {
                cart::create([
                    'barcode'=>$product->barcode,
                    'name'=>$product->name,
                    'sell_price'=>$product->selling_price,
                    'quantity'=>$request->quantity
                ]);
                // $product->update([
                //     'quantity'=>$newQuantity
                // ]);
                return redirect()->back();
            }else{
                    return redirect()->back()->with('msg','زیاد کراوە');
            }

        }
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
        //
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
        cart::find($id)->delete();
        return redirect()->back();
    }
}
