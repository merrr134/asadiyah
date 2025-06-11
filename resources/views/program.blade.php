@extends('layouts.app')

@section('title', 'Program')

@section('content')

<!-- Hero Section with Background -->
<section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900 via-teal-800 to-cyan-900"></div>
    <img src="{{ asset('images/FOTO TAMPAK DEPAN.jpeg') }}" 
         alt="Program As'adiyah"
         class="absolute inset-0 w-full h-full object-cover z-0 opacity-40 mix-blend-overlay" />
    
    <!-- Overlay Pattern -->
    <div class="absolute inset-0 bg-black/20 z-10"></div>

    <!-- Content -->
    <div class="relative z-20 text-center px-6 max-w-4xl mx-auto">
        <div class="mb-6">
            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium border border-white/20">
                Pendidikan Terpadu
            </span>
        </div>
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight drop-shadow-2xl">
            Program Unggulan
        </h1>
        <p class="text-xl text-white/90 mb-8 drop-shadow-lg max-w-2xl mx-auto">
            Sistem pendidikan holistik yang menggabungkan nilai-nilai islami dengan pembelajaran modern
        </p>
        <div class="w-24 h-1 bg-gradient-to-r from-emerald-400 to-cyan-400 mx-auto rounded-full"></div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20">
        <div class="w-6 h-10 border-2 border-white/40 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-white/60 rounded-full mt-2 animate-bounce"></div>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<div class="bg-gradient-to-b from-gray-50 to-white">
    <section class="py-20">
        <div class="max-w-5xl mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center space-x-2 bg-white rounded-full px-6 py-3 shadow-lg mb-6">
                    <div class="w-3 h-3 bg-emerald-500 rounded-full animate-pulse"></div>
                    <span class="text-gray-600 font-medium">Program Utama</span>
                    <div class="w-3 h-3 bg-cyan-500 rounded-full animate-pulse"></div>
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Pendidikan yang Menyeluruh</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-emerald-500 to-cyan-500 mx-auto rounded-full"></div>
            </div>

            <!-- Program Card -->
            <div class="relative mb-12">
                <!-- Decorative Background -->
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/10 to-cyan-500/10 rounded-3xl transform rotate-1"></div>
                
                <!-- Main Card -->
                <div class="relative bg-white rounded-3xl shadow-2xl overflow-hidden">
                    <!-- Header with Icon -->
                    <div class="bg-gradient-to-r from-emerald-600 to-cyan-600 px-8 py-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-white">Full Day Education</h2>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-8">
                        <!-- Features Grid -->
                        <div class="grid md:grid-cols-3 gap-6 mb-8">
                            <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-2xl p-6 text-center">
                                <div class="w-12 h-12 bg-emerald-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-emerald-800 mb-2">Pembelajaran Penuh</h3>
                                <p class="text-emerald-700 text-sm">Pagi hingga sore dengan kurikulum terintegrasi</p>
                            </div>

                            <div class="bg-gradient-to-br from-teal-50 to-teal-100 rounded-2xl p-6 text-center">
                                <div class="w-12 h-12 bg-teal-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-teal-800 mb-2">Kerjasama Keluarga</h3>
                                <p class="text-teal-700 text-sm">Kolaborasi aktif orang tua dan pesantren</p>
                            </div>

                            <div class="bg-gradient-to-br from-cyan-50 to-cyan-100 rounded-2xl p-6 text-center">
                                <div class="w-12 h-12 bg-cyan-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-cyan-800 mb-2">Karakter Islami</h3>
                                <p class="text-cyan-700 text-sm">Pembentukan akhlak mulia dan nilai-nilai Islam</p>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="space-y-6 text-gray-700 leading-relaxed">
                            <!-- Decorative Line -->
                            <div class="flex items-center space-x-4 mb-6">
                                <div class="w-2 h-16 bg-gradient-to-b from-emerald-500 to-cyan-500 rounded-full"></div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Konsep Pendidikan Terpadu</h3>
                                    <div class="w-16 h-1 bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-full"></div>
                                </div>
                            </div>

                            <p class="text-lg leading-relaxed">
                                <span class="font-semibold text-emerald-700">Full Day Education</span> merupakan sistem pendidikan di Pesantren As'adiyah Belawa Baru yang menerapkan kegiatan pembelajaran sejak pagi hingga sore hari. Program ini dirancang agar orang tua memiliki peran aktif dalam mendukung aktivitas harian anak, sekaligus mempererat kerjasama antara keluarga dan pesantren.
                            </p>

                            <!-- Highlight Box -->
                            <div class="bg-gradient-to-r from-emerald-50 to-cyan-50 rounded-2xl p-6 border-l-4 border-emerald-500">
                                <div class="flex items-start space-x-4">
                                    <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-emerald-800 mb-2">Kerjasama Strategis</h4>
                                        <p class="text-emerald-700">
                                            Kerjasama yang erat antara orang tua dan pihak pesantren menjadi fondasi utama dalam membangun budaya pendidikan yang kuat. Kegiatan seperti sholat berjamaah di masjid, doa dan dzikir bersama, tadabur Al-Qur'an, pembelajaran akademik, serta pembiasaan akhlakul karimah di lingkungan pesantren dan rumah, dijalankan secara berkesinambungan oleh kedua belah pihak.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Vision Box -->
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                                <div class="flex items-start space-x-4">
                                    <div class="w-8 h-8 bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800 mb-2">Target Pencapaian</h4>
                                        <p class="text-gray-700">
                                            Dengan program Full Day Education ini, diharapkan terbentuk karakter santri yang <span class="font-semibold text-emerald-700">taqwa, cerdas, dan terampil</span>. Santri diharapkan mampu menerapkan pola hidup Islami yang telah diajarkan di pesantren dalam kehidupan sehari-hari, baik di lingkungan keluarga maupun masyarakat luas. Hal ini menjadi bekal kuat bagi santri dalam menjalani kehidupan dan menguatkan visi berislam yang kokoh.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Bottom Section -->
<div class="bg-gradient-to-r from-emerald-50 via-teal-50 to-cyan-50 py-16">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Bergabunglah dengan Program Unggulan Kami</h3>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
            Wujudkan impian pendidikan terbaik untuk putra-putri Anda melalui sistem Full Day Education yang telah terbukti efektif
        </p>
        <div class="inline-flex items-center space-x-2 bg-white rounded-full px-8 py-4 shadow-lg">
            <div class="w-3 h-3 bg-emerald-500 rounded-full animate-pulse"></div>
            <span class="text-gray-700 font-medium">Pesantren As'adiyah Belawa Baru</span>
            <div class="w-3 h-3 bg-cyan-500 rounded-full animate-pulse"></div>
        </div>
    </div>
</div>

@endsection