<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-4xl text-slate-50">{{__('translate.log_in')}}</h1>
            <form method="POST" action="{{ route('users.dashboard') }}" class="mt-10">
                @csrf
                <x-form.input name="email" attr="email"/>
                <x-form.input name="password" attr="password" type="password"/>
                <x-form.button name="log_in"/>

            </form>
        </main>
    </section>
</x-layout>