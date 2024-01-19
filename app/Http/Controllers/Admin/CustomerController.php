<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use PharIo\Manifest\Email;

class CustomerController extends Controller
{
    public function data_pengguna()
    {
        $users=User::all();
        return view('pointakses/admin/data_pengguna/tampilkan_data', compact('users'));
    }
}
