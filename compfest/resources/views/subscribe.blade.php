<!-- resources/views/subscribe.blade.php -->
<x-layout title="Berlangganan - ">
    <!-- Header Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #2c5aa0, #1e3c72); color: white;">
        <div class="container">
            <div class="text-center">
                <h1 class="display-4 fw-bold mb-3">Berlangganan SEA Catering</h1>
                <p class="lead">Pilih paket berlangganan yang sesuai dengan kebutuhan Anda dan nikmati kemudahan setiap hari</p>
            </div>
        </div>
    </section>

    <!-- Subscription Plans -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="mb-4">Pilih Durasi Berlangganan</h2>
                    <p class="text-muted">Semakin lama berlangganan, semakin hemat harga yang Anda dapatkan</p>
                </div>
            </div>

            <div class="row">
                <!-- 1 Week Plan -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-light text-center">
                            <h4 class="my-2">Paket Mingguan</h4>
                            <small class="text-muted">Coba dulu selama 1 minggu</small>
                        </div>
                        <div class="card-body text-center">
                            <div class="price-display mb-4">
                                <span class="h2 text-primary">Mulai dari</span><br>
                                <span class="display-6 fw-bold text-dark">Rp 175.000</span>
                                <small class="text-muted d-block">untuk 7 hari</small>
                            </div>
                            <ul class="list-unstyled text-start">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>7 hari makanan</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Antar setiap hari</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bisa ganti paket</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Customer support</li>
                            </ul>
                            <button class="btn btn-outline-primary w-100" onclick="selectPlan('weekly')">
                                Pilih Paket Ini
                            </button>
                        </div>
                    </div>
                </div>

                <!-- 1 Month Plan -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow border-primary position-relative">
                        <div class="badge bg-primary position-absolute top-0 start-50 translate-middle px-3 py-2">
                            TERPOPULER
                        </div>
                        <div class="card-header bg-primary text-white text-center">
                            <h4 class="my-2">Paket Bulanan</h4>
                            <small>Hemat 15% dari harga mingguan</small>
                        </div>
                        <div class="card-body text-center">
                            <div class="price-display mb-4">
                                <span class="h2 text-primary">Mulai dari</span><br>
                                <span class="display-6 fw-bold text-dark">Rp 637.500</span>
                                <small class="text-muted d-block">untuk 30 hari</small>
                                <small class="text-success"><del class="text-muted">Rp 750.000</del> Hemat Rp 112.500</small>
                            </div>
                            <ul class="list-unstyled text-start">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>30 hari makanan</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Antar setiap hari</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bebas ganti paket</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Priority support</li>
                                <li class="mb-2"><i class="fas fa-star text-warning me-2"></i>Free ongkir</li>
                            </ul>
                            <button class="btn btn-primary w-100" onclick="selectPlan('monthly')">
                                Pilih Paket Ini
                            </button>
                        </div>
                    </div>
                </div>

                <!-- 3 Month Plan -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-success text-white text-center">
                            <h4 class="my-2">Paket 3 Bulan</h4>
                            <small>Hemat 25% + Bonus</small>
                        </div>
                        <div class="card-body text-center">
                            <div class="price-display mb-4">
                                <span class="h2 text-primary">Mulai dari</span><br>
                                <span class="display-6 fw-bold text-dark">Rp 1.687.500</span>
                                <small class="text-muted d-block">untuk 90 hari</small>
                                <small class="text-success"><del class="text-muted">Rp 2.250.000</del> Hemat Rp 562.500</small>
                            </div>
                            <ul class="list-unstyled text-start">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>90 hari makanan</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Antar setiap hari</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bebas ganti paket</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>VIP support</li>
                                <li class="mb-2"><i class="fas fa-star text-warning me-2"></i>Free ongkir</li>
                                <li class="mb-2"><i class="fas fa-gift text-danger me-2"></i>Bonus snack</li>
                            </ul>
                            <button class="btn btn-success w-100" onclick="selectPlan('quarterly')">
                                Pilih Paket Ini
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscription Form -->
    <section class="py-5 bg-light" id="subscriptionForm" style="display: none;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-clipboard-list me-2"></i>Form Berlangganan</h4>
                        </div>
                        <div class="card-body">
                            <form id="subscribeForm">
                                <!-- Step 1: Personal Info -->
                                <div class="step-content" id="step1">
                                    <h5 class="mb-4">Informasi Pribadi</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="fullName" class="form-label">Nama Lengkap *</label>
                                            <input type="text" class="form-control" id="fullName" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email *</label>
                                            <input type="email" class="form-control" id="email" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="phone" class="form-label">No. Telepon *</label>
                                            <input type="tel" class="form-control" id="phone" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="birthDate" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="birthDate">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Alamat Lengkap *</label>
                                        <textarea class="form-control" id="address" rows="3" required placeholder="Masukkan alamat lengkap untuk pengiriman"></textarea>
                                    </div>
                                </div>

                                <!-- Step 2: Package Selection -->
                                <div class="step-content" id="step2" style="display: none;">
                                    <h5 class="mb-4">Pilih Paket Makanan</h5>
                                    <div class="selected-duration mb-4 p-3 bg-light rounded">
                                        <h6>Durasi Berlangganan: <span id="selectedPlan" class="text-primary"></span></h6>
                                        <p class="mb-0">Total Biaya: <span id="totalCost" class="fw-bold text-success"></span></p>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="packageType" class="form-label">Jenis Paket *</label>
                                            <select class="form-select" id="packageType" required>
                                                <option value="">Pilih Paket</option>
                                                <option value="ekonomis" data-price="25000">Paket Ekonomis - Rp 25.000/hari</option>
                                                <option value="premium" data-price="45000">Paket Premium - Rp 45.000/hari</option>
                                                <option value="vegetarian" data-price="35000">Paket Vegetarian - Rp 35.000/hari</option>
                                                <option value="diet" data-price="40000">Paket Diet - Rp 40.000/hari</option>
                                                <option value="keluarga" data-price="90000">Paket Keluarga - Rp 90.000/hari</option>
                                                <option value="anak" data-price="20000">Paket Anak - Rp 20.000/hari</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="startDate" class="form-label">Tanggal Mulai *</label>
                                            <input type="date" class="form-control" id="startDate" required>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="deliveryTime" class="form-label">Waktu Pengiriman *</label>
                                            <select class="form-select" id="deliveryTime" required>
                                                <option value="">Pilih Waktu</option>
                                                <option value="07:00">07:00 - 08:00</option>
                                                <option value="11:00">11:00 - 12:00</option>
                                                <option value="17:00">17:00 - 18:00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="specialRequest" class="form-label">Permintaan Khusus</label>
                                            <input type="text" class="form-control" id="specialRequest" placeholder="Contoh: Tidak pedas, extra nasi">
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 3: Payment -->
                                <div class="step-content" id="step3" style="display: none;">
                                    <h5 class="mb-4">Metode Pembayaran</h5>
                                    
                                    <div class="order-summary mb-4 p-3 border rounded">
                                        <h6 class="border-bottom pb-2">Ringkasan Pesanan</h6>
                                        <div class="d-flex justify-content-between">
                                            <span>Paket:</span>
                                            <span id="summaryPackage">-</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span>Durasi:</span>
                                            <span id="summaryDuration">-</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span>Mulai:</span>
                                            <span id="summaryStartDate">-</span>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-between fw-bold">
                                            <span>Total:</span>
                                            <span id="summaryTotal" class="text-success">-</span>
                                        </div>
                                    </div>

                                    <div class="payment-methods">
                                        <h6 class="mb-3">Pilih Metode Pembayaran</h6>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-check payment-option">
                                                    <input class="form-check-input" type="radio" name="paymentMethod" id="bankTransfer" value="bank_transfer">
                                                    <label class="form-check-label w-100" for="bankTransfer">
                                                        <div class="p-3 border rounded">
                                                            <i class="fas fa-university text-primary me-2"></i>
                                                            <strong>Transfer Bank</strong>
                                                            <small class="d-block text-muted">BCA, BNI, Mandiri, BRI</small>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-check payment-option">
                                                    <input class="form-check-input" type="radio" name="paymentMethod" id="eWallet" value="e_wallet">
                                                    <label class="form-check-label w-100" for="eWallet">
                                                        <div class="p-3 border rounded">
                                                            <i class="fas fa-mobile-alt text-success me-2"></i>
                                                            <strong>E-Wallet</strong>
                                                            <small class="d-block text-muted">GoPay, OVO, DANA</small>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Navigation Buttons -->
                                <div class="d-flex justify-content-between mt-4">
                                    <button type="button" class="btn btn-secondary" id="prevBtn" onclick="changeStep(-1)" style="display: none;">
                                        <i class="fas fa-arrow-left me-2"></i>Sebelumnya
                                    </button>
                                    <button type="button" class="btn btn-primary ms-auto" id="nextBtn" onclick="changeStep(1)">
                                        Selanjutnya <i class="fas fa-arrow-right ms-2"></i>
                                    </button>
                                    <button type="submit" class="btn btn-success ms-auto" id="submitBtn" style="display: none;">
                                        <i class="fas fa-check me-2"></i>Konfirmasi Berlangganan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-center mb-5">Pertanyaan yang Sering Diajukan</h2>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Apakah bisa mengubah paket di tengah berlangganan?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya, Anda bisa mengubah paket makanan dengan memberitahu kami minimal H-1 sebelum pengiriman. Perbedaan harga akan disesuaikan pada tagihan berikutnya.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Bagaimana jika saya tidak ada di rumah saat pengiriman?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Kami akan menghubungi Anda terlebih dahulu sebelum pengiriman. Jika tidak ada, makanan akan dititipkan kepada tetangga atau security dengan pemberitahuan melalui WhatsApp.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Apakah ada jaminan jika makanan tidak sesuai?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Kami memiliki jaminan 100% kepuasan pelanggan. Jika makanan tidak sesuai atau ada masalah, kami akan menggantinya tanpa biaya tambahan.
                                </div>
                            </div>
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

        // Fungsi untuk memilih paket berlangganan
        function selectPlan(planType) {
            selectedPlanType = planType;
            document.getElementById('selectedPlan').textContent = planPrices[planType].label;
            document.getElementById('subscriptionForm').style.display = 'block';
            document.getElementById('subscriptionForm').scrollIntoView({ behavior: 'smooth' });
            updateTotalCost();
        }

        // Fungsi untuk mengubah step form
        function changeStep(direction) {
            if (direction === 1 && !validateCurrentStep()) {
                return;
            }

            const steps = document.querySelectorAll('.step-content');
            steps[currentStep - 1].style.display = 'none';
            
            currentStep += direction;
            
            if (currentStep < 1) currentStep = 1;
            if (currentStep > 3) currentStep = 3;
            
            steps[currentStep - 1].style.display = 'block';
            
            updateNavigationButtons();
            
            if (currentStep === 3) {
                updateOrderSummary();
            }
        }

        // Fungsi untuk memvalidasi step saat ini
        function validateCurrentStep() {
            const currentStepElement = document.getElementById(`step${currentStep}`);
            const requiredFields = currentStepElement.querySelectorAll('[required]');
            
            for (let field of requiredFields) {
                if (!field.value.trim()) {
                    field.focus();
                    field.classList.add('is-invalid');
                    return false;
                }
                field.classList.remove('is-invalid');
            }
            
            return true;
        }

        // Fungsi untuk update tombol navigasi
        function updateNavigationButtons() {
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const submitBtn = document.getElementById('submitBtn');
            
            prevBtn.style.display = currentStep > 1 ? 'block' : 'none';
            nextBtn.style.display = currentStep < 3 ? 'block' : 'none';
            submitBtn.style.display = currentStep === 3 ? 'block' : 'none';
        }

        // Fungsi untuk update total biaya
        function updateTotalCost() {
            const packageSelect = document.getElementById('packageType');
            if (packageSelect.value && selectedPlanType) {
                const dailyPrice = parseInt(packageSelect.options[packageSelect.selectedIndex].dataset.price);
                const planInfo = planPrices[selectedPlanType];
                const totalDays = planInfo.days;
                const subtotal = dailyPrice * totalDays;
                const discount = subtotal * planInfo.discount;
                const total = subtotal - discount;
                
                document.getElementById('totalCost').textContent = 
                    `Rp ${total.toLocaleString('id-ID')}`;
                
                if (discount > 0) {
                    document.getElementById('totalCost').innerHTML += 
                        ` <small class="text-success">(Hemat Rp ${discount.toLocaleString('id-ID')})</small>`;
                }
            }
        }

        // Fungsi untuk update ringkasan pesanan
        function updateOrderSummary() {
            const packageSelect = document.getElementById('packageType');
            const startDate = document.getElementById('startDate').value;
            
            if (packageSelect.value) {
                document.getElementById('summaryPackage').textContent = 
                    packageSelect.options[packageSelect.selectedIndex].text;
            }
            
            document.getElementById('summaryDuration').textContent = 
                planPrices[selectedPlanType].label;
            
            if (startDate) {
                const date = new Date(startDate);
                document.getElementById('summaryStartDate').textContent = 
                    date.toLocaleDateString('id-ID', { 
                        weekday: 'long', 
                        year: 'numeric', 
                        month: 'long', 
                        day: 'numeric' 
                    });
            }
            
            document.getElementById('summaryTotal').textContent = 
                document.getElementById('totalCost').textContent;
        }

        // Event listener untuk perubahan paket makanan
        document.getElementById('packageType').addEventListener('change', function() {
            updateTotalCost();
        });

        // Set tanggal minimum untuk mulai berlangganan (besok)
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        document.getElementById('startDate').min = tomorrow.toISOString().split('T')[0];

        // Event listener untuk form submission
        document.getElementById('subscribeForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!validateCurrentStep()) {
                return;
            }
            
            // Validasi metode pembayaran
            const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked');
            if (!paymentMethod) {
                alert('Silakan pilih metode pembayaran');
                return;
            }
            
            // Kumpulkan data form
            const formData = {
                // Data pribadi
                fullName: document.getElementById('fullName').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                birthDate: document.getElementById('birthDate').value,
                address: document.getElementById('address').value,
                
                // Data paket
                planType: selectedPlanType,
                packageType: document.getElementById('packageType').value,
                startDate: document.getElementById('startDate').value,
                deliveryTime: document.getElementById('deliveryTime').value,
                specialRequest: document.getElementById('specialRequest').value,
                
                // Data pembayaran
                paymentMethod: paymentMethod.value,
                totalAmount: document.getElementById('summaryTotal').textContent
            };
            
            // Simulasi proses berlangganan
            processSubscription(formData);
        });

        // Fungsi untuk memproses berlangganan
        function processSubscription(data) {
            // Tampilkan loading
            const submitBtn = document.getElementById('submitBtn');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Memproses...';
            submitBtn.disabled = true;
            
            // Simulasi API call
            setTimeout(() => {
                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                
                // Tampilkan konfirmasi sukses
                showSuccessModal(data);
            }, 2000);
        }

        // Fungsi untuk menampilkan modal sukses
        function showSuccessModal(data) {
            const modal = document.createElement('div');
            modal.className = 'modal fade show';
            modal.style.display = 'block';
            modal.style.backgroundColor = 'rgba(0,0,0,0.5)';
            
            modal.innerHTML = `
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-success text-white">
                            <h5 class="modal-title">
                                <i class="fas fa-check-circle me-2"></i>Berlangganan Berhasil!
                            </h5>
                        </div>
                        <div class="modal-body">
                            <div class="text-center mb-4">
                                <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                                <h4 class="mt-3">Terima kasih, ${data.fullName}!</h4>
                                <p class="text-muted">Berlangganan Anda telah berhasil didaftarkan</p>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Detail Berlangganan:</h6>
                                    <ul class="list-unstyled">
                                        <li><strong>Paket:</strong> ${document.getElementById('packageType').options[document.getElementById('packageType').selectedIndex].text}</li>
                                        <li><strong>Durasi:</strong> ${planPrices[data.planType].label}</li>
                                        <li><strong>Mulai:</strong> ${new Date(data.startDate).toLocaleDateString('id-ID')}</li>
                                        <li><strong>Waktu Kirim:</strong> ${data.deliveryTime}</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6>Informasi Pembayaran:</h6>
                                    <ul class="list-unstyled">
                                        <li><strong>Total:</strong> ${data.totalAmount}</li>
                                        <li><strong>Metode:</strong> ${data.paymentMethod === 'bank_transfer' ? 'Transfer Bank' : 'E-Wallet'}</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="alert alert-info mt-3">
                                <i class="fas fa-info-circle me-2"></i>
                                <strong>Langkah Selanjutnya:</strong><br>
                                1. Kami akan mengirim detail pembayaran ke email Anda<br>
                                2. Lakukan pembayaran sesuai instruksi<br>
                                3. Pengiriman akan dimulai setelah pembayaran dikonfirmasi
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" onclick="closeSuccessModal()">
                                Mengerti
                            </button>
                        </div>
                    </div>
                </div>
            `;
            
            document.body.appendChild(modal);
        }

        // Fungsi untuk menutup modal sukses
        function closeSuccessModal() {
            const modal = document.querySelector('.modal');
            if (modal) {
                modal.remove();
            }
            
            // Reset form atau redirect ke halaman lain
            // window.location.href = '/dashboard';
        }

        // Validasi real-time untuk input
        document.querySelectorAll('input[required], select[required], textarea[required]').forEach(field => {
            field.addEventListener('blur', function() {
                if (this.value.trim()) {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                } else {
                    this.classList.remove('is-valid');
                    this.classList.add('is-invalid');
                }
            });
        });

        // Validasi email format
        document.getElementById('email').addEventListener('input', function() {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (emailRegex.test(this.value)) {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            } else if (this.value.length > 0) {
                this.classList.remove('is-valid');
                this.classList.add('is-invalid');
            }
        });

        // Validasi nomor telepon
        document.getElementById('phone').addEventListener('input', function() {
            // Hanya izinkan angka dan beberapa karakter khusus
            this.value = this.value.replace(/[^0-9+\-\s]/g, '');
            
            // Validasi panjang minimal
            if (this.value.length >= 10) {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            } else if (this.value.length > 0) {
                this.classList.remove('is-valid');
                this.classList.add('is-invalid');
            }
        });
    </script>
    @endpush
</x-layout>