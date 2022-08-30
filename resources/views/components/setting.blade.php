@props(['heading'])

<section class="py-8 max-w-5xl mx-auto text-white">
        <h1 class="text-4xl font-bold mb-8 pb-2 border-b">
            {{$heading}}
        </h1>
    <div class="flex text-3xl">
        <aside class="flex-shrink-0">
            <ul>
                <li class="my-6 pt-2">
                    <a href="/movie/dashboard">Movies</a>
                </li>
                <li class="my-6">
                    <a href="/quotes">Quotes</a>
                </li>
                <li class="my-6">
                    <a href="/movie/create">Add Movie</a>
                </li>
                <li class="my-6">
                    <a href="/">Add Quote</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <div class="max-w-xl mx-auto">
                <form method="POST" action="/admin/posts">
                    @csrf
          <div class="my-6">
                <label class="block mb-2  text-lg text-gray-700" for="">Movie Name (English)</label>
                <input class="text-black text-lg p-2 w-full rounded" type="text" name="title.en">
            </div>
            <div class="my-6">
                <label class="block mb-2  text-lg text-gray-700" for="">Movie Name (Georgian)</label>
                <input class="text-black text-lg p-2 w-full rounded" type="text" name="title.ka">
            </div>
            <div class="my-8">
                <button type="submit"
                class="bg-slate-100 text-lg text-black rounded py-2 px-3 hover:bg-dark-gray"
                >
                Add Movie
                </button>
            </div>
            </form>
        </div>
        </main>
    </div>    

    </section>