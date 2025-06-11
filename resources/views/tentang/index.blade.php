
@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<!-- Hero Section dengan Parallax Effect -->
<section class="relative h-[70vh] flex items-center justify-center overflow-hidden">
    <!-- Background Image dengan Parallax -->
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900 via-teal-800 to-cyan-900"></div>
    <img src="{{ asset('images/FOTO TAMPAK DEPAN.jpeg') }}" 
         alt="Masjid As'adiyah Belawa Baru"
         class="absolute inset-0 w-full h-full object-cover z-0 opacity-40 mix-blend-overlay" />

    <!-- Animated Overlay Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-32 h-32 border-2 border-white rounded-full animate-pulse"></div>
        <div class="absolute top-32 right-20 w-24 h-24 border-2 border-white rounded-full animate-pulse animation-delay-200"></div>
        <div class="absolute bottom-20 left-32 w-20 h-20 border-2 border-white rounded-full animate-pulse animation-delay-400"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 text-center max-w-4xl mx-auto px-4">
        <div class="transform transition-all duration-1000 hover:scale-105">
            <h1 class="text-6xl md:text-7xl font-bold text-white mb-6 font-serif">
                <span class="bg-gradient-to-r from-yellow-400 via-yellow-300 to-amber-200 bg-clip-text text-transparent">
                    Tentang
                </span>
                <span class="text-white block mt-2">Kami</span>
            </h1>
            <div class="w-32 h-1 bg-gradient-to-r from-yellow-400 to-amber-300 mx-auto mb-6 rounded-full"></div>
            <p class="text-xl text-gray-200 max-w-2xl mx-auto leading-relaxed font-light">
                Membangun generasi Qur'ani yang berakhlak mulia dan berprestasi
            </p>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- As'adiyah Main Section -->
