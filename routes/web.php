<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ItemController::class,'home'])->name('home');

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
Route::get('/admin/products/show/{id}',[AdminController::class,'show'])->middleware(['auth','role:admin'])->name('admin.product');
Route::delete('/admin/products/delete/{id}',[ItemController::class,'destroy'])->middleware(['auth','role:admin'])->name('delete.product');
Route::get('/admin/companies',[AdminController::class,'getAllCompanies'])->middleware(['auth','role:admin'])->name('companies.list');

Route::get('/products',[ItemController::class,'getAll'])->name('products');
Route::get('/products/{id}',[ItemController::class,'show'])->name('show.product');

Route::get('/about',function(){
    return view('about');
});

Route::get('/admin/create/product',[ItemController::class,'create'])->middleware(['auth','role:admin'])->name('product.create');
Route::post('/admin/store/product',[ItemController::class,'store'])->middleware(['auth','role:admin'])->name('product.store');

Route::get('/admin/product/edit/{id}',[ItemController::class,'edit'])->middleware(['auth','role:admin'])->name('product.edit');
Route::put('/admin/product/update/{id}',[ItemController::class,'update'])->middleware(['auth','role:admin'])->name('product.update');

Route::get('/admin/create/company',[CompanyController::class,'create'])->middleware(['auth','role:admin'])->name('company.create');
Route::post('/admin/stroe/company',[CompanyController::class,'store'])->middleware(['auth','role:admin'])->name('company.store');
require __DIR__.'/auth.php';
