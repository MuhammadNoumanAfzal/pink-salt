<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Sitemap — SALTORA Himalayan Exporter</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="HTML Sitemap for SALTORA Himalayan Pink Salt Exporter — browse all pages, products, export categories, and B2B resources.">
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/logo.png">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased">

    <!-- Header Navigation -->
    <header class="sticky top-0 z-40 bg-saltora-bg/95 backdrop-blur-md border-b border-saltora-border/50">
        <div class="max-w-7xl mx-auto px-6 md:px-10 h-20 flex items-center justify-between">
            <a href="/" class="flex items-center gap-3 group">
                <img src="/logo.png" alt="SALTORA Logo" class="h-10 w-auto object-contain">
                <span class="font-serif text-2xl font-bold tracking-wider text-saltora-text">SALTORA</span>
            </a>

            <nav class="hidden lg:flex items-center space-x-9 text-xs font-semibold tracking-widest text-saltora-text uppercase">
                <a href="/about" class="hover:text-saltora-terracotta transition-colors">ABOUT</a>
                <a href="/products" class="hover:text-saltora-terracotta transition-colors">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors">CERTIFICATIONS</a>
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors">EXPORT & LOGISTICS</a>
                <a href="/contact" class="hover:text-saltora-terracotta transition-colors">CONTACT</a>
            </nav>

            <a href="/products" class="bg-saltora-dark hover:bg-black text-white px-6 py-3 text-xs font-bold tracking-wider uppercase shadow-sm flex items-center gap-2">
                <span>VIEW STORE</span>
            </a>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="bg-saltora-dark text-white py-16 px-6 md:px-12 border-b border-saltora-dark-border">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 text-xs font-bold tracking-mega text-saltora-terracotta uppercase">
                <span class="w-8 h-px bg-saltora-terracotta"></span>
                <span>SEO SITE INDEX</span>
            </div>
            <h1 class="text-4xl sm:text-5xl font-serif text-white font-normal mt-3">SALTORA Website Sitemap</h1>
            <p class="text-stone-300 text-sm font-light mt-2 max-w-xl">Complete index of website pages, product catalog items, and export resources.</p>
        </div>
    </section>

    <!-- SITEMAP LINKS GRID -->
    <main class="py-16 px-6 md:px-12 max-w-7xl mx-auto space-y-12">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Category 1: Main Pages -->
            <div class="bg-white p-6 border border-saltora-border rounded-sm shadow-sm space-y-4">
                <div class="flex items-center gap-3 border-b border-saltora-border pb-3">
                    <div class="w-8 h-8 rounded-full bg-saltora-blush flex items-center justify-center text-saltora-terracotta font-bold text-xs">01</div>
                    <h3 class="font-serif text-xl text-saltora-text font-semibold">Main Web Pages</h3>
                </div>
                <ul class="space-y-2.5 text-xs">
                    <li><a href="/" class="text-saltora-text font-semibold hover:text-saltora-terracotta transition-colors block">✦ Homepage (SALTORA B2B Exporter)</a></li>
                    <li><a href="/about" class="text-saltora-text font-semibold hover:text-saltora-terracotta transition-colors block">✦ About Saltora & Mine Operations</a></li>
                    <li><a href="/products" class="text-saltora-text font-semibold hover:text-saltora-terracotta transition-colors block">✦ Products Catalog & Export Range</a></li>
                    <li><a href="/certifications" class="text-saltora-text font-semibold hover:text-saltora-terracotta transition-colors block">✦ Quality Certifications & Standards</a></li>
                    <li><a href="/export-logistics" class="text-saltora-text font-semibold hover:text-saltora-terracotta transition-colors block">✦ Export Terms & Shipping Logistics</a></li>
                    <li><a href="/contact" class="text-saltora-text font-semibold hover:text-saltora-terracotta transition-colors block">✦ Contact Us & B2B Inquiry Form</a></li>
                </ul>
            </div>

            <!-- Category 2: Product Catalog Items -->
            <div class="bg-white p-6 border border-saltora-border rounded-sm shadow-sm space-y-4">
                <div class="flex items-center gap-3 border-b border-saltora-border pb-3">
                    <div class="w-8 h-8 rounded-full bg-saltora-blush flex items-center justify-center text-saltora-terracotta font-bold text-xs">02</div>
                    <h3 class="font-serif text-xl text-saltora-text font-semibold">Export Product Range</h3>
                </div>
                <ul class="space-y-2.5 text-xs">
                    @foreach(\App\Models\Product::where('is_active', true)->get() as $p)
                        <li>
                            <a href="/products" class="text-saltora-text font-semibold hover:text-saltora-terracotta transition-colors flex items-center justify-between">
                                <span>✦ {{ $p->name }}</span>
                                <span class="text-[10px] text-saltora-muted uppercase font-normal">{{ $p->category }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Category 3: Search Engine Feeds -->
            <div class="bg-white p-6 border border-saltora-border rounded-sm shadow-sm space-y-4">
                <div class="flex items-center gap-3 border-b border-saltora-border pb-3">
                    <div class="w-8 h-8 rounded-full bg-saltora-blush flex items-center justify-center text-saltora-terracotta font-bold text-xs">03</div>
                    <h3 class="font-serif text-xl text-saltora-text font-semibold">Search Engine XML Feeds</h3>
                </div>
                <ul class="space-y-2.5 text-xs">
                    <li><a href="/sitemap.xml" target="_blank" class="text-saltora-terracotta font-mono font-bold hover:underline block">✦ XML Sitemap Feed (/sitemap.xml)</a></li>
                    <li><a href="/admin/login" class="text-saltora-text font-semibold hover:text-saltora-terracotta transition-colors block">✦ Admin Portal Sign In</a></li>
                </ul>
            </div>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="bg-[#181513] text-stone-400 py-12 px-6 border-t border-stone-800 text-xs">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            <p>© 2026 SALTORA Exporter. All Rights Reserved.</p>
            <div class="flex items-center gap-4">
                <a href="/sitemap" class="text-amber-200 hover:underline">HTML Sitemap</a>
                <a href="/sitemap.xml" target="_blank" class="text-amber-200 hover:underline">XML Sitemap</a>
                <a href="/admin/login" class="text-stone-500 hover:text-white">Admin Login</a>
            </div>
        </div>
    </footer>

</body>
</html>
