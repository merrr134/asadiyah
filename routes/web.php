<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ReasonController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;

// === PUBLIC ROUTES ===
Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/tentang-kami', function () {
    return view('tentang.index');
})->name('tentang');

Route::get('/tentang-kami/visi-misi', function () {
    return view('tentang.visi-misi');
})->name('visi-misi');

Route::get('/tentang-kami/organisasi', function () {
    return view('tentang.organisasi');
})->name('organisasi');

Route::get('/tentang-kami/sejarah', function () {
    return view('tentang.sejarah');
})->name('sejarah');

Route::get('/tentang-kami/berita', function () {
    return view('tentang.berita');
})->name('berita');

Route::get('/program', function () {
    return view('program');
})->name('program');

Route::get('/berita', [BeritaController::class, 'index'])->name('beritas.index');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('beritas.show');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

// Public API routes untuk testimonial
Route::get('/api/testimonials', [TestimonialController::class, 'getTestimonials'])->name('api.testimonials');

// Route untuk login admin (tanpa middleware auth)
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);



// Route admin dengan middleware auth
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/home', function () {
        return view('admin.home');
    })->name('home');

    Route::resource('program', ProgramController::class);
    Route::resource('reason', ReasonController::class);
    Route::resource('berita', AdminBeritaController::class)->parameters([
    'berita' => 'berita'
    ]);
    Route::resource('berita', AdminBeritaController::class);
    Route::resource('contacts', AdminContactController::class);

    Route::resource('testimonials', TestimonialController::class);
    Route::patch('testimonials/{testimonial}/toggle-status', [TestimonialController::class, 'toggleStatus'])->name('testimonials.toggle-status');
    Route::resource('contacts', AdminContactController::class);

    // Tambahan ini pakai controller admin, bukan public
    Route::post('contacts/{contact}/toggle-read', [AdminContactController::class, 'toggleRead'])->name('contacts.toggle-read');
    Route::post('contacts/mark-all-read', [AdminContactController::class, 'markAsRead'])->name('contacts.mark-all-read');
    Route::post('contacts/bulk-delete', [AdminContactController::class, 'bulkDelete'])->name('contacts.bulk-delete');
});
