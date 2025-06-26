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
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-float-delayed {
            animation: float 6s ease-in-out infinite;
            animation-delay: 2s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .bg-pattern {
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(99, 102, 241, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(168, 85, 247, 0.1) 0%, transparent 50%);
        }
        
        .glass-morphism {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }
    </style>
    
    @stack('styles')
</head>
<body class="font-sans antialiased bg-pattern min-h-screen">
    <!-- Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-32 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full opacity-20 animate-float"></div>
        <div class="absolute top-32 right-20 w-20 h-20 bg-gradient-to-r from-pink-400 to-red-500 rounded-full opacity-20 animate-float-delayed"></div>
        <div class="absolute bottom-20 left-20 w-24 h-24 bg-gradient-to-r from-green-400 to-blue-500 rounded-full opacity-20 animate-float"></div>
        <div class="absolute bottom-32 right-10 w-16 h-16 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full opacity-20 animate-float-delayed"></div>
    </div>

    <div class="relative min-h-screen flex flex-col">
        <!-- Enhanced Header -->
        <header class="glass-morphism shadow-lg border-b border-white/20 relative z-10">
            <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center">
                    <a href="{{ url('/') }}" class="flex items-center space-x-3 group">
                        <div class="relative">
                            <div class="w-10 h-10 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-200">
                                <i class="fas fa-utensils text-white text-lg"></i>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl blur opacity-30 group-hover:opacity-50 transition-opacity duration-200"></div>
                        </div>
                        <span class="text-xl font-bold bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent">
                            {{ config('app.name', 'MyApp') }}
                        </span>
                    </a>
                    
                    <nav class="hidden md:flex space-x-1">
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" 
                               class="flex items-center px-4 py-2 rounded-xl text-sm font-medium text-gray-700 hover:text-indigo-600 hover:bg-white/50 transition-all duration-200 group">
                                <i class="fas fa-sign-in-alt mr-2 group-hover:scale-110 transition-transform duration-200"></i>
                                Login
                            </a>
                        @endif
                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                               class="flex items-center px-4 py-2 rounded-xl text-sm font-medium bg-gradient-to-r from-indigo-600 to-purple-600 text-white hover:from-indigo-700 hover:to-purple-700 shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200">
                                <i class="fas fa-user-plus mr-2"></i>
                                Register
                            </a>
                        @endif
                    </nav>
                    
                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button type="button" class="p-2 rounded-xl text-gray-700 hover:text-indigo-600 hover:bg-white/50 transition-all duration-200" onclick="toggleMobileMenu()">
                            <i class="fas fa-bars text-lg"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Mobile Navigation -->
                <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4 border-t border-white/20 pt-4">
                    <div class="flex flex-col space-y-2">
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" 
                               class="flex items-center px-4 py-3 rounded-xl text-sm font-medium text-gray-700 hover:text-indigo-600 hover:bg-white/50 transition-all duration-200">
                                <i class="fas fa-sign-in-alt mr-3"></i>
                                Login
                            </a>
                        @endif
                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                               class="flex items-center px-4 py-3 rounded-xl text-sm font-medium bg-gradient-to-r from-indigo-600 to-purple-600 text-white hover:from-indigo-700 hover:to-purple-700 transition-all duration-200">
                                <i class="fas fa-user-plus mr-3"></i>
                                Register
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
        <footer class="glass-morphism border-t border-white/20 py-8 relative z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Company Info -->
                    <div class="text-center md:text-left">
                        <div class="flex items-center justify-center md:justify-start space-x-3 mb-4">
                            <div class="w-8 h-8 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg flex items-center justify-center">
                                <i class="fas fa-utensils text-white text-sm"></i>
                            </div>
                            <span class="font-bold text-gray-900">{{ config('app.name', 'MyApp') }}</span>
                        </div>
                        <p class="text-sm text-gray-600">
                            Platform terpercaya untuk pengalaman terbaik Anda.
                        </p>
                    </div>
                    
                    <!-- Quick Links -->
                    <div class="text-center">
                        <h3 class="font-semibold text-gray-900 mb-4">Tautan Cepat</h3>
                        <div class="space-y-2">
                            <a href="#" class="block text-sm text-gray-600 hover:text-indigo-600 transition-colors duration-200">Tentang Kami</a>
                            <a href="#" class="block text-sm text-gray-600 hover:text-indigo-600 transition-colors duration-200">Layanan</a>
                            <a href="#" class="block text-sm text-gray-600 hover:text-indigo-600 transition-colors duration-200">Kontak</a>
                        </div>
                    </div>
                    
                    <!-- Legal -->
                    <div class="text-center md:text-right">
                        <h3 class="font-semibold text-gray-900 mb-4">Legal</h3>
                        <div class="space-y-2">
                            <a href="#" class="block text-sm text-gray-600 hover:text-indigo-600 transition-colors duration-200">Syarat & Ketentuan</a>
                            <a href="#" class="block text-sm text-gray-600 hover:text-indigo-600 transition-colors duration-200">Kebijakan Privasi</a>
                            <a href="#" class="block text-sm text-gray-600 hover:text-indigo-600 transition-colors duration-200">FAQ</a>
                        </div>
                    </div>
                </div>
                
                <!-- Bottom Footer -->
                <div class="mt-8 pt-6 border-t border-white/20">
                    <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                        <p class="text-sm text-gray-600">
                            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Semua hak dilindungi undang-undang.
                        </p>
                        
                        <!-- Social Media -->
                        <div class="flex space-x-4">
                            <a href="#" class="w-8 h-8 bg-white/50 rounded-lg flex items-center justify-center text-gray-600 hover:text-indigo-600 hover:bg-white/80 transition-all duration-200 group">
                                <i class="fab fa-facebook group-hover:scale-110 transition-transform duration-200"></i>
                            </a>
                            <a href="#" class="w-8 h-8 bg-white/50 rounded-lg flex items-center justify-center text-gray-600 hover:text-indigo-600 hover:bg-white/80 transition-all duration-200 group">
                                <i class="fab fa-twitter group-hover:scale-110 transition-transform duration-200"></i>
                            </a>
                            <a href="#" class="w-8 h-8 bg-white/50 rounded-lg flex items-center justify-center text-gray-600 hover:text-indigo-600 hover:bg-white/80 transition-all duration-200 group">
                                <i class="fab fa-instagram group-hover:scale-110 transition-transform duration-200"></i>
                            </a>
                            <a href="#" class="w-8 h-8 bg-white/50 rounded-lg flex items-center justify-center text-gray-600 hover:text-indigo-600 hover:bg-white/80 transition-all duration-200 group">
                                <i class="fab fa-linkedin group-hover:scale-110 transition-transform duration-200"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
        }
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuButton = event.target.closest('button');
            
            if (!menuButton && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
        
        // Smooth scroll for anchor links
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