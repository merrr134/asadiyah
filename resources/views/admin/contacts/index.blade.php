{{-- resources/views/admin/contacts/index.blade.php --}}
@extends('admin.dashboard')

@section('title', 'Kelola Pesan Kontak')

@section('content')
<div class="min-h-screen bg-gray-50 py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Kelola Pesan Kontak</h1>
                    <p class="text-gray-600 mt-1">Kelola semua pesan yang masuk dari halaman kontak</p>
                </div>
                <div class="mt-4 sm:mt-0 flex items-center space-x-3">
                    @if($unreadCount > 0)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800">
                            {{ $unreadCount }} Pesan Baru
                        </span>
                        <form method="POST" action="{{ route('admin.contacts.mark-all-read') }}" class="inline">
                            @csrf
                            <button type="submit" 
                                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                Tandai Semua Dibaca
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>

        <!-- Alerts -->
        @if(session('success'))
            <div class="bg-green-50 border border-green-200 rounded-xl p-4 mb-6">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <p class="text-green-800 font-medium">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    <p class="text-red-800 font-medium">{{ session('error') }}</p>
                </div>
            </div>
        @endif

        <!-- Contacts Table -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            @if($contacts->count() > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Pengirim
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Subjek
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tanggal
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($contacts as $contact)
                                <tr class="hover:bg-gray-50 {{ !$contact->is_read ? 'bg-blue-50' : '' }}">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($contact->is_read)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                Dibaca
                                            </span>
                                        @else
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                Baru
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm">
                                            <div class="font-medium text-gray-900">{{ $contact->nama }}</div>
                                            <div class="text-gray-500">{{ $contact->email }}</div>
                                            @if($contact->no_telepon)
                                                <div class="text-gray-500">{{ $contact->no_telepon }}</div>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900 font-medium">{{ $contact->subjek }}</div>
                                        <div class="text-sm text-gray-500 mt-1">
                                            {{ Str::limit($contact->pesan, 60) }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div>{{ $contact->formatted_created_at }}</div>
                                        @if($contact->is_read && $contact->read_at)
                                            <div class="text-xs text-green-600">
                                                Dibaca: {{ $contact->read_at->format('d M Y, H:i') }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex items-center space-x-2">
                                            <a href="{{ route('admin.contacts.show', $contact->id) }}" 
                                               class="text-blue-600 hover:text-blue-900 bg-blue-100 hover:bg-blue-200 px-3 py-1 rounded-lg transition-colors">
                                                Lihat
                                            </a>
                                            
                                            <form method="POST" action="{{ route('admin.contacts.toggle-read', $contact->id) }}" class="inline">
                                                @csrf
                                                <button type="submit" 
                                                        class="text-gray-600 hover:text-gray-900 bg-gray-100 hover:bg-gray-200 px-3 py-1 rounded-lg transition-colors">
                                                    {{ $contact->is_read ? 'Tandai Belum Dibaca' : 'Tandai Dibaca' }}
                                                </button>
                                            </form>
                                            
                                            <form method="POST" action="{{ route('admin.contacts.destroy', $contact->id) }}" 
                                                  class="inline"
                                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="text-red-600 hover:text-red-900 bg-red-100 hover:bg-red-200 px-3 py-1 rounded-lg transition-colors">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="bg-gray-50 px-6 py-3">
                    {{ $contacts->links() }}
                </div>
            @else
                <div class="text-center py-12">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900">Belum ada pesan</h3>
                    <p class="mt-1 text-sm text-gray-500">Belum ada pesan kontak yang masuk.</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection