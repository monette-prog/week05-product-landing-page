@extends('layouts.app')

@section('title', 'CRYMA - Your Shopping, Your Way')

@section('content')

{{-- ============================================================
    HERO SECTION
============================================================ --}}
<x-hero />


{{-- ============================================================
    FEATURES SECTION
============================================================ --}}
<section id="features" class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#0F6260]">
                Why Choose CRYMA
            </p>

            <h2 class="mt-3 text-3xl font-bold tracking-tight text-[#073B4C] sm:text-4xl">
                Everything You Need for Better Shopping
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-gray-500">
                From secure payments to fast delivery, CRYMA makes
                online shopping simple, safe, and enjoyable.
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

            <x-feature-card
                icon="🚚"
                title="Fast Delivery"
                description="Get your orders delivered quickly and reliably, right to your doorstep."
            />

            <x-feature-card
                icon="🛡️"
                title="Secure Payment"
                description="Shop with confidence using our safe and secure payment methods."
            />

            <x-feature-card
                icon="🛍️"
                title="Easy Shopping"
                description="Find what you need with a simple and intuitive shopping experience."
            />

            <x-feature-card
                icon="▦"
                title="Wide Product Variety"
                description="Discover products from fashion to gadgets. We have it all."
            />

            <x-feature-card
                icon="📍"
                title="Order Tracking"
                description="Track your order in real time from checkout until delivery."
            />

            <x-feature-card
                icon="🎧"
                title="Customer Support"
                description="We're here to help whenever you need assistance with your shopping."
            />

        </div>
    </div>
</section>


{{-- ============================================================
    PRODUCT SHOWCASE
============================================================ --}}
<section class="bg-[#EAF8F6] py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid items-center gap-12 lg:grid-cols-2">

            {{-- Left Content --}}
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#0F6260]">
                    Product Showcase
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight text-[#073B4C] sm:text-4xl">
                    A Smarter Way to Shop
                </h2>

                <p class="mt-5 max-w-xl leading-7 text-gray-600">
                    Explore our platform designed for a better shopping
                    experience. Get access to a wide range of products,
                    exclusive deals, and a clean modern interface.
                </p>

                <div class="mt-7 space-y-4">

                    <div class="flex items-start gap-3">
                        <span class="mt-0.5 flex h-6 w-6 items-center justify-center rounded-full bg-[#0F6260] text-sm text-white">
                            ✓
                        </span>
                        <span class="text-gray-700">
                            Modern and responsive design
                        </span>
                    </div>

                    <div class="flex items-start gap-3">
                        <span class="mt-0.5 flex h-6 w-6 items-center justify-center rounded-full bg-[#0F6260] text-sm text-white">
                            ✓
                        </span>
                        <span class="text-gray-700">
                            Easy product search and filtering
                        </span>
                    </div>

                    <div class="flex items-start gap-3">
                        <span class="mt-0.5 flex h-6 w-6 items-center justify-center rounded-full bg-[#0F6260] text-sm text-white">
                            ✓
                        </span>
                        <span class="text-gray-700">
                            Secure and seamless checkout
                        </span>
                    </div>

                </div>

                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="#pricing"
                       class="rounded-xl bg-[#0F6260] px-6 py-3 font-semibold text-white shadow-sm transition hover:bg-[#0B4F4D]">
                        View Products
                    </a>

                    <a href="#testimonials"
                       class="rounded-xl border border-[#0F6260] px-6 py-3 font-semibold text-[#0F6260] transition hover:bg-white">
                        ▶ Watch Demo
                    </a>
                </div>
            </div>


            {{-- Right Website Preview --}}
            <div class="relative">

                {{-- Decorative Circle --}}
                <div class="absolute -right-8 -top-8 h-32 w-32 rounded-full bg-[#C8F1EA] opacity-70"></div>

                <div class="relative overflow-hidden rounded-2xl border border-[#B8DED8] bg-white shadow-2xl">

                    {{-- Browser Header --}}
                    <div class="flex items-center gap-2 border-b bg-[#F5FBFA] px-4 py-3">
                        <span class="h-3 w-3 rounded-full bg-red-400"></span>
                        <span class="h-3 w-3 rounded-full bg-yellow-400"></span>
                        <span class="h-3 w-3 rounded-full bg-green-400"></span>

                        <div class="ml-3 flex-1 rounded-md bg-white px-3 py-1 text-xs text-gray-400">
                            cryma.com/shop
                        </div>
                    </div>

                    {{-- Store Header --}}
                    <div class="p-5">

                        <div class="flex items-center justify-between">
                            <h3 class="font-bold text-[#0F6260]">
                                CRYMA Shop
                            </h3>

                            <span class="text-sm text-gray-600">
                                🛒 Cart
                            </span>
                        </div>

                        {{-- Products --}}
                        <div class="mt-8 grid grid-cols-3 gap-4">

                            <div class="rounded-xl bg-[#F1F8F7] p-4">
                                <div class="flex h-24 items-center justify-center rounded-lg bg-white text-4xl">
                                    🎧
                                </div>

                                <p class="mt-3 text-sm font-semibold text-gray-800">
                                    Headphones
                                </p>

                                <p class="text-sm text-[#0F6260]">
                                    ₱499
                                </p>
                            </div>

                            <div class="rounded-xl bg-[#F1F8F7] p-4">
                                <div class="flex h-24 items-center justify-center rounded-lg bg-white text-4xl">
                                    👟
                                </div>

                                <p class="mt-3 text-sm font-semibold text-gray-800">
                                    Running Shoes
                                </p>

                                <p class="text-sm text-[#0F6260]">
                                    ₱799
                                </p>
                            </div>

                            <div class="rounded-xl bg-[#F1F8F7] p-4">
                                <div class="flex h-24 items-center justify-center rounded-lg bg-white text-4xl">
                                    ⌚
                                </div>

                                <p class="mt-3 text-sm font-semibold text-gray-800">
                                    Smartwatch
                                </p>

                                <p class="text-sm text-[#0F6260]">
                                    ₱999
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


{{-- ============================================================
    PRICING
============================================================ --}}
<section id="pricing" class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#0F6260]">
                Our Plans
            </p>

            <h2 class="mt-3 text-3xl font-bold text-[#073B4C] sm:text-4xl">
                Choose the Plan That Fits You
            </h2>

            <p class="mt-4 text-gray-500">
                Whether you're a casual shopper or a business owner,
                we have a plan for you.
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-8 lg:grid-cols-3">

            <x-pricing-card
                name="Basic"
                price="₱0"
                description="Perfect for casual shoppers"
                :features="[
                    'Access to all products',
                    'Standard delivery',
                    'Order tracking'
                ]"
            />

            <x-pricing-card
                name="Premium"
                price="₱99"
                description="More benefits, better experience"
                :features="[
                    'All basic features',
                    'Free shipping',
                    'Priority customer support',
                    'Exclusive deals & discounts'
                ]"
                :featured="true"
            />

            <x-pricing-card
                name="Business"
                price="₱299"
                description="For growing businesses"
                :features="[
                    'All premium features',
                    'Business dashboard',
                    'Bulk ordering',
                    'Dedicated support'
                ]"
            />

        </div>
    </div>
