@extends('admin.dashboard')

@section('title', 'Detail Testimonial')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.testimonials.index') }}">Testimonials</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
                <h4 class="page-title">Detail Testimonial</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="text-center">
                                @if($testimonial->photo)
                                    <img src="{{ $testimonial->photo_url }}" alt="{{ $testimonial->name }}" 
                                         class="img-fluid rounded-circle mb-3" style="max-width: 200px; max-height: 200px;">
                                @else
                                    <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" 
                                         style="width: 200px; height: 200px;">
                                        <i class="mdi mdi-account display-4 text-white"></i>
                                    </div>
                                @endif
                                
                                <h4 class="mb-1">{{ $testimonial->name }}</h4>
                                <p class="text-muted">{{ $testimonial->university }}</p>
                                
                                <div class="mb-3">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $testimonial->rating)
                                            <i class="mdi mdi-star text-warning h4"></i>
                                        @else
                                            <i class="mdi mdi-star-outline text-muted h4"></i>
                                        @endif
                                    @endfor
                                    <p class="text-muted mt-1">{{ $testimonial->rating }}/5 bintang</p>
                                </div>

                                <div class="row text-center">
                                    <div class="col-6">
                                        <div class="border-end">
                                            <h5 class="mb-1">{{ $testimonial->sort_order }}</h5>
                                            <p class="text-muted mb-0">Urutan</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-1">
                                            <span class="badge {{ $testimonial->is_active ? 'bg-success' : 'bg-secondary' }}">
                                                {{ $testimonial->is_active ? 'Aktif' : 'Nonaktif' }}
                                            </span>
                                        </h5>
                                        <p class="text-muted mb-0">Status</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <h5 class="mb-3">Testimonial</h5>
                            <div class="bg-light p-3 rounded">
                                <blockquote class="blockquote mb-0">
                                    <p class="mb-3">"{{ $testimonial->testimonial }}"</p>
                                    <footer class="blockquote-footer">
                                        <strong>{{ $testimonial->name }}</strong>, {{ $testimonial->university }}
                                    </footer>
                                </blockquote>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <h6>Informasi</h6>
                                    <table class="table table-sm">
                                        <tr>
                                            <td><strong>Dibuat:</strong></td>
                                            <td>{{ $testimonial->created_at->format('d M Y, H:i') }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Diupdate:</strong></td>
                                            <td>{{ $testimonial->updated_at->format('d M Y, H:i') }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="text-end mt-4">
                                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-light me-2">
                                    <i class="mdi mdi-arrow-left"></i> Kembali
                                </a>
                                <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-primary">
                                    <i class="mdi mdi-square-edit-outline"></i> Edit
                                </a>
                                <form method="POST" action="{{ route('admin.testimonials.destroy', $testimonial) }}" 
                                      class="d-inline" onsubmit="return confirm('Yakin ingin menghapus testimonial ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="mdi mdi-delete"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection