@extends('admin.dashboard')

@section('content')
<div class="p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold">Kelola Berita</h1>
        <a href="{{ route('admin.berita.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            + Tambah Berita
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal Publish</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Views</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($berita as $item)
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            @if($item->gambar)
                                <img src="{{ $item->gambar_url }}" alt="" class="w-12 h-12 object-cover rounded mr-3">
                            @endif
                            <div>
                                <div class="font-medium text-gray-900">{{ $item->judul }}</div>
                                <div class="text-sm text-gray-500">{{ $item->excerpt }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        @if($item->isPublished())
                            <span class="px-2 py-1 text-xs bg-green-100 text-green-800 rounded-full">Published</span>
                        @else
                            <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-800 rounded-full">Draft</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                        {{ $item->tanggal_format }}
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                        {{ number_format($item->views_count) }}
                    </td>
                    <td class="px-6 py-4 text-sm font-medium space-x-2">
                        <a href="{{ route('admin.berita.show', $item) }}" class="text-blue-600 hover:text-blue-900">Lihat</a>
                        <a href="{{ route('admin.berita.edit', $item) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <form action="{{ route('admin.berita.destroy', $item) }}" method="POST" class="inline" 
                              onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                        Belum ada berita. <a href="{{ route('admin.berita.create') }}" class="text-blue-600">Tambah berita pertama</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($berita->hasPages())
        <div class="mt-6">
            {{ $berita->links() }}
        </div>
    @endif
</div>
@endsection
