@props(['heading'])

<section class="py-8 max-w-7xl mx-auto text-white">
        <h1 class="text-4xl font-bold mb-8 pb-2 border-b">
            {{$heading}}
        </h1>
    <div class="flex text-3xl">
        <aside class="flex-none">
            <ul>
                <li class="my-6 pt-2">
                    <a href="{{ route('movies.show') }}">{{__('translate.movies')}}</a>
                </li>
                <li class="my-6">
                    <a href="{{ route('quotes.show') }}">{{__('translate.quotes')}}</a>
                </li>
                <li class="my-6">
                    <a href="{{ route('movies.create') }}">{{__('translate.add_movies')}}</a>
                </li>
                <li class="my-6">
                    <a href="{{ route('quotes.create') }}">{{__('translate.add_quotes')}}</a>
                </li>
            </ul>
        </aside>
        
        
            {{$slot}}
       
    </div>    

    </section>