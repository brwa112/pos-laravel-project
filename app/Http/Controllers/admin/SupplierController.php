<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupplierRequest;
use App\Models\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=supplier::all();
        return view('admin.suppliers.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupplierRequest $request)
    {
        supplier::create([
            'name'=>$request->name,
            'phone_number'=>$request->phoneNumber,
            'address'=>$request->address
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
        $data=supplier::find($id);
        return view('admin.suppliers.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupplierRequest $request, string $id)
    {
        $data=supplier::find($id);
        $data->update([
            'name'=>$request->name,
            'phone_number'=>$request->phoneNumber,
            'address'=>$request->address,
        ]);
        return redirect()->route('supplier.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        supplier::findOrfail($id)->delete();
        return redirect()->back();
    }
}
