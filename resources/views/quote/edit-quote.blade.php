<x-layout>
    <x-header>
    </x-header>
    <x-setting heading="{{__('translate.Update_Quote')}}">
        <main class="flex-1 pl-80">
            <div class="max-w-3xl max-auto ">
            <form method="POST" action="{{ route('quotes.update', ['quote' => $quote->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <x-form.input name="quote_(English)" attr="quote_en" value="{{$quote->getTranslation('quote','en')}}"/>
                <x-form.input name="quote_(Georgian)" attr="quote_ka" value="{{$quote->getTranslation('quote','ka')}}"/>
                <div class="flex mt-6">
                    <div class="flex-1">
                        <x-form.input name="add_Image" attr="thumbnail" type="file" value="{{$quote->thumbnail}}"/>
                    </div>
                    <img src="{{asset('storage/' . $quote->thumbnail)}}" alt="" class="object-contain h-36 w-36">
                </div>
                <div class="my-6">
                    <label class="block mb-2  text-lg text-gray-700" for="movie">{{__('translate.Choose_Movie')}}</label>
                    <select name="movie_id" id="movie_id" class="text-black text-2xl" required>
                        @foreach ($movies as $movie)
                            <option 
                            value="{{ $movie->id }}"
                            {{ old('movie_id', $quote->movie_id) == $movie->id ? 'selected' : '' }}
                                >
                                {{ ucwords($movie->title) }}</option>
                        @endforeach
                    </select>
                </div>
                <x-form.button name="Update"/>
            </form>
            </div>
        </main>        
    </x-setting>
</x-layout>
