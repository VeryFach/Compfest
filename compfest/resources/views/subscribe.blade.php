<x-layout title="Berlangganan">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #1e40af 0%, #1e3a8a 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .checkbox-custom {
            appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #d1d5db;
            border-radius: 4px;
            position: relative;
            cursor: pointer;
        }
        .checkbox-custom:checked {
            background-color: #3b82f6;
            border-color: #3b82f6;
        }
        .checkbox-custom:checked::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 14px;
            font-weight: bold;
        }
        .price-display {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 1rem;
            border-radius: 0.5rem;
            font-size: 1.25rem;
            font-weight: bold;
            text-align: center;
            margin-top: 1rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .error-message {
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
        .plan-card {
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }
        .plan-card.selected {
            border-color: #3b82f6;
            background-color: #eff6ff;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Hero Section -->
    <section class="gradient-bg py-16 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Berlangganan SEA Catering</h1>
                <p class="text-xl text-blue-100 mb-8">Nikmati makanan sehat berkualitas tinggi dengan sistem berlangganan yang fleksibel</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                    <div class="bg-white/10 rounded-lg p-4">
                        <div class="text-3xl mb-2">🍽️</div>
                        <h3 class="font-semibold">Makanan Berkualitas</h3>
                        <p class="text-sm text-blue-100">Bahan segar dan bergizi</p>
                    </div>
                    <div class="bg-white/10 rounded-lg p-4">
                        <div class="text-3xl mb-2">🚚</div>
                        <h3 class="font-semibold">Pengiriman Tepat Waktu</h3>
                        <p class="text-sm text-blue-100">Antar langsung ke lokasi Anda</p>
                    </div>
                    <div class="bg-white/10 rounded-lg p-4">
                        <div class="text-3xl mb-2">💰</div>
                        <h3 class="font-semibold">Harga Terjangkau</h3>
                        <p class="text-sm text-blue-100">Paket berlangganan hemat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscription Form -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="gradient-bg px-6 py-4 text-white">
                        <h2 class="text-2xl font-bold">Form Berlangganan</h2>
                        <p class="text-blue-100">Isi form di bawah untuk memulai berlangganan</p>
                    </div>
                    
                    <form id="subscriptionForm" class="p-8 space-y-8">
                        <!-- Personal Information -->
                        <div class="space-y-6">
                            <h3 class="text-xl font-semibold text-gray-800 border-b pb-2">Informasi Pribadi</h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="fullName" class="block text-sm font-medium text-gray-700 mb-2">
                                        Nama Lengkap <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="fullName" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                        required
                                        placeholder="Masukkan nama lengkap Anda"
                                    >
                                    <div class="error-message" id="fullNameError"></div>
                                </div>
                                
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                        Nomor Telepon Aktif <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="tel" 
                                        id="phone" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                        required
                                        placeholder="08123456789"
                                        pattern="[0-9]{10,13}"
                                    >
                                    <div class="error-message" id="phoneError"></div>
                                </div>
                            </div>

                            <div>
                                <label for="allergies" class="block text-sm font-medium text-gray-700 mb-2">
                                    Alergi / Pantangan Makanan
                                </label>
                                <textarea 
                                    id="allergies" 
                                    rows="3"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                    placeholder="Contoh: Alergi kacang, tidak bisa pedas, vegetarian, dll."
                                ></textarea>
                            </div>
                        </div>

                        <!-- Plan Selection -->
                        <div class="space-y-6">
                            <h3 class="text-xl font-semibold text-gray-800 border-b pb-2">Pilih Paket <span class="text-red-500">*</span></h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="plan-card bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 cursor-pointer" data-plan="diet" data-price="30000">
                                    <div class="text-center">
                                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                            <span class="text-2xl text-white">🥗</span>
                                        </div>
                                        <h4 class="text-xl font-bold text-gray-800 mb-2">Diet Plan</h4>
                                        <div class="text-2xl font-bold text-green-600 mb-2">Rp 30.000</div>
                                        <p class="text-sm text-gray-600 mb-4">per makanan</p>
                                        <ul class="text-sm text-gray-600 space-y-1">
                                            <li>• Rendah kalori</li>
                                            <li>• Sayuran segar</li>
                                            <li>• Protein lean</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="plan-card bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 cursor-pointer" data-plan="protein" data-price="40000">
                                    <div class="text-center">
                                        <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                            <span class="text-2xl text-white">🍖</span>
                                        </div>
                                        <h4 class="text-xl font-bold text-gray-800 mb-2">Protein Plan</h4>
                                        <div class="text-2xl font-bold text-blue-600 mb-2">Rp 40.000</div>
                                        <p class="text-sm text-gray-600 mb-4">per makanan</p>
                                        <ul class="text-sm text-gray-600 space-y-1">
                                            <li>• High protein</li>
                                            <li>• Daging berkualitas</li>
                                            <li>• Fitness friendly</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="plan-card bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 cursor-pointer" data-plan="royal" data-price="60000">
                                    <div class="text-center">
                                        <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                            <span class="text-2xl text-white">👑</span>
                                        </div>
                                        <h4 class="text-xl font-bold text-gray-800 mb-2">Royal Plan</h4>
                                        <div class="text-2xl font-bold text-purple-600 mb-2">Rp 60.000</div>
                                        <p class="text-sm text-gray-600 mb-4">per makanan</p>
                                        <ul class="text-sm text-gray-600 space-y-1">
                                            <li>• Premium ingredients</li>
                                            <li>• Gourmet style</li>
                                            <li>• Luxury experience</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="error-message" id="planError"></div>
                        </div>

                        <!-- Meal Types -->
                        <div class="space-y-6">
                            <h3 class="text-xl font-semibold text-gray-800 border-b pb-2">Jenis Makanan <span class="text-red-500">*</span></h3>
                            <p class="text-gray-600">Pilih minimal satu jenis makanan</p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                    <input type="checkbox" class="checkbox-custom mr-3" name="mealType" value="breakfast">
                                    <div class="flex items-center">
                                        <span class="text-2xl mr-3">🌅</span>
                                        <span class="font-medium">Sarapan</span>
                                    </div>
                                </label>
                                
                                <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                    <input type="checkbox" class="checkbox-custom mr-3" name="mealType" value="lunch">
                                    <div class="flex items-center">
                                        <span class="text-2xl mr-3">☀️</span>
                                        <span class="font-medium">Makan Siang</span>
                                    </div>
                                </label>
                                
                                <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                    <input type="checkbox" class="checkbox-custom mr-3" name="mealType" value="dinner">
                                    <div class="flex items-center">
                                        <span class="text-2xl mr-3">🌙</span>
                                        <span class="font-medium">Makan Malam</span>
                                    </div>
                                </label>
                            </div>
                            <div class="error-message" id="mealTypeError"></div>
                        </div>

                        <!-- Delivery Days -->
                        <div class="space-y-6">
                            <h3 class="text-xl font-semibold text-gray-800 border-b pb-2">Hari Pengiriman <span class="text-red-500">*</span></h3>
                            <p class="text-gray-600">Pilih hari-hari untuk pengiriman makanan</p>
                            
                            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-3">
                                <label class="flex flex-col items-center p-3 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                    <input type="checkbox" class="checkbox-custom mb-2" name="deliveryDay" value="monday">
                                    <span class="text-sm font-medium">Senin</span>
                                </label>
                                
                                <label class="flex flex-col items-center p-3 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                    <input type="checkbox" class="checkbox-custom mb-2" name="deliveryDay" value="tuesday">
                                    <span class="text-sm font-medium">Selasa</span>
                                </label>
                                
                                <label class="flex flex-col items-center p-3 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                    <input type="checkbox" class="checkbox-custom mb-2" name="deliveryDay" value="wednesday">
                                    <span class="text-sm font-medium">Rabu</span>
                                </label>
                                
                                <label class="flex flex-col items-center p-3 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                    <input type="checkbox" class="checkbox-custom mb-2" name="deliveryDay" value="thursday">
                                    <span class="text-sm font-medium">Kamis</span>
                                </label>
                                
                                <label class="flex flex-col items-center p-3 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                    <input type="checkbox" class="checkbox-custom mb-2" name="deliveryDay" value="friday">
                                    <span class="text-sm font-medium">Jumat</span>
                                </label>
                                
                                <label class="flex flex-col items-center p-3 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                    <input type="checkbox" class="checkbox-custom mb-2" name="deliveryDay" value="saturday">
                                    <span class="text-sm font-medium">Sabtu</span>
                                </label>
                                
                                <label class="flex flex-col items-center p-3 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                    <input type="checkbox" class="checkbox-custom mb-2" name="deliveryDay" value="sunday">
                                    <span class="text-sm font-medium">Minggu</span>
                                </label>
                            </div>
                            <div class="error-message" id="deliveryDayError"></div>
                        </div>

                        <!-- Price Calculator -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Kalkulasi Harga</h3>
                            <div class="space-y-3 text-sm text-gray-600">
                                <div class="flex justify-between">
                                    <span>Paket yang dipilih:</span>
                                    <span id="selectedPlanDisplay">-</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Jumlah jenis makanan:</span>
                                    <span id="mealTypesCount">0</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Jumlah hari pengiriman:</span>
                                    <span id="deliveryDaysCount">0</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Minggu per bulan:</span>
                                    <span>4.3</span>
                                </div>
                                <hr class="my-3">
                                <div class="flex justify-between font-medium">
                                    <span>Rumus:</span>
                                    <span id="calculationFormula">Harga × Jenis × Hari × 4.3</span>
                                </div>
                            </div>
                            <div class="price-display" id="totalPrice">
                                Rp 0
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-6 border-t">
                            <button 
                                type="submit" 
                                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold py-4 px-6 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl"
                                id="submitBtn"
                            >
                                <span class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Mulai Berlangganan
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Modal -->
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-xl p-8 max-w-md mx-4 text-center">
            <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Berlangganan Berhasil!</h3>
            <p class="text-gray-600 mb-6">Terima kasih telah berlangganan SEA Catering. Tim kami akan menghubungi Anda segera untuk konfirmasi.</p>
            <button onclick="closeModal()" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                Tutup
            </button>
        </div>
    </div>

    @push('scripts')
    <script>
        // State variables
        let selectedPlan = null;
        let selectedPlanPrice = 0;
        let selectedMealTypes = [];
        let selectedDeliveryDays = [];

        // Plan data
        const plans = {
            diet: { name: 'Diet Plan', price: 30000 },
            protein: { name: 'Protein Plan', price: 40000 },
            royal: { name: 'Royal Plan', price: 60000 }
        };

        // Initialize form
        document.addEventListener('DOMContentLoaded', function() {
            setupEventListeners();
            calculatePrice();
        });

        function setupEventListeners() {
            // Plan selection
            document.querySelectorAll('.plan-card').forEach(card => {
                card.addEventListener('click', function() {
                    selectPlan(this);
                });
            });

            // Meal type checkboxes
            document.querySelectorAll('input[name="mealType"]').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    updateMealTypes();
                    calculatePrice();
                });
            });

            // Delivery day checkboxes
            document.querySelectorAll('input[name="deliveryDay"]').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    updateDeliveryDays();
                    calculatePrice();
                });
            });

            // Form submission
            document.getElementById('subscriptionForm').addEventListener('submit', handleSubmit);

            // Real-time validation
            document.getElementById('fullName').addEventListener('blur', validateName);
            document.getElementById('phone').addEventListener('blur', validatePhone);
        }

        function selectPlan(planCard) {
            // Remove previous selection
            document.querySelectorAll('.plan-card').forEach(card => {
                card.classList.remove('selected');
            });

            // Add selection to clicked card
            planCard.classList.add('selected');

            // Update selected plan
            selectedPlan = planCard.dataset.plan;
            selectedPlanPrice = parseInt(planCard.dataset.price);

            // Update display
            updatePlanDisplay();
            calculatePrice();
            clearError('planError');
        }

        function updateMealTypes() {
            selectedMealTypes = [];
            document.querySelectorAll('input[name="mealType"]:checked').forEach(checkbox => {
                selectedMealTypes.push(checkbox.value);
            });
            
            document.getElementById('mealTypesCount').textContent = selectedMealTypes.length;
            clearError('mealTypeError');
        }

        function updateDeliveryDays() {
            selectedDeliveryDays = [];
            document.querySelectorAll('input[name="deliveryDay"]:checked').forEach(checkbox => {
                selectedDeliveryDays.push(checkbox.value);
            });
            
            document.getElementById('deliveryDaysCount').textContent = selectedDeliveryDays.length;
            clearError('deliveryDayError');
        }

        function updatePlanDisplay() {
            const planDisplay = document.getElementById('selectedPlanDisplay');
            if (selectedPlan) {
                planDisplay.textContent = `${plans[selectedPlan].name} (Rp ${selectedPlanPrice.toLocaleString('id-ID')})`;
            } else {
                planDisplay.textContent = '-';
            }
        }

        function calculatePrice() {
            const mealTypesCount = selectedMealTypes.length;
            const deliveryDaysCount = selectedDeliveryDays.length;
            const weekMultiplier = 4.3;

            let totalPrice = 0;
            if (selectedPlanPrice > 0 && mealTypesCount > 0 && deliveryDaysCount > 0) {
                totalPrice = selectedPlanPrice * mealTypesCount * deliveryDaysCount * weekMultiplier;
            }

            // Update price display
            document.getElementById('totalPrice').textContent = `Rp ${Math.round(totalPrice).toLocaleString('id-ID')}`;
            
            // Update formula display
            const formula = `${selectedPlanPrice.toLocaleString('id-ID')} × ${mealTypesCount} × ${deliveryDaysCount} × 4.3`;
            document.getElementById('calculationFormula').textContent = formula;
        }

        function validateName() {
            const nameInput = document.getElementById('fullName');
            const name = nameInput.value.trim();
            
            if (name.length < 2) {
                showError('fullNameError', 'Nama harus terdiri dari minimal 2 karakter');
                return false;
            }
            
            clearError('fullNameError');
            return true;
        }

        function validatePhone() {
            const phoneInput = document.getElementById('phone');
            const phone = phoneInput.value.trim();
            const phoneRegex = /^[0-9]{10,13}$/;
            
            if (!phoneRegex.test(phone)) {
                showError('phoneError', 'Nomor telepon harus terdiri dari 10-13 digit angka');
                return false;
            }
            
            clearError('phoneError');
            return true;
        }

        function validateForm() {
            let isValid = true;

            // Validate name
            if (!validateName()) {
                isValid = false;
            }

            // Validate phone
            if (!validatePhone()) {
                isValid = false;
            }

            // Validate plan selection
            if (!selectedPlan) {
                showError('planError', 'Silakan pilih salah satu paket berlangganan');
                isValid = false;
            }

            // Validate meal types
            if (selectedMealTypes.length === 0) {
                showError('mealTypeError', 'Silakan pilih minimal satu jenis makanan');
                isValid = false;
            }

            // Validate delivery days
            if (selectedDeliveryDays.length === 0) {
                showError('deliveryDayError', 'Silakan pilih minimal satu hari pengiriman');
                isValid = false;
            }

            return isValid;
        }

        function handleSubmit(e) {
            e.preventDefault();

            if (!validateForm()) {
                // Scroll to first error
                const firstError = document.querySelector('.error-message:not(:empty)');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
                return;
            }

            // Show loading state
            const submitBtn = document.getElementById('submitBtn');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = `
                <span class="flex items-center justify-center">
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Memproses...
                </span>
            `;
            submitBtn.disabled = true;

            // Simulate form submission
            setTimeout(() => {
                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;

                // Show success modal
                document.getElementById('successModal').classList.remove('hidden');

                // Reset form
                document.getElementById('subscriptionForm').reset();
                resetFormState();
            }, 2000);
        }

        function resetFormState() {
            selectedPlan = null;
            selectedPlanPrice = 0;
            selectedMealTypes = [];
            selectedDeliveryDays = [];

            // Reset visual states
            document.querySelectorAll('.plan-card').forEach(card => {
                card.classList.remove('selected');
            });

            // Reset displays
            updatePlanDisplay();
            document.getElementById('mealTypesCount').textContent = '0';
            document.getElementById('deliveryDaysCount').textContent = '0';
            calculatePrice();

            // Clear all errors
            document.querySelectorAll('.error-message').forEach(error => {
                error.textContent = '';
            });
        }

        function showError(elementId, message) {
            document.getElementById(elementId).textContent = message;
        }

        function clearError(elementId) {
            document.getElementById(elementId).textContent = '';
        }

        function closeModal() {
            document.getElementById('successModal').classList.add('hidden');
        }

        // Close modal when clicking outside
        document.getElementById('successModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>
    @endpush
</x-layout>