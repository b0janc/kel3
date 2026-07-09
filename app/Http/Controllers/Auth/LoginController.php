<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // Cek role user
        $user = auth()->user();
        if ($user->role === 'admin') {
            return redirect()->route('dashboard.admin');   // ke dashboard admin
        } else {
            return redirect()->route('dashboard.pelanggan'); // ke dashboard pelanggan
        }
    }

    return back()->withErrors([
        'email' => 'Email atau Password Salah',
    ])->onlyInput('email');
}
}


