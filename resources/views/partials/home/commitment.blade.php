<section
    x-data="{
        headingVisible: false,
        contentVisible: false,

        init() {
            const observer = new IntersectionObserver(
                ([entry]) => {
                    if (entry.isIntersecting) {
                        this.headingVisible = true;

                        setTimeout(() => {
                            this.contentVisible = true;
                        }, 250);

                        observer.disconnect();
                    }
                },
                {
                    threshold: 0.2
                }
            );

            observer.observe(this.$el);
        }
    }"
    class="overflow-hidden bg-neutral-950 py-20 text-white sm:py-24 lg:py-28"
>

    <div class="mx-auto max-w-7xl px-6 lg:px-10">

        <div class="grid gap-10 lg:grid-cols-12 lg:gap-20">

            {{-- Heading --}}
            <div
                class="transition-all duration-1000 ease-out lg:col-span-4"
                :class="headingVisible
                    ? 'translate-y-0 opacity-100'
                    : 'translate-y-12 opacity-0'"
            >

                <p
                    class="text-xs font-bold uppercase tracking-[0.35em] text-white/45"
                >
                    Responsible sourcing
                </p>

                <h2
                    class="mt-5 text-4xl font-bold uppercase leading-tight tracking-tight text-white sm:text-5xl"
                >
                    Our<br class="hidden lg:block">
                    commitment
                </h2>

                <div class="mt-7 h-px w-16 bg-white/60"></div>

            </div>


            {{-- Content --}}
            <div
                class="transition-all duration-1000 ease-out lg:col-span-8"
                :class="contentVisible
                    ? 'translate-y-0 opacity-100'
                    : 'translate-y-12 opacity-0'"
            >

                <p
                    class="max-w-3xl text-xl leading-9 text-white/90 sm:text-2xl sm:leading-10"
                >
                    We are totally committed to responsible sourcing and supply
                    of the best of the world's produce from well-managed and
                    sustainable farms and fisheries.
                </p>

                <div class="mt-10 border-t border-white/15 pt-9">

                    <p
                        class="max-w-3xl text-base leading-8 text-white/60"
                    >
                        We source products within UK and international regulatory
                        guidelines, while maintaining our commitment to actively
                        promote greater variety.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>