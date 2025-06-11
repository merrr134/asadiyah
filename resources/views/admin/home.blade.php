@extends('admin.dashboard')

@section('title', 'Selamat Datang')
@section('subtitle', 'Kelola sistem dengan mudah dan efisien')

@section('content')
<style>
  @keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
  }
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  @keyframes sparkle {
    0%, 100% { opacity: 0; }
    50% { opacity: 1; }
  }
  .float-animation {
    animation: float 3s ease-in-out infinite;
  }
  .fade-in-up {
    animation: fadeInUp 0.8s ease-out forwards;
  }
  .sparkle {
    animation: sparkle 2s ease-in-out infinite;
  }
  .text-gradient {
    background: linear-gradient(135deg, #48cc6c 0%, #2dd4bf 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }
</style>

<!-- Hero Welcome Section -->
<div class="relative overflow-hidden">
  <!-- Background Decorations -->
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-10 left-10 w-20 h-20 bg-green-500 rounded-full sparkle"></div>
    <div class="absolute top-32 right-20 w-16 h-16 bg-blue-500 rounded-full sparkle" style="animation-delay: 0.5s;"></div>
    <div class="absolute bottom-20 left-32 w-12 h-12 bg-yellow-500 rounded-full sparkle" style="animation-delay: 1s;"></div>
    <div class="absolute bottom-32 right-10 w-24 h-24 bg-purple-500 rounded-full sparkle" style="animation-delay: 1.5s;"></div>
  </div>

  <!-- Main Welcome Card -->
  <div class="relative z-10 bg-white rounded-3xl p-12 card-shadow mb-8 overflow-hidden fade-in-up">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
      <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-green-400 to-blue-400 rounded-full transform translate-x-32 -translate-y-32"></div>
      <div class="absolute bottom-0 left-0 w-48 h-48 bg-gradient-to-tr from-purple-400 to-pink-400 rounded-full transform -translate-x-24 translate-y-24"></div>
    </div>

    <div class="relative z-10 text-center">
      <!-- Welcome Icon -->
      <div class="inline-flex items-center justify-center w-24 h-24 green-gradient rounded-full mb-6 float-animation">
        <i class="fas fa-hand-paper text-white text-3xl"></i>
      </div>

      <!-- Main Welcome Text -->
      <h1 class="text-5xl font-bold text-gray-800 mb-4">
        <span class="text-gradient">Selamat Datang</span> di Admin Panel!
      </h1>
      
      <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
        Halo, <strong class="text-green-600">Admin</strong>! 👋 
        Kami senang melihat Anda kembali. Panel kontrol siap membantu Anda mengelola semua konten dengan mudah dan efisien.
      </p>

      <!-- Feature Highlights -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-2xl hover:scale-105 transition-transform duration-300">
          <div class="green-gradient w-12 h-12 rounded-xl flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-rocket text-white"></i>
          </div>
          <h3 class="font-semibold text-gray-800 mb-2">Mudah Digunakan</h3>
          <p class="text-sm text-gray-600">Interface yang intuitif dan user-friendly</p>
        </div>

        <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-2xl hover:scale-105 transition-transform duration-300">
          <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-12 h-12 rounded-xl flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-shield-alt text-white"></i>
          </div>
          <h3 class="font-semibold text-gray-800 mb-2">Aman & Terpercaya</h3>
          <p class="text-sm text-gray-600">Sistem keamanan berlapis untuk data Anda</p>
        </div>

        <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-2xl hover:scale-105 transition-transform duration-300">
          <div class="bg-gradient-to-br from-purple-500 to-purple-600 w-12 h-12 rounded-xl flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-chart-line text-white"></i>
          </div>
          <h3 class="font-semibold text-gray-800 mb-2">Analitik Lengkap</h3>
          <p class="text-sm text-gray-600">Pantau performa dengan data real-time</p>
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <a href="{{ route('admin.program.index') }}" 
           class="inline-flex items-center px-8 py-4 green-gradient text-white font-semibold rounded-2xl hover:green-hover transform hover:scale-105 hover:shadow-lg transition-all duration-300">
          <i class="fas fa-play mr-3"></i>
          Mulai Mengelola
        </a>
        
        <a href="{{ route('admin.berita.index') }}" 
           class="inline-flex items-center px-8 py-4 bg-white border-2 border-gray-200 text-gray-700 font-semibold rounded-2xl hover:bg-gray-50 hover:border-green-300 transform hover:scale-105 transition-all duration-300">
          <i class="fas fa-newspaper mr-3"></i>
          Lihat Berita
        </a>
      </div>
    </div>
  </div>

  <!-- Quick Tips Section -->
  <div class="bg-gradient-to-r from-green-500 to-teal-500 rounded-3xl p-8 text-white fade-in-up" style="animation-delay: 0.3s;">
    <div class="flex items-center justify-between">
      <div class="flex-1">
        <h3 class="text-2xl font-bold mb-2">💡 Tips Hari Ini</h3>
        <p class="text-green-100 mb-4">
          Gunakan menu navigasi di sebelah kiri untuk mengakses semua fitur. Klik pada menu yang aktif untuk melihat sub-menu yang tersedia.
        </p>
        <div class="flex items-center text-green-100">
          <i class="fas fa-lightbulb mr-2"></i>
          <span class="text-sm">Jangan lupa untuk backup data secara berkala!</span>
        </div>
      </div>
      <div class="hidden md:block ml-8">
        <div class="w-32 h-32 bg-white/10 rounded-full flex items-center justify-center float-animation">
          <i class="fas fa-lightbulb text-6xl text-yellow-300"></i>
        </div>
      </div>
    </div>
  </div>

  <!-- System Info -->
  <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Welcome Message -->
    <div class="bg-white rounded-2xl p-6 card-shadow fade-in-up" style="animation-delay: 0.5s;">
      <div class="flex items-center mb-4">
        <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
        <h3 class="font-semibold text-gray-800">Status Sistem</h3>
      </div>
      <div class="space-y-3">
        <div class="flex items-center justify-between">
          <span class="text-sm text-gray-600">Server</span>
          <span class="text-sm font-medium text-green-600">🟢 Online</span>
        </div>
        <div class="flex items-center justify-between">
          <span class="text-sm text-gray-600">Database</span>
          <span class="text-sm font-medium text-green-600">🟢 Connected</span>
        </div>
        <div class="flex items-center justify-between">
          <span class="text-sm text-gray-600">Last Login</span>
          <span class="text-sm font-medium text-gray-700">{{ date('d M Y, H:i') }}</span>
        </div>
      </div>
    </div>

    <!-- Quick Links -->
    <div class="bg-white rounded-2xl p-6 card-shadow fade-in-up" style="animation-delay: 0.7s;">
      <div class="flex items-center mb-4">
        <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
        <h3 class="font-semibold text-gray-800">Akses Cepat</h3>
      </div>
      <div class="space-y-3">
        <a href="{{ route('admin.program.create') }}" class="flex items-center text-sm text-gray-600 hover:text-green-600 transition-colors">
          <i class="fas fa-plus w-4 mr-3 text-green-500"></i>
          Tambah Program Baru
        </a>
        <a href="{{ route('admin.testimonials.index') }}" class="flex items-center text-sm text-gray-600 hover:text-green-600 transition-colors">
          <i class="fas fa-star w-4 mr-3 text-yellow-500"></i>
          Lihat Testimonial
        </a>
        <a href="{{ route('admin.contacts.index') }}" class="flex items-center text-sm text-gray-600 hover:text-green-600 transition-colors">
          <i class="fas fa-envelope w-4 mr-3 text-purple-500"></i>
          Pesan Masuk
        </a>
      </div>
    </div>
  </div>
</div>
@endsection