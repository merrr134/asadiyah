<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'no_telepon',
        'subjek',
        'pesan',
        'is_read',
        'read_at'
    ];

    protected $casts = [
        'is_read' => 'boolean',
        'read_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Scope untuk pesan yang belum dibaca
    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }

    // Scope untuk pesan yang sudah dibaca
    public function scopeRead($query)
    {
        return $query->where('is_read', true);
    }

    // Accessor untuk format tanggal Indonesia
    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('d F Y, H:i');
    }

    // Method untuk menandai pesan sebagai sudah dibaca
    public function markAsRead()
    {
        $this->update([
            'is_read' => true,
            'read_at' => Carbon::now()
        ]);
    }

    // Method untuk menandai pesan sebagai belum dibaca
    public function markAsUnread()
    {
        $this->update([
            'is_read' => false,
            'read_at' => null
        ]);
    }
}