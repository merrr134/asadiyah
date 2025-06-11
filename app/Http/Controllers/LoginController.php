<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    // Tampilkan halaman login
    public function showLoginForm()
    {
        return view('admin.login'); // Pastikan file ini ada: resources/views/admin/login.blade.php
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Coba login menggunakan Auth default (guard: web)
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard'); // Ganti sesuai dashboard kamu
        }

        // Kalau gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
