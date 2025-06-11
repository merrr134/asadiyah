<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat user admin default
        User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Administrator',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        // Buat beberapa admin lainnya (opsional)
        $admins = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@admin.com',
                'password' => Hash::make('superadmin123'),
                'role' => 'admin'
            ],
            [
                'name' => 'Admin Kedua',
                'email' => 'admin2@admin.com', 
                'password' => Hash::make('admin123'),
                'role' => 'admin'
            ]
        ];

        foreach ($admins as $admin) {
            User::updateOrCreate(
                ['email' => $admin['email']],
                array_merge($admin, [
                    'email_verified_at' => now(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ])
            );
        }

        $this->command->info('Admin users berhasil dibuat!');
        $this->command->info('Login credentials:');
        $this->command->info('Email: admin@admin.com | Password: password');
        $this->command->info('Email: superadmin@admin.com | Password: superadmin123');
        $this->command->info('Email: admin2@admin.com | Password: admin123');
    }
}