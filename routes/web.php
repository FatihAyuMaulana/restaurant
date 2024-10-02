<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/menu', App\Http\Controllers\MenuController::class);
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/admin/menu/minuman', [MenuController::class, 'minuman'])->name('admin.menu.minuman');

// // File: routes/web.php
// Route::get('/menu/minuman', function () {
//     return view('admin.menu.minuman');
// })->name('admin.menu.minuman');

