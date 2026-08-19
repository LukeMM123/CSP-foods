<section
    x-data="{
        imageVisible: false,
        contentVisible: false,

        init() {
            const observer = new IntersectionObserver(
                ([entry]) => {
                    if (entry.isIntersecting) {
                        this.imageVisible = true;

                        setTimeout(() => {
                            this.contentVisible = true;
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
    class="overflow-hidden bg-white"
>

    <div class="grid min-h-[750px] lg:grid-cols-2">

        {{-- Image --}}
        <div
            class="relative min-h-[500px] overflow-hidden transition-all duration-1000 ease-out lg:min-h-full"
            :class="imageVisible
                ? 'translate-y-0 opacity-100'
                : 'translate-y-12 opacity-0'"
        >
            <img
                src="{{ asset('images/home/about/sustain.jpg') }}"
                alt="Sustainable sourcing at CSP Food Services"
                class="absolute inset-0 h-full w-full object-cover"
            >

            <div class="absolute inset-0 bg-black/10"></div>
        </div>


        {{-- Content --}}
        <div
            class="flex items-center bg-[#2263AE] px-6 py-20 text-white transition-all duration-1000 ease-out sm:px-10 lg:px-16 lg:py-24 xl:px-20"
            :class="contentVisible
                ? 'translate-y-0 opacity-100'
                : 'translate-y-12 opacity-0'"
        >

            <div class="max-w-2xl">

                <p class="text-xs font-bold uppercase tracking-[0.35em] text-white/55">
                    Responsible sourcing
                </p>

                <h2
                    class="mt-5 text-4xl font-bold uppercase leading-tight tracking-tight sm:text-5xl lg:text-6xl"
                >
                    Sustainability
                </h2>

                <div class="mt-7 h-px w-16 bg-white/60"></div>

                <p class="mt-9 text-xl leading-9 text-white/90 sm:text-2xl sm:leading-10">
                    We recognise the importance of protecting the farms, fisheries
                    and environments that provide the produce our customers depend on.
                </p>

                <div class="mt-9 space-y-6 text-base leading-8 text-white/70">

                    <p>
                        We are committed to making responsible sourcing decisions
                        and working with suppliers who share our approach to
                        sustainability and good environmental management.
                    </p>

                    <p>
                        Our seafood sourcing considers seasonality, availability
                        and responsible fishing practices, helping us provide
                        customers with informed choices while continuing to offer
                        quality and variety.
                    </p>

                    <p>
                        By sourcing within UK and international regulatory
                        guidelines, we aim to support well-managed fisheries and
                        farms while encouraging greater diversity across our range.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>