<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us & Request a Quote — SALTORA</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Get in touch with SALTORA for Himalayan pink salt price quotes, specifications, bulk orders, and private label inquiries. Direct B2B export desk.">
    <meta name="keywords" content="Contact Saltora, Pink Salt Quote, Buy Pink Salt Bulk, Salt Range Export Contact, B2B Salt Inquiry">
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/logo.png">
    <link rel="shortcut icon" type="image/png" href="/logo.png">
    
    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="{ mobileMenuOpen: false }">

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
                <a href="/products" class="hover:text-saltora-terracotta transition-colors cursor-pointer">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors cursor-pointer">CERTIFICATIONS</a>
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors cursor-pointer">EXPORT & LOGISTICS</a>
                <a href="/contact" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1 cursor-pointer">CONTACT</a>
            </nav>

            <!-- Header Action Button -->
            <div class="hidden sm:flex items-center">
                <a href="#contact-form" class="bg-saltora-dark hover:bg-black text-white px-6 py-3 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2 group cursor-pointer">
                    <span>REQUEST A QUOTE</span>
                    <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
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
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-terracotta font-bold cursor-pointer">CONTACT</a>
            <a @click="mobileMenuOpen = false" href="#contact-form" class="block w-full mt-4 bg-saltora-terracotta text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer">
                REQUEST A QUOTE ↗
            </a>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="relative bg-saltora-dark text-white py-24 md:py-32 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border">
        <!-- Backdrop Image - Brighter & Warm -->
        <img src="/heroimg.jpg" alt="Salt Crystals Backdrop" class="absolute inset-0 w-full h-full object-cover opacity-65 filter brightness-105 contrast-105 pointer-events-none transition-transform duration-1000 scale-105">
        <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/55 to-black/35 pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto flex flex-col md:flex-row md:items-end justify-between gap-8">
            <div class="space-y-6 max-w-3xl animate-hero-left">
                <div class="flex items-center gap-3 text-xs font-bold tracking-mega text-saltora-terracotta uppercase">
                    <span class="w-8 h-px bg-saltora-terracotta"></span>
                    <span>CONTACT & INQUIRIES</span>
                </div>

                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-serif text-white font-normal leading-[1.08]">
                    Start your salt inquiry
                </h1>

                <p class="text-stone-300 text-base sm:text-lg leading-relaxed max-w-2xl font-light">
                    Direct export desk for international importers, wholesalers and private-label buyers. Receive a clear, written quotation for your target specifications.
                </p>
            </div>

            <!-- Hero Stats Badge Right -->
            <div class="animate-hero-right shrink-0">
                <div class="bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-sm space-y-3 max-w-xs shadow-2xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-saltora-terracotta/20 border border-saltora-terracotta flex items-center justify-center text-saltora-terracotta">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-serif font-bold text-white">&lt; 24 HOURS</span>
                            <span class="text-[10px] text-stone-300 uppercase tracking-wider font-medium">Export Desk Response Time</span>
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
                <span class="flex items-center gap-2">✦ 24-HOUR RESPONSE SLA ON ALL QUOTE INQUIRIES</span>
                <span class="flex items-center gap-2">✦ DIRECT PRODUCER & EXPORTER PRICING</span>
                <span class="flex items-center gap-2">✦ CUSTOM PRIVATE LABEL & OEM PACKAGING</span>
                <span class="flex items-center gap-2">✦ SAMPLES AVAILABLE ON REQUEST</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 24-HOUR RESPONSE SLA ON ALL QUOTE INQUIRIES</span>
                <span class="flex items-center gap-2">✦ DIRECT PRODUCER & EXPORTER PRICING</span>
                <span class="flex items-center gap-2">✦ CUSTOM PRIVATE LABEL & OEM PACKAGING</span>
                <span class="flex items-center gap-2">✦ SAMPLES AVAILABLE ON REQUEST</span>
            </div>
            <div class="flex items-center gap-10 shrink-0">
                <span class="flex items-center gap-2">✦ 24-HOUR RESPONSE SLA ON ALL QUOTE INQUIRIES</span>
                <span class="flex items-center gap-2">✦ DIRECT PRODUCER & EXPORTER PRICING</span>
                <span class="flex items-center gap-2">✦ CUSTOM PRIVATE LABEL & OEM PACKAGING</span>
                <span class="flex items-center gap-2">✦ SAMPLES AVAILABLE ON REQUEST</span>
            </div>
        </div>
    </div>

    <!-- CONTACT FORM & DETAILS GRID -->
    <section id="contact-form" class="py-20 md:py-28 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            
            <!-- Left 5 Cols: Contact Information -->
            <div class="lg:col-span-5 space-y-8 reveal-on-scroll reveal-from-left">
                <div class="space-y-3">
                    <span class="text-[11px] font-bold tracking-mega text-saltora-terracotta uppercase">DIRECT EXPORT DESK</span>
                    <h2 class="text-3xl sm:text-4xl font-serif text-saltora-text font-normal">
                        Get in touch
                    </h2>
                    <p class="text-xs text-saltora-muted font-light leading-relaxed">
                        Whether you need trial samples, bulk supersack quotes or OEM private-label pricing, our export team responds promptly.
                    </p>
                </div>

                <div class="space-y-6 pt-4 border-t border-saltora-border/70 text-xs">
                    
                    <div class="flex items-start gap-4 group cursor-pointer">
                        <div class="w-10 h-10 rounded-full bg-saltora-blush flex items-center justify-center text-saltora-terracotta group-hover:bg-saltora-terracotta group-hover:text-white transition-colors duration-300 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <span class="text-[10px] font-bold tracking-widest text-saltora-muted uppercase block">EMAIL INQUIRIES</span>
                            <a href="mailto:saltora1329@gmail.com" class="font-semibold text-saltora-text text-sm group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta inline-block">saltora1329@gmail.com</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 group cursor-pointer">
                        <div class="w-10 h-10 rounded-full bg-saltora-blush flex items-center justify-center text-saltora-terracotta group-hover:bg-saltora-terracotta group-hover:text-white transition-colors duration-300 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <span class="text-[10px] font-bold tracking-widest text-saltora-muted uppercase block">WHATSAPP / PHONE</span>
                            <a href="https://wa.me/923180735748" class="font-semibold text-saltora-text text-sm group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta inline-block">+92 318 0735748</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 group cursor-pointer">
                        <div class="w-10 h-10 rounded-full bg-saltora-blush flex items-center justify-center text-saltora-terracotta group-hover:bg-saltora-terracotta group-hover:text-white transition-colors duration-300 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <span class="text-[10px] font-bold tracking-widest text-saltora-muted uppercase block">OFFICIAL WEBSITE</span>
                            <a href="http://www.saltora.net" target="_blank" class="font-semibold text-saltora-text text-sm group-hover:translate-x-1.5 transition-transform duration-300 ease-out group-hover:text-saltora-terracotta inline-block">www.saltora.net</a>
                        </div>
                    </div>

                </div>

                <div class="bg-saltora-dark text-white p-6 rounded-sm space-y-2 border border-saltora-dark-border shadow-md reveal-on-scroll reveal-scale">
                    <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase block">STANDARD EXPORT TERMS</span>
                    <h4 class="font-serif text-lg font-normal text-amber-100">FOB — Free On Board</h4>
                    <p class="text-xs text-stone-300 font-light leading-relaxed">
                        50% Advance deposit & 50% upon presentation of Bill of Lading. Port of Dispatch: Karachi Port / Port Qasim, Pakistan.
                    </p>
                </div>
            </div>

            <!-- Right 7 Cols: Inquiry Form -->
            <div class="lg:col-span-7 bg-white p-8 md:p-10 rounded-sm border border-saltora-border shadow-sm reveal-on-scroll reveal-from-right">
                <form action="#" method="POST" @submit.prevent="alert('Thank you! Your quote request has been submitted. Saltora export desk will contact you within 24 hours.')" class="space-y-6">
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">Full Name *</label>
                            <input type="text" required placeholder="e.g. John Doe" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">Company Name *</label>
                            <input type="text" required placeholder="e.g. Global Foods Trading" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">Business Email *</label>
                            <input type="email" required placeholder="name@company.com" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">Phone / WhatsApp *</label>
                            <input type="tel" required placeholder="+1 234 567 8900" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">Product Category *</label>
                            <select class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm cursor-pointer">
                                <option>Fine Pink Salt (Table Grade)</option>
                                <option>Coarse Pink Salt (Grinder Grade)</option>
                                <option>Himalayan Salt Granules</option>
                                <option>Salt Chunks / Lumps</option>
                                <option>Industrial Bulk Salt</option>
                                <option>Custom / Private Label Packaging</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">Target Quantity & Port</label>
                            <input type="text" placeholder="e.g. 20ft FCL to Port of Rotterdam" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">Message / Specifications</label>
                        <textarea rows="4" placeholder="Detail your required grain size, packaging format, private label branding or special specifications..." class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-4 text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center justify-center gap-2 cursor-pointer group">
                        <span>SUBMIT QUOTE INQUIRY</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>

                </form>
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

                <div class="flex items-center space-x-3 pt-2 text-stone-400">
                    <a href="https://wa.me/923180735748" class="w-8 h-8 rounded-full border border-stone-700 flex items-center justify-center hover:border-white hover:text-white transition-colors cursor-pointer">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99 0-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    </a>
                </div>
            </div>

            <div class="space-y-3">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">NAVIGATE</h4>
                <ul class="space-y-2 text-stone-400 font-light">
                    <li><a href="/" class="hover:text-white transition-colors cursor-pointer">Home</a></li>
                    <li><a href="/about" class="hover:text-white transition-colors cursor-pointer">About</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors cursor-pointer">Products</a></li>
                    <li><a href="/certifications" class="hover:text-white transition-colors cursor-pointer">Certifications</a></li>
                    <li><a href="/export-logistics" class="hover:text-white transition-colors cursor-pointer">Export & Logistics</a></li>
                    <li><a href="/contact" class="hover:text-white transition-colors text-white font-medium cursor-pointer">Contact</a></li>
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
            <div class="tracking-widest font-serif italic text-stone-400">
                PURE · NATURAL · PREMIUM
            </div>
        </div>
    </footer>

</body>
</html>
