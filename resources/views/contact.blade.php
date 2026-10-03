<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Contact Us & Request a Quote — SALTORA</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Get in touch with SALTORA for Himalayan pink salt price quotes, specifications, bulk orders, and private label inquiries. Direct B2B export desk.">
    <meta name="keywords" content="Contact Saltora, Pink Salt Quote, Buy Pink Salt Bulk, Salt Range Export Contact, B2B Salt Inquiry">
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/logo.png">
    <link rel="shortcut icon" type="image/png" href="/logo.png">
    
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Custom Animations & Styles -->
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
    </style>
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="shopManager()">

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
                <a href="/products" class="hover:text-saltora-terracotta transition-colors cursor-pointer">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors cursor-pointer">CERTIFICATIONS</a>
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors cursor-pointer">EXPORT & LOGISTICS</a>
                <a href="/blog" class="hover:text-saltora-terracotta transition-colors cursor-pointer">BLOG</a>
                <a href="/contact" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1 cursor-pointer">CONTACT</a>
            </nav>

            <!-- Header Action Button & Quote CTA -->
            <div class="hidden sm:flex items-center gap-3">
                <a href="#contactForm" class="bg-saltora-dark hover:bg-black text-white px-5 py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2.5 group cursor-pointer rounded-xs border border-amber-900/30">
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
            <a @click="mobileMenuOpen = false" href="/blog" class="block py-2 text-saltora-text hover:text-saltora-terracotta cursor-pointer">BLOG</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-terracotta font-bold cursor-pointer">CONTACT</a>
            <a href="#contactForm" @click="mobileMenuOpen = false" class="flex items-center justify-center gap-2 w-full mt-4 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer rounded-xs shadow-md transition-colors">
                <i class="fa-solid fa-file-invoice text-amber-200 text-sm"></i>
                <span>REQUEST A QUOTE</span>
            </a>
        </div>
    </header>

    <!-- CONTACT HERO SECTION -->
    <section class="relative bg-saltora-dark text-white py-20 md:py-28 px-6 md:px-12 overflow-hidden border-b border-saltora-dark-border" style="padding-top: 6rem; padding-bottom: 6rem;">
        <!-- New Generated Ambient Background Image (`/contact-hero.jpg`) -->
        <img src="/contact-hero.jpg" alt="SALTORA Executive B2B Salt Export Desk and Maritime Port Logistics" class="absolute inset-0 w-full h-full object-cover opacity-80 filter contrast-105 brightness-100 pointer-events-none scale-105 transition-transform duration-1000">
        
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
                <span class="text-amber-300 font-bold">DIRECT EXPORT DESK</span>
                <span class="text-white/50">&bull;</span>
                <span class="text-[11px] text-stone-200">&lt; 24-HOUR FORMAL RESPONSE SLA</span>
            </div>
            
            <!-- Headline with Drop Shadow for Maximum Legibility -->
            <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-6.5xl font-serif text-white leading-[1.1] max-w-3xl mx-auto font-normal tracking-tight drop-shadow-md">
                Start Your Salt Inquiry, <br class="hidden sm:inline">
                <span class="italic font-normal text-amber-300">
                    Connect With Our Global Desk
                </span>
            </h1>

            <!-- Subtitle with Solid Bright Text -->
            <p class="text-stone-100 sm:text-stone-200 text-sm sm:text-base md:text-lg max-w-2xl mx-auto font-normal leading-relaxed drop-shadow-sm">
                Direct export desk for international importers, industrial processors, and private-label brand owners. Receive verified specification sheets, factory-gate pricing, and FOB/CIF delivery quotations.
            </p>

            <!-- Action CTAs -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
                <a href="#contactForm" class="w-full sm:w-auto px-8 py-3.5 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white text-xs font-bold uppercase tracking-widest rounded-xl transition-all shadow-xl hover:shadow-saltora-terracotta/40 flex items-center justify-center gap-2.5 active:scale-95 cursor-pointer">
                    <i class="fa-solid fa-file-pen text-amber-200"></i>
                    <span>REQUEST FORMAL QUOTE</span>
                    <i class="fa-solid fa-arrow-down text-[11px]"></i>
                </a>

                <a href="https://wa.me/923180735748?text=Hello%20Saltora%20Export%20Desk%2C%20I%20am%20interested%20in%20Himalayan%20Pink%20Salt%20wholesale%20quotation." target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto px-7 py-3.5 bg-black/50 hover:bg-black/75 text-white border border-white/30 hover:border-emerald-400 text-xs font-bold uppercase tracking-widest rounded-xl backdrop-blur-md transition-all flex items-center justify-center gap-2.5 cursor-pointer shadow-md">
                    <i class="fa-brands fa-whatsapp text-emerald-400 text-base"></i>
                    <span>WHATSAPP TRADE DESK</span>
                </a>
            </div>

            <!-- Sleek Trust Strip (Clean high-contrast inline typography) -->
            <div class="pt-6 border-t border-white/20 grid grid-cols-2 md:grid-cols-4 gap-4 text-left max-w-3xl mx-auto">
                <div class="flex items-center gap-2.5 text-stone-100 text-xs font-semibold drop-shadow-xs">
                    <i class="fa-solid fa-clock text-amber-400 text-sm shrink-0"></i>
                    <span>&lt; 24h Formal Response</span>
                </div>
                <div class="flex items-center gap-2.5 text-stone-100 text-xs font-semibold drop-shadow-xs">
                    <i class="fa-solid fa-vial-circle-check text-amber-400 text-sm shrink-0"></i>
                    <span>Free Certified Lab Samples</span>
                </div>
                <div class="flex items-center gap-2.5 text-stone-100 text-xs font-semibold drop-shadow-xs">
                    <i class="fa-solid fa-ship text-amber-400 text-sm shrink-0"></i>
                    <span>FOB Karachi / CIF World</span>
                </div>
                <div class="flex items-center gap-2.5 text-stone-100 text-xs font-semibold drop-shadow-xs">
                    <i class="fa-solid fa-certificate text-amber-400 text-sm shrink-0"></i>
                    <span>ISO 22000 & Halal Certified</span>
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
                <div class="mb-6 space-y-1">
                    <span class="text-[10px] font-bold tracking-mega text-saltora-terracotta uppercase">REQUEST FORMAL EXPORT QUOTE</span>
                    <h3 class="font-serif text-2xl text-saltora-text font-normal">Direct B2B Trade & Proforma Inquiry</h3>
                    <p class="text-xs text-saltora-muted font-light">Fill out the trade form below with your full volume and product specifications.</p>
                </div>

                <form id="contactForm" class="space-y-6">
                    @csrf

                    <!-- 2-Column Responsive Grid matching Client Template -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- FULL NAME * -->
                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">FULL NAME *</label>
                            <input type="text" name="name" required placeholder="Your full name" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>

                        <!-- COMPANY NAME * -->
                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">COMPANY NAME *</label>
                            <input type="text" name="company" required placeholder="Your company" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>

                        <!-- BUSINESS EMAIL * -->
                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">BUSINESS EMAIL *</label>
                            <input type="email" name="email" required placeholder="name@company.com" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>

                        <!-- COUNTRY * -->
                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">COUNTRY *</label>
                            <input type="text" name="country" required placeholder="Destination country" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>

                        <!-- PHONE / WHATSAPP -->
                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">PHONE / WHATSAPP</label>
                            <input type="tel" name="phone" placeholder="+00 000 000 000" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>

                        <!-- PRODUCT REQUIRED * -->
                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">PRODUCT REQUIRED *</label>
                            <select name="product" id="productSelect" required class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm cursor-pointer">
                                <option value="">Select a product</option>
                                @if(isset($categories) && count($categories) > 0)
                                    @foreach($categories as $category)
                                        <optgroup label="{{ $category->name }}">
                                            @foreach($products->where('category_id', $category->id) as $prod)
                                                <option value="{{ $prod->name }}">{{ $prod->name }}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                    <optgroup label="Other / Consolidated Export">
                                        <option value="Mixed 20ft Container (Assorted Products)">Mixed 20ft Container (Assorted Products)</option>
                                        <option value="Custom Mesh Specification / Bulk Rock Salt">Custom Mesh Specification / Bulk Rock Salt</option>
                                    </optgroup>
                                @else
                                    <option value="Fine Pink Salt (0.3 - 0.8 mm)">Fine Pink Salt (0.3 - 0.8 mm)</option>
                                    <option value="Coarse Grinder Pink Salt (2 - 5 mm)">Coarse Grinder Pink Salt (2 - 5 mm)</option>
                                    <option value="Natural Carved Pink Salt Lamp">Natural Carved Pink Salt Lamp</option>
                                    <option value="Himalayan Animal Lick Salt with Rope">Himalayan Animal Lick Salt with Rope</option>
                                    <option value="Himalayan Pink Cooking Salt Tile">Himalayan Pink Cooking Salt Tile</option>
                                    <option value="1-Ton Bulk FIBC Jumbo Bag Salt">1-Ton Bulk FIBC Jumbo Bag Salt</option>
                                @endif
                            </select>
                        </div>

                        <!-- QUANTITY REQUIRED * -->
                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">QUANTITY REQUIRED *</label>
                            <input type="text" name="quantity" required placeholder="e.g. 1 x 20ft container / 25 MT" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>

                        <!-- PACKAGING REQUIREMENT -->
                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">PACKAGING REQUIREMENT</label>
                            <select name="packaging" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm cursor-pointer">
                                <option value="">Select packaging</option>
                                <option value="Private Label / Custom OEM Packaging (Pouches / Jars / Cartons)">Private Label / Custom OEM Packaging (Pouches / Jars / Cartons)</option>
                                <option value="Stand-Up Zipper Pouches with Window (200g - 1kg)">Stand-Up Zipper Pouches with Window (200g - 1kg)</option>
                                <option value="25kg Food-Grade Polypropylene (PP) Bags with PE Liner">25kg Food-Grade Polypropylene (PP) Bags with PE Liner</option>
                                <option value="50kg Heavy-Duty Polypropylene Export Bags">50kg Heavy-Duty Polypropylene Export Bags</option>
                                <option value="1-Ton Bulk FIBC Big Bags with Discharge Spout">1-Ton Bulk FIBC Big Bags with Discharge Spout</option>
                                <option value="Gourmet Glass Jars & Ceramic Grinder Bottles">Gourmet Glass Jars & Ceramic Grinder Bottles</option>
                                <option value="Animal Salt Lick Blocks with Hanging Rope">Animal Salt Lick Blocks with Hanging Rope</option>
                                <option value="Salt Cooking Tiles & Bricks (Export Boxed)">Salt Cooking Tiles & Bricks (Export Boxed)</option>
                                <option value="Plain Neutral Export Packaging (Unbranded)">Plain Neutral Export Packaging (Unbranded)</option>
                                <option value="Custom Packaging Specification">Custom Packaging Specification</option>
                            </select>
                        </div>

                        <!-- PRIVATE LABEL & OEM BRANDING OPTION (MANDATORY PROMINENT OPTION) -->
                        <div class="sm:col-span-2 bg-[#FAF7F2] p-4.5 rounded-sm border border-saltora-border space-y-2.5">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1">
                                <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase flex items-center gap-1.5">
                                    <i class="fa-solid fa-stamp text-[#e07a5f]"></i>
                                    <span>PRIVATE LABEL & PACKAGING OPTION *</span>
                                </label>
                                <span class="text-[10px] text-emerald-800 font-bold uppercase bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-xs inline-block">
                                    <i class="fa-solid fa-circle-check text-emerald-600 mr-1"></i> OEM Private Label Available
                                </span>
                            </div>
                            <select name="private_label" required class="w-full bg-white border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 rounded-sm cursor-pointer">
                                <option value="Yes — Full Private Label / Custom OEM Packaging (My Brand Logo & Artwork)">Yes — Full Private Label / Custom OEM Packaging (My Brand Logo & Artwork)</option>
                                <option value="No — Standard Saltora Brand Packaging">No — Standard Saltora Brand Packaging</option>
                                <option value="Plain Neutral Export Packaging (White-label unbranded packaging)">Plain Neutral Export Packaging (White-label unbranded packaging)</option>
                                <option value="Need Consultation on Private Label Dielines & Barcodes First">Need Consultation on Private Label Dielines & Barcodes First</option>
                            </select>
                            <p class="text-[11px] text-stone-500 font-light leading-relaxed">
                                We print rotogravure pouches, retail jars, barcodes, and export master cartons to your exact brand artwork and regulatory guidelines.
                            </p>
                        </div>

                        <!-- DESTINATION PORT -->
                        <div class="sm:col-span-2 space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">DESTINATION PORT</label>
                            <input type="text" name="destination_port" placeholder="e.g. Jebel Ali, Rotterdam, New York" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>

                        <!-- TIME DELIVERY NOTICE: IRAN-USA WAR GEOPOLITICAL ADVISORY -->
                        <div class="sm:col-span-2 bg-amber-500/10 border-l-4 border-amber-600 p-4 rounded-xs text-xs space-y-1 shadow-xs">
                            <div class="flex items-center gap-2 font-bold text-amber-900 uppercase text-[11px] tracking-wider">
                                <i class="fa-solid fa-triangle-exclamation text-amber-600 text-sm"></i>
                                <span>Maritime Shipping & Delivery Schedule Advisory</span>
                            </div>
                            <p class="text-amber-950 font-normal leading-relaxed text-[11px]">
                                <strong>Time Delivery:</strong> Delivery timelines are currently unpredictable due to the Iran-USA war and regional maritime shipping volatility across Middle Eastern & Red Sea ocean corridors. Vessel departure schedules, transit times, and ocean freight rates are quoted and confirmed per booking upon proforma agreement.
                            </p>
                            <input type="hidden" name="delivery_timeline" value="Unpredictable due to Iran-USA war">
                        </div>

                        <!-- MESSAGE / SPECIFICATIONS WITH EXPLICIT USER INSTRUCTION -->
                        <div class="sm:col-span-2 space-y-2">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1">
                                <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">MESSAGE / DETAILED SPECIFICATIONS *</label>
                                <span class="text-[11px] font-bold text-[#e07a5f] bg-[#FAF7F2] border border-[#e07a5f]/30 px-2.5 py-0.5 rounded-xs">
                                    <i class="fa-solid fa-circle-exclamation mr-1 text-[#e07a5f]"></i> In your enquiry give complete details with specifications
                                </span>
                            </div>
                            <textarea name="message" required rows="5" placeholder="In your enquiry, please give complete details with specifications — target grain mesh size (e.g. Fine 0.3-0.8mm, Coarse 2-5mm, Rock Lumps), chemical purity grade (98.5%+ NaCl), packaging format, private-label needs, destination port, target timeline..." class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm leading-relaxed"></textarea>
                        </div>
                    </div>

                    <button type="submit" id="submitContactBtn" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-4 text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center justify-center gap-2 cursor-pointer group">
                        <span>SUBMIT SPECIFICATION INQUIRY</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </form>

                <script>
                    document.getElementById('contactForm')?.addEventListener('submit', async function(e) {
                        e.preventDefault();
                        const btn = document.getElementById('submitContactBtn');
                        btn.disabled = true;
                        btn.innerHTML = '<span>TRANSMITTING INQUIRY...</span>';

                        try {
                            const response = await fetch('/contact', {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                    'Accept': 'application/json'
                                },
                                body: new FormData(this)
                            });

                            const data = await response.json();
                            if (data.success) {
                                window.Swal.fire({
                                    icon: 'success',
                                    title: 'Inquiry Registered!',
                                    text: data.message,
                                    background: '#1c1917',
                                    color: '#f5f5f4',
                                    confirmButtonColor: '#e07a5f'
                                });
                                this.reset();
                            } else {
                                window.Swal.fire({
                                    icon: 'error',
                                    title: 'Validation Notice',
                                    text: data.message || 'Please check your submitted fields.',
                                    background: '#1c1917',
                                    color: '#f5f5f4'
                                });
                            }
                        } catch (err) {
                            window.Swal.fire({
                                icon: 'error',
                                title: 'Network Error',
                                text: 'Failed to submit inquiry. Please retry or contact us directly via WhatsApp.',
                                background: '#1c1917',
                                color: '#f5f5f4'
                            });
                        } finally {
                            btn.disabled = false;
                            btn.innerHTML = '<span>SUBMIT SPECIFICATION INQUIRY</span>';
                        }
                    });

                    // Pre-fill Product Required if ?product= parameter exists in URL
                    const urlParams = new URLSearchParams(window.location.search);
                    const productParam = urlParams.get('product');
                    if (productParam) {
                        const productSelect = document.getElementById('productSelect');
                        if (productSelect) {
                            let optionFound = false;
                            for (let i = 0; i < productSelect.options.length; i++) {
                                if (productSelect.options[i].text.toLowerCase().includes(productParam.toLowerCase()) ||
                                    productSelect.options[i].value.toLowerCase().includes(productParam.toLowerCase())) {
                                    productSelect.selectedIndex = i;
                                    optionFound = true;
                                    break;
                                }
                            }
                            if (!optionFound) {
                                const newOpt = new Option(productParam, productParam, true, true);
                                productSelect.add(newOpt);
                            }
                        }
                    }
                </script>
            </div>
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <x-footer />
    {{-- <x-cart-drawer /> --}}

</body>
</html>
