<x-layout
    title="Services | CSP Food Services"
    description="Discover CSP Food Services' refrigerated delivery, wholesale supply and ordering services for professional kitchens across the UK."
>

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
                What we do
            </p>

            <h1 class="mt-5 max-w-5xl text-5xl font-bold uppercase leading-[0.95] tracking-tight sm:text-6xl lg:text-8xl">
                Reliable supply.<br>
                Delivered properly.
            </h1>

            <p class="mt-8 max-w-2xl text-lg leading-8 text-white/70 sm:text-xl">
                From temperature-controlled deliveries to dependable wholesale
                supply, our service is built around the needs of professional
                kitchens.
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
        class="bg-white px-5 py-20 sm:px-8 sm:py-24 lg:px-10 lg:py-28"
    >
        <div
            class="mx-auto grid max-w-[1600px] gap-12 transition-all duration-1000 ease-out lg:grid-cols-2 lg:items-center lg:gap-20"
            :class="visible
                ? 'translate-y-0 opacity-100'
                : 'translate-y-10 opacity-0'"
        >
            <div class="relative min-h-[520px] overflow-hidden rounded-[22px] lg:min-h-[680px]">
                <img
                    src="{{ asset('images/home/services/van.jpg') }}"
                    alt="CSP refrigerated delivery vehicles"
                    class="absolute inset-0 h-full w-full object-cover"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>

                <div class="absolute bottom-7 left-7 right-7 flex items-end justify-between text-white sm:bottom-10 sm:left-10 sm:right-10">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.3em] text-white/70">
                            CSP Food Services
                        </p>

                        <p class="mt-2 text-2xl font-bold uppercase">
                            Refrigerated fleet
                        </p>
                    </div>

                    <div class="hidden h-14 w-14 items-center justify-center rounded-full border border-white/40 sm:flex">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            class="h-6 w-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3 7h11v9H3zM14 10h3l4 4v2h-7zM7 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm10 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"
                            />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="lg:pr-10">
                <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#2263AE]">
                    Our vehicles
                </p>

                <h2 class="mt-5 text-4xl font-bold uppercase leading-tight tracking-tight text-neutral-900 sm:text-5xl lg:text-6xl">
                    Quality controlled from us to you.
                </h2>

                <div class="mt-8 space-y-6 text-base leading-8 text-neutral-600 sm:text-lg">
                    <p>
                        We operate a fleet of refrigerated vehicles fitted with
                        computer-controlled temperature compartments, helping us
                        maintain consistent quality throughout every delivery.
                    </p>

                    <p>
                        Our vehicles are equipped with satellite navigation,
                        allowing our team to plan routes efficiently and provide
                        accurate delivery timing for customers.
                    </p>

                    <p>
                        With deliveries carried out across the UK, reliability,
                        temperature control and organisation are central to the
                        service we provide.
                    </p>
                </div>

                <a
                    href="{{ route('contact') }}"
                    class="mt-10 inline-flex items-center gap-4 bg-[#071827] px-7 py-4 text-sm font-bold uppercase tracking-[0.16em] text-white transition duration-300 hover:bg-[#2263AE]"
                >
                    Speak to our team

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


    <section class="bg-[#f3f3f1] px-5 py-20 sm:px-8 sm:py-24 lg:px-10 lg:py-28">
        <div class="mx-auto max-w-[1600px]">

            <div class="grid border-y border-neutral-300 lg:grid-cols-3">

                <div class="border-b border-neutral-300 px-4 py-10 sm:px-8 lg:border-b-0 lg:border-r lg:px-10 lg:py-14">
                    <span class="text-sm font-bold text-[#2263AE]">
                        01
                    </span>

                    <h3 class="mt-8 text-2xl font-bold uppercase tracking-tight text-neutral-900">
                        Temperature controlled
                    </h3>

                    <p class="mt-4 max-w-md leading-7 text-neutral-600">
                        Refrigerated compartments help maintain the correct
                        conditions throughout transport.
                    </p>
                </div>

                <div class="border-b border-neutral-300 px-4 py-10 sm:px-8 lg:border-b-0 lg:border-r lg:px-10 lg:py-14">
                    <span class="text-sm font-bold text-[#2263AE]">
                        02
                    </span>

                    <h3 class="mt-8 text-2xl font-bold uppercase tracking-tight text-neutral-900">
                        Reliable deliveries
                    </h3>

                    <p class="mt-4 max-w-md leading-7 text-neutral-600">
                        Our experienced delivery team supports professional
                        kitchens with dependable and organised service.
                    </p>
                </div>

                <div class="px-4 py-10 sm:px-8 lg:px-10 lg:py-14">
                    <span class="text-sm font-bold text-[#2263AE]">
                        03
                    </span>

                    <h3 class="mt-8 text-2xl font-bold uppercase tracking-tight text-neutral-900">
                        UK coverage
                    </h3>

                    <p class="mt-4 max-w-md leading-7 text-neutral-600">
                        Our fleet carries out deliveries across the UK while
                        maintaining quality and service standards.
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
        class="bg-white px-5 py-20 sm:px-8 sm:py-24 lg:px-10 lg:py-28"
    >
        <div
            class="mx-auto grid max-w-[1600px] overflow-hidden rounded-[24px] bg-[#071827] text-white transition-all duration-1000 ease-out lg:grid-cols-2"
            :class="visible
                ? 'translate-y-0 opacity-100'
                : 'translate-y-10 opacity-0'"
        >
            <div class="flex flex-col justify-center px-8 py-14 sm:px-12 sm:py-16 lg:px-16 lg:py-20">
                <p class="text-xs font-bold uppercase tracking-[0.35em] text-white/50">
                    Simple ordering
                </p>

                <h2 class="mt-5 text-4xl font-bold uppercase leading-tight tracking-tight sm:text-5xl">
                    Order now
                </h2>

                <p class="mt-6 max-w-xl text-base leading-8 text-white/65 sm:text-lg">
                    CSP Food Services is available through our wholesale site, giving professional kitchens another simple
                    way to place and manage orders.
                </p>

                <a
                    href="https://cspfoodtoyourhome.company.site/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="mt-9 inline-flex w-fit items-center gap-4 border border-white/40 px-7 py-4 text-sm font-bold uppercase tracking-[0.16em] text-white transition duration-300 hover:bg-white hover:text-[#071827]"
                >
                    Order Now

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

            <div class="relative min-h-[420px] lg:min-h-[580px]">
                <img
                    src="{{ asset('images/home/services/meat.jpg') }}"
                    alt="CSP Food Services wholesale ordering"
                    class="absolute inset-0 h-full w-full object-cover"
                >

                <div class="absolute inset-0 bg-gradient-to-r from-[#071827]/40 to-transparent lg:from-[#071827]/20"></div>
            </div>
        </div>
    </section>


    @include('partials.home.trusted-by')

</x-layout>