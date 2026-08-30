<x-layout
    title="Contact Us | CSP Food Services"
    description="Contact CSP Food Services for wholesale food supply, product enquiries and general questions."
>

    <section class="bg-[#2263AE] px-6 pb-20 pt-40 text-white sm:px-10 lg:px-16 lg:pb-28 lg:pt-48 bg-gradient-to-r from-[#071827] via-[#071827]/90 to-[#071827]/50">
        <div class="mx-auto max-w-7xl">

            <p class="text-xs font-bold uppercase tracking-[0.4em] text-white/50">
                Get in touch
            </p>

            <h1 class="mt-5 text-5xl font-bold uppercase tracking-tight sm:text-6xl lg:text-7xl">
                Contact us
            </h1>

            <p class="mt-6 max-w-2xl text-lg leading-8 text-white/65">
                Speak to our team about wholesale supply, products, deliveries
                or any general enquiries.
            </p>

        </div>
    </section>


    <section class="bg-[#f3f3f1] py-20 sm:py-24 lg:py-28">

        <div class="mx-auto max-w-7xl px-6 lg:px-10">

            <div class="grid gap-10 lg:grid-cols-12 lg:gap-16">

                {{-- Contact details --}}
                <div class="lg:col-span-4">

                    <p class="text-xs font-bold uppercase tracking-[0.3em] text-[#2263AE]">
                        CSP Food Services
                    </p>

                    <h2 class="mt-5 text-3xl font-bold uppercase tracking-tight text-neutral-900 sm:text-4xl">
                        We’d be happy to hear from you.
                    </h2>

                    <p class="mt-6 text-base leading-8 text-neutral-600">
                        Whether you’re looking to open a wholesale account,
                        enquire about our produce or speak to our team, send us
                        a message and we’ll get back to you.
                    </p>

                    <div class="mt-10 space-y-7">

                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-neutral-400">
                                Telephone
                            </p>

                            <a
                                href="tel:02073538241"
                                class="mt-2 block text-xl font-medium text-neutral-900 transition hover:text-[#2263AE]"
                            >
                                020 7353 8241/2
                            </a>
                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-neutral-400">
                                Email
                            </p>

                            <a
                                href="mailto:sales@cspltd.net"
                                class="mt-2 block text-xl font-medium text-neutral-900 transition hover:text-[#2263AE]"
                            >
                                sales@cspltd.net
                            </a>
                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-neutral-400">
                                Address
                            </p>

                            <p class="mt-2 text-xl leading-8 text-neutral-900">
                                52 Farringdon Street,<br>
                                London, EC4A 4BD
                            </p>
                        </div>

                    </div>

                </div>


                {{-- Contact form --}}
                <div class="lg:col-span-8">

                    <form
                        action="#"
                        method="POST"
                        class="rounded-[24px] bg-white p-7 shadow-xl shadow-black/[0.05] sm:p-10 lg:p-12"
                    >
                        @csrf

                        <div class="grid gap-6 sm:grid-cols-2">

                            <div>
                                <label
                                    for="first_name"
                                    class="text-xs font-bold uppercase tracking-[0.18em] text-neutral-500"
                                >
                                    First Name
                                </label>

                                <input
                                    type="text"
                                    id="first_name"
                                    name="first_name"
                                    required
                                    class="mt-3 w-full border-0 border-b border-neutral-300 bg-transparent px-0 py-3 text-base text-neutral-900 outline-none transition focus:border-[#2263AE] focus:ring-0"
                                >
                            </div>

                            <div>
                                <label
                                    for="last_name"
                                    class="text-xs font-bold uppercase tracking-[0.18em] text-neutral-500"
                                >
                                    Last Name
                                </label>

                                <input
                                    type="text"
                                    id="last_name"
                                    name="last_name"
                                    required
                                    class="mt-3 w-full border-0 border-b border-neutral-300 bg-transparent px-0 py-3 text-base text-neutral-900 outline-none transition focus:border-[#2263AE] focus:ring-0"
                                >
                            </div>

                            <div>
                                <label
                                    for="telephone"
                                    class="text-xs font-bold uppercase tracking-[0.18em] text-neutral-500"
                                >
                                    Telephone Number
                                </label>

                                <input
                                    type="tel"
                                    id="telephone"
                                    name="telephone"
                                    required
                                    class="mt-3 w-full border-0 border-b border-neutral-300 bg-transparent px-0 py-3 text-base text-neutral-900 outline-none transition focus:border-[#2263AE] focus:ring-0"
                                >
                            </div>

                            <div>
                                <label
                                    for="email"
                                    class="text-xs font-bold uppercase tracking-[0.18em] text-neutral-500"
                                >
                                    Email
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    required
                                    class="mt-3 w-full border-0 border-b border-neutral-300 bg-transparent px-0 py-3 text-base text-neutral-900 outline-none transition focus:border-[#2263AE] focus:ring-0"
                                >
                            </div>

                        </div>

                        <div class="mt-8">

                            <label
                                for="message"
                                class="text-xs font-bold uppercase tracking-[0.18em] text-neutral-500"
                            >
                                Comments / Questions
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                required
                                class="mt-3 w-full resize-none rounded-[14px] border border-neutral-300 bg-[#fafafa] px-4 py-4 text-base text-neutral-900 outline-none transition focus:border-[#2263AE] focus:ring-0"
                            ></textarea>

                        </div>


                        {{-- Consent --}}
                        <div class="mt-8 border-t border-neutral-200 pt-7">

                            <p class="text-sm leading-6 text-neutral-500">
                                This information will be stored and processed for
                                the purpose of this enquiry and will not be shared,
                                transferred or sold without consent.
                            </p>

                            <label class="mt-5 flex cursor-pointer items-start gap-3">

                                <input
                                    type="checkbox"
                                    name="consent"
                                    value="1"
                                    required
                                    class="mt-1 h-4 w-4 rounded border-neutral-300 text-[#2263AE] focus:ring-[#2263AE]"
                                >

                                <span class="text-sm font-medium text-neutral-700">
                                    I understand and agree
                                </span>

                            </label>

                        </div>


                        <button
                            type="submit"
                            class="mt-9 inline-flex items-center justify-center bg-[#071827] px-8 py-4 text-sm font-bold uppercase tracking-[0.16em] text-white transition duration-300 hover:bg-[#2263AE]"
                        >
                            Send enquiry
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>

</x-layout>