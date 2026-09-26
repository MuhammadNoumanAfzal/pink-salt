<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SALTORA — Premium Himalayan Pink Salt Exporter from Pakistan</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="SALTORA is a premier Himalayan pink salt exporter based in Pakistan, supplying B2B bulk, private label, fine, coarse, and industrial salt to global markets.">
    <meta name="keywords" content="Himalayan Pink Salt, Salt Exporter Pakistan, Bulk Pink Salt, Private Label Salt, Saltora, Salt Range Sourcing">
    
    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="{ mobileMenuOpen: false }">

    <!-- Single Sticky Navigation Header -->
    <header class="sticky top-0 z-40 bg-saltora-bg/95 backdrop-blur-md border-b border-saltora-border/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-10 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3 group">
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
                <a href="/about" class="hover:text-saltora-terracotta transition-colors">ABOUT</a>
                <a href="#products" class="hover:text-saltora-terracotta transition-colors">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors">CERTIFICATIONS</a>
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors">EXPORT & LOGISTICS</a>
                <a href="/contact" class="hover:text-saltora-terracotta transition-colors">CONTACT</a>
            </nav>

            <!-- Header Action Button -->
            <div class="hidden sm:flex items-center">
                <a href="/contact" class="bg-saltora-dark hover:bg-black text-white px-6 py-3 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2 group">
                    <span>REQUEST A QUOTE</span>
                    <span class="transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-saltora-text p-2 rounded-md focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileMenuOpen" x-cloak x-transition class="lg:hidden bg-saltora-bg border-b border-saltora-border px-6 py-6 space-y-4 text-xs font-semibold tracking-widest uppercase">
            <a @click="mobileMenuOpen = false" href="/about" class="block py-2 text-saltora-text hover:text-saltora-terracotta">ABOUT</a>
            <a @click="mobileMenuOpen = false" href="#products" class="block py-2 text-saltora-text hover:text-saltora-terracotta">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-text hover:text-saltora-terracotta">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta">CONTACT</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block w-full mt-4 bg-saltora-terracotta text-white py-3 text-center text-xs font-bold tracking-wider uppercase">
                REQUEST A QUOTE ↗
            </a>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="relative pt-10 pb-16 md:py-20 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Hero Content -->
            <div class="lg:col-span-7 space-y-8">
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
                    <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-8 py-4 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-md hover:shadow-lg flex items-center gap-3 group">
                        <span>REQUEST A QUOTE</span>
                        <span class="transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
                    </a>
                    <a href="#products" class="border border-saltora-text/30 hover:border-saltora-text hover:bg-saltora-card text-saltora-text px-8 py-4 text-xs font-bold tracking-wider uppercase transition-all duration-200">
                        EXPLORE PRODUCTS
                    </a>
                </div>
            </div>

            <!-- Right Hero Image with Floating Badges -->
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-sm overflow-hidden shadow-2xl bg-saltora-card border border-saltora-border group">
                    <img src="/heroimg.jpg" alt="Premium Himalayan Pink Salt Crystals" class="w-full h-[480px] sm:h-[560px] object-cover transition-transform duration-700 group-hover:scale-105">

                    <!-- Gradient Overlay on Image Bottom -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

                    <!-- Overlay Text Bottom Left -->
                    <div class="absolute bottom-6 left-6 text-white z-10">
                        <p class="font-serif italic text-xl sm:text-2xl font-normal drop-shadow-md">Pure · Natural · Premium</p>
                    </div>

                    <!-- Badge Top Left: CERTIFIED QUALITY -->
                    <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-md p-4 rounded-sm border border-saltora-border shadow-lg z-20 max-w-[200px]">
                        <span class="block text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase mb-1">CERTIFIED QUALITY</span>
                        <h4 class="font-serif text-sm font-bold text-saltora-text leading-snug">ISO 22000:2018</h4>
                        <p class="text-[11px] text-saltora-muted font-medium leading-tight">Halal · Codex CXS 150</p>
                    </div>

                    <!-- Badge Middle Right: BULK B2B -->
                    <div class="absolute top-1/2 -right-3 -translate-y-1/2 bg-saltora-blush/95 backdrop-blur-md px-4 py-2 border border-saltora-terracotta/20 shadow-md z-20">
                        <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase">BULK · B2B · PRIVATE LABEL</span>
                    </div>

                    <!-- Badge Bottom Right: EXPORT TERMS -->
                    <div class="absolute bottom-4 right-4 bg-saltora-dark/95 backdrop-blur-md p-4 rounded-sm border border-saltora-dark-border text-white shadow-xl z-20 max-w-[210px]">
                        <span class="block text-[10px] font-bold tracking-widest text-saltora-muted-light uppercase mb-1">EXPORT TERMS</span>
                        <h4 class="font-serif text-sm font-semibold text-white leading-snug">FOB — 50% Advance</h4>
                        <p class="text-[11px] text-gray-300 font-normal">50% on Bill of Lading</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- HORIZONTAL TICKER BAR -->
    <section class="border-y border-saltora-border bg-[#F0EAE1]/70 py-4 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-wrap items-center justify-between gap-y-3 text-xs font-semibold tracking-widest text-saltora-muted uppercase">
                <span class="flex items-center gap-2">
                    <span class="text-saltora-terracotta font-bold">◆</span> QUALITY FOCUSED
                </span>
                <span class="flex items-center gap-2">
                    <span class="text-saltora-terracotta font-bold">◆</span> INTERNATIONAL STANDARDS
                </span>
                <span class="flex items-center gap-2">
                    <span class="text-saltora-terracotta font-bold">◆</span> B2B SUPPLY
                </span>
                <span class="flex items-center gap-2">
                    <span class="text-saltora-terracotta font-bold">◆</span> PRIVATE LABEL
                </span>
                <span class="flex items-center gap-2">
                    <span class="text-saltora-terracotta font-bold">◆</span> CUSTOM PACKAGING
                </span>
                <span class="flex items-center gap-2">
                    <span class="text-saltora-terracotta font-bold">◆</span> FOB TERMS
                </span>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-20 md:py-28 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Image Side -->
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-sm overflow-hidden border border-saltora-border shadow-xl">
                    <img src="/aboutimg.jpg" alt="Hands holding authentic Pakistani pink salt" class="w-full h-[450px] object-cover">
                    
                    <!-- Floating Dark Box -->
                    <div class="absolute bottom-4 right-4 bg-saltora-dark text-white p-5 max-w-[240px] border border-saltora-dark-border shadow-2xl">
                        <h4 class="font-serif text-lg font-normal text-amber-100 mb-1">B2B First</h4>
                        <p class="text-xs text-stone-300 font-light leading-relaxed">
                            Importers · Wholesalers · Manufacturers · Private Label
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Text Content -->
            <div class="lg:col-span-7 space-y-6">
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
                        <span class="text-saltora-terracotta font-serif font-bold text-lg">—</span>
                        <p class="text-xs sm:text-sm font-medium text-saltora-text">Authentic Pakistani Himalayan pink salt, responsibly sourced</p>
                    </div>
                    <div class="py-2.5 border-b border-saltora-border/50 flex items-start gap-3">
                        <span class="text-saltora-terracotta font-serif font-bold text-lg">—</span>
                        <p class="text-xs sm:text-sm font-medium text-saltora-text">Quality-focused processing and export preparation</p>
                    </div>
                    <div class="py-2.5 border-b border-saltora-border/50 flex items-start gap-3">
                        <span class="text-saltora-terracotta font-serif font-bold text-lg">—</span>
                        <p class="text-xs sm:text-sm font-medium text-saltora-text">Export-ready formats – bulk, food-grade and retail</p>
                    </div>
                    <div class="py-2.5 border-b border-saltora-border/50 flex items-start gap-3">
                        <span class="text-saltora-terracotta font-serif font-bold text-lg">—</span>
                        <p class="text-xs sm:text-sm font-medium text-saltora-text">Long-term partnership approach for international buyers</p>
                    </div>
                </div>

                <!-- Link Button -->
                <div class="pt-4">
                    <a href="/about" class="inline-flex items-center gap-2 text-xs font-bold tracking-widest text-saltora-text uppercase border-b border-saltora-text pb-1 hover:text-saltora-terracotta hover:border-saltora-terracotta transition-colors">
                        <span>MORE ABOUT SALTORA</span>
                        <span>→</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- PRODUCTS SECTION -->
    <section id="products" class="py-20 bg-[#F4EAE1]/30 border-y border-saltora-border/60">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                <div class="max-w-2xl space-y-3">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-saltora-text leading-tight">
                        Himalayan pink salt, graded for every buyer
                    </h2>
                    <p class="text-saltora-muted text-sm sm:text-base font-light">
                        From fine table salt to raw rock chunks — realistic, export-ready categories prepared to buyer specifications.
                    </p>
                </div>

                <div>
                    <a href="#industries" class="inline-flex items-center gap-2 border border-saltora-text/40 hover:border-saltora-text px-6 py-3 text-xs font-bold tracking-wider uppercase transition-colors">
                        <span>ALL PRODUCTS</span>
                        <span>↗</span>
                    </a>
                </div>
            </div>

            <!-- 4 Product Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Product 1 -->
                <div class="bg-saltora-bg border border-saltora-border p-5 rounded-sm flex flex-col justify-between hover:shadow-lg transition-shadow duration-300 group">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card">
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

                    <div class="pt-6 border-t border-saltora-border/60 mt-6">
                        <a href="/contact" class="text-xs font-bold tracking-widest text-saltora-text uppercase flex items-center justify-between w-full group-hover:text-saltora-terracotta transition-colors">
                            <span>REQUEST QUOTE</span>
                            <span>↗</span>
                        </a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-saltora-bg border border-saltora-border p-5 rounded-sm flex flex-col justify-between hover:shadow-lg transition-shadow duration-300 group">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card">
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

                    <div class="pt-6 border-t border-saltora-border/60 mt-6">
                        <a href="/contact" class="text-xs font-bold tracking-widest text-saltora-text uppercase flex items-center justify-between w-full group-hover:text-saltora-terracotta transition-colors">
                            <span>REQUEST QUOTE</span>
                            <span>↗</span>
                        </a>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-saltora-bg border border-saltora-border p-5 rounded-sm flex flex-col justify-between hover:shadow-lg transition-shadow duration-300 group">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card">
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

                    <div class="pt-6 border-t border-saltora-border/60 mt-6">
                        <a href="/contact" class="text-xs font-bold tracking-widest text-saltora-text uppercase flex items-center justify-between w-full group-hover:text-saltora-terracotta transition-colors">
                            <span>REQUEST QUOTE</span>
                            <span>↗</span>
                        </a>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-saltora-bg border border-saltora-border p-5 rounded-sm flex flex-col justify-between hover:shadow-lg transition-shadow duration-300 group">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card">
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

                    <div class="pt-6 border-t border-saltora-border/60 mt-6">
                        <a href="/contact" class="text-xs font-bold tracking-widest text-saltora-text uppercase flex items-center justify-between w-full group-hover:text-saltora-terracotta transition-colors">
                            <span>REQUEST QUOTE</span>
                            <span>↗</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- WHY CHOOSE SALTORA SECTION -->
    <section id="why-us" class="py-20 md:py-28 px-6 md:px-12 max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
            <span class="text-xs font-bold tracking-mega text-saltora-terracotta uppercase">WHY CHOOSE SALTORA</span>
            <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                Serious about salt. Serious about buyers.
            </h2>
        </div>

        <!-- 6 Feature Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 border border-saltora-border border-collapse bg-saltora-bg">
            
            <!-- Box 01 -->
            <div class="p-8 sm:p-10 space-y-4 hover:bg-saltora-card/40 transition-colors border-b md:border-b-0 md:border-r border-saltora-border">
                <span class="font-serif text-3xl font-light text-saltora-muted/60 block">01</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Authentic Pakistani Origin</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Premium Himalayan pink salt sourced from Pakistan — the true home of Himalayan salt, drawn from the historic Salt Range region.
                </p>
            </div>

            <!-- Box 02 (Highlighted with Blush background) -->
            <div class="p-8 sm:p-10 space-y-4 bg-[#F5EAE6] border-b md:border-b-0 md:border-r border-saltora-border">
                <span class="font-serif text-3xl font-light text-saltora-terracotta block">02</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Quality Focused</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Quality-conscious sourcing, careful handling and disciplined export preparation at every stage, from trial selection to shipment.
                </p>
            </div>

            <!-- Box 03 -->
            <div class="p-8 sm:p-10 space-y-4 hover:bg-saltora-card/40 transition-colors border-b md:border-b-0 border-saltora-border">
                <span class="font-serif text-3xl font-light text-saltora-muted/60 block">03</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Bulk Supply</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Practical supply solutions for wholesalers, distributors, food businesses and industrial buyers — from trial orders to volume programs.
                </p>
            </div>

            <!-- Box 04 -->
            <div class="p-8 sm:p-10 space-y-4 border-t md:border-r border-saltora-border hover:bg-saltora-card/40 transition-colors">
                <span class="font-serif text-3xl font-light text-saltora-muted/60 block">04</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Export Support</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Professional documentation and shipment coordination so international buyers receive a smooth, transparent export process.
                </p>
            </div>

            <!-- Box 05 -->
            <div class="p-8 sm:p-10 space-y-4 border-t md:border-r border-saltora-border hover:bg-saltora-card/40 transition-colors">
                <span class="font-serif text-3xl font-light text-saltora-muted/60 block">05</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Flexible Packaging</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Packaging options aligned with buyer requirements — bulk, food-grade and retail-ready formats discussed per product specification.
                </p>
            </div>

            <!-- Box 06 -->
            <div class="p-8 sm:p-10 space-y-4 border-t border-saltora-border hover:bg-saltora-card/40 transition-colors">
                <span class="font-serif text-3xl font-light text-saltora-muted/60 block">06</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Long-Term Partnerships</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Saltora is built around reliable, long-term international business relationships — not one-time transactions.
                </p>
            </div>

        </div>
    </section>

    <!-- SECTION 1: SOURCING, MANUFACTURING & SUPPLY (DARK MODE) -->
    <section id="sourcing" class="bg-[#181513] text-white py-20 md:py-28 px-6 md:px-12 border-t border-stone-800">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- Left Text Process Steps -->
                <div class="lg:col-span-6 space-y-6">
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
                        
                        <div class="py-4 border-b border-stone-800/80 flex items-start gap-6">
                            <span class="font-serif text-2xl font-normal text-stone-400 shrink-0">01</span>
                            <div class="space-y-1">
                                <h4 class="font-serif text-xl text-white font-normal">Sourcing</h4>
                                <p class="text-xs text-stone-400 font-light leading-relaxed">Natural rock salt is sourced from the Himalayan salt ranges of Pakistan, selected for colour, purity and mineral character.</p>
                            </div>
                        </div>

                        <div class="py-4 border-b border-stone-800/80 flex items-start gap-6">
                            <span class="font-serif text-2xl font-normal text-stone-400 shrink-0">02</span>
                            <div class="space-y-1">
                                <h4 class="font-serif text-xl text-white font-normal">Processing</h4>
                                <p class="text-xs text-stone-400 font-light leading-relaxed">Salt is cleaned, crushed and graded into buyer-ready formats — fine, coarse, granules or raw chunks — under quality-conscious handling.</p>
                            </div>
                        </div>

                        <div class="py-4 border-b border-stone-800/80 flex items-start gap-6">
                            <span class="font-serif text-2xl font-normal text-stone-400 shrink-0">03</span>
                            <div class="space-y-1">
                                <h4 class="font-serif text-xl text-white font-normal">Quality Check</h4>
                                <p class="text-xs text-stone-400 font-light leading-relaxed">Each lot is reviewed for cleanliness, grain consistency and food-safety discipline before it moves to packing.</p>
                            </div>
                        </div>

                        <div class="py-4 flex items-start gap-6">
                            <span class="font-serif text-2xl font-normal text-stone-400 shrink-0">04</span>
                            <div class="space-y-1">
                                <h4 class="font-serif text-xl text-white font-normal">Packing & Export</h4>
                                <p class="text-xs text-stone-400 font-light leading-relaxed">Packed in standard 25kg bags, FIBC bulk supersacks, or custom private-label formats with clear export documentation.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Mine Image -->
                <div class="lg:col-span-6 relative">
                    <div class="relative rounded-sm overflow-hidden border border-stone-800 shadow-2xl group">
                        <img src="/sourcingsec.jpg" alt="The Salt Range Pakistan Mine Tunnel" class="w-full h-[540px] object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 text-white z-10">
                            <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase block mb-1">ORIGIN</span>
                            <h4 class="font-serif text-2xl font-normal text-amber-100">The Salt Range, Pakistan</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION 2: INDUSTRIES WE SERVE -->
    <section id="industries" class="py-20 md:py-28 px-6 md:px-12 bg-saltora-bg">
        <div class="max-w-7xl mx-auto space-y-12">
            
            <div class="space-y-3 max-w-3xl">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">INDUSTRIES WE SERVE</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    One mineral, many markets
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    Saltora works with buyers across the food, retail, wellness and industrial spectrum.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 border-t border-saltora-border/80">
                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/30 transition-colors px-2">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">01</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Food & Beverage</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Ingredient and finishing salt for packaged food brands</p>
                        </div>
                    </div>
                    <span class="text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/30 transition-colors px-2">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">02</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Food Manufacturing</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Consistent grain formats for production lines</p>
                        </div>
                    </div>
                    <span class="text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/30 transition-colors px-2">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">03</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Restaurants & Food Service</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Culinary and table salt programs</p>
                        </div>
                    </div>
                    <span class="text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/30 transition-colors px-2">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">04</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Wholesale & Distribution</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Volume supply for regional distributors</p>
                        </div>
                    </div>
                    <span class="text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/30 transition-colors px-2">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">05</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Retail Brands</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Shelf-ready formats for retail shelves</p>
                        </div>
                    </div>
                    <span class="text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/30 transition-colors px-2">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">06</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Private Label</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Your brand, our salt — export ready</p>
                        </div>
                    </div>
                    <span class="text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/30 transition-colors px-2">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">07</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Wellness & Bath Products</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Salt for spa, bath and wellness lines</p>
                        </div>
                    </div>
                    <span class="text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/30 transition-colors px-2">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">08</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Industrial Applications</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Bulk salt for industrial buyers</p>
                        </div>
                    </div>
                    <span class="text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: QUALITY & CERTIFICATIONS -->
    <section id="certifications" class="bg-[#F5EAE6] py-16 md:py-24 px-6 md:px-12 border-y border-saltora-terracotta/20">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-12">
            
            <div class="space-y-4 max-w-lg">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">QUALITY & CERTIFICATIONS</span>
                <h2 class="text-3xl sm:text-4xl font-serif text-saltora-text font-normal leading-tight">
                    Recognised standards, verifiable registration
                </h2>
                <div class="pt-2">
                    <a href="/certifications" class="inline-flex items-center gap-2 text-xs font-bold tracking-widest text-saltora-text uppercase border-b border-saltora-text pb-1 hover:text-saltora-terracotta hover:border-saltora-terracotta transition-colors">
                        <span>VIEW CERTIFICATIONS</span>
                        <span>→</span>
                    </a>
                </div>
            </div>

            <!-- Right 4 Circular Seal Badges -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 sm:gap-8 items-center">
                <div class="w-36 h-36 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/60 shadow-sm relative group hover:border-saltora-terracotta transition-colors">
                    <span class="text-[8px] tracking-widest text-saltora-muted uppercase block font-semibold mb-1">SALTORA · PAKISTAN</span>
                    <span class="font-serif text-sm font-bold text-saltora-text leading-tight">ISO 22000:2018</span>
                    <span class="text-[8px] font-bold tracking-widest text-saltora-terracotta uppercase mt-1">CERTIFIED</span>
                </div>

                <div class="w-36 h-36 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/60 shadow-sm relative group hover:border-saltora-terracotta transition-colors">
                    <span class="text-[8px] tracking-widest text-saltora-muted uppercase block font-semibold mb-1">SALTORA · PAKISTAN</span>
                    <span class="font-serif text-base font-bold text-saltora-text leading-tight">Halal</span>
                    <span class="text-[8px] font-bold tracking-widest text-saltora-terracotta uppercase mt-1">CERTIFIED</span>
                </div>

                <div class="w-36 h-36 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/60 shadow-sm relative group hover:border-saltora-terracotta transition-colors">
                    <span class="text-[8px] tracking-widest text-saltora-muted uppercase block font-semibold mb-1">SALTORA · PAKISTAN</span>
                    <span class="font-serif text-xs font-bold text-saltora-text leading-tight">Codex CXS<br>150:1985</span>
                    <span class="text-[8px] font-bold tracking-widest text-saltora-terracotta uppercase mt-1">CERTIFIED</span>
                </div>

                <div class="w-36 h-36 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/60 shadow-sm relative group hover:border-saltora-terracotta transition-colors">
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

        <div class="max-w-7xl mx-auto text-center space-y-4 relative z-10">
            <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">GLOBAL EXPORT</span>
            
            <h2 class="text-3xl sm:text-5xl font-serif text-white font-normal max-w-4xl mx-auto leading-tight">
                Supplying Pakistani Himalayan pink salt to global markets
            </h2>
            
            <p class="text-stone-400 text-sm sm:text-base font-light max-w-2xl mx-auto leading-relaxed">
                From Pakistan's Salt Range to destination ports worldwide — Saltora is building its export footprint across every major region, one reliable partnership at a time.
            </p>

            <div class="relative mt-16 max-w-4xl mx-auto h-[360px] sm:h-[420px] flex items-center justify-center">
                <div class="absolute z-20 flex flex-col items-center">
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

                <div class="absolute top-[22%] left-[18%] z-10 flex flex-col items-center group">
                    <div class="w-3.5 h-3.5 rounded-full bg-amber-200/80 border border-white"></div>
                    <span class="text-[10px] font-bold tracking-widest text-stone-300 uppercase mt-1">EUROPE</span>
                </div>

                <div class="absolute bottom-[28%] left-[8%] z-10 flex flex-col items-center group">
                    <div class="w-3.5 h-3.5 rounded-full bg-amber-200/80 border border-white"></div>
                    <span class="text-[10px] font-bold tracking-widest text-stone-300 uppercase mt-1">NORTH AMERICA</span>
                </div>

                <div class="absolute bottom-[22%] left-[42%] z-10 flex flex-col items-center group">
                    <div class="w-3.5 h-3.5 rounded-full bg-amber-200/80 border border-white"></div>
                    <span class="text-[10px] font-bold tracking-widest text-stone-300 uppercase mt-1">MIDDLE EAST</span>
                </div>

                <div class="absolute bottom-[10%] left-[34%] z-10 flex flex-col items-center group">
                    <div class="w-3.5 h-3.5 rounded-full bg-amber-200/80 border border-white"></div>
                    <span class="text-[10px] font-bold tracking-widest text-stone-300 uppercase mt-1">AFRICA</span>
                </div>

                <div class="absolute top-[12%] right-[18%] z-10 flex flex-col items-center group">
                    <div class="w-3.5 h-3.5 rounded-full bg-amber-200/80 border border-white"></div>
                    <span class="text-[10px] font-bold tracking-widest text-stone-300 uppercase mt-1">EAST ASIA</span>
                </div>

                <div class="absolute bottom-[15%] right-[10%] z-10 flex flex-col items-center group">
                    <div class="w-3.5 h-3.5 rounded-full bg-amber-200/80 border border-white"></div>
                    <span class="text-[10px] font-bold tracking-widest text-stone-300 uppercase mt-1">ASIA-PACIFIC</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: BOTTOM CTA HERO BANNER -->
    <section class="relative bg-[#141211] py-24 px-6 text-center text-white overflow-hidden">
        <img src="/heroimg.jpg" alt="Salt crystal backdrop" class="absolute inset-0 w-full h-full object-cover opacity-25 filter blur-xs">
        <div class="absolute inset-0 bg-gradient-to-t from-[#141211] via-[#141211]/80 to-[#141211]"></div>

        <div class="relative z-10 max-w-3xl mx-auto space-y-6">
            <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase block">START SOURCING</span>
            
            <h2 class="text-4xl sm:text-6xl font-serif text-white font-normal leading-tight">
                Ready to source premium Himalayan pink salt?
            </h2>
            
            <p class="text-stone-300 text-sm sm:text-base font-light max-w-xl mx-auto leading-relaxed">
                Send your specifications and receive a professional quotation — with clear FOB terms and export support from Pakistan.
            </p>
            
            <div class="flex flex-wrap items-center justify-center gap-4 pt-4">
                <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-9 py-4 text-xs font-bold tracking-wider uppercase transition-all shadow-lg flex items-center gap-3 group">
                    <span>REQUEST A QUOTE</span>
                    <span class="transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
                </a>
                <a href="/contact" class="border border-white/40 hover:border-white text-white px-8 py-4 text-xs font-bold tracking-wider uppercase transition-colors">
                    CONTACT SALTORA
                </a>
            </div>
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <footer id="contact" class="bg-[#141211] text-stone-400 py-16 px-6 md:px-12 border-t border-stone-800 text-xs">
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
                    <li><a href="/" class="hover:text-white transition-colors">Home</a></li>
                    <li><a href="/about" class="hover:text-white transition-colors">About Saltora</a></li>
                    <li><a href="#products" class="hover:text-white transition-colors">Pink Salt Range</a></li>
                    <li><a href="/certifications" class="hover:text-white transition-colors">Certifications & ISO</a></li>
                    <li><a href="#sourcing" class="hover:text-white transition-colors">Integrated Value Chain</a></li>
                    <li><a href="/contact" class="hover:text-white transition-colors">Contact Us</a></li>
                </ul>
            </div>

            <div class="space-y-3">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">Product Categories</h4>
                <ul class="space-y-2 text-stone-400 font-light">
                    <li><a href="#products" class="hover:text-white transition-colors">Fine Table Pink Salt</a></li>
                    <li><a href="#products" class="hover:text-white transition-colors">Coarse Grinder Salt</a></li>
                    <li><a href="#products" class="hover:text-white transition-colors">Himalayan Salt Granules</a></li>
                    <li><a href="#industries" class="hover:text-white transition-colors">Animal Salt Lick Blocks</a></li>
                    <li><a href="#industries" class="hover:text-white transition-colors">Raw Rock Salt Lumps</a></li>
                </ul>
            </div>

            <div class="space-y-3">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">Export Contact</h4>
                <div class="space-y-2 text-stone-400 font-light">
                    <p class="text-white font-medium">Head Office & Export Desk</p>
                    <p>Salt Range Region / Lahore, Pakistan</p>
                    <p class="pt-1"><span class="text-stone-500">Email:</span> saltora1329@gmail.com</p>
                    <p><span class="text-stone-500">WhatsApp:</span> +92 318 0735748</p>
                    <p><span class="text-stone-500">Loading Port:</span> Karachi Port / Port Qasim</p>
                </div>
            </div>

        </div>

        <div class="max-w-7xl mx-auto pt-12 mt-12 border-t border-stone-900 flex flex-col sm:flex-row items-center justify-between text-stone-500 text-[11px] gap-4">
            <p>© 2026 SALTORA Himalayan Pink Salt Exporter. All Rights Reserved.</p>
            <div class="flex items-center space-x-6">
                <a href="#" class="hover:text-stone-300">Privacy Policy</a>
                <a href="#" class="hover:text-stone-300">Terms of Export</a>
                <a href="#" class="hover:text-stone-300">Quality Spec Sheet</a>
            </div>
        </div>
    </footer>

</body>
</html>
