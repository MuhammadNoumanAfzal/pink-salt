<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Export & Logistics — SALTORA | Professional Salt Buying Process</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="SALTORA's transparent 7-step export and shipping process for Himalayan pink salt: FOB terms, documentation, custom clearance, and international bulk delivery.">
    <meta name="keywords" content="Export Pink Salt Pakistan, FOB Salt Exporter, Salt Range Shipping, B2B Salt Logistics, Saltora Export Documentation">
    
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
                <a href="/export-logistics" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1 cursor-pointer">EXPORT & LOGISTICS</a>
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
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-terracotta font-bold cursor-pointer">EXPORT & LOGISTICS</a>
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

    <!-- HERO SECTION (DARK SHIPPING PORT BACKGROUND OVERLAY) -->
    <section class="relative bg-saltora-dark text-white py-24 md:py-36 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border">
        <!-- Backdrop Image (`export nd logisyt her.jpg`) - Brighter & Warm -->
        <img src="/export nd logisyt her.jpg" alt="Shipping Container Port Crane Backdrop" class="absolute inset-0 w-full h-full object-cover opacity-65 filter brightness-105 contrast-105 pointer-events-none transition-transform duration-1000 scale-105">
        <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/55 to-black/35 pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto flex flex-col md:flex-row md:items-end justify-between gap-8">
            <div class="space-y-6 max-w-3xl animate-hero-left">
                <!-- Category Sub-tag -->
                <div class="flex items-center gap-3 text-xs font-bold tracking-mega text-saltora-terracotta uppercase">
                    <span class="w-8 h-px bg-saltora-terracotta"></span>
                    <span>EXPORT & LOGISTICS</span>
                </div>

                <!-- Headline -->
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-serif text-white font-normal leading-[1.08]">
                    A clear, professional buying process
                </h1>

                <!-- Paragraph -->
                <p class="text-stone-300 text-base sm:text-lg leading-relaxed max-w-2xl font-light">
                    From first inquiry to delivery at your destination port — Saltora keeps every step documented, transparent and on schedule.
                </p>
            </div>

            <!-- Hero Stats Badge Right -->
            <div class="animate-hero-right shrink-0">
                <div class="bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-sm space-y-3 max-w-xs shadow-2xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-saltora-terracotta/20 border border-saltora-terracotta flex items-center justify-center text-saltora-terracotta">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V9a2 2 0 00-2-2h-2"/>
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-serif font-bold text-white">GLOBAL PORTS</span>
                            <span class="text-[10px] text-stone-300 uppercase tracking-wider font-medium">FOB Karachi & Port Qasim</span>
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
                <span class="flex items-center gap-2">✦ FOB TERMS: 50% ADVANCE & 50% ON B/L PRESENTATION</span>
                <span class="flex items-center gap-2">✦ SEAMLESS CUSTOMS CLEARANCE DOCUMENTATION</span>
                <span class="flex items-center gap-2">✦ BULK & CONTAINERIZED SHIPPING TO GLOBAL PORTS</span>
                <span class="flex items-center gap-2">✦ FULL BATCH TRACEABILITY GUARANTEED</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ FOB TERMS: 50% ADVANCE & 50% ON B/L PRESENTATION</span>
                <span class="flex items-center gap-2">✦ SEAMLESS CUSTOMS CLEARANCE DOCUMENTATION</span>
                <span class="flex items-center gap-2">✦ BULK & CONTAINERIZED SHIPPING TO GLOBAL PORTS</span>
                <span class="flex items-center gap-2">✦ FULL BATCH TRACEABILITY GUARANTEED</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ FOB TERMS: 50% ADVANCE & 50% ON B/L PRESENTATION</span>
                <span class="flex items-center gap-2">✦ SEAMLESS CUSTOMS CLEARANCE DOCUMENTATION</span>
                <span class="flex items-center gap-2">✦ BULK & CONTAINERIZED SHIPPING TO GLOBAL PORTS</span>
                <span class="flex items-center gap-2">✦ FULL BATCH TRACEABILITY GUARANTEED</span>
            </div>
        </div>
    </div>

    <!-- INCOTERMS TERRACOTTA BANNER -->
    <section class="max-w-7xl mx-auto px-6 pt-12 reveal-on-scroll reveal-scale">
        <div class="bg-saltora-terracotta text-white p-6 sm:p-8 rounded-sm shadow-md flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
            <div class="space-y-1 max-w-3xl">
                <span class="text-[10px] font-bold tracking-widest text-amber-200 uppercase block">INCOTERMS</span>
                <h3 class="font-serif text-2xl font-normal text-white">FOB — Free On Board</h3>
                <p class="text-xs text-stone-100 font-light leading-relaxed">
                    Payment terms: <strong class="font-semibold text-white">50% advance & 50% upon presentation of the Bill of Lading</strong>. Presented exactly as Saltora's standard export terms — other arrangements can be discussed during quotation.
                </p>
            </div>

            <div class="shrink-0">
                <a href="/contact" class="border border-white hover:bg-white hover:text-saltora-terracotta text-white px-6 py-3 text-xs font-bold tracking-wider uppercase transition-all flex items-center gap-2 cursor-pointer group">
                    <span>START AN INQUIRY</span>
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- SEVEN STEPS FROM INQUIRY TO DELIVERY SECTION -->
    <section class="py-20 md:py-28 px-6 md:px-12 max-w-7xl mx-auto space-y-12">
        
        <!-- Header -->
        <div class="space-y-3 reveal-on-scroll reveal-from-top">
            <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">HOW BUYING WORKS</span>
            <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                Seven steps from inquiry to delivery
            </h2>
        </div>

        <!-- 7 Process Steps Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 border-t border-saltora-border/80">
            
            <!-- Step 01 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5 cursor-pointer group hover:bg-saltora-card/40 transition-colors px-2 reveal-on-scroll reveal-from-bottom stagger-1">
                <span class="font-serif text-2xl text-saltora-muted/70 group-hover:text-saltora-terracotta group-hover:scale-110 transition-all duration-300 font-normal shrink-0">01</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Send Inquiry</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">Share your product, quantity and destination through the quote form or email.</p>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5 cursor-pointer group hover:bg-saltora-card/40 transition-colors px-2 reveal-on-scroll reveal-from-bottom stagger-2">
                <span class="font-serif text-2xl text-saltora-muted/70 group-hover:text-saltora-terracotta group-hover:scale-110 transition-all duration-300 font-normal shrink-0">02</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Discuss Product & Specifications</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">We align on grade, grain size, packaging and any private-label requirements.</p>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5 cursor-pointer group hover:bg-saltora-card/40 transition-colors px-2 reveal-on-scroll reveal-from-bottom stagger-3">
                <span class="font-serif text-2xl text-saltora-muted/70 group-hover:text-saltora-terracotta group-hover:scale-110 transition-all duration-300 font-normal shrink-0">03</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Receive Quotation</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">You receive a clear, written quotation with specifications and terms.</p>
                </div>
            </div>

            <!-- Step 04 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5 cursor-pointer group hover:bg-saltora-card/40 transition-colors px-2 reveal-on-scroll reveal-from-bottom stagger-4">
                <span class="font-serif text-2xl text-saltora-muted/70 group-hover:text-saltora-terracotta group-hover:scale-110 transition-all duration-300 font-normal shrink-0">04</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Confirm Order</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">Order is confirmed against the agreed proforma and production is scheduled.</p>
                </div>
            </div>

            <!-- Step 05 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5 cursor-pointer group hover:bg-saltora-card/40 transition-colors px-2 reveal-on-scroll reveal-from-bottom stagger-5">
                <span class="font-serif text-2xl text-saltora-muted/70 group-hover:text-saltora-terracotta group-hover:scale-110 transition-all duration-300 font-normal shrink-0">05</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Production / Preparation</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">Your salt is processed, graded and packed to the confirmed specification.</p>
                </div>
            </div>

            <!-- Step 06 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5 cursor-pointer group hover:bg-saltora-card/40 transition-colors px-2 reveal-on-scroll reveal-from-bottom stagger-6">
                <span class="font-serif text-2xl text-saltora-muted/70 group-hover:text-saltora-terracotta group-hover:scale-110 transition-all duration-300 font-normal shrink-0">06</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Documentation & Shipment</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">Export documentation is prepared and the shipment is dispatched from Pakistan.</p>
                </div>
            </div>

            <!-- Step 07 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5 md:col-span-2 cursor-pointer group hover:bg-saltora-card/40 transition-colors px-2 reveal-on-scroll reveal-scale">
                <span class="font-serif text-2xl text-saltora-muted/70 group-hover:text-saltora-terracotta group-hover:scale-110 transition-all duration-300 font-normal shrink-0">07</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Delivery</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed max-w-xl">Cargo moves to your destination port with documentation cleared for smooth clearance.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- DOCUMENTATION & PACKED FOR THE JOURNEY (DARK SECTION) -->
    <section class="bg-[#181513] text-white py-20 md:py-28 px-6 md:px-12 border-t border-stone-800">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <!-- Left Column: Documentation (5 cols) -->
            <div class="lg:col-span-5 space-y-6 reveal-on-scroll reveal-from-left">
                <div class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">
                    DOCUMENTATION
                </div>

                <h2 class="text-3xl sm:text-4xl font-serif text-white font-normal leading-tight">
                    Paperwork handled professionally
                </h2>

                <p class="text-stone-400 text-xs sm:text-sm font-light leading-relaxed">
                    Export documentation is prepared and shared with buyers so customs clearance at the destination port stays smooth.
                </p>

                <!-- Document Checklist with SVG Document Icons -->
                <div class="space-y-3 pt-2">
                    <div class="py-2.5 border-b border-stone-800/80 flex items-center gap-3 group cursor-pointer">
                        <svg class="w-4 h-4 text-saltora-terracotta shrink-0 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="text-xs font-medium text-stone-200 group-hover:translate-x-1 group-hover:text-amber-100 transition-all duration-300">Commercial Invoice</span>
                    </div>

                    <div class="py-2.5 border-b border-stone-800/80 flex items-center gap-3 group cursor-pointer">
                        <svg class="w-4 h-4 text-saltora-terracotta shrink-0 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="text-xs font-medium text-stone-200 group-hover:translate-x-1 group-hover:text-amber-100 transition-all duration-300">Packing List</span>
                    </div>

                    <div class="py-2.5 border-b border-stone-800/80 flex items-center gap-3 group cursor-pointer">
                        <svg class="w-4 h-4 text-saltora-terracotta shrink-0 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="text-xs font-medium text-stone-200 group-hover:translate-x-1 group-hover:text-amber-100 transition-all duration-300">Bill of Lading</span>
                    </div>

                    <div class="py-2.5 border-b border-stone-800/80 flex items-center gap-3 group cursor-pointer">
                        <svg class="w-4 h-4 text-saltora-terracotta shrink-0 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="text-xs font-medium text-stone-200 group-hover:translate-x-1 group-hover:text-amber-100 transition-all duration-300">Certificate of Origin</span>
                    </div>

                    <div class="py-2.5 border-b border-stone-800/80 flex items-center gap-3 group cursor-pointer">
                        <svg class="w-4 h-4 text-saltora-terracotta shrink-0 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="text-xs font-medium text-stone-200 group-hover:translate-x-1 group-hover:text-amber-100 transition-all duration-300">Quality / Lab Reports (on request)</span>
                    </div>

                    <div class="py-2.5 border-b border-stone-800/80 flex items-center gap-3 group cursor-pointer">
                        <svg class="w-4 h-4 text-saltora-terracotta shrink-0 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="text-xs font-medium text-stone-200 group-hover:translate-x-1 group-hover:text-amber-100 transition-all duration-300">Export Documentation Support</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Shipment Formats 4 Photo Cards (7 cols) -->
            <div class="lg:col-span-7 space-y-6 reveal-on-scroll reveal-from-right">
                <div class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">
                    SHIPMENT FORMATS
                </div>

                <h2 class="text-3xl sm:text-4xl font-serif text-white font-normal leading-tight">
                    Packed for the journey
                </h2>

                <p class="text-stone-400 text-xs sm:text-sm font-light leading-relaxed">
                    Bulk, food-grade, retail and private-label packing are prepared to the confirmed specification before dispatch.
                </p>

                <!-- 4 Photo Cards (2x2 Grid) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    
                    <!-- Photo 1: Bulk Bags -->
                    <div class="relative group rounded-sm overflow-hidden h-48 border border-stone-800 bg-stone-900 cursor-pointer">
                        <img src="/bulk.jpg" alt="Bulk Bags Pink Salt" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <span class="font-serif text-sm font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-amber-200 inline-block">Bulk Bags</span>
                        </div>
                    </div>

                    <!-- Photo 2: Food-Grade Bags -->
                    <div class="relative group rounded-sm overflow-hidden h-48 border border-stone-800 bg-stone-900 cursor-pointer">
                        <img src="/abt2.jpg" alt="Food-Grade Bags Pink Salt" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <span class="font-serif text-sm font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-amber-200 inline-block">Food-Grade Bags</span>
                        </div>
                    </div>

                    <!-- Photo 3: Retail Packaging -->
                    <div class="relative group rounded-sm overflow-hidden h-48 border border-stone-800 bg-stone-900 cursor-pointer">
                        <img src="/bag1.jpg" alt="Retail Packaging Pink Salt" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <span class="font-serif text-sm font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-amber-200 inline-block">Retail Packaging</span>
                        </div>
                    </div>

                    <!-- Photo 4: Custom / Private Label -->
                    <div class="relative group rounded-sm overflow-hidden h-48 border border-stone-800 bg-stone-900 cursor-pointer">
                        <img src="/bag2.jpg" alt="Custom / Private Label Pink Salt" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <span class="font-serif text-sm font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-amber-200 inline-block">Custom / Private Label</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- READY WHEN YOU ARE CTA BANNER -->
    <section class="max-w-7xl mx-auto px-6 py-16 reveal-on-scroll reveal-scale">
        <div class="bg-[#F5EAE6] p-8 sm:p-12 rounded-sm border border-saltora-terracotta/20 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 shadow-sm">
            <div class="space-y-2 max-w-2xl">
                <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase block">READY WHEN YOU ARE</span>
                <h3 class="font-serif text-3xl sm:text-4xl text-saltora-text font-normal">
                    Send your specifications — receive a professional quotation
                </h3>
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
    </section>

    <!-- FOOTER SECTION -->
    <x-footer />
    {{-- <x-cart-drawer /> --}}

</body>
</html>
