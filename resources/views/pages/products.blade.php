<x-layout
    title="Products | CSP Food Services"
    description="Explore CSP Food Services' wholesale fish, game, poultry and charcuterie, including seasonal availability throughout the year."
>

    <section class="relative overflow-hidden bg-[#071827] px-5 pb-20 pt-40 text-white sm:px-8 lg:px-10 lg:pb-28 lg:pt-48">
        <img
            src="{{ asset('images/products/hero.jpg') }}"
            alt=""
            class="absolute inset-0 h-full w-full object-cover opacity-25"
        >

        <div class="absolute inset-0 bg-gradient-to-r from-[#071827] via-[#071827]/90 to-[#071827]/50"></div>

        <div class="relative mx-auto max-w-[1800px]">
            <p class="text-xs font-bold uppercase tracking-[0.4em] text-white/50">
                Our produce
            </p>

            <h1 class="mt-5 max-w-5xl text-5xl font-bold uppercase leading-[0.95] tracking-tight sm:text-6xl lg:text-8xl">
                Quality produce.<br>
                Season by season.
            </h1>

            <p class="mt-8 max-w-2xl text-lg leading-8 text-white/70 sm:text-xl">
                Explore our wholesale range of fish, game, poultry and
                charcuterie, selected for professional kitchens and hospitality
                businesses.
            </p>
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
        class="bg-white px-3 py-5 sm:px-4 lg:px-5"
    >
        <div
            class="mx-auto grid max-w-[1800px] gap-3 transition-all duration-1000 ease-out sm:gap-4 lg:grid-cols-2 lg:gap-5"
            :class="visible
                ? 'translate-y-0 opacity-100'
                : 'translate-y-10 opacity-0'"
        >
            <a
                href="#fish"
                class="group relative flex min-h-[460px] items-end overflow-hidden rounded-[16px] text-white sm:min-h-[540px] lg:min-h-[620px]"
            >
                <img
                    src="{{ asset('images/home/products/fish.jpg') }}"
                    alt="Wholesale fish"
                    class="absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-105"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/15 to-transparent"></div>

                <div class="relative z-10 p-8 sm:p-10 lg:p-12">
                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-white/70">
                        Fresh & seasonal
                    </p>

                    <h2 class="mt-4 text-4xl font-bold uppercase sm:text-5xl lg:text-6xl">
                        Fish
                    </h2>

                    <p class="mt-5 max-w-md leading-7 text-white/80">
                        A broad range of fresh and seasonal seafood for
                        professional kitchens.
                    </p>

                    <span class="mt-7 inline-flex items-center gap-3 text-sm font-bold uppercase tracking-[0.15em]">
                        View seasonality

                        <span class="transition-transform duration-300 group-hover:translate-x-2">
                            →
                        </span>
                    </span>
                </div>
            </a>

            <a
                href="#game"
                class="group relative flex min-h-[460px] items-end overflow-hidden rounded-[16px] text-white sm:min-h-[540px] lg:min-h-[620px]"
            >
                <img
                    src="{{ asset('images/home/products/game.jpg') }}"
                    alt="Wholesale game"
                    class="absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-105"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/15 to-transparent"></div>

                <div class="relative z-10 p-8 sm:p-10 lg:p-12">
                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-white/70">
                        Seasonal produce
                    </p>

                    <h2 class="mt-4 text-4xl font-bold uppercase sm:text-5xl lg:text-6xl">
                        Game
                    </h2>

                    <p class="mt-5 max-w-md leading-7 text-white/80">
                        Seasonal game sourced for restaurants, hotels and
                        professional kitchens.
                    </p>

                    <span class="mt-7 inline-flex items-center gap-3 text-sm font-bold uppercase tracking-[0.15em]">
                        View seasonality

                        <span class="transition-transform duration-300 group-hover:translate-x-2">
                            →
                        </span>
                    </span>
                </div>
            </a>

            <a
                href="#poultry"
                class="group relative flex min-h-[460px] items-end overflow-hidden rounded-[16px] text-white sm:min-h-[540px] lg:min-h-[620px]"
            >
                <img
                    src="{{ asset('images/home/products/poultry.jpg') }}"
                    alt="Wholesale poultry"
                    class="absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-105"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/15 to-transparent"></div>

                <div class="relative z-10 p-8 sm:p-10 lg:p-12">
                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-white/70">
                        Wholesale supply
                    </p>

                    <h2 class="mt-4 text-4xl font-bold uppercase sm:text-5xl lg:text-6xl">
                        Poultry
                    </h2>

                    <p class="mt-5 max-w-md leading-7 text-white/80">
                        Quality poultry supplied consistently to professional
                        kitchens.
                    </p>

                    <span class="mt-7 inline-flex items-center gap-3 text-sm font-bold uppercase tracking-[0.15em]">
                        Explore range

                        <span class="transition-transform duration-300 group-hover:translate-x-2">
                            →
                        </span>
                    </span>
                </div>
            </a>

            <a
                href="#charcuterie"
                class="group relative flex min-h-[460px] items-end overflow-hidden rounded-[16px] text-white sm:min-h-[540px] lg:min-h-[620px]"
            >
                <img
                    src="{{ asset('images/home/products/charcuterie.jpg') }}"
                    alt="Wholesale charcuterie"
                    class="absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-105"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/15 to-transparent"></div>

                <div class="relative z-10 p-8 sm:p-10 lg:p-12">
                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-white/70">
                        Premium selection
                    </p>

                    <h2 class="mt-4 text-4xl font-bold uppercase sm:text-5xl lg:text-6xl">
                        Charcuterie
                    </h2>

                    <p class="mt-5 max-w-md leading-7 text-white/80">
                        A premium range of charcuterie and speciality products.
                    </p>

                    <span class="mt-7 inline-flex items-center gap-3 text-sm font-bold uppercase tracking-[0.15em]">
                        Explore range

                        <span class="transition-transform duration-300 group-hover:translate-x-2">
                            →
                        </span>
                    </span>
                </div>
            </a>
        </div>
    </section>

    <section
        id="seasonal-produce"
        x-data="{
            season: 'spring',

            seasons: {
                spring: {
                    name: 'Spring',
                    months: 'March — May',
                    image: '{{ asset('images/home/products/seasons/spring.jpg') }}',
                    intro: 'Fresh seafood and the beginning of the spring deer season.',
                    products: [
                        {
                            type: 'Fish',
                            label: 'March, April & May',
                            items: 'Bream, clams, cockles, coley, crayfish, cuttlefish, haddock, langoustines, lobster, mussels, oysters, pike, wild salmon, sardines, scallops, sprats, squid, turbot, whitebait and whiting.'
                        },
                        {
                            type: 'Deer',
                            label: 'Spring',
                            items: 'Red stags, red hinds and fallow bucks are available during parts of the spring season, subject to regional restrictions and individual season dates.'
                        }
                    ]
                },

                summer: {
                    name: 'Summer',
                    months: 'June — August',
                    image: '{{ asset('images/home/products/seasons/summer.jpg') }}',
                    intro: 'Bright seasonal seafood alongside the beginning of the game season.',
                    products: [
                        {
                            type: 'Fish',
                            label: 'June — August',
                            items: 'Bream, brill, crawfish, crayfish, flounder, grey mullet, hake, langoustines, lemon sole, lobster, mackerel, monkfish, mussels, plaice, red mullet, wild salmon, squid and turbot.'
                        },
                        {
                            type: 'Game',
                            label: 'August',
                            items: 'Grouse, ptarmigan, black grouse, snipe and hare, subject to regional restrictions and season dates.'
                        },
                        {
                            type: 'Deer',
                            label: 'July — August',
                            items: 'Red stags and fallow bucks, with availability depending on regional season dates.'
                        }
                    ]
                },

                autumn: {
                    name: 'Autumn',
                    months: 'September — November',
                    image: '{{ asset('images/home/products/seasons/autumn.jpg') }}',
                    intro: 'One of the richest periods of the year for seasonal fish and British game.',
                    products: [
                        {
                            type: 'Fish',
                            label: 'September — November',
                            items: 'Bream, carp, clams, cod, coley, crayfish, Dover sole, haddock, langoustines, lobster, mussels, oysters, sardines, skate, squid, turbot and whitebait.'
                        },
                        {
                            type: 'Game',
                            label: 'September — November',
                            items: 'Pheasant, partridge, grouse, ptarmigan, snipe, woodcock, duck, goose, hare and other seasonal game.'
                        },
                        {
                            type: 'Deer',
                            label: 'September — November',
                            items: 'Red stags, red hinds and fallow bucks depending on month, species and regional restrictions.'
                        }
                    ]
                },

                winter: {
                    name: 'Winter',
                    months: 'December — February',
                    image: '{{ asset('images/home/products/seasons/winter.jpg') }}',
                    intro: 'A strong winter selection of seafood, traditional game and seasonal venison.',
                    products: [
                        {
                            type: 'Fish',
                            label: 'December — February',
                            items: 'Bream, carp, clams, cockles, crayfish, cuttlefish, haddock, langoustines, lobster, mussels, oysters, sardines, sprats, squid, turbot, whitebait and whiting.'
                        },
                        {
                            type: 'Game',
                            label: 'December — February',
                            items: 'Pheasant, partridge, grouse, snipe, woodcock, duck, goose and hare depending on month and region.'
                        },
                        {
                            type: 'Deer',
                            label: 'December — February',
                            items: 'Red stags, red hinds and fallow bucks, subject to the relevant regional season dates.'
                        }
                    ]
                }
            }
        }"
        class="relative min-h-[900px] overflow-hidden bg-[#071827] text-white"
    >

        <div class="absolute inset-0 z-0 overflow-hidden">
            <template x-for="key in ['spring', 'summer', 'autumn', 'winter']" :key="key">
                <img
                    x-show="season === key"
                    :src="seasons[key].image"
                    :alt="seasons[key].name + ' seasonal produce'"
                    class="absolute inset-0 h-full w-full object-cover"
                    x-transition:enter="transition duration-1000 ease-out"
                    x-transition:enter-start="opacity-0 scale-105"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition duration-700 ease-in"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-105"
                >
            </template>
        </div>

        <div class="absolute inset-0 z-10 bg-[#071827]/20"></div>

        <div class="absolute inset-0 z-10 bg-gradient-to-r from-[#071827]/70 via-[#071827]/50 to-[#071827]/20"></div>

        <div class="absolute inset-x-0 bottom-0 z-10 h-1/2 bg-gradient-to-t from-[#071827] via-[#071827]/55 to-transparent"></div>

        <div class="relative z-20 mx-auto flex min-h-[900px] max-w-[1800px] flex-col px-5 py-20 sm:px-8 sm:py-24 lg:px-10 lg:py-28">

            <div class="grid gap-14 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">

                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.4em] text-white/55">
                        Seasonal produce
                    </p>

                    <h2 class="mt-5 max-w-xl text-5xl font-bold uppercase leading-[0.95] tracking-tight sm:text-6xl lg:text-7xl">
                        Eat with<br>
                        the seasons.
                    </h2>

                    <p class="mt-7 max-w-lg text-base leading-8 text-white/70 sm:text-lg">
                        Our availability changes throughout the year. Explore each
                        season to see a selection of fish, game and deer typically
                        available at that time.
                    </p>

                    <div class="mt-12 border-l border-white/20">

                        <button
                            type="button"
                            @click="season = 'spring'"
                            class="group flex w-full items-center justify-between border-l-2 px-6 py-5 text-left transition duration-300"
                            :class="season === 'spring'
                                ? '-ml-[2px] border-white bg-white/10'
                                : '-ml-[1px] border-transparent hover:bg-white/5'"
                        >
                            <span
                                class="text-xl font-bold uppercase tracking-tight transition"
                                :class="season === 'spring' ? 'text-white' : 'text-white/45'"
                            >
                                Spring
                            </span>

                            <span
                                class="text-xs font-bold uppercase tracking-[0.25em] transition"
                                :class="season === 'spring' ? 'text-white/70' : 'text-white/30'"
                            >
                                Mar — May
                            </span>
                        </button>

                        <button
                            type="button"
                            @click="season = 'summer'"
                            class="group flex w-full items-center justify-between border-l-2 px-6 py-5 text-left transition duration-300"
                            :class="season === 'summer'
                                ? '-ml-[2px] border-white bg-white/10'
                                : '-ml-[1px] border-transparent hover:bg-white/5'"
                        >
                            <span
                                class="text-xl font-bold uppercase tracking-tight transition"
                                :class="season === 'summer' ? 'text-white' : 'text-white/45'"
                            >
                                Summer
                            </span>

                            <span
                                class="text-xs font-bold uppercase tracking-[0.25em] transition"
                                :class="season === 'summer' ? 'text-white/70' : 'text-white/30'"
                            >
                                Jun — Aug
                            </span>
                        </button>

                        <button
                            type="button"
                            @click="season = 'autumn'"
                            class="group flex w-full items-center justify-between border-l-2 px-6 py-5 text-left transition duration-300"
                            :class="season === 'autumn'
                                ? '-ml-[2px] border-white bg-white/10'
                                : '-ml-[1px] border-transparent hover:bg-white/5'"
                        >
                            <span
                                class="text-xl font-bold uppercase tracking-tight transition"
                                :class="season === 'autumn' ? 'text-white' : 'text-white/45'"
                            >
                                Autumn
                            </span>

                            <span
                                class="text-xs font-bold uppercase tracking-[0.25em] transition"
                                :class="season === 'autumn' ? 'text-white/70' : 'text-white/30'"
                            >
                                Sep — Nov
                            </span>
                        </button>

                        <button
                            type="button"
                            @click="season = 'winter'"
                            class="group flex w-full items-center justify-between border-l-2 px-6 py-5 text-left transition duration-300"
                            :class="season === 'winter'
                                ? '-ml-[2px] border-white bg-white/10'
                                : '-ml-[1px] border-transparent hover:bg-white/5'"
                        >
                            <span
                                class="text-xl font-bold uppercase tracking-tight transition"
                                :class="season === 'winter' ? 'text-white' : 'text-white/45'"
                            >
                                Winter
                            </span>

                            <span
                                class="text-xs font-bold uppercase tracking-[0.25em] transition"
                                :class="season === 'winter' ? 'text-white/70' : 'text-white/30'"
                            >
                                Dec — Feb
                            </span>
                        </button>

                    </div>
                </div>

                <div class="flex flex-col justify-end lg:min-h-[570px]">

                    <div
                        class="transition-all duration-500"
                        :key="season"
                    >
                        <div class="flex items-center gap-4">
                            <span class="h-px w-12 bg-white/50"></span>

                            <p
                                class="text-xs font-bold uppercase tracking-[0.35em] text-white/60"
                                x-text="seasons[season].months"
                            ></p>
                        </div>

                        <h3
                            class="mt-5 text-6xl font-bold uppercase leading-none tracking-tight sm:text-7xl lg:text-8xl"
                            x-text="seasons[season].name"
                        ></h3>

                        <p
                            class="mt-6 max-w-2xl text-lg leading-8 text-white/75"
                            x-text="seasons[season].intro"
                        ></p>
                    </div>

                </div>

            </div>

            <div class="mt-16 border-t border-white/20 pt-8 lg:mt-20">

                <div
                    class="grid gap-px overflow-hidden bg-white/20"
                    :class="seasons[season].products.length === 2
                        ? 'lg:grid-cols-2'
                        : 'lg:grid-cols-3'"
                >

                    <template
                        x-for="product in seasons[season].products"
                        :key="season + product.type"
                    >
                        <div class="group bg-[#071827]/80 p-7 backdrop-blur-xl transition duration-300 hover:bg-[#071827]/95 sm:p-8 lg:p-10">

                            <div class="flex items-start justify-between gap-5">

                                <div>
                                    <p
                                        class="text-xs font-bold uppercase tracking-[0.3em] text-white/45"
                                        x-text="product.label"
                                    ></p>

                                    <h4
                                        class="mt-4 text-3xl font-bold uppercase tracking-tight text-white"
                                        x-text="product.type"
                                    ></h4>
                                </div>

                                <span class="flex h-10 w-10 shrink-0 items-center justify-center border border-white/20 text-white/50 transition duration-300 group-hover:border-white/50 group-hover:text-white">
                                    ↗
                                </span>

                            </div>

                            <p
                                class="mt-7 max-w-xl leading-8 text-white/65"
                                x-text="product.items"
                            ></p>

                        </div>
                    </template>

                </div>

            </div>

            <div class="mt-8 flex flex-col justify-between gap-6 border-t border-white/15 pt-8 sm:flex-row sm:items-center">

                <p class="max-w-3xl text-sm leading-6 text-white/45">
                    Seasonal availability can vary depending on weather, supply,
                    location and statutory season dates. Contact our team for
                    current product availability.
                </p>

                <a
                    href="{{ route('contact') }}"
                    class="group inline-flex shrink-0 items-center gap-4 text-sm font-bold uppercase tracking-[0.18em] text-white"
                >
                    Check availability

                    <span class="transition-transform duration-300 group-hover:translate-x-2">
                        →
                    </span>
                </a>

            </div>

        </div>
    </section>

    <section class="bg-[#071827] px-5 py-20 text-white sm:px-8 sm:py-24 lg:px-10">
        <div class="mx-auto flex max-w-[1600px] flex-col justify-between gap-10 lg:flex-row lg:items-end">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.35em] text-white/50">
                    Wholesale enquiries
                </p>

                <h2 class="mt-5 max-w-4xl text-4xl font-bold uppercase leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                    Looking for a particular product?
                </h2>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-white/65">
                    Speak to our team about availability, seasonality and
                    wholesale supply.
                </p>
            </div>

            <a
                href="{{ route('contact') }}"
                class="inline-flex shrink-0 items-center gap-4 bg-white px-8 py-4 text-sm font-bold uppercase tracking-[0.16em] text-[#071827] transition duration-300 hover:bg-[#2263AE] hover:text-white"
            >
                Contact our team

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
    </section>

</x-layout>