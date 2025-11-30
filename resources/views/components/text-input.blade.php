@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'ps-9 pe-3 py-2.5 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs']) }}>
