<?php

namespace App\Http\Controllers;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    protected $fillable = ['nama'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::all();
        return view('admin.program.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.program.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
    'nama' => 'required|string|max:255',
    'deskripsi' => 'nullable|string',
    'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
]);


    if ($request->hasFile('gambar')) {
        $path = $request->file('gambar')->store('programs', 'public'); // simpan di storage/app/public/programs
        $validated['gambar'] = $path; // simpan path relatif (programs/nama_file.jpg)
    }

    Program::create($validated);

    return redirect()->route('admin.program.index')->with('success', 'Program berhasil ditambahkan.');
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
    public function edit(Program $program)
{
    return view('admin.program.edit', compact('program'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Cek apakah user upload gambar baru
    if ($request->hasFile('gambar')) {
        $path = $request->file('gambar')->store('programs', 'public');
        $validated['gambar'] = $path;
    }

    $program->update($validated);

    return redirect()->route('admin.program.index')->with('success', 'Program berhasil diupdate!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
{
    if ($program->gambar && \Storage::disk('public')->exists($program->gambar)) {
        \Storage::disk('public')->delete($program->gambar);
    }

    $program->delete();

    return redirect()->route('admin.program.index')->with('success', 'Program berhasil dihapus.');
}

}
