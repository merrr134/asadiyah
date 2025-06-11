<?php

namespace App\Http\Controllers;

use App\Models\Reason;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class ReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reasons = \App\Models\Reason::all(); // ambil semua data alasan
        return view('admin.reason.index', compact('reasons'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.reason.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'icon' => 'required|file|mimes:svg,png,jpg,jpeg|max:2048',
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
    ]);

    if ($request->hasFile('icon')) {
        $file = $request->file('icon');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $fileName);
        $validated['icon'] = $fileName;
    }

    Reason::create($validated);

    return redirect()->route('admin.reason.index')->with('success', 'Alasan berhasil ditambahkan!');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reason = Reason::findOrFail($id); // Pastikan model Reason sudah ada
        return view('admin.reason.edit', compact('reason'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reason $reason)
{
    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'icon' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
    ]);

    if ($request->hasFile('icon')) {
        if ($reason->icon && Storage::disk('public')->exists($reason->icon)) {
            Storage::disk('public')->delete($reason->icon);
        }

        $path = $request->file('icon')->store('reasons', 'public');
        $validated['icon'] = $path;
    }

    $reason->update($validated);

    return redirect()->route('admin.reason.index')->with('success', 'Data berhasil diperbarui!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reason $reason)
{
    // Hapus gambar dari storage jika ada
    if ($reason->icon && Storage::disk('public')->exists($reason->icon)) {
        Storage::disk('public')->delete($reason->icon);
    }

    // Hapus data dari database
    $reason->delete();

    return redirect()->route('admin.reason.index')->with('success', 'Data berhasil dihapus!');
}

}
