<section class="px-6 py-8 max-w-6xl mx-auto">
    <div class="mt-8 md:mt-0 flex justify-end items-center">
        <h1 class="text-xl text-white font-bold ">Hello, {{Auth::user()->name}}! </h1>
        <a href="/login" class="ml-6 border  border-slate-100 bg-slate-100  text-black text-xl px-4 py-2">Log Out</a>
    </div>
</section>
    
