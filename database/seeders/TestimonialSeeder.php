<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Ahmad Rizki',
                'university' => 'Universitas Indonesia',
                'testimonial' => 'Program ini sangat membantu saya dalam mengembangkan kemampuan akademik dan soft skill. Pengajarnya juga sangat kompeten dan berpengalaman.',
                'rating' => 5,
                'sort_order' => 1,
                'is_active' => true
            ],
            [
                'name' => 'Siti Nurhaliza',
                'university' => 'Institut Teknologi Bandung',
                'testimonial' => 'Fasilitas yang disediakan sangat lengkap dan modern. Lingkungan belajar yang kondusif membuat saya semakin termotivasi untuk berprestasi.',
                'rating' => 5,
                'sort_order' => 2,
                'is_active' => true
            ],
            [
                'name' => 'Budi Santoso',
                'university' => 'Universitas Gadjah Mada',
                'testimonial' => 'Kurikulum yang diterapkan sangat relevan dengan kebutuhan industri saat ini. Saya merasa lebih siap menghadapi dunia kerja setelah mengikuti program ini.',
                'rating' => 4,
                'sort_order' => 3,
                'is_active' => true
            ],
            [
                'name' => 'Dewi Kartika',
                'university' => 'Universitas Airlangga',
                'testimonial' => 'Metode pembelajaran yang interaktif dan modern membuat proses belajar menjadi lebih menyenangkan dan mudah dipahami.',
                'rating' => 5,
                'sort_order' => 4,
                'is_active' => true
            ],
            [
                'name' => 'Andi Pratama',
                'university' => 'Institut Teknologi Sepuluh Nopember',
                'testimonial' => 'Sistem mentoring yang diterapkan sangat membantu dalam mengembangkan potensi diri. Para mentor sangat supportive dan helpful.',
                'rating' => 4,
                'sort_order' => 5,
                'is_active' => true
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}