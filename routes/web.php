<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/menu',[App\Http\Controllers\HomeController::class, 'menu'])->name('menu');
Route::get('/tentangkami',[App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/kontak',[App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class,'index']);