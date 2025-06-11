@extends('layouts.app')

@section('title', 'Berita')

@section('content')

<!-- Bagian atas dengan gambar header berita -->
<section class="relative h-[50vh] flex items-center justify-center overflow-hidden">
    <!-- Gambar background -->
    <img src="{{ asset('images/FOTO TAMPAK DEPAN.jpeg') }}" 
         alt="Berita Pesantren"
         class="absolute inset-0 w-full h-full object-cover z-0" />

    <!-- Overlay hitam transparan opsional -->
    <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>

    <!-- Teks "Berita" -->
    <div class="relative z-10 text-center">
        <h1 class="text-4xl font-bold text-white">Berita</h1>
    </div>
</section>

<!-- Bagian daftar berita -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="space-y-8">
            <!-- Contoh satu berita -->
            <article class="bg-white p-6 rounded shadow-md hover:shadow-lg transition-shadow">
                <h2 class="text-2xl font-semibold text-green-700 mb-2">Judul Berita Pertama</h2>
                <p class="text-sm text-gray-500 mb-4">12 Mei 2025</p>
                <p class="text-gray-700 leading-relaxed">
                    Ringkasan berita atau isi singkat berita ini bisa ditulis di sini untuk menarik perhatian pembaca.
                </p>
                <a href="#" class="text-green-600 hover:underline mt-2 inline-block">Baca selengkapnya &rarr;</a>
            </article>

            <!-- Contoh berita lainnya -->
            <article class="bg-white p-6 rounded shadow-md hover:shadow-lg transition-shadow">
                <h2 class="text-2xl font-semibold text-green-700 mb-2">Judul Berita Kedua</h2>
                <p class="text-sm text-gray-500 mb-4">10 Mei 2025</p>
                <p class="text-gray-700 leading-relaxed">
                    Ringkasan singkat berita kedua, bisa juga menampilkan highlight kegiatan terbaru pesantren.
                </p>
                <a href="#" class="text-green-600 hover:underline mt-2 inline-block">Baca selengkapnya &rarr;</a>
            </article>

            <!-- Tambah berita lain sesuai kebutuhan -->
        </div>
    </div>
</section>

@endsection
