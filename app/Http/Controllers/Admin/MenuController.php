<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function data_menu()
    {
        $menus = Menu::all();

        return view('pointakses/admin/data_menu/tampilkan_menu', compact('menus'));
    }

    function create_menu()
    {
        return view('pointakses/admin/data_menu/create');
    }

     function store_menu(Request $request)
    {
        $menus = new Menu();
        $menu->menu_name = $request->input('menu_name');
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
