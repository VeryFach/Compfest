<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SEA Catering - Penyedia makanan sehat dan berkualitas dengan layanan katering harian">
    <meta name="keywords" content="catering, makanan sehat, katering harian, delivery makanan, SEA Catering">
    
    <title>{{ $title ? "$title | SEA Catering" : 'SEA Catering - Healthy Meal Delivery' }}</title>
    
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #2c5aa0;
            --primary-dark: #1e3c72;
            --secondary-color: #f8f9fa;
            --accent-color: #ff6b35;
            --accent-dark: #e55a2b;
            --text-color: #333;
            --light-gray: #f5f5f5;
            --dark-gray: #6c757d;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        main {
            flex: 1;
        }
        
        /* Navbar Styles */
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0.8rem 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand i {
            font-size: 1.8rem;
            margin-right: 0.5rem;
        }
        
        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem;
            margin: 0 0.2rem;
            border-radius: 0.3rem;
            transition: all 0.3s ease;
            color: var(--text-color) !important;
        }
        
        .nav-link:hover, 
        .nav-link.active {
            color: var(--accent-color) !important;
            background-color: rgba(255, 107, 53, 0.1);
        }
        
        .nav-link i {
            margin-right: 0.3rem;
            width: 1.2rem;
            text-align: center;
        }
        
        /* Button Styles */
        .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            font-weight: 500;
            padding: 0.5rem 1.5rem;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--accent-dark);
            border-color: var(--accent-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(255, 107, 53, 0.3);
        }
        
        .btn-outline-primary {
            color: var(--accent-color);
            border-color: var(--accent-color);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }
        
        /* Card Styles */
        .card {
            border: none;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .card-img-top {
            height: 180px;
            object-fit: cover;
        }
        
        .card-title {
            font-weight: 600;
            color: var(--primary-color);
        }
        
        /* Footer Styles */
        .footer {
            background-color: var(--primary-dark);
            color: white;
            padding: 3rem 0 1.5rem;
            margin-top: 3rem;
        }
        
        .footer h5 {
            font-weight: 600;
            margin-bottom: 1.2rem;
            display: flex;
            align-items: center;
        }
        
        .footer h5 i {
            margin-right: 0.6rem;
        }
        
        .footer a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer a:hover {
            color: white;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 0.8rem;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background-color: var(--accent-color);
            transform: translateY(-3px);
        }
        
        .footer hr {
            border-color: rgba(255, 255, 255, 0.1);
            margin: 2rem 0;
        }
        
        /* Utility Classes */
        .text-accent {
            color: var(--accent-color);
        }
        
        .bg-light-gray {
            background-color: var(--light-gray);
        }
        
        .section-title {
            position: relative;
            margin-bottom: 2rem;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 50px;
            height: 3px;
            background-color: var(--accent-color);
        }
        
        /* Form Styles */
        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.25);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.3rem;
            }
            
            .footer .col-md-4 {
                margin-bottom: 2rem;
            }
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="fas fa-utensils"></i>SEA Catering
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                            <i class="fas fa-home"></i>Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('menu*') ? 'active' : '' }}" href="{{ route('menu') }}">
                            <i class="fas fa-list"></i>Menu / Paket
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('subscribe*') ? 'active' : '' }}" href="{{ route('subscribe') }}">
                            <i class="fas fa-calendar-check"></i>Berlangganan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                            <i class="fas fa-phone"></i>Hubungi Kami
                        </a>
                    </li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a href="{{ route('cart') }}" class="btn btn-primary">
                            <i class="fas fa-shopping-cart"></i> Pesan Sekarang
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-4">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5><i class="fas fa-utensils"></i>SEA Catering</h5>
                    <p class="mt-3">Menyediakan makanan sehat dan berkualitas tinggi dengan layanan katering harian yang terpercaya untuk kebutuhan nutrisi Anda.</p>
                    <div class="mt-3">
                        <img src="/images/payment-methods.png" alt="Payment Methods" class="img-fluid" style="max-width: 250px;">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5><i class="fas fa-link"></i>Tautan Cepat</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><a href="{{ route('home') }}">Beranda</a></li>
                        <li class="mb-2"><a href="{{ route('menu') }}">Menu</a></li>
                        <li class="mb-2"><a href="{{ route('subscribe') }}">Berlangganan</a></li>
                        <li class="mb-2"><a href="{{ route('about') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('contact') }}">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5><i class="fas fa-info-circle"></i>Informasi</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><a href="{{ route('faq') }}">FAQ</a></li>
                        <li class="mb-2"><a href="{{ route('terms') }}">Syarat & Ketentuan</a></li>
                        <li class="mb-2"><a href="{{ route('privacy') }}">Kebijakan Privasi</a></li>
                        <li><a href="{{ route('delivery') }}">Area Pengiriman</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5><i class="fas fa-phone"></i>Hubungi Kami</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-3">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Jl. Contoh No. 123, Jakarta Selatan, Indonesia
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-phone me-2"></i>
                            +62 812 3456 7890
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-envelope me-2"></i>
                            info@seacatering.com
                        </li>
                        <li>
                            <div class="social-icons mt-2">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; {{ date('Y') }} SEA Catering. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                        Made with <i class="fas fa-heart text-danger"></i> in Indonesia
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Scripts -->
    <script>
        // Enable tooltips
        document.addEventListener('DOMContentLoaded', function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
            
            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>