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
        <div class="max-w-7xl mx-auto px-6 md:px-10 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3 group cursor-pointer">
                <img src="/logo.png" alt="SALTORA Logo" class="h-10 w-auto object-contain transition-transform group-hover:scale-105">
                <span class="font-serif text-2xl font-bold tracking-wider text-saltora-text">SALTORA</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-9 text-xs font-semibold tracking-widest text-saltora-text uppercase">
                <a href="/about" class="hover:text-saltora-terracotta transition-colors cursor-pointer">ABOUT</a>
                <a href="/products" class="hover:text-saltora-terracotta transition-colors cursor-pointer">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors cursor-pointer">CERTIFICATIONS</a>
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors cursor-pointer">EXPORT & LOGISTICS</a>
                <a href="/blog" class="text-saltora-terracotta font-bold transition-colors cursor-pointer border-b-2 border-saltora-terracotta pb-0.5">BLOG</a>
                <a href="/contact" class="hover:text-saltora-terracotta transition-colors cursor-pointer">CONTACT</a>
            </nav>

            <!-- Header Action Button -->
            <div class="hidden sm:flex items-center gap-3">
                <a href="/contact" class="bg-saltora-dark hover:bg-black text-white px-5 py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2.5 group cursor-pointer rounded-xs border border-amber-900/30">
                    <i class="fa-solid fa-paper-plane text-[#e07a5f] group-hover:scale-110 transition-transform text-xs"></i>
                    <span>REQUEST EXPORT QUOTE</span>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-saltora-text p-2 rounded-md focus:outline-none cursor-pointer">
                <i class="fa-solid" :class="mobileMenuOpen ? 'fa-xmark text-xl' : 'fa-bars text-xl'"></i>
            </button>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileMenuOpen" x-cloak x-transition class="lg:hidden bg-saltora-bg border-b border-saltora-border px-6 py-6 space-y-4 text-xs font-semibold tracking-widest uppercase">
            <a href="/about" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">ABOUT</a>
            <a href="/products" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">PRODUCTS</a>
            <a href="/certifications" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CERTIFICATIONS</a>
            <a href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">EXPORT & LOGISTICS</a>
            <a href="/blog" class="block py-2 text-saltora-terracotta font-bold cursor-pointer">BLOG</a>
            <a href="/contact" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CONTACT</a>
        </div>
    </header>

    <!-- BLOG HERO SECTION -->
    <section class="relative bg-[#111820] text-white pt-20 md:pt-28 pb-28 md:pb-36 px-6 overflow-hidden border-b border-white/10">
        <!-- Ambient Background Image -->
        <img src="/aboutero.jpg" onerror="this.onerror=null; this.src='/heroimg.jpg';" alt="Saltora Himalayan Pink Salt Editorial Background" class="absolute inset-0 w-full h-full object-cover opacity-20 filter contrast-125 brightness-90 pointer-events-none scale-105 transition-transform duration-1000">
        
        <!-- Multi-stop Dark Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-[#0f171e]/95 via-[#141d24]/90 to-[#0e141a]/98 pointer-events-none"></div>

        <!-- Ambient Glow Elements -->
        <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[700px] h-[360px] bg-[#e07a5f]/15 rounded-full blur-[130px] pointer-events-none"></div>
        <div class="absolute top-1/3 -left-32 w-80 h-80 bg-[#f4a261]/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-10 -right-32 w-80 h-80 bg-[#e07a5f]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <!-- Subtle Dot Pattern Overlay -->
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(rgba(255, 255, 255, 0.8) 1px, transparent 1px); background-size: 24px 24px;"></div>

        <div class="max-w-5xl mx-auto text-center space-y-7 relative z-10 animate-fade-in-up">
            <!-- Refined Top Pill / Kicker -->
            <div class="inline-flex items-center gap-2.5 px-4 py-1.5 bg-gradient-to-r from-white/10 to-white/5 border border-white/15 backdrop-blur-md rounded-full text-xs font-semibold tracking-wider text-stone-200 uppercase shadow-lg">
                <span class="flex h-2 w-2 relative">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#e07a5f] opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-[#e07a5f]"></span>
                </span>
                <span class="text-[#f4a261] font-bold">SALTORA INTELLIGENCE</span>
                <span class="text-white/40">&bull;</span>
                <span class="text-[11px] text-stone-300">B2B EXPORT DESK & MARKET RESEARCH</span>
            </div>
            
            <!-- Headline -->
            <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-serif text-white leading-[1.12] max-w-4xl mx-auto font-normal tracking-tight">
                Himalayan Pink Salt Trade, <br class="hidden sm:inline">
                <span class="italic font-normal bg-gradient-to-r from-[#f4a261] via-[#e07a5f] to-[#e76f51] bg-clip-text text-transparent">
                    Logistics & Market Trends
                </span>
            </h1>

            <!-- Subtitle -->
            <p class="text-stone-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto font-light leading-relaxed">
                Stay informed with verified analysis, mining standards, bulk container shipping protocols, ISO certifications, and GCC market demands direct from SALTORA's export desk.
            </p>

            <!-- Search Bar Form with Glassmorphism & Micro-interactions -->
            <form action="{{ route('blog') }}" method="GET" class="max-w-2xl mx-auto pt-2">
                <div class="relative flex items-center bg-white/10 hover:bg-white/[0.13] backdrop-blur-xl border border-white/20 hover:border-white/35 focus-within:border-[#e07a5f] focus-within:ring-2 focus-within:ring-[#e07a5f]/30 rounded-2xl p-1.5 shadow-2xl transition-all duration-300">
                    <div class="pl-4 pr-2 text-stone-400 text-base pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search articles, guides, FOB shipping terms, certifications..." class="w-full py-3.5 px-2 bg-transparent text-xs sm:text-sm text-white placeholder-stone-400 focus:outline-none">
                    
                    @if(request('search'))
                    <a href="{{ route('blog') }}" class="px-3 text-xs text-stone-400 hover:text-white transition-colors" title="Clear Search">
                        <i class="fa-solid fa-xmark"></i>
                    </a>
                    @endif

                    <button type="submit" class="px-6 sm:px-8 py-3 bg-[#e07a5f] hover:bg-[#d46a4f] text-white text-xs font-bold uppercase tracking-wider rounded-xl transition-all cursor-pointer shadow-lg hover:shadow-[#e07a5f]/30 active:scale-95 shrink-0 flex items-center gap-2">
                        <span>Search</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>
                </div>
            </form>

            <!-- Trending Quick Tags -->
            <div class="flex items-center justify-center gap-2 flex-wrap text-xs pt-1">
                <span class="text-stone-400 text-[11px] font-medium flex items-center gap-1.5 mr-1">
                    <i class="fa-solid fa-arrow-trend-up text-[#e07a5f] text-xs"></i>
                    <span>Trending:</span>
                </span>
                <a href="{{ route('blog', ['search' => 'FCL Shipping']) }}" class="px-3 py-1 bg-white/5 hover:bg-white/15 border border-white/10 hover:border-[#e07a5f]/40 rounded-full text-stone-300 hover:text-white transition-all text-[11px] cursor-pointer">FCL Shipping</a>
                <a href="{{ route('blog', ['search' => 'Khewra Mine']) }}" class="px-3 py-1 bg-white/5 hover:bg-white/15 border border-white/10 hover:border-[#e07a5f]/40 rounded-full text-stone-300 hover:text-white transition-all text-[11px] cursor-pointer">Khewra Mine</a>
                <a href="{{ route('blog', ['search' => 'ISO 22000']) }}" class="px-3 py-1 bg-white/5 hover:bg-white/15 border border-white/10 hover:border-[#e07a5f]/40 rounded-full text-stone-300 hover:text-white transition-all text-[11px] cursor-pointer">ISO 22000</a>
                <a href="{{ route('blog', ['search' => 'Private Label']) }}" class="px-3 py-1 bg-white/5 hover:bg-white/15 border border-white/10 hover:border-[#e07a5f]/40 rounded-full text-stone-300 hover:text-white transition-all text-[11px] cursor-pointer">Private Label</a>
                <a href="{{ route('blog', ['search' => 'Bulk Salt']) }}" class="px-3 py-1 bg-white/5 hover:bg-white/15 border border-white/10 hover:border-[#e07a5f]/40 rounded-full text-stone-300 hover:text-white transition-all text-[11px] cursor-pointer">Bulk Salt</a>
            </div>

            <!-- Key Trade Desk Metrics Strip -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 max-w-4xl mx-auto pt-6 border-t border-white/10 text-left">
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-3.5 flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-[#e07a5f]/15 border border-[#e07a5f]/30 flex items-center justify-center text-[#e07a5f] shrink-0">
                        <i class="fa-solid fa-ship text-sm"></i>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-white leading-tight">50+ Ports</div>
                        <div class="text-[10px] text-stone-400">Global Shipping Routes</div>
                    </div>
                </div>
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-3.5 flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-[#e07a5f]/15 border border-[#e07a5f]/30 flex items-center justify-center text-[#e07a5f] shrink-0">
                        <i class="fa-solid fa-mountain text-sm"></i>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-white leading-tight">100% Khewra</div>
                        <div class="text-[10px] text-stone-400">Authentic Mine Origin</div>
                    </div>
                </div>
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-3.5 flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-[#e07a5f]/15 border border-[#e07a5f]/30 flex items-center justify-center text-[#e07a5f] shrink-0">
                        <i class="fa-solid fa-certificate text-sm"></i>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-white leading-tight">ISO & Halal</div>
                        <div class="text-[10px] text-stone-400">Export Certified Lab Data</div>
                    </div>
                </div>
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-3.5 flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-[#e07a5f]/15 border border-[#e07a5f]/30 flex items-center justify-center text-[#e07a5f] shrink-0">
                        <i class="fa-solid fa-newspaper text-sm"></i>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-white leading-tight">Bi-Weekly</div>
                        <div class="text-[10px] text-stone-400">Market & Price Insights</div>
                    </div>
                </div>
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

    <!-- EXISTING FOOTER SECTION -->
    <footer class="bg-saltora-dark text-white pt-16 pb-12 border-t border-saltora-border/40">
        <div class="max-w-7xl mx-auto px-6 md:px-10 grid grid-cols-1 md:grid-cols-4 gap-10 text-xs">
            
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <img src="/logo.png" alt="SALTORA Logo" class="h-8 w-auto filter invert brightness-200" onerror="this.onerror=null; this.classList.add('hidden');">
                    <span class="font-serif text-2xl font-bold tracking-wider text-white">SALTORA</span>
                </div>
                <p class="text-stone-400 leading-relaxed max-w-sm font-light">
                    SALTORA is a premier Himalayan pink salt export house based in Pakistan. We specialize in B2B supply, OEM private labeling, and bulk export to international markets.
                </p>
                <div class="text-[11px] text-stone-500 font-medium">
                    Origin: Salt Range, Punjab, Pakistan
                </div>
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
                </div>
            </div>

            <div class="space-y-3">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">Quick Navigation</h4>
                <ul class="space-y-2 text-stone-400 font-light">
                    <li><a href="/" class="hover:text-white transition-colors cursor-pointer">Home</a></li>
                    <li><a href="/about" class="hover:text-white transition-colors cursor-pointer">About Saltora</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors cursor-pointer">Pink Salt Range</a></li>
                    <li><a href="/certifications" class="hover:text-white transition-colors cursor-pointer">Certifications & ISO</a></li>
                    <li><a href="/export-logistics" class="hover:text-white transition-colors cursor-pointer">Integrated Value Chain</a></li>
                    <li><a href="/blog" class="hover:text-white transition-colors cursor-pointer text-saltora-terracotta font-medium">Blog & Export Insights</a></li>
                    <li><a href="/contact" class="hover:text-white transition-colors cursor-pointer">Contact Us</a></li>
                </ul>
            </div>

            <div class="space-y-3">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">Product Categories</h4>
                <ul class="space-y-2 text-stone-400 font-light">
                    <li><a href="/products" class="hover:text-white transition-colors cursor-pointer">Fine Table Pink Salt</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors cursor-pointer">Coarse Grinder Salt</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors cursor-pointer">Himalayan Salt Granules</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors cursor-pointer">Animal Salt Lick Blocks</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors cursor-pointer">Raw Rock Salt Lumps</a></li>
                </ul>
            </div>

            <div class="space-y-3">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">Export Contact</h4>
                <div class="space-y-2 text-stone-400 font-light">
                    <p class="text-white font-medium">Head Office & Export Desk</p>
                    <p>Salt Range Region / Port Qasim Office, Pakistan</p>
                    <p class="pt-1 flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-saltora-terracotta shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:saltora1329@gmail.com" class="hover:text-white transition-colors cursor-pointer">saltora1329@gmail.com</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-saltora-terracotta shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="https://wa.me/923180735748" class="hover:text-white transition-colors cursor-pointer">+92 318 0735748</a>
                    </p>
                </div>
            </div>

        </div>

        <div class="max-w-7xl mx-auto pt-12 mt-12 border-t border-stone-900 flex flex-col sm:flex-row items-center justify-between text-stone-500 text-[11px] gap-4 px-6 md:px-10">
            <p>© {{ date('Y') }} SALTORA Himalayan Pink Salt Exporter. All Rights Reserved.</p>
            <div class="flex items-center space-x-6">
                <a href="/terms" class="hover:text-stone-300 transition-colors cursor-pointer">Terms & Conditions</a>
                <a href="/privacy" class="hover:text-stone-300 transition-colors cursor-pointer">Privacy Policy</a>
                <a href="/return-policy" class="hover:text-stone-300 transition-colors cursor-pointer">Return & Refund Policy</a>
                <a href="/sitemap" class="hover:text-stone-300 transition-colors cursor-pointer">HTML Sitemap</a>
            </div>
        </div>
    </footer>

</body>
</html>
