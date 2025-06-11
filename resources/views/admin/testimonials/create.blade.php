@extends('admin.dashboard')

@section('content')
<div class="p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold">Tambah Testimoni</h1>
        <a href="{{ route('admin.testimonials.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
            ← Kembali
        </a>
    </div>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-800 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nama -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Universitas -->
            <div class="mb-4">
                <label for="university" class="block text-sm font-medium text-gray-700 mb-2">Universitas</label>
                <input type="text" id="university" name="university" value="{{ old('university') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
                @error('university')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Testimoni -->
            <div class="mb-4">
                <label for="testimonial" class="block text-sm font-medium text-gray-700 mb-2">Testimoni</label>
                <textarea id="testimonial" name="testimonial" rows="5"
                          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                          required>{{ old('testimonial') }}</textarea>
                @error('testimonial')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Foto -->
            <div class="mb-4">
                <label for="photo" class="block text-sm font-medium text-gray-700 mb-2">Foto</label>
                <input type="file" id="photo" name="photo"
                       accept="image/jpeg,image/png,image/jpg,image/gif"
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <p class="text-gray-500 text-sm mt-1">Format: JPEG, PNG, JPG, GIF. Maksimal 2MB.</p>
                @error('photo')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                
                <!-- Image Preview -->
                <div id="image-preview" class="mt-3 hidden">
                    <img id="preview-img" src="" alt="Preview" class="w-32 h-32 object-cover rounded-md border">
                </div>
            </div>

            <!-- Rating -->
            <div class="mb-4">
                <label for="rating" class="block text-sm font-medium text-gray-700 mb-2">Rating (1-5)</label>
                <input type="number" id="rating" name="rating" value="{{ old('rating', 5) }}"
                       min="1" max="5"
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
                @error('rating')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Sort Order -->
            <div class="mb-6">
                <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-2">Sort Order</label>
                <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', 1) }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
                <p class="text-gray-500 text-sm mt-1">Angka lebih kecil akan tampil lebih awal</p>
                @error('sort_order')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol -->
            <div class="flex gap-4">
                <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Simpan Testimoni
                </button>
                <a href="{{ route('admin.testimonials.index') }}"
                   class="px-6 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

<script>
document.getElementById('photo').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview-img').src = e.target.result;
            document.getElementById('image-preview').classList.remove('hidden');
        };
        reader.readAsDataURL(file);
    } else {
        document.getElementById('image-preview').classList.add('hidden');
    }
});
</script>
@endsection