<section
    x-data="{
        currentSlide: 0,
        slides: [
            '{{ asset('images/home/hero/hero-1.jpg') }}',
            '{{ asset('images/home/hero/hero-2.jpg') }}',
            '{{ asset('images/home/hero/hero-3.jpg') }}',
            '{{ asset('images/home/hero/hero-4.jpg') }}'
        ],
        slider: null,

        startSlider() {
            this.slider = setInterval(() => {
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
            }, 6000);
        },

        selectSlide(index) {
            this.currentSlide = index;
            clearInterval(this.slider);
            this.startSlider();
        }
    }"
    x-init="startSlider()"
    class="relative min-h-[760px] overflow-hidden bg-neutral-950 lg:min-h-screen"
>
    <div class="absolute inset-0">
        <template x-for="(slide, index) in slides" :key="slide">
            <div
                x-show="currentSlide === index"
                x-transition:enter="transition-opacity duration-[1600ms] ease-out"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity duration-[1600ms] ease-in"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute inset-0"
            >
                <div
                    class="absolute inset-0 scale-105 bg-cover bg-center bg-no-repeat"
                    :style="`background-image: url('${slide}')`"
                ></div>
            </div>
        </template>
    </div>

    <div class="absolute inset-0 bg-black/35"></div>

    <div
        class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/50"
    ></div>

    <div class="relative z-10 flex min-h-[760px] items-center justify-center px-6 pt-24 text-center lg:min-h-screen">
        <div class="mx-auto max-w-6xl">

            <p
                class="mb-5 text-xs font-semibold uppercase tracking-[0.45em] text-white/75 sm:text-sm"
            >
                Quality produce. Trusted service.
            </p>

            <h1
                class="text-5xl font-bold uppercase leading-none tracking-tight text-white sm:text-7xl lg:text-[7rem]"
            >
                CSP Limited
            </h1>

            <div class="mx-auto mt-8 h-px w-16 bg-white/70"></div>

            <p
                class="mx-auto mt-8 max-w-4xl text-base font-semibold uppercase leading-relaxed tracking-wide text-white sm:text-xl lg:text-2xl"
            >
                Premium wholesale fish, meat, poultry &amp; game suppliers
            </p>

            <div class="mt-11 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a
                    href="{{ route('products') }}"
                    class="inline-flex min-w-48 items-center justify-center border border-white bg-white px-8 py-4 text-sm font-bold uppercase tracking-wider text-neutral-950 transition duration-300 hover:bg-transparent hover:text-white"
                >
                    View Products
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="inline-flex min-w-48 items-center justify-center border border-white px-8 py-4 text-sm font-bold uppercase tracking-wider text-white transition duration-300 hover:bg-white hover:text-neutral-950"
                >
                    Contact Us
                </a>
            </div>
        </div>
    </div>

    <div
        class="absolute bottom-8 left-1/2 z-20 flex -translate-x-1/2 flex-col items-center gap-5"
    >
        <div class="flex items-center gap-2">
            <template x-for="(slide, index) in slides" :key="index">
                <button
                    type="button"
                    @click="selectSlide(index)"
                    class="h-1 transition-all duration-300"
                    :class="currentSlide === index
                        ? 'w-9 bg-white'
                        : 'w-5 bg-white/40 hover:bg-white/70'"
                    :aria-label="`Show slide ${index + 1}`"
                ></button>
            </template>
        </div>

        <a
            href="#welcome"
            aria-label="Scroll to the next section"
            class="animate-bounce text-white transition hover:text-white/70"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                class="h-9 w-9"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m6 9 6 6 6-6"
                />
            </svg>
        </a>
    </div>
</section>