<section class="py-20 bg-gradient-to-br from-emerald-50 via-teal-50 to-cyan-50 relative overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute top-0 left-0 w-full h-full opacity-5">
        <div class="absolute top-20 -left-32 w-96 h-96 bg-emerald-500 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 -right-32 w-96 h-96 bg-teal-500 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4 font-serif">
                As'adiyah <span class="text-emerald-600">Belawa Baru</span>
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-emerald-500 to-teal-500 mx-auto rounded-full mb-6"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Lembaga pendidikan Islam yang menekankan pembentukan karakter Islami dan keunggulan akademik dalam setiap aspek pembelajaran
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Main Content -->
            <div class="space-y-8">
                <!-- Moto Card -->
                <div class="bg-white rounded-2xl shadow-2xl p-8 transform hover:scale-105 transition-all duration-300 border-l-4 border-emerald-500">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Visi As'adiyah</h3>
                    </div>
                    <div class="bg-gradient-to-r from-emerald-100 to-teal-100 rounded-xl p-6 mb-4">
                        <h4 class="text-xl font-bold text-emerald-800 text-center mb-2">"Berakhlaq Qur'ani, Beribadah Tekun, Berdakwah Aktif"</h4>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        As'adiyah tidak hanya mengutamakan penguasaan ilmu pengetahuan, tetapi juga pembentukan karakter yang kokoh berdasarkan ajaran al-Qur'an dan sunnah Rasulullah SAW.
                    </p>
                </div>

                <!-- Excellence Card -->
                <div class="bg-white rounded-2xl shadow-2xl p-8 transform hover:scale-105 transition-all duration-300 border-l-4 border-teal-500">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Keunggulan As'adiyah</h3>
                    </div>
                    <div class="grid md:grid-cols-3 gap-4 mb-4">
                        <div class="bg-emerald-100 rounded-lg p-4 text-center">
                            <div class="text-2xl mb-2">📖</div>
                            <h5 class="font-semibold text-emerald-800">Tahfidz Qur'an</h5>
                        </div>
                        <div class="bg-teal-100 rounded-lg p-4 text-center">
                            <div class="text-2xl mb-2">🕌</div>
                            <h5 class="font-semibold text-teal-800">Ilmu Agama</h5>
                        </div>
                        <div class="bg-cyan-100 rounded-lg p-4 text-center">
                            <div class="text-2xl mb-2">🌟</div>
                            <h5 class="font-semibold text-cyan-800">Akhlak Mulia</h5>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        As'adiyah menempatkan pentingnya keunggulan dalam hafalan al-Qur'an, pendalaman ilmu-ilmu keislaman, dan pembinaan akhlak sebagai pilar utama pendidikan yang komprehensif.
                    </p>
                </div>

                <!-- Life Skills Card -->
                <div class="bg-white rounded-2xl shadow-2xl p-8 transform hover:scale-105 transition-all duration-300 border-l-4 border-cyan-500">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-emerald-600 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Pembinaan Karakter Islami</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        Dengan fokus pada pembinaan karakter Islami, santri-santri As'adiyah dipersiapkan untuk menjadi generasi yang shalih, berilmu, dan siap berkontribusi positif bagi masyarakat dengan landasan iman yang kuat.
                    </p>
                </div>
            </div>

            <!-- Sidebar dengan Stats dan Features -->
            <div class="space-y-8">
                <!-- Featured Image -->
                <div class="bg-white rounded-2xl shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                    <div class="relative">
                        <div class="w-full h-64 bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="text-6xl mb-4">🕌</div>
                                <h4 class="text-xl font-bold">As'adiyah</h4>
                                <p class="text-emerald-100">Belawa Baru</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Key Features -->
                <div class="bg-white rounded-2xl shadow-2xl p-8">
                    <h4 class="text-xl font-bold text-gray-800 mb-6 text-center">Lembaga Pendidikan Islam</h4>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-emerald-50 rounded-lg">
                            <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Pendidikan Holistik</span>
                        </div>
                        <div class="flex items-center p-4 bg-teal-50 rounded-lg">
                            <div class="w-8 h-8 bg-teal-500 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Akhlak Islamiyah</span>
                        </div>
                        <div class="flex items-center p-4 bg-cyan-50 rounded-lg">
                            <div class="w-8 h-8 bg-cyan-500 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Tahfidz Al-Qur'an</span>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="bg-gradient-to-br from-emerald-600 to-teal-700 rounded-2xl p-8 text-white text-center transform hover:scale-105 transition-all duration-300">
                    <h4 class="text-xl font-bold mb-4">As'adiyah Belawa Baru</h4>
                    <p class="text-sm opacity-90 mb-6">Pendidikan Islam Berkualitas</p>
                    <button class="bg-white text-emerald-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors duration-300">
                        Hubungi Kami
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Section - Pesantren As'adiyah -->
<section class="py-20 bg-gradient-to-b from-white via-gray-50 to-white relative overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute top-0 left-0 w-full h-full opacity-5">
        <div class="absolute top-20 -left-32 w-96 h-96 bg-emerald-500 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 -right-32 w-96 h-96 bg-teal-500 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4 font-serif">
                Sejarah As'adiyah <span class="text-emerald-600">Belawa Baru</span>
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-emerald-500 to-teal-500 mx-auto rounded-full mb-6"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Perjalanan Panjang As'adiyah dalam Membentuk Generasi Muslim Berakhlak Mulia
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-12 items-start">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Story Cards -->
                <div class="bg-white rounded-2xl shadow-2xl p-8 transform hover:scale-105 transition-all duration-300 border-l-4 border-emerald-500">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Sejarah Berdiri</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        As'adiyah Belawa Baru didirikan dengan visi mulia untuk melahirkan generasi muslim yang beriman, bertakwa, berilmu, dan berakhlak mulia. Perjalanan panjang kami dimulai dari tekad kuat para ulama dan tokoh masyarakat untuk menyebarkan ajaran Islam yang rahmatan lil alamiin di tengah-tengah masyarakat.
                    </p>
                </div>

                <div class="bg-white rounded-2xl shadow-2xl p-8 transform hover:scale-105 transition-all duration-300 border-l-4 border-teal-500">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Perkembangan dan Pertumbuhan</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        Sejak awal berdiri, As'adiyah telah mengalami perkembangan yang sangat pesat, baik dari segi fasilitas, kualitas tenaga pendidik, maupun jumlah santri. Komitmen kami adalah memberikan pendidikan Islam yang berkualitas tinggi dengan tetap mempertahankan nilai-nilai tradisi pesantren yang autentik.
                    </p>
                </div>

                <div class="bg-white rounded-2xl shadow-2xl p-8 transform hover:scale-105 transition-all duration-300 border-l-4 border-amber-500">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-600 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Filosofi Pendidikan Islam</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        Dengan landasan akidah yang kokoh dan metode pembelajaran yang komprehensif, As'adiyah meyakini bahwa pendidikan Islam yang berkualitas adalah kunci utama dalam membangun peradaban yang maju, beradab, dan penuh berkah dari Allah SWT.
                    </p>
                </div>
            </div>

            <!-- Sidebar dengan Stats dan Image -->
            <div class="space-y-8">
                <!-- Featured Image -->
                <div class="bg-white rounded-2xl shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                    <div class="relative">
                        <img src="{{ asset('images/FOTO TAMPAK DEPAN.jpeg') }}" 
                             alt="Aktivitas Santri As'adiyah" 
                             class="w-full h-64 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <p class="text-white font-semibold text-lg">Kehidupan Santri</p>
                            <p class="text-gray-200 text-sm">Aktivitas harian di As'adiyah</p>
                        </div>
                    </div>
                </div>

                <!-- Statistics Cards -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl p-6 text-white text-center transform hover:scale-105 transition-all duration-300">
                        <div class="text-3xl font-bold mb-2">500+</div>
                        <div class="text-sm opacity-90">Santri Aktif</div>
                    </div>
                    <div class="bg-gradient-to-br from-teal-500 to-cyan-600 rounded-xl p-6 text-white text-center transform hover:scale-105 transition-all duration-300">
                        <div class="text-3xl font-bold mb-2">50+</div>
                        <div class="text-sm opacity-90">Ustadz & Ustadzah</div>
                    </div>
                    <div class="bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl p-6 text-white text-center transform hover:scale-105 transition-all duration-300">
                        <div class="text-3xl font-bold mb-2">25+</div>
                        <div class="text-sm opacity-90">Tahun Berkiprah</div>
                    </div>
                    <div class="bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl p-6 text-white text-center transform hover:scale-105 transition-all duration-300">
                        <div class="text-3xl font-bold mb-2">1000+</div>
                        <div class="text-sm opacity-90">Alumni</div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="bg-gradient-to-br from-emerald-600 to-teal-700 rounded-2xl p-8 text-white text-center transform hover:scale-105 transition-all duration-300">
                    <h4 class="text-xl font-bold mb-4">Bergabunglah Bersama Kami</h4>
                    <p class="text-sm opacity-90 mb-6">Wujudkan impian menjadi generasi Qur'ani yang berakhlak mulia</p>
                    <button class="bg-white text-emerald-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors duration-300">
                        Daftar Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-gradient-to-br from-emerald-50 to-teal-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4 font-serif">
                Nilai-Nilai <span class="text-emerald-600">Kami</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-emerald-500 to-teal-500 mx-auto rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-xl transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-center text-gray-800 mb-4">Berilmu</h3>
                <p class="text-gray-600 text-center leading-relaxed">Menguasai ilmu agama dan umum dengan seimbang untuk menghadapi tantangan zaman</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-xl transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-center text-gray-800 mb-4">Berakhlak</h3>
                <p class="text-gray-600 text-center leading-relaxed">Memiliki akhlak mulia yang terpancar dalam setiap ucapan dan perbuatan sehari-hari</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-xl transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-600 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-center text-gray-800 mb-4">Berkontribusi</h3>
                <p class="text-gray-600 text-center leading-relaxed">Memberikan manfaat nyata bagi agama, bangsa, dan negara melalui karya dan dedikasi</p>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

.animation-delay-200 {
    animation-delay: 0.2s;
}

.animation-delay-400 {
    animation-delay: 0.4s;
}

.hover\:scale-105:hover {
    transform: scale(1.05);
}
</style>

@endsection