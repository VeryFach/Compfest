<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Sidebar -->
        <div class="bg-indigo-800 text-white w-64 fixed h-full">
            <div class="p-4">
                <h1 class="text-2xl font-bold">Admin Panel</h1>
            </div>
            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 hover:bg-indigo-700">Dashboard</a>
                <a href="#" class="block py-2 px-4 hover:bg-indigo-700">Users</a>
                <a href="#" class="block py-2 px-4 hover:bg-indigo-700">Settings</a>
                <form method="POST" action="{{ route('logout') }}" class="block py-2 px-4 hover:bg-indigo-700">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="ml-64 p-6">
            @yield('content')
        </div>
    </div>
</body>
</html>