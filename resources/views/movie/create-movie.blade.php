<x-layout>
    <x-header/>
    <x-setting heading="{{__('translate.Add_Movies')}}">
        <form method="POST" action="{{ route('movies.store') }}">
            @csrf
            <x-form.input name="movie_(English)" attr="title_en"/>
            <x-form.input name="movie_(Georgian)" attr="title_ka"/>
            <x-form.button name="Add"/>
    </form>
    </x-setting>
</x-layout>
    