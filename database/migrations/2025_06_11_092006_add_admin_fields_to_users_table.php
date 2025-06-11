<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Tambah kolom role jika belum ada
            if (!Schema::hasColumn('users', 'role')) {
                $table->enum('role', ['user', 'admin'])->default('user')->after('email');
            }
            
            // Tambah kolom untuk tracking login
            if (!Schema::hasColumn('users', 'last_login_at')) {
                $table->timestamp('last_login_at')->nullable();
            }
            
            if (!Schema::hasColumn('users', 'last_login_ip')) {
                $table->string('last_login_ip', 45)->nullable();
            }
            
            if (!Schema::hasColumn('users', 'last_activity_at')) {
                $table->timestamp('last_activity_at')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function reverse(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'last_login_at', 'last_login_ip', 'last_activity_at']);
        });
    }
};
