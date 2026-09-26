<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us — SALTORA | Authentic Himalayan Pink Salt Exporter Pakistan</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="SALTORA is a Pakistan-based supplier and exporter of premium Himalayan pink salt, serving international importers, wholesalers, distributors, and private-label brands.">
    <meta name="keywords" content="About Saltora, Himalayan Pink Salt Exporter, Pakistan Salt Range, B2B Salt Supplier, Export Quality Pink Salt">
    
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
                <a href="/about" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1">ABOUT</a>
                <a href="/products" class="hover:text-saltora-terracotta transition-colors">PRODUCTS</a>
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
            <a @click="mobileMenuOpen = false" href="/about" class="block py-2 text-saltora-terracotta font-bold">ABOUT</a>
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-text hover:text-saltora-terracotta">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-text hover:text-saltora-terracotta">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta">CONTACT</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block w-full mt-4 bg-saltora-terracotta text-white py-3 text-center text-xs font-bold tracking-wider uppercase">
                REQUEST A QUOTE ↗
            </a>
        </div>
    </header>

    <!-- ABOUT HERO SECTION -->
    <section class="relative bg-saltora-dark text-white py-24 md:py-36 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border">
        <img src="/sourcingsec.jpg" alt="Salt Mine Tunnel Backdrop" class="absolute inset-0 w-full h-full object-cover opacity-35 filter brightness-75">
        <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/75 to-black/60"></div>

        <div class="relative z-10 max-w-7xl mx-auto space-y-6">
            <div class="flex items-center gap-3 text-xs font-bold tracking-mega text-saltora-terracotta uppercase">
                <span class="w-8 h-px bg-saltora-terracotta"></span>
                <span>ABOUT SALTORA</span>
            </div>

            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-serif text-white font-normal leading-[1.08] max-w-4xl">
                Authentic salt. Professional export.
            </h1>

            <p class="text-stone-300 text-base sm:text-lg leading-relaxed max-w-2xl font-light">
                SALTORA is a Pakistan-based supplier and exporter of premium Himalayan pink salt — serving international importers, wholesalers, distributors, food manufacturers, private-label brands, retailers, restaurants and bulk buyers.
            </p>
        </div>
    </section>

    <!-- WHO WE ARE SECTION -->
    <section class="py-20 md:py-28 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <div class="lg:col-span-7 space-y-8">
                <div class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">
                    WHO WE ARE
                </div>

                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text leading-[1.12] font-normal">
                    Pakistan is the only true source of Himalayan pink salt — <span class="italic text-saltora-terracotta font-normal">and Saltora brings it to the world.</span>
                </h2>

                <div class="space-y-6 text-saltora-muted text-sm sm:text-base leading-relaxed font-light">
                    <p>
                        Formed over hundreds of millions of years in the Salt Range of Punjab, Pakistan, Himalayan pink salt is prized worldwide for its natural rose colour, mineral character and purity. Saltora exists to connect that origin directly with serious international buyers.
                    </p>
                    <p>
                        We work as a B2B partner — not a retail shop. Our focus is reliable sourcing, quality-conscious processing and disciplined export preparation, so that importers, distributors, manufacturers and private-label brands receive exactly the specification they agreed, shipment after shipment.
                    </p>
                    <p>
                        Saltora believes credibility is earned through transparency: clear terms, verifiable registration, recognised food-safety standards and professional communication at every step of the trade.
                    </p>
                </div>
            </div>

            <div class="lg:col-span-5 space-y-8 pl-0 lg:pl-6 border-l-0 lg:border-l border-saltora-border/80">
                <div class="space-y-2 border-l-2 border-saltora-terracotta/40 pl-4 py-1 hover:border-saltora-terracotta transition-colors">
                    <span class="text-xs font-serif text-saltora-muted/70 font-normal">01</span>
                    <h3 class="font-serif text-2xl text-saltora-text font-normal">Sourcing</h3>
                    <p class="text-xs text-saltora-muted leading-relaxed font-light">
                        Natural rock salt selected from the Himalayan salt ranges of Pakistan for colour, purity and mineral character.
                    </p>
                </div>

                <div class="space-y-2 border-l-2 border-saltora-terracotta/40 pl-4 py-1 hover:border-saltora-terracotta transition-colors">
                    <span class="text-xs font-serif text-saltora-muted/70 font-normal">02</span>
                    <h3 class="font-serif text-2xl text-saltora-text font-normal">Processing & Manufacturing</h3>
                    <p class="text-xs text-saltora-muted leading-relaxed font-light">
                        Cleaning, crushing and grading into buyer-ready formats — fine, coarse, granules or raw chunks — with careful, hygienic handling.
                    </p>
                </div>

                <div class="space-y-2 border-l-2 border-saltora-terracotta/40 pl-4 py-1 hover:border-saltora-terracotta transition-colors">
                    <span class="text-xs font-serif text-saltora-muted/70 font-normal">03</span>
                    <h3 class="font-serif text-2xl text-saltora-text font-normal">Retail & Private Label</h3>
                    <p class="text-xs text-saltora-muted leading-relaxed font-light">
                        Export-ready preparation for retail brands and private-label programs, with packaging aligned to buyer requirements.
                    </p>
                </div>

                <div class="space-y-2 border-l-2 border-saltora-terracotta/40 pl-4 py-1 hover:border-saltora-terracotta transition-colors">
                    <span class="text-xs font-serif text-saltora-muted/70 font-normal">04</span>
                    <h3 class="font-serif text-2xl text-saltora-text font-normal">Export & Documentation</h3>
                    <p class="text-xs text-saltora-muted leading-relaxed font-light">
                        Professional export documentation and shipment coordination under clear FOB terms.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- 3-IMAGE PHOTO BANNER -->
    <section class="border-y border-saltora-border bg-saltora-card/30">
        <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-saltora-border">
            <div class="relative group h-72 sm:h-96 overflow-hidden">
                <img src="/aboutimg.jpg" alt="Hand-Checked Quality Pink Salt" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 text-white z-10">
                    <p class="font-serif italic text-xl sm:text-2xl font-normal drop-shadow-md">Hand-Checked Quality</p>
                </div>
            </div>

            <div class="relative group h-72 sm:h-96 overflow-hidden">
                <img src="/heroimg.jpg" alt="Natural Mineral Character Pink Salt" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 text-white z-10">
                    <p class="font-serif italic text-xl sm:text-2xl font-normal drop-shadow-md">Natural Mineral Character</p>
                </div>
            </div>

            <div class="relative group h-72 sm:h-96 overflow-hidden">
                <img src="/product3.jpg" alt="Food-Grade Care Pink Salt" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 text-white z-10">
                    <p class="font-serif italic text-xl sm:text-2xl font-normal drop-shadow-md">Food-Grade Care</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW WE WORK SECTION -->
    <section class="py-20 md:py-28 px-6 md:px-12 max-w-7xl mx-auto space-y-16">
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">HOW WE WORK</span>
            <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                From the Salt Range to your destination port
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 border border-saltora-border border-collapse bg-saltora-bg divide-y sm:divide-y-0 sm:divide-x border-saltora-border">
            <div class="p-8 space-y-4 hover:bg-saltora-card/40 transition-colors">
                <span class="font-serif text-4xl font-light text-saltora-muted/60 block">01</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Sourcing</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Natural rock salt is sourced from the Himalayan salt ranges of Pakistan, selected for colour, purity and mineral character.
                </p>
            </div>

            <div class="p-8 space-y-4 hover:bg-saltora-card/40 transition-colors">
                <span class="font-serif text-4xl font-light text-saltora-muted/60 block">02</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Processing</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Salt is cleaned, crushed and graded into buyer-ready formats — fine, coarse, granules or raw chunks — under quality-conscious handling.
                </p>
            </div>

            <div class="p-8 space-y-4 hover:bg-saltora-card/40 transition-colors">
                <span class="font-serif text-4xl font-light text-saltora-muted/60 block">03</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Quality Check</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Each lot is reviewed for cleanliness, grain consistency and food-safety discipline before it moves to packing.
                </p>
            </div>

            <div class="p-8 space-y-4 hover:bg-saltora-card/40 transition-colors">
                <span class="font-serif text-4xl font-light text-saltora-muted/60 block">04</span>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Packing & Export</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Products are packed to agreed specifications, documented, and prepared for international shipment under FOB terms.
                </p>
            </div>
        </div>

        <!-- Certifications Seals & CTA Button -->
        <div class="pt-8 text-center space-y-10">
            <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-10">
                <div class="w-32 h-32 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/80 shadow-sm">
                    <span class="text-[7px] tracking-widest text-saltora-muted uppercase font-semibold mb-1">SALTORA · PAKISTAN</span>
                    <span class="font-serif text-xs font-bold text-saltora-text leading-tight">ISO 22000:2018</span>
                    <span class="text-[7px] font-bold tracking-widest text-saltora-terracotta uppercase mt-1">CERTIFIED</span>
                </div>

                <div class="w-32 h-32 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/80 shadow-sm">
                    <span class="text-[7px] tracking-widest text-saltora-muted uppercase font-semibold mb-1">SALTORA · PAKISTAN</span>
                    <span class="font-serif text-sm font-bold text-saltora-text leading-tight">Halal</span>
                    <span class="text-[7px] font-bold tracking-widest text-saltora-terracotta uppercase mt-1">CERTIFIED</span>
                </div>

                <div class="w-32 h-32 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/80 shadow-sm">
                    <span class="text-[7px] tracking-widest text-saltora-muted uppercase font-semibold mb-1">SALTORA · PAKISTAN</span>
                    <span class="font-serif text-[11px] font-bold text-saltora-text leading-tight">Codex CXS<br>150:1985</span>
                    <span class="text-[7px] font-bold tracking-widest text-saltora-terracotta uppercase mt-1">CERTIFIED</span>
                </div>

                <div class="w-32 h-32 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/80 shadow-sm">
                    <span class="text-[7px] tracking-widest text-saltora-muted uppercase font-semibold mb-1">SALTORA · PAKISTAN</span>
                    <span class="font-serif text-[11px] font-bold text-saltora-text leading-tight">Chamber of<br>Commerce &<br>Industry</span>
                    <span class="text-[7px] font-bold tracking-widest text-saltora-terracotta uppercase mt-0.5">REGISTERED</span>
                </div>
            </div>

            <div>
                <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-9 py-4 text-xs font-bold tracking-wider uppercase transition-all shadow-md inline-flex items-center gap-3 group">
                    <span>WORK WITH SALTORA</span>
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
                    <li><a href="/about" class="hover:text-white transition-colors text-white font-medium">About</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors">Products</a></li>
                    <li><a href="/certifications" class="hover:text-white transition-colors">Certifications</a></li>
                    <li><a href="/export-logistics" class="hover:text-white transition-colors">Export & Logistics</a></li>
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
