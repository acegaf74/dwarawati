@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge([
    'class' => 'bg-neutral-secondary-medium text-heading text-sm',
    'type' => 'radio'
    ]) }}>
