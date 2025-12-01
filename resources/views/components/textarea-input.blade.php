@props(['disabled' => false])

<textarea @disabled($disabled) {{ $attributes->merge(['class' => 'bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs']) }}>
    {{ $slot }}
</textarea>
