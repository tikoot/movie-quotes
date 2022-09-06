<x-layout>
    <x-header/>
    <x-setting heading="{{__('translate.update_movie')}}">
        <main class="flex-1 pl-80">
            <div class="max-w-3xl max-auto ">
            <form method="POST" action="{{route('movies.update', ['movie' => $movie->id])}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @csrf
                <x-form.input name="movie_(english)" attr="title_en" value="{{$movie->getTranslation('title','en')}}"/>
                <x-form.input name="movie_(georgian)" attr="title_ka" value="{{$movie->getTranslation('title','ka')}}"/>
                <x-form.button name="update"/>
        </form>
            </div>
        </main>
    </x-setting>
</x-layout>
    