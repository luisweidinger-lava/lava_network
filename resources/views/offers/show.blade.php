<x-layout>
    <h2 class="text-xl font-bold mb-4">{{ $offer->title }}</h2>

    <p>{{ $offer->body }}</p>
    <p><strong>City:</strong> {{ $offer->city->name ?? 'Unknown' }}</p>
    <p><strong>Rent:</strong> €{{ number_format($offer->rent, 0, ',', '.') }}</p>
    <p><strong>Available from:</strong> {{ \Carbon\Carbon::parse($offer->available_from)->format('d M Y') }}</p>


    <a href="{{ route('offers.index') }}" class="text-blue-500 underline mt-4 inline-block">← Back to all offers</a>
</x-layout>
