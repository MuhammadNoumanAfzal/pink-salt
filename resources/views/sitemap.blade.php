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
    
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased" x-data="shopManager()">

    <!-- Header Navigation -->
    <header class="sticky top-0 z-40 bg-saltora-bg/95 backdrop-blur-md border-b border-saltora-border/50">
        <div class="max-w-7xl mx-auto px-6 md:px-10 h-16 md:h-18 flex items-center justify-between gap-4">
            <a href="/" class="flex items-center gap-3 shrink-0 group mr-2 lg:mr-6" title="SALTORA Home">
                <img src="/logo.png" alt="SALTORA Logo" class="h-9 w-auto object-contain">
                <span class="font-serif text-xl sm:text-2xl font-bold tracking-wider text-saltora-text">SALTORA</span>
            </a>

            <nav class="hidden lg:flex items-center space-x-5 xl:space-x-8 text-[12px] font-semibold tracking-wider text-saltora-text uppercase mx-auto">
                <a href="/about" class="hover:text-saltora-terracotta transition-colors whitespace-nowrap">ABOUT</a>
                <a href="/products" class="hover:text-saltora-terracotta transition-colors whitespace-nowrap">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors whitespace-nowrap">CERTIFICATIONS</a>
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors whitespace-nowrap">EXPORT & LOGISTICS</a>
                <a href="/contact" class="hover:text-saltora-terracotta transition-colors whitespace-nowrap">CONTACT</a>
            </nav>

            <!-- Header Action Button & Quote CTA -->
            <div class="hidden sm:flex items-center gap-3 shrink-0">
                <a href="/contact" class="bg-saltora-dark hover:bg-black text-white px-4 py-2 text-[11px] font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2 group cursor-pointer rounded-xs border border-amber-900/30 whitespace-nowrap">
                    <i class="fa-solid fa-file-invoice text-[#e07a5f] group-hover:scale-110 transition-transform text-xs"></i>
                    <span>REQUEST A QUOTE</span>
                </a>
            </div>
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

            <!-- Category 3: Legal & Export Feeds -->
            <div class="bg-white p-6 border border-saltora-border rounded-sm shadow-sm space-y-4">
                <div class="flex items-center gap-3 border-b border-saltora-border pb-3">
                    <div class="w-8 h-8 rounded-full bg-saltora-blush flex items-center justify-center text-saltora-terracotta font-bold text-xs">03</div>
                    <h3 class="font-serif text-xl text-saltora-text font-semibold">Legal & Policies</h3>
                </div>
                <ul class="space-y-2.5 text-xs">
                    <li><a href="/terms" class="text-saltora-text font-semibold hover:text-saltora-terracotta transition-colors block">✦ Terms & Conditions</a></li>
                    <li><a href="/privacy" class="text-saltora-text font-semibold hover:text-saltora-terracotta transition-colors block">✦ Privacy Policy</a></li>
                    <li><a href="/return-policy" class="text-saltora-text font-semibold hover:text-saltora-terracotta transition-colors block">✦ Return & Refund Policy</a></li>
                    <li><a href="/sitemap.xml" target="_blank" class="text-saltora-terracotta font-mono font-bold hover:underline block pt-2">✦ XML Sitemap Feed (/sitemap.xml)</a></li>
                </ul>
            </div>

        </div>

    </main>

    <!-- FOOTER -->
    <x-footer />
    {{-- <x-cart-drawer /> --}}

</body>
</html>
