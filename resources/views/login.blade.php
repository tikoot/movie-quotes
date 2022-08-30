<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-2xl text-slate-50">Log In!</h1>
            <form method="POST" action="/dashboard" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label 
                    class="block mb-2 uppercase font-bold text-sm text-slate-50"
                    for="email"
                    >Email
                    </label>

                    <input 
                    class="border border-gray-400 p-2 w-full"
                    type="email"
                    name="email"
                    id="email"
                    required >

                    @error('email')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>   
                    @enderror
                </div>
                <div class="mb-6">
                    <label 
                    class="block mb-2 uppercase font-bold text-sm text-slate-50"
                    for="password"
                    value="{{ old('email') }}"
                    >Email
                    </label>

                    <input 
                    class="border border-gray-400 p-2 w-full"
                    type="password"
                    name="password"
                    id="password"
                    required >

                    @error('password')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit"
                    class="bg-slate-100 text-black rounded py-2 px-4 hover:bg-dark-gray"
                    >
                    Log In

                    </button>
                </div>

            </form>
        </main>
    </section>
</x-layout>