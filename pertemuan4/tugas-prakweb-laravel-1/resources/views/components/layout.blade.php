<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Tambahkan slot baru dengan nama title --}}
    <title>{{$title}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen">
    <nav class="bg-red-800 p-4 mb-4 flex justify-between items-center">
        <div class="flex gap-4">
            <a href="/" class="text-white hover:text-gray-200">Home</a>
            <a href="/about" class="text-white hover:text-gray-200">About</a>
            <a href="/service" class="text-white hover:text-gray-200">Service</a>
            <a href="/posts" class="text-white hover:text-gray-200">Posts</a>
            <a href="/categories" class="text-white hover:text-gray-200">Categories</a>
            <a href="/contact" class="text-white hover:text-gray-200">Contact</a>
          
            @auth
                <a href="{{ route('dashboard.index') }}" class="text-white hover:text-gray-200 font-bold">Dashboard</a>
            @endauth
        </div>
        <div class="flex gap-4 items-center">
            @auth
                <span class="text-white">{{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white px-4 py-1 rounded hover:bg-red-700">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="bg-green-600 text-white px-4 py-1 rounded hover:bg-[#006400]">
                    Login
                </a>
                <a href="{{ route('register') }}" class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-sky-500">
                    Register
                </a>
            @endauth
        </div>
    </nav>
    <main class="flex-1">
        {{$slot}}
    </main>

    
    <footer class="bg-gray-200 text-center py-4 mt-10 text-sm text-gray-600">
        <p>Copyright © 2025 Aderizqy</p>
    </footer>
</body>

</html>