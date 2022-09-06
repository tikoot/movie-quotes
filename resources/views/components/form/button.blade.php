@props(['name'])

<div class="my-8">
    <button type="submit"
    class="bg-slate-100 text-black rounded py-2 px-4 hover:bg-dark-gray"
    >
    {{ ucwords($name) }}

    </button>
</div>