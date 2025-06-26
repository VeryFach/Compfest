<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Daftar akun baru dan nikmati layanan terbaik kami">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&family=poppins:300,400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Styles -->
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --dark-gradient: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            --glass-bg: rgba(255, 255, 255, 0.15);
            --glass-border: rgba(255, 255, 255, 0.2);
        }
        
        * {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow-x: hidden;
        }
        
        .font-display {
            font-family: 'Poppins', sans-serif;
        }
        
        /* Enhanced Animations */
        .animate-float {
            animation: float 8s ease-in-out infinite;
        }
        
        .animate-float-delayed {
            animation: float 8s ease-in-out infinite;
            animation-delay: 3s;
        }
        
        .animate-float-slow {
            animation: float 12s ease-in-out infinite;
            animation-delay: 1.5s;
        }
        
        .animate-pulse-glow {
            animation: pulseGlow 4s ease-in-out infinite;
        }
        
        .animate-rotate {
            animation: rotate 20s linear infinite;
        }
        
        @keyframes float {
            0%, 100% { 
                transform: translateY(0px) rotate(0deg); 
            }
            25% { 
                transform: translateY(-15px) rotate(2deg); 
            }
            50% { 
                transform: translateY(-30px) rotate(0deg); 
            }
            75% { 
                transform: translateY(-15px) rotate(-2deg); 
            }
        }
        
        @keyframes pulseGlow {
            0%, 100% { 
                opacity: 0.3;
                transform: scale(1);
            }
            50% { 
                opacity: 0.8;
                transform: scale(1.1);
            }
        }
        
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-slide-up {
            animation: slideInUp 0.8s ease-out;
        }
        
        /* Advanced Background */
        .bg-pattern {
            background: 
                linear-gradient(135deg, #667eea 0%, #764ba2 100%),
                radial-gradient(circle at 20% 50%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(120, 219, 255, 0.3) 0%, transparent 50%);
            background-attachment: fixed;
            position: relative;
        }
        
        .bg-pattern::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='7' cy='7' r='3'/%3E%3Ccircle cx='53' cy='7' r='3'/%3E%3Ccircle cx='7' cy='53' r='3'/%3E%3Ccircle cx='53' cy='53' r='3'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            pointer-events: none;
        }
        
        /* Enhanced Glass Morphism */
        .glass-morphism {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            box-shadow: 
                0 20px 25px -5px rgba(0, 0, 0, 0.1),
                0 10px 10px -5px rgba(0, 0, 0, 0.04),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 
                0 25px 45px -10px rgba(0, 0, 0, 0.25),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
        }
        
        /* Enhanced Buttons */
        .btn-primary {
            background: var(--primary-gradient);
            box-shadow: 
                0 10px 20px rgba(102, 126, 234, 0.4),
                0 6px 6px rgba(102, 126, 234, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 
                0 15px 30px rgba(102, 126, 234, 0.6),
                0 10px 10px rgba(102, 126, 234, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
        }
        
        .btn-secondary {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-1px);
            box-shadow: 0 10px 25px rgba(255, 255, 255, 0.2);
        }
        
        /* Logo Enhancement */
        .logo-container {
            position: relative;
        }
        
        .logo-glow {
            position: absolute;
            inset: -4px;
            background: var(--primary-gradient);
            border-radius: 16px;
            opacity: 0;
            filter: blur(8px);
            transition: opacity 0.3s ease;
        }
        
        .logo-container:hover .logo-glow {
            opacity: 0.6;
        }
        
        /* Navigation Enhancements */
        .nav-link {
            position: relative;
            overflow: hidden;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .nav-link:hover::before {
            left: 100%;
        }
        
        /* Footer Enhancements */
        .social-icon {
            position: relative;
            overflow: hidden;
        }
        
        .social-icon::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
            transition: all 0.3s ease;
            transform: translate(-50%, -50%);
        }
        
        .social-icon:hover::before {
            width: 100px;
            height: 100px;
        }
        
        /* Mobile Optimizations */
        @media (max-width: 768px) {
            .bg-pattern {
                background-attachment: scroll;
            }
        }
        
        /* Utility Classes */
        .text-gradient {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .text-shadow {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
        }
    </style>
    
    @stack('styles')
</head>
<body class="font-sans antialiased bg-pattern min-h-screen">
    <!-- Enhanced Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <!-- Large floating elements -->
        <div class="absolute top-10 left-10 w-40 h-40 bg-gradient-to-r from-blue-400/30 to-purple-500/30 rounded-full animate-float blur-sm"></div>
        <div class="absolute top-32 right-20 w-28 h-28 bg-gradient-to-r from-pink-400/30 to-red-500/30 rounded-full animate-float-delayed blur-sm"></div>
        <div class="absolute bottom-20 left-20 w-36 h-36 bg-gradient-to-r from-green-400/30 to-blue-500/30 rounded-full animate-float-slow blur-sm"></div>
        <div class="absolute bottom-32 right-10 w-24 h-24 bg-gradient-to-r from-yellow-400/30 to-orange-500/30 rounded-full animate-float-delayed blur-sm"></div>
        
        <!-- Additional decorative elements -->
        <div class="absolute top-1/4 left-1/3 w-2 h-2 bg-white/40 rounded-full animate-pulse-glow"></div>
        <div class="absolute top-1/2 right-1/4 w-1 h-1 bg-white/50 rounded-full animate-pulse-glow" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-1/3 left-1/4 w-1.5 h-1.5 bg-white/30 rounded-full animate-pulse-glow" style="animation-delay: 2s;"></div>
        
        <!-- Geometric shapes -->
        <div class="absolute top-20 right-1/3 w-12 h-12 border border-white/20 rounded-lg animate-rotate opacity-40"></div>
        <div class="absolute bottom-40 left-1/2 w-8 h-8 border border-white/30 rotate-45 animate-float opacity-50"></div>
    </div>

    <div class="relative min-h-screen flex flex-col animate-slide-up">
        <!-- Enhanced Header -->
        <header class="glass-morphism shadow-2xl border-b border-white/30 relative z-10 sticky top-0">
            <div class="max-w-7xl mx-auto px-4 py-5 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center">
                    <a href="{{ url('/') }}" class="flex items-center space-x-4 group">
                        <div class="logo-container">
                            <div class="logo-glow"></div>
                            <div class="relative w-12 h-12 bg-gradient-to-br from-indigo-500 via-purple-600 to-pink-500 rounded-2xl flex items-center justify-center transform group-hover:scale-110 transition-all duration-300 shadow-lg">
                                <i class="fas fa-utensils text-white text-xl"></i>
                                <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent rounded-2xl"></div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-2xl font-bold font-display text-white text-shadow">
                                {{ config('app.name', 'MyApp') }}
                            </span>
                            <span class="text-xs text-white/70 font-medium">Premium Experience</span>
                        </div>
                    </a>
                    
                    <nav class="hidden md:flex space-x-2">
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" 
                               class="nav-link btn-secondary flex items-center px-6 py-3 rounded-2xl text-sm font-semibold text-white hover:text-white transition-all duration-300 group">
                                <i class="fas fa-sign-in-alt mr-2 group-hover:scale-110 transition-transform duration-200"></i>
                                Login
                            </a>
                        @endif
                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                               class="btn-primary flex items-center px-6 py-3 rounded-2xl text-sm font-semibold text-white transition-all duration-300 group">
                                <i class="fas fa-user-plus mr-2 group-hover:scale-110 transition-transform duration-200"></i>
                                Register Now
                            </a>
                        @endif
                    </nav>
                    
                    <!-- Enhanced Mobile menu button -->
                    <div class="md:hidden">
                        <button type="button" class="btn-secondary p-3 rounded-2xl text-white transition-all duration-300" onclick="toggleMobileMenu()">
                            <i class="fas fa-bars text-lg"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Enhanced Mobile Navigation -->
                <div id="mobileMenu" class="hidden md:hidden mt-6 pb-4 border-t border-white/20 pt-6">
                    <div class="flex flex-col space-y-3">
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" 
                               class="btn-secondary flex items-center px-6 py-4 rounded-2xl text-sm font-semibold text-white transition-all duration-300">
                                <i class="fas fa-sign-in-alt mr-3"></i>
                                Login
                            </a>
                        @endif
                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                               class="btn-primary flex items-center px-6 py-4 rounded-2xl text-sm font-semibold text-white transition-all duration-300">
                                <i class="fas fa-user-plus mr-3"></i>
                                Register Now
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow relative z-10">
            @yield('content')
        </main>

        <!-- Enhanced Footer -->
        <footer class="glass-card border-t border-white/30 py-12 relative z-10 mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                    <!-- Enhanced Company Info -->
                    <div class="md:col-span-2 text-center md:text-left">
                        <div class="flex items-center justify-center md:justify-start space-x-4 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 via-purple-600 to-pink-500 rounded-2xl flex items-center justify-center shadow-lg">
                                <i class="fas fa-utensils text-white text-lg"></i>
                            </div>
                            <div>
                                <span class="font-bold text-xl text-white font-display">{{ config('app.name', 'MyApp') }}</span>
                                <p class="text-sm text-white/70">Premium Experience</p>
                            </div>
                        </div>
                        <p class="text-white/80 text-lg leading-relaxed max-w-md mx-auto md:mx-0">
                            Platform terpercaya untuk pengalaman digital terbaik Anda. Bergabunglah dengan ribuan pengguna yang telah merasakan keunggulan layanan kami.
                        </p>
                        <div class="flex justify-center md:justify-start space-x-4 mt-6">
                            <div class="flex items-center space-x-2 text-white/70">
                                <i class="fas fa-users text-indigo-400"></i>
                                <span class="text-sm">10K+ Users</span>
                            </div>
                            <div class="flex items-center space-x-2 text-white/70">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm">4.9 Rating</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quick Links -->
                    <div class="text-center md:text-left">
                        <h3 class="font-bold text-white mb-6 text-lg font-display">Tautan Cepat</h3>
                        <div class="space-y-3">
                            <a href="#" class="block text-white/70 hover:text-white transition-colors duration-300 hover:translate-x-2 transform">
                                <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400"></i>Tentang Kami
                            </a>
                            <a href="#" class="block text-white/70 hover:text-white transition-colors duration-300 hover:translate-x-2 transform">
                                <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400"></i>Layanan
                            </a>
                            <a href="#" class="block text-white/70 hover:text-white transition-colors duration-300 hover:translate-x-2 transform">
                                <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400"></i>Kontak
                            </a>
                            <a href="#" class="block text-white/70 hover:text-white transition-colors duration-300 hover:translate-x-2 transform">
                                <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400"></i>Blog
                            </a>
                        </div>
                    </div>
                    
                    <!-- Legal & Support -->
                    <div class="text-center md:text-left">
                        <h3 class="font-bold text-white mb-6 text-lg font-display">Dukungan</h3>
                        <div class="space-y-3">
                            <a href="#" class="block text-white/70 hover:text-white transition-colors duration-300 hover:translate-x-2 transform">
                                <i class="fas fa-file-contract text-xs mr-2 text-indigo-400"></i>Syarat & Ketentuan
                            </a>
                            <a href="#" class="block text-white/70 hover:text-white transition-colors duration-300 hover:translate-x-2 transform">
                                <i class="fas fa-shield-alt text-xs mr-2 text-indigo-400"></i>Kebijakan Privasi
                            </a>
                            <a href="#" class="block text-white/70 hover:text-white transition-colors duration-300 hover:translate-x-2 transform">
                                <i class="fas fa-question-circle text-xs mr-2 text-indigo-400"></i>FAQ
                            </a>
                            <a href="#" class="block text-white/70 hover:text-white transition-colors duration-300 hover:translate-x-2 transform">
                                <i class="fas fa-headset text-xs mr-2 text-indigo-400"></i>Support 24/7
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Enhanced Bottom Footer -->
                <div class="pt-8 border-t border-white/20">
                    <div class="flex flex-col lg:flex-row justify-between items-center space-y-6 lg:space-y-0">
                        <div class="text-center lg:text-left">
                            <p class="text-white/70 mb-2">
                                &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Semua hak dilindungi undang-undang.
                            </p>
                            <p class="text-white/50 text-sm">
                                Dibuat dengan <i class="fas fa-heart text-red-400 mx-1"></i> untuk pengalaman terbaik Anda
                            </p>
                        </div>
                        
                        <!-- Enhanced Social Media -->
                        <div class="flex items-center space-x-4">
                            <span class="text-white/70 text-sm font-medium mr-2">Ikuti Kami:</span>
                            <a href="#" class="social-icon w-12 h-12 glass-morphism rounded-2xl flex items-center justify-center text-white/70 hover:text-white transition-all duration-300 hover-lift group">
                                <i class="fab fa-facebook-f group-hover:scale-110 transition-transform duration-200"></i>
                            </a>
                            <a href="#" class="social-icon w-12 h-12 glass-morphism rounded-2xl flex items-center justify-center text-white/70 hover:text-white transition-all duration-300 hover-lift group">
                                <i class="fab fa-twitter group-hover:scale-110 transition-transform duration-200"></i>
                            </a>
                            <a href="#" class="social-icon w-12 h-12 glass-morphism rounded-2xl flex items-center justify-center text-white/70 hover:text-white transition-all duration-300 hover-lift group">
                                <i class="fab fa-instagram group-hover:scale-110 transition-transform duration-200"></i>
                            </a>
                            <a href="#" class="social-icon w-12 h-12 glass-morphism rounded-2xl flex items-center justify-center text-white/70 hover:text-white transition-all duration-300 hover-lift group">
                                <i class="fab fa-linkedin-in group-hover:scale-110 transition-transform duration-200"></i>
                            </a>
                            <a href="#" class="social-icon w-12 h-12 glass-morphism rounded-2xl flex items-center justify-center text-white/70 hover:text-white transition-all duration-300 hover-lift group">
                                <i class="fab fa-youtube group-hover:scale-110 transition-transform duration-200"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Enhanced Scripts -->
    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
        }
        
        // Enhanced mobile menu handling
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuButton = event.target.closest('button');
            
            if (!menuButton && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
        
        // Smooth scroll with offset for fixed header
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerOffset = 100;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth"
                    });
                }
            });
        });
        
        // Add loading animation
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
        });
        
        // Enhanced scroll effects
        let lastScrollTop = 0;
        const header = document.querySelector('header');
        
        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Scrolling down
                header.style.transform = 'translateY(-100%)';
            } else {
                // Scrolling up
                header.style.transform = 'translateY(0)';
            }
            
            lastScrollTop = scrollTop;
        }, false);
        
        // Add parallax effect to background elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelectorAll('.animate-float, .animate-float-delayed, .animate-float-slow');
            const speed = 0.5;
            
            parallax.forEach(element => {
                const yPos = -(scrolled * speed);
                element.style.transform = `translateY(${yPos}px)`;
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>