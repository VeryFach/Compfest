<x-layout title="Meat-Plant">
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="bg-gradient-to-r from-green-600 to-emerald-700 text-white rounded-lg shadow-lg p-6 mb-8">
            <h1 class="text-3xl font-bold mb-2">🥩 Meat-Plant Daily Production</h1>
            <p class="text-green-100">Daily meal preparation overview for all subscription plans</p>
        </div>

        <!-- Date Selector -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <h2 class="text-xl font-semibold text-gray-800">Select Production Date</h2>
                <div class="flex items-center gap-4">
                    <input type="date" id="production-date" 
                           class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                           value="{{ date('Y-m-d') }}">
                    <button onclick="loadProductionData()" 
                            class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-2 rounded-lg transition-colors duration-200">
                        Load Data
                    </button>
                </div>
            </div>
        </div>

        <!-- Production Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Diet Plan Card -->
            <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Diet Plan</h3>
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Rp 30,000/meal</span>
                </div>
                <div class="space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">🌅 Breakfast</span>
                        <span id="diet-breakfast" class="font-semibold text-gray-800">-</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">🌞 Lunch</span>
                        <span id="diet-lunch" class="font-semibold text-gray-800">-</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">🌙 Dinner</span>
                        <span id="diet-dinner" class="font-semibold text-gray-800">-</span>
                    </div>
                    <hr class="my-3">
                    <div class="flex justify-between items-center font-bold">
                        <span class="text-gray-800">Total Meals</span>
                        <span id="diet-total" class="text-blue-600">-</span>
                    </div>
                </div>
            </div>

            <!-- Protein Plan Card -->
            <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-orange-500">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Protein Plan</h3>
                    <span class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded">Rp 40,000/meal</span>
                </div>
                <div class="space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">🌅 Breakfast</span>
                        <span id="protein-breakfast" class="font-semibold text-gray-800">-</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">🌞 Lunch</span>
                        <span id="protein-lunch" class="font-semibold text-gray-800">-</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">🌙 Dinner</span>
                        <span id="protein-dinner" class="font-semibold text-gray-800">-</span>
                    </div>
                    <hr class="my-3">
                    <div class="flex justify-between items-center font-bold">
                        <span class="text-gray-800">Total Meals</span>
                        <span id="protein-total" class="text-orange-600">-</span>
                    </div>
                </div>
            </div>

            <!-- Royal Plan Card -->
            <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-purple-500">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Royal Plan</h3>
                    <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">Rp 60,000/meal</span>
                </div>
                <div class="space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">🌅 Breakfast</span>
                        <span id="royal-breakfast" class="font-semibold text-gray-800">-</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">🌞 Lunch</span>
                        <span id="royal-lunch" class="font-semibold text-gray-800">-</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">🌙 Dinner</span>
                        <span id="royal-dinner" class="font-semibold text-gray-800">-</span>
                    </div>
                    <hr class="my-3">
                    <div class="flex justify-between items-center font-bold">
                        <span class="text-gray-800">Total Meals</span>
                        <span id="royal-total" class="text-purple-600">-</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Overall Summary -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">📊 Daily Production Summary</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="text-3xl font-bold text-emerald-600" id="total-breakfast">-</div>
                    <div class="text-sm text-gray-600 mt-1">Total Breakfast</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-emerald-600" id="total-lunch">-</div>
                    <div class="text-sm text-gray-600 mt-1">Total Lunch</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-emerald-600" id="total-dinner">-</div>
                    <div class="text-sm text-gray-600 mt-1">Total Dinner</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-emerald-600" id="grand-total">-</div>
                    <div class="text-sm text-gray-600 mt-1">Grand Total</div>
                </div>
            </div>
        </div>

        <!-- Detailed Breakdown Table -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">📋 Detailed Production Breakdown</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Plan Type</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Breakfast</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lunch</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dinner</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Revenue</th>
                        </tr>
                    </thead>
                    <tbody id="production-table-body" class="bg-white divide-y divide-gray-200">
                        <!-- Data will be populated by JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Loading Spinner -->
        <div id="loading-spinner" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-lg p-6 flex items-center gap-4">
                <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-emerald-600"></div>
                <span class="text-gray-700">Loading production data...</span>
            </div>
        </div>
    </div>

    <script>
        // Sample data for demonstration - In real app, this would come from database
        const sampleProductionData = {
            'diet': {
                'breakfast': Math.floor(Math.random() * 50) + 20,
                'lunch': Math.floor(Math.random() * 60) + 30,
                'dinner': Math.floor(Math.random() * 45) + 25
            },
            'protein': {
                'breakfast': Math.floor(Math.random() * 40) + 15,
                'lunch': Math.floor(Math.random() * 55) + 25,
                'dinner': Math.floor(Math.random() * 50) + 20
            },
            'royal': {
                'breakfast': Math.floor(Math.random() * 30) + 10,
                'lunch': Math.floor(Math.random() * 35) + 15,
                'dinner': Math.floor(Math.random() * 40) + 18
            }
        };

        const planPrices = {
            'diet': 30000,
            'protein': 40000,
            'royal': 60000
        };

        function loadProductionData() {
            const loadingSpinner = document.getElementById('loading-spinner');
            loadingSpinner.classList.remove('hidden');

            // Simulate API call delay
            setTimeout(() => {
                updateProductionDisplay();
                loadingSpinner.classList.add('hidden');
            }, 1000);
        }

        function updateProductionDisplay() {
            const data = sampleProductionData;
            
            // Update individual plan cards
            Object.keys(data).forEach(plan => {
                const planData = data[plan];
                document.getElementById(`${plan}-breakfast`).textContent = planData.breakfast + ' meals';
                document.getElementById(`${plan}-lunch`).textContent = planData.lunch + ' meals';
                document.getElementById(`${plan}-dinner`).textContent = planData.dinner + ' meals';
                
                const total = planData.breakfast + planData.lunch + planData.dinner;
                document.getElementById(`${plan}-total`).textContent = total + ' meals';
            });

            // Update overall summary
            const totalBreakfast = data.diet.breakfast + data.protein.breakfast + data.royal.breakfast;
            const totalLunch = data.diet.lunch + data.protein.lunch + data.royal.lunch;
            const totalDinner = data.diet.dinner + data.protein.dinner + data.royal.dinner;
            const grandTotal = totalBreakfast + totalLunch + totalDinner;

            document.getElementById('total-breakfast').textContent = totalBreakfast;
            document.getElementById('total-lunch').textContent = totalLunch;
            document.getElementById('total-dinner').textContent = totalDinner;
            document.getElementById('grand-total').textContent = grandTotal;

            // Update detailed breakdown table
            updateProductionTable();
        }

        function updateProductionTable() {
            const tableBody = document.getElementById('production-table-body');
            const data = sampleProductionData;
            
            let tableHTML = '';
            
            Object.keys(data).forEach(plan => {
                const planData = data[plan];
                const total = planData.breakfast + planData.lunch + planData.dinner;
                const revenue = total * planPrices[plan];
                const planName = plan.charAt(0).toUpperCase() + plan.slice(1) + ' Plan';
                
                const borderColor = plan === 'diet' ? 'border-l-4 border-blue-500' : 
                                  plan === 'protein' ? 'border-l-4 border-orange-500' : 
                                  'border-l-4 border-purple-500';
                
                tableHTML += `
                    <tr class="hover:bg-gray-50 ${borderColor}">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${planName}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${planData.breakfast} meals</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${planData.lunch} meals</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${planData.dinner} meals</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">${total} meals</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-green-600">Rp ${revenue.toLocaleString('id-ID')}</td>
                    </tr>
                `;
            });
            
            tableBody.innerHTML = tableHTML;
        }

        function formatCurrency(amount) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(amount);
        }

        // Load initial data when page loads
        document.addEventListener('DOMContentLoaded', function() {
            loadProductionData();
        });

        // Auto-refresh data every 30 seconds (optional)
        setInterval(() => {
            // Generate new random data to simulate real-time updates
            Object.keys(sampleProductionData).forEach(plan => {
                sampleProductionData[plan].breakfast = Math.floor(Math.random() * 50) + 20;
                sampleProductionData[plan].lunch = Math.floor(Math.random() * 60) + 30;
                sampleProductionData[plan].dinner = Math.floor(Math.random() * 45) + 25;
            });
            updateProductionDisplay();
        }, 30000);
    </script>
</x-layout>