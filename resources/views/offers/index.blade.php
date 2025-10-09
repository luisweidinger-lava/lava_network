<x-layout>
    <div class="text-center mt-8">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-6">Available Offers</h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-6">
        @foreach ($offers as $offer)
            <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-6">
                <h3 class="text-xl font-semibold mb-2 text-gray-800">{{ $offer->title }}</h3>
                <p class="text-gray-600 mb-4">{{ Str::limit($offer->body, 100) }}</p>

                <div class="text-sm text-gray-500 space-y-1 mb-4">
                    <p><strong>City:</strong> {{ $offer->city->name }}</p>
                    <p><strong>Rent:</strong> €{{ number_format($offer->rent, 0, ',', '.') }}</p>
                    <p><strong>Available from:</strong> {{ \Carbon\Carbon::parse($offer->available_from)->format('d M Y') }}</p>
                </div>

                <div class="flex justify-between items-center">
                    <a href="{{ route('offers.show', $offer->id) }}" class="text-blue-600 font-semibold hover:underline">View Details</a>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-blue-600 transition">★ Favorite</button>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
