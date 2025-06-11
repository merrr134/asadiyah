@extends('admin.dashboard')

@section('title', 'Detail Berita')

@section('content')
<div class="p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold">{{ $berita->judul }}</h1>
        <a href="{{ route('admin.berita.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
            ← Kembali
        </a>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        @if($berita->gambar)
            <div class="mb-4">
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full max-w-xl object-cover rounded">
            </div>
        @endif

        <div class="mb-4">
            <span class="text-sm text-gray-600">
                Dipublikasikan pada: {{ \Carbon\Carbon::parse($berita->tanggal_publish)->format('d M Y') }} |
                Dibuat: {{ $berita->created_at->format('d M Y H:i') }}
            </span>
        </div>

        <div class="prose max-w-none">
            {!! nl2br(e($berita->konten)) !!}
        </div>
    </div>
</div>
@endsection