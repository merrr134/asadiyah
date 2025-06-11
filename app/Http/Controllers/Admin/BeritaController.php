<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    // ========== ADMIN METHODS ==========
    
    public function index()
    {
        $berita = Berita::latest()->paginate(10);
        return view('admin.berita.index', compact('berita'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal_publish' => 'required|date',
        ]);

        // Generate unique slug
        $slug = Str::slug($validated['judul']);
        $originalSlug = $slug;
        $count = 1;

        while (Berita::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }
        $validated['slug'] = $slug;

        // Handle gambar upload
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('berita', 'public');
            $validated['gambar'] = $path;
        }

        // Set status based on publish date
        $validated['status'] = $validated['tanggal_publish'] <= now() ? 'published' : 'draft';

        Berita::create($validated);

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil ditambahkan!');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.show', compact('berita'));
    }


    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal_publish' => 'required|date',
        ]);

        // Generate unique slug jika judul berubah
        if ($validated['judul'] !== $berita->judul) {
            $slug = Str::slug($validated['judul']);
            $originalSlug = $slug;
            $count = 1;

            while (Berita::where('slug', $slug)->where('id', '!=', $berita->id)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }
            $validated['slug'] = $slug;
        }

        // Handle gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }
            
            $path = $request->file('gambar')->store('berita', 'public');
            $validated['gambar'] = $path;
        }

        // Update status based on publish date
        $validated['status'] = $validated['tanggal_publish'] <= now() ? 'published' : 'draft';

        $berita->update($validated);

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil diupdate!');
    }

    public function destroy(Berita $berita)
    {
        // Hapus gambar
        if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil dihapus!');
    }

    // ========== PUBLIC METHODS ==========
    
    public function publicIndex()
    {
        $berita = Berita::published()
                       ->latest('tanggal_publish')
                       ->paginate(12);
                       
        return view('admin.berita.index', compact('berita'));
    }

    public function publicShow(Berita $berita)
    {
        // Pastikan berita sudah publish
        if (!$berita->isPublished()) {
            abort(404);
        }

        // Increment views
        $berita->increment('views_count');

        // Get related berita
        $relatedBerita = Berita::published()
                              ->where('id', '!=', $berita->id)
                              ->latest('tanggal_publish')
                              ->limit(3)
                              ->get();

        return view('admin.berita.show', compact('berita', 'relatedBerita'));
    }
}