@extends('layouts.guest')

@section('title', 'Daftar Akun Baru')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-md">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Buat Akun Baru
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Sudah punya akun? 
                <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Masuk disini
                </a>
            </p>
        </div>
        
        <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
            @csrf
            
            <div class="rounded-md shadow-sm space-y-4">
                <!-- Name Input -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input id="name" name="name" type="text" required 
                           class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 
                                  placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 
                                  focus:border-indigo-500 focus:z-10 sm:text-sm"
                           placeholder="Nama lengkap Anda"
                           value="{{ old('name') }}">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                    <input id="email" name="email" type="email" autocomplete="email" required 
                           class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 
                                  placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 
                                  focus:border-indigo-500 focus:z-10 sm:text-sm"
                           placeholder="Email Anda"
                           value="{{ old('email') }}">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" autocomplete="new-password" required 
                           class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 
                                  placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 
                                  focus:border-indigo-500 focus:z-10 sm:text-sm"
                           placeholder="Minimal 8 karakter">
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password Input -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" 
                           autocomplete="new-password" required 
                           class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 
                                  placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 
                                  focus:border-indigo-500 focus:z-10 sm:text-sm"
                           placeholder="Ketik ulang password">
                </div>
            </div>

            <!-- Terms and Conditions (optional) -->
            <div class="flex items-center">
                <input id="terms" name="terms" type="checkbox" required
                       class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                <label for="terms" class="ml-2 block text-sm text-gray-900">
                    Saya menyetujui <a href="#" class="text-indigo-600 hover:text-indigo-500">Syarat dan Ketentuan</a>
                </label>
            </div>

            <div>
                <button type="submit" 
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent 
                              text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 
                              focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Daftar Sekarang
                </button>
            </div>
        </form>
        
        <!-- Social Login (optional) -->
        <div class="mt-6">
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">
                        Atau daftar dengan
                    </span>
                </div>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-3">
                <div>
                    <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 
                                      rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 
                                      hover:bg-gray-50">
                        <span class="sr-only">Daftar dengan Google</span>
                        <i class="fab fa-google text-red-500"></i>
                    </a>
                </div>

                <div>
                    <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 
                                      rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 
                                      hover:bg-gray-50">
                        <span class="sr-only">Daftar dengan Facebook</span>
                        <i class="fab fa-facebook text-blue-500"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .fab {
        font-size: 1.25rem;
    }
</style>
@endpush

@push('scripts')
<script>
    // Validasi client-side sederhana
    document.querySelector('form').addEventListener('submit', function(e) {
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('password_confirmation').value;
        
        if (password !== confirmPassword) {
            e.preventDefault();
            alert('Password dan konfirmasi password tidak sama!');
        }
    });
</script>
@endpush