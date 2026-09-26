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
                <a href="/products" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1">PRODUCTS</a>
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
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-terracotta font-bold">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-text hover:text-saltora-terracotta">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta">CONTACT</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block w-full mt-4 bg-saltora-terracotta text-white py-3 text-center text-xs font-bold tracking-wider uppercase">
                REQUEST A QUOTE ↗
            </a>
        </div>
    </header>

    <!-- PRODUCTS HERO SECTION -->
    <section class="relative bg-saltora-dark text-white py-24 md:py-32 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border">
        <!-- Backdrop Image (`heroimg.jpg`) -->
        <img src="/heroimg.jpg" alt="Salt Crystals Backdrop" class="absolute inset-0 w-full h-full object-cover opacity-35 filter brightness-75">
        <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/75 to-black/60"></div>

        <div class="relative z-10 max-w-7xl mx-auto space-y-6">
            <!-- Category Sub-tag -->
            <div class="flex items-center gap-3 text-xs font-bold tracking-mega text-saltora-terracotta uppercase">
                <span class="w-8 h-px bg-saltora-terracotta"></span>
                <span>PRODUCTS</span>
            </div>

            <!-- Headline -->
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-serif text-white font-normal leading-[1.08] max-w-4xl">
                The Saltora product range
            </h1>

            <!-- Paragraph -->
            <p class="text-stone-300 text-base sm:text-lg leading-relaxed max-w-2xl font-light">
                Realistic, export-ready Himalayan pink salt categories for international B2B buyers — prepared to agreed specifications, with packaging discussed per requirement.
            </p>
        </div>
    </section>

    <!-- 7 PRODUCTS GRID SECTION -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-saltora-bg">
        <div class="max-w-7xl mx-auto space-y-16">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Product 1: Himalayan Pink Salt -->
                <div class="bg-white border border-saltora-border p-6 rounded-sm flex flex-col justify-between hover:shadow-lg transition-shadow duration-300 group">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card">
                            <img src="/product1.jpg" alt="Himalayan Pink Salt Raw" class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1">
                            Himalayan Pink Salt
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Authentic Pakistani Himalayan pink salt in its natural, mineral-rich form — the core of the Saltora range for food and retail buyers.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2]">EDIBLE / FOOD GRADE</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2]">RETAIL & BULK</span>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-saltora-border/60 mt-6">
                        <a href="/contact" class="text-xs font-bold tracking-widest text-saltora-text uppercase flex items-center justify-between w-full group-hover:text-saltora-terracotta transition-colors">
                            <span>REQUEST QUOTE</span>
                            <span>↗</span>
                        </a>
                    </div>
                </div>

                <!-- Product 2: Fine Himalayan Pink Salt -->
                <div class="bg-white border border-saltora-border p-6 rounded-sm flex flex-col justify-between hover:shadow-lg transition-shadow duration-300 group">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card">
                            <img src="/product2.jpg" alt="Fine Himalayan Pink Salt" class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1">
                            Fine Himalayan Pink Salt
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Finely milled pink salt with a smooth, even texture — suited to table salt, food manufacturing, seasoning blends and food-service use.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2]">FINE GRAIN</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2]">TABLE & MANUFACTURING</span>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-saltora-border/60 mt-6">
                        <a href="/contact" class="text-xs font-bold tracking-widest text-saltora-text uppercase flex items-center justify-between w-full group-hover:text-saltora-terracotta transition-colors">
                            <span>REQUEST QUOTE</span>
                            <span>↗</span>
                        </a>
                    </div>
                </div>

                <!-- Product 3: Coarse Himalayan Pink Salt -->
                <div class="bg-white border border-saltora-border p-6 rounded-sm flex flex-col justify-between hover:shadow-lg transition-shadow duration-300 group">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card">
                            <img src="/product3.jpg" alt="Coarse Himalayan Pink Salt" class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1">
                            Coarse Himalayan Pink Salt
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Coarse, sparkling pink salt crystals for grinders, gourmet retail, food processing and culinary applications.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2]">COARSE GRAIN</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2]">GRINDERS & GOURMET</span>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-saltora-border/60 mt-6">
                        <a href="/contact" class="text-xs font-bold tracking-widest text-saltora-text uppercase flex items-center justify-between w-full group-hover:text-saltora-terracotta transition-colors">
                            <span>REQUEST QUOTE</span>
                            <span>↗</span>
                        </a>
                    </div>
                </div>

                <!-- Product 4: Himalayan Salt Granules -->
                <div class="bg-white border border-saltora-border p-6 rounded-sm flex flex-col justify-between hover:shadow-lg transition-shadow duration-300 group">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card">
                            <img src="/product4.jpg" alt="Himalayan Salt Granules" class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1">
                            Himalayan Salt Granules
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Uniform mid-size pink salt granules for food production, bath and wellness products, and further processing by manufacturers.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2]">GRANULATED</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2]">FOOD & WELLNESS</span>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-saltora-border/60 mt-6">
                        <a href="/contact" class="text-xs font-bold tracking-widest text-saltora-text uppercase flex items-center justify-between w-full group-hover:text-saltora-terracotta transition-colors">
                            <span>REQUEST QUOTE</span>
                            <span>↗</span>
                        </a>
                    </div>
                </div>

                <!-- Product 5: Salt Chunks / Lumps -->
                <div class="bg-white border border-saltora-border p-6 rounded-sm flex flex-col justify-between hover:shadow-lg transition-shadow duration-300 group">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card">
                            <img src="/sourcingsec.jpg" alt="Salt Chunks / Lumps" class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1">
                            Salt Chunks / Lumps
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Natural rock salt chunks and lumps in raw form — for buyers who process, mill or craft salt products to their own specifications.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2]">RAW ROCK FORM</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2]">FURTHER PROCESSING</span>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-saltora-border/60 mt-6">
                        <a href="/contact" class="text-xs font-bold tracking-widest text-saltora-text uppercase flex items-center justify-between w-full group-hover:text-saltora-terracotta transition-colors">
                            <span>REQUEST QUOTE</span>
                            <span>↗</span>
                        </a>
                    </div>
                </div>

                <!-- Product 6: Industrial / Bulk Salt -->
                <div class="bg-white border border-saltora-border p-6 rounded-sm flex flex-col justify-between hover:shadow-lg transition-shadow duration-300 group">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card">
                            <img src="/bulk.jpg" alt="Industrial / Bulk Salt" class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1">
                            Industrial / Bulk Salt
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Bulk-supply Himalayan salt for industrial applications, large-volume buyers and non-food-based export programs.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2]">BULK VOLUME</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2]">INDUSTRIAL USE</span>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-saltora-border/60 mt-6">
                        <a href="/contact" class="text-xs font-bold tracking-widest text-saltora-text uppercase flex items-center justify-between w-full group-hover:text-saltora-terracotta transition-colors">
                            <span>REQUEST QUOTE</span>
                            <span>↗</span>
                        </a>
                    </div>
                </div>

                <!-- Product 7: Custom Packaging / Private Label -->
                <div class="bg-white border border-saltora-border p-6 rounded-sm flex flex-col justify-between hover:shadow-lg transition-shadow duration-300 group md:col-span-2 lg:col-span-1">
                    <div class="space-y-4">
                        <div class="aspect-4/3 overflow-hidden rounded-sm bg-saltora-card">
                            <img src="/bag2.jpg" alt="Custom Packaging Private Label Pouches" class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>

                        <h3 class="font-serif text-2xl text-saltora-text font-normal pt-1">
                            Custom Packaging / Private Label
                        </h3>

                        <p class="text-xs text-saltora-muted leading-relaxed font-light">
                            Export-ready pink salt prepared under buyer specifications — packaging for retail, branding and private-label programs discussed per requirement.
                        </p>

                        <!-- Product Tag Pills -->
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2]">BAGS, SACKS OR OEM</span>
                            <span class="text-[9px] font-semibold tracking-wider text-saltora-muted border border-saltora-border px-2 py-1 uppercase bg-[#FAF7F2]">PRIVATE LABEL</span>
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

            <!-- Fine print note -->
            <p class="text-xs text-saltora-muted/80 font-light text-center max-w-3xl mx-auto pt-4 leading-relaxed">
                Specifications, grain sizes and packaging formats are finalized with each buyer before quotation. If you need a format not listed here, mention it in your inquiry — we will confirm availability honestly.
            </p>

        </div>
    </section>

    <!-- PACKED THE WAY YOUR MARKET NEEDS IT SECTION -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-white border-t border-saltora-border/60">
        <div class="max-w-7xl mx-auto space-y-12">
            
            <div class="space-y-3 max-w-3xl">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">PACKAGING</span>
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
                <div class="space-y-3 group">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/bulk.jpg" alt="Bulk Bags Format" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1">Bulk Bags</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Heavy-duty formats for volume buyers and industrial programs.
                    </p>
                </div>

                <!-- Format 2 -->
                <div class="space-y-3 group">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/product4.jpg" alt="Food-Grade Bags Format" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1">Food-Grade Bags</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Hygienic, food-safe packing for edible salt shipments.
                    </p>
                </div>

                <!-- Format 3 -->
                <div class="space-y-3 group">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/bag1.jpg" alt="Retail Packaging Format" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1">Retail Packaging</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Shelf-ready formats for retail brands and distributors.
                    </p>
                </div>

                <!-- Format 4 -->
                <div class="space-y-3 group">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/bag2.jpg" alt="Custom Private Label Format" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1">Custom / Private Label</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Branding and packaging prepared to buyer requirements, where available.
                    </p>
                </div>

            </div>

            <!-- Soft Blush CTA Box -->
            <div class="bg-[#F5EAE6] p-8 sm:p-10 rounded-sm border border-saltora-terracotta/20 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 shadow-sm mt-8">
                <div class="space-y-2 max-w-2xl">
                    <h3 class="font-serif text-2xl sm:text-3xl text-saltora-text font-normal">
                        Need a custom specification?
                    </h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Share your target grain size, packaging format, quantity and destination port — Saltora will respond with a clear, written quotation.
                    </p>
                </div>

                <div class="shrink-0">
                    <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-8 py-4 text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center gap-2 group">
                        <span>REQUEST A QUOTE</span>
                        <span class="transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
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
                    <li><a href="/products" class="hover:text-white transition-colors text-white font-medium">Products</a></li>
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
