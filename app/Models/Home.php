<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'program'; // sesuaikan nama tabel jika berbeda
    protected $fillable = ['nama', 'deskripsi', 'gambar']; // sesuaikan dengan kolom di DB
}
