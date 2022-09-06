@props(['name','attr','type' => 'text'])

<x-form.field>
    <label class="block mb-2  text-2xl text-white" 
           for="{{ $attr }}"
    >
        {{__('translate.' . $name)}}
    </label>

    <input class="text-black text-2xl w-full rounded" 
           type="{{ $type }}"
           name="{{ $attr }}" 
           id="{{ $attr }}"
           required
           {{ $attributes(['value' => old('attr')])}}
    >
    <x-form.error attr="{{ $attr }}"/>
</x-form.field>