<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Confirmed #{{ $quote->quote_number }} — SALTORA Himalayan Pink Salt</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Your B2B export order has been successfully registered with SALTORA Mine Export Desk.">
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/logo.png">
    <link rel="shortcut icon" type="image/png" href="/logo.png">
    
    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        @media print {
            header, footer, .no-print { display: none !important; }
            body { background: white !important; color: black !important; }
            .print-card { border: none !important; shadow: none !important; }
        }
    </style>
</head>
<body class="bg-[#FAF7F2] text-saltora-text font-sans antialiased selection:bg-saltora-terracotta selection:text-white">

    <!-- Header Navigation -->
    <header class="bg-white border-b border-stone-200 sticky top-0 z-40 shadow-xs no-print">
        <div class="max-w-7xl mx-auto px-6 md:px-10 h-20 flex items-center justify-between">
            <a href="/" class="flex items-center gap-3 group cursor-pointer">
                <img src="/logo.png" alt="SALTORA Logo" class="h-10 w-auto object-contain">
                <span class="font-serif text-2xl font-bold tracking-wider text-stone-900">SALTORA</span>
            </a>

            <!-- Progress Indicator -->
            <div class="hidden md:flex items-center gap-6 text-xs font-semibold tracking-wider uppercase">
                <div class="flex items-center gap-2 text-stone-400">
                    <span class="w-6 h-6 rounded-full border border-stone-300 flex items-center justify-center text-[10px]">1</span>
                    <span>Shopping Cart</span>
                </div>
                <span class="text-stone-300">➔</span>
                <div class="flex items-center gap-2 text-stone-400">
                    <span class="w-6 h-6 rounded-full border border-stone-300 flex items-center justify-center text-[10px]">2</span>
                    <span>Order & Buyer Info</span>
                </div>
                <span class="text-stone-300">➔</span>
                <div class="flex items-center gap-2 text-emerald-600 font-bold">
                    <span class="w-6 h-6 rounded-full bg-emerald-600 text-white flex items-center justify-center text-[10px]">✓</span>
                    <span>Order Confirmed</span>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <a href="/products" class="text-xs font-bold tracking-wider text-stone-600 hover:text-stone-900 uppercase">
                    ← Back to Store
                </a>
            </div>
        </div>
    </header>

    <!-- MAIN ORDER CONFIRMATION SECTION -->
    <main class="py-12 md:py-16 px-6 md:px-12 max-w-4xl mx-auto space-y-8">
        
        <!-- SUCCESS BANNER -->
        <div class="bg-emerald-900 text-white p-8 md:p-10 rounded-2xl shadow-xl space-y-4 text-center relative overflow-hidden">
            <div class="w-16 h-16 rounded-full bg-emerald-500/20 border-2 border-emerald-400 flex items-center justify-center mx-auto text-emerald-300">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                </svg>
            </div>

            <span class="text-xs font-bold tracking-mega text-emerald-300 uppercase block">EXPORT ORDER REGISTERED</span>
            
            <h1 class="text-3xl md:text-5xl font-serif text-white font-normal">
                Thank You for Your Order!
            </h1>
            
            <p class="text-emerald-100 text-sm max-w-xl mx-auto font-light leading-relaxed">
                Your B2B bulk shipment request has been transmitted directly to the SALTORA Mine Export Sales Desk in Pakistan.
            </p>

            <div class="inline-block bg-white/10 backdrop-blur-md border border-white/20 px-6 py-3 rounded-xl font-mono text-center mt-2">
                <span class="text-[10px] text-emerald-200 block uppercase tracking-wider">OFFICIAL ORDER REFERENCE NUMBER</span>
                <span class="text-2xl font-bold text-white tracking-widest">{{ $quote->quote_number }}</span>
            </div>
        </div>

        <!-- ORDER RECEIPT DETAILS CARD -->
        <div class="bg-white p-8 md:p-10 rounded-2xl border border-stone-200 shadow-sm space-y-8 print-card">
            
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between border-b border-stone-100 pb-6 gap-4">
                <div>
                    <h3 class="font-serif text-2xl font-bold text-stone-900">Order Invoice Summary</h3>
                    <p class="text-xs text-stone-400">Placed on {{ is_string($quote->created_at) ? $quote->created_at : $quote->created_at->format('F d, Y — H:i T') }}</p>
                </div>
                <div class="flex items-center gap-3 no-print">
                    <button onclick="window.print()" class="px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white rounded-lg text-xs font-bold uppercase tracking-wider flex items-center gap-2 cursor-pointer shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                        </svg>
                        <span>Print Order Invoice</span>
                    </button>
                </div>
            </div>

            <!-- BUYER & DESTINATION GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-xs bg-stone-50 p-6 rounded-xl border border-stone-200">
                <div class="space-y-2">
                    <span class="text-[10px] font-bold tracking-widest text-[#e07a5f] uppercase block">BUYER DETAILS</span>
                    <p class="font-bold text-stone-900 text-sm">{{ $quote->company_name }}</p>
                    <p class="text-stone-700">Contact: {{ $quote->full_name }}</p>
                    <p class="text-stone-700">Email: {{ $quote->email }}</p>
                    <p class="text-stone-700">Phone: {{ $quote->phone }}</p>
                </div>

                <div class="space-y-2">
                    <span class="text-[10px] font-bold tracking-widest text-[#e07a5f] uppercase block">SHIPMENT DESTINATION</span>
                    <p class="font-bold text-stone-900 text-sm">Country: {{ $quote->destination_country }}</p>
                    <p class="text-stone-700">Destination Port: {{ $quote->destination_port ?? 'Port of Entry' }}</p>
                    <p class="text-stone-700">Target Date: {{ $quote->target_date ?? 'Standard Export Schedule' }}</p>
                    <p class="text-stone-700">Fulfillment Status: <span class="bg-amber-100 text-amber-800 font-bold px-2 py-0.5 rounded-full text-[10px]">⏳ Pending Export Desk Review</span></p>
                </div>
            </div>

            <!-- LINE ITEMS TABLE -->
            <div class="space-y-3">
                <span class="text-[10px] font-bold tracking-widest text-stone-400 uppercase block">ORDERED SALT LINE ITEMS</span>
                
                <div class="border border-stone-200 rounded-xl overflow-hidden">
                    <table class="w-full text-left text-xs">
                        <thead class="bg-stone-900 text-white font-serif uppercase tracking-wider">
                            <tr>
                                <th class="p-3.5">Product Grade</th>
                                <th class="p-3.5">Category</th>
                                <th class="p-3.5 text-right">Volume (Metric Tons)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-100">
                            @php $totalTons = 0; @endphp
                            @foreach($quote->items as $item)
                                @php 
                                    $qty = is_array($item) ? ($item['quantity'] ?? 20) : 20;
                                    $name = is_array($item) ? ($item['name'] ?? 'Himalayan Pink Salt') : $item;
                                    $cat = is_array($item) ? ($item['category'] ?? 'Salt Export') : 'Export Grade';
                                    $totalTons += $qty;
                                @endphp
                                <tr class="hover:bg-stone-50">
                                    <td class="p-3.5 font-bold text-stone-900">{{ $name }}</td>
                                    <td class="p-3.5 text-stone-500 uppercase font-semibold text-[10px]">{{ $cat }}</td>
                                    <td class="p-3.5 text-right font-mono font-bold text-[#e07a5f]">{{ $qty }} Metric Tons</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot class="bg-stone-50 font-bold border-t border-stone-200">
                            <tr>
                                <td colspan="2" class="p-3.5 text-stone-800 uppercase tracking-wider">TOTAL SHIPMENT VOLUME</td>
                                <td class="p-3.5 text-right font-mono text-base text-[#e07a5f]">{{ $totalTons }} Metric Tons</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <!-- NOTES & TERMS -->
            @if(!empty($quote->notes))
                <div class="bg-amber-50 border border-amber-200 p-4 rounded-xl text-xs space-y-1">
                    <span class="font-bold text-amber-900 uppercase text-[10px]">Packaging Instructions & Buyer Notes:</span>
                    <p class="text-amber-800 font-light leading-relaxed">{{ $quote->notes }}</p>
                </div>
            @endif

            <!-- NEXT STEPS -->
            <div class="border-t border-stone-200 pt-6 space-y-3 no-print">
                <h4 class="font-serif text-lg font-bold text-stone-900">What Happens Next?</h4>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
                    <div class="p-4 bg-stone-50 rounded-xl border border-stone-200 space-y-1">
                        <span class="font-bold text-stone-900 block">1. Proforma Invoice</span>
                        <p class="text-stone-500 font-light">Our desk calculates ocean freight to <b>{{ $quote->destination_port ?? $quote->destination_country }}</b> and emails your formal Proforma Invoice.</p>
                    </div>
                    <div class="p-4 bg-stone-50 rounded-xl border border-stone-200 space-y-1">
                        <span class="font-bold text-stone-900 block">2. Lab Inspection</span>
                        <p class="text-stone-500 font-light">Salt batch is prepared, crushed/milled to your specified mesh size, and inspected by SGS laboratories.</p>
                    </div>
                    <div class="p-4 bg-stone-50 rounded-xl border border-stone-200 space-y-1">
                        <span class="font-bold text-stone-900 block">3. Port Dispatch</span>
                        <p class="text-stone-500 font-light">Container loaded at Port Qasim / Karachi Port with Bill of Lading and Certificate of Origin issued.</p>
                    </div>
                </div>
            </div>

            <!-- ACTION BUTTONS -->
            <div class="pt-4 flex flex-wrap items-center justify-between gap-4 no-print">
                <a href="/products" class="px-6 py-3.5 bg-stone-900 hover:bg-black text-white rounded-xl text-xs font-bold uppercase tracking-wider transition-all">
                    ← Return to Product Catalog
                </a>
                <a href="https://wa.me/923180735748?text=Hello%20SALTORA%20Export%20Desk,%20inquiring%20about%20Order%20%23{{ $quote->quote_number }}" target="_blank" class="px-6 py-3.5 bg-emerald-600 hover:bg-emerald-700 text-white rounded-xl text-xs font-bold uppercase tracking-wider transition-all flex items-center gap-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99 0-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    <span>Contact Export Desk on WhatsApp</span>
                </a>
            </div>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="bg-stone-900 text-stone-400 py-8 px-6 text-center text-xs border-t border-stone-800 no-print">
        <p>© 2026 SALTORA Himalayan Pink Salt Exporter. All Rights Reserved.</p>
    </footer>

</body>
</html>
