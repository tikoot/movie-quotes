@props(['heading'])

<section class="py-8 max-w-5xl mx-auto text-white">
        <h1 class="text-4xl font-bold mb-8 pb-2 border-b">
            {{$heading}}
        </h1>
    <div class="flex text-3xl">
        <aside class="flex-shrink-0">
            <ul>
                <li class="my-6 pt-2">
                    <a href="{{ route('movie.show') }}">Movies</a>
                </li>
                <li class="my-6">
                    <a href="{{ route('quote.show') }}">Quotes</a>
                </li>
                <li class="my-6">
                    <a href="{{ route('movie.create') }}">Add Movie</a>
                </li>
                <li class="my-6">
                    <a href="{{ route('quote.create') }}">Add Quote</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <div class="max-w-3xl mx-auto">
            {{$slot}}
        </div>
        </main>
    </div>    

    </section>