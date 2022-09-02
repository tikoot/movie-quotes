<x-layout>
    <x-header/>
    <x-setting heading="Quotes">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="mt-8 flex flex-col">
              <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8 overflow-auto max-h-56">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                  <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                      <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach($quotes as $quote)
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
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
                                <a href="/movies/{{ $quote->movie->id }}" class="text-black ">{{ $quote->movie->title }}</a>
                              </td>
                          <td class="relative whitespace-nowrap py-4 pl-3  text-right text-sm font-medium sm:pr-6">
                            <a href="#" class="text-black ">Edit</a>
                          </td>
                          <td class="relative whitespace-nowrap py-4  pr-4 text-right text-sm font-medium sm:pr-6">
                            <a href="#" class="text-black ">Delete</a>
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
    </x-setting>
</x-layout>