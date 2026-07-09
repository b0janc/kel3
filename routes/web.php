<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PelangganDashboardController;
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


Route::middleware(['auth', 'role:pelanggan'])->group(function () {
    Route::get('/dashboard/pelanggan', [PelangganDashboardController::class, 'index'])->name('dashboard.pelanggan');
});


//halaman login
 Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard/admin', [DashboardController::class, 'index'])->name('dashboard.admin');
});

Route::middleware(['auth'])->group(function () {

//admin
    Route::get('/dashboard/admin', [DashboardController::class, 'index'])-> name('dashboard.admin');

//checkout
    Route::controller(CheckoutController::class)->group(function () {
        Route::get('/checkout', 'index')->name('checkout');
        Route::post('/checkout/process', 'process')->name('checkout.process');
        Route::get('/checkout/success/{id}', 'success')->name('checkout.process');
    });

    Route::get('/riwayat-transaksi', [RiwayatTransaksiController::class, 'index'])->name('riwayat.transaksi');

});
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
