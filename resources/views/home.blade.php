@extends('layouts.app')

@section('content')
      <!-- Hero Section - Enhanced Design -->
<section class="relative min-h-screen overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/menu.jpg') }}" alt="Hero Image" class="w-full h-full object-cover">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/70 via-blue-800/50 to-green-800/70"></div>
        <!-- Animated Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/30"></div>
    </div>
    
    <!-- Floating Particles -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-20 left-10 w-2 h-2 bg-white/30 rounded-full animate-ping"></div>
        <div class="absolute top-40 right-20 w-1 h-1 bg-white/40 rounded-full animate-pulse"></div>
        <div class="absolute bottom-40 left-20 w-3 h-3 bg-white/20 rounded-full animate-bounce"></div>
        <div class="absolute top-60 left-1/4 w-1 h-1 bg-white/50 rounded-full animate-ping" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-60 right-1/3 w-2 h-2 bg-white/25 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
    </div>
    
    <!-- Main Content -->
    <div class="relative flex flex-col justify-center items-center text-center text-white min-h-screen px-6 z-10">
        <!-- Logo/Icon -->
        <div class="mb-8 transform hover:scale-110 transition-transform duration-500">
            <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center border border-white/20">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
            </div>
        </div>
        
        <!-- Main Title -->
        <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
            <span class="block bg-gradient-to-r from-white via-blue-100 to-green-100 bg-clip-text text-transparent animate-pulse">
                As'adiyah
            </span>
            <span class="block text-3xl md:text-4xl font-medium text-white/90 mt-2">
                Belawa Baru School
            </span>
        </h1>
        
        <!-- Subtitle -->
        <p class="text-xl md:text-2xl text-white/80 mb-8 max-w-3xl leading-relaxed">
            Membangun Generasi Berakhlak Mulia dan Berprestasi
        </p>
        
        <!-- Features Pills -->
        <div class="flex flex-wrap justify-center gap-4 mb-10">
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-4 py-2 text-sm text-white/90">
                ✨ Pendidikan Berkualitas
            </div>
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-4 py-2 text-sm text-white/90">
                🏛️ Fasilitas Modern
            </div>
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-4 py-2 text-sm text-white/90">
                👨‍🏫 Tenaga Ahli
            </div>
        </div>
        
        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="#tentang" class="group relative inline-flex items-center gap-3 bg-gradient-to-r from-blue-600 to-green-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:from-blue-700 hover:to-green-700 transform hover:scale-105 transition-all duration-300 shadow-xl hover:shadow-2xl">
                <span>Selengkapnya</span>
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
                <!-- Glow Effect -->
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-green-600 rounded-full blur-xl opacity-30 group-hover:opacity-50 transition-opacity -z-10"></div>
            </a>
            
            <a href="#program" class="group inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white/20 hover:border-white/50 transition-all duration-300">
                <span>Lihat Program</span>
                <svg class="w-5 h-5 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
            </a>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="w-8 h-12 border-2 border-white/50 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white/70 rounded-full mt-2 animate-pulse"></div>
            </div>
        </div>
    </div>
</section>

<!-- Information Card Section -->
<section class="relative -mt-32 px-4 z-20">
    <div class="max-w-7xl mx-auto">
        <!-- Main Info Card -->
        <div class="bg-white/95 backdrop-blur-lg rounded-2xl shadow-2xl p-8 border border-white/20 hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-2">
            <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center gap-6">
                <!-- Left Content -->
                <div class="lg:w-2/3">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-green-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl lg:text-4xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent">
                                Informasi & Pendaftaran Santri Baru
                            </h3>
                            <p class="text-gray-600 mt-1">Tahun Ajaran 2025/2026</p>
                        </div>
                    </div>
                    
                    <!-- Quick Info -->
                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
                        <div class="flex items-center gap-2 text-sm text-gray-600">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span>Pendaftaran Dibuka</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-600">
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            <span>Beasiswa Tersedia</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-600">
                            <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                            <span>Online & Offline</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right Content -->
                <div class="lg:w-1/3 flex flex-col sm:flex-row lg:flex-col gap-3">
                    <a href="#pendaftaran" class="group flex items-center justify-center gap-3 bg-gradient-to-r from-blue-600 to-green-600 text-white py-4 px-6 rounded-xl font-semibold hover:from-blue-700 hover:to-green-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span>Informasi PSB</span>
                    </a>
                    
                    <a href="#kontak" class="group flex items-center justify-center gap-3 bg-white border-2 border-gray-200 text-gray-700 py-4 px-6 rounded-xl font-semibold hover:border-green-300 hover:text-green-600 hover:bg-green-50 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span>Hubungi Kami</span>
                    </a>
                </div>
            </div>
        </div>
        
        
    </div>
