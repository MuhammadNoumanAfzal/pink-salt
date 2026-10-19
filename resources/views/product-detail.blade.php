<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Comprehensive Technical & On-Page SEO -->
    <title>{{ $product->name }} — Himalayan Pink Salt Exporter | SALTORA Pakistan</title>
    <meta name="description" content="Direct Khewra mine-sourced {{ $product->name }}. Calibrated grain size {{ $product->grain_size ?: $product->mesh_size ?: 'natural' }}, certified 98.5%+ NaCl purity, ISO 22000 & Halal. Request FOB/CIF bulk export quotation.">
    <meta name="keywords" content="{{ $product->name }}, Himalayan pink salt wholesale, Khewra salt export, bulk pink salt {{ $product->grain_size ?: '' }}, Saltora Pakistan">
    <meta name="author" content="SALTORA Export Division">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Open Graph (Facebook / LinkedIn) -->
    <meta property="og:type" content="product">
    <meta property="og:site_name" content="SALTORA Himalayan Pink Salt">
    <meta property="og:title" content="{{ $product->name }} | Export Specification">
    <meta property="og:description" content="Direct Khewra mine-sourced {{ $product->name }}. Certified ISO 22000, Halal & Kosher with bulk container loadability.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $product->image_url ? url($product->image_url) : url('/logo.png') }}">
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/logo.png">
    <link rel="shortcut icon" type="image/png" href="/logo.png">
    
    <!-- FontAwesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Schema.org Product Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "{{ addslashes($product->name) }}",
      "image": "{{ $product->image_url ? url($product->image_url) : url('/logo.png') }}",
      "description": "{{ addslashes($product->short_desc ?: ($product->full_desc ?: 'Authentic Pakistani Himalayan pink salt mined from Khewra Salt Range.')) }}",
      "brand": {
        "@type": "Brand",
        "name": "SALTORA"
      },
      "category": "{{ addslashes($product->categoryRef->name ?? $product->category ?? 'Himalayan Pink Salt') }}",
      "offers": {
        "@type": "Offer",
        "url": "{{ url()->current() }}",
        "priceCurrency": "USD",
        "price": "{{ $product->price && $product->price > 0 ? $product->price : '0.00' }}",
        "availability": "https://schema.org/InStock",
        "itemCondition": "https://schema.org/NewCondition"
      }
    }
    </script>
