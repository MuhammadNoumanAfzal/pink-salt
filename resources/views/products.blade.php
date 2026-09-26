<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products — SALTORA | Export-Ready Himalayan Pink Salt Range</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Explore SALTORA's export-ready Himalayan pink salt range: Fine, Coarse, Granules, Lumps, Industrial Salt, and OEM Private Label packaging.">
    <meta name="keywords" content="Pink Salt Products, Fine Pink Salt, Coarse Salt, Himalayan Granules, Salt Lumps, Private Label Salt, Saltora Products">
    
    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="shopManager()">

    <!-- Single Sticky Navigation Header -->
    <header class="sticky top-0 z-40 bg-saltora-bg/95 backdrop-blur-md border-b border-saltora-border/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-10 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3 group cursor-pointer">
                <img src="/logo.png" alt="SALTORA Logo" class="h-10 w-auto object-contain transition-transform group-hover:scale-105" onerror="this.onerror=null; this.classList.add('hidden'); document.getElementById('logo-fallback').classList.remove('hidden');">
                <div id="logo-fallback" class="hidden flex items-center gap-2">
                    <svg class="w-8 h-8 text-saltora-terracotta" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2L2 19h20L12 2zm0 3.8L17.5 17H6.5L12 5.8z" />
                    </svg>
                    <span class="font-serif text-2xl font-bold tracking-wider text-saltora-text">SALTORA</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-9 text-xs font-semibold tracking-widest text-saltora-text uppercase">
                <a href="/about" class="hover:text-saltora-terracotta transition-colors cursor-pointer">ABOUT</a>
                <a href="/products" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1 cursor-pointer">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors cursor-pointer">CERTIFICATIONS</a>
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors cursor-pointer">EXPORT & LOGISTICS</a>
                <a href="/contact" class="hover:text-saltora-terracotta transition-colors cursor-pointer">CONTACT</a>
            </nav>

            <!-- Header Action Button & Quote Counter -->
            <div class="hidden sm:flex items-center gap-3">
                <a href="/contact" class="bg-saltora-dark hover:bg-black text-white px-6 py-3 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2.5 group cursor-pointer">
                    <svg class="w-4 h-4 text-saltora-terracotta" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                    </svg>
                    <span>REQUEST QUOTE</span>
                    <span x-show="cartCount > 0" x-text="cartCount" class="bg-saltora-terracotta text-white text-[10px] w-5 h-5 rounded-full flex items-center justify-center font-bold" x-cloak></span>
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
            <a @click="mobileMenuOpen = false" href="/about" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">ABOUT</a>
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-terracotta font-bold cursor-pointer">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CONTACT</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block w-full mt-4 bg-saltora-terracotta text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer">
                REQUEST A QUOTE ↗
            </a>
        </div>
    </header>

    <!-- PRODUCTS HERO SECTION -->
    <section class="relative bg-saltora-dark text-white py-24 md:py-32 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border">
        <!-- Backdrop Image (`heroimg.jpg`) - Brighter & Warm -->
        <img src="/heroimg.jpg" alt="Salt Crystals Backdrop" class="absolute inset-0 w-full h-full object-cover opacity-65 filter brightness-105 contrast-105 pointer-events-none transition-transform duration-1000 scale-105">
        <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/55 to-black/35 pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto flex flex-col md:flex-row md:items-end justify-between gap-8">
            <div class="space-y-6 max-w-3xl animate-hero-left">
                <!-- Category Sub-tag -->
                <div class="flex items-center gap-3 text-xs font-bold tracking-mega text-saltora-terracotta uppercase">
                    <span class="w-8 h-px bg-saltora-terracotta"></span>
                    <span>EXPORT RANGE & CATALOG</span>
                </div>

                <!-- Headline -->
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-serif text-white font-normal leading-[1.08]">
                    The Saltora product range
                </h1>

                <!-- Paragraph -->
                <p class="text-stone-300 text-base sm:text-lg leading-relaxed font-light max-w-2xl">
                    Realistic, export-ready Himalayan pink salt categories for international B2B buyers — prepared to agreed specifications, with packaging discussed per requirement.
                </p>
            </div>

            <!-- Hero Stats Badge Right -->
            <div class="animate-hero-right shrink-0">
                <div class="bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-sm space-y-3 max-w-xs shadow-2xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-saltora-terracotta/20 border border-saltora-terracotta flex items-center justify-center text-saltora-terracotta">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-serif font-bold text-white">7+ RANGE</span>
                            <span class="text-[10px] text-stone-300 uppercase tracking-wider font-medium">Export Standard Grades</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <!-- 7 PRODUCTS GRID SECTION -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-saltora-bg">
        <div class="max-w-7xl mx-auto space-y-16">
            
            <!-- Section Title Reveal -->
            <div class="text-center max-w-3xl mx-auto space-y-3 reveal-on-scroll reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">FEATURED SELECTION</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    Explore Our Product Line
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    Every grade is sourced, cleaned, and sorted under stringent export standards to guarantee color consistency and purity.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Product 1: Himalayan Pink Salt -->
                <div class="bg-white border border-saltora-border p-6 rounded-sm flex flex-col justify-between card-hover-effect group reveal-on-scroll reveal-scale stagger-1">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card cursor-pointer relative" @click="openQuickView({name: 'Himalayan Pink Salt', img: '/product1.jpg', tags: ['EDIBLE / FOOD GRADE', 'RETAIL & BULK'], desc: 'Authentic Pakistani Himalayan pink salt in its natural, mineral-rich form — the core of the Saltora range for food and retail buyers.', specs: {grade: 'Natural Rock Salt', grain: 'Mixed Raw', purity: '98.5%+ NaCl', origin: 'Salt Range, Pakistan'}})">
                            <img src="/product1.jpg" alt="Himalayan Pink Salt Raw" class="w-full h-52 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="bg-white/90 backdrop-blur-xs text-saltora-text text-[10px] font-bold px-3 py-1.5 uppercase tracking-wider shadow">Quick View</span>
                            </div>
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta cursor-pointer">
                            Himalayan Pink Salt
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Authentic Pakistani Himalayan pink salt in its natural, mineral-rich form — the core of the Saltora range for food and retail buyers.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2] transition-colors group-hover:border-saltora-terracotta/40">EDIBLE / FOOD GRADE</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2] transition-colors group-hover:border-saltora-terracotta/40">RETAIL & BULK</span>
                        </div>
                    </div>

                    <!-- Dual Action Buttons -->
                    <div class="pt-6 border-t border-saltora-border/60 mt-6 space-y-2">
                        <button @click="addToQuote('Himalayan Pink Salt')" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer shadow-sm hover:shadow group/btn">
                            <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover/btn:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                            <span>ADD TO QUOTE</span>
                        </button>
                        <button @click="openQuickView({name: 'Himalayan Pink Salt', img: '/product1.jpg', tags: ['EDIBLE / FOOD GRADE', 'RETAIL & BULK'], desc: 'Authentic Pakistani Himalayan pink salt in its natural, mineral-rich form — the core of the Saltora range for food and retail buyers.', specs: {grade: 'Natural Rock Salt', grain: 'Mixed Raw', purity: '98.5%+ NaCl', origin: 'Salt Range, Pakistan'}})" class="w-full border border-saltora-text/30 hover:border-saltora-text bg-white text-saltora-text py-2 text-xs font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer group/btn">
                            <svg class="w-3.5 h-3.5 text-saltora-muted group-hover/btn:text-saltora-text transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <span class="group-hover/btn:translate-x-0.5 transition-transform duration-300">VIEW DETAILS</span>
                        </button>
                    </div>
                </div>

                <!-- Product 2: Fine Himalayan Pink Salt -->
                <div class="bg-white border border-saltora-border p-6 rounded-sm flex flex-col justify-between card-hover-effect group reveal-on-scroll reveal-scale stagger-2">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card cursor-pointer relative" @click="openQuickView({name: 'Fine Himalayan Pink Salt', img: '/product2.jpg', tags: ['FINE GRAIN', 'TABLE & MANUFACTURING'], desc: 'Finely milled pink salt with a smooth, even texture — suited to table salt, food manufacturing, seasoning blends and food-service use.', specs: {grade: 'Fine Table Grade', grain: '0.2mm – 0.8mm', purity: '98.8%+ NaCl', origin: 'Salt Range, Pakistan'}})">
                            <img src="/product2.jpg" alt="Fine Himalayan Pink Salt" class="w-full h-52 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="bg-white/90 backdrop-blur-xs text-saltora-text text-[10px] font-bold px-3 py-1.5 uppercase tracking-wider shadow">Quick View</span>
                            </div>
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta cursor-pointer">
                            Fine Himalayan Pink Salt
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Finely milled pink salt with a smooth, even texture — suited to table salt, food manufacturing, seasoning blends and food-service use.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2] transition-colors group-hover:border-saltora-terracotta/40">FINE GRAIN</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2] transition-colors group-hover:border-saltora-terracotta/40">TABLE & MANUFACTURING</span>
                        </div>
                    </div>

                    <!-- Dual Action Buttons -->
                    <div class="pt-6 border-t border-saltora-border/60 mt-6 space-y-2">
                        <button @click="addToQuote('Fine Himalayan Pink Salt')" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer shadow-sm hover:shadow group/btn">
                            <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover/btn:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                            <span>ADD TO QUOTE</span>
                        </button>
                        <button @click="openQuickView({name: 'Fine Himalayan Pink Salt', img: '/product2.jpg', tags: ['FINE GRAIN', 'TABLE & MANUFACTURING'], desc: 'Finely milled pink salt with a smooth, even texture — suited to table salt, food manufacturing, seasoning blends and food-service use.', specs: {grade: 'Fine Table Grade', grain: '0.2mm – 0.8mm', purity: '98.8%+ NaCl', origin: 'Salt Range, Pakistan'}})" class="w-full border border-saltora-text/30 hover:border-saltora-text bg-white text-saltora-text py-2 text-xs font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer group/btn">
                            <svg class="w-3.5 h-3.5 text-saltora-muted group-hover/btn:text-saltora-text transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <span class="group-hover/btn:translate-x-0.5 transition-transform duration-300">VIEW DETAILS</span>
                        </button>
                    </div>
                </div>

                <!-- Product 3: Coarse Himalayan Pink Salt -->
                <div class="bg-white border border-saltora-border p-6 rounded-sm flex flex-col justify-between card-hover-effect group reveal-on-scroll reveal-scale stagger-3">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card cursor-pointer relative" @click="openQuickView({name: 'Coarse Himalayan Pink Salt', img: '/product3.jpg', tags: ['COARSE GRAIN', 'GRINDERS & GOURMET'], desc: 'Coarse, sparkling pink salt crystals for grinders, gourmet retail, food processing and culinary applications.', specs: {grade: 'Coarse Grinder Grade', grain: '2.0mm – 5.0mm', purity: '98.6%+ NaCl', origin: 'Salt Range, Pakistan'}})">
                            <img src="/product3.jpg" alt="Coarse Himalayan Pink Salt" class="w-full h-52 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="bg-white/90 backdrop-blur-xs text-saltora-text text-[10px] font-bold px-3 py-1.5 uppercase tracking-wider shadow">Quick View</span>
                            </div>
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta cursor-pointer">
                            Coarse Himalayan Pink Salt
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Coarse, sparkling pink salt crystals for grinders, gourmet retail, food processing and culinary applications.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2] transition-colors group-hover:border-saltora-terracotta/40">COARSE GRAIN</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2] transition-colors group-hover:border-saltora-terracotta/40">GRINDERS & GOURMET</span>
                        </div>
                    </div>

                    <!-- Dual Action Buttons -->
                    <div class="pt-6 border-t border-saltora-border/60 mt-6 space-y-2">
                        <button @click="addToQuote('Coarse Himalayan Pink Salt')" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer shadow-sm hover:shadow group/btn">
                            <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover/btn:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                            <span>ADD TO QUOTE</span>
                        </button>
                        <button @click="openQuickView({name: 'Coarse Himalayan Pink Salt', img: '/product3.jpg', tags: ['COARSE GRAIN', 'GRINDERS & GOURMET'], desc: 'Coarse, sparkling pink salt crystals for grinders, gourmet retail, food processing and culinary applications.', specs: {grade: 'Coarse Grinder Grade', grain: '2.0mm – 5.0mm', purity: '98.6%+ NaCl', origin: 'Salt Range, Pakistan'}})" class="w-full border border-saltora-text/30 hover:border-saltora-text bg-white text-saltora-text py-2 text-xs font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer group/btn">
                            <svg class="w-3.5 h-3.5 text-saltora-muted group-hover/btn:text-saltora-text transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <span class="group-hover/btn:translate-x-0.5 transition-transform duration-300">VIEW DETAILS</span>
                        </button>
                    </div>
                </div>

                <!-- Product 4: Himalayan Salt Granules -->
                <div class="bg-white border border-saltora-border p-6 rounded-sm flex flex-col justify-between card-hover-effect group reveal-on-scroll reveal-scale stagger-4">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card cursor-pointer relative" @click="openQuickView({name: 'Himalayan Salt Granules', img: '/product4.jpg', tags: ['GRANULATED', 'FOOD & WELLNESS'], desc: 'Uniform mid-size pink salt granules for food production, bath and wellness products, and further processing by manufacturers.', specs: {grade: 'Granulated Grade', grain: '1.0mm – 3.0mm', purity: '98.7%+ NaCl', origin: 'Salt Range, Pakistan'}})">
                            <img src="/product4.jpg" alt="Himalayan Salt Granules" class="w-full h-52 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="bg-white/90 backdrop-blur-xs text-saltora-text text-[10px] font-bold px-3 py-1.5 uppercase tracking-wider shadow">Quick View</span>
                            </div>
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta cursor-pointer">
                            Himalayan Salt Granules
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Uniform mid-size pink salt granules for food production, bath and wellness products, and further processing by manufacturers.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2] transition-colors group-hover:border-saltora-terracotta/40">GRANULATED</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2] transition-colors group-hover:border-saltora-terracotta/40">FOOD & WELLNESS</span>
                        </div>
                    </div>

                    <!-- Dual Action Buttons -->
                    <div class="pt-6 border-t border-saltora-border/60 mt-6 space-y-2">
                        <button @click="addToQuote('Himalayan Salt Granules')" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer shadow-sm hover:shadow group/btn">
                            <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover/btn:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                            <span>ADD TO QUOTE</span>
                        </button>
                        <button @click="openQuickView({name: 'Himalayan Salt Granules', img: '/product4.jpg', tags: ['GRANULATED', 'FOOD & WELLNESS'], desc: 'Uniform mid-size pink salt granules for food production, bath and wellness products, and further processing by manufacturers.', specs: {grade: 'Granulated Grade', grain: '1.0mm – 3.0mm', purity: '98.7%+ NaCl', origin: 'Salt Range, Pakistan'}})" class="w-full border border-saltora-text/30 hover:border-saltora-text bg-white text-saltora-text py-2 text-xs font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer group/btn">
                            <svg class="w-3.5 h-3.5 text-saltora-muted group-hover/btn:text-saltora-text transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <span class="group-hover/btn:translate-x-0.5 transition-transform duration-300">VIEW DETAILS</span>
                        </button>
                    </div>
                </div>

                <!-- Product 5: Salt Chunks / Lumps -->
                <div class="bg-white border border-saltora-border p-6 rounded-sm flex flex-col justify-between card-hover-effect group reveal-on-scroll reveal-scale stagger-5">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card cursor-pointer relative" @click="openQuickView({name: 'Salt Chunks / Lumps', img: '/sourcingsec.jpg', tags: ['RAW ROCK FORM', 'FURTHER PROCESSING'], desc: 'Natural rock salt chunks and lumps in raw form — for buyers who process, mill or craft salt products to their own specifications.', specs: {grade: 'Raw Rock Lumps', grain: '50mm – 150mm+', purity: '98.5%+ NaCl', origin: 'Salt Range, Pakistan'}})">
                            <img src="/sourcingsec.jpg" alt="Salt Chunks / Lumps" class="w-full h-52 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="bg-white/90 backdrop-blur-xs text-saltora-text text-[10px] font-bold px-3 py-1.5 uppercase tracking-wider shadow">Quick View</span>
                            </div>
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta cursor-pointer">
                            Salt Chunks / Lumps
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Natural rock salt chunks and lumps in raw form — for buyers who process, mill or craft salt products to their own specifications.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2] transition-colors group-hover:border-saltora-terracotta/40">RAW ROCK FORM</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2] transition-colors group-hover:border-saltora-terracotta/40">FURTHER PROCESSING</span>
                        </div>
                    </div>

                    <!-- Dual Action Buttons -->
                    <div class="pt-6 border-t border-saltora-border/60 mt-6 space-y-2">
                        <button @click="addToQuote('Salt Chunks / Lumps')" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer shadow-sm hover:shadow group/btn">
                            <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover/btn:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                            <span>ADD TO QUOTE</span>
                        </button>
                        <button @click="openQuickView({name: 'Salt Chunks / Lumps', img: '/sourcingsec.jpg', tags: ['RAW ROCK FORM', 'FURTHER PROCESSING'], desc: 'Natural rock salt chunks and lumps in raw form — for buyers who process, mill or craft salt products to their own specifications.', specs: {grade: 'Raw Rock Lumps', grain: '50mm – 150mm+', purity: '98.5%+ NaCl', origin: 'Salt Range, Pakistan'}})" class="w-full border border-saltora-text/30 hover:border-saltora-text bg-white text-saltora-text py-2 text-xs font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer group/btn">
                            <svg class="w-3.5 h-3.5 text-saltora-muted group-hover/btn:text-saltora-text transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <span class="group-hover/btn:translate-x-0.5 transition-transform duration-300">VIEW DETAILS</span>
                        </button>
                    </div>
                </div>

                <!-- Product 6: Industrial / Bulk Salt -->
                <div class="bg-white border border-saltora-border p-6 rounded-sm flex flex-col justify-between card-hover-effect group reveal-on-scroll reveal-scale stagger-6">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card cursor-pointer relative" @click="openQuickView({name: 'Industrial / Bulk Salt', img: '/bulk.jpg', tags: ['BULK VOLUME', 'INDUSTRIAL USE'], desc: 'Bulk-supply Himalayan salt for industrial applications, large-volume buyers and non-food-based export programs.', specs: {grade: 'Industrial Grade Bulk', grain: 'Custom Mesh Size', purity: '98.2%+ NaCl', origin: 'Salt Range, Pakistan'}})">
                            <img src="/bulk.jpg" alt="Industrial / Bulk Salt" class="w-full h-52 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="bg-white/90 backdrop-blur-xs text-saltora-text text-[10px] font-bold px-3 py-1.5 uppercase tracking-wider shadow">Quick View</span>
                            </div>
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta cursor-pointer">
                            Industrial / Bulk Salt
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Bulk-supply Himalayan salt for industrial applications, large-volume buyers and non-food-based export programs.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2] transition-colors group-hover:border-saltora-terracotta/40">BULK VOLUME</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2] transition-colors group-hover:border-saltora-terracotta/40">INDUSTRIAL USE</span>
                        </div>
                    </div>

                    <!-- Dual Action Buttons -->
                    <div class="pt-6 border-t border-saltora-border/60 mt-6 space-y-2">
                        <button @click="addToQuote('Industrial / Bulk Salt')" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer shadow-sm hover:shadow group/btn">
                            <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover/btn:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                            <span>ADD TO QUOTE</span>
                        </button>
                        <button @click="openQuickView({name: 'Industrial / Bulk Salt', img: '/bulk.jpg', tags: ['BULK VOLUME', 'INDUSTRIAL USE'], desc: 'Bulk-supply Himalayan salt for industrial applications, large-volume buyers and non-food-based export programs.', specs: {grade: 'Industrial Grade Bulk', grain: 'Custom Mesh Size', purity: '98.2%+ NaCl', origin: 'Salt Range, Pakistan'}})" class="w-full border border-saltora-text/30 hover:border-saltora-text bg-white text-saltora-text py-2 text-xs font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer group/btn">
                            <svg class="w-3.5 h-3.5 text-saltora-muted group-hover/btn:text-saltora-text transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <span class="group-hover/btn:translate-x-0.5 transition-transform duration-300">VIEW DETAILS</span>
                        </button>
                    </div>
                </div>

                <!-- Product 7: Custom Packaging / Private Label -->
                <div class="bg-white border border-saltora-border p-6 rounded-sm flex flex-col justify-between card-hover-effect group reveal-on-scroll reveal-scale md:col-span-2 lg:col-span-1">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card cursor-pointer relative" @click="openQuickView({name: 'Custom Packaging / Private Label', img: '/bag2.jpg', tags: ['BAGS, SACKS OR OEM', 'PRIVATE LABEL'], desc: 'Export-ready pink salt prepared under buyer specifications — packaging for retail, branding and private-label programs discussed per requirement.', specs: {grade: 'OEM Custom Grade', grain: 'Per Buyer Spec', purity: '98.5%+ NaCl', origin: 'Salt Range, Pakistan'}})">
                            <img src="/bag2.jpg" alt="Custom Packaging Private Label Pouches" class="w-full h-52 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="bg-white/90 backdrop-blur-xs text-saltora-text text-[10px] font-bold px-3 py-1.5 uppercase tracking-wider shadow">Quick View</span>
                            </div>
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta cursor-pointer">
                            Custom Packaging / Private Label
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Export-ready pink salt prepared under buyer specifications — packaging for retail, branding and private-label programs discussed per requirement.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2] transition-colors group-hover:border-saltora-terracotta/40">BAGS, SACKS OR OEM</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2] transition-colors group-hover:border-saltora-terracotta/40">PRIVATE LABEL</span>
                        </div>
                    </div>

                    <!-- Dual Action Buttons -->
                    <div class="pt-6 border-t border-saltora-border/60 mt-6 space-y-2">
                        <button @click="addToQuote('Custom Packaging / Private Label')" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer shadow-sm hover:shadow group/btn">
                            <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover/btn:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                            <span>ADD TO QUOTE</span>
                        </button>
                        <button @click="openQuickView({name: 'Custom Packaging / Private Label', img: '/bag2.jpg', tags: ['BAGS, SACKS OR OEM', 'PRIVATE LABEL'], desc: 'Export-ready pink salt prepared under buyer specifications — packaging for retail, branding and private-label programs discussed per requirement.', specs: {grade: 'OEM Custom Grade', grain: 'Per Buyer Spec', purity: '98.5%+ NaCl', origin: 'Salt Range, Pakistan'}})" class="w-full border border-saltora-text/30 hover:border-saltora-text bg-white text-saltora-text py-2 text-xs font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer group/btn">
                            <svg class="w-3.5 h-3.5 text-saltora-muted group-hover/btn:text-saltora-text transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <span class="group-hover/btn:translate-x-0.5 transition-transform duration-300">VIEW DETAILS</span>
                        </button>
                    </div>
                </div>

            </div>

            <!-- Fine print note -->
            <p class="text-xs text-saltora-muted/80 font-light text-center max-w-3xl mx-auto pt-4 leading-relaxed reveal-on-scroll reveal-from-bottom">
                Specifications, grain sizes and packaging formats are finalized with each buyer before quotation. If you need a format not listed here, mention it in your inquiry — we will confirm availability honestly.
            </p>

        </div>
    </section>

    <!-- PACKED THE WAY YOUR MARKET NEEDS IT SECTION -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-white border-t border-saltora-border/60">
        <div class="max-w-7xl mx-auto space-y-12">
            
            <div class="space-y-3 max-w-3xl reveal-on-scroll reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">PACKAGING & LOGISTICS</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    Packed the way your market needs it
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    Packaging is discussed according to buyer requirements and product specifications — from bulk formats to retail-ready and private-label programs.
                </p>
            </div>

            <!-- 4 Packaging Photo Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Format 1 -->
                <div class="space-y-3 group cursor-pointer reveal-on-scroll reveal-from-bottom stagger-1">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/bulk.jpg" alt="Bulk Bags Format" class="w-full h-48 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Bulk Bags</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Heavy-duty formats for volume buyers and industrial programs.
                    </p>
                </div>

                <!-- Format 2 -->
                <div class="space-y-3 group cursor-pointer reveal-on-scroll reveal-from-bottom stagger-2">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/product4.jpg" alt="Food-Grade Bags Format" class="w-full h-48 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Food-Grade Bags</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Hygienic, food-safe packing for edible salt shipments.
                    </p>
                </div>

                <!-- Format 3 -->
                <div class="space-y-3 group cursor-pointer reveal-on-scroll reveal-from-bottom stagger-3">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/bag1.jpg" alt="Retail Packaging Format" class="w-full h-48 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Retail Packaging</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Shelf-ready formats for retail brands and distributors.
                    </p>
                </div>

                <!-- Format 4 -->
                <div class="space-y-3 group cursor-pointer reveal-on-scroll reveal-from-bottom stagger-4">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/bag2.jpg" alt="Custom Private Label Format" class="w-full h-48 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Custom / Private Label</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Branding and packaging prepared to buyer requirements, where available.
                    </p>
                </div>

            </div>

            <!-- Soft Blush CTA Box -->
            <div class="bg-[#F5EAE6] p-8 sm:p-10 rounded-sm border border-saltora-terracotta/20 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 shadow-sm mt-8 reveal-on-scroll reveal-scale">
                <div class="space-y-2 max-w-2xl">
                    <h3 class="font-serif text-2xl sm:text-3xl text-saltora-text font-normal">
                        Need a custom specification?
                    </h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Share your target grain size, packaging format, quantity and destination port — Saltora will respond with a clear, written quotation.
                    </p>
                </div>

                <div class="shrink-0">
                    <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-8 py-4 text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center gap-2 group cursor-pointer">
                        <span>REQUEST A QUOTE</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- FOOTER SECTION -->
    <footer id="contact" class="bg-[#141211] text-stone-400 py-16 px-6 md:px-12 border-t border-stone-800 text-xs">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
            <div class="lg:col-span-2 space-y-4">
                <div class="flex items-center gap-3">
                    <img src="/logo.png" alt="SALTORA Logo" class="h-10 w-auto filter invert brightness-200" onerror="this.onerror=null; this.classList.add('hidden');">
                    <span class="font-serif text-2xl font-bold tracking-wider text-white">SALTORA</span>
                </div>

                <h3 class="font-serif text-lg text-white font-normal">Premium Himalayan Pink Salt from Pakistan</h3>

                <p class="text-stone-400 leading-relaxed max-w-sm font-light">
                    A Pakistan-based B2B exporter of premium Himalayan pink salt — serving importers, wholesalers, distributors, food manufacturers and private-label brands worldwide.
                </p>

                <div class="flex items-center space-x-3 pt-2 text-stone-400">
                    <a href="https://wa.me/923180735748" class="w-8 h-8 rounded-full border border-stone-700 flex items-center justify-center hover:border-white hover:text-white transition-colors cursor-pointer">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99 0-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    </a>
                </div>
            </div>

            <div class="space-y-3">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">NAVIGATE</h4>
                <ul class="space-y-2 text-stone-400 font-light">
                    <li><a href="/" class="hover:text-white transition-colors cursor-pointer">Home</a></li>
                    <li><a href="/about" class="hover:text-white transition-colors cursor-pointer">About</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors text-white font-medium cursor-pointer">Products</a></li>
                    <li><a href="/certifications" class="hover:text-white transition-colors cursor-pointer">Certifications</a></li>
                    <li><a href="/export-logistics" class="hover:text-white transition-colors cursor-pointer">Export & Logistics</a></li>
                    <li><a href="/contact" class="hover:text-white transition-colors cursor-pointer">Contact</a></li>
                </ul>
            </div>

            <div class="lg:col-span-2 space-y-4">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">CONTACT</h4>
                <div class="space-y-2 text-stone-400 font-light">
                    <p class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-saltora-terracotta shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:saltora1329@gmail.com" class="hover:text-white transition-colors cursor-pointer">saltora1329@gmail.com</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-saltora-terracotta shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="tel:+923180735748" class="hover:text-white transition-colors cursor-pointer">+92 318 0735748</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-saltora-terracotta shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                        </svg>
                        <a href="http://www.saltora.net" target="_blank" class="hover:text-white transition-colors cursor-pointer">www.saltora.net</a>
                    </p>
                </div>

                <div class="bg-[#1C1917] border border-stone-800 p-4 rounded-sm space-y-1 mt-4">
                    <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase block">EXPORT TERMS</span>
                    <p class="text-xs text-stone-300 font-light leading-relaxed">
                        FOB — 50% advance & 50% upon presentation of Bill of Lading
                    </p>
                </div>
            </div>

        </div>

        <div class="max-w-7xl mx-auto pt-10 mt-12 border-t border-stone-900 flex flex-col sm:flex-row items-center justify-between text-stone-500 text-[11px] gap-4">
            <p>© 2026 Saltora. All Rights Reserved.</p>
            <div class="tracking-widest font-serif italic text-stone-400">
                PURE · NATURAL · PREMIUM
            </div>
        </div>
    </footer>

    <!-- PRODUCT QUICK VIEW MODAL -->
    <div x-show="quickViewModalOpen" x-cloak class="fixed inset-0 z-50 overflow-y-auto" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Backdrop -->
            <div x-show="quickViewModalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/75 backdrop-blur-xs transition-opacity" @click="closeQuickView()"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <!-- Modal Body -->
            <div x-show="quickViewModalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block align-bottom bg-saltora-bg rounded-sm text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full border border-saltora-border p-6 md:p-8 relative">
                
                <!-- Close Button -->
                <button @click="closeQuickView()" class="absolute top-4 right-4 text-saltora-muted hover:text-saltora-text p-2 cursor-pointer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <template x-if="selectedProduct">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                        <div class="aspect-4/3 rounded-sm overflow-hidden bg-saltora-card border border-saltora-border">
                            <img :src="selectedProduct.img" :alt="selectedProduct.name" class="w-full h-full object-cover">
                        </div>

                        <div class="space-y-4">
                            <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase">SPECIFICATION SHEET</span>
                            <h3 class="font-serif text-3xl text-saltora-text font-normal" x-text="selectedProduct.name"></h3>
                            <p class="text-xs text-saltora-muted font-light leading-relaxed" x-text="selectedProduct.desc"></p>

                            <!-- Specs Table -->
                            <div class="border-t border-b border-saltora-border/70 py-3 space-y-2 text-xs">
                                <div class="flex justify-between">
                                    <span class="text-saltora-muted font-light">Grade Spec:</span>
                                    <span class="font-semibold text-saltora-text" x-text="selectedProduct.specs.grade"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-saltora-muted font-light">Grain Size:</span>
                                    <span class="font-semibold text-saltora-text" x-text="selectedProduct.specs.grain"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-saltora-muted font-light">Chemical Purity:</span>
                                    <span class="font-semibold text-saltora-terracotta" x-text="selectedProduct.specs.purity"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-saltora-muted font-light">Source Origin:</span>
                                    <span class="font-semibold text-saltora-text" x-text="selectedProduct.specs.origin"></span>
                                </div>
                            </div>

                            <div class="pt-2 flex flex-col gap-2">
                                <button @click="addToQuote(selectedProduct.name); closeQuickView()" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center justify-center gap-2 cursor-pointer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                                    </svg>
                                    <span>ADD TO QUOTE LIST</span>
                                </button>
                                <a href="/contact" class="w-full border border-saltora-text/30 hover:border-saltora-text text-saltora-text py-3 text-center text-xs font-bold tracking-wider uppercase transition-colors cursor-pointer">
                                    SEND CUSTOM INQUIRY
                                </a>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <!-- FLOATING TOAST NOTIFICATION -->
    <div x-show="cartToastOpen" x-cloak x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-8" class="fixed bottom-6 right-6 z-50 bg-saltora-dark text-white px-5 py-4 rounded-sm shadow-2xl border border-saltora-terracotta/40 flex items-center gap-3">
        <div class="w-8 h-8 rounded-full bg-saltora-terracotta text-white flex items-center justify-center shrink-0">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
            </svg>
        </div>
        <div>
            <h5 class="text-xs font-bold uppercase tracking-wider text-amber-100">ADDED TO QUOTE</h5>
            <p class="text-xs text-stone-300 font-light" x-text="toastMessage"></p>
        </div>
        <button @click="cartToastOpen = false" class="text-stone-400 hover:text-white ml-3 cursor-pointer">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

</body>
</html>
