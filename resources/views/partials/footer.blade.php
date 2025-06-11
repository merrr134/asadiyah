<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>As'adiyah Belawa Baru - Alumni & Footer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #10b981 0%, #059669 50%, #047857 100%);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .testimonial-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .testimonial-card:hover {
            transform: translateY(-8px) scale(1.02);
        }
        
        .social-icon {
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            transform: translateY(-3px) scale(1.1);
        }
        
        .quote-icon {
            background: linear-gradient(45deg, #fbbf24, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .swiper-pagination-bullet {
            background: rgba(255, 255, 255, 0.5) !important;
            opacity: 1 !important;
        }
        
        .swiper-pagination-bullet-active {
            background: #fbbf24 !important;
        }
        
        .footer-wave {
            padding-top: 0px;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Testimoni Alumni -->
    @php
    use App\Models\Testimonial;
    $testimonis = Testimonial::all();
@endphp
    <section class="bg-gradient-to-b from-green-700 via-green-600 to-green-700 relative overflow-hidden" id="alumni">
    <!-- Background Decorations -->
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-32 h-32 bg-white/10 rounded-full blur-xl floating-animation"></div>
        <div class="absolute bottom-20 right-20 w-24 h-24 bg-yellow-400/20 rounded-full blur-lg" style="animation-delay: -2s;"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white/5 rounded-full blur-md floating-animation" style="animation-delay: -4s;"></div>
    </div>
    
    <div class="max-w-7xl mx-auto text-center px-6 relative z-10">
        <div class="fade-in-up">
            <div class="inline-flex items-center gap-3 mb-4">
                <div class="w-12 h-1 bg-yellow-400 rounded-full"></div>
                <span class="text-yellow-400 font-semibold tracking-wider uppercase text-sm">Alumni Success Stories</span>
                <div class="w-12 h-1 bg-yellow-400 rounded-full"></div>
            </div>
            <h2 class="text-white text-5xl font-bold mb-6 leading-tight">
                Testimoni Alumni
            </h2>
            <p class="text-white/80 text-xl max-w-3xl mx-auto mb-16 leading-relaxed">
                Dengarkan cerita inspiratif dari para alumni yang telah meraih kesuksesan berkat pendidikan berkualitas di As'adiyah Belawa Baru
            </p>
        </div>
        
        <div class="swiper mySwiper max-w-4xl mx-auto">
            <div class="swiper-wrapper">
                @foreach ($testimonis as $item)
                <div class="swiper-slide">
                    <div class="glass-card testimonial-card rounded-3xl p-10 mx-4 shadow-2xl">
                        <div class="flex flex-col items-center space-y-8">
                            <!-- Quote Icon -->
                            <div class="text-6xl quote-icon mb-4">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            
                            <!-- Profile Image -->
                            <div class="relative">
                                <div class="w-28 h-28 rounded-full bg-gradient-to-br from-yellow-400 to-orange-500 p-1">
                                    @if($item->photo)
                                        <img src="{{ $item->photo_url }}" alt="{{ $item->name }}" 
                                             class="w-full h-full rounded-full object-cover border-4 border-white" />
                                    @else
                                        <div class="w-full h-full rounded-full bg-gray-300 border-4 border-white flex items-center justify-center">
                                            <i class="fas fa-user text-gray-500 text-3xl"></i>
                                        </div>
                                    @endif
                                </div>
                                {{-- <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                    <i class="fas fa-check text-white text-sm"></i>
                                </div> --}}
                            </div>
                            
                            <!-- Content -->
                            <div class="text-center">
                                <h3 class="text-white text-2xl font-bold mb-2">{{ $item->name }}</h3>
                                <div class="flex items-center justify-center gap-2 mb-6">
                                    <div class="w-2 h-2 bg-yellow-400 rounded-full"></div>
                                    <p class="text-yellow-400 font-semibold">{{ $item->university }}</p>
                                    <div class="w-2 h-2 bg-yellow-400 rounded-full"></div>
                                </div>
                                <p class="text-white/90 text-lg max-w-2xl leading-relaxed italic">
                                    "{{ $item->testimonial }}"
                                </p>
                            </div>
                            
                            <!-- Rating Stars -->
                            <div class="flex gap-1 mt-6">
                                @for ($i = 0; $i < $item->rating; $i++)
                                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                                @endfor
                                @for ($i = $item->rating; $i < 5; $i++)
                                    <i class="far fa-star text-yellow-400/50 text-xl"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div class="swiper-pagination mt-12"></div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="bg-gradient-to-b from-green-700 via-green-600 to-green-800 text-white relative">
        <!-- Seamless transition decorations -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-20 w-24 h-24 bg-white/5 rounded-full blur-lg floating-animation"></div>
            <div class="absolute top-10 right-10 w-32 h-32 bg-yellow-400/10 rounded-full blur-xl" style="animation-delay: -3s;"></div>
            <div class="absolute bottom-20 left-1/3 w-16 h-16 bg-white/10 rounded-full blur-md floating-animation" style="animation-delay: -1s;"></div>
        </div>
        
        <div class="relative z-10 pt-8 pb-8">
            <div class="max-w-7xl mx-auto px-6">
                <!-- Main Footer Content -->
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-12 mb-12">
                    <!-- School Info -->
                    <div class="lg:col-span-2">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl flex items-center justify-center">
                                <i class="fas fa-graduation-cap text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold mb-1">AS'ADIYAH BELAWA-BARU</h3>
                                <p class="text-green-200">Pendidikan Islam Berkualitas</p>
                            </div>
                        </div>
                        
                        <div class="glass-card rounded-2xl p-6 mb-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-yellow-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-yellow-400"></i>
                                </div>
                                <div>
                                    <p class="font-semibold mb-2">Alamat Lengkap</p>
                                    <p class="text-green-100 leading-relaxed">
                                        Pattimang, Kec. Malangke,<br>
                                        Kabupaten Luwu Utara, Sulawesi Selatan
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Social Media -->
                        <div>
                            <p class="font-semibold mb-4">Ikuti Media Sosial Kami</p>
                            <div class="flex gap-4">
                                <a href="#" class="social-icon w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center hover:bg-blue-700">
                                    <i class="fab fa-facebook-f text-white"></i>
                                </a>
                                <a href="#" class="social-icon w-12 h-12 bg-pink-500 rounded-xl flex items-center justify-center hover:bg-pink-600">
                                    <i class="fab fa-instagram text-white"></i>
                                </a>
                                <a href="#" class="social-icon w-12 h-12 bg-red-600 rounded-xl flex items-center justify-center hover:bg-red-700">
                                    <i class="fab fa-youtube text-white"></i>
                                </a>
                                <a href="#" class="social-icon w-12 h-12 bg-blue-400 rounded-xl flex items-center justify-center hover:bg-blue-500">
                                    <i class="fab fa-twitter text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Info -->
                    <div>
                        <h4 class="text-xl font-bold mb-6 flex items-center gap-3">
                            <div class="w-8 h-8 bg-yellow-400/20 rounded-lg flex items-center justify-center">
                                <i class="fas fa-phone text-yellow-400 text-sm"></i>
                            </div>
                            Hubungi Kami
                        </h4>
                        
                        <div class="space-y-4">
                            <div class="glass-card rounded-xl p-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-green-500/20 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-phone text-green-400"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-green-200">Telepon</p>
                                        <p class="font-semibold">+62 813 4131 6878</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="glass-card rounded-xl p-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-envelope text-blue-400"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-green-200">Email</p>
                                        <p class="font-semibold">amirahmadamiruddin@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Operating Hours -->
                    <div>
                        <h4 class="text-xl font-bold mb-6 flex items-center gap-3">
                            <div class="w-8 h-8 bg-yellow-400/20 rounded-lg flex items-center justify-center">
                                <i class="fas fa-clock text-yellow-400 text-sm"></i>
                            </div>
                            Jam Operasional
                        </h4>
                        
                        <div class="glass-card rounded-xl p-6">
                            <div class="space-y-4">
                                <div class="flex justify-between items-center pb-3 border-b border-white/20">
                                    <span class="text-green-200">Senin - Jumat</span>
                                    <span class="font-semibold">08.00 - 16.00</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-green-200">Sabtu - Minggu</span>
                                    <span class="font-semibold text-orange-400">Libur</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Bottom Footer -->
                <div class="pt-8 border-t border-white/20">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                        <div class="flex items-center gap-4">
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                                <span class="text-sm">Status: Online</span>
                            </div>
                        </div>
                        
                        <p class="text-center text-green-200">
                            © 2025 Ahmad Amiruddin. All rights reserved. 
                            <span class="text-yellow-400">Made with ❤️</span>
                        </p>
                        
                        <div class="flex items-center gap-4 text-sm">
                            <a href="#" class="hover:text-yellow-400 transition-colors">Privacy</a>
                            <div class="w-1 h-1 bg-white/40 rounded-full"></div>
                            <a href="#" class="hover:text-yellow-400 transition-colors">Terms</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.mySwiper', {
            loop: true,
            slidesPerView: 1,
            centeredSlides: true,
            spaceBetween: 30,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            effect: 'slide',
            speed: 800,
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                }
            }
        });

        // Counter animation (if needed)
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / 200;

                if(count < target){
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 15);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.testimonial-card, .glass-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });
    </script>
</body>
</html>