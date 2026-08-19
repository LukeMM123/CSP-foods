<footer class="relative overflow-hidden bg-[#2263AE] text-white">

    {{-- Large background CSP logo --}}
    <div
        class="pointer-events-none absolute inset-0 flex items-center justify-center"
        aria-hidden="true"
    >
        <img
            src="{{ asset('images/home/footer.png') }}"
            alt=""
            class="w-[900px] max-w-[85vw] select-none object-contain opacity-35 lg:w-[1050px]"
        >
    </div>


    {{-- Main footer --}}
    <div class="relative z-10 mx-auto max-w-7xl px-6 py-20 lg:px-10 lg:py-24">

        <div class="grid gap-14 lg:grid-cols-12 lg:gap-20">

            {{-- Contact CTA --}}
            <div class="lg:col-span-7">

                <p class="text-xs font-bold uppercase tracking-[0.3em] text-white/60">
                    Contact us
                </p>

                <h2
                    class="mt-5 max-w-3xl text-4xl font-bold uppercase leading-tight tracking-tight sm:text-5xl"
                >
                    Get in touch today to find out more about our services.
                </h2>

                <a
                    href="{{ route('contact') }}"
                    class="mt-9 inline-flex items-center justify-center border border-white px-8 py-4
                           text-sm font-bold uppercase tracking-[0.15em] text-white
                           transition duration-300 hover:bg-white hover:text-[#2263AE]"
                >
                    Get in touch
                </a>

            </div>


            {{-- Contact details --}}
            <div class="lg:col-span-5">

                <div class="space-y-5">

                    {{-- Phone --}}
                    <a
                        href="tel:02073538241"
                        class="group flex items-start gap-4 text-white/85 transition hover:text-white"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            class="mt-1 h-5 w-5 shrink-0"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M22 16.92v3a2 2 0 0 1-2.18 2
                                19.79 19.79 0 0 1-8.63-3.07
                                19.5 19.5 0 0 1-6-6
                                19.79 19.79 0 0 1-3.07-8.67
                                A2 2 0 0 1 4.11 2h3
                                a2 2 0 0 1 2 1.72
                                12.84 12.84 0 0 0 .7 2.81
                                2 2 0 0 1-.45 2.11L8.09 9.91
                                a16 16 0 0 0 6 6l1.27-1.27
                                a2 2 0 0 1 2.11-.45
                                12.84 12.84 0 0 0 2.81.7
                                A2 2 0 0 1 22 16.92z"
                            />
                        </svg>

                        <span class="text-lg">
                            020 7353 8241/2
                        </span>
                    </a>


                    {{-- Email --}}
                    <a
                        href="mailto:sales@cspltd.net"
                        class="group flex items-start gap-4 text-white/85 transition hover:text-white"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            class="mt-1 h-5 w-5 shrink-0"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m22 6-10 7L2 6"
                            />
                        </svg>

                        <span class="text-lg">
                            sales@cspltd.net
                        </span>
                    </a>


                    {{-- Address --}}
                    <div class="flex items-start gap-4 text-white/85">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            class="mt-1 h-5 w-5 shrink-0"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 10c0 7-9 12-9 12S3 17 3 10a9 9 0 1 1 18 0z"
                            />

                            <circle cx="12" cy="10" r="3" />
                        </svg>

                        <p class="text-lg leading-7">
                            52 Farringdon Street,<br>
                            London, EC4A 4BD
                        </p>

                    </div>

                </div>


                {{-- Links --}}
                <div class="mt-10 border-t border-white/20 pt-8">

                    <div class="flex flex-col gap-3">

                        <a
                            href="#"
                            class="text-sm text-white/70 transition hover:text-white"
                        >
                            Credit Application Form
                        </a>

                        <a
                            href="#"
                            class="text-sm text-white/70 transition hover:text-white"
                        >
                            Data Protection Policy
                        </a>

                    </div>

                </div>


                {{-- Socials --}}
                <div class="mt-9 flex items-center gap-3">

                    <a
                        href="#"
                        aria-label="LinkedIn"
                        class="flex h-11 w-11 items-center justify-center rounded-full border border-white/40
                               text-sm font-bold transition hover:bg-white hover:text-[#2263AE]"
                    >
                        in
                    </a>

                    <a
                        href="#"
                        aria-label="Instagram"
                        class="flex h-11 w-11 items-center justify-center rounded-full border border-white/40
                               text-sm font-bold transition hover:bg-white hover:text-[#2263AE]"
                    >
                        ig
                    </a>

                    <a
                        href="#"
                        aria-label="Facebook"
                        class="flex h-11 w-11 items-center justify-center rounded-full border border-white/40
                               text-sm font-bold transition hover:bg-white hover:text-[#2263AE]"
                    >
                        f
                    </a>

                </div>

            </div>

        </div>

    </div>


    {{-- Bottom bar --}}
    <div class="relative z-10 border-t border-white/20">

        <div
            class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-6 text-xs text-white/60
                   sm:flex-row sm:items-center sm:justify-between lg:px-10"
        >

            <div class="flex flex-wrap items-center gap-x-6 gap-y-2">

                <span>
                    &copy; {{ date('Y') }} CSP Food Services Ltd
                </span>

                <a
                    href="#"
                    class="transition hover:text-white"
                >
                    Site Map
                </a>

            </div>

            <p>
                Website by Lume Digital Studios
            </p>

        </div>

    </div>

</footer>