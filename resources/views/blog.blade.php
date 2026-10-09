<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogs & Export Insights — SALTORA Himalayan Exporter</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Explore expert insights on Himalayan pink salt mining, bulk shipping container logistics, purity standards, and global B2B trade trends from SALTORA Pakistan.">
    <meta name="keywords" content="Himalayan Salt Blog, Pink Salt Export News, Saltora Guides, Bulk Salt Logistics, Khewra Mine Insights">
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/logo.png">
    
    <!-- FontAwesome & Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(28px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        .blog-card-hover {
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .blog-card-hover:hover {
            transform: translateY(-8px);
        }
    </style>
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="{ mobileMenuOpen: false }">

    <!-- Header Navigation Bar -->
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
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors cursor-pointer whitespace-nowrap">EXPORT & LOGISTICS</a>
                <a href="/blog" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1 cursor-pointer whitespace-nowrap">BLOG</a>
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
            <a @click="mobileMenuOpen = false" href="/about" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">ABOUT</a>
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/blog" class="block py-2 text-saltora-terracotta font-bold cursor-pointer">BLOG</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CONTACT</a>
            <a href="/contact" @click="mobileMenuOpen = false" class="flex items-center justify-center gap-2 w-full mt-4 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer rounded-xs shadow-md transition-colors">
                <i class="fa-solid fa-file-invoice text-amber-200 text-sm"></i>
                <span>REQUEST A QUOTE</span>
            </a>
        </div>
    </header>

    <!-- BLOG HERO SECTION -->
    <section class="relative bg-saltora-dark text-white py-20 md:py-28 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border" style="padding-top: 6rem; padding-bottom: 6rem;">
        <!-- New Generated Ambient Background Image (`/blog-hero.jpg`) -->
        <img src="/blog-hero.jpg" alt="Saltora Himalayan Pink Salt Editorial & Trade Intelligence" class="absolute inset-0 w-full h-full object-cover opacity-80 filter contrast-105 brightness-100 pointer-events-none scale-105 transition-transform duration-1000">
        
        <!-- Multi-stop Dark Gradient Overlay (Balanced for high text visibility) -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/75 via-black/55 to-black/75 pointer-events-none"></div>

        <!-- Ambient Glow Elements -->
        <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[700px] h-[360px] bg-saltora-terracotta/15 rounded-full blur-[130px] pointer-events-none"></div>
        <div class="absolute top-1/3 -left-32 w-80 h-80 bg-amber-500/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-10 -right-32 w-80 h-80 bg-saltora-terracotta/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto text-center space-y-7 relative z-10 animate-fade-in-up mt-3 sm:mt-6">
            <!-- Refined Top Pill / Kicker (High Contrast) -->
            <div class="inline-flex items-center gap-2.5 px-4 py-1.5 bg-black/60 border border-white/25 backdrop-blur-md rounded-full text-xs font-semibold tracking-wider text-stone-100 uppercase shadow-xl">
                <span class="flex h-2 w-2 relative">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-amber-400"></span>
                </span>
                <span class="text-amber-300 font-bold">SALTORA INTELLIGENCE</span>
                <span class="text-white/50">&bull;</span>
                <span class="text-[11px] text-stone-200">B2B EXPORT DESK & MARKET RESEARCH</span>
            </div>
            
            <!-- Headline with Drop Shadow for Maximum Legibility -->
            <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-6.5xl font-serif text-white leading-[1.1] max-w-3xl mx-auto font-normal tracking-tight drop-shadow-md">
                Himalayan Pink Salt Trade, <br class="hidden sm:inline">
                <span class="italic font-normal text-amber-300">
                    Logistics & Market Trends
                </span>
            </h1>

            <!-- Subtitle with Solid Bright Text -->
            <p class="text-stone-100 sm:text-stone-200 text-sm sm:text-base md:text-lg max-w-2xl mx-auto font-normal leading-relaxed drop-shadow-sm">
                Stay informed with verified trade analysis, mine origin insights, ocean freight protocols, ISO standards, and international buyer guidelines direct from SALTORA's export desk.
            </p>

            <!-- Search Bar Form with Glassmorphism & Micro-interactions -->
            <form action="{{ route('blog') }}" method="GET" class="max-w-2xl mx-auto pt-2">
                <div class="relative flex items-center bg-stone-900/90 hover:bg-stone-900 backdrop-blur-xl border border-white/30 hover:border-amber-400/70 focus-within:border-amber-400 focus-within:ring-2 focus-within:ring-amber-400/30 rounded-2xl p-1.5 shadow-2xl transition-all duration-300">
                    <div class="pl-4 pr-2 text-stone-300 text-base pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search articles, mining guides, FOB shipping terms, COA standards..." class="w-full py-3.5 px-2 bg-transparent text-xs sm:text-sm text-white placeholder-stone-300 focus:outline-none">
                    
                    @if(request('search'))
                    <a href="{{ route('blog') }}" class="px-3 text-xs text-stone-300 hover:text-white transition-colors" title="Clear Search">
                        <i class="fa-solid fa-xmark"></i>
                    </a>
                    @endif

                    <button type="submit" class="px-6 sm:px-8 py-3 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white text-xs font-bold uppercase tracking-wider rounded-xl transition-all cursor-pointer shadow-lg hover:shadow-saltora-terracotta/30 active:scale-95 shrink-0 flex items-center gap-2">
                        <span>Search</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>
                </div>
            </form>

            <!-- Trending Quick Tags -->
            <div class="flex items-center justify-center gap-2 flex-wrap text-xs pt-1">
                <span class="text-stone-200 text-xs font-semibold flex items-center gap-1.5 mr-1">
                    <i class="fa-solid fa-arrow-trend-up text-amber-300 text-xs"></i>
                    <span>Trending:</span>
                </span>
                <a href="{{ route('blog', ['search' => 'FCL Shipping']) }}" class="px-3 py-1 bg-black/40 hover:bg-black/70 border border-white/20 hover:border-amber-400/50 rounded-full text-stone-200 hover:text-white transition-all text-[11px] cursor-pointer shadow-sm">FCL Shipping</a>
                <a href="{{ route('blog', ['search' => 'Khewra Mine']) }}" class="px-3 py-1 bg-black/40 hover:bg-black/70 border border-white/20 hover:border-amber-400/50 rounded-full text-stone-200 hover:text-white transition-all text-[11px] cursor-pointer shadow-sm">Khewra Mine</a>
                <a href="{{ route('blog', ['search' => 'ISO 22000']) }}" class="px-3 py-1 bg-black/40 hover:bg-black/70 border border-white/20 hover:border-amber-400/50 rounded-full text-stone-200 hover:text-white transition-all text-[11px] cursor-pointer shadow-sm">ISO 22000</a>
                <a href="{{ route('blog', ['search' => 'Private Label']) }}" class="px-3 py-1 bg-black/40 hover:bg-black/70 border border-white/20 hover:border-amber-400/50 rounded-full text-stone-200 hover:text-white transition-all text-[11px] cursor-pointer shadow-sm">Private Label</a>
                <a href="{{ route('blog', ['search' => 'Bulk Salt']) }}" class="px-3 py-1 bg-black/40 hover:bg-black/70 border border-white/20 hover:border-amber-400/50 rounded-full text-stone-200 hover:text-white transition-all text-[11px] cursor-pointer shadow-sm">Bulk Salt</a>
            </div>
        </div>
    </section>

    <!-- FEATURED ARTICLE HERO CARD -->
    @if(isset($featuredPost) && !request('search') && !request('category'))
    <section class="max-w-7xl mx-auto px-6 md:px-10 -mt-12 relative z-20 animate-fade-in-up">
        <div class="bg-white rounded-3xl border border-slate-200/90 shadow-2xl overflow-hidden grid grid-cols-1 lg:grid-cols-12 hover:shadow-2xl transition-all duration-500 group">
            <div class="lg:col-span-7 relative min-h-[320px] lg:min-h-[440px] overflow-hidden bg-slate-100">
                <img src="{{ $featuredPost->image_url }}" onerror="this.onerror=null; this.src='/heroimg.jpg';" alt="{{ $featuredPost->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/70 via-slate-900/20 to-transparent"></div>
                <span class="absolute top-6 left-6 px-4 py-1.5 bg-[#e07a5f] text-white font-bold text-xs tracking-wider uppercase rounded-full shadow-lg">
                    Featured Insight
                </span>
            </div>

            <div class="lg:col-span-5 p-8 sm:p-10 flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="flex items-center gap-3 text-xs font-semibold text-slate-500">
                        <span class="px-3 py-1 bg-[#e07a5f]/10 text-[#e07a5f] font-bold rounded-lg border border-[#e07a5f]/20">{{ $featuredPost->category }}</span>
                        <span>&bull;</span>
                        <span><i class="fa-regular fa-clock text-[10px] mr-1"></i> {{ $featuredPost->read_time }}</span>
                    </div>

                    <h2 class="text-2xl sm:text-3xl font-serif font-bold text-slate-900 leading-snug group-hover:text-[#e07a5f] transition-colors">
                        <a href="{{ route('blog.detail', $featuredPost->slug) }}" class="cursor-pointer">{{ $featuredPost->title }}</a>
                    </h2>

                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-4 font-light">
                        {{ $featuredPost->excerpt }}
                    </p>
                </div>

                <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-slate-900 text-white flex items-center justify-center font-serif font-bold text-xs shadow-md">
                            {{ strtoupper(substr($featuredPost->author, 0, 2)) }}
                        </div>
                        <div>
                            <span class="text-xs font-bold text-slate-900 block">{{ $featuredPost->author }}</span>
                            <span class="text-[10px] text-slate-400 block">{{ $featuredPost->created_at->format('M d, Y') }}</span>
                        </div>
                    </div>

                    <a href="{{ route('blog.detail', $featuredPost->slug) }}" class="px-5 py-2.5 bg-slate-900 hover:bg-[#e07a5f] text-white text-xs font-bold rounded-xl transition-all flex items-center gap-2 cursor-pointer shadow-md group/btn">
                        <span>Read Article</span>
                        <i class="fa-solid fa-arrow-right text-[10px] group-hover/btn:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- CATEGORY FILTER BAR & SPACIOUS BLOG GRID -->
    <section class="max-w-7xl mx-auto px-6 md:px-10 py-16 space-y-12">
        
        <!-- Category Pill Navigation -->
        <div class="flex items-center justify-between gap-4 flex-wrap border-b border-slate-200 pb-6">
            <div class="flex items-center gap-2.5 overflow-x-auto no-scrollbar py-1">
                <a href="{{ route('blog') }}" class="px-5 py-2.5 rounded-2xl text-xs font-bold transition-all cursor-pointer whitespace-nowrap {{ !request('category') ? 'bg-[#e07a5f] text-white shadow-md' : 'bg-white border border-slate-200/90 text-slate-600 hover:bg-slate-100' }}">
                    All Articles
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('blog', ['category' => $cat]) }}" class="px-5 py-2.5 rounded-2xl text-xs font-bold transition-all cursor-pointer whitespace-nowrap {{ request('category') === $cat ? 'bg-[#e07a5f] text-white shadow-md' : 'bg-white border border-slate-200/90 text-slate-600 hover:bg-slate-100' }}">
                        {{ $cat }}
                    </a>
                @endforeach
            </div>

            <div class="text-xs font-bold text-slate-400">
                Showing {{ $posts->total() }} Articles
            </div>
        </div>

        <!-- SPACIOUS & UNIFORM BLOG POSTS GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
            @forelse($posts as $post)
            <article class="h-full flex flex-col justify-between bg-white border border-slate-200/90 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl blog-card-hover group cursor-pointer transition-all duration-300 animate-fade-in-up">
                <div>
                    <!-- Post Image Thumbnail (Fixed height across all cards) -->
                    <a href="{{ route('blog.detail', $post->slug) }}" class="block relative h-56 sm:h-60 w-full overflow-hidden bg-slate-100 shrink-0 cursor-pointer">
                        <img src="{{ $post->image_url }}" onerror="this.onerror=null; this.src='/product1.jpg';" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        <span class="absolute top-4 left-4 px-3.5 py-1 bg-white/95 backdrop-blur-xs text-slate-900 font-bold text-[10px] rounded-full shadow-md uppercase tracking-wider border border-slate-200/50">
                            {{ $post->category }}
                        </span>
                    </a>

                    <!-- Post Content Body with fixed typography heights for perfect grid alignment -->
                    <div class="p-6 sm:p-7 space-y-3.5 flex-1 flex flex-col">
                        <div class="flex items-center gap-2.5 text-[11px] text-slate-400 font-semibold">
                            <span><i class="fa-regular fa-calendar text-[10px] mr-1 text-[#e07a5f]"></i> {{ $post->created_at->format('M d, Y') }}</span>
                            <span>&bull;</span>
                            <span><i class="fa-regular fa-clock text-[10px] mr-1 text-[#e07a5f]"></i> {{ $post->read_time }}</span>
                        </div>

                        <h3 class="font-serif font-bold text-lg sm:text-xl text-slate-900 leading-snug group-hover:text-[#e07a5f] transition-colors line-clamp-2 min-h-[3.25rem]">
                            <a href="{{ route('blog.detail', $post->slug) }}" class="cursor-pointer">{{ $post->title }}</a>
                        </h3>

                        <p class="text-slate-600 text-xs sm:text-sm line-clamp-3 leading-relaxed font-light min-h-[3.75rem]">
                            {{ $post->excerpt }}
                        </p>
                    </div>
                </div>

                <!-- Card Footer Row -->
                <div class="px-6 sm:px-7 py-5 border-t border-slate-100 flex items-center justify-between gap-3 bg-slate-50/50 mt-auto">
                    <div class="flex items-center gap-2.5 min-w-0 flex-1">
                        <div class="w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center font-serif font-bold text-[11px] shrink-0 shadow-xs">
                            {{ strtoupper(substr($post->author, 0, 2)) }}
                        </div>
                        <span class="text-xs font-semibold text-slate-700 truncate block">{{ $post->author }}</span>
                    </div>

                    <a href="{{ route('blog.detail', $post->slug) }}" class="shrink-0 px-3.5 py-2 bg-white group-hover:bg-[#e07a5f] text-slate-700 group-hover:text-white rounded-xl text-xs font-bold transition-all cursor-pointer flex items-center gap-1.5 shadow-2xs border border-slate-200/80 group-hover:border-[#e07a5f]">
                        <span>Read Article</span>
                        <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </article>
            @empty
            <div class="col-span-full py-20 text-center space-y-4 bg-white rounded-3xl border border-slate-200/90 shadow-xs">
                <div class="w-14 h-14 bg-slate-100 text-slate-400 rounded-full flex items-center justify-center mx-auto text-2xl">
                    <i class="fa-solid fa-newspaper"></i>
                </div>
                <h3 class="font-serif font-bold text-slate-800 text-xl">No Articles Found</h3>
                <p class="text-slate-400 text-xs sm:text-sm">No blog posts matched your search criteria or category filter.</p>
                <a href="{{ route('blog') }}" class="inline-block px-5 py-2.5 bg-[#e07a5f] text-white text-xs font-bold rounded-xl shadow-md hover:bg-[#d46a4f] transition-all cursor-pointer mt-2">
                    Clear Search Filters
                </a>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="pt-8">
            {{ $posts->appends(request()->query())->links() }}
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <x-footer />

</body>
</html>
