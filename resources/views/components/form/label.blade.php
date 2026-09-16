@props(['for'=>null,'value'=>null])

<label
    @if($for) for="{{ $for }}" @endif
    {{ $attributes->merge(['class'=>'block mb-1 text-white text-xl text-bold'])}}
>
    {{ $value ?? $slot }}
</label>
