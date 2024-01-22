<?php

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\VendorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppController;
use App\Models\Menu;
use App\Models\Vendor;

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


Route::middleware(['guest'])->group(function(){

    ////////// Guest View Controller //////////
    Route::get('/',[HomeController::class, 'index'])->name('homepage');
    Route::get('/menu',[HomeController::class, 'menu'])->name('menu');
    Route::get('/tentangkami',[HomeController::class, 'about'])->name('about');
    Route::get('/kontak',[HomeController::class, 'contact'])->name('contact');
    Route::get('/menu',[HomeController::class, 'filterMenu'])->name('menu');


    ////////// Guest Login & Regis Controller //////////
    Route::get('/login', [AuthController::class, 'index'])->name('auth');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/reg', [AuthController::class, 'create'])->name('registrasi');
    Route::post('/reg', [AuthController::class, 'register']);
    Route::get('/verify/{verify_key}', [AuthController::class, 'verify']);
});

Route::middleware(['auth'])->group(function(){

    ////////// User View Controller //////////
    Route::redirect('/home', '/user');
    Route::get('/menu_user',[UserController::class, 'menu_user'])->name('menu_user')->middleware('userAkses:user');
    Route::get('/tentangkami_user',[UserController::class, 'about_user'])->name('about_user')->middleware('userAkses:user');
    Route::get('/kontak_user',[UserController::class, 'contact_user'])->name('contact_user')->middleware('userAkses:user');
    Route::get('/menu_user',[UserController::class, 'filterMenu_user'])->name('menu_user')->middleware('userAkses:user');
    

    ////////// User Cart Controller //////////
    Route::get('/shopping-cart', [UserController::class, 'menuOrder'])->name('shopping.order')->middleware('userAkses:user');
    Route::get('/menu/{id}', [UserController::class, 'addMenutoOrder'])->name('addMenu.to.order')->middleware('userAkses:user');
    Route::patch('/update-shopping-cart', [UserController::class, 'updateOrder'])->name('update.sopping.order')->middleware('userAkses:user');
    Route::delete('/delete-cart-menu', [UserController::class, 'deleteMenu'])->name('delete.cart.menu')->middleware('userAkses:user');
    

    ////////// User Order & Logout Controller //////////
    Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('userAkses:user');
    Route::get('/user/order', [UserController::class, 'order_page'])->name('order_page')->middleware('userAkses:user');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    
    ////////// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ //////////

    ////////// Admin Controller //////////
    Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('userAkses:admin');


    ////////// Admin Kategori Controller //////////
    Route::get('/datakategori', [CategoryController::class, 'data_kategori'])->name('datakategori')->middleware('userAkses:admin');
    Route::get('/createcategory', [CategoryController::class, 'create_category'])->name('createcategory')->middleware('userAkses:admin');
    Route::post('/categories', [CategoryController::class, 'store_category'])->name('categories')->middleware('userAkses:admin');
    Route::get('datakategori/{id}/editcategory', [CategoryController::class, 'edit_category'])->name('editcategory')->middleware('userAkses:admin');
    Route::put('{id}/updatecategory', [CategoryController::class, 'category_update'])->name('updatecategory')->middleware('userAkses:admin');
    Route::get('datakategori/{id}/deletecategory', [CategoryController::class, 'category_delete'])->name('deletecategory')->middleware('userAkses:admin');
    ////////// Admin Pengguna Controller //////////
    Route::get('/data_pengguna',[CustomerController::class, 'data_pengguna'])->name('data_pengguna')->middleware('userAkses:admin');


    ////////// Admin Menu Controller //////////
    Route::get('/datamenu', [MenuController::class, 'data_menu'])->name('datamenu')->middleware('userAkses:admin');
    Route::get('/createmenu', [MenuController::class, 'create_menu'])->name('createmenu')->middleware('userAkses:admin');
    Route::post('/menus', [MenuController::class, 'store_menu'])->name('menus')->middleware('userAkses:admin');
    Route::get('datamenu/{id}/editmenu', [MenuController::class, 'edit_menu'])->name('editmenu')->middleware('userAkses:admin');
    Route::put('{id}/updatemenu', [MenuController::class, 'menu_update'])->name('updatemenu')->middleware('userAkses:admin');
    Route::get('datamenu/{id}/deletemenu', [MenuController::class, 'menu_delete'])->name('deletemenu')->middleware('userAkses:admin');
    

    ////////// Admin Vendor Controller //////////
    Route::get('/datavendor', [VendorController::class, 'data_vendor'])->name('datavendor')->middleware('userAkses:admin');
    Route::get('/createvendor', [VendorController::class, 'create_vendor'])->name('createvendor')->middleware('userAkses:admin');
    Route::post('/vendors', [VendorController::class, 'store_vendor'])->name('vendors')->middleware('userAkses:admin');
    Route::get('datavendor/{id}/editvendor', [VendorController::class, 'edit_vendor'])->name('editvendor')->middleware('userAkses:admin');
    Route::put('{id}/updatevendor', [VendorController::class, 'vendor_update'])->name('updatevendor')->middleware('userAkses:admin');
    Route::get('datavendor/{id}/deletevendor', [VendorController::class, 'vendor_delete'])->name('deletevendor')->middleware('userAkses:admin');
});