<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\User;
use App\Models\vendor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {
        return view('pointakses/admin/index');
    }
}