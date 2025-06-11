@extends('admin.dashboard')

@section('content')
<div class="p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold">Daftar Program</h1>
        <a href="{{ route('admin.program.create') }}" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
            + Tambah Program Baru
        </a>
    </div>

    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-lg shadow p-4">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">No</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">Gambar</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">Nama Program</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">Deskripsi</th>
                    <th class="px-4 py-3 text-right text-sm font-semibold text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($programs as $index => $program)
                <tr>
                    <td class="px-4 py-3">{{ $index + 1 }}</td>
                    <td class="px-4 py-3">
                        @if ($program->gambar)
                            <img src="{{ asset('storage/' . $program->gambar) }}" alt="{{ $program->nama }}" class="w-14 h-14 object-cover rounded border">
                        @else
                            <span class="text-gray-400 italic">Tidak ada gambar</span>
                        @endif
                    </td>
                    <td class="px-4 py-3 font-medium">{{ $program->nama }}</td>
                    <td class="px-4 py-3">{{ Str::limit($program->deskripsi, 70) }}</td>
                    <td class="px-4 py-3 text-right flex gap-2 justify-end">
                        <a href="{{ route('admin.program.edit', $program->id) }}" class="text-blue-600 hover:underline text-sm">Edit</a>
                        <form action="{{ route('admin.program.destroy', $program->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline text-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class=" py-6 text-center text-gray-500">Belum ada data program.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
