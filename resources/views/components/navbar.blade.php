<nav class="bg-[#064E4A] text-white">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">

        {{-- LEFT: MENU + COMPANY LOGO --}}
        <div class="flex items-center gap-3">

            {{-- Hamburger --}}
            <button
                type="button"
                class="flex h-8 w-8 items-center justify-center rounded-lg text-white/80 hover:bg-white/10"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>
            </button>

            {{-- COMPANY LOGO --}}
            <a href="#home" class="flex items-center gap-2">
                <img
                    src="{{ asset('image/logo.jpg') }}"
                    alt="CRYMA Logo"
                    class="h-9 w-9 object-contain"
                >

                <span class="text-lg font-bold tracking-[0.15em] text-white">
                    CRYMA
                </span>
            </a>

        </div>


        {{-- CENTER: NAVIGATION LINKS --}}
        <div class="hidden items-center gap-7 md:flex">

            <a href="#home"
               class="text-xs font-medium text-white/90 transition hover:text-teal-200">
                Home
            </a>

            <a href="#features"
               class="text-xs font-medium text-white/90 transition hover:text-teal-200">
                Features
            </a>

            <a href="#pricing"
               class="text-xs font-medium text-white/90 transition hover:text-teal-200">
                Pricing
            </a>

            <a href="#testimonials"
               class="text-xs font-medium text-white/90 transition hover:text-teal-200">
                Testimonials
            </a>

            <a href="#contact"
               class="text-xs font-medium text-white/90 transition hover:text-teal-200">
                Contact
            </a>

        </div>


        {{-- RIGHT: SEARCH + BUTTONS --}}
        <div class="flex items-center gap-2">

            {{-- Search Icon --}}
            <button
                type="button"
                class="flex h-9 w-9 items-center justify-center rounded-full text-white/80 transition hover:bg-white/10"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m21 21-4.35-4.35m2.1-5.4a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z"
                    />
                </svg>
            </button>


            {{-- Sign In --}}
            <a
                href="#"
                class="rounded-full border border-white/50 px-5 py-2 text-xs font-semibold text-white transition hover:bg-white/10"
            >
                Sign In
            </a>


            {{-- Get Started --}}
            <a
                href="#"
                class="rounded-full bg-white px-5 py-2 text-xs font-semibold text-[#064E4A] shadow-sm transition hover:-translate-y-0.5 hover:bg-teal-50"
            >
                Get Started
            </a>

        </div>

    </div>
</nav>