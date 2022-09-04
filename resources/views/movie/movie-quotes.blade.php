<x-layout>
    <section>
        <div  class="flex flex-col flex-wrap justify-center items-center">
            <h1> {{$movie->title}} </h1>

            @foreach($quotes as $quote)
            <div>
                <img class="max-w-3xl h-sm" src="{{asset('storage/' . $quote->thumbnail)}}" alt="">
                <h2 class="font-medium text-black ">{{ $quote->quote }}</h2>
            </div>
            @endforeach
        </div>
    </section>
</x-layout>