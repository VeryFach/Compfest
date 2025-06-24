@extends('layouts.guest')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold mb-6">Login</h1>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="mb-4">
                <label for="email" class="block mb-2">Email</label>
                <input id="email" type="email" name="email" required autofocus
                       class="w-full p-2 border rounded">
            </div>
            
            <div class="mb-4">
                <label for="password" class="block mb-2">Password</label>
                <input id="password" type="password" name="password" required
                       class="w-full p-2 border rounded">
            </div>
            
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">
                Login
            </button>
        </form>
        
        <div class="mt-4 text-center">
            <a href="{{ route('register') }}" class="text-blue-500">
                Belum punya akun? Daftar sekarang
            </a>
        </div>
    </div>
@endsection