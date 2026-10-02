<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us — SALTORA | Premium Himalayan Pink Salt Exporter</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Learn about SALTORA: Pakistan's premier Himalayan pink salt export house. Authentic sourcing from the Salt Range, quality-focused processing, and international B2B partnerships.">
    <meta name="keywords" content="About Saltora, Pink Salt Exporter Pakistan, Salt Range Mining, B2B Salt Exporter, Himalayan Rock Salt Sourcing">
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/logo.png">
    <link rel="shortcut icon" type="image/png" href="/logo.png">
    
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="shopManager()">

    <!-- Single Sticky Navigation Header -->
    <header class="sticky top-0 z-40 bg-saltora-bg/95 backdrop-blur-md border-b border-saltora-border/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-10 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3 group cursor-pointer">
                <img src="/logo.png" alt="SALTORA Logo" class="h-10 w-auto object-contain transition-transform group-hover:scale-105">
                <span class="font-serif text-2xl font-bold tracking-wider text-saltora-text">SALTORA</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-9 text-xs font-semibold tracking-widest text-saltora-text uppercase">
                <a href="/about" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1 cursor-pointer">ABOUT</a>
                <a href="/products" class="hover:text-saltora-terracotta transition-colors cursor-pointer">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors cursor-pointer">CERTIFICATIONS</a>
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors cursor-pointer">EXPORT & LOGISTICS</a>
                <a href="/blog" class="hover:text-saltora-terracotta transition-colors cursor-pointer">BLOG</a>
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

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-saltora-text p-2 rounded-md focus:outline-none cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileMenuOpen" x-cloak x-transition class="lg:hidden bg-saltora-bg border-b border-saltora-border px-6 py-6 space-y-4 text-xs font-semibold tracking-widest uppercase">
            <a @click="mobileMenuOpen = false" href="/about" class="block py-2 text-saltora-terracotta font-bold cursor-pointer">ABOUT</a>
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CONTACT</a>
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

    <!-- ABOUT HERO SECTION (BRIGHTER BACKDROP & ELEGANT ENTRANCE ANIMATIONS) -->
    <section class="relative bg-saltora-dark text-white py-28 md:py-36 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border">
        <!-- Backdrop Image (`aboutero.jpg`) - Brighter & Richer -->
        <img src="/aboutero.jpg" alt="Himalayan Salt Mine Mountain Backdrop" class="absolute inset-0 w-full h-full object-cover opacity-60 filter brightness-105 pointer-events-none scale-105 transition-transform duration-1000">
        <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/55 to-black/35 pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto space-y-6">
            <!-- Category Sub-tag (Animated Left) -->
            <div class="flex items-center gap-3 text-xs font-bold tracking-mega text-saltora-terracotta uppercase animate-hero-left">
                <span class="w-8 h-px bg-saltora-terracotta"></span>
                <span>ABOUT SALTORA</span>
            </div>

            <!-- Headline (Animated Left with Delay) -->
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-serif text-white font-normal leading-[1.08] max-w-4xl animate-hero-left">
                Built at the source.<br>
                <span class="italic text-amber-100 font-normal">Focused on export.</span>
            </h1>

            <!-- Paragraph (Animated Right) -->
            <p class="text-stone-200 text-base sm:text-lg leading-relaxed max-w-2xl font-light animate-hero-right drop-shadow-sm">
                SALTORA is a premier Pakistani export business supplying authentic Himalayan pink salt to importers, wholesalers, food companies and private label brands worldwide.
            </p>
    </section>

    <!-- CONTINUOUS MARQUEE TICKER BAR -->
    <div class="bg-saltora-terracotta text-white py-3 overflow-hidden shadow-inner border-y border-saltora-terracotta-dark">
        <div class="marquee-track flex whitespace-nowrap gap-12 text-xs font-semibold tracking-widest uppercase items-center">
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 98.5%+ PURE NaCl</span>
                <span class="flex items-center gap-2">✦ ISO & HALAL CERTIFIED</span>
                <span class="flex items-center gap-2">✦ PRIVATE LABEL OEM PACKAGING</span>
                <span class="flex items-center gap-2">✦ DIRECT FROM PAKISTAN SALT RANGE</span>
                <span class="flex items-center gap-2">✦ BULK & RETAIL EXPORT READY</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 98.5%+ PURE NaCl</span>
                <span class="flex items-center gap-2">✦ ISO & HALAL CERTIFIED</span>
                <span class="flex items-center gap-2">✦ PRIVATE LABEL OEM PACKAGING</span>
                <span class="flex items-center gap-2">✦ DIRECT FROM PAKISTAN SALT RANGE</span>
                <span class="flex items-center gap-2">✦ BULK & RETAIL EXPORT READY</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 98.5%+ PURE NaCl</span>
                <span class="flex items-center gap-2">✦ ISO & HALAL CERTIFIED</span>
                <span class="flex items-center gap-2">✦ PRIVATE LABEL OEM PACKAGING</span>
                <span class="flex items-center gap-2">✦ DIRECT FROM PAKISTAN SALT RANGE</span>
                <span class="flex items-center gap-2">✦ BULK & RETAIL EXPORT READY</span>
            </div>
        </div>
    </div>

    <!-- THREE CORE FOUNDATIONAL COLUMNS (Elegant Scroll Reveal) -->
    <section class="py-20 md:py-28 px-6 md:px-12 max-w-7xl mx-auto overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Col 1: Sourced at Origin -->
            <div class="bg-white border border-saltora-border p-8 rounded-sm space-y-4 card-hover-effect group cursor-pointer reveal-from-left stagger-1">
                <div class="w-12 h-12 rounded-full bg-saltora-blush flex items-center justify-center text-saltora-terracotta mb-2 group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="font-serif text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Sourced at origin</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Direct access to the Salt Range region of Pakistan — the true geographical home of ancient Himalayan rock salt.
                </p>
            </div>

            <!-- Col 2: Export Prepared -->
            <div class="bg-white border border-saltora-border p-8 rounded-sm space-y-4 card-hover-effect group cursor-pointer reveal-scale stagger-2">
                <div class="w-12 h-12 rounded-full bg-saltora-blush flex items-center justify-center text-saltora-terracotta mb-2 group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-serif text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Export prepared</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Milled, graded and packaged under quality-conscious supervision to meet international market expectations.
                </p>
            </div>

            <!-- Col 3: B2B Focused -->
            <div class="bg-white border border-saltora-border p-8 rounded-sm space-y-4 card-hover-effect group cursor-pointer reveal-from-right stagger-3">
                <div class="w-12 h-12 rounded-full bg-saltora-blush flex items-center justify-center text-saltora-terracotta mb-2 group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="font-serif text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">B2B focused</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Built specifically to serve commercial buyers with clear terms, documented quality and reliable communication.
                </p>
            </div>

        </div>
    </section>

    <!-- OUR STORY SECTION (Multi-Directional Motion) -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-white border-t border-saltora-border/60 overflow-hidden">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Text Story (Reveals Left-to-Right) -->
            <div class="lg:col-span-6 space-y-6 reveal-from-left">
                <div class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">
                    OUR STORY
                </div>

                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal leading-[1.12]">
                    Why Saltora exists
                </h2>

                <p class="text-saltora-muted text-sm sm:text-base font-light leading-relaxed">
                    Himalayan pink salt is exported worldwide, but international buyers frequently deal with inconsistent grain sizes, unclear documentation and unreliable communication.
                </p>

                <p class="text-saltora-muted text-sm sm:text-base font-light leading-relaxed">
                    Saltora was created to change that — offering a professional, transparent export service direct from Pakistan. We combine reliable origin sourcing with strict quality preparation, clear FOB export terms and responsive communication.
                </p>

                <div class="pt-2">
                    <a href="/products" class="inline-flex items-center gap-2 border border-saltora-text/40 hover:border-saltora-text px-6 py-3 text-xs font-bold tracking-wider uppercase transition-all duration-300 cursor-pointer group">
                        <span class="group-hover:translate-x-1 transition-transform duration-300">EXPLORE OUR PRODUCTS</span>
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Story Photo Stack (Reveals Right-to-Left) -->
            <div class="lg:col-span-6 relative reveal-from-right">
                <div class="relative rounded-sm overflow-hidden border border-saltora-border shadow-xl group cursor-pointer">
                    <img src="/aboutimg.jpg" alt="Pakistani Salt Sourcing Hands" class="w-full h-[460px] object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
            </div>

        </div>
    </section>

    <!-- 3 PHOTO STORY GRID (Staggered Bottom Reveal) -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-saltora-bg border-t border-saltora-border/60 overflow-hidden">
        <div class="max-w-7xl mx-auto space-y-12">
            
            <div class="text-center max-w-2xl mx-auto space-y-3 reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">OUR OPERATION</span>
                <h2 class="text-3xl sm:text-4xl font-serif text-saltora-text font-normal">
                    From raw mineral to global delivery
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="space-y-4 group cursor-pointer reveal-from-bottom stagger-1">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/abt1.jpg" alt="Salt Mine Tunnel Extraction" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <h3 class="font-serif text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors group-hover:translate-x-1 duration-300">01. Origin Sourcing</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Authentic pink salt deposits mined from the historic Salt Range region of Pakistan.
                    </p>
                </div>

                <div class="space-y-4 group cursor-pointer reveal-from-bottom stagger-2">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/abt2.jpg" alt="Crushing and Milling Salt" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <h3 class="font-serif text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors group-hover:translate-x-1 duration-300">02. Precision Grading</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Crushed, cleaned and sieved into exact grain sizes — from fine table salt to coarse grinder crystals.
                    </p>
                </div>

                <div class="space-y-4 group cursor-pointer reveal-from-bottom stagger-3">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/abt3.jpg" alt="Bulk Bags Loading at Port" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <h3 class="font-serif text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors group-hover:translate-x-1 duration-300">03. Export & Logistics</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Packed in bulk supersacks or retail bags, dispatched with full documentation from Pakistani ports.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <x-footer />
    {{-- <x-cart-drawer /> --}}

</body>
</html>
