<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SEA Catering - Healthy Meals Delivered')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Styles -->
    <style>
        .navbar-shadow { box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
        .navbar-blur { backdrop-filter: blur(10px); background: rgba(255,255,255,0.95);}
        .hover-underline { position: relative; overflow: hidden; }
        .hover-underline::before { 
            content: ''; 
            position: absolute; 
            width: 0; 
            height: 2px; 
            bottom: -2px; 
            left: 0; 
            background: linear-gradient(90deg, #10b981, #059669); 
            transition: width 0.3s ease;
        }
        .hover-underline:hover::before { width: 100%; }
        .logo-gradient { 
            background: linear-gradient(135deg, #10b981, #059669, #047857); 
            box-shadow: 0 4px 15px rgba(16,185,129,0.3);
        }
        .btn-gradient { 
            background: linear-gradient(135deg, #10b981, #059669); 
            box-shadow: 0 4px 15px rgba(16,185,129,0.3); 
            transition: all 0.3s ease;
        }
        .btn-gradient:hover { 
            transform: translateY(-2px); 
            box-shadow: 0 8px 25px rgba(16,185,129,0.4);
        }
        .mobile-menu-slide { 
            transform: translateY(-100%); 
            transition: transform 0.3s ease;
        }
        .mobile-menu-slide.active { transform: translateY(0); }
        .footer-gradient { 
            background: linear-gradient(135deg, #1f2937, #111827, #0f172a);
        }
        .footer-card { 
            background: rgba(255,255,255,0.05); 
            backdrop-filter: blur(10px); 
            border: 1px solid rgba(255,255,255,0.1); 
            border-radius: 16px; 
            padding: 24px; 
            transition: all 0.3s ease;
        }
        .footer-card:hover { 
            background: rgba(255,255,255,0.08); 
            transform: translateY(-2px);
        }
        .social-icon { 
            background: rgba(255,255,255,0.1); 
            border: 1px solid rgba(255,255,255,0.2); 
            transition: all 0.3s ease;
        }
        .social-icon:hover { 
            background: linear-gradient(135deg, #10b981, #059669); 
            transform: translateY(-2px); 
            box-shadow: 0 8px 25px rgba(16,185,129,0.3);
        }
        .wave-animation { 
            background: linear-gradient(45deg, #10b981, #059669, #047857, #10b981); 
            background-size: 400% 400%; 
            animation: wave 3s ease-in-out infinite;
        }
        @keyframes wave { 
            0%,100%{background-position:0% 50%;} 
            50%{background-position:100% 50%;}
        }
        .notification-badge { animation: pulse 2s infinite;}
        @keyframes pulse { 
            0%,100%{opacity:1;} 
            50%{opacity:0.7;} 
        }
        
        /* Guest-specific styles */
        .guest-hero { 
            background: linear-gradient(135deg, #f0fdf4, #ecfdf5, #d1fae5);
            min-height: 80vh;
        }
        .guest-card { 
            background: rgba(255,255,255,0.9); 
            backdrop-filter: blur(10px); 
            border: 1px solid rgba(255,255,255,0.2); 
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .guest-card:hover { 
            transform: translateY(-5px); 
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .feature-icon { 
            background: linear-gradient(135deg, #10b981, #059669);
            box-shadow: 0 4px 15px rgba(16,185,129,0.3);
        }
        .cta-button { 
            background: linear-gradient(135deg, #10b981, #059669);
            box-shadow: 0 4px 15px rgba(16,185,129,0.3);
            transition: all 0.3s ease;
        }
        .cta-button:hover { 
            transform: translateY(-2px); 
            box-shadow: 0 8px 25px rgba(16,185,129,0.4);
        }
    </style>
    
    @stack('styles')
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="navbar-blur navbar-shadow sticky top-0 z-50 transition-all duration-300 bg-white bg-opacity-90">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                        <div class="w-12 h-12 logo-gradient rounded-2xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300">
                            <span class="text-white font-bold text-lg">SC</span>
                        </div>
                        <div class="hidden sm:flex flex-col">
                            <span class="text-2xl font-bold text-gray-800 group-hover:text-emerald-600 transition-colors">SEA Catering</span>
                            <span class="text-xs text-gray-500 font-medium">Healthy & Fresh</span>
                        </div>
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex flex-1 justify-center mx-6">
                    <div class="flex space-x-6 lg:space-x-8">
                        <a href="{{ route('meal-plans') }}" class="px-1 py-2 text-gray-700 hover:text-emerald-600 font-medium hover-underline transition-colors">Meal Plans</a>
                        <a href="{{ route('about') }}" class="px-1 py-2 text-gray-700 hover:text-emerald-600 font-medium hover-underline transition-colors">About Us</a>
                        <a href="{{ route('menu') }}" class="px-1 py-2 text-gray-700 hover:text-emerald-600 font-medium hover-underline transition-colors">Our Menus</a>
                        <a href="{{ route('nutrition') }}" class="px-1 py-2 text-gray-700 hover:text-emerald-600 font-medium hover-underline transition-colors">Nutrition Info</a>
                        <a href="{{ route('delivery-area') }}" class="px-1 py-2 text-gray-700 hover:text-emerald-600 font-medium hover-underline transition-colors">Delivery Areas</a>
                    </div>
                </div>
                
                <!-- Auth Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="px-4 py-2 text-gray-700 hover:text-emerald-600 font-medium transition-colors border border-gray-300 rounded-full hover:border-emerald-500">Log in</a>
                    <a href="{{ route('register') }}" class="cta-button text-white px-6 py-2.5 rounded-full font-medium transition-all shadow-sm">Sign Up</a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-emerald-600 focus:outline-none">
                        <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden mobile-menu-slide">
            <div class="px-4 pt-2 pb-4 space-y-1 bg-white shadow-lg">
                <a href="{{ route('meal-plans') }}" class="block px-3 py-3 rounded-md text-base font-medium text-gray-700 hover:text-emerald-600 hover:bg-gray-50">Meal Plans</a>
                <a href="{{ route('about') }}" class="block px-3 py-3 rounded-md text-base font-medium text-gray-700 hover:text-emerald-600 hover:bg-gray-50">About Us</a>
                <a href="{{ route('menu') }}" class="block px-3 py-3 rounded-md text-base font-medium text-gray-700 hover:text-emerald-600 hover:bg-gray-50">Our Menus</a>
                <a href="{{ route('nutrition') }}" class="block px-3 py-3 rounded-md text-base font-medium text-gray-700 hover:text-emerald-600 hover:bg-gray-50">Nutrition Info</a>
                <a href="{{ route('delivery-area') }}" class="block px-3 py-3 rounded-md text-base font-medium text-gray-700 hover:text-emerald-600 hover:bg-gray-50">Delivery Areas</a>
                <div class="pt-4 border-t border-gray-200 space-y-2">
                    <a href="{{ route('login') }}" class="block px-3 py-3 rounded-md text-base font-medium text-gray-700 hover:text-emerald-600 hover:bg-gray-50 border border-gray-300">Log in</a>
                    <a href="{{ route('register') }}" class="block px-3 py-3 rounded-md text-base font-medium text-center text-white bg-emerald-500 hover:bg-emerald-600">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="footer-gradient text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="wave-animation h-full w-full"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="footer-card">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-12 h-12 logo-gradient rounded-2xl flex items-center justify-center">
                                <span class="text-white font-bold text-lg">SC</span>
                            </div>
                            <div>
                                <span class="text-2xl font-bold">SEA Catering</span>
                                <p class="text-sm text-gray-300">Healthy & Fresh</p>
                            </div>
                        </div>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            Menyediakan makanan sehat yang dapat disesuaikan dan dikirim ke seluruh Indonesia. 
                            Membuat makan sehat menjadi mudah diakses dan nyaman untuk semua orang.
                        </p>
                        <!-- Social Media -->
                        <div class="flex space-x-4">
                            <a href="#" class="social-icon w-12 h-12 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-icon w-12 h-12 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.083.347-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.017 0z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-icon w-12 h-12 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-icon w-12 h-12 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="footer-card">
                    <h3 class="text-lg font-semibold mb-6 text-emerald-400">Link Cepat</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('meal-plans') }}" class="text-gray-300 hover:text-emerald-400 transition-colors flex items-center space-x-2"><span>Meal Plans</span></a></li>
                        <li><a href="{{ route('menu') }}" class="text-gray-300 hover:text-emerald-400 transition-colors flex items-center space-x-2"><span>Menu</span></a></li>
                        <li><a href="{{ route('nutrition') }}" class="text-gray-300 hover:text-emerald-400 transition-colors flex items-center space-x-2"><span>Panduan Nutrisi</span></a></li>
                        <li><a href="{{ route('delivery-area') }}" class="text-gray-300 hover:text-emerald-400 transition-colors flex items-center space-x-2"><span>Area Pengiriman</span></a></li>
                    </ul>
                </div>
                
                <!-- Support -->
                <div class="footer-card">
                    <h3 class="text-lg font-semibold mb-6 text-emerald-400">Dukungan</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-emerald-400 transition-colors flex items-center space-x-2"><span>Pusat Bantuan</span></a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-emerald-400 transition-colors flex items-center space-x-2"><span>Hubungi Kami</span></a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-emerald-400 transition-colors flex items-center space-x-2"><span>FAQ</span></a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-emerald-400 transition-colors flex items-center space-x-2"><span>Kebijakan Privasi</span></a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-emerald-400 transition-colors flex items-center space-x-2"><span>Syarat Layanan</span></a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Bottom Section -->
            <div class="border-t border-gray-600 pt-8">
                <div class="flex flex-col lg:flex-row justify-between items-center space-y-4 lg:space-y-0">
                    <div class="text-center lg:text-left">
                        <p class="text-gray-400 text-sm">© 2024 SEA Catering. Semua hak dilindungi undang-undang.</p>
                        <p class="text-gray-500 text-xs mt-1">Dibuat dengan ❤️ untuk Indonesia</p>
                    </div>
                    <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-6 text-center">
                        <div class="flex items-center justify-center space-x-2 text-gray-400 text-sm">
                            <span>🇮🇩</span>
                            <span>Indonesia</span>
                        </div>
                        <div class="flex items-center justify-center space-x-2 text-gray-400 text-sm">
                            <span>+62-8135-9501-733</span>
                        </div>
                        <div class="flex items-center justify-center space-x-2 text-gray-400 text-sm">
                            <span>hello@seacatering.id</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Mobile Menu Script -->
    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-shadow');
            } else {
                navbar.classList.remove('navbar-shadow');
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>