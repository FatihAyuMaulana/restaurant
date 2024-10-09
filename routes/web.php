<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('menu', App\Http\Controllers\MenuController::class);
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/menu', [App\Http\Controllers\MenuController::class, 'adminMenu'])->name('admin.menu.menu');
    Route::get('/menu/create', [App\Http\Controllers\MenuController::class, 'create'])->name('admin.menu.create');  
});


Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::get('/gourmet-spot', [RestaurantController::class, 'gourmetSpot'])->name('gourmet_spot');

