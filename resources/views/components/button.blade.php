@props([
    'href' => '#',
    'variant' => 'primary',
])

@php
    $classes = $variant === 'secondary'
        ? 'border border-[#0F6260] text-[#0F6260] hover:bg-teal-50'
        : 'bg-[#0F6260] text-white hover:bg-[#0B4F4D]';
@endphp

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => "inline-flex items-center justify-center rounded-xl px-6 py-3 font-semibold shadow-sm transition hover:-translate-y-0.5 hover:shadow-md $classes"
    ]) }}
>
    {{ $slot }}
</a>