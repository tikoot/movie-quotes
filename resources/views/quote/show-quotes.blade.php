<x-layout>
    <x-header/>
    <x-setting heading="{{__('translate.Quotes')}}">
      <main class="flex-1">
        <div class=" max-w-5xl ">
          <div class="px-4 sm:px-6 lg:px-8">
            <div class="mt-8 flex flex-col">
              <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6  overflow-auto max-h-96">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                  <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class=" min-w-full divide-y divide-gray-300">
                      <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach($quotes as $quote)
                        <tr>
                            <td class="py-4 pl-4 pr-3 text-sm sm:pl-6 ">
                                <div class="flex items-center">
                                  <div class="h-10 w-10 flex-shrink-0">
                                    <img class="h-10 w-10" src="{{asset('storage/' . $quote->thumbnail)}}" alt="">
                                  </div>
                                  <div class="ml-4">
                                    <div class="font-medium text-black ">{{ $quote->quote }}</div>
                                  </div>
                                </div>
                              </td>
                              <td class="relative whitespace-nowrap py-4 pl-3  text-right text-sm font-medium sm:pr-6">
                                <a href="{{route('movies.index', ['movie' =>$quote->movie->id])}}" class="text-black ">{{ $quote->movie->title }}</a>
                              </td>
                          <td class="relative whitespace-nowrap py-4 pl-3  text-right text-sm font-medium sm:pr-6">
                            <a href="{{route('quotes.edit', ['quote' => $quote->id])}}" class="text-black ">{{__('translate.Edit')}}</a>
                          </td>
                          <td class="relative whitespace-nowrap py-4  pr-4 text-right text-sm font-medium sm:pr-6">
                            <form method="POST" action="{{route('quotes.destroy', ['quote' => $quote->id])}}">
                              @csrf
                              @method('DELETE')
                              <button class="text-black ">{{__('translate.Delete')}}</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </x-setting>
</x-layout>