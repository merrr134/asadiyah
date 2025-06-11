@extends('admin.dashboard')
@section('content')
<div class="max-w-xl mx-auto py-10">
    <h2 class="text-2xl font-semibold mb-6">Tambah Alasan Baru</h2>

    <form action="{{ route('admin.reason.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div>
            <label class="block font-medium mb-1">Icon (gambar SVG/PNG/JPG)</label>
            <input type="file" name="icon" accept=".svg,.png,.jpg,.jpeg" class="w-full border rounded p-2" required>
            @error('icon') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Judul</label>
            <input type="text" name="judul" class="w-full border rounded px-3 py-2" value="{{ old('judul') }}">
            @error('judul') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="w-full border rounded px-3 py-2">{{ old('deskripsi') }}</textarea>
            @error('deskripsi') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
    </form>
</div>
@endsection
