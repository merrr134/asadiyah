@extends('layouts.app')

@section('title', 'Visi Misi')

@section('content')

<!-- Bagian atas dengan gambar masjid -->
<section class="relative h-[50vh] flex items-center justify-center overflow-hidden">
    <!-- Gambar background -->
    <img src="{{ asset('images/FOTO TAMPAK DEPAN.jpeg') }}" 
         alt="Visi Misi Pesantren"
         class="absolute inset-0 w-full h-full object-cover z-0" />

    <!-- Overlay hitam transparan opsional -->
    <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>

    <!-- Teks "Visi Misi" -->
    <div class="relative z-10 text-center">
        <h1 class="text-4xl font-bold text-white">Visi Misi</h1>
    </div>
</section>

<!-- Bagian konten utama -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Konten teks -->
            <div class="md:col-span-2 space-y-6 text-justify text-gray-700 leading-relaxed">
                <h2 class="text-2xl font-semibold text-green-700">Visi</h2>
                <p>
                    Menjadi lembaga pendidikan pesantren yang unggul dan terdepan dalam pengembangan ilmu agama dan keterampilan hidup yang berlandaskan akidah Ahlussunnah wal Jama’ah.
                </p>

                <h2 class="text-2xl font-semibold text-green-700">Misi</h2>
                <ul class="list-disc list-inside space-y-2">
                    <li>Menyelenggarakan pendidikan yang komprehensif antara ilmu agama dan ilmu umum.</li>
                    <li>Membentuk karakter santri yang berakhlak mulia dan berwawasan luas.</li>
                    <li>Mendorong partisipasi aktif santri dalam kegiatan keagamaan dan sosial masyarakat.</li>
                    <li>Mengembangkan metode pembelajaran yang inovatif dan sesuai perkembangan zaman.</li>
                </ul>
            </div>

            <!-- Gambar atau ilustrasi -->
            <div>
                <img src="{{ asset('images/FOTO TAMPAK DEPAN.jpeg') }}" alt="Visi Misi Pesantren" class="rounded shadow-md mb-2">
                <p class="text-sm text-gray-500">Suasana belajar dan beraktivitas di lingkungan pesantren.</p>
            </div>
        </div>
    </div>
</section>

@endsection
