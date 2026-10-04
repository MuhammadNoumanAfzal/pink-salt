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

    <!-- FOOTER SECTION -->
    <x-footer />

</body>
</html>
