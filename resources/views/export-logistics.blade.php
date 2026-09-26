<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Export & Logistics — SALTORA | Professional Salt Buying Process</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="SALTORA's transparent 7-step export and shipping process for Himalayan pink salt: FOB terms, documentation, custom clearance, and international bulk delivery.">
    <meta name="keywords" content="Export Pink Salt Pakistan, FOB Salt Exporter, Salt Range Shipping, B2B Salt Logistics, Saltora Export Documentation">
    
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
                <a href="/products" class="hover:text-saltora-terracotta transition-colors">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors">CERTIFICATIONS</a>
                <a href="/export-logistics" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1">EXPORT & LOGISTICS</a>
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
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-text hover:text-saltora-terracotta">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-text hover:text-saltora-terracotta">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-terracotta font-bold">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta">CONTACT</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block w-full mt-4 bg-saltora-terracotta text-white py-3 text-center text-xs font-bold tracking-wider uppercase">
                REQUEST A QUOTE ↗
            </a>
        </div>
    </header>

    <!-- HERO SECTION (DARK SHIPPING PORT BACKGROUND OVERLAY) -->
    <section class="relative bg-saltora-dark text-white py-24 md:py-36 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border">
        <!-- Backdrop Image (`export nd logisyt her.jpg`) -->
        <img src="/export nd logisyt her.jpg" alt="Shipping Container Port Crane Backdrop" class="absolute inset-0 w-full h-full object-cover opacity-35 filter brightness-75">
        <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/75 to-black/60"></div>

        <div class="relative z-10 max-w-7xl mx-auto space-y-6">
            <!-- Category Sub-tag -->
            <div class="flex items-center gap-3 text-xs font-bold tracking-mega text-saltora-terracotta uppercase">
                <span class="w-8 h-px bg-saltora-terracotta"></span>
                <span>EXPORT & LOGISTICS</span>
            </div>

            <!-- Headline -->
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-serif text-white font-normal leading-[1.08] max-w-4xl">
                A clear, professional buying process
            </h1>

            <!-- Paragraph -->
            <p class="text-stone-300 text-base sm:text-lg leading-relaxed max-w-2xl font-light">
                From first inquiry to delivery at your destination port — Saltora keeps every step documented, transparent and on schedule.
            </p>
        </div>
    </section>

    <!-- INCOTERMS TERRACOTTA BANNER -->
    <section class="max-w-7xl mx-auto px-6 pt-12">
        <div class="bg-saltora-terracotta text-white p-6 sm:p-8 rounded-sm shadow-md flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
            <div class="space-y-1 max-w-3xl">
                <span class="text-[10px] font-bold tracking-widest text-amber-200 uppercase block">INCOTERMS</span>
                <h3 class="font-serif text-2xl font-normal text-white">FOB — Free On Board</h3>
                <p class="text-xs text-stone-100 font-light leading-relaxed">
                    Payment terms: <strong class="font-semibold text-white">50% advance & 50% upon presentation of the Bill of Lading</strong>. Presented exactly as Saltora's standard export terms — other arrangements can be discussed during quotation.
                </p>
            </div>

            <div class="shrink-0">
                <a href="/contact" class="border border-white hover:bg-white hover:text-saltora-terracotta text-white px-6 py-3 text-xs font-bold tracking-wider uppercase transition-all flex items-center gap-2">
                    <span>START AN INQUIRY</span>
                    <span>↗</span>
                </a>
            </div>
        </div>
    </section>

    <!-- SEVEN STEPS FROM INQUIRY TO DELIVERY SECTION -->
    <section class="py-20 md:py-28 px-6 md:px-12 max-w-7xl mx-auto space-y-12">
        
        <!-- Header -->
        <div class="space-y-3">
            <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">HOW BUYING WORKS</span>
            <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                Seven steps from inquiry to delivery
            </h2>
        </div>

        <!-- 7 Process Steps Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 border-t border-saltora-border/80">
            
            <!-- Step 01 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5">
                <span class="font-serif text-2xl text-saltora-muted/70 font-normal shrink-0">01</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal">Send Inquiry</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">Share your product, quantity and destination through the quote form or email.</p>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5">
                <span class="font-serif text-2xl text-saltora-muted/70 font-normal shrink-0">02</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal">Discuss Product & Specifications</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">We align on grade, grain size, packaging and any private-label requirements.</p>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5">
                <span class="font-serif text-2xl text-saltora-muted/70 font-normal shrink-0">03</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal">Receive Quotation</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">You receive a clear, written quotation with specifications and terms.</p>
                </div>
            </div>

            <!-- Step 04 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5">
                <span class="font-serif text-2xl text-saltora-muted/70 font-normal shrink-0">04</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal">Confirm Order</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">Order is confirmed against the agreed proforma and production is scheduled.</p>
                </div>
            </div>

            <!-- Step 05 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5">
                <span class="font-serif text-2xl text-saltora-muted/70 font-normal shrink-0">05</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal">Production / Preparation</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">Your salt is processed, graded and packed to the confirmed specification.</p>
                </div>
            </div>

            <!-- Step 06 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5">
                <span class="font-serif text-2xl text-saltora-muted/70 font-normal shrink-0">06</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal">Documentation & Shipment</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">Export documentation is prepared and the shipment is dispatched from Pakistan.</p>
                </div>
            </div>

            <!-- Step 07 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5 md:col-span-2">
                <span class="font-serif text-2xl text-saltora-muted/70 font-normal shrink-0">07</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal">Delivery</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed max-w-xl">Cargo moves to your destination port with documentation cleared for smooth clearance.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- DOCUMENTATION & PACKED FOR THE JOURNEY (DARK SECTION) -->
    <section class="bg-[#181513] text-white py-20 md:py-28 px-6 md:px-12 border-t border-stone-800">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <!-- Left Column: Documentation (5 cols) -->
            <div class="lg:col-span-5 space-y-6">
                <div class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">
                    DOCUMENTATION
                </div>

                <h2 class="text-3xl sm:text-4xl font-serif text-white font-normal leading-tight">
                    Paperwork handled professionally
                </h2>

                <p class="text-stone-400 text-xs sm:text-sm font-light leading-relaxed">
                    Export documentation is prepared and shared with buyers so customs clearance at the destination port stays smooth.
                </p>

                <!-- Document Checklist -->
                <div class="space-y-3 pt-2">
                    <div class="py-2.5 border-b border-stone-800/80 flex items-center gap-3">
                        <span class="text-stone-400 text-xs">📄</span>
                        <span class="text-xs font-medium text-stone-200">Commercial Invoice</span>
                    </div>

                    <div class="py-2.5 border-b border-stone-800/80 flex items-center gap-3">
                        <span class="text-stone-400 text-xs">📄</span>
                        <span class="text-xs font-medium text-stone-200">Packing List</span>
                    </div>

                    <div class="py-2.5 border-b border-stone-800/80 flex items-center gap-3">
                        <span class="text-stone-400 text-xs">📄</span>
                        <span class="text-xs font-medium text-stone-200">Bill of Lading</span>
                    </div>

                    <div class="py-2.5 border-b border-stone-800/80 flex items-center gap-3">
                        <span class="text-stone-400 text-xs">📄</span>
                        <span class="text-xs font-medium text-stone-200">Certificate of Origin</span>
                    </div>

                    <div class="py-2.5 border-b border-stone-800/80 flex items-center gap-3">
                        <span class="text-stone-400 text-xs">📄</span>
                        <span class="text-xs font-medium text-stone-200">Quality / Lab Reports (on request)</span>
                    </div>

                    <div class="py-2.5 border-b border-stone-800/80 flex items-center gap-3">
                        <span class="text-stone-400 text-xs">📄</span>
                        <span class="text-xs font-medium text-stone-200">Export Documentation Support</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Shipment Formats 4 Photo Cards (7 cols) -->
            <div class="lg:col-span-7 space-y-6">
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
                    <div class="relative group rounded-sm overflow-hidden h-48 border border-stone-800 bg-stone-900">
                        <img src="/bulk.jpg" alt="Bulk Bags Pink Salt" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <span class="font-serif text-sm font-normal">Bulk Bags</span>
                        </div>
                    </div>

                    <!-- Photo 2: Food-Grade Bags -->
                    <div class="relative group rounded-sm overflow-hidden h-48 border border-stone-800 bg-stone-900">
                        <img src="/abt2.jpg" alt="Food-Grade Bags Pink Salt" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <span class="font-serif text-sm font-normal">Food-Grade Bags</span>
                        </div>
                    </div>

                    <!-- Photo 3: Retail Packaging -->
                    <div class="relative group rounded-sm overflow-hidden h-48 border border-stone-800 bg-stone-900">
                        <img src="/bag1.jpg" alt="Retail Packaging Pink Salt" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <span class="font-serif text-sm font-normal">Retail Packaging</span>
                        </div>
                    </div>

                    <!-- Photo 4: Custom / Private Label -->
                    <div class="relative group rounded-sm overflow-hidden h-48 border border-stone-800 bg-stone-900">
                        <img src="/bag2.jpg" alt="Custom / Private Label Pink Salt" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <span class="font-serif text-sm font-normal">Custom / Private Label</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- READY WHEN YOU ARE CTA BANNER -->
    <section class="max-w-7xl mx-auto px-6 py-16">
        <div class="bg-[#F5EAE6] p-8 sm:p-12 rounded-sm border border-saltora-terracotta/20 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 shadow-sm">
            <div class="space-y-2 max-w-2xl">
                <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase block">READY WHEN YOU ARE</span>
                <h3 class="font-serif text-3xl sm:text-4xl text-saltora-text font-normal">
                    Send your specifications — receive a professional quotation
                </h3>
            </div>

            <div class="shrink-0">
                <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-8 py-4 text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center gap-2 group">
                    <span>REQUEST A QUOTE</span>
                    <span class="transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
                </a>
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
                    <a href="#" class="w-8 h-8 rounded-full border border-stone-700 flex items-center justify-center hover:border-white hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full border border-stone-700 flex items-center justify-center hover:border-white hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.7 5H18V0h-3.808C10.592 0 9 1.583 9 4.615V8z"/></svg>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full border border-stone-700 flex items-center justify-center hover:border-white hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                    <a href="https://wa.me/923180735748" class="w-8 h-8 rounded-full border border-stone-700 flex items-center justify-center hover:border-white hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99 0-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    </a>
                </div>
            </div>

            <div class="space-y-3">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">NAVIGATE</h4>
                <ul class="space-y-2 text-stone-400 font-light">
                    <li><a href="/" class="hover:text-white transition-colors">Home</a></li>
                    <li><a href="/about" class="hover:text-white transition-colors">About</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors">Products</a></li>
                    <li><a href="/certifications" class="hover:text-white transition-colors">Certifications</a></li>
                    <li><a href="/export-logistics" class="hover:text-white transition-colors text-white font-medium">Export & Logistics</a></li>
                    <li><a href="/contact" class="hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>

            <div class="lg:col-span-2 space-y-4">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">CONTACT</h4>
                <div class="space-y-2 text-stone-400 font-light">
                    <p class="flex items-center gap-2">
                        <span class="text-stone-500">✉</span>
                        <a href="mailto:saltora1329@gmail.com" class="hover:text-white transition-colors">saltora1329@gmail.com</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="text-stone-500">📞</span>
                        <a href="tel:+923180735748" class="hover:text-white transition-colors">+92 318 0735748</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="text-stone-500">🌐</span>
                        <a href="http://www.saltora.net" target="_blank" class="hover:text-white transition-colors">www.saltora.net</a>
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

</body>
</html>
