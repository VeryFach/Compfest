
<x-layout title="Home - SEA Catering">
    <style>
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

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .float {
            animation: float 3s ease-in-out infinite;
        }

        .pulse {
            animation: pulse 2s ease-in-out infinite;
        }

        .slide-in-left {
            animation: slideInLeft 0.8s ease-out forwards;
        }

        .slide-in-right {
            animation: slideInRight 0.8s ease-out forwards;
        }

        .hover-lift {
            transition: all 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .gradient-text {
            background: linear-gradient(135deg, #10b981, #059669);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .interactive-card {
            position: relative;
            overflow: hidden;
        }

        .interactive-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .interactive-card:hover::before {
            left: 100%;
        }

        .stats-counter {
            font-size: 2.5rem;
            font-weight: bold;
            color: #10b981;
        }

        .typing-animation {
            overflow: hidden;
            border-right: 2px solid #10b981;
            white-space: nowrap;
            animation: typing 3s steps(40, end), blink-caret 0.75s step-end infinite;
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes blink-caret {
            from, to { border-color: transparent; }
            50% { border-color: #10b981; }
        }

        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-section bg-gradient-to-br from-green-600 via-emerald-500 to-teal-600 text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="absolute top-10 right-10 w-20 h-20 bg-white opacity-10 rounded-full float"></div>
        <div class="absolute bottom-10 left-10 w-16 h-16 bg-white opacity-10 rounded-full float" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/4 w-12 h-12 bg-white opacity-10 rounded-full float" style="animation-delay: 2s;"></div>
        
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-6xl font-bold mb-4 fade-in-up">SEA Catering</h1>
            <p class="text-2xl mb-8 font-light typing-animation">Healthy Food, Anytime, Anywhere</p>
            <div class="max-w-3xl mx-auto fade-in-up" style="animation-delay: 0.5s;">
                <p class="text-lg leading-relaxed">
                    Welcome to SEA Catering, the leading healthy food service that delivers 
                    high-quality nutritional solutions right to your door. We're committed to 
                    providing nutritious meals that can be customized to your needs and preferences, 
                    with delivery coverage across Indonesia.
                </p>
            </div>
            <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center fade-in-up" style="animation-delay: 1s;">
                <a href="{{ route('menu') }}" class="bg-white text-green-600 hover:bg-gray-100 font-semibold py-3 px-8 rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    <i class="fas fa-utensils mr-2"></i>View Menu
                </a>
                <a href="{{ route('subscribe') }}" class="glass-effect text-white hover:bg-white hover:text-green-600 font-semibold py-3 px-8 rounded-lg transition-all duration-300 hover:scale-105">
                    <i class="fas fa-calendar-check mr-2"></i>Subscribe Now
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div class="hover-lift">
                    <div class="stats-counter" data-target="10000">0</div>
                    <p class="text-gray-600 font-semibold">Happy Customers</p>
                </div>
                <div class="hover-lift">
                    <div class="stats-counter" data-target="50">0</div>
                    <p class="text-gray-600 font-semibold">Cities Covered</p>
                </div>
                <div class="hover-lift">
                    <div class="stats-counter" data-target="1000">0</div>
                    <p class="text-gray-600 font-semibold">Daily Meals</p>
                </div>
                <div class="hover-lift">
                    <div class="stats-counter" data-target="99">0</div>
                    <p class="text-gray-600 font-semibold">Satisfaction Rate (%)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold gradient-text mb-8 fade-in-up">About SEA Catering</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-8 fade-in-up" style="animation-delay: 0.2s;">
                    SEA Catering was born from a vision to make healthy food more accessible to everyone. 
                    What started as a small business has now grown into a national sensation serving 
                    thousands of customers across Indonesia. We understand that everyone has different nutritional needs, 
                    which is why we offer fully customizable meal packages.
                </p>
                <div class="grid md:grid-cols-3 gap-8 mt-12">
                    <div class="text-center interactive-card bg-white p-6 rounded-lg shadow-md hover-lift slide-in-left">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 pulse">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Made with Love</h3>
                        <p class="text-gray-600">Every dish is prepared with attention to detail using high-quality fresh ingredients.</p>
                    </div>
                    <div class="text-center interactive-card bg-white p-6 rounded-lg shadow-md hover-lift fade-in-up" style="animation-delay: 0.2s;">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 pulse" style="animation-delay: 0.5s;">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Fast Delivery</h3>
                        <p class="text-gray-600">Reliable logistics system ensuring food arrives fresh and on time.</p>
                    </div>
                    <div class="text-center interactive-card bg-white p-6 rounded-lg shadow-md hover-lift slide-in-right">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 pulse" style="animation-delay: 1s;">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Quality Guarantee</h3>
                        <p class="text-gray-600">Highest food safety standards and strict quality control at every production stage.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Packages Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center gradient-text mb-12 fade-in-up">Popular Packages</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover-lift interactive-card transform transition-all duration-300">
                    <div class="h-48 bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center">
                        <div class="text-white text-6xl">🥗</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-2">Economic Package</h3>
                        <p class="text-gray-600 mb-4">Nutritious meals at affordable prices for daily needs.</p>
                        <p class="text-xl font-bold text-green-600">$8 <span class="text-sm font-normal text-gray-500">/day</span></p>
                        <button class="mt-4 w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg transition-all duration-300 hover:scale-105" onclick="showPackageDetails('economic')">
                            View Details
                        </button>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover-lift interactive-card transform transition-all duration-300 scale-105 border-2 border-green-500">
                    <div class="bg-green-500 text-white text-center py-2 text-sm font-semibold">MOST POPULAR</div>
                    <div class="h-48 bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center">
                        <div class="text-white text-6xl">🍱</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-2">Premium Package</h3>
                        <p class="text-gray-600 mb-4">Premium menu with complete variety and satisfying portions.</p>
                        <p class="text-xl font-bold text-green-600">$15 <span class="text-sm font-normal text-gray-500">/day</span></p>
                        <button class="mt-4 w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg transition-all duration-300 hover:scale-105" onclick="showPackageDetails('premium')">
                            View Details
                        </button>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover-lift interactive-card transform transition-all duration-300">
                    <div class="h-48 bg-gradient-to-br from-lime-400 to-green-500 flex items-center justify-center">
                        <div class="text-white text-6xl">🥬</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-2">Vegetarian Package</h3>
                        <p class="text-gray-600 mb-4">Perfect for those who love vegetable dishes and healthy food.</p>
                        <p class="text-xl font-bold text-green-600">$12 <span class="text-sm font-normal text-gray-500">/day</span></p>
                        <button class="mt-4 w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg transition-all duration-300 hover:scale-105" onclick="showPackageDetails('vegetarian')">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gradient-to-br from-gray-50 to-green-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-bold text-center gradient-text mb-12 fade-in-up">Premium Features & Services</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature cards with enhanced interactivity -->
                    <div class="bg-white rounded-lg shadow-md p-6 hover-lift interactive-card">
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-br from-green-500 to-emerald-600 text-white p-3 rounded-full mr-4 pulse">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Food Customization</h3>
                        </div>
                        <p class="text-gray-600">Customize your menu based on dietary preferences, allergies, and health goals. Choose from various protein, carbohydrate, and vegetable options.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 hover-lift interactive-card">
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-br from-green-500 to-emerald-600 text-white p-3 rounded-full mr-4 pulse">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">National Delivery</h3>
                        </div>
                        <p class="text-gray-600">Serving delivery to all major cities in Indonesia with cold chain system ensuring food freshness until it reaches you.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 hover-lift interactive-card">
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-br from-green-500 to-emerald-600 text-white p-3 rounded-full mr-4 pulse">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Complete Nutrition Info</h3>
                        </div>
                        <p class="text-gray-600">Get detailed nutrition information for every dish, including calories, protein, carbohydrates, fats, and vitamins contained.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 hover-lift interactive-card">
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-br from-green-500 to-emerald-600 text-white p-3 rounded-full mr-4 pulse">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Schedule Flexibility</h3>
                        </div>
                        <p class="text-gray-600">Choose delivery schedule that fits your routine. Available daily, weekly, or monthly options with easy subscription system.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 hover-lift interactive-card">
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-br from-green-500 to-emerald-600 text-white p-3 rounded-full mr-4 pulse">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Nutrition Consultation</h3>
                        </div>
                        <p class="text-gray-600">Our nutrition expert team is ready to help you plan menus that suit your health needs and diet goals.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 hover-lift interactive-card">
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-br from-green-500 to-emerald-600 text-white p-3 rounded-full mr-4 pulse">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Guaranteed Food Safety</h3>
                        </div>
                        <p class="text-gray-600">All products are produced in HACCP and ISO 22000 standard facilities, with halal certification and strict quality control processes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center gradient-text mb-12 fade-in-up">What Our Customers Say</h2>
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg shadow-md hover-lift interactive-card">
                        <div class="flex mb-4 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-600 mb-4">"The food is always delicious and fresh! Delivery is always on time. Been subscribing for 6 months and very satisfied."</p>
                        <div class="font-semibold text-gray-800">Sarah Wilson</div>
                        <div class="text-sm text-green-600">Premium Customer</div>
                    </div>
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg shadow-md hover-lift interactive-card">
                        <div class="flex mb-4 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-600 mb-4">"SEA Catering's vegetarian package is very diverse and delicious. Perfect for me who is on a healthy diet."</p>
                        <div class="font-semibold text-gray-800">Ahmed Thompson</div>
                        <div class="text-sm text-green-600">Vegetarian Customer</div>
                    </div>
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg shadow-md hover-lift interactive-card">
                        <div class="flex mb-4 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="text-gray-600 mb-4">"Affordable price with good quality. Customer service team is also very responsive and friendly."</p>
                        <div class="font-semibold text-gray-800">Lisa Chen</div>
                        <div class="text-sm text-green-600">Economic Customer</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-gradient-to-br from-gray-50 to-green-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold gradient-text mb-8 fade-in-up">Contact Us</h2>
                <p class="text-lg text-gray-600 mb-12 fade-in-up" style="animation-delay: 0.2s;">
                    Have questions or want to consult about the right menu for you? 
                    Our team is ready to help you 24/7.
                </p>
                
                <div class="bg-white rounded-lg p-8 inline-block shadow-lg hover-lift">
                    <div class="flex flex-col sm:flex-row items-center justify-center space-y-8 sm:space-y-0 sm:space-x-8">
                        <div class="text-center">
                            <div class="bg-gradient-to-br from-green-500 to-emerald-600 text-white p-4 rounded-full mb-4 mx-auto w-16 h-16 flex items-center justify-center pulse">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Phone</h3>
                            <p class="text-gray-600 text-lg">+62 812-3456-789</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-12">
                    <button onclick="startSubscription()" class="bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white font-semibold py-4 px-8 rounded-lg inline-block transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <i class="fas fa-rocket mr-2"></i>Start Subscription Now
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="bg-gradient-to-br from-green-600 via-emerald-500 to-teal-600 text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="absolute top-10 right-10 w-32 h-32 bg-white opacity-5 rounded-full float"></div>
        <div class="absolute bottom-20 left-20 w-24 h-24 bg-white opacity-5 rounded-full float" style="animation-delay: 1s;"></div>
        
        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 fade-in-up">Ready to Start Your Healthy Life Journey?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto fade-in-up" style="animation-delay: 0.2s;">
                Join thousands of customers who have experienced the benefits of healthy food from SEA Catering. 
                The best investment is for your health.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in-up" style="animation-delay: 0.4s;">
                <button onclick="viewMenu()" class="bg-white text-green-600 hover:bg-gray-100 font-semibold py-3 px-8 rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    <i class="fas fa-utensils mr-2"></i>View Menu
                </button>
                <button onclick="startSubscription()" class="glass-effect text-white hover:bg-white hover:text-green-600 font-semibold py-3 px-8 rounded-lg transition-all duration-300 hover:scale-105">
                    <i class="fas fa-calendar-check mr-2"></i>Subscribe Now
                </button>
            </div>
        </div>
    </section>

    <!-- Package Details Modal -->
    <div id="packageModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg p-8 max-w-md mx-4 transform scale-95 transition-all duration-300" id="modalContent">
            <div class="text-center">
                <h3 class="text-2xl font-bold mb-4" id="packageTitle">Package Details</h3>
                <div class="text-6xl mb-4" id="packageEmoji">🥗</div>
                <p class="text-gray-600 mb-6" id="packageDescription">Package description here...</p>
                <div class="text-2xl font-bold text-green-600 mb-6" id="packagePrice">$8/day</div>
                <div class="flex gap-4">
                    <button onclick="closeModal()" class="flex-1 bg-gray-300 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-400 transition-colors">
                        Close
                    </button>
                    <button onclick="subscribeToPackage()" class="flex-1 bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Animation observers
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

        // Observe all fade-in elements
        document.querySelectorAll('.fade-in-up, .slide-in-left, .slide-in-right').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            observer.observe(el);
        });

        // Stats counter animation
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current).toLocaleString();
            }, 20);
        }

        // Initialize counters when visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = parseInt(entry.target.dataset.target);
                    animateCounter(entry.target, target);
                    statsObserver.unobserve(entry.target);
                }
            });
        });

        document.querySelectorAll('.stats-counter').forEach(counter => {
            statsObserver.observe(counter);
        });

        // Package details
        const packageDetails = {
            economic: {
                title: 'Economic Package',
                emoji: '🥗',
                description: 'Perfect for budget-conscious individuals who want nutritious meals without breaking the bank. Includes balanced portions with essential nutrients.',
                price: '$8/day'
            },
            premium: {
                title: 'Premium Package',
                emoji: '🍱',
                description: 'Our most popular choice! Premium ingredients, larger portions, and greater variety. Perfect for those who want the full healthy dining experience.',
                price: '$15/day'
            },
            vegetarian: {
                title: 'Vegetarian Package',
                emoji: '🥬',
                description: 'Specially crafted for vegetarian lifestyles. Fresh vegetables, plant-based proteins, and creative recipes that never compromise on taste.',
                price: '$12/day'
            }
        };

        function showPackageDetails(packageType) {
            const details = packageDetails[packageType];
            document.getElementById('packageTitle').textContent = details.title;
            document.getElementById('packageEmoji').textContent = details.emoji;
            document.getElementById('packageDescription').textContent = details.description;
            document.getElementById('packagePrice').textContent = details.price;
            
            const modal = document.getElementById('packageModal');
            const modalContent = document.getElementById('modalContent');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            
            setTimeout(() => {
                modalContent.style.transform = 'scale(1)';
            }, 10);
        }

        function closeModal() {
            const modal = document.getElementById('packageModal');
            const modalContent = document.getElementById('modalContent');
            modalContent.style.transform = 'scale(0.95)';
            
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 300);
        }

        // Close modal when clicking outside
        document.getElementById('packageModal').addEventListener('click', (e) => {
            if (e.target.id === 'packageModal') {
                closeModal();
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

        // Add some interactive hover effects
        document.querySelectorAll('.interactive-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-5px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Parallax effect for floating elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            
            document.querySelectorAll('.float').forEach((element, index) => {
                element.style.transform = `translateY(${rate + (index * 20)}px)`;
            });
        });
    </script>
</x-layout>