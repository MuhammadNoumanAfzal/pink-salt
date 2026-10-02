<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products — SALTORA | Export-Ready Himalayan Pink Salt Range</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Explore SALTORA's export-ready Himalayan pink salt range: Fine, Coarse, Granules, Lumps, Industrial Salt, and OEM Private Label packaging.">
    <meta name="keywords" content="Pink Salt Products, Fine Pink Salt, Coarse Salt, Himalayan Granules, Salt Lumps, Private Label Salt, Saltora Products">
    
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
                <a href="/products" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1 cursor-pointer">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors cursor-pointer">CERTIFICATIONS</a>
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
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-terracotta font-bold cursor-pointer">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CONTACT</a>
            {{--
            <!-- SHOPPING CART COMMENTED OUT -->
            <button @click="mobileMenuOpen = false; openCartSidebar()" class="flex items-center justify-center gap-2 w-full mt-4 bg-saltora-terracotta text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer rounded-xs shadow-md">
                <i class="fa-solid fa-cart-shopping text-amber-200 text-sm"></i>
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

    <!-- PRODUCTS HERO SECTION -->
    <section class="relative bg-saltora-dark text-white py-24 md:py-32 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border">
        <!-- Backdrop Image (`heroimg.jpg`) - Brighter & Warm -->
        <img src="/heroimg.jpg" alt="Salt Crystals Backdrop" class="absolute inset-0 w-full h-full object-cover opacity-65 filter brightness-105 contrast-105 pointer-events-none transition-transform duration-1000 scale-105">
        <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/55 to-black/35 pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto flex flex-col md:flex-row md:items-end justify-between gap-8">
            <div class="space-y-6 max-w-3xl animate-hero-left">
                <!-- Category Sub-tag -->
                <div class="flex items-center gap-3 text-xs font-bold tracking-mega text-saltora-terracotta uppercase">
                    <span class="w-8 h-px bg-saltora-terracotta"></span>
                    <span>EXPORT RANGE & CATALOG</span>
                </div>

                <!-- Headline -->
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-serif text-white font-normal leading-[1.08]">
                    The Saltora product range
                </h1>

                <!-- Paragraph -->
                <p class="text-stone-300 text-base sm:text-lg leading-relaxed font-light max-w-2xl">
                    Realistic, export-ready Himalayan pink salt categories for international B2B buyers — prepared to agreed specifications, with packaging discussed per requirement.
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
                            <span class="block text-2xl font-serif font-bold text-white">7+ RANGE</span>
                            <span class="text-[10px] text-stone-300 uppercase tracking-wider font-medium">Export Standard Grades</span>
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
                <span class="flex items-center gap-2">✦ 98.5%+ PURE NaCl</span>
                <span class="flex items-center gap-2">✦ ISO & HALAL CERTIFIED</span>
                <span class="flex items-center gap-2">✦ PRIVATE LABEL OEM PACKAGING</span>
                <span class="flex items-center gap-2">✦ DIRECT FROM PAKISTAN SALT RANGE</span>
                <span class="flex items-center gap-2">✦ BULK & RETAIL EXPORT READY</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 98.5%+ PURE NaCl</span>
                <span class="flex items-center gap-2">✦ ISO & HALAL CERTIFIED</span>
                <span class="flex items-center gap-2">✦ PRIVATE LABEL OEM PACKAGING</span>
                <span class="flex items-center gap-2">✦ DIRECT FROM PAKISTAN SALT RANGE</span>
                <span class="flex items-center gap-2">✦ BULK & RETAIL EXPORT READY</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 98.5%+ PURE NaCl</span>
                <span class="flex items-center gap-2">✦ ISO & HALAL CERTIFIED</span>
                <span class="flex items-center gap-2">✦ PRIVATE LABEL OEM PACKAGING</span>
                <span class="flex items-center gap-2">✦ DIRECT FROM PAKISTAN SALT RANGE</span>
                <span class="flex items-center gap-2">✦ BULK & RETAIL EXPORT READY</span>
            </div>
        </div>
    </div>

    <!-- E-COMMERCE PRODUCTS CATALOG    <section class="py-16 md:py-24 px-6 md:px-12 bg-saltora-bg" x-data="{
        selectedCategory: '',
        selectedSubcategory: '',
        selectedGrain: '',
        searchQuery: '',
        sortBy: 'latest',
        resetFilters() {
            this.selectedCategory = '';
            this.selectedSubcategory = '';
            this.selectedGrain = '';
            this.searchQuery = '';
            this.sortBy = 'latest';
        },
        matchesProduct(pCatId, pSubId, pName, pDesc, pCategory, pGrain, pPackaging) {
            if (this.selectedCategory && String(pCatId) !== String(this.selectedCategory) && String(pCategory).toLowerCase() !== String(this.selectedCategory).toLowerCase()) {
                return false;
            }
            if (this.selectedSubcategory && String(pSubId) !== String(this.selectedSubcategory)) {
                return false;
            }
            if (this.selectedGrain) {
                const g = this.selectedGrain.toLowerCase();
                const grainText = String(pGrain || '').toLowerCase();
                const nameText = String(pName || '').toLowerCase();
                if (!grainText.includes(g) && !nameText.includes(g)) return false;
            }
            if (this.searchQuery) {
                const q = this.searchQuery.toLowerCase();
                const matchName = String(pName).toLowerCase().includes(q);
                const matchDesc = String(pDesc).toLowerCase().includes(q);
                const matchGrain = String(pGrain || '').toLowerCase().includes(q);
                const matchPack = String(pPackaging || '').toLowerCase().includes(q);
                if (!matchName && !matchDesc && !matchGrain && !matchPack) return false;
            }
            return true;
        }
    }">
        <div class="max-w-7xl mx-auto space-y-12">
            
            <!-- Section Title Reveal -->
            <div class="text-center max-w-3xl mx-auto space-y-3 reveal-on-scroll reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">EXPORT CATALOG & SELECTION</span>
                <h2 class="text-3xl sm:text-5xl font-serif text-saltora-text font-normal">
                    Explore Our Product Line
                </h2>
                <p class="text-saltora-muted text-sm sm:text-base font-light">
                    From food-grade fine & coarse salt in zip pouches, PET jars, and 25kg PP bags to hand-crafted salt lamps and 1-ton bulk jumbo export bags.
                </p>
            </div>

            <!-- Main Layout: Left Sidebar + Right Products Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- LEFT E-COMMERCE SIDEBAR FILTERS (3 Cols) -->
                <aside class="lg:col-span-3 space-y-6 bg-white p-6 border border-saltora-border rounded-sm shadow-xs sticky top-24">
                    <div class="flex items-center justify-between border-b border-saltora-border pb-4">
                        <h3 class="font-serif text-lg font-bold text-saltora-text flex items-center gap-2">
                            <svg class="w-4 h-4 text-saltora-terracotta" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                            </svg>
                            <span>Filter Catalog</span>
                        </h3>
                        <button @click="resetFilters()" x-show="selectedCategory || selectedSubcategory || selectedGrain || searchQuery" x-cloak class="text-[11px] text-saltora-terracotta hover:underline font-bold uppercase tracking-wider cursor-pointer">
                            Reset All
                        </button>
                    </div>

                    <!-- Search Input Box -->
                    <div class="space-y-2">
                        <label class="block text-[11px] font-bold tracking-wider uppercase text-saltora-text">Search Products</label>
                        <div class="relative">
                            <input type="text" x-model="searchQuery" placeholder="Search salt, pouch, lamp, 25kg..." class="w-full bg-[#FAF7F2] border border-saltora-border px-3.5 py-2 pl-9 rounded-xs text-xs focus:outline-none focus:border-saltora-terracotta">
                            <svg class="w-4 h-4 text-stone-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Grain Size / Mesh Filter Quick Pills -->
                    <div class="space-y-2 pt-2 border-t border-saltora-border/60">
                        <label class="block text-[11px] font-bold tracking-wider uppercase text-saltora-text">Salt Grain / Spec</label>
                        <div class="flex flex-wrap gap-1.5 text-[11px]">
                            <button @click="selectedGrain = selectedGrain === 'Fine' ? '' : 'Fine'" 
                                :class="selectedGrain === 'Fine' ? 'bg-saltora-terracotta text-white font-bold' : 'bg-stone-50 hover:bg-stone-100 text-stone-700 border border-stone-200'"
                                class="px-2.5 py-1 rounded-xs transition-colors cursor-pointer">
                                Fine (0.3-0.8mm)
                            </button>
                            <button @click="selectedGrain = selectedGrain === 'Medium' ? '' : 'Medium'" 
                                :class="selectedGrain === 'Medium' ? 'bg-saltora-terracotta text-white font-bold' : 'bg-stone-50 hover:bg-stone-100 text-stone-700 border border-stone-200'"
                                class="px-2.5 py-1 rounded-xs transition-colors cursor-pointer">
                                Medium (0.8-2mm)
                            </button>
                            <button @click="selectedGrain = selectedGrain === 'Coarse' ? '' : 'Coarse'" 
                                :class="selectedGrain === 'Coarse' ? 'bg-saltora-terracotta text-white font-bold' : 'bg-stone-50 hover:bg-stone-100 text-stone-700 border border-stone-200'"
                                class="px-2.5 py-1 rounded-xs transition-colors cursor-pointer">
                                Coarse (2-5mm)
                            </button>
                            <button @click="selectedGrain = selectedGrain === 'Crystal' ? '' : 'Crystal'" 
                                :class="selectedGrain === 'Crystal' ? 'bg-saltora-terracotta text-white font-bold' : 'bg-stone-50 hover:bg-stone-100 text-stone-700 border border-stone-200'"
                                class="px-2.5 py-1 rounded-xs transition-colors cursor-pointer">
                                Crystal (5-8mm)
                            </button>
                            <button @click="selectedGrain = selectedGrain === 'Lamp' ? '' : 'Lamp'" 
                                :class="selectedGrain === 'Lamp' ? 'bg-saltora-terracotta text-white font-bold' : 'bg-stone-50 hover:bg-stone-100 text-stone-700 border border-stone-200'"
                                class="px-2.5 py-1 rounded-xs transition-colors cursor-pointer">
                                Salt Lamps
                            </button>
                        </div>
                    </div>

                    <!-- Categories Filter Accordion -->
                    <div class="space-y-3 pt-2">
                        <label class="block text-[11px] font-bold tracking-wider uppercase text-saltora-text border-b border-saltora-border/60 pb-1.5">Categories</label>
                        <div class="space-y-1.5 text-xs">
                            <button @click="selectedCategory = ''; selectedSubcategory = ''" 
                                :class="selectedCategory === '' ? 'bg-saltora-terracotta text-white font-bold' : 'text-saltora-text hover:bg-stone-100'"
                                class="w-full text-left px-3 py-2 rounded-xs transition-colors flex items-center justify-between cursor-pointer">
                                <span>All Categories</span>
                                <span class="text-[10px] px-2 py-0.5 rounded-full" :class="selectedCategory === '' ? 'bg-white/20 text-white' : 'bg-stone-100 text-stone-600'">{{ count($products) }}</span>
                            </button>

                            @foreach($categories as $cat)
                            <div class="space-y-1">
                                <button @click="selectedCategory = selectedCategory === '{{ $cat->id }}' ? '' : '{{ $cat->id }}'; selectedSubcategory = ''" 
                                    :class="selectedCategory === '{{ $cat->id }}' ? 'bg-saltora-terracotta text-white font-bold' : 'text-saltora-text hover:bg-stone-100'"
                                    class="w-full text-left px-3 py-2 rounded-xs transition-colors flex items-center justify-between cursor-pointer">
                                    <span>{{ $cat->name }}</span>
                                    <span class="text-[10px] px-2 py-0.5 rounded-full" :class="selectedCategory === '{{ $cat->id }}' ? 'bg-white/20 text-white' : 'bg-stone-100 text-stone-600'">{{ $cat->products_count }}</span>
                                </button>

                                <div x-show="selectedCategory === '{{ $cat->id }}'" class="pl-3 space-y-1 pt-1 border-l-2 border-saltora-terracotta/30 ml-2">
                                    @foreach($cat->subcategories as $sub)
                                    <button @click="selectedSubcategory = selectedSubcategory === '{{ $sub->id }}' ? '' : '{{ $sub->id }}'"
                                        :class="selectedSubcategory === '{{ $sub->id }}' ? 'text-saltora-terracotta font-bold border-b border-saltora-terracotta' : 'text-stone-600 hover:text-saltora-terracotta'"
                                        class="block w-full text-left py-1 text-[11px] transition-colors cursor-pointer flex items-center justify-between pr-2">
                                        <span>• {{ $sub->name }}</span>
                                        <span class="text-[9px] text-stone-400">({{ $sub->products_count }})</span>
                                    </button>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- B2B Quick Note -->
                    <div class="bg-[#FAF7F2] p-4 rounded-xs border border-saltora-border space-y-2 text-[11px] text-saltora-muted mt-4">
                        <span class="font-bold uppercase tracking-wider text-saltora-terracotta block">B2B Direct Supply</span>
                        <p class="leading-relaxed">All products support custom export packaging: pouches (200g-1kg), food-grade PP bags (2kg-25kg), 1-ton jumbo bags, or private-label master cartons.</p>
                    </div>
                </aside>

                <!-- RIGHT PRODUCTS GRID (9 Cols) -->
                <div class="lg:col-span-9 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @forelse($products as $product)
                        <div x-show="matchesProduct('{{ $product->category_id }}', '{{ $product->subcategory_id }}', '{{ addslashes($product->name) }}', '{{ addslashes($product->description) }}', '{{ addslashes($product->category) }}', '{{ addslashes($product->grain_size ?? $product->mesh_size ?? '') }}', '{{ addslashes($product->packaging_type ?? $product->packaging ?? '') }}')" 
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform scale-95"
                             x-transition:enter-end="opacity-100 transform scale-100"
                             class="bg-white border border-saltora-border/80 rounded-xl p-4.5 sm:p-5 flex flex-col justify-between transition-all duration-500 hover:-translate-y-1.5 hover:shadow-xl hover:shadow-saltora-terracotta/10 hover:border-saltora-terracotta/50 group relative overflow-hidden reveal-on-scroll reveal-scale">
                            <!-- Top Gradient Accent Hover Line -->
                            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-saltora-terracotta via-amber-600 to-saltora-terracotta scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

                            <div class="space-y-3">
                                <!-- Image Container with Floating Badges & Quick View Overlay (16:9 ratio) -->
                                <div class="relative aspect-[16/9] w-full overflow-hidden rounded-lg bg-saltora-card cursor-pointer group/img" 
                                     @click="openQuickView({
                                         name: '{{ addslashes($product->name) }}', 
                                         img: '{{ $product->image_url }}', 
                                         category: '{{ addslashes($product->category) }}',
                                         catName: '{{ addslashes($product->categoryRef->name ?? $product->category) }}',
                                         subCatName: '{{ addslashes($product->subcategoryRef->name ?? '') }}',
                                         tags: ['{{ addslashes(strtoupper($product->categoryRef->name ?? $product->category)) }}', '{{ addslashes(strtoupper($product->packaging_type ?? $product->packaging ?? "EXPORT GRADE")) }}'], 
                                         desc: '{{ addslashes($product->description) }}', 
                                         price: '{{ $product->formatted_price }}',
                                         moq: '{{ addslashes($product->moq ?? "Contact Export Desk") }}',
                                         packaging: '{{ addslashes($product->packaging_type ?? $product->packaging ?? "Export Standard") }}',
                                         package_weight: '{{ addslashes($product->package_weight ?? "Standard Size") }}',
                                         specs: {
                                             grade: '{{ addslashes($product->grade ?? "Food Grade ISO-22000") }}', 
                                             grain: '{{ addslashes($product->grain_size ?? $product->mesh_size ?? "Standard") }}', 
                                             purity: '{{ addslashes($product->purity ?? "98.5%+ NaCl") }}', 
                                             origin: '{{ addslashes($product->origin ?? "Khewra Salt Range, Pakistan") }}',
                                             packaging: '{{ addslashes($product->packaging_type ?? $product->packaging ?? "Standard PP/Pouch") }}',
                                             weight: '{{ addslashes($product->package_weight ?? "N/A") }}'
                                         }
                                     })">
                                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-108" onError="this.onerror=null;this.src='/product1.jpg';">
                                    
                                    <!-- Dark Overlay Gradient on Hover -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/15 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>

                                    <!-- Top Left Packaging / Weight Badge -->
                                    <div class="absolute top-2.5 left-2.5 z-10 pointer-events-none flex flex-col gap-1">
                                        @if($product->package_weight)
                                        <span class="bg-slate-900/90 backdrop-blur-md text-white text-[9px] font-bold tracking-wider uppercase px-2 py-0.5 rounded-sm shadow-xs flex items-center gap-1">
                                            <i class="fa-solid fa-weight-hanging text-[8px] text-[#e07a5f]"></i>
                                            {{ $product->package_weight }}
                                        </span>
                                        @endif
                                    </div>

                                    <!-- Top Right Purity Badge -->
                                    <div class="absolute top-2.5 right-2.5 z-10 pointer-events-none">
                                        <span class="bg-white/90 backdrop-blur-md text-saltora-terracotta text-[9px] font-bold tracking-widest uppercase px-2.5 py-0.5 rounded-full shadow-xs border border-saltora-terracotta/20 flex items-center gap-1">
                                            <i class="fa-solid fa-sparkles text-[8px]"></i>
                                            {{ $product->purity ?? '98.5%+' }}
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

                                <!-- Product Category & Subcategory Tag Pills -->
                                <div class="flex flex-wrap items-center gap-1.5">
                                    <span class="text-[9px] font-bold tracking-wider text-saltora-terracotta border border-saltora-terracotta/20 px-2 py-0.5 rounded-full uppercase bg-saltora-blush/60">
                                        {{ $product->categoryRef->name ?? $product->category }}
                                    </span>
                                    @if($product->grain_size && !str_contains($product->grain_size, 'Not Applicable'))
                                    <span class="text-[9px] font-semibold tracking-wider text-slate-700 border border-slate-200 px-2 py-0.5 rounded-full uppercase bg-slate-50">
                                        {{ $product->grain_size }}
                                    </span>
                                    @elseif($product->packaging_type)
                                    <span class="text-[9px] font-semibold tracking-wider text-slate-700 border border-slate-200 px-2 py-0.5 rounded-full uppercase bg-slate-50">
                                        {{ $product->packaging_type }}
                                    </span>
                                    @endif
                                </div>

                                <!-- Product Title -->
                                <h3 class="font-serif text-lg text-saltora-text font-semibold group-hover:text-saltora-terracotta transition-colors duration-300 leading-snug line-clamp-1">
                                    {{ $product->name }}
                                </h3>

                                <!-- Product Description -->
                                <p class="text-xs text-saltora-muted leading-relaxed font-normal line-clamp-2">
                                    {{ $product->description }}
                                </p>

                                <!-- Price & MOQ Row -->
                                <div class="pt-2 flex items-baseline justify-between border-t border-slate-100">
                                    <div>
                                        @if($product->price && $product->price > 0)
                                        <div class="flex items-baseline gap-1">
                                            <span class="text-base font-bold text-slate-900">${{ number_format($product->price, 2) }}</span>
                                            <span class="text-[10px] text-slate-500 font-semibold">/ {{ ltrim($product->price_unit ?? 'kg', '/') }}</span>
                                        </div>
                                        @else
                                        <span class="text-[11px] font-bold text-[#e07a5f] uppercase tracking-wider">Custom Quote</span>
                                        @endif
                                    </div>
                                    @if($product->moq)
                                    <div class="text-[10px] text-slate-400 font-medium truncate max-w-[130px]">
                                        MOQ: {{ $product->moq }}
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <!-- Side-by-Side Action Buttons -->
                            <div class="pt-3 border-t border-saltora-border/60 mt-3 flex items-center gap-2">
                                {{--
                                <!-- ADD TO CART COMMENTED OUT -->
                                <button @click="addToCart('{{ addslashes($product->name) }}')" class="flex-1 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2 px-3 text-[10px] font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-1.5 cursor-pointer shadow-xs hover:shadow rounded-md group/btn relative overflow-hidden">
                                    <svg class="w-3.5 h-3.5 shrink-0 transition-transform duration-300 group-hover/btn:scale-110 group-hover/btn:-rotate-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                                    </svg>
                                    <span class="truncate">ADD TO CART</span>
                                </button>
                                --}}
                                <a href="/contact?product={{ urlencode($product->name) }}#contactForm" class="flex-1 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-2 px-3 text-[10px] font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-1.5 cursor-pointer shadow-xs hover:shadow rounded-md group/btn relative overflow-hidden">
                                    <i class="fa-solid fa-file-invoice text-amber-200 text-[10px] transition-transform duration-300 group-hover/btn:translate-x-0.5"></i>
                                    <span class="truncate">REQUEST A QUOTE</span>
                                </a>
                                <button @click="openQuickView({
                                    name: '{{ addslashes($product->name) }}', 
                                    img: '{{ $product->image_url }}', 
                                    category: '{{ addslashes($product->category) }}',
                                    catName: '{{ addslashes($product->categoryRef->name ?? $product->category) }}',
                                    subCatName: '{{ addslashes($product->subcategoryRef->name ?? '') }}',
                                    tags: ['{{ addslashes(strtoupper($product->categoryRef->name ?? $product->category)) }}', '{{ addslashes(strtoupper($product->packaging_type ?? $product->packaging ?? "EXPORT GRADE")) }}'], 
                                    desc: '{{ addslashes($product->description) }}', 
                                    price: '{{ $product->formatted_price }}',
                                    moq: '{{ addslashes($product->moq ?? "Contact Export Desk") }}',
                                    packaging: '{{ addslashes($product->packaging_type ?? $product->packaging ?? "Export Standard") }}',
                                    package_weight: '{{ addslashes($product->package_weight ?? "Standard Size") }}',
                                    specs: {
                                        grade: '{{ addslashes($product->grade ?? "Food Grade ISO-22000") }}', 
                                        grain: '{{ addslashes($product->grain_size ?? $product->mesh_size ?? "Standard") }}', 
                                        purity: '{{ addslashes($product->purity ?? "98.5%+ NaCl") }}', 
                                        origin: '{{ addslashes($product->origin ?? "Khewra Salt Range, Pakistan") }}',
                                        packaging: '{{ addslashes($product->packaging_type ?? $product->packaging ?? "Standard PP/Pouch") }}',
                                        weight: '{{ addslashes($product->package_weight ?? "N/A") }}'
                                    }
                                })" class="flex-1 border border-saltora-text/25 hover:border-saltora-terracotta hover:text-saltora-terracotta bg-white hover:bg-saltora-blush-light text-saltora-text py-2 px-3 text-[10px] font-bold tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-1.5 cursor-pointer rounded-md group/btn">
                                    <svg class="w-3.5 h-3.5 shrink-0 text-saltora-muted group-hover/btn:text-saltora-terracotta transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                    <span class="truncate group-hover/btn:translate-x-0.5 transition-transform duration-300">DETAILS</span>
                                </button>
                            </div>
                        </div>
                        @empty
                        <div class="col-span-full bg-white p-12 text-center rounded-sm border border-saltora-border space-y-4">
                            <svg class="w-12 h-12 text-saltora-terracotta mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                            </svg>
                            <h4 class="font-serif text-2xl text-saltora-text font-normal">Export Catalog Updating</h4>
                            <p class="text-xs text-saltora-muted max-w-md mx-auto leading-relaxed">Our product line is currently being refreshed. Please contact our export desk directly or request a custom quotation tailored to your specifications.</p>
                            <a href="/contact" class="inline-flex items-center gap-2 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-6 py-2.5 text-xs font-bold tracking-wider uppercase transition-all shadow-sm">
                                <span>CONTACT EXPORT DESK</span>
                            </a>
                        </div>
                        @endforelse
                    </div>
                    </div>

            <!-- Fine print note -->
            <p class="text-xs text-saltora-muted/80 font-light text-center max-w-3xl mx-auto pt-4 leading-relaxed reveal-on-scroll reveal-from-bottom">
                Specifications, grain sizes and packaging formats are finalized with each buyer before quotation. If you need a format not listed here, mention it in your inquiry — we will confirm availability honestly.
            </p>

        </div>
    </section>

    <!-- PACKED THE WAY YOUR MARKET NEEDS IT SECTION -->
    <section class="py-20 md:py-28 px-6 md:px-12 bg-white border-t border-saltora-border/60">
        <div class="max-w-7xl mx-auto space-y-12">
            
            <div class="space-y-3 max-w-3xl reveal-on-scroll reveal-from-top">
                <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">PACKAGING & LOGISTICS</span>
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
                <div class="space-y-3 group cursor-pointer reveal-on-scroll reveal-from-bottom stagger-1">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/bulk.jpg" alt="Bulk Bags Format" class="w-full h-48 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Bulk Bags</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Heavy-duty formats for volume buyers and industrial programs.
                    </p>
                </div>

                <!-- Format 2 -->
                <div class="space-y-3 group cursor-pointer reveal-on-scroll reveal-from-bottom stagger-2">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/product4.jpg" alt="Food-Grade Bags Format" class="w-full h-48 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Food-Grade Bags</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Hygienic, food-safe packing for edible salt shipments.
                    </p>
                </div>

                <!-- Format 3 -->
                <div class="space-y-3 group cursor-pointer reveal-on-scroll reveal-from-bottom stagger-3">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/bag1.jpg" alt="Retail Packaging Format" class="w-full h-48 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Retail Packaging</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Shelf-ready formats for retail brands and distributors.
                    </p>
                </div>

                <!-- Format 4 -->
                <div class="space-y-3 group cursor-pointer reveal-on-scroll reveal-from-bottom stagger-4">
                    <div class="aspect-4/3 rounded-sm overflow-hidden border border-saltora-border bg-saltora-card">
                        <img src="/bag2.jpg" alt="Custom Private Label Format" class="w-full h-48 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                    </div>
                    <h3 class="font-serif text-xl text-saltora-text font-normal pt-1 group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta">Custom / Private Label</h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Branding and packaging prepared to buyer requirements, where available.
                    </p>
                </div>

            </div>

            <!-- Soft Blush CTA Box -->
            <div class="bg-[#F5EAE6] p-8 sm:p-10 rounded-sm border border-saltora-terracotta/20 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 shadow-sm mt-8 reveal-on-scroll reveal-scale">
                <div class="space-y-2 max-w-2xl">
                    <h3 class="font-serif text-2xl sm:text-3xl text-saltora-text font-normal">
                        Need a custom specification?
                    </h3>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Share your target grain size, packaging format, quantity and destination port — Saltora will respond with a clear, written quotation.
                    </p>
                </div>

                <div class="shrink-0">
                    <a href="/contact" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-8 py-4 text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center gap-2 group cursor-pointer">
                        <span>REQUEST A QUOTE</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- FOOTER SECTION -->
    <footer id="contact" class="bg-[#181513] text-stone-400 py-16 px-6 md:px-12 border-t border-stone-800 text-xs">
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

                <!-- SOCIAL MEDIA ICONS -->
                <div class="flex items-center gap-3 pt-2">
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-stone-800 bg-stone-900/80 flex items-center justify-center text-stone-400 hover:text-[#e07a5f] hover:border-[#e07a5f] transition-all cursor-pointer" title="Facebook">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-stone-800 bg-stone-900/80 flex items-center justify-center text-stone-400 hover:text-[#e07a5f] hover:border-[#e07a5f] transition-all cursor-pointer" title="Instagram">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-stone-800 bg-stone-900/80 flex items-center justify-center text-stone-400 hover:text-[#e07a5f] hover:border-[#e07a5f] transition-all cursor-pointer" title="LinkedIn">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="https://wa.me/923180735748" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-stone-800 bg-stone-900/80 flex items-center justify-center text-stone-400 hover:text-emerald-500 hover:border-emerald-500 transition-all cursor-pointer" title="WhatsApp Desk">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    </a>
                    <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-stone-800 bg-stone-900/80 flex items-center justify-center text-stone-400 hover:text-rose-500 hover:border-rose-500 transition-all cursor-pointer" title="YouTube">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <a href="https://x.com" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-stone-800 bg-stone-900/80 flex items-center justify-center text-stone-400 hover:text-[#e07a5f] hover:border-[#e07a5f] transition-all cursor-pointer" title="X (Twitter)">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                </div>
            </div>

            <div class="space-y-3">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">NAVIGATE</h4>
                <ul class="space-y-2 text-stone-400 font-light">
                    <li><a href="/" class="hover:text-white transition-colors cursor-pointer">Home</a></li>
                    <li><a href="/about" class="hover:text-white transition-colors cursor-pointer">About</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors text-white font-medium cursor-pointer">Products</a></li>
                    <li><a href="/certifications" class="hover:text-white transition-colors cursor-pointer">Certifications</a></li>
                    <li><a href="/export-logistics" class="hover:text-white transition-colors cursor-pointer">Export & Logistics</a></li>
                    <li><a href="/contact" class="hover:text-white transition-colors cursor-pointer">Contact</a></li>
                </ul>
            </div>

            <div class="lg:col-span-2 space-y-4">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">CONTACT</h4>
                <div class="space-y-2 text-stone-400 font-light">
                    <p class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-saltora-terracotta shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:saltora1329@gmail.com" class="hover:text-white transition-colors cursor-pointer">saltora1329@gmail.com</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-saltora-terracotta shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="tel:+923180735748" class="hover:text-white transition-colors cursor-pointer">+92 318 0735748</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-saltora-terracotta shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                        </svg>
                        <a href="http://www.saltora.net" target="_blank" class="hover:text-white transition-colors cursor-pointer">www.saltora.net</a>
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
            <div class="flex items-center space-x-6">
                <a href="/terms" class="hover:text-stone-300 transition-colors cursor-pointer">Terms & Conditions</a>
                <a href="/privacy" class="hover:text-stone-300 transition-colors cursor-pointer">Privacy Policy</a>
                <a href="/return-policy" class="hover:text-stone-300 transition-colors cursor-pointer">Return & Refund Policy</a>
            </div>
        </div>
    </footer>

    <!-- PRODUCT QUICK VIEW MODAL -->
    <div x-show="quickViewModalOpen" x-cloak class="fixed inset-0 z-50 overflow-y-auto" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Backdrop -->
            <div x-show="quickViewModalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/75 backdrop-blur-xs transition-opacity" @click="closeQuickView()"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <!-- Modal Body -->
            <div x-show="quickViewModalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block align-bottom bg-saltora-bg rounded-sm text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full border border-saltora-border p-6 md:p-8 relative">
                
                <!-- Close Button -->
                <button @click="closeQuickView()" class="absolute top-4 right-4 text-saltora-muted hover:text-saltora-text p-2 cursor-pointer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <template x-if="selectedProduct">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                        <div class="aspect-4/3 rounded-sm overflow-hidden bg-saltora-card border border-saltora-border">
                            <img :src="selectedProduct.img" :alt="selectedProduct.name" class="w-full h-full object-cover">
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase">TECHNICAL SPECIFICATION</span>
                                <span class="text-[10px] font-bold text-slate-500 bg-stone-100 px-2 py-0.5 rounded-xs" x-text="selectedProduct.category"></span>
                            </div>
                            
                            <h3 class="font-serif text-2xl sm:text-3xl text-saltora-text font-normal" x-text="selectedProduct.name"></h3>
                            
                            <!-- Price & MOQ Box -->
                            <div class="p-3 bg-stone-50 border border-saltora-border rounded-xs flex items-center justify-between">
                                <div>
                                    <span class="text-[9px] uppercase font-bold text-stone-500 block">Export Price</span>
                                    <span class="text-lg font-bold text-saltora-text" x-text="selectedProduct.price"></span>
                                </div>
                                <div class="text-right">
                                    <span class="text-[9px] uppercase font-bold text-stone-500 block">Minimum Order (MOQ)</span>
                                    <span class="text-xs font-bold text-saltora-terracotta" x-text="selectedProduct.moq"></span>
                                </div>
                            </div>

                            <p class="text-xs text-saltora-muted font-light leading-relaxed" x-text="selectedProduct.desc"></p>

                            <!-- Specs Table -->
                            <div class="border-t border-b border-saltora-border/70 py-2.5 space-y-1.5 text-xs">
                                <div class="flex justify-between">
                                    <span class="text-saltora-muted font-light">Grain / Mesh Size:</span>
                                    <span class="font-semibold text-saltora-text" x-text="selectedProduct.specs.grain"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-saltora-muted font-light">Packaging Format:</span>
                                    <span class="font-semibold text-saltora-text" x-text="selectedProduct.packaging"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-saltora-muted font-light">Unit Weight / Capacity:</span>
                                    <span class="font-semibold text-saltora-text" x-text="selectedProduct.package_weight"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-saltora-muted font-light">Chemical Purity:</span>
                                    <span class="font-semibold text-saltora-terracotta" x-text="selectedProduct.specs.purity"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-saltora-muted font-light">Grade Standard:</span>
                                    <span class="font-semibold text-saltora-text" x-text="selectedProduct.specs.grade"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-saltora-muted font-light">Source Origin:</span>
                                    <span class="font-semibold text-saltora-text" x-text="selectedProduct.specs.origin"></span>
                                </div>
                            </div>

                            <div class="pt-2 flex flex-col gap-2">
                                {{--
                                <!-- ADD TO CART COMMENTED OUT -->
                                <button @click="addToCart(selectedProduct.name); closeQuickView()" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center justify-center gap-2 cursor-pointer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                                    </svg>
                                    <span>ADD TO QUOTE REQUEST</span>
                                </button>
                                --}}
                                <a :href="'/contact?product=' + encodeURIComponent(selectedProduct.name) + '#contactForm'" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-center text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center justify-center gap-2 cursor-pointer">
                                    <i class="fa-solid fa-file-invoice text-amber-200 text-xs"></i>
                                    <span>REQUEST A QUOTE</span>
                                </a>
                                <a href="/contact" class="w-full border border-saltora-text/30 hover:border-saltora-text text-saltora-text py-2.5 text-center text-xs font-bold tracking-wider uppercase transition-colors cursor-pointer">
                                    SEND CUSTOM INQUIRY
                                </a>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    {{-- <x-cart-drawer /> --}}

</body>
</html>
