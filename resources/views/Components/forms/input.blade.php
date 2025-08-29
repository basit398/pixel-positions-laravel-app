@props(['label', 'name', 'type' => 'text'])

@php
    $defaults = [
        'type' => $type,
        'id' => $name,
        'name' => $name,
        'class' => $type === 'file'
            ? 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full text-gray-300
               file:mr-4 file:py-2 file:px-4
               file:rounded-md file:border-0
               file:bg-white file:text-black
               hover:file:bg-gray-200'
            : 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full',
        'value' => $type !== 'file' ? old($name) : null
    ];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field>
