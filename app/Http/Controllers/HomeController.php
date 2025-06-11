<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Berita;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $programs = Program::all();  // ambil data semua program dari DB
        return view('home', compact('programs')); // kirim ke view
    }

    public function adminDashboard()
    {
        return view('admin.dashboard');  // halaman admin
    }

    public function __construct()
    {
        $this->middleware('auth')->only('adminDashboard');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
{
    $beritas = Berita::latest()->take(3)->get(); // Ambil 3 berita terbaru
    $testimonis = Testimonial::all();
    $programs = Program::all(); // Jika ada program juga
    return view('home', compact('beritas', 'programs', 'testimonis')); // Kirim ke view
}

}
