<section
    x-data="{
        leftVisible: false,
        rightVisible: false,

        init() {
            const observer = new IntersectionObserver(
                ([entry]) => {
                    if (entry.isIntersecting) {
                        this.leftVisible = true;

                        setTimeout(() => {
                            this.rightVisible = true;
                        }, 250);

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
    class="relative min-h-screen overflow-hidden bg-neutral-950"
>

    {{-- Full-screen background image --}}
    <img
        src="{{ asset('images/home/about.jpg') }}"
        alt="CSP Food Services"
        class="absolute inset-0 h-full w-full object-cover"
    >

    {{-- Dark overlay for readability --}}
    <div class="absolute inset-0 bg-black/55"></div>

    {{-- Slightly darker gradient on the left --}}
    <div
        class="absolute inset-0 bg-gradient-to-r from-black/45 via-black/15 to-black/20"
    ></div>

    {{-- Content --}}
    <div
        class="relative z-10 flex min-h-screen items-center px-6 py-24 sm:px-10 lg:px-16 xl:px-24"
    >

        <div class="mx-auto w-full max-w-7xl">

            <div class="grid gap-14 lg:grid-cols-2 lg:items-center lg:gap-24">

                {{-- Left --}}
                <div
                    class="transition-all duration-1000 ease-out"
                    :class="leftVisible
                        ? 'translate-y-0 opacity-100'
                        : 'translate-y-12 opacity-0'"
                >

                    <p
                        class="text-xs font-bold uppercase tracking-[0.4em] text-white/60"
                    >
                        About us
                    </p>

                    <h2
                        class="mt-6 text-5xl font-bold uppercase leading-[0.95] tracking-tight text-white sm:text-6xl lg:text-7xl xl:text-8xl"
                    >
                        Family run<br>
                        since 1967.
                    </h2>

                    <div class="mt-9 h-px w-20 bg-white/70"></div>

                    <div class="mt-10 flex items-end gap-5">

                        <span
                            class="text-6xl font-bold leading-none tracking-tight text-white sm:text-7xl"
                        >
                            1967
                        </span>

                        <span
                            class="pb-1 text-xs font-bold uppercase leading-5 tracking-[0.25em] text-white/55"
                        >
                            Established<br>
                            over 50 years ago
                        </span>

                    </div>

                </div>


                {{-- Right --}}
                <div
                    class="transition-all duration-1000 ease-out"
                    :class="rightVisible
                        ? 'translate-y-0 opacity-100'
                        : 'translate-y-12 opacity-0'"
                >

                    <p
                        class="text-xl font-medium leading-9 text-white sm:text-2xl sm:leading-10"
                    >
                        We are a family-run independent company with an excellent
                        reputation for quality produce and dependable service.
                    </p>

                    <div class="mt-9 h-px w-full bg-white/20"></div>

                    <div
                        class="mt-9 space-y-6 text-[15px] leading-8 text-white/75 sm:text-base"
                    >

                        <p>
                            Founded in 1967, we have established an extensive,
                            high quality range of fresh and frozen products.
                            CSP Food Services has an experienced, long-standing
                            team with in-depth knowledge of seasonal goods and
                            offers products from sustainable, well-managed
                            fisheries and farms.
                        </p>

                        <p>
                            Our clients are based around London and the
                            surrounding regions and we are able to supply them
                            using our own in-house delivery service.
                        </p>

                        <p>
                            We supply a wide range of prestigious clients and
                            blue-chip organisations, and have also expanded our
                            service to include home delivery.
                        </p>

                    </div>

                    <a
                        href="{{ route('about') }}"
                        class="group mt-10 inline-flex items-center gap-4 border-b border-white/50 pb-2 text-sm font-bold uppercase tracking-[0.2em] text-white transition hover:border-white"
                    >
                        Discover our story

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-2"
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

        </div>

    </div>

</section>