</section>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
    
    section {
        font-family: 'Inter', sans-serif;
    }
    
    .bg-clip-text {
        background-clip: text;
        -webkit-background-clip: text;
    }
    
    .text-transparent {
        color: transparent;
    }
    
    /* Custom shadow */
    .shadow-3xl {
        box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
    }
    
    /* Animation keyframes */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    
    @media (max-width: 768px) {
        .text-5xl {
            font-size: 2.5rem;
        }
        .text-7xl {
            font-size: 3.5rem;
        }
    }
</style>

      <!-- About Us Section - Enhanced Design -->
<section id="tentang" class="relative overflow-hidden py-20 bg-gradient-to-br from-blue-50 via-white to-green-50">
    <!-- Background Decorative Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-green-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse" style="animation-delay: 2s;"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-5xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent mb-4">
                Tentang Kami
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-blue-600 to-green-600 mx-auto rounded-full"></div>
        </div>
        
        <!-- Main Content -->
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <!-- Image Section -->
            <div class="lg:w-1/2 transform hover:scale-105 transition-transform duration-500">
                <div class="relative group">
                    <!-- Main Image -->
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                        <img src="{{ asset('images/about.jpg') }}" 
                             alt="Pondok Pesantren As'adiyah" 
                             class="w-full h-96 object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
                        
                        <!-- Overlay Content -->
                        <div class="absolute bottom-6 left-6 text-white">
                            <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2 border border-white/30">
                                <p class="text-sm font-medium">Est. 1965</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative Border -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-green-600 rounded-2xl opacity-20 -z-10"></div>
                </div>
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 border border-white/50 hover:bg-white/90 transition-all duration-300">
                        <div class="text-2xl font-bold text-blue-600">1000+</div>
                        <div class="text-sm text-gray-600">Santri Aktif</div>
                    </div>
                    <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 border border-white/50 hover:bg-white/90 transition-all duration-300">
                        <div class="text-2xl font-bold text-green-600">50+</div>
                        <div class="text-sm text-gray-600">Tenaga Pengajar</div>
                    </div>
                </div>
            </div>
            
            <!-- Content Section -->
            <div class="lg:w-1/2 space-y-8">
                <!-- Title with Icon -->
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-green-600 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800">Pendidikan Berkualitas</h3>
                </div>
                
                <!-- Enhanced Description -->
                <div class="space-y-6">
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Pondok Pesantren As'adiyah Belawa Baru adalah lembaga pendidikan yang mengedepankan 
                        <span class="font-semibold text-blue-600">pendidikan agama</span> dan 
                        <span class="font-semibold text-green-600">ilmu pengetahuan umum</span>.
                    </p>
                    
                    <p class="text-gray-600 leading-relaxed">
                        Dengan pengalaman lebih dari 50 tahun, kami berkomitmen membentuk generasi yang 
                        berakhlak mulia, berilmu, dan siap menghadapi tantangan zaman.
                    </p>
                </div>
                
                <!-- Features List -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                        <span class="text-gray-700">Kurikulum Terintegrasi</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        <span class="text-gray-700">Fasilitas Modern</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-green-600 rounded-full"></div>
                        <span class="text-gray-700">Tenaga Pengajar Berkualitas</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                        <span class="text-gray-700">Lingkungan Islami</span>
                    </div>
                </div>
                
                <!-- CTA Button -->
                <div class="flex gap-4 pt-4">
                    <a href="#program" class="group relative inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-green-600 text-white px-8 py-4 rounded-full font-semibold hover:from-blue-700 hover:to-green-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <span>Pelajari Lebih Lanjut</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    
                    <a href="#kontak" class="inline-flex items-center gap-2 bg-white text-gray-700 px-8 py-4 rounded-full font-semibold border-2 border-gray-200 hover:border-green-300 hover:text-green-600 transition-all duration-300">
                        <span>Hubungi Kami</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    
    section {
        font-family: 'Inter', sans-serif;
    }
    
    .bg-clip-text {
        background-clip: text;
        -webkit-background-clip: text;
    }
    
    .text-transparent {
        color: transparent;
    }
    
    @media (max-width: 768px) {
        .text-5xl {
            font-size: 2.5rem;
        }
    }
