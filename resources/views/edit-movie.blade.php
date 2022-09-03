<x-layout>
    <x-header/>
    <x-setting heading="Update Movie">
        <form method="POST" action="/movies/{{ $movie->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            @csrf
            <x-form.input name="movie name (English)" attr="title_en" value="{{$movie->getTranslation('title','en')}}"/>
            <x-form.input name="movie name (Georgian)" attr="title_ka" value="{{$movie->getTranslation('title','en')}}"/>
            <x-form.button name="Update"/>
    </form>
    </x-setting>
</x-layout>
    