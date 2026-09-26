<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us — SALTORA | Premium Himalayan Pink Salt Exporter</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Learn about SALTORA: Pakistan's premier Himalayan pink salt export house. Authentic sourcing from the Salt Range, quality-focused processing, and international B2B partnerships.">
    <meta name="keywords" content="About Saltora, Pink Salt Exporter Pakistan, Salt Range Mining, B2B Salt Exporter, Himalayan Rock Salt Sourcing">
    
    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="{ mobileMenuOpen: false }">

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
                <a href="/about" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1 cursor-pointer">ABOUT</a>
                <a href="/products" class="hover:text-saltora-terracotta transition-colors cursor-pointer">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors cursor-pointer">CERTIFICATIONS</a>
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors cursor-pointer">EXPORT & LOGISTICS</a>
                <a href="/contact" class="hover:text-saltora-terracotta transition-colors cursor-pointer">CONTACT</a>
            </nav>

            <!-- Header Action Button -->
            <div class="hidden sm:flex items-center">
                <a href="/contact" class="bg-saltora-dark hover:bg-black text-white px-6 py-3 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2 group cursor-pointer">
                    <span>REQUEST A QUOTE</span>
                    <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
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
            <a @click="mobileMenuOpen = false" href="/contact" class="block w-full mt-4 bg-saltora-terracotta text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer">
                REQUEST A QUOTE ↗
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
        </div>
    </section>

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
                    <li><a href="/about" class="hover:text-white transition-colors text-white font-medium cursor-pointer">About</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors cursor-pointer">Products</a></li>
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

</body>
</html>
