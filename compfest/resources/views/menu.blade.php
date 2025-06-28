<x-layout title="Menu & Paket - ">
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu & Paket Makanan</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: '#2563eb',
                            secondary: '#64748b',
                            accent: '#f59e0b',
                            success: '#10b981',
                            danger: '#ef4444',
                            warning: '#f59e0b',
                            info: '#06b6d4'
                        },
                        animation: {
                            'fade-in': 'fadeIn 0.5s ease-in-out',
                            'slide-up': 'slideUp 0.6s ease-out',
                            'bounce-in': 'bounceIn 0.8s ease-out',
                            'pulse-slow': 'pulse 3s ease-in-out infinite'
                        },
                        keyframes: {
                            fadeIn: {
                                '0%': { opacity: '0', transform: 'translateY(20px)' },
                                '100%': { opacity: '1', transform: 'translateY(0)' }
                            },
                            slideUp: {
                                '0%': { opacity: '0', transform: 'translateY(30px)' },
                                '100%': { opacity: '1', transform: 'translateY(0)' }
                            },
                            bounceIn: {
                                '0%': { opacity: '0', transform: 'scale(0.3)' },
                                '50%': { opacity: '1', transform: 'scale(1.05)' },
                                '70%': { transform: 'scale(0.9)' },
                                '100%': { transform: 'scale(1)' }
                            }
                        }
                    }
                }
            }
        </script>
    </head>
    <body class="bg-gray-50 min-h-screen">
        <!-- Header Section -->
        <section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-800 text-white py-20">
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
                        Pilih paket makanan yang sesuai dengan kebutuhan dan selera Anda
                    </p>
                    <div class="flex justify-center space-x-4">
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg px-6 py-3">
                            <i class="fas fa-utensils text-2xl mb-2"></i>
                            <p class="text-sm">Menu Bervariasi</p>
                        </div>
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg px-6 py-3">
                            <i class="fas fa-leaf text-2xl mb-2"></i>
                            <p class="text-sm">Bahan Segar</p>
                        </div>
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg px-6 py-3">
                            <i class="fas fa-truck text-2xl mb-2"></i>
                            <p class="text-sm">Antar Cepat</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Filter Section -->
        <section class="py-8 bg-white shadow-lg sticky top-0 z-40">
            <div class="container mx-auto px-6">
                <div class="flex justify-center">
                    <div class="bg-gray-100 rounded-full p-2 flex flex-wrap justify-center gap-2">
                        <button class="filter-btn active bg-blue-600 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:scale-105" data-filter="all">
                            <i class="fas fa-th-large mr-2"></i>Semua Paket
                        </button>
                        <button class="filter-btn bg-transparent text-gray-600 px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:bg-green-500 hover:text-white" data-filter="ekonomis">
                            <i class="fas fa-coins mr-2"></i>Ekonomis
                        </button>
                        <button class="filter-btn bg-transparent text-gray-600 px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:bg-yellow-500 hover:text-white" data-filter="premium">
                            <i class="fas fa-crown mr-2"></i>Premium
                        </button>
                        <button class="filter-btn bg-transparent text-gray-600 px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:bg-green-600 hover:text-white" data-filter="vegetarian">
                            <i class="fas fa-seedling mr-2"></i>Vegetarian
                        </button>
                        <button class="filter-btn bg-transparent text-gray-600 px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:bg-cyan-500 hover:text-white" data-filter="diet">
                            <i class="fas fa-heartbeat mr-2"></i>Diet
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Menu Items Section -->
        <section class="py-16 bg-gradient-to-br from-gray-50 to-blue-50">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="menuContainer">
                    
                    <!-- Paket Ekonomis -->
                    <div class="menu-item animate-fade-in group" data-category="ekonomis">
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?w=400&h=250&fit=crop" class="w-full h-64 object-cover" alt="Paket Ekonomis">
                                <div class="absolute top-4 left-4">
                                    <span class="bg-green-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                                        <i class="fas fa-coins mr-2"></i>Ekonomis
                                    </span>
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-6">
                                <h5 class="text-xl font-bold text-gray-800 mb-3">Paket Ekonomis Harian</h5>
                                <p class="text-gray-600 mb-4 leading-relaxed">Paket hemat dengan menu lengkap yang terdiri dari nasi, lauk pauk, sayur, dan buah segar setiap hari.</p>
                                <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-xl p-4 mb-6 text-center">
                                    <span class="text-3xl font-bold text-blue-600">Rp 25.000</span>
                                    <span class="text-gray-500 text-sm">/hari</span>
                                </div>
                                <div class="space-y-3">
                                    <button class="detail-btn w-full bg-blue-600 text-white py-3 rounded-xl font-semibold hover:bg-blue-700 transition-colors duration-300 transform hover:scale-105"
                                            data-name="Paket Ekonomis Harian"
                                            data-price="25000"
                                            data-category="ekonomis"
                                            data-description="Paket hemat dengan menu lengkap yang cocok untuk kebutuhan sehari-hari"
                                            data-includes="Nasi putih, Ayam goreng/bakar, Sayur sop/capcay, Tempe/tahu goreng, Kerupuk, Buah segar, Air mineral">
                                        <i class="fas fa-info-circle mr-2"></i>Lihat Detail
                                    </button>
                                    <button class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300">
                                        <i class="fas fa-cart-plus mr-2"></i>Berlangganan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paket Premium -->
                    <div class="menu-item animate-fade-in group" data-category="premium">
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden relative">
                            <div class="absolute -top-2 -right-2 bg-yellow-400 text-yellow-900 px-3 py-1 rounded-full text-xs font-bold z-10 animate-bounce">
                                <i class="fas fa-star mr-1"></i>TERPOPULER
                            </div>
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=400&h=250&fit=crop" class="w-full h-64 object-cover" alt="Paket Premium">
                                <div class="absolute top-4 left-4">
                                    <span class="bg-yellow-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                                        <i class="fas fa-crown mr-2"></i>Premium
                                    </span>
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-6">
                                <h5 class="text-xl font-bold text-gray-800 mb-3">Paket Premium Eksekutif</h5>
                                <p class="text-gray-600 mb-4 leading-relaxed">Menu premium dengan variasi lengkap, porsi besar dan bahan berkualitas tinggi untuk kepuasan maksimal.</p>
                                <div class="bg-gradient-to-r from-yellow-50 to-orange-50 rounded-xl p-4 mb-6 text-center border-2 border-yellow-200">
                                    <span class="text-3xl font-bold text-yellow-600">Rp 45.000</span>
                                    <span class="text-gray-500 text-sm">/hari</span>
                                </div>
                                <div class="space-y-3">
                                    <button class="detail-btn w-full bg-yellow-500 text-white py-3 rounded-xl font-semibold hover:bg-yellow-600 transition-colors duration-300 transform hover:scale-105"
                                            data-name="Paket Premium Eksekutif"
                                            data-price="45000"
                                            data-category="premium"
                                            data-description="Menu premium dengan kualitas terbaik dan variasi lengkap untuk kepuasan maksimal"
                                            data-includes="Nasi premium, Daging sapi/ayam fillet, Seafood (ikan/udang), Sayur organik, Tempe/tahu spesial, Kerupuk premium, Buah import, Jus buah, Air mineral">
                                        <i class="fas fa-info-circle mr-2"></i>Lihat Detail
                                    </button>
                                    <button class="w-full bg-gradient-to-r from-yellow-500 to-orange-500 text-white py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300">
                                        <i class="fas fa-cart-plus mr-2"></i>Berlangganan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paket Vegetarian -->
                    <div class="menu-item animate-fade-in group" data-category="vegetarian">
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=400&h=250&fit=crop" class="w-full h-64 object-cover" alt="Paket Vegetarian">
                                <div class="absolute top-4 left-4">
                                    <span class="bg-green-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                                        <i class="fas fa-seedling mr-2"></i>Vegetarian
                                    </span>
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-6">
                                <h5 class="text-xl font-bold text-gray-800 mb-3">Paket Vegetarian Sehat</h5>
                                <p class="text-gray-600 mb-4 leading-relaxed">Menu khusus vegetarian dengan sayuran segar dan protein nabati berkualitas untuk hidup sehat.</p>
                                <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-4 mb-6 text-center">
                                    <span class="text-3xl font-bold text-green-600">Rp 35.000</span>
                                    <span class="text-gray-500 text-sm">/hari</span>
                                </div>
                                <div class="space-y-3">
                                    <button class="detail-btn w-full bg-green-600 text-white py-3 rounded-xl font-semibold hover:bg-green-700 transition-colors duration-300 transform hover:scale-105"
                                            data-name="Paket Vegetarian Sehat"
                                            data-price="35000"
                                            data-category="vegetarian"
                                            data-description="Menu vegetarian sehat dengan sayuran organik dan protein nabati lengkap"
                                            data-includes="Nasi merah, Sayur organik variasi, Tahu/tempe spesial, Protein nabati, Kerupuk sayur, Buah segar, Jus sayur, Air mineral">
                                        <i class="fas fa-info-circle mr-2"></i>Lihat Detail
                                    </button>
                                    <button class="w-full bg-gradient-to-r from-green-500 to-emerald-500 text-white py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300">
                                        <i class="fas fa-cart-plus mr-2"></i>Berlangganan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paket Diet -->
                    <div class="menu-item animate-fade-in group" data-category="diet">
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=400&h=250&fit=crop" class="w-full h-64 object-cover" alt="Paket Diet">
                                <div class="absolute top-4 left-4">
                                    <span class="bg-cyan-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                                        <i class="fas fa-heartbeat mr-2"></i>Diet
                                    </span>
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-6">
                                <h5 class="text-xl font-bold text-gray-800 mb-3">Paket Diet Seimbang</h5>
                                <p class="text-gray-600 mb-4 leading-relaxed">Menu khusus diet dengan kalori terkontrol dan nutrisi seimbang untuk mencapai berat badan ideal.</p>
                                <div class="bg-gradient-to-r from-cyan-50 to-blue-50 rounded-xl p-4 mb-6 text-center">
                                    <span class="text-3xl font-bold text-cyan-600">Rp 40.000</span>
                                    <span class="text-gray-500 text-sm">/hari</span>
                                </div>
                                <div class="space-y-3">
                                    <button class="detail-btn w-full bg-cyan-500 text-white py-3 rounded-xl font-semibold hover:bg-cyan-600 transition-colors duration-300 transform hover:scale-105"
                                            data-name="Paket Diet Seimbang"
                                            data-price="40000"
                                            data-category="diet"
                                            data-description="Menu diet dengan kalori terkontrol (~500-600 kal) dan nutrisi seimbang"
                                            data-includes="Nasi merah porsi kecil, Protein rendah lemak, Sayur rebus/kukus, Buah rendah gula, Air lemon, Suplemen (opsional)">
                                        <i class="fas fa-info-circle mr-2"></i>Lihat Detail
                                    </button>
                                    <button class="w-full bg-gradient-to-r from-cyan-500 to-blue-500 text-white py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300">
                                        <i class="fas fa-cart-plus mr-2"></i>Berlangganan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paket Keluarga -->
                    <div class="menu-item animate-fade-in group" data-category="ekonomis">
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=400&h=250&fit=crop" class="w-full h-64 object-cover" alt="Paket Keluarga">
                                <div class="absolute top-4 left-4">
                                    <span class="bg-red-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                                        <i class="fas fa-home mr-2"></i>Keluarga
                                    </span>
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-6">
                                <h5 class="text-xl font-bold text-gray-800 mb-3">Paket Keluarga (4 Porsi)</h5>
                                <p class="text-gray-600 mb-4 leading-relaxed">Paket hemat untuk keluarga dengan 4 porsi makanan lengkap dan variasi menu yang disukai semua anggota keluarga.</p>
                                <div class="bg-gradient-to-r from-red-50 to-pink-50 rounded-xl p-4 mb-6 text-center">
                                    <span class="text-3xl font-bold text-red-600">Rp 90.000</span>
                                    <span class="text-gray-500 text-sm">/hari</span>
                                </div>
                                <div class="space-y-3">
                                    <button class="detail-btn w-full bg-red-500 text-white py-3 rounded-xl font-semibold hover:bg-red-600 transition-colors duration-300 transform hover:scale-105"
                                            data-name="Paket Keluarga (4 Porsi)"
                                            data-price="90000"
                                            data-category="keluarga"
                                            data-description="Paket hemat untuk keluarga dengan 4 porsi makanan lengkap dan variasi menu"
                                            data-includes="Nasi putih 4 porsi, Ayam goreng/bakar 4 potong, Sayur sop/capcay 4 porsi, Tempe/tahu goreng, Kerupuk, Buah segar, Air mineral 4 botol">
                                        <i class="fas fa-info-circle mr-2"></i>Lihat Detail
                                    </button>
                                    <button class="w-full bg-gradient-to-r from-red-500 to-pink-500 text-white py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300">
                                        <i class="fas fa-cart-plus mr-2"></i>Berlangganan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paket Anak -->
                    <div class="menu-item animate-fade-in group" data-category="ekonomis">
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1569420067112-b57b4f024595?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-64 object-cover" alt="Paket Anak">
                                <div class="absolute top-4 left-4">
                                    <span class="bg-pink-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                                        <i class="fas fa-child mr-2"></i>Anak
                                    </span>
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-6">
                                <h5 class="text-xl font-bold text-gray-800 mb-3">Paket Anak Sehat</h5>
                                <p class="text-gray-600 mb-4 leading-relaxed">Menu khusus anak dengan gizi seimbang dan rasa yang disukai anak-anak untuk tumbuh kembang optimal.</p>
                                <div class="bg-gradient-to-r from-pink-50 to-purple-50 rounded-xl p-4 mb-6 text-center">
                                    <span class="text-3xl font-bold text-pink-600">Rp 20.000</span>
                                    <span class="text-gray-500 text-sm">/hari</span>
                                </div>
                                <div class="space-y-3">
                                    <button class="detail-btn w-full bg-pink-500 text-white py-3 rounded-xl font-semibold hover:bg-pink-600 transition-colors duration-300 transform hover:scale-105"
                                            data-name="Paket Anak Sehat"
                                            data-price="20000"
                                            data-category="anak"
                                            data-description="Menu khusus anak dengan gizi seimbang dan cita rasa yang disukai anak-anak"
                                            data-includes="Nasi putih porsi anak, Ayam goreng/nugget, Sayur wortel/brokoli, Telur dadar, Buah potong, Susu kotak, Air mineral">
                                        <i class="fas fa-info-circle mr-2"></i>Lihat Detail
                                    </button>
                                    <button class="w-full bg-gradient-to-r from-pink-500 to-purple-500 text-white py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300">
                                        <i class="fas fa-cart-plus mr-2"></i>Berlangganan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Detail Modal -->
        <div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 items-center justify-center p-4">
            <div class="bg-white rounded-2xl max-w-4xl w-full max-h-screen overflow-y-auto animate-bounce-in">
                <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white p-6 rounded-t-2xl">
                    <div class="flex justify-between items-center">
                        <h5 class="text-2xl font-bold" id="modalTitle">Detail Paket</h5>
                        <button id="closeModal" class="text-white hover:text-gray-300 text-2xl">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?w=400&h=300&fit=crop" class="w-full h-64 object-cover rounded-xl shadow-lg" alt="Package Image" id="modalImage">
                        </div>
                        <div>
                            <h4 class="text-2xl font-bold text-gray-800 mb-4" id="modalTitleContent">Nama Paket</h4>
                            <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-xl p-4 mb-4">
                                <p class="text-3xl font-bold text-blue-600" id="modalPrice">Harga</p>
                            </div>
                            <p class="text-gray-600 mb-6 leading-relaxed" id="modalDescription">Deskripsi paket</p>
                            
                            <h6 class="text-lg font-semibold text-gray-800 mb-4">Menu Termasuk:</h6>
                            <ul id="modalIncludes" class="space-y-2 mb-6">
                                <!-- Dynamic content -->
                            </ul>
                            
                            <div class="mb-6">
                                <h6 class="text-lg font-semibold text-gray-800 mb-3">Keunggulan:</h6>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">
                                        <i class="fas fa-check mr-1"></i>Bahan Segar
                                    </span>
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">
                                        <i class="fas fa-truck mr-1"></i>Antar Cepat
                                    </span>
                                    <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-semibold">
                                        <i class="fas fa-utensils mr-1"></i>Higienis
                                    </span>
                                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">
                                        <i class="fas fa-heart mr-1"></i>Bergizi
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-6 py-4 rounded-b-2xl flex justify-end space-x-4">
                    <button id="closeModalBtn" class="px-6 py-3 bg-gray-300 text-gray-700 rounded-xl font-semibold hover:bg-gray-400 transition-colors duration-300">
                        Tutup
                    </button>
                    <button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-semibold hover:shadow-lg transition-all duration-300">
                        <i class="fas fa-cart-plus mr-2"></i>Berlangganan Sekarang
                    </button>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <section class="py-20 bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-800 text-white relative overflow-hidden">
            <div class="absolute inset-0">
                <div class="absolute top-10 left-10 w-32 h-32 bg-white/10 rounded-full animate-pulse-slow"></div>
                <div class="absolute bottom-10 right-10 w-24 h-24 bg-white/10 rounded-full animate-pulse-slow"></div>
                <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white/10 rounded-full animate-bounce"></div>
            </div>
            <div class="container mx-auto px-6 text-center relative">
                <div class="animate-slide-up">
                    <h3 class="text-4xl font-bold mb-6">Dapatkan Penawaran Terbaru!</h3>
                    <p class="text-xl mb-8 text-blue-100 max-w-2xl mx-auto">
                        Berlangganan newsletter untuk mendapatkan info promo dan menu terbaru langsung ke email Anda
                    </p>
                    <div class="max-w-md mx-auto">
                        <div class="flex bg-white/20 backdrop-blur-sm rounded-2xl p-2">
                            <input type="email" class="flex-1 bg-transparent text-white placeholder-blue-200 px-4 py-3 rounded-xl focus:outline-none" placeholder="Masukkan email Anda">
                            <button class="bg-white text-blue-600 px-6 py-3 rounded-xl font-semibold hover:bg-blue-50 transition-colors duration-300 flex items-center">
                                <i class="fas fa-paper-plane mr-2"></i>Berlangganan
                            </button>
                        </div>
                    </div>
                    <p class="text-blue-200 text-sm mt-4">
                        <i class="fas fa-shield-alt mr-2"></i>Kami tidak akan mengirim spam. Data Anda aman bersama kami.
                    </p>
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
                        <h4 class="text-3xl font-bold text-gray-800 mb-2">1000+</h4>
                        <p class="text-gray-600">Pelanggan Puas</p>
                    </div>
                    <div class="animate-fade-in">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-utensils text-2xl text-green-600"></i>
                        </div>
                        <h4 class="text-3xl font-bold text-gray-800 mb-2">50+</h4>
                        <p class="text-gray-600">Menu Variasi</p>
                    </div>
                    <div class="animate-fade-in">
                        <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-clock text-2xl text-yellow-600"></i>
                        </div>
                        <h4 class="text-3xl font-bold text-gray-800 mb-2">30 Menit</h4>
                        <p class="text-gray-600">Waktu Antar</p>
                    </div>
                    <div class="animate-fade-in">
                        <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-star text-2xl text-purple-600"></i>
                        </div>
                        <h4 class="text-3xl font-bold text-gray-800 mb-2">4.9/5</h4>
                        <p class="text-gray-600">Rating Pelanggan</p>
                    </div>
                </div>
            </div>
        </section>

        <script>
            // Filter functionality
            document.addEventListener('DOMContentLoaded', function() {
                const filterBtns = document.querySelectorAll('.filter-btn');
                const menuItems = document.querySelectorAll('.menu-item');
                
                filterBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        // Remove active class from all buttons
                        filterBtns.forEach(b => {
                            b.classList.remove('bg-blue-600', 'text-white');
                            b.classList.add('bg-transparent', 'text-gray-600');
                        });
                        
                        // Add active class to clicked button
                        this.classList.remove('bg-transparent', 'text-gray-600');
                        this.classList.add('bg-blue-600', 'text-white');
                        
                        const filter = this.getAttribute('data-filter');
                        
                        menuItems.forEach((item, index) => {
                            if (filter === 'all' || item.getAttribute('data-category') === filter) {
                                item.style.display = 'block';
                                setTimeout(() => {
                                    item.classList.add('animate-fade-in');
                                }, index * 100);
                            } else {
                                item.style.display = 'none';
                                item.classList.remove('animate-fade-in');
                            }
                        });
                    });
                });
                
                // Detail modal functionality
                const detailBtns = document.querySelectorAll('.detail-btn');
                const modal = document.getElementById('detailModal');
                const closeModal = document.getElementById('closeModal');
                const closeModalBtn = document.getElementById('closeModalBtn');
                
                detailBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        const name = this.getAttribute('data-name');
                        const price = this.getAttribute('data-price');
                        const description = this.getAttribute('data-description');
                        const includes = this.getAttribute('data-includes');
                        
                        // Update modal content
                        document.getElementById('modalTitle').textContent = name;
                        document.getElementById('modalTitleContent').textContent = name;
                        document.getElementById('modalPrice').textContent = 'Rp ' + Number(price).toLocaleString('id-ID') + ' /hari';
                        document.getElementById('modalDescription').textContent = description;
                        
                        // Update includes list
                        const includesList = document.getElementById('modalIncludes');
                        includesList.innerHTML = '';
                        includes.split(', ').forEach(item => {
                            const li = document.createElement('li');
                            li.innerHTML = `<div class="flex items-center bg-gray-50 p-3 rounded-lg">
                                            <i class="fas fa-check text-green-500 mr-3"></i>
                                            <span class="text-gray-700">${item}</span>
                                            </div>`;
                            includesList.appendChild(li);
                        });
                        
                        modal.classList.remove('hidden');
                        modal.classList.add('flex');
                        document.body.classList.add('overflow-hidden');
                    });
                });
                
                // Close modal functionality
                [closeModal, closeModalBtn].forEach(btn => {
                    btn.addEventListener('click', function() {
                        modal.classList.add('hidden');
                        modal.classList.remove('flex');
                        document.body.classList.remove('overflow-hidden');
                    });
                });
                
                // Close modal when clicking outside
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        modal.classList.add('hidden');
                        modal.classList.remove('flex');
                        document.body.classList.remove('overflow-hidden');
                    }
                });
                
                // Smooth scroll for better UX
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();
                        document.querySelector(this.getAttribute('href')).scrollIntoView({
                            behavior: 'smooth'
                        });
                    });
                });
                
                // Add scroll effect to filter section
                window.addEventListener('scroll', function() {
                    const filterSection = document.querySelector('section.sticky');
                    if (window.scrollY > 100) {
                        filterSection.classList.add('shadow-xl');
                    } else {
                        filterSection.classList.remove('shadow-xl');
                    }
                });
            });
        </script>
    </body>
    </html>
</x-layout>