<x-layout>
    <x-header/>
    <x-setting heading="{{__('translate.Update_Movie')}}">
        <form method="POST" action="{{route('movies.update', ['movie' => $movie->id])}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            @csrf
            <x-form.input name="movie_(English)" attr="title_en" value="{{$movie->getTranslation('title','en')}}"/>
            <x-form.input name="movie_(Georgian)" attr="title_ka" value="{{$movie->getTranslation('title','ka')}}"/>
            <x-form.button name="Update"/>
    </form>
    </x-setting>
</x-layout>
    