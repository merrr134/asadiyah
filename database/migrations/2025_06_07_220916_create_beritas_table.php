<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('konten');
            $table->string('gambar')->nullable();
            $table->string('slug')->unique();
            $table->date('tanggal_publish');
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->unsignedInteger('views_count')->default(0);
            $table->timestamps();
            
            // Indexes
            $table->index('slug');
            $table->index('status');
            $table->index('tanggal_publish');
            $table->index(['status', 'tanggal_publish']);
            $table->index('views_count');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};