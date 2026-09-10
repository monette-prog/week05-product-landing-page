<section id="home" class="bg-[#075E59] text-white">
    <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20">

        <div class="grid items-center gap-12 lg:grid-cols-2">

            {{-- LEFT SIDE --}}
            <div>

                <p class="mb-4 text-sm font-semibold uppercase tracking-[0.2em] text-teal-200">
                    Welcome to CRYMA
                </p>

                <h1 class="max-w-xl text-5xl font-bold leading-tight sm:text-6xl">
                    Your Shopping,
                    <span class="text-teal-200">
                        Your Way.
                    </span>
                </h1>

                <p class="mt-6 max-w-lg text-base leading-7 text-teal-50 sm:text-lg">
                    Discover amazing products, enjoy secure payments,
                    and experience a seamless online shopping journey
                    all in one place.
                </p>

                <div class="mt-8 flex flex-wrap gap-4">

                    <a href="#pricing"
                       class="rounded-full bg-white px-7 py-3 font-semibold text-[#075E59] shadow-lg transition hover:-translate-y-1 hover:bg-teal-50">
                        Shop Now →
                    </a>

                    <a href="#features"
                       class="rounded-full border border-white/70 px-7 py-3 font-semibold text-white transition hover:bg-white/10">
                        Explore Features
                    </a>

                </div>

            </div>


            {{-- RIGHT SIDE: BROWSER BOX --}}
            <div class="relative">

                {{-- DO NOT CHANGE THIS OUTER BOX --}}
                <div class="overflow-hidden rounded-2xl bg-white shadow-2xl">

                    {{-- Browser Header --}}
                    <div class="flex items-center gap-2 border-b bg-gray-100 px-4 py-3">

                        <span class="h-3 w-3 rounded-full bg-red-400"></span>
                        <span class="h-3 w-3 rounded-full bg-yellow-400"></span>
                        <span class="h-3 w-3 rounded-full bg-green-400"></span>

                        <div class="ml-3 flex-1 rounded-full bg-white px-4 py-1.5 text-xs text-gray-400">
                            cryma.com
                        </div>

                    </div>


                    {{-- WEBSITE INSIDE THE BOX --}}
                    <div class="p-5 text-gray-800">

                        {{-- Website Header --}}
                        <div class="flex items-center justify-between">

                            <h2 class="text-xl font-bold text-[#075E59]">
                                CRYMA
                            </h2>

                            <div class="hidden items-center gap-4 text-xs text-gray-600 sm:flex">
                                <span>Home</span>
                                <span>Shop</span>
                                <span>Orders</span>
                                <span>♡</span>
                                <span>🛒</span>
                            </div>

                        </div>


                        {{-- Search Bar --}}
                        <div class="mt-4">

                            <div class="flex items-center rounded-lg border border-gray-200 bg-gray-50 px-3 py-2">

                                <span class="mr-2 text-gray-400">
                                    🔍
                                </span>

                                <span class="text-xs text-gray-400">
                                    Search products...
                                </span>

                            </div>

                        </div>


                        {{-- GREEN PRODUCT BANNER --}}
                        <div class="mt-5 overflow-hidden rounded-xl bg-gradient-to-r from-[#075E59] to-[#0B8078] p-6">

                            <p class="text-xs font-semibold uppercase tracking-wider text-teal-100">
                                Featured Collection
                            </p>

                            <h3 class="mt-2 max-w-xs text-2xl font-bold leading-tight text-white">
                                Better Products
                                <br>
                                Brighter Days
                            </h3>

                            <button class="mt-4 rounded-full bg-white px-4 py-2 text-xs font-bold text-[#075E59]">
                                Shop Now →
                            </button>

                        </div>


                        {{-- CATEGORY ICONS --}}
                        <div class="mt-5 grid grid-cols-6 gap-2 text-center">

                            <div>
                                <div class="mx-auto flex h-8 w-8 items-center justify-center rounded-full bg-teal-50">
                                    🚚
                                </div>
                                <p class="mt-1 text-[9px] text-gray-500">Delivery</p>
                            </div>

                            <div>
                                <div class="mx-auto flex h-8 w-8 items-center justify-center rounded-full bg-teal-50">
                                    🛍️
                                </div>
                                <p class="mt-1 text-[9px] text-gray-500">Shop</p>
                            </div>

                            <div>
                                <div class="mx-auto flex h-8 w-8 items-center justify-center rounded-full bg-teal-50">
                                    🔒
                                </div>
                                <p class="mt-1 text-[9px] text-gray-500">Secure</p>
                            </div>

                            <div>
                                <div class="mx-auto flex h-8 w-8 items-center justify-center rounded-full bg-teal-50">
                                    💎
                                </div>
                                <p class="mt-1 text-[9px] text-gray-500">Deals</p>
                            </div>

                            <div>
                                <div class="mx-auto flex h-8 w-8 items-center justify-center rounded-full bg-teal-50">
                                    📦
                                </div>
                                <p class="mt-1 text-[9px] text-gray-500">Orders</p>
                            </div>

                            <div>
                                <div class="mx-auto flex h-8 w-8 items-center justify-center rounded-full bg-teal-50">
                                    💬
                                </div>
                                <p class="mt-1 text-[9px] text-gray-500">Support</p>
                            </div>

                        </div>


                        {{-- PRODUCTS --}}
                        <div class="mt-5">

                            <div class="flex items-center justify-between">

                                <h3 class="font-bold text-[#064F4B]">
                                    Featured Products
                                </h3>

                                <span class="text-xs text-gray-400">
                                    View All →
                                </span>

                            </div>


                            <div class="mt-3 grid grid-cols-4 gap-3">

                                {{-- HEADPHONES --}}
                                <div class="rounded-lg bg-gray-50 p-3">

                                    <div class="flex h-20 items-center justify-center rounded-md bg-gray-100">
                                        <img
                                            src="{{ asset('image/headphones-pink.jpg') }}"
                                            alt="Headphones"
                                            class="h-16 w-16 object-contain"
                                        >
                                    </div>

                                    <p class="mt-2 truncate text-[10px] font-semibold">
                                        Headphones
                                    </p>

                                    <p class="text-[10px] text-[#075E59]">
                                        ₱1,099
                                    </p>

                                </div>


                                {{-- RUNNING SHOES --}}
                                <div class="rounded-lg bg-gray-50 p-3">

                                    <div class="flex h-20 items-center justify-center rounded-md bg-gray-100">
                                        <img
                                            src="{{ asset('image/running-pink-shoes.jpg') }}"
                                            alt="Running Shoes"
                                            class="h-16 w-16 object-contain"
                                        >
                                    </div>

                                    <p class="mt-2 truncate text-[10px] font-semibold">
                                        Running Shoes
                                    </p>

                                    <p class="text-[10px] text-[#075E59]">
                                        ₱1,499
                                    </p>

                                </div>


                                {{-- SMARTWATCH --}}
                                <div class="rounded-lg bg-gray-50 p-3">

                                    <div class="flex h-20 items-center justify-center rounded-md bg-gray-100">
                                        <img
                                            src="{{ asset('image/smartwatch.jpg') }}"
                                            alt="Smartwatch"
                                            class="h-16 w-16 object-contain"
                                        >
                                    </div>

                                    <p class="mt-2 truncate text-[10px] font-semibold">
                                        Smartwatch
                                    </p>

                                    <p class="text-[10px] text-[#075E59]">
                                        ₱2,299
                                    </p>

                                </div>


                                {{-- BACKPACK --}}
                                <div class="rounded-lg bg-gray-50 p-3">

                                    <div class="flex h-20 items-center justify-center rounded-md bg-gray-100">
                                        <img
                                            src="{{ asset('image/backpack.jpg') }}"
                                            alt="Backpack"
                                            class="h-16 w-16 object-contain"
                                        >
                                    </div>

                                    <p class="mt-2 truncate text-[10px] font-semibold">
                                        Backpack
                                    </p>

                                    <p class="text-[10px] text-[#075E59]">
                                        ₱899
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>