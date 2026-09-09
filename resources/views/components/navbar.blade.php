<nav class="relative z-50 bg-[#063F3D] text-white">
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6 lg:px-8">

        {{-- LEFT: Menu + Logo --}}
        <div class="flex items-center gap-3">

            {{-- Hamburger --}}
            <button
                type="button"
                class="flex h-9 w-9 items-center justify-center rounded-lg text-teal-100 transition hover:bg-white/10"
                aria-label="Open menu"
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

            {{-- CRYMA Logo --}}
            <a
                href="#home"
                class="text-xl font-bold tracking-[0.15em] text-white"
            >
                CRYMA
            </a>

        </div>


        {{-- CENTER: Navigation --}}
        <div class="hidden items-center gap-8 md:flex">

            <a href="#home"
               class="text-sm font-medium text-white transition hover:text-teal-200">
                Home
            </a>

            <a href="#features"
               class="text-sm font-medium text-white/80 transition hover:text-teal-200">
                Features
            </a>

            <a href="#pricing"
               class="text-sm font-medium text-white/80 transition hover:text-teal-200">
                Pricing
            </a>

            <a href="#testimonials"
               class="text-sm font-medium text-white/80 transition hover:text-teal-200">
                Testimonials
            </a>

            <a href="#contact"
               class="text-sm font-medium text-white/80 transition hover:text-teal-200">
                Contact
            </a>

        </div>


        {{-- RIGHT: Search + Buttons --}}
        <div class="flex items-center gap-3">

            {{-- Search Icon --}}
            <button
                type="button"
                class="hidden h-9 w-9 items-center justify-center rounded-full text-white/80 transition hover:bg-white/10 hover:text-white sm:flex"
                aria-label="Search"
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
                        d="m21 21-4.35-4.35m2.1-5.4a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z"
                    />
                </svg>
            </button>


            {{-- Sign In --}}
            <a
                href="#"
                class="hidden rounded-full border border-white/40 px-5 py-2 text-sm font-medium text-white transition hover:bg-white/10 sm:inline-flex"
            >
                Sign In
            </a>


            {{-- Get Started --}}
            <a
                href="#pricing"
                class="rounded-full bg-white px-5 py-2 text-sm font-semibold text-[#075F5B] shadow-sm transition hover:-translate-y-0.5 hover:shadow-md"
            >
                Get Started
            </a>

        </div>

    </div>
</nav>