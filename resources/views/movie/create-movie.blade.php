<x-layout>
    <x-header/>
    <x-setting heading="Add Movie">
        <form method="POST" action="{{ route('movies.store') }}">
            @csrf
            <x-form.input name="movie name (English)" attr="title_en"/>
            <x-form.input name="movie name (Georgian)" attr="title_ka"/>
            <x-form.button name="add movie"/>
    </form>
    </x-setting>
</x-layout>
    