<x-layout>
    <x-header/>
    <x-setting heading="{{__('translate.add_movies')}}">
        <main class="flex-1 pl-80">
            <div class="max-w-3xl max-auto ">
            <form method="POST" action="{{ route('movies.store') }}">
                @csrf
                <x-form.input name="movie_(english)" attr="title_en"/>
                <x-form.input name="movie_(georgian)" attr="title_ka"/>
                <x-form.button name="add"/>
        </form>
    </div>
    </main>
    </x-setting>
</x-layout>
    