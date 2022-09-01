<x-layout>
    <x-header>
    </x-header>
    <x-setting heading="Add Quotes">
        <form method="POST" action="/quote/store">
            @csrf
            <div class="my-6">
                <label class="block mb-2  text-lg text-gray-700" for="title_en">Quote (English)</label>
                <input class="text-black text-lg p-2 w-full rounded" type="text" name="title_en" required>
            </div>
            <div class="my-6">
                <label class="block mb-2  text-lg text-gray-700" for="title_ka">Quote (Georgian)</label>
                <input class="text-black text-lg p-2 w-full rounded" type="text" name="title_ka" required>
            </div>
            <div class="my-6">
                <label class="block mb-2  text-lg text-gray-700" for="movie">Choose Movie</label>
                <select name="category_id" id="category_id" class="text-black text-xl">
                    @foreach (\App\Models\Movie::all() as $movie)
                        <option 
                        value="{{ $movie->id }}"
                        {{ old('movie_id') == $movie->id ? 'selected' : '' }}
                            >
                            {{ ucwords($movie->title) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-8">
            <button type="submit"
            class="bg-slate-100 text-lg text-black rounded py-2 px-3 hover:bg-dark-gray"
            >
            Add Quote
            </button>
        </div>
    </x-setting>
</x-layout>