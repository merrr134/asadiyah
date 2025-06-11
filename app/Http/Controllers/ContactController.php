<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Menampilkan semua pesan kontak (jika perlu)
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('contact'); // tampilkan form kontak
    }

    // Menyimpan pesan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'no_telepon' => 'nullable|string|max:20',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
    }

    // Menampilkan detail 1 pesan (jika diperlukan)
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    // Menghapus pesan (opsional untuk admin, tapi bisa kamu tampilkan di sini)
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Pesan berhasil dihapus.');
    }
}
