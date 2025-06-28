<x-layout title="Nutrition-Info">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailed Nutrition Information</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .nutrition-bar {
            background: linear-gradient(90deg, #10b981 0%, #3b82f6 50%, #8b5cf6 100%);
            height: 6px;
            border-radius: 3px;
        }
        .fade-in {
            animation: fadeInUp 0.6s ease-out;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-green-50 to-blue-50">
    <!-- Hero Section -->
    <section class="py-16 px-4">
        <div class="max-w-6xl mx-auto text-center fade-in">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-800 mb-6">
                Detailed <span class="text-green-600">Nutrition</span> Information
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-4xl mx-auto">
                Discover the complete nutritional breakdown of our scientifically crafted meal plans. 
                Every meal is designed by certified nutritionists to provide optimal health benefits based on your specific goals.
            </p>
            <div class="nutrition-bar max-w-md mx-auto mb-8"></div>
        </div>
    </section>

    <!-- Scientific Approach Section -->
    <section class="py-12 px-4 bg-white">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">
                Why Different <span class="text-blue-600">Nutritional Compositions</span>?
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="p-6 bg-gradient-to-br from-green-100 to-green-200 rounded-xl">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Metabolic Optimization</h3>
                    <p class="text-gray-600 text-sm">Each plan targets specific metabolic pathways to achieve your health goals efficiently</p>
                </div>
                <div class="p-6 bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Evidence-Based Ratios</h3>
                    <p class="text-gray-600 text-sm">Macronutrient ratios based on latest nutritional science and clinical research</p>
                </div>
                <div class="p-6 bg-gradient-to-br from-purple-100 to-purple-200 rounded-xl">
                    <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Personalized Nutrition</h3>
                    <p class="text-gray-600 text-sm">Tailored to individual needs, activity levels, and health objectives</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Meal Plans Nutrition -->
    <section class="py-12 px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">
                Choose Your <span class="text-green-600">Optimal</span> Nutrition Plan
            </h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <!-- Diet Plan -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover-scale">
                    <div class="bg-gradient-to-r from-green-400 to-green-600 p-6 text-white">
                        <h3 class="text-2xl font-bold mb-2">Diet Plan</h3>
                        <p class="text-green-100">Optimized for sustainable weight management</p>
                        <div class="text-3xl font-bold mt-4">Rp30.000<span class="text-lg">/meal</span></div>
                        <div class="mt-2 text-sm opacity-90">Best for: Weight loss & maintenance</div>
                    </div>
                    
                    <div class="p-6">
                        <!-- Why This Composition -->
                        <div class="mb-6 p-4 bg-green-50 rounded-lg">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2 flex items-center">
                                <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Why This Composition?
                            </h4>
                            <p class="text-sm text-gray-700">
                                <strong>Caloric Deficit Design:</strong> 350-400 calories create a moderate deficit for sustainable weight loss without metabolic slowdown. 
                                <strong>High Fiber (8-10g):</strong> Promotes satiety and digestive health while controlling hunger. 
                                <strong>Balanced Macros:</strong> Maintains muscle mass during weight loss while optimizing fat burning.
                            </p>
                        </div>

                        <div class="mb-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-3">Nutritional Values per Meal</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                    <span class="text-gray-600 flex items-center">
                                        <span class="w-3 h-3 bg-red-500 rounded-full mr-2"></span>
                                        Calories
                                    </span>
                                    <span class="font-semibold text-gray-800">350-400 kcal</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                    <span class="text-gray-600 flex items-center">
                                        <span class="w-3 h-3 bg-blue-500 rounded-full mr-2"></span>
                                        Protein (25-30%)
                                    </span>
                                    <span class="font-semibold text-gray-800">25-30g</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                    <span class="text-gray-600 flex items-center">
                                        <span class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></span>
                                        Carbohydrates (40-45%)
                                    </span>
                                    <span class="font-semibold text-gray-800">35-40g</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                    <span class="text-gray-600 flex items-center">
                                        <span class="w-3 h-3 bg-green-500 rounded-full mr-2"></span>
                                        Fat (30-35%)
                                    </span>
                                    <span class="font-semibold text-gray-800">12-15g</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-green-100 rounded">
                                    <span class="text-gray-600">Fiber</span>
                                    <span class="font-semibold text-green-700">8-10g (High)</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-green-100 rounded">
                                    <span class="text-gray-600">Sugar</span>
                                    <span class="font-semibold text-green-700">5-8g (Low)</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-3">Strategic Ingredients</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Lean Chicken (Thermogenic)</span>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Brown Rice (Complex Carbs)</span>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Cruciferous Vegetables</span>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">MCT Olive Oil</span>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-3">Scientific Benefits</h4>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Creates 0.5-1kg weekly weight loss through controlled caloric deficit
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    High fiber promotes GLP-1 hormone for natural appetite control
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Low glycemic index prevents insulin spikes and fat storage
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Preserves lean muscle mass during weight loss phase
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Protein Plan -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover-scale">
                    <div class="bg-gradient-to-r from-blue-400 to-blue-600 p-6 text-white">
                        <h3 class="text-2xl font-bold mb-2">Protein Plan</h3>
                        <p class="text-blue-100">Engineered for muscle building & recovery</p>
                        <div class="text-3xl font-bold mt-4">Rp40.000<span class="text-lg">/meal</span></div>
                        <div class="mt-2 text-sm opacity-90">Best for: Athletes & muscle building</div>
                    </div>
                    
                    <div class="p-6">
                        <!-- Why This Composition -->
                        <div class="mb-6 p-4 bg-blue-50 rounded-lg">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2 flex items-center">
                                <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Why This Composition?
                            </h4>
                            <p class="text-sm text-gray-700">
                                <strong>High Protein (40-45g):</strong> Provides 1.6-2.2g per kg body weight for optimal muscle protein synthesis. 
                                <strong>Strategic Timing:</strong> Complete amino acid profile supports post-workout recovery. 
                                <strong>Moderate Carbs:</strong> Replenishes glycogen stores for performance without excess fat storage.
                            </p>
                        </div>

                        <div class="mb-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-3">Nutritional Values per Meal</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                    <span class="text-gray-600 flex items-center">
                                        <span class="w-3 h-3 bg-red-500 rounded-full mr-2"></span>
                                        Calories
                                    </span>
                                    <span class="font-semibold text-gray-800">450-500 kcal</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-blue-100 rounded">
                                    <span class="text-gray-600 flex items-center">
                                        <span class="w-3 h-3 bg-blue-500 rounded-full mr-2"></span>
                                        Protein (35-40%)
                                    </span>
                                    <span class="font-semibold text-blue-700">40-45g (High)</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                    <span class="text-gray-600 flex items-center">
                                        <span class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></span>
                                        Carbohydrates (25-30%)
                                    </span>
                                    <span class="font-semibold text-gray-800">30-35g</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                    <span class="text-gray-600 flex items-center">
                                        <span class="w-3 h-3 bg-green-500 rounded-full mr-2"></span>
                                        Fat (30-35%)
                                    </span>
                                    <span class="font-semibold text-gray-800">15-18g</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                    <span class="text-gray-600">Fiber</span>
                                    <span class="font-semibold text-gray-800">6-8g</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-blue-100 rounded">
                                    <span class="text-gray-600">Sugar</span>
                                    <span class="font-semibold text-blue-700">3-5g (Very Low)</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-3">Performance Ingredients</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Wild Salmon (Omega-3)</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Quinoa (Complete Protein)</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Greek Yogurt (Casein)</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Almonds & Seeds (BCAA)</span>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-3">Scientific Benefits</h4>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Maximizes muscle protein synthesis (MPS) for 3-4 hours post-meal
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Complete amino acid profile supports optimal recovery
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Omega-3 fatty acids reduce exercise-induced inflammation
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Enhanced performance and faster recovery between workouts
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Royal Plan -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 hover-scale">
                    <div class="bg-gradient-to-r from-purple-400 to-purple-600 p-6 text-white">
                        <h3 class="text-2xl font-bold mb-2">Royal Plan</h3>
                        <p class="text-purple-100">Complete premium wellness nutrition</p>
                        <div class="text-3xl font-bold mt-4">Rp60.000<span class="text-lg">/meal</span></div>
                        <div class="mt-2 text-sm opacity-90">Best for: Optimal health & longevity</div>
                    </div>
                    
                    <div class="p-6">
                        <!-- Why This Composition -->
                        <div class="mb-6 p-4 bg-purple-50 rounded-lg">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2 flex items-center">
                                <svg class="w-5 h-5 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Why This Composition?
                            </h4>
                            <p class="text-sm text-gray-700">
                                <strong>Balanced Macros:</strong> Perfect 2:1:1 ratio for sustained energy and cognitive function. 
                                <strong>Premium Superfoods:</strong> Antioxidant-rich ingredients support cellular health and longevity. 
                                <strong>Bioactive Compounds:</strong> Phytonutrients and healthy fats optimize hormonal balance and brain function.
                            </p>
                        </div>

                        <div class="mb-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-3">Nutritional Values per Meal</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                    <span class="text-gray-600 flex items-center">
                                        <span class="w-3 h-3 bg-red-500 rounded-full mr-2"></span>
                                        Calories
                                    </span>
                                    <span class="font-semibold text-gray-800">550-600 kcal</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                    <span class="text-gray-600 flex items-center">
                                        <span class="w-3 h-3 bg-blue-500 rounded-full mr-2"></span>
                                        Protein (25-30%)
                                    </span>
                                    <span class="font-semibold text-gray-800">35-40g</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                    <span class="text-gray-600 flex items-center">
                                        <span class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></span>
                                        Carbohydrates (30-35%)
                                    </span>
                                    <span class="font-semibold text-gray-800">45-50g</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                    <span class="text-gray-600 flex items-center">
                                        <span class="w-3 h-3 bg-green-500 rounded-full mr-2"></span>
                                        Fat (35-40%)
                                    </span>
                                    <span class="font-semibold text-gray-800">20-25g</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-purple-100 rounded">
                                    <span class="text-gray-600">Fiber</span>
                                    <span class="font-semibold text-purple-700">10-12g (Very High)</span>
                                </div>
                                <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                    <span class="text-gray-600">Sugar</span>
                                    <span class="font-semibold text-gray-800">8-10g (Natural)</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-3">Luxury Superfoods</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Grass-Fed Wagyu</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Black Truffle Rice</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Organic Microgreens</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Premium Avocado Oil</span>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-3">Scientific Benefits</h4>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-purple-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Complete micronutrient profile supports optimal cellular function
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-purple-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    High antioxidant content combats oxidative stress and aging
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-purple-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Balanced macronutrients support cognitive performance
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-purple-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Premium ingredients enhance bioavailability and absorption
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Comparison Section -->
    <section class="py-16 px-4 bg-gradient-to-br from-gray-100 to-gray-200">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">
                Why Each Plan is <span class="text-indigo-600">Scientifically Different</span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Diet Plan Strategy</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Caloric Density</span>
                            <span class="text-sm font-bold text-green-700">Low (0.9 kcal/g)</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Satiety Index</span>
                            <span class="text-sm font-bold text-green-700">High (Fiber+Protein)</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Metabolic Effect</span>
                            <span class="text-sm font-bold text-green-700">Fat Oxidation</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Hormone Response</span>
                            <span class="text-sm font-bold text-green-700">↑GLP-1, ↓Insulin</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Protein Plan Strategy</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Protein Quality</span>
                            <span class="text-sm font-bold text-blue-700">Complete (PDCAAS 1.0)</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">BCAA Content</span>
                            <span class="text-sm font-bold text-blue-700">High (>12g)</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Absorption Rate</span>
                            <span class="text-sm font-bold text-blue-700">Fast (Whey+Casein)</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Recovery Window</span>
                            <span class="text-sm font-bold text-blue-700">Optimized (3-4hr)</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Royal Plan Strategy</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 bg-purple-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Nutrient Density</span>
                            <span class="text-sm font-bold text-purple-700">Maximum (>15 vitamins)</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-purple-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Antioxidant Power</span>
                            <span class="text-sm font-bold text-purple-700">Ultra-High (ORAC >5000)</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-purple-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Bioavailability</span>
                            <span class="text-sm font-bold text-purple-700">Premium (90%+ absorption)</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-purple-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Longevity Factors</span>
                            <span class="text-sm font-bold text-purple-700">Multiple (Anti-aging)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Timing and Lifestyle Factors -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-2xl font-bold text-gray-800 text-center mb-8">
                    Personalized Nutrition <span class="text-indigo-600">Matching</span>
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-800 mb-2">Diet Plan Timing</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Best consumed 2-3 hours before bed</li>
                            <li>• Morning meal for sustained energy</li>
                            <li>• Ideal for sedentary to light activity</li>
                            <li>• 12-16 hour fasting window support</li>
                        </ul>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-800 mb-2">Protein Plan Timing</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Post-workout within 30-60 minutes</li>
                            <li>• Pre-workout 2-3 hours prior</li>
                            <li>• Ideal for moderate to intense activity</li>
                            <li>• Supports 4-6 training sessions/week</li>
                        </ul>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-800 mb-2">Royal Plan Timing</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Any time for sustained nutrition</li>
                            <li>• Business meals and social dining</li>
                            <li>• Supports high-stress lifestyles</li>
                            <li>• Optimal for executives and professionals</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nutritional Guidelines Section -->
    <section class="py-16 px-4 bg-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">
                Our Scientific <span class="text-green-600">Approach</span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-6 hover-scale">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Evidence-Based Formulation</h3>
                    </div>
                    <p class="text-gray-700">All our meal compositions are based on peer-reviewed nutritional research and clinical studies. We continuously update our formulations based on the latest scientific findings in metabolism, sports nutrition, and longevity research.</p>
                </div>
                
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-6 hover-scale">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Metabolic Targeting</h3>
                    </div>
                    <p class="text-gray-700">Each plan is designed to optimize specific metabolic pathways. Our Diet Plan enhances fat oxidation, Protein Plan maximizes muscle protein synthesis, and Royal Plan supports comprehensive cellular health and cognitive function.</p>
                </div>
                
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg p-6 hover-scale">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Bioindividuality Recognition</h3>
                    </div>
                    <p class="text-gray-700">We understand that optimal nutrition varies by individual genetics, lifestyle, and goals. Our three-tier system allows you to choose the nutritional strategy that best matches your unique physiological needs and preferences.</p>
                </div>
                
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-lg p-6 hover-scale">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-yellow-600 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Continuous Optimization</h3>
                    </div>
                    <p class="text-gray-700">Our nutrition team monitors the latest research and continuously refines our formulations. We also provide personalized adjustments based on your progress, biometric feedback, and changing health goals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 px-4 bg-gradient-to-r from-green-600 via-blue-600 to-purple-600">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-3xl font-bold mb-6">Ready to Start Your Scientifically-Optimized Journey?</h2>
            <p class="text-xl mb-8 opacity-90">Choose the perfect meal plan that aligns with your unique metabolic needs and lifestyle goals.</p>
            <div class="space-x-4">
                <a href="/subscribe" class="inline-block bg-white text-gray-800 font-semibold px-8 py-3 rounded-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                    Subscribe Now
                </a>
                <a href="/contact" class="inline-block border-2 border-white text-white font-semibold px-8 py-3 rounded-lg hover:bg-white hover:text-gray-800 transition-all duration-300 transform hover:scale-105">
                    Consult Our Nutritionist
                </a>
            </div>
            <div class="mt-8 text-sm opacity-75">
                <p>All plans are designed by certified nutritionists and backed by scientific research</p>
            </div>
        </div>
    </section>

    <script>
        // Add smooth scrolling and fade-in animations
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all cards and sections
            document.querySelectorAll('.hover-scale, .fade-in').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        });
    </script>
</body>
</html>
</x-layout>