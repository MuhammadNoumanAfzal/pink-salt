<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $post->title }} — SALTORA Blog</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="{{ Str::limit($post->excerpt, 160) }}">
    <meta name="author" content="{{ $post->author }}">
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ Str::limit($post->excerpt, 160) }}">
    <meta property="og:image" content="{{ $post->image_url }}">
    
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
                transform: translateY(24px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="{ mobileMenuOpen: false }">

    <!-- Header Navigation Bar -->
    <header class="sticky top-0 z-40 bg-saltora-bg/95 backdrop-blur-md border-b border-saltora-border/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-10 h-20 flex items-center justify-between">
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

            <div class="hidden sm:flex items-center gap-3">
                <a href="/contact" class="bg-saltora-dark hover:bg-black text-white px-5 py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2.5 group cursor-pointer rounded-xs border border-amber-900/30">
                    <i class="fa-solid fa-paper-plane text-[#e07a5f] group-hover:scale-110 transition-transform text-xs"></i>
                    <span>REQUEST EXPORT QUOTE</span>
                </a>
            </div>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-saltora-text p-2 rounded-md focus:outline-none cursor-pointer">
                <i class="fa-solid" :class="mobileMenuOpen ? 'fa-xmark text-xl' : 'fa-bars text-xl'"></i>
            </button>
        </div>
    </header>

    <!-- ARTICLE BREADCRUMB & HEADER -->
    <article class="py-12 md:py-16 animate-fade-in-up">
        <div class="max-w-4xl mx-auto px-6 space-y-6">
            
            <!-- Breadcrumbs -->
            <div class="flex items-center gap-2 text-xs font-semibold text-slate-400 flex-wrap">
                <a href="/" class="hover:text-[#e07a5f] cursor-pointer">Home</a>
                <i class="fa-solid fa-angle-right text-[10px]"></i>
                <a href="{{ route('blog') }}" class="hover:text-[#e07a5f] cursor-pointer">Blog & Insights</a>
                <i class="fa-solid fa-angle-right text-[10px]"></i>
                <span class="text-slate-600 truncate max-w-xs">{{ $post->title }}</span>
            </div>

            <!-- Category & Reading Time Badge -->
            <div class="flex items-center gap-3 text-xs font-bold uppercase tracking-wider">
                <span class="px-3.5 py-1 bg-[#e07a5f]/10 text-[#e07a5f] rounded-full border border-[#e07a5f]/30 shadow-2xs">
                    {{ $post->category }}
                </span>
                <span class="text-slate-400">&bull;</span>
                <span class="text-slate-500 font-medium"><i class="fa-regular fa-clock mr-1 text-[#e07a5f]"></i> {{ $post->read_time }}</span>
                <span class="text-slate-400">&bull;</span>
                <span class="text-slate-500 font-medium"><i class="fa-regular fa-eye mr-1 text-[#e07a5f]"></i> {{ number_format($post->views) }} Views</span>
            </div>

            <!-- Title -->
            <h1 class="text-3xl sm:text-5xl font-serif font-bold text-slate-900 leading-tight">
                {{ $post->title }}
            </h1>

            <!-- Author & Metadata Box -->
            <div class="flex items-center justify-between border-y border-slate-200 py-4 flex-wrap gap-4">
                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-full bg-slate-900 text-white flex items-center justify-center font-serif font-bold text-sm shadow-md">
                        {{ strtoupper(substr($post->author, 0, 2)) }}
                    </div>
                    <div>
                        <span class="text-xs font-bold text-slate-900 block">{{ $post->author }}</span>
                        <span class="text-[11px] text-slate-400 block">Published on {{ $post->created_at->format('F d, Y') }}</span>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider mr-1">Share:</span>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" class="w-9 h-9 rounded-full bg-slate-100 hover:bg-[#0077b5] hover:text-white text-slate-600 flex items-center justify-center text-xs transition-all cursor-pointer shadow-2xs" title="Share on LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(url()->current()) }}" target="_blank" class="w-9 h-9 rounded-full bg-slate-100 hover:bg-slate-900 hover:text-white text-slate-600 flex items-center justify-center text-xs transition-all cursor-pointer shadow-2xs" title="Share on X (Twitter)">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?text={{ urlencode($post->title . ' - ' . url()->current()) }}" target="_blank" class="w-9 h-9 rounded-full bg-slate-100 hover:bg-[#25D366] hover:text-white text-slate-600 flex items-center justify-center text-xs transition-all cursor-pointer shadow-2xs" title="Share on WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- Cover Image -->
            <div class="rounded-3xl overflow-hidden shadow-xl border border-slate-200/80 bg-slate-100 max-h-[520px]">
                <img src="{{ $post->image_url }}" onerror="this.onerror=null; this.src='/heroimg.jpg';" alt="{{ $post->title }}" class="w-full h-full object-cover">
            </div>

            <!-- Excerpt Callout -->
            <div class="bg-[#e07a5f]/5 border-l-4 border-[#e07a5f] p-6 sm:p-8 rounded-r-3xl font-serif text-slate-700 italic text-base sm:text-lg leading-relaxed shadow-2xs">
                "{{ $post->excerpt }}"
            </div>

            <!-- Article Body Content -->
            <div class="prose prose-slate max-w-none text-slate-700 leading-relaxed text-sm sm:text-base space-y-6 pt-4 font-light blog-content-body">
                {!! $post->content !!}
            </div>

            <!-- AUTHOR SIGNATURE CARD & QUOTE CTA -->
            <div class="pt-10 space-y-8 border-t border-slate-200">
                <!-- Author Box -->
                <div class="bg-white border border-slate-200/90 p-6 sm:p-8 rounded-3xl flex items-center gap-5 shadow-xs">
                    <div class="w-14 h-14 rounded-full bg-slate-900 text-white flex items-center justify-center font-serif font-bold text-lg shrink-0 shadow-md">
                        {{ strtoupper(substr($post->author, 0, 2)) }}
                    </div>
                    <div class="space-y-1">
                        <span class="text-[10px] font-bold text-[#e07a5f] uppercase tracking-wider">ARTICLE AUTHOR</span>
                        <h4 class="font-serif font-bold text-lg text-slate-900">{{ $post->author }}</h4>
                        <p class="text-xs text-slate-500 font-light">Export operations Specialist at SALTORA Himalayan Pink Salt Exporter Pakistan.</p>
                    </div>
                </div>

                <!-- Call To Action Card -->
                <div class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white p-8 sm:p-10 rounded-3xl shadow-xl flex flex-col sm:flex-row items-center justify-between gap-6">
                    <div class="space-y-2 text-center sm:text-left">
                        <span class="text-[11px] font-bold text-[#e07a5f] uppercase tracking-wider">LOOKING FOR BULK EXPORT SUPPLIES?</span>
                        <h3 class="font-serif font-bold text-xl sm:text-2xl text-white">Import Himalayan Pink Salt Direct from Pakistan</h3>
                        <p class="text-xs text-slate-300 font-light">Get customized fob/cif pricing, sample packages, and container loading quotes within 24 hours.</p>
                    </div>
                    <a href="/contact" class="px-6 py-3.5 bg-[#e07a5f] hover:bg-[#d46a4f] text-white text-xs font-bold uppercase tracking-wider rounded-xl transition-all shadow-md shrink-0 cursor-pointer">
                        Request Custom Quote
                    </a>
                </div>
            </div>

        </div>
    </article>

    <!-- RELATED ARTICLES SECTION -->
    @if(isset($relatedPosts) && count($relatedPosts) > 0)
    <section class="bg-white py-16 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-6 md:px-10 space-y-8">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-serif font-bold text-2xl text-slate-900">Related Insights & Guides</h2>
                    <p class="text-xs text-slate-500 mt-1">More articles on salt export logistics and quality standards</p>
                </div>
                <a href="{{ route('blog') }}" class="text-xs font-bold text-[#e07a5f] hover:underline flex items-center gap-1 cursor-pointer">
                    <span>View All Articles</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
                @foreach($relatedPosts as $rel)
                <article class="h-full flex flex-col justify-between bg-white border border-slate-200/90 rounded-3xl overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 group cursor-pointer">
                    <div>
                        <a href="{{ route('blog.detail', $rel->slug) }}" class="block relative h-48 w-full overflow-hidden bg-slate-100 shrink-0 cursor-pointer">
                            <img src="{{ $rel->image_url }}" onerror="this.onerror=null; this.src='/product2.jpg';" alt="{{ $rel->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </a>

                        <div class="p-6 space-y-3 flex-1 flex flex-col">
                            <span class="text-[10px] font-bold text-[#e07a5f] uppercase tracking-wider block">{{ $rel->category }}</span>
                            <h3 class="font-serif font-bold text-base text-slate-900 group-hover:text-[#e07a5f] transition-colors leading-snug line-clamp-2 min-h-[2.75rem]">
                                <a href="{{ route('blog.detail', $rel->slug) }}" class="cursor-pointer">{{ $rel->title }}</a>
                            </h3>
                            <p class="text-slate-500 text-xs line-clamp-2 font-light leading-relaxed min-h-[2.5rem]">{{ $rel->excerpt }}</p>
                        </div>
                    </div>

                    <div class="p-6 pt-4 border-t border-slate-100 mt-auto bg-slate-50/50">
                        <a href="{{ route('blog.detail', $rel->slug) }}" class="text-xs font-bold text-slate-900 group-hover:text-[#e07a5f] flex items-center gap-1.5 cursor-pointer">
                            <span>Read Guide</span>
                            <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif

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
