@props(['name'])

<div class="my-8">
    <button type="submit"
    class=" text-2xl bg-slate-100 text-black rounded py-2 px-4 hover:bg-dark-gray"
    >
    {{__('translate.' . $name)}}
    </button>
</div>