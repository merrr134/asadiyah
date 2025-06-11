@extends('admin.dashboard')

@section('content')
<div class="max-w-6xl mx-auto py-10">
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-2xl font-semibold">Edit Alasan</h2>
        <a href="{{ route('admin.reason.index') }}" class="bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300">← Kembali</a>
    </div>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul class="list-disc ml-6">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
        <form action="{{ route('admin.reason.update', $reason->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Icon -->
            <div class="mb-4">
                <label class="block mb-1 font-medium text-gray-700">Icon Saat Ini</label>
                <img src="{{ asset('storage/' . $reason->icon) }}" alt="Icon" class="h-20 w-20 object-cover border mb-2">
                <input type="file" name="icon" class="w-full border px-3 py-2 rounded">
                @error('icon') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Judul -->
            <div class="mb-4">
                <label class="block font-medium text-gray-700 mb-1">Judul</label>
                <input type="text" name="judul" class="w-full border rounded px-3 py-2" value="{{ old('judul', $reason->judul) }}">
                @error('judul') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Deskripsi -->
            <div class="mb-4">
                <label class="block font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea name="deskripsi" class="w-full border rounded px-3 py-2" rows="4">{{ old('deskripsi', $reason->deskripsi) }}</textarea>
                @error('deskripsi') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Tombol Submit -->
            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Update Alasan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
