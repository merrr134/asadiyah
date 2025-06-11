@extends('admin.dashboard')

@section('content')
<div class="p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold">Tambah Program</h1>
        <a href="{{ route('admin.program.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">
            ← Kembali
        </a>
    </div>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc ml-6">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.program.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nama -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Nama Program</label>
                <input type="text" name="nama" value="{{ old('nama') }}" class="w-full border px-3 py-2 rounded" required>
                @error('nama') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Deskripsi -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Deskripsi</label>
                <textarea name="deskripsi" rows="4" class="w-full border px-3 py-2 rounded" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Gambar -->
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-1">Gambar</label>
                <input type="file" name="gambar" class="w-full border px-3 py-2 rounded" required>
                @error('gambar') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Tombol -->
            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Simpan Program
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
