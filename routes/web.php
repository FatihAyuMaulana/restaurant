<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\TransactionController;
// use App\Http\Controllers\AdminContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\MenuController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/menu', [App\Http\Controllers\MenuController::class, 'adminMenu'])->name('admin.menu.menu');
    Route::get('/menu/create', [App\Http\Controllers\MenuController::class, 'create'])->name('admin.menu.create');
    Route::post('/menu', [App\Http\Controllers\MenuController::class, 'store'])->name('admin.menu.store');
    Route::get('/menu/{id}/edit', [App\Http\Controllers\MenuController::class, 'edit'])->name('menu.edit');
   // Definisikan rute untuk mengupdate menu
Route::put('admin/menu/update/{id}', [MenuController::class, 'update'])->name('admin.menu.update');

    Route::delete('/menu/{id}', [App\Http\Controllers\MenuController::class, 'delete'])->name('menu.delete');




    // Route::get('/menu/create', [App\Http\Controllers\MenuController::class, 'create'])->name('admin.menu.create'); 

    // Route::get('/menu/create', [App\Http\Controllers\MenuController::class, 'create'])->name('admin.menu.create');  
});



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/contact', [ContactController::class, 'index'])->name('admin.contact.index');
});

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::get('/admin/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('admin.contact.index');
Route::get('/admin/contact/{id}', [App\Http\Controllers\ContactController::class, 'show'])->name('admin.contact.show');



Route::get('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::get('/cart/receipt/{id}', [CartController::class, 'showReceipt'])->name('cart.receipt');
Route::patch('cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');

Route::get('/gourmet-spot', [RestaurantController::class, 'gourmetSpot'])->name('gourmet_spot');


Route::get('/transaction', [App\Http\Controllers\TransactionController::class, 'index'])->name('transactions.report');
// Route::get('/transaction/report', [TransactionController::class, 'printReport'])->name('transactions.report.print');


Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::post('/user', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');

