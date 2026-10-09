<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Comprehensive Technical & On-Page SEO -->
    <title>Himalayan Pink Salt Export & Logistics | Global Shipping from Pakistan — SALTORA</title>
    <meta name="description" content="SALTORA's international shipping, FOB/CIF terms, and container logistics for Himalayan pink salt. Serving 20+ global ports via Port Qasim & Karachi Port with full documentation and batch traceability.">
    <meta name="keywords" content="Himalayan Salt Export Pakistan, FOB Karachi Port salt shipping, CIF pink salt delivery, Port Qasim salt exporter, 20ft container salt weight, bulk salt ocean freight, pink salt export documentation, Maersk salt shipping">
    <meta name="author" content="SALTORA Export Logistics Division">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Open Graph (Facebook / LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="SALTORA Himalayan Pink Salt">
    <meta property="og:title" content="Himalayan Pink Salt Export & Logistics | Global Shipping from Pakistan — SALTORA">
    <meta property="og:description" content="Transparent 7-step export workflow, FOB/CIF Incoterms, container payload specifications, and global transit times from Karachi Port & Port Qasim.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ url('/export nd logisyt her.jpg') }}">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Himalayan Pink Salt Export & Logistics | SALTORA Pakistan">
    <meta name="twitter:description" content="Transparent ocean container logistics, port transit times, and documentation for global Himalayan pink salt buyers.">
    <meta name="twitter:image" content="{{ url('/export nd logisyt her.jpg') }}">
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/logo.png">
    <link rel="shortcut icon" type="image/png" href="/logo.png">
    
    <!-- FontAwesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Schema.org JSON-LD Structured Data for Export Logistics Service -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebPage",
          "@id": "{{ url()->current() }}#webpage",
          "url": "{{ url()->current() }}",
          "name": "Himalayan Pink Salt Export & Logistics | Global Shipping from Pakistan — SALTORA",
          "description": "SALTORA's international shipping, FOB/CIF terms, and container logistics for Himalayan pink salt. Serving 20+ global ports via Port Qasim & Karachi Port with full documentation and batch traceability.",
          "isPartOf": {
            "@type": "WebSite",
            "@id": "{{ url('/') }}#website",
            "url": "{{ url('/') }}",
            "name": "SALTORA Himalayan Pink Salt Exporter"
          },
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
                "name": "Export & Logistics",
                "item": "{{ url()->current() }}"
              }
            ]
          }
        },
        {
          "@type": "Service",
          "@id": "{{ url()->current() }}#service",
          "name": "Himalayan Pink Salt Ocean Freight & Export Logistics",
          "provider": {
            "@type": "Organization",
            "name": "SALTORA Himalayan Pink Salt Exporter",
            "url": "{{ url('/') }}"
          },
          "serviceType": "International Maritime Bulk & Containerized Freight Logistics",
          "areaServed": ["United States", "European Union", "United Kingdom", "United Arab Emirates", "Saudi Arabia", "Canada", "Australia", "Japan", "South Korea"],
          "description": "Complete FOB, CFR, and CIF ocean container delivery of food-grade, retail, and bulk industrial Himalayan pink salt from Port Qasim / Karachi Port to major international sea hubs."
        }
      ]
    }
    </script>
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" 
      x-data="{
          mobileMenuOpen: false,
          portModalOpen: false,
          selectedPort: null,
          openPortModal(port) {
              this.selectedPort = port;
              this.portModalOpen = true;
          },
          closePortModal() {
              this.portModalOpen = false;
          }
      }">

    <!-- Single Sticky Navigation Header -->
    <header class="sticky top-0 z-40 bg-saltora-bg/95 backdrop-blur-md border-b border-saltora-border/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-10 h-16 md:h-18 flex items-center justify-between gap-4">
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3 shrink-0 group cursor-pointer mr-2 lg:mr-6" title="SALTORA Home">
                <img src="/logo.png" alt="SALTORA Logo" class="h-9 w-auto object-contain transition-transform group-hover:scale-105">
                <span class="font-serif text-xl sm:text-2xl font-bold tracking-wider text-saltora-text">SALTORA</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-5 xl:space-x-8 text-[12px] font-semibold tracking-wider text-saltora-text uppercase mx-auto">
                <a href="/about" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">ABOUT</a>
                <a href="/products" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">CERTIFICATIONS</a>
                <a href="/export-logistics" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1 cursor-pointer whitespace-nowrap">EXPORT & LOGISTICS</a>
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
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-terracotta font-bold cursor-pointer">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/blog" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">BLOG</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CONTACT</a>
            <a href="/contact" @click="mobileMenuOpen = false" class="flex items-center justify-center gap-2 w-full mt-4 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer rounded-xs shadow-md transition-colors">
                <i class="fa-solid fa-file-invoice text-amber-200 text-sm"></i>
                <span>REQUEST A QUOTE</span>
            </a>
        </div>
    </header>

    <!-- HERO SECTION (DARK SHIPPING PORT BACKGROUND OVERLAY) -->
    <section class="relative bg-saltora-dark text-white py-20 md:py-32 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border">
        <!-- Backdrop Image (`/export nd logisyt her.jpg`) -->
        <img src="/export nd logisyt her.jpg" alt="Shipping Container Port Crane Backdrop" class="absolute inset-0 w-full h-full object-cover opacity-80 filter brightness-105 contrast-105 pointer-events-none transition-transform duration-1000 scale-105">
        <!-- Left-to-right gradient: dark behind text on left, light & visible over image on right -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/60 to-black/20 pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto">
            <div class="space-y-6 max-w-3xl animate-hero-left">
                <!-- Category Sub-tag (High Contrast Pill) -->
                <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-black/60 backdrop-blur-md border border-amber-400/40 text-[11px] font-bold tracking-mega text-amber-300 uppercase shadow-lg">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    <span>GLOBAL OCEAN FREIGHT & CONTAINER LOGISTICS</span>
                </div>

                <!-- Headline with Drop Shadow for Maximum Legibility -->
                <h1 class="text-4xl sm:text-6xl lg:text-6.5xl font-serif text-white font-normal leading-[1.08] drop-shadow-md">
                    A clear, professional buying process
                </h1>

                <!-- Paragraph with Solid Bright Text -->
                <p class="text-stone-100 sm:text-stone-200 text-base sm:text-lg leading-relaxed font-normal max-w-2xl drop-shadow-sm">
                    From initial inquiry and specification alignment to customs clearance, container stuffing, and maritime delivery at your destination port — Saltora keeps every shipment documented, transparent, and on schedule.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#incoterms" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 shadow-lg hover:shadow-xl flex items-center gap-2 rounded-xs">
                        <span>VIEW INCOTERMS & WORKFLOW</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                    </a>
                    <a href="/contact" class="bg-black/50 hover:bg-black/70 border border-white/40 text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 backdrop-blur-sm flex items-center gap-2 rounded-xs shadow-md">
                        <i class="fa-solid fa-calculator text-amber-300"></i>
                        <span>CALCULATE FREIGHT QUOTE</span>
                    </a>
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
                <span class="flex items-center gap-2">✦ DIRECT DEPARTURES: PORT QASIM & KARACHI PORT</span>
                <span class="flex items-center gap-2">✦ MAERSK, MSC, CMA CGM, HAPAG-LLOYD CARRIER PARTNERS</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ FOB TERMS: 50% ADVANCE & 50% ON B/L PRESENTATION</span>
                <span class="flex items-center gap-2">✦ SEAMLESS CUSTOMS CLEARANCE DOCUMENTATION</span>
                <span class="flex items-center gap-2">✦ BULK & CONTAINERIZED SHIPPING TO GLOBAL PORTS</span>
                <span class="flex items-center gap-2">✦ DIRECT DEPARTURES: PORT QASIM & KARACHI PORT</span>
                <span class="flex items-center gap-2">✦ MAERSK, MSC, CMA CGM, HAPAG-LLOYD CARRIER PARTNERS</span>
            </div>
        </div>
    </div>

    <!-- INCOTERMS SELECTION & PAYMENT TERMS SECTION -->
    <section id="incoterms" class="max-w-7xl mx-auto px-6 py-12" x-data="{ activeTerm: 'fob' }">
        <div class="bg-white border border-saltora-border p-6 sm:p-8 rounded-sm shadow-sm space-y-6">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-stone-200 pb-5">
                <div>
                    <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase block">COMMERCIAL INCOTERMS</span>
                    <h3 class="font-serif text-2xl sm:text-3xl text-saltora-text font-normal">Standard Trading Terms & Payment Framework</h3>
                </div>
                
                <!-- Term Switcher Tabs -->
                <div class="flex items-center gap-1.5 bg-stone-100 p-1 rounded-xs">
                    <button @click="activeTerm = 'fob'" :class="activeTerm === 'fob' ? 'bg-saltora-terracotta text-white font-bold' : 'text-stone-700 hover:text-black'" class="px-4 py-1.5 text-xs rounded-xs uppercase tracking-wider transition-colors cursor-pointer">
                        FOB (Recommended)
                    </button>
                    <button @click="activeTerm = 'cfr'" :class="activeTerm === 'cfr' ? 'bg-saltora-terracotta text-white font-bold' : 'text-stone-700 hover:text-black'" class="px-4 py-1.5 text-xs rounded-xs uppercase tracking-wider transition-colors cursor-pointer">
                        CFR (Cost & Freight)
                    </button>
                    <button @click="activeTerm = 'cif'" :class="activeTerm === 'cif' ? 'bg-saltora-terracotta text-white font-bold' : 'text-stone-700 hover:text-black'" class="px-4 py-1.5 text-xs rounded-xs uppercase tracking-wider transition-colors cursor-pointer">
                        CIF (With Insurance)
                    </button>
                </div>
            </div>

            <!-- FOB Detail -->
            <div x-show="activeTerm === 'fob'" x-cloak class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <div class="md:col-span-2 space-y-2">
                    <h4 class="font-serif text-xl font-bold text-saltora-text">FOB — Free On Board (Karachi Port / Port Qasim)</h4>
                    <p class="text-xs text-saltora-muted leading-relaxed font-light">
                        Under our standard FOB terms, Saltora manages manufacturing, inland freight from the Salt Range, customs clearance, terminal handling charges (THC), and loads the sealed containers on board your nominated shipping vessel.
                    </p>
                    <div class="pt-2 flex flex-wrap gap-3 text-xs text-stone-700 font-medium">
                        <span class="bg-saltora-blush/80 text-saltora-terracotta px-2.5 py-1 rounded-xs border border-saltora-terracotta/20">
                            <strong>Payment:</strong> 50% Advance T/T & 50% against original Bill of Lading (B/L) copy
                        </span>
                        <span class="bg-stone-50 text-stone-700 px-2.5 py-1 rounded-xs border border-stone-200">
                            <strong>Port of Loading:</strong> PKBQM / PKQAS
                        </span>
                    </div>
                </div>
                <div class="bg-[#FAF7F2] p-5 rounded-xs border border-saltora-border text-center space-y-2">
                    <span class="text-[10px] font-bold uppercase text-stone-400">Best For</span>
                    <div class="text-sm font-bold text-saltora-text">Importers with Existing Forwarding Contracts</div>
                    <a href="/contact?incoterm=FOB#contactForm" class="block w-full py-2 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white text-xs font-bold uppercase tracking-wider rounded-xs transition-colors">
                        Request FOB Pricing
                    </a>
                </div>
            </div>

            <!-- CFR Detail -->
            <div x-show="activeTerm === 'cfr'" x-cloak class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <div class="md:col-span-2 space-y-2">
                    <h4 class="font-serif text-xl font-bold text-saltora-text">CFR — Cost & Freight (Delivered to Destination Port)</h4>
                    <p class="text-xs text-saltora-muted leading-relaxed font-light">
                        Saltora books and prepays the international ocean freight with top shipping carriers (Maersk, MSC, CMA CGM) directly to your designated seaport. The buyer handles destination customs clearance and port duties upon cargo arrival.
                    </p>
                    <div class="pt-2 flex flex-wrap gap-3 text-xs text-stone-700 font-medium">
                        <span class="bg-saltora-blush/80 text-saltora-terracotta px-2.5 py-1 rounded-xs border border-saltora-terracotta/20">
                            <strong>Payment:</strong> 50% Advance T/T & 50% upon presentation of Ocean B/L copy
                        </span>
                        <span class="bg-stone-50 text-stone-700 px-2.5 py-1 rounded-xs border border-stone-200">
                            <strong>Freight:</strong> Pre-negotiated competitive carrier rates
                        </span>
                    </div>
                </div>
                <div class="bg-[#FAF7F2] p-5 rounded-xs border border-saltora-border text-center space-y-2">
                    <span class="text-[10px] font-bold uppercase text-stone-400">Best For</span>
                    <div class="text-sm font-bold text-saltora-text">Buyers Wanting Freight Handled End-to-End</div>
                    <a href="/contact?incoterm=CFR#contactForm" class="block w-full py-2 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white text-xs font-bold uppercase tracking-wider rounded-xs transition-colors">
                        Request CFR Pricing
                    </a>
                </div>
            </div>

            <!-- CIF Detail -->
            <div x-show="activeTerm === 'cif'" x-cloak class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <div class="md:col-span-2 space-y-2">
                    <h4 class="font-serif text-xl font-bold text-saltora-text">CIF — Cost, Insurance & Freight</h4>
                    <p class="text-xs text-saltora-muted leading-relaxed font-light">
                        Full comprehensive shipping solution including ocean freight and all-risk marine cargo insurance (covering 110% of CIF value under Institute Cargo Clauses A). Maximum peace of mind for institutional food manufacturers and supermarket distributors.
                    </p>
                    <div class="pt-2 flex flex-wrap gap-3 text-xs text-stone-700 font-medium">
                        <span class="bg-saltora-blush/80 text-saltora-terracotta px-2.5 py-1 rounded-xs border border-saltora-terracotta/20">
                            <strong>Insurance:</strong> 110% All-Risk Marine Coverage included
                        </span>
                        <span class="bg-stone-50 text-stone-700 px-2.5 py-1 rounded-xs border border-stone-200">
                            <strong>L/C at Sight:</strong> Supported for high-tonnage contracts
                        </span>
                    </div>
                </div>
                <div class="bg-[#FAF7F2] p-5 rounded-xs border border-saltora-border text-center space-y-2">
                    <span class="text-[10px] font-bold uppercase text-stone-400">Best For</span>
                    <div class="text-sm font-bold text-saltora-text">Turnkey Commercial Protection & Letters of Credit</div>
                    <a href="/contact?incoterm=CIF#contactForm" class="block w-full py-2 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white text-xs font-bold uppercase tracking-wider rounded-xs transition-colors">
                        Request CIF Pricing
                    </a>
                </div>
            </div>
        </div>
    </section>



    <!-- SEVEN STEPS FROM INQUIRY TO DELIVERY (VERTICAL INTERACTIVE TIMELINE) -->
    <section class="py-20 md:py-28 px-6 md:px-12 max-w-7xl mx-auto space-y-12">
        
        <!-- Header -->
        <div class="space-y-3 reveal-on-scroll reveal-from-top text-center max-w-3xl mx-auto">
            <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">EXPORT TIMELINE & WORKFLOW</span>
            <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                Seven steps from inquiry to port arrival
            </h2>
            <p class="text-saltora-muted text-sm sm:text-base font-light">
                Transparent milestones with complete documentation handoffs at each phase.
            </p>
        </div>

        <!-- 7 Process Steps Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 border-t border-saltora-border/80">
            
            <!-- Step 01 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5 cursor-pointer group hover:bg-white transition-colors px-4 rounded-xs reveal-on-scroll reveal-from-bottom stagger-1">
                <span class="font-serif text-3xl text-saltora-terracotta/70 group-hover:text-saltora-terracotta group-hover:scale-110 transition-all duration-300 font-bold shrink-0">01</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Send Target Inquiry</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">Share your required grain mesh size, packaging format, tonnage, and destination port through our quote form or direct WhatsApp.</p>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5 cursor-pointer group hover:bg-white transition-colors px-4 rounded-xs reveal-on-scroll reveal-from-bottom stagger-2">
                <span class="font-serif text-3xl text-saltora-terracotta/70 group-hover:text-saltora-terracotta group-hover:scale-110 transition-all duration-300 font-bold shrink-0">02</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Specification & Sample Approval</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">We align on chemical purity, particle grading, packaging artwork, and dispatch courier sample test kits to your facility.</p>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5 cursor-pointer group hover:bg-white transition-colors px-4 rounded-xs reveal-on-scroll reveal-from-bottom stagger-3">
                <span class="font-serif text-3xl text-saltora-terracotta/70 group-hover:text-saltora-terracotta group-hover:scale-110 transition-all duration-300 font-bold shrink-0">03</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Formal Proforma & Contract</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">You receive a binding commercial proforma invoice detailing unit prices, FOB/CIF terms, production schedule, and bank routing details.</p>
                </div>
            </div>

            <!-- Step 04 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5 cursor-pointer group hover:bg-white transition-colors px-4 rounded-xs reveal-on-scroll reveal-from-bottom stagger-4">
                <span class="font-serif text-3xl text-saltora-terracotta/70 group-hover:text-saltora-terracotta group-hover:scale-110 transition-all duration-300 font-bold shrink-0">04</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Production & Sieve Calibration</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">Pure rock salt is extracted, optical sorted, rotary sieved, and hermetically packaged in food-grade moisture barrier sacks or private pouches.</p>
                </div>
            </div>

            <!-- Step 05 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5 cursor-pointer group hover:bg-white transition-colors px-4 rounded-xs reveal-on-scroll reveal-from-bottom stagger-5">
                <span class="font-serif text-3xl text-saltora-terracotta/70 group-hover:text-saltora-terracotta group-hover:scale-110 transition-all duration-300 font-bold shrink-0">05</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Batch Testing & Pre-Shipment Audit</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">Laboratory analysis verifies purity and heavy metals. Third-party inspectors (SGS, Intertek, or PCSIR) verify weights and sample integrity.</p>
                </div>
            </div>

            <!-- Step 06 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5 cursor-pointer group hover:bg-white transition-colors px-4 rounded-xs reveal-on-scroll reveal-from-bottom stagger-6">
                <span class="font-serif text-3xl text-saltora-terracotta/70 group-hover:text-saltora-terracotta group-hover:scale-110 transition-all duration-300 font-bold shrink-0">06</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Container Stuffing & Vessel Loading</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">Containers are lined with desiccant protection and floor paper, loaded with cargo, high-security bolt sealed, and hoisted onto ocean vessels.</p>
                </div>
            </div>

            <!-- Step 07 -->
            <div class="py-6 border-b border-saltora-border/60 flex items-start gap-5 md:col-span-2 cursor-pointer group hover:bg-white transition-colors px-4 rounded-xs reveal-on-scroll reveal-scale">
                <span class="font-serif text-3xl text-saltora-terracotta/70 group-hover:text-saltora-terracotta group-hover:scale-110 transition-all duration-300 font-bold shrink-0">07</span>
                <div class="space-y-1">
                    <h3 class="font-serif text-xl sm:text-2xl text-saltora-text font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Document Presentation & Port Arrival</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed max-w-xl">Original B/L, Commercial Invoice, Packing List, Certificate of Origin, and COA are transferred. Cargo clears smoothly at your destination terminal.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- EXPORT DOCUMENTATION VAULT & PACKAGING SHOWCASE (DARK SECTION) -->
    <section class="bg-[#181513] text-white py-20 md:py-28 px-6 md:px-12 border-t border-stone-800">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <!-- Left Column: Complete Documentation Checklist (5 cols) -->
            <div class="lg:col-span-5 space-y-6 reveal-on-scroll reveal-from-left">
                <div class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">
                    COMPREHENSIVE TRADE VAULT
                </div>

                <h2 class="text-3xl sm:text-4xl font-serif text-white font-normal leading-tight">
                    Every export document handled with precision
                </h2>

                <p class="text-stone-400 text-xs sm:text-sm font-light leading-relaxed">
                    Customs clearance delays cost money. Saltora prepares, authenticates, and dispatches full export documentation packets so your cargo clears destination port authorities seamlessly.
                </p>

                <!-- Document Checklist -->
                <div class="space-y-2.5 pt-2">
                    <div class="py-2.5 border-b border-stone-800/80 flex items-center justify-between group cursor-pointer">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-file-invoice text-saltora-terracotta text-sm"></i>
                            <span class="text-xs font-medium text-stone-200 group-hover:text-amber-200 transition-colors">Commercial Invoice & Certified Packing List</span>
                        </div>
                        <span class="text-[10px] text-stone-500 uppercase font-mono">Standard</span>
                    </div>

                    <div class="py-2.5 border-b border-stone-800/80 flex items-center justify-between group cursor-pointer">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-ship text-saltora-terracotta text-sm"></i>
                            <span class="text-xs font-medium text-stone-200 group-hover:text-amber-200 transition-colors">Clean On-Board Ocean Bill of Lading (B/L)</span>
                        </div>
                        <span class="text-[10px] text-stone-500 uppercase font-mono">Ocean Carrier</span>
                    </div>

                    <div class="py-2.5 border-b border-stone-800/80 flex items-center justify-between group cursor-pointer">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-landmark text-saltora-terracotta text-sm"></i>
                            <span class="text-xs font-medium text-stone-200 group-hover:text-amber-200 transition-colors">Certificate of Origin (LCCI / Federal Chamber)</span>
                        </div>
                        <span class="text-[10px] text-stone-500 uppercase font-mono">Chamber</span>
                    </div>

                    <div class="py-2.5 border-b border-stone-800/80 flex items-center justify-between group cursor-pointer">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-flask-vial text-saltora-terracotta text-sm"></i>
                            <span class="text-xs font-medium text-stone-200 group-hover:text-amber-200 transition-colors">Batch Certificate of Analysis (COA - Lab Tested)</span>
                        </div>
                        <span class="text-[10px] text-stone-500 uppercase font-mono">PCSIR / Lab</span>
                    </div>

                    <div class="py-2.5 border-b border-stone-800/80 flex items-center justify-between group cursor-pointer">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-certificate text-saltora-terracotta text-sm"></i>
                            <span class="text-xs font-medium text-stone-200 group-hover:text-amber-200 transition-colors">Halal & Kosher Export Compliance Certificates</span>
                        </div>
                        <span class="text-[10px] text-stone-500 uppercase font-mono">Certified</span>
                    </div>

                    <div class="py-2.5 border-b border-stone-800/80 flex items-center justify-between group cursor-pointer">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-wheat-awn-circle-exclamation text-saltora-terracotta text-sm"></i>
                            <span class="text-xs font-medium text-stone-200 group-hover:text-amber-200 transition-colors">Phytosanitary & Fumigation Certificate</span>
                        </div>
                        <span class="text-[10px] text-stone-500 uppercase font-mono">On Request</span>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="/contact" class="inline-flex items-center gap-2 text-xs font-bold text-amber-200 hover:text-white uppercase tracking-wider transition-colors">
                        <span>Request Sample Export Document Dossier</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Right Column: Shipment Packaging Formats Showcase (7 cols) -->
            <div class="lg:col-span-7 space-y-6 reveal-on-scroll reveal-from-right">
                <div class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">
                    CARGO PROTECTION STANDARDS
                </div>

                <h2 class="text-3xl sm:text-4xl font-serif text-white font-normal leading-tight">
                    Engineered for maritime transit
                </h2>

                <p class="text-stone-400 text-xs sm:text-sm font-light leading-relaxed">
                    Ocean voyages require total moisture isolation and structural palletization. Every export container is equipped with desiccant poles and polyethylene barriers.
                </p>

                <!-- 4 Photo Cards (2x2 Grid) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    
                    <!-- Photo 1: 1-Ton Jumbo FIBC Big Bags -->
                    <div class="relative group rounded-sm overflow-hidden h-52 border border-stone-800 bg-stone-900 cursor-pointer">
                        <img src="/packaging-fibc.jpg" alt="1-Ton Jumbo FIBC Big Bags in Port Warehouse" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/35 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-[9px] font-bold text-saltora-terracotta uppercase tracking-wider block">Heavy Industry</span>
                            <span class="font-serif text-base font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-amber-200 inline-block">1-Ton Jumbo FIBC Big Bags</span>
                        </div>
                    </div>

                    <!-- Photo 2: 25kg Food-Grade Bags -->
                    <div class="relative group rounded-sm overflow-hidden h-52 border border-stone-800 bg-stone-900 cursor-pointer">
                        <img src="/packaging-pp-bags.jpg" alt="25kg Food-Grade Polypropylene Export Sacks" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/35 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-[9px] font-bold text-saltora-terracotta uppercase tracking-wider block">Food Manufacturing</span>
                            <span class="font-serif text-base font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-amber-200 inline-block">25kg Food-Grade PP Bags</span>
                        </div>
                    </div>

                    <!-- Photo 3: Stand-Up Pouches -->
                    <div class="relative group rounded-sm overflow-hidden h-52 border border-stone-800 bg-stone-900 cursor-pointer">
                        <img src="/packaging-pouches.jpg" alt="Retail Stand-Up Zipper Pouches" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/35 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-[9px] font-bold text-saltora-terracotta uppercase tracking-wider block">Retail Supermarket</span>
                            <span class="font-serif text-base font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-amber-200 inline-block">Stand-Up Zipper Pouches</span>
                        </div>
                    </div>

                    <!-- Photo 4: Jars & Ceramic Grinders -->
                    <div class="relative group rounded-sm overflow-hidden h-52 border border-stone-800 bg-stone-900 cursor-pointer">
                        <img src="/packaging-grinders.jpg" alt="Custom Jars & Ceramic Grinder Bottles" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/35 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-[9px] font-bold text-saltora-terracotta uppercase tracking-wider block">Gourmet Private Label</span>
                            <span class="font-serif text-base font-normal group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-amber-200 inline-block">Jars & Ceramic Grinders</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- NEW SECTION: LOGISTICS & CUSTOMS FAQ ACCORDION -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-saltora-bg border-t border-saltora-border/60" x-data="{ activeFaq: 1 }">
        <div class="max-w-4xl mx-auto space-y-12">
            
            <div class="text-center space-y-3 reveal-on-scroll reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">SHIPPING & CLEARANCE FAQ</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    Frequently Asked Logistics Questions
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    Clear answers regarding freight timelines, container stuffing, payment terms, and port customs procedures.
                </p>
            </div>

            <!-- FAQ Accordion List -->
            <div class="space-y-4">
                
                <!-- FAQ 1 -->
                <div class="bg-white border border-saltora-border rounded-sm overflow-hidden transition-all shadow-xs">
                    <button @click="activeFaq = activeFaq === 1 ? null : 1" class="w-full p-5 text-left font-serif text-lg text-saltora-text font-semibold flex items-center justify-between cursor-pointer">
                        <span>How does the standard 50% advance and 50% against B/L payment work?</span>
                        <i class="fa-solid text-saltora-terracotta text-sm transition-transform" :class="activeFaq === 1 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="activeFaq === 1" x-collapse class="px-5 pb-5 text-xs text-saltora-muted leading-relaxed font-light border-t border-stone-100 pt-3">
                        Upon contract signing, the buyer transfers a 50% deposit via Telegraphic Transfer (T/T) to initiate crushing, grading, and packaging. Once goods are loaded into ocean containers and the vessel departs Karachi/Port Qasim, the official carrier Bill of Lading (B/L) is issued. We furnish a high-resolution verified copy of the on-board B/L and customs documents. The remaining 50% balance is released against this proof, after which original negotiable documents are surrendered or telex-released.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white border border-saltora-border rounded-sm overflow-hidden transition-all shadow-xs">
                    <button @click="activeFaq = activeFaq === 2 ? null : 2" class="w-full p-5 text-left font-serif text-lg text-saltora-text font-semibold flex items-center justify-between cursor-pointer">
                        <span>What is the maximum payload capacity of a 20ft container?</span>
                        <i class="fa-solid text-saltora-terracotta text-sm transition-transform" :class="activeFaq === 2 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="activeFaq === 2" x-collapse class="px-5 pb-5 text-xs text-saltora-muted leading-relaxed font-light border-t border-stone-100 pt-3">
                        For <strong>Palletized 20ft FCL</strong>, maximum capacity is 20 standard pallets (approx. 20.0 to 24.0 Metric Tons net). For <strong>Floor Loaded (Unpalletized) 20ft FCL</strong>, cargo can be loaded up to 26.0 to 28.0 Metric Tons, subject to destination port road weight regulations. Floor loading achieves the lowest ocean freight cost per kilogram.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white border border-saltora-border rounded-sm overflow-hidden transition-all shadow-xs">
                    <button @click="activeFaq = activeFaq === 3 ? null : 3" class="w-full p-5 text-left font-serif text-lg text-saltora-text font-semibold flex items-center justify-between cursor-pointer">
                        <span>What steps are taken to prevent humidity and moisture damage during sea transit?</span>
                        <i class="fa-solid text-saltora-terracotta text-sm transition-transform" :class="activeFaq === 3 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="activeFaq === 3" x-collapse class="px-5 pb-5 text-xs text-saltora-muted leading-relaxed font-light border-t border-stone-100 pt-3">
                        Salt is naturally hygroscopic. Every 25kg export sack features an airtight polyethylene inner liner. During container stuffing, container floors are lined with moisture-barrier corrugated cardboard, and industrial calcium chloride desiccant hanging poles (Dry-Bag standards) are installed inside the container to absorb ambient maritime condensation.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white border border-saltora-border rounded-sm overflow-hidden transition-all shadow-xs">
                    <button @click="activeFaq = activeFaq === 4 ? null : 4" class="w-full p-5 text-left font-serif text-lg text-saltora-text font-semibold flex items-center justify-between cursor-pointer">
                        <span>Can you quote CIF directly to our regional seaport?</span>
                        <i class="fa-solid text-saltora-terracotta text-sm transition-transform" :class="activeFaq === 4 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="activeFaq === 4" x-collapse class="px-5 pb-5 text-xs text-saltora-muted leading-relaxed font-light border-t border-stone-100 pt-3">
                        Yes. While FOB Karachi is our standard benchmark, our logistics department regularly books direct vessel space with Maersk, MSC, Hapag-Lloyd, and CMA CGM. We can provide all-inclusive CIF pricing covering ocean freight and marine cargo insurance right to your destination port of discharge.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white border border-saltora-border rounded-sm overflow-hidden transition-all shadow-xs">
                    <button @click="activeFaq = activeFaq === 5 ? null : 5" class="w-full p-5 text-left font-serif text-lg text-saltora-text font-semibold flex items-center justify-between cursor-pointer">
                        <span>Are wood pallets compliant with ISPM-15 international phytosanitary standards?</span>
                        <i class="fa-solid text-saltora-terracotta text-sm transition-transform" :class="activeFaq === 5 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="activeFaq === 5" x-collapse class="px-5 pb-5 text-xs text-saltora-muted leading-relaxed font-light border-t border-stone-100 pt-3">
                        All wooden pallets used for international shipments are heat-treated (HT) and stamped in strict compliance with ISPM-15 international plant health standards. An official Fumigation / Phytosanitary Certificate is provided with shipping documents to ensure zero customs quarantine friction.
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- HIGH CONVERTING CLOSING CTA BANNER -->
    <section class="py-16 md:py-20 px-6 md:px-12 bg-saltora-dark text-white border-t border-saltora-dark-border">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8 text-center md:text-left">
            <div class="space-y-3 max-w-2xl">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">OCEAN FREIGHT DESK</span>
                <h3 class="text-3xl sm:text-4xl font-serif text-white font-normal leading-tight">
                    Ready to schedule your salt container shipment?
                </h3>
                <p class="text-stone-300 text-xs sm:text-sm font-light leading-relaxed">
                    Send your target destination port and volume — Saltora will calculate exact container payload, sailing schedules, and proforma freight pricing.
                </p>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-3.5 shrink-0">
                <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase transition-all shadow-lg flex items-center gap-2 rounded-xs">
                    <i class="fa-solid fa-calculator text-amber-200"></i>
                    <span>CALCULATE FREIGHT QUOTE</span>
                </a>
                <a href="https://wa.me/923180735748?text=Hello%20Saltora%20Logistics%2C%20I%20would%20like%20to%20check%20container%20shipping%20rates." target="_blank" class="bg-emerald-700 hover:bg-emerald-800 text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase transition-all shadow-lg flex items-center gap-2 rounded-xs">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    <span>WHATSAPP LOGISTICS</span>
                </a>
            </div>
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <x-footer />

</body>
</html>
