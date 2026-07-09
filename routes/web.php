<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\KasirDashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RiwayatTransaksiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Route untuk Guest (belum login)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect()->route('auth.login');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login')->name('login.post');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});

/*
|--------------------------------------------------------------------------
| Route yang membutuhkan autentikasi (semua user login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // Dashboard umum (opsional, bisa diarahkan sesuai role)
    Route::get('/dashboard', function () {
        // Redirect berdasarkan role (contoh)
        if (auth()->user()->role === 'admin') {
            return redirect()->route('dashboard.admin');
        }
        return redirect()->route('dashboard.kasir');
    })->name('dashboard');

    // Checkout
    Route::controller(CheckoutController::class)->group(function () {
        Route::get('/checkout', 'index')->name('checkout');
        Route::post('/checkout/process', 'process')->name('checkout.process');
        Route::get('/checkout/success/{id}', 'success')->name('checkout.success'); // ← perbaiki nama
    });

    // Riwayat transaksi
    Route::get('/riwayat-transaksi', [RiwayatTransaksiController::class, 'index'])->name('riwayat.transaksi');

    // Keranjang (contoh, sesuaikan dengan controller jika ada)
    Route::get('/cart', function () {
        return view('keranjang');
    })->name('cart');
});

/*
|--------------------------------------------------------------------------
| Route khusus role kasir
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:kasir'])->group(function () {
   Route::controller(KasirDashboardController::class)->group(function () {
    Route::get('/dashboard/kasir', 'index')->name('dashboard.kasir');
    });
});

/*
|--------------------------------------------------------------------------
| Route khusus role admin
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard/admin', [AdminDashboardController::class, 'index'])
        ->name('dashboard.admin');
});