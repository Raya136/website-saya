<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Saya') - Website Saya</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background:#FFFDF7; color:#2B2620; }
        .font-serif-display { font-family: 'Fraunces', serif; }
        .text-accent { color:#E8B34B; }
        .bg-accent { background:#E8B34B; }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    {{-- NAVIGATION --}}
    <header class="border-b border-black/5 bg-[#FFFDF7]/90 backdrop-blur sticky top-0 z-50">
        <nav class="max-w-6xl mx-auto px-6 py-5 flex items-center justify-between">
            <a href="{{ route('home') }}" class="font-serif-display text-xl text-accent font-semibold">Website Saya</a>

            <div class="hidden md:flex items-center gap-8 text-sm tracking-wide">
                <a href="{{ route('home') }}" class="hover:text-accent {{ request()->routeIs('home') ? 'text-accent font-semibold' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="hover:text-accent {{ request()->routeIs('about') ? 'text-accent font-semibold' : '' }}">About</a>
                <a href="{{ route('contact') }}" class="hover:text-accent {{ request()->routeIs('contact') ? 'text-accent font-semibold' : '' }}">Contact</a>
            </div>

            <div class="flex items-center gap-3 text-sm">
                @auth
                    <a href="{{ route('dashboard') }}" class="px-4 py-2 rounded-full bg-black text-white">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="px-4 py-2 rounded-full border border-black/20">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="px-4 py-2">Sign In</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 rounded-full bg-accent text-black font-medium">Sign Up</a>
                @endauth
            </div>
        </nav>
    </header>

    <main class="flex-1">
        @yield('content')
    </main>

    <footer class="border-t border-black/5 py-8 text-center text-sm text-black/50">
        &copy; {{ date('Y') }} Website Saya. Dibuat sambil belajar Laravel.
    </footer>
</body>
</html>
