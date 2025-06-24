<x-layout title="Berlangganan">
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Berlangganan - SEA Catering</title>
        <script src="https://cdn.tailwindcss.com"></script>
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
            .loading-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 9999;
            }
            .spinner {
                width: 40px;
                height: 40px;
                border: 4px solid #f3f4f6;
                border-top: 4px solid #3b82f6;
                border-radius: 50%;
                animation: spin 1s linear infinite;
            }
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
            .alert {
                padding: 1rem;
                border-radius: 0.5rem;
                margin-bottom: 1rem;
                border: 1px solid transparent;
            }
            .alert-success {
                background-color: #d1fae5;
                border-color: #a7f3d0;
                color: #065f46;
            }
            .alert-error {
                background-color: #fee2e2;
                border-color: #fecaca;
                color: #991b1b;
            }
            .fade-in {
                animation: fadeIn 0.3s ease-in;
            }
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(-10px); }
                to { opacity: 1; transform: translateY(0); }
            }
        </style>
    </head>
    <body class="bg-gray-50">
        <!-- Loading Overlay -->
        <div id="loadingOverlay" class="loading-overlay hidden">
            <div class="bg-white rounded-lg p-6 text-center">
                <div class="spinner mx-auto mb-4"></div>
                <p class="text-gray-600">Memproses data...</p>
            </div>
        </div>

        <!-- Alert Container -->
        <div id="alertContainer" class="fixed top-4 right-4 z-50 max-w-md"></div>

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
                                            name="full_name"
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
                                            name="phone"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                            required
                                            placeholder="08123456789"
                                            pattern="[0-9]{10,13}"
                                        >
                                        <div class="error-message" id="phoneError"></div>
                                    </div>
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                        Email
                                    </label>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        name="email"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                        placeholder="contoh@email.com"
                                    >
                                    <div class="error-message" id="emailError"></div>
                                </div>

                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
                                        Alamat Pengiriman <span class="text-red-500">*</span>
                                    </label>
                                    <textarea 
                                        id="address" 
                                        name="address"
                                        rows="3"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                        required
                                        placeholder="Masukkan alamat lengkap untuk pengiriman"
                                    ></textarea>
                                    <div class="error-message" id="addressError"></div>
                                </div>

                                <div>
                                    <label for="allergies" class="block text-sm font-medium text-gray-700 mb-2">
                                        Alergi / Pantangan Makanan
                                    </label>
                                    <textarea 
                                        id="allergies" 
                                        name="allergies"
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

                            <!-- Delivery Time -->
                            <div class="space-y-6">
                                <h3 class="text-xl font-semibold text-gray-800 border-b pb-2">Waktu Pengiriman</h3>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="deliveryTime" class="block text-sm font-medium text-gray-700 mb-2">
                                            Jam Pengiriman Diinginkan
                                        </label>
                                        <select 
                                            id="deliveryTime" 
                                            name="delivery_time"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                        >
                                            <option value="">Pilih waktu pengiriman</option>
                                            <option value="07:00-09:00">07:00 - 09:00</option>
                                            <option value="09:00-11:00">09:00 - 11:00</option>
                                            <option value="11:00-13:00">11:00 - 13:00</option>
                                            <option value="13:00-15:00">13:00 - 15:00</option>
                                            <option value="15:00-17:00">15:00 - 17:00</option>
                                            <option value="17:00-19:00">17:00 - 19:00</option>
                                        </select>
                                    </div>
                                    
                                    <div>
                                        <label for="startDate" class="block text-sm font-medium text-gray-700 mb-2">
                                            Tanggal Mulai Berlangganan
                                        </label>
                                        <input 
                                            type="date" 
                                            id="startDate" 
                                            name="start_date"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                        >
                                    </div>
                                </div>
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
                                    class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold py-4 px-6 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl disabled:opacity-50 disabled:cursor-not-allowed"
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
            // API Configuration
            const API_CONFIG = {
                BASE_URL: '/api/subscriptions',
                CSRF_TOKEN: document.querySelector('meta[name="csrf-token"]')?.content || '',
                HEADERS: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                }
            };

            // Subscription Plans Data
            const PLANS = {
                diet: { name: 'Diet Plan', price: 30000 },
                protein: { name: 'Protein Plan', price: 40000 },
                royal: { name: 'Royal Plan', price: 60000 }
            };

            // Application State
            const AppState = {
                selectedPlan: null,
                selectedMealTypes: [],
                selectedDeliveryDays: [],
                isSubmitting: false,

                reset() {
                    this.selectedPlan = null;
                    this.selectedMealTypes = [];
                    this.selectedDeliveryDays = [];
                    this.isSubmitting = false;
                },

                updatePlan(plan) {
                    this.selectedPlan = plan;
                },

                updateMealTypes() {
                    this.selectedMealTypes = Array.from(
                        document.querySelectorAll('input[name="mealType"]:checked')
                    ).map(cb => cb.value);
                },

                updateDeliveryDays() {
                    this.selectedDeliveryDays = Array.from(
                        document.querySelectorAll('input[name="deliveryDay"]:checked')
                    ).map(cb => cb.value);
                },

                getSelectedPlanPrice() {
                    return this.selectedPlan ? PLANS[this.selectedPlan].price : 0;
                }
            };

            // DOM Elements
            const DOM = {
                loadingOverlay: document.getElementById('loadingOverlay'),
                alertContainer: document.getElementById('alertContainer'),
                successModal: document.getElementById('successModal'),
                subscriptionForm: document.getElementById('subscriptionForm'),
                planCards: document.querySelectorAll('.plan-card'),
                mealTypeCheckboxes: document.querySelectorAll('input[name="mealType"]'),
                deliveryDayCheckboxes: document.querySelectorAll('input[name="deliveryDay"]'),
                startDateInput: document.getElementById('startDate'),
                priceDisplayElements: {
                    selectedPlan: document.getElementById('selectedPlanDisplay'),
                    mealTypesCount: document.getElementById('mealTypesCount'),
                    deliveryDaysCount: document.getElementById('deliveryDaysCount'),
                    totalPrice: document.getElementById('totalPrice')
                }
            };

            // Utility Functions
            const Utils = {
                formatCurrency(amount) {
                    return new Intl.NumberFormat('id-ID', {
                        style: 'currency',
                        currency: 'IDR',
                        minimumFractionDigits: 0
                    }).format(amount);
                },

                showElement(element) {
                    element.classList.remove('hidden');
                },

                hideElement(element) {
                    element.classList.add('hidden');
                },

                validatePhone(phone) {
                    return /^[0-9]{10,13}$/.test(phone);
                }
            };

            // UI Functions
            const UI = {
                showLoading() {
                    DOM.loadingOverlay.style.display = 'flex';
                },

                hideLoading() {
                    DOM.loadingOverlay.style.display = 'none';
                },

                showAlert(message, type = 'success') {
                    const alertId = `alert-${Date.now()}`;
                    const alertElement = document.createElement('div');
                    
                    alertElement.id = alertId;
                    alertElement.className = `alert alert-${type} fade-in mb-4`;
                    alertElement.innerHTML = `
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                ${type === 'success' ? 
                                    '<svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>' :
                                    '<svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>'}
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium">${message}</p>
                            </div>
                            <div class="ml-auto pl-3">
                                <button onclick="document.getElementById('${alertId}').remove()" class="text-gray-500 hover:text-gray-700">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    `;
                    
                    DOM.alertContainer.appendChild(alertElement);
                    
                    setTimeout(() => {
                        const alert = document.getElementById(alertId);
                        if (alert) alert.remove();
                    }, 5000);
                },

                showSuccessModal() {
                    Utils.showElement(DOM.successModal);
                },

                closeSuccessModal() {
                    Utils.hideElement(DOM.successModal);
                },

                updatePriceDisplay() {
                    const price = AppState.getSelectedPlanPrice();
                    const mealTypesCount = AppState.selectedMealTypes.length;
                    const deliveryDaysCount = AppState.selectedDeliveryDays.length;
                    const weeksPerMonth = 4.3;
                    
                    // Update display elements
                    DOM.priceDisplayElements.selectedPlan.textContent = 
                        AppState.selectedPlan ? PLANS[AppState.selectedPlan].name : '-';
                    
                    DOM.priceDisplayElements.mealTypesCount.textContent = mealTypesCount;
                    DOM.priceDisplayElements.deliveryDaysCount.textContent = deliveryDaysCount;
                    
                    // Calculate and display total price
                    if (price > 0 && mealTypesCount > 0 && deliveryDaysCount > 0) {
                        const totalPrice = price * mealTypesCount * deliveryDaysCount * weeksPerMonth;
                        DOM.priceDisplayElements.totalPrice.textContent = Utils.formatCurrency(totalPrice);
                    } else {
                        DOM.priceDisplayElements.totalPrice.textContent = Utils.formatCurrency(0);
                    }
                },

                clearErrors() {
                    document.querySelectorAll('.error-message').forEach(el => {
                        el.textContent = '';
                    });
                },

                showError(fieldId, message) {
                    const errorElement = document.getElementById(`${fieldId}Error`);
                    if (errorElement) {
                        errorElement.textContent = message;
                    }
                },

                validateForm() {
                    let isValid = true;
                    
                    this.clearErrors();
                    
                    // Validate required fields
                    if (!document.getElementById('fullName').value.trim()) {
                        this.showError('fullName', 'Nama lengkap wajib diisi');
                        isValid = false;
                    }
                    
                    const phoneValue = document.getElementById('phone').value.trim();
                    if (!phoneValue) {
                        this.showError('phone', 'Nomor telepon wajib diisi');
                        isValid = false;
                    } else if (!Utils.validatePhone(phoneValue)) {
                        this.showError('phone', 'Nomor telepon harus 10-13 digit angka');
                        isValid = false;
                    }
                    
                    if (!document.getElementById('address').value.trim()) {
                        this.showError('address', 'Alamat pengiriman wajib diisi');
                        isValid = false;
                    }
                    
                    if (!AppState.selectedPlan) {
                        this.showError('plan', 'Pilih paket berlangganan');
                        isValid = false;
                    }
                    
                    if (AppState.selectedMealTypes.length === 0) {
                        this.showError('mealType', 'Pilih minimal satu jenis makanan');
                        isValid = false;
                    }
                    
                    if (AppState.selectedDeliveryDays.length === 0) {
                        this.showError('deliveryDay', 'Pilih minimal satu hari pengiriman');
                        isValid = false;
                    }
                    
                    return isValid;
                },

                resetForm() {
                    DOM.subscriptionForm.reset();
                    AppState.reset();
                    this.updatePriceDisplay();
                    
                    // Reset plan card selections
                    DOM.planCards.forEach(card => {
                        card.classList.remove('selected');
                    });
                }
            };

            // API Functions
            const ApiService = {
                async postSubscription(data) {
                    try {
                        const response = await fetch(API_CONFIG.BASE_URL, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify(data)
                        });

                        if (!response.ok) {
                            const errorData = await response.json();
                            throw new Error(errorData.message || 'Request failed');
                        }

                        return await response.json();
                    } catch (error) {
                        console.error('API Error:', error);
                        throw error; // Re-throw error untuk ditangkap oleh caller
                    }
                }
            };

            // Event Handlers
            function handlePlanSelection(event) {
                const planCard = event.currentTarget;
                const plan = planCard.dataset.plan;
                
                // Update UI
                DOM.planCards.forEach(card => {
                    card.classList.remove('selected');
                });
                planCard.classList.add('selected');
                
                // Update state
                AppState.updatePlan(plan);
                
                // Update price display
                UI.updatePriceDisplay();
            }

            function handleMealTypeChange() {
                AppState.updateMealTypes();
                UI.updatePriceDisplay();
            }

            function handleDeliveryDayChange() {
                AppState.updateDeliveryDays();
                UI.updatePriceDisplay();
            }

            async function handleFormSubmit(event) {
                event.preventDefault();
                
                if (!UI.validateForm()) return;
                
                const formData = {
                    full_name: document.getElementById('fullName').value.trim(),
                    phone: document.getElementById('phone').value.trim(),
                    email: document.getElementById('email').value.trim() || null,
                    address: document.getElementById('address').value.trim(),
                    allergies: document.getElementById('allergies').value.trim() || null,
                    plan: AppState.selectedPlan,
                    meal_types: AppState.selectedMealTypes,
                    delivery_days: AppState.selectedDeliveryDays,
                    delivery_time: document.getElementById('deliveryTime').value || null,
                    start_date: document.getElementById('startDate').value || null
                };
                
                try {
                    AppState.isSubmitting = true;
                    UI.showLoading();
                    
                    const response = await ApiService.postSubscription(formData);
                    
                    if (!response.success) {
                        throw new Error(response.error || 'Unknown error');
                    }
                    
                    UI.showSuccessModal();
                    UI.resetForm();
                    
                } catch (error) {
                    console.error('Submission error:', error);
                    UI.showAlert(error.message || 'Terjadi kesalahan saat mengirim data. Silakan coba lagi.', 'error');
                } finally {
                    AppState.isSubmitting = false;
                    UI.hideLoading();
                }
            }

            // Initialize Application
            function init() {
                // Set minimum date for start date (today)
                const today = new Date().toISOString().split('T')[0];
                DOM.startDateInput.min = today;
                
                // Add event listeners
                DOM.planCards.forEach(card => {
                    card.addEventListener('click', handlePlanSelection);
                });
                
                DOM.mealTypeCheckboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', handleMealTypeChange);
                });
                
                DOM.deliveryDayCheckboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', handleDeliveryDayChange);
                });
                
                DOM.subscriptionForm.addEventListener('submit', handleFormSubmit);
            }

            // Global functions for modal
            window.closeModal = function() {
                UI.closeSuccessModal();
            };

            // Initialize when DOM is loaded
            document.addEventListener('DOMContentLoaded', init);
        </script>
        @endpush
    </body>
    </html>
</x-layout>