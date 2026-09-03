<x-layout
    title="Products | CSP Food Services"
    description="Explore the CSP Food Services core range of meat, poultry, fish, seafood, game, dairy, charcuterie and specialist food products."
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
        class="bg-white px-5 py-20 sm:px-8 sm:py-24 lg:px-10 lg:py-28"
    >
        <div class="mx-auto max-w-[1600px]">

            <div
                class="grid gap-12 transition-all duration-1000 ease-out lg:grid-cols-[0.8fr_1.2fr] lg:gap-24"
                :class="visible
                    ? 'translate-y-0 opacity-100'
                    : 'translate-y-10 opacity-0'"
            >
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#2263AE]">
                        About this catalogue
                    </p>

                    <h2 class="mt-5 max-w-2xl text-4xl font-bold uppercase leading-[1.05] tracking-tight text-neutral-900 sm:text-5xl lg:text-6xl">
                        Our core range.<br>
                        Built for professional kitchens.
                    </h2>
                </div>

                <div class="max-w-3xl space-y-6 text-lg leading-8 text-neutral-600">
                    <p>
                        The products below set out our core range, grouped by
                        category. Many are available in a range of weights,
                        portion sizes and specifications including skin-on,
                        skinless, bone-in, boneless, halal and corn-fed options.
                    </p>

                    <p>
                        These core lines represent the products we supply every
                        day. We can also provide alternative specifications and
                        source specialist, seasonal and bespoke products on request.
                    </p>
                </div>
            </div>


            <div
                class="mt-16 grid border-l border-t border-neutral-200 transition-all duration-1000 ease-out sm:grid-cols-2 lg:grid-cols-3"
                :class="visible
                    ? 'translate-y-0 opacity-100'
                    : 'translate-y-10 opacity-0'"
                style="transition-delay: 200ms;"
            >
                @foreach ([
                    ['name' => 'Beef', 'count' => 25],
                    ['name' => 'Lamb & Mutton', 'count' => 13],
                    ['name' => 'Pork, Charcuterie & Sausages', 'count' => 44],
                    ['name' => 'Poultry', 'count' => 29],
                    ['name' => 'Fish & Seafood', 'count' => 45],
                    ['name' => 'Game', 'count' => 4],
                    ['name' => 'Veal', 'count' => 3],
                    ['name' => 'Dairy & Cheese', 'count' => 14],
                    ['name' => 'Pantry & Prepared', 'count' => 21],
                ] as $category)

                    <div class="flex items-center justify-between border-b border-r border-neutral-200 p-6 sm:p-7">
                        <span class="text-sm font-bold uppercase tracking-[0.1em] text-neutral-900">
                            {{ $category['name'] }}
                        </span>

                        <span class="text-xs font-bold uppercase tracking-[0.15em] text-neutral-400">
                            {{ $category['count'] }}
                        </span>
                    </div>

                @endforeach
            </div>

        </div>
    </section>


    <section
        x-data="productCatalogue()"
        class="bg-[#f3f3f1] px-5 py-20 sm:px-8 sm:py-24 lg:px-10 lg:py-28"
    >
        <div class="mx-auto max-w-[1800px]">

            <div class="grid gap-10 border-b border-neutral-300 pb-12 lg:grid-cols-[1fr_auto] lg:items-end">

                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#2263AE]">
                        Core product range
                    </p>

                    <h2 class="mt-4 text-4xl font-bold uppercase tracking-tight text-neutral-900 sm:text-5xl">
                        Browse our products.
                    </h2>
                </div>

                <div class="w-full lg:w-[430px]">
                    <label
                        for="product-search"
                        class="text-xs font-bold uppercase tracking-[0.2em] text-neutral-500"
                    >
                        Search the catalogue
                    </label>

                    <div class="relative mt-3">
                        <input
                            id="product-search"
                            type="search"
                            x-model="search"
                            placeholder="Search salmon, halal, ribeye..."
                            class="w-full border-0 border-b border-neutral-400 bg-transparent px-0 py-4 pr-10 text-base text-neutral-900 outline-none placeholder:text-neutral-400 focus:border-[#071827] focus:ring-0"
                        >

                        <svg
                            class="absolute right-0 top-1/2 h-5 w-5 -translate-y-1/2 text-neutral-400"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <circle cx="11" cy="11" r="7"></circle>
                            <path d="m20 20-3.5-3.5"></path>
                        </svg>
                    </div>
                </div>

            </div>


            <div class="mt-8 flex gap-2 overflow-x-auto pb-3">

                <button
                    type="button"
                    @click="activeCategory = 'all'"
                    class="shrink-0 border px-5 py-3 text-xs font-bold uppercase tracking-[0.15em] transition"
                    :class="activeCategory === 'all'
                        ? 'border-[#071827] bg-[#071827] text-white'
                        : 'border-neutral-300 bg-transparent text-neutral-600 hover:border-[#071827] hover:text-neutral-900'"
                >
                    All products
                </button>

                <template x-for="category in categories" :key="category.id">
                    <button
                        type="button"
                        @click="activeCategory = category.id"
                        class="shrink-0 border px-5 py-3 text-xs font-bold uppercase tracking-[0.15em] transition"
                        :class="activeCategory === category.id
                            ? 'border-[#071827] bg-[#071827] text-white'
                            : 'border-neutral-300 bg-transparent text-neutral-600 hover:border-[#071827] hover:text-neutral-900'"
                    >
                        <span x-text="category.name"></span>
                    </button>
                </template>

            </div>


            <div class="mt-10">

                <template x-for="category in visibleCategories" :key="category.id">

                    <div class="mb-16 last:mb-0">

                        <div class="mb-5 flex items-end justify-between gap-8 border-b border-neutral-400 pb-5">

                            <div>
                                <p
                                    class="text-3xl font-bold uppercase tracking-tight text-neutral-900 sm:text-4xl"
                                    x-text="category.name"
                                ></p>
                            </div>

                            <span
                                class="shrink-0 text-xs font-bold uppercase tracking-[0.2em] text-neutral-400"
                                x-text="filteredCategoryProducts(category.id).length + ' products'"
                            ></span>

                        </div>


                        <div class="grid gap-px bg-neutral-300 lg:grid-cols-2">

                            <template
                                x-for="product in filteredCategoryProducts(category.id)"
                                :key="category.id + '-' + product.name"
                            >
                                <div class="group bg-white px-6 py-6 transition duration-300 hover:bg-[#071827] sm:px-8">

                                    <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between sm:gap-8">

                                        <h3
                                            class="font-bold uppercase tracking-tight text-neutral-900 transition duration-300 group-hover:text-white"
                                            x-text="product.name"
                                        ></h3>

                                        <p
                                            class="max-w-sm text-sm leading-6 text-neutral-500 transition duration-300 group-hover:text-white/60 sm:text-right"
                                            x-text="product.spec"
                                        ></p>

                                    </div>

                                </div>
                            </template>

                        </div>

                    </div>

                </template>


                <div
                    x-show="totalVisibleProducts === 0"
                    x-cloak
                    class="border-y border-neutral-300 py-20 text-center"
                >
                    <p class="text-xs font-bold uppercase tracking-[0.3em] text-[#2263AE]">
                        No results
                    </p>

                    <h3 class="mt-4 text-3xl font-bold uppercase text-neutral-900">
                        We couldn't find that product.
                    </h3>

                    <p class="mx-auto mt-4 max-w-xl leading-7 text-neutral-500">
                        Try another search or speak to our team. We regularly
                        source products beyond the core range shown here.
                    </p>
                </div>

            </div>

        </div>
    </section>


    <section class="overflow-hidden bg-[#071827] px-5 py-20 text-white sm:px-8 sm:py-24 lg:px-10 lg:py-28">

        <div class="mx-auto max-w-[1600px]">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:gap-24">

                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-white/45">
                        Beyond the core range
                    </p>

                    <h2 class="mt-5 max-w-xl text-4xl font-bold uppercase leading-[1.05] tracking-tight sm:text-5xl lg:text-6xl">
                        Looking for something else?
                    </h2>
                </div>

                <div>
                    <div class="space-y-6 text-lg leading-8 text-white/65">
                        <p>
                            The products listed in this catalogue are our core
                            range — the lines we stock and supply every day.
                            Many are available in specifications beyond those
                            shown here.
                        </p>

                        <p>
                            Our team is happy to discuss alternative weights,
                            cuts, trims and packaging to suit your kitchen.
                        </p>

                        <p>
                            We also regularly source specialist and bespoke
                            products for our customers, from rare cuts and
                            heritage breeds to specific brands and imported goods.
                            If there's something you need that you don't see here,
                            get in touch and we'll do everything we can to source it.
                        </p>
                    </div>

                    <a
                        href="{{ route('contact') }}"
                        class="mt-10 inline-flex items-center gap-4 bg-white px-7 py-4 text-sm font-bold uppercase tracking-[0.16em] text-[#071827] transition duration-300 hover:bg-white/85"
                    >
                        Speak to our team
                        <span>→</span>
                    </a>
                </div>

            </div>

        </div>
    </section>


    <script>
        function productCatalogue() {
            return {
                activeCategory: 'all',
                search: '',

                categories: [
                    { id: 'beef', name: 'Beef' },
                    { id: 'lamb', name: 'Lamb & Mutton' },
                    { id: 'pork', name: 'Pork, Charcuterie & Sausages' },
                    { id: 'poultry', name: 'Poultry' },
                    { id: 'fish', name: 'Fish & Seafood' },
                    { id: 'game', name: 'Game' },
                    { id: 'veal', name: 'Veal' },
                    { id: 'dairy', name: 'Dairy & Cheese' },
                    { id: 'pantry', name: 'Pantry & Prepared' },
                ],

                products: {
                    beef: [
                        { name: 'Baby Back Ribs', spec: 'Frozen' },
                        { name: 'Bavette', spec: '114g - 255g · Whole' },
                        { name: 'Beef Brisket', spec: '4-5kg' },
                        { name: 'Beef Burgers', spec: '50g - 227g · Wagyu' },
                        { name: 'Beef Chuck', spec: '4-5kg · Halal' },
                        { name: 'Beef Cod Fat', spec: 'Available in multiple specifications' },
                        { name: 'Beef Featherblade', spec: 'Boneless' },
                        { name: 'Beef Fillet', spec: '2-3kg · Halal' },
                        { name: 'Beef Meat Balls', spec: '28g - 56g · Halal' },
                        { name: 'Beef Mince', spec: '85vl - 95vl · Halal' },
                        { name: 'Beef Ribeye', spec: '2-3kg' },
                        { name: 'Beef Rump', spec: '3-4kg' },
                        { name: 'Beef Silverside', spec: '8-10kg' },
                        { name: 'Beef Striploin', spec: '5-6kg, 6-7kg · Halal · Wagyu' },
                        { name: 'Beef Stroganoff', spec: 'Whole · Strips' },
                        { name: 'Beef Topside', spec: '3-4kg · Halal · Boned & rolled' },
                        { name: 'Chateaubriand', spec: '400-450g' },
                        { name: 'Cote De Boeuf', spec: 'Whole' },
                        { name: 'Fillet Steaks', spec: '114g - 284g' },
                        { name: 'Beef Short Ribs', spec: 'Halal' },
                        { name: 'Ox Cheeks', spec: 'Standard specification — ask us for details' },
                        { name: 'Ribeye Steaks', spec: '114g - 340g' },
                        { name: 'Rump Steaks', spec: '114g - 284g' },
                        { name: 'Sirloin Steaks', spec: '170g - 284g · Halal' },
                        { name: 'T-Bone Steaks', spec: '450-500g' },
                    ],

                    lamb: [
                        { name: 'Lamb Chops', spec: 'Bone-in' },
                        { name: 'Lamb Chump', spec: 'Boneless' },
                        { name: 'Lamb Cutlet', spec: 'Halal' },
                        { name: 'Lamb Leg', spec: '3-4kg · Halal · Boned & rolled' },
                        { name: 'Lamb Mince', spec: 'Halal' },
                        { name: 'Lamb Neck', spec: 'Bone-in' },
                        { name: 'Lamb Rack', spec: 'Halal · Fresh · Frozen' },
                        { name: 'Lamb Rump Steaks', spec: '200g - 300g' },
                        { name: 'Lamb Saddle', spec: '2-3kg · Halal' },
                        { name: 'Lamb Shank', spec: '400g - 600g · Halal' },
                        { name: 'Lamb Shoulder', spec: '2-3kg · Halal' },
                        { name: 'Lambs Liver', spec: 'Whole' },
                        { name: 'Mutton Shoulder', spec: 'Boneless' },
                    ],

                    pork: [
                        { name: 'Bacon', spec: '2.27kg · Back · Streaky · Smoked · Unsmoked' },
                        { name: 'Black Pudding', spec: 'Rings · Sticks' },
                        { name: 'Bratwurst Sausages', spec: '1kg' },
                        { name: 'Bresaola', spec: '500g · 1.3-1.8kg' },
                        { name: 'Chorizo Sausages', spec: '1kg' },
                        { name: 'Cumberland Sausages', spec: '1.5kg' },
                        { name: 'Cumberland Cocktail Sausages', spec: '1kg' },
                        { name: 'Cumberland Sausage Meat', spec: '454g' },
                        { name: 'Frankfurters', spec: '1.5kg' },
                        { name: 'Gammon Ham', spec: '8-10kg · Bone-in · Boneless' },
                        { name: 'Gammon Knuckles', spec: '1.2-1.4kg · Smoked' },
                        { name: 'Guanciale', spec: '750g' },
                        { name: 'Mortadella', spec: '2-3kg' },
                        { name: 'Nduja Sausage', spec: '400g' },
                        { name: 'Pancetta', spec: '1.2-1.5kg · Smoked' },
                        { name: 'Pastrami', spec: '2-2.5kg' },
                        { name: 'Pigs In Blankets', spec: '28g' },
                        { name: 'Pork & Apple Sausages', spec: '1.5kg' },
                        { name: 'Pork Belly', spec: '7-8kg · Bone-in · Boneless' },
                        { name: 'Pork Cheeks', spec: 'Standard specification — ask us for details' },
                        { name: 'Pork Chop', spec: '227g' },
                        { name: 'Pork Escallop', spec: '170g - 227g' },
                        { name: 'Pork Leg', spec: '8-10kg' },
                        { name: 'Pork Loin', spec: '8-10kg · Bone-in' },
                        { name: 'Pork Loin Steaks', spec: '155g - 227g' },
                        { name: 'Pork Mince', spec: 'Standard specification — ask us for details' },
                        { name: 'Pork Neck', spec: '2-3kg · Boneless' },
                        { name: 'Pork Rack', spec: 'Standard specification — ask us for details' },
                        { name: 'Pork Sausages', spec: '1.5kg' },
                        { name: 'Pork Shoulder', spec: 'Bone-in · Boneless' },
                        { name: 'Pork Striploin', spec: '4-5kg' },
                        { name: 'Pork Tenderloin', spec: '400-500g' },
                        { name: 'Prosciutto', spec: '500g · 5-6kg' },
                        { name: 'Salami', spec: 'Milano · Napoli · Danish' },
                        { name: 'Chicken Sausages', spec: '1.5kg' },
                        { name: 'Vegetable Sausages', spec: '1kg' },
                        { name: 'Beef Sausages', spec: '1.5kg' },
                        { name: 'Chicken & Apricot Sausages', spec: '2.5kg' },
                        { name: 'Vegan Sausages', spec: '1kg' },
                        { name: 'Lamb & Mint Sausages', spec: '1kg' },
                        { name: 'Wild Boar & Apple Sausages', spec: '2.5kg' },
                        { name: 'Serrano Ham', spec: '500g' },
                        { name: 'Turkey Cooked & Sliced', spec: '500g' },
                        { name: 'White Pudding Rings', spec: 'Standard specification — ask us for details' },
                    ],

                    poultry: [
                        { name: 'Chicken Breast', spec: '150g - 230g · Halal' },
                        { name: 'Chicken Burgers', spec: '1kg · Breaded' },
                        { name: 'Chicken Crown', spec: 'Halal · Corn fed' },
                        { name: 'Chicken Drumsticks', spec: 'Skin-off · Skin-on · Halal' },
                        { name: 'Chicken Feet', spec: 'Frozen' },
                        { name: 'Chicken Fillets', spec: '140g - 252g · Halal · Skin-off · Skin-on · Corn fed' },
                        { name: 'Chicken Inner Fillet', spec: 'Halal · Fresh' },
                        { name: 'Chicken Legs', spec: 'Skin-on · Bone-in · Frozen · Halal · Skin-off · Corn fed' },
                        { name: 'Chicken Liver', spec: 'Fresh' },
                        { name: 'Chicken Nuggets', spec: '1kg · Battered' },
                        { name: 'Chicken Skin', spec: 'Halal' },
                        { name: 'Chicken Supreme', spec: '140g - 280g · Halal · Skin-off · Skin-on · Corn fed' },
                        { name: 'Chicken Thighs', spec: 'Halal · Skin-off · Bone-in · Skin-on · Boneless · Corn fed' },
                        { name: 'Chicken Wings', spec: 'Halal' },
                        { name: 'Whole Chicken', spec: '1.1kg - 1.4kg · Corn fed' },
                        { name: 'Duck Breast', spec: 'Gressingham · Barbary' },
                        { name: 'Duck Leg', spec: 'Confit · Gressingham · Barbary' },
                        { name: 'Guinea Fowl', spec: '1.2-1.4kg' },
                        { name: 'Guinea Fowl Supremes', spec: '168g - 196g' },
                        { name: 'Poulet Noir', spec: '1.4-1.6kg' },
                        { name: 'Poussin', spec: '392-560g · Halal · Corn fed' },
                        { name: 'Quail', spec: 'Bone-in · Boneless' },
                        { name: 'Quail Eggs', spec: '1x12' },
                        { name: 'Spring Chicken', spec: '1-1.1kg' },
                        { name: 'Turkey Crown', spec: '7-9kg' },
                        { name: 'Turkey Bacon', spec: '500g · Halal' },
                        { name: 'Turkey Breast', spec: '2-3kg · Smoked' },
                        { name: 'Turkey Thigh', spec: 'Standard specification — ask us for details' },
                        { name: 'Turkey Saddle', spec: '3-4kg · Halal · Cooked' },
                    ],

                    fish: [
                        { name: 'Anchovy Fillets', spec: '1kg' },
                        { name: 'Avruga Caviar', spec: '120g' },
                        { name: 'Battered Cod Fillet', spec: '110g - 196g' },
                        { name: 'Battered Haddock Fillet', spec: '110g - 196g' },
                        { name: 'Breaded Cod Fillet', spec: '110g - 196g' },
                        { name: 'Breaded Haddock Fillet', spec: '110g - 196g' },
                        { name: 'Clam Meat', spec: '1kg' },
                        { name: 'Clams Palourd', spec: '1kg' },
                        { name: 'Cod Fillet', spec: '90g - 224g' },
                        { name: 'Cod Loins', spec: '170g · Skinless' },
                        { name: 'Coley Fillet', spec: 'Skin-on' },
                        { name: 'Crab Meat', spec: '454g · White · Brown' },
                        { name: 'Crayfish Tails', spec: '900g' },
                        { name: 'Dover Sole', spec: '392g - 672g' },
                        { name: 'Gravalax', spec: '1-2kg · Beetroot cured' },
                        { name: 'Grey Mullet', spec: 'Whole · Fillet' },
                        { name: 'Haddock Fillet', spec: '112g - 285g · Skin-on · Smoked' },
                        { name: 'Hake', spec: '2-3kg' },
                        { name: 'Halibut', spec: '3-5kg · Skin-on' },
                        { name: 'Kippers', spec: '3kg' },
                        { name: 'Lemon Sole', spec: '112g - 560g' },
                        { name: 'Lobster', spec: '454g - 1kg · Frozen · Cooked' },
                        { name: 'Mackerel', spec: 'Whole · Fillets' },
                        { name: 'Mixed Fish Trimmings', spec: 'Standard specification — ask us for details' },
                        { name: 'Monk Fish', spec: '1kg - 3kg' },
                        { name: 'Mussels', spec: '1kg' },
                        { name: 'Octopus', spec: '1kg - 3kg' },
                        { name: 'Oysters', spec: 'Standard specification — ask us for details' },
                        { name: 'Pangasius Fillet', spec: '170-220g' },
                        { name: 'Plaice', spec: '140g - 560g' },
                        { name: 'Prawns', spec: 'In brine · Tempura · Tiger · Torpedo' },
                        { name: 'Red Mullet', spec: 'Whole · Fillet' },
                        { name: 'Red Trout', spec: 'Whole' },
                        { name: 'Rollmop Herring', spec: '2kg' },
                        { name: 'Salmon', spec: '85g - 252g · Whole · Smoked' },
                        { name: 'Sardines', spec: 'Whole' },
                        { name: 'Scallops', spec: '1kg · Frozen' },
                        { name: 'Sea Bass', spec: 'Fillets · 400g - 800g · Whole' },
                        { name: 'Sea Bream', spec: 'Fillets · 400g - 800g · Whole' },
                        { name: 'Squid', spec: 'Frozen · Fresh' },
                        { name: 'Swordfish', spec: '140g - 284g · Whole' },
                        { name: 'Tilapia', spec: '140-170g' },
                        { name: 'Trout', spec: 'Whole · Fresh · Red trout' },
                        { name: 'Tuna', spec: '110g - 224g · Whole' },
                        { name: 'Turbot', spec: '2-3kg' },
                    ],

                    game: [
                        { name: 'Pheasant', spec: '168-196g · Whole' },
                        { name: 'Pigeon', spec: 'Wood · Squabs · Supreme' },
                        { name: 'Rabbit', spec: 'Whole · Saddles' },
                        { name: 'Venison', spec: 'Haunch · Saddle · Rack · Fillets' },
                    ],

                    veal: [
                        { name: 'Calves Feet', spec: 'Split' },
                        { name: 'Calves Liver', spec: 'Whole' },
                        { name: 'Veal', spec: 'Topside · Belly · Cutlets · Bones · Fillets' },
                    ],

                    dairy: [
                        { name: 'Bocconcini', spec: 'Tubs · 1.5kg' },
                        { name: 'Brie', spec: '1kg' },
                        { name: 'Burrata', spec: '125g' },
                        { name: 'Cheddar', spec: 'Smoked · Mature · Mild · Sliced' },
                        { name: 'Feta', spec: '900g' },
                        { name: 'Goats Cheese', spec: '1kg' },
                        { name: 'Gruyere', spec: '1.5-2kg' },
                        { name: 'Halloumi', spec: '250g' },
                        { name: 'Mascarpone', spec: '500g' },
                        { name: 'Mozzarella', spec: '1kg' },
                        { name: 'Parmesan Padano', spec: '1-1.2kg' },
                        { name: 'Parmesan Reggiano', spec: '2kg' },
                        { name: 'Ricotta', spec: '1.5-1.6kg · 400g' },
                        { name: 'Stilton', spec: '2-3kg' },
                    ],

                    pantry: [
                        { name: 'Capers', spec: 'Standard specification — ask us for details' },
                        { name: 'Chopped Tomatoes', spec: 'Standard specification — ask us for details' },
                        { name: 'Haggis', spec: '500g · 3kg' },
                        { name: 'Hash Browns', spec: '10kg' },
                        { name: 'Hummus', spec: '2kg' },
                        { name: 'Mortadella', spec: '500g' },
                        { name: 'Extra Virgin Olive Oil', spec: '5ltr' },
                        { name: 'Passata', spec: '2.55kg' },
                        { name: 'Penne Rigate Riscossa', spec: '500g' },
                        { name: 'Pepperoni', spec: '1kg' },
                        { name: 'Potato Chips Julienne', spec: '2.5kg' },
                        { name: 'Potato Chips Steak House', spec: '2.5kg' },
                        { name: 'Potato Chips Straight Cut', spec: '2.5kg' },
                        { name: 'Potato Wedges Spicy', spec: '2.5kg' },
                        { name: 'Vegetable Samosas', spec: '70g' },
                        { name: 'Scotch Eggs', spec: 'Standard specification — ask us for details' },
                        { name: 'Sun Blushed Tomatoes', spec: '950g' },
                        { name: 'Taramosalata', spec: '2kg' },
                        { name: 'Tiptree English Grain Mustard', spec: '20g' },
                        { name: 'Tiptree Mayonnaise', spec: '30g' },
                        { name: 'Tiptree Tomato Ketchup', spec: '28g · 4ltr' },
                    ],
                },

                filteredCategoryProducts(category) {
                    let products = this.products[category] ?? [];
                    const query = this.search.trim().toLowerCase();

                    if (!query) {
                        return products;
                    }

                    return products.filter(product =>
                        product.name.toLowerCase().includes(query) ||
                        product.spec.toLowerCase().includes(query)
                    );
                },

                get visibleCategories() {
                    return this.categories.filter(category => {
                        if (
                            this.activeCategory !== 'all' &&
                            this.activeCategory !== category.id
                        ) {
                            return false;
                        }

                        return this.filteredCategoryProducts(category.id).length > 0;
                    });
                },

                get totalVisibleProducts() {
                    return this.visibleCategories.reduce(
                        (total, category) =>
                            total + this.filteredCategoryProducts(category.id).length,
                        0
                    );
                },
            };
        }
    </script>

</x-layout>