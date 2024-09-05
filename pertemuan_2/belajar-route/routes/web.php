<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rute sederhana
Route::get('/hello', function () {
    return view('hello');
});

//Rute dengan parameter
Route::get('/user/{id}', function ($id) {
    return "User ID: " . $id;
});

//Rute dengan parameter opsional
Route::get('/user/{name?}', function ($name = 'Guest') {
    return "Hello: " . $name;
});

//Rute dengan nama
Route::get('/profile', function () {
    return 'This is the profile page';
})->name('profile');

//Menggunakan rute bernama untuk pengalihan
Route::get('/redirect', function () {
    return redirect()->route('profile');
});

//Rute Grup
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/profile', function () {
        return 'Admin Profile';
    });
});

//Rute Middleware 
Route::get('/dashboard', function(){
    return 'Welcome to your dashboard';
});

//Rute Sumber Daya
Route::resource('post','PostController');