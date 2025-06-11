<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SEA Catering - Healthy Meals Delivered' }}</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Styles -->
    <style>
        .navbar-shadow {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .hover-underline {
            position: relative;
        }
        
        .hover-underline::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background-color: #10b981;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .hover-underline:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white navbar-shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-sm">SC</span>
                        </div>
                        <span class="text-xl font-bold text-gray-800">SEA Catering</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/meal-plans" class="text-gray-700 hover:text-emerald-600 font-medium hover-underline transition-colors">
                        Meal Plans
                    </a>
                    <a href="/about" class="text-gray-700 hover:text-emerald-600 font-medium hover-underline transition-colors">
                        About Us
                    </a>
                    <a href="/menus" class="text-gray-700 hover:text-emerald-600 font-medium hover-underline transition-colors">
                        Our Menus
                    </a>
                    <a href="/nutrition" class="text-gray-700 hover:text-emerald-600 font-medium hover-underline transition-colors">
                        Nutrition Info
                    </a>
                    <a href="/delivery" class="text-gray-700 hover:text-emerald-600 font-medium hover-underline transition-colors">
                        Delivery Areas
                    </a>
                    <a href="/corporate" class="text-gray-700 hover:text-emerald-600 font-medium hover-underline transition-colors">
                        Corporate Orders
                    </a>
                </div>

                <!-- Auth Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/login" class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">
                        Log in
                    </a>
                    <a href="/register" class="bg-emerald-500 hover:bg-emerald-600 text-white px-4 py-2 rounded-full font-medium transition-colors">
                        Sign Up
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-emerald-600 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-200">
            <div class="px-4 py-2 space-y-2">
                <a href="/meal-plans" class="block py-2 text-gray-700 hover:text-emerald-600 font-medium">Meal Plans</a>
                <a href="/about" class="block py-2 text-gray-700 hover:text-emerald-600 font-medium">About Us</a>
                <a href="/menus" class="block py-2 text-gray-700 hover:text-emerald-600 font-medium">Our Menus</a>
                <a href="/nutrition" class="block py-2 text-gray-700 hover:text-emerald-600 font-medium">Nutrition Info</a>
                <a href="/delivery" class="block py-2 text-gray-700 hover:text-emerald-600 font-medium">Delivery Areas</a>
                <a href="/corporate" class="block py-2 text-gray-700 hover:text-emerald-600 font-medium">Corporate Orders</a>
                <hr class="my-2">
                <a href="/login" class="block py-2 text-gray-700 hover:text-emerald-600 font-medium">Log in</a>
                <a href="/register" class="block py-2 bg-emerald-500 hover:bg-emerald-600 text-white px-4 rounded-full font-medium text-center">Sign Up</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-sm">SC</span>
                        </div>
                        <span class="text-xl font-bold">SEA Catering</span>
                    </div>
                    <p class="text-gray-300 mb-4 max-w-md">
                        Providing customizable healthy meals delivered across Indonesia. 
                        Making healthy eating accessible and convenient for everyone.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-emerald-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-emerald-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-emerald-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.083.347-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.017 0z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-emerald-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/meal-plans" class="text-gray-300 hover:text-emerald-400 transition-colors">Meal Plans</a></li>
                        <li><a href="/menus" class="text-gray-300 hover:text-emerald-400 transition-colors">Our Menus</a></li>
                        <li><a href="/nutrition" class="text-gray-300 hover:text-emerald-400 transition-colors">Nutrition Guide</a></li>
                        <li><a href="/delivery" class="text-gray-300 hover:text-emerald-400 transition-colors">Delivery Areas</a></li>
                        <li><a href="/corporate" class="text-gray-300 hover:text-emerald-400 transition-colors">Corporate Orders</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Support</h3>
                    <ul class="space-y-2">
                        <li><a href="/help" class="text-gray-300 hover:text-emerald-400 transition-colors">Help Center</a></li>
                        <li><a href="/contact" class="text-gray-300 hover:text-emerald-400 transition-colors">Contact Us</a></li>
                        <li><a href="/faq" class="text-gray-300 hover:text-emerald-400 transition-colors">FAQ</a></li>
                        <li><a href="/privacy" class="text-gray-300 hover:text-emerald-400 transition-colors">Privacy Policy</a></li>
                        <li><a href="/terms" class="text-gray-300 hover:text-emerald-400 transition-colors">Terms of Service</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    © 2024 SEA Catering. All rights reserved.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <span class="text-gray-400 text-sm">🇮🇩 Indonesia</span>
                    <span class="text-gray-400 text-sm">📞 +62-XXX-XXXX-XXXX</span>
                    <span class="text-gray-400 text-sm">📧 hello@seacatering.id</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>