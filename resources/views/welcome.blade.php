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
                <a href="/about" class="hover:text-saltora-terracotta transition-colors cursor-pointer">ABOUT</a>
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
            <a @click="mobileMenuOpen = false" href="/about" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">ABOUT</a>
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CONTACT</a>
            {{--
            <!-- SHOPPING CART COMMENTED OUT -->
            <button @click="mobileMenuOpen = false; openCartSidebar()" class="flex items-center justify-center gap-2 w-full mt-4 bg-saltora-terracotta text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer rounded-xs shadow-md">
                <i class="fa-solid fa-cart-shopping text-amber-200 text-sm"></i>
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

    <!-- HERO SECTION (Compact, High-Impact & Ultra-Smooth Load) -->
    <section class="relative py-8 md:py-12 px-6 md:px-12 max-w-7xl mx-auto overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
            
            <!-- Left Hero Content -->
            <div class="lg:col-span-7 space-y-5 animate-hero-left">
                <!-- Category Tag Line -->
                <div class="flex items-center gap-2.5 text-[11px] font-bold tracking-widest text-saltora-terracotta uppercase">
                    <span class="w-6 h-px bg-saltora-terracotta"></span>
                    <span>HIMALAYAN PINK SALT · EXPORTER · PAKISTAN</span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-3xl sm:text-5xl xl:text-6xl font-serif text-saltora-text leading-[1.12] tracking-tight font-normal">
                    Premium Himalayan <span class="italic text-saltora-terracotta font-normal">Pink Salt</span> Exporter from Pakistan
                </h1>

                <!-- Subheading Description -->
                <p class="text-saltora-muted text-sm sm:text-base leading-relaxed max-w-xl font-normal">
                    SALTORA supplies authentic, quality-focused Himalayan pink salt to international importers, wholesalers, food businesses and private-label brands — with professional, export-ready service from source to shipment.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-3.5 pt-1">
                    <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-6 py-3.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-md hover:shadow-lg flex items-center gap-2.5 group cursor-pointer rounded-xs">
                        <span>REQUEST A QUOTE</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                    <a href="/products" class="border border-saltora-text/30 hover:border-saltora-text hover:bg-saltora-card text-saltora-text px-6 py-3.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 cursor-pointer rounded-xs">
                        EXPLORE PRODUCTS
                    </a>
                </div>

                <!-- Quick Trust Badges Strip -->
                <div class="pt-3 border-t border-saltora-border/60 flex flex-wrap items-center gap-y-2 gap-x-6 text-[11px] text-saltora-muted font-medium">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-circle-check text-saltora-terracotta text-xs"></i> 98.5%+ Pure NaCl</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-shield text-saltora-terracotta text-xs"></i> ISO 22000 & Halal</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-box text-saltora-terracotta text-xs"></i> Bulk & Private Label</span>
                </div>
            </div>

            <!-- Right Hero Image with Compact Floating Badges -->
            <div class="lg:col-span-5 relative animate-hero-right">
                <div class="relative rounded-lg overflow-hidden shadow-xl bg-saltora-card border border-saltora-border group">
                    <img src="/heroimg.jpg" alt="Premium Himalayan Pink Salt Crystals" class="w-full h-[340px] sm:h-[400px] lg:h-[420px] object-cover transition-transform duration-700 group-hover:scale-105 cursor-pointer">

                    <!-- Gradient Overlay on Image Bottom -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent pointer-events-none"></div>

                    <!-- Badge Top Left: CERTIFIED QUALITY -->
                    <div class="absolute top-3.5 left-3.5 bg-white/90 backdrop-blur-md px-3.5 py-2.5 rounded border border-white/60 shadow-md z-20 max-w-[170px]">
                        <span class="block text-[9px] font-bold tracking-widest text-saltora-terracotta uppercase mb-0.5">CERTIFIED QUALITY</span>
                        <h4 class="font-serif text-xs font-bold text-saltora-text leading-tight">ISO 22000:2018</h4>
                        <p class="text-[10px] text-saltora-muted font-medium">Halal · Codex CXS 150</p>
                    </div>

                    <!-- Badge Top Right: BULK B2B -->
                    <div class="absolute top-3.5 right-3.5 bg-saltora-blush/90 backdrop-blur-md px-3 py-1.5 rounded border border-saltora-terracotta/20 shadow-md z-20">
                        <span class="text-[9px] font-bold tracking-widest text-saltora-terracotta uppercase">BULK · B2B · PRIVATE LABEL</span>
                    </div>

                    <!-- Overlay Text & Export Badge Bottom -->
                    <div class="absolute bottom-3.5 left-3.5 right-3.5 flex items-end justify-between z-10">
                        <div class="text-white">
                            <p class="font-serif italic text-lg sm:text-xl font-normal drop-shadow-md">Pure · Natural · Premium</p>
                        </div>
                        <div class="bg-saltora-dark/90 backdrop-blur-md px-3 py-2 rounded border border-saltora-dark-border text-white shadow-lg max-w-[170px]">
                            <span class="block text-[9px] font-bold tracking-widest text-amber-200/90 uppercase mb-0.5">EXPORT TERMS</span>
                            <h4 class="font-serif text-xs font-semibold text-white leading-tight">FOB — 50% Advance</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CONTINUOUS RUNNING TERRACOTTA TICKER MARQUEE BAR -->
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

    <!-- ABOUT SECTION (Compact & Shorter Layout) -->
    <section id="about" class="py-10 md:py-14 px-6 md:px-12 max-w-7xl mx-auto overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
            
            <!-- Left Image Side -->
            <div class="lg:col-span-5 relative reveal-from-left">
                <div class="relative rounded-md overflow-hidden border border-saltora-border shadow-lg group cursor-pointer">
                    <img src="/aboutimg.jpg" alt="Hands holding authentic Pakistani pink salt" class="w-full h-[320px] sm:h-[350px] lg:h-[360px] object-cover transition-transform duration-700 group-hover:scale-105">
                    
                    <!-- Floating Dark Box -->
                    <div class="absolute bottom-3.5 right-3.5 bg-saltora-dark/95 backdrop-blur-md text-white p-3.5 max-w-[210px] rounded border border-saltora-dark-border shadow-xl">
                        <h4 class="font-serif text-base font-normal text-amber-100 mb-0.5">B2B First</h4>
                        <p class="text-[11px] text-stone-300 font-light leading-snug">
                            Importers · Wholesalers · Manufacturers · Private Label
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Text Content -->
            <div class="lg:col-span-7 space-y-4 reveal-from-right">
                <div class="text-[11px] font-bold tracking-widest text-saltora-terracotta uppercase">
                    ABOUT SALTORA
                </div>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-saltora-text leading-tight font-normal">
                    A Pakistani export house built around one exceptional mineral
                </h2>

                <p class="text-saltora-muted text-xs sm:text-sm leading-relaxed font-normal">
                    SALTORA is a professional Himalayan pink salt export business based in Pakistan — the origin of the world's true Himalayan salt. We focus on authentic sourcing, quality-conscious processing and export-ready supply, so international buyers can build reliable, long-term salt programs with confidence.
                </p>

                <!-- Compact 2-Column Checklist Badges -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 pt-2 border-t border-saltora-border/70 text-xs font-medium text-saltora-text">
                    <div class="flex items-center gap-2 bg-white/70 p-2.5 rounded border border-saltora-border/60">
                        <svg class="w-4 h-4 text-saltora-terracotta shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-[11px] leading-tight">Authentic Pakistani pink salt, responsibly sourced</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/70 p-2.5 rounded border border-saltora-border/60">
                        <svg class="w-4 h-4 text-saltora-terracotta shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-[11px] leading-tight">Quality-focused processing & export preparation</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/70 p-2.5 rounded border border-saltora-border/60">
                        <svg class="w-4 h-4 text-saltora-terracotta shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-[11px] leading-tight">Export-ready formats (bulk, food-grade & retail)</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/70 p-2.5 rounded border border-saltora-border/60">
                        <svg class="w-4 h-4 text-saltora-terracotta shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-[11px] leading-tight">Long-term partnership approach for global buyers</span>
                    </div>
                </div>

                <!-- Link Button -->
                <div class="pt-2">
                    <a href="/about" class="inline-flex items-center gap-2 text-xs font-bold tracking-widest text-saltora-text uppercase border-b border-saltora-text pb-0.5 hover:text-saltora-terracotta hover:border-saltora-terracotta transition-colors cursor-pointer group">
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

            <!-- Product Cards Grid: Wider Cards (3 cols instead of 4) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                
                @forelse($products as $index => $prod)
                <div class="bg-white border border-saltora-border/80 rounded-xl p-4.5 sm:p-5 flex flex-col justify-between transition-all duration-500 hover:-translate-y-1.5 hover:shadow-xl hover:shadow-saltora-terracotta/10 hover:border-saltora-terracotta/50 group relative overflow-hidden reveal-from-bottom stagger-{{ ($index % 3) + 1 }}">
                    <!-- Top Gradient Accent Hover Line -->
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-saltora-terracotta via-amber-600 to-saltora-terracotta scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

                    <div class="space-y-3">
                        <!-- Wider & Shorter Aspect Ratio Image (16:9 ratio) -->
                        <div class="relative aspect-[16/9] w-full overflow-hidden rounded-lg bg-saltora-card cursor-pointer group/img" @click="openQuickView({name: '{{ addslashes($prod->name) }}', img: '{{ $prod->image_url ? asset($prod->image_url) : asset('product1.jpg') }}', tags: ['{{ addslashes($prod->categoryRef->name ?? $prod->category ?? 'HIMALAYAN SALT') }}', '{{ addslashes($prod->subcategoryRef->name ?? 'GRADED') }}'], desc: '{{ addslashes($prod->full_desc ?? $prod->short_desc ?? '') }}', specs: {grade: '{{ addslashes($prod->grade ?? 'Food Grade Natural') }}', grain: '{{ addslashes($prod->mesh_size ?? 'Custom') }}', purity: '{{ addslashes($prod->purity ?? '98.5%+ NaCl') }}', origin: 'Salt Range, Pakistan'}})">
                            <img src="{{ $prod->image_url ? asset($prod->image_url) : asset('product1.jpg') }}" alt="{{ $prod->name }}" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-108">
                            
                            <!-- Dark Overlay Gradient on Hover -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/15 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>

                            <!-- Top Left Quality Badge -->
                            <div class="absolute top-2.5 left-2.5 z-10 pointer-events-none">
                                <span class="bg-white/90 backdrop-blur-md text-saltora-terracotta text-[9px] font-bold tracking-widest uppercase px-2.5 py-0.5 rounded-full shadow-xs border border-saltora-terracotta/20 flex items-center gap-1">
                                    <i class="fa-solid fa-sparkles text-[8px]"></i>
                                    98.5%+ NaCl
                                </span>
                            </div>

                            <!-- Center Hover Quick View Pill -->
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-20">
                                <span class="bg-white/95 text-saltora-dark text-[10px] font-bold tracking-wider px-3.5 py-1.5 rounded-full uppercase shadow-md border border-saltora-border flex items-center gap-1.5 hover:bg-saltora-terracotta hover:text-white transition-colors duration-200">
                                    <i class="fa-regular fa-eye text-xs"></i>
                                    Quick View
                                </span>
                            </div>
                        </div>

                        <!-- Product Category & Subcategory Tag Pills -->
                        <div class="flex flex-wrap items-center gap-1.5">
                            @if($prod->categoryRef)
                                <span class="text-[9px] font-bold tracking-wider text-saltora-terracotta border border-saltora-terracotta/20 px-2 py-0.5 rounded-full uppercase bg-saltora-blush/60">{{ $prod->categoryRef->name }}</span>
                            @endif
                            @if($prod->grain_size && !str_contains($prod->grain_size, 'Not Applicable'))
                                <span class="text-[9px] font-semibold tracking-wider text-slate-700 border border-slate-200 px-2 py-0.5 rounded-full uppercase bg-slate-50">{{ $prod->grain_size }}</span>
                            @elseif($prod->packaging_type)
                                <span class="text-[9px] font-semibold tracking-wider text-slate-700 border border-slate-200 px-2 py-0.5 rounded-full uppercase bg-slate-50">{{ $prod->packaging_type }}</span>
                            @elseif($prod->subcategoryRef)
                                <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-0.5 rounded-full uppercase bg-stone-50">{{ $prod->subcategoryRef->name }}</span>
                            @endif
                        </div>

                        <!-- Product Title -->
                        <h3 class="font-serif text-lg text-saltora-text font-semibold group-hover:text-saltora-terracotta transition-colors duration-300 leading-snug line-clamp-1">
                            {{ $prod->name }}
                        </h3>

                        <!-- Product Description -->
                        <p class="text-xs text-saltora-muted leading-relaxed font-normal line-clamp-2">
                            {{ $prod->short_desc ?? 'Authentic Pakistani Himalayan pink salt in its natural, mineral-rich form — ideal for gourmet food and bulk export.' }}
                        </p>

                        <!-- Price & MOQ Row -->
                        <div class="pt-2 flex items-baseline justify-between border-t border-slate-100">
                            <div>
                                @if($prod->price && $prod->price > 0)
                                <div class="flex items-baseline gap-1">
                                    <span class="text-base font-bold text-slate-900">${{ number_format($prod->price, 2) }}</span>
                                    <span class="text-[10px] text-slate-500 font-semibold">/ {{ ltrim($prod->price_unit ?? 'kg', '/') }}</span>
                                </div>
                                @else
                                <span class="text-[11px] font-bold text-[#e07a5f] uppercase tracking-wider">Custom Quote</span>
                                @endif
                            </div>
                            @if($prod->moq)
                            <div class="text-[10px] text-slate-400 font-medium truncate max-w-[130px]">
                                MOQ: {{ $prod->moq }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Side-by-Side Compact Action Buttons -->
                    <div class="pt-3 border-t border-saltora-border/60 mt-3 flex items-center gap-2">
                        {{--
                        <!-- ADD TO CART COMMENTED OUT -->
                        <button @click="addToCart('{{ addslashes($prod->name) }}')" class="flex-1 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2 px-3 text-[10px] font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-1.5 cursor-pointer shadow-xs hover:shadow rounded-md group/btn relative overflow-hidden">
                            <svg class="w-3.5 h-3.5 shrink-0 transition-transform duration-300 group-hover/btn:scale-110 group-hover/btn:-rotate-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                            <span class="truncate">ADD TO CART</span>
                        </button>
                        --}}
                        <a href="/contact?product={{ urlencode($prod->name) }}#contactForm" class="flex-1 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2 px-3 text-[10px] font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-1.5 cursor-pointer shadow-xs hover:shadow rounded-md group/btn relative overflow-hidden">
                            <i class="fa-solid fa-file-invoice text-amber-200 text-[10px] transition-transform duration-300 group-hover/btn:translate-x-0.5"></i>
                            <span class="truncate">REQUEST A QUOTE</span>
                        </a>
                        <button @click="openQuickView({name: '{{ addslashes($prod->name) }}', img: '{{ $prod->image_url ? asset($prod->image_url) : asset('product1.jpg') }}', tags: ['{{ addslashes($prod->categoryRef->name ?? $prod->category ?? 'HIMALAYAN SALT') }}', '{{ addslashes($prod->packaging_type ?? $prod->packaging ?? 'EXPORT GRADE') }}'], desc: '{{ addslashes($prod->full_desc ?? $prod->short_desc ?? '') }}', specs: {grade: '{{ addslashes($prod->grade ?? 'Food Grade Natural') }}', grain: '{{ addslashes($prod->grain_size ?? $prod->mesh_size ?? 'Custom') }}', purity: '{{ addslashes($prod->purity ?? '98.5%+ NaCl') }}', origin: '{{ addslashes($prod->origin ?? 'Salt Range, Pakistan') }}'}})" class="flex-1 border border-saltora-text/25 hover:border-saltora-terracotta hover:text-saltora-terracotta bg-white hover:bg-saltora-blush-light text-saltora-text py-2 px-3 text-[10px] font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-1.5 cursor-pointer rounded-md group/btn">
                            <svg class="w-3.5 h-3.5 shrink-0 text-saltora-muted group-hover/btn:text-saltora-terracotta transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <span class="truncate group-hover/btn:translate-x-0.5 transition-transform duration-300">DETAILS</span>
                        </button>
                    </div>
                </div>
                @empty
                <div class="col-span-full bg-white/80 border border-dashed border-saltora-border p-12 text-center rounded-sm">
                    <div class="w-16 h-16 bg-saltora-card rounded-full flex items-center justify-center mx-auto mb-4 text-saltora-terracotta">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <h3 class="font-serif text-2xl text-saltora-text font-normal mb-2">Export Catalog Updating</h3>
                    <p class="text-xs text-saltora-muted max-w-md mx-auto mb-6">
                        Our product catalog is currently being updated with fresh Himalayan salt export batches. For immediate inquiries or custom bulk specifications, please reach out to our export desk.
                    </p>
                    <div class="flex items-center justify-center gap-3 flex-wrap">
                        <a href="/contact" class="inline-flex items-center gap-2 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-5 py-2.5 text-xs font-bold tracking-wider uppercase transition-all shadow-sm">
                            <span>CONTACT EXPORT DESK</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                        <a href="/contact" class="inline-flex items-center gap-2 border border-saltora-text/30 hover:border-saltora-text text-saltora-text px-5 py-2.5 text-xs font-bold tracking-wider uppercase transition-all bg-white">
                            <span>REQUEST CUSTOM QUOTE</span>
                        </a>
                    </div>
                </div>
                @endforelse

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

    <!-- SECTION 1: SOURCING, MANUFACTURING & SUPPLY (DARK MODE - COMPACT & SHORTER) -->
    <section id="sourcing" class="bg-gradient-to-b from-[#1E1917] via-[#151210] to-[#1E1917] text-white py-10 md:py-14 px-6 md:px-12 border-t border-stone-800 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
                
                <!-- Left Text Process Steps -->
                <div class="lg:col-span-6 space-y-4 reveal-on-scroll reveal-from-left">
                    <div class="text-[11px] font-bold tracking-widest text-saltora-terracotta uppercase">
                        FROM MINE TO MARKET
                    </div>

                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-white font-normal leading-tight">
                        Sourcing, manufacturing & supply — one disciplined process
                    </h2>

                    <p class="text-stone-400 text-xs sm:text-sm font-normal leading-relaxed">
                        B2B buyers see exactly how their salt moves: sourced in the Pakistani Salt Range, processed and graded to specification, checked, packed and exported under clear FOB terms.
                    </p>

                    <!-- Process Steps (2-Column Grid for Shorter Height) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-3 border-t border-stone-800/80">
                        
                        <div class="p-3 bg-stone-900/60 rounded border border-stone-800/80 group cursor-pointer hover:border-saltora-terracotta/50 transition-colors">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="font-serif text-xs font-bold text-saltora-terracotta">01</span>
                                <h4 class="font-serif text-base text-white font-normal group-hover:text-amber-100 transition-colors">Sourcing</h4>
                            </div>
                            <p class="text-[11px] text-stone-400 font-light leading-relaxed">Natural rock salt sourced from the Salt Range, selected for purity & color.</p>
                        </div>

                        <div class="p-3 bg-stone-900/60 rounded border border-stone-800/80 group cursor-pointer hover:border-saltora-terracotta/50 transition-colors">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="font-serif text-xs font-bold text-saltora-terracotta">02</span>
                                <h4 class="font-serif text-base text-white font-normal group-hover:text-amber-100 transition-colors">Processing</h4>
                            </div>
                            <p class="text-[11px] text-stone-400 font-light leading-relaxed">Cleaned, crushed & graded into fine, coarse or raw chunk formats.</p>
                        </div>

                        <div class="p-3 bg-stone-900/60 rounded border border-stone-800/80 group cursor-pointer hover:border-saltora-terracotta/50 transition-colors">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="font-serif text-xs font-bold text-saltora-terracotta">03</span>
                                <h4 class="font-serif text-base text-white font-normal group-hover:text-amber-100 transition-colors">Quality Check</h4>
                            </div>
                            <p class="text-[11px] text-stone-400 font-light leading-relaxed">Reviewed for grain consistency, NaCl purity & food safety discipline.</p>
                        </div>

                        <div class="p-3 bg-stone-900/60 rounded border border-stone-800/80 group cursor-pointer hover:border-saltora-terracotta/50 transition-colors">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="font-serif text-xs font-bold text-saltora-terracotta">04</span>
                                <h4 class="font-serif text-base text-white font-normal group-hover:text-amber-100 transition-colors">Packing & Export</h4>
                            </div>
                            <p class="text-[11px] text-stone-400 font-light leading-relaxed">Packed to buyer spec and exported under clear FOB terms.</p>
                        </div>

                    </div>
                </div>

                <!-- Right Mine Image -->
                <div class="lg:col-span-6 relative reveal-on-scroll reveal-from-right">
                    <div class="relative rounded-md overflow-hidden border border-stone-800 shadow-2xl group cursor-pointer">
                        <img src="/sourcingsec.jpg" alt="The Salt Range Pakistan Mine Tunnel" class="w-full h-[320px] sm:h-[350px] lg:h-[370px] object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-4 left-4 text-white z-10">
                            <span class="text-[9px] font-bold tracking-widest text-saltora-terracotta uppercase block mb-0.5">ORIGIN</span>
                            <h4 class="font-serif text-xl sm:text-2xl font-normal text-white">The Salt Range, Pakistan</h4>
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
                <!-- SOCIAL MEDIA ICONS -->
                <div class="flex items-center gap-3 pt-2">
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-stone-800 bg-stone-900/80 flex items-center justify-center text-stone-400 hover:text-[#e07a5f] hover:border-[#e07a5f] transition-all cursor-pointer" title="Facebook">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-stone-800 bg-stone-900/80 flex items-center justify-center text-stone-400 hover:text-[#e07a5f] hover:border-[#e07a5f] transition-all cursor-pointer" title="Instagram">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-stone-800 bg-stone-900/80 flex items-center justify-center text-stone-400 hover:text-[#e07a5f] hover:border-[#e07a5f] transition-all cursor-pointer" title="LinkedIn">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="https://wa.me/923180735748" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-stone-800 bg-stone-900/80 flex items-center justify-center text-stone-400 hover:text-emerald-500 hover:border-emerald-500 transition-all cursor-pointer" title="WhatsApp Desk">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    </a>
                    <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-stone-800 bg-stone-900/80 flex items-center justify-center text-stone-400 hover:text-rose-500 hover:border-rose-500 transition-all cursor-pointer" title="YouTube">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <a href="https://x.com" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-stone-800 bg-stone-900/80 flex items-center justify-center text-stone-400 hover:text-[#e07a5f] hover:border-[#e07a5f] transition-all cursor-pointer" title="X (Twitter)">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
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
                <a href="/terms" class="hover:text-stone-300 transition-colors cursor-pointer">Terms & Conditions</a>
                <a href="/privacy" class="hover:text-stone-300 transition-colors cursor-pointer">Privacy Policy</a>
                <a href="/return-policy" class="hover:text-stone-300 transition-colors cursor-pointer">Return & Refund Policy</a>
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
                                {{--
                                <!-- ADD TO CART COMMENTED OUT -->
                                <button @click="addToCart(selectedProduct.name); closeQuickView()" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center justify-center gap-2 cursor-pointer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                                    </svg>
                                    <span>ADD TO SHOPPING CART</span>
                                </button>
                                --}}
                                <a :href="'/contact?product=' + encodeURIComponent(selectedProduct.name) + '#contactForm'" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-center text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center justify-center gap-2 cursor-pointer">
                                    <i class="fa-solid fa-file-invoice text-amber-200 text-xs"></i>
                                    <span>REQUEST A QUOTE</span>
                                </a>
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

    {{-- <x-cart-drawer /> --}}

</body>
</html>
