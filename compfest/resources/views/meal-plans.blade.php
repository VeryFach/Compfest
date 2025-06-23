<x-layout>
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="text-center mb-10">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Customize Your Meal Plan</h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Tailor your meals to match your dietary preferences, health goals, and taste buds</p>
        </div>

        <!-- Progress Steps -->
        <div class="mb-12">
            <div class="flex justify-between relative">
                <!-- Progress line -->
                <div class="absolute top-1/2 left-0 right-0 h-1 bg-gray-200 -z-10"></div>
                <div class="absolute top-1/2 left-0 h-1 bg-green-500 -z-10" style="width: 50%;"></div>
                
                <!-- Steps -->
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white font-bold mb-2">1</div>
                    <span class="text-sm font-medium text-gray-700">Select Base Meal</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white font-bold mb-2">2</div>
                    <span class="text-sm font-medium text-gray-700">Customize</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full border-2 border-gray-300 bg-white flex items-center justify-center text-gray-400 font-bold mb-2">3</div>
                    <span class="text-sm font-medium text-gray-500">Nutrition Check</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full border-2 border-gray-300 bg-white flex items-center justify-center text-gray-400 font-bold mb-2">4</div>
                    <span class="text-sm font-medium text-gray-500">Confirm Order</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Meal Selection Panel -->
            <div class="lg:col-span-1 bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-xl font-bold text-gray-800">Base Meal Options</h2>
                    <p class="text-sm text-gray-500 mt-1">Choose your starting point</p>
                </div>
                <div class="divide-y divide-gray-200">
                    <!-- Meal Option 1 -->
                    <div class="p-6 hover:bg-gray-50 cursor-pointer transition">
                        <div class="flex items-start">
                            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" 
                                 alt="Healthy Bowl" 
                                 class="w-16 h-16 rounded-md object-cover mr-4">
                            <div>
                                <h3 class="font-medium text-gray-900">Balanced Veggie Bowl</h3>
                                <p class="text-sm text-gray-500 mt-1">Quinoa, mixed greens, roasted vegetables</p>
                                <div class="flex items-center mt-2">
                                    <span class="text-xs font-medium px-2 py-1 bg-green-100 text-green-800 rounded-full">450 kcal</span>
                                    <span class="text-xs font-medium px-2 py-1 bg-blue-100 text-blue-800 rounded-full ml-2">32g protein</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Meal Option 2 -->
                    <div class="p-6 hover:bg-gray-50 cursor-pointer transition bg-green-50">
                        <div class="flex items-start">
                            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" 
                                 alt="Protein Power" 
                                 class="w-16 h-16 rounded-md object-cover mr-4">
                            <div>
                                <h3 class="font-medium text-gray-900">Protein Power Pack</h3>
                                <p class="text-sm text-gray-500 mt-1">Grilled chicken, brown rice, steamed broccoli</p>
                                <div class="flex items-center mt-2">
                                    <span class="text-xs font-medium px-2 py-1 bg-green-100 text-green-800 rounded-full">520 kcal</span>
                                    <span class="text-xs font-medium px-2 py-1 bg-blue-100 text-blue-800 rounded-full ml-2">45g protein</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Meal Option 3 -->
                    <div class="p-6 hover:bg-gray-50 cursor-pointer transition">
                        <div class="flex items-start">
                            <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" 
                                 alt="Low Carb" 
                                 class="w-16 h-16 rounded-md object-cover mr-4">
                            <div>
                                <h3 class="font-medium text-gray-900">Low Carb Delight</h3>
                                <p class="text-sm text-gray-500 mt-1">Zucchini noodles, shrimp, pesto sauce</p>
                                <div class="flex items-center mt-2">
                                    <span class="text-xs font-medium px-2 py-1 bg-green-100 text-green-800 rounded-full">380 kcal</span>
                                    <span class="text-xs font-medium px-2 py-1 bg-blue-100 text-blue-800 rounded-full ml-2">28g protein</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Customization Panel -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-xl font-bold text-gray-800">Customize Your Protein Power Pack</h2>
                        <p class="text-sm text-gray-500 mt-1">Make it just the way you like</p>
                    </div>
                    
                    <!-- Protein Customization -->
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-medium text-gray-900">Protein Source</h3>
                            <span class="text-sm text-gray-500">Current: Grilled Chicken (+0 IDR)</span>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition">
                                <img src="https://images.unsplash.com/photo-1501200291289-c5a76c232e5f?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Grilled Chicken" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Grilled Chicken</div>
                                <div class="text-xs text-gray-500">+0 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition">
                                <img src="https://images.unsplash.com/photo-1551504734-5ee1c4a1479b?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Salmon" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Grilled Salmon</div>
                                <div class="text-xs text-gray-500">+15,000 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition">
                                <img src="https://images.unsplash.com/photo-1598515214211-89d3c7349cbd?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Tofu" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Tofu</div>
                                <div class="text-xs text-gray-500">+5,000 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition">
                                <img src="https://images.unsplash.com/photo-1604977046806-87b8b1ab9f9e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Tempeh" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Tempeh</div>
                                <div class="text-xs text-gray-500">+5,000 IDR</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Carb Customization -->
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-medium text-gray-900">Carbohydrate Base</h3>
                            <span class="text-sm text-gray-500">Current: Brown Rice (+0 IDR)</span>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition">
                                <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Brown Rice" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Brown Rice</div>
                                <div class="text-xs text-gray-500">+0 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition">
                                <img src="https://images.unsplash.com/photo-1586201375761-83865001e1ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Quinoa" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Quinoa</div>
                                <div class="text-xs text-gray-500">+10,000 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition">
                                <img src="https://images.unsplash.com/photo-1596662951485-0d966b64b6c1?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Cauliflower Rice" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Cauliflower Rice</div>
                                <div class="text-xs text-gray-500">+7,000 IDR</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Vegetable Customization -->
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-medium text-gray-900">Vegetables & Extras</h3>
                            <span class="text-sm text-gray-500">Select up to 4</span>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition">
                                <img src="https://images.unsplash.com/photo-1518977676601-b53f82aba655?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Broccoli" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Broccoli</div>
                                <div class="text-xs text-gray-500">+0 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition">
                                <img src="https://images.unsplash.com/photo-1594282410996-8fe0a60edf16?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Carrots" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Carrots</div>
                                <div class="text-xs text-gray-500">+0 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition">
                                <img src="https://images.unsplash.com/photo-1601493700631-2b16ec4b4716?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Avocado" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Avocado</div>
                                <div class="text-xs text-gray-500">+12,000 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition">
                                <img src="https://images.unsplash.com/photo-1604977046806-87b8b1ab9f9e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Mushrooms" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Mushrooms</div>
                                <div class="text-xs text-gray-500">+5,000 IDR</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nutrition Preview -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-xl font-bold text-gray-800">Nutrition Preview</h2>
                        <p class="text-sm text-gray-500 mt-1">Based on your current selections</p>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between mb-6">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-green-600">520</div>
                                <div class="text-sm text-gray-500">Calories</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-600">45g</div>
                                <div class="text-sm text-gray-500">Protein</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-yellow-600">15g</div>
                                <div class="text-sm text-gray-500">Fat</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-purple-600">42g</div>
                                <div class="text-sm text-gray-500">Carbs</div>
                            </div>
                        </div>
                        <button onclick="window.location.href='{{ route('nutrition') }}'"class="w-full py-3 bg-green-500 hover:bg-green-600 text-white font-medium rounded-lg transition">
                            Continue to Nutrition Check
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>