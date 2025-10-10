<x-layout>
    @section('content')
        <h1 class="text-3xl font-extrabold mb-6">Create a new offer</h1>

        <form method="POST" action="{{ route('offers.store') }}" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700">Title</label>
                <input name="title" type="text" value="{{ old('title') }}"
                       class="mt-1 w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-pink-500" required>
                @error('title') <p class="text-pink-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="body" rows="4"
                          class="mt-1 w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-pink-500">{{ old('body') }}</textarea>
                @error('body') <p class="text-pink-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Rent (€)</label>
                    <input name="rent" type="number" min="0" step="1" value="{{ old('rent') }}"
                           class="mt-1 w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-pink-500" required>
                    @error('rent') <p class="text-pink-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">City</label>
                    <select name="city_id" class="mt-1 w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-pink-500" required>
                        <option value="">Choose a city…</option>
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}" @selected(old('city_id') == $city->id)>
                                {{ $city->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('city_id') <p class="text-pink-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Available from</label>
                    <input name="available_from" type="date" value="{{ old('available_from') }}"
                           class="mt-1 w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-pink-500" required>
                    @error('available_from') <p class="text-pink-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                {{--Add Tag Checkboxes - for when Create Offer is running--}}
                <div>
                    <span class="block text-sm font-medium mb-1">Tags</span>
                    <div class="flex flex-wrap gap-3">
                        @foreach ($tags as $tag)
                            <label class="inline-flex items-center gap-2">
                                <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                        @checked(collect(old('tags'))->contains($tag->id))>
                                <span class="text-sm">{{ $tag->name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="px-4 py-2 rounded bg-pink-600 hover:bg-pink-700 text-white">
                    Save offer
                </button>
                <a href="{{ route('offers.index') }}" class="px-4 py-2 rounded border">Cancel</a>
            </div>
        </form>
    @endsection
</x-layout>
