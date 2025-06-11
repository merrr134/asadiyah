<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>As'adiyah - Clean Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    
    <!-- Enhanced Navigation dengan Utility Classes Only -->
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-500 ease-in-out bg-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo Enhanced -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-emerald-600 rounded-xl flex items-center justify-center shadow-lg transform hover:scale-110 transition-transform duration-300">
                        <span class="text-white font-bold text-lg">A</span>
                    </div>
                    <a href="/" class="text-white font-bold text-2xl hover:scale-105 transition-transform duration-300 drop-shadow-lg">
                        As'adiyah
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <ul class="hidden lg:flex items-center space-x-8">
                    <li class="relative group">
                        <a href="/" class="text-white font-medium text-sm tracking-wide hover:text-green-300 transition-all duration-300 py-2 relative">
                            Home
                            <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-gradient-to-r from-green-400 to-emerald-300 transform -translate-x-1/2 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>
                    
                    <li class="relative group">
                        <a href="{{ route('tentang') }}" class="text-white font-medium text-sm tracking-wide hover:text-green-300 transition-all duration-300 py-2 relative">
                            Tentang Kami
                            <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-gradient-to-r from-green-400 to-emerald-300 transform -translate-x-1/2 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>

                    
                    <li class="relative group">
                        <a href="{{ route('program') }}" class="text-white font-medium text-sm tracking-wide hover:text-green-300 transition-all duration-300 py-2 relative">
                            Program
                            <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-gradient-to-r from-green-400 to-emerald-300 transform -translate-x-1/2 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="{{ route('contacts.index') }}" class="text-white font-medium text-sm tracking-wide hover:text-green-300 transition-all duration-300 py-2 relative">
                            Kontak
                            <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-gradient-to-r from-green-400 to-emerald-300 transform -translate-x-1/2 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#psb" class="bg-gradient-to-r from-green-400 to-emerald-500 text-white px-6 py-2.5 rounded-full font-medium text-sm hover:shadow-lg hover:scale-105 hover:from-green-500 hover:to-emerald-600 transition-all duration-300 transform">
                            PSB
                        </a>
                    </li>
                </ul>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="lg:hidden text-white p-2 rounded-lg hover:bg-white/10 transition-colors duration-200">
                    <svg class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden transform transition-all duration-300">
            <div class="bg-green-800/95 backdrop-blur-xl border-t border-white/10">
                <div class="px-6 py-4 space-y-3">
                    <a href="/" class="block text-white hover:text-green-300 py-2 transition-colors duration-200 hover:translate-x-2">Home</a>
                    <div class="space-y-2">
                        <span class="block text-green-300 font-medium py-2 border-b border-green-600/30">Tentang Kami</span>
                        <a href="#tentang" class="block text-white hover:text-green-300 py-1 pl-4 transition-all duration-200 hover:translate-x-2">Tentang Kami</a>
                        <a href="#visi-misi" class="block text-white hover:text-green-300 py-1 pl-4 transition-all duration-200 hover:translate-x-2">Visi Misi</a>
                        <a href="#organisasi" class="block text-white hover:text-green-300 py-1 pl-4 transition-all duration-200 hover:translate-x-2">Organisasi</a>
                        <a href="#sejarah" class="block text-white hover:text-green-300 py-1 pl-4 transition-all duration-200 hover:translate-x-2">Sejarah</a>
                        <a href="#berita" class="block text-white hover:text-green-300 py-1 pl-4 transition-all duration-200 hover:translate-x-2">Berita</a>
                    </div>
                    <a href="#program" class="block text-white hover:text-green-300 py-2 transition-all duration-200 hover:translate-x-2">Program</a>
                    <a href="#alumni" class="block text-white hover:text-green-300 py-2 transition-all duration-200 hover:translate-x-2">Alumni</a>
                    <a href="#psb" class="block bg-gradient-to-r from-green-400 to-emerald-500 text-white px-4 py-2 rounded-lg font-medium text-center transition-all duration-200 hover:scale-105">PSB</a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        // Dropdown functionality
        const dropdownButton = document.getElementById('dropdown-button');
        const dropdownMenu = document.getElementById('dropdown-menu');
        const dropdownParent = document.getElementById('dropdown-parent');

        dropdownButton?.addEventListener('click', (e) => {
            e.preventDefault();
            const isHidden = dropdownMenu?.classList.contains('hidden');
            
            if (isHidden) {
                dropdownMenu?.classList.remove('hidden', 'opacity-0', 'scale-95');
                dropdownMenu?.classList.add('opacity-100', 'scale-100');
            } else {
                dropdownMenu?.classList.add('opacity-0', 'scale-95');
                setTimeout(() => {
                    dropdownMenu?.classList.add('hidden');
                }, 300);
            }
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!dropdownParent?.contains(e.target)) {
                dropdownMenu?.classList.add('opacity-0', 'scale-95');
                setTimeout(() => {
                    dropdownMenu?.classList.add('hidden');
                }, 300);
            }
        });

        // Enhanced scroll effect
        let lastScrollY = window.scrollY;
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;
            
            if (currentScrollY > 50) {
                navbar.className = navbar.className.replace('bg-transparent', 'bg-green-700/95 backdrop-blur-xl shadow-2xl');
            } else {
                navbar.className = navbar.className.replace('bg-green-700/95 backdrop-blur-xl shadow-2xl', 'bg-transparent');
            }
            
            // Auto-hide navbar on scroll down
            if (currentScrollY > lastScrollY && currentScrollY > 100) {
                navbar.style.transform = 'translateY(-100%)';
            } else {
                navbar.style.transform = 'translateY(0)';
            }
            
            lastScrollY = currentScrollY;
        });

        // Mobile menu functionality
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuIcon = mobileMenuButton?.querySelector('svg');

        mobileMenuButton?.addEventListener('click', () => {
            const isHidden = mobileMenu?.classList.contains('hidden');
            
            if (isHidden) {
                mobileMenu?.classList.remove('hidden');
                mobileMenuIcon?.classList.add('rotate-90');
            } else {
                mobileMenu?.classList.add('hidden');
                mobileMenuIcon?.classList.remove('rotate-90');
            }
        });

        // Close mobile menu when clicking on links
        mobileMenu?.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu?.classList.add('hidden');
                mobileMenuIcon?.classList.remove('rotate-90');
            });
        });
    </script>
</body>
</html>