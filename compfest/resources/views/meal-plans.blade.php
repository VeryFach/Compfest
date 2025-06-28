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
                    <div class="p-6 hover:bg-gray-50 cursor-pointer transition" onclick="selectMeal('balanced-veggie')">
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
                    <div class="p-6 hover:bg-gray-50 cursor-pointer transition bg-green-50" onclick="selectMeal('protein-power')">
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
                    <div class="p-6 hover:bg-gray-50 cursor-pointer transition" onclick="selectMeal('low-carb')">
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
                        <h2 class="text-xl font-bold text-gray-800" id="meal-title">Customize Your Protein Power Pack</h2>
                        <p class="text-sm text-gray-500 mt-1">Make it just the way you like</p>
                    </div>
                    
                    <!-- Protein Customization -->
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-medium text-gray-900">Protein Source</h3>
                            <span class="text-sm text-gray-500" id="current-protein">Current: Grilled Chicken (+0 IDR)</span>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition" onclick="selectProtein('chicken', 0)">
                                <img src="https://images.unsplash.com/photo-1501200291289-c5a76c232e5f?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Grilled Chicken" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Grilled Chicken</div>
                                <div class="text-xs text-gray-500">+0 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition" onclick="selectProtein('salmon', 15000)">
                                <img src="https://images.unsplash.com/photo-1551504734-5ee1c4a1479b?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Salmon" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Grilled Salmon</div>
                                <div class="text-xs text-gray-500">+15,000 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition" onclick="selectProtein('tofu', 5000)">
                                <img src="https://cdn.loveandlemons.com/wp-content/uploads/2019/12/tofu.jpg" 
                                     alt="Tofu" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Tofu</div>
                                <div class="text-xs text-gray-500">+5,000 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition" onclick="selectProtein('tempeh', 5000)">
                                <img src="https://vancouverwithlove.com/wp-content/uploads/2024/09/how-to-cook-tempeh-25.jpg" 
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
                            <span class="text-sm text-gray-500" id="current-carb">Current: Brown Rice (+0 IDR)</span>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition" onclick="selectCarb('rice', 0)">
                                <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Brown Rice" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Brown Rice</div>
                                <div class="text-xs text-gray-500">+0 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition" onclick="selectCarb('quinoa', 10000)">
                                <img src="https://detoxinista.com/wp-content/uploads/2022/03/cooked-quinoa-bowls.jpg" 
                                     alt="Quinoa" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Quinoa</div>
                                <div class="text-xs text-gray-500">+10,000 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition" onclick="selectCarb('cauliflower', 7000)">
                                <img src="https://cdn.loveandlemons.com/wp-content/uploads/2018/01/cauliflower-rice.jpg" 
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
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3" id="vegetables-container">
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition" onclick="toggleVegetable('broccoli', 0)">
                                <img src="https://images.unsplash.com/photo-1518977676601-b53f82aba655?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Broccoli" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Broccoli</div>
                                <div class="text-xs text-gray-500">+0 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition" onclick="toggleVegetable('carrots', 0)">
                                <img src="https://simplyhomecooked.com/wp-content/uploads/2022/10/shredded-carrot-salad-11.jpg" 
                                     alt="Carrots" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Carrots</div>
                                <div class="text-xs text-gray-500">+0 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition" onclick="toggleVegetable('avocado', 12000)">
                                <img src="https://images.unsplash.com/photo-1601493700631-2b16ec4b4716?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                                     alt="Avocado" 
                                     class="w-16 h-16 rounded-full object-cover mx-auto mb-2">
                                <div class="font-medium">Avocado</div>
                                <div class="text-xs text-gray-500">+12,000 IDR</div>
                            </div>
                            <div class="border rounded-lg p-3 text-center cursor-pointer hover:border-green-400 transition" onclick="toggleVegetable('mushrooms', 5000)">
                                <img src="https://www.dinneratthezoo.com/wp-content/uploads/2019/03/sauteed-mushrooms-final-2.jpg" 
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
                                <div class="text-2xl font-bold text-green-600" id="calories-value">520</div>
                                <div class="text-sm text-gray-500">Calories</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-600" id="protein-value">45g</div>
                                <div class="text-sm text-gray-500">Protein</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-yellow-600" id="fat-value">15g</div>
                                <div class="text-sm text-gray-500">Fat</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-purple-600" id="carbs-value">42g</div>
                                <div class="text-sm text-gray-500">Carbs</div>
                            </div>
                        </div>
                        <button onclick="saveMealAndProceed()" class="w-full py-3 bg-green-500 hover:bg-green-600 text-white font-medium rounded-lg transition">
                            Continue to Nutrition Check
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Current meal configuration
        let currentMeal = {
            type: 'protein-power',
            protein: { name: 'Grilled Chicken', price: 0, calories: 180, protein: 35, fat: 4, carbs: 0 },
            carb: { name: 'Brown Rice', price: 0, calories: 200, protein: 5, fat: 2, carbs: 40 },
            vegetables: [],
            extras: []
        };

        // Meal base configurations
        const mealBases = {
            'balanced-veggie': {
                title: 'Balanced Veggie Bowl',
                baseCalories: 450,
                baseProtein: 32,
                baseFat: 12,
                baseCarbs: 45
            },
            'protein-power': {
                title: 'Protein Power Pack',
                baseCalories: 520,
                baseProtein: 45,
                baseFat: 15,
                baseCarbs: 42
            },
            'low-carb': {
                title: 'Low Carb Delight',
                baseCalories: 380,
                baseProtein: 28,
                baseFat: 10,
                baseCarbs: 20
            }
        };

        // Protein options
        const proteinOptions = {
            'chicken': { name: 'Grilled Chicken', price: 0, calories: 180, protein: 35, fat: 4, carbs: 0 },
            'salmon': { name: 'Grilled Salmon', price: 15000, calories: 200, protein: 30, fat: 10, carbs: 0 },
            'tofu': { name: 'Tofu', price: 5000, calories: 150, protein: 15, fat: 8, carbs: 5 },
            'tempeh': { name: 'Tempeh', price: 5000, calories: 160, protein: 18, fat: 7, carbs: 8 }
        };

        // Carb options
        const carbOptions = {
            'rice': { name: 'Brown Rice', price: 0, calories: 200, protein: 5, fat: 2, carbs: 40 },
            'quinoa': { name: 'Quinoa', price: 10000, calories: 180, protein: 8, fat: 3, carbs: 35 },
            'cauliflower': { name: 'Cauliflower Rice', price: 7000, calories: 50, protein: 2, fat: 0, carbs: 10 }
        };

        // Vegetable options
        const vegetableOptions = {
            'broccoli': { name: 'Broccoli', price: 0, calories: 30, protein: 3, fat: 0, carbs: 6 },
            'carrots': { name: 'Carrots', price: 0, calories: 25, protein: 1, fat: 0, carbs: 5 },
            'avocado': { name: 'Avocado', price: 12000, calories: 160, protein: 2, fat: 15, carbs: 8 },
            'mushrooms': { name: 'Mushrooms', price: 5000, calories: 20, protein: 2, fat: 0, carbs: 4 }
        };

        // Select a base meal
        function selectMeal(mealType) {
            currentMeal.type = mealType;
            const meal = mealBases[mealType];
            document.getElementById('meal-title').textContent = `Customize Your ${meal.title}`;
            updateNutritionValues();
        }

        // Select protein
        function selectProtein(proteinType, price) {
            currentMeal.protein = proteinOptions[proteinType];
            document.getElementById('current-protein').textContent = `Current: ${currentMeal.protein.name} (+${price.toLocaleString()} IDR)`;
            updateNutritionValues();
        }

        // Select carb
        function selectCarb(carbType, price) {
            currentMeal.carb = carbOptions[carbType];
            document.getElementById('current-carb').textContent = `Current: ${currentMeal.carb.name} (+${price.toLocaleString()} IDR)`;
            updateNutritionValues();
        }

        // Toggle vegetable selection
        function toggleVegetable(vegetableType, price) {
            const index = currentMeal.vegetables.findIndex(v => v === vegetableType);
            if (index >= 0) {
                currentMeal.vegetables.splice(index, 1);
            } else if (currentMeal.vegetables.length < 4) {
                currentMeal.vegetables.push(vegetableType);
            }
            updateNutritionValues();
        }

        // Update nutrition values display
        function updateNutritionValues() {
            const mealBase = mealBases[currentMeal.type];
            
            // Calculate totals from base + protein + carb + vegetables
            let totalCalories = mealBase.baseCalories;
            let totalProtein = mealBase.baseProtein;
            let totalFat = mealBase.baseFat;
            let totalCarbs = mealBase.baseCarbs;
            
            // Add protein values
            totalCalories += currentMeal.protein.calories;
            totalProtein += currentMeal.protein.protein;
            totalFat += currentMeal.protein.fat;
            totalCarbs += currentMeal.protein.carbs;
            
            // Add carb values
            totalCalories += currentMeal.carb.calories;
            totalProtein += currentMeal.carb.protein;
            totalFat += currentMeal.carb.fat;
            totalCarbs += currentMeal.carb.carbs;
            
            // Add vegetable values
            currentMeal.vegetables.forEach(veg => {
                const vegetable = vegetableOptions[veg];
                totalCalories += vegetable.calories;
                totalProtein += vegetable.protein;
                totalFat += vegetable.fat;
                totalCarbs += vegetable.carbs;
            });
            
            // Update the UI
            document.getElementById('calories-value').textContent = totalCalories;
            document.getElementById('protein-value').textContent = `${totalProtein}g`;
            document.getElementById('fat-value').textContent = `${totalFat}g`;
            document.getElementById('carbs-value').textContent = `${totalCarbs}g`;
        }

        // Save meal configuration and proceed to nutrition page
        function saveMealAndProceed() {
            // Calculate final nutrition values
            const mealBase = mealBases[currentMeal.type];
            
            let nutritionData = {
                calories: mealBase.baseCalories,
                protein: mealBase.baseProtein,
                fat: mealBase.baseFat,
                carbs: mealBase.baseCarbs,
                mealName: mealBase.title,
                ingredients: [
                    currentMeal.protein.name,
                    currentMeal.carb.name
                ],
                vitamins: {
                    vitaminA: '35%',
                    vitaminC: '60%',
                    calcium: '20%',
                    iron: '25%'
                }
            };
            
            // Add protein values
            nutritionData.calories += currentMeal.protein.calories;
            nutritionData.protein += currentMeal.protein.protein;
            nutritionData.fat += currentMeal.protein.fat;
            nutritionData.carbs += currentMeal.protein.carbs;
            
            // Add carb values
            nutritionData.calories += currentMeal.carb.calories;
            nutritionData.protein += currentMeal.carb.protein;
            nutritionData.fat += currentMeal.carb.fat;
            nutritionData.carbs += currentMeal.carb.carbs;
            
            // Add vegetable values
            currentMeal.vegetables.forEach(veg => {
                const vegetable = vegetableOptions[veg];
                nutritionData.calories += vegetable.calories;
                nutritionData.protein += vegetable.protein;
                nutritionData.fat += vegetable.fat;
                nutritionData.carbs += vegetable.carbs;
                nutritionData.ingredients.push(vegetable.name);
            });
            
            // Store in sessionStorage to pass to next page
            sessionStorage.setItem('mealNutritionData', JSON.stringify(nutritionData));
            
            // Proceed to next page
            window.location.href = 'nutrition';
        }

        // Initialize
        updateNutritionValues();
    </script>
</x-layout>