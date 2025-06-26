@extends('layouts.guest')

@section('title', 'Daftar Akun Baru')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <!-- Card Container -->
        <div class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-xl border border-white/20">
            <!-- Header -->
            <div class="text-center">
                <div class="mx-auto h-16 w-16 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-user-plus text-2xl text-white"></i>
                </div>
                <h2 class="text-3xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                    Buat Akun Baru
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Sudah punya akun? 
                    <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 transition-colors duration-200">
                        Masuk disini
                    </a>
                </p>
            </div>
            
            <!-- Progress Indicator -->
            <div class="mt-6 mb-8">
                <div class="flex justify-between text-xs text-gray-500 mb-2">
                    <span>Langkah 1</span>
                    <span>Informasi Akun</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-2 rounded-full transition-all duration-300" style="width: 100%"></div>
                </div>
            </div>
            
            <!-- Form -->
            <form class="space-y-6" method="POST" action="{{ route('register') }}" id="registerForm">
                @csrf
                
                <!-- Name Input -->
                <div class="form-group">
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-user mr-2 text-indigo-500"></i>Nama Lengkap
                    </label>
                    <div class="relative">
                        <input id="name" name="name" type="text" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 bg-gray-50/50 hover:bg-white"
                               placeholder="Masukkan nama lengkap Anda"
                               value="{{ old('name') }}">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <i class="fas fa-check text-green-500 hidden" id="name-check"></i>
                        </div>
                    </div>
                    @error('name')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Email Input -->
                <div class="form-group">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-envelope mr-2 text-indigo-500"></i>Alamat Email
                    </label>
                    <div class="relative">
                        <input id="email" name="email" type="email" autocomplete="email" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 bg-gray-50/50 hover:bg-white"
                               placeholder="contoh@email.com"
                               value="{{ old('email') }}">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <i class="fas fa-check text-green-500 hidden" id="email-check"></i>
                        </div>
                    </div>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="form-group">
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-lock mr-2 text-indigo-500"></i>Password
                    </label>
                    <div class="relative">
                        <input id="password" name="password" type="password" autocomplete="new-password" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 bg-gray-50/50 hover:bg-white pr-12"
                               placeholder="Minimal 8 karakter">
                        <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" onclick="togglePassword('password')">
                            <i class="fas fa-eye text-gray-400 hover:text-gray-600" id="password-toggle"></i>
                        </button>
                    </div>
                    <!-- Password Strength Indicator -->
                    <div class="mt-2">
                        <div class="flex space-x-1" id="password-strength">
                            <div class="h-1 flex-1 bg-gray-200 rounded"></div>
                            <div class="h-1 flex-1 bg-gray-200 rounded"></div>
                            <div class="h-1 flex-1 bg-gray-200 rounded"></div>
                            <div class="h-1 flex-1 bg-gray-200 rounded"></div>
                        </div>
                        <p class="text-xs text-gray-500 mt-1" id="password-text">Password harus minimal 8 karakter</p>
                    </div>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Confirm Password Input -->
                <div class="form-group">
                    <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-check-double mr-2 text-indigo-500"></i>Konfirmasi Password
                    </label>
                    <div class="relative">
                        <input id="password_confirmation" name="password_confirmation" type="password" 
                               autocomplete="new-password" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 bg-gray-50/50 hover:bg-white pr-12"
                               placeholder="Ketik ulang password">
                        <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" onclick="togglePassword('password_confirmation')">
                            <i class="fas fa-eye text-gray-400 hover:text-gray-600" id="password_confirmation-toggle"></i>
                        </button>
                    </div>
                    <div class="mt-2">
                        <p class="text-xs text-gray-500 hidden" id="password-match">
                            <i class="fas fa-check text-green-500 mr-1"></i>Password cocok
                        </p>
                        <p class="text-xs text-red-500 hidden" id="password-mismatch">
                            <i class="fas fa-times text-red-500 mr-1"></i>Password tidak cocok
                        </p>
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="flex items-start space-x-3">
                    <div class="flex items-center h-5">
                        <input id="terms" name="terms" type="checkbox" required
                               class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded transition-colors duration-200">
                    </div>
                    <div class="text-sm">
                        <label for="terms" class="text-gray-700">
                            Saya menyetujui 
                            <a href="#" class="text-indigo-600 hover:text-indigo-500 font-medium transition-colors duration-200">Syarat dan Ketentuan</a>
                            serta 
                            <a href="#" class="text-indigo-600 hover:text-indigo-500 font-medium transition-colors duration-200">Kebijakan Privasi</a>
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit" id="submitBtn"
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent 
                                  text-sm font-semibold rounded-xl text-white bg-gradient-to-r from-indigo-600 to-purple-600 
                                  hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 
                                  focus:ring-indigo-500 transform transition-all duration-200 hover:scale-[1.02] active:scale-[0.98]
                                  disabled:opacity-50 disabled:cursor-not-allowed">
                        <span class="flex items-center">
                            <i class="fas fa-user-plus mr-2"></i>
                            <span id="submitText">Daftar Sekarang</span>
                            <i class="fas fa-spinner fa-spin ml-2 hidden" id="loadingSpinner"></i>
                        </span>
                    </button>
                </div>
            </form>
            
            <!-- Social Login -->
            <div class="mt-8">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white text-gray-500 font-medium">
                            Atau daftar dengan
                        </span>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-2 gap-3">
                    <button type="button" class="social-btn w-full inline-flex justify-center py-3 px-4 border border-gray-300 
                                  rounded-xl shadow-sm bg-white text-sm font-medium text-gray-700 
                                  hover:bg-gray-50 transition-all duration-200 hover:scale-[1.02]">
                        <i class="fab fa-google text-red-500 mr-2"></i>
                        Google
                    </button>

                    <button type="button" class="social-btn w-full inline-flex justify-center py-3 px-4 border border-gray-300 
                                  rounded-xl shadow-sm bg-white text-sm font-medium text-gray-700 
                                  hover:bg-gray-50 transition-all duration-200 hover:scale-[1.02]">
                        <i class="fab fa-facebook text-blue-500 mr-2"></i>
                        Facebook
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Security Notice -->
        <div class="text-center">
            <p class="text-xs text-gray-500 flex items-center justify-center">
                <i class="fas fa-shield-alt mr-1 text-green-500"></i>
                Data Anda dilindungi dengan enkripsi SSL 256-bit
            </p>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .form-group input:focus + div .fas {
        color: #6366f1;
    }
    
    .social-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .form-group {
        animation: fadeInUp 0.5s ease-out;
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registerForm');
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('password_confirmation');
    const submitBtn = document.getElementById('submitBtn');
    const loadingSpinner = document.getElementById('loadingSpinner');
    const submitText = document.getElementById('submitText');

    // Real-time validation
    nameInput.addEventListener('input', function() {
        validateName();
    });

    emailInput.addEventListener('input', function() {
        validateEmail();
    });

    passwordInput.addEventListener('input', function() {
        validatePassword();
        checkPasswordMatch();
    });

    confirmPasswordInput.addEventListener('input', function() {
        checkPasswordMatch();
    });

    function validateName() {
        const name = nameInput.value.trim();
        const checkIcon = document.getElementById('name-check');
        
        if (name.length >= 2) {
            nameInput.classList.remove('border-red-300');
            nameInput.classList.add('border-green-300');
            checkIcon.classList.remove('hidden');
        } else {
            nameInput.classList.remove('border-green-300');
            checkIcon.classList.add('hidden');
        }
    }

    function validateEmail() {
        const email = emailInput.value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const checkIcon = document.getElementById('email-check');
        
        if (emailRegex.test(email)) {
            emailInput.classList.remove('border-red-300');
            emailInput.classList.add('border-green-300');
            checkIcon.classList.remove('hidden');
        } else {
            emailInput.classList.remove('border-green-300');
            checkIcon.classList.add('hidden');
        }
    }

    function validatePassword() {
        const password = passwordInput.value;
        const strengthBars = document.querySelectorAll('#password-strength div');
        const passwordText = document.getElementById('password-text');
        
        let strength = 0;
        let feedback = '';
        
        if (password.length >= 8) strength++;
        if (/[a-z]/.test(password)) strength++;
        if (/[A-Z]/.test(password)) strength++;
        if (/[0-9]/.test(password)) strength++;
        if (/[^A-Za-z0-9]/.test(password)) strength++;
        
        // Reset bars
        strengthBars.forEach(bar => {
            bar.className = 'h-1 flex-1 bg-gray-200 rounded';
        });
        
        // Fill bars based on strength
        for (let i = 0; i < Math.min(strength, 4); i++) {
            const bar = strengthBars[i];
            if (strength <= 2) {
                bar.classList.add('bg-red-400');
                feedback = 'Password lemah';
            } else if (strength === 3) {
                bar.classList.add('bg-yellow-400');
                feedback = 'Password sedang';
            } else {
                bar.classList.add('bg-green-400');
                feedback = 'Password kuat';
            }
        }
        
        passwordText.textContent = feedback || 'Password harus minimal 8 karakter';
        passwordText.className = `text-xs mt-1 ${
            strength <= 2 ? 'text-red-500' : 
            strength === 3 ? 'text-yellow-500' : 'text-green-500'
        }`;
    }

    function checkPasswordMatch() {
        const password = passwordInput.value;
        const confirmPassword = confirmPasswordInput.value;
        const matchText = document.getElementById('password-match');
        const mismatchText = document.getElementById('password-mismatch');
        
        if (confirmPassword && password === confirmPassword) {
            confirmPasswordInput.classList.remove('border-red-300');
            confirmPasswordInput.classList.add('border-green-300');
            matchText.classList.remove('hidden');
            mismatchText.classList.add('hidden');
        } else if (confirmPassword) {
            confirmPasswordInput.classList.remove('border-green-300');
            confirmPasswordInput.classList.add('border-red-300');
            matchText.classList.add('hidden');
            mismatchText.classList.remove('hidden');
        } else {
            confirmPasswordInput.classList.remove('border-green-300', 'border-red-300');
            matchText.classList.add('hidden');
            mismatchText.classList.add('hidden');
        }
    }

    // Form submission
    form.addEventListener('submit', function(e) {
        const password = passwordInput.value;
        const confirmPassword = confirmPasswordInput.value;
        
        if (password !== confirmPassword) {
            e.preventDefault();
            showAlert('Password dan konfirmasi password tidak sama!', 'error');
            return;
        }
        
        if (password.length < 8) {
            e.preventDefault();
            showAlert('Password harus minimal 8 karakter!', 'error');
            return;
        }
        
        // Show loading state
        submitBtn.disabled = true;
        loadingSpinner.classList.remove('hidden');
        submitText.textContent = 'Mendaftarkan...';
    });

    function showAlert(message, type = 'info') {
        // Create alert element
        const alert = document.createElement('div');
        alert.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 ${
            type === 'error' ? 'bg-red-500 text-white' : 'bg-green-500 text-white'
        }`;
        alert.innerHTML = `
            <div class="flex items-center">
                <i class="fas ${type === 'error' ? 'fa-exclamation-circle' : 'fa-check-circle'} mr-2"></i>
                <span>${message}</span>
            </div>
        `;
        
        document.body.appendChild(alert);
        
        // Remove after 3 seconds
        setTimeout(() => {
            alert.remove();
        }, 3000);
    }
});

function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    const toggle = document.getElementById(inputId + '-toggle');
    
    if (input.type === 'password') {
        input.type = 'text';
        toggle.classList.remove('fa-eye');
        toggle.classList.add('fa-eye-slash');
    } else {
        input.type = 'password';
        toggle.classList.remove('fa-eye-slash');
        toggle.classList.add('fa-eye');
    }
}
</script>
@endpush