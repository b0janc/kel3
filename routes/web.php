<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/cart', function () {
    return view('keranjang');
})->name('cart');

Route::get('/riwayat-transaksi', function () {
    return view('riwayat-transaksi');
})->name('riwayat-transaksi');

Route::get('/admin', [DashboardController::class, 'index'])->name('Dashboard');