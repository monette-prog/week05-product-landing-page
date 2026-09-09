<section id="home" class="relative overflow-hidden bg-[#0F6863] text-white">

    {{-- Decorative background circles --}}
    <div class="pointer-events-none absolute -left-32 top-10 h-72 w-72 rounded-full bg-white/5"></div>
    <div class="pointer-events-none absolute -right-20 -top-24 h-80 w-80 rounded-full bg-white/5"></div>
    <div class="pointer-events-none absolute bottom-[-120px] right-[20%] h-72 w-72 rounded-full bg-[#6DE4D5]/10"></div>

    <div class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">

        <div class="grid items-center gap-12 lg:grid-cols-[0.9fr_1.1fr]">

            {{-- =====================================================
                LEFT : HERO TEXT
            ====================================================== --}}
            <div class="max-w-xl">

                <p class="mb-5 text-xs font-semibold uppercase tracking-[0.28em] text-[#8EF1E4]">
                    Welcome to CRYMA
                </p>

                <h1 class="text-4xl font-extrabold leading-[1.05] sm:text-5xl lg:text-6xl">
                    Your Shopping,
                    <span class="block text-[#78F0E0]">
                        Your Way.
                    </span>
                </h1>

                <p class="mt-6 max-w-lg text-sm leading-7 text-teal-50 sm:text-base">
                    Discover amazing products, enjoy secure payments, and
                    experience a seamless online shopping journey all in one place.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">

                    <a href="#pricing"
                       class="inline-flex items-center gap-2 rounded-full bg-white px-6 py-3 text-sm font-semibold text-[#0F6863] shadow-lg transition hover:-translate-y-0.5 hover:shadow-xl">
                        Shop Now
                        <span>→</span>
                    </a>

                    <a href="#features"
                       class="inline-flex items-center rounded-full border border-white/70 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
                        Explore Features
                    </a>

                </div>
            </div>


            {{-- =====================================================
                RIGHT : CRYMA BROWSER / WEBSITE BOX
            ====================================================== --}}
            <div class="relative mx-auto w-full max-w-[540px]">

                {{-- Glow --}}
                <div class="absolute -inset-5 rounded-[2rem] bg-white/10 blur-2xl"></div>

                {{-- MAIN BROWSER BOX --}}
                <div class="relative overflow-hidden rounded-[18px] bg-white shadow-[0_25px_70px_rgba(0,0,0,0.25)]">

                    {{-- Browser top bar --}}
                    <div class="flex items-center gap-2 border-b border-gray-200 bg-[#F6F8F8] px-4 py-3">

                        <span class="h-3 w-3 rounded-full bg-[#FF5F57]"></span>
                        <span class="h-3 w-3 rounded-full bg-[#FFBD2E]"></span>
                        <span class="h-3 w-3 rounded-full bg-[#28C840]"></span>

                        <div class="ml-3 flex h-7 flex-1 items-center rounded-full bg-white px-4 text-[10px] text-gray-400 shadow-sm">
                            cryma.com
                        </div>

                    </div>


                    {{-- Website content --}}
                    <div class="p-4 sm:p-5">

                        {{-- Store Header --}}
                        <div class="flex items-center justify-between">

                            {{-- CRYMA logo --}}
                            <div class="flex items-center gap-2">
                                <div class="flex h-7 w-7 items-center justify-center rounded-md bg-[#0F6863] text-[11px] font-extrabold text-white">
                                    C
                                </div>

                                <span class="text-sm font-extrabold tracking-wide text-[#0F6863]">
                                    CRYMA
                                </span>
                            </div>

                            {{-- Mini navigation --}}
                            <div class="hidden items-center gap-4 text-[9px] text-gray-500 sm:flex">
                                <span>Home</span>
                                <span>Shop</span>
                                <span>Orders</span>
                                <span>♡</span>
                                <span>🛒</span>
                            </div>

                        </div>


                        {{-- Search bar --}}
                        <div class="mt-4 flex h-8 items-center rounded-md border border-gray-200 bg-[#FAFBFB] px-3">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-3.5 w-3.5 text-gray-500"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m21 21-4.35-4.35m1.35-5.65a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"
                                />
                            </svg>

                            <span class="ml-2 text-[9px] text-gray-400">
                                Search products...
                            </span>

                        </div>


                        {{-- Featured Banner --}}
                        <div class="mt-4 overflow-hidden rounded-xl bg-gradient-to-r from-[#0E7771] to-[#0A6964] p-4 text-white">

                            <p class="text-[8px] font-semibold uppercase tracking-wider text-teal-100">
                                Featured Collection
                            </p>

                            <h3 class="mt-1 text-lg font-extrabold leading-tight">
                                Better Products
                                <span class="block">
                                    Brighter Days
                                </span>
                            </h3>

                            <button
                                class="mt-3 rounded-full bg-white px-4 py-1.5 text-[8px] font-bold text-[#0F6863]"
                            >
                                Shop Now →
                            </button>

                        </div>


                        {{-- Category icons --}}
                        <div class="mt-4 grid grid-cols-6 gap-2">

                            <div class="text-center">
                                <div class="mx-auto flex h-8 w-8 items-center justify-center rounded-full bg-[#EAF8F6] text-sm">
                                    🚚
                                </div>
                                <p class="mt-1 text-[7px] text-gray-500">Delivery</p>
                            </div>

                            <div class="text-center">
                                <div class="mx-auto flex h-8 w-8 items-center justify-center rounded-full bg-[#EAF8F6] text-sm">
                                    🛍️
                                </div>
                                <p class="mt-1 text-[7px] text-gray-500">Shop</p>
                            </div>

                            <div class="text-center">
                                <div class="mx-auto flex h-8 w-8 items-center justify-center rounded-full bg-[#EAF8F6] text-sm">
                                    🔒
                                </div>
                                <p class="mt-1 text-[7px] text-gray-500">Secure</p>
                            </div>

                            <div class="text-center">
                                <div class="mx-auto flex h-8 w-8 items-center justify-center rounded-full bg-[#EAF8F6] text-sm">
                                    💎
                                </div>
                                <p class="mt-1 text-[7px] text-gray-500">Deals</p>
                            </div>

                            <div class="text-center">
                                <div class="mx-auto flex h-8 w-8 items-center justify-center rounded-full bg-[#EAF8F6] text-sm">
                                    📦
                                </div>
                                <p class="mt-1 text-[7px] text-gray-500">Orders</p>
                            </div>

                            <div class="text-center">
                                <div class="mx-auto flex h-8 w-8 items-center justify-center rounded-full bg-[#EAF8F6] text-sm">
                                    💬
                                </div>
                                <p class="mt-1 text-[7px] text-gray-500">Support</p>
                            </div>

                        </div>


                        {{-- Featured Products heading --}}
                        <div class="mt-4 flex items-center justify-between">

                            <h4 class="text-xs font-extrabold text-[#0F6863]">
                                Featured Products
                            </h4>

                            <span class="text-[8px] text-gray-400">
                                View All →
                            </span>

                        </div>


                        {{-- Product cards --}}
                        <div class="mt-2 grid grid-cols-4 gap-2">

                            {{-- Headphones --}}
                            <div class="rounded-lg bg-[#F7F9F9] p-2">

                                <div class="flex h-16 items-center justify-center rounded-md bg-[#F0F3F3] text-3xl">
                                    🎧
                                </div>

                                <p class="mt-2 truncate text-[8px] font-semibold text-gray-700">
                                    Headphones
                                </p>

                                <p class="mt-0.5 text-[8px] font-bold text-[#0F6863]">
                                    ₱1,099
                                </p>

                            </div>


                            {{-- Running Shoes --}}
                            <div class="rounded-lg bg-[#F7F9F9] p-2">

                                <div class="flex h-16 items-center justify-center rounded-md bg-[#F0F3F3] text-3xl">
                                    👟
                                </div>

                                <p class="mt-2 truncate text-[8px] font-semibold text-gray-700">
                                    Running Shoes
                                </p>

                                <p class="mt-0.5 text-[8px] font-bold text-[#0F6863]">
                                    ₱1,499
                                </p>

                            </div>


                            {{-- Smartwatch --}}
                            <div class="rounded-lg bg-[#F7F9F9] p-2">

                                <div class="flex h-16 items-center justify-center rounded-md bg-[#F0F3F3] text-3xl">
                                    ⌚
                                </div>

                                <p class="mt-2 truncate text-[8px] font-semibold text-gray-700">
                                    Smartwatch
                                </p>

                                <p class="mt-0.5 text-[8px] font-bold text-[#0F6863]">
                                    ₱2,299
                                </p>

                            </div>


                            {{-- Backpack --}}
                            <div class="rounded-lg bg-[#F7F9F9] p-2">

                                <div class="flex h-16 items-center justify-center rounded-md bg-[#F0F3F3] text-3xl">
                                    🎒
                                </div>

                                <p class="mt-2 truncate text-[8px] font-semibold text-gray-700">
                                    Backpack
                                </p>

                                <p class="mt-0.5 text-[8px] font-bold text-[#0F6863]">
                                    ₱899
                                </p>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>