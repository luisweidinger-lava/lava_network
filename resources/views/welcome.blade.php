<x-layout>
    <div class="max-w-5xl mx-auto px-6 py-12">
        <h1 class="text-3xl font-bold">Welcome to the Luis Lava Network</h1>
        <p class="mt-2">Click the button below to view the list of Offers.</p>
        {{--<a href="{{ url('/offers') }}" class="inline-block mt-4 px-4 py-2 rounded bg-black text-white">--}}
            <a href="{{ route('offers.index') }}" class="inline-block mt-4 px-4 py-2 rounded bg-pink-300 text-white">
            Find Offers!
        </a>
    </div>
</x-layout>
