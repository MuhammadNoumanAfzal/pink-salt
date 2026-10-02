<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - SALTORA Himalayan Pink Salt Exporter</title>
    <meta name="description" content="Privacy Policy for SALTORA Himalayan Pink Salt Exporter. Information handling, data security, and confidentiality for international B2B buyers.">
    
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
        <div class="max-w-7xl mx-auto px-6 md:px-12 h-20 flex items-center justify-between">
            <a href="/" class="flex items-center gap-3 group">
                <img src="/logo.png" alt="SALTORA Logo" class="h-9 w-auto object-contain transition-transform group-hover:scale-105">
                <div class="flex flex-col">
                    <span class="font-serif text-xl md:text-2xl font-bold tracking-widest text-saltora-text uppercase leading-none">SALTORA</span>
                    <span class="text-[9px] font-bold text-saltora-terracotta tracking-mega uppercase mt-0.5">Himalayan Salt Exporter</span>
                </div>
            </a>

            <nav class="hidden lg:flex items-center space-x-9 text-xs font-semibold tracking-widest text-saltora-text uppercase">
                <a href="/about" class="hover:text-saltora-terracotta transition-colors cursor-pointer">ABOUT</a>
                <a href="/products" class="hover:text-saltora-terracotta transition-colors cursor-pointer">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors cursor-pointer">CERTIFICATIONS</a>
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors cursor-pointer">EXPORT & LOGISTICS</a>
                <a href="/contact" class="hover:text-saltora-terracotta transition-colors cursor-pointer">CONTACT</a>
            </nav>

            <!-- Header Action Button & Quote CTA -->
            <div class="hidden sm:flex items-center gap-3">
                {{--
                <!-- SHOPPING CART COMMENTED OUT -->
                <button @click="openCartSidebar()" class="bg-saltora-dark hover:bg-black text-white px-5 py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2.5 group cursor-pointer rounded-xs border border-amber-900/30">
                    <svg class="w-4 h-4 text-[#e07a5f] group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                    </svg>
                    <span>SHOPPING CART</span>
                    <span x-show="cartCount > 0" x-text="cartCount" class="bg-[#e07a5f] text-white text-[10px] min-w-[20px] h-5 px-1.5 rounded-full flex items-center justify-center font-bold shadow-xs" x-cloak></span>
                </button>
                --}}
                <a href="/contact" class="bg-saltora-dark hover:bg-black text-white px-5 py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2.5 group cursor-pointer rounded-xs border border-amber-900/30">
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
            <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">CONFIDENTIALITY & DATA PROTECTION</span>
            <h1 class="text-3xl md:text-5xl font-serif font-normal">Privacy Policy</h1>
            <p class="text-xs md:text-sm text-stone-400 max-w-2xl mx-auto font-light">How SALTORA respects, safeguards, and handles commercial buyer information and export documentation data.</p>
        </div>
    </section>

    <!-- CONTENT BODY -->
    <main class="max-w-4xl mx-auto px-6 md:px-12 py-16 space-y-10 text-stone-800 leading-relaxed text-sm">
        <div class="bg-white p-8 md:p-12 rounded-sm border border-saltora-border shadow-xs space-y-8">
            <section class="space-y-3">
                <h2 class="text-xl font-serif font-bold text-saltora-dark border-b border-saltora-border pb-2">1. Information Collection</h2>
                <p class="text-stone-600 font-light text-xs md:text-sm">SALTORA collects business information provided directly by buyers, importers, and trade inquiries, including company names, contact personnel, corporate emails, phone numbers, target destination ports, and specific packaging requests.</p>
            </section>

            <section class="space-y-3">
                <h2 class="text-xl font-serif font-bold text-saltora-dark border-b border-saltora-border pb-2">2. Use of Business Data</h2>
                <p class="text-stone-600 font-light text-xs md:text-sm">Your information is used strictly to process export orders, issue proforma invoices, coordinate container logistics with ocean shipping lines, provide customs clearance documentation, and respond to commercial inquiries.</p>
            </section>

            <section class="space-y-3">
                <h2 class="text-xl font-serif font-bold text-saltora-dark border-b border-saltora-border pb-2">3. Commercial Confidentiality & Non-Disclosure</h2>
                <p class="text-stone-600 font-light text-xs md:text-sm">We strictly respect client confidentiality. Buyer identities, proprietary OEM artwork, private label formulations, and container destination records are never sold, rented, or disclosed to third parties except as required for customs clearance and shipping documentation.</p>
            </section>

            <section class="space-y-3">
                <h2 class="text-xl font-serif font-bold text-saltora-dark border-b border-saltora-border pb-2">4. Data Security</h2>
                <p class="text-stone-600 font-light text-xs md:text-sm">SALTORA employs industry-standard encryption, secure server architecture, and restricted administrative protocols to protect all digital records and commercial communications against unauthorized access.</p>
            </section>

            <section class="space-y-3">
                <h2 class="text-xl font-serif font-bold text-saltora-dark border-b border-saltora-border pb-2">5. Contact Data Officer</h2>
                <p class="text-stone-600 font-light text-xs md:text-sm">For data inquiries or to update your company’s commercial profile with SALTORA, please contact our export desk at <a href="mailto:saltora1329@gmail.com" class="text-saltora-terracotta font-semibold hover:underline">saltora1329@gmail.com</a>.</p>
            </section>
        </div>
    </main>

    <!-- FOOTER -->
    <x-footer />
    {{-- <x-cart-drawer /> --}}

</body>
</html>
