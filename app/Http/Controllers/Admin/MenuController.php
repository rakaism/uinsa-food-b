<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    function data_menu()
    {
        $menus = Menu::with('category')->get();

        return view('pointakses/admin/data_menu/tampilkan_menu', compact('menus'));
    }

    function create_menu()
    {
        return view('pointakses/admin/data_menu/create');
    }

     function store_menu(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);
        
        $menu = new Menu();
        $menu = $request->file('image');
        $menu->storeAs('public/menu_images', $image->hashName());

        $menu->menu_name = $request->input('menu_name');
        $vendor->save();

        return redirect()->route('datavendor');
    }

    
    function edit_vendor( string $id): View
    {
        $menus = Menu::findOrFail($id);

        return view('pointakses/admin/data_menu/edit', compact('menus'));
    }

    
    function vendor_update(Request $request, $id)
    {
        $menus = Menu::find($id);
        $menus->menu_name = $request->input('menu_name');
        $menus->save();

        return redirect()->route('datamenu')-> with('Berhasil', 'Menu berhasil diupdate.');;
    }
}
