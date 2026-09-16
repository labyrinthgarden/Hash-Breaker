@props(['name','type'=>'text','value'=>null])

<input
    type="{{ $type }}"
    name="{{ $name }}"
    id="{{ $attributes -> get('id', $name) }}"
    @if(!is_null($value)) value="{{ $value }}" @endif
    {{ $attributes->merge(['class'=>'w-full mb-8 bg-gray-800 border-b border-gray-500 text-gray-200 placeholder-gray-500 focus:border-gray-200 focus:outline-none']) }}
/>
