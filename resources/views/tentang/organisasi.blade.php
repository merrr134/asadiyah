@extends('layouts.app')

@section('title', 'Organisasi')

@section('content')

<!-- Bagian atas dengan gambar masjid -->
<section class="relative h-[50vh] flex items-center justify-center overflow-hidden">
    <!-- Gambar background -->
    <img src="{{ asset('images/FOTO TAMPAK DEPAN.jpeg') }}" 
         alt="Organisasi Pesantren"
         class="absolute inset-0 w-full h-full object-cover z-0" />

    <!-- Overlay hitam transparan opsional -->
    <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>

    <!-- Teks "Organisasi" -->
    <div class="relative z-10 text-center">
        <h1 class="text-4xl font-bold text-white">Organisasi</h1>
    </div>
</section>

<!-- Bagian konten utama -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Konten teks -->
            <div class="md:col-span-2 space-y-4 text-justify text-gray-700 leading-relaxed">
                <p>
                    Struktur organisasi Pesantren As'adiyah Belawa Baru dirancang untuk mendukung kelancaran proses pendidikan dan pengelolaan pesantren.
                </p>
                <p>
                    Organisasi ini terdiri dari berbagai bagian seperti pengurus pesantren, tenaga pengajar, bagian administrasi, serta unit-unit pendukung lainnya.
                </p>
                <p>
                    Setiap bagian memiliki tugas dan tanggung jawab yang jelas agar pesantren dapat berjalan efektif dan sesuai visi misi yang telah ditetapkan.
                </p>
                <p>
                    Kami berkomitmen untuk mengembangkan sistem organisasi yang transparan dan profesional demi kemajuan bersama.
                </p>
            </div>

            <!-- Gambar atau ilustrasi -->
            <div>
                <img src="{{ asset('images/FOTO TAMPAK DEPAN.jpeg') }}" alt="Organisasi Pesantren" class="rounded shadow-md mb-2">
                <p class="text-sm text-gray-500">Tim pengurus dan tenaga pendidik di lingkungan pesantren.</p>
            </div>
        </div>
    </div>
</section>

@endsection