</section>


{{-- ============================================================
    TESTIMONIALS
============================================================ --}}
<section id="testimonials" class="bg-[#EAF8F6] py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#0F6260]">
                What Our Customers Say
            </p>

            <h2 class="mt-3 text-3xl font-bold text-[#073B4C] sm:text-4xl">
                Trusted by Thousands
            </h2>

            <p class="mt-4 text-gray-500">
                See what our happy customers have to say about their
                CRYMA experience.
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-3">

            <x-testimonial-card
                name="Maria Santos"
                position="Regular Customer"
                review="CRYMA made online shopping so easy and convenient! I love the fast delivery and great product selection."
            />

            <x-testimonial-card
                name="Joshua Reyes"
                position="Small Business Owner"
                review="The app is super user-friendly and the customer support is amazing. Highly recommended!"
            />

            <x-testimonial-card
                name="Angela Cruz"
                position="Regular Customer"
                review="I always find what I need in CRYMA. The deals and discounts are a big plus!"
            />

        </div>
    </div>
</section>


{{-- ============================================================
    CTA
============================================================ --}}
<section id="contact" class="bg-[#0B4F4D] py-10">
    <div class="mx-auto max-w-6xl px-6 lg:px-8">

        <div class="flex flex-col items-center justify-between gap-6 rounded-2xl bg-[#0F6260] p-8 text-center shadow-lg md:flex-row md:text-left">

            <div>
                <p class="text-sm font-semibold uppercase tracking-widest text-teal-200">
                    Ready to Shop?
                </p>

                <h2 class="mt-2 text-2xl font-bold text-white sm:text-3xl">
                    Join CRYMA Today!
                </h2>

                <p class="mt-2 text-sm text-teal-100">
                    Get access to the best deals, exclusive offers,
                    and a seamless shopping experience.
                </p>
            </div>

            <div class="flex flex-wrap justify-center gap-3">
                <a href="#home"
                   class="rounded-xl bg-white px-6 py-3 font-semibold text-[#0F6260] transition hover:-translate-y-0.5 hover:shadow-lg">
                    Start Shopping →
                </a>

                <a href="#contact"
                   class="rounded-xl border border-white/40 px-6 py-3 font-semibold text-white transition hover:bg-white/10">
                    Contact Sales
                </a>

                <a href="#features"
                   class="rounded-xl border border-white/40 px-6 py-3 font-semibold text-white transition hover:bg-white/10">
                    Learn More
                </a>
            </div>

        </div>
    </div>
</section>

@endsection

{{-- CRYMA Landing Page --}}
{{-- Hero section with CTA buttons --}}
{{-- Pricing section with 3 plans --}}
{{-- Features section with 6 cards --}}