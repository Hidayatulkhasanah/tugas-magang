<?php

use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


Route::get('/fetch-data', [Controller::class, 'fetchData'])->name('data');

Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/shop', [Controller::class, 'shop'])->name('shop');
Route::get('/transaksi', [Controller::class, 'transaksi'])->name('transaksi');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
Route::get('/product-list', [Controller::class, 'productList'])->name('product-list');


// Create (Tambah Data)
Route::post('/item', [Controller::class, 'product'])->name('item.product');

// Read (Tampilkan Data)
Route::get('/item', [Controller::class, 'index'])->name('item.index');

// Update (Perbarui Data)
Route::put('/item/{item}', [Controller::class, 'update'])->name('item.update');

// Delete (Hapus Data)
Route::delete('/item/{item}', [Controller::class, 'destroy'])->name('item.destroy');
