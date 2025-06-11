@extends('admin.dashboard')

@section('content')
<div class="p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold">Edit Berita</h1>
        <a href="{{ route('admin.berita.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
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
        <form action="{{ route('admin.berita.update', $berita) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">Judul Berita</label>
                <input type="text" 
                       id="judul"
                       name="judul" 
                       value="{{ old('judul', $berita->judul) }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('judul')  @enderror"
                       required>
                @error('judul')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="konten" class="block text-sm font-medium text-gray-700 mb-2">Isi Berita</label>
                <textarea id="konten"
                          name="konten" 
                          rows="10"
                          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('konten')  @enderror"
                          placeholder="Tulis isi berita di sini..."
                          required>{{ old('konten', $berita->konten) }}</textarea>
                @error('konten')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Saat Ini</label>
                @if($berita->gambar)
                    <div class="mb-3">
                        <img src="{{ $berita->gambar_url }}" 
                             alt="Gambar Saat Ini" 
                             class="w-32 h-32 object-cover rounded border">
                    </div>
                @else
                    <p class="text-gray-500 text-sm mb-3">Tidak ada gambar</p>
                @endif
            </div>

            <div class="mb-4">
                <label for="gambar" class="block text-sm font-medium text-gray-700 mb-2">Ganti Gambar (Opsional)</label>
                <input type="file" 
                       id="gambar"
                       name="gambar" 
                       accept="image/jpeg,image/png,image/jpg,image/gif"
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('gambar')  @enderror">
                <p class="text-gray-500 text-sm mt-1">Format: JPEG, PNG, JPG, GIF. Maksimal 2MB. Kosongkan jika tidak ingin mengganti gambar.</p>
                @error('gambar')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                
                <div id="image-preview" class="mt-2 hidden">
                    <p class="text-sm text-gray-600 mb-1">Preview gambar baru:</p>
                    <img id="preview-img" src="" alt="Preview" class="w-32 h-32 object-cover rounded border">
                </div>
            </div>

            <div class="mb-6">
                <label for="tanggal_publish" class="block text-sm font-medium text-gray-700 mb-2">Tanggal Publish</label>
                <input type="date" 
                       id="tanggal_publish"
                       name="tanggal_publish" 
                       value="{{ old('tanggal_publish', $berita->tanggal_publish->format('Y-m-d')) }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('tanggal_publish')  @enderror"
                       required>
                <p class="text-gray-500 text-sm mt-1">Jika tanggal di masa depan, berita akan menjadi draft</p>
                @error('tanggal_publish')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-4">
                <button type="submit" 
                        class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update Berita
                </button>
                <a href="{{ route('admin.berita.index') }}" 
                   class="px-6 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

<script>
document.getElementById('gambar').addEventListener('change', function(e) {
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