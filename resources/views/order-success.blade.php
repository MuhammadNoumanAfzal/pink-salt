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
    
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Vite Assets (Tailwind CSS + Alpine JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        @media print {
            @page {
                size: A4 portrait;
                margin: 10mm 12mm;
            }
            body {
                background: white !important;
                color: #0f172a !important;
                font-size: 11px !important;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
            header, footer, .no-print {
                display: none !important;
            }
            .print-only {
                display: block !important;
            }
            main {
                padding: 0 !important;
                margin: 0 !important;
                max-width: 100% !important;
            }
            .print-card {
                border: none !important;
                box-shadow: none !important;
                padding: 0 !important;
                margin: 0 !important;
                width: 100% !important;
            }
            .print-border {
                border: 1px solid #cbd5e1 !important;
            }
            .print-bg-light {
                background-color: #f8fafc !important;
            }
            .page-break-inside-avoid {
                page-break-inside: avoid !important;
            }
        }
        .print-only {
            display: none;
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
    <main class="py-10 md:py-14 px-4 sm:px-6 md:px-12 max-w-4xl mx-auto space-y-6">
        
        <!-- SUCCESS BANNER (HIDDEN ON PRINT TO FIT 1-PAGE CLEAN INVOICE) -->
        <div class="bg-gradient-to-r from-emerald-900 via-emerald-800 to-emerald-950 text-white p-8 md:p-10 rounded-2xl shadow-xl space-y-4 text-center relative overflow-hidden no-print border border-emerald-700/50">
            <div class="w-16 h-16 rounded-full bg-emerald-500/20 border-2 border-emerald-400 flex items-center justify-center mx-auto text-emerald-300 shadow-inner">
                <i class="fa-solid fa-check text-2xl"></i>
            </div>

            <span class="text-xs font-bold tracking-mega text-emerald-300 uppercase block">EXPORT ORDER REGISTERED</span>
            
            <h1 class="text-3xl md:text-5xl font-serif text-white font-normal">
                Thank You for Your Order!
            </h1>
            
            <p class="text-emerald-100 text-xs sm:text-sm max-w-xl mx-auto font-light leading-relaxed">
                Your B2B bulk shipment request has been transmitted directly to the SALTORA Mine Export Sales Desk in Pakistan.
            </p>

            <div class="inline-block bg-white/10 backdrop-blur-md border border-white/20 px-6 py-3 rounded-xl font-mono text-center mt-2 shadow-sm">
                <span class="text-[10px] text-emerald-200 block uppercase tracking-wider font-bold">OFFICIAL ORDER REFERENCE NUMBER</span>
                <span class="text-2xl sm:text-3xl font-bold text-white tracking-widest">{{ $quote->quote_number }}</span>
            </div>
        </div>

        <!-- PRINT-ONLY INVOICE HEADER (APPEARS AT THE VERY TOP WHEN PRINTED / DOWNLOADED) -->
        <div class="print-only border-b-2 border-stone-900 pb-4 mb-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="/logo.png" alt="SALTORA Logo" class="h-12 w-auto">
                    <div>
                        <h1 class="font-serif text-2xl font-bold text-stone-900 leading-none">SALTORA</h1>
                        <p class="text-[10px] font-bold text-[#e07a5f] uppercase tracking-widest mt-1">Himalayan Pink Salt Exporter • Pakistan</p>
                        <p class="text-[9px] text-stone-500">Salt Range Mines Office, Khewra / Karachi Port • Sales: +92 318 0735748 • saltora1329@gmail.com</p>
                    </div>
                </div>
                <div class="text-right">
                    <h2 class="font-serif text-xl font-bold text-stone-900 uppercase">PROFORMA INVOICE</h2>
                    <p class="font-mono font-bold text-[#e07a5f] text-sm">REF: {{ $quote->quote_number }}</p>
                    <p class="text-[10px] text-stone-500">Date: {{ is_string($quote->created_at) ? $quote->created_at : $quote->created_at->format('M d, Y — H:i T') }}</p>
                </div>
            </div>
        </div>

        <!-- ORDER RECEIPT DETAILS CARD -->
        <div class="bg-white p-6 sm:p-8 md:p-10 rounded-2xl border border-stone-200 shadow-sm space-y-6 print-card">
            
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between border-b border-stone-100 pb-5 gap-4">
                <div>
                    <h3 class="font-serif text-2xl font-bold text-stone-900">Order Invoice Summary</h3>
                    <p class="text-xs text-stone-400">Registered on {{ is_string($quote->created_at) ? $quote->created_at : $quote->created_at->format('F d, Y — H:i T') }}</p>
                </div>
                
                <!-- TOP ACTION & DOWNLOAD BUTTONS -->
                <div class="flex items-center gap-3 no-print">
                    <button onclick="window.print()" class="px-5 py-2.5 bg-[#e07a5f] hover:bg-[#d46a4f] text-white rounded-xl text-xs font-bold uppercase tracking-wider flex items-center gap-2 cursor-pointer shadow-md transition-all">
                        <i class="fa-solid fa-download text-sm"></i>
                        <span>Download / Print Invoice</span>
                    </button>
                </div>
            </div>

            <!-- BUYER & DESTINATION GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 text-xs bg-stone-50 p-5 rounded-xl border border-stone-200 print-bg-light print-border">
                <div class="space-y-1.5">
                    <span class="text-[10px] font-bold tracking-widest text-[#e07a5f] uppercase block">BUYER DETAILS</span>
                    <p class="font-bold text-stone-900 text-sm">{{ $quote->company_name }}</p>
                    <p class="text-stone-700">Contact Person: <span class="font-semibold text-stone-900">{{ $quote->full_name }}</span></p>
                    <p class="text-stone-700">Email: <span class="font-semibold text-stone-900">{{ $quote->email }}</span></p>
                    <p class="text-stone-700">Phone / WhatsApp: <span class="font-semibold text-stone-900">{{ $quote->phone }}</span></p>
                </div>

                <div class="space-y-1.5">
                    <span class="text-[10px] font-bold tracking-widest text-[#e07a5f] uppercase block">SHIPMENT DESTINATION</span>
                    <p class="font-bold text-stone-900 text-sm">Country: {{ $quote->destination_country }}</p>
                    <p class="text-stone-700">Destination Port: <span class="font-semibold text-stone-900">{{ $quote->destination_port ?? 'Port Qasim / Karachi' }}</span></p>
                    <p class="text-stone-700">Target Delivery: <span class="font-semibold text-stone-900">{{ $quote->target_date ?? 'Standard Export Schedule' }}</span></p>
                    <p class="text-stone-700">Order Status: <span class="bg-amber-100 text-amber-800 font-bold px-2 py-0.5 rounded-full text-[10px] inline-block mt-0.5">⏳ Pending Desk Review</span></p>
                </div>
            </div>

            <!-- LINE ITEMS TABLE -->
            <div class="space-y-2.5">
                <span class="text-[10px] font-bold tracking-widest text-stone-400 uppercase block">ORDERED SALT LINE ITEMS</span>
                
                <div class="border border-stone-200 rounded-xl overflow-hidden print-border">
                    <table class="w-full text-left text-xs">
                        <thead class="bg-stone-900 text-white font-serif uppercase tracking-wider text-[11px]">
                            <tr>
                                <th class="p-3.5 px-4">Product Grade & Name</th>
                                <th class="p-3.5 px-4">Category</th>
                                <th class="p-3.5 px-4 text-right">Volume (Metric Tons)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-100">
                            @php $totalTons = 0; @endphp
                            @foreach($quote->items as $item)
                                @php 
                                    $qty = is_array($item) ? ($item['quantity'] ?? 20) : 20;
                                    $name = is_array($item) ? ($item['name'] ?? 'Himalayan Pink Salt') : $item;
                                    $cat = is_array($item) ? ($item['category'] ?? 'Salt Export') : 'Export Grade';
                                    $totalTons += (int)$qty;
                                @endphp
                                <tr class="hover:bg-stone-50">
                                    <td class="p-3.5 px-4 font-bold text-stone-900">{{ $name }}</td>
                                    <td class="p-3.5 px-4 text-stone-500 uppercase font-semibold text-[10px]">{{ $cat }}</td>
                                    <td class="p-3.5 px-4 text-right font-mono font-bold text-[#e07a5f]">{{ number_format($qty) }} Metric Tons</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot class="bg-stone-50 font-bold border-t border-stone-200 print-bg-light">
                            <tr>
                                <td colspan="2" class="p-3.5 px-4 text-stone-800 uppercase tracking-wider">TOTAL ESTIMATED SHIPMENT VOLUME</td>
                                <td class="p-3.5 px-4 text-right font-mono text-sm sm:text-base text-[#e07a5f]">{{ number_format($totalTons) }} Metric Tons</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <!-- NOTES & TERMS -->
            @if(!empty($quote->notes))
                <div class="bg-amber-50/80 border border-amber-200/80 p-4 rounded-xl text-xs space-y-1 print-border">
                    <span class="font-bold text-amber-900 uppercase text-[10px] block"><i class="fa-solid fa-clipboard-list mr-1"></i> Packaging Instructions & Buyer Notes:</span>
                    <p class="text-amber-900/90 font-light leading-relaxed">{{ $quote->notes }}</p>
                </div>
            @endif

            <!-- PRINT FOOTER STAMP AREA (PRINT ONLY) -->
            <div class="print-only pt-6 border-t border-stone-200 mt-6 page-break-inside-avoid">
                <div class="flex justify-between items-end text-[9px] text-stone-500">
                    <div>
                        <p class="font-bold text-stone-800 uppercase">Authorized Signature & Export Desk Stamp</p>
                        <div class="w-40 h-10 border-b border-dashed border-stone-400 mt-2"></div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-stone-800">SALTORA EXPORT DESK • PAKISTAN</p>
                        <p>Document Generated automatically • www.saltora.net</p>
                    </div>
                </div>
            </div>

            <!-- NEXT STEPS (ON SCREEN ONLY) -->
            <div class="border-t border-stone-200 pt-5 space-y-3 no-print">
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

            <!-- BOTTOM ACTION BUTTONS -->
            <div class="pt-4 flex flex-wrap items-center justify-between gap-4 no-print border-t border-stone-100">
                <a href="/products" class="px-5 py-3 bg-stone-900 hover:bg-black text-white rounded-xl text-xs font-bold uppercase tracking-wider transition-all cursor-pointer">
                    ← Return to Product Catalog
                </a>
                
                <div class="flex items-center gap-3">
                    <button onclick="window.print()" class="px-5 py-3 bg-[#e07a5f] hover:bg-[#d46a4f] text-white rounded-xl text-xs font-bold uppercase tracking-wider transition-all flex items-center gap-2 cursor-pointer shadow-md">
                        <i class="fa-solid fa-file-arrow-down text-sm"></i>
                        <span>Download / Print PDF</span>
                    </button>
                    
                    <a href="https://wa.me/923180735748?text=Hello%20SALTORA%20Export%20Desk,%20inquiring%20about%20Order%20%23{{ $quote->quote_number }}" target="_blank" class="px-5 py-3 bg-emerald-600 hover:bg-emerald-700 text-white rounded-xl text-xs font-bold uppercase tracking-wider transition-all flex items-center gap-2 shadow-md">
                        <i class="fa-brands fa-whatsapp text-sm"></i>
                        <span>WhatsApp Desk</span>
                    </a>
                </div>
            </div>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="bg-stone-900 text-stone-400 py-10 px-6 border-t border-stone-800 text-xs no-print">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
            <p>© 2026 SALTORA Himalayan Pink Salt Exporter. All Rights Reserved.</p>
            <div class="flex items-center gap-3">
                <a href="https://facebook.com" target="_blank" class="w-7 h-7 rounded-full border border-stone-800 bg-stone-900 flex items-center justify-center text-stone-400 hover:text-[#e07a5f] transition-all" title="Facebook"><i class="fa-brands fa-facebook-f text-xs"></i></a>
                <a href="https://instagram.com" target="_blank" class="w-7 h-7 rounded-full border border-stone-800 bg-stone-900 flex items-center justify-center text-stone-400 hover:text-[#e07a5f] transition-all" title="Instagram"><i class="fa-brands fa-instagram text-xs"></i></a>
                <a href="https://linkedin.com" target="_blank" class="w-7 h-7 rounded-full border border-stone-800 bg-stone-900 flex items-center justify-center text-stone-400 hover:text-[#e07a5f] transition-all" title="LinkedIn"><i class="fa-brands fa-linkedin-in text-xs"></i></a>
                <a href="https://wa.me/923180735748" target="_blank" class="w-7 h-7 rounded-full border border-stone-800 bg-stone-900 flex items-center justify-center text-stone-400 hover:text-emerald-500 transition-all" title="WhatsApp"><i class="fa-brands fa-whatsapp text-xs"></i></a>
            </div>
            <div class="flex items-center gap-6">
                <a href="/terms" class="hover:text-white transition-colors">Terms & Conditions</a>
                <a href="/privacy" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="/return-policy" class="hover:text-white transition-colors">Return & Refund Policy</a>
            </div>
        </div>
    </footer>

</body>
</html>

