<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
})->middleware(['auth', 'verified', 'RoleCheck:user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/product', [ProductController::class, 'index']);
// Route::get('/product/create', [ProductController::class, 'create']);
// Route::post('/product', [ProductController::class, 'store']);
// Route::get('/product/{id}', [ProductController::class, 'show']);
// Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
// Route::put('/product/{id}', [ProductController::class, 'update']);
// Route::delete('/product/{id}', [ProductController::class, 'destroy']);

//Route::resource('product', ProductController::class);

require __DIR__ . '/auth.php';
