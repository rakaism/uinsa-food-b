<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.customer.homepage');
    }

    public function menu(){
        return view('frontend.customer.page.page_menu');
    }
}
