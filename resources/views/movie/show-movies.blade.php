<x-layout>
    <x-header>
    </x-header>
<x-setting heading="Movies">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="mt-8 flex flex-col">
          <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8 overflow-auto max-h-56">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
              <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-300">
                  <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach($movies as $movie)
                    <tr>
                      <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-black sm:pl-6">	{{ $movie->title }}</td>
                      <td class="relative whitespace-nowrap py-4 pl-3  text-right text-sm font-medium sm:pr-6">
                        <a href="{{route('movies.edit', ['movie' => $movie->id])}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                      </td>
                      <td class="relative whitespace-nowrap py-4  pr-4 text-right text-sm font-medium sm:pr-6">
                        <form method="POST" action="{{route('movies.destroy', ['movie' => $movie->id])}}">
                          @csrf
                          @method('DELETE')
                          <button class="text-black ">Delete</button>
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
    </x-setting>
</x-layout>