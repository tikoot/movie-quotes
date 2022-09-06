<x-layout>
    <section class="mx-auto">
        <div class="flex items-center justify-center">
            <aside class="flex-none text-2xl pl-14">
                <div class="mb-7">
                    <a href="{{route('locale.change', ['locale' => 'en'])}}" class="rounded-full border-2 px-2 py-2 border-white text-white">en</a>
                </div>
                <div>
                    <a href="{{route('locale.change', ['locale' => 'ka'])}}" class="rounded-full border-2 bg-white px-2 py-2 border-white text-black">ka</a>
                </div>
            </aside>
            <main class="flex-auto">
                <div class="flex flex-col flex-wrap justify-center items-center pt-24">
                    <h1 class="text-5xl mb-8 text-white text-center "> {{$movie->title}} </h1>
                        @foreach($quotes as $quote)
                            <div class="max-w-2xl rounded-xl overflow-hidden mb-16">
                            <img class="w-full" src="{{asset('storage/' . $quote->thumbnail)}}" alt="">
                            <p class=" px-4 py-6 text-4xl text-center text-black bg-white ">"{{ $quote->quote }}"</p>
                            </div>
                        @endforeach
                </div>
            </main>
        </div>
    </section>
    </x-layout>