@props([
    'name',
    'price',
    'description' => '',
    'features' => [],
    'featured' => false,
])

<div class="relative flex h-full flex-col rounded-2xl border p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-xl
    {{ $featured ? 'border-[#0F6260] ring-2 ring-[#0F6260]' : 'border-gray-200' }}">

    @if($featured)
        <span class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-[#0F6260] px-4 py-1 text-xs font-semibold text-white">
            Most Popular
        </span>
    @endif

    <h3 class="text-xl font-bold text-gray-900">
        {{ $name }}
    </h3>

    <p class="mt-2 text-sm text-gray-500">
        {{ $description }}
    </p>

    <div class="mt-6">
        <span class="text-4xl font-bold text-gray-900">
            {{ $price }}
        </span>
        <span class="text-sm text-gray-500">
            /month
        </span>
    </div>

    <ul class="mt-6 space-y-3">
        @foreach($features as $feature)
            <li class="flex items-center gap-3 text-sm text-gray-600">
                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-teal-100 text-xs text-[#0F6260]">
                    ✓
                </span>

                {{ $feature }}
            </li>
        @endforeach
    </ul>

    <a href="#"
       class="mt-8 block rounded-xl bg-[#0F6260] px-5 py-3 text-center font-semibold text-white transition hover:bg-[#0B4F4D]">
        Subscribe
    </a>
</div>