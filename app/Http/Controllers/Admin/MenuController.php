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
}
