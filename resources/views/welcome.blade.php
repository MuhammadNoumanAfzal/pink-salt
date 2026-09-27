<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SALTORA — Premium Himalayan Pink Salt Exporter from Pakistan</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="SALTORA is a premier Himalayan pink salt exporter based in Pakistan, supplying B2B bulk, private label, fine, coarse, and industrial salt to global markets.">
    <meta name="keywords" content="Himalayan Pink Salt, Salt Exporter Pakistan, Bulk Pink Salt, Private Label Salt, Saltora, Salt Range Sourcing">
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/logo.png">
    <link rel="shortcut icon" type="image/png" href="/logo.png">
    
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
                <a href="/about" class="hover:text-saltora-terracotta transition-colors cursor-pointer">ABOUT</a>
                <a href="/products" class="hover:text-saltora-terracotta transition-colors cursor-pointer">PRODUCTS</a>
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
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CONTACT</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block w-full mt-4 bg-saltora-terracotta text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer">
                REQUEST A QUOTE ↗
            </a>
        </div>
    </header>

    <!-- HERO SECTION (Ultra-Smooth Initial Load Entry Animations) -->
    <section class="relative pt-10 pb-16 md:py-20 px-6 md:px-12 max-w-7xl mx-auto overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Hero Content (Smooth 1.6s Hero Entrance from Left) -->
            <div class="lg:col-span-7 space-y-8 animate-hero-left">
                <!-- Category Tag Line -->
                <div class="flex items-center gap-3 text-xs font-bold tracking-mega text-saltora-terracotta uppercase">
                    <span class="w-8 h-px bg-saltora-terracotta"></span>
                    <span>HIMALAYAN PINK SALT · EXPORTER · PAKISTAN</span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-6xl xl:text-7xl font-serif text-saltora-text leading-[1.08] tracking-tight font-normal">
                    Premium<br>
                    Himalayan<br>
                    <span class="italic text-saltora-terracotta font-normal">Pink Salt</span> from<br>
                    Pakistan
                </h1>

                <!-- Subheading Description -->
                <p class="text-saltora-muted text-base sm:text-lg leading-relaxed max-w-2xl font-light">
                    SALTORA supplies authentic, quality-focused Himalayan pink salt to international importers, wholesalers, food businesses and private-label brands — with professional, export-ready service from source to shipment.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-8 py-4 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-md hover:shadow-lg flex items-center gap-3 group cursor-pointer">
                        <span>REQUEST A QUOTE</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                    <a href="/products" class="border border-saltora-text/30 hover:border-saltora-text hover:bg-saltora-card text-saltora-text px-8 py-4 text-xs font-bold tracking-wider uppercase transition-all duration-200 cursor-pointer">
                        EXPLORE PRODUCTS
                    </a>
                </div>
            </div>

            <!-- Right Hero Image with Floating Badges (Smooth 1.6s Hero Entrance from Right) -->
            <div class="lg:col-span-5 relative animate-hero-right">
                <div class="relative rounded-sm overflow-hidden shadow-2xl bg-saltora-card border border-saltora-border group">
                    <img src="/heroimg.jpg" alt="Premium Himalayan Pink Salt Crystals" class="w-full h-[480px] sm:h-[560px] object-cover transition-transform duration-700 group-hover:scale-105 cursor-pointer">

                    <!-- Gradient Overlay on Image Bottom -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent pointer-events-none"></div>

                    <!-- Overlay Text Bottom Left -->
                    <div class="absolute bottom-6 left-6 text-white z-10">
                        <p class="font-serif italic text-xl sm:text-2xl font-normal drop-shadow-md">Pure · Natural · Premium</p>
                    </div>

                    <!-- Badge Top Left: CERTIFIED QUALITY -->
                    <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-md p-4 rounded-sm border border-saltora-border shadow-lg z-20 max-w-[200px] cursor-pointer hover:border-saltora-terracotta transition-colors">
                        <span class="block text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase mb-1">CERTIFIED QUALITY</span>
                        <h4 class="font-serif text-sm font-bold text-saltora-text leading-snug">ISO 22000:2018</h4>
                        <p class="text-[11px] text-saltora-muted font-medium leading-tight">Halal · Codex CXS 150</p>
                    </div>

                    <!-- Badge Middle Right: BULK B2B -->
                    <div class="absolute top-1/2 -right-3 -translate-y-1/2 bg-saltora-blush/95 backdrop-blur-md px-4 py-2 border border-saltora-terracotta/20 shadow-md z-20 cursor-pointer hover:scale-105 transition-transform">
                        <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase">BULK · B2B · PRIVATE LABEL</span>
                    </div>

                    <!-- Badge Bottom Right: EXPORT TERMS -->
                    <div class="absolute bottom-4 right-4 bg-saltora-dark/95 backdrop-blur-md p-4 rounded-sm border border-saltora-dark-border text-white shadow-xl z-20 max-w-[210px] cursor-pointer hover:border-amber-200/40 transition-colors">
                        <span class="block text-[10px] font-bold tracking-widest text-saltora-muted-light uppercase mb-1">EXPORT TERMS</span>
                        <h4 class="font-serif text-sm font-semibold text-white leading-snug">FOB — 50% Advance</h4>
                        <p class="text-[11px] text-gray-300 font-normal">50% on Bill of Lading</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CONTINUOUS RUNNING INFINITE MARQUEE TICKER BAR -->
    <section class="border-y border-saltora-border bg-[#F0EAE1]/80 py-4 overflow-hidden select-none">
        <div class="animate-marquee">
            <div class="flex items-center space-x-12 px-6 text-xs font-semibold tracking-widest text-saltora-muted uppercase shrink-0">
                <span class="flex items-center gap-2 cursor-pointer hover:text-saltora-terracotta transition-colors"><span class="text-saltora-terracotta font-bold">◆</span> QUALITY FOCUSED</span>
                <span class="flex items-center gap-2 cursor-pointer hover:text-saltora-terracotta transition-colors"><span class="text-saltora-terracotta font-bold">◆</span> INTERNATIONAL STANDARDS</span>
                <span class="flex items-center gap-2 cursor-pointer hover:text-saltora-terracotta transition-colors"><span class="text-saltora-terracotta font-bold">◆</span> B2B SUPPLY</span>
                <span class="flex items-center gap-2 cursor-pointer hover:text-saltora-terracotta transition-colors"><span class="text-saltora-terracotta font-bold">◆</span> PRIVATE LABEL</span>
                <span class="flex items-center gap-2 cursor-pointer hover:text-saltora-terracotta transition-colors"><span class="text-saltora-terracotta font-bold">◆</span> CUSTOM PACKAGING</span>
                <span class="flex items-center gap-2 cursor-pointer hover:text-saltora-terracotta transition-colors"><span class="text-saltora-terracotta font-bold">◆</span> FOB TERMS</span>
                <span class="flex items-center gap-2 cursor-pointer hover:text-saltora-terracotta transition-colors"><span class="text-saltora-terracotta font-bold">◆</span> AUTHENTIC PAKISTANI ORIGIN</span>
            </div>
            <!-- Duplicated row for seamless loop -->
            <div class="flex items-center space-x-12 px-6 text-xs font-semibold tracking-widest text-saltora-muted uppercase shrink-0" aria-hidden="true">
                <span class="flex items-center gap-2 cursor-pointer hover:text-saltora-terracotta transition-colors"><span class="text-saltora-terracotta font-bold">◆</span> QUALITY FOCUSED</span>
                <span class="flex items-center gap-2 cursor-pointer hover:text-saltora-terracotta transition-colors"><span class="text-saltora-terracotta font-bold">◆</span> INTERNATIONAL STANDARDS</span>
                <span class="flex items-center gap-2 cursor-pointer hover:text-saltora-terracotta transition-colors"><span class="text-saltora-terracotta font-bold">◆</span> B2B SUPPLY</span>
                <span class="flex items-center gap-2 cursor-pointer hover:text-saltora-terracotta transition-colors"><span class="text-saltora-terracotta font-bold">◆</span> PRIVATE LABEL</span>
                <span class="flex items-center gap-2 cursor-pointer hover:text-saltora-terracotta transition-colors"><span class="text-saltora-terracotta font-bold">◆</span> CUSTOM PACKAGING</span>
                <span class="flex items-center gap-2 cursor-pointer hover:text-saltora-terracotta transition-colors"><span class="text-saltora-terracotta font-bold">◆</span> FOB TERMS</span>
                <span class="flex items-center gap-2 cursor-pointer hover:text-saltora-terracotta transition-colors"><span class="text-saltora-terracotta font-bold">◆</span> AUTHENTIC PAKISTANI ORIGIN</span>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-20 md:py-28 px-6 md:px-12 max-w-7xl mx-auto overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Image Side (Reveals Left-to-Right) -->
            <div class="lg:col-span-5 relative reveal-from-left">
                <div class="relative rounded-sm overflow-hidden border border-saltora-border shadow-xl group cursor-pointer">
                    <img src="/aboutimg.jpg" alt="Hands holding authentic Pakistani pink salt" class="w-full h-[450px] object-cover transition-transform duration-700 group-hover:scale-105">
                    
                    <!-- Floating Dark Box -->
                    <div class="absolute bottom-4 right-4 bg-saltora-dark text-white p-5 max-w-[240px] border border-saltora-dark-border shadow-2xl">
                        <h4 class="font-serif text-lg font-normal text-amber-100 mb-1">B2B First</h4>
                        <p class="text-xs text-stone-300 font-light leading-relaxed">
                            Importers · Wholesalers · Manufacturers · Private Label
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Text Content (Reveals Right-to-Left) -->
            <div class="lg:col-span-7 space-y-6 reveal-from-right">
                <div class="text-xs font-bold tracking-mega text-saltora-terracotta uppercase">
                    ABOUT SALTORA
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-saltora-text leading-[1.15] font-normal">
                    A Pakistani export house built around one exceptional mineral
                </h2>

                <p class="text-saltora-muted text-base leading-relaxed font-light">
                    SALTORA is a professional Himalayan pink salt export business based in Pakistan — the origin of the world's true Himalayan salt. We focus on authentic sourcing, quality-conscious processing and export-ready supply, so international buyers can build reliable, long-term salt programs with confidence.
                </p>

                <!-- Bulleted Checklist with Dividers -->
                <div class="space-y-4 pt-2 border-t border-saltora-border/70">
                    <div class="py-2.5 border-b border-saltora-border/50 flex items-start gap-3">
                        <svg class="w-4 h-4 text-saltora-terracotta mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <p class="text-xs sm:text-sm font-medium text-saltora-text">Authentic Pakistani Himalayan pink salt, responsibly sourced</p>
                    </div>
                    <div class="py-2.5 border-b border-saltora-border/50 flex items-start gap-3">
                        <svg class="w-4 h-4 text-saltora-terracotta mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <p class="text-xs sm:text-sm font-medium text-saltora-text">Quality-focused processing and export preparation</p>
                    </div>
                    <div class="py-2.5 border-b border-saltora-border/50 flex items-start gap-3">
                        <svg class="w-4 h-4 text-saltora-terracotta mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <p class="text-xs sm:text-sm font-medium text-saltora-text">Export-ready formats – bulk, food-grade and retail</p>
                    </div>
                    <div class="py-2.5 border-b border-saltora-border/50 flex items-start gap-3">
                        <svg class="w-4 h-4 text-saltora-terracotta mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <p class="text-xs sm:text-sm font-medium text-saltora-text">Long-term partnership approach for international buyers</p>
                    </div>
                </div>

                <!-- Link Button -->
                <div class="pt-4">
                    <a href="/about" class="inline-flex items-center gap-2 text-xs font-bold tracking-widest text-saltora-text uppercase border-b border-saltora-text pb-1 hover:text-saltora-terracotta hover:border-saltora-terracotta transition-colors cursor-pointer group">
                        <span>MORE ABOUT SALTORA</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- PRODUCTS SECTION -->
    <section id="products" class="py-20 bg-[#F4EAE1]/30 border-y border-saltora-border/60 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            
            <!-- Section Header (Reveals Top-to-Bottom) -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12 reveal-from-top">
                <div class="max-w-2xl space-y-3">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-saltora-text leading-tight">
                        Himalayan pink salt, graded for every buyer
                    </h2>
                    <p class="text-saltora-muted text-sm sm:text-base font-light">
                        From fine table salt to raw rock chunks — realistic, export-ready categories prepared to buyer specifications.
                    </p>
                </div>

                <div>
                    <a href="/products" class="inline-flex items-center gap-2 border border-saltora-text/40 hover:border-saltora-text px-6 py-3 text-xs font-bold tracking-wider uppercase transition-colors cursor-pointer group">
                        <span>VIEW ALL PRODUCTS</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- 4 Product Cards Grid with Dual Buttons & Smooth Bottom Reveal -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Product 1 -->
                <div class="bg-saltora-bg border border-saltora-border p-5 rounded-sm flex flex-col justify-between card-hover-effect group reveal-from-bottom stagger-1">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card cursor-pointer" @click="openQuickView({name: 'Himalayan Pink Salt', img: '/product1.jpg', tags: ['EDIBLE / FOOD GRADE', 'RETAIL & BULK'], desc: 'Authentic Pakistani Himalayan pink salt in its natural, mineral-rich form — the core of the Saltora range for food and retail buyers.', specs: {grade: 'Food Grade Natural', grain: 'Mixed / Natural', purity: '98.5%+ NaCl', origin: 'Salt Range, Pakistan'}})">
                            <img src="/product1.jpg" alt="Himalayan Pink Salt Raw" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1">
                            Himalayan Pink Salt
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Authentic Pakistani Himalayan pink salt in its natural, mineral-rich form — the core of the Saltora range for food and retail buyers.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-white">EDIBLE / FOOD GRADE</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-white">RETAIL & BULK</span>
                        </div>
                    </div>

                    <!-- Dual Action Buttons -->
                    <div class="pt-6 border-t border-saltora-border/60 mt-6 space-y-2">
                        <button @click="addToCart('Himalayan Pink Salt')" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer shadow-sm hover:shadow">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                            <span>ADD TO CART</span>
                        </button>
                        <button @click="openQuickView({name: 'Himalayan Pink Salt', img: '/product1.jpg', tags: ['EDIBLE / FOOD GRADE', 'RETAIL & BULK'], desc: 'Authentic Pakistani Himalayan pink salt in its natural, mineral-rich form — the core of the Saltora range for food and retail buyers.', specs: {grade: 'Food Grade Natural', grain: 'Mixed / Natural', purity: '98.5%+ NaCl', origin: 'Salt Range, Pakistan'}})" class="w-full border border-saltora-text/30 hover:border-saltora-text bg-white text-saltora-text py-2 text-xs font-bold tracking-wider uppercase transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer">
                            <svg class="w-3.5 h-3.5 text-saltora-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <span>VIEW DETAILS</span>
                        </button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-saltora-bg border border-saltora-border p-5 rounded-sm flex flex-col justify-between card-hover-effect group reveal-from-bottom stagger-2">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card cursor-pointer" @click="openQuickView({name: 'Fine Himalayan Pink Salt', img: '/product2.jpg', tags: ['FINE GRAIN', 'TABLE & MANUFACTURING'], desc: 'Finely milled pink salt with a smooth, even texture — suited to table salt, food manufacturing, seasoning blends and food-service use.', specs: {grade: 'Fine Table Grade', grain: '0.2mm – 0.8mm', purity: '98.8%+ NaCl', origin: 'Salt Range, Pakistan'}})">
                            <img src="/product2.jpg" alt="Fine Himalayan Pink Salt" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1">
                            Fine Himalayan Pink Salt
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Finely milled pink salt with a smooth, even texture — suited to table salt, food manufacturing, seasoning blends and food-service use.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-white">FINE GRAIN</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-white">TABLE & MANUFACTURING</span>
                        </div>
                    </div>

                    <!-- Dual Action Buttons -->
                    <div class="pt-6 border-t border-saltora-border/60 mt-6 space-y-2">
                        <button @click="addToCart('Fine Himalayan Pink Salt')" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer shadow-sm hover:shadow">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                            <span>ADD TO CART</span>
                        </button>
                        <button @click="openQuickView({name: 'Fine Himalayan Pink Salt', img: '/product2.jpg', tags: ['FINE GRAIN', 'TABLE & MANUFACTURING'], desc: 'Finely milled pink salt with a smooth, even texture — suited to table salt, food manufacturing, seasoning blends and food-service use.', specs: {grade: 'Fine Table Grade', grain: '0.2mm – 0.8mm', purity: '98.8%+ NaCl', origin: 'Salt Range, Pakistan'}})" class="w-full border border-saltora-text/30 hover:border-saltora-text bg-white text-saltora-text py-2 text-xs font-bold tracking-wider uppercase transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer">
                            <svg class="w-3.5 h-3.5 text-saltora-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <span>VIEW DETAILS</span>
                        </button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-saltora-bg border border-saltora-border p-5 rounded-sm flex flex-col justify-between card-hover-effect group reveal-from-bottom stagger-3">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card cursor-pointer" @click="openQuickView({name: 'Coarse Himalayan Pink Salt', img: '/product3.jpg', tags: ['COARSE GRAIN', 'GRINDERS & GOURMET'], desc: 'Coarse, sparkling pink salt crystals for grinders, gourmet retail, food processing and culinary applications.', specs: {grade: 'Coarse Grinder Grade', grain: '2.0mm – 5.0mm', purity: '98.6%+ NaCl', origin: 'Salt Range, Pakistan'}})">
                            <img src="/product3.jpg" alt="Coarse Himalayan Pink Salt" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1">
                            Coarse Himalayan Pink Salt
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Coarse, sparkling pink salt crystals for grinders, gourmet retail, food processing and culinary applications.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-white">COARSE GRAIN</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-white">GRINDERS & GOURMET</span>
                        </div>
                    </div>

                    <!-- Dual Action Buttons -->
                    <div class="pt-6 border-t border-saltora-border/60 mt-6 space-y-2">
                        <button @click="addToCart('Coarse Himalayan Pink Salt')" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer shadow-sm hover:shadow">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                            <span>ADD TO CART</span>
                        </button>
                        <button @click="openQuickView({name: 'Coarse Himalayan Pink Salt', img: '/product3.jpg', tags: ['COARSE GRAIN', 'GRINDERS & GOURMET'], desc: 'Coarse, sparkling pink salt crystals for grinders, gourmet retail, food processing and culinary applications.', specs: {grade: 'Coarse Grinder Grade', grain: '2.0mm – 5.0mm', purity: '98.6%+ NaCl', origin: 'Salt Range, Pakistan'}})" class="w-full border border-saltora-text/30 hover:border-saltora-text bg-white text-saltora-text py-2 text-xs font-bold tracking-wider uppercase transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer">
                            <svg class="w-3.5 h-3.5 text-saltora-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <span>VIEW DETAILS</span>
                        </button>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-saltora-bg border border-saltora-border p-5 rounded-sm flex flex-col justify-between card-hover-effect group reveal-from-bottom stagger-4">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card cursor-pointer" @click="openQuickView({name: 'Himalayan Salt Granules', img: '/product4.jpg', tags: ['GRANULATED', 'FOOD & WELLNESS'], desc: 'Uniform mid-size pink salt granules for food production, bath and wellness products, and further processing by manufacturers.', specs: {grade: 'Granulated Grade', grain: '1.0mm – 3.0mm', purity: '98.7%+ NaCl', origin: 'Salt Range, Pakistan'}})">
                            <img src="/product4.jpg" alt="Himalayan Salt Granules" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1">
                            Himalayan Salt Granules
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Uniform mid-size pink salt granules for food production, bath and wellness products, and further processing by manufacturers.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-white">GRANULATED</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-white">FOOD & WELLNESS</span>
                        </div>
                    </div>

                    <!-- Dual Action Buttons -->
                    <div class="pt-6 border-t border-saltora-border/60 mt-6 space-y-2">
                        <button @click="addToCart('Himalayan Salt Granules')" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer shadow-sm hover:shadow">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                            <span>ADD TO CART</span>
                        </button>
                        <button @click="openQuickView({name: 'Himalayan Salt Granules', img: '/product4.jpg', tags: ['GRANULATED', 'FOOD & WELLNESS'], desc: 'Uniform mid-size pink salt granules for food production, bath and wellness products, and further processing by manufacturers.', specs: {grade: 'Granulated Grade', grain: '1.0mm – 3.0mm', purity: '98.7%+ NaCl', origin: 'Salt Range, Pakistan'}})" class="w-full border border-saltora-text/30 hover:border-saltora-text bg-white text-saltora-text py-2 text-xs font-bold tracking-wider uppercase transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer">
                            <svg class="w-3.5 h-3.5 text-saltora-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <span>VIEW DETAILS</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- WHY CHOOSE SALTORA SECTION -->
    <section id="why-us" class="py-20 md:py-28 px-6 md:px-12 max-w-7xl mx-auto overflow-hidden">
        <!-- Header (Reveals Top-to-Bottom) -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-16 reveal-from-top">
            <span class="text-xs font-bold tracking-mega text-saltora-terracotta uppercase">WHY CHOOSE SALTORA</span>
            <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                Serious about salt. Serious about buyers.
            </h2>
        </div>

        <!-- 6 Feature Grid with Multi-Directional Entry -->
        <div class="grid grid-cols-1 md:grid-cols-3 border border-saltora-border border-collapse bg-saltora-bg">
            
            <!-- Box 01 (From Left) -->
            <div class="p-8 sm:p-10 space-y-4 hover:bg-white transition-colors border-b md:border-b-0 md:border-r border-saltora-border cursor-pointer group reveal-from-left stagger-1">
                <span class="font-serif text-3xl font-light text-saltora-muted/60 block group-hover:text-saltora-terracotta transition-colors">01</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Authentic Pakistani Origin</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Premium Himalayan pink salt sourced from Pakistan — the true home of Himalayan salt, drawn from the historic Salt Range region.
                </p>
            </div>

            <!-- Box 02 (Highlighted with Blush background, Scale reveal) -->
            <div class="p-8 sm:p-10 space-y-4 bg-[#F5EAE6] border-b md:border-b-0 md:border-r border-saltora-border cursor-pointer group reveal-scale stagger-2">
                <span class="font-serif text-3xl font-light text-saltora-terracotta block">02</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Quality Focused</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Quality-conscious sourcing, careful handling and disciplined export preparation at every stage, from trial selection to shipment.
                </p>
            </div>

            <!-- Box 03 (From Right) -->
            <div class="p-8 sm:p-10 space-y-4 hover:bg-white transition-colors border-b md:border-b-0 border-saltora-border cursor-pointer group reveal-from-right stagger-3">
                <span class="font-serif text-3xl font-light text-saltora-muted/60 block group-hover:text-saltora-terracotta transition-colors">03</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Bulk Supply</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Practical supply solutions for wholesalers, distributors, food businesses and industrial buyers — from trial orders to volume programs.
                </p>
            </div>

            <!-- Box 04 (From Left) -->
            <div class="p-8 sm:p-10 space-y-4 border-t md:border-r border-saltora-border hover:bg-white transition-colors cursor-pointer group reveal-from-left stagger-4">
                <span class="font-serif text-3xl font-light text-saltora-muted/60 block group-hover:text-saltora-terracotta transition-colors">04</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Export Support</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Professional documentation and shipment coordination so international buyers receive a smooth, transparent export process.
                </p>
            </div>

            <!-- Box 05 (Scale reveal) -->
            <div class="p-8 sm:p-10 space-y-4 border-t md:border-r border-saltora-border hover:bg-white transition-colors cursor-pointer group reveal-scale stagger-5">
                <span class="font-serif text-3xl font-light text-saltora-muted/60 block group-hover:text-saltora-terracotta transition-colors">05</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Flexible Packaging</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Packaging options aligned with buyer requirements — bulk, food-grade and retail-ready formats discussed per product specification.
                </p>
            </div>

            <!-- Box 06 (From Right) -->
            <div class="p-8 sm:p-10 space-y-4 border-t border-saltora-border hover:bg-white transition-colors cursor-pointer group reveal-from-right stagger-6">
                <span class="font-serif text-3xl font-light text-saltora-muted/60 block group-hover:text-saltora-terracotta transition-colors">06</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Long-Term Partnerships</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Saltora is built around reliable, long-term international business relationships — not one-time transactions.
                </p>
            </div>

        </div>
    </section>

    <!-- SECTION 1: SOURCING, MANUFACTURING & SUPPLY (DARK MODE) -->
    <section id="sourcing" class="bg-gradient-to-b from-[#1E1917] via-[#151210] to-[#1E1917] text-white py-20 md:py-28 px-6 md:px-12 border-t border-stone-800 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- Left Text Process Steps (Reveals Left-to-Right) -->
                <div class="lg:col-span-6 space-y-6 reveal-on-scroll reveal-from-left">
                    <div class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">
                        FROM MINE TO MARKET
                    </div>

                    <h2 class="text-3xl sm:text-5xl font-serif text-white font-normal leading-[1.12]">
                        Sourcing, manufacturing & supply — one disciplined process
                    </h2>

                    <p class="text-stone-400 text-sm sm:text-base font-light leading-relaxed">
                        B2B buyers see exactly how their salt moves: sourced in the Pakistani Salt Range, processed and graded to specification, checked, packed and exported under clear FOB terms.
                    </p>

                    <!-- Process Steps -->
                    <div class="space-y-6 pt-4 border-t border-stone-800">
                        
                        <div class="py-4 border-b border-stone-800/80 flex items-start gap-6 cursor-pointer group">
                            <span class="font-serif text-2xl font-normal text-stone-400 group-hover:text-saltora-terracotta transition-colors shrink-0">01</span>
                            <div class="space-y-1">
                                <h4 class="font-serif text-xl text-white font-normal group-hover:text-amber-100 transition-colors">Sourcing</h4>
                                <p class="text-xs text-stone-400 font-light leading-relaxed">Natural rock salt is sourced from the Himalayan salt ranges of Pakistan, selected for colour, purity and mineral character.</p>
                            </div>
                        </div>

                        <div class="py-4 border-b border-stone-800/80 flex items-start gap-6 cursor-pointer group">
                            <span class="font-serif text-2xl font-normal text-stone-400 group-hover:text-saltora-terracotta transition-colors shrink-0">02</span>
                            <div class="space-y-1">
                                <h4 class="font-serif text-xl text-white font-normal group-hover:text-amber-100 transition-colors">Processing</h4>
                                <p class="text-xs text-stone-400 font-light leading-relaxed">Salt is cleaned, crushed and graded into buyer-ready formats — fine, coarse, granules or raw chunks — under quality-conscious handling.</p>
                            </div>
                        </div>

                        <div class="py-4 border-b border-stone-800/80 flex items-start gap-6 cursor-pointer group">
                            <span class="font-serif text-2xl font-normal text-stone-400 group-hover:text-saltora-terracotta transition-colors shrink-0">03</span>
                            <div class="space-y-1">
                                <h4 class="font-serif text-xl text-white font-normal group-hover:text-amber-100 transition-colors">Quality Check</h4>
                                <p class="text-xs text-stone-400 font-light leading-relaxed">Each lot is reviewed for cleanliness, grain consistency and food-safety discipline before it moves to packing.</p>
                            </div>
                        </div>

                        <div class="py-4 flex items-start gap-6 cursor-pointer group">
                            <span class="font-serif text-2xl font-normal text-stone-400 group-hover:text-saltora-terracotta transition-colors shrink-0">04</span>
                            <div class="space-y-1">
                                <h4 class="font-serif text-xl text-white font-normal group-hover:text-amber-100 transition-colors">Packing & Export</h4>
                                <p class="text-xs text-stone-400 font-light leading-relaxed">Products are packed to agreed specifications, documented, and prepared for international shipment under FOB terms.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Mine Image (Reveals Right-to-Left) -->
                <div class="lg:col-span-6 relative reveal-on-scroll reveal-from-right">
                    <div class="relative rounded-sm overflow-hidden border border-stone-800 shadow-2xl group cursor-pointer">
                        <img src="/sourcingsec.jpg" alt="The Salt Range Pakistan Mine Tunnel" class="w-full h-[540px] object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-6 left-6 text-white z-10">
                            <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase block mb-1">ORIGIN</span>
                            <h4 class="font-serif text-2xl sm:text-3xl font-normal text-white">The Salt Range, Pakistan</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION 2: INDUSTRIES WE SERVE -->
    <section id="industries" class="py-20 md:py-28 px-6 md:px-12 bg-saltora-bg overflow-hidden">
        <div class="max-w-7xl mx-auto space-y-12">
            
            <div class="space-y-3 max-w-3xl reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">INDUSTRIES WE SERVE</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    One mineral, many markets
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    Saltora works with buyers across the food, retail, wellness and industrial spectrum.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 border-t border-saltora-border/80">
                
                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-left stagger-1">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">01</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Food & Beverage</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Ingredient and finishing salt for packaged food brands</p>
                        </div>
                    </div>
                    <svg class="w-4 h-4 text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-right stagger-2">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">02</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Food Manufacturing</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Consistent grain formats for production lines</p>
                        </div>
                    </div>
                    <svg class="w-4 h-4 text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-left stagger-3">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">03</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Restaurants & Food Service</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Culinary and table salt programs</p>
                        </div>
                    </div>
                    <svg class="w-4 h-4 text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-right stagger-4">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">04</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Wholesale & Distribution</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Volume supply for regional distributors</p>
                        </div>
                    </div>
                    <svg class="w-4 h-4 text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-left stagger-5">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">05</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Retail Brands</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Shelf-ready formats for retail shelves</p>
                        </div>
                    </div>
                    <svg class="w-4 h-4 text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-right stagger-6">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">06</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Private Label</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Your brand, our salt — export ready</p>
                        </div>
                    </div>
                    <svg class="w-4 h-4 text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-left">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">07</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Wellness & Bath Products</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Salt for spa, bath and wellness lines</p>
                        </div>
                    </div>
                    <svg class="w-4 h-4 text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-right">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">08</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Industrial Applications</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Bulk salt for industrial buyers</p>
                        </div>
                    </div>
                    <svg class="w-4 h-4 text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION 3: QUALITY & CERTIFICATIONS -->
    <section id="certifications" class="bg-[#F5EAE6] py-16 md:py-24 px-6 md:px-12 border-y border-saltora-terracotta/20 overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-12">
            
            <div class="space-y-4 max-w-lg reveal-from-left">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">QUALITY & CERTIFICATIONS</span>
                <h2 class="text-3xl sm:text-4xl font-serif text-saltora-text font-normal leading-tight">
                    Recognised standards, verifiable registration
                </h2>
                <div class="pt-2">
                    <a href="/certifications" class="inline-flex items-center gap-2 text-xs font-bold tracking-widest text-saltora-text uppercase border-b border-saltora-text pb-1 hover:text-saltora-terracotta hover:border-saltora-terracotta transition-colors cursor-pointer group">
                        <span>VIEW CERTIFICATIONS</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right 4 Circular Seal Badges (Reveals via Scale) -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 sm:gap-8 items-center reveal-scale">
                <div class="w-36 h-36 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/60 shadow-sm relative group hover:border-saltora-terracotta transition-colors cursor-pointer">
                    <span class="text-[8px] tracking-widest text-saltora-muted uppercase block font-semibold mb-1">SALTORA · PAKISTAN</span>
                    <span class="font-serif text-sm font-bold text-saltora-text leading-tight">ISO 22000:2018</span>
                    <span class="text-[8px] font-bold tracking-widest text-saltora-terracotta uppercase mt-1">CERTIFIED</span>
                </div>

                <div class="w-36 h-36 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/60 shadow-sm relative group hover:border-saltora-terracotta transition-colors cursor-pointer">
                    <span class="text-[8px] tracking-widest text-saltora-muted uppercase block font-semibold mb-1">SALTORA · PAKISTAN</span>
                    <span class="font-serif text-base font-bold text-saltora-text leading-tight">Halal</span>
                    <span class="text-[8px] font-bold tracking-widest text-saltora-terracotta uppercase mt-1">CERTIFIED</span>
                </div>

                <div class="w-36 h-36 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/60 shadow-sm relative group hover:border-saltora-terracotta transition-colors cursor-pointer">
                    <span class="text-[8px] tracking-widest text-saltora-muted uppercase block font-semibold mb-1">SALTORA · PAKISTAN</span>
                    <span class="font-serif text-xs font-bold text-saltora-text leading-tight">Codex CXS<br>150:1985</span>
                    <span class="text-[8px] font-bold tracking-widest text-saltora-terracotta uppercase mt-1">CERTIFIED</span>
                </div>

                <div class="w-36 h-36 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/60 shadow-sm relative group hover:border-saltora-terracotta transition-colors cursor-pointer">
                    <span class="text-[8px] tracking-widest text-saltora-muted uppercase block font-semibold mb-1">SALTORA · PAKISTAN</span>
                    <span class="font-serif text-xs font-bold text-saltora-text leading-tight">Chamber of<br>Commerce &<br>Industry</span>
                    <span class="text-[8px] font-bold tracking-widest text-saltora-terracotta uppercase mt-0.5">REGISTERED</span>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION 4: GLOBAL EXPORT MAP -->
    <section class="bg-[#181513] text-white py-24 px-6 md:px-12 relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px] opacity-10 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto text-center space-y-4 relative z-10 reveal-from-top">
            <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">GLOBAL EXPORT</span>
            
            <h2 class="text-3xl sm:text-5xl font-serif text-white font-normal max-w-4xl mx-auto leading-tight">
                Supplying Pakistani Himalayan pink salt to global markets
            </h2>
            
            <p class="text-stone-400 text-sm sm:text-base font-light max-w-2xl mx-auto leading-relaxed">
                From Pakistan's Salt Range to destination ports worldwide — Saltora is building its export footprint across every major region, one reliable partnership at a time.
            </p>

            <div class="relative mt-16 max-w-4xl mx-auto h-[360px] sm:h-[420px] flex items-center justify-center reveal-scale">
                <div class="absolute z-20 flex flex-col items-center cursor-pointer">
                    <div class="relative flex items-center justify-center">
                        <span class="animate-ping absolute inline-flex h-12 w-12 rounded-full bg-saltora-terracotta opacity-40"></span>
                        <div class="w-8 h-8 rounded-full bg-saltora-terracotta border-2 border-white flex items-center justify-center shadow-lg">
                            <div class="w-2.5 h-2.5 rounded-full bg-white"></div>
                        </div>
                    </div>
                    <span class="text-xs font-bold tracking-widest text-white uppercase mt-2">PAKISTAN</span>
                </div>

                <svg class="absolute inset-0 w-full h-full pointer-events-none stroke-saltora-terracotta/40" fill="none">
                    <path d="M 500 210 Q 300 120 220 120" stroke-dasharray="4 4" stroke-width="1.5" />
                    <path d="M 500 210 Q 280 200 120 260" stroke-dasharray="4 4" stroke-width="1.5" />
                    <path d="M 500 210 Q 450 260 440 280" stroke-dasharray="4 4" stroke-width="1.5" />
                    <path d="M 500 210 Q 420 320 380 340" stroke-dasharray="4 4" stroke-width="1.5" />
                    <path d="M 500 210 Q 640 100 720 80" stroke-dasharray="4 4" stroke-width="1.5" />
                    <path d="M 500 210 Q 700 260 800 320" stroke-dasharray="4 4" stroke-width="1.5" />
                </svg>

                <div class="absolute top-[22%] left-[18%] z-10 flex flex-col items-center group cursor-pointer">
                    <div class="w-3.5 h-3.5 rounded-full bg-amber-200/80 border border-white group-hover:scale-125 transition-transform"></div>
                    <span class="text-[10px] font-bold tracking-widest text-stone-300 uppercase mt-1">EUROPE</span>
                </div>

                <div class="absolute bottom-[28%] left-[8%] z-10 flex flex-col items-center group cursor-pointer">
                    <div class="w-3.5 h-3.5 rounded-full bg-amber-200/80 border border-white group-hover:scale-125 transition-transform"></div>
                    <span class="text-[10px] font-bold tracking-widest text-stone-300 uppercase mt-1">NORTH AMERICA</span>
                </div>

                <div class="absolute bottom-[22%] left-[42%] z-10 flex flex-col items-center group cursor-pointer">
                    <div class="w-3.5 h-3.5 rounded-full bg-amber-200/80 border border-white group-hover:scale-125 transition-transform"></div>
                    <span class="text-[10px] font-bold tracking-widest text-stone-300 uppercase mt-1">MIDDLE EAST</span>
                </div>

                <div class="absolute bottom-[10%] left-[34%] z-10 flex flex-col items-center group cursor-pointer">
                    <div class="w-3.5 h-3.5 rounded-full bg-amber-200/80 border border-white group-hover:scale-125 transition-transform"></div>
                    <span class="text-[10px] font-bold tracking-widest text-stone-300 uppercase mt-1">AFRICA</span>
                </div>

                <div class="absolute top-[12%] right-[18%] z-10 flex flex-col items-center group cursor-pointer">
                    <div class="w-3.5 h-3.5 rounded-full bg-amber-200/80 border border-white group-hover:scale-125 transition-transform"></div>
                    <span class="text-[10px] font-bold tracking-widest text-stone-300 uppercase mt-1">EAST ASIA</span>
                </div>

                <div class="absolute bottom-[15%] right-[10%] z-10 flex flex-col items-center group cursor-pointer">
                    <div class="w-3.5 h-3.5 rounded-full bg-amber-200/80 border border-white group-hover:scale-125 transition-transform"></div>
                    <span class="text-[10px] font-bold tracking-widest text-stone-300 uppercase mt-1">ASIA-PACIFIC</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: BOTTOM CTA HERO BANNER -->
    <section class="relative bg-[#141211] py-24 px-6 text-center text-white overflow-hidden">
        <img src="/heroimg.jpg" alt="Salt crystal backdrop" class="absolute inset-0 w-full h-full object-cover opacity-25 filter blur-xs pointer-events-none">
        <div class="absolute inset-0 bg-gradient-to-t from-[#141211] via-[#141211]/80 to-[#141211] pointer-events-none"></div>

        <div class="relative z-10 max-w-3xl mx-auto space-y-6 reveal-from-bottom">
            <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase block">START SOURCING</span>
            
            <h2 class="text-4xl sm:text-6xl font-serif text-white font-normal leading-tight">
                Ready to source premium Himalayan pink salt?
            </h2>
            
            <p class="text-stone-300 text-sm sm:text-base font-light max-w-xl mx-auto leading-relaxed">
                Send your specifications and receive a professional quotation — with clear FOB terms and export support from Pakistan.
            </p>
            
            <div class="flex flex-wrap items-center justify-center gap-4 pt-4">
                <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-9 py-4 text-xs font-bold tracking-wider uppercase transition-all shadow-lg flex items-center gap-3 group cursor-pointer">
                    <span>REQUEST A QUOTE</span>
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
                <a href="/contact" class="border border-white/40 hover:border-white text-white px-8 py-4 text-xs font-bold tracking-wider uppercase transition-colors cursor-pointer">
                    CONTACT SALTORA
                </a>
            </div>
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <footer id="contact" class="bg-[#181513] text-stone-400 py-16 px-6 md:px-12 border-t border-stone-800 text-xs">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
            
            <div class="lg:col-span-2 space-y-4">
                <div class="flex items-center gap-3">
                    <img src="/logo.png" alt="SALTORA Logo" class="h-8 w-auto filter invert brightness-200" onerror="this.onerror=null; this.classList.add('hidden');">
                    <span class="font-serif text-2xl font-bold tracking-wider text-white">SALTORA</span>
                </div>
                <p class="text-stone-400 leading-relaxed max-w-sm font-light">
                    SALTORA is a premier Himalayan pink salt export house based in Pakistan. We specialize in B2B supply, OEM private labeling, and bulk export to international markets.
                </p>
                <div class="text-[11px] text-stone-500 font-medium">
                    Origin: Salt Range, Punjab, Pakistan
                </div>
            </div>

            <div class="space-y-3">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">Quick Navigation</h4>
                <ul class="space-y-2 text-stone-400 font-light">
                    <li><a href="/" class="hover:text-white transition-colors cursor-pointer">Home</a></li>
                    <li><a href="/about" class="hover:text-white transition-colors cursor-pointer">About Saltora</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors cursor-pointer">Pink Salt Range</a></li>
                    <li><a href="/certifications" class="hover:text-white transition-colors cursor-pointer">Certifications & ISO</a></li>
                    <li><a href="/export-logistics" class="hover:text-white transition-colors cursor-pointer">Integrated Value Chain</a></li>
                    <li><a href="/contact" class="hover:text-white transition-colors cursor-pointer">Contact Us</a></li>
                </ul>
            </div>

            <div class="space-y-3">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">Product Categories</h4>
                <ul class="space-y-2 text-stone-400 font-light">
                    <li><a href="/products" class="hover:text-white transition-colors cursor-pointer">Fine Table Pink Salt</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors cursor-pointer">Coarse Grinder Salt</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors cursor-pointer">Himalayan Salt Granules</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors cursor-pointer">Animal Salt Lick Blocks</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors cursor-pointer">Raw Rock Salt Lumps</a></li>
                </ul>
            </div>

            <div class="space-y-3">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">Export Contact</h4>
                <div class="space-y-2 text-stone-400 font-light">
                    <p class="text-white font-medium">Head Office & Export Desk</p>
                    <p>Salt Range Region / Lahore, Pakistan</p>
                    <p class="pt-1 flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-saltora-terracotta shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:saltora1329@gmail.com" class="hover:text-white transition-colors cursor-pointer">saltora1329@gmail.com</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-saltora-terracotta shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="https://wa.me/923180735748" class="hover:text-white transition-colors cursor-pointer">+92 318 0735748</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-saltora-terracotta shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/>
                        </svg>
                        <span>Port Qasim / Karachi Port</span>
                    </p>
                </div>
            </div>

        </div>

        <div class="max-w-7xl mx-auto pt-12 mt-12 border-t border-stone-900 flex flex-col sm:flex-row items-center justify-between text-stone-500 text-[11px] gap-4">
            <p>© 2026 SALTORA Himalayan Pink Salt Exporter. All Rights Reserved.</p>
            <div class="flex items-center space-x-6">
                <a href="/sitemap" class="text-amber-200/90 hover:text-amber-100 cursor-pointer">HTML Sitemap</a>
                <a href="/sitemap.xml" target="_blank" class="text-amber-200/90 hover:text-amber-100 cursor-pointer">XML Sitemap</a>
                <a href="/admin/login" class="hover:text-stone-300 cursor-pointer">Admin Login</a>
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
                                <button @click="addToCart(selectedProduct.name); closeQuickView()" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center justify-center gap-2 cursor-pointer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                                    </svg>
                                    <span>ADD TO SHOPPING CART</span>
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
            <h5 class="text-xs font-bold uppercase tracking-wider text-amber-100">ADDED TO SHOPPING CART</h5>
            <p class="text-xs text-stone-300 font-light" x-text="toastMessage"></p>
        </div>
        <button @click="cartToastOpen = false" class="text-stone-400 hover:text-white ml-3 cursor-pointer">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- RIGHT SLIDE-OVER SHOPPING CART SIDEBAR DRAWER -->
    <div x-show="cartSidebarOpen" class="fixed inset-0 z-50 overflow-hidden" x-cloak>
        <!-- Backdrop -->
        <div x-show="cartSidebarOpen" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/60 backdrop-blur-xs transition-opacity" @click="closeCartSidebar()"></div>

        <div class="fixed inset-y-0 right-0 max-w-full flex pl-10">
            <div x-show="cartSidebarOpen" x-transition:enter="transform transition ease-in-out duration-300 sm:duration-400" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-300 sm:duration-400" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" class="w-screen max-w-md bg-white border-l border-stone-200 text-stone-900 shadow-2xl flex flex-col justify-between">
                
                <!-- Drawer Header -->
                <div class="p-6 bg-stone-900 text-white flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-saltora-terracotta" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                        <h3 class="font-serif text-lg font-bold text-white" x-text="checkoutStep ? 'Export Order Checkout' : 'Shopping Cart & Orders'"></h3>
                    </div>
                    <button @click="closeCartSidebar()" class="text-stone-400 hover:text-white cursor-pointer"><i class="fa-solid fa-xmark text-lg"></i></button>
                </div>

                <!-- Drawer Content Area -->
                <div class="p-6 flex-1 overflow-y-auto space-y-6">
                    
                    <!-- CART VIEW -->
                    <template x-if="!checkoutStep">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between text-xs text-stone-500 border-b border-stone-100 pb-2">
                                <span>ORDER LINE ITEMS (<span x-text="cart.length"></span>)</span>
                                <span>VOLUME (TONS)</span>
                            </div>

                            <template x-if="cart.length === 0">
                                <div class="text-center py-12 text-stone-400 space-y-3">
                                    <i class="fa-solid fa-cart-flatbed text-4xl text-stone-300"></i>
                                    <p class="text-xs">Your shopping cart is currently empty.</p>
                                    <button @click="closeCartSidebar()" class="px-4 py-2 bg-stone-900 text-white rounded-md text-xs font-bold uppercase tracking-wider">Browse Salt Range</button>
                                </div>
                            </template>

                            <div class="divide-y divide-stone-100 max-h-96 overflow-y-auto">
                                <template x-for="(item, index) in cart" :key="index">
                                    <div class="py-3 flex items-center justify-between text-xs">
                                        <div class="pr-2">
                                            <span class="font-bold text-stone-900 text-sm block" x-text="item.name"></span>
                                            <span class="text-[10px] text-stone-400 uppercase font-semibold" x-text="item.category"></span>
                                        </div>
                                        <div class="flex items-center gap-3 shrink-0">
                                            <div class="flex items-center border border-stone-200 rounded-lg overflow-hidden bg-stone-50">
                                                <button @click="updateQuantity(index, -5)" class="px-2.5 py-1 text-stone-600 hover:bg-stone-200 font-bold">-</button>
                                                <span class="px-2 font-mono font-bold text-stone-900 text-xs" x-text="item.quantity + ' Tons'"></span>
                                                <button @click="updateQuantity(index, 5)" class="px-2.5 py-1 text-stone-600 hover:bg-stone-200 font-bold">+</button>
                                            </div>
                                            <button @click="removeItem(index)" class="text-rose-500 hover:text-rose-700 p-1 cursor-pointer" title="Remove"><i class="fa-solid fa-trash-can"></i></button>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </template>

                    <!-- CHECKOUT FORM VIEW -->
                    <template x-if="checkoutStep">
                        <form @submit.prevent="submitOrder()" class="space-y-4 text-xs">
                            <div class="bg-stone-50 p-3 rounded-lg border border-stone-200 text-stone-700 flex items-center justify-between">
                                <span class="font-semibold">ORDER SUMMARY:</span>
                                <span class="font-bold font-mono text-[#e07a5f]" x-text="cart.length + ' Items | ' + totalTonnage + ' Tons'"></span>
                            </div>

                            <div>
                                <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Full Name *</label>
                                <input type="text" x-model="orderForm.full_name" required placeholder="John Doe" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-3.5 py-2.5 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            </div>

                            <div>
                                <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Company Name *</label>
                                <input type="text" x-model="orderForm.company_name" required placeholder="Global Foods Trading LLC" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-3.5 py-2.5 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            </div>

                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Business Email *</label>
                                    <input type="email" x-model="orderForm.email" required placeholder="buyer@company.com" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-3.5 py-2.5 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>
                                <div>
                                    <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Phone / WhatsApp *</label>
                                    <input type="tel" x-model="orderForm.phone" required placeholder="+1 234 567 8900" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-3.5 py-2.5 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Destination Country *</label>
                                    <input type="text" x-model="orderForm.destination_country" required placeholder="United States / Germany" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-3.5 py-2.5 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>
                                <div>
                                    <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Destination Port</label>
                                    <input type="text" x-model="orderForm.destination_port" placeholder="Port of Rotterdam / Hamburg" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-3.5 py-2.5 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>
                            </div>

                            <div>
                                <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Order Notes / Specifications</label>
                                <textarea x-model="orderForm.notes" rows="2" placeholder="Specify packaging details, bag size or special requirements..." class="w-full bg-stone-50 border border-stone-200 rounded-lg px-3.5 py-2.5 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]"></textarea>
                            </div>

                            <div class="pt-2 flex items-center justify-between gap-3">
                                <button type="button" @click="checkoutStep = false" class="px-4 py-2.5 border border-stone-200 rounded-xl text-stone-600 font-semibold hover:bg-stone-100">Back to Cart</button>
                                <button type="submit" :disabled="isSubmitting" class="flex-1 py-3 bg-[#e07a5f] hover:bg-stone-900 text-white font-bold text-xs rounded-xl shadow-lg transition-all uppercase tracking-wider">
                                    <span x-text="isSubmitting ? 'SUBMITTING ORDER...' : 'PLACE EXPORT ORDER NOW'"></span>
                                </button>
                            </div>
                        </form>
                    </template>

                </div>

                <!-- Drawer Footer -->
                <div class="p-6 bg-stone-50 border-t border-stone-200 space-y-3">
                    <template x-if="!checkoutStep">
                        <div>
                            <div class="flex items-center justify-between text-xs text-stone-600 font-semibold mb-3">
                                <span>TOTAL SHIPMENT VOLUME:</span>
                                <span class="font-mono font-bold text-base text-[#e07a5f]" x-text="totalTonnage + ' Metric Tons'"></span>
                            </div>
                            <button @click="proceedToCheckout()" :disabled="cart.length === 0" class="w-full py-3.5 bg-stone-900 hover:bg-black disabled:opacity-50 text-white font-bold text-xs rounded-xl shadow-md transition-all uppercase tracking-wider flex items-center justify-center gap-2 cursor-pointer">
                                <span>PROCEED TO ORDER CHECKOUT</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </template>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
