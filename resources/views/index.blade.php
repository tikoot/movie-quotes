<x-layout>
    <section class=" mx-auto">
        <div class="flex items-center justify-center h-screen">
            <aside class="flex-none text-2xl pl-14">
                <div class="mb-7">
                    <a href="/change-locale/en" class="rounded-full border-2 px-2 py-2 border-white text-white">en</a>
                </div>
                <div>
                    <a href="/change-locale/ka" class="rounded-full border-2 bg-white px-2 py-2 border-white text-black">ka</a> 
                </div>
                </aside>
            <main class="flex-auto"> 
                <div class="flex flex-col flex-wrap justify-center items-center mt-16">
                    <div class="max-w-2xl overflow-hidden">
                        <img class="w-full rounded-xl" src="{{asset('storage/' . $quote->thumbnail)}}" alt="">
                        
                        <p class=" px-4 py-16 text-5xl text-center text-white">"{{ $quote->quote }}"</p>
                    </div>
                    <a href="{{route('movies.index', ['movie' =>$quote->movie->id])}}" class="text-5xl pt-10 text-white underline"> {{ $quote->movie->title }} </a>
                </div>
            </main> 
        </div>
    </section>
    </x-layout>