@extends('layouts.app')

@section('content')
<!-- Hero Section with Background -->
<div class="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900 via-teal-800 to-cyan-900"></div>
    <img src="{{ asset('images/FOTO TAMPAK DEPAN.jpeg') }}" 
         alt="Masjid As'adiyah Belawa Baru"
         class="absolute inset-0 w-full h-full object-cover z-0 opacity-40 mix-blend-overlay" />
    
    <!-- Overlay Pattern -->
    <div class="absolute inset-0 bg-black/20 z-10"></div>
    
    <!-- Content -->
    <div class="relative z-20 text-center px-6 max-w-4xl mx-auto">
        <div class="mb-6">
            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium border border-white/20">
                {{ \Carbon\Carbon::parse($berita->tanggal_publish)->format('d M Y') }}
            </span>
        </div>
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight drop-shadow-2xl">
            {{ $berita->judul }}
        </h1>
        <div class="w-24 h-1 bg-gradient-to-r from-emerald-400 to-cyan-400 mx-auto rounded-full"></div>
    </div>
    
    
</div>

<!-- Main Content -->
<div class="bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-4xl mx-auto px-6 py-16">
        <!-- Featured Image -->
        <div class="mb-12 relative group">
            <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/20 to-cyan-500/20 rounded-2xl transform rotate-1 group-hover:rotate-0 transition-transform duration-300"></div>
            <div class="relative bg-white p-4 rounded-2xl shadow-xl">
                <img src="{{ asset('storage/' . $berita->gambar) }}" 
                     alt="{{ $berita->judul }}"
                     class="w-full h-80 md:h-96 object-cover rounded-xl" />
            </div>
        </div>

        <!-- Article Meta -->
        <div class="flex items-center justify-center mb-12">
            <div class="bg-white rounded-2xl shadow-lg px-8 py-4 border-l-4 border-emerald-500">
                <div class="flex items-center space-x-6 text-gray-600">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="font-medium">{{ \Carbon\Carbon::parse($berita->tanggal_publish)->format('d F Y') }}</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        <span class="font-medium">Berita Terkini</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article Content -->
        <div class="relative">
            <!-- Decorative Elements -->
            <div class="absolute -left-4 top-0 w-2 h-32 bg-gradient-to-b from-emerald-500 to-cyan-500 rounded-full opacity-30"></div>
            
            <!-- Content Container -->
            <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12">
                <div class="prose prose-lg max-w-none prose-headings:text-gray-800 prose-headings:font-bold prose-p:text-gray-700 prose-p:leading-relaxed prose-strong:text-emerald-700 prose-a:text-emerald-600 hover:prose-a:text-emerald-800">
                    {!! $berita->konten !!}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bottom Decoration -->
<div class="bg-gradient-to-r from-emerald-50 via-teal-50 to-cyan-50 py-12">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center">
            <div class="inline-flex items-center space-x-2 bg-white rounded-full px-6 py-3 shadow-lg">
                <div class="w-3 h-3 bg-emerald-500 rounded-full animate-pulse"></div>
                <span class="text-gray-600 font-medium">Masjid As'adiyah Belawa Baru</span>
                <div class="w-3 h-3 bg-cyan-500 rounded-full animate-pulse"></div>
            </div>
        </div>
    </div>
</div>
@endsection