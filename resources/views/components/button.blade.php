@props([
    'type' => 'button',
    'variant' => 'primary',
    'href' => null
])

@php
    $classes = match ($variant) {
        'primary' => 'bg-amber-300 text-gray-900 hover:bg-amber-200',
        'secondary' => 'bg-gray-800 text-gray-200 hover:bg-gray-700',
        'danger' => 'bg-red-600 text-white hover:bg-red-700',
        default => 'bg-gray-200 text-gray-800',
    };
@endphp

@if ($href !== null)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => "inline-flex items-center justify-center px-4 py-2 rounded font-medium $classes"]) }} >
        {{ $slot }}
    </a>
@else
<button type="{{ $type }}" {{ $attributes->merge(['class' => "inline-flex items-center justify-center px-4 py-2 rounded font-medium $classes"]) }} >
    {{ $slot }}
</button>
@endif
