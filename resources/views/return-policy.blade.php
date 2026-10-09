<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return & Refund Policy - SALTORA Himalayan Pink Salt Exporter</title>
    <meta name="description" content="Return & Refund Policy for SALTORA Himalayan Pink Salt Exporter. Inspection standards, shipment claims, and resolution procedures for commercial export orders.">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="shopManager()">

    <!-- HEADER NAVIGATION -->
    <header class="sticky top-0 z-40 bg-saltora-bg/95 backdrop-blur-md border-b border-saltora-border/80 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-12 h-16 md:h-18 flex items-center justify-between gap-4">
            <a href="/" class="flex items-center gap-3 shrink-0 group mr-2 lg:mr-6" title="SALTORA Home">
                <img src="/logo.png" alt="SALTORA Logo" class="h-9 w-auto object-contain transition-transform group-hover:scale-105">
                <div class="flex flex-col">
                    <span class="font-serif text-xl md:text-2xl font-bold tracking-widest text-saltora-text uppercase leading-none">SALTORA</span>
                    <span class="text-[9px] font-bold text-saltora-terracotta tracking-mega uppercase mt-0.5">Himalayan Salt Exporter</span>
                </div>
            </a>

            <nav class="hidden lg:flex items-center space-x-5 xl:space-x-8 text-[12px] font-semibold tracking-wider text-saltora-text uppercase mx-auto">
                <a href="/about" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">ABOUT</a>
                <a href="/products" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">CERTIFICATIONS</a>
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">EXPORT & LOGISTICS</a>
                <a href="/contact" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">CONTACT</a>
            </nav>

            <!-- Header Action Button & Quote CTA -->
            <div class="hidden sm:flex items-center gap-3 shrink-0">
                <a href="/contact" class="bg-saltora-dark hover:bg-black text-white px-4 py-2 text-[11px] font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2 group cursor-pointer rounded-xs border border-amber-900/30 whitespace-nowrap">
                    <i class="fa-solid fa-file-invoice text-[#e07a5f] group-hover:scale-110 transition-transform text-xs"></i>
                    <span>REQUEST A QUOTE</span>
                </a>
            </div>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-saltora-text p-2 cursor-pointer">
                <i class="fa-solid fa-bars text-xl" x-show="!mobileMenuOpen"></i>
                <i class="fa-solid fa-xmark text-xl" x-show="mobileMenuOpen" x-cloak></i>
            </button>
        </div>

        <div x-show="mobileMenuOpen" x-cloak x-transition class="lg:hidden bg-saltora-bg border-b border-saltora-border px-6 py-6 space-y-4 text-xs font-semibold tracking-widest uppercase">
            <a @click="mobileMenuOpen = false" href="/about" class="block py-2 text-saltora-text hover:text-saltora-terracotta">ABOUT</a>
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-text hover:text-saltora-terracotta">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-text hover:text-saltora-terracotta">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta">CONTACT</a>
            {{--
            <!-- SHOPPING CART COMMENTED OUT -->
            <button @click="mobileMenuOpen = false; openCartSidebar()" class="flex items-center justify-center gap-2.5 w-full mt-4 bg-saltora-terracotta text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer rounded-xs shadow-md">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                </svg>
                <span>SHOPPING CART</span>
                <span x-show="cartCount > 0" x-text="'(' + cartCount + ')'" x-cloak></span>
            </button>
            --}}
            <a href="/contact" @click="mobileMenuOpen = false" class="flex items-center justify-center gap-2 w-full mt-4 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer rounded-xs shadow-md transition-colors">
                <i class="fa-solid fa-file-invoice text-amber-200 text-sm"></i>
                <span>REQUEST A QUOTE</span>
            </a>
        </div>
    </header>

    <!-- HERO HEADER -->
    <section class="bg-saltora-dark text-white py-16 px-6 md:px-12 border-b border-saltora-dark-border">
        <div class="max-w-4xl mx-auto text-center space-y-4">
            <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">INSPECTION & CLAIM GUARANTEE</span>
            <h1 class="text-3xl md:text-5xl font-serif font-normal">Return & Refund Policy</h1>
            <p class="text-xs md:text-sm text-stone-400 max-w-2xl mx-auto font-light">Comprehensive guidelines on quality inspection upon container discharge, damage reporting, and claim settlements.</p>
        </div>
    </section>

    <!-- CONTENT BODY -->
    <main class="max-w-4xl mx-auto px-6 md:px-12 py-16 space-y-10 text-stone-800 leading-relaxed text-sm">
        <div class="bg-white p-8 md:p-12 rounded-sm border border-saltora-border shadow-xs space-y-8">
            <section class="space-y-3">
                <h2 class="text-xl font-serif font-bold text-saltora-dark border-b border-saltora-border pb-2">1. Pre-Shipment Inspection (PSI)</h2>
                <p class="text-stone-600 font-light text-xs md:text-sm">All commercial shipments undergo rigorous pre-shipment quality inspection at our Salt Range processing facilities and port stuffing warehouses. Buyers are entitled to appoint third-party inspection agencies (e.g. SGS, Cotecna, Intertek) at port prior to container sealing.</p>
            </section>

            <section class="space-y-3">
                <h2 class="text-xl font-serif font-bold text-saltora-dark border-b border-saltora-border pb-2">2. Destination Container Discharge Inspection</h2>
                <p class="text-stone-600 font-light text-xs md:text-sm">Upon container unsealing and discharge at destination port, the importer must inspect the cargo condition. Any discrepancy in bag quantity, moisture ingress, or seal tampering must be recorded on the port delivery order and reported to SALTORA within 7 business days.</p>
            </section>

            <section class="space-y-3">
                <h2 class="text-xl font-serif font-bold text-saltora-dark border-b border-saltora-border pb-2">3. Claim Resolution & Replacement</h2>
                <p class="text-stone-600 font-light text-xs md:text-sm">If verified non-conformity or transit damage occurs due to processing or container stuffing faults, SALTORA will provide immediate replacement stock on the subsequent shipment or issue a credit note against the commercial proforma invoice.</p>
            </section>

            <section class="space-y-3">
                <h2 class="text-xl font-serif font-bold text-saltora-dark border-b border-saltora-border pb-2">4. Non-Refundable Custom Charges</h2>
                <p class="text-stone-600 font-light text-xs md:text-sm">Custom OEM printed packaging bags, private label plates, and destination country import duties are non-refundable once production has commenced with written approval.</p>
            </section>

            <section class="space-y-3">
                <h2 class="text-xl font-serif font-bold text-saltora-dark border-b border-saltora-border pb-2">5. Submitting a Quality Claim</h2>
                <p class="text-stone-600 font-light text-xs md:text-sm">To initiate a claim, email <a href="mailto:saltora1329@gmail.com" class="text-saltora-terracotta font-semibold hover:underline">saltora1329@gmail.com</a> with your Order Reference #, Container Seal Photo, and Inspection Report.</p>
            </section>
        </div>
    </main>

    <!-- FOOTER -->
    <x-footer />
    {{-- <x-cart-drawer /> --}}

</body>
</html>
