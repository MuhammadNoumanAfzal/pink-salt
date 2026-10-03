<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Comprehensive Technical & On-Page SEO -->
    <title>Certifications & Quality Standards | ISO 22000, Halal, Codex CXS 150 — SALTORA</title>
    <meta name="description" content="SALTORA's certified Himalayan pink salt quality and food safety compliance: ISO 22000:2018, Halal, Codex Alimentarius CXS 150:1985, HACCP, and third-party laboratory COA reports.">
    <meta name="keywords" content="Himalayan Salt Certifications, ISO 22000 Salt Exporter, Halal Pink Salt Pakistan, Codex CXS 150, PCSIR Lab Tested Salt, Heavy Metal Free Pink Salt, Certificate of Analysis Saltora, Pakistan Chamber of Commerce Exporter">
    <meta name="author" content="SALTORA Quality & Compliance Department">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Open Graph (Facebook / LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="SALTORA Himalayan Pink Salt">
    <meta property="og:title" content="Certifications & Quality Standards | ISO 22000, Halal, Codex CXS 150 — SALTORA">
    <meta property="og:description" content="Verified international food-safety, religious dietary, and export compliance certifications for Himalayan pink salt. Every shipment is audited and backed by laboratory COAs.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ url('/cert-hero.jpg') }}">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Certifications & Quality Standards | SALTORA Pakistan">
    <meta name="twitter:description" content="ISO 22000:2018, Halal, Codex Alimentarius CXS 150, and laboratory Certificate of Analysis (COA) compliance for global B2B pink salt exports.">
    <meta name="twitter:image" content="{{ url('/cert-hero.jpg') }}">
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/logo.png">
    <link rel="shortcut icon" type="image/png" href="/logo.png">
    
    <!-- FontAwesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Schema.org JSON-LD Structured Data for Certifications & Compliance -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebPage",
          "@id": "{{ url()->current() }}#webpage",
          "url": "{{ url()->current() }}",
          "name": "Certifications & Quality Standards | ISO 22000, Halal, Codex CXS 150 — SALTORA",
          "description": "SALTORA's certified Himalayan pink salt quality and food safety compliance: ISO 22000:2018, Halal, Codex Alimentarius CXS 150:1985, HACCP, and third-party laboratory COA reports.",
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
                "name": "Certifications & Quality",
                "item": "{{ url()->current() }}"
              }
            ]
          }
        },
        {
          "@type": "Organization",
          "@id": "{{ url('/') }}#organization",
          "name": "SALTORA Himalayan Pink Salt Exporter",
          "url": "{{ url('/') }}",
          "logo": "{{ url('/logo.png') }}",
          "knowsAbout": [
            "ISO 22000:2018 Food Safety Management System",
            "Halal Dietary Certification for Food Salt",
            "Codex Alimentarius Standard for Food Grade Salt (CXS 150-1985)",
            "Hazard Analysis Critical Control Point (HACCP)",
            "Good Manufacturing Practices (GMP)",
            "Pakistan Council of Scientific & Industrial Research (PCSIR)"
          ]
        }
      ]
    }
    </script>
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" 
      x-data="{
          mobileMenuOpen: false,
          activeDocModal: false,
          selectedCert: null,
          openDocModal(cert) {
              this.selectedCert = cert;
              this.activeDocModal = true;
          },
          closeDocModal() {
              this.activeDocModal = false;
          }
      }">

    <!-- Single Sticky Navigation Header -->
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
                <a href="/certifications" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1 cursor-pointer">CERTIFICATIONS</a>
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
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-terracotta font-bold cursor-pointer">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/blog" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">BLOG</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CONTACT</a>
            <a href="/contact" @click="mobileMenuOpen = false" class="flex items-center justify-center gap-2 w-full mt-4 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer rounded-xs shadow-md transition-colors">
                <i class="fa-solid fa-file-invoice text-amber-200 text-sm"></i>
                <span>REQUEST A QUOTE</span>
            </a>
        </div>
    </header>

    <!-- CERTIFICATIONS HERO SECTION -->
    <section class="relative bg-saltora-dark text-white py-20 md:py-28 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border">
        <!-- Backdrop Image (`/cert-hero.jpg`) -->
        <img src="/cert-hero.jpg" alt="Certified Food Safety Testing Laboratory Backdrop" class="absolute inset-0 w-full h-full object-cover opacity-80 filter brightness-105 contrast-105 pointer-events-none transition-transform duration-1000 scale-105">
        <!-- Left-to-right gradient: dark behind text on left, light & visible over image on right -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/60 to-black/20 pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto">
            <div class="space-y-6 max-w-3xl animate-hero-left">
                <!-- Category Sub-tag (High Contrast Pill) -->
                <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-black/60 backdrop-blur-md border border-amber-400/40 text-[11px] font-bold tracking-mega text-amber-300 uppercase shadow-lg">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    <span>GLOBAL AUDIT & FOOD SAFETY ACCREDITATIONS</span>
                </div>

                <!-- Headline with Drop Shadow for Maximum Legibility -->
                <h1 class="text-4xl sm:text-6xl lg:text-6.5xl font-serif text-white font-normal leading-[1.08] drop-shadow-md">
                    Recognised standards, verifiable quality
                </h1>

                <!-- Paragraph with Solid Bright Text -->
                <p class="text-stone-100 sm:text-stone-200 text-base sm:text-lg leading-relaxed font-normal max-w-2xl drop-shadow-sm">
                    SALTORA operates under strict international food safety, religious dietary, and export frameworks. Every production run is backed by independent laboratory Certificate of Analysis (COA) reports, providing global importers with absolute chemical and microbiological certainty.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#complianceHub" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 shadow-lg hover:shadow-xl flex items-center gap-2 rounded-xs">
                        <span>EXPLORE CERTIFICATIONS</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                    </a>
                    <a href="/contact" class="bg-black/50 hover:bg-black/70 border border-white/40 text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 backdrop-blur-sm flex items-center gap-2 rounded-xs shadow-md">
                        <i class="fa-solid fa-file-shield text-amber-300"></i>
                        <span>REQUEST COA & AUDIT DOSSIER</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTINUOUS MARQUEE TICKER BAR -->
    <div class="bg-saltora-terracotta text-white py-3 overflow-hidden shadow-inner border-y border-saltora-terracotta-dark">
        <div class="marquee-track flex whitespace-nowrap gap-12 text-xs font-semibold tracking-widest uppercase items-center">
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ ISO 22000:2018 FOOD SAFETY CERTIFIED</span>
                <span class="flex items-center gap-2">✦ HALAL GLOBAL EXPORT COMPLIANT</span>
                <span class="flex items-center gap-2">✦ CODEX ALIMENTARIUS CXS 150:1985 PURITY</span>
                <span class="flex items-center gap-2">✦ REGISTERED CHAMBER OF COMMERCE EXPORTER</span>
                <span class="flex items-center gap-2">✦ PCSIR INDEPENDENT LAB VERIFIED</span>
                <span class="flex items-center gap-2">✦ SGS & INTERTEK PRE-SHIPMENT AUDITED</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ ISO 22000:2018 FOOD SAFETY CERTIFIED</span>
                <span class="flex items-center gap-2">✦ HALAL GLOBAL EXPORT COMPLIANT</span>
                <span class="flex items-center gap-2">✦ CODEX ALIMENTARIUS CXS 150:1985 PURITY</span>
                <span class="flex items-center gap-2">✦ REGISTERED CHAMBER OF COMMERCE EXPORTER</span>
                <span class="flex items-center gap-2">✦ PCSIR INDEPENDENT LAB VERIFIED</span>
                <span class="flex items-center gap-2">✦ SGS & INTERTEK PRE-SHIPMENT AUDITED</span>
            </div>
        </div>
    </div>

    <!-- INTERACTIVE COMPLIANCE STANDARDS & DOCUMENT FILTER HUB -->
    <section id="complianceHub" class="py-16 md:py-24 px-6 md:px-12 bg-saltora-bg"
             x-data="{
                 activeCategory: 'all',
                 searchQuery: '',
                 
                 // Standards Database
                 standards: [
                     {
                         id: 'iso22000',
                         category: 'food-safety',
                         categoryLabel: 'Food Safety & Hygiene',
                         code: 'ISO 22000:2018',
                         title: 'Food Safety Management System (FSMS)',
                         badge: 'INTERNATIONAL STANDARD',
                         status: 'Audited & Certified',
                         issuingBody: 'International Organization for Standardization / Accredited Registrar',
                         description: 'Complete FSMS covering the entire supply chain from raw rock sorting, multi-deck rotary sieving, optical grading, to moisture-barrier packing. Assures zero biological, chemical, or physical hazards.',
                         keyMetrics: ['HACCP Integrated', 'Allergen Control Protocol', 'Traceability to Extraction Point'],
                         validity: 'Annual Third-Party Surveillance Audit'
                     },
                     {
                         id: 'halal',
                         category: 'dietary',
                         categoryLabel: 'Religious & Dietary',
                         code: 'Halal Certified',
                         title: 'Global Halal Food Compliance',
                         badge: 'DIETARY COMPLIANT',
                         status: 'Certified for Export',
                         issuingBody: 'Authorized Islamic Food Safety & Halal Certification Authority',
                         description: 'Guarantees that Saltora Himalayan Pink Salt is 100% natural, free from forbidden additives, cross-contamination, animal derivatives, or non-halal processing aids, meeting strict OIC/SMIIC export standards.',
                         keyMetrics: ['100% Pure Rock Salt', 'No Alcohol or Animal Byproducts', 'Dedicated Sanitized Packing Line'],
                         validity: 'Annual On-Site Facility Verification'
                     },
                     {
                         id: 'codex',
                         category: 'chemical',
                         categoryLabel: 'Chemical Purity & Lab',
                         code: 'Codex CXS 150:1985',
                         title: 'Standard for Food Grade Salt',
                         badge: 'GLOBAL CODEX ALIMENTARIUS',
                         status: 'Fully Compliant',
                         issuingBody: 'FAO / WHO Codex Alimentarius Commission',
                         description: 'Meets and surpasses international benchmark parameters for edible salt: NaCl content &ge; 97.0%, moisture &le; 0.5%, with heavy metal levels (Lead, Arsenic, Cadmium, Mercury) significantly below maximum residue limits.',
                         keyMetrics: ['98.8% - 99.2% Pure NaCl', 'Lead (Pb) < 0.1 mg/kg', 'Moisture < 0.20%'],
                         validity: 'Every Production Batch Verified'
                     },
                     {
                         id: 'chamber',
                         category: 'trade',
                         categoryLabel: 'Trade & Customs',
                         code: 'Chamber Registered',
                         title: 'Lahore & Federal Chamber of Commerce & Industry',
                         badge: 'OFFICIAL EXPORT REGISTRATION',
                         status: 'Active Member Exporter',
                         issuingBody: 'LCCI / Federation of Pakistan Chambers of Commerce & Industry',
                         description: 'Official Pakistani export registry credentials enabling authenticated Certificates of Origin, commercial invoices, and embassy legalization for customs clearance in Europe, the Americas, Asia, and the GCC.',
                         keyMetrics: ['Certificate of Origin Issuance', 'Commercial Invoicing Authentication', 'Federal Trade Verification'],
                         validity: 'Active Standing & Verified'
                     },
                     {
                         id: 'haccp',
                         category: 'food-safety',
                         categoryLabel: 'Food Safety & Hygiene',
                         code: 'HACCP & GMP Compliant',
                         title: 'Hazard Analysis Critical Control Point',
                         badge: 'HYGIENE & PREVENTIVE CONTROLS',
                         status: 'Implemented & Audited',
                         issuingBody: 'Independent Food Quality Assurance Body',
                         description: 'Rigorous CCP monitoring points across crushing, vibrating sieve sizing, magnetic separation (10,000 Gauss traps for ferrous particles), and final metal detector screening prior to palletization.',
                         keyMetrics: ['Critical Control Points (CCPs)', 'Magnetic Separator Grates', 'Zero Foreign Body Guarantee'],
                         validity: 'Continuous In-Line Monitoring'
                     },
                     {
                         id: 'kosher',
                         category: 'dietary',
                         categoryLabel: 'Religious & Dietary',
                         code: 'Kosher Approved',
                         title: 'Pareve Kosher Food Compliance',
                         badge: 'DIETARY RECOGNITION',
                         status: 'Kosher Pareve Compliant',
                         issuingBody: 'Recognized Rabbinical Certification Alliance',
                         description: 'Saltora natural mineral pink salt is unrefined and chemical-free, compliant with Kosher Pareve regulations for year-round culinary use in North America, Europe, and Israeli distribution networks.',
                         keyMetrics: ['Naturally Pareve', 'Zero Cross-Contact', 'Unrefined Geological Mineral'],
                         validity: 'Annual Verification'
                     },
                     {
                         id: 'pcsir',
                         category: 'chemical',
                         categoryLabel: 'Chemical Purity & Lab',
                         code: 'PCSIR Lab Verified',
                         title: 'Pakistan Council of Scientific & Industrial Research',
                         badge: 'GOVERNMENT LABORATORY TESTING',
                         status: 'Batch-by-Batch Testing',
                         issuingBody: 'Ministry of Science & Technology, Government of Pakistan',
                         description: 'Independent state laboratory quantitative ICP-MS spectrometry verifying 84+ essential trace elements (Potassium, Magnesium, Calcium, Iron) and confirming the total absence of harmful synthetic additives.',
                         keyMetrics: ['Trace Mineral Spectrum', 'Atomic Absorption Testing', 'Formal State COA Issued'],
                         validity: 'Issued Per Production Lot'
                     },
                     {
                         id: 'sgs',
                         category: 'trade',
                         categoryLabel: 'Trade & Customs',
                         code: 'SGS / Intertek Supported',
                         title: 'Pre-Shipment Inspection (PSI) Compliance',
                         badge: 'THIRD-PARTY INSPECTION',
                         status: 'Buyer-Nominated Ready',
                         issuingBody: 'SGS / Intertek / Bureau Veritas / Cotecna',
                         description: 'Our Karachi port and manufacturing loading facilities fully accommodate buyer-appointed international inspection bodies for container stuffing supervision, weight verification, and lot sampling.',
                         keyMetrics: ['Draft Survey & Tare Weights', 'Container Seal Verification', 'Independent Composite Sampling'],
                         validity: 'Available On-Demand Per FCL'
                     }
                 ],

                 // Filter computation
                 get filteredStandards() {
                     return this.standards.filter(s => {
                         // Category filter
                         if (this.activeCategory !== 'all' && s.category !== this.activeCategory) {
                             return false;
                         }
                         // Text search
                         if (this.searchQuery.trim() !== '') {
                             const q = this.searchQuery.trim().toLowerCase();
                             const haystack = [s.code, s.title, s.categoryLabel, s.description, s.issuingBody, ...s.keyMetrics].join(' ').toLowerCase();
                             if (!haystack.includes(q)) return false;
                         }
                         return true;
                     });
                 }
             }">

        <div class="max-w-7xl mx-auto space-y-10">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-3 reveal-on-scroll reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">COMPLIANCE DIRECTORY</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    International Quality Frameworks
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    Browse our full suite of food safety certifications, dietary credentials, and laboratory testing protocols. Filter by regulatory domain or search by specific standard.
                </p>
            </div>

            <!-- INTERACTIVE CATEGORY TABS & SEARCH BAR -->
            <div class="bg-white p-4 sm:p-5 border border-saltora-border rounded-sm shadow-xs flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">
                <!-- Category Filter Tabs -->
                <div class="flex items-center gap-1.5 overflow-x-auto no-scrollbar pb-1 md:pb-0">
                    <button @click="activeCategory = 'all'"
                            :class="activeCategory === 'all' ? 'bg-saltora-terracotta text-white font-bold shadow-xs' : 'bg-stone-50 hover:bg-stone-100 text-stone-700 border border-stone-200'"
                            class="px-3.5 py-2 rounded-xs text-xs uppercase tracking-wider transition-all cursor-pointer whitespace-nowrap">
                        All Standards (8)
                    </button>
                    <button @click="activeCategory = 'food-safety'"
                            :class="activeCategory === 'food-safety' ? 'bg-saltora-terracotta text-white font-bold shadow-xs' : 'bg-stone-50 hover:bg-stone-100 text-stone-700 border border-stone-200'"
                            class="px-3.5 py-2 rounded-xs text-xs uppercase tracking-wider transition-all cursor-pointer whitespace-nowrap">
                        Food Safety & Hygiene
                    </button>
                    <button @click="activeCategory = 'dietary'"
                            :class="activeCategory === 'dietary' ? 'bg-saltora-terracotta text-white font-bold shadow-xs' : 'bg-stone-50 hover:bg-stone-100 text-stone-700 border border-stone-200'"
                            class="px-3.5 py-2 rounded-xs text-xs uppercase tracking-wider transition-all cursor-pointer whitespace-nowrap">
                        Religious & Dietary
                    </button>
                    <button @click="activeCategory = 'chemical'"
                            :class="activeCategory === 'chemical' ? 'bg-saltora-terracotta text-white font-bold shadow-xs' : 'bg-stone-50 hover:bg-stone-100 text-stone-700 border border-stone-200'"
                            class="px-3.5 py-2 rounded-xs text-xs uppercase tracking-wider transition-all cursor-pointer whitespace-nowrap">
                        Chemical & Lab COA
                    </button>
                    <button @click="activeCategory = 'trade'"
                            :class="activeCategory === 'trade' ? 'bg-saltora-terracotta text-white font-bold shadow-xs' : 'bg-stone-50 hover:bg-stone-100 text-stone-700 border border-stone-200'"
                            class="px-3.5 py-2 rounded-xs text-xs uppercase tracking-wider transition-all cursor-pointer whitespace-nowrap">
                        Customs & Trade
                    </button>
                </div>

                <!-- Search Input -->
                <div class="relative min-w-[240px]">
                    <input type="text" x-model="searchQuery" placeholder="Search standard, COA, ISO..." class="w-full bg-[#FAF7F2] border border-saltora-border px-3.5 py-2 pl-9 pr-7 rounded-xs text-xs focus:outline-none focus:border-saltora-terracotta">
                    <svg class="w-4 h-4 text-stone-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <button x-show="searchQuery" @click="searchQuery = ''" class="absolute right-2.5 top-1/2 -translate-y-1/2 text-stone-400 hover:text-stone-700 text-xs cursor-pointer">&times;</button>
                </div>
            </div>

            <!-- STANDARDS CARDS GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                <template x-for="item in filteredStandards" :key="item.id">
                    <div class="bg-white border border-saltora-border/80 rounded-xl p-6 sm:p-7 flex flex-col justify-between transition-all duration-300 hover:shadow-xl hover:border-saltora-terracotta/50 group relative overflow-hidden">
                        <!-- Top Accent Line -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-saltora-terracotta via-amber-600 to-saltora-terracotta scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

                        <div class="space-y-4">
                            <!-- Card Header Badges -->
                            <div class="flex items-center justify-between gap-2">
                                <span class="text-[9px] font-bold tracking-widest text-saltora-terracotta uppercase bg-saltora-blush/80 px-2.5 py-1 rounded-sm" x-text="item.categoryLabel"></span>
                                <span class="text-[10px] font-bold text-emerald-700 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-full flex items-center gap-1">
                                    <i class="fa-solid fa-circle-check text-[9px]"></i>
                                    <span x-text="item.status"></span>
                                </span>
                            </div>

                            <!-- Standard Code & Title -->
                            <div>
                                <span class="text-[11px] font-bold text-stone-400 uppercase tracking-wider block" x-text="item.badge"></span>
                                <h3 class="font-serif text-2xl text-saltora-text font-bold group-hover:text-saltora-terracotta transition-colors duration-200 mt-0.5" x-text="item.code"></h3>
                                <h4 class="text-xs font-semibold text-stone-700" x-text="item.title"></h4>
                            </div>

                            <!-- Description -->
                            <p class="text-xs text-saltora-muted leading-relaxed font-light" x-text="item.description"></p>

                            <!-- Key Metrics Chips -->
                            <div class="flex flex-wrap gap-1.5 pt-1">
                                <template x-for="metric in item.keyMetrics" :key="metric">
                                    <span class="text-[10px] font-medium bg-stone-100 text-stone-700 px-2.5 py-1 rounded-xs border border-stone-200 flex items-center gap-1">
                                        <i class="fa-solid fa-check text-[8px] text-emerald-600"></i>
                                        <span x-text="metric"></span>
                                    </span>
                                </template>
                            </div>
                        </div>

                        <!-- Card Footer -->
                        <div class="pt-5 border-t border-saltora-border/60 mt-5 flex items-center justify-between text-xs">
                            <button @click="openDocModal(item)" class="text-saltora-terracotta font-bold hover:underline flex items-center gap-1.5 cursor-pointer">
                                <span>View Audit Scope & Details</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </button>
                            <a href="/contact" class="text-stone-500 hover:text-saltora-text text-[11px] font-semibold">
                                Request Copy &rarr;
                            </a>
                        </div>
                    </div>
                </template>
            </div>

            <!-- EMPTY RESULTS STATE -->
            <div x-show="filteredStandards.length === 0" x-cloak class="bg-white p-12 text-center rounded-sm border border-saltora-border space-y-4">
                <i class="fa-solid fa-certificate text-3xl text-saltora-terracotta"></i>
                <h4 class="font-serif text-2xl text-saltora-text">No Standards Found</h4>
                <p class="text-xs text-saltora-muted max-w-md mx-auto">No compliance document matched your search query. Try broadening your terms or clear the filter.</p>
                <button @click="activeCategory = 'all'; searchQuery = ''" class="bg-saltora-terracotta text-white px-6 py-2 text-xs font-bold uppercase rounded-xs cursor-pointer">Reset Filters</button>
            </div>

        </div>
    </section>

    <!-- NEW SECTION: 5-STAGE MINE-TO-PORT QUALITY ASSURANCE PROTOCOL -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-white border-t border-saltora-border/70">
        <div class="max-w-7xl mx-auto space-y-16">
            
            <div class="text-center max-w-3xl mx-auto space-y-3 reveal-on-scroll reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">TRACEABILITY & PROCESS CONTROL</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    5-Stage Quality Assurance Protocol
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    From geological extraction deep inside the Khewra Salt Range to maritime container stuffing, every batch follows an uncompromising 5-step quality audit.
                </p>
            </div>

            <!-- 5 Protocol Steps -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6 relative">
                
                <!-- Step 1 -->
                <div class="bg-saltora-bg p-6 rounded-sm border border-saltora-border space-y-3 reveal-on-scroll reveal-from-bottom stagger-1">
                    <div class="w-10 h-10 rounded-full bg-saltora-terracotta text-white flex items-center justify-center font-bold text-sm shadow-sm">
                        01
                    </div>
                    <h3 class="font-serif text-lg font-bold text-saltora-text">Geological Seam Selection</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Hand-selected raw boulders from deepest Khewra geological strata, verified for natural mineral richness and zero surface run-off contamination.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="bg-saltora-bg p-6 rounded-sm border border-saltora-border space-y-3 reveal-on-scroll reveal-from-bottom stagger-2">
                    <div class="w-10 h-10 rounded-full bg-saltora-terracotta text-white flex items-center justify-center font-bold text-sm shadow-sm">
                        02
                    </div>
                    <h3 class="font-serif text-lg font-bold text-saltora-text">Optical Sorting & Washing</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Automated high-resolution optical cameras detect and reject dark clay impurities, followed by closed-circuit demineralized brine wash and hot-air drying.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="bg-saltora-bg p-6 rounded-sm border border-saltora-border space-y-3 reveal-on-scroll reveal-from-bottom stagger-3">
                    <div class="w-10 h-10 rounded-full bg-saltora-terracotta text-white flex items-center justify-center font-bold text-sm shadow-sm">
                        03
                    </div>
                    <h3 class="font-serif text-lg font-bold text-saltora-text">Multi-Deck Sieve Calibration</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Rotary vibrating stainless steel screens classify grains into calibrated particle sizes (0.2mm flour up to 8mm crystal rock) with tight tolerance.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="bg-saltora-bg p-6 rounded-sm border border-saltora-border space-y-3 reveal-on-scroll reveal-from-bottom stagger-4">
                    <div class="w-10 h-10 rounded-full bg-saltora-terracotta text-white flex items-center justify-center font-bold text-sm shadow-sm">
                        04
                    </div>
                    <h3 class="font-serif text-lg font-bold text-saltora-text">ICP-MS Spectrometry & COA</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Every batch undergoes atomic absorption spectroscopy to verify &ge; 98.5% NaCl purity and ensure toxic heavy metals remain strictly non-detectable.
                    </p>
                </div>

                <!-- Step 5 -->
                <div class="bg-saltora-bg p-6 rounded-sm border border-saltora-border space-y-3 reveal-on-scroll reveal-from-bottom stagger-5">
                    <div class="w-10 h-10 rounded-full bg-saltora-terracotta text-white flex items-center justify-center font-bold text-sm shadow-sm">
                        05
                    </div>
                    <h3 class="font-serif text-lg font-bold text-saltora-text">Magnetic Trap & Tamper Seal</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Salt passes through 10,000 Gauss rare-earth magnetic grates and inline metal detection before hermetic sealing in food-grade moisture barrier packaging.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- NEW SECTION: CHEMICAL PURITY MATRIX (CODEX VS SALTORA ACTUAL LAB RESULTS) -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-saltora-bg border-t border-saltora-border/60">
        <div class="max-w-7xl mx-auto space-y-12">
            
            <div class="text-center max-w-3xl mx-auto space-y-3 reveal-on-scroll reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">ANALYTICAL CHEMISTRY MATRIX</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    Codex CXS 150 vs SALTORA Verified Lab Values
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    Comparison of international Codex Alimentarius regulatory thresholds against verified composite laboratory results of SALTORA export food-grade pink salt.
                </p>
            </div>

            <!-- Chemical Matrix Table -->
            <div class="overflow-x-auto border border-saltora-border rounded-sm shadow-xs bg-white">
                <table class="w-full text-left border-collapse text-xs">
                    <thead>
                        <tr class="bg-[#FAF7F2] text-saltora-text uppercase tracking-wider text-[11px] border-b border-saltora-border font-bold">
                            <th class="p-4 sm:p-5">Chemical Parameter</th>
                            <th class="p-4 sm:p-5">Codex CXS 150:1985 Limit</th>
                            <th class="p-4 sm:p-5">SALTORA Typical Analysis</th>
                            <th class="p-4 sm:p-5">Testing Methodology</th>
                            <th class="p-4 sm:p-5">Compliance Verdict</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-saltora-border/60 text-stone-700">
                        <tr class="hover:bg-saltora-blush/30 transition-colors">
                            <td class="p-4 sm:p-5 font-bold text-saltora-text">Sodium Chloride (NaCl)</td>
                            <td class="p-4 sm:p-5 font-semibold text-stone-600">&ge; 97.0% (Dry Basis)</td>
                            <td class="p-4 sm:p-5 font-bold text-emerald-800">98.8% - 99.2%</td>
                            <td class="p-4 sm:p-5">Potentiometric Argentometric Titration (ISO 2481)</td>
                            <td class="p-4 sm:p-5"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Surpasses Standard</span></td>
                        </tr>
                        <tr class="hover:bg-saltora-blush/30 transition-colors">
                            <td class="p-4 sm:p-5 font-bold text-saltora-text">Moisture Content (H₂O)</td>
                            <td class="p-4 sm:p-5 font-semibold text-stone-600">&le; 0.50%</td>
                            <td class="p-4 sm:p-5 font-bold text-emerald-800">0.08% - 0.18%</td>
                            <td class="p-4 sm:p-5">Gravimetric Oven Drying at 110°C (ISO 2483)</td>
                            <td class="p-4 sm:p-5"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Ultra Dry / Stable</span></td>
                        </tr>
                        <tr class="hover:bg-saltora-blush/30 transition-colors">
                            <td class="p-4 sm:p-5 font-bold text-saltora-text">Water Insoluble Matter</td>
                            <td class="p-4 sm:p-5 font-semibold text-stone-600">&le; 0.50%</td>
                            <td class="p-4 sm:p-5 font-bold text-emerald-800">0.10% - 0.15%</td>
                            <td class="p-4 sm:p-5">Membrane Gravimetric Filtration (ISO 2479)</td>
                            <td class="p-4 sm:p-5"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Pass</span></td>
                        </tr>
                        <tr class="hover:bg-saltora-blush/30 transition-colors">
                            <td class="p-4 sm:p-5 font-bold text-saltora-text">Lead (Pb)</td>
                            <td class="p-4 sm:p-5 font-semibold text-stone-600">Max 2.00 mg/kg</td>
                            <td class="p-4 sm:p-5 font-bold text-emerald-800">&lt; 0.10 mg/kg (Safe)</td>
                            <td class="p-4 sm:p-5">ICP-MS Spectrometry (AOAC 999.11)</td>
                            <td class="p-4 sm:p-5"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">95% Below Limit</span></td>
                        </tr>
                        <tr class="hover:bg-saltora-blush/30 transition-colors">
                            <td class="p-4 sm:p-5 font-bold text-saltora-text">Arsenic (As)</td>
                            <td class="p-4 sm:p-5 font-semibold text-stone-600">Max 0.50 mg/kg</td>
                            <td class="p-4 sm:p-5 font-bold text-emerald-800">&lt; 0.05 mg/kg (Safe)</td>
                            <td class="p-4 sm:p-5">Hydride Generation ICP-MS (AOAC 986.15)</td>
                            <td class="p-4 sm:p-5"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">90% Below Limit</span></td>
                        </tr>
                        <tr class="hover:bg-saltora-blush/30 transition-colors">
                            <td class="p-4 sm:p-5 font-bold text-saltora-text">Cadmium (Cd)</td>
                            <td class="p-4 sm:p-5 font-semibold text-stone-600">Max 0.50 mg/kg</td>
                            <td class="p-4 sm:p-5 font-bold text-emerald-800">&lt; 0.02 mg/kg (Safe)</td>
                            <td class="p-4 sm:p-5">Graphite Furnace AAS (ISO 17378)</td>
                            <td class="p-4 sm:p-5"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Non-Detectable</span></td>
                        </tr>
                        <tr class="hover:bg-saltora-blush/30 transition-colors">
                            <td class="p-4 sm:p-5 font-bold text-saltora-text">Mercury (Hg)</td>
                            <td class="p-4 sm:p-5 font-semibold text-stone-600">Max 0.10 mg/kg</td>
                            <td class="p-4 sm:p-5 font-bold text-emerald-800">&lt; 0.01 mg/kg (Safe)</td>
                            <td class="p-4 sm:p-5">Cold Vapor Atomic Absorption (AOAC 971.21)</td>
                            <td class="p-4 sm:p-5"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Non-Detectable</span></td>
                        </tr>
                        <tr class="hover:bg-saltora-blush/30 transition-colors">
                            <td class="p-4 sm:p-5 font-bold text-saltora-text">Essential Trace Elements</td>
                            <td class="p-4 sm:p-5 font-semibold text-stone-600">Natural Rock Origin</td>
                            <td class="p-4 sm:p-5 font-bold text-saltora-terracotta">Calcium (Ca), Magnesium (Mg), Potassium (K), Iron (Fe)</td>
                            <td class="p-4 sm:p-5">Multi-element ICP-OES (EPA 6010D)</td>
                            <td class="p-4 sm:p-5"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800">84+ Bioactive Minerals</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Callout Note -->
            <div class="bg-[#FAF7F2] p-6 rounded-sm border border-saltora-border flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-file-circle-check text-2xl text-saltora-terracotta"></i>
                    <p class="text-xs text-saltora-muted leading-relaxed font-light">
                        <strong class="text-saltora-text font-bold">Official Batch COA:</strong> We issue a container-specific analytical report certified by PCSIR or certified independent labs with every commercial maritime export invoice.
                    </p>
                </div>
                <a href="/contact" class="shrink-0 text-xs font-bold text-saltora-terracotta hover:text-saltora-terracotta-dark uppercase tracking-wider flex items-center gap-1.5">
                    <span>REQUEST RECENT LAB REPORT</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- NEW SECTION: QUALITY ASSURANCE FACILITIES GALLERY -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-white border-t border-saltora-border/60">
        <div class="max-w-7xl mx-auto space-y-12">
            
            <div class="space-y-3 max-w-3xl reveal-on-scroll reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">TESTING INFRASTRUCTURE</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    Precision Laboratory Testing & Clean-Zone Packaging
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    Behind every ton of export salt is rigorous laboratory validation and sanitized clean-zone packaging machinery.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Facility 1: Laboratory Testing -->
                <div class="space-y-4 bg-saltora-bg p-6 rounded-sm border border-saltora-border hover:shadow-lg transition-all group">
                    <div class="aspect-16/10 rounded-sm overflow-hidden border border-saltora-border bg-stone-100">
                        <img src="/cert-lab.jpg" alt="Chemical Purity Titration Testing" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                    </div>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-saltora-terracotta">ISO 17025 ACCREDITED ANALYTICS</span>
                    <h3 class="font-serif text-2xl text-saltora-text font-normal">Chemical Composition & Titration Lab</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Food science specialists verify batch-specific purity, moisture levels, and trace mineral distribution using atomic absorption titration equipment prior to bagging.
                    </p>
                </div>

                <!-- Facility 2: Line Inspection -->
                <div class="space-y-4 bg-saltora-bg p-6 rounded-sm border border-saltora-border hover:shadow-lg transition-all group">
                    <div class="aspect-16/10 rounded-sm overflow-hidden border border-saltora-border bg-stone-100">
                        <img src="/cert-audit.jpg" alt="Quality Control Line Auditor" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                    </div>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-saltora-terracotta">CLEAN ZONE PACKAGING</span>
                    <h3 class="font-serif text-2xl text-saltora-text font-normal">ISO 22000 Certified Line Audits</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Automated form-fill-seal packaging occurs inside sanitized clean zones with continuous metal detector screenings, magnetic filtration, and weight tare checks.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- NEW SECTION: THIRD-PARTY INSPECTION PARTNERS -->
    <section class="py-16 md:py-20 px-6 md:px-12 bg-saltora-bg border-t border-saltora-border/60">
        <div class="max-w-6xl mx-auto space-y-8 text-center">
            
            <div class="space-y-2">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">INDEPENDENT VERIFICATION</span>
                <h3 class="font-serif text-2xl sm:text-3xl text-saltora-text font-normal">
                    Third-Party Pre-Shipment Inspection Supported
                </h3>
                <p class="text-xs text-saltora-muted font-light max-w-2xl mx-auto">
                    We welcome buyer-appointed international inspection agencies to conduct container stuffing supervision, draft surveys, composite sampling, and sealed container dispatch.
                </p>
            </div>

            <!-- Inspection Body Badges -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                <div class="bg-white p-5 rounded-sm border border-saltora-border shadow-xs space-y-1">
                    <div class="font-serif text-xl font-bold text-saltora-text">SGS</div>
                    <span class="text-[10px] text-stone-500 uppercase font-semibold">Pre-Shipment Inspection</span>
                </div>
                <div class="bg-white p-5 rounded-sm border border-saltora-border shadow-xs space-y-1">
                    <div class="font-serif text-xl font-bold text-saltora-text">Intertek</div>
                    <span class="text-[10px] text-stone-500 uppercase font-semibold">Quality & Safety Audit</span>
                </div>
                <div class="bg-white p-5 rounded-sm border border-saltora-border shadow-xs space-y-1">
                    <div class="font-serif text-xl font-bold text-saltora-text">Bureau Veritas</div>
                    <span class="text-[10px] text-stone-500 uppercase font-semibold">Conformity Assessment</span>
                </div>
                <div class="bg-white p-5 rounded-sm border border-saltora-border shadow-xs space-y-1">
                    <div class="font-serif text-xl font-bold text-saltora-text">PCSIR Labs</div>
                    <span class="text-[10px] text-stone-500 uppercase font-semibold">State Chemical COA</span>
                </div>
            </div>

        </div>
    </section>

    <!-- NEW SECTION: COMPLIANCE & VERIFICATION FAQ ACCORDION -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-white border-t border-saltora-border/60" x-data="{ activeFaq: 1 }">
        <div class="max-w-4xl mx-auto space-y-12">
            
            <div class="text-center space-y-3 reveal-on-scroll reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">AUDIT & CERTIFICATION FAQ</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    Frequently Asked Quality Questions
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    Everything you need to know about our audit standards, laboratory COAs, and international customs clearance documentation.
                </p>
            </div>

            <!-- FAQ Accordion List -->
            <div class="space-y-4">
                
                <!-- FAQ 1 -->
                <div class="bg-saltora-bg border border-saltora-border rounded-sm overflow-hidden transition-all shadow-xs">
                    <button @click="activeFaq = activeFaq === 1 ? null : 1" class="w-full p-5 text-left font-serif text-lg text-saltora-text font-semibold flex items-center justify-between cursor-pointer">
                        <span>How can international buyers verify the authenticity of Saltora certificates?</span>
                        <i class="fa-solid text-saltora-terracotta text-sm transition-transform" :class="activeFaq === 1 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="activeFaq === 1" x-collapse class="px-5 pb-5 text-xs text-saltora-muted leading-relaxed font-light border-t border-stone-200 pt-3">
                        Our ISO 22000 registration number, Halal certification registry, and Lahore Chamber of Commerce export credentials are all verifiable via their respective issuing registries. We provide full high-resolution certified copies with QR codes and registrar registration numbers upon request.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-saltora-bg border border-saltora-border rounded-sm overflow-hidden transition-all shadow-xs">
                    <button @click="activeFaq = activeFaq === 2 ? null : 2" class="w-full p-5 text-left font-serif text-lg text-saltora-text font-semibold flex items-center justify-between cursor-pointer">
                        <span>Is a batch-specific Certificate of Analysis (COA) included with our container?</span>
                        <i class="fa-solid text-saltora-terracotta text-sm transition-transform" :class="activeFaq === 2 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="activeFaq === 2" x-collapse class="px-5 pb-5 text-xs text-saltora-muted leading-relaxed font-light border-t border-stone-200 pt-3">
                        Yes. Every maritime shipment is accompanied by a batch-specific laboratory analysis report covering exact Sodium Chloride (NaCl) percentage, moisture content, grain size distribution, water-insoluble matter, and heavy metals screening conducted by certified testing laboratories.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-saltora-bg border border-saltora-border rounded-sm overflow-hidden transition-all shadow-xs">
                    <button @click="activeFaq = activeFaq === 3 ? null : 3" class="w-full p-5 text-left font-serif text-lg text-saltora-text font-semibold flex items-center justify-between cursor-pointer">
                        <span>Is Himalayan Pink Salt free from microplastics and industrial sea pollution?</span>
                        <i class="fa-solid text-saltora-terracotta text-sm transition-transform" :class="activeFaq === 3 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="activeFaq === 3" x-collapse class="px-5 pb-5 text-xs text-saltora-muted leading-relaxed font-light border-t border-stone-200 pt-3">
                        Unlike modern sea salt which can be contaminated by ocean plastics, petroleum hydrocarbons, and maritime pollutants, Himalayan Pink Salt was formed over 250 million years ago from pristine ancient seabed deposits protected deep inside the Salt Range mountains. It is 100% naturally free of microplastics.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-saltora-bg border border-saltora-border rounded-sm overflow-hidden transition-all shadow-xs">
                    <button @click="activeFaq = activeFaq === 4 ? null : 4" class="w-full p-5 text-left font-serif text-lg text-saltora-text font-semibold flex items-center justify-between cursor-pointer">
                        <span>Can you provide custom third-party inspection (e.g. SGS / Intertek) at loading?</span>
                        <i class="fa-solid text-saltora-terracotta text-sm transition-transform" :class="activeFaq === 4 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="activeFaq === 4" x-collapse class="px-5 pb-5 text-xs text-saltora-muted leading-relaxed font-light border-t border-stone-200 pt-3">
                        Yes. Buyers are welcome to appoint SGS, Intertek, or Bureau Veritas inspectors to oversee pre-shipment sampling, laboratory testing, and container stuffing at our loading docks. Inspection fees can be included directly in the proforma invoice or handled through the buyer's account.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-saltora-bg border border-saltora-border rounded-sm overflow-hidden transition-all shadow-xs">
                    <button @click="activeFaq = activeFaq === 5 ? null : 5" class="w-full p-5 text-left font-serif text-lg text-saltora-text font-semibold flex items-center justify-between cursor-pointer">
                        <span>What phytosanitary and export clearance documents are provided?</span>
                        <i class="fa-solid text-saltora-terracotta text-sm transition-transform" :class="activeFaq === 5 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="activeFaq === 5" x-collapse class="px-5 pb-5 text-xs text-saltora-muted leading-relaxed font-light border-t border-stone-200 pt-3">
                        We provide a complete export documentation suite: Commercial Invoice, Packing List, Certificate of Origin (LCCI), Bill of Lading (B/L), Halal Certificate, Laboratory COA, and Phytosanitary / Fumigation Certificates where required by the destination port's agricultural authority.
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- HIGH CONVERTING CLOSING CTA BANNER -->
    <section class="py-16 md:py-20 px-6 md:px-12 bg-saltora-dark text-white border-t border-saltora-dark-border">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8 text-center md:text-left">
            <div class="space-y-3 max-w-2xl">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">TECHNICAL COMPLIANCE DESK</span>
                <h3 class="text-3xl sm:text-4xl font-serif text-white font-normal leading-tight">
                    Need a certified audit dossier or custom COA?
                </h3>
                <p class="text-stone-300 text-xs sm:text-sm font-light leading-relaxed">
                    Contact our compliance team to receive high-resolution certified copies, laboratory analyses, and proforma documentation for import tenders.
                </p>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-3.5 shrink-0">
                <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase transition-all shadow-lg flex items-center gap-2 rounded-xs">
                    <i class="fa-solid fa-file-contract text-amber-200"></i>
                    <span>REQUEST COMPLIANCE DOSSIER</span>
                </a>
                <a href="https://wa.me/923180735748?text=Hello%20Saltora%2C%20I%20would%20like%20to%20request%20your%20COA%20and%20Certificates%20Dossier." target="_blank" class="bg-emerald-700 hover:bg-emerald-800 text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase transition-all shadow-lg flex items-center gap-2 rounded-xs">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    <span>WHATSAPP DESK</span>
                </a>
            </div>
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <x-footer />

    <!-- INTERACTIVE AUDIT SCOPE DETAIL MODAL -->
    <div x-show="activeDocModal" x-cloak class="fixed inset-0 z-50 overflow-y-auto" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Backdrop -->
            <div x-show="activeDocModal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/80 backdrop-blur-xs transition-opacity" @click="closeDocModal()"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <!-- Modal Content -->
            <div x-show="activeDocModal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block align-bottom bg-saltora-bg rounded-sm text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full border border-saltora-border p-6 md:p-8 relative">
                
                <!-- Close Button -->
                <button @click="closeDocModal()" class="absolute top-4 right-4 text-saltora-muted hover:text-saltora-text p-2 cursor-pointer z-10" aria-label="Close Modal">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <template x-if="selectedCert">
                    <div class="space-y-5">
                        <div class="flex items-center justify-between border-b border-stone-200 pb-3">
                            <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase" x-text="selectedCert.categoryLabel"></span>
                            <span class="text-xs font-bold text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-full" x-text="selectedCert.status"></span>
                        </div>

                        <div>
                            <span class="text-[10px] font-bold text-stone-400 uppercase tracking-wider block" x-text="selectedCert.badge"></span>
                            <h3 class="font-serif text-2xl sm:text-3xl text-saltora-text font-bold" x-text="selectedCert.code"></h3>
                            <h4 class="text-sm font-semibold text-stone-700 mt-1" x-text="selectedCert.title"></h4>
                        </div>

                        <div class="bg-white p-4 rounded-xs border border-saltora-border space-y-2 text-xs">
                            <div class="flex justify-between border-b border-stone-100 pb-1.5">
                                <span class="text-stone-500">Issuing Body:</span>
                                <span class="font-semibold text-stone-800 text-right" x-text="selectedCert.issuingBody"></span>
                            </div>
                            <div class="flex justify-between border-b border-stone-100 pb-1.5">
                                <span class="text-stone-500">Audit Protocol:</span>
                                <span class="font-semibold text-emerald-700 text-right" x-text="selectedCert.validity"></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-stone-500">Traceability:</span>
                                <span class="font-semibold text-stone-800 text-right">Batch Serial Coded</span>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[11px] font-bold text-stone-700 uppercase tracking-wider block">Scope of Accreditation</label>
                            <p class="text-xs text-saltora-muted leading-relaxed font-light" x-text="selectedCert.description"></p>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[11px] font-bold text-stone-700 uppercase tracking-wider block">Verified Key Benchmarks</label>
                            <div class="flex flex-wrap gap-1.5">
                                <template x-for="m in selectedCert.keyMetrics" :key="m">
                                    <span class="text-[10px] font-medium bg-saltora-blush/70 text-stone-800 px-2.5 py-1 rounded-xs border border-saltora-terracotta/20 flex items-center gap-1">
                                        <i class="fa-solid fa-check text-[8px] text-saltora-terracotta"></i>
                                        <span x-text="m"></span>
                                    </span>
                                </template>
                            </div>
                        </div>

                        <div class="pt-3 border-t border-stone-200 flex flex-col gap-2">
                            <a :href="'/contact?cert=' + encodeURIComponent(selectedCert.code) + '#contactForm'" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-center text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center justify-center gap-2 cursor-pointer">
                                <i class="fa-solid fa-file-shield text-amber-200 text-xs"></i>
                                <span>REQUEST CERTIFIED COPY FOR IMPORT</span>
                            </a>
                            <a :href="'https://wa.me/923180735748?text=' + encodeURIComponent('Hi Saltora, I need documentation details for ' + selectedCert.code)" target="_blank" class="w-full border border-emerald-600/40 hover:border-emerald-600 text-emerald-800 py-2.5 text-center text-xs font-bold tracking-wider uppercase transition-colors flex items-center justify-center gap-2 cursor-pointer">
                                <i class="fa-brands fa-whatsapp text-emerald-600 text-sm"></i>
                                <span>INQUIRE VIA WHATSAPP</span>
                            </a>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

</body>
</html>
