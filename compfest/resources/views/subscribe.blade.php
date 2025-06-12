<x-layout title="Berlangganan">
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-800 to-blue-900 py-16 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Berlangganan SEA Catering</h1>
                <p class="text-xl text-blue-100">Pilih paket berlangganan yang sesuai dengan kebutuhan Anda dan nikmati kemudahan setiap hari</p>
            </div>
        </div>
    </section>

    <!-- Subscription Plans -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Pilih Durasi Berlangganan</h2>
                <p class="text-gray-600">Semakin lama berlangganan, semakin hemat harga yang Anda dapatkan</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- 1 Week Plan -->
                <div class="relative">
                    <div class="h-full bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                        <div class="px-6 py-8">
                            <div class="text-center mb-6">
                                <h3 class="text-2xl font-bold text-gray-800 mb-1">Paket Mingguan</h3>
                                <p class="text-gray-500 text-sm">Coba dulu selama 1 minggu</p>
                            </div>
                            
                            <div class="text-center mb-8">
                                <span class="block text-blue-600 text-lg mb-1">Mulai dari</span>
                                <span class="text-4xl font-bold text-gray-900">Rp 175.000</span>
                                <span class="block text-gray-500 text-sm mt-1">untuk 7 hari</span>
                            </div>
                            
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">7 hari makanan</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Antar setiap hari</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Bisa ganti paket</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Customer support</span>
                                </li>
                            </ul>
                            
                            <button onclick="selectPlan('weekly')" class="w-full py-3 px-6 border-2 border-blue-600 text-blue-600 font-medium rounded-lg hover:bg-blue-50 transition-colors duration-300">
                                Pilih Paket Ini
                            </button>
                        </div>
                    </div>
                </div>

                <!-- 1 Month Plan (Popular) -->
                <div class="relative">
                    <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                        <span class="bg-blue-600 text-white text-xs font-semibold px-4 py-1 rounded-full">TERPOPULER</span>
                    </div>
                    
                    <div class="h-full bg-white rounded-xl shadow-xl overflow-hidden border-2 border-blue-600 transition-all duration-300 hover:-translate-y-2">
                        <div class="px-6 py-8">
                            <div class="text-center mb-6">
                                <h3 class="text-2xl font-bold text-gray-800 mb-1">Paket Bulanan</h3>
                                <p class="text-blue-600 text-sm">Hemat 15% dari harga mingguan</p>
                            </div>
                            
                            <div class="text-center mb-8">
                                <span class="block text-blue-600 text-lg mb-1">Mulai dari</span>
                                <span class="text-4xl font-bold text-gray-900">Rp 637.500</span>
                                <span class="block text-gray-500 text-sm mt-1">untuk 30 hari</span>
                                <span class="text-green-600 text-sm mt-1">
                                    <del class="text-gray-400">Rp 750.000</del> Hemat Rp 112.500
                                </span>
                            </div>
                            
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">30 hari makanan</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Antar setiap hari</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Bebas ganti paket</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Priority support</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-yellow-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Free ongkir</span>
                                </li>
                            </ul>
                            
                            <button onclick="selectPlan('monthly')" class="w-full py-3 px-6 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors duration-300">
                                Pilih Paket Ini
                            </button>
                        </div>
                    </div>
                </div>

                <!-- 3 Month Plan -->
                <div class="relative">
                    <div class="h-full bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                        <div class="px-6 py-8">
                            <div class="text-center mb-6">
                                <h3 class="text-2xl font-bold text-gray-800 mb-1">Paket 3 Bulan</h3>
                                <p class="text-green-600 text-sm">Hemat 25% + Bonus</p>
                            </div>
                            
                            <div class="text-center mb-8">
                                <span class="block text-blue-600 text-lg mb-1">Mulai dari</span>
                                <span class="text-4xl font-bold text-gray-900">Rp 1.687.500</span>
                                <span class="block text-gray-500 text-sm mt-1">untuk 90 hari</span>
                                <span class="text-green-600 text-sm mt-1">
                                    <del class="text-gray-400">Rp 2.250.000</del> Hemat Rp 562.500
                                </span>
                            </div>
                            
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">90 hari makanan</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Antar setiap hari</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Bebas ganti paket</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">VIP support</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-yellow-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Free ongkir</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Bonus snack</span>
                                </li>
                            </ul>
                            
                            <button onclick="selectPlan('quarterly')" class="w-full py-3 px-6 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 transition-colors duration-300">
                                Pilih Paket Ini
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscription Form -->
    <section class="py-16 bg-gray-100" id="subscriptionForm" style="display: none;">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-blue-600 px-6 py-4 text-white">
                        <h4 class="text-xl font-semibold flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                            Form Berlangganan
                        </h4>
                    </div>
                    
                    <div class="p-6">
                        <form id="subscribeForm">
                            <!-- Step 1: Personal Info -->
                            <div class="step-content" id="step1">
                                <h5 class="text-lg font-semibold text-gray-800 mb-4">Informasi Pribadi</h5>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <label for="fullName" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap *</label>
                                        <input type="text" id="fullName" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                                    </div>
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                                        <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">No. Telepon *</label>
                                        <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                                    </div>
                                    <div>
                                        <label for="birthDate" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                                        <input type="date" id="birthDate" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Alamat Lengkap *</label>
                                    <textarea id="address" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required placeholder="Masukkan alamat lengkap untuk pengiriman"></textarea>
                                </div>
                            </div>

                            <!-- Step 2: Package Selection -->
                            <div class="step-content hidden" id="step2">
                                <h5 class="text-lg font-semibold text-gray-800 mb-4">Pilih Paket Makanan</h5>
                                
                                <div class="bg-blue-50 border border-blue-100 rounded-lg p-4 mb-6">
                                    <h6 class="font-medium text-gray-800">Durasi Berlangganan: <span id="selectedPlan" class="text-blue-600"></span></h6>
                                    <p class="text-gray-700">Total Biaya: <span id="totalCost" class="font-bold text-green-600"></span></p>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <label for="packageType" class="block text-sm font-medium text-gray-700 mb-1">Jenis Paket *</label>
                                        <select id="packageType" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                                            <option value="">Pilih Paket</option>
                                            <option value="ekonomis" data-price="25000">Paket Ekonomis - Rp 25.000/hari</option>
                                            <option value="premium" data-price="45000">Paket Premium - Rp 45.000/hari</option>
                                            <option value="vegetarian" data-price="35000">Paket Vegetarian - Rp 35.000/hari</option>
                                            <option value="diet" data-price="40000">Paket Diet - Rp 40.000/hari</option>
                                            <option value="keluarga" data-price="90000">Paket Keluarga - Rp 90.000/hari</option>
                                            <option value="anak" data-price="20000">Paket Anak - Rp 20.000/hari</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="startDate" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Mulai *</label>
                                        <input type="date" id="startDate" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <label for="deliveryTime" class="block text-sm font-medium text-gray-700 mb-1">Waktu Pengiriman *</label>
                                        <select id="deliveryTime" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                                            <option value="">Pilih Waktu</option>
                                            <option value="07:00">07:00 - 08:00</option>
                                            <option value="11:00">11:00 - 12:00</option>
                                            <option value="17:00">17:00 - 18:00</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="specialRequest" class="block text-sm font-medium text-gray-700 mb-1">Permintaan Khusus</label>
                                        <input type="text" id="specialRequest" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Contoh: Tidak pedas, extra nasi">
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3: Payment -->
                            <div class="step-content hidden" id="step3">
                                <h5 class="text-lg font-semibold text-gray-800 mb-4">Metode Pembayaran</h5>
                                
                                <div class="border border-gray-200 rounded-lg p-4 mb-6">
                                    <h6 class="font-medium text-gray-800 border-b pb-2 mb-3">Ringkasan Pesanan</h6>
                                    <div class="flex justify-between mb-2">
                                        <span class="text-gray-600">Paket:</span>
                                        <span id="summaryPackage" class="text-gray-800">-</span>
                                    </div>
                                    <div class="flex justify-between mb-2">
                                        <span class="text-gray-600">Durasi:</span>
                                        <span id="summaryDuration" class="text-gray-800">-</span>
                                    </div>
                                    <div class="flex justify-between mb-2">
                                        <span class="text-gray-600">Mulai:</span>
                                        <span id="summaryStartDate" class="text-gray-800">-</span>
                                    </div>
                                    <hr class="my-3">
                                    <div class="flex justify-between font-semibold">
                                        <span class="text-gray-800">Total:</span>
                                        <span id="summaryTotal" class="text-green-600">-</span>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <h6 class="font-medium text-gray-800 mb-3">Pilih Metode Pembayaran</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="payment-option">
                                            <input type="radio" name="paymentMethod" id="bankTransfer" value="bank_transfer" class="hidden peer">
                                            <label for="bankTransfer" class="block p-4 border border-gray-300 rounded-lg cursor-pointer hover:border-blue-500 peer-checked:border-blue-500 peer-checked:bg-blue-50">
                                                <div class="flex items-center">
                                                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="font-medium">Transfer Bank</div>
                                                        <div class="text-sm text-gray-500">BCA, BNI, Mandiri, BRI</div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="payment-option">
                                            <input type="radio" name="paymentMethod" id="eWallet" value="e_wallet" class="hidden peer">
                                            <label for="eWallet" class="block p-4 border border-gray-300 rounded-lg cursor-pointer hover:border-blue-500 peer-checked:border-blue-500 peer-checked:bg-blue-50">
                                                <div class="flex items-center">
                                                    <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center mr-3">
                                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="font-medium">E-Wallet</div>
                                                        <div class="text-sm text-gray-500">GoPay, OVO, DANA</div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <div class="flex justify-between pt-4 border-t border-gray-200">
                                <button type="button" id="prevBtn" onclick="changeStep(-1)" class="hidden items-center px-5 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                    Sebelumnya
                                </button>
                                <button type="button" id="nextBtn" onclick="changeStep(1)" class="ml-auto flex items-center px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                    Selanjutnya
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                                <button type="submit" id="submitBtn" class="hidden ml-auto flex items-center px-5 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Konfirmasi Berlangganan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Pertanyaan yang Sering Diajukan</h2>
                
                <div class="space-y-4">
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <button class="flex items-center justify-between w-full p-4 text-left bg-gray-50 hover:bg-gray-100" onclick="toggleFAQ(1)">
                            <span class="font-medium text-gray-800">Apakah bisa mengubah paket di tengah berlangganan?</span>
                            <svg id="faqIcon1" class="w-5 h-5 text-gray-500 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="faqContent1" class="hidden p-4 text-gray-600">
                            Ya, Anda bisa mengubah paket makanan dengan memberitahu kami minimal H-1 sebelum pengiriman. Perbedaan harga akan disesuaikan pada tagihan berikutnya.
                        </div>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <button class="flex items-center justify-between w-full p-4 text-left bg-gray-50 hover:bg-gray-100" onclick="toggleFAQ(2)">
                            <span class="font-medium text-gray-800">Bagaimana jika saya tidak ada di rumah saat pengiriman?</span>
                            <svg id="faqIcon2" class="w-5 h-5 text-gray-500 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="faqContent2" class="hidden p-4 text-gray-600">
                            Kami akan menghubungi Anda terlebih dahulu sebelum pengiriman. Jika tidak ada, makanan akan dititipkan kepada tetangga atau security dengan pemberitahuan melalui WhatsApp.
                        </div>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <button class="flex items-center justify-between w-full p-4 text-left bg-gray-50 hover:bg-gray-100" onclick="toggleFAQ(3)">
                            <span class="font-medium text-gray-800">Apakah ada jaminan jika makanan tidak sesuai?</span>
                            <svg id="faqIcon3" class="w-5 h-5 text-gray-500 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="faqContent3" class="hidden p-4 text-gray-600">
                            Kami memiliki jaminan 100% kepuasan pelanggan. Jika makanan tidak sesuai atau ada masalah, kami akan menggantinya tanpa biaya tambahan.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        let currentStep = 1;
        let selectedPlanType = '';
        let planPrices = {
            'weekly': { 
                days: 7, 
                discount: 0,
                label: 'Paket Mingguan (7 hari)'
            },
            'monthly': { 
                days: 30, 
                discount: 0.15,
                label: 'Paket Bulanan (30 hari)'
            },
            'quarterly': { 
                days: 90, 
                discount: 0.25,
                label: 'Paket 3 Bulan (90 hari)'
            }
        };

        // Toggle FAQ item
        function toggleFAQ(id) {
            const content = document.getElementById(`faqContent${id}`);
            const icon = document.getElementById(`faqIcon${id}`);
            
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        }

        // Fungsi untuk memilih paket berlangganan
        function selectPlan(planType) {
            selectedPlanType = planType;
            document.getElementById('selectedPlan').textContent = planPrices[planType].label;
            
            // Show form and scroll to it
            const formSection = document.getElementById('subscriptionForm');
            formSection.style.display = 'block';
            formSection.scrollIntoView({ behavior: 'smooth' });
            
            updateTotalCost();
        }

        // Fungsi untuk mengubah step form
        function changeStep(direction) {
            if (direction === 1 && !validateCurrentStep()) {
                return;
            }

            // Hide current step
            document.getElementById(`step${currentStep}`).classList.add('hidden');
            
            currentStep += direction;
            
            // Ensure step stays within bounds
            if (currentStep < 1) currentStep = 1;
            if (currentStep > 3) currentStep = 3;
            
            // Show new step
            document.getElementById(`step${currentStep}`).classList.remove('hidden');
            
            updateNavigationButtons();
            
            if (currentStep === 3) {
                updateOrderSummary();
            }
        }

        // Fungsi untuk memvalidasi step saat ini
        function validateCurrentStep() {
            const currentStepElement = document.getElementById(`step${currentStep}`);
            const requiredFields = currentStepElement.querySelectorAll('[required]');
            let isValid = true;
            
            for (let field of requiredFields) {
                if (!field.value.trim()) {
                    field.focus();
                    field.classList.add('border-red-500');
                    field.classList.remove('border-gray-300');
                    
                    // Add error message if not exists
                    if (!field.nextElementSibling || !field.nextElementSibling.classList.contains('text-red-500')) {
                        const errorDiv = document.createElement('div');
                        errorDiv.className = 'mt-1 text-sm text-red-500';
                        errorDiv.textContent = 'Field ini wajib diisi';
                        field.parentNode.insertBefore(errorDiv, field.nextSibling);
                    }
                    
                    isValid = false;
                } else {
                    field.classList.remove('border-red-500');
                    field.classList.add('border-gray-300');
                    
                    // Remove error message if exists
                    if (field.nextElementSibling && field.nextElementSibling.classList.contains('text-red-500')) {
                        field.nextElementSibling.remove();
                    }
                }
            }
            
            return isValid;
        }

        // Fungsi untuk mengupdate tombol navigasi
        function updateNavigationButtons() {
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const submitBtn = document.getElementById('submitBtn');
            
            // Show/hide previous button
            if (currentStep === 1) {
                prevBtn.classList.add('hidden');
            } else {
                prevBtn.classList.remove('hidden');
                prevBtn.classList.add('flex');
            }
            
            // Show/hide next and submit buttons
            if (currentStep === 3) {
                nextBtn.classList.add('hidden');
                submitBtn.classList.remove('hidden');
                submitBtn.classList.add('flex');
            } else {
                nextBtn.classList.remove('hidden');
                nextBtn.classList.add('flex');
                submitBtn.classList.add('hidden');
            }
        }

        // Fungsi untuk mengupdate total biaya
        function updateTotalCost() {
            const packageSelect = document.getElementById('packageType');
            if (packageSelect.value && selectedPlanType) {
                const selectedOption = packageSelect.selectedOptions[0];
                const dailyPrice = parseInt(selectedOption.dataset.price);
                const planInfo = planPrices[selectedPlanType];
                const totalDays = planInfo.days;
                const discount = planInfo.discount;
                
                const subtotal = dailyPrice * totalDays;
                const discountAmount = subtotal * discount;
                const total = subtotal - discountAmount;
                
                document.getElementById('totalCost').textContent = `Rp ${total.toLocaleString('id-ID')}`;
            }
        }

        // Fungsi untuk mengupdate ringkasan pesanan
        function updateOrderSummary() {
            const packageSelect = document.getElementById('packageType');
            const startDate = document.getElementById('startDate').value;
            
            if (packageSelect.value) {
                const selectedOption = packageSelect.selectedOptions[0];
                document.getElementById('summaryPackage').textContent = selectedOption.text;
                document.getElementById('summaryDuration').textContent = planPrices[selectedPlanType].label;
                document.getElementById('summaryStartDate').textContent = new Date(startDate).toLocaleDateString('id-ID');
                document.getElementById('summaryTotal').textContent = document.getElementById('totalCost').textContent;
            }
        }

        // Event listener untuk perubahan paket
        document.getElementById('packageType').addEventListener('change', function() {
            updateTotalCost();
        });

        // Fungsi untuk submit form
        document.getElementById('subscribeForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validate payment method
            const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked');
            if (!paymentMethod) {
                alert('Silakan pilih metode pembayaran');
                return;
            }
            
            // Collect form data
            const formData = {
                personalInfo: {
                    fullName: document.getElementById('fullName').value,
                    email: document.getElementById('email').value,
                    phone: document.getElementById('phone').value,
                    birthDate: document.getElementById('birthDate').value,
                    address: document.getElementById('address').value
                },
                subscription: {
                    planType: selectedPlanType,
                    packageType: document.getElementById('packageType').value,
                    startDate: document.getElementById('startDate').value,
                    deliveryTime: document.getElementById('deliveryTime').value,
                    specialRequest: document.getElementById('specialRequest').value
                },
                payment: {
                    method: paymentMethod.value,
                    total: document.getElementById('summaryTotal').textContent
                }
            };
            
            // Show loading state
            const submitBtn = document.getElementById('submitBtn');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Memproses...';
            submitBtn.disabled = true;
            
            // Simulate form submission
            setTimeout(() => {
                alert('Berlangganan berhasil! Kami akan menghubungi Anda untuk konfirmasi pembayaran.');
                
                // Reset form
                document.getElementById('subscribeForm').reset();
                document.getElementById('subscriptionForm').style.display = 'none';
                currentStep = 1;
                selectedPlanType = '';
                
                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                
                // Scroll to top
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }, 2000);
        });

        // Set minimum date for start date (tomorrow)
        document.addEventListener('DOMContentLoaded', function() {
            const tomorrow = new Date();
            tomorrow.setDate(tomorrow.getDate() + 1);
            document.getElementById('startDate').min = tomorrow.toISOString().split('T')[0];
        });

        // Add real-time validation feedback
        document.querySelectorAll('input[required], select[required], textarea[required]').forEach(field => {
            field.addEventListener('blur', function() {
                if (this.value.trim()) {
                    this.classList.remove('border-red-500');
                    this.classList.add('border-green-500');
                    
                    // Remove error message if exists
                    if (this.nextElementSibling && this.nextElementSibling.classList.contains('text-red-500')) {
                        this.nextElementSibling.remove();
                    }
                } else {
                    this.classList.add('border-red-500');
                    this.classList.remove('border-green-500');
                }
            });
            
            field.addEventListener('focus', function() {
                this.classList.remove('border-red-500', 'border-green-500');
                this.classList.add('border-blue-500');
            });
        });

        // Format phone number input
        document.getElementById('phone').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.startsWith('0')) {
                value = '62' + value.substring(1);
            }
            if (!value.startsWith('62')) {
                value = '62' + value;
            }
            e.target.value = value;
        });

        // Email validation
        document.getElementById('email').addEventListener('blur', function() {
            const email = this.value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (email && !emailRegex.test(email)) {
                this.classList.add('border-red-500');
                
                // Add error message if not exists
                if (!this.nextElementSibling || !this.nextElementSibling.classList.contains('text-red-500')) {
                    const errorDiv = document.createElement('div');
                    errorDiv.className = 'mt-1 text-sm text-red-500';
                    errorDiv.textContent = 'Format email tidak valid';
                    this.parentNode.insertBefore(errorDiv, this.nextSibling);
                }
            }
        });
    </script>
    @endpush
</x-layout>