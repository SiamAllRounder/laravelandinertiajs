<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/well', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'HomePage']);
Route::get('/product', [HomeController::class, 'ProductPage']);
// Route::inertia('/product', 'Product');