</style>

      <!-- Statistik -->
      <section class="bg-green-500 py-12">
            <div class="max-w-7xl mx-auto px-6 md:px-12">
                  <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                        <div>
                              <h2 class="text-white text-4xl font-bold counter" data-target="600">0</h2>
                              <p class="text-white text-lg mt-2">Jumlah Siswa</p>
                        </div>
                        <div>
                              <h2 class="text-white text-4xl font-bold counter" data-target="1200">0</h2>
                              <p class="text-white text-lg mt-2">Alumni</p>
                        </div>
                        <div>
                              <h2 class="text-white text-4xl font-bold counter" data-target="20">0</h2>
                              <p class="text-white text-lg mt-2">Tahun Pendidikan</p>
                        </div>
                        <div>
                              <h2 class="text-white text-4xl font-bold counter" data-target="3">0</h2>
                              <p class="text-white text-lg mt-2">Program IB</p>
                        </div>
                  </div>
            </div>
      </section>

<!-- Program Unggulan -->
<section class="py-16 bg-gradient-to-br from-gray-600 via-gray-500 to-gray-700 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.3"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Program Unggulan</h2>
            <div class="w-24 h-1 bg-white mx-auto rounded-full"></div>
            <p class="text-gray-200 mt-4 text-lg">Discover our featured programs designed to make a difference</p>
        </div>
        
        <!-- Programs Grid -->
        <div class="grid md:grid-cols-3 gap-10">
            @foreach ($programs as $program)
                <div class="group relative bg-transparent backdrop-blur-sm rounded-2xl  overflow-hidden ">
                    <!-- Image Container -->
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/' . $program->gambar) }}" 
                             alt="{{ $program->nama }}" 
                             class="w-full h-48 object-cover rounded-2xl group-hover:scale-110 transition-transform duration-500">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-8">
                        <h3 class="text-xl font-bold mb-3 text-white">
                            {{ $program->nama }}
                        </h3>
                        <p class="text-white leading-relaxed mb-6">
                            {{ $program->deskripsi }}
                        </p>

                        
                        <!-- Action Button -->
                        <div class="flex items-center justify-between">
                            <button class="bg-transparent text-white    rounded-lg font-semibold transition-all duration-300 transform hover:translate-y-[-2px] ">
                                Selengkapnya
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>




      @php
    $reasons = \App\Models\Reason::all();
@endphp

<section class="py-20 bg-gradient-to-br from-blue-50 via-white to-green-50 relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-green-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse" style="animation-delay: 2s;"></div>
    
    <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-green-600 rounded-full mb-6">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent mb-4">
                Alasan Memilih Sekolah As'adiyah
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-blue-600 to-green-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Discover why thousands of students choose us as their educational partner
            </p>
        </div>
        
        <!-- Reasons Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            @foreach ($reasons as $index => $reason)
                <!-- Card dengan stagger animation -->
                <div class="group relative bg-white/80 backdrop-blur-sm border border-white/20 rounded-2xl p-8 text-center shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:scale-105"
                     style="animation-delay: {{ $index * 200 }}ms;">
                    
                    <!-- Decorative Background -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-green-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <!-- Icon Container -->
                    <div class="relative mb-6">
                        <div class="w-20 h-20 mx-auto bg-gradient-to-br from-blue-100 to-green-100 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <img src="{{ asset('images/' . $reason->icon) }}" 
                                 alt="{{ $reason->judul }}" 
                                 class="h-10 w-10 object-contain filter group-hover:brightness-110 transition-all duration-300" />
                        </div>
                        <!-- Floating dots -->
                        <div class="absolute -top-2 -right-2 w-4 h-4 bg-blue-400 rounded-full opacity-60 group-hover:animate-bounce"></div>
                        <div class="absolute -bottom-2 -left-2 w-3 h-3 bg-green-400 rounded-full opacity-60 group-hover:animate-bounce" style="animation-delay: 0.5s;"></div>
                    </div>
                    
                    <!-- Content -->
                    <div class="relative z-10">
                        <h3 class="font-bold text-xl mb-4 text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                            {{ $reason->judul }}
                        </h3>
                        <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                            {{ $reason->deskripsi }}
                        </p>
                    </div>
                    
                    <!-- Hover Effect Border -->
                    <div class="absolute inset-0 rounded-2xl border-2 border-transparent group-hover:border-blue-200 transition-colors duration-300"></div>
                    
                    <!-- Number Badge -->
                    <div class="absolute -top-3 -left-3 w-8 h-8 bg-gradient-to-r from-blue-600 to-green-600 text-white rounded-full flex items-center justify-center text-sm font-bold shadow-lg">
                        {{ $index + 1 }}
                    </div>
                    
                    <!-- Decorative Corner -->
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gradient-to-tl from-blue-500/10 to-transparent rounded-tl-full transform scale-0 group-hover:scale-100 transition-transform duration-500"></div>
                </div>
            @endforeach
        </div>
        
        <!-- Bottom CTA -->
        <div class="text-center mt-16">
            <div class="inline-flex items-center space-x-4 bg-white/80 backdrop-blur-sm rounded-full px-8 py-4 shadow-lg">
                <span class="text-gray-600 font-medium">Ready to join us?</span>
                <button class="bg-gradient-to-r from-blue-600 to-green-600 text-white px-6 py-2 rounded-full font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Get Started
                </button>
            </div>
        </div>
    </div>
