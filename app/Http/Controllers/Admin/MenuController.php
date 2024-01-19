<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Vendor;
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
        $categories = Category::all();
        $vendors = Vendor::all();

        return view('pointakses/admin/data_menu/create', compact('categories', 'vendors'));
    }

     function store_menu(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png'
        ]);
        
        $menu = new Menu();
        $menu = $request->file('image');
        $menu->storeAs('public/menu_images', $image->hashName());

        $menu->menu_name = $request->input('menu_name');
        $menu->save();

        return redirect()->route('datamenu');
    }

    
    function edit_menu( string $id): View
    {
        $menus = Menu::findOrFail($id);

        return view('pointakses/admin/data_menu/edit', compact('menus'));
    }

    
    function menu_update(Request $request, $id)
    {
        $menus = Menu::find($id);
        $menus->menu_name = $request->input('menu_name');
        $menus->save();

        return redirect()->route('datamenu')-> with('Berhasil', 'Menu berhasil diupdate.');;
    }
}
