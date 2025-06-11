<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Tampilkan halaman kontak
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        $unreadCount = Contact::where('is_read', false)->count();

        return view('admin.contacts.index', compact('contacts', 'unreadCount'));
    }

    public function create()
    {
        return view('admin.contacts.create');
    }

    /**
     * Simpan pesan kontak ke database
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_telepon' => 'nullable|string|max:20',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string|max:5000',
        ], [
            'nama.required' => 'Nama lengkap wajib diisi.',
            'nama.max' => 'Nama tidak boleh lebih dari 255 karakter.',
            'email.required' => 'Alamat email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter.',
            'no_telepon.max' => 'Nomor telepon tidak boleh lebih dari 20 karakter.',
            'subjek.required' => 'Subjek pesan wajib diisi.',
            'subjek.max' => 'Subjek tidak boleh lebih dari 255 karakter.',
            'pesan.required' => 'Pesan wajib diisi.',
            'pesan.max' => 'Pesan tidak boleh lebih dari 5000 karakter.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            Contact::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'no_telepon' => $request->no_telepon,
                'subjek' => $request->subjek,
                'pesan' => $request->pesan,
            ]);

            return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.')
                ->withInput();
        }
    }

    /**
     * Tampilkan daftar semua pesan kontak (untuk admin)
     */
    public function adminIndex()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
        $unreadCount = Contact::unread()->count();
        
        return view('admin.contacts.index', compact('contacts', 'unreadCount'));
    }

    /**
     * Tampilkan detail pesan kontak (untuk admin)
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        
        // Tandai sebagai sudah dibaca jika belum dibaca
        if (!$contact->is_read) {
            $contact->markAsRead();
        }
        
        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Hapus pesan kontak (untuk admin)
     */
    public function destroy($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->delete();
            
            return redirect()->route('admin.contacts.index')
                ->with('success', 'Pesan berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menghapus pesan.');
        }
    }

    /**
     * Toggle status baca pesan
     */
    public function toggleRead($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            
            if ($contact->is_read) {
                $contact->markAsUnread();
                $message = 'Pesan berhasil ditandai sebagai belum dibaca.';
            } else {
                $contact->markAsRead();
                $message = 'Pesan berhasil ditandai sebagai sudah dibaca.';
            }
            
            return redirect()->back()->with('success', $message);
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat mengubah status pesan.');
        }
    }

    /**
     * Tandai semua pesan sebagai sudah dibaca
     */
    public function markAllAsRead()
    {
        try {
            Contact::unread()->update([
                'is_read' => true,
                'read_at' => now()
            ]);
            
            return redirect()->back()
                ->with('success', 'Semua pesan berhasil ditandai sebagai sudah dibaca.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menandai semua pesan.');
        }
    }
    public function markAsRead()
    {
        // Tandai semua pesan sebagai telah dibaca
        \App\Models\Contact::where('is_read', false)->update(['is_read' => true]);

        return redirect()->route('admin.contacts.index')->with('success', 'Semua pesan telah ditandai sebagai dibaca.');
    }

}