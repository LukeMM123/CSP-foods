<section class="overflow-hidden bg-[#f3f3f1] py-20 sm:py-24 lg:py-28">

    @php
        $clients = [
            [
                'name' => 'Busaba',
                'logo' => 'busaba.png',
            ],
            [
                'name' => 'Colonel Saab',
                'logo' => 'C SAAB.jpg',
            ],
            [
                'name' => 'COMO Hotels and Resorts',
                'logo' => 'como.png',
            ],
            [
                'name' => 'Entegra',
                'logo' => 'entegra.png',
            ],
            [
                'name' => 'Foodomarket',
                'logo' => 'foodo.png',
            ],
            [
                'name' => 'Four Seasons',
                'logo' => 'four seasons.png',
            ],
            [
                'name' => 'JW Marriott Grosvenor House',
                'logo' => 'grosvenor.png',
            ],
            [
                'name' => 'Hyatt',
                'logo' => 'HYATT.jpg',
            ],
            [
                'name' => 'J.P. Morgan',
                'logo' => 'jp morgan.png',
            ],
            [
                'name' => 'The Landmark London',
                'logo' => 'LANDMARK.svg',
            ],
            [
                'name' => 'MW Eat',
                'logo' => 'MW EAT.png',
            ],
            [
                'name' => 'The Other House',
                'logo' => 'OTHER HOUSE 1.svg',
            ],
            [
                'name' => 'Ottolenghi',
                'logo' => 'ottolenghi.png',
            ],
            [
                'name' => 'Red Carnation Hotel Collection',
                'logo' => 'rch.png',
            ],
            [
                'name' => 'REKKI',
                'logo' => 'rekki.png',
            ],
            [
                'name' => 'Royal Lancaster London',
                'logo' => 'ROYAL LANCASTER.png',
            ],
            [
                'name' => 'Sheraton',
                'logo' => 'sheraton.png',
            ],
            [
                'name' => 'St James Court',
                'logo' => 'ST JAMES COURT.png',
            ],
            [
                'name' => 'Tigermilk',
                'logo' => 'tigermilk.png',
            ],
            [
                'name' => 'West Ham United',
                'logo' => 'west ham.png',
            ],
        ];

        /*
        |--------------------------------------------------------------------------
        | Split clients into two rows
        |--------------------------------------------------------------------------
        |
        | Top row = first 10
        | Bottom row = remaining 10
        |
        */

        $firstRow = array_slice($clients, 0, 10);
        $secondRow = array_slice($clients, 10);
    @endphp


    {{-- ========================================================= --}}
    {{-- HEADING --}}
    {{-- ========================================================= --}}

    <div class="mx-auto max-w-7xl px-6 lg:px-10">

        <div class="grid gap-10 lg:grid-cols-12 lg:items-end">

            {{-- Left heading --}}
            <div class="lg:col-span-8">

                <p
                    class="text-xs font-bold uppercase tracking-[0.35em] text-[#2263AE]"
                >
                    Trusted by
                </p>

                <h2
                    class="mt-5 max-w-4xl text-4xl font-bold uppercase
                           leading-[1.05] tracking-tight text-neutral-900
                           sm:text-5xl lg:text-6xl"
                >
                    Trusted by leading hospitality businesses.
                </h2>

            </div>


            {{-- Right text --}}
            <div class="lg:col-span-4 lg:pb-1">

                <div class="border-l border-neutral-300 pl-6">

                    <p class="text-base leading-7 text-neutral-600">
                        We're proud to supply some of the UK's leading hotels,
                        restaurants, caterers and professional organisations.
                    </p>

                    <div class="mt-7 flex items-end gap-4">

                        <span
                            class="text-5xl font-bold leading-none
                                   tracking-tight text-[#2263AE]"
                        >
                            20
                        </span>

                        <span
                            class="pb-1 text-[10px] font-bold uppercase
                                   leading-4 tracking-[0.2em]
                                   text-neutral-400"
                        >
                            Featured<br>
                            clients
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- ========================================================= --}}
    {{-- CLIENT LOGO MARQUEE --}}
    {{-- ========================================================= --}}

    <div
        class="marquee-wrapper relative mt-14 overflow-hidden
               sm:mt-16 lg:mt-20"
    >

        {{-- Left fade --}}
        <div
            class="pointer-events-none absolute inset-y-0 left-0 z-20
                   w-16 bg-gradient-to-r from-[#f3f3f1] via-[#f3f3f1]/80
                   to-transparent
                   sm:w-28 lg:w-40"
        ></div>


        {{-- Right fade --}}
        <div
            class="pointer-events-none absolute inset-y-0 right-0 z-20
                   w-16 bg-gradient-to-l from-[#f3f3f1] via-[#f3f3f1]/80
                   to-transparent
                   sm:w-28 lg:w-40"
        ></div>


        {{-- ===================================================== --}}
        {{-- TOP ROW --}}
        {{-- Moves right -> left --}}
        {{-- ===================================================== --}}

        <div class="overflow-hidden">

            <div class="marquee-left flex w-max">

                {{-- First copy --}}
                <div class="flex shrink-0 gap-4 pr-4">

                    @foreach ($firstRow as $client)

                        <div
                            class="group flex h-[150px] w-[270px] shrink-0
                                   items-center justify-center
                                   border border-black/[0.05]
                                   bg-white px-8
                                   transition duration-300
                                   hover:-translate-y-1
                                   hover:shadow-xl hover:shadow-black/[0.06]
                                   sm:h-[165px] sm:w-[300px] sm:px-10"
                        >

                            <img
                                src="{{ asset('images/home/clients/' . $client['logo']) }}"
                                alt="{{ $client['name'] }}"
                                class="max-h-[100px] max-w-[220px]
                                       object-contain
                                       transition-transform duration-300
                                       group-hover:scale-105
                                       sm:max-h-[115px]
                                       sm:max-w-[240px]"
                            >

                        </div>

                    @endforeach

                </div>


                {{-- Duplicate copy for seamless loop --}}
                <div
                    class="flex shrink-0 gap-4 pr-4"
                    aria-hidden="true"
                >

                    @foreach ($firstRow as $client)

                        <div
                            class="group flex h-[150px] w-[270px] shrink-0
                                   items-center justify-center
                                   border border-black/[0.05]
                                   bg-white px-8
                                   transition duration-300
                                   hover:-translate-y-1
                                   hover:shadow-xl hover:shadow-black/[0.06]
                                   sm:h-[165px] sm:w-[300px] sm:px-10"
                        >

                            <img
                                src="{{ asset('images/home/clients/' . $client['logo']) }}"
                                alt=""
                                class="max-h-[100px] max-w-[220px]
                                       object-contain
                                       transition-transform duration-300
                                       group-hover:scale-105
                                       sm:max-h-[115px]
                                       sm:max-w-[240px]"
                            >

                        </div>

                    @endforeach

                </div>

            </div>

        </div>


        {{-- ===================================================== --}}
        {{-- BOTTOM ROW --}}
        {{-- Moves left -> right --}}
        {{-- ===================================================== --}}

        <div class="mt-4 overflow-hidden">

            <div class="marquee-right flex w-max">

                {{-- First copy --}}
                <div class="flex shrink-0 gap-4 pr-4">

                    @foreach ($secondRow as $client)

                        <div
                            class="group flex h-[150px] w-[270px] shrink-0
                                   items-center justify-center
                                   border border-black/[0.05]
                                   bg-white px-8
                                   transition duration-300
                                   hover:-translate-y-1
                                   hover:shadow-xl hover:shadow-black/[0.06]
                                   sm:h-[165px] sm:w-[300px] sm:px-10"
                        >

                            <img
                                src="{{ asset('images/home/clients/' . $client['logo']) }}"
                                alt="{{ $client['name'] }}"
                                class="max-h-[100px] max-w-[220px]
                                       object-contain
                                       transition-transform duration-300
                                       group-hover:scale-105
                                       sm:max-h-[115px]
                                       sm:max-w-[240px]"
                            >

                        </div>

                    @endforeach

                </div>


                {{-- Duplicate copy for seamless loop --}}
                <div
                    class="flex shrink-0 gap-4 pr-4"
                    aria-hidden="true"
                >

                    @foreach ($secondRow as $client)

                        <div
                            class="group flex h-[150px] w-[270px] shrink-0
                                   items-center justify-center
                                   border border-black/[0.05]
                                   bg-white px-8
                                   transition duration-300
                                   hover:-translate-y-1
                                   hover:shadow-xl hover:shadow-black/[0.06]
                                   sm:h-[165px] sm:w-[300px] sm:px-10"
                        >

                            <img
                                src="{{ asset('images/home/clients/' . $client['logo']) }}"
                                alt=""
                                class="max-h-[100px] max-w-[220px]
                                       object-contain
                                       transition-transform duration-300
                                       group-hover:scale-105
                                       sm:max-h-[115px]
                                       sm:max-w-[240px]"
                            >

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>


    {{-- ========================================================= --}}
    {{-- MARQUEE CSS --}}
    {{-- ========================================================= --}}

    <style>

        /*
        |--------------------------------------------------------------------------
        | Top row
        |--------------------------------------------------------------------------
        |
        | Starts at 0 and moves one complete copy to the left.
        |
        */

        @keyframes csp-marquee-left {

            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }

        }


        /*
        |--------------------------------------------------------------------------
        | Bottom row
        |--------------------------------------------------------------------------
        |
        | Starts one complete copy to the left and moves back to 0.
        | This gives us the opposite direction.
        |
        */

        @keyframes csp-marquee-right {

            from {
                transform: translateX(-50%);
            }

            to {
                transform: translateX(0);
            }

        }


        .marquee-left {
            animation:
                csp-marquee-left
                45s
                linear
                infinite;
        }


        .marquee-right {
            animation:
                csp-marquee-right
                45s
                linear
                infinite;
        }
        
        .marquee-wrapper:hover .marquee-left,
        .marquee-wrapper:hover .marquee-right {
            animation-play-state: paused;
        }


        @media (prefers-reduced-motion: reduce) {

            .marquee-left,
            .marquee-right {
                animation: none;
            }

        }

    </style>

</section>