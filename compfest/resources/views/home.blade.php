<x-layout title="Home - SEA Catering">
    <!-- Hero Section -->
    <section class="hero-section bg-gradient-to-r from-green-600 to-emerald-500 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold mb-4">SEA Catering</h1>
            <p class="text-2xl mb-8 font-light">Makanan Sehat, Kapan Saja, Di Mana Saja</p>
            <div class="max-w-3xl mx-auto">
                <p class="text-lg leading-relaxed">
                    Selamat datang di SEA Catering, layanan makanan sehat terdepan yang menghadirkan 
                    solusi nutrisi berkualitas tinggi langsung ke pintu Anda. Kami berkomitmen untuk 
                    menyediakan makanan bergizi yang dapat disesuaikan dengan kebutuhan dan preferensi 
                    Anda, dengan jangkauan pengiriman ke seluruh Indonesia.
                </p>
            </div>
            <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('menu') }}" class="bg-white text-green-600 hover:bg-gray-100 font-semibold py-3 px-8 rounded-lg transition-colors duration-300">
                    <i class="fas fa-utensils mr-2"></i>Lihat Menu
                </a>
                <a href="{{ route('subscribe') }}" class="border-2 border-white text-white hover:bg-white hover:text-green-600 font-semibold py-3 px-8 rounded-lg transition-colors duration-300">
                    <i class="fas fa-calendar-check mr-2"></i>Berlangganan
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-8">Tentang SEA Catering</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-8">
                    SEA Catering lahir dari visi untuk membuat makanan sehat lebih mudah diakses oleh semua orang. 
                    Yang dimulai sebagai bisnis kecil, kini telah berkembang menjadi sensasi nasional yang melayani 
                    ribuan pelanggan di seluruh Indonesia. Kami memahami bahwa setiap orang memiliki kebutuhan nutrisi 
                    yang berbeda, itulah mengapa kami menawarkan paket makanan yang dapat disesuaikan sepenuhnya.
                </p>
                <div class="grid md:grid-cols-3 gap-8 mt-12">
                    <div class="text-center">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Dibuat dengan Cinta</h3>
                        <p class="text-gray-600">Setiap hidangan disiapkan dengan perhatian detail dan menggunakan bahan-bahan segar berkualitas tinggi.</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Pengiriman Cepat</h3>
                        <p class="text-gray-600">Sistem logistik terpercaya yang memastikan makanan sampai dalam kondisi segar dan tepat waktu.</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Jaminan Kualitas</h3>
                        <p class="text-gray-600">Standar keamanan pangan tertinggi dan kontrol kualitas ketat di setiap tahap produksi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Packages Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Paket Populer</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="/api/placeholder/600/400" alt="Paket Ekonomis" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-2">Paket Ekonomis</h3>
                        <p class="text-gray-600 mb-4">Makanan bergizi dengan harga terjangkau untuk kebutuhan sehari-hari.</p>
                        <p class="text-xl font-bold text-green-600">Rp 25.000 <span class="text-sm font-normal text-gray-500">/hari</span></p>
                        <a href="{{ route('menu') }}" class="mt-4 inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg transition-colors duration-300">
                            Lihat Detail
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="/api/placeholder/600/400" alt="Paket Premium" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-2">Paket Premium</h3>
                        <p class="text-gray-600 mb-4">Menu premium dengan variasi lengkap dan porsi yang memuaskan.</p>
                        <p class="text-xl font-bold text-green-600">Rp 45.000 <span class="text-sm font-normal text-gray-500">/hari</span></p>
                        <a href="{{ route('menu') }}" class="mt-4 inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg transition-colors duration-300">
                            Lihat Detail
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="/api/placeholder/600/400" alt="Paket Vegetarian" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-2">Paket Vegetarian</h3>
                        <p class="text-gray-600 mb-4">Khusus untuk Anda yang menyukai menu sayuran dan makanan sehat.</p>
                        <p class="text-xl font-bold text-green-600">Rp 35.000 <span class="text-sm font-normal text-gray-500">/hari</span></p>
                        <a href="{{ route('menu') }}" class="mt-4 inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg transition-colors duration-300">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Fitur & Layanan Unggulan</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-500 text-white p-3 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Kustomisasi Makanan</h3>
                        </div>
                        <p class="text-gray-600">Sesuaikan menu Anda berdasarkan preferensi diet, alergi, dan target kesehatan. Pilih dari berbagai pilihan protein, karbohidrat, dan sayuran.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-500 text-white p-3 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Pengiriman Nasional</h3>
                        </div>
                        <p class="text-gray-600">Melayani pengiriman ke seluruh kota besar di Indonesia dengan sistem cold chain yang menjamin kesegaran makanan hingga sampai di tangan Anda.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-500 text-white p-3 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Informasi Nutrisi Lengkap</h3>
                        </div>
                        <p class="text-gray-600">Dapatkan informasi nutrisi terperinci untuk setiap hidangan, termasuk kalori, protein, karbohidrat, lemak, dan vitamin yang terkandung.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-500 text-white p-3 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Fleksibilitas Jadwal</h3>
                        </div>
                        <p class="text-gray-600">Pilih jadwal pengiriman yang sesuai dengan rutinitas Anda. Tersedia opsi harian, mingguan, atau bulanan dengan sistem berlangganan yang mudah.</p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-500 text-white p-3 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Konsultasi Ahli Gizi</h3>
                        </div>
                        <p class="text-gray-600">Tim ahli gizi kami siap membantu Anda merencanakan menu yang sesuai dengan kebutuhan kesehatan dan tujuan diet Anda.</p>
                    </div>

                    <!-- Feature 6 -->
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-500 text-white p-3 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Keamanan Pangan Terjamin</h3>
                        </div>
                        <p class="text-gray-600">Semua produk diproduksi di fasilitas berstandar HACCP dan ISO 22000, dengan sertifikasi halal dan proses kontrol kualitas yang ketat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Apa Kata Pelanggan Kami</h2>
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex mb-4 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-600 mb-4">"Makanannya sangat enak dan selalu segar! Pengiriman juga selalu tepat waktu. Sudah berlangganan 6 bulan dan sangat puas."</p>
                        <div class="font-semibold text-gray-800">Sarah Wijaya</div>
                        <div class="text-sm text-gray-500">Pelanggan Premium</div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex mb-4 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-600 mb-4">"Paket vegetarian SEA Catering sangat beragam dan lezat. Cocok untuk saya yang sedang menjalani diet sehat."</p>
                        <div class="font-semibold text-gray-800">Ahmad Pratama</div>
                        <div class="text-sm text-gray-500">Pelanggan Vegetarian</div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex mb-4 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="text-gray-600 mb-4">"Harga terjangkau dengan kualitas yang baik. Tim customer service juga sangat responsif dan ramah."</p>
                        <div class="font-semibold text-gray-800">Lisa Putri</div>
                        <div class="text-sm text-gray-500">Pelanggan Ekonomis</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-8">Hubungi Kami</h2>
                <p class="text-lg text-gray-600 mb-12">
                    Punya pertanyaan atau ingin konsultasi tentang menu yang tepat untuk Anda? 
                    Tim kami siap membantu Anda 24/7.
                </p>
                
                <div class="bg-gray-50 rounded-lg p-8 inline-block">
                    <div class="flex flex-col sm:flex-row items-center justify-center space-y-8 sm:space-y-0 sm:space-x-8">
                        <div class="text-center">
                            <div class="bg-green-500 text-white p-4 rounded-full mb-4 mx-auto w-16 h-16 flex items-center justify-center">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Manajer</h3>
                            <p class="text-gray-600 text-lg">Brian</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-green-500 text-white p-4 rounded-full mb-4 mx-auto w-16 h-16 flex items-center justify-center">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Telepon</h3>
                            <p class="text-gray-600 text-lg">08123456789</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-12">
                    <a href="{{ route('subscribe') }}" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-4 px-8 rounded-lg inline-block transition-colors duration-300">
                        <i class="fas fa-rocket mr-2"></i>Mulai Berlangganan Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="bg-gradient-to-r from-green-600 to-emerald-500 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Memulai Perjalanan Hidup Sehat Anda?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Bergabunglah dengan ribuan pelanggan yang telah merasakan manfaat makanan sehat dari SEA Catering. 
                Investasi terbaik adalah untuk kesehatan Anda.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('menu') }}" class="bg-white text-green-600 hover:bg-gray-100 font-semibold py-3 px-8 rounded-lg transition-colors duration-300">
                    <i class="fas fa-utensils mr-2"></i>Lihat Menu
                </a>
                <a href="{{ route('subscribe') }}" class="border-2 border-white text-white hover:bg-white hover:text-green-600 font-semibold py-3 px-8 rounded-lg transition-colors duration-300">
                    <i class="fas fa-calendar-check mr-2"></i>Berlangganan
                </a>
            </div>
        </div>
    </section>
</x-layout>