@extends('layouts.admin') {{-- Ganti sesuai layout tailwind-mu --}}

@section('title', 'Edit Testimonial')

@section('content')
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="mb-6">
        <nav class="text-sm text-gray-500 mb-2">
            <a href="{{ route('admin.dashboard') }}" class="hover:underline">Dashboard</a> /
            <a href="{{ route('admin.testimonials.index') }}" class="hover:underline">Testimonials</a> /
            <span>Edit</span>
        </nav>
        <h1 class="text-2xl font-semibold text-gray-800">Edit Testimonial</h1>
    </div>

    <form method="POST" action="{{ route('admin.testimonials.update', $testimonial) }}" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" name="name" id="name" placeholder="Masukkan nama lengkap"
                        value="{{ old('name', $testimonial->name) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('name')  @enderror">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="university" class="block text-sm font-medium text-gray-700">Universitas/Institusi</label>
                    <input type="text" name="university" id="university" placeholder="Masukkan nama universitas"
                        value="{{ old('university', $testimonial->university) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('university')  @enderror">
                    @error('university')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="testimonial" class="block text-sm font-medium text-gray-700">Testimonial</label>
                    <textarea name="testimonial" id="testimonial" rows="5"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('testimonial')  @enderror"
                        placeholder="Tulis testimonial...">{{ old('testimonial', $testimonial->testimonial) }}</textarea>
                    @error('testimonial')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="space-y-4">
                <div>
                    <label for="photo" class="block text-sm font-medium text-gray-700">Foto</label>

                    @if($testimonial->photo)
                        <div class="mb-2">
                            <img src="{{ $testimonial->photo_url }}" alt="Foto testimonial"
                                 class="rounded-md border w-32 h-32 object-cover">
                            <p class="text-xs text-gray-500 mt-1">Foto saat ini</p>
                        </div>
                    @endif

                    <input type="file" name="photo" id="photo"
                        accept="image/*" onchange="previewImage(this)"
                        class="block w-full text-sm text-gray-700 border border-gray-300 rounded-md file:mr-4 file:py-2 file:px-4
                               file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100
                               @error('photo')  @enderror">
                    @error('photo')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    <small class="text-gray-500 text-xs">Format: JPG, PNG, GIF. Maks 2MB.</small>

                    <div id="imagePreview" class="mt-3 hidden">
                        <img id="preview" src="" alt="Preview Foto" class="w-32 h-32 object-cover border rounded-md">
                        <p class="text-xs text-gray-500 mt-1">Preview foto baru</p>
                    </div>
                </div>

                <div>
                    <label for="rating" class="block text-sm font-medium text-gray-700">Rating</label>
                    <select name="rating" id="rating"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('rating')  @enderror">
                        <option value="">Pilih Rating</option>
                        @for($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}" {{ old('rating', $testimonial->rating) == $i ? 'selected' : '' }}>
                                {{ $i }} Bintang
                            </option>
                        @endfor
                    </select>
                    @error('rating')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="sort_order" class="block text-sm font-medium text-gray-700">Urutan Tampil</label>
                    <input type="number" name="sort_order" id="sort_order" min="1"
                        value="{{ old('sort_order', $testimonial->sort_order) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('sort_order')  @enderror">
                    @error('sort_order')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <small class="text-gray-500 text-xs">Tentukan urutan testimonial ditampilkan</small>
                </div>

                <div class="flex items-center space-x-2 mt-4">
    <input type="hidden" name="is_active" value="0"> {{-- Tambahkan ini --}}
    <input type="checkbox" name="is_active" id="is_active" value="1" class="rounded text-indigo-600"
        {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }}>
    <label for="is_active" class="text-sm text-gray-700">Aktif</label>
</div>

            </div>
        </div>

        <div class="mt-8 flex justify-end space-x-3">
            <a href="{{ route('admin.testimonials.index') }}"
               class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                Batal
            </a>
            <button type="submit"
                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                </svg>
                Update
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').classList.remove('hidden');
                document.getElementById('preview').src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
