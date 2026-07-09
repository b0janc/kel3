<?php

namespace App\Http\Controllers;

use App\Models\Produk; // pastikan model Produk udah ada
use Illuminate\Http\Request;

class PelangganDashboardController extends Controller
{
    /**
     * Tampilkan dashboard pelanggan dengan daftar menu.
     */
    public function index()
    {
        // Ambil semua produk yang stoknya masih ada, urutkan berdasarkan kategori
        $menu = Produk::where('stok', '>', 0)
                    ->orderBy('kategori')
                    ->get();

        // Lempar ke view dashboard/pelanggan.blade.php
        return view('dashboard.pelanggan', compact('menu'));
    }
}