@props(['name'])

@error($name)
    <p {{ $attributes->merge(['class'=>'text-sm text-red-700 mt-1']) }}>
        {{ $message }}
    </p>
@enderror
