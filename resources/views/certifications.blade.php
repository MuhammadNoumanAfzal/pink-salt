<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Certifications & Quality Standards — SALTORA</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="SALTORA's international food-safety and quality compliance certifications: ISO 22000:2018, Halal, Codex CXS 150:1985, and Chamber registration.">
    <meta name="keywords" content="Saltora Certifications, ISO 22000 Salt Exporter, Halal Pink Salt Pakistan, Codex Standard Salt, Quality Compliance">
    
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
                <a href="/certifications" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1 cursor-pointer">CERTIFICATIONS</a>
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
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-terracotta font-bold cursor-pointer">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">EXPORT & LOGISTICS</a>
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

    <!-- HERO SECTION -->
    <section class="relative bg-saltora-dark text-white py-24 md:py-32 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border">
        <!-- Backdrop Image - Brighter & Warm -->
        <img src="/heroimg.jpg" alt="Salt Crystals Backdrop" class="absolute inset-0 w-full h-full object-cover opacity-65 filter brightness-105 contrast-105 pointer-events-none transition-transform duration-1000 scale-105">
        <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/55 to-black/35 pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto flex flex-col md:flex-row md:items-end justify-between gap-8">
            <div class="space-y-6 max-w-3xl animate-hero-left">
                <div class="flex items-center gap-3 text-xs font-bold tracking-mega text-saltora-terracotta uppercase">
                    <span class="w-8 h-px bg-saltora-terracotta"></span>
                    <span>QUALITY & COMPLIANCE</span>
                </div>

                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-serif text-white font-normal leading-[1.08]">
                    Recognised standards, verifiable quality
                </h1>

                <p class="text-stone-300 text-base sm:text-lg leading-relaxed max-w-2xl font-light">
                    Saltora complies with food safety, trade and origin standards so international buyers can import with full confidence.
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
                            <span class="block text-2xl font-serif font-bold text-white">100% AUDITED</span>
                            <span class="text-[10px] text-stone-300 uppercase tracking-wider font-medium">Batch Traceability Compliance</span>
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
                <span class="flex items-center gap-2">✦ ISO 22000:2018 FOOD SAFETY CERTIFIED</span>
                <span class="flex items-center gap-2">✦ HALAL COMPLIANT FOR GLOBAL EXPORT</span>
                <span class="flex items-center gap-2">✦ CODEX ALIMENTARIUS CXS 150 STANDARDS</span>
                <span class="flex items-center gap-2">✦ REGISTERED CHAMBER OF COMMERCE EXPORTER</span>
                <span class="flex items-center gap-2">✦ THIRD-PARTY LAB TESTED BATCHES</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ ISO 22000:2018 FOOD SAFETY CERTIFIED</span>
                <span class="flex items-center gap-2">✦ HALAL COMPLIANT FOR GLOBAL EXPORT</span>
                <span class="flex items-center gap-2">✦ CODEX ALIMENTARIUS CXS 150 STANDARDS</span>
                <span class="flex items-center gap-2">✦ REGISTERED CHAMBER OF COMMERCE EXPORTER</span>
                <span class="flex items-center gap-2">✦ THIRD-PARTY LAB TESTED BATCHES</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ ISO 22000:2018 FOOD SAFETY CERTIFIED</span>
                <span class="flex items-center gap-2">✦ HALAL COMPLIANT FOR GLOBAL EXPORT</span>
                <span class="flex items-center gap-2">✦ CODEX ALIMENTARIUS CXS 150 STANDARDS</span>
                <span class="flex items-center gap-2">✦ REGISTERED CHAMBER OF COMMERCE EXPORTER</span>
                <span class="flex items-center gap-2">✦ THIRD-PARTY LAB TESTED BATCHES</span>
            </div>
        </div>
    </div>

    <!-- 4 CERTIFICATION CARDS GRID -->
    <section class="py-20 md:py-28 px-6 md:px-12 max-w-7xl mx-auto space-y-16">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 reveal-on-scroll reveal-from-top">
            <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">INTERNATIONAL COMPLIANCE</span>
            <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                Export Compliance & Certifications
            </h2>
            <p class="text-saltora-muted text-sm sm:text-base font-light">
                Every shipment meets global food safety frameworks, dietary guidelines, and trade registry credentials.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- ISO 22000 -->
            <div class="bg-white border border-saltora-border p-8 rounded-sm space-y-4 shadow-sm hover:shadow-xl transition-all duration-300 card-hover-effect group cursor-pointer reveal-on-scroll reveal-scale stagger-1">
                <div class="flex items-center justify-between">
                    <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase bg-saltora-blush px-3 py-1 rounded-sm group-hover:bg-saltora-terracotta group-hover:text-white transition-colors duration-300">FOOD SAFETY MANAGEMENT</span>
                    <span class="text-xs font-semibold text-emerald-600 flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        CERTIFIED
                    </span>
                </div>
                <h3 class="font-serif text-3xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">ISO 22000:2018</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    International standard defining requirements for a food safety management system — covering the entire process from origin handling to packaging.
                </p>
                <div class="pt-2 border-t border-stone-100 flex items-center text-xs font-semibold text-saltora-terracotta group-hover:translate-x-1 transition-transform duration-300">
                    <span>View Quality Assurance Manual</span>
                    <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>

            <!-- HALAL -->
            <div class="bg-white border border-saltora-border p-8 rounded-sm space-y-4 shadow-sm hover:shadow-xl transition-all duration-300 card-hover-effect group cursor-pointer reveal-on-scroll reveal-scale stagger-2">
                <div class="flex items-center justify-between">
                    <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase bg-saltora-blush px-3 py-1 rounded-sm group-hover:bg-saltora-terracotta group-hover:text-white transition-colors duration-300">RELIGIOUS & DIETARY COMPLIANCE</span>
                    <span class="text-xs font-semibold text-emerald-600 flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        CERTIFIED
                    </span>
                </div>
                <h3 class="font-serif text-3xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Halal Certification</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Guarantees that Saltora pink salt is processed, stored and handled in accordance with strict Halal dietary guidelines for Muslim markets worldwide.
                </p>
                <div class="pt-2 border-t border-stone-100 flex items-center text-xs font-semibold text-saltora-terracotta group-hover:translate-x-1 transition-transform duration-300">
                    <span>Halal Export Compliance Details</span>
                    <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>

            <!-- CODEX CXS 150 -->
            <div class="bg-white border border-saltora-border p-8 rounded-sm space-y-4 shadow-sm hover:shadow-xl transition-all duration-300 card-hover-effect group cursor-pointer reveal-on-scroll reveal-scale stagger-3">
                <div class="flex items-center justify-between">
                    <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase bg-saltora-blush px-3 py-1 rounded-sm group-hover:bg-saltora-terracotta group-hover:text-white transition-colors duration-300">CODEX ALIMENTARIUS</span>
                    <span class="text-xs font-semibold text-emerald-600 flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        COMPLIANT
                    </span>
                </div>
                <h3 class="font-serif text-3xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Codex CXS 150:1985</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Global food standard for food-grade salt, ensuring chemical purity (min. 97% NaCl), mineral safety and proper labeling.
                </p>
                <div class="pt-2 border-t border-stone-100 flex items-center text-xs font-semibold text-saltora-terracotta group-hover:translate-x-1 transition-transform duration-300">
                    <span>Chemical Purity Specifications</span>
                    <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>

            <!-- CHAMBER OF COMMERCE -->
            <div class="bg-white border border-saltora-border p-8 rounded-sm space-y-4 shadow-sm hover:shadow-xl transition-all duration-300 card-hover-effect group cursor-pointer reveal-on-scroll reveal-scale stagger-4">
                <div class="flex items-center justify-between">
                    <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase bg-saltora-blush px-3 py-1 rounded-sm group-hover:bg-saltora-terracotta group-hover:text-white transition-colors duration-300">GOVERNMENT REGISTRATION</span>
                    <span class="text-xs font-semibold text-emerald-600 flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        REGISTERED
                    </span>
                </div>
                <h3 class="font-serif text-3xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Chamber of Commerce & Industry</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Officially registered Pakistani export entity with authorized trade documentation support and government compliance.
                </p>
                <div class="pt-2 border-t border-stone-100 flex items-center text-xs font-semibold text-saltora-terracotta group-hover:translate-x-1 transition-transform duration-300">
                    <span>Verify Trade Registration</span>
                    <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>

        </div>

        <!-- Verification & Quality Testing Box -->
        <div class="bg-[#F5EAE6] p-8 sm:p-12 rounded-sm border border-saltora-terracotta/20 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 shadow-sm reveal-on-scroll reveal-scale">
            <div class="space-y-2 max-w-2xl">
                <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase block">THIRD-PARTY TESTING</span>
                <h3 class="font-serif text-2xl sm:text-3xl text-saltora-text font-normal">
                    Need Certificate of Analysis (COA) for your batch?
                </h3>
                <p class="text-xs text-saltora-muted font-light leading-relaxed">
                    We provide laboratory analysis reports covering NaCl percentage, moisture level, heavy metals check, and grain size analysis with every export contract.
                </p>
            </div>

            <div class="shrink-0">
                <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-8 py-4 text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center gap-2 group cursor-pointer">
                    <span>REQUEST COA REPORT</span>
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
