@extends('admin.dashboard')

@section('content')
<div class="max-w-6xl mx-auto py-10">
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-2xl font-semibold">Data Alasan Memilih</h2>
        <a href="{{ route('admin.reason.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">+ Tambah Alasan</a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Icon</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($reasons as $reason)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <img src="{{ asset('images/' . $reason->icon) }}" alt="icon" class="h-10 mx-auto">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $reason->judul }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $reason->deskripsi }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <a href="{{ route('admin.reason.edit', $reason->id) }}" class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('admin.reason.destroy', $reason->id) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Yakin ingin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
