{{-- resources/views/admin/testimonials/form.blade.php --}}
@extends('layouts.admin')

@section('title', isset($testimonial) ? 'Edit Testimonial' : 'Tambah Testimonial')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        {{ isset($testimonial) ? 'Edit Testimonial' : 'Tambah Testimonial' }}
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ isset($testimonial) ? route('admin.testimonials.update', $testimonial) : route('admin.testimonials.store') }}" 
                          method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($testimonial))
                            @method('PUT')
                        @endif
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nama Alumni <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" 
                                           value="{{ old('name', $testimonial->name ?? '') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="university">Universitas <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('university') is-invalid @enderror" 
                                           id="university" name="university" 
                                           value="{{ old('university', $testimonial->university ?? '') }}" required>
                                    @error('university')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="testimonial">Testimonial <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('testimonial') is-invalid @enderror" 
                                      id="testimonial" name="testimonial" rows="4" required>{{ old('testimonial', $testimonial->testimonial ?? '') }}</textarea>
                            @error('testimonial')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="photo">Foto Alumni</label>
                                    <input type="file" class="form-control @error('photo') is-invalid @enderror" 
                                           id="photo" name="photo" accept="image/*">
                                    @if(isset($testimonial) && $testimonial->photo)
                                        <div class="mt-2">
                                            <img src="{{ $testimonial->photo_url }}" alt="Current Photo" 
                                                 class="img-thumbnail" style="max-width: 100px;">
                                        </div>
                                    @endif
                                    @error('photo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="form-text text-muted">Format: JPG, PNG, GIF. Maksimal 2MB.</small>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="rating">Rating <span class="text-danger">*</span></label>
                                    <select class="form-control @error('rating') is-invalid @enderror" 
                                            id="rating" name="rating" required>
                                        @for($i = 1; $i <= 5; $i++)
                                            <option value="{{ $i }}" 
                                                {{ old('rating', $testimonial->rating ?? 5) == $i ? 'selected' : '' }}>
                                                {{ $i }} Bintang
                                            </option>
                                        @endfor
                                    </select>
                                    @error('rating')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="sort_order">Urutan Tampil</label>
                                    <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                           id="sort_order" name="sort_order" min="0"
                                           value="{{ old('sort_order', $testimonial->sort_order ?? 0) }}">
                                    @error('sort_order')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" 
                                       {{ old('is_active', $testimonial->is_active ?? true) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">
                                    Aktif (tampilkan di website)
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> 
                                {{ isset($testimonial) ? 'Update' : 'Simpan' }}
                            </button>
                            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
      // testimonials.js - Script untuk memuat testimonial dari API Laravel

document.addEventListener('DOMContentLoaded', function() {
    loadTestimonials();
});

async function loadTestimonials() {
    try {
        const response = await fetch('/api/testimonials');
        const testimonials = await response.json();
        
        if (testimonials.length > 0) {
            renderTestimonials(testimonials);
            initializeSwiper();
        }
    } catch (error) {
        console.error('Error loading testimonials:', error);
        // Fallback ke data default jika API gagal
        loadDefaultTestimonials();
    }
}

function renderTestimonials(testimonials) {
    const swiperWrapper = document.querySelector('.swiper-wrapper');
    if (!swiperWrapper) return;
    
    // Clear existing slides
    swiperWrapper.innerHTML = '';
    
    testimonials.forEach(testimonial => {
        const slide = createTestimonialSlide(testimonial);
        swiperWrapper.appendChild(slide);
    });
}

function createTestimonialSlide(testimonial) {
    const slide = document.createElement('div');
    slide.className = 'swiper-slide';
    
    slide.innerHTML = `
        <div class="glass-card testimonial-card rounded-3xl p-10 mx-4 shadow-2xl">
            <div class="flex flex-col items-center space-y-8">
                <!-- Quote Icon -->
                <div class="text-6xl quote-icon mb-4">
                    <i class="fas fa-quote-left"></i>
                </div>
                
                <!-- Profile Image -->
                <div class="relative">
                    <div class="w-28 h-28 rounded-full bg-gradient-to-br from-yellow-400 to-orange-500 p-1">
                        <img src="${testimonial.photo_url || 'https://via.placeholder.com/150'}" 
                             alt="${testimonial.name}" 
                             class="w-full h-full rounded-full object-cover border-4 border-white" 
                             onerror="this.src='https://via.placeholder.com/150'" />
                    </div>
                    <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-white text-sm"></i>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="text-center">
                    <h3 class="text-white text-2xl font-bold mb-2">${escapeHtml(testimonial.name)}</h3>
                    <div class="flex items-center justify-center gap-2 mb-6">
                        <div class="w-2 h-2 bg-yellow-400 rounded-full"></div>
                        <p class="text-yellow-400 font-semibold">${escapeHtml(testimonial.university)}</p>
                        <div class="w-2 h-2 bg-yellow-400 rounded-full"></div>
                    </div>
                    <p class="text-white/90 text-lg max-w-2xl leading-relaxed italic">
                        "${escapeHtml(testimonial.testimonial)}"
                    </p>
                </div>
                
                <!-- Rating Stars -->
                <div class="flex gap-1 mt-6">
                    ${generateStars(testimonial.rating)}
                </div>
            </div>
        </div>
    `;
    
    return slide;
}

function generateStars(rating) {
    let stars = '';
    for (let i = 1; i <= 5; i++) {
        if (i <= rating) {
            stars += '<i class="fas fa-star text-yellow-400 text-xl"></i>';
        } else {
            stars += '<i class="far fa-star text-yellow-400 text-xl"></i>';
        }
    }
    return stars;
}

function escapeHtml(text) {
    const map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
    };
    return text.replace(/[&<>"']/g, function(m) { return map[m]; });
}

function initializeSwiper() {
    // Pastikan Swiper sudah di-load
    if (typeof Swiper !== 'undefined') {
        new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 1,
                }
            }
        });
    }
}

function loadDefaultTestimonials() {
    // Fallback data jika API tidak tersedia
    const defaultTestimonials = [
        {
            name: 'Emir Muhammad Firassiyan',
            university: 'STEI-K Institut Teknologi Bandung',
            testimonial: '6 tahun di Ma\'had Al-Izzah Batu bagi saya sangat berkesan. Saya tidak hanya belajar akademik dan tahfidz, tetapi juga agama, pengalaman organisasi, dan nilai-nilai kehidupan yang tak ternilai.',
            photo_url: 'https://via.placeholder.com/150',
            rating: 5
        },
        {
            name: 'Siti Nurhaliza Rahman',
            university: 'Universitas Gadjah Mada',
            testimonial: 'Berkat bimbingan dan ilmu yang diberikan di Ma\'had, saya mampu menjadi pribadi yang lebih baik, sukses di pendidikan formal, dan berkontribusi di masyarakat.',
            photo_url: 'https://via.placeholder.com/150',
            rating: 5
        }
    ];
    
    renderTestimonials(defaultTestimonials);
    initializeSwiper();
}
</script>
@endsection