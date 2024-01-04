<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order;
use App\Models\invoice;
use App\Models\Product;
use Illuminate\Http\Request;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data=cart::all();
        $total=0;
        foreach ($data as $value) {
            $total +=$value->sell_price* $value->quantity;
        }
        return view('pointOfsale',compact('data','total'));
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
        $data=cart::all();
        if (count($data) > 0) {
            $invoice=invoice::create([
                'casher'=>'admin',
                'total'=>$request->total
            ]);
            foreach ($data as $value) {
                order::create([
                    'barcode'=>$value->barcode,
                    'name'=>$value->name,
                    'sell_price'=>$value->sell_price,
                    'quantity'=>$value->quantity,
                    'invoice_id'=>$invoice->id
                ]);
            }
            foreach ($data as $value) {
                cart::find($value->id)->delete();
            }
            return redirect()->back();
        }else{
            return redirect()->back();
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
        //
    }
}
