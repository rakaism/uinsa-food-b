<?php

namespace App\Http\Controllers\Seller;
use App\Models\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellerMenuController extends Controller
{
    function data_menu_seller()
    {
        $menus = Menu::with('category')->get();

        return view('pointakses/seller/data_menu_seller/tampilkan_menu_seller', compact('menus'));
    }
}
