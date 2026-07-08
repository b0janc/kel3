<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RiwayatTransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

//autentikasi

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login')->name('login.post');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});

//halaman login

Route::middleware(['auth'])->group(function () {

//admin
    Route::get('/dashboard', [DashboardController::class, 'index'])-> name('dashboard');

//checkout
    Route::controller(CheckoutController::class)->group(function () {
        Route::get('/checkout', 'index')->name('checkout');
        Route::post('/checkout/process', 'process')->name('checkout.process');
        Route::get('/checkout/success/{id}', 'success')->name('checkout.process');
    });

    Route::get('/riwayat-transaksi', [RiwayatTransaksiController::class, 'index'])->name('riwayat.transaksi');

});
