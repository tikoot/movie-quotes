<x-layout>
    <x-header>
    </x-header>
    <x-setting heading="Update Quote">
        <form method="POST" action="{{ route('quote.update', ['quote' => $quote->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name="quote (English)" attr="quote_en" value="{{$quote->getTranslation('quote','en')}}"/>
            <x-form.input name="quote (Georgian)" attr="quote_ka" value="{{$quote->getTranslation('quote','ka')}}"/>
            <div class="flex mt-6">
                <div class="flex-1">
                     <x-form.input name="add quote image" attr="thumbnail" type="file" value="{{$quote->thumbnail}}"/>
                </div>
                <img src="{{asset('storage/' . $quote->thumbnail)}}" alt="" class="object-contain h-36 w-36">
            </div>
            <div class="my-6">
                <label class="block mb-2  text-lg text-gray-700" for="movie">Choose Movie</label>
                <select name="movie_id" id="movie_id" class="text-black text-xl" required>
                    @foreach (\App\Models\Movie::all() as $movie)
                        <option 
                        value="{{ $movie->id }}"
                        {{ old('movie_id', $quote->movie_id) == $movie->id ? 'selected' : '' }}
                            >
                            {{ ucwords($movie->title) }}</option>
                    @endforeach
                </select>
            </div>
            <x-form.button name="update"/>
    </x-setting>
</x-layout>