</section>


      <!-- Kategori dengan garis hijau modern -->
<div class="relative mx-auto px-6 md:px-12 py-8">
    <!-- Background Line dengan Gradient -->
    <div class="absolute inset-0 top-1/2 transform -translate-y-1/2 h-4 bg-gradient-to-r from-green-400 via-green-500 to-green-600 rounded-full shadow-lg">
        <!-- Glowing effect -->
        <div class="absolute inset-0 bg-gradient-to-r from-green-400 via-green-500 to-green-600 rounded-full blur-sm opacity-50"></div>
        <!-- Animated dots -->
        <div class="absolute top-1/2 left-0 transform -translate-y-1/2 w-2 h-2 bg-white rounded-full animate-pulse"></div>
        <div class="absolute top-1/2 right-0 transform -translate-y-1/2 w-2 h-2 bg-white rounded-full animate-pulse" style="animation-delay: 1s;"></div>
    </div>
    
    <!-- Kategori Cards -->
    <div class="relative flex flex-wrap justify-center gap-8 md:gap-10">
        @php
        $kategori = [
            ['img' => 'juara.svg', 'title' => 'Kejuaraan', 'color' => 'from-yellow-400 to-orange-500'],
            ['img' => 'berita.svg', 'title' => 'Berita', 'color' => 'from-blue-400 to-indigo-500'],
            ['img' => 'karakter.svg', 'title' => 'Karakter', 'color' => 'from-purple-400 to-pink-500'],
            ['img' => 'pemimpin.svg', 'title' => 'Kepemimpinan', 'color' => 'from-green-400 to-teal-500'],
        ];
        @endphp
        @foreach($kategori as $i => $k)
        <div class="group relative bg-white/90 backdrop-blur-sm shadow-2xl rounded-2xl p-6 text-center w-32 sm:w-36 md:w-40 h-44 sm:h-48 flex flex-col justify-center transform hover:scale-110 hover:-translate-y-4 transition-all duration-500 cursor-pointer"
             style="animation: slideUp 0.6s ease-out {{ 200 + $i*150 }}ms both;">
            
            <!-- Hover Background Effect -->
            <div class="absolute inset-0 bg-gradient-to-br {{ $k['color'] }} opacity-0 group-hover:opacity-10 rounded-2xl transition-opacity duration-300"></div>
            
            <!-- Glow Effect -->
            <div class="absolute inset-0 rounded-2xl shadow-lg group-hover:shadow-2xl group-hover:shadow-{{ explode('-', explode(' ', $k['color'])[1])[0] }}-500/25 transition-all duration-300"></div>
            
            <!-- Icon Container -->
            <div class="relative mb-4">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br {{ $k['color'] }} rounded-2xl flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-300">
                    <img src="{{ asset('images/'.$k['img']) }}" 
                         alt="{{ $k['title'] }}" 
                         class="w-8 h-8 object-contain filter brightness-0 invert group-hover:scale-110 transition-all duration-300" />
                </div>
                
                <!-- Floating particles -->
                <div class="absolute -top-1 -right-1 w-3 h-3 bg-gradient-to-r {{ $k['color'] }} rounded-full opacity-0 group-hover:opacity-100 group-hover:animate-ping transition-opacity duration-300"></div>
                <div class="absolute -bottom-1 -left-1 w-2 h-2 bg-gradient-to-r {{ $k['color'] }} rounded-full opacity-0 group-hover:opacity-100 group-hover:animate-bounce transition-opacity duration-300" style="animation-delay: 0.2s;"></div>
            </div>
            
            <!-- Title -->
            <div class="relative z-10">
                <p class="text-sm sm:text-base font-bold text-gray-700 group-hover:text-gray-800 transition-colors duration-300">
                    {{ $k['title'] }}
                </p>
                <!-- Underline effect -->
                <div class="w-0 h-0.5 bg-gradient-to-r {{ $k['color'] }} mx-auto mt-2 group-hover:w-full transition-all duration-300"></div>
            </div>
            
            <!-- Number Badge -->
            <div class="absolute -top-2 -right-2 w-6 h-6 bg-gradient-to-r {{ $k['color'] }} text-white rounded-full flex items-center justify-center text-xs font-bold shadow-lg opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-0 group-hover:scale-100">
                {{ $i + 1 }}
            </div>
            
            <!-- Ripple Effect -->
            <div class="absolute inset-0 rounded-2xl overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r {{ $k['color'] }} opacity-0 group-hover:opacity-20 transform scale-0 group-hover:scale-100 rounded-full transition-all duration-500"></div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<section id="berita" class="max-w-7xl mx-auto px-6 py-20 relative overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute top-10 right-10 w-64 h-64 bg-green-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
    <div class="absolute bottom-10 left-10 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse" style="animation-delay: 2s;"></div>
    
    <!-- Header Section -->
    <div class="text-center mb-16 relative z-10">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-green-600 to-blue-600 rounded-full mb-6 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
            </svg>
        </div>
        <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent mb-4">
            Berita & Artikel
        </h2>
        <div class="w-32 h-1 bg-gradient-to-r from-green-600 to-blue-600 mx-auto rounded-full mb-4"></div>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto">
            Stay updated with the latest news and inspiring stories from our school community
        </p>
    </div>
    
    <!-- News Grid -->
    <div class="grid md:grid-cols-3 gap-8 relative z-10">
        @foreach ($beritas as $index => $berita)
        <article class="group relative bg-white/90 backdrop-blur-sm shadow-xl rounded-2xl overflow-hidden transform hover:scale-105 hover:-translate-y-2 transition-all duration-500"
                 style="animation: fadeInUp 0.6s ease-out {{ $index * 200 }}ms both;">
            
            <!-- Image Container -->
            <div class="relative overflow-hidden">
                <img src="{{ asset('storage/' . $berita->gambar) }}" 
                     alt="{{ $berita->judul }}" 
                     class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" />
                
                <!-- Overlay Gradient -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <!-- Category Badge -->
                <div class="absolute top-4 left-4 bg-green-600/90 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold">
                    News
                </div>
                
                <!-- Reading Time -->
                <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-700 px-3 py-1 rounded-full text-xs font-medium">
                    2 min read
                </div>
            </div>
            
            <!-- Content -->
            <div class="p-6 relative">
                <!-- Date Info -->
                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <div class="flex items-center bg-gray-100 rounded-full px-3 py-1">
                        <svg class="w-4 h-4 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        {{ \Carbon\Carbon::parse($berita->tanggal_publish)->format('d M Y') }}
                    </div>
                    <span class="mx-3 text-gray-300">•</span>
                    <div class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-medium">
                        {{ \Carbon\Carbon::parse($berita->tanggal_publish)->diffForHumans() }}
                    </div>
                </div>
                
                <!-- Title -->
                <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-green-600 transition-colors duration-300 line-clamp-2">
                    {{ $berita->judul }}
                </h3>
                
                <!-- Excerpt -->
                <p class="text-gray-600 mb-6 leading-relaxed line-clamp-3">
                    {{ Str::limit(strip_tags($berita->konten), 120) }}
                </p>
                
                <!-- Action Area -->
                <div class="flex items-center justify-between">
                    <a href="{{ route('beritas.show', $berita->id) }}" 
                       class="relative z-20 inline-flex items-center bg-gradient-to-r from-green-600 to-blue-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300 group">
                        <span>Selengkapnya</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    
                    <!-- Share Button -->
                    <button class="p-3 bg-gray-100 hover:bg-gray-200 rounded-xl transition-colors duration-300 group">
                        <svg class="w-5 h-5 text-gray-600 group-hover:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"/>
                        </svg>
                    </button>
                </div>
                
                <!-- Decorative Corner -->
                <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-green-500/10 to-transparent rounded-tl-full transform scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
            
            <!-- Hover Border -->
            <div class="absolute inset-0 rounded-2xl border-2 border-transparent group-hover:border-green-200 transition-colors duration-300"></div>
        </article>
        @endforeach
    </div>
    
    <!-- Load More Section -->
<div class="text-center mt-16">
    <a href="{{ route('beritas.index') }}" 
       class="w-fit bg-gradient-to-r from-green-600 to-blue-600 text-white px-8 py-4 rounded-xl font-semibold hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center mx-auto cursor-pointer">
        <span>Load More Articles</span>
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
    </a>
</div>


</section>

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

      
      <!-- Footer -->
      <footer class="fixed bottom-4 right-4">
            <a href="https://wa.me/6285964284823" target="_blank">
                  <img src="{{ asset('images/WhatsApp.svg.webp') }}" alt="WhatsApp" class="w-12 h-12 md:w-16 md:h-16" />
            </a>
      </footer>


      
@endsection
