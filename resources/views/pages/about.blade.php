<x-layout
    title="About Us | CSP Food Services"
    description="Learn more about CSP Food Services, a family-run independent food wholesaler trusted by restaurants, hotels and hospitality businesses since 1967."
>

    <section class="relative overflow-hidden bg-[#071827] px-5 pb-20 pt-40 text-white sm:px-8 lg:px-10 lg:pb-28 lg:pt-48">
        <div class="absolute inset-0 bg-gradient-to-r from-[#071827] via-[#071827]/95 to-[#071827]/70"></div>

        <div class="relative mx-auto max-w-[1800px]">
            <div class="grid items-end gap-12 lg:grid-cols-12 lg:gap-20">

                <div class="lg:col-span-8">
                    <p class="text-xs font-bold uppercase tracking-[0.4em] text-white/55">
                        About CSP Food Services
                    </p>

                    <h1 class="mt-6 max-w-6xl text-5xl font-bold uppercase leading-[0.95] tracking-tight sm:text-6xl lg:text-8xl">
                        Family-run.<br>
                        Hospitality-focused.<br>
                        Trusted since 1967.
                    </h1>
                </div>

                <div class="lg:col-span-4">
                    <p class="max-w-md text-lg leading-8 text-white/75">
                        For over 55 years, we’ve been supplying premium meat,
                        poultry, fish and specialist food products to some of the
                        UK’s leading restaurants, hotels and hospitality businesses.
                    </p>
                </div>

            </div>
        </div>
    </section>


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
        class="relative min-h-[850px] overflow-hidden bg-neutral-950"
    >
        <img
            src="{{ asset('images/home/about/about-main.jpg') }}"
            alt="CSP Food Services"
            class="absolute inset-0 h-full w-full object-cover"
        >

        <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/60 to-black/20"></div>

        <div class="relative z-10 flex min-h-[850px] items-center px-6 py-24 sm:px-10 lg:px-16 lg:py-32 xl:px-24">

            <div class="mx-auto w-full max-w-[1600px]">

                <div
                    class="transition-all duration-1000 ease-out"
                    :class="visible
                        ? 'translate-y-0 opacity-100'
                        : 'translate-y-12 opacity-0'"
                >
                    <p class="text-xs font-bold uppercase tracking-[0.4em] text-white/55">
                        Our story
                    </p>

                    <h2 class="mt-6 max-w-5xl text-4xl font-bold uppercase leading-[1.05] tracking-tight text-white sm:text-5xl lg:text-6xl">
                        A family business built on relationships.
                    </h2>
                </div>

                <div
                    class="mt-14 grid gap-10 border-t border-white/25 pt-10 transition-all duration-1000 ease-out md:grid-cols-2 lg:mt-16 lg:gap-20 lg:pt-12"
                    :class="visible
                        ? 'translate-y-0 opacity-100'
                        : 'translate-y-12 opacity-0'"
                    style="transition-delay: 200ms;"
                >
                <div class="space-y-6 text-base leading-8 text-white/75 sm:text-lg">
                    <p>
                        CSP Food Services was founded in 1967 by Luigi, who built the
                        business around a commitment to quality produce, dependable service
                        and strong relationships with his customers.
                    </p>

                    <p>
                        As the business grew, it was passed down to his sons, Marco and
                        Roberto, who continued to build on those same values while expanding
                        CSP's product range, customer base and delivery network.
                    </p>
                </div>

                <div class="space-y-6 text-base leading-8 text-white/75 sm:text-lg">
                    <p>
                        Today, CSP is entering its third generation, marking an exciting new
                        chapter for the family business. With the next generation becoming
                        increasingly involved, the company continues to evolve, expand and
                        grow while remaining proudly independent and family-run.
                    </p>

                    <p>
                        From its beginnings with Luigi to the business it is today, CSP's
                        reputation has been built on generations of experience, personal
                        service and long-standing relationships with customers and suppliers.
                    </p>
                </div>
                </div>

                <div
                    class="mt-14 flex items-center gap-6 transition-all duration-1000 ease-out"
                    :class="visible
                        ? 'translate-y-0 opacity-100'
                        : 'translate-y-10 opacity-0'"
                    style="transition-delay: 400ms;"
                >
                    <span class="text-5xl font-bold leading-none tracking-tight text-white sm:text-6xl">
                        1967
                    </span>

                    <div class="h-12 w-px bg-white/30"></div>

                    <span class="text-xs font-bold uppercase leading-5 tracking-[0.25em] text-white/50">
                        Family run<br>
                        since day one
                    </span>
                </div>

            </div>
        </div>
    </section>


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
        <div class="mx-auto max-w-[1600px]">

            <div
                class="grid gap-12 transition-all duration-1000 ease-out lg:grid-cols-[0.8fr_1.2fr] lg:gap-20"
                :class="visible
                    ? 'translate-y-0 opacity-100'
                    : 'translate-y-12 opacity-0'"
            >
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#2263AE]">
                        What we do
                    </p>

                    <h2 class="mt-5 max-w-xl text-4xl font-bold uppercase leading-tight tracking-tight text-neutral-900 sm:text-5xl lg:text-6xl">
                        Keeping professional kitchens running smoothly.
                    </h2>
                </div>

                <div>
                    <p class="max-w-3xl text-lg leading-8 text-neutral-600">
                        Every day, our team works behind the scenes to support
                        professional kitchens across London and beyond. Whether
                        it’s a daily order or a hard-to-source ingredient, our
                        experienced buying team works closely with trusted
                        suppliers to deliver the quality our customers expect.
                    </p>
                </div>
            </div>

            <div
                class="mt-14 grid border-l border-t border-neutral-200 transition-all duration-1000 ease-out sm:grid-cols-2 lg:grid-cols-3"
                :class="visible
                    ? 'translate-y-0 opacity-100'
                    : 'translate-y-10 opacity-0'"
                style="transition-delay: 200ms;"
            >

                @foreach ([
                    'Fresh Meat',
                    'Fresh Poultry',
                    'Fresh Fish & Seafood',
                    'Frozen Products',
                    'Game',
                    'Charcuterie',
                    'Dairy',
                    'Dry Goods',
                    'Specialist & Seasonal Products',
                ] as $item)

                    <a
                        href="{{ route('products') }}"
                        class="group border-b border-r border-neutral-200 p-7 transition duration-300 hover:bg-[#071827] sm:p-8 lg:p-10"
                    >
                        <div class="flex items-center justify-between gap-5">

                            <span class="text-lg font-bold uppercase tracking-tight text-neutral-900 transition duration-300 group-hover:text-white">
                                {{ $item }}
                            </span>

                            <span class="text-xl text-neutral-300 transition duration-300 group-hover:translate-x-1 group-hover:text-white">
                                →
                            </span>

                        </div>
                    </a>

                @endforeach

            </div>

        </div>
    </section>


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
        <div class="mx-auto max-w-[1600px]">

            <div class="grid items-center gap-14 lg:grid-cols-2 lg:gap-20">

                <div
                    class="transition-all duration-1000 ease-out"
                    :class="visible
                        ? 'translate-y-0 opacity-100'
                        : 'translate-y-12 opacity-0'"
                >
                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#2263AE]">
                        Sustainability & responsibility
                    </p>

                    <h2 class="mt-5 text-4xl font-bold uppercase leading-tight tracking-tight text-neutral-900 sm:text-5xl lg:text-6xl">
                        Looking after more than just today’s deliveries.
                    </h2>

                    <div class="mt-8 h-px w-16 bg-neutral-900"></div>

                    <div class="mt-8 space-y-6 text-base leading-8 text-neutral-600 sm:text-lg">
                        <p>
                            At CSP, sustainability isn’t treated as a separate
                            initiative — it’s part of how we do business.
                        </p>

                        <p>
                            We’re continually working to improve our
                            environmental, ethical and social performance across
                            our operations and supply chain.
                        </p>
                    </div>
                </div>

                <div
                    class="relative min-h-[520px] overflow-hidden transition-all duration-1000 ease-out lg:min-h-[620px]"
                    :class="visible
                        ? 'translate-y-0 opacity-100'
                        : 'translate-y-12 opacity-0'"
                    style="transition-delay: 200ms;"
                >
                    <img
                        src="{{ asset('images/home/about/farm.jpg') }}"
                        alt="Responsible food sourcing"
                        class="absolute inset-0 h-full w-full object-cover"
                    >
                </div>

            </div>


            <div
                class="mt-16 grid gap-px overflow-hidden bg-neutral-300 transition-all duration-1000 ease-out sm:grid-cols-2 lg:grid-cols-4"
                :class="visible
                    ? 'translate-y-0 opacity-100'
                    : 'translate-y-10 opacity-0'"
                style="transition-delay: 300ms;"
            >

                @foreach ([
                    'Responsible sourcing',
                    'Supplier Code of Conduct',
                    'Animal Welfare Policy',
                    'Sustainable Procurement',
                    'Carbon reduction initiatives',
                    'Waste reduction',
                    'Responsible supply chains',
                ] as $commitment)

                    <div class="bg-white p-7 sm:p-8">
                        <span class="text-xs font-bold uppercase tracking-[0.25em] text-[#2263AE]">
                            Commitment
                        </span>

                        <p class="mt-4 text-lg font-bold uppercase leading-snug text-neutral-900">
                            {{ $commitment }}
                        </p>
                    </div>

                @endforeach

            </div>


            <div
                class="mt-16 border-y border-neutral-300 py-12 transition-all duration-1000 ease-out sm:py-14"
                :class="visible
                    ? 'translate-y-0 opacity-100'
                    : 'translate-y-10 opacity-0'"
                style="transition-delay: 400ms;"
            >
                <div class="mb-10 text-center">

                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#2263AE]">
                        Standards & responsibility
                    </p>

                    <h3 class="mt-4 text-2xl font-bold uppercase tracking-tight text-neutral-900 sm:text-3xl">
                        Committed to responsible foodservice.
                    </h3>

                </div>

                <div class="grid grid-cols-2 items-center gap-8 sm:gap-10 lg:grid-cols-4 lg:gap-12">

                <div class="flex min-h-[180px] items-center justify-center">
                    <img
                        src="{{ asset('images/home/about/sustainability/logo-1.png') }}"
                        alt="CSP sustainability accreditation"
                        class="max-h-[150px] w-full max-w-[280px] object-contain"
                    >
                </div>

                <div class="flex min-h-[180px] items-center justify-center">
                    <img
                        src="{{ asset('images/home/about/sustainability/logo-2.png') }}"
                        alt="CSP sustainability accreditation"
                        class="max-h-[150px] w-full max-w-[280px] object-contain"
                    >
                </div>

                <div class="flex min-h-[180px] items-center justify-center">
                    <img
                        src="{{ asset('images/home/about/sustainability/logo-3.png') }}"
                        alt="CSP sustainability accreditation"
                        class="max-h-[150px] w-full max-w-[280px] object-contain"
                    >
                </div>

                <div class="flex min-h-[180px] items-center justify-center">
                    <img
                        src="{{ asset('images/home/about/sustainability/logo-4.png') }}"
                        alt="CSP sustainability accreditation"
                        class="max-h-[150px] w-full max-w-[280px] object-contain"
                    >
                </div>

            </div>
            </div>


            <div
                class="mt-16 transition-all duration-1000 ease-out"
                :class="visible
                    ? 'translate-y-0 opacity-100'
                    : 'translate-y-10 opacity-0'"
                style="transition-delay: 500ms;"
            >
                <div class="grid gap-8 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">

                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#2263AE]">
                            EcoVadis
                        </p>

                        <h3 class="mt-4 text-3xl font-bold uppercase tracking-tight text-neutral-900 sm:text-4xl">
                            Independently assessed.
                        </h3>
                    </div>

                    <div>
                        <p class="max-w-3xl text-base leading-8 text-neutral-600 sm:text-lg">
                            As part of this commitment, CSP has been independently
                            assessed by EcoVadis, one of the world’s most recognised
                            business sustainability rating platforms. We continue
                            to use the EcoVadis framework to strengthen our policies,
                            improve transparency and drive continuous improvement
                            across our business.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section>


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
        class="overflow-hidden bg-[#071827] py-20 text-white sm:py-24 lg:py-28"
    >
        <div class="mx-auto max-w-[1600px] px-5 sm:px-8 lg:px-10">

            <div
                class="grid gap-10 transition-all duration-1000 ease-out lg:grid-cols-[0.8fr_1.2fr] lg:gap-20"
                :class="visible
                    ? 'translate-y-0 opacity-100'
                    : 'translate-y-12 opacity-0'"
            >
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-white/50">
                        Our team
                    </p>

                    <h2 class="mt-5 text-4xl font-bold uppercase leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                        The people behind every delivery.
                    </h2>
                </div>

                <div>
                    <p class="max-w-3xl text-lg leading-8 text-white/70">
                        Behind every delivery is a team committed to helping our
                        customers succeed. From our buyers and sales team to our
                        warehouse staff and delivery drivers, everyone at CSP
                        plays an important role in ensuring every order arrives
                        accurately, on time and to the highest standards.
                    </p>

                    <p class="mt-6 max-w-3xl text-lg leading-8 text-white/70">
                        Rather than simply supplying products, we see ourselves
                        as an extension of our customers’ kitchens.
                    </p>
                </div>
            </div>

        </div>

        <div class="mt-14 overflow-hidden">

            <div class="team-marquee-wrapper overflow-hidden">

                <div class="team-marquee flex w-max gap-4">

                    @for ($group = 0; $group < 2; $group++)

                        <div class="flex shrink-0 gap-4">

                            <div class="group relative h-[360px] w-[300px] shrink-0 overflow-hidden sm:h-[420px] sm:w-[360px] lg:h-[480px] lg:w-[420px]">
                                <img
                                    src="/images/home/about/team/drivers.jpg"
                                    alt="Delivery team"
                                    class="absolute inset-0 h-full w-full object-cover"
                                >

                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

                                <div class="absolute inset-x-0 bottom-0 z-10 p-6 sm:p-7">
                                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-white">
                                        Delivery team
                                    </p>
                                </div>
                            </div>

                            <div class="group relative h-[360px] w-[300px] shrink-0 overflow-hidden sm:h-[420px] sm:w-[360px] lg:h-[480px] lg:w-[420px]">
                                <img
                                    src="/images/home/about/team/vans.jpg"
                                    alt="Our fleet"
                                    class="absolute inset-0 h-full w-full object-cover"
                                >

                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

                                <div class="absolute inset-x-0 bottom-0 z-10 p-6 sm:p-7">
                                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-white">
                                        Our fleet
                                    </p>
                                </div>
                            </div>

                            <div class="group relative h-[360px] w-[300px] shrink-0 overflow-hidden sm:h-[420px] sm:w-[360px] lg:h-[480px] lg:w-[420px]">
                                <img
                                    src="/images/home/about/team/poultry-team.jpg"
                                    alt="Poultry team"
                                    class="absolute inset-0 h-full w-full object-cover"
                                >

                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

                                <div class="absolute inset-x-0 bottom-0 z-10 p-6 sm:p-7">
                                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-white">
                                        Poultry team
                                    </p>
                                </div>
                            </div>

                            <div class="group relative h-[360px] w-[300px] shrink-0 overflow-hidden sm:h-[420px] sm:w-[360px] lg:h-[480px] lg:w-[420px]">
                                <img
                                    src="/images/home/about/team/office.jpg"
                                    alt="Office team"
                                    class="absolute inset-0 h-full w-full object-cover"
                                >

                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

                                <div class="absolute inset-x-0 bottom-0 z-10 p-6 sm:p-7">
                                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-white">
                                        Office team
                                    </p>
                                </div>
                            </div>

                        </div>

                    @endfor

                </div>

            </div>

        </div>

        <style>
            @keyframes csp-team-marquee {
                from {
                    transform: translateX(0);
                }

                to {
                    transform: translateX(-50%);
                }
            }

            .team-marquee {
                animation: csp-team-marquee 45s linear infinite;
                will-change: transform;
            }

            .team-marquee-wrapper:hover .team-marquee {
                animation-play-state: paused;
            }

            @media (prefers-reduced-motion: reduce) {
                .team-marquee {
                    animation: none;
                    transform: none;
                }
            }
        </style>

    </section>


    <section class="bg-white px-5 py-20 sm:px-8 sm:py-24 lg:px-10">
        <div class="mx-auto flex max-w-[1600px] flex-col justify-between gap-10 border-t border-neutral-200 pt-14 lg:flex-row lg:items-end">

            <div>
                <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#2263AE]">
                    Work with CSP
                </p>

                <h2 class="mt-5 max-w-4xl text-4xl font-bold uppercase leading-tight tracking-tight text-neutral-900 sm:text-5xl lg:text-6xl">
                    A supplier built around your kitchen.
                </h2>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-neutral-600">
                    Speak to our team about your requirements, product
                    availability and wholesale supply.
                </p>
            </div>

            <a
                href="{{ route('contact') }}"
                class="inline-flex shrink-0 items-center gap-4 bg-[#071827] px-8 py-4 text-sm font-bold uppercase tracking-[0.16em] text-white transition duration-300 hover:bg-[#2263AE]"
            >
                Contact our team

                <span>
                    →
                </span>
            </a>

        </div>
    </section>

</x-layout>