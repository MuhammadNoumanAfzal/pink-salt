<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us & Request a Quote — SALTORA | Himalayan Pink Salt Exporter</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Contact SALTORA for commercial B2B pink salt quotations, pricing, FOB terms, and custom export specifications from Pakistan.">
    <meta name="keywords" content="Contact Saltora, Request Pink Salt Quote, B2B Salt Quotation, Export Himalayan Salt Pakistan">
    
    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="{ mobileMenuOpen: false }">

    <!-- Single Sticky Navigation Header -->
    <header class="sticky top-0 z-40 bg-saltora-bg/95 backdrop-blur-md border-b border-saltora-border/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-10 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3 group">
                <img src="/logo.png" alt="SALTORA Logo" class="h-10 w-auto object-contain transition-transform group-hover:scale-105" onerror="this.onerror=null; this.classList.add('hidden'); document.getElementById('logo-fallback').classList.remove('hidden');">
                <div id="logo-fallback" class="hidden flex items-center gap-2">
                    <svg class="w-8 h-8 text-saltora-terracotta" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2L2 19h20L12 2zm0 3.8L17.5 17H6.5L12 5.8z" />
                    </svg>
                    <span class="font-serif text-2xl font-bold tracking-wider text-saltora-text">SALTORA</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-9 text-xs font-semibold tracking-widest text-saltora-text uppercase">
                <a href="/about" class="hover:text-saltora-terracotta transition-colors">ABOUT</a>
                <a href="/products" class="hover:text-saltora-terracotta transition-colors">PRODUCTS</a>
                <a href="/certifications" class="hover:text-saltora-terracotta transition-colors">CERTIFICATIONS</a>
                <a href="/export-logistics" class="hover:text-saltora-terracotta transition-colors">EXPORT & LOGISTICS</a>
                <a href="/contact" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1">CONTACT</a>
            </nav>

            <!-- Header Action Button -->
            <div class="hidden sm:flex items-center">
                <a href="#contact-form" class="bg-saltora-dark hover:bg-black text-white px-6 py-3 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2 group">
                    <span>REQUEST A QUOTE</span>
                    <span class="transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-saltora-text p-2 rounded-md focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileMenuOpen" x-cloak x-transition class="lg:hidden bg-saltora-bg border-b border-saltora-border px-6 py-6 space-y-4 text-xs font-semibold tracking-widest uppercase">
            <a @click="mobileMenuOpen = false" href="/about" class="block py-2 text-saltora-text hover:text-saltora-terracotta">ABOUT</a>
            <a @click="mobileMenuOpen = false" href="/products" class="block py-2 text-saltora-text hover:text-saltora-terracotta">PRODUCTS</a>
            <a @click="mobileMenuOpen = false" href="/certifications" class="block py-2 text-saltora-text hover:text-saltora-terracotta">CERTIFICATIONS</a>
            <a @click="mobileMenuOpen = false" href="/export-logistics" class="block py-2 text-saltora-text hover:text-saltora-terracotta">EXPORT & LOGISTICS</a>
            <a @click="mobileMenuOpen = false" href="/contact" class="block py-2 text-saltora-terracotta font-bold">CONTACT</a>
            <a @click="mobileMenuOpen = false" href="#contact-form" class="block w-full mt-4 bg-saltora-terracotta text-white py-3 text-center text-xs font-bold tracking-wider uppercase">
                REQUEST A QUOTE ↗
            </a>
        </div>
    </header>

    <!-- MAIN CONTACT SECTION -->
    <section class="py-16 md:py-24 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <!-- Left Column: Contact Details & Info -->
            <div class="lg:col-span-5 space-y-8">
                <!-- Sub-tag -->
                <div class="flex items-center gap-3 text-xs font-bold tracking-mega text-saltora-terracotta uppercase">
                    <span class="w-8 h-px bg-saltora-terracotta"></span>
                    <span>REQUEST A QUOTE</span>
                </div>

                <!-- Headline -->
                <h1 class="text-4xl sm:text-5xl font-serif text-saltora-text font-normal leading-[1.12]">
                    Let's talk about your salt requirement
                </h1>

                <!-- Subtext -->
                <p class="text-saltora-muted text-sm sm:text-base font-light leading-relaxed">
                    Share your product, quantity, packaging and destination port. Saltora responds with a professional, written quotation — under clear FOB terms.
                </p>

                <!-- Contact Info Items -->
                <div class="space-y-6 pt-2">
                    
                    <!-- Email -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 border border-saltora-border rounded-sm flex items-center justify-center text-saltora-text text-base shrink-0 bg-white">
                            ✉
                        </div>
                        <div>
                            <span class="text-[10px] font-bold tracking-widest text-saltora-muted uppercase block">EMAIL</span>
                            <a href="mailto:saltora1329@gmail.com" class="font-medium text-sm text-saltora-text hover:text-saltora-terracotta transition-colors">saltora1329@gmail.com</a>
                        </div>
                    </div>

                    <!-- WhatsApp -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 border border-saltora-border rounded-sm flex items-center justify-center text-saltora-text text-base shrink-0 bg-white">
                            📞
                        </div>
                        <div>
                            <span class="text-[10px] font-bold tracking-widest text-saltora-muted uppercase block">WHATSAPP</span>
                            <a href="https://wa.me/923180735748" class="font-medium text-sm text-saltora-text hover:text-saltora-terracotta transition-colors">+92 318 0735748</a>
                        </div>
                    </div>

                    <!-- Website -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 border border-saltora-border rounded-sm flex items-center justify-center text-saltora-text text-base shrink-0 bg-white">
                            🌐
                        </div>
                        <div>
                            <span class="text-[10px] font-bold tracking-widest text-saltora-muted uppercase block">WEBSITE</span>
                            <a href="http://www.saltora.net" target="_blank" class="font-medium text-sm text-saltora-text hover:text-saltora-terracotta transition-colors">www.saltora.net</a>
                        </div>
                    </div>

                    <!-- Response -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 border border-saltora-border rounded-sm flex items-center justify-center text-saltora-text text-base shrink-0 bg-white">
                            🕒
                        </div>
                        <div>
                            <span class="text-[10px] font-bold tracking-widest text-saltora-muted uppercase block">RESPONSE</span>
                            <p class="font-medium text-xs text-saltora-text">We reply to serious B2B inquiries promptly</p>
                        </div>
                    </div>

                </div>

                <!-- Social Follow Icons -->
                <div class="pt-2">
                    <span class="text-[10px] font-bold tracking-widest text-saltora-muted uppercase block mb-3">FOLLOW</span>
                    <div class="flex items-center space-x-2 text-saltora-text">
                        <a href="#" class="w-9 h-9 border border-saltora-border rounded-sm flex items-center justify-center hover:border-saltora-terracotta hover:text-saltora-terracotta transition-colors bg-white">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 border border-saltora-border rounded-sm flex items-center justify-center hover:border-saltora-terracotta hover:text-saltora-terracotta transition-colors bg-white">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.7 5H18V0h-3.808C10.592 0 9 1.583 9 4.615V8z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 border border-saltora-border rounded-sm flex items-center justify-center hover:border-saltora-terracotta hover:text-saltora-terracotta transition-colors bg-white">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 border border-saltora-border rounded-sm flex items-center justify-center hover:border-saltora-terracotta hover:text-saltora-terracotta transition-colors bg-white text-xs font-bold">
                            TT
                        </a>
                        <a href="https://wa.me/923180735748" class="w-9 h-9 border border-saltora-border rounded-sm flex items-center justify-center hover:border-saltora-terracotta hover:text-saltora-terracotta transition-colors bg-white">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99 0-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Export Terms Dark Box -->
                <div class="bg-[#1C1917] p-6 border border-stone-800 rounded-sm text-white space-y-2 shadow-lg mt-8">
                    <span class="text-[10px] font-bold tracking-widest text-saltora-terracotta uppercase block">EXPORT TERMS</span>
                    <p class="font-serif text-lg font-normal leading-snug text-white">
                        FOB — 50% advance & 50% upon presentation of Bill of Lading
                    </p>
                </div>
            </div>

            <!-- Right Column: Contact Quote Form Box -->
            <div id="contact-form" class="lg:col-span-7 bg-[#FAF7F2] p-8 sm:p-10 border border-saltora-border rounded-sm shadow-sm">
                
                <form action="mailto:saltora1329@gmail.com" method="post" enctype="text/plain" class="space-y-6 text-xs">
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="block font-semibold tracking-wider text-saltora-muted uppercase text-[10px]">FULL NAME *</label>
                            <input type="text" name="Full Name" required placeholder="Your full name" class="w-full bg-transparent border-b border-saltora-border py-2 text-saltora-text placeholder-saltora-muted/60 focus:outline-none focus:border-saltora-terracotta transition-colors">
                        </div>
                        <div class="space-y-1.5">
                            <label class="block font-semibold tracking-wider text-saltora-muted uppercase text-[10px]">COMPANY NAME *</label>
                            <input type="text" name="Company Name" required placeholder="Your company" class="w-full bg-transparent border-b border-saltora-border py-2 text-saltora-text placeholder-saltora-muted/60 focus:outline-none focus:border-saltora-terracotta transition-colors">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="block font-semibold tracking-wider text-saltora-muted uppercase text-[10px]">BUSINESS EMAIL *</label>
                            <input type="email" name="Email" required placeholder="name@company.com" class="w-full bg-transparent border-b border-saltora-border py-2 text-saltora-text placeholder-saltora-muted/60 focus:outline-none focus:border-saltora-terracotta transition-colors">
                        </div>
                        <div class="space-y-1.5">
                            <label class="block font-semibold tracking-wider text-saltora-muted uppercase text-[10px]">COUNTRY *</label>
                            <input type="text" name="Country" required placeholder="Destination country" class="w-full bg-transparent border-b border-saltora-border py-2 text-saltora-text placeholder-saltora-muted/60 focus:outline-none focus:border-saltora-terracotta transition-colors">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="block font-semibold tracking-wider text-saltora-muted uppercase text-[10px]">PHONE / WHATSAPP</label>
                            <input type="text" name="Phone" placeholder="+00 000 000 000" class="w-full bg-transparent border-b border-saltora-border py-2 text-saltora-text placeholder-saltora-muted/60 focus:outline-none focus:border-saltora-terracotta transition-colors">
                        </div>
                        <div class="space-y-1.5">
                            <label class="block font-semibold tracking-wider text-saltora-muted uppercase text-[10px]">PRODUCT REQUIRED *</label>
                            <select name="Product Required" required class="w-full bg-transparent border-b border-saltora-border py-2 text-saltora-text focus:outline-none focus:border-saltora-terracotta transition-colors">
                                <option value="">Select a product</option>
                                <option value="Himalayan Pink Salt (Standard)">Himalayan Pink Salt (Standard)</option>
                                <option value="Fine Himalayan Pink Salt">Fine Himalayan Pink Salt</option>
                                <option value="Coarse Himalayan Pink Salt">Coarse Himalayan Pink Salt</option>
                                <option value="Himalayan Salt Granules">Himalayan Salt Granules</option>
                                <option value="Animal Salt Lick Blocks">Animal Salt Lick Blocks</option>
                                <option value="Private Label OEM Packaging">Private Label OEM Packaging</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="block font-semibold tracking-wider text-saltora-muted uppercase text-[10px]">QUANTITY REQUIRED *</label>
                            <input type="text" name="Quantity Required" required placeholder="e.g. 1 x 20ft container / 25 MT" class="w-full bg-transparent border-b border-saltora-border py-2 text-saltora-text placeholder-saltora-muted/60 focus:outline-none focus:border-saltora-terracotta transition-colors">
                        </div>
                        <div class="space-y-1.5">
                            <label class="block font-semibold tracking-wider text-saltora-muted uppercase text-[10px]">PACKAGING REQUIREMENT</label>
                            <select name="Packaging Requirement" class="w-full bg-transparent border-b border-saltora-border py-2 text-saltora-text focus:outline-none focus:border-saltora-terracotta transition-colors">
                                <option value="">Select packaging</option>
                                <option value="25kg Bags">25kg Food-Grade Sacks</option>
                                <option value="50lb Bags">50lb Craft Sacks</option>
                                <option value="1000kg FIBC Jumbo Bags">1000kg FIBC Bulk Jumbo Bags</option>
                                <option value="Retail Pouches">Retail Stand-up Pouches</option>
                                <option value="Custom Box Packaging">Custom OEM Box Packaging</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label class="block font-semibold tracking-wider text-saltora-muted uppercase text-[10px]">DESTINATION PORT</label>
                        <input type="text" name="Destination Port" placeholder="e.g. Jebel Ali, Rotterdam, New York" class="w-full bg-transparent border-b border-saltora-border py-2 text-saltora-text placeholder-saltora-muted/60 focus:outline-none focus:border-saltora-terracotta transition-colors">
                    </div>

                    <div class="space-y-1.5">
                        <label class="block font-semibold tracking-wider text-saltora-muted uppercase text-[10px]">MESSAGE</label>
                        <textarea name="Message" rows="3" placeholder="Tell us about your requirement — specifications, target timeline, private-label needs..." class="w-full bg-transparent border-b border-saltora-border py-2 text-saltora-text placeholder-saltora-muted/60 focus:outline-none focus:border-saltora-terracotta transition-colors resize-none"></textarea>
                    </div>

                    <div class="pt-4 flex flex-wrap items-center justify-between gap-4">
                        <button type="submit" class="bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white px-8 py-4 font-bold tracking-wider uppercase text-xs transition-all shadow flex items-center gap-2 group">
                            <span>REQUEST A QUOTE</span>
                            <span class="transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">↗</span>
                        </button>

                        <a href="mailto:saltora1329@gmail.com" class="text-xs font-bold tracking-wider text-saltora-text uppercase flex items-center gap-2 hover:text-saltora-terracotta transition-colors">
                            <span>✉</span>
                            <span>SALTORA1329@GMAIL.COM</span>
                        </a>
                    </div>

                    <p class="text-[10px] text-saltora-muted/70 pt-2 font-light">
                        This form opens your email application with the inquiry pre-filled — nothing is stored on this website.
                    </p>

                </form>

            </div>

        </div>
    </section>

    <!-- FOOTER SECTION -->
    <footer class="bg-[#141211] text-stone-400 py-16 px-6 md:px-12 border-t border-stone-800 text-xs">
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
                    <a href="#" class="w-8 h-8 rounded-full border border-stone-700 flex items-center justify-center hover:border-white hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full border border-stone-700 flex items-center justify-center hover:border-white hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.7 5H18V0h-3.808C10.592 0 9 1.583 9 4.615V8z"/></svg>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full border border-stone-700 flex items-center justify-center hover:border-white hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                    <a href="https://wa.me/923180735748" class="w-8 h-8 rounded-full border border-stone-700 flex items-center justify-center hover:border-white hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99 0-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    </a>
                </div>
            </div>

            <div class="space-y-3">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">NAVIGATE</h4>
                <ul class="space-y-2 text-stone-400 font-light">
                    <li><a href="/" class="hover:text-white transition-colors">Home</a></li>
                    <li><a href="/about" class="hover:text-white transition-colors">About</a></li>
                    <li><a href="/products" class="hover:text-white transition-colors">Products</a></li>
                    <li><a href="/certifications" class="hover:text-white transition-colors">Certifications</a></li>
                    <li><a href="/export-logistics" class="hover:text-white transition-colors">Export & Logistics</a></li>
                    <li><a href="/contact" class="hover:text-white transition-colors text-white font-medium">Contact</a></li>
                </ul>
            </div>

            <div class="lg:col-span-2 space-y-4">
                <h4 class="font-serif text-sm text-white font-normal uppercase tracking-wider">CONTACT</h4>
                <div class="space-y-2 text-stone-400 font-light">
                    <p class="flex items-center gap-2">
                        <span class="text-stone-500">✉</span>
                        <a href="mailto:saltora1329@gmail.com" class="hover:text-white transition-colors">saltora1329@gmail.com</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="text-stone-500">📞</span>
                        <a href="tel:+923180735748" class="hover:text-white transition-colors">+92 318 0735748</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="text-stone-500">🌐</span>
                        <a href="http://www.saltora.net" target="_blank" class="hover:text-white transition-colors">www.saltora.net</a>
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
