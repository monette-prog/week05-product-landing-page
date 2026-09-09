@props([
    'name',
    'position',
    'review',
    'image' => null,
])

<div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

    <div class="flex items-center gap-4">

        @if($image)
            <img
                src="{{ $image }}"
                alt="{{ $name }}"
                class="h-14 w-14 rounded-full object-cover"
            >
        @else
            <div class="flex h-14 w-14 items-center justify-center rounded-full bg-teal-100 font-bold text-[#0F6260]">
                {{ strtoupper(substr($name, 0, 1)) }}
            </div>
        @endif

        <div>
            <h3 class="font-bold text-gray-900">
                {{ $name }}
            </h3>

            <p class="text-sm text-gray-500">
                {{ $position }}
            </p>
        </div>

    </div>

    <div class="mt-5 text-yellow-400">
        ★ ★ ★ ★ ★
    </div>

    <p class="mt-4 leading-7 text-gray-600">
        "{{ $review }}"
    </p>

</div>