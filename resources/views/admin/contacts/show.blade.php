{{-- resources/views/admin/contacts/show.blade.php --}}
@extends('layouts.admin')

@section('title', 'Detail Pesan Kontak')

@section('content')
<div class="min-h-screen bg-gray-50 py-6">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Detail Pesan Kontak</h1>
                    <p class="text-gray-600 mt-1">Lihat detail pesan dari {{ $contact->nama }}</p>
                </div>
                <a href="{{ route('admin.contacts.index') }}" 
                   class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                    Kembali
                </a>
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

        <!-- Contact Detail -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div class="text-white">
                            <h2 class="text-lg font-semibold">{{ $contact->nama }}</h2>
                            <p class="text-blue-100">{{ $contact->email }}</p>
                        </div>
                    </div>
                    <div class="text-right">
                        @if($contact->is_read)
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                Sudah Dibaca
                            </span>
                        @else
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                Belum Dibaca
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="p-6">
                <!-- Info Grid -->
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-500 mb-1">Nama Lengkap</label>
                            <p class="text-gray-900 font-medium">{{ $contact->nama }}</p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-500 mb-1">Email</label>
                            <p class="text-gray-900">
                                <a href="mailto:{{ $contact->email }}" 
                                   class="text-blue-600 hover:text-blue-800 hover:underline">
                                    {{ $contact->email }}
                                </a>
                            </p>
                        </div>

                        @if($contact->no_telepon)
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">No. Telepon</label>
                                <p class="text-gray-900">
                                    <a href="tel:{{ $contact->no_telepon }}" 
                                       class="text-blue-600 hover:text-blue-800 hover:underline">
                                        {{ $contact->no_telepon }}
                                    </a>
                                </p>
                            </div>
                        @endif
                    </div>

                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-500 mb-1">Tanggal Dikirim</label>
                            <p class="text-gray-900">{{ $contact->formatted_created_at }}</p>
                        </div>

                        @if($contact->is_read && $contact->read_at)
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Tanggal Dibaca</label>
                                <p class="text-gray-900">{{ $contact->read_at->format('d F Y, H:i') }}</p>
                            </div>
                        @endif

                        <div>
                            <label class="block text-sm font-medium text-gray-500 mb-1">Status</label>
                            <p class="text-gray-900">
                                @if($contact->is_read)
                                    <span class="text-green-600 font-medium">Sudah dibaca</span>
                                @else
                                    <span class="text-red-600 font-medium">Belum dibaca</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Subject -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-500 mb-2">Subjek</label>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <p class="text-gray-900 font-medium">{{ $contact->subjek }}</p>
                    </div>
                </div>

                <!-- Message -->
                <div class="mb-8">
                    <label class="block text-sm font-medium text-gray-500 mb-2">Pesan</label>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="text-gray-900 whitespace-pre-wrap">{{ $contact->pesan }}</div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex flex-wrap gap-3 pt-6 border-t border-gray-200">
                    <!-- Reply Button -->
                    <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subjek }}" 
                       class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium transition-colors inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Balas Email
                    </a>

                    @if($contact->no_telepon)
                        <a href="tel:{{ $contact->no_telepon }}" 
                           class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg font-medium transition-colors inline-flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Telepon
                        </a>
                    @endif

                    <!-- Toggle Read Status -->
                    <form method="POST" action="{{ route('admin.contacts.toggle-read', $contact->id) }}" class="inline">
                        @csrf
                        <button type="submit" 
                                class="bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-2 rounded-lg font-medium transition-colors inline-flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            @if($contact->is_read)
                                Tandai Belum Dibaca
                            @else
                                Tandai Sudah Dibaca
                            @endif
                        </button>
                    </form>

                    <!-- Delete Button -->
                    <form method="POST" action="{{ route('admin.contacts.destroy', $contact->id) }}" 
                          class="inline"
                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg font-medium transition-colors inline-flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection