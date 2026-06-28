@props(['value'])

<label {{ $attributes->merge(['class' => 'block  text-sm text-white font-semibold']) }}>
    {{ $value ?? $slot }}
</label>
