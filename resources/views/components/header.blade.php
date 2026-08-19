<header
    x-data="{ mobileOpen: false, scrolled: false }"
    x-init="
        scrolled = window.scrollY > 40;
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 40;
        });
    "
    :class="scrolled
        ? 'bg-[#2263AE]/90 shadow-lg backdrop-blur-md'
        : 'bg-transparent'"
    class="fixed inset-x-0 top-0 z-50 transition-all duration-500"
>
    <div class="mx-auto flex h-24 max-w-7xl items-center justify-between px-6 lg:px-10">

        <a
            href="{{ route('home') }}"
            class="relative z-50 text-xl font-bold tracking-[0.18em] text-white"
        >
            CSP LIMITED
        </a>

        <nav class="hidden items-center gap-10 lg:flex">
            <a
                href="{{ route('home') }}"
                class="group relative py-3 text-sm font-semibold uppercase tracking-wide text-white"
            >
                Home

                <span
                    class="absolute bottom-1 left-0 h-px w-full origin-left scale-x-0 bg-white transition-transform duration-300 group-hover:scale-x-100
                    {{ request()->routeIs('home') ? 'scale-x-100' : '' }}"
                ></span>
            </a>

            <a
                href="{{ route('about') }}"
                class="group relative py-3 text-sm font-semibold uppercase tracking-wide text-white"
            >
                About

                <span
                    class="absolute bottom-1 left-0 h-px w-full origin-left scale-x-0 bg-white transition-transform duration-300 group-hover:scale-x-100
                    {{ request()->routeIs('about') ? 'scale-x-100' : '' }}"
                ></span>
            </a>

            <a
                href="{{ route('services') }}"
                class="group relative py-3 text-sm font-semibold uppercase tracking-wide text-white"
            >
                Services

                <span
                    class="absolute bottom-1 left-0 h-px w-full origin-left scale-x-0 bg-white transition-transform duration-300 group-hover:scale-x-100
                    {{ request()->routeIs('services') ? 'scale-x-100' : '' }}"
                ></span>
            </a>

            <a
                href="{{ route('products') }}"
                class="group relative py-3 text-sm font-semibold uppercase tracking-wide text-white"
            >
                Products

                <span
                    class="absolute bottom-1 left-0 h-px w-full origin-left scale-x-0 bg-white transition-transform duration-300 group-hover:scale-x-100
                    {{ request()->routeIs('products') ? 'scale-x-100' : '' }}"
                ></span>
            </a>

            <a
                href="{{ route('contact') }}"
                class="group relative py-3 text-sm font-semibold uppercase tracking-wide text-white"
            >
                Contact

                <span
                    class="absolute bottom-1 left-0 h-px w-full origin-left scale-x-0 bg-white transition-transform duration-300 group-hover:scale-x-100
                    {{ request()->routeIs('contact') ? 'scale-x-100' : '' }}"
                ></span>
            </a>
        </nav>

        <button
            type="button"
            class="relative z-50 flex h-11 w-11 items-center justify-center text-white lg:hidden"
            @click="mobileOpen = !mobileOpen"
            :aria-expanded="mobileOpen"
            aria-label="Toggle navigation"
        >
            <span class="sr-only">Open navigation</span>

            <div class="flex w-7 flex-col gap-1.5">
                <span
                    class="block h-0.5 w-full bg-current transition duration-300"
                    :class="mobileOpen ? 'translate-y-2 rotate-45' : ''"
                ></span>

                <span
                    class="block h-0.5 w-full bg-current transition duration-300"
                    :class="mobileOpen ? 'opacity-0' : ''"
                ></span>

                <span
                    class="block h-0.5 w-full bg-current transition duration-300"
                    :class="mobileOpen ? '-translate-y-2 -rotate-45' : ''"
                ></span>
            </div>
        </button>
    </div>

    <div
        x-cloak
        x-show="mobileOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-40 flex min-h-screen items-center justify-center bg-neutral-950 lg:hidden"
    >
        <nav class="flex flex-col items-center gap-7 text-center">
            <a
                href="{{ route('home') }}"
                class="text-2xl font-semibold uppercase tracking-widest text-white"
            >
                Home
            </a>

            <a
                href="{{ route('about') }}"
                class="text-2xl font-semibold uppercase tracking-widest text-white"
            >
                About
            </a>

            <a
                href="{{ route('services') }}"
                class="text-2xl font-semibold uppercase tracking-widest text-white"
            >
                Services
            </a>

            <a
                href="{{ route('products') }}"
                class="text-2xl font-semibold uppercase tracking-widest text-white"
            >
                Products
            </a>

            <a
                href="{{ route('contact') }}"
                class="text-2xl font-semibold uppercase tracking-widest text-white"
            >
                Contact
            </a>
        </nav>
    </div>
</header>