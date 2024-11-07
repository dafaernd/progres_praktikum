<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SuppliersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', function () {
    return view('produk');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'RoleCheck:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route Products
Route::get('/product', [ProductController::class, 'index'])->name('product-index');

// Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name("product-edit");
Route::put('/product/{id}', [ProductController::class, 'update'])->name("product-update");
Route::get('/product/create', [ProductController::class, 'create'])->name("product-create");
Route::post('product', [ProductController::class, 'store'])->name("product-store");
Route::delete('product/{id}', [ProductController::class, 'destroy'])->name('product-deleted');


//Route Suppliers
Route::get('/suppliers', [SuppliersController::class, 'index']);

Route::get('/suppliers/create', [SuppliersController::class, 'create'])->name("suppliers-create");
Route::post('suppliers', [SuppliersController::class, 'store'])->name("suppliers-store");



require __DIR__ . '/auth.php';
