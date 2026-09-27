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

            <div class="hidden sm:flex items-center gap-3">
                <button @click="openCartSidebar()" class="bg-saltora-dark hover:bg-black text-white px-5 py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2.5 group cursor-pointer rounded-xs border border-amber-900/30">
                    <svg class="w-4 h-4 text-[#e07a5f] group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                    </svg>
                    <span>SHOPPING CART</span>
                    <span x-show="cartCount > 0" x-text="cartCount" class="bg-[#e07a5f] text-white text-[10px] min-w-[20px] h-5 px-1.5 rounded-full flex items-center justify-center font-bold shadow-xs" x-cloak></span>
                </button>
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
    <footer class="bg-[#181513] text-stone-400 py-12 px-6 border-t border-stone-800 text-xs">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            <p>© 2026 SALTORA Exporter. All Rights Reserved.</p>
            <div class="flex items-center gap-3">
                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-full border border-stone-800 bg-stone-900 flex items-center justify-center text-stone-400 hover:text-[#e07a5f] transition-all cursor-pointer" title="Facebook">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-full border border-stone-800 bg-stone-900 flex items-center justify-center text-stone-400 hover:text-[#e07a5f] transition-all cursor-pointer" title="Instagram">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-full border border-stone-800 bg-stone-900 flex items-center justify-center text-stone-400 hover:text-[#e07a5f] transition-all cursor-pointer" title="LinkedIn">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
                <a href="https://wa.me/923180735748" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-full border border-stone-800 bg-stone-900 flex items-center justify-center text-stone-400 hover:text-emerald-500 transition-all cursor-pointer" title="WhatsApp Desk">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                </a>
            </div>
            <div class="flex items-center gap-6">
                <a href="/terms" class="hover:text-white transition-colors">Terms & Conditions</a>
                <a href="/privacy" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="/return-policy" class="hover:text-white transition-colors">Return & Refund Policy</a>
            </div>
        </div>
    </footer>

    <x-cart-drawer />

</body>
</html>
