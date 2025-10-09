
<x-layout>
    <h2 class="text-xl font-bold mb-4">Available Offers</h2>

    <div class="grid grid-cols-3 gap-4">
        @foreach ($offers as $offer)
            <x-card href="{{ route('offers.show', $offer->id) }}">View Details
                <h3 class="text-lg font-semibold mb-2">{{ $offer->title }}</h3>
                <p>{{ Str::limit($offer->body, 80) }}</p>
                <p><strong>City:</strong> {{ optional($offer->city)->name ?: 'Unknown' }}</p>
                <p><strong>Rent:</strong> €{{ number_format($offer->rent, 0, ',', '.') }}</p>
                <p><strong>Available from:</strong> {{ \Carbon\Carbon::parse($offer->available_from)->format('d M Y') }}</p>
            </x-card>
        @endforeach
    </div>
</x-layout>
