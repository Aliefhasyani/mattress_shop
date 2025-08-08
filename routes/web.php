<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard/admin',[AdminController::class,'index'])->middleware(['auth','role:admin'])->name('admin.dashboard');
Route::get('/dashboard/seller',[SellerController::class,'index'])->middleware(['auth','role:seller'])->name('seller.dashboard');

Route::get('/admin/products',[AdminController::class,'getAllProducts'])->middleware(['auth','role:admin'])->name('products.list');

Route::get('/products',[ItemController::class,'getAll'])->name('products');
Route::get('/products/{id}',[ItemController::class,'show'])->name('show.product');

require __DIR__.'/auth.php';
