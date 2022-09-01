<x-layout>
    <x-header/>
    <x-setting heading="Add Movie">
        <form method="POST" action="/movie/store">
            @csrf
            <div class="my-6">
                <label class="block mb-2  text-lg text-gray-700" for="title_en">Movie Name (English)</label>
                <input class="text-black text-lg p-2 w-full rounded" type="text" name="title_en" required>
            </div>
            <div class="my-6">
                <label class="block mb-2  text-lg text-gray-700" for="title_ka">Movie Name (Georgian)</label>
                <input class="text-black text-lg p-2 w-full rounded" type="text" name="title_ka" required>
            </div>
            <div class="my-8">
            <button type="submit"
            class="bg-slate-100 text-lg text-black rounded py-2 px-3 hover:bg-dark-gray"
            >
            Add Movie
            </button>
        </div>
    </form>
    </x-setting>
</x-layout>
    