@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge([
    'class' => 'bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs',
    'type' => 'date'
]) }}>
