<x-layout>
    <x-header>
    </x-header>
<x-setting heading="{{__('translate.Movies')}}">
  <main class="flex-1 pl-6">
    <div class="max-w-7xl max-auto ">
      <div class="px-4 sm:px-6 lg:px-8">
          <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8 overflow-auto max-h-96">
              <div class="inline-block min-w-full pl-4 align-middle">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-300">
                    <tbody class="divide-y divide-gray-200 bg-white">
                      @foreach($movies as $movie)
                      <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-black sm:pl-6">
                          <a href="{{route('movies.index', ['movie' => $movie->id])}}" class="text-black ">{{ $movie->title }}</a>
                          </td>
                        <td class="relative whitespace-nowrap py-4 pl-3  text-right text-sm font-medium sm:pr-6">
                          <a href="{{route('movies.edit', ['movie' => $movie->id])}}" class="text-indigo-600 hover:text-indigo-900">{{__('translate.Edit')}}</a>
                        </td>
                        <td class="relative whitespace-nowrap py-4  pr-4 text-right text-sm font-medium sm:pr-6">
                          <form method="POST" action="{{route('movies.destroy', ['movie' => $movie->id])}}">
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
    </div>
  </main>   
    </x-setting>
</x-layout>