<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    function data_vendor()
    {
        $vendors = Vendor::all();

        return view('pointakses/admin/data_vendor/tampilkan_vendor', compact('vendors'));
    }

    function create_vendor()
    {
        return view('pointakses/admin/data_vendor/create');
    }

     function store_vendor(Request $request)
    {
        $vendor = new Vendor();
        $vendor->vendor_name = $request->input('vendor_name');
        $vendor->vendor_phone_num = $request->input('vendor_phone_num');
        $vendor->vendor_adress = $request->input('vendor_adress');
        $vendor->save();

        return redirect()->route('datavendor');
    }

    
    function edit_vendor( string $id): View
    {
        $vendors = Vendor::findOrFail($id);

        return view('pointakses/admin/data_vendor/edit', compact('vendors'));
    }

    
    function vendor_update(Request $request, $id)
    {
        $vendors = Vendor::find($id);
        $vendors->vendor_name = $request->input('vendor_name');
        $vendors->vendor_adress = $request->input('vendor_adress');
        $vendors->vendor_phone_num = $request->input('vendor_phone_num');
        $vendors->save();

        return redirect()->route('datavendor')-> with('Berhasil', 'Vendor berhasil diupdate.');;
    }
}
