<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Packaging Options & Formats | SALTORA Himalayan Pink Salt</title>
    <meta name="description" content="Explore SALTORA's 6 certified export packaging lines for Himalayan pink salt: Stand-Up Zip Pouches, PET Jars, Glass Jars, Ceramic Grinder Bottles, Shaker Bottles, and Heavy-Duty Food-Grade PP Bags (2kg to 25kg).">
    <link rel="canonical" href="{{ url('/packing') }}">

    <!-- Google Fonts: Inter & Playfair Display -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Font Awesome 6 Pro / Free CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Vite Assets (Tailwind CSS & Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Open Graph & Twitter Cards -->
    <meta property="og:title" content="Export Packaging Options & Formats | SALTORA Pakistan">
    <meta property="og:description" content="Certified B2B Himalayan pink salt packaging: Zip Pouches, PET Jars, Glass Jars, Grinder Bottles, Shakers, and 2kg-25kg Food-Grade PP Bags.">
    <meta property="og:image" content="{{ asset('/images/packaging/packaging-hero-overview.jpg') }}">
    <meta property="og:url" content="{{ url('/packing') }}">
    <meta property="og:type" content="website">

    <!-- Schema.org JSON-LD Breadcrumb & Product Collection -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "CollectionPage",
          "@id": "{{ url('/packing') }}#webpage",
          "url": "{{ url('/packing') }}",
          "name": "Himalayan Pink Salt Export Packaging Formats | SALTORA",
          "description": "Comprehensive B2B catalog of retail and bulk packaging options for Himalayan pink salt.",
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
                "name": "Packaging",
                "item": "{{ url('/packing') }}"
              }
            ]
          }
        }
      ]
    }
    </script>
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white"
      x-data="{
          mobileMenuOpen: false,
          activeTab: 'all',
          selectedModalPack: null,
          modalOpen: false,
          openModal(pack) {
              this.selectedModalPack = pack;
              this.modalOpen = true;
          },
          closeModal() {
              this.modalOpen = false;
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
                <a href="/packing" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1 cursor-pointer whitespace-nowrap">PACKING</a>
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
            <a @click="mobileMenuOpen = false" href="/packing" class="block py-2 text-saltora-terracotta font-bold cursor-pointer">PACKING</a>
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

    <!-- 1. HERO SECTION -->
    <section class="relative bg-saltora-dark text-white py-20 md:py-28 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border">
        <!-- Master Lineup Overview Backdrop -->
        <img src="/packaging-pouches.jpg" alt="SALTORA Export Himalayan Pink Salt Packaging Lineup" class="absolute inset-0 w-full h-full object-cover opacity-30 filter brightness-105 contrast-115 pointer-events-none scale-105">
        <div class="absolute inset-0 bg-gradient-to-r from-black/95 via-black/85 to-black/60 pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-7 space-y-6">
                <!-- Tag -->
                <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-black/60 backdrop-blur-md border border-amber-400/40 text-[11px] font-bold tracking-mega text-amber-300 uppercase shadow-lg">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    <span>CERTIFIED EXPORT PACKING · PRIVATE LABEL & OEM</span>
                </div>

                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-serif text-white font-normal leading-tight">
                    Precision Packaging for <br><span class="italic text-saltora-terracotta font-normal">Himalayan Pink Salt</span>
                </h1>

                <p class="text-stone-100 sm:text-stone-200 text-base sm:text-lg leading-relaxed font-normal max-w-2xl">
                    SALTORA provides complete export-compliant packing lines engineered for freshness, shelf appeal, and international transit durability. Discover our 6 signature packaging formats tailored exclusively for pure Himalayan pink salt.
                </p>

                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#packagingLines" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 shadow-lg hover:shadow-xl flex items-center gap-2 rounded-xs">
                        <span>EXPLORE 6 PACKING FORMATS</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                    </a>
                    <a href="/contact?subject=Packaging+Inquiry#contactForm" class="bg-black/50 hover:bg-black/70 border border-white/40 text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 backdrop-blur-sm flex items-center gap-2 rounded-xs shadow-md">
                        <i class="fa-solid fa-boxes-packing text-amber-300"></i>
                        <span>REQUEST PACKING QUOTE</span>
                    </a>
                </div>
            </div>

            <!-- Hero Overview Card -->
            <div class="lg:col-span-5">
                <div class="bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-2xl shadow-2xl space-y-3 group">
                    <div class="rounded-xl overflow-hidden border border-white/15 bg-black/40">
                        <img src="/packaging-pouches.jpg" alt="All 6 SALTORA Himalayan Pink Salt Packaging Lines" class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="flex items-center justify-between text-xs text-stone-200 pt-1 px-1">
                        <span class="font-semibold text-amber-300 uppercase tracking-wider text-[11px]">✦ All 6 Signature Formats</span>
                        <span class="text-stone-300">Retail Ready to Bulk 25kg</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. CORE PACKAGING PILLARS STRIP -->
    <section class="bg-white border-b border-saltora-border/70 py-8 px-6 md:px-12 shadow-xs">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 text-center">
                
                <div class="flex flex-col items-center gap-2 p-3 rounded-xl hover:bg-stone-50 transition-colors">
                    <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl shadow-2xs border border-emerald-100">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <h4 class="font-serif text-sm font-bold text-slate-900">Food Grade</h4>
                    <p class="text-[11px] text-stone-700 leading-tight">100% Virgin food-contact approved virgin polymers & glass</p>
                </div>

                <div class="flex flex-col items-center gap-2 p-3 rounded-xl hover:bg-stone-50 transition-colors">
                    <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-xl shadow-2xs border border-blue-100">
                        <i class="fa-solid fa-hands-bubbles"></i>
                    </div>
                    <h4 class="font-serif text-sm font-bold text-slate-900">Hygienically Packed</h4>
                    <p class="text-[11px] text-stone-700 leading-tight">ISO 22000 cleanroom automated dust-free filling</p>
                </div>

                <div class="flex flex-col items-center gap-2 p-3 rounded-xl hover:bg-stone-50 transition-colors">
                    <div class="w-12 h-12 rounded-full bg-amber-50 text-amber-600 flex items-center justify-center text-xl shadow-2xs border border-amber-100">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="font-serif text-sm font-bold text-slate-900">Moisture Protected</h4>
                    <p class="text-[11px] text-stone-700 leading-tight">Multi-layer barrier preventing ambient humidity clumping</p>
                </div>

                <div class="flex flex-col items-center gap-2 p-3 rounded-xl hover:bg-stone-50 transition-colors">
                    <div class="w-12 h-12 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center text-xl shadow-2xs border border-purple-100">
                        <i class="fa-solid fa-ship"></i>
                    </div>
                    <h4 class="font-serif text-sm font-bold text-slate-900">Export Quality</h4>
                    <p class="text-[11px] text-stone-700 leading-tight">Tear-proof reinforced build for long-distance sea container freight</p>
                </div>

                <div class="col-span-2 md:col-span-1 flex flex-col items-center gap-2 p-3 rounded-xl hover:bg-stone-50 transition-colors">
                    <div class="w-12 h-12 rounded-full bg-rose-50 text-saltora-terracotta flex items-center justify-center text-xl shadow-2xs border border-rose-100">
                        <i class="fa-solid fa-tags"></i>
                    </div>
                    <h4 class="font-serif text-sm font-bold text-slate-900">Custom Packaging</h4>
                    <p class="text-[11px] text-stone-700 leading-tight">Full OEM private label branding, barcoding & language options</p>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. THE 6 PACKAGING LINES DETAILED SECTION -->
    <section id="packagingLines" class="py-20 md:py-28 px-6 md:px-12 bg-saltora-bg">
        <div class="max-w-7xl mx-auto space-y-16">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-3">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">EXACT SPECIFICATIONS & SIZES</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-slate-900 font-normal">
                    Our 6 Signature Packaging Formats
                </h2>
                <p class="text-stone-700 text-sm sm:text-base font-normal">
                    Designed specifically for Himalayan pink salt — from consumer-friendly kitchen shakers to heavy-duty 25 kg industrial food service bags.
                </p>
            </div>

            <!-- GRID OF 6 PACKAGING FORMAT CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- 1. ZIP POUCH -->
                <div class="bg-white border border-[#EAE5DC] rounded-2xl p-6 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:border-saltora-terracotta/50 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-[4px] bg-gradient-to-r from-saltora-terracotta via-amber-600 to-saltora-terracotta scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    
                    <div class="space-y-4">
                        <!-- Number Badge & Format -->
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center gap-1.5 bg-amber-50 border border-amber-200 text-amber-900 text-xs font-bold px-3 py-1 rounded-full uppercase">
                                <span class="w-5 h-5 rounded-full bg-saltora-terracotta text-white flex items-center justify-center text-[10px]">1</span>
                                <span>ZIP POUCH</span>
                            </span>
                            <span class="text-[11px] font-bold text-emerald-800 bg-emerald-50 px-2.5 py-0.5 rounded-full">Resealable Zipper</span>
                        </div>

                        <!-- Image -->
                        <div class="rounded-xl overflow-hidden bg-[#FAF7F2] border border-stone-200 shadow-2xs group-hover:shadow-md transition-shadow">
                            <img src="/images/packaging/hd-zip-pouch.jpg" alt="SALTORA Himalayan Pink Salt Zip Pouch Lineup" class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>

                        <!-- Title -->
                        <h3 class="font-serif text-xl font-bold text-slate-900 group-hover:text-saltora-terracotta transition-colors">
                            Stand-Up Resealable Zip Pouch
                        </h3>

                        <!-- Available Sizes Badges -->
                        <div class="space-y-1.5">
                            <div class="text-[11px] font-bold uppercase text-stone-600 tracking-wider">Available Sizes:</div>
                            <div class="flex flex-wrap gap-1.5">
                                <span class="bg-stone-100 text-slate-900 font-bold text-xs px-2.5 py-1 rounded-md border border-stone-200">200g</span>
                                <span class="bg-stone-100 text-slate-900 font-bold text-xs px-2.5 py-1 rounded-md border border-stone-200">400g</span>
                                <span class="bg-stone-100 text-slate-900 font-bold text-xs px-2.5 py-1 rounded-md border border-stone-200">500g</span>
                                <span class="bg-stone-100 text-slate-900 font-bold text-xs px-2.5 py-1 rounded-md border border-stone-200">750g</span>
                                <span class="bg-saltora-terracotta/10 text-saltora-terracotta font-bold text-xs px-2.5 py-1 rounded-md border border-saltora-terracotta/20">1 kg</span>
                            </div>
                        </div>

                        <!-- Specs list -->
                        <ul class="text-xs text-stone-700 space-y-1.5 pt-2 border-t border-stone-100">
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Finish:</strong> Premium matte black soft-touch texture</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Window:</strong> Clear front window showcasing genuine pink crystals</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Protection:</strong> Multi-layer PE/PET barrier against humidity & oxygen</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Best For:</strong> Supermarket shelves, organic grocery, fine & coarse salt</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Bottom Action -->
                    <div class="pt-4 border-t border-stone-200 mt-5">
                        <a href="/contact?packaging=Zip+Pouch+(200g-1kg)#contactForm" class="w-full py-2.5 px-4 rounded-lg bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white text-xs font-bold tracking-wider uppercase transition-colors flex items-center justify-center gap-2 shadow-xs">
                            <span>Inquire Zip Pouches</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                <!-- 2. PET JAR -->
                <div class="bg-white border border-[#EAE5DC] rounded-2xl p-6 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:border-saltora-terracotta/50 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-[4px] bg-gradient-to-r from-saltora-terracotta via-amber-600 to-saltora-terracotta scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    
                    <div class="space-y-4">
                        <!-- Number Badge & Format -->
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center gap-1.5 bg-amber-50 border border-amber-200 text-amber-900 text-xs font-bold px-3 py-1 rounded-full uppercase">
                                <span class="w-5 h-5 rounded-full bg-saltora-terracotta text-white flex items-center justify-center text-[10px]">2</span>
                                <span>PET JAR</span>
                            </span>
                            <span class="text-[11px] font-bold text-blue-800 bg-blue-50 px-2.5 py-0.5 rounded-full">Shatterproof PET</span>
                        </div>

                        <!-- Image -->
                        <div class="rounded-xl overflow-hidden bg-[#FAF7F2] border border-stone-200 shadow-2xs group-hover:shadow-md transition-shadow">
                            <img src="/images/packaging/hd-pet-jar.jpg" alt="SALTORA Himalayan Pink Salt PET Jar Lineup" class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>

                        <!-- Title -->
                        <h3 class="font-serif text-xl font-bold text-slate-900 group-hover:text-saltora-terracotta transition-colors">
                            Shatterproof Round PET Jar
                        </h3>

                        <!-- Available Sizes Badges -->
                        <div class="space-y-1.5">
                            <div class="text-[11px] font-bold uppercase text-stone-600 tracking-wider">Available Sizes:</div>
                            <div class="flex flex-wrap gap-1.5">
                                <span class="bg-stone-100 text-slate-900 font-bold text-xs px-2.5 py-1 rounded-md border border-stone-200">200g</span>
                                <span class="bg-stone-100 text-slate-900 font-bold text-xs px-2.5 py-1 rounded-md border border-stone-200">400g</span>
                                <span class="bg-stone-100 text-slate-900 font-bold text-xs px-2.5 py-1 rounded-md border border-stone-200">500g</span>
                                <span class="bg-saltora-terracotta/10 text-saltora-terracotta font-bold text-xs px-2.5 py-1 rounded-md border border-saltora-terracotta/20">1 kg</span>
                            </div>
                        </div>

                        <!-- Specs list -->
                        <ul class="text-xs text-stone-700 space-y-1.5 pt-2 border-t border-stone-100">
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Material:</strong> 100% Virgin clear food-contact PET polymer</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Cap:</strong> Threaded black ribbed screw cap with induction heat seal</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Durability:</strong> High impact resistance, lightweight freight savings</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Best For:</strong> Daily household kitchen seasoning, culinary processors</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Bottom Action -->
                    <div class="pt-4 border-t border-stone-200 mt-5">
                        <a href="/contact?packaging=PET+Jar+(200g-1kg)#contactForm" class="w-full py-2.5 px-4 rounded-lg bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white text-xs font-bold tracking-wider uppercase transition-colors flex items-center justify-center gap-2 shadow-xs">
                            <span>Inquire PET Jars</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                <!-- 3. GLASS JAR -->
                <div class="bg-white border border-[#EAE5DC] rounded-2xl p-6 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:border-saltora-terracotta/50 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-[4px] bg-gradient-to-r from-saltora-terracotta via-amber-600 to-saltora-terracotta scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    
                    <div class="space-y-4">
                        <!-- Number Badge & Format -->
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center gap-1.5 bg-amber-50 border border-amber-200 text-amber-900 text-xs font-bold px-3 py-1 rounded-full uppercase">
                                <span class="w-5 h-5 rounded-full bg-saltora-terracotta text-white flex items-center justify-center text-[10px]">3</span>
                                <span>GLASS JAR</span>
                            </span>
                            <span class="text-[11px] font-bold text-amber-800 bg-amber-50 px-2.5 py-0.5 rounded-full">Premium Gold Cap</span>
                        </div>

                        <!-- Image -->
                        <div class="rounded-xl overflow-hidden bg-[#FAF7F2] border border-stone-200 shadow-2xs group-hover:shadow-md transition-shadow">
                            <img src="/images/packaging/hd-glass-jar.jpg" alt="SALTORA Himalayan Pink Salt Glass Jar Lineup" class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>

                        <!-- Title -->
                        <h3 class="font-serif text-xl font-bold text-slate-900 group-hover:text-saltora-terracotta transition-colors">
                            Luxury Flint Glass Jar
                        </h3>

                        <!-- Available Sizes Badges -->
                        <div class="space-y-1.5">
                            <div class="text-[11px] font-bold uppercase text-stone-600 tracking-wider">Available Sizes:</div>
                            <div class="flex flex-wrap gap-1.5">
                                <span class="bg-stone-100 text-slate-900 font-bold text-xs px-2.5 py-1 rounded-md border border-stone-200">250g</span>
                                <span class="bg-saltora-terracotta/10 text-saltora-terracotta font-bold text-xs px-2.5 py-1 rounded-md border border-saltora-terracotta/20">500g</span>
                            </div>
                        </div>

                        <!-- Specs list -->
                        <ul class="text-xs text-stone-700 space-y-1.5 pt-2 border-t border-stone-100">
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Material:</strong> Heavy-bottom ultra-clear pure flint glass</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Closure:</strong> Gold / copper airtight lug metal cap with plastisol liner</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Safety:</strong> Tamper-evident seal band & zero chemical reactivity</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Best For:</strong> Gourmet delicatessens, gift hampers, luxury dining tables</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Bottom Action -->
                    <div class="pt-4 border-t border-stone-200 mt-5">
                        <a href="/contact?packaging=Glass+Jar+(250g-500g)#contactForm" class="w-full py-2.5 px-4 rounded-lg bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white text-xs font-bold tracking-wider uppercase transition-colors flex items-center justify-center gap-2 shadow-xs">
                            <span>Inquire Glass Jars</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                <!-- 4. GRINDER BOTTLE -->
                <div class="bg-white border border-[#EAE5DC] rounded-2xl p-6 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:border-saltora-terracotta/50 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-[4px] bg-gradient-to-r from-saltora-terracotta via-amber-600 to-saltora-terracotta scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    
                    <div class="space-y-4">
                        <!-- Number Badge & Format -->
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center gap-1.5 bg-amber-50 border border-amber-200 text-amber-900 text-xs font-bold px-3 py-1 rounded-full uppercase">
                                <span class="w-5 h-5 rounded-full bg-saltora-terracotta text-white flex items-center justify-center text-[10px]">4</span>
                                <span>GRINDER BOTTLE</span>
                            </span>
                            <span class="text-[11px] font-bold text-stone-800 bg-stone-100 px-2.5 py-0.5 rounded-full">Ceramic Mill</span>
                        </div>

                        <!-- Image -->
                        <div class="rounded-xl overflow-hidden bg-[#FAF7F2] border border-stone-200 shadow-2xs group-hover:shadow-md transition-shadow">
                            <img src="/images/packaging/hd-grinder-bottle.jpg" alt="SALTORA Himalayan Pink Salt Grinder Bottle Series" class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>

                        <!-- Title -->
                        <h3 class="font-serif text-xl font-bold text-slate-900 group-hover:text-saltora-terracotta transition-colors">
                            Adjustable Ceramic Grinder Bottle
                        </h3>

                        <!-- Available Formats -->
                        <div class="space-y-1.5">
                            <div class="text-[11px] font-bold uppercase text-stone-600 tracking-wider">Available Capacities:</div>
                            <div class="flex flex-wrap gap-1.5">
                                <span class="bg-stone-100 text-slate-900 font-bold text-xs px-2.5 py-1 rounded-md border border-stone-200">100g Compact</span>
                                <span class="bg-stone-100 text-slate-900 font-bold text-xs px-2.5 py-1 rounded-md border border-stone-200">150g Standard</span>
                                <span class="bg-saltora-terracotta/10 text-saltora-terracotta font-bold text-xs px-2.5 py-1 rounded-md border border-saltora-terracotta/20">200g Tall</span>
                            </div>
                        </div>

                        <!-- Specs list -->
                        <ul class="text-xs text-stone-700 space-y-1.5 pt-2 border-t border-stone-100">
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Grinder Core:</strong> High-hardness non-corrosive adjustable ceramic mill</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Mechanism:</strong> Twist adjustment from coarse cracked to ultra-fine dust</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Salt Filling:</strong> Pre-filled with screened 2-5mm coarse pink rock crystals</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Best For:</strong> Tabletop dining, steakhouse service, consumer spice racks</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Bottom Action -->
                    <div class="pt-4 border-t border-stone-200 mt-5">
                        <a href="/contact?packaging=Grinder+Bottle+(100g-200g)#contactForm" class="w-full py-2.5 px-4 rounded-lg bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white text-xs font-bold tracking-wider uppercase transition-colors flex items-center justify-center gap-2 shadow-xs">
                            <span>Inquire Grinder Bottles</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                <!-- 5. SHAKER BOTTLE -->
                <div class="bg-white border border-[#EAE5DC] rounded-2xl p-6 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:border-saltora-terracotta/50 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-[4px] bg-gradient-to-r from-saltora-terracotta via-amber-600 to-saltora-terracotta scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    
                    <div class="space-y-4">
                        <!-- Number Badge & Format -->
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center gap-1.5 bg-amber-50 border border-amber-200 text-amber-900 text-xs font-bold px-3 py-1 rounded-full uppercase">
                                <span class="w-5 h-5 rounded-full bg-saltora-terracotta text-white flex items-center justify-center text-[10px]">5</span>
                                <span>SHAKER BOTTLE</span>
                            </span>
                            <span class="text-[11px] font-bold text-rose-800 bg-rose-50 px-2.5 py-0.5 rounded-full">Dual-Flip Cap</span>
                        </div>

                        <!-- Image -->
                        <div class="rounded-xl overflow-hidden bg-[#FAF7F2] border border-stone-200 shadow-2xs group-hover:shadow-md transition-shadow">
                            <img src="/images/packaging/hd-shaker-bottle.jpg" alt="SALTORA Himalayan Pink Salt Shaker Bottle Series" class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>

                        <!-- Title -->
                        <h3 class="font-serif text-xl font-bold text-slate-900 group-hover:text-saltora-terracotta transition-colors">
                            Dual-Action Flip Shaker Bottle
                        </h3>

                        <!-- Available Formats -->
                        <div class="space-y-1.5">
                            <div class="text-[11px] font-bold uppercase text-stone-600 tracking-wider">Available Capacities:</div>
                            <div class="flex flex-wrap gap-1.5">
                                <span class="bg-stone-100 text-slate-900 font-bold text-xs px-2.5 py-1 rounded-md border border-stone-200">100g</span>
                                <span class="bg-stone-100 text-slate-900 font-bold text-xs px-2.5 py-1 rounded-md border border-stone-200">150g</span>
                                <span class="bg-saltora-terracotta/10 text-saltora-terracotta font-bold text-xs px-2.5 py-1 rounded-md border border-saltora-terracotta/20">200g</span>
                            </div>
                        </div>

                        <!-- Specs list -->
                        <ul class="text-xs text-stone-700 space-y-1.5 pt-2 border-t border-stone-100">
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Dispenser Cap:</strong> Dual-action flip lid (pour spout + sift sprinkle holes)</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Sealing:</strong> Pressure-sensitive freshness inner seal liner beneath cap</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Salt Filling:</strong> 0.3-0.8mm free-flowing fine table grade pink salt</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-saltora-terracotta mt-0.5"></i>
                                <span><strong>Best For:</strong> Restaurant table shakers, retail condiments, barbecue rubs</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Bottom Action -->
                    <div class="pt-4 border-t border-stone-200 mt-5">
                        <a href="/contact?packaging=Shaker+Bottle+(100g-200g)#contactForm" class="w-full py-2.5 px-4 rounded-lg bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white text-xs font-bold tracking-wider uppercase transition-colors flex items-center justify-center gap-2 shadow-xs">
                            <span>Inquire Shaker Bottles</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                <!-- 6. PP BAGS (FOOD GRADE) -->
                <div class="bg-white border border-[#EAE5DC] rounded-2xl p-6 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:border-saltora-terracotta/50 group relative overflow-hidden md:col-span-2 lg:col-span-3">
                    <div class="absolute top-0 left-0 w-full h-[4px] bg-gradient-to-r from-saltora-terracotta via-amber-600 to-saltora-terracotta scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <!-- Left side image -->
                        <div class="lg:col-span-7 space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="inline-flex items-center gap-1.5 bg-amber-50 border border-amber-200 text-amber-900 text-xs font-bold px-3 py-1 rounded-full uppercase">
                                    <span class="w-5 h-5 rounded-full bg-saltora-terracotta text-white flex items-center justify-center text-[10px]">6</span>
                                    <span>PP BAGS (FOOD GRADE)</span>
                                </span>
                                <span class="text-[11px] font-bold text-emerald-800 bg-emerald-50 px-3 py-0.5 rounded-full">Heavy Duty Export Grade</span>
                            </div>

                            <div class="rounded-xl overflow-hidden bg-[#FAF7F2] border border-stone-200 shadow-sm group-hover:shadow-md transition-shadow">
                                <img src="/images/packaging/hd-pp-bags-lineup.jpg" alt="SALTORA Food Grade PP Bags Lineup 2kg to 25kg" class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-102">
                            </div>
                        </div>

                        <!-- Right side content & specs -->
                        <div class="lg:col-span-5 space-y-5">
                            <div>
                                <h3 class="font-serif text-2xl font-bold text-slate-900 group-hover:text-saltora-terracotta transition-colors">
                                    Heavy-Duty Food-Grade Polypropylene Bags
                                </h3>
                                <p class="text-xs text-stone-700 font-normal leading-relaxed mt-1.5">
                                    Engineered for high-volume commercial processors, bakeries, restaurant supply, and international container shipments. Built with tear-proof virgin PP woven fabric and protective moisture barrier.
                                </p>
                            </div>

                            <!-- Available Sizes Badges -->
                            <div class="space-y-2">
                                <div class="text-[11px] font-bold uppercase text-stone-600 tracking-wider">All 5 Export Capacities:</div>
                                <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                    <div class="bg-stone-100 border border-stone-200 rounded-lg p-2 text-center">
                                        <span class="block text-xs font-bold text-slate-900">2 KG</span>
                                        <span class="text-[9px] text-stone-500 uppercase">PP Bag</span>
                                    </div>
                                    <div class="bg-stone-100 border border-stone-200 rounded-lg p-2 text-center">
                                        <span class="block text-xs font-bold text-slate-900">5 KG</span>
                                        <span class="text-[9px] text-stone-500 uppercase">PP Bag</span>
                                    </div>
                                    <div class="bg-stone-100 border border-stone-200 rounded-lg p-2 text-center">
                                        <span class="block text-xs font-bold text-slate-900">10 KG</span>
                                        <span class="text-[9px] text-stone-500 uppercase">PP Bag</span>
                                    </div>
                                    <div class="bg-stone-100 border border-stone-200 rounded-lg p-2 text-center">
                                        <span class="block text-xs font-bold text-slate-900">20 KG</span>
                                        <span class="text-[9px] text-stone-500 uppercase">PP Bag</span>
                                    </div>
                                    <div class="bg-saltora-terracotta/10 border border-saltora-terracotta/30 rounded-lg p-2 text-center">
                                        <span class="block text-xs font-bold text-saltora-terracotta">25 KG</span>
                                        <span class="text-[9px] text-saltora-terracotta/80 uppercase">Standard FCL</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Features Pill Grid -->
                            <div class="grid grid-cols-2 gap-2 text-xs text-stone-800">
                                <div class="flex items-center gap-2 p-2 bg-[#FAF7F2] rounded-md border border-stone-200/80">
                                    <i class="fa-solid fa-circle-check text-emerald-600"></i>
                                    <span>Food Grade Certified</span>
                                </div>
                                <div class="flex items-center gap-2 p-2 bg-[#FAF7F2] rounded-md border border-stone-200/80">
                                    <i class="fa-solid fa-circle-check text-blue-600"></i>
                                    <span>Hygienically Packed</span>
                                </div>
                                <div class="flex items-center gap-2 p-2 bg-[#FAF7F2] rounded-md border border-stone-200/80">
                                    <i class="fa-solid fa-circle-check text-amber-600"></i>
                                    <span>Moisture Protected</span>
                                </div>
                                <div class="flex items-center gap-2 p-2 bg-[#FAF7F2] rounded-md border border-stone-200/80">
                                    <i class="fa-solid fa-circle-check text-purple-600"></i>
                                    <span>Export Quality Build</span>
                                </div>
                            </div>

                            <div class="pt-2">
                                <a href="/contact?packaging=Food+Grade+PP+Bags+(2kg-25kg)#contactForm" class="w-full py-3 px-6 rounded-lg bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white text-xs font-bold tracking-wider uppercase transition-colors flex items-center justify-center gap-2 shadow-md">
                                    <span>Inquire 2kg to 25kg PP Bags (Bulk FCL Orders)</span>
                                    <i class="fa-solid fa-arrow-right text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 4. MASTER SPECIFICATION COMPARISON MATRIX TABLE -->
    <section class="py-20 bg-white border-y border-saltora-border/70 px-6 md:px-12">
        <div class="max-w-7xl mx-auto space-y-10">
            <div class="text-center max-w-3xl mx-auto space-y-2">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">TECHNICAL COMPARISON</span>
                <h2 class="text-3xl sm:text-4xl font-serif text-slate-900 font-normal">
                    Packaging Specifications Matrix
                </h2>
                <p class="text-xs sm:text-sm text-stone-700">
                    Comprehensive cross-reference of materials, closures, capacities, and minimum order quantities.
                </p>
            </div>

            <!-- Table Responsive Wrapper -->
            <div class="overflow-x-auto rounded-xl border border-stone-200 shadow-sm">
                <table class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="bg-stone-100 text-slate-900 font-bold uppercase tracking-wider border-b border-stone-200">
                            <th class="p-4">Packaging Type</th>
                            <th class="p-4">Available Sizes</th>
                            <th class="p-4">Body Material</th>
                            <th class="p-4">Closure & Sealing</th>
                            <th class="p-4">Moisture Barrier</th>
                            <th class="p-4">Recommended Grain</th>
                            <th class="p-4 text-right">Standard MOQ</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-200 text-stone-800">
                        <tr class="hover:bg-amber-50/40 transition-colors">
                            <td class="p-4 font-bold text-slate-900 flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-saltora-terracotta text-white flex items-center justify-center text-[10px]">1</span>
                                <span>Zip Pouch</span>
                            </td>
                            <td class="p-4 font-semibold text-saltora-terracotta">200g, 400g, 500g, 750g, 1kg</td>
                            <td class="p-4">Multi-layer Matte PET/PE</td>
                            <td class="p-4">Press-to-Close Zip Lock</td>
                            <td class="p-4"><span class="text-emerald-700 font-bold">✦ High Barrier Foil</span></td>
                            <td class="p-4">Fine Table / Coarse</td>
                            <td class="p-4 text-right font-medium">1,000 Units</td>
                        </tr>
                        <tr class="hover:bg-amber-50/40 transition-colors">
                            <td class="p-4 font-bold text-slate-900 flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-saltora-terracotta text-white flex items-center justify-center text-[10px]">2</span>
                                <span>PET Jar</span>
                            </td>
                            <td class="p-4 font-semibold text-saltora-terracotta">200g, 400g, 500g, 1kg</td>
                            <td class="p-4">Food-Grade Virgin PET</td>
                            <td class="p-4">Black Ribbed Cap + Induction Seal</td>
                            <td class="p-4"><span class="text-emerald-700 font-bold">✦ Induction Heat Liner</span></td>
                            <td class="p-4">Fine & Medium Grain</td>
                            <td class="p-4 text-right font-medium">1,200 Units</td>
                        </tr>
                        <tr class="hover:bg-amber-50/40 transition-colors">
                            <td class="p-4 font-bold text-slate-900 flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-saltora-terracotta text-white flex items-center justify-center text-[10px]">3</span>
                                <span>Glass Jar</span>
                            </td>
                            <td class="p-4 font-semibold text-saltora-terracotta">250g, 500g</td>
                            <td class="p-4">Flint Glass (Heavy Base)</td>
                            <td class="p-4">Gold/Copper Metal Lug Cap</td>
                            <td class="p-4"><span class="text-emerald-700 font-bold">✦ Vacuum Plastisol Liner</span></td>
                            <td class="p-4">Coarse Crystal & Fine</td>
                            <td class="p-4 text-right font-medium">1,000 Units</td>
                        </tr>
                        <tr class="hover:bg-amber-50/40 transition-colors">
                            <td class="p-4 font-bold text-slate-900 flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-saltora-terracotta text-white flex items-center justify-center text-[10px]">4</span>
                                <span>Grinder Bottle</span>
                            </td>
                            <td class="p-4 font-semibold text-saltora-terracotta">100g, 150g, 200g</td>
                            <td class="p-4">Heavy Flint Glass</td>
                            <td class="p-4">Adjustable Ceramic Mill + Cap</td>
                            <td class="p-4"><span class="text-emerald-700 font-bold">✦ Snap Dust Cover</span></td>
                            <td class="p-4">2-5mm Coarse Crystals</td>
                            <td class="p-4 text-right font-medium">1,500 Units</td>
                        </tr>
                        <tr class="hover:bg-amber-50/40 transition-colors">
                            <td class="p-4 font-bold text-slate-900 flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-saltora-terracotta text-white flex items-center justify-center text-[10px]">5</span>
                                <span>Shaker Bottle</span>
                            </td>
                            <td class="p-4 font-semibold text-saltora-terracotta">100g, 150g, 200g</td>
                            <td class="p-4">Clear Glass or PET</td>
                            <td class="p-4">Dual-Flip Cap (Pour & Sift)</td>
                            <td class="p-4"><span class="text-emerald-700 font-bold">✦ Pressure Sensitive Liner</span></td>
                            <td class="p-4">0.3-0.8mm Fine Table Salt</td>
                            <td class="p-4 text-right font-medium">1,500 Units</td>
                        </tr>
                        <tr class="hover:bg-amber-50/40 transition-colors bg-stone-50/70">
                            <td class="p-4 font-bold text-slate-900 flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-saltora-terracotta text-white flex items-center justify-center text-[10px]">6</span>
                                <span>Food-Grade PP Bag</span>
                            </td>
                            <td class="p-4 font-semibold text-saltora-terracotta">2kg, 5kg, 10kg, 20kg, 25kg</td>
                            <td class="p-4">Woven Polypropylene (Virgin)</td>
                            <td class="p-4">Heat-Sealed & Stitched Hem</td>
                            <td class="p-4"><span class="text-emerald-700 font-bold">✦ Polyethylene Inner Liner</span></td>
                            <td class="p-4">All Granulations (Fine to Chunk)</td>
                            <td class="p-4 text-right font-medium">500 Bags / 1 FCL</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- 5. OEM PRIVATE LABEL PACKAGING SERVICES -->
    <section class="py-20 px-6 md:px-12 bg-saltora-bg">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">TURNKEY OEM SOLUTIONS</span>
                <h2 class="text-3xl sm:text-4xl font-serif text-slate-900 font-normal leading-tight">
                    Custom Packaging Designed for Your Retail Brand
                </h2>
                <p class="text-sm text-stone-700 leading-relaxed font-normal">
                    We produce complete private-label salt collections for international supermarket chains, gourmet spice labels, and commercial food brands. Select any of our 6 formats and customize every branding element.
                </p>

                <div class="space-y-3.5 pt-2">
                    <div class="flex items-start gap-3">
                        <div class="w-7 h-7 rounded-full bg-saltora-terracotta text-white flex items-center justify-center shrink-0 text-xs font-bold mt-0.5">1</div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Die-Line & Artwork Preparation</h4>
                            <p class="text-xs text-stone-600">We provide high-resolution engineering templates for pouch rotogravure, jar labels, and multi-color PP bag prints.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-7 h-7 rounded-full bg-saltora-terracotta text-white flex items-center justify-center shrink-0 text-xs font-bold mt-0.5">2</div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Barcode & Regulatory Compliance</h4>
                            <p class="text-xs text-stone-600">Full compliance with FDA, EU, and Gulf standard food labeling, bilingual nutrition facts, and GS1 barcodes.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-7 h-7 rounded-full bg-saltora-terracotta text-white flex items-center justify-center shrink-0 text-xs font-bold mt-0.5">3</div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Master Export Cartons & Palletization</h4>
                            <p class="text-xs text-stone-600">Heavy-duty corrugated 5-ply export master cartons, shrink-wrapped wood pallets, and container desiccants included.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="/contact?subject=Private+Label+Packaging+Inquiry#contactForm" class="inline-flex items-center gap-2 bg-slate-900 hover:bg-black text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase rounded-xs transition-all shadow-md">
                        <i class="fa-solid fa-file-pen text-amber-300"></i>
                        <span>Start Your Private Label Packaging</span>
                    </a>
                </div>
            </div>

            <!-- Right Visual Showcase -->
            <div class="lg:col-span-6 bg-white border border-stone-200 rounded-2xl p-6 shadow-xl space-y-6">
                <div class="border-b border-stone-100 pb-4 flex items-center justify-between">
                    <div>
                        <span class="text-[10px] font-bold text-saltora-terracotta uppercase tracking-wider">Quality Assurance</span>
                        <h4 class="font-serif text-lg font-bold text-slate-900">Certified Food Safety Packaging</h4>
                    </div>
                    <span class="bg-emerald-100 text-emerald-800 text-[11px] font-bold px-3 py-1 rounded-full">ISO 22000:2018</span>
                </div>

                <div class="rounded-xl overflow-hidden border border-stone-200">
                    <img src="/packaging-grinders.jpg" alt="SALTORA Packaging Overview Lineup" class="w-full h-auto object-cover">
                </div>

                <div class="grid grid-cols-2 gap-3 text-xs text-stone-700">
                    <div class="bg-stone-50 p-3 rounded-lg border border-stone-200/80">
                        <span class="block text-[10px] font-bold uppercase text-stone-500">Hygiene Standard</span>
                        <strong class="text-slate-900">Codex CXS 150:1985</strong>
                    </div>
                    <div class="bg-stone-50 p-3 rounded-lg border border-stone-200/80">
                        <span class="block text-[10px] font-bold uppercase text-stone-500">Origin Salt</span>
                        <strong class="text-slate-900">100% Khewra Salt Mines</strong>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 6. FINAL CALL TO ACTION SECTION -->
    <section class="bg-saltora-dark text-white py-16 px-6 md:px-12 border-t border-saltora-dark-border">
        <div class="max-w-5xl mx-auto text-center space-y-6">
            <span class="text-[11px] font-bold tracking-mega text-amber-300 uppercase">DIRECT EXPORT INQUIRIES</span>
            <h2 class="text-3xl sm:text-5xl font-serif text-white font-normal">
                Ready to Order Himalayan Pink Salt in Your Chosen Packaging?
            </h2>
            <p class="text-stone-300 text-sm sm:text-base max-w-2xl mx-auto font-light leading-relaxed">
                Contact our commercial export desk with your desired format (Zip Pouch, PET Jar, Glass Jar, Grinder, Shaker, or PP Bags), target quantities, and destination port.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
                <a href="/contact#contactForm" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-8 py-4 text-xs font-bold tracking-wider uppercase transition-all shadow-lg rounded-xs">
                    REQUEST COMMERCIAL QUOTATION
                </a>
                <a href="https://wa.me/923000000000" target="_blank" class="bg-emerald-600 hover:bg-emerald-700 text-white px-7 py-4 text-xs font-bold tracking-wider uppercase transition-all shadow-lg rounded-xs flex items-center gap-2">
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                    <span>WHATSAPP PACKAGING DESK</span>
                </a>
            </div>
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <x-footer />

</body>
</html>
