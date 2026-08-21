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
    class="overflow-hidden bg-white"
>

    <div class="grid lg:grid-cols-2">

        {{-- Home Deliveries --}}
        <a
            href="https://cspfoodtoyourhome.company.site/"
            target="_blank"
            rel="noopener noreferrer"
            class="group relative flex min-h-[420px] items-end overflow-hidden bg-[#2263AE] px-8 py-10 text-white
                   transition-all duration-1000 ease-out
                   sm:px-12 sm:py-14
                   lg:min-h-[500px] lg:px-16"
            :class="visible
                ? 'translate-y-0 opacity-100'
                : 'translate-y-12 opacity-0'"
        >

            {{-- Optional background image --}}
            <img
                src="{{ asset('images/home/home.jpg') }}"
                alt="CSP home deliveries"
                class="absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-105"
            >

            <div class="absolute inset-0 bg-[#2263AE]/20"></div>

            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>


            <div class="relative z-10 max-w-xl">

                <p class="text-xs font-bold uppercase tracking-[0.35em] text-white">
                    For your home
                </p>

                <h2
                    class="mt-5 text-4xl font-bold uppercase leading-tight tracking-tight sm:text-5xl"
                >
                    Home<br>
                    deliveries
                </h2>

                <p class="mt-6 max-w-md text-base font-medium leading-7 text-white">
                    Discover our home delivery service and order quality produce
                    directly to your door.
                </p>

                <div
                    class="mt-8 inline-flex items-center gap-3 text-sm font-bold uppercase tracking-[0.15em] text-white"
                >
                    Visit home delivery site

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
                </div>

            </div>

        </a>


        {{-- Commercial Wholesale --}}
        <a
            href="{{ route('products') }}"
            class="group relative flex min-h-[420px] items-end overflow-hidden bg-neutral-950 px-8 py-10 text-white
                   transition-all duration-1000 ease-out
                   sm:px-12 sm:py-14
                   lg:min-h-[500px] lg:px-16"
            :class="visible
                ? 'translate-y-0 opacity-100'
                : 'translate-y-12 opacity-0'"
            style="transition-delay: 150ms;"
        >

            {{-- Optional background image --}}
            <img
                src="{{ asset('images/home/wholesale.jpg') }}"
                alt="CSP commercial wholesale"
                class="absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-105"
            >

            <div class="absolute inset-0 bg-black/20"></div>

            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>


            <div class="relative z-10 max-w-xl">

                <p class="text-xs font-bold uppercase tracking-[0.35em] text-white">
                    For business
                </p>

                <h2
                    class="mt-5 text-4xl font-bold uppercase leading-tight tracking-tight sm:text-5xl"
                >
                    Commercial<br>
                    wholesale
                </h2>

                <p class="mt-6 max-w-md text-base leading-7 text-white">
                    Explore our range of fish, game, poultry and charcuterie
                    supplied to professional kitchens and hospitality businesses.
                </p>

                <div
                    class="mt-8 inline-flex items-center gap-3 text-sm font-bold uppercase tracking-[0.15em] text-white"
                >
                    View products

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
                </div>

            </div>

        </a>

    </div>

</section>