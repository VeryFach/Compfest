<!-- resources/views/menu.blade.php -->
<x-layout title="Menu & Paket - ">
    <!-- Header Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #2c5aa0, #1e3c72); color: white;">
        <div class="container">
            <div class="text-center">
                <h1 class="display-4 fw-bold mb-3">Menu & Paket Makanan</h1>
                <p class="lead">Pilih paket makanan yang sesuai dengan kebutuhan dan selera Anda</p>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="d-flex justify-content-center flex-wrap gap-2">
                        <button class="btn btn-outline-primary filter-btn active" data-filter="all">Semua Paket</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="ekonomis">Ekonomis</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="premium">Premium</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="vegetarian">Vegetarian</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="diet">Diet</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Items Section -->
    <section class="py-5">
        <div class="container">
            <div class="row" id="menuContainer">
                <!-- Paket Ekonomis -->
                <div class="col-lg-4 col-md-6 mb-4 menu-item" data-category="ekonomis">
                    <div class="card h-100 menu-card">
                        <img src="/api/placeholder/400/250" class="card-img-top" alt="Paket Ekonomis Harian">
                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-success mb-2 align-self-start">Ekonomis</span>
                            <h5 class="card-title">Paket Ekonomis Harian</h5>
                            <p class="card-text">Paket hemat dengan menu lengkap yang terdiri dari nasi, lauk pauk, sayur, dan buah.</p>
                            <div class="price-tag mb-3">
                                <span class="h4 text-primary fw-bold">Rp 25.000</span>
                                <small class="text-muted">/hari</small>
                            </div>
                            <div class="mt-auto">
                                <button class="btn btn-primary w-100 mb-2 detail-btn" 
                                        data-name="Paket Ekonomis Harian"
                                        data-price="25000"
                                        data-category="ekonomis"
                                        data-description="Paket hemat dengan menu lengkap yang cocok untuk kebutuhan sehari-hari"
                                        data-includes="Nasi putih, Ayam goreng/bakar, Sayur sop/capcay, Tempe/tahu goreng, Kerupuk, Buah segar, Air mineral">
                                    <i class="fas fa-info-circle me-2"></i>Lihat Detail
                                </button>
                                <a href="{{ route('subscribe') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-cart-plus me-2"></i>Berlangganan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paket Premium -->
                <div class="col-lg-4 col-md-6 mb-4 menu-item" data-category="premium">
                    <div class="card h-100 menu-card">
                        <img src="/api/placeholder/400/250" class="card-img-top" alt="Paket Premium Eksekutif">
                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-warning mb-2 align-self-start">Premium</span>
                            <h5 class="card-title">Paket Premium Eksekutif</h5>
                            <p class="card-text">Menu premium dengan variasi lengkap, porsi besar dan bahan berkualitas tinggi.</p>
                            <div class="price-tag mb-3">
                                <span class="h4 text-primary fw-bold">Rp 45.000</span>
                                <small class="text-muted">/hari</small>
                            </div>
                            <div class="mt-auto">
                                <button class="btn btn-primary w-100 mb-2 detail-btn" 
                                        data-name="Paket Premium Eksekutif"
                                        data-price="45000"
                                        data-category="premium"
                                        data-description="Menu premium dengan kualitas terbaik dan variasi lengkap untuk kepuasan maksimal"
                                        data-includes="Nasi premium, Daging sapi/ayam fillet, Seafood (ikan/udang), Sayur organik, Tempe/tahu spesial, Kerupuk premium, Buah import, Jus buah, Air mineral">
                                    <i class="fas fa-info-circle me-2"></i>Lihat Detail
                                </button>
                                <a href="{{ route('subscribe') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-cart-plus me-2"></i>Berlangganan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paket Vegetarian -->
                <div class="col-lg-4 col-md-6 mb-4 menu-item" data-category="vegetarian">
                    <div class="card h-100 menu-card">
                        <img src="/api/placeholder/400/250" class="card-img-top" alt="Paket Vegetarian Sehat">
                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-success mb-2 align-self-start">Vegetarian</span>
                            <h5 class="card-title">Paket Vegetarian Sehat</h5>
                            <p class="card-text">Menu khusus vegetarian dengan sayuran segar dan protein nabati berkualitas.</p>
                            <div class="price-tag mb-3">
                                <span class="h4 text-primary fw-bold">Rp 35.000</span>
                                <small class="text-muted">/hari</small>
                            </div>
                            <div class="mt-auto">
                                <button class="btn btn-primary w-100 mb-2 detail-btn" 
                                        data-name="Paket Vegetarian Sehat"
                                        data-price="35000"
                                        data-category="vegetarian"
                                        data-description="Menu vegetarian sehat dengan sayuran organik dan protein nabati lengkap"
                                        data-includes="Nasi merah, Sayur organik variasi, Tahu/tempe spesial, Protein nabati, Kerupuk sayur, Buah segar, Jus sayur, Air mineral">
                                    <i class="fas fa-info-circle me-2"></i>Lihat Detail
                                </button>
                                <a href="{{ route('subscribe') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-cart-plus me-2"></i>Berlangganan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paket Diet -->
                <div class="col-lg-4 col-md-6 mb-4 menu-item" data-category="diet">
                    <div class="card h-100 menu-card">
                        <img src="/api/placeholder/400/250" class="card-img-top" alt="Paket Diet Seimbang">
                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-info mb-2 align-self-start">Diet</span>
                            <h5 class="card-title">Paket Diet Seimbang</h5>
                            <p class="card-text">Menu khusus diet dengan kalori terkontrol dan nutrisi seimbang.</p>
                            <div class="price-tag mb-3">
                                <span class="h4 text-primary fw-bold">Rp 40.000</span>
                                <small class="text-muted">/hari</small>
                            </div>
                            <div class="mt-auto">
                                <button class="btn btn-primary w-100 mb-2 detail-btn" 
                                        data-name="Paket Diet Seimbang"
                                        data-price="40000"
                                        data-category="diet"
                                        data-description="Menu diet dengan kalori terkontrol (~500-600 kal) dan nutrisi seimbang"
                                        data-includes="Nasi merah porsi kecil, Protein rendah lemak, Sayur rebus/kukus, Buah rendah gula, Air lemon, Suplemen (opsional)">
                                    <i class="fas fa-info-circle me-2"></i>Lihat Detail
                                </button>
                                <a href="{{ route('subscribe') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-cart-plus me-2"></i>Berlangganan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paket Keluarga -->
                <div class="col-lg-4 col-md-6 mb-4 menu-item" data-category="ekonomis">
                    <div class="card h-100 menu-card">
                        <img src="/api/placeholder/400/250" class="card-img-top" alt="Paket Keluarga">
                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-danger mb-2 align-self-start">Keluarga</span>
                            <h5 class="card-title">Paket Keluarga (4 Porsi)</h5>
                            <p class="card-text">Paket hemat untuk keluarga dengan 4 porsi makanan lengkap.</p>
                            <div class="price-tag mb-3">
                                <span class="h4 text-primary fw-bold">Rp 90.000</span>
                                <small class="text-muted">/hari</small>
                            </div>
                            <div class="mt-auto">
                                <button class="btn btn-primary w-100 mb-2 detail-btn" 
                                        data-name="Paket Keluarga (4 Porsi)"
                                        data-price="90000"
                                        data-category="keluarga"
                                        data-description="Paket hemat untuk keluarga dengan 4 porsi makanan lengkap dan variasi menu"
                                        data-includes="Nasi putih 4 porsi, Ayam goreng/bakar 4 potong, Sayur sop/capcay 4 porsi, Tempe/tahu goreng, Kerupuk, Buah segar, Air mineral 4 botol">
                                    <i class="fas fa-info-circle me-2"></i>Lihat Detail
                                </button>
                                <a href="{{ route('subscribe') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-cart-plus me-2"></i>Berlangganan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paket Anak -->
                <div class="col-lg-4 col-md-6 mb-4 menu-item" data-category="ekonomis">
                    <div class="card h-100 menu-card">
                        <img src="/api/placeholder/400/250" class="card-img-top" alt="Paket Anak">
                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-pink mb-2 align-self-start" style="background-color: #e91e63 !important;">Anak</span>
                            <h5 class="card-title">Paket Anak Sehat</h5>
                            <p class="card-text">Menu khusus anak dengan gizi seimbang dan rasa yang disukai anak-anak.</p>
                            <div class="price-tag mb-3">
                                <span class="h4 text-primary fw-bold">Rp 20.000</span>
                                <small class="text-muted">/hari</small>
                            </div>
                            <div class="mt-auto">
                                <button class="btn btn-primary w-100 mb-2 detail-btn" 
                                        data-name="Paket Anak Sehat"
                                        data-price="20000"
                                        data-category="anak"
                                        data-description="Menu khusus anak dengan gizi seimbang dan cita rasa yang disukai anak-anak"
                                        data-includes="Nasi putih porsi anak, Ayam goreng/nugget, Sayur wortel/brokoli, Telur dadar, Buah potong, Susu kotak, Air mineral">
                                    <i class="fas fa-info-circle me-2"></i>Lihat Detail
                                </button>
                                <a href="{{ route('subscribe') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-cart-plus me-2"></i>Berlangganan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detail Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail Paket</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/api/placeholder/400/300" class="img-fluid rounded mb-3" alt="Package Image" id="modalImage">
                        </div>
                        <div class="col-md-6">
                            <h4 id="modalTitle">Nama Paket</h4>
                            <p class="lead text-primary fw-bold" id="modalPrice">Harga</p>
                            <p id="modalDescription">Deskripsi paket</p>
                            
                            <h6 class="mt-4 mb-3">Menu Termasuk:</h6>
                            <ul id="modalIncludes" class="list-unstyled">
                                <!-- Dynamic content -->
                            </ul>
                            
                            <div class="mt-4">
                                <h6>Keunggulan:</h6>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-success"><i class="fas fa-check me-1"></i>Bahan Segar</span>
                                    <span class="badge bg-info"><i class="fas fa-truck me-1"></i>Antar Cepat</span>
                                    <span class="badge bg-warning"><i class="fas fa-utensils me-1"></i>Higienis</span>
                                    <span class="badge bg-primary"><i class="fas fa-heart me-1"></i>Bergizi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <a href="{{ route('subscribe') }}" class="btn btn-primary">
                        <i class="fas fa-cart-plus me-2"></i>Berlangganan Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h3 class="mb-4">Dapatkan Penawaran Terbaru!</h3>
            <p class="lead mb-4">Berlangganan newsletter untuk mendapatkan info promo dan menu terbaru</p>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Masukkan email Anda">
                        <button class="btn btn-light" type="button">
                            <i class="fas fa-paper-plane me-2"></i>Berlangganan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const menuItems = document.querySelectorAll('.menu-item');
            
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filter = this.getAttribute('data-filter');
                    
                    menuItems.forEach(item => {
                        if (filter === 'all' || item.getAttribute('data-category') === filter) {
                            item.style.display = 'block';
                            item.classList.add('fade-in');
                        } else {
                            item.style.display = 'none';
                            item.classList.remove('fade-in');
                        }
                    });
                });
            });
            
            // Detail modal functionality
            const detailBtns = document.querySelectorAll('.detail-btn');
            const modal = new bootstrap.Modal(document.getElementById('detailModal'));
            
            detailBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const name = this.getAttribute('data-name');
                    const price = this.getAttribute('data-price');
                    const description = this.getAttribute('data-description');
                    const includes = this.getAttribute('data-includes');
                    
                    // Update modal content
                    document.getElementById('modalTitle').textContent = name;
                    document.getElementById('modalPrice').textContent = 'Rp ' + Number(price).toLocaleString('id-ID') + ' /hari';
                    document.getElementById('modalDescription').textContent = description;
                    
                    // Update includes list
                    const includesList = document.getElementById('modalIncludes');
                    includesList.innerHTML = '';
                    includes.split(', ').forEach(item => {
                        const li = document.createElement('li');
                        li.innerHTML = `<i class="fas fa-check text-success me-2"></i>${item}`;
                        li.className = 'mb-1';
                        includesList.appendChild(li);
                    });
                    
                    modal.show();
                });
            });
        });
    </script>
    
    <style>
        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        .filter-btn.active {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: white;
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .price-tag {
            background: linear-gradient(45deg, #f8f9fa, #e9ecef);
            padding: 10px;
            border-radius: 8px;
            text-align: center;
        }
        
        .badge {
            font-size: 0.75em;
            font-weight: 600;
        }
    </style>
    @endpush
</x-layout>