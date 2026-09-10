@props([
    'icon' => '📦',
    'title' => 'Feature',
    'description' => 'Description of the feature.',
])

<div class="group rounded-2xl border border-gray-100 bg-white p-7 text-center shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">

    {{-- ICON BUBBLE --}}
    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-teal-50 text-3xl shadow-sm ring-8 ring-teal-50/50 transition duration-300 group-hover:scale-105">
        {{ $icon }}
    </div>

    {{-- TITLE --}}
    <h3 class="mt-5 text-lg font-bold text-[#075E59]">
        {{ $title }}
    </h3>

    {{-- DESCRIPTION --}}
    <p class="mx-auto mt-2 max-w-xs text-sm leading-6 text-gray-500">
        {{ $description }}
    </p>

</div>