<x-layout>
    <div class="container mx-auto px-4 py-8">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-green-400 to-blue-500 rounded-xl p-8 mb-8 text-white">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Your Meal's Nutrition</h1>
            <p class="text-lg md:text-xl mb-6">Understand what fuels your body with our detailed nutritional breakdown</p>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>All values are calculated per serving</span>
            </div>
        </div>

        <!-- Main Nutrition Dashboard -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
            <!-- Nutrition Summary Card -->
            <div class="bg-white rounded-xl shadow-md p-6 lg:col-span-1 order-1">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Nutrition Summary</h2>
                
                <div class="flex items-center justify-between mb-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600">450</div>
                        <div class="text-gray-500">Calories</div>
                    </div>
                    <div class="h-16 w-px bg-gray-200"></div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600">32g</div>
                        <div class="text-gray-500">Protein</div>
                    </div>
                    <div class="h-16 w-px bg-gray-200"></div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-600">12g</div>
                        <div class="text-gray-500">Fat</div>
                    </div>
                </div>

                <div class="space-y-3">
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span>Carbs</span>
                            <span>45g (30%)</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-400 h-2 rounded-full" style="width: 30%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span>Protein</span>
                            <span>32g (40%)</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-400 h-2 rounded-full" style="width: 40%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span>Fat</span>
                            <span>12g (30%)</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 30%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Macro Nutrients Visualization -->
            <div class="bg-white rounded-xl shadow-md p-6 lg:col-span-2 order-2">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Macronutrients Distribution</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Pie Chart Placeholder -->
                    <div class="flex justify-center items-center">
                        <div class="relative w-48 h-48">
                            <!-- This would be replaced with a real chart library like Chart.js -->
                            <div class="absolute inset-0 rounded-full border-8 border-blue-400" style="clip-path: polygon(50% 50%, 50% 0%, 100% 0%, 100% 100%, 0% 100%, 0% 30%);"></div>
                            <div class="absolute inset-0 rounded-full border-8 border-green-400" style="clip-path: polygon(50% 50%, 0% 30%, 0% 0%, 50% 0%);"></div>
                            <div class="absolute inset-0 rounded-full border-8 border-yellow-400" style="clip-path: polygon(50% 50%, 0% 100%, 100% 100%);"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center">
                                    <div class="text-2xl font-bold">450</div>
                                    <div class="text-gray-500 text-sm">kcal</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Macro Breakdown -->
                    <div>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="w-3 h-3 rounded-full bg-blue-400 mt-1 mr-2"></div>
                                <div>
                                    <div class="font-medium">Carbohydrates</div>
                                    <div class="text-sm text-gray-500">45g (30% of calories)</div>
                                    <div class="text-xs text-gray-400">Primary energy source</div>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-3 h-3 rounded-full bg-green-400 mt-1 mr-2"></div>
                                <div>
                                    <div class="font-medium">Protein</div>
                                    <div class="text-sm text-gray-500">32g (40% of calories)</div>
                                    <div class="text-xs text-gray-400">Muscle repair and growth</div>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-3 h-3 rounded-full bg-yellow-400 mt-1 mr-2"></div>
                                <div>
                                    <div class="font-medium">Fat</div>
                                    <div class="text-sm text-gray-500">12g (30% of calories)</div>
                                    <div class="text-xs text-gray-400">Essential for nutrient absorption</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detailed Nutrition Table -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
            <h2 class="text-xl font-bold text-gray-800 p-6 pb-0">Detailed Nutritional Information</h2>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nutrient</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Daily Value</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Importance</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Calories</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">450 kcal</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">22%</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Energy for daily activities</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Protein</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">32g</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">64%</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Muscle maintenance</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Dietary Fiber</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">8g</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">32%</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Digestive health</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Sugars</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">6g</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12%</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Natural from ingredients</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Vitamin A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">35%</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">35%</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Eye health</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Vitamin C</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">60%</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">60%</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Immune support</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Calcium</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">20%</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">20%</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Bone health</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Iron</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">25%</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">25%</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Oxygen transport</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Health Benefits Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <div class="p-2 rounded-full bg-green-100 text-green-600 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Balanced Macros</h3>
                    </div>
                    <p class="text-gray-600">This meal provides an optimal balance of carbohydrates, protein, and healthy fats to fuel your body efficiently.</p>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <div class="p-2 rounded-full bg-blue-100 text-blue-600 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">High Protein</h3>
                    </div>
                    <p class="text-gray-600">With 32g of protein, this meal supports muscle recovery and keeps you feeling full longer.</p>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <div class="p-2 rounded-full bg-yellow-100 text-yellow-600 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Rich in Vitamins</h3>
                    </div>
                    <p class="text-gray-600">Packed with essential vitamins and minerals to support your overall health and immunity.</p>
                </div>
            </div>
        </div>

        <!-- Customization CTA -->
        <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-xl p-8 text-white text-center">
            <h2 class="text-2xl font-bold mb-4">Customize Your Meal's Nutrition</h2>
            <p class="mb-6 max-w-2xl mx-auto">Adjust ingredients to meet your specific dietary needs and health goals</p>
            <button
                onclick="window.location.href='{{ route('meal-plans') }}'"
                class="px-6 py-3 bg-white text-green-600 font-medium rounded-lg hover:bg-gray-100 transition shadow-md"
            >
                Customize This Meal
            </button>
        </div>
    </div>
</x-layout>