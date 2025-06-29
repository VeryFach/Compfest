<x-layout>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu & Paket Makanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes bounceIn {
            0% { opacity: 0; transform: scale(0.3); }
            50% { opacity: 1; transform: scale(1.05); }
            70% { transform: scale(0.9); }
            100% { transform: scale(1); }
        }
        .animate-fade-in { animation: fadeIn 0.5s ease-in-out; }
        .animate-slide-up { animation: slideUp 0.6s ease-out; }
        .animate-bounce-in { animation: bounceIn 0.8s ease-out; }
        .animate-pulse-slow { animation: pulse 3s ease-in-out infinite; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header Section -->
    <header class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-800 text-white py-20">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="absolute top-10 left-10 w-20 h-20 bg-white/10 rounded-full animate-pulse-slow"></div>
            <div class="absolute bottom-10 right-10 w-32 h-32 bg-white/5 rounded-full animate-pulse-slow"></div>
            <div class="absolute top-1/2 left-1/3 w-16 h-16 bg-white/10 rounded-full animate-bounce"></div>
        </div>
        <div class="relative container mx-auto px-6 text-center">
            <div class="animate-slide-up">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">
                    Menu & Paket Makanan
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100 max-w-3xl mx-auto">
                    Pilih paket makanan sehat dengan menu mingguan yang bervariasi sesuai kebutuhan Anda
                </p>
                <div class="flex justify-center space-x-4">
                    <div class="bg-white/20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <i class="fas fa-calendar-alt text-2xl mb-2"></i>
                        <p class="text-sm">Menu Mingguan</p>
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <i class="fas fa-leaf text-2xl mb-2"></i>
                        <p class="text-sm">Bahan Segar</p>
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <i class="fas fa-truck text-2xl mb-2"></i>
                        <p class="text-sm">Antar Harian</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Plans Section -->
        <section class="py-16 bg-gradient-to-br from-gray-50 to-blue-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Pilih Paket Makanan Anda</h2>
                    <p class="text-xl text-gray-600">Setiap paket dilengkapi dengan menu mingguan yang bervariasi dan bergizi</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    <!-- Diet Plan -->
                    <article class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden group">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=400&h=250&fit=crop" class="w-full h-64 object-cover" alt="Diet Plan" loading="lazy">
                            <div class="absolute top-4 left-4">
                                <span class="bg-green-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                                    <i class="fas fa-heartbeat mr-2"></i>Diet Plan
                                </span>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Diet Plan</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Menu rendah kalori dengan porsi terkontrol, cocok untuk program penurunan berat badan dan gaya hidup sehat.</p>
                            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-4 mb-6 text-center">
                                <span class="text-3xl font-bold text-green-600">Rp 30.000</span>
                                <span class="text-gray-500 text-sm">/meal</span>
                            </div>
                            <div class="space-y-3 mb-6">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Kalori terkontrol (~400-500 kal/meal)</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Tinggi protein & serat</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Rendah lemak & gula</span>
                                </div>
                            </div>
                            <button class="w-full bg-green-600 text-white py-3 rounded-xl font-semibold hover:bg-green-700 transition-colors duration-300 transform hover:scale-105 menu-btn" data-plan="diet">
                                <i class="fas fa-calendar-alt mr-2"></i>Lihat Menu Mingguan
                            </button>
                        </div>
                    </article>

                    <!-- Protein Plan -->
                    <article class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden group relative">
                        <div class="absolute -top-2 -right-2 bg-yellow-400 text-yellow-900 px-3 py-1 rounded-full text-xs font-bold z-10 animate-bounce">
                            <i class="fas fa-star mr-1"></i>POPULER
                        </div>
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?w=400&h=250&fit=crop" class="w-full h-64 object-cover" alt="Protein Plan" loading="lazy">
                            <div class="absolute top-4 left-4">
                                <span class="bg-blue-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                                    <i class="fas fa-dumbbell mr-2"></i>Protein Plan
                                </span>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Protein Plan</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Menu tinggi protein untuk membantu pembentukan otot dan pemulihan setelah olahraga, cocok untuk atlet dan fitness enthusiast.</p>
                            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl p-4 mb-6 text-center border-2 border-blue-200">
                                <span class="text-3xl font-bold text-blue-600">Rp 40.000</span>
                                <span class="text-gray-500 text-sm">/meal</span>
                            </div>
                            <div class="space-y-3 mb-6">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-blue-500 mr-3"></i>
                                    <span>Tinggi protein (~30-40g/meal)</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-blue-500 mr-3"></i>
                                    <span>Karbohidrat kompleks</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-blue-500 mr-3"></i>
                                    <span>Cocok untuk muscle building</span>
                                </div>
                            </div>
                            <button class="w-full bg-blue-600 text-white py-3 rounded-xl font-semibold hover:bg-blue-700 transition-colors duration-300 transform hover:scale-105 menu-btn" data-plan="protein">
                                <i class="fas fa-calendar-alt mr-2"></i>Lihat Menu Mingguan
                            </button>
                        </div>
                    </article>

                    <!-- Royal Plan -->
                    <article class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden group">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=400&h=250&fit=crop" class="w-full h-64 object-cover" alt="Royal Plan" loading="lazy">
                            <div class="absolute top-4 left-4">
                                <span class="bg-purple-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                                    <i class="fas fa-crown mr-2"></i>Royal Plan
                                </span>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Royal Plan</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Menu premium dengan bahan-bahan berkualitas tinggi, porsi besar, dan variasi terlengkap untuk pengalaman kuliner terbaik.</p>
                            <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl p-4 mb-6 text-center border-2 border-purple-200">
                                <span class="text-3xl font-bold text-purple-600">Rp 60.000</span>
                                <span class="text-gray-500 text-sm">/meal</span>
                            </div>
                            <div class="space-y-3 mb-6">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-purple-500 mr-3"></i>
                                    <span>Bahan premium & organik</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-purple-500 mr-3"></i>
                                    <span>Porsi besar & variasi lengkap</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-purple-500 mr-3"></i>
                                    <span>Appetizer & dessert included</span>
                                </div>
                            </div>
                            <button class="w-full bg-purple-600 text-white py-3 rounded-xl font-semibold hover:bg-purple-700 transition-colors duration-300 transform hover:scale-105 menu-btn" data-plan="royal">
                                <i class="fas fa-calendar-alt mr-2"></i>Lihat Menu Mingguan
                            </button>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Statistics Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div class="animate-fade-in">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-2xl text-blue-600"></i>
                        </div>
                        <h4 class="text-3xl font-bold text-gray-800 mb-2">2500+</h4>
                        <p class="text-gray-600">Pelanggan Aktif</p>
                    </div>
                    <div class="animate-fade-in">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-calendar-check text-2xl text-green-600"></i>
                        </div>
                        <h4 class="text-3xl font-bold text-gray-800 mb-2">100+</h4>
                        <p class="text-gray-600">Menu Mingguan</p>
                    </div>
                    <div class="animate-fade-in">
                        <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-truck text-2xl text-yellow-600"></i>
                        </div>
                        <h4 class="text-3xl font-bold text-gray-800 mb-2">24/7</h4>
                        <p class="text-gray-600">Layanan Antar</p>
                    </div>
                    <div class="animate-fade-in">
                        <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-star text-2xl text-purple-600"></i>
                        </div>
                        <h4 class="text-3xl font-bold text-gray-800 mb-2">4.9/5</h4>
                        <p class="text-gray-600">Rating Kepuasan</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="py-20 bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-800 text-white relative overflow-hidden">
            <div class="absolute inset-0">
                <div class="absolute top-10 left-10 w-32 h-32 bg-white/10 rounded-full animate-pulse-slow"></div>
                <div class="absolute bottom-10 right-10 w-24 h-24 bg-white/10 rounded-full animate-pulse-slow"></div>
                <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white/10 rounded-full animate-bounce"></div>
            </div>
            <div class="container mx-auto px-6 text-center relative">
                <div class="animate-slide-up">
                    <h3 class="text-4xl font-bold mb-6">Mulai Hidup Sehat Hari Ini!</h3>
                    <p class="text-xl mb-8 text-blue-100 max-w-2xl mx-auto">
                        Bergabunglah dengan ribuan orang yang sudah merasakan manfaat menu sehat kami
                    </p>
                    <form class="max-w-md mx-auto">
                        <div class="flex bg-white/20 backdrop-blur-sm rounded-2xl p-2">
                            <input type="email" class="flex-1 bg-transparent text-white placeholder-blue-200 px-4 py-3 rounded-xl focus:outline-none" placeholder="Masukkan email Anda" required>
                            <button type="submit" class="bg-white text-blue-600 px-6 py-3 rounded-xl font-semibold hover:bg-blue-50 transition-colors duration-300 flex items-center">
                                <i class="fas fa-paper-plane mr-2"></i>Daftar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Weekly Menu Modal -->
    <div id="menuModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-6xl w-full max-h-screen overflow-y-auto animate-bounce-in">
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white p-6 rounded-t-2xl">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-bold" id="modalPlanTitle">Menu Mingguan</h2>
                    <button id="closeMenuModal" class="text-white hover:text-gray-300 text-2xl" aria-label="Close modal">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <!-- Meal Type Selection -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Pilih Jenis Makanan:</h3>
                    <div class="flex flex-wrap gap-3">
                        <label class="flex items-center bg-orange-50 p-3 rounded-lg border border-orange-200 cursor-pointer hover:bg-orange-100 transition-colors">
                            <input type="checkbox" class="meal-type mr-3" value="breakfast" checked>
                            <i class="fas fa-coffee text-orange-500 mr-2"></i>
                            <span class="font-medium text-gray-700">Sarapan</span>
                        </label>
                        <label class="flex items-center bg-blue-50 p-3 rounded-lg border border-blue-200 cursor-pointer hover:bg-blue-100 transition-colors">
                            <input type="checkbox" class="meal-type mr-3" value="lunch" checked>
                            <i class="fas fa-sun text-blue-500 mr-2"></i>
                            <span class="font-medium text-gray-700">Makan Siang</span>
                        </label>
                        <label class="flex items-center bg-purple-50 p-3 rounded-lg border border-purple-200 cursor-pointer hover:bg-purple-100 transition-colors">
                            <input type="checkbox" class="meal-type mr-3" value="dinner" checked>
                            <i class="fas fa-moon text-purple-500 mr-2"></i>
                            <span class="font-medium text-gray-700">Makan Malam</span>
                        </label>
                    </div>
                </div>

                <!-- Delivery Days Selection -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Pilih Hari Pengiriman:</h3>
                    <div class="grid grid-cols-4 md:grid-cols-7 gap-2">
                        <label class="flex flex-col items-center bg-gray-50 p-3 rounded-lg border cursor-pointer hover:bg-blue-50 hover:border-blue-300 transition-colors">
                            <input type="checkbox" class="delivery-day mb-2" value="monday" checked>
                            <span class="text-sm font-medium text-gray-700">Sen</span>
                        </label>
                        <label class="flex flex-col items-center bg-gray-50 p-3 rounded-lg border cursor-pointer hover:bg-blue-50 hover:border-blue-300 transition-colors">
                            <input type="checkbox" class="delivery-day mb-2" value="tuesday" checked>
                            <span class="text-sm font-medium text-gray-700">Sel</span>
                        </label>
                        <label class="flex flex-col items-center bg-gray-50 p-3 rounded-lg border cursor-pointer hover:bg-blue-50 hover:border-blue-300 transition-colors">
                            <input type="checkbox" class="delivery-day mb-2" value="wednesday" checked>
                            <span class="text-sm font-medium text-gray-700">Rab</span>
                        </label>
                        <label class="flex flex-col items-center bg-gray-50 p-3 rounded-lg border cursor-pointer hover:bg-blue-50 hover:border-blue-300 transition-colors">
                            <input type="checkbox" class="delivery-day mb-2" value="thursday" checked>
                            <span class="text-sm font-medium text-gray-700">Kam</span>
                        </label>
                        <label class="flex flex-col items-center bg-gray-50 p-3 rounded-lg border cursor-pointer hover:bg-blue-50 hover:border-blue-300 transition-colors">
                            <input type="checkbox" class="delivery-day mb-2" value="friday" checked>
                            <span class="text-sm font-medium text-gray-700">Jum</span>
                        </label>
                        <label class="flex flex-col items-center bg-gray-50 p-3 rounded-lg border cursor-pointer hover:bg-blue-50 hover:border-blue-300 transition-colors">
                            <input type="checkbox" class="delivery-day mb-2" value="saturday" checked>
                            <span class="text-sm font-medium text-gray-700">Sab</span>
                        </label>
                        <label class="flex flex-col items-center bg-gray-50 p-3 rounded-lg border cursor-pointer hover:bg-blue-50 hover:border-blue-300 transition-colors">
                            <input type="checkbox" class="delivery-day mb-2" value="sunday" checked>
                            <span class="text-sm font-medium text-gray-700">Min</span>
                        </label>
                    </div>
                </div>

                <!-- Weekly Menu Display -->
                <div id="weeklyMenuContent" class="mb-8">
                    <!-- Content will be generated dynamically -->
                </div>

                <!-- Price Calculation -->
                <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-xl p-6 mb-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Ringkasan Pesanan:</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Paket:</span>
                            <span class="font-semibold" id="selectedPlan">-</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Jenis Makanan:</span>
                            <span class="font-semibold" id="selectedMealTypes">-</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Hari Pengiriman:</span>
                            <span class="font-semibold" id="selectedDays">-</span>
                        </div>
                        <hr class="my-3">
                        <div class="flex justify-between items-center text-lg">
                            <span class="font-bold text-gray-800">Total per Minggu:</span>
                            <span class="font-bold text-blue-600 text-2xl" id="totalPrice">Rp 0</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-6 py-4 rounded-b-2xl flex justify-between items-center">
                <button id="closeMenuModalBtn" class="px-6 py-3 bg-gray-300 text-gray-700 rounded-xl font-semibold hover:bg-gray-400 transition-colors duration-300">
                    Tutup
                </button>
                <button id="orderNow" class="px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-semibold hover:shadow-lg transition-all duration-300">
                    <i class="fas fa-cart-plus mr-2"></i>Pesan Sekarang
                </button>
            </div>
        </div>
    </div>

    <script>
        // Menu data
        const menuData = {
            diet: {
                title: "Diet Plan Menu",
                price: 30000,
                breakfast: {
                    monday: "Oatmeal dengan buah berry + Greek yogurt",
                    tuesday: "Smoothie bowl pisang + granola",
                    wednesday: "Telur rebus + roti gandum + alpukat",
                    thursday: "Chia pudding + buah segar",
                    friday: "Overnight oats + kacang almond",
                    saturday: "Greek yogurt parfait + muesli",
                    sunday: "Protein pancake + sirup maple"
                },
                lunch: {
                    monday: "Salad ayam grilled + quinoa + sayur hijau",
                    tuesday: "Sup sayuran + roti gandum + hummus",
                    wednesday: "Bowl salmon + brown rice + edamame",
                    thursday: "Chicken wrap + sayur segar + yogurt",
                    friday: "Tuna salad + crackers gandum",
                    saturday: "Vegetable curry + cauliflower rice",
                    sunday: "Grilled tofu + steamed vegetables"
                },
                dinner: {
                    monday: "Ikan bakar + sayur rebus + kentang rebus",
                    tuesday: "Chicken breast + brokoli + sweet potato",
                    wednesday: "Sup kacang merah + salad hijau",
                    thursday: "Steamed fish + asparagus + quinoa",
                    friday: "Turkey meatballs + zucchini noodles",
                    saturday: "Grilled vegetables + lentil soup",
                    sunday: "Baked cod + roasted vegetables"
                }
            },
            protein: {
                title: "Protein Plan Menu",
                price: 40000,
                breakfast: {
                    monday: "Protein shake + oatmeal + banana",
                    tuesday: "Scrambled eggs + spinach + whole grain toast",
                    wednesday: "Greek yogurt + protein granola + berries",
                    thursday: "Protein smoothie bowl + nuts + seeds",
                    friday: "Egg white omelet + vegetables + cheese",
                    saturday: "Protein pancakes + peanut butter",
                    sunday: "Cottage cheese + fruit + nuts"
                },
                lunch: {
                    monday: "Grilled chicken + brown rice + broccoli",
                    tuesday: "Beef stir-fry + quinoa + mixed vegetables",
                    wednesday: "Salmon fillet + sweet potato + green beans",
                    thursday: "Turkey breast + pasta + spinach",
                    friday: "Tuna steak + wild rice + asparagus",
                    saturday: "Lean pork + mashed potato + carrots",
                    sunday: "Protein bowl + chickpeas + vegetables"
                },
                dinner: {
                    monday: "Grilled steak + roasted vegetables + quinoa",
                    tuesday: "Baked chicken thigh + brown rice + steamed broccoli",
                    wednesday: "Protein-rich lentil curry + naan + Greek yogurt",
                    thursday: "Grilled salmon + quinoa + roasted asparagus",
                    friday: "Beef tenderloin + mashed sweet potato + green salad",
                    saturday: "Chicken breast + wild rice + mixed vegetables",
                    sunday: "Turkey meatloaf + baked potato + steamed carrots"
                }
            },
            royal: {
                title: "Royal Plan Menu",
                price: 60000,
                breakfast: {
                    monday: "Eggs Benedict + smoked salmon + hollandaise sauce + fresh fruit",
                    tuesday: "French toast + maple syrup + bacon + orange juice",
                    wednesday: "Avocado toast + poached egg + prosciutto + cappuccino",
                    thursday: "Pancake stack + berry compote + whipped cream + coffee",
                    friday: "Croissant + scrambled eggs + truffle + fresh juice",
                    saturday: "Waffle + ice cream + strawberries + hot chocolate",
                    sunday: "Full English breakfast + sausage + beans + toast"
                },
                lunch: {
                    monday: "Beef Wellington + roasted vegetables + red wine jus + dessert",
                    tuesday: "Lobster bisque + grilled prawns + garlic bread + sorbet",
                    wednesday: "Wagyu steak + truffle mash + asparagus + chocolate mousse",
                    thursday: "Duck confit + orange glaze + wild rice + crème brûlée",
                    friday: "Seafood paella + mixed salad + sangria + flan",
                    saturday: "Lamb rack + herb crust + ratatouille + tiramisu",
                    sunday: "Prime rib + Yorkshire pudding + vegetables + cheesecake"
                },
                dinner: {
                    monday: "Tuna tataki + wasabi mayo + edamame + mochi ice cream",
                    tuesday: "Filet mignon + truffle sauce + gratin + wine pairing",
                    wednesday: "Sea bass + lemon butter + risotto + panna cotta",
                    thursday: "Rack of lamb + mint sauce + roasted vegetables + soufflé",
                    friday: "Lobster thermidor + champagne + salad + macarons",
                    saturday: "Beef short ribs + red wine reduction + sides + cake",
                    sunday: "Whole roasted chicken + herbs + potatoes + fruit tart"
                }
            }
        };

        // DOM Elements
        const modal = document.getElementById('menuModal');
        const menuBtns = document.querySelectorAll('.menu-btn');
        const closeModalBtns = document.querySelectorAll('#closeMenuModal, #closeMenuModalBtn');
        const orderNowBtn = document.getElementById('orderNow');
        
        // State
        let currentPlan = '';
        let currentPlanData = {};

        // Event Listeners
        function initEventListeners() {
            // Open modal
            menuBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    currentPlan = this.getAttribute('data-plan');
                    currentPlanData = menuData[currentPlan];
                    
                    document.getElementById('modalPlanTitle').textContent = currentPlanData.title;
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                    updateMenuDisplay();
                    updatePricingDisplay();
                });
            });

            // Close modal
            closeModalBtns.forEach(btn => {
                btn.addEventListener('click', closeModal);
            });

            // Close modal when clicking outside
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // Update menu display when selections change
            document.querySelectorAll('.meal-type, .delivery-day').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    updateMenuDisplay();
                    updatePricingDisplay();
                });
            });

            // Order now functionality
            orderNowBtn.addEventListener('click', handleOrderNow);
        }

        // Functions
        function closeModal() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        function updateMenuDisplay() {
            const selectedMealTypes = Array.from(document.querySelectorAll('.meal-type:checked')).map(cb => cb.value);
            const selectedDays = Array.from(document.querySelectorAll('.delivery-day:checked')).map(cb => cb.value);
            
            const weeklyMenuContent = document.getElementById('weeklyMenuContent');
            const dayNames = {
                monday: 'Senin',
                tuesday: 'Selasa', 
                wednesday: 'Rabu',
                thursday: 'Kamis',
                friday: 'Jumat',
                saturday: 'Sabtu',
                sunday: 'Minggu'
            };

            const mealTypeNames = {
                breakfast: 'Sarapan',
                lunch: 'Makan Siang',
                dinner: 'Makan Malam'
            };

            const mealTypeIcons = {
                breakfast: 'fas fa-coffee text-orange-500',
                lunch: 'fas fa-sun text-blue-500', 
                dinner: 'fas fa-moon text-purple-500'
            };

            let menuHTML = '<div class="space-y-6">';

            if (selectedDays.length > 0 && selectedMealTypes.length > 0) {
                selectedDays.forEach(day => {
                    menuHTML += `
                        <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-xl p-6 border border-blue-200">
                            <h4 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-calendar-day text-blue-600 mr-3"></i>
                                ${dayNames[day]}
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-${selectedMealTypes.length} gap-4">
                    `;

                    selectedMealTypes.forEach(mealType => {
                        const menuItem = currentPlanData[mealType][day];
                        menuHTML += `
                            <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-200">
                                <div class="flex items-center mb-3">
                                    <i class="${mealTypeIcons[mealType]} mr-2"></i>
                                    <h5 class="font-semibold text-gray-700">${mealTypeNames[mealType]}</h5>
                                </div>
                                <p class="text-sm text-gray-600 leading-relaxed">${menuItem}</p>
                                <div class="mt-3 text-right">
                                    <span class="text-lg font-bold text-blue-600">Rp ${currentPlanData.price.toLocaleString('id-ID')}</span>
                                </div>
                            </div>
                        `;
                    });

                    menuHTML += `
                            </div>
                        </div>
                    `;
                });
            } else {
                menuHTML = `
                    <div class="text-center py-12">
                        <i class="fas fa-utensils text-6xl text-gray-300 mb-4"></i>
                        <h4 class="text-xl font-semibold text-gray-500 mb-2">Pilih Hari dan Jenis Makanan</h4>
                        <p class="text-gray-400">Silakan pilih minimal satu hari pengiriman dan satu jenis makanan untuk melihat menu</p>
                    </div>
                `;
            }

            menuHTML += '</div>';
            weeklyMenuContent.innerHTML = menuHTML;
        }

        function updatePricingDisplay() {
            const selectedMealTypes = Array.from(document.querySelectorAll('.meal-type:checked'));
            const selectedDays = Array.from(document.querySelectorAll('.delivery-day:checked'));
            
            const mealTypeNames = {
                breakfast: 'Sarapan',
                lunch: 'Makan Siang',
                dinner: 'Makan Malam'
            };

            const dayNames = {
                monday: 'Sen',
                tuesday: 'Sel',
                wednesday: 'Rab', 
                thursday: 'Kam',
                friday: 'Jum',
                saturday: 'Sab',
                sunday: 'Min'
            };

            // Update plan name
            const planNames = {
                diet: 'Diet Plan',
                protein: 'Protein Plan', 
                royal: 'Royal Plan'
            };
            document.getElementById('selectedPlan').textContent = planNames[currentPlan] || '-';

            // Update meal types
            const mealTypeText = selectedMealTypes.length > 0 
                ? selectedMealTypes.map(cb => mealTypeNames[cb.value]).join(', ')
                : '-';
            document.getElementById('selectedMealTypes').textContent = mealTypeText;

            // Update delivery days
            const dayText = selectedDays.length > 0
                ? selectedDays.map(cb => dayNames[cb.value]).join(', ')
                : '-';
            document.getElementById('selectedDays').textContent = dayText;

            // Calculate total price
            const totalMeals = selectedMealTypes.length * selectedDays.length;
            const totalPrice = totalMeals * currentPlanData.price;
            document.getElementById('totalPrice').textContent = `Rp ${totalPrice.toLocaleString('id-ID')}`;
        }

        function handleOrderNow() {
            const selectedMealTypes = Array.from(document.querySelectorAll('.meal-type:checked')).map(cb => cb.value);
            const selectedDays = Array.from(document.querySelectorAll('.delivery-day:checked')).map(cb => cb.value);
            
            if (selectedMealTypes.length === 0) {
                alert('Silakan pilih minimal satu jenis makanan!');
                return;
            }
            
            if (selectedDays.length === 0) {
                alert('Silakan pilih minimal satu hari pengiriman!');
                return;
            }
            
            const totalMeals = selectedMealTypes.length * selectedDays.length;
            const totalPrice = totalMeals * currentPlanData.price;
            
            const orderSummary = `
Pesanan Anda:
- Paket: ${currentPlanData.title}
- Jenis Makanan: ${selectedMealTypes.length} jenis
- Hari Pengiriman: ${selectedDays.length} hari
- Total Makanan: ${totalMeals} meal
- Total Harga: Rp ${totalPrice.toLocaleString('id-ID')} per minggu

Terima kasih! Tim kami akan segera menghubungi Anda.
            `;
            
            alert(orderSummary);
            closeModal();
        }

        // Initialize Intersection Observer for animations
        function initIntersectionObserver() {
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

            document.querySelectorAll('.animate-fade-in').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'all 0.6s ease-out';
                observer.observe(el);
            });
        }

        // Initialize the app
        function init() {
            initEventListeners();
            initIntersectionObserver();
        }

        // Start the app
        document.addEventListener('DOMContentLoaded', init);
    </script>
</body>
</html>
</x-layout>