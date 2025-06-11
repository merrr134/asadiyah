<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $fillable = [
        'judul',
        'konten',
        'gambar',
        'slug',
        'tanggal_publish',
        'status',
        'views_count'
    ];

    protected $casts = [
        'tanggal_publish' => 'date'
    ];

    // ========== SCOPES ==========
    
    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                    ->where('tanggal_publish', '<=', now());
    }

    public function scopeDraft($query)
    {
        return $query->where('status', 'draft')
                    ->orWhere('tanggal_publish', '>', now());
    }

    // ========== ACCESSORS ==========
    
    public function getGambarUrlAttribute()
    {
        if ($this->gambar) {
            return asset('storage/' . $this->gambar);
        }
        return asset('images/default-news.jpg');
    }

    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->konten), 150);
    }

    public function getTanggalFormatAttribute()
    {
        return $this->tanggal_publish->locale('id')->isoFormat('D MMMM Y');
    }

    public function getTanggalRelativeAttribute()
    {
        return $this->tanggal_publish->locale('id')->diffForHumans();
    }

    // ========== METHODS ==========
    
    public function isPublished()
    {
        return $this->status === 'published' && $this->tanggal_publish <= now();
    }

    public function isDraft()
    {
        return $this->status === 'draft' || $this->tanggal_publish > now();
    }

    // Auto update status based on publish date
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($berita) {
            // Auto set status berdasarkan tanggal publish
            if ($berita->tanggal_publish <= now()) {
                $berita->status = 'published';
            } else {
                $berita->status = 'draft';
            }
        });
    }
}
