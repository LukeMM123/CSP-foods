<section
    x-data="{
        headingVisible: false,
        cardsVisible: false,

        init() {
            const observer = new IntersectionObserver(
                ([entry]) => {
                    if (entry.isIntersecting) {
                        this.headingVisible = true;

                        setTimeout(() => {
                            this.cardsVisible = true;
                        }, 200);

                        observer.disconnect();
                    }
                },
                {
                    threshold: 0.12
                }
            );

            observer.observe(this.$el);
        }
    }"
    class="overflow-hidden bg-neutral-950 py-24 sm:py-32"
>
    <div class="mx-auto max-w-7xl px-6 lg:px-10">

        {{-- Heading --}}
        <div
            class="mx-auto max-w-3xl text-center transition-all duration-1000 ease-out"
            :class="headingVisible
                ? 'translate-y-0 opacity-100'
                : 'translate-y-8 opacity-0'"
        >
            <p class="text-sm font-bold uppercase tracking-[0.3em] text-white/50">
                Our Produce
            </p>

            <h2 class="mt-5 text-4xl font-bold uppercase tracking-tight text-white sm:text-5xl">
                Premium Products
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-white/60">
                Carefully sourced produce for professional kitchens, restaurants,
                hotels and hospitality businesses.
            </p>
        </div>


        {{-- Products --}}
        <div class="mt-16 grid gap-5 md:grid-cols-2">

            {{-- Fish --}}
            <a
                href="{{ route('products') }}#fish"
                class="group relative min-h-[460px] overflow-hidden
                       transition-all duration-1000 ease-out"
                :class="cardsVisible
                    ? 'translate-y-0 opacity-100'
                    : 'translate-y-16 opacity-0'"
                style="transition-delay: 200ms;"
            >
                <img
                    src="{{ asset('images/home/products/fish.jpg') }}"
                    alt="Fresh fish and seafood"
                    class="absolute inset-0 h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105"
                >

                <div class="absolute inset-0 bg-black/30"></div>

                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>

                <div class="relative flex min-h-[460px] flex-col justify-end p-8 sm:p-10">

                    <p class="text-xs font-bold uppercase tracking-[0.3em] text-white/60">
                        Fresh &amp; responsibly sourced
                    </p>

                    <h3 class="mt-3 text-4xl font-bold uppercase text-white sm:text-5xl">
                        Fish
                    </h3>

                    <p class="mt-4 max-w-md text-sm leading-6 text-white/70 sm:text-base">
                        Quality fresh fish and seafood selected for professional kitchens.
                    </p>

                    <div class="mt-7 flex items-center gap-3 text-sm font-bold uppercase tracking-wider text-white">
                        View Products

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


            {{-- Game --}}
            <a
                href="{{ route('products') }}#game"
                class="group relative min-h-[460px] overflow-hidden
                       transition-all duration-1000 ease-out"
                :class="cardsVisible
                    ? 'translate-y-0 opacity-100'
                    : 'translate-y-16 opacity-0'"
                style="transition-delay: 300ms;"
            >
                <img
                    src="{{ asset('images/home/products/game.jpg') }}"
                    alt="Premium game produce"
                    class="absolute inset-0 h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105"
                >

                <div class="absolute inset-0 bg-black/30"></div>

                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>

                <div class="relative flex min-h-[460px] flex-col justify-end p-8 sm:p-10">

                    <p class="text-xs font-bold uppercase tracking-[0.3em] text-white/60">
                        Seasonal &amp; distinctive
                    </p>

                    <h3 class="mt-3 text-4xl font-bold uppercase text-white sm:text-5xl">
                        Game
                    </h3>

                    <p class="mt-4 max-w-md text-sm leading-6 text-white/70 sm:text-base">
                        Carefully selected game products offering rich flavour and quality.
                    </p>

                    <div class="mt-7 flex items-center gap-3 text-sm font-bold uppercase tracking-wider text-white">
                        View Products

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


            {{-- Poultry --}}
            <a
                href="{{ route('products') }}#poultry"
                class="group relative min-h-[460px] overflow-hidden
                       transition-all duration-1000 ease-out"
                :class="cardsVisible
                    ? 'translate-y-0 opacity-100'
                    : 'translate-y-16 opacity-0'"
                style="transition-delay: 400ms;"
            >
                <img
                    src="{{ asset('images/home/products/poultry.jpg') }}"
                    alt="Fresh poultry"
                    class="absolute inset-0 h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105"
                >

                <div class="absolute inset-0 bg-black/30"></div>

                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>

                <div class="relative flex min-h-[460px] flex-col justify-end p-8 sm:p-10">

                    <p class="text-xs font-bold uppercase tracking-[0.3em] text-white/60">
                        Trusted quality
                    </p>

                    <h3 class="mt-3 text-4xl font-bold uppercase text-white sm:text-5xl">
                        Poultry
                    </h3>

                    <p class="mt-4 max-w-md text-sm leading-6 text-white/70 sm:text-base">
                        High quality poultry sourced to meet the demands of busy kitchens.
                    </p>

                    <div class="mt-7 flex items-center gap-3 text-sm font-bold uppercase tracking-wider text-white">
                        View Products

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


            {{-- Charcuterie --}}
            <a
                href="{{ route('products') }}#charcuterie"
                class="group relative min-h-[460px] overflow-hidden
                       transition-all duration-1000 ease-out"
                :class="cardsVisible
                    ? 'translate-y-0 opacity-100'
                    : 'translate-y-16 opacity-0'"
                style="transition-delay: 550ms;"
            >
                <img
                    src="{{ asset('images/home/products/charcuterie.jpg') }}"
                    alt="Charcuterie and cured meats"
                    class="absolute inset-0 h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105"
                >

                <div class="absolute inset-0 bg-black/30"></div>

                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>

                <div class="relative flex min-h-[460px] flex-col justify-end p-8 sm:p-10">

                    <p class="text-xs font-bold uppercase tracking-[0.3em] text-white/60">
                        Crafted &amp; refined
                    </p>

                    <h3 class="mt-3 text-4xl font-bold uppercase text-white sm:text-5xl">
                        Charcuterie
                    </h3>

                    <p class="mt-4 max-w-md text-sm leading-6 text-white/70 sm:text-base">
                        A premium selection of cured meats and charcuterie products.
                    </p>

                    <div class="mt-7 flex items-center gap-3 text-sm font-bold uppercase tracking-wider text-white">
                        View Products

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

    </div>
</section>