</head>
<body class="bg-[#F8F5EF] text-stone-900 font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="{ mobileMenuOpen: false, activeTab: 'overview' }">

    <!-- Header Navigation Bar -->
    <header class="sticky top-0 z-40 bg-[#F8F5EF]/95 backdrop-blur-md border-b border-[#EAE5DC] transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-10 h-16 md:h-18 flex items-center justify-between gap-4">
            <a href="/" class="flex items-center gap-3 shrink-0 group cursor-pointer mr-2 lg:mr-6" title="SALTORA Home">
                <img src="/logo.png" alt="SALTORA Logo" class="h-9 w-auto object-contain transition-transform group-hover:scale-105">
                <span class="font-serif text-xl sm:text-2xl font-bold tracking-wider text-stone-900">SALTORA</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-6 xl:space-x-8 text-[12px] font-semibold tracking-wider text-stone-800 uppercase mx-auto">
                <a href="/about" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">ABOUT</a>
                <a href="/products" class="text-saltora-terracotta font-bold transition-colors cursor-pointer border-b-2 border-saltora-terracotta pb-0.5 whitespace-nowrap">PRODUCTS</a>
                <a href="/packing" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">PACKING</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">CERTIFICATIONS</a>
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">EXPORT & LOGISTICS</a>
                <a href="/blog" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">BLOG</a>
                <a href="/contact" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">CONTACT</a>
            </nav>

            <div class="hidden sm:flex items-center gap-3 shrink-0">
                <a href="/contact?product={{ urlencode($product->name) }}#contactForm" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-4 py-2 text-[11px] font-bold tracking-wider uppercase transition-all duration-200 shadow-xs hover:shadow flex items-center gap-2 group cursor-pointer rounded-lg whitespace-nowrap">
                    <i class="fa-solid fa-file-invoice text-amber-200 group-hover:scale-110 transition-transform text-xs"></i>
                    <span>REQUEST QUOTE</span>
                </a>
            </div>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-stone-800 p-2 rounded-md focus:outline-none cursor-pointer">
                <i class="fa-solid" :class="mobileMenuOpen ? 'fa-xmark text-xl' : 'fa-bars text-xl'"></i>
            </button>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileMenuOpen" x-cloak x-transition class="lg:hidden bg-white border-b border-[#EAE5DC] px-6 py-6 space-y-4 text-xs font-semibold tracking-widest uppercase">
            <a @click="mobileMenuOpen = false" href="/about" class="block py-2 text-stone-800 hover:text-saltora-terracotta cursor-pointer">ABOUT</a>
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-terracotta font-bold cursor-pointer">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/packing" class="block py-2 text-stone-800 hover:text-saltora-terracotta cursor-pointer">PACKING</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-stone-800 hover:text-saltora-terracotta cursor-pointer">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-stone-800 hover:text-saltora-terracotta cursor-pointer">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/blog" class="block py-2 text-stone-800 hover:text-saltora-terracotta cursor-pointer">BLOG</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-stone-800 hover:text-saltora-terracotta cursor-pointer">CONTACT</a>
            <a href="/contact?product={{ urlencode($product->name) }}#contactForm" @click="mobileMenuOpen = false" class="flex items-center justify-center gap-2 w-full mt-4 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer rounded-lg shadow-md transition-colors">
                <i class="fa-solid fa-file-invoice text-amber-200 text-sm"></i>
                <span>REQUEST A QUOTE</span>
            </a>
        </div>
    </header>

    <!-- BREADCRUMB & CONTEXT STRIP -->
    <div class="bg-white/80 border-b border-[#EAE5DC] py-3 backdrop-blur-xs">
        <div class="max-w-7xl mx-auto px-6 md:px-10 flex flex-wrap items-center justify-between gap-3 text-xs">
            <nav class="flex items-center gap-2 text-stone-600 flex-wrap">
                <a href="/" class="hover:text-saltora-terracotta transition-colors flex items-center gap-1 font-medium">
                    <i class="fa-solid fa-house text-[10px]"></i>
                    <span>Home</span>
                </a>
                <span class="text-stone-300">/</span>
                <a href="/products" class="hover:text-saltora-terracotta transition-colors font-medium">Catalog</a>
                <span class="text-stone-300">/</span>
                @if($product->categoryRef)
                    <a href="/products?category={{ $product->categoryRef->id }}" class="hover:text-saltora-terracotta transition-colors font-medium">
                        {{ $product->categoryRef->name }}
                    </a>
                    <span class="text-stone-300">/</span>
                @endif
                <span class="text-stone-900 font-bold truncate max-w-xs sm:max-w-md">{{ $product->name }}</span>
            </nav>

            <div class="flex items-center gap-4 text-xs">
                <span class="inline-flex items-center gap-1.5 text-emerald-800 bg-emerald-50 border border-emerald-200/80 px-2.5 py-1 rounded-full text-[11px] font-semibold">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-600 animate-pulse"></span>
                    <span>Export Ready • FOB Karachi</span>
                </span>
                <a href="/products" class="inline-flex items-center gap-1.5 font-bold text-saltora-terracotta hover:text-saltora-terracotta-dark transition-colors cursor-pointer group">
                    <i class="fa-solid fa-arrow-left text-[10px] transition-transform group-hover:-translate-x-1"></i>
                    <span>All Products</span>
                </a>
            </div>
        </div>
    </div>

    <!-- MAIN PRODUCT SHOWCASE SECTION -->
    <main class="py-8 md:py-14">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                <!-- LEFT COLUMN: Studio Presentation & Trust Badges (5 Cols) -->
                <div class="lg:col-span-5 space-y-5 lg:sticky lg:top-24">
                    
                    <!-- Main Showcase Card -->
                    <div class="bg-white border border-[#EAE5DC] rounded-3xl p-3 shadow-xl shadow-stone-200/60 relative overflow-hidden group">
                        <!-- Top Accent Line -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-saltora-terracotta via-amber-600 to-saltora-terracotta"></div>

                        <!-- Image Display Stage with 10px frame -->
                        <div class="relative aspect-square w-full rounded-2xl overflow-hidden bg-gradient-to-b from-[#FAF7F2] to-[#F3EDE3] flex items-center justify-center p-2.5">
                            @if($product->image_url)
                                <img src="{{ asset($product->image_url) }}" 
                                     alt="{{ $product->name }} - Saltora Export Grade" 
                                     class="w-full h-full object-cover rounded-xl transition-transform duration-700 ease-out group-hover:scale-105 shadow-xs">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-stone-100 via-amber-50/40 to-stone-200 flex flex-col items-center justify-center text-stone-400 gap-2 p-6 text-center rounded-xl">
                                    <div class="w-16 h-16 rounded-full bg-white shadow-xs border border-stone-200/80 flex items-center justify-center text-saltora-terracotta">
                                        <i class="fa-solid fa-cube text-2xl"></i>
                                    </div>
                                    <span class="text-xs uppercase font-bold tracking-widest text-stone-600">Pure Himalayan Salt</span>
                                    <p class="text-[11px] text-stone-500 max-w-xs">Khewra Salt Range Extraction</p>
                                </div>
                            @endif

                            <!-- Authenticity Seal Pill -->
                            <div class="absolute bottom-4 left-4 bg-white/95 backdrop-blur-md px-3 py-1.5 rounded-full border border-stone-200/90 shadow-sm flex items-center gap-1.5 z-10">
                                <i class="fa-solid fa-certificate text-saltora-terracotta text-xs"></i>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-stone-800">100% Khewra Mine Origin</span>
                            </div>
                        </div>
                    </div>

                    <!-- Trust & Compliance Micro-Cards (4 Matrix) -->
                    <div class="bg-white border border-[#EAE5DC] rounded-2xl p-4 grid grid-cols-2 gap-3 text-xs shadow-xs">
                        <div class="flex items-start gap-2.5 p-2 rounded-xl bg-stone-50/70 border border-stone-100">
                            <div class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center shrink-0 mt-0.5">
                                <i class="fa-solid fa-circle-check text-xs"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-stone-900 text-xs">98.5%+ Purity</h5>
                                <p class="text-[11px] text-stone-600 leading-tight">Codex CXS 150 Compliant</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-2.5 p-2 rounded-xl bg-stone-50/70 border border-stone-100">
                            <div class="w-7 h-7 rounded-lg bg-amber-100 text-amber-800 flex items-center justify-center shrink-0 mt-0.5">
                                <i class="fa-solid fa-award text-xs"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-stone-900 text-xs">ISO & Halal</h5>
                                <p class="text-[11px] text-stone-600 leading-tight">Food Safety Certified</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-2.5 p-2 rounded-xl bg-stone-50/70 border border-stone-100">
                            <div class="w-7 h-7 rounded-lg bg-stone-200 text-stone-800 flex items-center justify-center shrink-0 mt-0.5">
                                <i class="fa-solid fa-ship text-xs"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-stone-900 text-xs">FCL & LCL Sea</h5>
                                <p class="text-[11px] text-stone-600 leading-tight">Port Qasim Dispatch</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-2.5 p-2 rounded-xl bg-stone-50/70 border border-stone-100">
                            <div class="w-7 h-7 rounded-lg bg-stone-200 text-stone-800 flex items-center justify-center shrink-0 mt-0.5">
                                <i class="fa-solid fa-box-open text-xs"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-stone-900 text-xs">Custom OEM</h5>
                                <p class="text-[11px] text-stone-600 leading-tight">Private Label Branding</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN: Commercial Dossier, Specifications & CTAs (7 Cols) -->
                <div class="lg:col-span-7 space-y-6">
                    
                    <!-- Product Identity Header -->
                    <div class="space-y-3">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-bold tracking-widest uppercase bg-saltora-terracotta/10 text-saltora-terracotta border border-saltora-terracotta/25">
                                <i class="fa-solid fa-cube text-[9px]"></i>
                                {{ $product->categoryRef->name ?? $product->category ?? 'Himalayan Pink Salt' }}
                            </span>

                            @if($product->subcategoryRef)
                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-[10px] font-semibold tracking-wider uppercase bg-stone-200/80 text-stone-800 border border-stone-300">
                                {{ $product->subcategoryRef->name }}
                            </span>
                            @endif

                            @if($product->badge)
                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-[10px] font-bold tracking-wider uppercase bg-saltora-terracotta text-white shadow-2xs">
                                {{ $product->badge }}
                            </span>
                            @endif

                            <span class="text-stone-300 text-xs">•</span>
                            <span class="text-stone-600 text-xs font-semibold">SKU: SLT-{{ str_pad($product->id, 4, '0', STR_PAD_LEFT) }}</span>
                        </div>

                        <h1 class="font-serif text-2xl sm:text-3xl lg:text-[32px] text-stone-900 font-bold leading-tight tracking-tight">
                            {{ $product->name }}
                        </h1>

                        <p class="text-stone-700 text-xs sm:text-sm leading-relaxed">
                            {{ $product->short_desc ?? 'Authentic food-grade and commercial Himalayan pink rock salt extracted directly from the primordial deposits of Khewra Salt Range, Pakistan. Mechanically crushed, optic-sorted, and graded without synthetic chemical additives or anti-caking agents.' }}
                        </p>
                    </div>

                    <!-- UNIFIED SPECIFICATIONS & COMMERCIAL CONSOLE (Two-Tier High-Contrast Card) -->
                    <div class="bg-white border border-[#EAE5DC] rounded-2xl overflow-hidden shadow-sm divide-y divide-[#EAE5DC]">
                        
                        <!-- Tier 1: Technical & Physical Specifications -->
                        <div class="p-4 sm:p-5 bg-[#FAF7F2]/60">
                            <div class="flex items-center justify-between mb-3 pb-2 border-b border-stone-200/80">
                                <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 flex items-center gap-1.5">
                                    <i class="fa-solid fa-microscope text-saltora-terracotta text-xs"></i>
                                    Technical Specifications
                                </span>
                                <span class="text-[10px] font-semibold text-stone-500 uppercase">Lab Verified</span>
                            </div>

                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                <div>
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">Grade</span>
                                    <span class="text-xs sm:text-[13px] font-semibold text-stone-800 line-clamp-1" title="{{ $product->grade ?? 'CE / UL Certified' }}">
                                        {{ $product->grade ? Str::limit($product->grade, 20) : 'CE / UL Certified' }}
                                    </span>
                                </div>

                                <div>
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">Grain Size</span>
                                    <span class="text-xs sm:text-[13px] font-semibold text-saltora-terracotta line-clamp-1" title="{{ $product->grain_size ?: ($product->mesh_size ?: 'Handcrafted Lamps') }}">
                                        {{ $product->grain_size ?: ($product->mesh_size ?: 'Handcrafted Lamps') }}
                                    </span>
                                </div>

                                <div>
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">Purity</span>
                                    <span class="text-xs sm:text-[13px] font-semibold text-emerald-800 line-clamp-1" title="{{ $product->purity ?? 'A-Grade Translucent' }}">
                                        {{ $product->purity ?? 'A-Grade Translucent' }}
                                    </span>
                                </div>

                                <div>
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">Packaging</span>
                                    <span class="text-xs sm:text-[13px] font-semibold text-stone-800 line-clamp-1" title="{{ $product->packaging_type ?: ($product->packaging ?: 'Retail Gift Box') }}">
                                        {{ $product->packaging_type ?: ($product->packaging ?: 'Retail Gift Box') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Tier 2: Commercial & Export Terms -->
                        <div class="p-4 sm:p-5 bg-white">
                            <div class="flex items-center justify-between mb-3 pb-2 border-b border-stone-200/80">
                                <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 flex items-center gap-1.5">
                                    <i class="fa-solid fa-ship text-saltora-terracotta text-xs"></i>
                                    Commercial & Export Terms
                                </span>
                                <span class="text-[10px] font-semibold text-emerald-800 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-full">FOB / CIF Available</span>
                            </div>

                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                <div>
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">Export Pricing</span>
                                    @if($product->price && $product->price > 0)
                                    <div class="flex items-baseline gap-1">
                                        <span class="text-sm sm:text-base font-serif font-bold text-stone-900">${{ number_format($product->price, 2) }}</span>
                                        <span class="text-[11px] text-stone-600 font-medium">/ {{ ltrim($product->price_unit ?? 'kg', '/') }}</span>
                                    </div>
                                    @else
                                    <span class="text-xs sm:text-[13px] font-semibold text-saltora-terracotta line-clamp-1">Custom Export Quote</span>
                                    @endif
                                </div>

                                <div>
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">MOQ</span>
                                    <span class="text-xs sm:text-[13px] font-semibold text-stone-800 line-clamp-1">{{ $product->moq ?? '250 Units' }}</span>
                                </div>

                                <div>
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">Lead Time</span>
                                    <span class="text-xs sm:text-[13px] font-semibold text-stone-800 line-clamp-1">7-14 Business Days</span>
                                </div>

                                <div>
                                    <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">Export Port</span>
                                    <span class="text-xs sm:text-[13px] font-semibold text-stone-800 line-clamp-1">Port Qasim / Karachi</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action & Conversion Command Area -->
                    <div class="space-y-3 pt-1">
                        <div class="flex flex-wrap items-center gap-3">
                            <a href="/contact?product={{ urlencode($product->name) }}#contactForm" 
                               class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 px-6 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-md hover:shadow-lg rounded-xl flex items-center justify-center gap-2.5 group cursor-pointer">
                                <i class="fa-solid fa-file-invoice text-amber-200 text-sm group-hover:scale-110 transition-transform"></i>
                                <span>Request Commercial Export Quote</span>
                            </a>

                            <a href="https://wa.me/923180735748?text={{ urlencode('Hello Saltora Export Desk, I would like to inquire about specifications and pricing for: ' . $product->name) }}" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="border border-emerald-600/40 hover:border-emerald-600 bg-white hover:bg-emerald-50 text-emerald-900 py-3 px-5 rounded-xl text-xs font-bold tracking-wider uppercase transition-all flex items-center justify-center gap-2 cursor-pointer shadow-xs">
                                <i class="fa-brands fa-whatsapp text-emerald-600 text-base"></i>
                                <span>Inquire via WhatsApp</span>
                            </a>
                        </div>

                        <!-- Trust Guarantee Footnote -->
                        <div class="flex items-center gap-2 text-stone-600 text-xs pt-1">
                            <i class="fa-solid fa-shield-halved text-emerald-700 text-sm"></i>
                            <span>Official SGS / PCSIR Certificate of Analysis and Origin Dossier included with every export dispatch.</span>
                        </div>
                    </div>

                    <!-- INTERACTIVE TABBED DEEP DIVE (Overview, Mineral Analysis, Packaging & Logistics) -->
                    <div class="bg-white border border-[#EAE5DC] rounded-2xl overflow-hidden shadow-xs mt-6">
                        <!-- Tab Buttons -->
                        <div class="flex border-b border-[#EAE5DC] bg-stone-50/80 text-xs font-bold uppercase tracking-wider overflow-x-auto">
                            <button @click="activeTab = 'overview'" 
                                    :class="activeTab === 'overview' ? 'bg-white text-saltora-terracotta border-b-2 border-saltora-terracotta' : 'text-stone-600 hover:text-stone-900'" 
                                    class="py-3 px-5 whitespace-nowrap transition-colors cursor-pointer flex items-center gap-2">
                                <i class="fa-solid fa-align-left text-xs"></i>
                                <span>Product Overview</span>
                            </button>

                            <button @click="activeTab = 'minerals'" 
                                    :class="activeTab === 'minerals' ? 'bg-white text-saltora-terracotta border-b-2 border-saltora-terracotta' : 'text-stone-600 hover:text-stone-900'" 
                                    class="py-3 px-5 whitespace-nowrap transition-colors cursor-pointer flex items-center gap-2">
                                <i class="fa-solid fa-gem text-xs"></i>
                                <span>Mineral Profile</span>
                            </button>

                            <button @click="activeTab = 'logistics'" 
                                    :class="activeTab === 'logistics' ? 'bg-white text-saltora-terracotta border-b-2 border-saltora-terracotta' : 'text-stone-600 hover:text-stone-900'" 
                                    class="py-3 px-5 whitespace-nowrap transition-colors cursor-pointer flex items-center gap-2">
                                <i class="fa-solid fa-boxes-packing text-xs"></i>
                                <span>Packaging & Logistics</span>
                            </button>
                        </div>

                        <!-- Tab 1: Product Overview -->
                        <div x-show="activeTab === 'overview'" class="p-5 sm:p-6 space-y-4">
                            <h4 class="font-serif text-lg font-bold text-stone-900">Premium Himalayan Salt Origin & Craftsmanship</h4>
                            <div class="text-stone-700 text-xs sm:text-sm leading-relaxed space-y-3">
                                @if($product->full_desc)
                                    <p class="whitespace-pre-line">{{ $product->full_desc }}</p>
                                @else
                                    <p>
                                        SALTORA provides high-purity, unrefined Himalayan Pink Salt directly mined from Khewra, Pakistan. Prized globally by culinary distributors, private label packagers, and food manufacturers for its clean, balanced salinity, distinct rose-pink crystalline appearance, and natural mineral content containing 84+ essential trace minerals including iron, calcium, and magnesium.
                                    </p>
                                    <p>
                                        Every batch is carefully processed through multi-stage magnetic separators and optical sorting to guarantee zero foreign inclusions and uniform particle sizing. Available in bulk container loads (FCL), 25kg / 50kg multi-wall woven PP bags, 1-ton jumbo bulk tote bags, and custom retail-ready packaging formats.
                                    </p>
                                @endif
                            </div>
                        </div>

                        <!-- Tab 2: Mineral Profile & Chemical Composition -->
                        <div x-show="activeTab === 'minerals'" x-cloak class="p-5 sm:p-6 space-y-4">
                            <h4 class="font-serif text-lg font-bold text-stone-900">Chemical Analysis & Trace Minerals</h4>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-center">
                                <div class="bg-stone-50 border border-stone-200/80 p-3 rounded-xl">
                                    <span class="text-xs font-bold text-stone-500 uppercase block">Sodium Chloride</span>
                                    <span class="text-lg font-bold text-emerald-800">98.5% - 99.1%</span>
                                    <span class="text-[10px] text-stone-500 block">Pure NaCl</span>
                                </div>
                                <div class="bg-stone-50 border border-stone-200/80 p-3 rounded-xl">
                                    <span class="text-xs font-bold text-stone-500 uppercase block">Iron (Fe)</span>
                                    <span class="text-lg font-bold text-saltora-terracotta">~38.9 ppm</span>
                                    <span class="text-[10px] text-stone-500 block">Natural Pink Tint</span>
                                </div>
                                <div class="bg-stone-50 border border-stone-200/80 p-3 rounded-xl">
                                    <span class="text-xs font-bold text-stone-500 uppercase block">Magnesium (Mg)</span>
                                    <span class="text-lg font-bold text-stone-800">~0.16%</span>
                                    <span class="text-[10px] text-stone-500 block">Trace Element</span>
                                </div>
                                <div class="bg-stone-50 border border-stone-200/80 p-3 rounded-xl">
                                    <span class="text-xs font-bold text-stone-500 uppercase block">Moisture Content</span>
                                    <span class="text-lg font-bold text-stone-800">&lt; 0.20%</span>
                                    <span class="text-[10px] text-stone-500 block">Dry Crystalline</span>
                                </div>
                            </div>
                            <p class="text-[11px] text-stone-500 leading-normal pt-1">
                                Guaranteed 100% free of synthetic additives, anti-caking agents (E535/E536), bleaches, and micro-plastics. Certified compliant with Codex Alimentarius CXS 150 standard for food grade salt.
                            </p>
                        </div>

                        <!-- Tab 3: Packaging & Logistics -->
                        <div x-show="activeTab === 'logistics'" x-cloak class="p-5 sm:p-6 space-y-4">
                            <h4 class="font-serif text-lg font-bold text-stone-900">Export Packaging & Container Logistics</h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs text-stone-700">
                                <div class="p-3.5 bg-stone-50 border border-stone-200/80 rounded-xl space-y-1.5">
                                    <h5 class="font-bold text-stone-900 flex items-center gap-1.5">
                                        <i class="fa-solid fa-box text-saltora-terracotta"></i>
                                        <span>Bulk & Wholesale Packaging</span>
                                    </h5>
                                    <ul class="space-y-1 text-stone-600 pl-4 list-disc">
                                        <li>25 kg & 50 kg PP Woven Bags with inner PE liner</li>
                                        <li>1,000 kg / 1,200 kg Jumbo Big Bags with discharge spout</li>
                                        <li>Standard heat-treated wooden pallets (ISPM-15 compliant)</li>
                                    </ul>
                                </div>

                                <div class="p-3.5 bg-stone-50 border border-stone-200/80 rounded-xl space-y-1.5">
                                    <h5 class="font-bold text-stone-900 flex items-center gap-1.5">
                                        <i class="fa-solid fa-ship text-saltora-terracotta"></i>
                                        <span>Container Sea Loadability</span>
                                    </h5>
                                    <ul class="space-y-1 text-stone-600 pl-4 list-disc">
                                        <li>20ft FCL container capacity: up to 27 Metric Tons</li>
                                        <li>FOB Port Qasim & Karachi Sea Ports</li>
                                        <li>Full documentation: Certificate of Origin, Bill of Lading, SGS Inspection</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </main>

    <!-- RELATED PRODUCTS SECTION -->
    @if(isset($relatedProducts) && count($relatedProducts) > 0)
    <section class="py-14 md:py-20 border-t border-[#EAE5DC] bg-white/60">
        <div class="max-w-7xl mx-auto px-6 md:px-10 space-y-8">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-[11px] font-bold tracking-widest uppercase text-saltora-terracotta">RECOMMENDED SPECIFICATIONS</span>
                    <h2 class="font-serif text-2xl sm:text-3xl font-bold text-stone-900 mt-0.5">Explore Related Export Grades</h2>
                </div>
                <a href="/products" class="text-xs font-bold text-saltora-terracotta hover:text-saltora-terracotta-dark flex items-center gap-1.5 transition-colors cursor-pointer group">
                    <span>View All Products</span>
                    <i class="fa-solid fa-arrow-right text-[10px] transition-transform group-hover:translate-x-1"></i>
                </a>
            </div>

            <!-- Related Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
                @foreach($relatedProducts as $rel)
                <div class="bg-white border border-[#EAE5DC] rounded-2xl p-2.5 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:shadow-stone-200/60 hover:border-saltora-terracotta/40 group relative overflow-hidden">
                    <!-- Top Accent Hover Line -->
                    <div class="absolute top-0 left-0 w-full h-[3.5px] bg-gradient-to-r from-saltora-terracotta via-amber-600 to-saltora-terracotta scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

                    <div class="space-y-3">
                        <!-- Image Container with 10px frame linking to full detail page -->
                        <a href="{{ route('products.show', $rel->slug ?: $rel->id) }}" class="relative aspect-square w-full overflow-hidden rounded-xl bg-[#FAF7F2] cursor-pointer group/img shadow-2xs block">
                            @if($rel->image_url)
                                <img src="{{ asset($rel->image_url) }}" alt="{{ $rel->name }}" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-108">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-[#FAF7F2] via-stone-50 to-[#F2ECE1] flex flex-col items-center justify-center text-stone-400 gap-2 p-4 text-center">
                                    <div class="w-12 h-12 rounded-full bg-white shadow-xs border border-stone-200/80 flex items-center justify-center text-[#B87A62]/70 group-hover:scale-110 transition-transform">
                                        <i class="fa-solid fa-cube text-lg"></i>
                                    </div>
                                    <span class="text-[10px] uppercase font-bold tracking-widest text-stone-400">Pure Himalayan Salt</span>
                                </div>
                            @endif

                            <!-- Subtle Overlay on Hover -->
                            <div class="absolute inset-0 bg-stone-900/15 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>

                            <!-- Center Hover Quick View Pill -->
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-20">
                                <span class="bg-white/95 text-stone-800 text-[9px] font-semibold tracking-wider px-2.5 py-1 rounded-full uppercase shadow-2xs border border-stone-200 flex items-center gap-1 hover:bg-saltora-terracotta hover:text-white transition-colors duration-150">
                                    <i class="fa-regular fa-eye text-[10px]"></i>
                                    Full Specs
                                </span>
                            </div>
                        </a>

                        <div class="px-1.5 space-y-1">
                            <!-- Category Line -->
                            <div class="flex items-center gap-1.5 text-[10px] font-semibold tracking-wider uppercase text-saltora-terracotta truncate">
                                <span>{{ $rel->categoryRef->name ?? $rel->category ?? 'Export Salt' }}</span>
                                @if($rel->subcategoryRef)
                                    <span class="text-stone-300">/</span>
                                    <span class="text-stone-500 font-normal truncate">{{ $rel->subcategoryRef->name }}</span>
                                @endif
                            </div>

                            <!-- Product Title -->
                            <h3 class="font-serif text-[13px] sm:text-[14px] text-stone-900 font-semibold group-hover:text-saltora-terracotta transition-colors duration-200 leading-snug line-clamp-1">
                                <a href="{{ route('products.show', $rel->slug ?: $rel->id) }}">
                                    {{ $rel->name }}
                                </a>
                            </h3>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="pt-2.5 border-t border-[#F0EBE3] flex items-center gap-2 mt-2 px-0.5 pb-0.5">
                        <a href="{{ route('products.show', $rel->slug ?: $rel->id) }}" 
                           class="flex-1 py-1.5 px-2.5 rounded-md border border-stone-200/90 hover:border-saltora-terracotta bg-white hover:bg-stone-50 text-stone-600 hover:text-saltora-terracotta text-[10px] font-semibold tracking-wider uppercase transition-all duration-150 flex items-center justify-center gap-1.5 shadow-2xs group/dtl">
                            <i class="fa-regular fa-eye text-[11px] text-saltora-terracotta transition-transform group-hover/dtl:scale-110"></i>
                            <span>Details</span>
                        </a>
                        <a href="/contact?product={{ urlencode($rel->name) }}#contactForm" 
                           class="flex-1 py-1.5 px-2.5 rounded-md bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white text-[10px] font-semibold tracking-wider uppercase transition-all duration-150 flex items-center justify-center gap-1 shadow-2xs group/inq">
                            <span>Inquire</span>
                            <i class="fa-solid fa-arrow-right text-[9px] transition-transform group-hover/inq:translate-x-0.5"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- FOOTER SECTION -->
    <x-footer />
    <x-cart-drawer />

</body>
</html>
