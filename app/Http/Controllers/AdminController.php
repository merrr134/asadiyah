<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Tampilkan form login admin
     */
    public function showLoginForm()
    {
        // Redirect jika sudah login
        if (Auth::check() && Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        
        return view('admin.login');
    }

    /**
     * Proses login admin
     */
    public function login(Request $request)
    {
        // Rate limiting untuk mencegah brute force
        $key = 'login.' . $request->ip();
        
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            return back()->withErrors([
                'email' => "Terlalu banyak percobaan login. Coba lagi dalam {$seconds} detik."
            ])->withInput($request->only('email'));
        }

        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => [
                'required',
                'email',
                'max:255'
            ],
            'password' => [
                'required',
                'string',
                'min:6'
            ]
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 6 karakter.'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }

        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember');

        // Coba autentikasi
        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();
            
            // Cek apakah user adalah admin
            if ($user->role !== 'admin') {
                Auth::logout();
                RateLimiter::hit($key);
                
                return back()->withErrors([
                    'email' => 'Akses ditolak. Anda bukan admin.'
                ])->withInput($request->only('email'));
            }

            // Regenerate session untuk keamanan
            $request->session()->regenerate();
            
            // Clear rate limiter jika berhasil
            RateLimiter::clear($key);
            
            // Update last login
            $user->update([
                'last_login_at' => now(),
                'last_login_ip' => $request->ip()
            ]);

            // Redirect ke dashboard dengan pesan sukses
            return redirect()
                ->route('admin.dashboard')
                ->with('success', 'Selamat datang kembali, ' . $user->name . '!');
        }

        // Jika gagal login, tambah attempt ke rate limiter
        RateLimiter::hit($key);

        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.'
        ])->withInput($request->only('email'));
    }

    /**
     * Dashboard admin
     */
    public function dashboard()
    {
        // Pastikan hanya admin yang bisa akses
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            return redirect()->route('admin.login');
        }

        $user = Auth::user();
        
        // Data statistik untuk dashboard (opsional)
        $stats = [
            'total_users' => User::count(),
            'total_programs' => \App\Models\Program::count() ?? 0,
            'total_berita' => \App\Models\Berita::count() ?? 0,
            'total_testimonials' => \App\Models\Testimonial::count() ?? 0,
        ];

        return view('admin.dashboard', compact('user', 'stats'));
    }

    /**
     * Logout admin
     */
    public function logout(Request $request)
    {
        if (Auth::check()) {
            // Update last activity
            Auth::user()->update([
                'last_activity_at' => now()
            ]);
        }

        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('admin.login')
            ->with('success', 'Anda berhasil logout.');
    }

    /**
     * Middleware untuk memastikan user adalah admin
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::check() && Auth::user()->role !== 'admin') {
                Auth::logout();
                return redirect()->route('admin.login')
                    ->withErrors(['access' => 'Akses ditolak.']);
            }
            return $next($request);
        })->except(['showLoginForm', 'login']);
    }
}