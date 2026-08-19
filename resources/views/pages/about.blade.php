<x-layout
    title="About Us | CSP Food Services"
    description="Learn more about CSP Food Services, a family-run independent food supplier founded in 1967."
>

    {{-- Hero --}}
    <section class="relative overflow-hidden bg-[#2263AE] text-white">

        <div class="mx-auto max-w-7xl px-6 pb-24 pt-40 lg:px-10 lg:pb-32 lg:pt-48">

            <div class="grid items-end gap-12 lg:grid-cols-12 lg:gap-20">

                <div class="lg:col-span-8">

                    <p class="text-xs font-bold uppercase tracking-[0.4em] text-white/60">
                        About CSP Food Services
                    </p>

                    <h1
                        class="mt-6 text-5xl font-bold uppercase leading-[0.95] tracking-tight
                               sm:text-6xl lg:text-8xl"
                    >
                        Family run.<br>
                        Built on quality.<br>
                        Since 1967.
                    </h1>

                </div>

                <div class="lg:col-span-4">

                    <p class="max-w-md text-lg leading-8 text-white/75">
                        For more than five decades, CSP Food Services has supplied
                        quality produce with the personal service and reliability
                        of an independent family business.
                    </p>

                </div>

            </div>

        </div>

        <div class="h-px bg-white/15"></div>

    </section>


    {{-- Intro --}}
    {{-- Who We Are --}}
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
                    {
                        threshold: 0.15
                    }
                );

                observer.observe(this.$el);
            }
        }"
        class="relative min-h-[850px] overflow-hidden bg-neutral-950"
    >

        {{-- Background image --}}
        <img
            src="{{ asset('images/home/about/about-main.jpg') }}"
            alt="CSP Food Services"
            class="absolute inset-0 h-full w-full object-cover"
        >

        

        {{-- Stronger left-to-right gradient --}}
        <div
            class="absolute inset-0 bg-gradient-to-r
                from-black/80
                via-black/55
                to-black/20"
        ></div>


        {{-- Content --}}
        <div
            class="relative z-10 flex min-h-[850px] items-center px-6 py-24
                sm:px-10 lg:px-16 lg:py-32 xl:px-24"
        >

            <div class="mx-auto w-full max-w-7xl">

                {{-- Section heading --}}
                <div
                    class="transition-all duration-1000 ease-out"
                    :class="visible
                        ? 'translate-y-0 opacity-100'
                        : 'translate-y-12 opacity-0'"
                >

                    <p
                        class="text-xs font-bold uppercase tracking-[0.4em] text-white/55"
                    >
                        Who we are
                    </p>

                    <h2
                        class="mt-6 max-w-5xl text-4xl font-bold uppercase
                            leading-[1.05] tracking-tight text-white
                            sm:text-5xl lg:text-6xl"
                    >
                        An independent family business with more than five decades
                        of experience.
                    </h2>

                </div>


                {{-- Content --}}
                <div
                    class="mt-14 grid gap-10 border-t border-white/25 pt-10
                        transition-all duration-1000 ease-out
                        md:grid-cols-2 lg:mt-16 lg:gap-20 lg:pt-12"
                    :class="visible
                        ? 'translate-y-0 opacity-100'
                        : 'translate-y-12 opacity-0'"
                    style="transition-delay: 200ms;"
                >

                    {{-- Left text --}}
                    <div class="space-y-6 text-base leading-8 text-white/75">

                        <p>
                            We are a family-run independent company founded in 1967.
                            Over the years we have established an excellent reputation
                            and an extensive range of high-quality fresh and frozen
                            products.
                        </p>

                        <p>
                            Our experienced, long-standing team has in-depth knowledge
                            of seasonal goods and works with sustainable, well-managed
                            fisheries and farms.
                        </p>

                    </div>


                    {{-- Right text --}}
                    <div class="space-y-6 text-base leading-8 text-white/75">

                        <p>
                            Our clients are based around London and the surrounding
                            regions, supplied using our own in-house delivery service.
                        </p>

                        <p>
                            We work with prestigious clients and blue-chip organisations,
                            while continuing to provide the personal service expected
                            from an independent family business.
                        </p>

                    </div>

                </div>


                {{-- Bottom detail --}}
                <div
                    class="mt-14 flex items-center gap-6 transition-all
                        duration-1000 ease-out"
                    :class="visible
                        ? 'translate-y-0 opacity-100'
                        : 'translate-y-10 opacity-0'"
                    style="transition-delay: 400ms;"
                >

                    <span
                        class="text-5xl font-bold leading-none tracking-tight
                            text-white sm:text-6xl"
                    >
                        1967
                    </span>

                    <div class="h-12 w-px bg-white/30"></div>

                    <span
                        class="text-xs font-bold uppercase leading-5
                            tracking-[0.25em] text-white/50"
                    >
                        Family run<br>
                        since day one
                    </span>

                </div>

            </div>

        </div>

    </section>


    {{-- Commitment --}}
    <section class="bg-[#f3f3f1] py-24 sm:py-32">

        <div class="mx-auto max-w-7xl px-6 lg:px-10">

            <div class="grid items-center gap-14 lg:grid-cols-2 lg:gap-20">

                <div>

                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-neutral-500">
                        Our commitment
                    </p>

                    <h2
                        class="mt-5 text-4xl font-bold uppercase leading-tight tracking-tight
                               text-neutral-900 sm:text-5xl"
                    >
                        Responsible sourcing without compromising on quality.
                    </h2>

                    <div class="mt-7 h-px w-16 bg-neutral-900"></div>

                    <div class="mt-8 space-y-6 text-base leading-8 text-neutral-600">

                        <p>
                            We are totally committed to responsible sourcing and
                            the supply of the best of the world's produce from
                            well-managed and sustainable farms and fisheries.
                        </p>

                        <p>
                            We source products within UK and international regulatory
                            guidelines, while maintaining our commitment to actively
                            promote greater variety.
                        </p>

                    </div>

                </div>

                <div class="relative min-h-[560px] overflow-hidden">

                    <img
                        src="{{ asset('images/about/commitment.jpg') }}"
                        alt="Responsible sourcing"
                        class="absolute inset-0 h-full w-full object-cover"
                    >

                </div>

            </div>

        </div>

    </section>


    {{-- Sustainability --}}
    @include('partials.home.sustainability')

    {{-- Suppliers --}}
    @include('partials.home.suppliers')

</x-layout>