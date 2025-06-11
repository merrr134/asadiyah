<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    // Ini untuk menentukan field yang boleh diisi secara massal
     protected $fillable = ['nama', 'deskripsi', 'gambar'];
}
