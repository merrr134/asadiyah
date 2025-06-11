@extends('layouts.app')

@section('title', 'Sejarah')

@section('content')

<!-- Bagian atas dengan gambar masjid -->
<section class="relative h-[50vh] flex items-center justify-center overflow-hidden">
    <!-- Gambar background -->
    <img src="{{ asset('images/FOTO TAMPAK DEPAN.jpeg') }}" 
         alt="Sejarah Pesantren"
         class="absolute inset-0 w-full h-full object-cover z-0" />

    <!-- Overlay hitam transparan opsional -->
    <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>

    <!-- Teks "Sejarah" -->
    <div class="relative z-10 text-center">
        <h1 class="text-4xl font-bold text-white">Sejarah</h1>
    </div>
</section>

<!-- Bagian konten utama -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Konten teks -->
            <div class="md:col-span-2 space-y-4 text-justify text-gray-700 leading-relaxed">
                <p>
                    Pesantren As'adiyah Belawa Baru mulai berdiri pada tahun ... dengan latar belakang dan sejarah yang kuat untuk mencetak generasi yang beriman dan berilmu.
                </p>
                <p>
                    Dalam perjalanannya, pesantren ini menghadapi berbagai tantangan namun tetap kokoh dan terus berkembang hingga saat ini.
                </p>
                <p>
                    Kami selalu mengedepankan nilai-nilai keislaman yang moderat dan pendidikan yang holistik agar santri dapat berkontribusi positif untuk masyarakat luas.
                </p>
            </div>

            <!-- Gambar atau ilustrasi -->
            <div>
                <img src="{{ asset('images/FOTO TAMPAK DEPAN.jpeg') }}" alt="Sejarah Pesantren" class="rounded shadow-md mb-2">
                <p class="text-sm text-gray-500">Suasana lingkungan pesantren dari masa ke masa.</p>
            </div>
        </div>
    </div>
</section>

@endsection
