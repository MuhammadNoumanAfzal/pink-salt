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

                    <div class="pt-2 border-t border-saltora-border/60">
                        <span class="text-[10px] font-bold tracking-widest text-saltora-muted uppercase block mb-2.5">OFFICIAL CHANNELS</span>
                        <div class="flex items-center gap-2.5">
                            <a href="https://www.facebook.com/profile.php?id=61593551723253" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-saltora-blush flex items-center justify-center text-saltora-terracotta hover:bg-[#1877F2] hover:text-white transition-all shadow-xs" title="Facebook">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="https://www.instagram.com/saltora13?utm_source=qr&igsh=MXVjNTkyN2RpeWNzbw%3D%3D" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-saltora-blush flex items-center justify-center text-saltora-terracotta hover:bg-gradient-to-tr hover:from-amber-500 hover:via-rose-500 hover:to-purple-600 hover:text-white transition-all shadow-xs" title="Instagram">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                            <a href="https://x.com/Saltoraexporter" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-saltora-blush flex items-center justify-center text-saltora-terracotta hover:bg-black hover:text-white transition-all shadow-xs" title="X (Twitter)">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                            <a href="https://www.tiktok.com/@saltora0?_r=1&_t=ZS-98vMsaJ1iHB" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-saltora-blush flex items-center justify-center text-saltora-terracotta hover:bg-black hover:text-white transition-all shadow-xs" title="TikTok">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.298 0 .59.043.87.127V9.4a6.33 6.33 0 0 0-.87-.06A6.34 6.34 0 0 0 3.14 15.7 6.34 6.34 0 0 0 9.48 22a6.33 6.33 0 0 0 6.34-6.33V9.21a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.64z"/></svg>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="bg-saltora-dark text-white p-6 rounded-sm space-y-2.5 border border-saltora-dark-border shadow-md reveal-on-scroll reveal-scale">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase block">STANDARD EXPORT TERMS</span>
                        <span class="text-[9px] font-semibold tracking-wider uppercase px-2 py-0.5 rounded-xs bg-saltora-terracotta/20 text-saltora-terracotta border border-saltora-terracotta/30">B2B Standard</span>
                    </div>
                    <h4 class="font-serif text-lg font-normal text-amber-100">FOB — Free On Board</h4>
                    <p class="text-xs text-stone-300 font-light leading-relaxed">
                        <strong class="font-semibold text-stone-200">Payment Terms:</strong> 50% advance deposit via T/T &amp; 50% balance upon presentation of Bill of Lading (B/L).
                    </p>
                </div>
            </div>

            <!-- Right 7 Cols: Inquiry Form -->
            <div class="lg:col-span-7 bg-white p-6 sm:p-8 md:p-10 rounded-2xl border border-stone-200/90 shadow-sm reveal-on-scroll reveal-from-right">
                <div class="mb-6 space-y-1">
                    <span class="text-[10px] font-bold tracking-mega text-saltora-terracotta uppercase">B2B EXPORT INQUIRY</span>
                    <h3 class="font-serif text-2xl sm:text-3xl text-stone-900 font-semibold">Request A Proforma Quote</h3>
                    <p class="text-xs sm:text-sm text-stone-500 font-light">Provide your order details and specifications below.</p>
                </div>

                <form id="contactForm" class="space-y-5">
                    @csrf

                    <!-- 2-Column Responsive Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                        <!-- FULL NAME * -->
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold tracking-wider text-stone-700 uppercase">FULL NAME *</label>
                            <input type="text" name="name" required placeholder="Your full name" class="w-full bg-[#FAF7F2] border border-stone-200/90 px-4 py-2.5 sm:py-3 text-xs sm:text-sm focus:outline-none focus:border-saltora-terracotta focus:ring-2 focus:ring-saltora-terracotta/20 focus:bg-white transition-all rounded-xl">
                        </div>

                        <!-- COMPANY NAME * -->
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold tracking-wider text-stone-700 uppercase">COMPANY NAME *</label>
                            <input type="text" name="company" required placeholder="Your company name" class="w-full bg-[#FAF7F2] border border-stone-200/90 px-4 py-2.5 sm:py-3 text-xs sm:text-sm focus:outline-none focus:border-saltora-terracotta focus:ring-2 focus:ring-saltora-terracotta/20 focus:bg-white transition-all rounded-xl">
                        </div>

                        <!-- BUSINESS EMAIL * -->
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold tracking-wider text-stone-700 uppercase">BUSINESS EMAIL *</label>
                            <input type="email" name="email" required placeholder="name@company.com" class="w-full bg-[#FAF7F2] border border-stone-200/90 px-4 py-2.5 sm:py-3 text-xs sm:text-sm focus:outline-none focus:border-saltora-terracotta focus:ring-2 focus:ring-saltora-terracotta/20 focus:bg-white transition-all rounded-xl">
                        </div>

                        <!-- COUNTRY * -->
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold tracking-wider text-stone-700 uppercase">DESTINATION COUNTRY *</label>
                            <input type="text" name="country" required placeholder="Country of destination" class="w-full bg-[#FAF7F2] border border-stone-200/90 px-4 py-2.5 sm:py-3 text-xs sm:text-sm focus:outline-none focus:border-saltora-terracotta focus:ring-2 focus:ring-saltora-terracotta/20 focus:bg-white transition-all rounded-xl">
                        </div>

                        <!-- PHONE / WHATSAPP -->
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold tracking-wider text-stone-700 uppercase">PHONE / WHATSAPP</label>
                            <input type="tel" name="phone" placeholder="+00 000 000 000" class="w-full bg-[#FAF7F2] border border-stone-200/90 px-4 py-2.5 sm:py-3 text-xs sm:text-sm focus:outline-none focus:border-saltora-terracotta focus:ring-2 focus:ring-saltora-terracotta/20 focus:bg-white transition-all rounded-xl">
                        </div>

                        <!-- PRODUCT REQUIRED * -->
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold tracking-wider text-stone-700 uppercase">PRODUCT REQUIRED *</label>
                            <select name="product" id="productSelect" required class="w-full bg-[#FAF7F2] border border-stone-200/90 px-4 py-2.5 sm:py-3 text-xs sm:text-sm focus:outline-none focus:border-saltora-terracotta focus:ring-2 focus:ring-saltora-terracotta/20 focus:bg-white transition-all rounded-xl cursor-pointer">
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
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold tracking-wider text-stone-700 uppercase">QUANTITY REQUIRED *</label>
                            <input type="text" name="quantity" required placeholder="e.g. 1 x 20ft Container / 25 MT" class="w-full bg-[#FAF7F2] border border-stone-200/90 px-4 py-2.5 sm:py-3 text-xs sm:text-sm focus:outline-none focus:border-saltora-terracotta focus:ring-2 focus:ring-saltora-terracotta/20 focus:bg-white transition-all rounded-xl">
                        </div>

                        <!-- PACKAGING REQUIREMENT -->
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold tracking-wider text-stone-700 uppercase">PACKAGING REQUIREMENT</label>
                            <select name="packaging" class="w-full bg-[#FAF7F2] border border-stone-200/90 px-4 py-2.5 sm:py-3 text-xs sm:text-sm focus:outline-none focus:border-saltora-terracotta focus:ring-2 focus:ring-saltora-terracotta/20 focus:bg-white transition-all rounded-xl cursor-pointer">
                                <option value="">Select packaging</option>
                                <option value="Private Label / Custom OEM Packaging (Pouches / Jars / Cartons)">Private Label / OEM Packaging</option>
                                <option value="Stand-Up Zipper Pouches with Window (200g - 1kg)">Stand-Up Zipper Pouches (200g - 1kg)</option>
                                <option value="25kg Food-Grade Polypropylene (PP) Bags with PE Liner">25kg PP Bags with PE Liner</option>
                                <option value="50kg Heavy-Duty Polypropylene Export Bags">50kg Heavy-Duty Export Bags</option>
                                <option value="1-Ton Bulk FIBC Big Bags with Discharge Spout">1-Ton FIBC Jumbo Big Bags</option>
                                <option value="Gourmet Glass Jars & Ceramic Grinder Bottles">Glass Jars & Grinder Bottles</option>
                                <option value="Animal Salt Lick Blocks with Hanging Rope">Animal Salt Licks with Rope</option>
                                <option value="Salt Cooking Tiles & Bricks (Export Boxed)">Salt Cooking Tiles & Bricks</option>
                                <option value="Plain Neutral Export Packaging (Unbranded)">Plain Unbranded Packaging</option>
                                <option value="Custom Packaging Specification">Custom Specification</option>
                            </select>
                        </div>

                        <!-- PRIVATE LABEL & OEM BRANDING OPTION -->
                        <div class="sm:col-span-2 bg-[#FAF7F2] p-4 rounded-xl border border-stone-200/90 space-y-2">
                            <div class="flex items-center justify-between">
                                <label class="block text-[11px] font-bold tracking-wider text-stone-700 uppercase flex items-center gap-1.5">
                                    <i class="fa-solid fa-stamp text-saltora-terracotta"></i>
                                    <span>PRIVATE LABEL & PACKAGING OPTION *</span>
                                </label>
                                <span class="text-[10px] text-emerald-800 font-bold uppercase bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-full inline-flex items-center gap-1">
                                    <i class="fa-solid fa-circle-check text-emerald-600 text-[10px]"></i> OEM Available
                                </span>
                            </div>
                            <select name="private_label" required class="w-full bg-white border border-stone-200 px-4 py-2.5 sm:py-3 text-xs sm:text-sm focus:outline-none focus:border-saltora-terracotta focus:ring-2 focus:ring-saltora-terracotta/20 rounded-xl cursor-pointer">
                                <option value="Yes — Full Private Label / Custom OEM Packaging (My Brand Logo & Artwork)">Yes — Custom Private Label / OEM Packaging</option>
                                <option value="No — Standard Saltora Brand Packaging">No — Standard Saltora Packaging</option>
                                <option value="Plain Neutral Export Packaging (White-label unbranded packaging)">Plain Unbranded Export Packaging</option>
                                <option value="Need Consultation on Private Label Dielines & Barcodes First">Need Packaging Consultation First</option>
                            </select>
                            <p class="text-[11px] text-stone-500 font-light">
                                Custom pouches, retail jars, barcodes, and master cartons printed to your exact specifications.
                            </p>
                        </div>

                        <!-- DESTINATION PORT -->
                        <div class="sm:col-span-2 space-y-1.5">
                            <label class="block text-[11px] font-bold tracking-wider text-stone-700 uppercase">DESTINATION PORT</label>
                            <input type="text" name="destination_port" placeholder="e.g. Jebel Ali, Rotterdam, New York, Hamburg" class="w-full bg-[#FAF7F2] border border-stone-200/90 px-4 py-2.5 sm:py-3 text-xs sm:text-sm focus:outline-none focus:border-saltora-terracotta focus:ring-2 focus:ring-saltora-terracotta/20 focus:bg-white transition-all rounded-xl">
                        </div>

                        <!-- TIME DELIVERY NOTICE -->
                        <div class="sm:col-span-2 bg-amber-50/90 border border-amber-200/90 p-4 rounded-xl flex items-start gap-3 text-xs shadow-2xs">
                            <i class="fa-solid fa-ship text-amber-700 text-sm mt-0.5 shrink-0"></i>
                            <div class="space-y-0.5">
                                <span class="text-[11px] font-bold text-amber-900 uppercase tracking-wider block">Maritime Shipping & Schedule Advisory</span>
                                <p class="text-[11px] text-amber-950 font-normal leading-relaxed">
                                    <strong>Delivery Timelines:</strong> Ocean freight rates and transit routes are quoted and confirmed per booking upon proforma agreement.
                                </p>
                            </div>
                            <input type="hidden" name="delivery_timeline" value="Unpredictable due to Iran-USA war">
                        </div>

                        <!-- MESSAGE / SPECIFICATIONS -->
                        <div class="sm:col-span-2 space-y-1.5">
                            <label class="block text-[11px] font-bold tracking-wider text-stone-700 uppercase">DETAILED SPECIFICATIONS & MESSAGE *</label>
                            <textarea name="message" required rows="4" placeholder="Specify your required grain mesh size, chemical purity grade, packaging format, and any custom requirements..." class="w-full bg-[#FAF7F2] border border-stone-200/90 px-4 py-3 text-xs sm:text-sm focus:outline-none focus:border-saltora-terracotta focus:ring-2 focus:ring-saltora-terracotta/20 focus:bg-white transition-all rounded-xl leading-relaxed"></textarea>
                            <p class="text-[11px] text-stone-400 font-light">Please include target specifications to expedite your proforma quotation.</p>
                        </div>
                    </div>

                    <button type="submit" id="submitContactBtn" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3.5 px-6 rounded-xl text-xs sm:text-sm font-bold tracking-wider uppercase transition-all shadow-md hover:shadow-lg flex items-center justify-center gap-2 cursor-pointer group">
                        <span>REQUEST FORMAL PROFORMA QUOTE</span>
                        <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
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
