@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <h2 class="text-2xl font-semibold mb-4">User Dashboard</h2>
            <p>Welcome to your dashboard, {{ Auth::user()->name }}!</p>
            
            <div class="mt-6">
                <div class="bg-blue-100 p-4 rounded-lg">
                    <h3 class="text-lg font-medium">Your Profile</h3>
                    <p class="mt-2">Email: {{ Auth::user()->email }}</p>
                    <p>Role: {{ ucfirst(Auth::user()->role) }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection