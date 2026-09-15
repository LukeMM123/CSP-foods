<x-layout
    title="Services | CSP Food Services"
    description="Wholesale foodservice solutions from CSP Food Services, including specialist sourcing, refrigerated delivery, daily account support and supply across London and the South East."
>

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-[#2263AE] px-6 pb-20 pt-40 text-white sm:px-10 lg:px-16 lg:pb-28 lg:pt-48">
        <div class="absolute inset-0 opacity-20">
            <img
                src="{{ asset('images/services/hero.jpg') }}"
                alt=""
                class="h-full w-full object-cover"
            >
        </div>

        <div class="absolute inset-0 bg-gradient-to-r from-[#071827] via-[#071827]/90 to-[#071827]/50"></div>

        <div class="relative mx-auto max-w-[1600px]">
            <p class="text-xs font-bold uppercase tracking-[0.4em] text-white/50">
                Our services
            </p>

            <h1 class="mt-5 max-w-5xl text-5xl font-bold uppercase leading-[0.95] tracking-tight sm:text-6xl lg:text-8xl">
                Built around<br>
                your business.
            </h1>

            <p class="mt-8 max-w-3xl text-lg leading-8 text-white/70 sm:text-xl">
                Whether you need daily deliveries, specialist sourcing or
                ongoing account management, CSP offers a complete wholesale
                foodservice solution tailored to your business.
            </p>
        </div>
    </section>


    {{-- INTRO --}}
    <section
        x-data="{
            visible: false,

            init() {
                const observer = new IntersectionObserver(
                    ([entry]) => {
                        if (entry.isIntersecting) {
                            this.visible = true;
                            observer.disconnect();
                        }
                    },
                    { threshold: 0.15 }
                );

                observer.observe(this.$el);
            }
        }"
        class="bg-white px-5 py-20 sm:px-8 sm:py-24 lg:px-10 lg:py-28"
    >
        <div
            class="mx-auto grid max-w-[1600px] gap-10 transition-all duration-1000 ease-out lg:grid-cols-[0.8fr_1.2fr] lg:gap-24"
            :class="visible
                ? 'translate-y-0 opacity-100'
                : 'translate-y-10 opacity-0'"
        >
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#2263AE]">
                    Complete wholesale support
                </p>

                <h2 class="mt-5 text-4xl font-bold uppercase leading-[1.05] tracking-tight text-neutral-900 sm:text-5xl lg:text-6xl">
                    More than just a delivery.
                </h2>
            </div>

            <div class="max-w-3xl">
                <p class="text-lg leading-8 text-neutral-600">
                    We work closely with professional kitchens to make wholesale
                    supply as straightforward and dependable as possible.
                </p>

                <p class="mt-6 text-lg leading-8 text-neutral-600">
                    From sourcing and preparation through to picking, loading,
                    delivery and ongoing customer support, our team manages the
                    entire process with quality and reliability at the centre.
                </p>
            </div>
        </div>
    </section>


    {{-- PRODUCT SOURCING --}}
    <section
        x-data="{
            visible: false,

            init() {
                const observer = new IntersectionObserver(
                    ([entry]) => {
                        if (entry.isIntersecting) {
                            this.visible = true;
                            observer.disconnect();
                        }
                    },
                    { threshold: 0.15 }
                );

                observer.observe(this.$el);
            }
        }"
        class="bg-[#f3f3f1] px-5 py-20 sm:px-8 sm:py-24 lg:px-10 lg:py-28"
    >
        <div
            class="mx-auto grid max-w-[1600px] gap-12 transition-all duration-1000 ease-out lg:grid-cols-2 lg:items-center lg:gap-20"
            :class="visible
                ? 'translate-y-0 opacity-100'
                : 'translate-y-10 opacity-0'"
        >
            <div class="relative min-h-[520px] overflow-hidden lg:min-h-[680px]">
                <img
                    src="{{ asset('images/home/services/servicessourcing.jpg') }}"
                    alt="CSP specialist food sourcing"
                    class="absolute inset-0 h-full w-full object-cover"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-[#071827]/70 via-transparent to-transparent"></div>

                <div class="absolute bottom-8 left-8 right-8 text-white sm:bottom-10 sm:left-10">
                    <p class="text-xs font-bold uppercase tracking-[0.3em] text-white/60">
                        Product sourcing
                    </p>

                    <p class="mt-2 max-w-lg text-2xl font-bold uppercase leading-tight">
                        Specialist ingredients sourced around your kitchen.
                    </p>
                </div>
            </div>

            <div class="lg:pr-8">
                <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#2263AE]">
                    Product sourcing
                </p>

                <h2 class="mt-5 text-4xl font-bold uppercase leading-tight tracking-tight text-neutral-900 sm:text-5xl lg:text-6xl">
                    If you need it,<br>
                    we'll find it.
                </h2>

                <div class="mt-8 space-y-6 text-base leading-8 text-neutral-600 sm:text-lg">
                    <p>
                        Sometimes the products you need aren't sitting in a
                        catalogue.
                    </p>

                    <p>
                        Our experienced buying team works closely with trusted
                        suppliers to source specialist ingredients, seasonal
                        produce and bespoke products for our customers.
                    </p>

                    <p>
                        If you need it, we'll do everything we can to find it.
                    </p>
                </div>

                <a
                    href="{{ route('products') }}"
                    class="mt-10 inline-flex items-center gap-4 bg-[#071827] px-7 py-4 text-sm font-bold uppercase tracking-[0.16em] text-white transition duration-300 hover:bg-[#2263AE]"
                >
                    View product range

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        class="h-5 w-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 12h14m-6-6 6 6-6 6"
                        />
                    </svg>
                </a>
            </div>
        </div>
    </section>


    {{-- INDUSTRIES --}}
    <section class="bg-white px-5 py-20 sm:px-8 sm:py-24 lg:px-10 lg:py-28">
        <div class="mx-auto max-w-[1600px]">

            <div class="max-w-4xl">
                <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#2263AE]">
                    Industries we supply
                </p>

                <h2 class="mt-5 text-4xl font-bold uppercase leading-tight tracking-tight text-neutral-900 sm:text-5xl lg:text-6xl">
                    Trusted across hospitality.
                </h2>

                <p class="mt-7 max-w-2xl text-lg leading-8 text-neutral-600">
                    We support businesses across hospitality, catering, education
                    and events with dependable wholesale supply.
                </p>
            </div>

            <div class="mt-14 grid border-l border-t border-neutral-200 sm:grid-cols-2 lg:grid-cols-4">

                @foreach ([
                    'Restaurants',
                    'Hotels',
                    'Private Members\' Clubs',
                    'Corporate Catering',
                    'Schools & Universities',
                    'Sports Clubs',
                    'Cafes',
                    'Events & Hospitality',
                ] as $industry)

                    <div class="group border-b border-r border-neutral-200 p-7 transition duration-300 hover:bg-[#071827] sm:p-8 lg:p-10">

                        <span class="text-xs font-bold uppercase tracking-[0.25em] text-[#2263AE] transition group-hover:text-white/50">
                            Industry
                        </span>

                        <h3 class="mt-5 text-xl font-bold uppercase leading-tight tracking-tight text-neutral-900 transition group-hover:text-white">
                            {{ $industry }}
                        </h3>

                    </div>

                @endforeach

            </div>

        </div>
    </section>


    {{-- DAILY OPERATIONS --}}
    <section
        x-data="{
            visible: false,

            init() {
                const observer = new IntersectionObserver(
                    ([entry]) => {
                        if (entry.isIntersecting) {
                            this.visible = true;
                            observer.disconnect();
                        }
                    },
                    { threshold: 0.15 }
                );

                observer.observe(this.$el);
            }
        }"
        class="bg-[#071827] px-5 py-20 text-white sm:px-8 sm:py-24 lg:px-10 lg:py-28"
    >
        <div class="mx-auto max-w-[1600px]">

            <div
                class="grid gap-10 transition-all duration-1000 ease-out lg:grid-cols-[0.8fr_1.2fr] lg:gap-24"
                :class="visible
                    ? 'translate-y-0 opacity-100'
                    : 'translate-y-10 opacity-0'"
            >
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-white/40">
                        Daily operations
                    </p>

                    <h2 class="mt-5 max-w-xl text-4xl font-bold uppercase leading-[1.05] tracking-tight sm:text-5xl lg:text-6xl">
                        What happens behind every delivery.
                    </h2>
                </div>

                <div class="max-w-3xl">
                    <p class="text-lg leading-8 text-white/60">
                        Every order passes through a coordinated daily process
                        designed to maintain accuracy, quality and reliability
                        from the moment you order through to delivery.
                    </p>
                </div>
            </div>


            <div class="mt-16">

                @foreach ([
                    ['number' => '01', 'title' => 'Receiving customer orders'],
                    ['number' => '02', 'title' => 'Working with trusted suppliers'],
                    ['number' => '03', 'title' => 'Product preparation'],
                    ['number' => '04', 'title' => 'Quality checks'],
                    ['number' => '05', 'title' => 'Order picking'],
                    ['number' => '06', 'title' => 'Temperature-controlled loading'],
                    ['number' => '07', 'title' => 'Refrigerated deliveries'],
                    ['number' => '08', 'title' => 'Customer support throughout the day'],
                ] as $step)

                    <div class="group grid border-t border-white/15 py-6 sm:grid-cols-[100px_1fr_auto] sm:items-center sm:py-7">

                        <span class="text-xs font-bold tracking-[0.2em] text-white/30">
                            {{ $step['number'] }}
                        </span>

                        <h3 class="mt-3 text-xl font-bold uppercase tracking-tight text-white sm:mt-0 sm:text-2xl">
                            {{ $step['title'] }}
                        </h3>

                        <span class="mt-4 hidden text-2xl text-white/20 transition duration-300 group-hover:translate-x-1 group-hover:text-white sm:mt-0 sm:block">
                            ↓
                        </span>

                    </div>

                @endforeach

                <div class="border-t border-white/15"></div>

            </div>

        </div>
    </section>


    {{-- REFRIGERATED DELIVERY FLEET --}}
    <section
        x-data="{
            visible: false,

            init() {
                const observer = new IntersectionObserver(
                    ([entry]) => {
                        if (entry.isIntersecting) {
                            this.visible = true;
                            observer.disconnect();
                        }
                    },
                    { threshold: 0.15 }
                );

                observer.observe(this.$el);
            }
        }"
        class="bg-white px-5 py-20 sm:px-8 sm:py-24 lg:px-10 lg:py-28"
    >
        <div
            class="mx-auto grid max-w-[1600px] gap-12 transition-all duration-1000 ease-out lg:grid-cols-2 lg:items-center lg:gap-20"
            :class="visible
                ? 'translate-y-0 opacity-100'
                : 'translate-y-10 opacity-0'"
        >
            <div class="lg:pr-10">
                <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#2263AE]">
                    Refrigerated delivery fleet
                </p>

                <h2 class="mt-5 text-4xl font-bold uppercase leading-tight tracking-tight text-neutral-900 sm:text-5xl lg:text-6xl">
                    Reliable delivery matters.
                </h2>

                <p class="mt-8 text-base leading-8 text-neutral-600 sm:text-lg">
                    Reliable delivery is just as important as quality produce.
                    Our fleet of refrigerated vehicles operates daily across
                    London and the South East, ensuring products are transported
                    safely and efficiently while maintaining the highest food
                    safety standards.
                </p>

                <div class="mt-10 grid gap-px bg-neutral-200 sm:grid-cols-2">

                    @foreach ([
                        'Temperature-controlled vehicles',
                        'Daily scheduled routes',
                        'Experienced delivery drivers',
                        'Reliable morning deliveries',
                    ] as $feature)

                        <div class="bg-[#f3f3f1] p-6 sm:p-7">
                            <div class="flex gap-4">

                                <span class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#2263AE] text-xs text-white">
                                    ✓
                                </span>

                                <p class="font-bold uppercase leading-6 tracking-tight text-neutral-900">
                                    {{ $feature }}
                                </p>

                            </div>
                        </div>

                    @endforeach

                </div>
            </div>

            <div class="relative min-h-[520px] overflow-hidden lg:min-h-[680px]">
                <img
                    src="{{ asset('images/home/services/van.jpg') }}"
                    alt="CSP refrigerated delivery fleet"
                    class="absolute inset-0 h-full w-full object-cover"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>

                <div class="absolute bottom-8 left-8 right-8 text-white sm:bottom-10 sm:left-10">
                    <p class="text-xs font-bold uppercase tracking-[0.3em] text-white/60">
                        Daily deliveries
                    </p>

                    <p class="mt-2 text-2xl font-bold uppercase">
                        London & the South East
                    </p>
                </div>
            </div>

        </div>
    </section>


    {{-- DELIVERY COVERAGE --}}
    <section class="bg-[#f3f3f1] px-5 py-20 sm:px-8 sm:py-24 lg:px-10 lg:py-28">
        <div class="mx-auto max-w-[1600px]">

            <div class="grid gap-12 lg:grid-cols-[0.75fr_1.25fr] lg:gap-24">

                {{-- Left --}}
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#2263AE]">
                        Delivery coverage
                    </p>

                    <h2 class="mt-5 text-4xl font-bold uppercase leading-tight tracking-tight text-neutral-900 sm:text-5xl">
                        Serving London & the South East.
                    </h2>

                    <p class="mt-7 max-w-xl text-lg leading-8 text-neutral-600">
                        Our regular delivery network supports professional
                        kitchens across London and surrounding areas.
                    </p>
                </div>


                {{-- Right --}}
                <div class="grid self-start border-l border-t border-neutral-300 sm:grid-cols-2 mt-10">

                    @foreach ([
                        'Central London',
                        'Greater London',
                        'Surrey',
                        'Sussex',
                    ] as $area)

                        <div class="border-b border-r border-neutral-300 bg-white px-6 py-6 sm:px-7 sm:py-7">

                            <div class="flex items-center gap-4">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    class="h-5 w-5 shrink-0 text-[#2263AE]"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 21s6-5.5 6-11a6 6 0 1 0-12 0c0 5.5 6 11 6 11Z"
                                    />

                                    <circle
                                        cx="12"
                                        cy="10"
                                        r="2"
                                    />
                                </svg>

                                <span class="font-bold uppercase tracking-tight text-neutral-900">
                                    {{ $area }}
                                </span>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>


            <div class="mt-8 border-t border-neutral-300 pt-6">
                <p class="text-sm leading-7 text-neutral-500">
                    Need delivery outside these areas? Contact our team to discuss
                    your requirements and current delivery availability.
                </p>
            </div>

        </div>
    </section>


    {{-- CTA --}}
    <section class="bg-[#2263AE] px-5 py-20 text-white sm:px-8 sm:py-24 lg:px-10 lg:py-28">
        <div class="mx-auto max-w-[1600px]">

            <div class="grid gap-12 lg:grid-cols-[1fr_auto] lg:items-end lg:gap-20">

                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-white/50">
                        Let's work together
                    </p>

                    <h2 class="mt-5 max-w-4xl text-4xl font-bold uppercase leading-[1.05] tracking-tight sm:text-5xl lg:text-6xl">
                        Looking for a more reliable wholesale supplier?
                    </h2>

                    <p class="mt-7 max-w-3xl text-lg leading-8 text-white/70">
                        Whether you're opening a new restaurant, managing a hotel,
                        or looking for a more reliable wholesale supplier, our
                        team is here to help.
                    </p>
                </div>

                <div class="flex flex-col gap-3 sm:flex-row lg:flex-col xl:flex-row">

                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center gap-4 bg-white px-7 py-4 text-sm font-bold uppercase tracking-[0.16em] text-[#071827] transition duration-300 hover:bg-white/85"
                    >
                        Open a trade account
                        <span>→</span>
                    </a>

                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center gap-4 border border-white/40 px-7 py-4 text-sm font-bold uppercase tracking-[0.16em] text-white transition duration-300 hover:bg-white hover:text-[#071827]"
                    >
                        Contact our team
                        <span>→</span>
                    </a>

                </div>

            </div>

        </div>
    </section>


    @include('partials.home.trusted-by')

</x-layout>