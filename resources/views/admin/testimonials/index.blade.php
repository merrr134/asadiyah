@extends('admin.dashboard')

@section('title', 'Testimonial')
@section('breadcrumb', 'Testimonial')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-gray-800">Data Testimonial</h2>
        <a href="{{ route('admin.testimonials.create') }}"
           class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg shadow">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"/>
            </svg>
            Tambah Testimonial
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-100 text-gray-600 uppercase text-xs font-semibold">
                <tr>
                    <th class="px-6 py-3 text-left">No</th>
                    <th class="px-6 py-3 text-left">Nama</th>
                    <th class="px-6 py-3 text-left">Universitas</th>
                    <th class="px-6 py-3 text-left">Testimoni</th>
                    <th class="px-6 py-3 text-left">Foto</th>
                    <th class="px-6 py-3 text-center">Rating</th>
                    <th class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($testimonials as $testimonial)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $testimonial->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $testimonial->university }}</td>
                        <td class="px-6 py-4 max-w-sm whitespace-normal text-gray-700">{{ Str::limit($testimonial->testimonial, 100) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <img src="{{ $testimonial->photo_url }}" alt="{{ $testimonial->name }}" class="w-12 h-12 rounded-full object-cover">
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-block px-2 py-1 text-xs bg-yellow-100 text-yellow-800 rounded">
                                {{ $testimonial->rating }} / 5
                            </span>
                        </td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <a href="{{ route('admin.testimonials.edit', $testimonial) }}"
                               class="text-indigo-600 hover:text-indigo-800">Edit</a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial) }}"
                                  method="POST" class="inline-block"
                                  onsubmit="return confirm('Yakin ingin menghapus testimonial ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center px-6 py-4 text-gray-500">Belum ada data testimonial.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
