<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>StayEasy Network</title>

    {{-- Load Tailwind & app JS via Vite --}}
    @vite(['resources/css/app.css'])

</head>
<body class="min-h-screen bg-gray-50">
<header class="px-6 py-4 bg-white border-b">
    <div class="max-w-5xl mx-auto flex items-center justify-between">
        <a href="{{ route('home') }}" class="font-semibold">StayEasy Network</a>
        <nav class="flex items-center gap-4">
            <a href="{{ url('/offers') }}" class="hover:underline">All Offers</a>
            {{--<a href="{{ route('offers.index') }}" class="hover:underline">All Offers</a>--}}
            @auth
                <a href="{{ route('offers.create') }}" class="hover:underline">Create Offer</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button class="hover:underline">Logout</button>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="hover:underline">Login</a>
            @endguest
        </nav>
    </div>
</header>

<main class="max-w-5xl mx-auto p-6">
    {{--@yield('content')--}}
    {{ $slot }}
</main>
</body>
</html>