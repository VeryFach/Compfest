<x-layout title="Berlangganan">
    @php
        $plans = [
            'basic' => [
                'name' => 'Paket Basic',
                'price' => 25000,
                'icon' => '🍚',
                'color' => 'blue',
                'features' => [
                    'Nasi putih',
                    'Lauk utama',
                    'Sayur',
                    'Buah/sambal'
                ]
            ],
            'premium' => [
                'name' => 'Paket Premium',
                'price' => 35000,
                'icon' => '🍛',
                'color' => 'purple',
                'features' => [
                    'Nasi putih/merah',
                    'Lauk utama',
                    'Lauk pendamping',
                    'Sayur',
                    'Buah',
                    'Kerupuk'
                ]
            ],
            'executive' => [
                'name' => 'Paket Executive',
                'price' => 45000,
                'icon' => '🍱',
                'color' => 'green',
                'features' => [
                    'Nasi putih/merah',
                    'Lauk utama premium',
                    'Lauk pendamping',
                    'Sayur',
                    'Buah',
                    'Kerupuk',
                    'Es teh/jus'
                ]
            ]
        ];

        $mealTypes = [
            'breakfast' => ['name' => 'Sarapan', 'icon' => '☕'],
            'lunch' => ['name' => 'Makan Siang', 'icon' => '🍲'],
            'dinner' => ['name' => 'Makan Malam', 'icon' => '🍛']
        ];

        $deliveryDays = [
            'monday' => 'Senin',
            'tuesday' => 'Selasa',
            'wednesday' => 'Rabu',
            'thursday' => 'Kamis',
            'friday' => 'Jumat',
            'saturday' => 'Sabtu',
            'sunday' => 'Minggu'
        ];
    @endphp
    
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
                        
                        <form id="subscriptionForm" class="p-8 space-y-8" action="{{ route('subscriptions.store') }}" method="POST">
                            @csrf
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
                                            value="{{ old('full_name') }}"
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
                                            value="{{ old('phone') }}"
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
                                        value="{{ old('email') }}"
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
                                    >{{ old('address') }}</textarea>
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
                                    >{{ old('allergies') }}</textarea>
                                </div>
                            </div>

                            <!-- Plan Selection -->
                            <div class="space-y-6">
                                <h3 class="text-xl font-semibold text-gray-800 border-b pb-2">Pilih Paket <span class="text-red-500">*</span></h3>
                                
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                    @foreach($plans as $planKey => $plan)
                                    <div class="plan-card bg-gradient-to-br from-{{ $plan['color'] }}-50 to-{{ $plan['color'] }}-100 rounded-xl p-6 cursor-pointer" 
                                         data-plan="{{ $planKey }}" 
                                         data-price="{{ $plan['price'] }}">
                                        <div class="text-center">
                                            <div class="w-16 h-16 bg-{{ $plan['color'] }}-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                                <span class="text-2xl text-white">{{ $plan['icon'] }}</span>
                                            </div>
                                            <h4 class="text-xl font-bold text-gray-800 mb-2">{{ $plan['name'] }}</h4>
                                            <div class="text-2xl font-bold text-{{ $plan['color'] }}-600 mb-2">Rp {{ number_format($plan['price'], 0, ',', '.') }}</div>
                                            <p class="text-sm text-gray-600 mb-4">per makanan</p>
                                            <ul class="text-sm text-gray-600 space-y-1">
                                                @foreach($plan['features'] as $feature)
                                                <li>• {{ $feature }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <input type="hidden" id="selectedPlan" name="plan" value="{{ old('plan') }}">
                                <div class="error-message" id="planError"></div>
                            </div>

                            <!-- Meal Types -->
                            <div class="space-y-6">
                                <h3 class="text-xl font-semibold text-gray-800 border-b pb-2">Jenis Makanan <span class="text-red-500">*</span></h3>
                                <p class="text-gray-600">Pilih minimal satu jenis makanan</p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    @foreach($mealTypes as $mealKey => $mealType)
                                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                        <input type="checkbox" 
                                               class="checkbox-custom mr-3" 
                                               name="meal_types[]" 
                                               value="{{ $mealKey }}"
                                               @if(in_array($mealKey, old('meal_types', []))) checked @endif>
                                        <div class="flex items-center">
                                            <span class="text-2xl mr-3">{{ $mealType['icon'] }}</span>
                                            <span class="font-medium">{{ $mealType['name'] }}</span>
                                        </div>
                                    </label>
                                    @endforeach
                                </div>
                                <div class="error-message" id="mealTypeError"></div>
                            </div>

                            <!-- Delivery Days -->
                            <div class="space-y-6">
                                <h3 class="text-xl font-semibold text-gray-800 border-b pb-2">Hari Pengiriman <span class="text-red-500">*</span></h3>
                                <p class="text-gray-600">Pilih hari-hari untuk pengiriman makanan</p>
                                
                                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-3">
                                    @foreach($deliveryDays as $dayKey => $dayName)
                                    <label class="flex flex-col items-center p-3 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                        <input type="checkbox" 
                                               class="checkbox-custom mb-2" 
                                               name="delivery_days[]" 
                                               value="{{ $dayKey }}"
                                               @if(in_array($dayKey, old('delivery_days', []))) checked @endif>
                                        <span class="text-sm font-medium">{{ $dayName }}</span>
                                    </label>
                                    @endforeach
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
                                            <option value="07:00-09:00" @if(old('delivery_time') == '07:00-09:00')) selected @endif>07:00 - 09:00</option>
                                            <option value="09:00-11:00" @if(old('delivery_time') == '09:00-11:00')) selected @endif>09:00 - 11:00</option>
                                            <option value="11:00-13:00" @if(old('delivery_time') == '11:00-13:00')) selected @endif>11:00 - 13:00</option>
                                            <option value="13:00-15:00" @if(old('delivery_time') == '13:00-15:00')) selected @endif>13:00 - 15:00</option>
                                            <option value="15:00-17:00" @if(old('delivery_time') == '15:00-17:00')) selected @endif>15:00 - 17:00</option>
                                            <option value="17:00-19:00" @if(old('delivery_time') == '17:00-19:00')) selected @endif>17:00 - 19:00</option>
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
                                            value="{{ old('start_date') }}"
                                            min="{{ date('Y-m-d') }}"
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
                BASE_URL: '/subscriptions',  // Simplified URL
                CALCULATE_URL: '/subscriptions/calculate-price',
                CSRF_TOKEN: document.querySelector('meta[name="csrf-token"]')?.content || '',
                HEADERS: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                }
            };

            console.log('Before fetch');
            const response = await fetch(...);
            console.log('After fetch', response);

            // Subscription Plans Data
            const PLANS = @json($plans);

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
                    document.getElementById('selectedPlan').value = plan;
                },

                updateMealTypes() {
                    this.selectedMealTypes = Array.from(
                        document.querySelectorAll('input[name="meal_types[]"]:checked')
                    ).map(cb => cb.value);
                },

                updateDeliveryDays() {
                    this.selectedDeliveryDays = Array.from(
                        document.querySelectorAll('input[name="delivery_days[]"]:checked')
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
                mealTypeCheckboxes: document.querySelectorAll('input[name="meal_types[]"]'),
                deliveryDayCheckboxes: document.querySelectorAll('input[name="delivery_days[]"]'),
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

                async updatePriceDisplay() {
                    if (!AppState.selectedPlan || 
                        AppState.selectedMealTypes.length === 0 || 
                        AppState.selectedDeliveryDays.length === 0) {
                        DOM.priceDisplayElements.totalPrice.textContent = 'Rp 0';
                        return;
                    }

                    try {
                        const response = await fetch(API_CONFIG.CALCULATE_URL, {
                            method: 'POST',
                            headers: API_CONFIG.HEADERS,
                            body: JSON.stringify({
                                plan: AppState.selectedPlan,
                                meal_types: AppState.selectedMealTypes,
                                delivery_days: AppState.selectedDeliveryDays
                            })
                        });

                        if (response.ok) {
                            const data = await response.json();
                            
                            if (data.success) {
                                // Update display elements
                                DOM.priceDisplayElements.selectedPlan.textContent = 
                                    AppState.selectedPlan ? PLANS[AppState.selectedPlan].name : '-';
                                
                                DOM.priceDisplayElements.mealTypesCount.textContent = 
                                    AppState.selectedMealTypes.length;
                                
                                DOM.priceDisplayElements.deliveryDaysCount.textContent = 
                                    AppState.selectedDeliveryDays.length;
                                
                                DOM.priceDisplayElements.totalPrice.textContent = 
                                    data.data.formatted_total_price;
                            }
                        }
                    } catch (error) {
                        console.error('Price calculation error:', error);
                        // Don't show error to user for price calculation failures
                    }
                },

                showLoading() {
                    const overlay = document.getElementById('loadingOverlay');
                    if (overlay) {
                        overlay.classList.remove('hidden');
                    }
                },

                hideLoading() {
                    const overlay = document.getElementById('loadingOverlay');
                    if (overlay) {
                        overlay.classList.add('hidden');
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
                        throw error;
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
                
                try {
                    AppState.isSubmitting = true;
                    UI.showLoading();
                    
                    // Collect form data properly
                    const formData = {
                        full_name: document.getElementById('fullName').value.trim(),
                        phone: document.getElementById('phone').value.trim(),
                        email: document.getElementById('email').value.trim(),
                        address: document.getElementById('address').value.trim(),
                        allergies: document.getElementById('allergies').value.trim(),
                        plan: AppState.selectedPlan,
                        meal_types: AppState.selectedMealTypes,
                        delivery_days: AppState.selectedDeliveryDays,
                        delivery_time: document.getElementById('deliveryTime').value,
                        start_date: document.getElementById('startDate').value
                    };
                    
                    console.log('Submitting form with data:', formData);
                    
                    // Setup timeout controller
                    const controller = new AbortController();
                    const timeoutId = setTimeout(() => controller.abort(), 30000); // 30 detik timeout
                    
                    const response = await fetch(API_CONFIG.BASE_URL, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify(formData),
                        signal: controller.signal
                    });
                    
                    clearTimeout(timeoutId);
                    
                    console.log('Response status:', response.status);
                    
                    const data = await response.json();
                    console.log('Response data:', data);
                    
                    if (!response.ok) {
                        if (response.status === 422 && data.errors) {
                            // Handle validation errors
                            Object.keys(data.errors).forEach(field => {
                                const errorElement = document.getElementById(`${field}Error`);
                                if (errorElement) {
                                    errorElement.textContent = data.errors[field][0];
                                }
                            });
                            UI.showAlert('Mohon periksa kembali data yang Anda masukkan', 'error');
                        } else {
                            throw new Error(data.message || `Server error: ${response.status}`);
                        }
                        return;
                    }
                    
                    if (data.success) {
                        UI.showSuccessModal();
                        UI.resetForm();
                        UI.showAlert('Berlangganan berhasil! Tim kami akan menghubungi Anda segera.', 'success');
                    } else {
                        throw new Error(data.message || 'Unknown error occurred');
                    }
                    
                } catch (error) {
                    console.error('Submission error:', error);
                    
                    let errorMessage = 'Terjadi kesalahan saat mengirim data. Silakan coba lagi.';
                    
                    if (error.name === 'AbortError') {
                        errorMessage = 'Request timeout. Silakan coba lagi.';
                    } else if (error.message) {
                        errorMessage = error.message;
                    }
                    
                    UI.showAlert(errorMessage, 'error');
                    
                } finally {
                    AppState.isSubmitting = false;
                    UI.hideLoading();
                }
            }

            // Initialize Application
            function init() {
                // Set minimum date for start date (today)
                DOM.startDateInput.min = new Date().toISOString().split('T')[0];
                
                // Initialize from old input (if form was submitted with errors)
                @if(old('plan'))
                    const planCard = document.querySelector(`.plan-card[data-plan="{{ old('plan') }}"]`);
                    if (planCard) {
                        planCard.classList.add('selected');
                        AppState.updatePlan('{{ old('plan') }}');
                    }
                @endif
                
                AppState.updateMealTypes();
                AppState.updateDeliveryDays();
                UI.updatePriceDisplay();
                
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