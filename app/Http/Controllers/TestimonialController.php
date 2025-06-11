<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::ordered()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'testimonial' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating' => 'required|integer|min:1|max:5',
            'sort_order' => 'required|integer|min:1',
            'is_active' => 'boolean'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();
        
        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->store('testimonials', 'public');
            $data['photo'] = $photoPath;
        }

        $data['is_active'] = $request->has('is_active');

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'testimonial' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating' => 'required|integer|min:1|max:5',
            'sort_order' => 'required|integer|min:1',
            'is_active' => 'boolean'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();
        
        // Handle photo upload
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($testimonial->photo && Storage::disk('public')->exists($testimonial->photo)) {
                Storage::disk('public')->delete($testimonial->photo);
            }
            
            $photo = $request->file('photo');
            $photoPath = $photo->store('testimonials', 'public');
            $data['photo'] = $photoPath;
        }

        $data['is_active'] = $request->has('is_active');

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // Delete photo if exists - FIXED: using 'photo' not 'foto'
        if ($testimonial->photo && Storage::disk('public')->exists($testimonial->photo)) {
            Storage::disk('public')->delete($testimonial->photo);
        }

        $testimonial->delete();

        return redirect()->back()->with('success', 'Testimoni berhasil dihapus');
    }

    /**
     * Toggle status active/inactive
     */
    public function toggleStatus(Testimonial $testimonial)
    {
        $testimonial->update([
            'is_active' => !$testimonial->is_active
        ]);

        return redirect()->back()
            ->with('success', 'Status testimonial berhasil diubah!');
    }

    /**
     * API endpoint untuk mendapatkan testimonials aktif (untuk frontend)
     */
    public function getTestimonials()
    {
        $testimonials = Testimonial::active()->ordered()->get();
        return response()->json($testimonials);
    }
}