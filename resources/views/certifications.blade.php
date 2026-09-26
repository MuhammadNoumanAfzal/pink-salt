<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Certifications & Standards — SALTORA | Himalayan Pink Salt Exporter</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Verifiable certifications and food safety standards for SALTORA Himalayan Pink Salt exports: ISO 22000:2018, Halal, Codex CXS 150:1985, and Chamber of Commerce registration.">
    <meta name="keywords" content="Saltora Certifications, ISO 22000 Pink Salt, Halal Salt Exporter, Codex CXS 150, Pakistan Salt Registration">
    
    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="{ mobileMenuOpen: false }">

    <!-- Sticky Navigation Header -->
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
                <a href="/certifications" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1">CERTIFICATIONS</a>
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
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-text hover:text-saltora-terracotta">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-terracotta font-bold">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta">CONTACT</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block w-full mt-4 bg-saltora-terracotta text-white py-3 text-center text-xs font-bold tracking-wider uppercase">
                REQUEST A QUOTE ↗
            </a>
        </div>
    </header>

    <!-- CERTIFICATIONS HERO SECTION -->
    <section class="relative bg-saltora-dark text-white py-24 md:py-32 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border">
        <!-- Backdrop Image (`aboutimg.jpg`) -->
        <img src="/aboutimg.jpg" alt="Himalayan Salt Quality Care" class="absolute inset-0 w-full h-full object-cover opacity-35 filter brightness-75">
        <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/75 to-black/60"></div>

        <div class="relative z-10 max-w-7xl mx-auto space-y-6">
            <!-- Category Sub-tag -->
            <div class="flex items-center gap-3 text-xs font-bold tracking-mega text-saltora-terracotta uppercase">
                <span class="w-8 h-px bg-saltora-terracotta"></span>
                <span>QUALITY & CERTIFICATIONS</span>
            </div>

            <!-- Headline -->
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-serif text-white font-normal leading-[1.08] max-w-4xl">
                Standards you can verify
            </h1>

            <!-- Paragraph -->
            <p class="text-stone-300 text-base sm:text-lg leading-relaxed max-w-2xl font-light">
                Saltora backs every shipment with recognised food-safety standards and formal business registration — no inflated claims, only what we can document.
            </p>
        </div>
    </section>

    <!-- 4 CERTIFICATION CARDS GRID -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-saltora-bg">
        <div class="max-w-7xl mx-auto space-y-12">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Card 1: ISO 22000:2018 -->
                <div class="bg-white border border-saltora-border p-8 rounded-sm shadow-sm flex items-start gap-6 hover:shadow-md transition-shadow">
                    <!-- Circular Stamp Seal -->
                    <div class="w-28 h-28 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-[#FAF7F2] shrink-0">
                        <span class="text-[7px] tracking-widest text-saltora-muted uppercase font-semibold mb-0.5">SALTORA</span>
                        <span class="font-serif text-[11px] font-bold text-saltora-text leading-tight">ISO<br>22000:2018</span>
                        <span class="text-[7px] font-bold tracking-widest text-saltora-terracotta uppercase mt-0.5">CERTIFIED</span>
                    </div>

                    <div class="space-y-2">
                        <span class="text-[10px] font-bold tracking-widest text-saltora-muted uppercase block">FOOD SAFETY MANAGEMENT</span>
                        <h3 class="font-serif text-2xl text-saltora-text font-normal">ISO 22000:2018</h3>
                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Saltora operates with a food-safety management approach aligned to ISO 22000:2018 — covering hygienic handling, processing discipline and batch-level care for food-grade salt.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Halal Certified -->
                <div class="bg-white border border-saltora-border p-8 rounded-sm shadow-sm flex items-start gap-6 hover:shadow-md transition-shadow">
                    <!-- Circular Stamp Seal -->
                    <div class="w-28 h-28 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-[#FAF7F2] shrink-0">
                        <span class="text-[7px] tracking-widest text-saltora-muted uppercase font-semibold mb-0.5">SALTORA</span>
                        <span class="font-serif text-sm font-bold text-saltora-text leading-tight">Halal</span>
                        <span class="text-[7px] font-bold tracking-widest text-saltora-terracotta uppercase mt-1">CERTIFIED</span>
                    </div>

                    <div class="space-y-2">
                        <span class="text-[10px] font-bold tracking-widest text-saltora-muted uppercase block">HALAL CERTIFIED</span>
                        <h3 class="font-serif text-2xl text-saltora-text font-normal">Halal</h3>
                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Our Himalayan pink salt is Halal certified, giving buyers in Muslim-majority and Halal-sensitive markets full confidence in compliance.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Codex CXS 150:1985 -->
                <div class="bg-white border border-saltora-border p-8 rounded-sm shadow-sm flex items-start gap-6 hover:shadow-md transition-shadow">
                    <!-- Circular Stamp Seal -->
                    <div class="w-28 h-28 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-[#FAF7F2] shrink-0">
                        <span class="text-[7px] tracking-widest text-saltora-muted uppercase font-semibold mb-0.5">SALTORA</span>
                        <span class="font-serif text-[10px] font-bold text-saltora-text leading-tight">Codex CXS<br>150:1985</span>
                        <span class="text-[7px] font-bold tracking-widest text-saltora-terracotta uppercase mt-0.5">CERTIFIED</span>
                    </div>

                    <div class="space-y-2">
                        <span class="text-[10px] font-bold tracking-widest text-saltora-muted uppercase block">CODEX FOOD-GRADE STANDARD</span>
                        <h3 class="font-serif text-2xl text-saltora-text font-normal">Codex CXS 150:1985</h3>
                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Our edible salt is prepared with reference to the Codex standard for food grade salt (CXS 150-1985), supporting international food trade requirements.
                        </p>
                    </div>
                </div>

                <!-- Card 4: Chamber of Commerce & Industry -->
                <div class="bg-white border border-saltora-border p-8 rounded-sm shadow-sm flex items-start gap-6 hover:shadow-md transition-shadow">
                    <!-- Circular Stamp Seal -->
                    <div class="w-28 h-28 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-[#FAF7F2] shrink-0">
                        <span class="text-[7px] tracking-widest text-saltora-muted uppercase font-semibold mb-0.5">SALTORA</span>
                        <span class="font-serif text-[9px] font-bold text-saltora-text leading-tight">Chamber of<br>Commerce &<br>Industry</span>
                        <span class="text-[7px] font-bold tracking-widest text-saltora-terracotta uppercase mt-0.5">REGISTERED</span>
                    </div>

                    <div class="space-y-2">
                        <span class="text-[10px] font-bold tracking-widest text-saltora-muted uppercase block">REGISTERED MEMBER</span>
                        <h3 class="font-serif text-2xl text-saltora-text font-normal">Chamber of Commerce & Industry</h3>
                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Saltora is registered with the Chamber of Commerce and Industry — a verifiable, formally registered Pakistan export business.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Dark Banner: Documentation Available with Shipments -->
            <div class="bg-[#1C1917] p-8 md:p-10 rounded-sm text-white shadow-xl flex flex-col lg:flex-row items-center justify-between gap-8 border border-stone-800">
                <div class="flex items-start gap-5">
                    <div class="w-12 h-12 rounded-sm border border-stone-700 bg-stone-900 flex items-center justify-center text-xl shrink-0 text-amber-200">
                        🛡
                    </div>
                    <div class="space-y-2">
                        <h3 class="font-serif text-2xl font-normal text-white">Documentation available with shipments</h3>
                        <p class="text-xs text-stone-300 font-light leading-relaxed max-w-3xl">
                            Certificate copies, quality and lab reports can be shared with serious buyers during the quotation process and with confirmed orders. Saltora presents only certifications it actually holds — we do not claim FDA, BRC, IFS, Kosher, HACCP or organic approvals.
                        </p>
                    </div>
                </div>

                <div class="shrink-0">
                    <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-8 py-4 text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center gap-2 group">
                        <span>ASK FOR DOCUMENTS</span>
                        <span class="transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- OUR QUALITY APPROACH (PINK BLUSH BACKGROUND) -->
    <section class="bg-[#F5EAE6] py-20 md:py-28 px-6 md:px-12 border-t border-saltora-terracotta/20">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Image (`product3.jpg`) -->
            <div class="lg:col-span-5">
                <div class="rounded-sm overflow-hidden border border-saltora-terracotta/20 shadow-lg">
                    <img src="/product3.jpg" alt="Quality Salt Crystals on Slate" class="w-full h-[450px] object-cover">
                </div>
            </div>

            <!-- Right Quality Steps Content -->
            <div class="lg:col-span-7 space-y-6">
                <div class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">
                    OUR QUALITY APPROACH
                </div>

                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal leading-[1.12]">
                    Quality is a process, not a promise
                </h2>

                <div class="space-y-5 pt-4 border-t border-saltora-terracotta/20">
                    
                    <div class="py-3 border-b border-saltora-terracotta/15 flex items-start gap-5">
                        <span class="font-serif text-sm text-saltora-muted font-normal pt-0.5">01</span>
                        <div>
                            <h4 class="font-serif text-xl text-saltora-text font-normal">Careful selection at source</h4>
                            <p class="text-xs text-saltora-muted font-light mt-1 leading-relaxed">Rock salt is chosen for colour, purity and mineral character before processing begins.</p>
                        </div>
                    </div>

                    <div class="py-3 border-b border-saltora-terracotta/15 flex items-start gap-5">
                        <span class="font-serif text-sm text-saltora-muted font-normal pt-0.5">02</span>
                        <div>
                            <h4 class="font-serif text-xl text-saltora-text font-normal">Hygienic, food-safe handling</h4>
                            <p class="text-xs text-saltora-muted font-light mt-1 leading-relaxed">Processing and packing follow a food-safety management approach aligned to ISO 22000:2018.</p>
                        </div>
                    </div>

                    <div class="py-3 border-b border-saltora-terracotta/15 flex items-start gap-5">
                        <span class="font-serif text-sm text-saltora-muted font-normal pt-0.5">03</span>
                        <div>
                            <h4 class="font-serif text-xl text-saltora-text font-normal">Grain consistency per lot</h4>
                            <p class="text-xs text-saltora-muted font-light mt-1 leading-relaxed">Fine, coarse and granulated formats are graded to the agreed specification.</p>
                        </div>
                    </div>

                    <div class="py-3 flex items-start gap-5">
                        <span class="font-serif text-sm text-saltora-muted font-normal pt-0.5">04</span>
                        <div>
                            <h4 class="font-serif text-xl text-saltora-text font-normal">Pre-shipment review</h4>
                            <p class="text-xs text-saltora-muted font-light mt-1 leading-relaxed">Each export lot is checked before documentation and dispatch.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- FOOTER SECTION -->
    <footer class="bg-[#141211] text-stone-400 py-16 px-6 md:px-12 border-t border-stone-800 text-xs">
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

                <!-- Social Icons Bar -->
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
                    <a href="#" class="w-8 h-8 rounded-full border border-stone-700 flex items-center justify-center hover:border-white hover:text-white transition-colors text-[10px] font-bold">
                        TT
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
                    <li><a href="/certifications" class="hover:text-white transition-colors text-white font-medium">Certifications</a></li>
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
