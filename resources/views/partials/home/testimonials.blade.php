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
                        }, 250);

                        observer.disconnect();
                    }
                },
                { threshold: 0.15 }
            );

            observer.observe(this.$el);
        }
    }"
    class="overflow-hidden bg-[#f3f3f1] py-20 sm:py-24 lg:py-28"
>
    @php
        $testimonials = [
            [
                'logo' => 'west-ham.png',
                'company' => 'West Ham United',
                'quote' => 'I have been using CSP fresh meat products for some time now and the quality has been exceptional from day one. The meat is consistently fresh, expertly prepared and always meets the highest standards we expect for our kitchen. Their customer service is equally impressive, professional, reliable and always willing to go the extra mile. Deliveries are consistently on time, well organised and handled with great care. Making them a supplier we can depend on without hesitation. Every kitchen I have worked for, I have made sure that CSP became my number one fresh meat supplier. Highly recommended.',
                'name' => 'Hans Louis',
                'role' => 'Executive Head Chef',
            ],
            [
                'logo' => 'london-clinic.png',
                'company' => 'The London Clinic',
                'quote' => 'Our business relationship with CSP Foodservices Ltd goes back nearly 20 years, during which we helped each other to grow and better understand the needs of our customers. I have always been very impressed with the quality of produce supplied by them, as well as the professional and timely manner with which all our requests were handled. We appreciate their efforts in delivering excellent service and look forward to working together for years to come.',
                'name' => 'Paul O’Brien',
                'role' => 'Executive Chef',
            ],
            [
                'logo' => 'foodo-market.png',
                'company' => 'Foodomarket',
                'quote' => 'At Foodomarket, we vet dozens of wholesalers and select only the best for our customers. Of these, CSP represents the absolute gold standard in service and quality for their whole catalogue, especially meat and seafood in the Greater London region. Consistency in this category is notoriously hard to find, yet they deliver it flawlessly week after week. Combined with their rock-solid reliability and professional service, they are easily one of the best partners on our marketplace, and our customers could not agree more.',
                'name' => 'Mohamed Ali Wali',
                'role' => 'Vendor Manager',
            ],
            [
                'logo' => 'runnymead.png',
                'company' => 'Runnymead Hotel on Thames',
                'quote' => 'C.S.P Foodservices has had a business relationship with the Runnymead Hotel that goes back nearly 10 years. During this time we helped each other to grow and better understand the needs of our customers. We have always been very impressed with the quality of produce supplied by them, as well as the professional and timely manner with which all our requests were handled. We appreciate their efforts in delivering excellent service and look forward to working together for many more years to come.',
                'name' => 'David Coutts',
                'role' => 'Executive Chef',
            ],
            [
                'logo' => 'ugo-foods.png',
                'company' => 'Ugo Foods',
                'quote' => 'Ugo Foods have worked with C.S.P. Foodservices for many years now and I have been impressed with the way they have been able to source the items we need to go into our products at short notice. We can always rely on prompt delivery and service and the sales team always come up trumps for us when called upon.',
                'name' => 'Lee Moss',
                'role' => 'Purchasing & Logistics Director',
            ],
            [
                'logo' => 'drake-morgan.png',
                'company' => 'Drake & Morgan',
                'quote' => 'Always meets my expectations for the availability of great tasting fresh fish, meat and poultry here at Drake & Morgan, and the sales team go out of their way to help develop new products for us to try on our menu.',
                'name' => 'Rob Mitchell',
                'role' => 'Executive Chef',
            ],
            [
                'logo' => 'landmark.png',
                'company' => 'The Landmark London',
                'quote' => 'I have been working with Roberto and Marco at CSP for over 18 years. The quality and consistency of their products are of a very high standard and their expertise in poultry speaks for itself. CSP are one of our most consistent and reliable food suppliers that we work with and we value their exemplary customer service.',
                'name' => 'Gary Klaner',
                'role' => 'Executive Chef',
            ],
        ];
    @endphp

    <div class="mx-auto max-w-[1500px] px-6 lg:px-10">
        <div
            class="max-w-5xl transition-all duration-1000 ease-out"
            :class="headingVisible ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
        >
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-neutral-500">
                Testimonials
            </p>

            <h2 class="mt-5 text-4xl font-medium leading-[1.05] tracking-tight text-neutral-900 sm:text-5xl lg:text-6xl">
                Don’t take our word for it.<br>
                Hear it from our customers.
            </h2>
        </div>
    </div>

    <div
        class="mt-14 transition-all duration-1000 ease-out sm:mt-16"
        :class="cardsVisible ? 'translate-y-0 opacity-100' : 'translate-y-12 opacity-0'"
    >
        <div class="testimonial-marquee-wrapper relative overflow-hidden">
            <div class="pointer-events-none absolute inset-y-0 left-0 z-20 w-8 bg-gradient-to-r from-[#f3f3f1] to-transparent sm:w-16 lg:w-24"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 z-20 w-8 bg-gradient-to-l from-[#f3f3f1] to-transparent sm:w-16 lg:w-24"></div>

            <div class="testimonial-marquee flex w-max">
                <div class="flex shrink-0 gap-5 pr-5">
                    @foreach ($testimonials as $testimonial)
                        <article
                            class="group flex h-[520px] w-[320px] shrink-0 flex-col rounded-[24px] bg-white p-7 transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-black/[0.05] sm:h-[540px] sm:w-[350px] sm:p-8 lg:w-[365px]"
                        >
                            <div class="flex h-16 items-start justify-start">
                                <img
                                    src="{{ asset('images/home/testimonials/logos/' . $testimonial['logo']) }}"
                                    alt="{{ $testimonial['company'] }} logo"
                                    class="max-h-14 max-w-[130px] object-contain object-left"
                                >
                            </div>

                            <blockquote class="mt-7 overflow-hidden text-[15px] leading-[1.6] tracking-tight text-neutral-900 sm:text-base">
                                “{{ $testimonial['quote'] }}”
                            </blockquote>

                            <div class="mt-auto pt-8">
                                <p class="text-xl font-medium tracking-tight text-neutral-900">
                                    {{ $testimonial['name'] }}
                                </p>

                                <p class="mt-2 text-sm leading-5 text-neutral-400">
                                    {{ $testimonial['role'] }}
                                </p>

                                <p class="mt-1 text-[11px] font-semibold uppercase tracking-[0.15em] text-neutral-400">
                                    {{ $testimonial['company'] }}
                                </p>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="flex shrink-0 gap-5 pr-5" aria-hidden="true">
                    @foreach ($testimonials as $testimonial)
                        <article
                            class="group flex h-[520px] w-[320px] shrink-0 flex-col rounded-[24px] bg-white p-7 transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-black/[0.05] sm:h-[540px] sm:w-[350px] sm:p-8 lg:w-[365px]"
                        >
                            <div class="flex h-16 items-start justify-start">
                                <img
                                    src="{{ asset('images/home/testimonials/logos/' . $testimonial['logo']) }}"
                                    alt=""
                                    class="max-h-14 max-w-[130px] object-contain object-left"
                                >
                            </div>

                            <blockquote class="mt-7 overflow-hidden text-[15px] leading-[1.6] tracking-tight text-neutral-900 sm:text-base">
                                “{{ $testimonial['quote'] }}”
                            </blockquote>

                            <div class="mt-auto pt-8">
                                <p class="text-xl font-medium tracking-tight text-neutral-900">
                                    {{ $testimonial['name'] }}
                                </p>

                                <p class="mt-2 text-sm leading-5 text-neutral-400">
                                    {{ $testimonial['role'] }}
                                </p>

                                <p class="mt-1 text-[11px] font-semibold uppercase tracking-[0.15em] text-neutral-400">
                                    {{ $testimonial['company'] }}
                                </p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes csp-testimonial-marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        .testimonial-marquee {
            animation: csp-testimonial-marquee 55s linear infinite;
            will-change: transform;
        }

        .testimonial-marquee-wrapper:hover .testimonial-marquee {
            animation-play-state: paused;
        }

        @media (prefers-reduced-motion: reduce) {
            .testimonial-marquee {
                animation: none;
                transform: none;
            }
        }
    </style>
</section>