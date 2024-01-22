<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Vendor;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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

     function store_menu(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'menu_pic'     => 'required|image|mimes:jpeg,jpg,png'
        ]);
        
        $menu = new Menu();
        if ($request->hasFile('menu_pic')) {
            $image = $request->file('menu_pic');
            $imagePath = $image->storeAs('public/menu_images/', $image->hashName());
            $menu->menu_pic = $imagePath;
        }
        
        $menu->menu_name = $request->input('menu_name');
        $menu->menu_price = $request->input('menu_price');
        $menu->category_id = $request->input('category');
        $menu->vendor_id = $request->input('vendor');
        $menu->menu_desc = $request->input('menu_desc');
        $menu->save();

        return redirect()->route('datamenu')->with(['success' => 'Data Berhasil Disimpan!']);
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
    public function menu_delete($id)
    {
        $menus = menu::find($id);
        $menus->delete();
    
        return redirect()->back();
    }
}