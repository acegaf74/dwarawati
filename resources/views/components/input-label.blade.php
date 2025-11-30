@props(['value'])

<label {{ $attributes->merge(['class' => 'block mb-2.5 text-sm font-medium text-heading']) }}>
    {{ $value ?? $slot }}
</label>
