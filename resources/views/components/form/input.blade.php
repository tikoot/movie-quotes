@props(['name','attr','type' => 'text'])

<x-form.field>
    <label class="block mb-2  text-lg text-gray-700" 
           for="{{ $attr }}"
    >
        {{ ucwords($name) }}
    </label>

    <input class="text-black text-lg p-2 w-full rounded" 
           type="{{ $type }}"
           name="{{ $attr }}" 
           id="{{ $attr }}"
           value="{{ old($attr) }}"
           required
    >
    <x-form.error attr="{{ $attr }}"/>
</x-form.field>