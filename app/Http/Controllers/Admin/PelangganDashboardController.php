<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.kasir'); // sesuaikan dengan view yang ada
    }
}