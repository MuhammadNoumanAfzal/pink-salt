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
</head>
<body class="bg-saltora-bg text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="shopManager()">

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
                <a href="/blog" class="hover:text-saltora-terracotta transition-colors cursor-pointer">BLOG</a>
                <a href="/contact" class="text-saltora-terracotta font-bold border-b-2 border-saltora-terracotta pb-1 cursor-pointer">CONTACT</a>
            </nav>

            <!-- Header Action Button & Quote CTA -->
            <div class="hidden sm:flex items-center gap-3">
                {{--
                <!-- SHOPPING CART COMMENTED OUT -->
                <button @click="openCartSidebar()" class="bg-saltora-dark hover:bg-black text-white px-5 py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2.5 group cursor-pointer rounded-xs border border-amber-900/30">
                    <svg class="w-4 h-4 text-[#e07a5f] group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                    </svg>
                    <span>SHOPPING CART</span>
                    <span x-show="cartCount > 0" x-text="cartCount" class="bg-[#e07a5f] text-white text-[10px] min-w-[20px] h-5 px-1.5 rounded-full flex items-center justify-center font-bold shadow-xs" x-cloak></span>
                </button>
                --}}
                <a href="#contactForm" class="bg-saltora-dark hover:bg-black text-white px-5 py-2.5 text-xs font-bold tracking-wider uppercase transition-all duration-200 shadow-sm hover:shadow flex items-center gap-2.5 group cursor-pointer rounded-xs border border-amber-900/30">
                    <i class="fa-solid fa-file-invoice text-[#e07a5f] group-hover:scale-110 transition-transform text-xs"></i>
                    <span>REQUEST A QUOTE</span>
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
            {{--
            <!-- SHOPPING CART COMMENTED OUT -->
            <button @click="mobileMenuOpen = false; openCartSidebar()" class="flex items-center justify-center gap-2.5 w-full mt-4 bg-saltora-terracotta text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer rounded-xs shadow-md">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                </svg>
                <span>SHOPPING CART</span>
                <span x-show="cartCount > 0" x-text="'(' + cartCount + ')'" x-cloak></span>
            </button>
            --}}
            <a href="#contactForm" @click="mobileMenuOpen = false" class="flex items-center justify-center gap-2 w-full mt-4 bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-3 text-center text-xs font-bold tracking-wider uppercase cursor-pointer rounded-xs shadow-md transition-colors">
                <i class="fa-solid fa-file-invoice text-amber-200 text-sm"></i>
                <span>REQUEST A QUOTE</span>
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
                <form id="contactForm" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">Full Name *</label>
                            <input type="text" name="name" required placeholder="e.g. John Doe" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">Company Name</label>
                            <input type="text" name="company" placeholder="e.g. Global Foods Trading" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">Business Email *</label>
                            <input type="email" name="email" required placeholder="name@company.com" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">Phone / WhatsApp</label>
                            <input type="tel" name="phone" placeholder="+1 234 567 8900" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">Subject / Product</label>
                            <input type="text" name="subject" value="{{ request('product') ? 'Quote Request: ' . request('product') : (request('subject') ?? '') }}" placeholder="e.g. Fine Pink Salt FCL Quote" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">Destination Country</label>
                            <input type="text" name="country" placeholder="e.g. United States / Germany" class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-xs font-bold tracking-wider text-saltora-text uppercase">Message / Specifications *</label>
                        <textarea name="message" required rows="4" placeholder="Detail your required grain size, packaging format, private label branding or special specifications..." class="w-full bg-saltora-bg border border-saltora-border px-4 py-3 text-xs focus:outline-none focus:border-saltora-terracotta focus:ring-1 focus:ring-saltora-terracotta/40 transition-all duration-300 rounded-sm"></textarea>
                    </div>

                    <button type="submit" id="submitContactBtn" class="w-full bg-saltora-terracotta hover:bg-saltora-terracotta-dark text-white py-4 text-xs font-bold tracking-wider uppercase transition-all shadow flex items-center justify-center gap-2 cursor-pointer group">
                        <span>SUBMIT INQUIRY</span>
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
                        btn.innerHTML = '<span>SENDING INQUIRY...</span>';

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
                                    title: 'Inquiry Received!',
                                    text: data.message,
                                    background: '#1c1917',
                                    color: '#f5f5f4',
                                    confirmButtonColor: '#e07a5f'
                                });
                                this.reset();
                            } else {
                                window.Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: data.message || 'Validation error.',
                                    background: '#1c1917',
                                    color: '#f5f5f4'
                                });
                            }
                        } catch (err) {
                            window.Swal.fire({
                                icon: 'error',
                                title: 'Network Error',
                                text: 'Failed to send inquiry.',
                                background: '#1c1917',
                                color: '#f5f5f4'
                            });
                        } finally {
                            btn.disabled = false;
                            btn.innerHTML = '<span>SUBMIT INQUIRY</span>';
                        }
                    });

                    // Pre-fill subject if ?product= parameter exists in URL
                    const urlParams = new URLSearchParams(window.location.search);
                    const productParam = urlParams.get('product');
                    if (productParam) {
                        const subjInput = document.querySelector('input[name="subject"]');
                        if (subjInput && !subjInput.value) {
                            subjInput.value = 'Quote Request: ' + productParam;
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
