@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-2xl font-semibold mb-6">Admin Dashboard</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-blue-50 p-4 rounded-lg">
            <h3 class="text-lg font-medium text-blue-800">Total Users</h3>
            <p class="text-3xl font-bold">120</p>
        </div>
        
        <div class="bg-green-50 p-4 rounded-lg">
            <h3 class="text-lg font-medium text-green-800">Active Users</h3>
            <p class="text-3xl font-bold">98</p>
        </div>
        
        <div class="bg-yellow-50 p-4 rounded-lg">
            <h3 class="text-lg font-medium text-yellow-800">Pending</h3>
            <p class="text-3xl font-bold">5</p>
        </div>
    </div>
</div>
@endsection