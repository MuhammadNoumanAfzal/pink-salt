<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Primary SEO Meta Tags -->
    <title>About SALTORA | Leading Himalayan Pink Salt Exporter & Manufacturer in Pakistan</title>
    <meta name="title" content="About SALTORA | Leading Himalayan Pink Salt Exporter & Manufacturer in Pakistan">
    <meta name="description" content="Discover SALTORA: Pakistan's premier B2B Himalayan pink salt export house. Sourced directly from ancient Khewra mines with 98.5%+ NaCl purity, ISO 22000 & Halal compliance, OEM private labeling, and direct container export worldwide.">
    <meta name="keywords" content="About Saltora, Himalayan Pink Salt Exporter Pakistan, Khewra Salt Range Mining, B2B Bulk Salt Supplier, Private Label Pink Salt, Edible Food Grade Salt Exporter, Animal Salt Lick Manufacturer, Saltora Pakistan">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url('/about') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/about') }}">
    <meta property="og:title" content="About SALTORA — Authentic Himalayan Pink Salt Exporter">
    <meta property="og:description" content="Direct Khewra mine origin, 98.5%+ NaCl purity, certified ISO 22000 processing plant, and global B2B container logistics from Karachi Port.">
    <meta property="og:image" content="{{ asset('about-facility.jpg') }}">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url('/about') }}">
    <meta name="twitter:title" content="About SALTORA — Himalayan Pink Salt Exporter Pakistan">
    <meta name="twitter:description" content="Direct Khewra mine origin, certified ISO 22000 processing facility, and transparent FOB/CIF global shipping.">
    <meta name="twitter:image" content="{{ asset('about-facility.jpg') }}">

    <!-- Schema.org JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "AboutPage",
          "@id": "{{ url('/about') }}#webpage",
          "url": "{{ url('/about') }}",
          "name": "About SALTORA Himalayan Pink Salt Exporter",
          "description": "Comprehensive company overview, mine origin provenance, processing capabilities, and international B2B export infrastructure of SALTORA.",
          "breadcrumb": {
            "@type": "BreadcrumbList",
            "itemListElement": [
              {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "{{ url('/') }}"
              },
              {
                "@type": "ListItem",
                "position": 2,
                "name": "About Us",
                "item": "{{ url('/about') }}"
              }
            ]
          }
        },
        {
          "@type": "Corporation",
          "@id": "{{ url('/') }}#corporation",
          "name": "SALTORA Himalayan Pink Salt Exporter",
          "url": "{{ url('/') }}",
          "logo": "{{ asset('logo.png') }}",
          "image": "{{ asset('about-facility.jpg') }}",
          "description": "Premier exporter and private-label manufacturer of pure Himalayan pink salt mined from the Salt Range of Punjab, Pakistan.",
          "address": {
            "@type": "PostalAddress",
            "addressRegion": "Punjab / Salt Range",
            "addressCountry": "PK"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+923180735748",
            "contactType": "export desk",
            "email": "saltora1329@gmail.com",
            "availableLanguage": ["English", "Urdu", "Arabic"]
          }
        }
      ]
    }
    </script>
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/logo.png">
    <link rel="shortcut icon" type="image/png" href="/logo.png">
    
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="shopManager()">

    <!-- 1. STICKY NAVIGATION HEADER -->
    <header class="sticky top-0 z-40 bg-saltora-bg/95 backdrop-blur-md border-b border-saltora-border/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-10 h-16 md:h-18 flex items-center justify-between gap-4">
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3 shrink-0 group cursor-pointer mr-2 lg:mr-6" title="SALTORA Home">
                <img src="/logo.png" alt="SALTORA Logo" class="h-9 w-auto object-contain transition-transform group-hover:scale-105">
                <span class="font-serif text-xl sm:text-2xl font-bold tracking-wider text-saltora-text">SALTORA</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-5 xl:space-x-8 text-[12px] font-semibold tracking-wider text-saltora-text uppercase mx-auto">
                <a href="/about" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1 cursor-pointer whitespace-nowrap">ABOUT</a>
                <a href="/products" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">CERTIFICATIONS</a>
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">EXPORT & LOGISTICS</a>
                <a href="/blog" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">BLOG</a>
                <a href="/contact" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">CONTACT</a>
            </nav>

            <!-- Header Action Button & Quote CTA -->
            <div class="hidden sm:flex items-center gap-3 shrink-0">
                <a href="/contact" class="bg-saltora-dark hover:bg-black text-white px-4 py-2 text-[11px] font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2 group cursor-pointer rounded-xs border border-amber-900/30 whitespace-nowrap">
                    <i class="fa-solid fa-file-invoice text-[#e07a5f] group-hover:scale-110 transition-transform text-xs"></i>
                    <span>REQUEST A QUOTE</span>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-saltora-text p-2 rounded-md focus:outline-none cursor-pointer" aria-label="Toggle menu">
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
            <a @click="mobileMenuOpen = false" href="/blog" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">BLOG</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CONTACT</a>
            <a href="/contact" @click="mobileMenuOpen = false" class="flex items-center justify-center gap-2 w-full mt-4 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer rounded-xs shadow-md transition-colors">
                <i class="fa-solid fa-file-invoice text-amber-200 text-sm"></i>
                <span>REQUEST A QUOTE</span>
            </a>
        </div>
    </header>

    <!-- 2. ABOUT HERO SECTION (LUXURIOUS EDITORIAL ENTRANCE) -->
    <section class="relative bg-[#161311] text-white py-24 md:py-32 px-6 md:px-12 overflow-hidden border-b border-stone-800">
        <!-- Backdrop Image (`aboutero.jpg`) with Warm Mineral Gradient -->
        <img src="/aboutero.jpg" alt="Khewra Himalayan Salt Mountains" class="absolute inset-0 w-full h-full object-cover opacity-75 filter brightness-105 contrast-105 pointer-events-none scale-105 transition-transform duration-1000">
        <!-- Left-to-right gradient: dark behind text on left, light & visible over image on right -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#161311]/85 via-[#161311]/60 to-[#161311]/20 pointer-events-none"></div>

        <!-- Ambient Warm Glow Orbs -->
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#e07a5f]/20 rounded-full blur-[140px] pointer-events-none"></div>
        <div class="absolute -bottom-32 right-1/4 w-96 h-96 bg-[#f4a261]/15 rounded-full blur-[140px] pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto space-y-8">
            <!-- Badges -->
            <div class="flex flex-wrap items-center gap-3 animate-hero-left">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/60 border border-amber-400/40 text-[11px] font-bold tracking-widest text-amber-300 uppercase shadow-lg">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    <span>PROVENANCE & INDUSTRIAL EXCELLENCE</span>
                </div>
                <span class="text-xs text-stone-400 font-medium hidden sm:inline">•</span>
                <span class="text-xs text-amber-300 font-semibold flex items-center gap-1.5 drop-shadow-xs">
                    <i class="fa-solid fa-mountain text-amber-400 text-xs"></i>
                    Salt Range, Punjab, Pakistan
                </span>
            </div>

            <!-- Headline with Drop Shadow for Maximum Legibility -->
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-serif text-white font-normal leading-[1.08] max-w-4xl animate-hero-left drop-shadow-md">
                Built at the source.<br>
                <span class="italic text-amber-300 font-normal">Engineered for global trade.</span>
            </h1>

            <!-- Lead Paragraph with Solid Bright Text -->
            <p class="text-stone-100 sm:text-stone-200 text-base sm:text-lg leading-relaxed max-w-3xl font-normal animate-hero-right drop-shadow-sm">
                SALTORA connects Pakistan’s 250-million-year-old Khewra Salt Range directly with multinational food manufacturers, retail spice packers, and commercial importers across 40+ countries. We eliminate middlemen through origin-controlled concessions, optical sorting, and transparent FOB/CIF shipping.
            </p>

            <!-- Quick Action Links -->
            <div class="pt-2 flex flex-wrap items-center gap-4 animate-hero-left">
                <a href="/contact#contactForm" class="bg-saltora-terracotta hover:bg-[#c96248] text-white px-7 py-3.5 text-xs font-bold tracking-widest uppercase transition-all duration-300 shadow-lg shadow-[#e07a5f]/20 flex items-center gap-2.5 rounded-xs">
                    <i class="fa-solid fa-file-contract text-amber-200 text-xs"></i>
                    <span>REQUEST EXPORT SPECIFICATIONS</span>
                </a>
                <a href="#facility" class="bg-black/40 hover:bg-black/70 border border-white/40 hover:border-white text-white hover:text-amber-200 px-7 py-3.5 text-xs font-bold tracking-widest uppercase transition-all rounded-xs flex items-center gap-2 shadow-md">
                    <span>TOUR PROCESSING FACILITY</span>
                    <i class="fa-solid fa-arrow-down text-xs"></i>
                </a>
            </div>

            <!-- Trade Metrics Cards (Glassmorphic) -->
            <div class="pt-6 grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 border-t border-stone-800/80 reveal-on-scroll">
                <div class="bg-stone-900/60 backdrop-blur-md p-5 rounded-xl border border-stone-800/90 shadow-sm">
                    <div class="font-serif text-3xl sm:text-4xl text-white font-normal">50,000<span class="text-[#e07a5f]">+</span></div>
                    <div class="text-[11px] text-stone-300 uppercase tracking-wider font-semibold pt-1">MT Annual Export Capacity</div>
                </div>
                <div class="bg-stone-900/60 backdrop-blur-md p-5 rounded-xl border border-stone-800/90 shadow-sm">
                    <div class="font-serif text-3xl sm:text-4xl text-white font-normal">98.5<span class="text-[#e07a5f]">%+</span></div>
                    <div class="text-[11px] text-stone-300 uppercase tracking-wider font-semibold pt-1">Certified NaCl Purity</div>
                </div>
                <div class="bg-stone-900/60 backdrop-blur-md p-5 rounded-xl border border-stone-800/90 shadow-sm">
                    <div class="font-serif text-3xl sm:text-4xl text-white font-normal">40<span class="text-[#e07a5f]">+</span></div>
                    <div class="text-[11px] text-stone-300 uppercase tracking-wider font-semibold pt-1">Global Trade Corridors</div>
                </div>
                <div class="bg-stone-900/60 backdrop-blur-md p-5 rounded-xl border border-stone-800/90 shadow-sm">
                    <div class="font-serif text-3xl sm:text-4xl text-white font-normal">100<span class="text-[#e07a5f]">%</span></div>
                    <div class="text-[11px] text-stone-300 uppercase tracking-wider font-semibold pt-1">Ancient Seabed Origin</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONTINUOUS INFINITE TICKER BAR -->
    <div class="bg-saltora-terracotta text-white py-3 overflow-hidden shadow-inner border-y border-saltora-terracotta-dark">
        <div class="marquee-track flex whitespace-nowrap gap-12 text-xs font-semibold tracking-widest uppercase items-center">
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 98.5%+ PURE NaCl GRADE A</span>
                <span class="flex items-center gap-2">✦ ISO 22000 & FSSC ACCREDITED</span>
                <span class="flex items-center gap-2">✦ OEM PRIVATE LABEL PACKAGING</span>
                <span class="flex items-center gap-2">✦ DIRECT FROM KHEWRA SALT RANGE</span>
                <span class="flex items-center gap-2">✦ 20FT FCL PALLETIZED EXPORT</span>
                <span class="flex items-center gap-2">✦ 100% UNREFINED & MICROPLASTIC FREE</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 98.5%+ PURE NaCl GRADE A</span>
                <span class="flex items-center gap-2">✦ ISO 22000 & FSSC ACCREDITED</span>
                <span class="flex items-center gap-2">✦ OEM PRIVATE LABEL PACKAGING</span>
                <span class="flex items-center gap-2">✦ DIRECT FROM KHEWRA SALT RANGE</span>
                <span class="flex items-center gap-2">✦ 20FT FCL PALLETIZED EXPORT</span>
                <span class="flex items-center gap-2">✦ 100% UNREFINED & MICROPLASTIC FREE</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 98.5%+ PURE NaCl GRADE A</span>
                <span class="flex items-center gap-2">✦ ISO 22000 & FSSC ACCREDITED</span>
                <span class="flex items-center gap-2">✦ OEM PRIVATE LABEL PACKAGING</span>
                <span class="flex items-center gap-2">✦ DIRECT FROM KHEWRA SALT RANGE</span>
                <span class="flex items-center gap-2">✦ 20FT FCL PALLETIZED EXPORT</span>
                <span class="flex items-center gap-2">✦ 100% UNREFINED & MICROPLASTIC FREE</span>
            </div>
        </div>
    </div>

    <!-- 4. THREE CORE FOUNDATIONAL PILLARS -->
    <section class="py-20 md:py-28 px-6 md:px-12 max-w-7xl mx-auto overflow-hidden">
        <div class="text-center max-w-2xl mx-auto space-y-3 mb-14 reveal-from-top">
            <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">OUR CORE ADVANTAGE</span>
            <h2 class="text-3xl sm:text-4xl font-serif text-saltora-text font-normal">
                Why International Buyers Choose SALTORA
            </h2>
            <p class="text-xs text-saltora-muted leading-relaxed font-light">
                Direct concession contracts, in-house optical sorting, and documented container clearance provide a seamless commercial experience.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Col 1: Sourced at Origin -->
            <div class="bg-white border border-saltora-border p-8 rounded-xl space-y-4 card-hover-effect group cursor-pointer reveal-from-left stagger-1 shadow-xs">
                <div class="w-12 h-12 rounded-xl bg-saltora-blush flex items-center justify-center text-saltora-terracotta mb-2 group-hover:scale-110 transition-transform duration-500 shadow-xs">
                    <i class="fa-solid fa-mountain-sun text-lg"></i>
                </div>
                <h3 class="font-serif text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Direct Mine Concessions</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Direct access to the Khewra and Kalabagh mountain belts in Pakistan's Salt Range — the true geographical source of authentic pink rock mineral deposits.
                </p>
                <div class="pt-2 flex items-center gap-2 text-xs font-semibold text-saltora-terracotta">
                    <span>Zero Broker Markups</span>
                    <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                </div>
            </div>

            <!-- Col 2: Export Prepared -->
            <div class="bg-white border border-saltora-border p-8 rounded-xl space-y-4 card-hover-effect group cursor-pointer reveal-scale stagger-2 shadow-xs">
                <div class="w-12 h-12 rounded-xl bg-saltora-blush flex items-center justify-center text-saltora-terracotta mb-2 group-hover:scale-110 transition-transform duration-500 shadow-xs">
                    <i class="fa-solid fa-microscope text-lg"></i>
                </div>
                <h3 class="font-serif text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Precision Optical Sorting</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    High-speed color sorters, multi-tier vibratory mesh sieves, and magnetic traps ensure every grain adheres to food-grade purity standards and uniform color tone.
                </p>
                <div class="pt-2 flex items-center gap-2 text-xs font-semibold text-saltora-terracotta">
                    <span>0.2mm to 5mm Calibration</span>
                    <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                </div>
            </div>

            <!-- Col 3: B2B Focused -->
            <div class="bg-white border border-saltora-border p-8 rounded-xl space-y-4 card-hover-effect group cursor-pointer reveal-from-right stagger-3 shadow-xs">
                <div class="w-12 h-12 rounded-xl bg-saltora-blush flex items-center justify-center text-saltora-terracotta mb-2 group-hover:scale-110 transition-transform duration-500 shadow-xs">
                    <i class="fa-solid fa-ship text-lg"></i>
                </div>
                <h3 class="font-serif text-2xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Port Qasim Export Desk</h3>
                <p class="text-xs text-saltora-muted leading-relaxed font-light">
                    Export-certified container packaging (FIBC 1-ton tote sacks, 25kg woven bags, and private-label cartons) with full COA, Phytosanitary, and BL documentation.
                </p>
                <div class="pt-2 flex items-center gap-2 text-xs font-semibold text-saltora-terracotta">
                    <span>FOB Karachi & CIF Worldwide</span>
                    <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. OUR STORY & GEOLOGICAL PROVENANCE (STORYTELLING WITH NEW AUTHENTIC PHOTO) -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-white border-t border-saltora-border/60 overflow-hidden">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Text Story (Reveals Left-to-Right) -->
            <div class="lg:col-span-6 space-y-6 reveal-from-left">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-saltora-blush text-[11px] font-bold tracking-widest text-saltora-terracotta uppercase">
                    <span>250 MILLION YEARS OF GEOLOGICAL PURITY</span>
                </div>

                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal leading-[1.12]">
                    Unmatched Mineral Pedigree from Pakistan’s Salt Range
                </h2>

                <p class="text-saltora-muted text-sm sm:text-base font-light leading-relaxed">
                    Long before modern human civilization and industrial pollution, an ancient ocean evaporated in the Himalayan foothills of Pakistan. Tectonic compression buried and protected these pure mineral salt veins beneath millions of tons of primordial rock strata.
                </p>

                <p class="text-saltora-muted text-sm sm:text-base font-light leading-relaxed">
                    Today, global buyers face unpredictable middlemen, inconsistent color sorting, and dubious origin documentation. SALTORA was founded to be the authoritative export partner on the ground: directly overseeing selective boulder extraction, scientific sorting, and moisture-controlled packaging under strict international trade protocols.
                </p>

                <!-- Key Mineral Attributes List -->
                <div class="grid grid-cols-2 gap-4 pt-2 text-xs text-stone-700">
                    <div class="flex items-center gap-2.5">
                        <i class="fa-solid fa-circle-check text-saltora-terracotta text-sm"></i>
                        <span>Zero Microplastics or Additives</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <i class="fa-solid fa-circle-check text-saltora-terracotta text-sm"></i>
                        <span>84+ Naturally Occurring Minerals</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <i class="fa-solid fa-circle-check text-saltora-terracotta text-sm"></i>
                        <span>Natural Iron Oxide Blush Tone</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <i class="fa-solid fa-circle-check text-saltora-terracotta text-sm"></i>
                        <span>Lot-Specific Lab Assay Reports</span>
                    </div>
                </div>

                <div class="pt-4 flex flex-wrap items-center gap-4">
                    <a href="/products" class="inline-flex items-center gap-2 bg-saltora-dark hover:bg-black text-white px-6 py-3.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 cursor-pointer group rounded-xs shadow-md">
                        <span>EXPLORE EXPORT GRADES</span>
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                    <a href="/contact#contactForm" class="inline-flex items-center gap-2 border border-saltora-text/30 hover:border-saltora-text px-6 py-3.5 text-xs font-bold tracking-wider uppercase transition-colors rounded-xs">
                        <span>REQUEST SAMPLE DISPATCH</span>
                    </a>
                </div>
            </div>

            <!-- Right Photo Stack (Newly Generated Mine Inspection Photo) -->
            <div class="lg:col-span-6 relative reveal-from-right">
                <div class="relative rounded-2xl overflow-hidden border border-saltora-border shadow-2xl group cursor-pointer">
                    <img src="/about-inspection.jpg" alt="SALTORA Geologist Quality Inspection inside Khewra Mine" class="w-full h-[500px] object-cover transition-transform duration-700 group-hover:scale-105">
                    
                    <!-- Floating Quality Verification Overlay Badge -->
                    <div class="absolute bottom-6 left-6 right-6 p-5 bg-black/80 backdrop-blur-md rounded-xl border border-white/20 text-white space-y-2">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-amber-300 font-bold uppercase tracking-wider flex items-center gap-1.5">
                                <i class="fa-solid fa-shield-halved text-[#e07a5f]"></i>
                                Geological Quality Assay
                            </span>
                            <span class="text-stone-300 text-[10px]">Khewra Mine Tunnel #4</span>
                        </div>
                        <p class="text-xs text-stone-200 font-light leading-relaxed">
                            "Every consignment undergoes optical grade segregation and spectrometry analysis before milling to ensure guaranteed NaCl purity exceeding 98.5%."
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 6. PROCESSING FACILITY & TESTING LABORATORY (NEW SECTION WITH GENERATED IMAGE) -->
    <section id="facility" class="py-20 md:py-28 px-6 md:px-12 bg-saltora-bg border-t border-saltora-border/60 overflow-hidden">
        <div class="max-w-7xl mx-auto space-y-14">
            
            <div class="max-w-3xl mx-auto text-center space-y-3 reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">HYGIENIC PROCESSING & TESTING</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    ISO-Certified Quality Testing Laboratory
                </h2>
                <p class="text-xs sm:text-sm text-saltora-muted font-light leading-relaxed">
                    Our Lahore & Khewra regional processing units maintain pharmaceutical-grade cleanliness, stainless steel food-grade conveyors, and computerized refractive index spectrometers.
                </p>
            </div>

            <!-- Wide Facility Showcase Image -->
            <div class="relative rounded-2xl overflow-hidden border border-saltora-border shadow-2xl reveal-scale group">
                <img src="/about-facility.jpg" alt="SALTORA Modern Himalayan Pink Salt Processing Facility & ISO Laboratory" class="w-full h-[450px] md:h-[550px] object-cover transition-transform duration-700 group-hover:scale-102">
                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent pointer-events-none"></div>

                <!-- Bottom Feature Highlights Strip -->
                <div class="absolute bottom-6 left-6 right-6 grid grid-cols-1 sm:grid-cols-3 gap-4 text-white text-xs">
                    <div class="bg-stone-900/85 backdrop-blur-md p-4 rounded-xl border border-white/10 space-y-1">
                        <div class="text-amber-300 font-bold flex items-center gap-2">
                            <i class="fa-solid fa-microscope text-[#e07a5f]"></i>
                            <span>Refractive Index Spectrometry</span>
                        </div>
                        <p class="text-stone-300 text-[11px] font-light">Laboratory verification of NaCl percentage, mineral trace count, and heavy metal absence.</p>
                    </div>

                    <div class="bg-stone-900/85 backdrop-blur-md p-4 rounded-xl border border-white/10 space-y-1">
                        <div class="text-amber-300 font-bold flex items-center gap-2">
                            <i class="fa-solid fa-arrows-split-up-and-left text-[#e07a5f]"></i>
                            <span>Optical Laser Color Sorting</span>
                        </div>
                        <p class="text-stone-300 text-[11px] font-light">Multi-channel optical cameras separate dark stone granules from premium translucent pink crystals.</p>
                    </div>

                    <div class="bg-stone-900/85 backdrop-blur-md p-4 rounded-xl border border-white/10 space-y-1">
                        <div class="text-amber-300 font-bold flex items-center gap-2">
                            <i class="fa-solid fa-temperature-low text-[#e07a5f]"></i>
                            <span>Dehumidified Cleanroom Bagging</span>
                        </div>
                        <p class="text-stone-300 text-[11px] font-light">Air-conditioned packaging bays prevent caking and clumping in maritime ocean transit.</p>
                    </div>
                </div>
            </div>

            <!-- Quality Credentials Row -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-4 text-center reveal-on-scroll">
                <div class="bg-white p-6 rounded-xl border border-saltora-border shadow-xs space-y-2">
                    <div class="text-2xl text-saltora-terracotta"><i class="fa-solid fa-certificate"></i></div>
                    <h4 class="font-serif text-lg font-bold text-saltora-text">ISO 22000 : 2018</h4>
                    <p class="text-[11px] text-saltora-muted">Food Safety Management System Accredited</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-saltora-border shadow-xs space-y-2">
                    <div class="text-2xl text-saltora-terracotta"><i class="fa-solid fa-award"></i></div>
                    <h4 class="font-serif text-lg font-bold text-saltora-text">HACCP & GMP</h4>
                    <p class="text-[11px] text-saltora-muted">Hazard Analysis Critical Control Points</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-saltora-border shadow-xs space-y-2">
                    <div class="text-2xl text-saltora-terracotta"><i class="fa-solid fa-moon"></i></div>
                    <h4 class="font-serif text-lg font-bold text-saltora-text">100% Halal Certified</h4>
                    <p class="text-[11px] text-saltora-muted">Dedicated Shariah-compliant Pure Mineral Line</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-saltora-border shadow-xs space-y-2">
                    <div class="text-2xl text-saltora-terracotta"><i class="fa-solid fa-passport"></i></div>
                    <h4 class="font-serif text-lg font-bold text-saltora-text">US FDA Registered</h4>
                    <p class="text-[11px] text-saltora-muted">Verified Foreign Facility for North American Import</p>
                </div>
            </div>

        </div>
    </section>

    <!-- 7. COMPLETE MINE-TO-PORT SUPPLY CHAIN (STEP-BY-STEP WORKFLOW) -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-white border-t border-saltora-border/60 overflow-hidden">
        <div class="max-w-7xl mx-auto space-y-14">
            
            <div class="text-center max-w-2xl mx-auto space-y-3 reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">INTEGRATED VALUE CHAIN</span>
                <h2 class="text-3xl sm:text-4xl font-serif text-saltora-text font-normal">
                    From Raw Mineral Rock to Container Port
                </h2>
                <p class="text-xs text-saltora-muted font-light leading-relaxed">
                    Transparent oversight across every step of the supply chain ensures flawless cargo delivery.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                
                <!-- Step 1 -->
                <div class="space-y-4 group cursor-pointer reveal-from-bottom stagger-1">
                    <div class="aspect-4/3 rounded-xl overflow-hidden border border-saltora-border bg-saltora-card shadow-xs relative">
                        <img src="/khewra-mine.jpg" alt="Khewra Salt Mine Extraction" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute top-3 left-3 px-2.5 py-1 bg-black/75 rounded-md text-[10px] font-bold text-amber-200 tracking-wider">
                            PHASE 01
                        </div>
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Selective Mining</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Hand-harvested solid rock boulders from underground Khewra shafts, separated by crystalline density and natural rose tone.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="space-y-4 group cursor-pointer reveal-from-bottom stagger-2">
                    <div class="aspect-4/3 rounded-xl overflow-hidden border border-saltora-border bg-saltora-card shadow-xs relative">
                        <img src="/abt2.jpg" alt="Crushing, Optical Washing and Sifting" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute top-3 left-3 px-2.5 py-1 bg-black/75 rounded-md text-[10px] font-bold text-amber-200 tracking-wider">
                            PHASE 02
                        </div>
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Optical Sifting & Milling</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Crushed in food-grade stainless roller mills and sifted through multi-stage vibratory screens to achieve exact mesh specifications.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="space-y-4 group cursor-pointer reveal-from-bottom stagger-3">
                    <div class="aspect-4/3 rounded-xl overflow-hidden border border-saltora-border bg-saltora-card shadow-xs relative">
                        <img src="/salt-bulk-export.jpg" alt="Moisture Proof Packaging & Palletizing" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute top-3 left-3 px-2.5 py-1 bg-black/75 rounded-md text-[10px] font-bold text-amber-200 tracking-wider">
                            PHASE 03
                        </div>
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Moisture-Proof Packing</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Sealed into poly-lined 25kg PP bags, 1,000kg FIBC tote supersacks, or custom OEM retail cartons with desiccant protection.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="space-y-4 group cursor-pointer reveal-from-bottom stagger-4">
                    <div class="aspect-4/3 rounded-xl overflow-hidden border border-saltora-border bg-saltora-card shadow-xs relative">
                        <img src="/abt3.jpg" alt="Port Qasim Container Loading & Dispatch" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute top-3 left-3 px-2.5 py-1 bg-black/75 rounded-md text-[10px] font-bold text-amber-200 tracking-wider">
                            PHASE 04
                        </div>
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal group-hover:text-saltora-terracotta transition-colors">Port Qasim Dispatch</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Loaded into 20ft ocean containers with phytosanitary inspection, Certificate of Origin, and express ocean bill of lading.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- 8. SUSTAINABILITY & ETHICAL MINING COMMITMENTS -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-saltora-bg border-t border-saltora-border/60 overflow-hidden">
        <div class="max-w-7xl mx-auto space-y-12">
            
            <div class="max-w-2xl mx-auto text-center space-y-3 reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">ETHICS & STEWARDSHIP</span>
                <h2 class="text-3xl sm:text-4xl font-serif text-saltora-text font-normal">
                    Sustainable Mining & Worker Welfare
                </h2>
                <p class="text-xs text-saltora-muted font-light leading-relaxed">
                    We honor the mountain communities that make Himalayan salt export possible through responsible practices.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl border border-saltora-border space-y-4 shadow-xs reveal-from-left stagger-1">
                    <div class="w-10 h-10 rounded-lg bg-saltora-blush text-saltora-terracotta flex items-center justify-center font-bold">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                    </div>
                    <h4 class="font-serif text-xl font-bold text-saltora-text">Fair Wages & Safety First</h4>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        All mining teams operate under modern subterranean ventilation safety protocols, equipped with full protective gear and receiving fair, direct compensation above local standards.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl border border-saltora-border space-y-4 shadow-xs reveal-scale stagger-2">
                    <div class="w-10 h-10 rounded-lg bg-saltora-blush text-saltora-terracotta flex items-center justify-center font-bold">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <h4 class="font-serif text-xl font-bold text-saltora-text">Zero Chemical Processing</h4>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        We never use artificial bleaching agents, chemical drying additives, or anti-caking compounds. Our salt reaches global consumers exactly as Mother Nature created it.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl border border-saltora-border space-y-4 shadow-xs reveal-from-right stagger-3">
                    <div class="w-10 h-10 rounded-lg bg-saltora-blush text-saltora-terracotta flex items-center justify-center font-bold">
                        <i class="fa-solid fa-recycle"></i>
                    </div>
                    <h4 class="font-serif text-xl font-bold text-saltora-text">Zero-Waste Mineral Utility</h4>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Every kilogram extracted is put to valuable use: prime crystalline blocks become culinary salt and animal licks, while mineral fines serve deicing and eco-friendly bath applications.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- 9. FREQUENTLY ASKED B2B QUESTIONS (INTERACTIVE ACCORDION) -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-white border-t border-saltora-border/60 overflow-hidden" x-data="{ activeFaq: 1 }">
        <div class="max-w-4xl mx-auto space-y-12">
            
            <div class="text-center space-y-3 reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">CLEAR COMMERCIAL TERMS</span>
                <h2 class="text-3xl sm:text-4xl font-serif text-saltora-text font-normal">
                    Frequently Asked B2B Questions
                </h2>
                <p class="text-xs text-saltora-muted font-light leading-relaxed">
                    Direct answers regarding minimum order volumes, shipping timelines, packaging, and certifications.
                </p>
            </div>

            <div class="space-y-4 reveal-on-scroll">
                
                <!-- FAQ Item 1 -->
                <div class="border border-saltora-border rounded-xl overflow-hidden transition-all duration-300" :class="activeFaq === 1 ? 'shadow-md border-saltora-terracotta/40' : 'hover:border-saltora-border'">
                    <button @click="activeFaq = (activeFaq === 1 ? null : 1)" class="w-full p-6 text-left flex items-center justify-between gap-4 cursor-pointer bg-white">
                        <span class="font-serif text-lg text-saltora-text font-medium">What is your Minimum Order Quantity (MOQ) for export?</span>
                        <div class="w-7 h-7 rounded-full bg-saltora-blush flex items-center justify-center text-saltora-terracotta shrink-0 transition-transform" :class="activeFaq === 1 ? 'rotate-180' : ''">
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </div>
                    </button>
                    <div x-show="activeFaq === 1" x-collapse x-cloak class="px-6 pb-6 pt-1 text-xs text-saltora-muted leading-relaxed font-light border-t border-saltora-border/40 bg-saltora-bg/30">
                        Our standard commercial export MOQ is <strong>one 20ft Full Container Load (FCL)</strong>, which typically holds <strong>20 to 27.5 Metric Tons</strong> depending on destination road-weight limits. We can consolidate multiple product types (e.g. fine salt, grinder crystals, and animal lick blocks) within the same container.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="border border-saltora-border rounded-xl overflow-hidden transition-all duration-300" :class="activeFaq === 2 ? 'shadow-md border-saltora-terracotta/40' : 'hover:border-saltora-border'">
                    <button @click="activeFaq = (activeFaq === 2 ? null : 2)" class="w-full p-6 text-left flex items-center justify-between gap-4 cursor-pointer bg-white">
                        <span class="font-serif text-lg text-saltora-text font-medium">Can you provide OEM private-label packaging with our custom branding?</span>
                        <div class="w-7 h-7 rounded-full bg-saltora-blush flex items-center justify-center text-saltora-terracotta shrink-0 transition-transform" :class="activeFaq === 2 ? 'rotate-180' : ''">
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </div>
                    </button>
                    <div x-show="activeFaq === 2" x-collapse x-cloak class="px-6 pb-6 pt-1 text-xs text-saltora-muted leading-relaxed font-light border-t border-saltora-border/40 bg-saltora-bg/30">
                        Yes. We offer complete OEM and ODM private-label packaging. We can print your custom barcodes, multilingual nutritional fact panels (FDA, EU, GCC regulations), and branding on stand-up pouches, cardboard salt boxes, ceramic grinders, or poly-woven 25kg sacks.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="border border-saltora-border rounded-xl overflow-hidden transition-all duration-300" :class="activeFaq === 3 ? 'shadow-md border-saltora-terracotta/40' : 'hover:border-saltora-border'">
                    <button @click="activeFaq = (activeFaq === 3 ? null : 3)" class="w-full p-6 text-left flex items-center justify-between gap-4 cursor-pointer bg-white">
                        <span class="font-serif text-lg text-saltora-text font-medium">What export documentation accompanies every shipment?</span>
                        <div class="w-7 h-7 rounded-full bg-saltora-blush flex items-center justify-center text-saltora-terracotta shrink-0 transition-transform" :class="activeFaq === 3 ? 'rotate-180' : ''">
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </div>
                    </button>
                    <div x-show="activeFaq === 3" x-collapse x-cloak class="px-6 pb-6 pt-1 text-xs text-saltora-muted leading-relaxed font-light border-t border-saltora-border/40 bg-saltora-bg/30">
                        Every export consignment is dispatched with a verified <strong>Commercial Invoice, Packing List, Original Clean on Board Bill of Lading (B/L), Certificate of Analysis (COA)</strong>, Government Phytosanitary Certificate, Certificate of Origin (COO), and Fumigation Certificate.
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="border border-saltora-border rounded-xl overflow-hidden transition-all duration-300" :class="activeFaq === 4 ? 'shadow-md border-saltora-terracotta/40' : 'hover:border-saltora-border'">
                    <button @click="activeFaq = (activeFaq === 4 ? null : 4)" class="w-full p-6 text-left flex items-center justify-between gap-4 cursor-pointer bg-white">
                        <span class="font-serif text-lg text-saltora-text font-medium">Do you support third-party pre-shipment inspections (SGS, Eurofins, Intertek)?</span>
                        <div class="w-7 h-7 rounded-full bg-saltora-blush flex items-center justify-center text-saltora-terracotta shrink-0 transition-transform" :class="activeFaq === 4 ? 'rotate-180' : ''">
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </div>
                    </button>
                    <div x-show="activeFaq === 4" x-collapse x-cloak class="px-6 pb-6 pt-1 text-xs text-saltora-muted leading-relaxed font-light border-t border-saltora-border/40 bg-saltora-bg/30">
                        Absolutely. We regularly facilitate independent third-party laboratory inspections at our processing facility or during container loading at Port Qasim / Karachi Port at buyer's nomination.
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="border border-saltora-border rounded-xl overflow-hidden transition-all duration-300" :class="activeFaq === 5 ? 'shadow-md border-saltora-terracotta/40' : 'hover:border-saltora-border'">
                    <button @click="activeFaq = (activeFaq === 5 ? null : 5)" class="w-full p-6 text-left flex items-center justify-between gap-4 cursor-pointer bg-white">
                        <span class="font-serif text-lg text-saltora-text font-medium">What Incoterms and payment terms do you accept?</span>
                        <div class="w-7 h-7 rounded-full bg-saltora-blush flex items-center justify-center text-saltora-terracotta shrink-0 transition-transform" :class="activeFaq === 5 ? 'rotate-180' : ''">
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </div>
                    </button>
                    <div x-show="activeFaq === 5" x-collapse x-cloak class="px-6 pb-6 pt-1 text-xs text-saltora-muted leading-relaxed font-light border-t border-saltora-border/40 bg-saltora-bg/30">
                        We primarily export under <strong>FOB Karachi Port / Port Qasim</strong> and <strong>CIF (Cost, Insurance & Freight)</strong> to all major international seaports. Standard commercial payment terms are 50% advance and 50% on Bill of Lading, or Letter of Credit for qualifying volume buyers.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 10. COMPACT CONVERSION CTA BANNER -->
    <section class="relative bg-gradient-to-r from-[#1e1b18] via-[#2a2421] to-[#1e1b18] text-white py-16 md:py-20 px-6 md:px-12 overflow-hidden border-t border-stone-800">
        <!-- Crystal Texture Overlay -->
        <div class="absolute inset-0 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px] opacity-10 pointer-events-none"></div>

        <div class="relative z-10 max-w-4xl mx-auto text-center space-y-6">
            <span class="text-[11px] font-bold tracking-widest text-[#e07a5f] uppercase block">DIRECT FROM THE SOURCE</span>
            <h2 class="text-3xl sm:text-5xl font-serif text-white font-normal leading-tight">
                Ready to partner with Pakistan’s premier pink salt exporter?
            </h2>
            <p class="text-stone-300 text-xs sm:text-sm font-light max-w-2xl mx-auto leading-relaxed">
                Connect with our export desk today. We provide itemized pricing sheets, grain mesh size assortments, and container load-out schedules within 24 hours.
            </p>
            <div class="pt-2 flex flex-wrap justify-center items-center gap-4">
                <a href="/contact#contactForm" class="bg-saltora-terracotta hover:bg-[#c96248] text-white px-8 py-3.5 text-xs font-bold tracking-widest uppercase transition-all shadow-md rounded-xs">
                    REQUEST FORMAL B2B QUOTE
                </a>
                <a href="https://wa.me/923180735748" target="_blank" rel="noopener noreferrer" class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3.5 text-xs font-bold tracking-widest uppercase transition-all shadow-md rounded-xs flex items-center gap-2">
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                    <span>WHATSAPP EXPORT DESK</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 11. UNIFIED FOOTER -->
    <x-footer />

</body>
</html>
