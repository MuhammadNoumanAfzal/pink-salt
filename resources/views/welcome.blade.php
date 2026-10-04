<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Himalayan Pink Salt Exporter Pakistan | B2B Bulk & Private Label — SALTORA</title>
    
    <!-- Meta SEO Essentials -->
    <meta name="description" content="SALTORA is a premier Himalayan pink salt export house based in Pakistan. Supplying 98.5%+ pure NaCl food-grade, coarse, fine, animal licks, and industrial pink salt worldwide with FOB Karachi terms and ISO 22000 certification.">
    <meta name="keywords" content="Himalayan pink salt exporter, Pakistan salt range exporter, Khewra pink salt supplier, bulk pink salt B2B, private label pink salt, food grade pink salt, ISO 22000 salt exporter, Karachi port salt logistics">
    <meta name="author" content="SALTORA Himalayan Exporter">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ url('/') }}">

    <!-- Geo Tags for Local & Regional Sourcing SEO -->
    <meta name="geo.region" content="PK-PB">
    <meta name="geo.placename" content="Khewra, Salt Range, Punjab, Pakistan">

    <!-- Open Graph (Facebook / LinkedIn) Meta Tags -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="SALTORA — Authentic Himalayan Pink Salt Exporter from Pakistan">
    <meta property="og:description" content="Direct Khewra mine sourcing, 98.5%+ NaCl purity, ISO 22000 & Halal certified B2B bulk export and private label packaging worldwide.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="SALTORA Himalayan Salt Exporter">
    <meta property="og:image" content="{{ asset('heroimg.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="SALTORA Himalayan Pink Salt Bulk Export">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SALTORA — Authentic Himalayan Pink Salt Exporter from Pakistan">
    <meta name="twitter:description" content="Direct Khewra mine sourcing, 98.5%+ NaCl purity, ISO 22000 & Halal certified bulk export and OEM private labeling.">
    <meta name="twitter:image" content="{{ asset('heroimg.jpg') }}">
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/logo.png">
    <link rel="shortcut icon" type="image/png" href="/logo.png">
    
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Structured Data: JSON-LD Schema (Organization & WebSite) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Corporation",
          "@id": "{{ url('/') }}#corporation",
          "name": "SALTORA",
          "alternateName": "SALTORA Himalayan Pink Salt Exporter",
          "url": "{{ url('/') }}",
          "logo": "{{ asset('logo.png') }}",
          "image": "{{ asset('heroimg.jpg') }}",
          "description": "Premier exporter of authentic Himalayan pink salt from Pakistan, providing food-grade fine salt, coarse salt, animal licks, and custom OEM private label packaging to international B2B buyers.",
          "address": {
            "@type": "PostalAddress",
            "addressCountry": "PK",
            "addressRegion": "Punjab",
            "addressLocality": "Khewra / Salt Range"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+92-318-0735748",
            "contactType": "Export Sales Desk",
            "email": "saltora1329@gmail.com",
            "availableLanguage": ["English", "Urdu"]
          },
          "knowsAbout": [
            "Himalayan Pink Salt",
            "Bulk Mineral Export",
            "ISO 22000 Food Safety",
            "Halal Food Standards",
            "OEM Private Label Packaging",
            "FOB Container Logistics"
          ]
        },
        {
          "@type": "WebSite",
          "@id": "{{ url('/') }}#website",
          "url": "{{ url('/') }}",
          "name": "SALTORA Himalayan Salt",
          "publisher": {
            "@id": "{{ url('/') }}#corporation"
          },
          "potentialAction": {
            "@type": "SearchAction",
            "target": "{{ url('/blog') }}?search={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
      ]
    }
    </script>

    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="{ mobileMenuOpen: false, ...shopManager() }">

    <!-- Sticky Navigation Header -->
    <header class="sticky top-0 z-40 bg-saltora-bg/95 backdrop-blur-md border-b border-saltora-border/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-10 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3 group cursor-pointer" title="SALTORA Home">
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
                <a href="/contact" class="bg-saltora-dark hover:bg-black text-white px-5 py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2.5 group cursor-pointer rounded-xs border border-amber-900/30">
                    <i class="fa-solid fa-file-invoice text-[#e07a5f] group-hover:scale-110 transition-transform text-xs"></i>
                    <span>REQUEST A QUOTE</span>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-saltora-text p-2 rounded-md focus:outline-none cursor-pointer" aria-label="Toggle Navigation Menu">
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
            <a @click="mobileMenuOpen = false" href="/blog" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">BLOG</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CONTACT</a>
            <a href="/contact" @click="mobileMenuOpen = false" class="flex items-center justify-center gap-2 w-full mt-4 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer rounded-xs shadow-md transition-colors">
                <i class="fa-solid fa-file-invoice text-amber-200 text-sm"></i>
                <span>REQUEST A QUOTE</span>
            </a>
        </div>
    </header>

    <!-- 1. HERO SECTION (High-Impact B2B Value Proposition) -->
    <section class="relative py-10 md:py-16 px-6 md:px-12 max-w-7xl mx-auto overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            
            <!-- Left Hero Content -->
            <div class="lg:col-span-7 space-y-6 animate-hero-left">
                <!-- Category Kicker Tag -->
                <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 bg-saltora-blush/80 border border-saltora-terracotta/25 rounded-full text-[11px] font-bold tracking-wider text-saltora-terracotta uppercase shadow-2xs">
                    <span class="w-2 h-2 rounded-full bg-saltora-terracotta animate-pulse"></span>
                    <span>HIMALAYAN PINK SALT · DIRECT EXPORTER · PAKISTAN</span>
                </div>

                <!-- Primary Semantic H1 -->
                <h1 class="text-3xl sm:text-5xl xl:text-6xl font-serif text-saltora-text leading-[1.12] tracking-tight font-normal">
                    Authentic Himalayan <span class="italic text-saltora-terracotta font-normal">Pink Salt</span> Exporter from Pakistan
                </h1>

                <!-- Subheading Description -->
                <p class="text-saltora-muted text-sm sm:text-base md:text-lg leading-relaxed max-w-xl font-normal">
                    Directly sourced from the historic Salt Range with 98.5%+ certified NaCl purity. SALTORA supplies international importers, food processors, and private-label brands with reliable bulk FCL container shipments, custom grain grading, and complete export documentation.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-1">
                    <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-7 py-4 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-md hover:shadow-lg flex items-center gap-2.5 group cursor-pointer rounded-xs">
                        <span>REQUEST EXPORT QUOTE</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                    <a href="#products" class="border border-saltora-text/30 hover:border-saltora-text hover:bg-saltora-card text-saltora-text px-7 py-4 text-xs font-bold tracking-wider uppercase transition-all duration-200 cursor-pointer rounded-xs">
                        EXPLORE PRODUCTS
                    </a>
                </div>

                <!-- Trust Badges Strip -->
                <div class="pt-4 border-t border-saltora-border/70 flex flex-wrap items-center gap-y-2.5 gap-x-6 text-xs text-saltora-muted font-medium">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-circle-check text-saltora-terracotta text-sm"></i> 98.5%+ Pure NaCl</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-shield text-saltora-terracotta text-sm"></i> ISO 22000 & Halal Certified</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-box text-saltora-terracotta text-sm"></i> Bulk FCL & OEM Private Label</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-ship text-saltora-terracotta text-sm"></i> FOB Karachi / Port Qasim</span>
                </div>
            </div>

            <!-- Right Hero Image with Floating Badges -->
            <div class="lg:col-span-5 relative animate-hero-right">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-saltora-card border border-saltora-border group">
                    <img src="/heroimg.jpg" alt="Premium Himalayan Pink Salt Crystals mined in Pakistan" class="w-full h-[360px] sm:h-[420px] lg:h-[450px] object-cover transition-transform duration-700 group-hover:scale-105">

                    <!-- Gradient Overlay on Image Bottom -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-black/10 to-transparent pointer-events-none"></div>

                    <!-- Badge Top Left: CERTIFIED QUALITY -->
                    <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-md px-4 py-2.5 rounded-xl border border-white/70 shadow-lg z-20 max-w-[180px]">
                        <span class="block text-[9px] font-bold tracking-widest text-saltora-terracotta uppercase mb-0.5">CERTIFIED QUALITY</span>
                        <h4 class="font-serif text-xs font-bold text-saltora-text leading-tight">ISO 22000:2018</h4>
                        <p class="text-[10px] text-saltora-muted font-medium">Halal · Codex CXS 150</p>
                    </div>

                    <!-- Badge Top Right: BULK B2B -->
                    <div class="absolute top-4 right-4 bg-saltora-blush/95 backdrop-blur-md px-3.5 py-2 rounded-xl border border-saltora-terracotta/25 shadow-lg z-20">
                        <span class="text-[9px] font-bold tracking-widest text-saltora-terracotta uppercase">BULK · B2B · PRIVATE LABEL</span>
                    </div>

                    <!-- Overlay Text & Export Badge Bottom -->
                    <div class="absolute bottom-4 left-4 right-4 flex items-end justify-between z-10">
                        <div class="text-white">
                            <span class="text-[10px] text-amber-200 uppercase font-semibold tracking-wider block">ORIGIN CERTIFIED</span>
                            <p class="font-serif italic text-lg sm:text-xl font-normal drop-shadow-md">Khewra Mine, Pakistan</p>
                        </div>
                        <div class="bg-saltora-dark/95 backdrop-blur-md px-3.5 py-2.5 rounded-xl border border-saltora-dark-border text-white shadow-xl max-w-[180px]">
                            <span class="block text-[9px] font-bold tracking-widest text-amber-200/90 uppercase mb-0.5">EXPORT SHIPPING</span>
                            <h4 class="font-serif text-xs font-semibold text-white leading-tight">FOB Karachi & Qasim</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 2. CONTINUOUS MARQUEE TICKER BAR -->
    <div class="bg-saltora-terracotta text-white py-3.5 overflow-hidden shadow-inner border-y border-saltora-terracotta-dark">
        <div class="marquee-track flex whitespace-nowrap gap-12 text-xs font-semibold tracking-widest uppercase items-center">
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 98.5%+ PURE NaCl</span>
                <span class="flex items-center gap-2">✦ ISO 22000 & HALAL CERTIFIED</span>
                <span class="flex items-center gap-2">✦ OEM PRIVATE LABEL PACKAGING</span>
                <span class="flex items-center gap-2">✦ DIRECT FROM PAKISTAN SALT RANGE</span>
                <span class="flex items-center gap-2">✦ 20FT FCL BULK CONTAINER SHIPPING</span>
                <span class="flex items-center gap-2">✦ 100% UNREFINED NATURAL MINERAL</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 98.5%+ PURE NaCl</span>
                <span class="flex items-center gap-2">✦ ISO 22000 & HALAL CERTIFIED</span>
                <span class="flex items-center gap-2">✦ OEM PRIVATE LABEL PACKAGING</span>
                <span class="flex items-center gap-2">✦ DIRECT FROM PAKISTAN SALT RANGE</span>
                <span class="flex items-center gap-2">✦ 20FT FCL BULK CONTAINER SHIPPING</span>
                <span class="flex items-center gap-2">✦ 100% UNREFINED NATURAL MINERAL</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 98.5%+ PURE NaCl</span>
                <span class="flex items-center gap-2">✦ ISO 22000 & HALAL CERTIFIED</span>
                <span class="flex items-center gap-2">✦ OEM PRIVATE LABEL PACKAGING</span>
                <span class="flex items-center gap-2">✦ DIRECT FROM PAKISTAN SALT RANGE</span>
                <span class="flex items-center gap-2">✦ 20FT FCL BULK CONTAINER SHIPPING</span>
                <span class="flex items-center gap-2">✦ 100% UNREFINED NATURAL MINERAL</span>
            </div>
        </div>
    </div>

    <!-- 3. ABOUT SECTION (Origin, Heritage & Processing Discipline) -->
    <section id="about" class="py-16 md:py-24 px-6 md:px-12 max-w-7xl mx-auto overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            
            <!-- Left Image Side -->
            <div class="lg:col-span-5 relative reveal-from-left">
                <div class="relative rounded-2xl overflow-hidden border border-saltora-border shadow-xl group">
                    <img src="/aboutimg.jpg" alt="Authentic Pakistani pink salt crystal examination" class="w-full h-[360px] sm:h-[400px] lg:h-[420px] object-cover transition-transform duration-700 group-hover:scale-105">
                    
                    <!-- Floating Dark Box -->
                    <div class="absolute bottom-4 right-4 bg-saltora-dark/95 backdrop-blur-md text-white p-4 max-w-[230px] rounded-xl border border-saltora-dark-border shadow-xl">
                        <span class="text-[9px] font-bold text-saltora-terracotta uppercase tracking-wider block">B2B EXPORT DESK</span>
                        <h4 class="font-serif text-base font-normal text-amber-100 mb-1">Direct Manufacturer</h4>
                        <p class="text-[11px] text-stone-300 font-light leading-snug">
                            Supplying Importers, Wholesalers & Food Manufacturers Worldwide.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Text Content -->
            <div class="lg:col-span-7 space-y-5 reveal-from-right">
                <div class="text-[11px] font-bold tracking-widest text-saltora-terracotta uppercase">
                    ABOUT SALTORA HIMALAYAN EXPORTS
                </div>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-saltora-text leading-tight font-normal">
                    A Pakistani export house built around mineral purity and operational reliability
                </h2>

                <p class="text-saltora-muted text-xs sm:text-sm md:text-base leading-relaxed font-normal">
                    SALTORA is a specialized Himalayan pink salt export enterprise based in Pakistan — the undisputed geographic origin of genuine Himalayan rock salt. By bridging direct mine sourcing in the Salt Range with modern stainless-steel processing, optical grading, and rigorous quality inspection, we provide international buyers with a secure, transparent supply chain.
                </p>

                <!-- 2-Column Checklist Badges -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2 border-t border-saltora-border/70 text-xs font-medium text-saltora-text">
                    <div class="flex items-start gap-2.5 bg-white p-3 rounded-lg border border-saltora-border/80 shadow-2xs">
                        <svg class="w-4 h-4 text-saltora-terracotta shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <div>
                            <span class="font-semibold block text-slate-900">Authentic Khewra Origin</span>
                            <span class="text-[11px] text-saltora-muted leading-tight font-normal">100% natural, unadulterated rock salt from historic seams.</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-2.5 bg-white p-3 rounded-lg border border-saltora-border/80 shadow-2xs">
                        <svg class="w-4 h-4 text-saltora-terracotta shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <div>
                            <span class="font-semibold block text-slate-900">Precision Grading & Milling</span>
                            <span class="text-[11px] text-saltora-muted leading-tight font-normal">Fine 20-40 mesh to coarse granules and raw lump rocks.</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-2.5 bg-white p-3 rounded-lg border border-saltora-border/80 shadow-2xs">
                        <svg class="w-4 h-4 text-saltora-terracotta shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <div>
                            <span class="font-semibold block text-slate-900">Export-Ready Formats</span>
                            <span class="text-[11px] text-saltora-muted leading-tight font-normal">Retail pouches, shakers, 25kg PP bags, and 1-ton jumbo totes.</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-2.5 bg-white p-3 rounded-lg border border-saltora-border/80 shadow-2xs">
                        <svg class="w-4 h-4 text-saltora-terracotta shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <div>
                            <span class="font-semibold block text-slate-900">International Compliance</span>
                            <span class="text-[11px] text-saltora-muted leading-tight font-normal">ISO 22000, Halal, Phytosanitary, and full Certificate of Origin.</span>
                        </div>
                    </div>
                </div>

                <!-- Link Button -->
                <div class="pt-3">
                    <a href="/about" class="inline-flex items-center gap-2 text-xs font-bold tracking-widest text-saltora-text uppercase border-b border-saltora-text pb-1 hover:text-saltora-terracotta hover:border-saltora-terracotta transition-colors cursor-pointer group">
                        <span>LEARN MORE ABOUT OUR PROCESS</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- 4. PRODUCTS SECTION (Catalog Grid) -->
    <section id="products" class="py-20 md:py-28 bg-[#F4EAE1]/35 border-y border-saltora-border/60 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 md:px-12 space-y-12">
            
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 reveal-from-top">
                <div class="max-w-2xl space-y-3">
                    <div class="text-[11px] font-bold tracking-widest text-saltora-terracotta uppercase">EXPORT RANGE</div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-saltora-text leading-tight">
                        Himalayan Pink Salt, Graded to International Standards
                    </h2>
                    <p class="text-saltora-muted text-sm sm:text-base font-light">
                        From food-grade fine table salt to animal lick blocks and raw decorative rocks — graded, sorted, and packed to buyer specifications.
                    </p>
                </div>

                <div>
                    <a href="/products" class="inline-flex items-center gap-2 bg-white border border-saltora-text/40 hover:border-saltora-text hover:bg-saltora-card px-6 py-3.5 text-xs font-bold tracking-wider uppercase transition-colors cursor-pointer group shadow-2xs">
                        <span>VIEW COMPLETE CATALOG</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Product Cards Grid: 3 cols -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                
                @forelse($products as $index => $prod)
                @php
                    $qv = [
                        'name' => $prod->name,
                        'category_name' => $prod->categoryRef->name ?? $prod->category ?? 'Export Salt',
                        'subcategory_name' => $prod->subcategoryRef->name ?? '',
                        'image_url' => $prod->image_url ? asset($prod->image_url) : '',
                        'description' => $prod->description ?? '',
                        'formatted_price' => $prod->formatted_price,
                        'moq' => $prod->moq ?: null,
                        'grain_size' => $prod->grain_size ?: ($prod->mesh_size ?: null),
                        'packaging_type' => $prod->packaging_type ?: ($prod->packaging ?: null),
                        'package_weight' => $prod->package_weight ?: null,
                        'grade' => $prod->grade ?: null,
                        'purity' => $prod->purity ?: null,
                    ];
                @endphp
                <div class="bg-white border border-saltora-border/80 rounded-2xl p-5 flex flex-col justify-between transition-all duration-500 hover:-translate-y-1.5 hover:shadow-xl hover:shadow-saltora-terracotta/10 hover:border-saltora-terracotta/50 group relative overflow-hidden reveal-from-bottom stagger-{{ ($index % 3) + 1 }}">
                    <!-- Top Gradient Accent Hover Line -->
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-saltora-terracotta via-amber-600 to-saltora-terracotta scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

                    <div class="space-y-3.5">
                        <!-- 16:9 Aspect Ratio Image -->
                        <div class="relative aspect-video w-full overflow-hidden rounded-xl bg-saltora-card cursor-pointer group/img" @click="openQuickView(@js($qv))">
                            @if($prod->image_url)
                            <img src="{{ asset($prod->image_url) }}" alt="{{ $prod->name }} - Pakistani Himalayan Pink Salt" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-108">
                            @else
                            <div class="w-full h-full bg-gradient-to-br from-stone-100 via-amber-50/40 to-stone-200 flex flex-col items-center justify-center text-stone-400 gap-1.5 p-4 text-center">
                                <i class="fa-solid fa-cube text-3xl text-stone-300 group-hover:scale-110 transition-transform"></i>
                                <span class="text-[9px] uppercase font-bold tracking-widest text-stone-400">SALTORA Spec</span>
                            </div>
                            @endif
                            
                            <!-- Dark Overlay Gradient on Hover -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/15 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>

                            <!-- Top Left Quality Badge -->
                            <div class="absolute top-2.5 left-2.5 z-10 pointer-events-none">
                                <span class="bg-white/95 backdrop-blur-md text-saltora-terracotta text-[9px] font-bold tracking-widest uppercase px-2.5 py-0.5 rounded-full shadow-2xs border border-saltora-terracotta/20 flex items-center gap-1">
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

                        <!-- Product Category & Specs Tag Pills -->
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
                        <h3 class="font-serif text-lg sm:text-xl text-saltora-text font-semibold group-hover:text-saltora-terracotta transition-colors duration-300 leading-snug line-clamp-1">
                            {{ $prod->name }}
                        </h3>

                        <!-- Product Description -->
                        <p class="text-xs text-saltora-muted leading-relaxed font-normal line-clamp-2">
                            {{ $prod->short_desc ?? 'Authentic Pakistani Himalayan pink salt in its natural, mineral-rich form — ideal for gourmet food, retail repackaging, and bulk export.' }}
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
                            <div class="text-[10px] text-slate-500 font-medium truncate max-w-[140px]">
                                MOQ: {{ $prod->moq }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Direct Request a Quote & Details CTA -->
                    <div class="pt-3 border-t border-saltora-border/60 mt-3 flex items-center gap-2">
                        <a href="/contact?product={{ urlencode($prod->name) }}#contactForm" class="flex-1 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2.5 px-3 text-[10px] font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-1.5 cursor-pointer shadow-xs hover:shadow rounded-lg group/btn relative overflow-hidden">
                            <i class="fa-solid fa-file-invoice text-amber-200 text-[10px] transition-transform duration-300 group-hover/btn:translate-x-0.5"></i>
                            <span class="truncate">REQUEST A QUOTE</span>
                        </a>
                        <button @click="openQuickView(@js($qv))" class="border border-saltora-text/25 hover:border-saltora-terracotta hover:text-saltora-terracotta bg-white hover:bg-saltora-blush text-saltora-text py-2.5 px-3.5 text-[10px] font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-1.5 cursor-pointer rounded-lg group/btn" title="View Specification Sheet">
                            <svg class="w-3.5 h-3.5 shrink-0 text-saltora-muted group-hover/btn:text-saltora-terracotta transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <span>DETAILS</span>
                        </button>
                    </div>
                </div>
                @empty
                <div class="col-span-full bg-white border border-dashed border-saltora-border p-12 text-center rounded-2xl">
                    <div class="w-16 h-16 bg-saltora-card rounded-full flex items-center justify-center mx-auto mb-4 text-saltora-terracotta">
                        <i class="fa-solid fa-boxes-stacked text-2xl"></i>
                    </div>
                    <h3 class="font-serif text-2xl text-saltora-text font-normal mb-2">Export Catalog Updating</h3>
                    <p class="text-xs text-saltora-muted max-w-md mx-auto mb-6">
                        Our product catalog is currently being updated with fresh Himalayan salt export batches. For immediate inquiries or custom bulk specifications, please reach out directly to our export desk.
                    </p>
                    <div class="flex items-center justify-center gap-3 flex-wrap">
                        <a href="/contact" class="inline-flex items-center gap-2 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-5 py-2.5 text-xs font-bold tracking-wider uppercase transition-all shadow-sm rounded-xs">
                            <span>CONTACT EXPORT DESK</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>
                @endforelse

            </div>

            <!-- View Full Catalog Banner (Centered below the 6 products) -->
            <div class="pt-6 text-center reveal-from-bottom">
                <div class="inline-flex flex-col sm:flex-row items-center justify-between gap-6 bg-white border border-saltora-border/90 p-6 sm:p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow max-w-4xl mx-auto w-full">
                    <div class="text-left space-y-1">
                        <span class="text-[10px] font-bold text-saltora-terracotta uppercase tracking-wider">FULL EXPORT RANGE</span>
                        <h4 class="font-serif text-xl sm:text-2xl font-bold text-slate-900">Looking for other grades, packaging formats, or bulk rock salt?</h4>
                        <p class="text-xs text-slate-500 font-light">Explore our complete catalog of food-grade table salt, coarse grinder crystals, animal licks, and raw lumps.</p>
                    </div>
                    <a href="/products" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-md hover:shadow-lg flex items-center gap-2.5 shrink-0 rounded-xs">
                        <span>VIEW COMPLETE CATALOG</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. WHY CHOOSE SALTORA (6 Value Pillars Grid) -->
    <section id="why-us" class="py-20 md:py-28 px-6 md:px-12 max-w-7xl mx-auto overflow-hidden">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-16 reveal-from-top">
            <span class="text-xs font-bold tracking-widest text-saltora-terracotta uppercase">WHY PARTNER WITH SALTORA</span>
            <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                Serious about salt purity. Serious about long-term buyers.
            </h2>
            <p class="text-saltora-muted text-sm sm:text-base font-light">
                We combine authentic mine sourcing with disciplined export trade operations.
            </p>
        </div>

        <!-- 6 Feature Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 border border-saltora-border border-collapse bg-saltora-bg rounded-2xl overflow-hidden shadow-xs">
            
            <!-- Box 01 -->
            <div class="p-8 sm:p-10 space-y-4 hover:bg-white transition-colors border-b lg:border-b-0 lg:border-r border-saltora-border cursor-pointer group reveal-from-left stagger-1">
                <div class="flex items-center justify-between">
                    <span class="font-serif text-3xl font-light text-saltora-muted/60 group-hover:text-saltora-terracotta transition-colors">01</span>
                    <i class="fa-solid fa-mountain text-saltora-terracotta/60 group-hover:text-saltora-terracotta text-lg transition-colors"></i>
                </div>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Authentic Khewra Source</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Premium Himalayan pink salt mined from Pakistan's Salt Range — untouched by modern oceanic microplastics and chemical pollutants.
                </p>
            </div>

            <!-- Box 02 (Highlighted) -->
            <div class="p-8 sm:p-10 space-y-4 bg-[#F5EAE6] border-b lg:border-b-0 lg:border-r border-saltora-border cursor-pointer group reveal-scale stagger-2">
                <div class="flex items-center justify-between">
                    <span class="font-serif text-3xl font-light text-saltora-terracotta">02</span>
                    <i class="fa-solid fa-check-double text-saltora-terracotta text-lg"></i>
                </div>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Strict Quality Control</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Standardized multi-deck mesh grading, magnetic separation of debris, and certified chemical assay for consistent NaCl purity across every FCL.
                </p>
            </div>

            <!-- Box 03 -->
            <div class="p-8 sm:p-10 space-y-4 hover:bg-white transition-colors border-b md:border-b-0 border-saltora-border cursor-pointer group reveal-from-right stagger-3">
                <div class="flex items-center justify-between">
                    <span class="font-serif text-3xl font-light text-saltora-muted/60 group-hover:text-saltora-terracotta transition-colors">03</span>
                    <i class="fa-solid fa-boxes-packing text-saltora-terracotta/60 group-hover:text-saltora-terracotta text-lg transition-colors"></i>
                </div>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Flexible Volume Supply</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Practical supply solutions for importers and food factories — from single 20ft container trial shipments (25 Metric Tons) to monthly recurring contracts.
                </p>
            </div>

            <!-- Box 04 -->
            <div class="p-8 sm:p-10 space-y-4 border-t lg:border-r border-saltora-border hover:bg-white transition-colors cursor-pointer group reveal-from-left stagger-4">
                <div class="flex items-center justify-between">
                    <span class="font-serif text-3xl font-light text-saltora-muted/60 group-hover:text-saltora-terracotta transition-colors">04</span>
                    <i class="fa-solid fa-file-contract text-saltora-terracotta/60 group-hover:text-saltora-terracotta text-lg transition-colors"></i>
                </div>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Turnkey OEM Private Label</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Complete private label packaging: retail pouches, glass grinders, shaker bottles, carton master boxes, and customized barcode labeling.
                </p>
            </div>

            <!-- Box 05 -->
            <div class="p-8 sm:p-10 space-y-4 border-t lg:border-r border-saltora-border hover:bg-white transition-colors cursor-pointer group reveal-scale stagger-5">
                <div class="flex items-center justify-between">
                    <span class="font-serif text-3xl font-light text-saltora-muted/60 group-hover:text-saltora-terracotta transition-colors">05</span>
                    <i class="fa-solid fa-ship text-saltora-terracotta/60 group-hover:text-saltora-terracotta text-lg transition-colors"></i>
                </div>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Export Documentation Desk</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Hassle-free customs clearance with complete documentation: Bill of Lading, Certificate of Origin, Phytosanitary, Fumigation, and Lab COA.
                </p>
            </div>

            <!-- Box 06 -->
            <div class="p-8 sm:p-10 space-y-4 border-t border-saltora-border hover:bg-white transition-colors cursor-pointer group reveal-from-right stagger-6">
                <div class="flex items-center justify-between">
                    <span class="font-serif text-3xl font-light text-saltora-muted/60 group-hover:text-saltora-terracotta transition-colors">06</span>
                    <i class="fa-solid fa-handshake text-saltora-terracotta/60 group-hover:text-saltora-terracotta text-lg transition-colors"></i>
                </div>
                <h3 class="font-serif text-2xl text-saltora-text font-normal">Direct Factory Pricing</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Transparent FOB pricing direct from the Pakistani processor without broker or intermediary markups, ensuring superior commercial margins.
                </p>
            </div>

        </div>
    </section>

    <!-- 6. SOURCING, MANUFACTURING & SUPPLY (Deep Luxury Dark Pipeline) -->
    <section id="sourcing" class="bg-gradient-to-b from-[#1E1917] via-[#151210] to-[#1E1917] text-white py-16 md:py-24 px-6 md:px-12 border-t border-stone-800 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Left Text Process Steps -->
                <div class="lg:col-span-6 space-y-5 reveal-on-scroll reveal-from-left">
                    <div class="text-[11px] font-bold tracking-widest text-saltora-terracotta uppercase">
                        FROM MINE TO SEAPORT
                    </div>

                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-white font-normal leading-tight">
                        Sourcing, manufacturing & shipping — one disciplined export pipeline
                    </h2>

                    <p class="text-stone-400 text-xs sm:text-sm font-normal leading-relaxed">
                        International buyers require clear visibility over every operational step. We extract raw boulders in the Salt Range, process them under strict sanitary standards, inspect each batch, and export under standard FOB terms from Karachi.
                    </p>

                    <!-- Process Steps Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 pt-3 border-t border-stone-800/80">
                        
                        <div class="p-3.5 bg-stone-900/60 rounded-xl border border-stone-800/80 group cursor-pointer hover:border-saltora-terracotta/50 transition-colors">
                            <div class="flex items-center gap-2 mb-1.5">
                                <span class="font-serif text-xs font-bold text-saltora-terracotta">01</span>
                                <h4 class="font-serif text-base text-white font-normal group-hover:text-amber-100 transition-colors">Hand Sourcing</h4>
                            </div>
                            <p class="text-[11px] text-stone-400 font-light leading-relaxed">Natural pink boulders extracted from Khewra and sorted by crystal color.</p>
                        </div>

                        <div class="p-3.5 bg-stone-900/60 rounded-xl border border-stone-800/80 group cursor-pointer hover:border-saltora-terracotta/50 transition-colors">
                            <div class="flex items-center gap-2 mb-1.5">
                                <span class="font-serif text-xs font-bold text-saltora-terracotta">02</span>
                                <h4 class="font-serif text-base text-white font-normal group-hover:text-amber-100 transition-colors">Milling & Sieving</h4>
                            </div>
                            <p class="text-[11px] text-stone-400 font-light leading-relaxed">Washed, dried, crushed, and graded to fine, medium, coarse, or chunk specs.</p>
                        </div>

                        <div class="p-3.5 bg-stone-900/60 rounded-xl border border-stone-800/80 group cursor-pointer hover:border-saltora-terracotta/50 transition-colors">
                            <div class="flex items-center gap-2 mb-1.5">
                                <span class="font-serif text-xs font-bold text-saltora-terracotta">03</span>
                                <h4 class="font-serif text-base text-white font-normal group-hover:text-amber-100 transition-colors">Lab Assay Testing</h4>
                            </div>
                            <p class="text-[11px] text-stone-400 font-light leading-relaxed">Verified for 98.5%+ NaCl, moisture under 0.2%, and zero foreign matter.</p>
                        </div>

                        <div class="p-3.5 bg-stone-900/60 rounded-xl border border-stone-800/80 group cursor-pointer hover:border-saltora-terracotta/50 transition-colors">
                            <div class="flex items-center gap-2 mb-1.5">
                                <span class="font-serif text-xs font-bold text-saltora-terracotta">04</span>
                                <h4 class="font-serif text-base text-white font-normal group-hover:text-amber-100 transition-colors">Container Packing</h4>
                            </div>
                            <p class="text-[11px] text-stone-400 font-light leading-relaxed">Loaded into 20ft FCLs at Port Qasim / Karachi Port under verified FOB terms.</p>
                        </div>

                    </div>
                </div>

                <!-- Right Mine Image (Authentic Khewra Mine Photo) -->
                <div class="lg:col-span-6 relative reveal-on-scroll reveal-from-right">
                    <div class="relative rounded-2xl overflow-hidden border border-stone-800 shadow-2xl group">
                        <img src="/khewra-mine.jpg" alt="The Historic Khewra Salt Mine Pakistan - Translucent Pink Rock Extraction" class="w-full h-[360px] sm:h-[400px] lg:h-[430px] object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-5 left-5 text-white z-10">
                            <span class="text-[9px] font-bold tracking-widest text-saltora-terracotta uppercase block mb-1">AUTHENTIC MINE EXTRACTION</span>
                            <h4 class="font-serif text-xl sm:text-2xl font-normal text-white">The Historic Khewra Salt Mine, Pakistan</h4>
                            <p class="text-xs text-stone-300 font-light mt-0.5">500+ Million-Year-Old Ancient Pre-Cambrian Marine Salt Deposits</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. INDUSTRIES WE SERVE -->
    <section id="industries" class="py-20 md:py-28 px-6 md:px-12 bg-saltora-bg overflow-hidden">
        <div class="max-w-7xl mx-auto space-y-12">
            
            <div class="space-y-3 max-w-3xl reveal-from-top">
                <span class="text-[11px] font-bold tracking-widest text-saltora-terracotta uppercase">TARGET BUYERS & APPLICATIONS</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    One mineral, many global markets
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    SALTORA supplies buyers across food processing, retail distribution, livestock farming, and wellness sectors.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 border-t border-saltora-border/80">
                
                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-left stagger-1">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">01</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Food & Beverage Processing</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">High-purity food-grade salt for packaged food brands, bakeries, and canning lines.</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-1 mt-2"></i>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-right stagger-2">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">02</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Gourmet & Retail Brands</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Attractive translucent pink crystal salts for premium supermarket shelf packaging.</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-1 mt-2"></i>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-left stagger-3">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">03</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Spice & Seasoning Blenders</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Standardized sieve sizes for barbecue dry rubs, marinades, and seasoning mixes.</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-1 mt-2"></i>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-right stagger-4">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">04</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Wholesale & Food Service</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">25kg PP bags and palletized supply for restaurant suppliers and regional distributors.</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-1 mt-2"></i>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-left stagger-5">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">05</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Animal Nutrition & Livestock</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Natural solid salt lick blocks with rope for horses, cattle, and sheep ranches.</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-1 mt-2"></i>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-right stagger-6">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">06</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Spa, Bath & Wellness Brands</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Coarse mineral bath crystals, body scrubs, and salt therapy cave raw materials.</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-1 mt-2"></i>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-left">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">07</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">OEM Private Label Programs</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Your brand, your artwork, our authentic salt — turn-key and ready for customs import.</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-1 mt-2"></i>
                </div>

                <div class="py-6 border-b border-saltora-border/60 flex items-start justify-between group cursor-pointer hover:bg-saltora-card/50 transition-colors px-3 reveal-from-right">
                    <div class="flex items-start gap-4">
                        <span class="font-serif text-sm text-saltora-muted/70 pt-0.5">08</span>
                        <div>
                            <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Industrial & Water Softening</h3>
                            <p class="text-xs text-saltora-muted font-light mt-1">Coarse chunk salt for water softening systems, de-icing, and chemical applications.</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-xs text-saltora-muted group-hover:text-saltora-terracotta transition-transform group-hover:translate-x-1 mt-2"></i>
                </div>

            </div>
        </div>
    </section>

    <!-- 8. QUALITY & VERIFIABLE CERTIFICATIONS -->
    <section id="certifications" class="bg-[#F5EAE6] py-16 md:py-24 px-6 md:px-12 border-y border-saltora-terracotta/20 overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-12">
            
            <div class="space-y-4 max-w-lg reveal-from-left">
                <span class="text-[11px] font-bold tracking-widest text-saltora-terracotta uppercase">VERIFIABLE CREDENTIALS</span>
                <h2 class="text-3xl sm:text-4xl font-serif text-saltora-text font-normal leading-tight">
                    Internationally recognized standards and verifiable registrations
                </h2>
                <p class="text-saltora-muted text-xs sm:text-sm font-normal">
                    All export consignments are supported with certified laboratory test reports and export accreditation documents.
                </p>
                <div class="pt-2">
                    <a href="/certifications" class="inline-flex items-center gap-2 text-xs font-bold tracking-widest text-saltora-text uppercase border-b border-saltora-text pb-1 hover:text-saltora-terracotta hover:border-saltora-terracotta transition-colors cursor-pointer group">
                        <span>VIEW ALL CERTIFICATIONS</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right 4 Circular Seal Badges -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 sm:gap-8 items-center reveal-scale">
                <div class="w-36 h-36 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/70 shadow-sm relative group hover:border-saltora-terracotta transition-colors cursor-pointer">
                    <span class="text-[8px] tracking-widest text-saltora-muted uppercase block font-semibold mb-1">SALTORA · PAKISTAN</span>
                    <span class="font-serif text-sm font-bold text-saltora-text leading-tight">ISO 22000:2018</span>
                    <span class="text-[8px] font-bold tracking-widest text-saltora-terracotta uppercase mt-1">FOOD SAFETY</span>
                </div>

                <div class="w-36 h-36 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/70 shadow-sm relative group hover:border-saltora-terracotta transition-colors cursor-pointer">
                    <span class="text-[8px] tracking-widest text-saltora-muted uppercase block font-semibold mb-1">SALTORA · PAKISTAN</span>
                    <span class="font-serif text-base font-bold text-saltora-text leading-tight">Halal</span>
                    <span class="text-[8px] font-bold tracking-widest text-saltora-terracotta uppercase mt-1">CERTIFIED</span>
                </div>

                <div class="w-36 h-36 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/70 shadow-sm relative group hover:border-saltora-terracotta transition-colors cursor-pointer">
                    <span class="text-[8px] tracking-widest text-saltora-muted uppercase block font-semibold mb-1">SALTORA · PAKISTAN</span>
                    <span class="font-serif text-xs font-bold text-saltora-text leading-tight">Codex CXS<br>150:1985</span>
                    <span class="text-[8px] font-bold tracking-widest text-saltora-terracotta uppercase mt-1">FOOD GRADE</span>
                </div>

                <div class="w-36 h-36 rounded-full border-2 border-dashed border-saltora-terracotta/40 p-2 flex flex-col items-center justify-center text-center bg-white/70 shadow-sm relative group hover:border-saltora-terracotta transition-colors cursor-pointer">
                    <span class="text-[8px] tracking-widest text-saltora-muted uppercase block font-semibold mb-1">SALTORA · PAKISTAN</span>
                    <span class="font-serif text-xs font-bold text-saltora-text leading-tight">Chamber of<br>Commerce</span>
                    <span class="text-[8px] font-bold tracking-widest text-saltora-terracotta uppercase mt-0.5">REGISTERED</span>
                </div>
            </div>

        </div>
    </section>

    <!-- 9. GLOBAL EXPORT ROUTES & SEAPORT SHIPPING -->
    <section class="bg-[#181513] text-white py-24 px-6 md:px-12 relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px] opacity-10 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto text-center space-y-4 relative z-10 reveal-from-top">
            <span class="text-[11px] font-bold tracking-widest text-saltora-terracotta uppercase">GLOBAL EXPORT NETWORK</span>
            
            <h2 class="text-3xl sm:text-5xl font-serif text-white font-normal max-w-4xl mx-auto leading-tight">
                Supplying Pakistani Himalayan pink salt to seaports worldwide
            </h2>
            
            <p class="text-stone-400 text-sm sm:text-base font-light max-w-2xl mx-auto leading-relaxed">
                From Pakistan's Salt Range via Port Qasim & Karachi Port to destination hubs across the GCC, Europe, North America, and the Asia-Pacific.
            </p>

            <div class="relative mt-16 max-w-4xl mx-auto h-[360px] sm:h-[420px] flex items-center justify-center reveal-scale">
                <div class="absolute z-20 flex flex-col items-center cursor-pointer">
                    <div class="relative flex items-center justify-center">
                        <span class="animate-ping absolute inline-flex h-12 w-12 rounded-full bg-saltora-terracotta opacity-40"></span>
                        <div class="w-8 h-8 rounded-full bg-saltora-terracotta border-2 border-white flex items-center justify-center shadow-lg">
                            <div class="w-2.5 h-2.5 rounded-full bg-white"></div>
                        </div>
                    </div>
                    <span class="text-xs font-bold tracking-widest text-white uppercase mt-2">PAKISTAN (ORIGIN)</span>
                    <span class="text-[10px] text-amber-200">FOB Karachi & Port Qasim</span>
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
                    <span class="text-[10px] font-bold tracking-widest text-stone-300 uppercase mt-1">MIDDLE EAST (GCC)</span>
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

            <!-- Export Packaging & Specialized Grade Showcase (Generated Assets) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto pt-12 text-left">
                <!-- Card 1: Bulk Palletized Container Shipping -->
                <div class="bg-stone-900/90 border border-stone-800 rounded-2xl overflow-hidden shadow-2xl group hover:border-saltora-terracotta/50 transition-all duration-300">
                    <div class="relative aspect-video w-full overflow-hidden">
                        <img src="/salt-bulk-export.jpg" alt="SALTORA 25kg export bags and 1000kg bulk tote bags on pallets ready for container shipping" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <span class="absolute top-3 left-3 px-3 py-1 bg-saltora-terracotta text-white font-bold text-[10px] tracking-wider uppercase rounded-full shadow-md">
                            PORT DEPOT & PALLETIZING
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <span class="text-[10px] text-amber-200 uppercase font-semibold tracking-wider">FCL BULK SUPPLY</span>
                        <h4 class="font-serif text-xl text-white font-bold">25kg Export Bags & 1000kg FIBC Jumbo Totes</h4>
                        <p class="text-xs text-stone-400 font-light leading-relaxed">
                            Heavy-duty moisture-proof woven packaging, shrink-wrapped on heat-treated ISPM-15 export pallets for 20ft container ocean freight.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Hand-Carved Animal Salt Lick Blocks -->
                <div class="bg-stone-900/90 border border-stone-800 rounded-2xl overflow-hidden shadow-2xl group hover:border-saltora-terracotta/50 transition-all duration-300">
                    <div class="relative aspect-video w-full overflow-hidden">
                        <img src="/salt-lick-blocks.jpg" alt="Pure Himalayan pink salt animal lick blocks with thick organic hanging rope" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <span class="absolute top-3 left-3 px-3 py-1 bg-[#e07a5f] text-white font-bold text-[10px] tracking-wider uppercase rounded-full shadow-md">
                            ANIMAL NUTRITION GRADE
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <span class="text-[10px] text-amber-200 uppercase font-semibold tracking-wider">LIVESTOCK SUPPLEMENT</span>
                        <h4 class="font-serif text-xl text-white font-bold">Hand-Carved Himalayan Mineral Salt Licks</h4>
                        <p class="text-xs text-stone-400 font-light leading-relaxed">
                            Weather-resistant natural solid crystal salt blocks with pre-drilled organic jute ropes for horses, dairy cattle, and sheep.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. LATEST TRADE INSIGHTS & EXPORT GUIDES (Blog Section) -->
    @if(isset($latestPosts) && count($latestPosts) > 0)
    <section class="py-20 md:py-28 px-6 md:px-12 max-w-7xl mx-auto overflow-hidden">
        <div class="space-y-12">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 reveal-from-top">
                <div class="max-w-2xl space-y-3">
                    <div class="text-[11px] font-bold tracking-widest text-saltora-terracotta uppercase">SALTORA INTELLIGENCE DESK</div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-saltora-text leading-tight">
                        Latest Trade Insights & Export Guides
                    </h2>
                    <p class="text-saltora-muted text-sm sm:text-base font-light">
                        Expert analysis on mining quality standards, ocean freight logistics, ISO compliance, and GCC market trends.
                    </p>
                </div>

                <div>
                    <a href="/blog" class="inline-flex items-center gap-2 border border-saltora-text/40 hover:border-saltora-text px-6 py-3.5 text-xs font-bold tracking-wider uppercase transition-colors cursor-pointer group rounded-xs bg-white shadow-2xs">
                        <span>EXPLORE ALL ARTICLES</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Articles Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($latestPosts as $post)
                <div class="bg-white rounded-2xl border border-saltora-border/80 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="relative aspect-video w-full overflow-hidden bg-slate-100">
                            <img src="{{ $post->image_url }}" onerror="this.onerror=null; this.src='/heroimg.jpg';" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-3 left-3 px-3 py-1 bg-white/90 backdrop-blur-md text-[#e07a5f] font-bold text-[10px] tracking-wider uppercase rounded-full shadow-xs">
                                {{ $post->category }}
                            </span>
                        </div>
                        <div class="p-6 space-y-3">
                            <div class="flex items-center gap-2 text-xs text-slate-500 font-medium">
                                <span><i class="fa-regular fa-calendar text-[11px] mr-1"></i> {{ $post->created_at->format('M d, Y') }}</span>
                                <span>&bull;</span>
                                <span><i class="fa-regular fa-clock text-[11px] mr-1"></i> {{ $post->read_time }}</span>
                            </div>
                            <h3 class="font-serif text-xl text-slate-900 font-bold group-hover:text-[#e07a5f] transition-colors leading-snug line-clamp-2">
                                <a href="{{ route('blog.detail', $post->slug) }}">{{ $post->title }}</a>
                            </h3>
                            <p class="text-slate-600 text-xs leading-relaxed line-clamp-3 font-light">
                                {{ $post->excerpt }}
                            </p>
                        </div>
                    </div>
                    <div class="p-6 pt-0 border-t border-slate-100 mt-4 flex items-center justify-between">
                        <span class="text-xs font-semibold text-slate-700">{{ $post->author }}</span>
                        <a href="{{ route('blog.detail', $post->slug) }}" class="text-xs font-bold text-[#e07a5f] group-hover:translate-x-1 transition-transform flex items-center gap-1.5">
                            <span>Read More</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    @endif

    <!-- 11. BOTTOM CONVERSION CTA BANNER (Compact & Sleek) -->
    <section class="relative bg-[#141211] py-14 md:py-18 px-6 text-center text-white overflow-hidden">
        <!-- Vibrant Himalayan Salt Crystals Backdrop -->
        <img src="/heroimg.jpg" alt="Himalayan salt crystals background texture" class="absolute inset-0 w-full h-full object-cover opacity-60 md:opacity-65 filter brightness-105 contrast-105 pointer-events-none scale-105">
        
        <!-- Balanced Gradient Overlay for High Readability -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/50 to-black/75 pointer-events-none"></div>

        <!-- Subtle Ambient Warm Glow behind Text -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[450px] h-[220px] bg-[#e07a5f]/15 rounded-full blur-[90px] pointer-events-none"></div>

        <div class="relative z-10 max-w-2xl mx-auto space-y-4 reveal-from-bottom">
            <span class="text-[10px] font-bold tracking-widest text-[#f4a261] uppercase block drop-shadow-sm">START SOURCING TODAY</span>
            
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-serif text-white font-normal leading-snug drop-shadow-md">
                Ready to source premium Himalayan pink salt?
            </h2>
            
            <p class="text-stone-200 text-xs sm:text-sm font-light max-w-lg mx-auto leading-relaxed drop-shadow-sm">
                Send your volume specifications, grain mesh requirements, or private-label packaging details. Receive a comprehensive quotation with transparent FOB Karachi terms within 12–24 business hours.
            </p>
            
            <div class="flex flex-wrap items-center justify-center gap-3 pt-2">
                <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-7 py-3 text-xs font-bold tracking-wider uppercase transition-all shadow-xl hover:shadow-2xl flex items-center gap-2.5 group cursor-pointer rounded-xs">
                    <span>REQUEST A FORMAL QUOTE</span>
                    <i class="fa-solid fa-arrow-right text-[10px] transition-transform group-hover:translate-x-1"></i>
                </a>
                <a href="/contact" class="bg-black/45 hover:bg-black/70 backdrop-blur-md border border-white/40 hover:border-white text-white px-6 py-3 text-xs font-bold tracking-wider uppercase transition-all cursor-pointer rounded-xs shadow-md">
                    CONTACT EXPORT DESK
                </a>
            </div>
        </div>
    </section>

    <!-- 12. FOOTER SECTION -->
    <x-footer />


    <!-- PRODUCT QUICK VIEW / SPECIFICATION MODAL (same design as Products page) -->
    <div x-show="quickViewModalOpen" x-cloak class="fixed inset-0 z-50 overflow-y-auto" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Backdrop -->
            <div x-show="quickViewModalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/80 backdrop-blur-xs transition-opacity" @click="closeQuickView()"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <!-- Modal Content -->
            <div x-show="quickViewModalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block align-bottom bg-white rounded-2xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full border border-stone-200/80 p-4 sm:p-5 relative max-h-[92vh] overflow-y-auto">

                <!-- Close Button (Explicit Top-Right) -->
                <button @click="closeQuickView()" style="position: absolute; top: 14px; right: 14px; left: auto;" class="w-8 h-8 rounded-full bg-white/95 hover:bg-white text-stone-700 hover:text-stone-950 border border-stone-200 shadow-sm flex items-center justify-center transition-all cursor-pointer z-30" aria-label="Close Modal">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <template x-if="selectedProduct">
                    <div class="space-y-4">
                        <!-- TOP IMAGE -->
                        <div class="relative w-full h-36 sm:h-44 rounded-xl overflow-hidden bg-[#FAF7F2] border border-stone-200/60 shadow-xs shrink-0">
                            <template x-if="selectedProduct.image_url">
                                <img :src="selectedProduct.image_url" :alt="selectedProduct.name" class="w-full h-full object-cover">
                            </template>
                            <template x-if="!selectedProduct.image_url">
                                <div class="w-full h-full bg-gradient-to-br from-[#FAF7F2] via-[#F3ECE0] to-[#EAE0D0] flex flex-col items-center justify-center text-stone-400 gap-1.5 p-4 text-center">
                                    <div class="w-10 h-10 rounded-full bg-white shadow-xs border border-stone-200 flex items-center justify-center text-[#B87A62]">
                                        <i class="fa-solid fa-cube text-lg"></i>
                                    </div>
                                    <span class="text-[10px] uppercase font-bold tracking-widest text-stone-500">Pure Himalayan Salt</span>
                                </div>
                            </template>

                            <!-- Floating Badges on Image -->
                            <div class="absolute top-2.5 left-2.5 z-20 flex items-center gap-1.5">
                                <template x-if="selectedProduct.packaging_type">
                                    <span class="bg-stone-900/85 backdrop-blur-md text-white text-[9px] font-bold px-2 py-0.5 rounded-md uppercase tracking-wider shadow-xs" x-text="selectedProduct.packaging_type"></span>
                                </template>
                                <template x-if="selectedProduct.purity">
                                    <span class="bg-white/95 backdrop-blur-md text-emerald-800 text-[9px] font-bold px-2 py-0.5 rounded-md uppercase tracking-wider shadow-xs border border-emerald-600/20" x-text="selectedProduct.purity"></span>
                                </template>
                            </div>
                        </div>

                        <!-- CONTENT BELOW -->
                        <div class="space-y-3.5 px-0.5">
                            <!-- Category & Tag Row -->
                            <div class="flex items-center justify-between flex-wrap gap-2">
                                <div class="flex items-center gap-1.5 text-[11px] font-semibold tracking-wider uppercase text-saltora-terracotta truncate">
                                    <span x-text="selectedProduct.category_name"></span>
                                    <template x-if="selectedProduct.subcategory_name">
                                        <span class="text-stone-300">/</span>
                                    </template>
                                    <template x-if="selectedProduct.subcategory_name">
                                        <span class="text-stone-500 font-normal truncate" x-text="selectedProduct.subcategory_name"></span>
                                    </template>
                                </div>
                                <span class="text-[9px] font-bold tracking-widest text-stone-400 uppercase bg-stone-100 px-2 py-0.5 rounded-sm">Technical Specifications</span>
                            </div>

                            <!-- Product Title -->
                            <h2 class="font-serif text-xl sm:text-2xl text-stone-900 font-semibold leading-snug" x-text="selectedProduct.name"></h2>

                            <!-- Product Description -->
                            <template x-if="selectedProduct.description">
                                <p class="text-xs text-stone-600 font-light leading-relaxed line-clamp-2" x-text="selectedProduct.description"></p>
                            </template>

                            <!-- Price & MOQ Card -->
                            <div class="p-3 sm:p-3.5 bg-[#FAF7F2] border border-[#EAE3D6] rounded-xl flex items-center justify-between">
                                <div>
                                    <span class="text-[9px] uppercase font-bold text-stone-400 block tracking-wider">Export Price</span>
                                    <span class="text-lg sm:text-xl font-bold text-stone-900" x-text="selectedProduct.formatted_price"></span>
                                </div>
                                <div class="text-right">
                                    <span class="text-[9px] uppercase font-bold text-stone-400 block tracking-wider">Minimum Order (MOQ)</span>
                                    <span class="text-xs sm:text-sm font-bold text-saltora-terracotta" x-text="selectedProduct.moq || 'Flexible Bulk Order'"></span>
                                </div>
                            </div>

                            <!-- Specs Metric Grid -->
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 text-xs">
                                <template x-if="selectedProduct.grain_size">
                                    <div class="bg-stone-50/90 border border-stone-200/80 rounded-lg p-2">
                                        <span class="text-[9px] uppercase font-semibold text-stone-400 block">Grain Size</span>
                                        <span class="text-xs font-semibold text-stone-800 mt-0.5 block truncate" x-text="selectedProduct.grain_size"></span>
                                    </div>
                                </template>
                                <template x-if="selectedProduct.packaging_type">
                                    <div class="bg-stone-50/90 border border-stone-200/80 rounded-lg p-2">
                                        <span class="text-[9px] uppercase font-semibold text-stone-400 block">Packaging</span>
                                        <span class="text-xs font-semibold text-stone-800 mt-0.5 block truncate" x-text="selectedProduct.packaging_type"></span>
                                    </div>
                                </template>
                                <template x-if="selectedProduct.package_weight">
                                    <div class="bg-stone-50/90 border border-stone-200/80 rounded-lg p-2">
                                        <span class="text-[9px] uppercase font-semibold text-stone-400 block">Unit Weight</span>
                                        <span class="text-xs font-semibold text-stone-800 mt-0.5 block truncate" x-text="selectedProduct.package_weight"></span>
                                    </div>
                                </template>
                                <template x-if="selectedProduct.purity">
                                    <div class="bg-stone-50/90 border border-stone-200/80 rounded-lg p-2">
                                        <span class="text-[9px] uppercase font-semibold text-stone-400 block">Purity</span>
                                        <span class="text-xs font-semibold text-emerald-800 mt-0.5 block truncate" x-text="selectedProduct.purity"></span>
                                    </div>
                                </template>
                                <template x-if="selectedProduct.grade">
                                    <div class="bg-stone-50/90 border border-stone-200/80 rounded-lg p-2 col-span-2 sm:col-span-2">
                                        <span class="text-[9px] uppercase font-semibold text-stone-400 block">Grade Standard</span>
                                        <span class="text-xs font-semibold text-stone-800 mt-0.5 block truncate" x-text="selectedProduct.grade"></span>
                                    </div>
                                </template>
                            </div>

                            <!-- Action Buttons -->
                            <div class="pt-1 flex flex-col sm:flex-row gap-2.5">
                                <a :href="'/contact?product=' + encodeURIComponent(selectedProduct.name) + '#contactForm'" class="flex-1 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2.5 px-4 rounded-xl text-center text-xs font-bold tracking-wider uppercase transition-all shadow-xs hover:shadow flex items-center justify-center gap-2 cursor-pointer">
                                    <i class="fa-solid fa-file-invoice text-amber-200 text-xs"></i>
                                    <span>REQUEST FORMAL QUOTE</span>
                                </a>
                                <a :href="'https://wa.me/923180735748?text=' + encodeURIComponent('Hi Saltora, I need a quotation for ' + selectedProduct.name)" target="_blank" class="flex-1 border border-emerald-600/40 hover:border-emerald-600 bg-emerald-50/40 hover:bg-emerald-50 text-emerald-800 py-2.5 px-4 rounded-xl text-center text-xs font-bold tracking-wider uppercase transition-all flex items-center justify-center gap-2 cursor-pointer">
                                    <i class="fa-brands fa-whatsapp text-emerald-600 text-base"></i>
                                    <span>INQUIRE VIA WHATSAPP</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

</body>
</html>
