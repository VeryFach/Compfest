@extends('layouts.guest')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white p-10 rounded-xl shadow-lg">
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                    Reset your password
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Enter your email and we'll send you a link to reset your password
                </p>
            </div>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form class="mt-8 space-y-6" method="POST" action="{{ route('password.email') }}">
                @csrf
                
                <div class="rounded-md shadow-sm space-y-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md py-3 border"
                                placeholder="you@example.com"
                                value="{{ old('email') }}">
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                            </svg>
                        </span>
                        Send Reset Link
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Remember your password? Sign in
                </a>
            </div>
        </div>
    </div>
@endsection