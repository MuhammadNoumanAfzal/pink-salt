<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Export Order Checkout — SALTORA | Himalayan Pink Salt Pakistan</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Complete your B2B export order for Pakistani Himalayan Pink Salt. Direct mine sourcing, ISO & Halal certified bulk shipments.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/logo.png">
    <link rel="shortcut icon" type="image/png" href="/logo.png">

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FAF7F2] text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white" x-data="shopManager()">

    <!-- Header Navigation -->
    <header class="bg-white border-b border-stone-200 sticky top-0 z-40 shadow-xs">
        <div class="max-w-7xl mx-auto px-6 md:px-10 h-20 flex items-center justify-between">
            <a href="/" class="flex items-center gap-3 group cursor-pointer">
                <img src="/logo.png" alt="SALTORA Logo" class="h-10 w-auto object-contain transition-transform group-hover:scale-105">
                <span class="font-serif text-2xl font-bold tracking-wider text-stone-900">SALTORA</span>
            </a>

            <!-- Progress Indicator -->
            <div class="hidden md:flex items-center gap-6 text-xs font-semibold tracking-wider uppercase">
                <div class="flex items-center gap-2 text-stone-400">
                    <span class="w-6 h-6 rounded-full border border-stone-300 flex items-center justify-center text-[10px]">1</span>
                    <span>Shopping Cart</span>
                </div>
                <span class="text-stone-300">➔</span>
                <div class="flex items-center gap-2 text-[#e07a5f] font-bold">
                    <span class="w-6 h-6 rounded-full bg-[#e07a5f] text-white flex items-center justify-center text-[10px]">2</span>
                    <span>Order & Buyer Info</span>
                </div>
                <span class="text-stone-300">➔</span>
                <div class="flex items-center gap-2 text-stone-400">
                    <span class="w-6 h-6 rounded-full border border-stone-300 flex items-center justify-center text-[10px]">3</span>
                    <span>Order Confirmation</span>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <a href="/products" class="text-xs font-bold tracking-wider text-stone-600 hover:text-stone-900 uppercase">
                    ← Back to Products
                </a>
            </div>
        </div>
    </header>

    <!-- MAIN CHECKOUT SECTION -->
    <main class="py-12 md:py-16 px-6 md:px-12 max-w-7xl mx-auto">
        
        <div class="mb-8 space-y-2">
            <span class="text-[11px] font-bold tracking-mega text-[#e07a5f] uppercase block">DIRECT EXPORT CHECKOUT</span>
            <h1 class="text-3xl md:text-5xl font-serif text-stone-900 font-normal">Complete Your Export Order</h1>
            <p class="text-stone-500 text-sm font-light max-w-2xl">
                Enter your buyer details and destination port requirements. The SALTORA export sales desk will calculate freight rates, prepare official proforma documents, and confirm delivery timelines.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            
            <!-- LEFT COLUMN: BUYER & SHIPPING FORM (7 cols) -->
            <div class="lg:col-span-7 bg-white p-8 md:p-10 rounded-xl border border-stone-200 shadow-sm space-y-8">
                
                <form @submit.prevent="submitOrder()" class="space-y-6">
                    
                    <!-- Section 1: Customer Contact -->
                    <div class="space-y-4">
                        <h3 class="font-serif text-xl font-semibold text-stone-900 border-b border-stone-100 pb-3 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-stone-900 text-white text-xs flex items-center justify-center">1</span>
                            <span>Buyer & Company Information</span>
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs">
                            <div>
                                <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Full Contact Name *</label>
                                <input type="text" x-model="orderForm.full_name" required placeholder="e.g. Alexander Wright" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-4 py-3 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] transition-all">
                            </div>

                            <div>
                                <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Company Name *</label>
                                <input type="text" x-model="orderForm.company_name" required placeholder="e.g. Nordic Gourmet Imports Ltd" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-4 py-3 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] transition-all">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs">
                            <div>
                                <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Business Email *</label>
                                <input type="email" x-model="orderForm.email" required placeholder="alexander@nordicgourmet.se" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-4 py-3 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] transition-all">
                            </div>

                            <div>
                                <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Phone / WhatsApp Number *</label>
                                <input type="tel" x-model="orderForm.phone" required placeholder="+46 8 123 4567" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-4 py-3 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] transition-all">
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Destination & Port Logistics -->
                    <div class="space-y-4 pt-4">
                        <h3 class="font-serif text-xl font-semibold text-stone-900 border-b border-stone-100 pb-3 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-stone-900 text-white text-xs flex items-center justify-center">2</span>
                            <span>Destination & Shipping Port</span>
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs">
                            <div>
                                <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Destination Country *</label>
                                <input type="text" x-model="orderForm.destination_country" required placeholder="e.g. Sweden / Germany / USA" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-4 py-3 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] transition-all">
                            </div>

                            <div>
                                <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Destination Sea Port / Terminal</label>
                                <input type="text" x-model="orderForm.destination_port" placeholder="e.g. Port of Gothenburg / Hamburg" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-4 py-3 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] transition-all">
                            </div>
                        </div>

                        <div class="text-xs">
                            <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Target Shipment Date / Timeline</label>
                            <input type="text" x-model="orderForm.target_date" placeholder="e.g. Immediate / Next Month / Q4 Shipment" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-4 py-3 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] transition-all">
                        </div>
                    </div>

                    <!-- Section 3: Product Packaging & Custom Notes -->
                    <div class="space-y-4 pt-4">
                        <h3 class="font-serif text-xl font-semibold text-stone-900 border-b border-stone-100 pb-3 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-stone-900 text-white text-xs flex items-center justify-center">3</span>
                            <span>Packaging Requirements & Order Notes</span>
                        </h3>

                        <div class="text-xs">
                            <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Special Instructions & Packaging Specs</label>
                            <textarea x-model="orderForm.notes" rows="3" placeholder="Specify required bag sizes (e.g. 25kg PP bags, 1-Ton Jumbo Bags), private label branding requirements, mesh grain size, or special test requests..." class="w-full bg-stone-50 border border-stone-200 rounded-lg px-4 py-3 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] transition-all"></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-6">
                        <button type="submit" :disabled="isSubmitting || cart.length === 0" class="w-full py-4 bg-[#e07a5f] hover:bg-stone-900 disabled:opacity-50 text-white font-bold text-sm rounded-xl shadow-lg transition-all uppercase tracking-wider flex items-center justify-center gap-3 cursor-pointer">
                            <span x-text="isSubmitting ? 'PROCESSING EXPORT ORDER...' : 'SUBMIT EXPORT ORDER NOW ➔'"></span>
                        </button>
                        <p class="text-[11px] text-stone-500 text-center mt-3 font-medium flex items-center justify-center gap-1.5">
                            <svg class="w-3.5 h-3.5 text-emerald-600 inline shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                            <span>Direct Submission to SALTORA Himalayan Pink Salt Export Desk — Port Qasim / Karachi Port, Pakistan</span>
                        </p>
                    </div>

                </form>

            </div>

            <!-- RIGHT COLUMN: ORDER SUMMARY CARD (5 cols) -->
            <div class="lg:col-span-5 bg-white p-8 rounded-xl border border-stone-200 shadow-sm space-y-6">
                
                <div class="flex items-center justify-between border-b border-stone-100 pb-4">
                    <h3 class="font-serif text-xl font-semibold text-stone-900">Order Summary</h3>
                    <span class="text-xs font-mono font-bold text-[#e07a5f] bg-[#F5EAE6] px-3 py-1 rounded-full" x-text="cart.length + ' Items'"></span>
                </div>

                <!-- Empty State -->
                <template x-if="cart.length === 0">
                    <div class="text-center py-10 space-y-3 text-stone-400">
                        <svg class="w-12 h-12 mx-auto text-stone-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                        </svg>
                        <p class="text-xs">Your shopping cart is currently empty.</p>
                        <a href="/products" class="inline-block px-4 py-2 bg-stone-900 text-white rounded-lg text-xs font-bold uppercase tracking-wider">
                            Browse Salt Range
                        </a>
                    </div>
                </template>

                <!-- Line Items Table -->
                <div class="divide-y divide-stone-100 max-h-80 overflow-y-auto pr-1">
                    <template x-for="(item, index) in cart" :key="index">
                        <div class="py-3 flex items-center justify-between text-xs">
                            <div>
                                <span class="font-bold text-stone-900 text-sm block" x-text="item.name"></span>
                                <span class="text-[10px] text-stone-400 uppercase font-semibold" x-text="item.category"></span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="flex items-center border border-stone-200 rounded-lg overflow-hidden bg-stone-50">
                                    <button type="button" @click="updateQuantity(index, -5)" class="px-2.5 py-1 text-stone-600 hover:bg-stone-200 font-bold">-</button>
                                    <span class="px-2 font-mono font-bold text-stone-900 text-xs" x-text="item.quantity + ' Tons'"></span>
                                    <button type="button" @click="updateQuantity(index, 5)" class="px-2.5 py-1 text-stone-600 hover:bg-stone-200 font-bold">+</button>
                                </div>
                                <button type="button" @click="removeItem(index)" class="text-rose-500 hover:text-rose-700 p-1 cursor-pointer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Tonnage Summary Box -->
                <div class="bg-stone-50 p-4 rounded-xl border border-stone-200 space-y-2 text-xs">
                    <div class="flex items-center justify-between text-stone-600 font-semibold">
                        <span>Total Shipment Volume:</span>
                        <span class="font-mono font-bold text-base text-[#e07a5f]" x-text="totalTonnage + ' Metric Tons'"></span>
                    </div>
                    <div class="flex items-center justify-between text-stone-500 text-[11px]">
                        <span>Pricing & FOB Terms:</span>
                        <span class="font-semibold text-stone-800">Custom Freight & Proforma Quote</span>
                    </div>
                </div>

                <!-- Export Documentation Perks -->
                <div class="border-t border-stone-100 pt-4 space-y-2.5 text-xs text-stone-600">
                    <span class="text-[10px] font-bold tracking-widest text-[#e07a5f] uppercase block">INCLUDED FREE EXPORT SERVICES</span>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>ISO 22000:2018 & Halal Batch Certificate</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>SGS / Laboratory Chemical Purity Analysis</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Pakistan Chamber of Commerce Export Seal</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Port Qasim / Karachi Port Customs Clearance</span>
                    </div>
                </div>

            </div>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="bg-stone-900 text-stone-400 py-10 px-6 border-t border-stone-800 text-xs">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
            <p>© 2026 SALTORA Himalayan Pink Salt Exporter. All Rights Reserved.</p>
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
