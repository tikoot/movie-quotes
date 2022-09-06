<x-layout>
    <x-header>
    </x-header>
    <x-setting heading="{{__('translate.Add_Quotes')}}">
        <main class="flex-1 pl-80">
            <div class="max-w-3xl max-auto ">
                <form method="POST" action="{{ route('quotes.store') }}" enctype="multipart/form-data">
                    @csrf
                    <x-form.input name="quote_(English)" attr="quote_en"/>
                    <x-form.input name="quote_(Georgian)" attr="quote_ka"/>
                    <x-form.input name="add_Image" attr="thumbnail" type="file"/>
                    <div class="my-6">
                        <label class="block mb-2  text-lg text-gray-700" for="movie">{{__('translate.Choose_Movie')}}</label>
                        <select name="movie_id" id="movie_id" class="text-black text-2xl" required>
                            @foreach ($movies as $movie)
                                <option 
                                value="{{ $movie->id }}"
                                {{ old('movie_id') == $movie->id ? 'selected' : '' }}
                                    >
                                    {{ ucwords($movie->title) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <x-form.button name="Add"/>
            </form>
        </div>
    </main>
    </x-setting>
</x-layout>