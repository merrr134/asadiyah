{{-- resources/views/contact.blade.php --}}
@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')

<!-- Hero Section with Background -->
<section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900 via-teal-800 to-cyan-900"></div>
    <img src="{{ asset('images/FOTO TAMPAK DEPAN.jpeg') }}" 
         alt="Kontak As'adiyah"
         class="absolute inset-0 w-full h-full object-cover z-0 opacity-40 mix-blend-overlay" />
    
    <!-- Overlay Pattern -->
    <div class="absolute inset-0 bg-black/20 z-10"></div>

    <!-- Content -->
    <div class="relative z-20 text-center px-6 max-w-4xl mx-auto">
        <div class="mb-6">
            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium border border-white/20">
                Hubungi Kami
            </span>
        </div>
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight drop-shadow-2xl">
            Kontak Kami
        </h1>
        <p class="text-xl text-white/90 mb-8 drop-shadow-lg max-w-2xl mx-auto">
            Silakan hubungi kami untuk informasi lebih lanjut atau sampaikan pesan Anda
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

<!-- Main Content -->
<div class="bg-gradient-to-b from-gray-50 to-white">
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center space-x-2 bg-white rounded-full px-6 py-3 shadow-lg mb-6">
                    <div class="w-3 h-3 bg-emerald-500 rounded-full animate-pulse"></div>
                    <span class="text-gray-600 font-medium">Informasi Kontak</span>
                    <div class="w-3 h-3 bg-cyan-500 rounded-full animate-pulse"></div>
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Mari Terhubung dengan Kami</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-emerald-500 to-cyan-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="relative">
                    <!-- Decorative Background -->
                    <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/10 to-cyan-500/10 rounded-3xl transform rotate-1"></div>
                    
                    <!-- Form Card -->
                    <div class="relative bg-white rounded-3xl shadow-2xl p-8">
                        <div class="mb-8">
                            <div class="flex items-center space-x-4 mb-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800">Kirim Pesan</h3>
                            </div>
                            <p class="text-gray-600">Sampaikan pertanyaan atau pesan Anda kepada kami</p>
                        </div>

                        @if(session('success'))
                            <div class="mb-6 bg-gradient-to-r from-emerald-50 to-cyan-50 border border-emerald-200 rounded-2xl p-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-6 h-6 bg-emerald-500 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="text-emerald-700 font-medium">{{ session('success') }}</p>
                                </div>
                            </div>
                        @endif

                        <form action="{{ route('contacts.store') }}" method="POST" class="space-y-6">
                            @csrf
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                                    <input type="text" 
                                           id="nama" 
                                           name="nama" 
                                           value="{{ old('nama') }}"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors @error('nama') border-red-500 @enderror"
                                           placeholder="Masukkan nama lengkap"
                                           required>
                                    @error('nama')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                                    <input type="email" 
                                           id="email" 
                                           name="email" 
                                           value="{{ old('email') }}"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors @error('email') border-red-500 @enderror"
                                           placeholder="nama@email.com"
                                           required>
                                    @error('email')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="no_telepon" class="block text-sm font-semibold text-gray-700 mb-2">No. Telepon</label>
                                <input type="tel" 
                                       id="no_telepon" 
                                       name="no_telepon" 
                                       value="{{ old('no_telepon') }}"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors @error('no_telepon') border-red-500 @enderror"
                                       placeholder="08xxxxxxxxxx">
                                @error('no_telepon')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="subjek" class="block text-sm font-semibold text-gray-700 mb-2">Subjek</label>
                                <input type="text" 
                                       id="subjek" 
                                       name="subjek" 
                                       value="{{ old('subjek') }}"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors @error('subjek') border-red-500 @enderror"
                                       placeholder="Masukkan subjek pesan"
                                       required>
                                @error('subjek')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="pesan" class="block text-sm font-semibold text-gray-700 mb-2">Pesan</label>
                                <textarea id="pesan" 
                                          name="pesan" 
                                          rows="5"
                                          class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors resize-none @error('pesan') border-red-500 @enderror"
                                          placeholder="Tulis pesan Anda di sini..."
                                          required>{{ old('pesan') }}</textarea>
                                @error('pesan')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" 
                                    class="w-full bg-gradient-to-r from-emerald-600 to-cyan-600 text-white font-semibold py-4 px-6 rounded-xl hover:from-emerald-700 hover:to-cyan-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                <span>Kirim Pesan</span>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="space-y-8">
                    <!-- Address Card -->
                    <div class="bg-white rounded-3xl shadow-xl p-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Alamat</h4>
                                <p class="text-gray-600 leading-relaxed">
                                    Jl. Poros Belawa Baru<br>
                                    Kec. Belawa, Kab. Wajo<br>
                                    Sulawesi Selatan
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="bg-white rounded-3xl shadow-xl p-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Telepon</h4>
                                <p class="text-gray-600">+62 812-3456-7890</p>
                                <p class="text-gray-600">+62 853-1234-5678</p>
                            </div>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="bg-white rounded-3xl shadow-xl p-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Email</h4>
                                <p class="text-gray-600">info@asadiyahbelawabaru.com</p>
                                <p class="text-gray-600">pesantren@asadiyahbelawabaru.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Card -->
                    <div class="bg-white rounded-3xl shadow-xl p-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h4a1 1 0 011 1v2h4a1 1 0 011 1v4a1 1 0 01-1 1h-2v10a1 1 0 01-1 1H8a1 1 0 01-1-1V10H5a1 1 0 01-1-1V5a1 1 0 011-1h2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Media Sosial</h4>
                                <div class="space-y-2">
                                    <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-emerald-600 transition-colors">
                                        <span>Facebook: As'adiyah Belawa Baru</span>
                                    </a>
                                    <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-emerald-600 transition-colors">
                                        <span>Instagram: @asadiyahbelawabaru</span>
                                    </a>
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
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Kami Siap Membantu Anda</h3>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
            Tim kami akan merespons pesan Anda dengan cepat dan memberikan informasi yang Anda butuhkan
        </p>
        <div class="inline-flex items-center space-x-2 bg-white rounded-full px-8 py-4 shadow-lg">
            <div class="w-3 h-3 bg-emerald-500 rounded-full animate-pulse"></div>
            <span class="text-gray-700 font-medium">Pesantren As'adiyah Belawa Baru</span>
            <div class="w-3 h-3 bg-cyan-500 rounded-full animate-pulse"></div>
        </div>
    </div>
</div>

@endsection