@extends('layouts.guest')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white p-10 rounded-xl shadow-lg">
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                    Reset Password
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Enter your email and new password
                </p>
            </div>

            <form class="mt-8 space-y-6" method="POST" action="{{ route('password.update') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="rounded-md shadow-sm space-y-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="email" name="email" type="email" required
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md py-3 border"
                                value="{{ $email ?? old('email') }}" autocomplete="email">
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="password" name="password" type="password" required
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md py-3 border"
                                autocomplete="new-password">
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="password_confirmation" name="password_confirmation" type="password" required
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md py-3 border"
                                autocomplete="new-password">
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                        Reset Password
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection