<x-layout>
    <x-header>
    </x-header>
    <x-setting heading="Add Quotes">
        <form method="POST" action="/quote/store" enctype="multipart/form-data">
            @csrf
            <x-form.input name="quote (English)" attr="quote_en"/>
            <x-form.input name="quote (Georgian)" attr="quote_ka"/>
            <x-form.input name="add quote image" attr="thumbnail" type="file"/>
            <div class="my-6">
                <label class="block mb-2  text-lg text-gray-700" for="movie">Choose Movie</label>
                <select name="movie_id" id="movie_id" class="text-black text-xl" required>
                    @foreach (\App\Models\Movie::all() as $movie)
                        <option 
                        value="{{ $movie->id }}"
                        {{ old('movie_id') == $movie->id ? 'selected' : '' }}
                            >
                            {{ ucwords($movie->title) }}</option>
                    @endforeach
                </select>
            </div>
            <x-form.button name="add quote"/>
    </x-setting>
</x-layout>