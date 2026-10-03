<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Comprehensive Technical & On-Page SEO -->
    <title>Export-Ready Himalayan Pink Salt Products & Catalog | SALTORA Pakistan</title>
    <meta name="description" content="Explore SALTORA's export-ready Himalayan pink salt catalog. Direct mine sourcing of food-grade fine, coarse, granules, animal salt licks, handcrafted salt lamps, and bulk 25kg / 1-ton jumbo bags. Certified ISO 22000, Halal & Kosher.">
    <meta name="keywords" content="Himalayan Pink Salt wholesale, pink salt catalog, fine pink salt, coarse grinder salt, 25kg pink salt bags, 1 ton jumbo bag salt, animal salt lick blocks, salt lamps export, Khewra salt exporter, Pakistan pink salt supplier">
    <meta name="author" content="SALTORA Export Division">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Open Graph (Facebook / LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="SALTORA Himalayan Pink Salt">
    <meta property="og:title" content="Export-Ready Himalayan Pink Salt Products & Catalog | SALTORA Pakistan">
    <meta property="og:description" content="Direct Khewra mine-sourced Himalayan pink salt for international importers, food manufacturers, and retail distributors. Certified ISO 22000, Halal & Kosher.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ url('/products-hero.jpg') }}">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Export-Ready Himalayan Pink Salt Products & Catalog | SALTORA Pakistan">
    <meta name="twitter:description" content="Browse fine, medium, coarse salt, animal licks, and bulk export packaging direct from Khewra Salt Range.">
    <meta name="twitter:image" content="{{ url('/products-hero.jpg') }}">
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/logo.png">
    <link rel="shortcut icon" type="image/png" href="/logo.png">
    
    <!-- FontAwesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Schema.org JSON-LD Structured Data for Catalog & Products -->
    @php
        $productsJson = $products->map(function($p) {
            return [
                'id' => $p->id,
                'name' => $p->name,
                'slug' => $p->slug ?? \Illuminate\Support\Str::slug($p->name),
                'category_id' => (string)$p->category_id,
                'subcategory_id' => (string)($p->subcategory_id ?? ''),
                'category_name' => $p->categoryRef->name ?? $p->category ?? 'Export Salt',
                'category_slug' => $p->categoryRef->slug ?? \Illuminate\Support\Str::slug($p->category ?? 'salt'),
                'subcategory_name' => $p->subcategoryRef->name ?? '',
                'subcategory_slug' => $p->subcategoryRef->slug ?? '',
                'image_url' => $p->image_url ?? '',
                'description' => $p->description ?? '',
                'short_desc' => $p->short_desc ?? $p->description ?? '',
                'price' => (float)($p->price ?? 0),
                'formatted_price' => $p->formatted_price,
                'price_unit' => $p->price_unit ?? 'kg',
                'moq' => $p->moq ?: null,
                'grain_size' => $p->grain_size ?: ($p->mesh_size ?: null),
                'packaging_type' => $p->packaging_type ?: ($p->packaging ?: null),
                'package_weight' => $p->package_weight ?: null,
                'grade' => $p->grade ?: null,
                'purity' => $p->purity ?: null,
                'origin' => $p->origin ?: null,
            ];
        });

        $schemaItemList = [];
        foreach ($products->take(12) as $idx => $sp) {
            $schemaItemList[] = [
                '@type' => 'ListItem',
                'position' => $idx + 1,
                'item' => [
                    '@type' => 'Product',
                    'name' => $sp->name,
                    'image' => $sp->image_url ? url($sp->image_url) : url('/logo.png'),
                    'description' => $sp->description,
                    'category' => $sp->categoryRef->name ?? $sp->category ?? 'Himalayan Pink Salt',
                    'offers' => [
                        '@type' => 'Offer',
                        'priceCurrency' => 'USD',
                        'price' => $sp->price && $sp->price > 0 ? (string)$sp->price : '0.00',
                        'availability' => 'https://schema.org/InStock',
                        'url' => url('/contact?product=' . urlencode($sp->name) . '#contactForm')
                    ]
                ]
            ];
        }
    @endphp

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "CollectionPage",
          "@id": "{{ url()->current() }}#webpage",
          "url": "{{ url()->current() }}",
          "name": "Export-Ready Himalayan Pink Salt Products & Catalog | SALTORA Pakistan",
          "description": "Comprehensive B2B export catalog of Himalayan pink salt including edible fine/coarse salt, retail packaging, 1-ton bulk bags, animal salt licks, and handcrafted lamps.",
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
                "name": "Products Catalog",
                "item": "{{ url()->current() }}"
              }
            ]
          }
        },
        {
          "@type": "ItemList",
          "@id": "{{ url()->current() }}#itemlist",
          "name": "SALTORA Export Salt Catalog",
          "itemListElement": {!! json_encode($schemaItemList, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        }
      ]
    }
    </script>
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" 
      x-data="{
          mobileMenuOpen: false,
          quickViewModalOpen: false,
          selectedProduct: null,
          openQuickView(p) {
              this.selectedProduct = p;
              this.quickViewModalOpen = true;
          },
          closeQuickView() {
              this.quickViewModalOpen = false;
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
                <a href="/products" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1 cursor-pointer">PRODUCTS</a>
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
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-terracotta font-bold cursor-pointer">PRODUCTS</a>
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

    <!-- PRODUCTS HERO SECTION -->
    <section class="relative bg-saltora-dark text-white py-20 md:py-28 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border">
        <!-- Backdrop Image (`/products-hero.jpg`) -->
        <img src="/products-hero.jpg" alt="Pure Himalayan Pink Salt Range Backdrop" class="absolute inset-0 w-full h-full object-cover opacity-80 filter brightness-105 contrast-105 pointer-events-none transition-transform duration-1000 scale-105">
        <!-- Left-to-right gradient: dark behind text on left, light & visible over image on right -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/60 to-black/20 pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto">
            <div class="space-y-6 max-w-3xl animate-hero-left">
                <!-- Category Sub-tag (High Contrast Pill) -->
                <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-black/60 backdrop-blur-md border border-amber-400/40 text-[11px] font-bold tracking-mega text-amber-300 uppercase shadow-lg">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    <span>PAKISTAN KHEWRA SALT RANGE — B2B DIRECT EXPORT</span>
                </div>

                <!-- Headline with Drop Shadow for Maximum Legibility -->
                <h1 class="text-4xl sm:text-6xl lg:text-6.5xl font-serif text-white font-normal leading-[1.08] drop-shadow-md">
                    The Saltora Export Catalog
                </h1>

                <!-- Paragraph with Solid Bright Text -->
                <p class="text-stone-100 sm:text-stone-200 text-base sm:text-lg leading-relaxed font-normal max-w-2xl drop-shadow-sm">
                    Direct Khewra mine-sourced Himalayan pink salt for international importers, food manufacturers, retail brands, and industrial processors. Calibrated from 0.2mm ultra-fine to 8mm crystal rock, packed in private-label pouches, 25kg PP bags, or 1-ton bulk jumbo bags.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#catalogSection" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 shadow-lg hover:shadow-xl flex items-center gap-2 rounded-xs">
                        <span>EXPLORE PRODUCTS</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                    </a>
                    <a href="/contact" class="bg-black/50 hover:bg-black/70 border border-white/40 text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase transition-all duration-300 backdrop-blur-sm flex items-center gap-2 rounded-xs shadow-md">
                        <i class="fa-solid fa-file-contract text-amber-300"></i>
                        <span>REQUEST CUSTOM QUOTE</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTINUOUS MARQUEE TICKER BAR -->
    <div class="bg-saltora-terracotta text-white py-3 overflow-hidden shadow-inner border-y border-saltora-terracotta-dark">
        <div class="marquee-track flex whitespace-nowrap gap-12 text-xs font-semibold tracking-widest uppercase items-center">
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 98.5%+ PURE NaCl</span>
                <span class="flex items-center gap-2">✦ ISO 22000 & CODEX CXS 150:1985</span>
                <span class="flex items-center gap-2">✦ PRIVATE LABEL OEM PACKAGING</span>
                <span class="flex items-center gap-2">✦ DIRECT FROM KHEWRA SALT MINES</span>
                <span class="flex items-center gap-2">✦ BULK & RETAIL EXPORT READY</span>
                <span class="flex items-center gap-2">✦ 100% NATURAL UNREFINED MINERALS</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 98.5%+ PURE NaCl</span>
                <span class="flex items-center gap-2">✦ ISO 22000 & CODEX CXS 150:1985</span>
                <span class="flex items-center gap-2">✦ PRIVATE LABEL OEM PACKAGING</span>
                <span class="flex items-center gap-2">✦ DIRECT FROM KHEWRA SALT MINES</span>
                <span class="flex items-center gap-2">✦ BULK & RETAIL EXPORT READY</span>
                <span class="flex items-center gap-2">✦ 100% NATURAL UNREFINED MINERALS</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 98.5%+ PURE NaCl</span>
                <span class="flex items-center gap-2">✦ ISO 22000 & CODEX CXS 150:1985</span>
                <span class="flex items-center gap-2">✦ PRIVATE LABEL OEM PACKAGING</span>
                <span class="flex items-center gap-2">✦ DIRECT FROM KHEWRA SALT MINES</span>
                <span class="flex items-center gap-2">✦ BULK & RETAIL EXPORT READY</span>
                <span class="flex items-center gap-2">✦ 100% NATURAL UNREFINED MINERALS</span>
            </div>
        </div>
    </div>

    <!-- MAIN PRODUCT CATALOG & INTERACTIVE FILTERS SECTION -->
    <section id="catalogSection" class="py-16 md:py-24 px-6 md:px-12 bg-saltora-bg" 
             x-data="{
                 selectedCategory: '',
                 selectedSubcategory: '',
                 selectedGrain: '',
                 selectedPackaging: '',
                 searchQuery: '',
                 sortBy: 'featured',
                 viewMode: 'grid',
                 mobileFilterOpen: false,
                 products: {{ Js::from($productsJson) }},

                 // Check if product matches all active filters
                 matchesProduct(p) {
                     // Category filter
                     if (this.selectedCategory) {
                         const catMatch = String(p.category_id) === String(this.selectedCategory) ||
                                          p.category_slug === this.selectedCategory ||
                                          p.category_name.toLowerCase().includes(this.selectedCategory.toLowerCase());
                         if (!catMatch) return false;
                     }
                     // Subcategory filter
                     if (this.selectedSubcategory) {
                         const subMatch = String(p.subcategory_id) === String(this.selectedSubcategory) ||
                                          p.subcategory_slug === this.selectedSubcategory ||
                                          p.subcategory_name.toLowerCase().includes(this.selectedSubcategory.toLowerCase());
                         if (!subMatch) return false;
                     }
                     // Grain filter
                     if (this.selectedGrain) {
                         const g = this.selectedGrain.toLowerCase();
                         const grain = (p.grain_size || '').toLowerCase();
                         const name = p.name.toLowerCase();
                         if (!grain.includes(g) && !name.includes(g)) return false;
                     }
                     // Packaging filter
                     if (this.selectedPackaging) {
                         const pk = this.selectedPackaging.toLowerCase();
                         const pack = (p.packaging_type || '').toLowerCase();
                         const name = p.name.toLowerCase();
                         if (!pack.includes(pk) && !name.includes(pk)) return false;
                     }
                     // Search query
                     if (this.searchQuery && this.searchQuery.trim() !== '') {
                         const q = this.searchQuery.trim().toLowerCase();
                         const haystack = [p.name, p.description, p.category_name, p.subcategory_name, p.grain_size, p.packaging_type].join(' ').toLowerCase();
                         if (!haystack.includes(q)) return false;
                     }
                     return true;
                 },

                 get filteredProducts() {
                     let list = this.products.filter(p => this.matchesProduct(p));
                     if (this.sortBy === 'name-asc') {
                         list = [...list].sort((a, b) => a.name.localeCompare(b.name));
                     } else if (this.sortBy === 'name-desc') {
                         list = [...list].sort((a, b) => b.name.localeCompare(a.name));
                     } else if (this.sortBy === 'price-asc') {
                         list = [...list].sort((a, b) => (a.price || 0) - (b.price || 0));
                     } else if (this.sortBy === 'price-desc') {
                         list = [...list].sort((a, b) => (b.price || 0) - (a.price || 0));
                     }
                     return list;
                 },

                 get activeFilterCount() {
                     let count = 0;
                     if (this.selectedCategory) count++;
                     if (this.selectedSubcategory) count++;
                     if (this.selectedGrain) count++;
                     if (this.selectedPackaging) count++;
                     if (this.searchQuery) count++;
                     return count;
                 },

                 resetFilters() {
                     this.selectedCategory = '';
                     this.selectedSubcategory = '';
                     this.selectedGrain = '';
                     this.selectedPackaging = '';
                     this.searchQuery = '';
                     this.sortBy = 'featured';
                 }
             }">
        
        <div class="max-w-7xl mx-auto space-y-10">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-3 reveal-on-scroll reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">EXPORT CATALOG & SELECTION</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    Explore Our Product Line
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    From food-grade fine & coarse salt in zip pouches, PET jars, and 25kg PP bags to hand-crafted salt lamps and 1-ton bulk jumbo export bags.
                </p>
            </div>



            <!-- TOP CONTROLS & ACTIVE FILTERS BAR -->
            <div class="bg-white p-4 border border-saltora-border rounded-sm shadow-xs flex flex-wrap items-center justify-between gap-4">
                <!-- Left: Result Count & Active Filter Tags -->
                <div class="flex flex-wrap items-center gap-2.5">
                    <div class="text-xs text-stone-600 font-semibold flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        <span>Showing <strong class="text-saltora-text" x-text="filteredProducts.length"></strong> of <strong class="text-saltora-text">{{ count($products) }}</strong> export items</span>
                    </div>

                    <!-- Active Badges -->
                    <template x-if="selectedCategory">
                        <span class="inline-flex items-center gap-1 bg-stone-100 border border-stone-300 text-stone-800 text-[11px] px-2.5 py-0.5 rounded-full">
                            <span>Category: <strong x-text="categories.find(c => String(c.id) === String(selectedCategory))?.name || selectedCategory"></strong></span>
                            <button @click="selectedCategory = ''; selectedSubcategory = ''" class="hover:text-red-600 text-stone-400 font-bold ml-1 cursor-pointer">&times;</button>
                        </span>
                    </template>
                    <template x-if="selectedSubcategory">
                        <span class="inline-flex items-center gap-1 bg-amber-100/80 border border-amber-300 text-amber-900 text-[11px] px-2.5 py-0.5 rounded-full font-semibold">
                            <span>Subcategory: <strong x-text="products.find(p => String(p.subcategory_id) === String(selectedSubcategory))?.subcategory_name || selectedSubcategory"></strong></span>
                            <button @click="selectedSubcategory = ''" class="hover:text-red-600 text-amber-700 font-bold ml-1 cursor-pointer">&times;</button>
                        </span>
                    </template>
                    <template x-if="selectedGrain">
                        <span class="inline-flex items-center gap-1 bg-saltora-terracotta/10 border border-saltora-terracotta/30 text-saltora-terracotta text-[11px] px-2.5 py-0.5 rounded-full font-medium">
                            <span>Grain: <strong x-text="selectedGrain"></strong></span>
                            <button @click="selectedGrain = ''" class="hover:text-red-600 font-bold ml-1 cursor-pointer">&times;</button>
                        </span>
                    </template>
                    <template x-if="selectedPackaging">
                        <span class="inline-flex items-center gap-1 bg-amber-50 border border-amber-300 text-amber-900 text-[11px] px-2.5 py-0.5 rounded-full font-medium">
                            <span>Format: <strong x-text="selectedPackaging"></strong></span>
                            <button @click="selectedPackaging = ''" class="hover:text-red-600 font-bold ml-1 cursor-pointer">&times;</button>
                        </span>
                    </template>
                    <template x-if="searchQuery">
                        <span class="inline-flex items-center gap-1 bg-blue-50 border border-blue-200 text-blue-900 text-[11px] px-2.5 py-0.5 rounded-full font-medium">
                            <span>Search: "<strong x-text="searchQuery"></strong>"</span>
                            <button @click="searchQuery = ''" class="hover:text-red-600 font-bold ml-1 cursor-pointer">&times;</button>
                        </span>
                    </template>
                    
                    <button @click="resetFilters()" x-show="activeFilterCount > 0" x-cloak class="text-[11px] text-saltora-terracotta hover:underline font-bold uppercase tracking-wider ml-1 cursor-pointer">
                        Clear All Filters
                    </button>
                </div>

                <!-- Right: Sort, View Switcher & Mobile Filter Toggle -->
                <div class="flex items-center gap-3 ml-auto">
                    <!-- Mobile Filter Toggle Button -->
                    <button @click="mobileFilterOpen = true" class="lg:hidden bg-stone-100 hover:bg-stone-200 border border-stone-300 px-3.5 py-1.5 rounded-xs text-xs font-bold text-saltora-text flex items-center gap-2 cursor-pointer">
                        <i class="fa-solid fa-sliders text-saltora-terracotta"></i>
                        <span>Filter (<strong x-text="activeFilterCount"></strong>)</span>
                    </button>

                    <!-- Sort Select -->
                    <div class="flex items-center gap-1.5 text-xs text-stone-600">
                        <label for="sortDropdown" class="hidden sm:inline font-medium">Sort By:</label>
                        <select id="sortDropdown" x-model="sortBy" class="bg-[#FAF7F2] border border-saltora-border px-3 py-1.5 rounded-xs text-xs font-medium text-stone-800 focus:outline-none focus:border-saltora-terracotta cursor-pointer">
                            <option value="featured">Featured / Recommended</option>
                            <option value="name-asc">Name (A &rarr; Z)</option>
                            <option value="name-desc">Name (Z &rarr; A)</option>
                            <option value="price-asc">Price (Low to High)</option>
                            <option value="price-desc">Price (High to Low)</option>
                        </select>
                    </div>

                    <!-- View Switcher -->
                    <div class="hidden sm:flex items-center border border-saltora-border rounded-xs overflow-hidden">
                        <button @click="viewMode = 'grid'" :class="viewMode === 'grid' ? 'bg-saltora-terracotta text-white' : 'bg-white text-stone-600 hover:bg-stone-100'" class="p-1.5 px-2.5 transition-colors cursor-pointer" title="Grid View">
                            <i class="fa-solid fa-grip text-xs"></i>
                        </button>
                        <button @click="viewMode = 'compact'" :class="viewMode === 'compact' ? 'bg-saltora-terracotta text-white' : 'bg-white text-stone-600 hover:bg-stone-100'" class="p-1.5 px-2.5 transition-colors cursor-pointer" title="Compact Spec List View">
                            <i class="fa-solid fa-list text-xs"></i>
                        </button>
                    </div>
                </div>
            </div>


            <!-- MAIN CATALOG LAYOUT: LEFT SIDEBAR (3 cols) + RIGHT PRODUCTS (9 cols) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- LEFT DESKTOP FILTER SIDEBAR (3 Cols) -->
                <aside class="hidden lg:block lg:col-span-3 space-y-6 bg-white p-6 border border-saltora-border rounded-sm shadow-xs sticky top-24">
                    <div class="flex items-center justify-between border-b border-saltora-border pb-4">
                        <h3 class="font-serif text-lg font-bold text-saltora-text flex items-center gap-2">
                            <svg class="w-4 h-4 text-saltora-terracotta" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                            </svg>
                            <span>Filter Catalog</span>
                        </h3>
                        <button @click="resetFilters()" x-show="activeFilterCount > 0" x-cloak class="text-[11px] text-saltora-terracotta hover:underline font-bold uppercase tracking-wider cursor-pointer">
                            Reset All
                        </button>
                    </div>

                    <!-- Search Input Box -->
                    <div class="space-y-2">
                        <label class="block text-[11px] font-bold tracking-wider uppercase text-saltora-text">Search Products</label>
                        <div class="relative">
                            <input type="text" x-model="searchQuery" placeholder="Search salt, pouch, lamp, 25kg..." class="w-full bg-[#FAF7F2] border border-saltora-border px-3.5 py-2 pl-9 pr-8 rounded-xs text-xs focus:outline-none focus:border-saltora-terracotta">
                            <svg class="w-4 h-4 text-stone-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            <button x-show="searchQuery" @click="searchQuery = ''" class="absolute right-2.5 top-1/2 -translate-y-1/2 text-stone-400 hover:text-stone-600 cursor-pointer text-xs">&times;</button>
                        </div>
                    </div>

                    <!-- Categories Filter Accordion -->
                    <div class="space-y-2 pt-2 border-t border-saltora-border/60">
                        <label class="block text-[11px] font-bold tracking-wider uppercase text-saltora-text">Categories</label>
                        <div class="space-y-1.5 text-xs max-h-72 overflow-y-auto pr-1">
                            <button @click="selectedCategory = ''; selectedSubcategory = ''" 
                                :class="selectedCategory === '' ? 'bg-saltora-terracotta text-white font-bold' : 'text-saltora-text hover:bg-stone-100'"
                                class="w-full text-left px-3 py-2 rounded-xs transition-colors flex items-center justify-between cursor-pointer">
                                <span>All Categories</span>
                                <span class="text-[10px] px-2 py-0.5 rounded-full" :class="selectedCategory === '' ? 'bg-white/20 text-white' : 'bg-stone-100 text-stone-600'">{{ count($categories) }}</span>
                            </button>

                            @foreach($categories as $cat)
                            <div class="space-y-1">
                                <button @click="selectedCategory = selectedCategory === '{{ $cat->id }}' ? '' : '{{ $cat->id }}'; selectedSubcategory = ''" 
                                    :class="selectedCategory === '{{ $cat->id }}' ? 'bg-saltora-terracotta text-white font-bold' : 'text-saltora-text hover:bg-stone-100'"
                                    class="w-full text-left px-3 py-2 rounded-xs transition-colors flex items-center justify-between cursor-pointer">
                                    <span class="truncate pr-2">{{ $cat->name }}</span>
                                    <span class="text-[10px] px-2 py-0.5 rounded-full shrink-0" :class="selectedCategory === '{{ $cat->id }}' ? 'bg-white/20 text-white' : 'bg-stone-100 text-stone-600'">{{ $cat->products_count }}</span>
                                </button>

                                <div x-show="selectedCategory === '{{ $cat->id }}'" class="pl-3 space-y-1 pt-1 border-l-2 border-saltora-terracotta/30 ml-2">
                                    @foreach($cat->subcategories as $sub)
                                    <button @click="selectedSubcategory = selectedSubcategory === '{{ $sub->id }}' ? '' : '{{ $sub->id }}'"
                                        :class="selectedSubcategory === '{{ $sub->id }}' ? 'text-saltora-terracotta font-bold border-b border-saltora-terracotta' : 'text-stone-600 hover:text-saltora-terracotta'"
                                        class="w-full text-left py-1 text-[11px] transition-colors cursor-pointer flex items-center justify-between pr-2">
                                        <span class="truncate">• {{ $sub->name }}</span>
                                        <span class="text-[9px] text-stone-400 shrink-0">({{ $sub->products_count }})</span>
                                    </button>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Grain Size / Mesh Filter Dynamic Quick Pills -->
                    @if(isset($grainSpecs) && count($grainSpecs) > 0)
                    <div class="space-y-2 pt-3 border-t border-saltora-border/60">
                        <div class="flex items-center justify-between">
                            <label class="block text-[11px] font-bold tracking-wider uppercase text-saltora-text">Salt Grain Spec</label>
                            <button x-show="selectedGrain" @click="selectedGrain = ''" class="text-[10px] text-saltora-terracotta hover:underline cursor-pointer">Clear</button>
                        </div>
                        <div class="flex flex-wrap gap-1.5 text-[11px]">
                            @foreach($grainSpecs as $spec)
                            <button @click="selectedGrain = selectedGrain === '{{ addslashes($spec) }}' ? '' : '{{ addslashes($spec) }}'" 
                                :class="selectedGrain === '{{ addslashes($spec) }}' ? 'bg-saltora-terracotta text-white font-bold' : 'bg-stone-50 hover:bg-stone-100 text-stone-700 border border-stone-200'"
                                class="px-2.5 py-1 rounded-xs transition-colors cursor-pointer">
                                {{ $spec }}
                            </button>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Packaging Format Dynamic Filter -->
                    @if(isset($packagingFormats) && count($packagingFormats) > 0)
                    <div class="space-y-2 pt-3 border-t border-saltora-border/60">
                        <div class="flex items-center justify-between">
                            <label class="block text-[11px] font-bold tracking-wider uppercase text-saltora-text">Packaging Format</label>
                            <button x-show="selectedPackaging" @click="selectedPackaging = ''" class="text-[10px] text-saltora-terracotta hover:underline cursor-pointer">Clear</button>
                        </div>
                        <div class="flex flex-wrap gap-1.5 text-[11px]">
                            @foreach($packagingFormats as $pkg)
                            <button @click="selectedPackaging = selectedPackaging === '{{ addslashes($pkg) }}' ? '' : '{{ addslashes($pkg) }}'"
                                :class="selectedPackaging === '{{ addslashes($pkg) }}' ? 'bg-saltora-terracotta text-white font-bold' : 'bg-stone-50 hover:bg-stone-100 text-stone-700 border border-stone-200'"
                                class="px-2.5 py-1 rounded-xs transition-colors cursor-pointer">
                                {{ $pkg }}
                            </button>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- B2B Direct Assistance Card -->
                    <div class="bg-[#FAF7F2] p-4 rounded-xs border border-saltora-border space-y-2.5 text-xs text-saltora-muted mt-4">
                        <div class="flex items-center gap-2 text-saltora-terracotta font-bold text-[11px] uppercase tracking-wider">
                            <i class="fa-solid fa-headset text-sm"></i>
                            <span>B2B Export Desk</span>
                        </div>
                        <p class="text-[11px] leading-relaxed">
                            Need a custom mesh formulation or private label packaging? Contact our export specialists directly.
                        </p>
                        <div class="pt-1 flex flex-col gap-1.5 text-[11px] font-semibold text-stone-800">
                            <a href="https://wa.me/923180735748" target="_blank" class="flex items-center gap-2 hover:text-emerald-700">
                                <i class="fa-brands fa-whatsapp text-emerald-600"></i>
                                <span>+92 318 0735748</span>
                            </a>
                            <a href="mailto:saltora1329@gmail.com" class="flex items-center gap-2 hover:text-saltora-terracotta truncate">
                                <i class="fa-regular fa-envelope text-stone-400"></i>
                                <span>saltora1329@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- RIGHT PRODUCTS GRID / LIST (9 Cols) -->
                <div class="lg:col-span-9 space-y-6">
                    
                    <!-- GRID VIEW MODE -->
                    <div x-show="viewMode === 'grid'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <template x-for="product in filteredProducts" :key="product.id">
                            <div class="bg-white border border-[#EAE5DC] rounded-xl p-4 sm:p-5 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-stone-200/50 hover:border-saltora-terracotta/40 group relative overflow-hidden">
                                <!-- Top Accent Hover Line -->
                                <div class="absolute top-0 left-0 w-full h-[3px] bg-gradient-to-r from-saltora-terracotta via-amber-600 to-saltora-terracotta scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

                                <div class="space-y-3">
                                    <!-- Image Container (16:10 ratio) -->
                                    <div class="relative aspect-[16/10] w-full overflow-hidden rounded-lg bg-[#FAF7F2] cursor-pointer group/img"
                                         @click="openQuickView(product)">
                                        <template x-if="product.image_url">
                                            <img :src="product.image_url" :alt="product.name" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                                        </template>
                                        <template x-if="!product.image_url">
                                            <div class="w-full h-full bg-gradient-to-br from-[#FAF7F2] via-stone-50 to-[#F2ECE1] flex flex-col items-center justify-center text-stone-400 gap-2 p-4 text-center">
                                                <div class="w-11 h-11 rounded-full bg-white shadow-xs border border-stone-200/80 flex items-center justify-center text-[#B87A62]/70 group-hover:scale-110 transition-transform">
                                                    <i class="fa-solid fa-cube text-base"></i>
                                                </div>
                                                <span class="text-[9px] uppercase font-bold tracking-widest text-stone-400">Pure Himalayan Salt</span>
                                            </div>
                                        </template>
                                        
                                        <!-- Subtle Overlay on Hover -->
                                        <div class="absolute inset-0 bg-stone-900/15 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>

                                        <!-- Optional Top Right Purity Badge -->
                                        <template x-if="product.purity">
                                            <div class="absolute top-2.5 right-2.5 z-10 pointer-events-none">
                                                <span class="bg-white/95 backdrop-blur-xs text-emerald-800 text-[9px] font-bold tracking-wider uppercase px-2 py-0.5 rounded-full shadow-xs border border-emerald-600/20" x-text="product.purity"></span>
                                            </div>
                                        </template>

                                        <!-- Center Hover Quick View Pill -->
                                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-20">
                                            <span class="bg-white/95 text-stone-800 text-[10px] font-bold tracking-wider px-3.5 py-1.5 rounded-full uppercase shadow-md border border-stone-200 flex items-center gap-1.5 hover:bg-saltora-terracotta hover:text-white transition-colors duration-200">
                                                <i class="fa-regular fa-eye text-xs"></i>
                                                Quick Specs
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Clean Category / Subcategory Line -->
                                    <div class="flex items-center gap-1.5 text-[11px] font-semibold tracking-wider uppercase text-saltora-terracotta truncate">
                                        <span x-text="product.category_name"></span>
                                        <template x-if="product.subcategory_name">
                                            <span class="text-stone-300">/</span>
                                        </template>
                                        <template x-if="product.subcategory_name">
                                            <span class="text-stone-500 font-normal truncate" x-text="product.subcategory_name"></span>
                                        </template>
                                    </div>

                                    <!-- Product Title -->
                                    <h3 class="font-serif text-lg text-saltora-text font-semibold group-hover:text-saltora-terracotta transition-colors duration-300 leading-snug line-clamp-1 cursor-pointer"
                                        @click="openQuickView(product)"
                                        x-text="product.name"></h3>

                                    <!-- Product Description (Clamped to 2 lines, only if not empty) -->
                                    <template x-if="product.description">
                                        <p class="text-xs text-saltora-muted leading-relaxed font-light line-clamp-2" x-text="product.description"></p>
                                    </template>
                                </div>

                                <!-- Action Buttons: Upgraded Details & Inquire (No Clutter on Outer Card) -->
                                <div class="pt-3 border-t border-[#F0EBE3] flex items-center gap-2 mt-4">
                                    <button @click="openQuickView(product)" 
                                            class="flex-1 py-2 px-3 rounded-lg border border-stone-200 hover:border-saltora-terracotta bg-white hover:bg-stone-50 text-stone-700 hover:text-saltora-terracotta text-xs font-semibold tracking-wider uppercase transition-all duration-200 flex items-center justify-center gap-1.5 cursor-pointer shadow-xs group/dtl">
                                        <i class="fa-regular fa-eye text-xs text-saltora-terracotta transition-transform group-hover/dtl:scale-110"></i>
                                        <span>Details</span>
                                    </button>
                                    <a :href="'/contact?product=' + encodeURIComponent(product.name) + '#contactForm'" 
                                       class="flex-1 py-2 px-3 rounded-lg bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white text-xs font-bold tracking-wider uppercase transition-all duration-200 flex items-center justify-center gap-1.5 cursor-pointer shadow-xs hover:shadow group/inq">
                                        <span>Inquire</span>
                                        <i class="fa-solid fa-arrow-right text-[10px] transition-transform group-hover/inq:translate-x-0.5"></i>
                                    </a>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- COMPACT SPEC LIST VIEW MODE -->
                    <div x-show="viewMode === 'compact'" class="space-y-3">
                        <template x-for="product in filteredProducts" :key="product.id">
                            <div class="bg-white border border-[#EAE5DC] rounded-xl p-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:border-saltora-terracotta/60 hover:shadow-md transition-all">
                                <div class="flex items-center gap-4">
                                    <template x-if="product.image_url">
                                        <img :src="product.image_url" :alt="product.name" class="w-16 h-16 rounded-lg object-cover bg-stone-100 shrink-0 border border-stone-200 cursor-pointer" @click="openQuickView(product)">
                                    </template>
                                    <template x-if="!product.image_url">
                                        <div class="w-16 h-16 rounded-lg bg-[#FAF7F2] border border-dashed border-stone-300 shrink-0 flex items-center justify-center text-stone-400 cursor-pointer" @click="openQuickView(product)">
                                            <i class="fa-solid fa-cube text-base text-stone-300"></i>
                                        </div>
                                    </template>
                                    <div class="space-y-1">
                                        <div class="flex items-center gap-1.5 text-[11px] font-semibold tracking-wider uppercase text-saltora-terracotta">
                                            <span x-text="product.category_name"></span>
                                            <template x-if="product.subcategory_name">
                                                <span class="text-stone-300">/</span>
                                            </template>
                                            <template x-if="product.subcategory_name">
                                                <span class="text-stone-500 font-normal" x-text="product.subcategory_name"></span>
                                            </template>
                                            <template x-if="product.grain_size">
                                                <span class="text-[9px] text-stone-500 font-semibold bg-stone-100 px-2 py-0.5 rounded-full ml-1" x-text="product.grain_size"></span>
                                            </template>
                                        </div>
                                        <h4 class="font-serif text-base font-bold text-saltora-text hover:text-saltora-terracotta transition-colors cursor-pointer" @click="openQuickView(product)" x-text="product.name"></h4>
                                        <div class="text-xs text-stone-500 flex flex-wrap items-center gap-3">
                                            <template x-if="product.packaging_type">
                                                <span>Packaging: <strong class="text-stone-700 font-medium" x-text="product.packaging_type"></strong></span>
                                            </template>
                                            <template x-if="product.moq">
                                                <span>MOQ: <strong class="text-stone-700 font-medium" x-text="product.moq"></strong></span>
                                            </template>
                                            <template x-if="product.purity">
                                                <span>Purity: <strong class="text-emerald-700 font-medium" x-text="product.purity"></strong></span>
                                            </template>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center gap-3 shrink-0 self-end sm:self-center">
                                    <div class="text-right mr-2 hidden md:block">
                                        <template x-if="product.price && product.price > 0">
                                            <div>
                                                <span class="text-base font-bold text-slate-900" x-text="'$' + Number(product.price).toFixed(2)"></span>
                                                <span class="text-[10px] text-stone-500" x-text="'/' + (product.price_unit ? product.price_unit.replace('/', '') : 'kg')"></span>
                                            </div>
                                        </template>
                                        <template x-if="!product.price || product.price <= 0">
                                            <span class="text-xs font-bold text-saltora-terracotta uppercase tracking-wider">Custom Quote</span>
                                        </template>
                                    </div>
                                    <button @click="openQuickView(product)" class="px-3 py-2 text-xs font-semibold border border-stone-200 hover:border-saltora-terracotta hover:text-saltora-terracotta rounded-lg transition-colors cursor-pointer">
                                        Specs
                                    </button>
                                    <a :href="'/contact?product=' + encodeURIComponent(product.name) + '#contactForm'" class="px-4 py-2 text-xs font-bold bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white rounded-lg shadow-xs transition-colors uppercase tracking-wider cursor-pointer">
                                        Inquire
                                    </a>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- EMPTY RESULTS STATE -->
                    <div x-show="filteredProducts.length === 0" x-cloak class="bg-white p-12 text-center rounded-sm border border-saltora-border space-y-4">
                        <div class="w-16 h-16 rounded-full bg-saltora-terracotta/10 text-saltora-terracotta flex items-center justify-center mx-auto text-2xl">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <h4 class="font-serif text-2xl text-saltora-text font-normal">No Products Found</h4>
                        <p class="text-xs text-saltora-muted max-w-md mx-auto leading-relaxed">
                            No export items matched your active filter criteria. Try adjusting the search term, selecting different grain specs, or clearing all filters.
                        </p>
                        <div class="pt-2 flex flex-wrap items-center justify-center gap-3">
                            <button @click="resetFilters()" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-6 py-2.5 text-xs font-bold tracking-wider uppercase transition-all shadow-sm rounded-xs cursor-pointer">
                                Reset All Filters
                            </button>
                            <a href="/contact" class="border border-stone-300 hover:border-saltora-text text-saltora-text px-6 py-2.5 text-xs font-bold tracking-wider uppercase transition-colors rounded-xs">
                                Contact Export Desk
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Fine print note -->
            <p class="text-xs text-saltora-muted/80 font-light text-center max-w-3xl mx-auto pt-6 leading-relaxed reveal-on-scroll reveal-from-bottom">
                Specifications, grain sizes and packaging formats are finalized with each buyer before quotation. If you need a format or particle mesh not listed here, mention it in your inquiry — we will confirm formulation availability honestly.
            </p>

        </div>

        <!-- MOBILE SLIDE-OVER FILTER DRAWER -->
        <div x-show="mobileFilterOpen" x-cloak class="fixed inset-0 z-50 overflow-hidden lg:hidden" role="dialog" aria-modal="true">
            <div class="absolute inset-0 bg-black/60 backdrop-blur-xs transition-opacity" @click="mobileFilterOpen = false"></div>
            <div class="fixed inset-y-0 right-0 max-w-full flex pl-10">
                <div class="w-screen max-w-md bg-white p-6 shadow-2xl flex flex-col justify-between overflow-y-auto">
                    <div class="space-y-6">
                        <div class="flex items-center justify-between border-b border-stone-200 pb-4">
                            <h3 class="font-serif text-xl font-bold text-saltora-text flex items-center gap-2">
                                <i class="fa-solid fa-sliders text-saltora-terracotta"></i>
                                <span>Filter & Sort</span>
                            </h3>
                            <button @click="mobileFilterOpen = false" class="text-stone-400 hover:text-stone-700 p-2 text-xl">&times;</button>
                        </div>

                        <!-- Mobile Search -->
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold uppercase text-stone-700">Search Products</label>
                            <input type="text" x-model="searchQuery" placeholder="Search salt, pouch, 25kg..." class="w-full bg-[#FAF7F2] border border-saltora-border px-3.5 py-2 rounded-xs text-xs">
                        </div>

                        <!-- Mobile Categories -->
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase text-stone-700">Category</label>
                            <select x-model="selectedCategory" @change="selectedSubcategory = ''" class="w-full bg-[#FAF7F2] border border-saltora-border px-3 py-2 rounded-xs text-xs">
                                <option value="">All Categories ({{ count($categories) }})</option>
                                @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }} ({{ $cat->products_count }})</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Mobile Subcategories -->
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <label class="text-xs font-bold uppercase text-stone-700">Subcategory</label>
                                <button x-show="selectedSubcategory" @click="selectedSubcategory = ''" class="text-[10px] text-saltora-terracotta hover:underline font-semibold cursor-pointer">Clear</button>
                            </div>
                            <select x-model="selectedSubcategory" class="w-full bg-[#FAF7F2] border border-saltora-border px-3 py-2 rounded-xs text-xs font-medium">
                                <option value="">All Subcategories</option>
                                @foreach($categories as $cat)
                                    <optgroup label="{{ $cat->name }}">
                                        @foreach($cat->subcategories as $sub)
                                        <option value="{{ $sub->id }}">{{ $sub->name }} ({{ $sub->products_count }})</option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                        </div>

                        <!-- Mobile Grain Spec -->
                        @if(isset($grainSpecs) && count($grainSpecs) > 0)
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase text-stone-700">Grain Spec</label>
                            <div class="grid grid-cols-2 gap-1.5 text-xs">
                                @foreach($grainSpecs as $spec)
                                <button @click="selectedGrain = selectedGrain === '{{ addslashes($spec) }}' ? '' : '{{ addslashes($spec) }}'" :class="selectedGrain === '{{ addslashes($spec) }}' ? 'bg-saltora-terracotta text-white font-bold' : 'bg-stone-100 text-stone-700'" class="p-2 rounded-xs text-left truncate">{{ $spec }}</button>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- Mobile Packaging -->
                        @if(isset($packagingFormats) && count($packagingFormats) > 0)
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase text-stone-700">Packaging</label>
                            <div class="grid grid-cols-2 gap-1.5 text-xs">
                                @foreach($packagingFormats as $pkg)
                                <button @click="selectedPackaging = selectedPackaging === '{{ addslashes($pkg) }}' ? '' : '{{ addslashes($pkg) }}'" :class="selectedPackaging === '{{ addslashes($pkg) }}' ? 'bg-saltora-terracotta text-white font-bold' : 'bg-stone-100 text-stone-700'" class="p-2 rounded-xs text-left truncate">{{ $pkg }}</button>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>

                    <!-- Bottom Buttons -->
                    <div class="pt-6 border-t border-stone-200 flex gap-3">
                        <button @click="resetFilters()" class="flex-1 py-3 border border-stone-300 text-stone-700 font-bold text-xs uppercase rounded-xs">
                            Reset
                        </button>
                        <button @click="mobileFilterOpen = false" class="flex-1 py-3 bg-saltora-terracotta text-white font-bold text-xs uppercase rounded-xs shadow-md">
                            Apply (<span x-text="filteredProducts.length"></span>)
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <!-- PACKAGING & PRIVATE LABEL OEM SOLUTIONS SECTION -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-saltora-bg border-t border-saltora-border/60">
        <div class="max-w-7xl mx-auto space-y-12">
            
            <div class="space-y-3 max-w-3xl reveal-on-scroll reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">PACKAGING & LOGISTICS</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    Packed the way your market needs it
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    Packaging is engineered according to buyer requirements, regulatory labeling, and shelf stability — from industrial bulk formats to supermarket-ready private label programs.
                </p>
            </div>

            <!-- 4 Packaging Photo Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Format 1 -->
                <div class="space-y-3 group cursor-pointer reveal-on-scroll reveal-from-bottom stagger-1 bg-white p-4 rounded-sm border border-saltora-border/70 hover:shadow-lg transition-all">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/packaging-fibc.jpg" alt="1-Ton Jumbo FIBC Big Bags Export Format" class="w-full h-48 object-cover transition-transform duration-700 ease-out group-hover:scale-105" onError="this.onerror=null;this.src='/bulk.jpg';">
                    </div>
                    <span class="text-[10px] font-bold uppercase text-saltora-terracotta tracking-wider">Heavy Industry</span>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">1-Ton Jumbo FIBC Bags</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Heavy-duty UV-stabilized woven polypropylene bags with bottom discharge spout for volume processors and container vessel loading.
                    </p>
                </div>

                <!-- Format 2 -->
                <div class="space-y-3 group cursor-pointer reveal-on-scroll reveal-from-bottom stagger-2 bg-white p-4 rounded-sm border border-saltora-border/70 hover:shadow-lg transition-all">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/packaging-pp-bags.jpg" alt="25 kg Food-Grade PP Bags Export Format" class="w-full h-48 object-cover transition-transform duration-700 ease-out group-hover:scale-105" onError="this.onerror=null;this.src='/product4.jpg';">
                    </div>
                    <span class="text-[10px] font-bold uppercase text-saltora-terracotta tracking-wider">Food Manufacturing</span>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">25 kg Food-Grade PP Bags</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Polypropylene woven bags lined with polyethylene moisture barriers (2kg, 5kg, 10kg, 25kg, 50kg) for bulk food manufacturers.
                    </p>
                </div>

                <!-- Format 3 -->
                <div class="space-y-3 group cursor-pointer reveal-on-scroll reveal-from-bottom stagger-3 bg-white p-4 rounded-sm border border-saltora-border/70 hover:shadow-lg transition-all">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/packaging-pouches.jpg" alt="Retail Stand-Up Zipper Pouches with Window" class="w-full h-48 object-cover transition-transform duration-700 ease-out group-hover:scale-105" onError="this.onerror=null;this.src='/bag1.jpg';">
                    </div>
                    <span class="text-[10px] font-bold uppercase text-saltora-terracotta tracking-wider">Retail Distribution</span>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Stand-Up Zipper Pouches</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Airtight kraft, matte finish, or high-barrier transparent foil stand-up pouches (200g to 1kg) with resealable zip-lock and tear notch.
                    </p>
                </div>

                <!-- Format 4 -->
                <div class="space-y-3 group cursor-pointer reveal-on-scroll reveal-from-bottom stagger-4 bg-white p-4 rounded-sm border border-saltora-border/70 hover:shadow-lg transition-all">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/packaging-grinders.jpg" alt="Gourmet Glass Spice Jars and Ceramic Grinder Bottles" class="w-full h-48 object-cover transition-transform duration-700 ease-out group-hover:scale-105" onError="this.onerror=null;this.src='/bag2.jpg';">
                    </div>
                    <span class="text-[10px] font-bold uppercase text-saltora-terracotta tracking-wider">Gourmet & OEM</span>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Jars & Ceramic Grinders</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Pre-filled clear PET shakers, luxury heavy flint glass jars, and refillable bottles fitted with corrosion-proof ceramic grinder tops.
                    </p>
                </div>

            </div>

            <!-- Soft Blush CTA Box -->
            <div class="bg-[#F5EAE6] p-8 sm:p-10 rounded-sm border border-saltora-terracotta/20 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 shadow-sm mt-8 reveal-on-scroll reveal-scale">
                <div class="space-y-2 max-w-2xl">
                    <h3 class="font-serif text-2xl sm:text-3xl text-saltora-text font-normal">
                        Need a custom private label formulation?
                    </h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Share your target grain size, pouch dimensions, barcode specifications, and destination port — Saltora will respond with a clear, written export proposal.
                    </p>
                </div>

                <div class="shrink-0 flex items-center gap-3">
                    <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-8 py-4 text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center gap-2 group cursor-pointer">
                        <span>REQUEST FORMULATION QUOTE</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- NEW SECTION: 20FT FCL CONTAINER LOAD & PALLETIZATION GUIDE -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-white border-t border-saltora-border/60">
        <div class="max-w-7xl mx-auto space-y-12">
            
            <div class="text-center max-w-3xl mx-auto space-y-3 reveal-on-scroll reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">OCEAN FREIGHT & CONTAINER LOGISTICS</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    Container Payloads & Palletization
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    Clear guidance on maximum payload capacities, palletized versus unpalletized container loading, and port documentation for international maritime shipments.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Card 1: Palletized 20ft FCL -->
                <div class="bg-saltora-bg p-6 sm:p-8 rounded-sm border border-saltora-border space-y-4 reveal-on-scroll reveal-from-bottom stagger-1">
                    <div class="w-12 h-12 rounded-full bg-saltora-terracotta/15 text-saltora-terracotta flex items-center justify-center text-xl">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <h3 class="font-serif text-2xl text-saltora-text font-semibold">20ft FCL Palletized</h3>
                    <p class="text-xs text-saltora-muted leading-relaxed">
                        Ideal for mechanized forklift unloading at modern distribution centers. Every pallet is strapped and shrink-wrapped with moisture-proof polyethylene film.
                    </p>
                    <ul class="text-xs text-stone-700 space-y-2 pt-2 border-t border-stone-200">
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-check text-emerald-600 text-[10px]"></i>
                            <span><strong>Capacity:</strong> 20 Euro/Standard Pallets</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-check text-emerald-600 text-[10px]"></i>
                            <span><strong>Payload:</strong> 20.0 to 24.0 Metric Tons</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-check text-emerald-600 text-[10px]"></i>
                            <span><strong>Protection:</strong> Corner guards & desiccant packs</span>
                        </li>
                    </ul>
                </div>

                <!-- Card 2: Floor Loaded 20ft FCL -->
                <div class="bg-saltora-bg p-6 sm:p-8 rounded-sm border border-saltora-border space-y-4 reveal-on-scroll reveal-from-bottom stagger-2">
                    <div class="w-12 h-12 rounded-full bg-saltora-terracotta/15 text-saltora-terracotta flex items-center justify-center text-xl">
                        <i class="fa-solid fa-dolly"></i>
                    </div>
                    <h3 class="font-serif text-2xl text-saltora-text font-semibold">20ft FCL Floor Loaded</h3>
                    <p class="text-xs text-saltora-muted leading-relaxed">
                        Maximizes freight payload per container. 25kg PP bags or retail master cartons are stacked floor-to-ceiling over corrugated container floor lining.
                    </p>
                    <ul class="text-xs text-stone-700 space-y-2 pt-2 border-t border-stone-200">
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-check text-emerald-600 text-[10px]"></i>
                            <span><strong>Capacity:</strong> Up to 1,040 x 25kg PP Bags</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-check text-emerald-600 text-[10px]"></i>
                            <span><strong>Payload:</strong> Up to 26.0 - 28.0 Metric Tons</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-check text-emerald-600 text-[10px]"></i>
                            <span><strong>Advantage:</strong> Lowest ocean freight per kg</span>
                        </li>
                    </ul>
                </div>

                <!-- Card 3: 1-Ton Jumbo Big Bags -->
                <div class="bg-saltora-bg p-6 sm:p-8 rounded-sm border border-saltora-border space-y-4 reveal-on-scroll reveal-from-bottom stagger-3">
                    <div class="w-12 h-12 rounded-full bg-saltora-terracotta/15 text-saltora-terracotta flex items-center justify-center text-xl">
                        <i class="fa-solid fa-ship"></i>
                    </div>
                    <h3 class="font-serif text-2xl text-saltora-text font-semibold">1-Ton Jumbo FIBC Loading</h3>
                    <p class="text-xs text-saltora-muted leading-relaxed">
                        Engineered for international chemical processors and salt repacking plants. Fitted with 4 heavy-duty lifting loops for overhead crane discharge.
                    </p>
                    <ul class="text-xs text-stone-700 space-y-2 pt-2 border-t border-stone-200">
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-check text-emerald-600 text-[10px]"></i>
                            <span><strong>Capacity:</strong> 20 to 26 Jumbo Bags</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-check text-emerald-600 text-[10px]"></i>
                            <span><strong>Payload:</strong> 20.0 to 26.0 Metric Tons</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-check text-emerald-600 text-[10px]"></i>
                            <span><strong>Loading Port:</strong> Port Qasim / Karachi Port</span>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- NEW SECTION: B2B FREQUENTLY ASKED QUESTIONS ACCORDION -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-saltora-bg border-t border-saltora-border/60" x-data="{ activeFaq: 1 }">
        <div class="max-w-4xl mx-auto space-y-12">
            
            <div class="text-center space-y-3 reveal-on-scroll reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">PROCUREMENT & SOURCING FAQ</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    Frequently Asked Questions
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    Direct answers regarding minimum order quantities, private label lead times, export documentation, and sample policies.
                </p>
            </div>

            <!-- FAQ Accordion List -->
            <div class="space-y-4">
                
                <!-- FAQ 1 -->
                <div class="bg-white border border-saltora-border rounded-sm overflow-hidden transition-all shadow-xs">
                    <button @click="activeFaq = activeFaq === 1 ? null : 1" class="w-full p-5 text-left font-serif text-lg text-saltora-text font-semibold flex items-center justify-between cursor-pointer">
                        <span>What is your standard Minimum Order Quantity (MOQ)?</span>
                        <i class="fa-solid text-saltora-terracotta text-sm transition-transform" :class="activeFaq === 1 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="activeFaq === 1" x-collapse class="px-5 pb-5 text-xs text-saltora-muted leading-relaxed font-light border-t border-stone-100 pt-3">
                        Our standard export MOQ for full container load (FCL) shipments is one 20ft container (approx. 20-25 Metric Tons). For retail packaged pouches and specialty salt lamps, we also accommodate mixed container orders or LCL consolidated trial orders for qualifying commercial distributors.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white border border-saltora-border rounded-sm overflow-hidden transition-all shadow-xs">
                    <button @click="activeFaq = activeFaq === 2 ? null : 2" class="w-full p-5 text-left font-serif text-lg text-saltora-text font-semibold flex items-center justify-between cursor-pointer">
                        <span>Can you produce private-label packaging with our custom brand artwork?</span>
                        <i class="fa-solid text-saltora-terracotta text-sm transition-transform" :class="activeFaq === 2 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="activeFaq === 2" x-collapse class="px-5 pb-5 text-xs text-saltora-muted leading-relaxed font-light border-t border-stone-100 pt-3">
                        Yes. We provide complete OEM private label manufacturing. We print rotogravure stand-up barrier pouches (kraft or matte film), customized retail shaker jars with tamper seals, and branded 5-ply export master cartons according to your exact dieline artwork, languages, and barcode requirements.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white border border-saltora-border rounded-sm overflow-hidden transition-all shadow-xs">
                    <button @click="activeFaq = activeFaq === 3 ? null : 3" class="w-full p-5 text-left font-serif text-lg text-saltora-text font-semibold flex items-center justify-between cursor-pointer">
                        <span>Do you provide Certificate of Analysis (COA) and independent inspection?</span>
                        <i class="fa-solid text-saltora-terracotta text-sm transition-transform" :class="activeFaq === 3 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="activeFaq === 3" x-collapse class="px-5 pb-5 text-xs text-saltora-muted leading-relaxed font-light border-t border-stone-100 pt-3">
                        Every export lot is issued a comprehensive batch Certificate of Analysis (COA) specifying NaCl purity (&ge; 98.5%), moisture content (&le; 0.2%), insoluble matter, and heavy metals (Lead, Arsenic, Cadmium, Mercury well below Codex limits). We welcome pre-shipment inspections by SGS, Intertek, or Bureau Veritas at the loading facility.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white border border-saltora-border rounded-sm overflow-hidden transition-all shadow-xs">
                    <button @click="activeFaq = activeFaq === 4 ? null : 4" class="w-full p-5 text-left font-serif text-lg text-saltora-text font-semibold flex items-center justify-between cursor-pointer">
                        <span>How can we request product sample kits before placing a contract?</span>
                        <i class="fa-solid text-saltora-terracotta text-sm transition-transform" :class="activeFaq === 4 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="activeFaq === 4" x-collapse class="px-5 pb-5 text-xs text-saltora-muted leading-relaxed font-light border-t border-stone-100 pt-3">
                        We send sample kits containing our calibrated grain mesh sizes (Fine, Medium, Coarse, Crystal) and pouch formats via DHL / FedEx international air courier. Samples are provided complimentary for verified corporate buyers; air courier freight is credited back against your initial container commercial order.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white border border-saltora-border rounded-sm overflow-hidden transition-all shadow-xs">
                    <button @click="activeFaq = activeFaq === 5 ? null : 5" class="w-full p-5 text-left font-serif text-lg text-saltora-text font-semibold flex items-center justify-between cursor-pointer">
                        <span>Which international shipping Incoterms and payment methods do you support?</span>
                        <i class="fa-solid text-saltora-terracotta text-sm transition-transform" :class="activeFaq === 5 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="activeFaq === 5" x-collapse class="px-5 pb-5 text-xs text-saltora-muted leading-relaxed font-light border-t border-stone-100 pt-3">
                        We quote FOB Karachi Port / Port Qasim, CFR destination port, or CIF destination port with comprehensive marine insurance. We accept Telegraphic Transfer (T/T) and Irrevocable Confirmed Letter of Credit (L/C at sight) through top-tier international banking channels.
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- HIGH CONVERTING CLOSING CTA BANNER -->
    <section class="py-16 md:py-20 px-6 md:px-12 bg-saltora-dark text-white border-t border-saltora-dark-border">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8 text-center md:text-left">
            <div class="space-y-3 max-w-2xl">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">B2B EXPORT CONTRACTS</span>
                <h3 class="text-3xl sm:text-4xl font-serif text-white font-normal leading-tight">
                    Ready to source direct from Pakistan's Salt Range?
                </h3>
                <p class="text-stone-300 text-xs sm:text-sm font-light leading-relaxed">
                    Contact our export desk for formal proforma invoices, FOB/CIF container pricing, and sample kit shipments.
                </p>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-3.5 shrink-0">
                <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase transition-all shadow-lg flex items-center gap-2 rounded-xs">
                    <i class="fa-solid fa-file-invoice text-amber-200"></i>
                    <span>REQUEST FORMAL QUOTE</span>
                </a>
                <a href="https://wa.me/923180735748" target="_blank" class="bg-emerald-700 hover:bg-emerald-800 text-white px-7 py-3.5 text-xs font-bold tracking-wider uppercase transition-all shadow-lg flex items-center gap-2 rounded-xs">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    <span>WHATSAPP DESK</span>
                </a>
            </div>
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <x-footer />

    <!-- PRODUCT QUICK VIEW / SPECIFICATION MODAL -->
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
                        <!-- TOP IMAGE (Small, Framed with Rounded Corners) -->
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

                        <!-- CONTENT BELOW BLOCK (Clean, Padded Inside, Balanced) -->
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

                            <!-- Product Description (if available) -->
                            <template x-if="selectedProduct.description">
                                <p class="text-xs text-stone-600 font-light leading-relaxed line-clamp-2" x-text="selectedProduct.description"></p>
                            </template>

                            <!-- Modern Price & MOQ Card -->
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

                            <!-- Specs Metric Grid (Clean Modern Cards) -->
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

                            <!-- Modern Action Buttons -->
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

    <!-- SEO NOSCRIPT FALLBACK FOR STATIC WEB CRAWLERS -->
    <noscript>
        <div class="max-w-7xl mx-auto px-6 py-12">
            <h2 class="text-2xl font-serif font-bold mb-6">Complete Himalayan Pink Salt Products Directory</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($products as $p)
                <div class="border p-4 bg-white">
                    <h3 class="font-bold text-lg">{{ $p->name }}</h3>
                    <p class="text-sm text-stone-600">{{ $p->description }}</p>
                    <p class="text-xs text-stone-500 mt-2">Category: {{ $p->categoryRef->name ?? $p->category }} | Grain: {{ $p->grain_size }} | Purity: {{ $p->purity }}</p>
                    <a href="/contact?product={{ urlencode($p->name) }}#contactForm" class="text-xs text-saltora-terracotta font-bold underline mt-2 block">Request Quote for {{ $p->name }}</a>
                </div>
                @endforeach
            </div>
        </div>
    </noscript>

</body>
</html>
