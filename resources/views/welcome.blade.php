<x-layout>
    <section class="flex flex-col items-center justify-center min-h-[80vh] text-center px-6">
        <div class="max-w-3xl">
            <h1 class="text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                Welcome to <span class="text-pink-500">the Luis Lava Network</span>
            </h1>

            <p class="text-lg text-gray-600 mb-8">
                Your platform to explore, create, and connect through Real Estate Offers.
                Stay inspired, stay connected — and discover what people around you love today.
            </p>

            <a href="{{ route('offers.index') }}"
               class="inline-block px-6 py-3 bg-pink-500 hover:bg-pink-600 text-white font-semibold rounded-lg shadow transition duration-300">
                🔍 Find Offers
            </a>

            <div class="mt-12 text-gray-500 text-sm">
                @auth
                    Logged in as <span class="font-medium text-gray-800">{{ auth()->user()->username ?? auth()->user()->email }}</span>.
                @else
                    <a href="{{ route('login') }}" class="underline text-pink-500 hover:text-pink-600">Login</a>
                    or <a href="#" class="underline text-pink-500 hover:text-pink-600">register</a> to get started.
                @endauth
            </div>
        </div>
    </section>

    <footer class="border-t mt-16 py-6 text-center text-sm text-gray-400">
        <p>© {{ date('Y') }} StayEasy Network — All rights reserved.</p>
    </footer>
</x-layout>





{{--
<x-layout>
    <div class="max-w-5xl mx-auto px-6 py-12">
        <h1 class="text-3xl font-bold">Welcome to the Luis Lava Network</h1>
        <p class="mt-2">Click the button below to view the list of Offers.</p>
            <a href="{{ route('offers.index') }}" class="inline-block mt-4 px-4 py-2 rounded bg-pink-300 text-white">
            Find Offers!
        </a>
    </div>
</x-layout>
--}}
