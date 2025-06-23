<x-layout>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }
        
        .progress-animation {
            animation: progress-fill 2s ease-in-out;
        }
        
        @keyframes progress-fill {
            from { width: 0%; }
            to { width: 75%; }
        }
        
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .pulse-dot {
            animation: pulse-dot 2s infinite;
        }
        
        @keyframes pulse-dot {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.2); opacity: 0.7; }
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .shimmer {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }
        
        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
        
        .delivery-truck {
            animation: truck-move 4s ease-in-out infinite;
        }
        
        @keyframes truck-move {
            0%, 100% { transform: translateX(0); }
            50% { transform: translateX(20px); }
        }
    </style>
</head>
<body class="gradient-bg min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header with floating animation -->
        <div class="text-center mb-12 float-animation">
            <h1 class="text-5xl font-bold text-gray-800 mb-4 drop-shadow-lg">
                📦 Delivery Tracker
            </h1>
            <p class="text-xl text-gray-600">Track your packages in real-time</p>
        </div>
        
        <!-- Main Delivery Card -->
        <div class="glass-effect rounded-3xl p-8 mb-8 card-hover">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center space-x-4">
                    <div class="w-16 h-16 bg-gradient-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center delivery-truck">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8 5a1 1 0 100 2h5.586l-1.293 1.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L13.586 5H8zM12 15a1 1 0 100-2H6.414l1.293-1.293a1 1 0 10-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L6.414 15H12z"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Your Package Journey</h2>
                        <p class="text-gray-600">Track #TRK-847392</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-3 h-3 bg-green-400 rounded-full pulse-dot"></div>
                    <span class="px-4 py-2 bg-green-500 text-white rounded-full text-sm font-medium shadow-lg">
                        🚛 In Transit
                    </span>
                </div>
            </div>
            
            <!-- Enhanced Progress Tracking -->
            <div class="mb-8">
                <div class="flex justify-between mb-4">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mb-2 shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-800">Ordered</span>
                        <span class="text-xs text-gray-500">Jun 20</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mb-2 shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-800">Packed</span>
                        <span class="text-xs text-gray-500">Jun 21</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mb-2 shadow-lg pulse-dot">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                                <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1V8a1 1 0 00-1-1h-3z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-800">In Transit</span>
                        <span class="text-xs text-gray-500">Jun 22</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-gray-400 rounded-full flex items-center justify-center mb-2 shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-400">Delivered</span>
                        <span class="text-xs text-gray-300">Jun 25</span>
                    </div>
                </div>
                <div class="relative">
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-r from-green-400 to-blue-500 h-3 rounded-full progress-animation shadow-lg" style="width: 75%"></div>
                    </div>
                    <div class="absolute top-0 left-3/4 transform -translate-x-1/2 -translate-y-1">
                        <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center pulse-dot">
                            <div class="w-2 h-2 bg-white rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Delivery Details Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                <!-- Package Info -->
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h12a1 1 0 011 1v8a1 1 0 01-1 1H4a1 1 0 01-1-1V8z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg">Package Info</h3>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Items:</span>
                            <span class="text-gray-800 font-medium">3 products</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Weight:</span>
                            <span class="text-gray-800 font-medium">2.5 kg</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Dimensions:</span>
                            <span class="text-gray-800 font-medium">30×20×15 cm</span>
                        </div>
                    </div>
                </div>
                
                <!-- Shipping Info -->
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                                <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1V8a1 1 0 00-1-1h-3z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg">Shipping</h3>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Carrier:</span>
                            <span class="text-gray-800 font-medium">Fast Express</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Service:</span>
                            <span class="text-gray-800 font-medium">Next Day</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">ETA:</span>
                            <span class="text-gray-800 font-medium">June 25, 2025</span>
                        </div>
                    </div>
                </div>
                
                <!-- Address Info -->
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg">Destination</h3>
                    </div>
                    <div class="space-y-2">
                        <p class="text-gray-800 font-medium">123 Main Street</p>
                        <p class="text-gray-600">Cityville, 12345</p>
                        <p class="text-gray-600">United States</p>
                    </div>
                </div>
            </div>
            
            <!-- Interactive Map Placeholder -->
            <div class="bg-gray-50 rounded-2xl p-6 mb-8 border border-gray-200">
                <h3 class="font-semibold text-gray-800 text-lg mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                    Live Tracking
                </h3>
                <div class="bg-gradient-to-br from-blue-400 to-purple-500 rounded-xl h-64 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 shimmer opacity-20"></div>
                    <div class="text-center z-10">
                        <div class="w-16 h-16 bg-white/30 rounded-full flex items-center justify-center mx-auto mb-4 pulse-dot">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-white font-medium text-lg">📍 Currently in Transit</p>
                        <p class="text-white/80">Last updated: 2 hours ago</p>
                    </div>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4">
                <button class="flex-1 min-w-fit px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-xl font-medium hover:from-blue-600 hover:to-purple-700 transform hover:scale-105 transition-all duration-200 shadow-lg">
                    📱 Track Live
                </button>
                <button class="flex-1 min-w-fit px-6 py-3 bg-gray-100 border border-gray-300 text-gray-700 rounded-xl font-medium hover:bg-gray-200 transform hover:scale-105 transition-all duration-200">
                    📞 Contact Support
                </button>
                <button class="flex-1 min-w-fit px-6 py-3 bg-gray-100 border border-gray-300 text-gray-700 rounded-xl font-medium hover:bg-gray-200 transform hover:scale-105 transition-all duration-200">
                    📝 Update Instructions
                </button>
            </div>
        </div>
        
        <!-- Recent Deliveries -->
        <div class="glass-effect rounded-3xl p-8 card-hover">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800 flex items-center">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Delivery History
                </h2>
                <span class="text-gray-600">Last 30 days</span>
            </div>
            
            <div class="space-y-4">
                <div class="bg-gray-50 rounded-xl p-4 border border-gray-200 hover:bg-gray-100 transition-all duration-200">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-800 font-medium">#ORD-647382</p>
                                <p class="text-gray-600 text-sm">Delivered Jun 18, 2025</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">
                                ✅ Delivered
                            </span>
                            <button class="text-gray-500 hover:text-gray-700 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-4 border border-gray-200 hover:bg-gray-100 transition-all duration-200">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-800 font-medium">#ORD-538291</p>
                                <p class="text-gray-600 text-sm">Delivered Jun 11, 2025</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">
                                ✅ Delivered
                            </span>
                            <button class="text-gray-500 hover:text-gray-700 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>