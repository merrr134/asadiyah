@extends('layouts.app') 
@section('title', 'Semua Berita')

@section('content')
<!-- Hero Section with Background -->
<div class="relative min-h-[50vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900 via-teal-800 to-cyan-900"></div>
    <img src="{{ asset('images/FOTO TAMPAK DEPAN.jpeg') }}" 
         alt="Masjid As'adiyah Belawa Baru"
         class="absolute inset-0 w-full h-full object-cover z-0 opacity-40 mix-blend-overlay" />
    
    <!-- Overlay Pattern -->
    <div class="absolute inset-0 bg-black/20 z-10"></div>
    
    <!-- Content -->
    <div class="relative z-20 text-center px-6 max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight drop-shadow-2xl">
            Semua Berita
        </h1>
        <p class="text-xl text-white/90 mb-8 drop-shadow-lg max-w-2xl mx-auto">
            Temukan informasi terbaru dan terkini dari Masjid As'adiyah Belawa Baru
        </p>
        <div class="w-24 h-1 bg-gradient-to-r from-emerald-400 to-cyan-400 mx-auto rounded-full"></div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20">
        <div class="w-6 h-10 border-2 border-white/40 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-white/60 rounded-full mt-2 animate-bounce"></div>
        </div>
    </div>
</div>

<!-- News Grid Section -->
<div class="bg-gradient-to-b from-gray-50 to-white">
    <section class="max-w-7xl mx-auto px-6 py-20">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center space-x-2 bg-white rounded-full px-6 py-3 shadow-lg mb-6">
                <div class="w-3 h-3 bg-emerald-500 rounded-full animate-pulse"></div>
                <span class="text-gray-600 font-medium">Berita Terkini</span>
                <div class="w-3 h-3 bg-cyan-500 rounded-full animate-pulse"></div>
            </div>
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Ikuti Perkembangan Terbaru</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-emerald-500 to-cyan-500 mx-auto rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($beritas as $berita)
                <article class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100">
                    <!-- Image Container -->
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/' . $berita->gambar) }}" 
                             alt="{{ $berita->judul }}" 
                             class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        
                        <!-- Date Badge -->
                        <div class="absolute top-4 left-4">
                            <div class="bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 text-sm font-medium text-gray-700 shadow-lg">
                                {{ \Carbon\Carbon::parse($berita->tanggal_publish)->format('d M') }}
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <!-- Meta Info -->
                        <div class="flex items-center text-sm text-gray-500 mb-3 space-x-4">
                            <div class="flex items-center space-x-1">
                                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>{{ \Carbon\Carbon::parse($berita->tanggal_publish)->format('d M Y') }}</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <svg class="w-4 h-4 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>{{ \Carbon\Carbon::parse($berita->tanggal_publish)->diffForHumans() }}</span>
                            </div>
                        </div>

                        <!-- Title -->
                        <h2 class="text-lg font-bold text-gray-800 mb-3 line-clamp-2 group-hover:text-emerald-700 transition-colors duration-300">
                            {{ $berita->judul }}
                        </h2>

                        <!-- Excerpt -->
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3 leading-relaxed">
                            {{ Str::limit(strip_tags($berita->konten), 100) }}
                        </p>

                        <!-- Read More Button -->
                        <div class="flex items-center justify-between">
                            <a href="{{ route('admin.berita.show', $berita->id) }}" 
                               class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-emerald-600 to-cyan-600 text-white font-medium rounded-full hover:from-emerald-700 hover:to-cyan-700 transition-all duration-300 shadow-lg hover:shadow-xl text-sm group-hover:scale-105">
                                Baca Selengkapnya
                                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                            
                            <!-- Category Badge -->
                            <div class="px-3 py-1 bg-gradient-to-r from-emerald-100 to-cyan-100 text-emerald-700 text-xs font-medium rounded-full">
                                Berita
                            </div>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-full text-center py-20">
                    <div class="bg-white rounded-3xl shadow-xl p-12 max-w-md mx-auto">
                        <div class="w-20 h-20 bg-gradient-to-br from-emerald-100 to-cyan-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Belum Ada Berita</h3>
                        <p class="text-gray-600">Belum ada berita yang tersedia saat ini. Silakan kembali lagi nanti.</p>
                    </div>
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        @if($beritas->hasPages())
        <div class="mt-16 flex justify-center">
            <div class="bg-white rounded-2xl shadow-lg p-6">
                {{ $beritas->links() }}
            </div>
        </div>
        @endif
    </section>
</div>

<!-- Bottom CTA Section -->
<div class="bg-gradient-to-r from-emerald-50 via-teal-50 to-cyan-50 py-16">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Ingin Mendapatkan Update Terbaru?</h3>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
            Ikuti terus perkembangan kegiatan dan informasi terbaru dari Masjid As'adiyah Belawa Baru
        </p>
        <div class="inline-flex items-center space-x-2 bg-white rounded-full px-8 py-4 shadow-lg">
            <div class="w-3 h-3 bg-emerald-500 rounded-full animate-pulse"></div>
            <span class="text-gray-700 font-medium">Masjid As'adiyah Belawa Baru</span>
            <div class="w-3 h-3 bg-cyan-500 rounded-full animate-pulse"></div>
        </div>
    </div>
</div>

<style>
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

/* Custom pagination styling */
.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.5rem;
}

.pagination .page-link {
    padding: 0.5rem 1rem;
    border-radius: 0.75rem;
    border: 1px solid #e5e7eb;
    color: #6b7280;
    text-decoration: none;
    transition: all 0.3s ease;
}

.pagination .page-link:hover {
    background: linear-gradient(135deg, #10b981, #06b6d4);
    color: white;
    border-color: transparent;
}

.pagination .page-item.active .page-link {
    background: linear-gradient(135deg, #10b981, #06b6d4);
    color: white;
    border-color: transparent;
}
</style>
@endsection