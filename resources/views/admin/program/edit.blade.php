@extends('admin.dashboard')

@section('content')
<div class="p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold">Edit Program</h1>
        <a href="{{ route('admin.program.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">
            ← Kembali
        </a>
    </div>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.program.update', $program->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Gambar -->
            <div class="mb-5">
                <label class="block mb-2 font-medium text-gray-700">Gambar Saat Ini</label>
                <img src="{{ asset('storage/' . $program->gambar) }}" alt="Gambar Program" class="w-20 h-20 object-cover rounded border mb-3">
                <input type="file" name="gambar" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('gambar')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Nama -->
            <div class="mb-5">
                <label class="block mb-2 font-medium text-gray-700">Nama Program</label>
                <input type="text" name="nama" value="{{ old('nama', $program->nama) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('nama')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Deskripsi -->
            <div class="mb-5">
                <label class="block mb-2 font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" rows="4" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">{{ old('deskripsi', $program->deskripsi) }}</textarea>
                @error('deskripsi')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit -->
            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Update Program
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
