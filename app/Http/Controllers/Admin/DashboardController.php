<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use App\Models\Produk;   // Model untuk menu makanan/minuman
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Tampilkan dashboard sesuai role pengguna.
     */
    public function index()
    {
        $user = auth()->user();

        if ($user->role === 'admin') {
            // ===== DASHBOARD ADMIN =====
            $today = Carbon::today();

            $totalTransaksiHariIni = Transaksi::whereDate('created_at', $today)->count();
            $totalPendapatanHariIni = Transaksi::whereDate('created_at', $today)->sum('total');
            $rataRataTransaksi = $totalTransaksiHariIni > 0
                ? $totalPendapatanHariIni / $totalTransaksiHariIni
                : 0;

            $transaksiTerbaru = Transaksi::with('user')
                ->whereDate('created_at', $today)
                ->latest()
                ->take(5)
                ->get();

            return view('dashboard.admin', compact(
                'totalTransaksiHariIni',
                'totalPendapatanHariIni',
                'rataRataTransaksi',
                'transaksiTerbaru'
            ));
        } else {
            // ===== DASHBOARD PELANGGAN =====
            // Ambil semua produk yang tersedia (menu)
            $menu = Produk::where('stok', '>', 0)  // hanya yang tersedia
                        ->orderBy('kategori')
                        ->get();

            return view('dashboard.pelanggan', compact('menu'));
        }
    }
}