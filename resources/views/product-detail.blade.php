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
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
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
<body class="bg-[#FAF7F2] text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="{ mobileMenuOpen: false, activeSpecTab: 'overview' }">

    <!-- Header Navigation Bar -->
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-[#EAE5DC] transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-10 h-16 md:h-18 flex items-center justify-between gap-4">
            <a href="/" class="flex items-center gap-3 shrink-0 group cursor-pointer mr-2 lg:mr-6" title="SALTORA Home">
                <img src="/logo.png" alt="SALTORA Logo" class="h-9 w-auto object-contain transition-transform group-hover:scale-105">
                <span class="font-serif text-xl sm:text-2xl font-bold tracking-wider text-saltora-text">SALTORA</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-6 xl:space-x-8 text-[12px] font-semibold tracking-wider text-saltora-text uppercase mx-auto">
                <a href="/about" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">ABOUT</a>
                <a href="/products" class="text-saltora-terracotta font-bold transition-colors cursor-pointer border-b-2 border-saltora-terracotta pb-0.5 whitespace-nowrap">PRODUCTS</a>
                <a href="/packing" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">PACKING</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">CERTIFICATIONS</a>
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">EXPORT & LOGISTICS</a>
                <a href="/blog" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">BLOG</a>
                <a href="/contact" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">CONTACT</a>
            </nav>

            <div class="hidden sm:flex items-center gap-3 shrink-0">
                <a href="/contact?product={{ urlencode($product->name) }}#contactForm" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-4 py-2.5 text-[11px] font-bold tracking-wider uppercase transition-all duration-200 shadow-xs hover:shadow flex items-center gap-2 group cursor-pointer rounded-xs whitespace-nowrap">
                    <i class="fa-solid fa-file-invoice text-amber-200 group-hover:scale-110 transition-transform text-xs"></i>
                    <span>REQUEST QUOTE</span>
                </a>
            </div>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-saltora-text p-2 rounded-md focus:outline-none cursor-pointer">
                <i class="fa-solid" :class="mobileMenuOpen ? 'fa-xmark text-xl' : 'fa-bars text-xl'"></i>
            </button>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileMenuOpen" x-cloak x-transition class="lg:hidden bg-white border-b border-[#EAE5DC] px-6 py-6 space-y-4 text-xs font-semibold tracking-widest uppercase">
            <a @click="mobileMenuOpen = false" href="/about" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">ABOUT</a>
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-terracotta font-bold cursor-pointer">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/packing" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">PACKING</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/blog" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">BLOG</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CONTACT</a>
            <a href="/contact?product={{ urlencode($product->name) }}#contactForm" @click="mobileMenuOpen = false" class="flex items-center justify-center gap-2 w-full mt-4 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer rounded-xs shadow-md transition-colors">
                <i class="fa-solid fa-file-invoice text-amber-200 text-sm"></i>
                <span>REQUEST A QUOTE</span>
            </a>
        </div>
    </header>

    <!-- BREADCRUMB & BACK NAVIGATION -->
    <div class="bg-white border-b border-[#EAE5DC]/80 py-3.5">
        <div class="max-w-7xl mx-auto px-6 md:px-10 flex flex-wrap items-center justify-between gap-3 text-xs">
            <nav class="flex items-center gap-2 text-stone-500 flex-wrap">
                <a href="/" class="hover:text-saltora-terracotta transition-colors flex items-center gap-1">
                    <i class="fa-solid fa-house text-[11px]"></i>
                    <span>Home</span>
                </a>
                <span class="text-stone-300">/</span>
                <a href="/products" class="hover:text-saltora-terracotta transition-colors">Products</a>
                <span class="text-stone-300">/</span>
                @if($product->categoryRef)
                    <a href="/products?category={{ $product->categoryRef->id }}" class="hover:text-saltora-terracotta transition-colors">
                        {{ $product->categoryRef->name }}
                    </a>
                    <span class="text-stone-300">/</span>
                @endif
                <span class="text-stone-800 font-semibold truncate max-w-xs sm:max-w-md">{{ $product->name }}</span>
            </nav>

            <a href="/products" class="inline-flex items-center gap-1.5 text-xs font-semibold text-saltora-terracotta hover:text-saltora-terracotta-dark transition-colors cursor-pointer group">
                <i class="fa-solid fa-arrow-left text-[10px] transition-transform group-hover:-translate-x-1"></i>
                <span>Back to Catalog</span>
            </a>
        </div>
    </div>

    <!-- MAIN PRODUCT DETAIL SHOWCASE -->
    <main class="py-10 md:py-16">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
                
                <!-- LEFT COLUMN: Product Visuals & Trust Guarantee -->
                <div class="lg:col-span-5 space-y-6 lg:sticky lg:top-24">
                    <!-- Main Product Image Frame (with 10px clean border aesthetic) -->
                    <div class="bg-white border border-[#EAE5DC] rounded-3xl p-2.5 shadow-xl shadow-stone-200/50 relative overflow-hidden group">
                        <!-- Top Accent Line -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-saltora-terracotta via-amber-600 to-saltora-terracotta"></div>

                        <!-- Image Container with 10px frame -->
                        <div class="relative aspect-square w-full rounded-2xl overflow-hidden bg-[#FAF7F2] flex items-center justify-center">
                            @if($product->image_url)
                                <img src="{{ asset($product->image_url) }}" 
                                     alt="{{ $product->name }} - Pakistani Himalayan Pink Salt" 
                                     class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-stone-100 via-amber-50/40 to-stone-200 flex flex-col items-center justify-center text-stone-400 gap-2 p-6 text-center">
                                    <div class="w-20 h-20 rounded-full bg-white shadow-xs border border-stone-200/80 flex items-center justify-center text-saltora-terracotta">
                                        <i class="fa-solid fa-cube text-3xl"></i>
                                    </div>
                                    <span class="text-xs uppercase font-bold tracking-widest text-stone-500">Pure Himalayan Salt</span>
                                    <p class="text-[11px] text-stone-400 max-w-xs">Direct Khewra Salt Range Extraction</p>
                                </div>
                            @endif

                        </div>
                    </div>

                    <!-- Direct Quality Badges Strip -->
                    <div class="bg-white border border-[#EAE5DC] rounded-2xl p-5 grid grid-cols-2 gap-4 text-xs shadow-xs">
                        <div class="flex items-start gap-2.5">
                            <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center shrink-0 border border-emerald-100">
                                <i class="fa-solid fa-circle-check text-sm"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-stone-800">98.5%+ Certified NaCl</h5>
                                <p class="text-[11px] text-stone-500 leading-tight">Codex CXS 150 Compliant</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-2.5">
                            <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center shrink-0 border border-amber-100">
                                <i class="fa-solid fa-award text-sm"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-stone-800">ISO 22000 & Halal</h5>
                                <p class="text-[11px] text-stone-500 leading-tight">Food Safety Certified</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-2.5">
                            <div class="w-8 h-8 rounded-lg bg-stone-100 text-stone-700 flex items-center justify-center shrink-0 border border-stone-200">
                                <i class="fa-solid fa-ship text-sm"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-stone-800">Direct FCL & LCL</h5>
                                <p class="text-[11px] text-stone-500 leading-tight">FOB Karachi & Port Qasim</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-2.5">
                            <div class="w-8 h-8 rounded-lg bg-stone-100 text-stone-700 flex items-center justify-center shrink-0 border border-stone-200">
                                <i class="fa-solid fa-box-open text-sm"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-stone-800">Custom Packaging</h5>
                                <p class="text-[11px] text-stone-500 leading-tight">OEM Private Label Ready</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN: Commercial Specs, Pricing & Actions -->
                <div class="lg:col-span-7 space-y-7">
                    
                    <!-- Header Kicker & Product Title -->
                    <div class="space-y-3">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-bold tracking-widest uppercase bg-saltora-blush text-saltora-terracotta border border-saltora-terracotta/25">
                                <i class="fa-solid fa-cube text-[9px]"></i>
                                {{ $product->categoryRef->name ?? $product->category ?? 'Himalayan Pink Salt' }}
                            </span>
                            @if($product->subcategoryRef)
                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-[10px] font-semibold tracking-wider uppercase bg-stone-100 text-stone-600 border border-stone-200">
                                {{ $product->subcategoryRef->name }}
                            </span>
                            @endif
                            @if($product->badge)
                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-[10px] font-bold tracking-wider uppercase bg-saltora-terracotta text-white shadow-2xs">
                                {{ $product->badge }}
                            </span>
                            @endif
                            <span class="text-stone-400 text-xs">•</span>
                            <span class="text-stone-500 text-xs font-medium">SKU: SLT-{{ str_pad($product->id, 4, '0', STR_PAD_LEFT) }}</span>
                        </div>

                        <h1 class="font-serif text-xl sm:text-2xl lg:text-[26px] text-stone-900 font-semibold leading-snug tracking-tight">
                            {{ $product->name }}
                        </h1>

                        <p class="text-stone-600 text-xs sm:text-sm leading-relaxed font-light">
                            {{ $product->short_desc ?? 'Authentic food-grade and commercial Himalayan pink rock salt extracted directly from the primordial deposits of Khewra Salt Range, Pakistan. Mechanically crushed, optic-sorted, and graded without synthetic chemical additives or anti-caking agents.' }}
                        </p>
                    </div>

                    <!-- Specifications Strip (Bold, Crisp, Aligned 4-Column Grid) -->
                    <div class="bg-white border border-[#EAE5DC] rounded-xl px-4 py-3 shadow-2xs">
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-0 sm:divide-x divide-stone-100">
                            <div class="sm:pr-4">
                                <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">Grade</span>
                                <span class="text-xs sm:text-[13px] font-semibold text-stone-800 line-clamp-1" title="{{ $product->grade ?? 'CE / UL Certified' }}">
                                    {{ $product->grade ? Str::limit($product->grade, 20) : 'CE / UL Certified' }}
                                </span>
                            </div>

                            <div class="sm:px-4">
                                <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">Grain Size</span>
                                <span class="text-xs sm:text-[13px] font-semibold text-saltora-terracotta line-clamp-1" title="{{ $product->grain_size ?: ($product->mesh_size ?: 'Handcrafted Lamps') }}">
                                    {{ $product->grain_size ?: ($product->mesh_size ?: 'Handcrafted Lamps') }}
                                </span>
                            </div>

                            <div class="sm:px-4">
                                <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">Purity</span>
                                <span class="text-xs sm:text-[13px] font-semibold text-emerald-700 line-clamp-1" title="{{ $product->purity ?? 'A-Grade Translucent' }}">
                                    {{ $product->purity ?? 'A-Grade Translucent' }}
                                </span>
                            </div>

                            <div class="sm:pl-4">
                                <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">Packaging</span>
                                <span class="text-xs sm:text-[13px] font-semibold text-stone-800 line-clamp-1" title="{{ $product->packaging_type ?: ($product->packaging ?: 'Retail Gift Box') }}">
                                    {{ $product->packaging_type ?: ($product->packaging ?: 'Retail Gift Box') }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Pricing & Logistics Strip (Aligned 4-Column Grid) -->
                    <div class="bg-white border border-[#EAE5DC] rounded-xl px-4 py-3 shadow-2xs">
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-0 sm:divide-x divide-stone-100">
                            <div class="sm:pr-4">
                                <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">Export Pricing</span>
                                @if($product->price && $product->price > 0)
                                <div class="flex items-baseline gap-1">
                                    <span class="text-xs sm:text-[13px] font-bold text-stone-900">${{ number_format($product->price, 2) }}</span>
                                    <span class="text-[10px] text-stone-500 font-medium">/ {{ ltrim($product->price_unit ?? 'kg', '/') }}</span>
                                </div>
                                @else
                                <span class="text-xs sm:text-[13px] font-semibold text-saltora-terracotta line-clamp-1">Custom Export Quote</span>
                                @endif
                            </div>

                            <div class="sm:px-4">
                                <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">MOQ</span>
                                <span class="text-xs sm:text-[13px] font-semibold text-stone-800 line-clamp-1">{{ $product->moq ?? '250 Units' }}</span>
                            </div>

                            <div class="sm:px-4">
                                <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">Lead Time</span>
                                <span class="text-xs sm:text-[13px] font-semibold text-stone-800 line-clamp-1">7-14 Days</span>
                            </div>

                            <div class="sm:pl-4">
                                <span class="text-[11px] font-bold uppercase tracking-wider text-stone-900 block mb-1">Port</span>
                                <span class="text-xs sm:text-[13px] font-semibold text-stone-800 line-clamp-1">Port Qasim</span>
                            </div>
                        </div>
                    </div>

                    <!-- Primary CTAs & Contact Triggers (Refined, Perfectly Sized) -->
                    <div class="space-y-2 pt-1">
                        <div class="flex flex-wrap items-center gap-2.5">
                            <a href="/contact?product={{ urlencode($product->name) }}#contactForm" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2.5 px-5 text-xs font-semibold tracking-wider uppercase transition-all duration-200 shadow-2xs hover:shadow rounded-lg flex items-center justify-center gap-2 group cursor-pointer">
                                <i class="fa-solid fa-file-invoice text-amber-200 text-xs"></i>
                                <span>Request Commercial Quote</span>
                            </a>

                            <a href="https://wa.me/923180735748?text={{ urlencode('Hello Saltora Export Desk, I would like to inquire about specifications and pricing for: ' . $product->name) }}" target="_blank" rel="noopener noreferrer" class="border border-emerald-600/30 hover:border-emerald-600 bg-white hover:bg-emerald-50/50 text-emerald-800 py-2.5 px-4 rounded-lg text-xs font-semibold tracking-wider uppercase transition-all flex items-center justify-center gap-2 cursor-pointer shadow-2xs">
                                <i class="fa-brands fa-whatsapp text-emerald-600 text-sm"></i>
                                <span>Inquire via WhatsApp</span>
                            </a>
                        </div>

                        <p class="text-[10px] text-stone-400 flex items-center gap-1.5 pt-1">
                            <i class="fa-solid fa-shield-halved text-emerald-600"></i>
                            <span>Official SGS / PCSIR Certificate of Analysis and Origin Dossier included.</span>
                        </p>
                    </div>

                    <!-- Full Description / Overview Tabs -->
                    <div class="pt-4 border-t border-stone-200 space-y-4">
                        <h3 class="font-serif text-lg font-bold text-stone-900">Product Overview & Specifications</h3>
                        
                        <div class="prose prose-stone text-xs sm:text-sm text-stone-600 leading-relaxed font-light space-y-3">
                            @if($product->full_desc)
                                <p class="whitespace-pre-line">{{ $product->full_desc }}</p>
                            @else
                                <p>
                                    SALTORA provides high-purity, unrefined Himalayan Pink Salt directly mined from Khewra, Pakistan. Our mineral-rich salt is prized globally by culinary distributors, private label packagers, and food manufacturers for its clean, balanced salinity, distinct rose-pink crystalline appearance, and natural mineral content containing 84+ essential trace minerals including iron, calcium, and magnesium.
                                </p>
                                <p>
                                    Every batch is carefully processed through multi-stage magnetic separators and optical sorting to guarantee zero foreign inclusions and uniform particle sizing. Available in bulk container loads (FCL), 25kg / 50kg multi-wall woven PP bags, 1-ton jumbo bulk tote bags, and custom retail-ready packaging formats.
                                </p>
                            @endif
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </main>

    <!-- RELATED / RECOMMENDED PRODUCTS -->
    @if(isset($relatedProducts) && count($relatedProducts) > 0)
    <section class="py-16 md:py-20 border-t border-[#EAE5DC]">
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

            <!-- Related Products Grid (Using 10px padding around image, no description clutter) -->
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

                            <!-- Product Title (Refined Size) -->
                            <h3 class="font-serif text-[13px] sm:text-[14px] text-stone-900 font-semibold group-hover:text-saltora-terracotta transition-colors duration-200 leading-snug line-clamp-1">
                                <a href="{{ route('products.show', $rel->slug ?: $rel->id) }}">
                                    {{ $rel->name }}
                                </a>
                            </h3>
                        </div>
                    </div>

                    <!-- Action Buttons: Sleeker, Perfectly Proportioned -->
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
