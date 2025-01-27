<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laragigs</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans h-screen flex flex-col ">
    <!-- Navigation Bar -->
    <nav class="flex flex-row items-center justify-between px-4 py-4 bg-blue-600 text-white shadow-lg">
        <div class="font-bold text-xl">Laragigs</div>
        @auth
        <h1>hello {{auth()->user()->name}}</h1>
        @else
        <div class="flex flex-row gap-6">
            <a href="/users/register" class="hover:text-blue-300 transition-all">Register</a>
            <a href="/users/login" class="hover:text-blue-300 transition-all">Login</a>
        </div>
        @endauth
    </nav>

    {{-- Main content --}}
    <main class="flex-grow overflow-y-auto m-8">
        @yield('content')
    </main>

    <!-- Footer (optional) -->
    <footer class="bg-blue-600 text-white py-6 text-center">
        <p>&copy; 2025 Laragigs. All rights reserved.</p>
        <a href="/listings/create">Create Job</a>
    </footer>
</body>
</html>