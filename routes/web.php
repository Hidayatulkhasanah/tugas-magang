<?php

use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/fetch-data', [ApiController::class, 'fetchData']);

Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/shop', [Controller::class, 'shop'])->name('shop');
Route::get('/transaksi', [Controller::class, 'transaksi'])->name('transaksi');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
Route::get('api/v1//product', [Controller::class, 'product'])->name('product');
