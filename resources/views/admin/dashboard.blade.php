<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50 text-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Store Dashboard - SALTORA Himalayan Exporter</title>
    <link rel="icon" type="image/png" href="/logo.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons, Chart.js & SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] { display: none !important; }

        /* CKEditor Custom Styling */
        .ck-editor__editable_inline {
            min-height: 220px !important;
            max-height: 400px !important;
            border-bottom-left-radius: 12px !important;
            border-bottom-right-radius: 12px !important;
            background-color: #f8fafc !important;
            font-size: 13px !important;
            color: #0f172a !important;
        }
        .ck-toolbar {
            border-top-left-radius: 12px !important;
            border-top-right-radius: 12px !important;
            background-color: #ffffff !important;
            border-color: #cbd5e1 !important;
        }

        /* Completely Hide Scrollbar for Modals (View & Edit) */
        .custom-modal-scroll::-webkit-scrollbar,
        .no-scrollbar::-webkit-scrollbar {
            display: none !important;
            width: 0 !important;
            height: 0 !important;
        }
        .custom-modal-scroll,
        .no-scrollbar {
            -ms-overflow-style: none !important;
            scrollbar-width: none !important;
        }

        /* Print Media Styles */
        @media print {
            body * {
                visibility: hidden;
            }
            #printableInvoice, #printableInvoice * {
                visibility: visible;
            }
            #printableInvoice {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                background: #ffffff !important;
                color: #000000 !important;
                padding: 20px;
            }
            .no-print {
                display: none !important;
            }
        }
    </style>
</head>
<body class="min-h-full font-sans antialiased bg-slate-50 text-slate-800 flex" x-data="adminDashboard()">

    <!-- LEFT SIDEBAR NAVIGATION -->
    <aside class="w-64 bg-white border-r border-slate-200/80 shrink-0 hidden md:flex flex-col justify-between h-screen sticky top-0 z-30 shadow-xs overflow-y-auto">
        <div>
            <!-- Sidebar Header / Brand -->
            <div class="h-16 flex items-center gap-3 px-6 border-b border-slate-100">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-[#e07a5f] to-[#d4a373] p-0.5 shadow-md shadow-[#e07a5f]/20">
                    <div class="w-full h-full bg-white rounded-[9px] flex items-center justify-center">
                        <img src="/logo.png" alt="SALTORA Logo" class="w-5 h-5 object-contain">
                    </div>
                </div>
                <div>
                    <span class="font-serif text-lg font-bold tracking-wider text-slate-900 block leading-none">SALTORA</span>
                    <span class="text-[9px] font-bold text-[#e07a5f] uppercase tracking-widest block mt-0.5">eCommerce Admin</span>
                </div>
            </div>

            <!-- Navigation Links -->
            <nav class="p-4 space-y-1 text-xs font-semibold">
                <!-- 1. Dashboard Overview -->
                <button @click="switchTab('overview')" 
                    :class="activeTab === 'overview' ? 'bg-[#e07a5f]/10 text-[#e07a5f] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'"
                    class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all text-left cursor-pointer">
                    <i class="fa-solid fa-chart-pie text-sm"></i>
                    <span>Dashboard Overview</span>
                </button>

                <!-- 2. Categories -->
                <a href="{{ route('admin.categories.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-layer-group text-sm"></i>
                        <span>Categories</span>
                    </div>
                </a>

                <!-- 3. Subcategories -->
                <a href="{{ route('admin.subcategories.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-tags text-sm"></i>
                        <span>Subcategories</span>
                    </div>
                </a>

                <!-- 4. Product Catalog -->
                <button @click="switchTab('products')" 
                    :class="activeTab === 'products' ? 'bg-[#e07a5f]/10 text-[#e07a5f] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'"
                    class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl transition-all text-left cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-cubes text-sm"></i>
                        <span>Product Catalog</span>
                    </div>
                    <span class="px-2 py-0.5 bg-slate-100 text-slate-600 text-[10px] font-bold rounded-full">{{ count($products) }}</span>
                </button>

                {{--
                <!-- 5. Orders (COMMENTED OUT) -->
                <button @click="switchTab('orders')" 
                    :class="activeTab === 'orders' ? 'bg-[#e07a5f]/10 text-[#e07a5f] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'"
                    class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl transition-all text-left cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-bag-shopping text-sm"></i>
                        <span>Orders</span>
                    </div>
                    @if($stats['pending_quotes'] > 0)
                        <span class="px-2 py-0.5 bg-amber-100 text-amber-800 text-[10px] font-bold rounded-full animate-pulse">{{ $stats['pending_quotes'] }} Pending</span>
                    @else
                        <span class="px-2 py-0.5 bg-slate-100 text-slate-600 text-[10px] font-bold rounded-full">{{ count($quotes) }}</span>
                    @endif
                </button>
                --}}

                <!-- 6. Customer Messages -->
                <button @click="switchTab('inquiries')" 
                    :class="activeTab === 'inquiries' ? 'bg-[#e07a5f]/10 text-[#e07a5f] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'"
                    class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl transition-all text-left cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope-open-text text-sm"></i>
                        <span>Customer Messages</span>
                    </div>
                    @if($stats['unread_inquiries'] > 0)
                        <span class="px-2 py-0.5 bg-rose-100 text-rose-700 text-[10px] font-bold rounded-full">{{ $stats['unread_inquiries'] }} New</span>
                    @else
                        <span class="px-2 py-0.5 bg-slate-100 text-slate-600 text-[10px] font-bold rounded-full">{{ count($inquiries) }}</span>
                    @endif
                </button>

                <!-- 7. Blogs & Insights -->
                <button @click="switchTab('blogs')" 
                    :class="activeTab === 'blogs' ? 'bg-[#e07a5f]/10 text-[#e07a5f] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'"
                    class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl transition-all text-left cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-newspaper text-sm"></i>
                        <span>Blogs & Insights</span>
                    </div>
                    <span class="px-2 py-0.5 bg-[#e07a5f]/20 text-[#e07a5f] text-[10px] font-bold rounded-full">{{ count($posts) }}</span>
                </button>

                <div class="pt-4 border-t border-slate-100">
                    <a href="{{ route('products') }}" target="_blank" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-500 hover:bg-slate-50 hover:text-slate-800 transition-all text-left cursor-pointer">
                        <i class="fa-solid fa-store text-sm text-[#e07a5f]"></i>
                        <span>View Live Store</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[9px] ml-auto opacity-60"></i>
                    </a>
                </div>
            </nav>
        </div>

        <!-- Sidebar Footer -->
        <div class="p-4 border-t border-slate-100 bg-slate-50/50">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center font-bold text-xs">
                        {{ strtoupper(substr(Auth::user()->name ?? 'Admin', 0, 2)) }}
                    </div>
                    <div class="text-xs overflow-hidden">
                        <span class="font-bold text-slate-900 block truncate">{{ Auth::user()->name ?? 'Store Manager' }}</span>
                        <span class="text-[10px] text-slate-500 block truncate">{{ Auth::user()->email ?? 'admin@saltora.com' }}</span>
                    </div>
                </div>
                
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="p-2 text-slate-400 hover:text-rose-600 transition-colors cursor-pointer" title="Logout">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT WRAPPER -->
    <div class="flex-1 flex flex-col min-w-0">

        <!-- TOP HEADER BAR -->
        <header class="h-16 bg-white border-b border-slate-200/80 px-4 sm:px-8 flex items-center justify-between sticky top-0 z-20 shadow-xs">
            <div class="flex items-center gap-4">
                <div class="relative w-64 sm:w-80">
                    <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                    <input type="text" x-model="globalSearch" placeholder="Search products, orders, customers..." class="w-full bg-slate-100/70 border border-slate-200/80 rounded-xl pl-9 pr-4 py-2 text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                </div>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('admin.products.create') }}" class="px-3.5 py-2 bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs rounded-xl shadow-xs transition-all flex items-center gap-2 cursor-pointer">
                    <i class="fa-solid fa-plus text-[10px]"></i>
                    <span>Add Product</span>
                </a>
            </div>
        </header>

        <!-- MAIN DASHBOARD CONTENT AREA -->
        <main class="p-4 sm:p-8 space-y-8 max-w-7xl w-full mx-auto">

            <!-- TAB 1: OVERVIEW -->
            <div x-show="activeTab === 'overview'" class="space-y-8">
                @php
                    // 1. Calculate actual category product counts for the doughnut chart
                    $catProductCounts = [];
                    foreach ($categories as $cat) {
                        $count = $products->where('category_id', $cat->id)->count();
                        if ($count > 0) {
                            $catProductCounts[$cat->name] = $count;
                        }
                    }
                    if (empty($catProductCounts)) {
                        foreach ($products->groupBy('category') as $cName => $prods) {
                            $catProductCounts[$cName ?: 'Himalayan Pink Salt'] = $prods->count();
                        }
                    }
                    arsort($catProductCounts);
                    $totalCatalogProducts = array_sum($catProductCounts) ?: count($products);

                    // 2. Calculate Top Destination Markets from B2B Quote & Contact Inquiries
                    $marketGroup = [];
                    foreach ($quotes as $q) {
                        if (!empty($q->destination_country)) {
                            $marketGroup[$q->destination_country] = ($marketGroup[$q->destination_country] ?? 0) + 1;
                        }
                    }
                    foreach ($inquiries as $inq) {
                        if (!empty($inq->country)) {
                            $marketGroup[$inq->country] = ($marketGroup[$inq->country] ?? 0) + 1;
                        }
                    }
                    arsort($marketGroup);
                    $totalMarketInquiries = array_sum($marketGroup);
                @endphp

                <div class="flex items-center justify-between gap-4 flex-wrap">
                    <div>
                        <h1 class="text-2xl font-bold font-serif text-slate-900">Export Desk Analytics & Overview</h1>
                        <p class="text-xs text-slate-500 mt-1">Real-time catalog performance, buyer quote inquiries, and customer messages.</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="px-3 py-1 bg-emerald-50 text-emerald-700 border border-emerald-200 text-xs font-bold rounded-full inline-flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Export Desk Operational
                        </span>
                    </div>
                </div>

                <!-- Stat Cards Grid (Clean B2B Entity Metrics - No Obsolete Cart Tonnage) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    <!-- Card 1: Total Products in Catalog -->
                    <div @click="switchTab('products')" class="bg-white border border-slate-200/80 rounded-2xl p-5 shadow-xs flex items-center justify-between cursor-pointer hover:border-[#e07a5f]/40 hover:shadow-md transition-all">
                        <div>
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Total Products</span>
                            <h3 class="text-2xl font-bold font-serif text-slate-900 mt-1">{{ $stats['total_products'] }}</h3>
                            <span class="inline-flex items-center gap-1 text-[11px] text-emerald-600 font-semibold mt-1">
                                <i class="fa-solid fa-circle-check text-[9px]"></i> {{ $stats['active_products'] }} Active in Catalog
                            </span>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-orange-50 border border-orange-100 flex items-center justify-center text-[#e07a5f] text-xl">
                            <i class="fa-solid fa-boxes-stacked"></i>
                        </div>
                    </div>

                    <!-- Card 2: Export Categories -->
                    <a href="{{ route('admin.categories.index') }}" class="bg-white border border-slate-200/80 rounded-2xl p-5 shadow-xs flex items-center justify-between cursor-pointer hover:border-amber-400/40 hover:shadow-md transition-all">
                        <div>
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Categories</span>
                            <h3 class="text-2xl font-bold font-serif text-slate-900 mt-1">{{ count($categories) }}</h3>
                            <span class="inline-flex items-center gap-1 text-[11px] text-amber-600 font-semibold mt-1">
                                <i class="fa-solid fa-layer-group text-[9px]"></i> Active Grade Segments
                            </span>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-100 flex items-center justify-center text-amber-600 text-xl">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                    </a>

                    <!-- Card 3: Customer Inquiries -->
                    <div @click="switchTab('inquiries')" class="bg-white border border-slate-200/80 rounded-2xl p-5 shadow-xs flex items-center justify-between cursor-pointer hover:border-rose-300 hover:shadow-md transition-all">
                        <div>
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Customer Messages</span>
                            <h3 class="text-2xl font-bold font-serif text-slate-900 mt-1">{{ $stats['total_inquiries'] }}</h3>
                            <span class="inline-flex items-center gap-1 text-[11px] text-rose-600 font-semibold mt-1">
                                <i class="fa-solid fa-envelope text-[9px]"></i> {{ $stats['unread_inquiries'] }} Unread Messages
                            </span>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-rose-50 border border-rose-100 flex items-center justify-center text-rose-600 text-xl">
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </div>
                    </div>

                    <!-- Card 4: Blog Articles & Insights -->
                    <div @click="switchTab('blogs')" class="bg-white border border-slate-200/80 rounded-2xl p-5 shadow-xs flex items-center justify-between cursor-pointer hover:border-sky-300 hover:shadow-md transition-all">
                        <div>
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Blog Articles</span>
                            <h3 class="text-2xl font-bold font-serif text-slate-900 mt-1">{{ $stats['total_blogs'] }}</h3>
                            <span class="inline-flex items-center gap-1 text-[11px] text-sky-600 font-semibold mt-1">
                                <i class="fa-solid fa-newspaper text-[9px]"></i> {{ $stats['published_blogs'] }} Published
                            </span>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-sky-50 border border-sky-100 flex items-center justify-center text-sky-600 text-xl">
                            <i class="fa-solid fa-newspaper"></i>
                        </div>
                    </div>
                </div>

                <!-- Charts Section: Monthly Inquiries Trend + Category Distribution -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Monthly B2B Inquiries & Leads Bar + Line Chart -->
                    <div class="lg:col-span-2 bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs flex flex-col justify-between">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h3 class="font-bold text-slate-900 font-serif text-base">Monthly B2B Inquiries & Leads</h3>
                                <p class="text-xs text-slate-400">Formal quote requests and international buyer messages across 2026</p>
                            </div>
                            <span class="px-2.5 py-1 bg-slate-100 text-slate-600 text-[11px] font-semibold rounded-lg">2026 YTD</span>
                        </div>
                        <div class="h-72 relative">
                            <canvas id="ordersChart"></canvas>
                        </div>
                    </div>

                    <!-- Product Category Distribution Doughnut Breakdown -->
                    <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs flex flex-col justify-between space-y-4">
                        <div>
                            <div class="flex items-center justify-between mb-1">
                                <h3 class="font-bold text-slate-900 font-serif text-base">Catalog by Category</h3>
                                <span class="text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-200">{{ count($products) }} Products</span>
                            </div>
                            <p class="text-xs text-slate-400 mb-4">Distribution across export salt segments</p>
                            
                            <div class="h-44 relative flex items-center justify-center">
                                <canvas id="categoryChart"></canvas>
                            </div>
                        </div>

                        <!-- Dynamic Category Legend Breakdown -->
                        <div class="space-y-2 pt-2 border-t border-slate-100 text-xs">
                            @php
                                $colors = ['#e07a5f', '#d4a373', '#3b82f6', '#10b981', '#8b5cf6', '#f59e0b'];
                                $cIdx = 0;
                            @endphp
                            @forelse($catProductCounts as $catName => $pCount)
                                @php
                                    $pct = $totalCatalogProducts > 0 ? round(($pCount / $totalCatalogProducts) * 100) : 0;
                                    $c = $colors[$cIdx % count($colors)];
                                    $cIdx++;
                                @endphp
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <span class="w-3 h-3 rounded-md shrink-0" style="background-color: {{ $c }}"></span>
                                        <span class="font-medium text-slate-700 truncate max-w-[170px]">{{ $catName }}</span>
                                    </div>
                                    <span class="font-bold text-slate-900 whitespace-nowrap">{{ $pct }}% <span class="text-[10px] text-slate-400 font-normal">({{ $pCount }} {{ Str::plural('Product', $pCount) }})</span></span>
                                </div>
                            @empty
                                <div class="p-4 text-center text-slate-400 bg-slate-50 rounded-xl border border-slate-100">
                                    No category product data recorded yet.
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <!-- Lower Section: Recent Orders Preview & Top Destination Markets -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    {{--
                    <!-- Recent Bulk Orders Quick Widget (COMMENTED OUT) -->
                    <div class="lg:col-span-2 bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-xs">
                        <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                            <div>
                                <h3 class="font-serif text-base font-bold text-slate-900">Recent Store Orders</h3>
                                <p class="text-xs text-slate-400">Latest export order inquiries placed by buyers</p>
                            </div>
                            <button @click="switchTab('orders')" class="text-xs font-bold text-[#e07a5f] hover:underline flex items-center gap-1 cursor-pointer">
                                <span>View All Orders</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </button>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse text-xs">
                                <thead>
                                    <tr class="bg-slate-50 text-slate-500 text-[11px] uppercase tracking-wider border-b border-slate-200/80">
                                        <th class="p-3.5 px-4">Order Ref #</th>
                                        <th class="p-3.5 px-4">Customer Company</th>
                                        <th class="p-3.5 px-4">Destination</th>
                                        <th class="p-3.5 px-4 text-center">Status</th>
                                        <th class="p-3.5 px-4 text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100">
                                    @forelse($quotes->take(4) as $quote)
                                    <tr class="hover:bg-slate-50/60 transition-colors">
                                        <td class="p-3.5 px-4 whitespace-nowrap font-mono font-bold text-[#e07a5f]">{{ $quote->quote_number }}</td>
                                        <td class="p-3.5 px-4">
                                            <div class="font-bold text-slate-900">{{ $quote->company_name }}</div>
                                            <div class="text-[10px] text-slate-400">{{ $quote->full_name }}</div>
                                        </td>
                                        <td class="p-3.5 px-4 whitespace-nowrap">
                                            <span class="font-semibold text-slate-800"><i class="fa-solid fa-earth-americas text-[#e07a5f] text-[10px] mr-1"></i> {{ $quote->destination_country }}</span>
                                        </td>
                                        <td class="p-3.5 px-4 text-center whitespace-nowrap">
                                            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold border 
                                                {{ $quote->status === 'completed' ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : ($quote->status === 'processing' ? 'bg-blue-50 text-blue-700 border-blue-200' : 'bg-amber-50 text-amber-700 border-amber-200') }}">
                                                {{ ucfirst($quote->status) }}
                                            </span>
                                        </td>
                                        <td class="p-3.5 px-4 text-right whitespace-nowrap">
                                            <button @click="viewQuoteDetails(@js($quote))" class="p-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg text-xs font-semibold transition-all cursor-pointer" title="View Details">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr><td colspan="5" class="p-6 text-center text-slate-400">No orders recorded yet.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    --}}

                    <!-- Recent Customer Inquiries Quick Widget -->
                    <div class="lg:col-span-2 bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-xs">
                        <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                            <div>
                                <h3 class="font-serif text-base font-bold text-slate-900">Recent Customer Inquiries</h3>
                                <p class="text-xs text-slate-400">Latest quote requests and inquiries submitted by buyers</p>
                            </div>
                            <button @click="switchTab('inquiries')" class="text-xs font-bold text-[#e07a5f] hover:underline flex items-center gap-1 cursor-pointer">
                                <span>View All Inquiries</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </button>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse text-xs">
                                <thead>
                                    <tr class="bg-slate-50 text-slate-500 text-[11px] uppercase tracking-wider border-b border-slate-200/80">
                                        <th class="p-3.5 px-4">Sender</th>
                                        <th class="p-3.5 px-4">Subject</th>
                                        <th class="p-3.5 px-4">Country</th>
                                        <th class="p-3.5 px-4 text-center">Status</th>
                                        <th class="p-3.5 px-4 text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100">
                                    @forelse($inquiries->take(4) as $inq)
                                    <tr class="hover:bg-slate-50/60 transition-colors">
                                        <td class="p-3.5 px-4">
                                            <div class="font-bold text-slate-900">{{ $inq->name }}</div>
                                            <div class="text-[10px] text-slate-400">{{ $inq->email }}</div>
                                        </td>
                                        <td class="p-3.5 px-4 whitespace-nowrap">
                                            <span class="font-semibold text-slate-800">{{ Str::limit($inq->subject, 30) }}</span>
                                        </td>
                                        <td class="p-3.5 px-4 whitespace-nowrap">
                                            <span class="font-semibold text-slate-700">{{ $inq->country ?? 'International' }}</span>
                                        </td>
                                        <td class="p-3.5 px-4 text-center whitespace-nowrap">
                                            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold border 
                                                {{ $inq->status === 'replied' ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : ($inq->status === 'read' ? 'bg-blue-50 text-blue-700 border-blue-200' : 'bg-amber-50 text-amber-700 border-amber-200') }}">
                                                {{ ucfirst($inq->status) }}
                                            </span>
                                        </td>
                                        <td class="p-3.5 px-4 text-right whitespace-nowrap">
                                            <button @click="viewInquiry(@js($inq))" class="p-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg text-xs font-semibold transition-all cursor-pointer" title="View Details">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr><td colspan="5" class="p-6 text-center text-slate-400">No customer inquiries recorded yet.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Top Export Markets / Destination Ports -->
                    <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs flex flex-col justify-between space-y-4">
                        <div>
                            <h3 class="font-serif text-base font-bold text-slate-900 mb-1">Top Export Markets</h3>
                            <p class="text-xs text-slate-400 mb-4">Leading buyer port destinations</p>
                            
                            <div class="space-y-3.5 text-xs">
                                @php
                                    $mIdx = 0;
                                    $mColors = ['bg-[#e07a5f]', 'bg-amber-500', 'bg-sky-500', 'bg-slate-700', 'bg-emerald-500'];
                                @endphp
                                @forelse($marketGroup as $country => $inqCount)
                                    @php
                                        $pct = $totalMarketInquiries > 0 ? round(($inqCount / $totalMarketInquiries) * 100) : 0;
                                        $mc = $mColors[$mIdx % count($mColors)];
                                        $mIdx++;
                                    @endphp
                                    <div>
                                        <div class="flex justify-between font-semibold text-slate-800 mb-1">
                                            <span><i class="fa-solid fa-earth-americas text-[#e07a5f] text-[10px] mr-1"></i> {{ $country }}</span>
                                            <span class="font-mono font-bold text-slate-900">{{ $inqCount }} {{ Str::plural('Inquiry', $inqCount) }} ({{ $pct }}%)</span>
                                        </div>
                                        <div class="w-full bg-slate-100 rounded-full h-2 overflow-hidden">
                                            <div class="{{ $mc }} h-2 rounded-full" style="width: {{ max($pct, 8) }}%"></div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="p-6 text-center text-slate-400 bg-slate-50 rounded-xl border border-slate-100">
                                        <i class="fa-solid fa-globe text-slate-300 text-2xl mb-2 block"></i>
                                        <span>No export market activity recorded yet.</span>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- TAB 2: PRODUCT CATALOG -->
            <div x-show="activeTab === 'products'" x-cloak class="space-y-6">
                <div class="flex items-center justify-between gap-4 flex-wrap">
                    <div>
                        <h2 class="text-xl font-bold font-serif text-slate-900">Product Catalog</h2>
                        <p class="text-xs text-slate-500">Manage store products, grade specifications, and active status.</p>
                    </div>
                    <a href="{{ route('admin.products.create') }}" class="px-4 py-2 bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs rounded-xl shadow-xs transition-all flex items-center gap-2 cursor-pointer">
                        <i class="fa-solid fa-plus text-[10px]"></i> Add Salt Product
                    </a>
                </div>

                <div class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-xs">
                    <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between gap-4 flex-wrap">
                        <h3 class="font-serif text-sm font-bold text-slate-900">Catalog Products</h3>

                        <div class="flex items-center gap-3 flex-wrap">
                            <select x-model="prodStatusFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f] cursor-pointer">
                                <option value="all">All Statuses</option>
                                <option value="active">Active Only</option>
                                <option value="inactive">Disabled Only</option>
                            </select>

                            <select x-model="prodCategoryFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f] cursor-pointer">
                                <option value="all">All Categories</option>
                                @foreach($categories as $c)
                                <option value="{{ $c->name }}">{{ $c->name }}</option>
                                @endforeach
                            </select>

                            <div class="relative w-64">
                                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                                <input type="text" x-model="prodSearchQuery" placeholder="Search product..." class="w-full pl-9 pr-4 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs focus:outline-none focus:border-[#e07a5f]">
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto relative">
                        <table class="w-full text-left border-collapse text-xs">
                            <thead>
                                <tr class="bg-slate-50 text-slate-500 text-[11px] uppercase tracking-wider border-b border-slate-200/80">
                                    <th class="py-3.5 px-4 min-w-[200px]">Product Info</th>
                                    <th class="py-3.5 px-4 min-w-[140px]">Category & Grade</th>
                                    <th class="py-3.5 px-4 min-w-[120px]">Price & Unit</th>
                                    <th class="py-3.5 px-6 text-center min-w-[120px] whitespace-nowrap">Status</th>
                                    <th class="py-3.5 px-4 text-right whitespace-nowrap sticky right-0 bg-slate-50 z-20 shadow-[-8px_0_12px_-4px_rgba(0,0,0,0.08)] min-w-[190px]">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                @forelse($products as $prod)
                                <tr class="hover:bg-slate-50/70 transition-colors group" x-show="matchProduct('{{ addslashes($prod->name) }}', '{{ addslashes($prod->categoryRef->name ?? $prod->category) }}', {{ $prod->is_active ? 'true' : 'false' }}, '{{ addslashes($prod->short_desc ?? '') }}')">
                                    <td class="py-3 px-4">
                                        <div class="flex items-center gap-3">
                                            @if($prod->image_url)
                                            <img src="{{ $prod->image_url }}" alt="{{ $prod->name }}" class="w-11 h-11 rounded-xl object-cover bg-slate-100 border border-slate-200 shrink-0" onerror="this.onerror=null; this.src='/bulk.jpg';">
                                            @else
                                            <div class="w-11 h-11 rounded-xl bg-slate-100 border border-dashed border-slate-300 shrink-0 flex items-center justify-center text-slate-400" title="No photo uploaded">
                                                <i class="fa-solid fa-cube text-slate-300 text-sm"></i>
                                            </div>
                                            @endif
                                            <div class="min-w-0">
                                                <div class="flex items-center gap-1.5 flex-wrap">
                                                    <h4 class="font-bold text-slate-900 text-xs truncate max-w-[180px]">{{ $prod->name }}</h4>
                                                    @if($prod->badge)
                                                    <span class="px-1.5 py-0.5 bg-amber-50 border border-amber-200 text-amber-700 text-[9px] font-bold rounded-sm shrink-0">{{ $prod->badge }}</span>
                                                    @endif
                                                </div>
                                                <p class="text-slate-500 text-[10px] line-clamp-1 truncate max-w-[200px]">{{ $prod->short_desc }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 px-4">
                                        <span class="font-bold text-slate-800 text-xs block whitespace-nowrap">{{ $prod->categoryRef->name ?? $prod->category }}</span>
                                        @if($prod->subcategoryRef)
                                        <span class="text-[#e07a5f] font-semibold text-[10px] block truncate max-w-[170px]" title="{{ $prod->subcategoryRef->name }}">
                                            <i class="fa-solid fa-angle-right text-[8px] mr-1"></i>{{ $prod->subcategoryRef->name }}
                                        </span>
                                        @endif
                                        <span class="text-slate-400 text-[10px] block truncate max-w-[130px]">{{ $prod->grade ?? 'Food Grade' }}</span>
                                    </td>
                                    <td class="py-3 px-4 whitespace-nowrap">
                                        @if($prod->price && $prod->price > 0)
                                        <span class="font-bold text-slate-900 text-xs">${{ number_format($prod->price, 2) }}</span>
                                        <span class="text-slate-500 text-[10px] block">/ {{ ltrim($prod->price_unit ?? 'kg', '/') }}</span>
                                        @else
                                        <span class="px-2 py-0.5 bg-slate-100 text-slate-600 text-[10px] font-bold rounded-md">Custom Quote</span>
                                        @endif
                                        @if($prod->moq)
                                        <span class="text-slate-400 text-[9px] block">MOQ: {{ $prod->moq }}</span>
                                        @endif
                                    </td>
                                    <td class="py-3 px-6 text-center whitespace-nowrap">
                                        <button type="button" @click="toggleStatus({{ $prod->id }})" 
                                            class="px-3 py-1 rounded-full text-[11px] font-bold border transition-all inline-flex items-center gap-1.5 cursor-pointer shrink-0 {{ $prod->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200 hover:bg-emerald-100' : 'bg-rose-50 text-rose-700 border-rose-200 hover:bg-rose-100' }}"
                                            title="Click to toggle status">
                                            <span class="w-1.5 h-1.5 rounded-full {{ $prod->is_active ? 'bg-emerald-600' : 'bg-rose-600' }}"></span>
                                            <span>{{ $prod->is_active ? 'Active' : 'Disabled' }}</span>
                                        </button>
                                    </td>
                                    <td class="py-3 px-4 text-right whitespace-nowrap sticky right-0 bg-white group-hover:bg-slate-50 z-10 shadow-[-8px_0_12px_-4px_rgba(0,0,0,0.08)]">
                                        <div class="flex items-center justify-end gap-1.5">
                                            <button type="button" @click="viewProductDetails({{ json_encode($prod) }})" class="px-2.5 py-1.5 bg-sky-50 hover:bg-sky-100 text-sky-700 border border-sky-200 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1 shadow-xs" title="View Details Popup">
                                                <i class="fa-solid fa-eye text-xs"></i>
                                                <span>View</span>
                                            </button>
                                            <a href="{{ route('admin.products.edit', $prod->id) }}" class="px-2.5 py-1.5 bg-amber-50 hover:bg-amber-100 text-amber-700 border border-amber-200 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1 shadow-xs" title="Edit Product">
                                                <i class="fa-solid fa-pen-to-square text-xs"></i>
                                                <span>Edit</span>
                                            </a>
                                            <button type="button" @click="deleteProduct({{ $prod->id }}, '{{ addslashes($prod->name) }}')" class="px-2.5 py-1.5 bg-rose-50 hover:bg-rose-100 text-rose-600 border border-rose-200 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1 shadow-xs" title="Delete Product">
                                                <i class="fa-solid fa-trash text-xs"></i>
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr><td colspan="6" class="p-8 text-center text-slate-400">No products found.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{--
            <!-- TAB 3: BULK STORE ORDERS WITH PRINT INVOICE (COMMENTED OUT) -->
            <div x-show="activeTab === 'orders'" class="space-y-6">
                <div class="flex items-center justify-between gap-4 flex-wrap">
                    <div>
                        <h2 class="text-xl font-bold font-serif text-slate-900">Bulk Store Orders</h2>
                        <p class="text-xs text-slate-500">Importers & buyer export order requests placed through the store.</p>
                    </div>
                </div>

                <div class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-xs">
                    <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between gap-4 flex-wrap">
                        <h3 class="font-serif text-sm font-bold text-slate-900">Store Orders</h3>

                        <div class="flex items-center gap-3">
                            <select x-model="orderStatusFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f] cursor-pointer">
                                <option value="all">All Order Statuses</option>
                                <option value="pending">Pending</option>
                                <option value="processing">Processing</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>

                            <div class="relative w-64">
                                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                                <input type="text" x-model="orderSearchQuery" placeholder="Search ref #, buyer, port..." class="w-full pl-9 pr-4 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs focus:outline-none focus:border-[#e07a5f]">
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse text-xs">
                            <thead>
                                <tr class="bg-slate-50 text-slate-500 text-[11px] uppercase tracking-wider border-b border-slate-200/80">
                                    <th class="p-4">Order Ref #</th>
                                    <th class="p-4">Customer & Company</th>
                                    <th class="p-4">Destination</th>
                                    <th class="p-4 text-center">Items</th>
                                    <th class="p-4 text-center">Status</th>
                                    <th class="p-4 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                @forelse($quotes as $quote)
                                <tr class="hover:bg-slate-50/60 transition-colors" x-show="matchOrder('{{ addslashes($quote->quote_number) }}', '{{ addslashes($quote->company_name) }}', '{{ addslashes($quote->full_name) }}', '{{ addslashes($quote->email) }}', '{{ addslashes($quote->destination_country) }}', '{{ addslashes($quote->destination_port ?? '') }}', '{{ $quote->status }}')">
                                    <td class="p-4 whitespace-nowrap">
                                        <div class="font-mono font-bold text-[#e07a5f] text-xs">{{ $quote->quote_number }}</div>
                                        <div class="text-[10px] text-slate-400">{{ $quote->created_at->format('M d, Y H:i') }}</div>
                                    </td>
                                    <td class="p-4">
                                        <div class="font-bold text-slate-900 text-xs">{{ $quote->company_name }}</div>
                                        <div class="text-slate-500 text-[11px]">{{ $quote->full_name }} &bull; <span class="text-slate-400">{{ $quote->email }}</span></div>
                                    </td>
                                    <td class="p-4 whitespace-nowrap">
                                        <div class="font-semibold text-slate-900 text-xs flex items-center gap-1.5">
                                            <i class="fa-solid fa-earth-americas text-[#e07a5f] text-[11px]"></i> {{ $quote->destination_country }}
                                        </div>
                                        <div class="text-[10px] text-slate-400">{{ $quote->destination_port ?? 'Port of Entry' }}</div>
                                    </td>
                                    <td class="p-4 text-center whitespace-nowrap">
                                        <span class="inline-flex items-center px-2.5 py-1 bg-slate-100 text-slate-700 rounded-full font-mono text-[11px] font-bold">
                                            {{ count($quote->items ?? []) }} Line Items
                                        </span>
                                    </td>
                                    <td class="p-4 text-center whitespace-nowrap">
                                        <select @change="updateQuoteStatus({{ $quote->id }}, $event.target.value)" 
                                            class="bg-white border border-slate-300 rounded-lg px-2.5 py-1 text-[11px] font-bold text-slate-700 shadow-2xs focus:outline-none focus:border-[#e07a5f] cursor-pointer">
                                            <option value="pending" {{ $quote->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="processing" {{ $quote->status === 'processing' ? 'selected' : '' }}>Processing</option>
                                            <option value="completed" {{ $quote->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                            <option value="cancelled" {{ $quote->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                        </select>
                                    </td>
                                    <td class="p-4 text-right whitespace-nowrap">
                                        <div class="flex items-center justify-end gap-1.5">
                                            <button @click="viewQuoteDetails(@js($quote))" class="p-2 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg transition-all text-xs font-semibold cursor-pointer" title="View Order Details">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                            <button @click="printInvoice(@js($quote))" class="p-2 bg-amber-50 hover:bg-amber-100 text-amber-700 border border-amber-200 rounded-lg transition-all text-xs font-semibold cursor-pointer" title="Print Invoice">
                                                <i class="fa-solid fa-print"></i>
                                            </button>
                                            <button @click="deleteQuote({{ $quote->id }}, '{{ $quote->quote_number }}')" class="p-2 bg-rose-50 hover:bg-rose-100 text-rose-600 border border-rose-200 rounded-lg transition-all text-xs font-semibold cursor-pointer" title="Delete Order">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr><td colspan="6" class="p-8 text-center text-slate-400">No bulk orders placed yet.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            --}}

            <!-- TAB 4: CUSTOMER MESSAGES -->
            <div x-show="activeTab === 'inquiries'" x-cloak class="space-y-6">
                <div class="flex items-center justify-between gap-4 flex-wrap">
                    <div>
                        <h2 class="text-xl font-bold font-serif text-slate-900">Customer Messages</h2>
                        <p class="text-xs text-slate-500">Inquiries submitted via the store contact form.</p>
                    </div>
                </div>

                <div class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-xs">
                    <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between gap-4 flex-wrap">
                        <h3 class="font-serif text-sm font-bold text-slate-900">Store Inquiries</h3>

                        <div class="flex items-center gap-3">
                            <select x-model="inquiryStatusFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f] cursor-pointer">
                                <option value="all">All Message Statuses</option>
                                <option value="new">New</option>
                                <option value="read">Read</option>
                                <option value="replied">Replied</option>
                                <option value="archived">Archived</option>
                            </select>

                            <div class="relative w-64">
                                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                                <input type="text" x-model="inquirySearchQuery" placeholder="Search sender, subject..." class="w-full pl-9 pr-4 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs focus:outline-none focus:border-[#e07a5f]">
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse text-xs">
                            <thead>
                                <tr class="bg-slate-50 text-slate-500 text-[11px] uppercase tracking-wider border-b border-slate-200/80">
                                    <th class="p-4">Sender Info</th>
                                    <th class="p-4">Subject</th>
                                    <th class="p-4">Message Preview</th>
                                    <th class="p-4 text-center">Status</th>
                                    <th class="p-4 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                @forelse($inquiries as $inq)
                                <tr class="hover:bg-slate-50/60 transition-colors" x-show="matchInquiry('{{ addslashes($inq->name) }}', '{{ addslashes($inq->email) }}', '{{ addslashes($inq->subject ?? '') }}', '{{ addslashes($inq->message) }}', '{{ $inq->status }}')">
                                    <td class="p-4">
                                        <div class="font-bold text-slate-900">{{ $inq->name }}</div>
                                        <div class="text-slate-600 text-[11px]">{{ $inq->email }}</div>
                                    </td>
                                    <td class="p-4 font-semibold text-[#e07a5f]">{{ $inq->subject ?? 'Store Inquiry' }}</td>
                                    <td class="p-4 text-slate-600 max-w-sm"><p class="line-clamp-2 text-slate-500 text-[11px]">{{ $inq->message }}</p></td>
                                    <td class="p-4 text-center">
                                        <select @change="updateInquiryStatus({{ $inq->id }}, $event.target.value)" 
                                            class="bg-white border border-slate-300 rounded-lg px-2.5 py-1 text-[11px] font-bold text-slate-800 focus:outline-none focus:border-[#e07a5f] cursor-pointer">
                                            <option value="new" {{ $inq->status === 'new' ? 'selected' : '' }}>New</option>
                                            <option value="read" {{ $inq->status === 'read' ? 'selected' : '' }}>Read</option>
                                            <option value="replied" {{ $inq->status === 'replied' ? 'selected' : '' }}>Replied</option>
                                            <option value="archived" {{ $inq->status === 'archived' ? 'selected' : '' }}>Archived</option>
                                        </select>
                                    </td>
                                    <td class="p-4 text-right whitespace-nowrap">
                                        <div class="flex items-center justify-end gap-1.5">
                                            <button @click="viewInquiry(@js($inq))" class="p-2 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg transition-all text-xs font-semibold cursor-pointer" title="Read Message">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                            <button @click="deleteInquiry({{ $inq->id }}, '{{ addslashes($inq->name) }}')" class="p-2 bg-rose-50 hover:bg-rose-100 text-rose-600 border border-rose-200 rounded-lg transition-all text-xs font-semibold cursor-pointer" title="Delete Message">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr><td colspan="5" class="p-8 text-center text-slate-400">No customer messages received yet.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- TAB 5: BLOGS & INSIGHTS -->
            <div x-show="activeTab === 'blogs'" x-cloak class="space-y-6">
                <div class="flex items-center justify-between gap-4 flex-wrap">
                    <div>
                        <h2 class="text-xl font-bold font-serif text-slate-900">Blog Articles & Export Insights</h2>
                        <p class="text-xs text-slate-500">Publish guides, industry news, and trade insights for international buyers.</p>
                    </div>
                    <a href="{{ route('admin.blogs.create') }}" class="px-4 py-2 bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs rounded-xl shadow-xs transition-all flex items-center gap-2 cursor-pointer">
                        <i class="fa-solid fa-plus text-[10px]"></i> Add Blog Article
                    </a>
                </div>

                <div class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-xs">
                    <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between gap-4 flex-wrap">
                        <h3 class="font-serif text-sm font-bold text-slate-900">Articles & News</h3>

                        <div class="flex items-center gap-3">
                            <select x-model="blogStatusFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f] cursor-pointer">
                                <option value="all">All Statuses</option>
                                <option value="published">Published Only</option>
                                <option value="draft">Draft Only</option>
                            </select>

                            <div class="relative w-64">
                                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                                <input type="text" x-model="blogSearchQuery" placeholder="Search title, author, category..." class="w-full pl-9 pr-4 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs focus:outline-none focus:border-[#e07a5f]">
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse text-xs">
                            <thead>
                                <tr class="bg-slate-50 text-slate-500 text-[11px] uppercase tracking-wider border-b border-slate-200/80">
                                    <th class="p-4">Article Info</th>
                                    <th class="p-4">Category & Author</th>
                                    <th class="p-4 text-center">Status</th>
                                    <th class="p-4 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                @forelse($posts as $p)
                                <tr class="hover:bg-slate-50/60 transition-colors" x-show="matchBlog('{{ addslashes($p->title) }}', '{{ addslashes($p->author) }}', '{{ addslashes($p->category) }}', {{ $p->is_published ? 'true' : 'false' }})">
                                    <td class="p-4">
                                        <div class="flex items-center gap-3">
                                            <img src="{{ $p->image_url }}" alt="{{ $p->title }}" class="w-12 h-12 rounded-xl object-cover bg-slate-100 border border-slate-200 shrink-0" onerror="this.onerror=null; this.src='/blog-hero.jpg';">
                                            <div>
                                                <h4 class="font-bold text-slate-900 text-sm line-clamp-1">{{ $p->title }}</h4>
                                                <p class="text-slate-500 text-[11px] line-clamp-1 max-w-xs">{{ $p->excerpt }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-4 whitespace-nowrap">
                                        <div class="font-semibold text-slate-900">{{ $p->category }}</div>
                                        <div class="text-slate-400 text-[11px]"><i class="fa-solid fa-user text-[9px] mr-1"></i> {{ $p->author }}</div>
                                    </td>
                                    <td class="p-4 text-center whitespace-nowrap">
                                        <button @click="toggleBlogStatus({{ $p->id }})" 
                                            class="px-3 py-1 rounded-full text-[10px] font-bold border transition-all inline-flex items-center gap-1.5 cursor-pointer {{ $p->is_published ? 'bg-emerald-50 text-emerald-700 border-emerald-200 hover:bg-emerald-100' : 'bg-slate-100 text-slate-700 border-slate-300 hover:bg-slate-200' }}">
                                            <span class="w-1.5 h-1.5 rounded-full {{ $p->is_published ? 'bg-emerald-600' : 'bg-slate-500' }}"></span>
                                            {{ $p->is_published ? 'Published' : 'Draft' }}
                                        </button>
                                    </td>
                                    <td class="p-4 text-right whitespace-nowrap">
                                        <div class="flex items-center justify-end gap-1.5">
                                            <a href="{{ route('blog.detail', $p->slug) }}" target="_blank" class="p-2 bg-sky-50 hover:bg-sky-100 text-sky-700 rounded-lg text-xs font-semibold transition-all cursor-pointer" title="View Article on Live Site">
                                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                            </a>
                                            <a href="{{ route('admin.blogs.edit', $p->id) }}" class="p-2 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg text-xs font-semibold transition-all cursor-pointer inline-flex items-center" title="Edit Article">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <button @click="deleteBlog({{ $p->id }}, '{{ addslashes($p->title) }}')" class="p-2 bg-rose-50 hover:bg-rose-100 text-rose-600 border border-rose-200 rounded-lg text-xs font-semibold transition-all cursor-pointer" title="Delete Article">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr><td colspan="5" class="p-8 text-center text-slate-400">No blog articles created yet.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <!-- CREATE / EDIT PRODUCT MODAL (FIXED SCROLLBAR & FILE UPLOAD FROM PC) -->
    <div x-show="showProductModal" @click.self="showProductModal = false" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto cursor-pointer" x-cloak>
        <div class="bg-white border border-slate-200 rounded-2xl max-w-2xl w-full p-6 shadow-2xl relative max-h-[85vh] flex flex-col my-auto">
            
            <div class="flex items-center justify-between border-b border-slate-100 pb-3 shrink-0">
                <h3 class="text-lg font-bold font-serif text-slate-900" x-text="isEditMode ? 'Edit Store Product' : 'Add New Salt Product'"></h3>
                <button @click="showProductModal = false" class="text-slate-400 hover:text-slate-800 cursor-pointer"><i class="fa-solid fa-xmark text-lg"></i></button>
            </div>

            <form @submit.prevent="saveProductWithFile($event)" class="space-y-4 text-xs overflow-y-auto custom-modal-scroll py-4 pr-2 flex-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="sm:col-span-2">
                        <label class="block text-slate-700 font-semibold mb-1">Product Name *</label>
                        <input type="text" x-model="productForm.name" name="name" required placeholder="e.g. Gourmet Himalayan Pink Salt Fine Grain" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                    </div>

                    <!-- Category * (Compulsory) -->
                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Category *</label>
                        <select x-model="productForm.category_id" id="dashModalCatSelect" name="category_id" required @change="handleCatChange($event.target.value)" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] cursor-pointer">
                            <option value="">Select Category *</option>
                            @foreach($categories as $c)
                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Subcategory * (Compulsory) -->
                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Subcategory *</label>
                        <select x-model="productForm.subcategory_id" id="dashModalSubcatSelect" name="subcategory_id" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] cursor-pointer">
                            <option value="">Select Category First...</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Base Price ($ USD)</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 font-bold">$</span>
                            <input type="number" step="0.01" min="0" x-model="productForm.price" name="price" placeholder="1.45" class="w-full bg-slate-50 border border-slate-300 rounded-xl pl-7 pr-3 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                        </div>
                    </div>

                    <!-- Price Unit with Runtime Custom Option -->
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <label class="block text-slate-700 font-semibold">Price Unit</label>
                            <button type="button" @click="customPriceUnit = !customPriceUnit" class="text-[10px] text-[#e07a5f] hover:underline font-semibold cursor-pointer">
                                <span x-show="!customPriceUnit">+ Add Custom Unit</span>
                                <span x-show="customPriceUnit">&larr; Choose Preset</span>
                            </button>
                        </div>
                        <div x-show="!customPriceUnit">
                            <select x-model="productForm.price_unit" @change="if($event.target.value === '__custom__') { customPriceUnit = true; productForm.price_unit = ''; }" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] cursor-pointer">
                                <option value="">Select or leave blank</option>
                                <option value="per kg">per kg</option>
                                <option value="per piece">per piece (pcs)</option>
                                <option value="per 25kg bag">per 25kg bag</option>
                                <option value="per 50kg bag">per 50kg bag</option>
                                <option value="per metric ton">per metric ton (MT)</option>
                                <option value="per pouch">per zip pouch</option>
                                <option value="per jar">per jar</option>
                                <option value="per bottle">per grinder bottle</option>
                                <option value="per set">per lamp set</option>
                                <option value="per slab">per cooking slab / tile</option>
                                <option value="per carton">per carton / box</option>
                                <option value="per pallet">per pallet</option>
                                <option value="__custom__" class="font-bold text-[#e07a5f]">+ Add Custom / Type Unit...</option>
                            </select>
                        </div>
                        <div x-show="customPriceUnit" x-cloak>
                            <input type="text" x-model="productForm.price_unit" placeholder="Type custom unit (e.g. per drum, per 10kg bucket)" class="w-full bg-white border border-[#e07a5f] rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:ring-1 focus:ring-[#e07a5f]">
                        </div>
                        <input type="hidden" name="price_unit" :value="productForm.price_unit">
                    </div>

                    <!-- Salt Grain / Mesh Size with Runtime Custom Option -->
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <label class="block text-slate-700 font-semibold">Salt Grain / Mesh Size</label>
                            <button type="button" @click="customGrainSize = !customGrainSize" class="text-[10px] text-[#e07a5f] hover:underline font-semibold cursor-pointer">
                                <span x-show="!customGrainSize">+ Add Custom Mesh</span>
                                <span x-show="customGrainSize">&larr; Choose Preset</span>
                            </button>
                        </div>
                        <div x-show="!customGrainSize">
                            <select x-model="productForm.grain_size" @change="if($event.target.value === '__custom__') { customGrainSize = true; productForm.grain_size = ''; }" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] cursor-pointer">
                                <option value="">Select or leave blank</option>
                                <option value="Fine Salt (0.3 - 0.8 mm)">Fine Salt (0.3 - 0.8 mm)</option>
                                <option value="Extra Fine (0.1 - 0.3 mm)">Extra Fine (0.1 - 0.3 mm)</option>
                                <option value="Medium Salt (0.8 - 2 mm)">Medium Salt (0.8 - 2 mm)</option>
                                <option value="Coarse Salt (2 - 5 mm)">Coarse Salt (2 - 5 mm)</option>
                                <option value="Crystal Salt (5 - 8 mm)">Crystal Salt (5 - 8 mm)</option>
                                <option value="Natural Rock Lump Salt">Natural Rock Lump Salt</option>
                                <option value="Not Applicable (Crafted Lamp / Tile)">Not Applicable (Crafted Lamp / Tile / Lick)</option>
                                <option value="__custom__" class="font-bold text-[#e07a5f]">+ Add Custom / Type Mesh Size...</option>
                            </select>
                        </div>
                        <div x-show="customGrainSize" x-cloak>
                            <input type="text" x-model="productForm.grain_size" placeholder="Type custom mesh (e.g. 20-40 Mesh, 1.2 - 2.5 mm)" class="w-full bg-white border border-[#e07a5f] rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:ring-1 focus:ring-[#e07a5f]">
                        </div>
                        <input type="hidden" name="grain_size" :value="productForm.grain_size">
                    </div>

                    <!-- Packaging Type with Runtime Custom Option -->
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <label class="block text-slate-700 font-semibold">Packaging Type</label>
                            <button type="button" @click="customPackagingType = !customPackagingType" class="text-[10px] text-[#e07a5f] hover:underline font-semibold cursor-pointer">
                                <span x-show="!customPackagingType">+ Add Custom Packaging</span>
                                <span x-show="customPackagingType">&larr; Choose Preset</span>
                            </button>
                        </div>
                        <div x-show="!customPackagingType">
                            <select x-model="productForm.packaging_type" @change="if($event.target.value === '__custom__') { customPackagingType = true; productForm.packaging_type = ''; }" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] cursor-pointer">
                                <option value="">Select or leave blank</option>
                                <option value="Zip Pouch">Zip Pouch (200g - 1kg)</option>
                                <option value="PET Jar">PET Jar (200g - 500g)</option>
                                <option value="Glass Jar">Glass Jar (250g - 500g)</option>
                                <option value="Grinder Bottle">Grinder Bottle (Ceramic Core)</option>
                                <option value="Shaker Bottle">Shaker Bottle</option>
                                <option value="Food Grade PP Bag">Food-Grade PP Bag (2kg - 25kg)</option>
                                <option value="50kg Heavy-Duty Export Bag">50kg Heavy-Duty Export Bag</option>
                                <option value="1-Ton Jumbo Bag (FIBC)">1-Ton Jumbo Bag (FIBC Big Bag)</option>
                                <option value="Single Piece / Wooden Base">Single Piece / Wooden Base (Salt Lamp)</option>
                                <option value="Metal Wire Basket">Metal Wire Basket (Basket Lamp)</option>
                                <option value="Animal Salt Lick with Hanging Rope">Animal Salt Lick with Hanging Rope</option>
                                <option value="Salt Lamp Set">Salt Lamp Set</option>
                                <option value="Carton Box / Pallet">Carton Box / Palletized Slabs</option>
                                <option value="__custom__" class="font-bold text-[#e07a5f]">+ Add Custom / Type Packaging...</option>
                            </select>
                        </div>
                        <div x-show="customPackagingType" x-cloak>
                            <input type="text" x-model="productForm.packaging_type" placeholder="Type custom packaging (e.g. 500g Kraft Pouch, Tin Can)" class="w-full bg-white border border-[#e07a5f] rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:ring-1 focus:ring-[#e07a5f]">
                        </div>
                        <input type="hidden" name="packaging_type" :value="productForm.packaging_type">
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Unit Weight / Capacity</label>
                        <input type="text" x-model="productForm.package_weight" name="package_weight" placeholder="e.g. 500g, 25 kg, 1 Ton, 2-3 kg" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Min. Order Qty (MOQ)</label>
                        <input type="text" x-model="productForm.moq" name="moq" placeholder="e.g. 500 Bags, 100 Pcs, 20 MT" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Purity Grade</label>
                        <input type="text" x-model="productForm.purity" name="purity" placeholder="e.g. 98.8% NaCl" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Grade Standard</label>
                        <input type="text" x-model="productForm.grade" name="grade" placeholder="e.g. Food Grade ISO-22000" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block text-slate-700 font-semibold mb-1">Packaging Summary</label>
                        <input type="text" x-model="productForm.packaging" name="packaging" placeholder="e.g. 25kg PP bags, 500g Stand-up pouch" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                    </div>

                    <!-- Direct Image Upload from PC Field -->
                    <div class="sm:col-span-2 bg-slate-50 p-3 rounded-xl border border-slate-200/80 space-y-2">
                        <label class="block text-slate-800 font-bold">Product Image (Upload from PC or URL)</label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div>
                                <span class="text-[10px] text-slate-500 font-semibold uppercase block mb-1">Option 1: Upload from Computer</span>
                                <input type="file" name="image_file" accept="image/*" class="block w-full text-xs text-slate-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-900 file:text-white hover:file:bg-slate-800 cursor-pointer">
                            </div>
                            <div>
                                <span class="text-[10px] text-slate-500 font-semibold uppercase block mb-1">Option 2: Image URL Path</span>
                                <input type="text" x-model="productForm.image_url" name="image_url" placeholder="e.g. /product1.jpg (Optional)" class="w-full bg-white border border-slate-300 rounded-xl px-3 py-1.5 text-slate-900 focus:outline-none focus:border-[#e07a5f]">
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block text-slate-700 font-semibold mb-1">Short Description *</label>
                        <textarea x-model="productForm.short_desc" name="short_desc" required rows="2" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]"></textarea>
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block text-slate-700 font-semibold mb-1">Full Detailed Description</label>
                        <textarea x-model="productForm.full_desc" name="full_desc" rows="3" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]"></textarea>
                    </div>

                    <div class="flex items-center gap-6 sm:col-span-2">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" x-model="productForm.is_featured" name="is_featured" value="1" class="w-4 h-4 rounded border-slate-300 text-[#e07a5f]">
                            <span class="text-slate-800 font-semibold">Feature on Homepage</span>
                        </label>

                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" x-model="productForm.is_active" name="is_active" value="1" class="w-4 h-4 rounded border-slate-300 text-[#e07a5f]">
                            <span class="text-slate-800 font-semibold">Active & Visible in Catalog</span>
                        </label>
                    </div>
                </div>

                <div class="flex justify-end gap-3 pt-4 border-t border-slate-100 shrink-0">
                    <button type="button" @click="showProductModal = false" class="px-4 py-2 border border-slate-200 rounded-xl text-slate-600 hover:bg-slate-50 cursor-pointer">Cancel</button>
                    <button type="submit" id="saveProductBtn" class="px-5 py-2 bg-slate-900 hover:bg-slate-800 text-white font-bold rounded-xl shadow-xs cursor-pointer">Save Product</button>
                </div>
            </form>
        </div>
    </div>

    <!-- VIEW PRODUCT DETAILS MODAL -->
    <div x-show="showViewProductModal" @click.self="showViewProductModal = false" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto cursor-pointer" x-cloak>
        <div class="bg-white border border-slate-200 rounded-2xl max-w-xl w-full p-6 shadow-2xl relative max-h-[85vh] flex flex-col my-auto">
            <div class="flex items-center justify-between border-b border-slate-100 pb-3 shrink-0">
                <div class="flex items-center gap-2">
                    <span class="px-2.5 py-1 bg-[#e07a5f]/10 text-[#e07a5f] text-xs font-bold rounded-lg" x-text="selectedViewProduct?.category"></span>
                    <h3 class="text-lg font-bold font-serif text-slate-900" x-text="selectedViewProduct?.name"></h3>
                </div>
                <button @click="showViewProductModal = false" class="text-slate-400 hover:text-slate-800 cursor-pointer"><i class="fa-solid fa-xmark text-lg"></i></button>
            </div>

            <div class="space-y-4 text-xs overflow-y-auto custom-modal-scroll py-4 pr-2 flex-1">
                <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-xl border border-slate-200/80">
                    <template x-if="selectedViewProduct?.image_url">
                        <img :src="selectedViewProduct.image_url" :alt="selectedViewProduct?.name" class="w-24 h-24 object-cover rounded-xl border border-slate-200 shadow-xs bg-white">
                    </template>
                    <template x-if="!selectedViewProduct?.image_url">
                        <div class="w-24 h-24 rounded-xl border border-dashed border-slate-300 bg-slate-100 shrink-0 flex flex-col items-center justify-center text-slate-400 gap-1">
                            <i class="fa-solid fa-cube text-2xl text-slate-300"></i>
                            <span class="text-[9px] font-semibold text-slate-400">No Image</span>
                        </div>
                    </template>
                    <div class="space-y-1">
                        <h4 class="text-base font-bold text-slate-900" x-text="selectedViewProduct?.name"></h4>
                        <p class="text-slate-600 italic" x-text="selectedViewProduct?.short_desc"></p>
                        <div class="flex items-center gap-2 pt-1">
                            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold border" 
                                :class="selectedViewProduct?.is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-rose-50 text-rose-700 border-rose-200'">
                                <i class="fa-solid fa-circle text-[6px] mr-1"></i>
                                <span x-text="selectedViewProduct?.is_active ? 'Active in Catalog' : 'Disabled'"></span>
                            </span>
                            <template x-if="selectedViewProduct?.is_featured">
                                <span class="px-2 py-0.5 bg-amber-50 text-amber-800 border border-amber-200 text-[10px] font-bold rounded-full">
                                    <i class="fa-solid fa-star text-[9px] text-amber-500 mr-1"></i> Featured on Homepage
                                </span>
                            </template>
                        </div>
                    </div>
                </div>

                <!-- Price & Unit Banner -->
                <div class="p-3.5 bg-orange-50/70 border border-orange-200 rounded-xl flex items-center justify-between">
                    <div>
                        <span class="text-[10px] uppercase font-bold text-orange-800 block">Base Export Price</span>
                        <div class="flex items-baseline gap-1 mt-0.5">
                            <span class="text-lg font-extrabold text-slate-900" x-text="selectedViewProduct?.price > 0 ? '$' + Number(selectedViewProduct?.price).toFixed(2) : 'Custom Quote'"></span>
                            <span class="text-xs text-slate-600 font-semibold" x-text="selectedViewProduct?.price > 0 ? '/ ' + (selectedViewProduct?.price_unit || 'unit') : ''"></span>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="text-[10px] uppercase font-bold text-orange-800 block">Min. Order Qty (MOQ)</span>
                        <span class="font-bold text-slate-800 text-xs mt-0.5 block" x-text="selectedViewProduct?.moq || 'Contact for MOQ'"></span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Mesh / Grain Size</span>
                        <span class="font-bold text-slate-800 text-xs" x-text="selectedViewProduct?.grain_size || selectedViewProduct?.mesh_size || 'N/A'"></span>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Packaging Format</span>
                        <span class="font-bold text-slate-800 text-xs" x-text="selectedViewProduct?.packaging_type || selectedViewProduct?.packaging || '25kg PP Bags'"></span>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Unit Weight / Capacity</span>
                        <span class="font-bold text-slate-800 text-xs" x-text="selectedViewProduct?.package_weight || 'Standard'"></span>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Purity Grade</span>
                        <span class="font-bold text-slate-800 text-xs" x-text="selectedViewProduct?.purity || '—'"></span>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80 col-span-2">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Quality Standard</span>
                        <span class="font-bold text-slate-800 text-xs" x-text="selectedViewProduct?.grade || '—'"></span>
                    </div>
                </div>

                <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200/80 space-y-1">
                    <span class="text-[10px] uppercase font-bold text-slate-400 block">Full Description</span>
                    <p class="text-slate-700 leading-relaxed whitespace-pre-line text-xs" x-text="selectedViewProduct?.full_desc || selectedViewProduct?.short_desc || 'No detailed description provided.'"></p>
                </div>
            </div>

            <div class="flex items-center justify-between pt-3 border-t border-slate-100 shrink-0">
                <button @click="showViewProductModal = false; editProduct(selectedViewProduct)" class="px-4 py-2 bg-amber-50 hover:bg-amber-100 text-amber-700 border border-amber-200 font-bold rounded-xl text-xs flex items-center gap-1.5 cursor-pointer">
                    <i class="fa-solid fa-pen-to-square"></i> Edit Product
                </button>
                <button @click="showViewProductModal = false" class="px-5 py-2 bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold rounded-xl text-xs cursor-pointer">Close</button>
            </div>
        </div>
    </div>

    {{--
    <!-- VIEW ORDER DETAILS MODAL (COMMENTED OUT) -->
    <div x-show="showQuoteModal" @click.self="showQuoteModal = false" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs cursor-pointer" x-cloak>
        <div class="bg-white border border-slate-200 rounded-2xl max-w-3xl w-full p-6 shadow-2xl relative space-y-5">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <div>
                    <div class="flex items-center gap-2">
                        <h3 class="text-xl font-serif font-bold text-slate-900">Order Invoice Details</h3>
                        <span class="px-2.5 py-0.5 bg-[#e07a5f]/10 text-[#e07a5f] font-mono font-bold rounded-md text-xs border border-[#e07a5f]/30" x-text="selectedQuote?.quote_number"></span>
                    </div>
                    <p class="text-xs text-slate-400 mt-1" x-text="'Registered on ' + (selectedQuote?.created_at ? new Date(selectedQuote.created_at).toLocaleDateString('en-US', { year: 'numeric', month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit' }) : '')"></p>
                </div>
                <div class="flex items-center gap-2">
                    <button @click="printInvoice(selectedQuote)" class="px-4 py-2 bg-[#e07a5f] hover:bg-[#d46a4f] text-white rounded-xl text-xs font-bold uppercase tracking-wider flex items-center gap-2 cursor-pointer shadow-sm transition-all">
                        <i class="fa-solid fa-print"></i>
                        <span>Print Invoice</span>
                    </button>
                    <button @click="showQuoteModal = false" class="text-slate-400 hover:text-slate-800 cursor-pointer p-1.5 rounded-lg hover:bg-slate-100 transition-all"><i class="fa-solid fa-xmark text-lg"></i></button>
                </div>
            </div>

            <div class="space-y-4 text-xs">
                <!-- Buyer & Destination Info Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 bg-slate-50 p-5 rounded-2xl border border-slate-200/80">
                    <div class="space-y-1.5">
                        <span class="text-[10px] uppercase font-bold text-[#e07a5f] tracking-wider block"><i class="fa-solid fa-building mr-1"></i> Buyer / Importer Details</span>
                        <p class="font-bold text-slate-900 text-sm" x-text="selectedQuote?.company_name"></p>
                        <p class="text-slate-700 font-semibold"><i class="fa-solid fa-user text-slate-400 mr-1 text-[10px]"></i> <span x-text="selectedQuote?.full_name"></span></p>
                        <p class="text-slate-600"><i class="fa-solid fa-envelope text-slate-400 mr-1 text-[10px]"></i> <span x-text="selectedQuote?.email"></span></p>
                        <p class="text-slate-600"><i class="fa-solid fa-phone text-slate-400 mr-1 text-[10px]"></i> <span x-text="selectedQuote?.phone"></span></p>
                    </div>

                    <div class="space-y-1.5">
                        <span class="text-[10px] uppercase font-bold text-[#e07a5f] tracking-wider block"><i class="fa-solid fa-earth-americas mr-1"></i> Shipment Destination</span>
                        <p class="font-bold text-slate-900 text-sm"><i class="fa-solid fa-location-dot text-[#e07a5f] mr-1"></i> <span x-text="selectedQuote?.destination_country"></span></p>
                        <p class="text-slate-700 font-semibold" x-text="'Target Port: ' + (selectedQuote?.destination_port || 'Port Qasim / Karachi')"></p>
                        <p class="text-slate-600" x-text="'Target Date: ' + (selectedQuote?.target_date || 'Standard Export Schedule')"></p>
                        <div class="pt-1">
                            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold border"
                                  :class="selectedQuote?.status === 'completed' ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : (selectedQuote?.status === 'processing' ? 'bg-blue-50 text-blue-700 border-blue-200' : 'bg-amber-50 text-amber-700 border-amber-200')"
                                  x-text="'Status: ' + (selectedQuote?.status ? selectedQuote.status.charAt(0).toUpperCase() + selectedQuote.status.slice(1) : 'Pending')">
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Cart Line Items Table -->
                <div class="space-y-2">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 block">Ordered Salt Line Items</span>
                    <div class="border border-slate-200 rounded-xl overflow-hidden bg-white">
                        <table class="w-full text-left text-xs border-collapse">
                            <thead class="bg-slate-900 text-white font-serif uppercase tracking-wider text-[10px]">
                                <tr>
                                    <th class="p-3 px-4">Product Name & Grade</th>
                                    <th class="p-3 px-4">Category</th>
                                    <th class="p-3 px-4 text-right">Volume (Metric Tons)</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <template x-for="item in selectedQuote?.items" :key="item.name">
                                    <tr class="hover:bg-slate-50/80">
                                        <td class="p-3 px-4 font-bold text-slate-900" x-text="item.name"></td>
                                        <td class="p-3 px-4 text-slate-500 uppercase text-[10px] font-semibold" x-text="item.category || 'Salt Export'"></td>
                                        <td class="p-3 px-4 text-right font-mono font-bold text-[#e07a5f]" x-text="item.quantity + ' Metric Tons'"></td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Notes / Packaging Instructions -->
                <div x-show="selectedQuote?.notes" class="bg-amber-50/80 border border-amber-200/80 p-3.5 rounded-xl space-y-1">
                    <span class="font-bold text-amber-900 uppercase text-[10px] block"><i class="fa-solid fa-clipboard-list mr-1"></i> Packaging Instructions & Buyer Notes:</span>
                    <p class="text-amber-900/90 font-light leading-relaxed" x-text="selectedQuote?.notes"></p>
                </div>
            </div>

            <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                <button @click="printInvoice(selectedQuote)" class="px-5 py-2.5 bg-[#e07a5f] hover:bg-[#d46a4f] text-white rounded-xl text-xs font-bold uppercase tracking-wider flex items-center gap-2 cursor-pointer shadow-md transition-all">
                    <i class="fa-solid fa-print text-sm"></i>
                    <span>Print Proforma Invoice</span>
                </button>
                <button @click="showQuoteModal = false" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold rounded-xl text-xs cursor-pointer">Close</button>
            </div>
        </div>
    </div>
    --}}

    <!-- VIEW INQUIRY DETAILS MODAL -->
    <div x-show="showInquiryModal" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click.self="showInquiryModal = false" 
         @keydown.escape.window="showInquiryModal = false"
         class="fixed inset-0 z-50 overflow-y-auto bg-slate-900/80 backdrop-blur-sm p-4 sm:p-6 flex justify-center items-start sm:items-center" 
         x-cloak>
        <div class="bg-white border border-slate-200/90 rounded-2xl max-w-2xl w-full shadow-2xl relative flex flex-col my-auto overflow-hidden" 
             style="max-height: min(88vh, calc(100vh - 2.5rem));"
             @click.stop>
            
            <!-- Sticky Modal Header -->
            <div class="px-6 sm:px-8 py-5 border-b border-slate-100 flex items-center justify-between shrink-0 bg-white sticky top-0 z-20">
                <div class="flex items-center gap-3.5">
                    <div class="w-11 h-11 rounded-2xl bg-orange-50 border border-orange-200/60 flex items-center justify-center text-[#e07a5f] shrink-0 shadow-xs">
                        <i class="fa-solid fa-envelope-open-text text-lg"></i>
                    </div>
                    <div>
                        <div class="flex items-center gap-2.5 flex-wrap">
                            <h3 class="font-serif font-bold text-base sm:text-lg text-slate-900 leading-tight">Customer Inquiry Details</h3>
                            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold border tracking-wider uppercase"
                                  :class="selectedInquiry?.status === 'replied' ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : (selectedInquiry?.status === 'read' ? 'bg-blue-50 text-blue-700 border-blue-200' : 'bg-amber-50 text-amber-700 border-amber-200')"
                                  x-text="selectedInquiry?.status ? selectedInquiry.status.toUpperCase() : 'NEW'">
                            </span>
                        </div>
                        <p class="text-xs text-slate-400 mt-1 flex items-center gap-1.5">
                            <i class="fa-regular fa-clock text-[10px]"></i>
                            <span x-text="'Received on ' + (selectedInquiry?.created_at ? new Date(selectedInquiry.created_at).toLocaleDateString('en-US', { year: 'numeric', month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit' }) : 'Recent')"></span>
                        </p>
                    </div>
                </div>
                <button @click="showInquiryModal = false" class="text-slate-400 hover:text-slate-800 hover:bg-slate-100 p-2.5 rounded-xl transition-all cursor-pointer" title="Close">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <!-- Scrollable Modal Body with Generous Padding -->
            <div class="p-6 sm:p-8 space-y-6 overflow-y-auto flex-1 min-h-0 text-xs custom-modal-scroll">
                
                <!-- 1. Sender / Buyer Information Card -->
                <div class="bg-slate-50/90 p-5 sm:p-6 rounded-2xl border border-slate-200/80 space-y-4">
                    <div class="border-b border-slate-200/60 pb-3 flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] flex items-center gap-2">
                            <i class="fa-solid fa-id-card"></i> Contact & Buyer Information
                        </span>
                        <span class="text-[10px] text-slate-400 font-medium">Buyer Details</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-slate-700">
                        <div>
                            <span class="text-slate-400 block text-[10px] uppercase font-bold tracking-wide">Client / Buyer Name</span>
                            <span class="font-bold text-slate-900 text-sm block mt-0.5" x-text="selectedInquiry?.name"></span>
                        </div>
                        <div>
                            <span class="text-slate-400 block text-[10px] uppercase font-bold tracking-wide">Email Address</span>
                            <a :href="'mailto:' + selectedInquiry?.email" class="font-semibold text-[#e07a5f] hover:underline block truncate mt-0.5" x-text="selectedInquiry?.email"></a>
                        </div>
                        <template x-if="selectedInquiry?.company">
                            <div>
                                <span class="text-slate-400 block text-[10px] uppercase font-bold tracking-wide">Company / Business</span>
                                <span class="font-semibold text-slate-800 block mt-0.5" x-text="selectedInquiry?.company"></span>
                            </div>
                        </template>
                        <template x-if="selectedInquiry?.phone">
                            <div>
                                <span class="text-slate-400 block text-[10px] uppercase font-bold tracking-wide">Phone / WhatsApp</span>
                                <a :href="'https://wa.me/' + (selectedInquiry?.phone ? selectedInquiry.phone.replace(/[^0-9]/g, '') : '')" target="_blank" class="font-semibold text-emerald-600 hover:underline inline-flex items-center gap-1.5 mt-0.5">
                                    <i class="fa-brands fa-whatsapp text-sm"></i>
                                    <span x-text="selectedInquiry?.phone"></span>
                                </a>
                            </div>
                        </template>
                        <template x-if="selectedInquiry?.country">
                            <div>
                                <span class="text-slate-400 block text-[10px] uppercase font-bold tracking-wide">Destination Country</span>
                                <span class="font-semibold text-slate-800 inline-flex items-center gap-1.5 mt-0.5">
                                    <i class="fa-solid fa-globe text-[#e07a5f] text-xs"></i>
                                    <span x-text="selectedInquiry?.country"></span>
                                </span>
                            </div>
                        </template>
                        <template x-if="selectedInquiry?.destination_port">
                            <div>
                                <span class="text-slate-400 block text-[10px] uppercase font-bold tracking-wide">Target Discharge Port</span>
                                <span class="font-semibold text-slate-800 inline-flex items-center gap-1.5 mt-0.5">
                                    <i class="fa-solid fa-anchor text-slate-400 text-xs"></i>
                                    <span x-text="selectedInquiry?.destination_port"></span>
                                </span>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- 2. Export Specifications Card -->
                <template x-if="selectedInquiry?.product || selectedInquiry?.quantity || selectedInquiry?.packaging || selectedInquiry?.private_label || (parseInquiryMessage(selectedInquiry?.message).specs && parseInquiryMessage(selectedInquiry?.message).specs.length > 0)">
                    <div class="bg-amber-50/60 p-5 sm:p-6 rounded-2xl border border-amber-200/80 space-y-4">
                        <div class="border-b border-amber-200/60 pb-3 flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-amber-900 flex items-center gap-2">
                                <i class="fa-solid fa-boxes-stacked text-[#e07a5f]"></i> Export Order Requirements
                            </span>
                            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800 border border-amber-200">
                                Trade Specs
                            </span>
                        </div>

                        <!-- Direct Column Fields -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <template x-if="selectedInquiry?.product">
                                <div>
                                    <span class="text-slate-400 block text-[10px] uppercase font-bold tracking-wide">Required Product</span>
                                    <span class="font-bold text-[#e07a5f] text-sm block mt-0.5" x-text="selectedInquiry?.product"></span>
                                </div>
                            </template>
                            <template x-if="selectedInquiry?.quantity">
                                <div>
                                    <span class="text-slate-400 block text-[10px] uppercase font-bold tracking-wide">Volume / Quantity</span>
                                    <span class="font-semibold text-slate-800 text-sm block mt-0.5" x-text="selectedInquiry?.quantity"></span>
                                </div>
                            </template>
                            <template x-if="selectedInquiry?.packaging">
                                <div class="sm:col-span-2">
                                    <span class="text-slate-400 block text-[10px] uppercase font-bold tracking-wide">Packaging Specification</span>
                                    <span class="font-semibold text-slate-800 text-xs block mt-0.5 bg-white/70 p-2.5 rounded-xl border border-amber-200/50" x-text="selectedInquiry?.packaging"></span>
                                </div>
                            </template>
                            <template x-if="selectedInquiry?.private_label">
                                <div class="sm:col-span-2 bg-white/90 p-3.5 rounded-xl border border-amber-200">
                                    <span class="text-[10px] font-bold text-amber-900 uppercase block tracking-wide">Private Label & Custom Branding</span>
                                    <span class="font-semibold text-slate-800 text-xs block mt-1" x-text="selectedInquiry?.private_label"></span>
                                </div>
                            </template>
                            <template x-if="selectedInquiry?.delivery_timeline">
                                <div class="sm:col-span-2 text-xs text-slate-600 bg-amber-100/50 p-3 rounded-xl border border-amber-200/50">
                                    <span class="font-bold text-amber-900">Delivery Timeline Note: </span>
                                    <span x-text="selectedInquiry?.delivery_timeline"></span>
                                </div>
                            </template>
                        </div>

                    </div>
                </template>

                <!-- 3. Message Content (formatted) -->
                <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden">
                    <div class="px-5 sm:px-6 py-3.5 bg-slate-50 border-b border-slate-200/80 flex items-center gap-2">
                        <i class="fa-solid fa-comment-dots text-[#e07a5f]"></i>
                        <h4 class="text-sm font-bold text-slate-900">Message Content</h4>
                    </div>

                    <div class="p-5 sm:p-6 space-y-5">
                        <!-- Specifications block -->
                        <template x-if="parseInquiryMessage(selectedInquiry?.message).specs.length > 0">
                            <div>
                                <h5 class="text-[11px] font-extrabold uppercase tracking-wider text-[#e07a5f] mb-3">Specifications &amp; Inquiry Details</h5>
                                <dl class="divide-y divide-slate-100 border border-slate-100 rounded-xl overflow-hidden">
                                    <template x-for="item in parseInquiryMessage(selectedInquiry?.message).specs" :key="item.label">
                                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-1 sm:gap-4 px-4 py-2.5 odd:bg-slate-50/60">
                                            <dt class="text-xs font-bold text-slate-900" x-text="item.label"></dt>
                                            <dd class="sm:col-span-2 text-xs text-slate-700 leading-relaxed" x-text="item.val || '—'"></dd>
                                        </div>
                                    </template>
                                </dl>
                            </div>
                        </template>

                        <!-- Buyer's own note -->
                        <div>
                            <h5 class="text-[11px] font-extrabold uppercase tracking-wider text-[#e07a5f] mb-2">Buyer's Note</h5>
                            <template x-if="parseInquiryMessage(selectedInquiry?.message).buyerNote">
                                <p class="text-sm text-slate-800 leading-relaxed whitespace-pre-line bg-slate-50 border-l-4 border-[#e07a5f] rounded-r-xl px-4 py-3"
                                   x-text="parseInquiryMessage(selectedInquiry?.message).buyerNote"></p>
                            </template>
                            <template x-if="!parseInquiryMessage(selectedInquiry?.message).buyerNote">
                                <p class="text-xs italic text-slate-400">No additional note was written by the buyer.</p>
                            </template>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sticky Modal Footer -->
            <div class="px-6 sm:px-8 py-4 border-t border-slate-100 flex items-center justify-between shrink-0 bg-slate-50 sticky bottom-0 z-20 gap-3 flex-wrap">
                <div class="flex items-center gap-2">
                    <span class="text-[10px] font-bold uppercase text-slate-400 hidden sm:inline">Status:</span>
                    <select @change="updateInquiryStatus(selectedInquiry?.id, $event.target.value); if(selectedInquiry) selectedInquiry.status = $event.target.value"
                        class="bg-white border border-slate-300 rounded-xl px-3 py-1.5 text-xs font-semibold text-slate-800 focus:outline-none focus:border-[#e07a5f] cursor-pointer shadow-2xs">
                        <option value="new" :selected="selectedInquiry?.status === 'new'">Mark: New</option>
                        <option value="read" :selected="selectedInquiry?.status === 'read'">Mark: Read</option>
                        <option value="replied" :selected="selectedInquiry?.status === 'replied'">Mark: Replied</option>
                        <option value="archived" :selected="selectedInquiry?.status === 'archived'">Mark: Archived</option>
                    </select>
                </div>

                <div class="flex items-center gap-2">
                    <template x-if="selectedInquiry?.phone">
                        <a :href="'https://wa.me/' + (selectedInquiry?.phone ? selectedInquiry.phone.replace(/[^0-9]/g, '') : '')" target="_blank" class="px-4 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl text-xs flex items-center gap-1.5 transition-all shadow-xs cursor-pointer">
                            <i class="fa-brands fa-whatsapp text-sm"></i>
                            <span>WhatsApp</span>
                        </a>
                    </template>
                    <a :href="'mailto:' + selectedInquiry?.email + '?subject=' + encodeURIComponent('RE: ' + (selectedInquiry?.subject || 'SALTORA Himalayan Pink Salt Export Inquiry'))" class="px-4 py-2.5 bg-[#e07a5f] hover:bg-[#d46a4f] text-white font-bold rounded-xl text-xs flex items-center gap-1.5 transition-all shadow-xs cursor-pointer">
                        <i class="fa-solid fa-reply text-xs"></i>
                        <span>Reply Email</span>
                    </a>
                    <button @click="showInquiryModal = false" class="px-4 py-2.5 bg-slate-200 hover:bg-slate-300 text-slate-700 font-semibold rounded-xl text-xs transition-all cursor-pointer">
                        Close
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- CREATE / EDIT BLOG MODAL -->
    <div x-show="showBlogModal" @click.self="showBlogModal = false" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto cursor-pointer" x-cloak>
        <div class="bg-white border border-slate-200 rounded-2xl max-w-2xl w-full p-6 shadow-2xl relative max-h-[85vh] flex flex-col my-auto cursor-default">
            
            <div class="flex items-center justify-between border-b border-slate-100 pb-3 shrink-0">
                <h3 class="text-lg font-bold font-serif text-slate-900" x-text="isEditBlogMode ? 'Edit Blog Article' : 'Add New Blog Article'"></h3>
                <button @click="showBlogModal = false" class="text-slate-400 hover:text-slate-800 cursor-pointer"><i class="fa-solid fa-xmark text-lg"></i></button>
            </div>

            <form @submit.prevent="saveBlogWithFile($event)" class="space-y-4 text-xs overflow-y-auto custom-modal-scroll py-4 pr-2 flex-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="sm:col-span-2">
                        <label class="block text-slate-700 font-semibold mb-1">Article Title *</label>
                        <input type="text" x-model="blogForm.title" name="title" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Category *</label>
                        <select x-model="blogForm.category" name="category" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] cursor-pointer">
                            <option value="Export Insights">Export Insights</option>
                            <option value="Logistics & Shipping">Logistics & Shipping</option>
                            <option value="Quality & Purity">Quality & Purity</option>
                            <option value="Market Trends">Market Trends</option>
                            <option value="Company News">Company News</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Author Name *</label>
                        <input type="text" x-model="blogForm.author" name="author" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Reading Time (e.g. 5 min read)</label>
                        <input type="text" x-model="blogForm.read_time" name="read_time" placeholder="5 min read" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Custom URL Slug (Optional)</label>
                        <input type="text" x-model="blogForm.slug" name="slug" placeholder="auto-generated-if-empty" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                    </div>

                    <!-- Direct Image Upload from PC Field -->
                    <div class="sm:col-span-2 bg-slate-50 p-3 rounded-xl border border-slate-200/80 space-y-2">
                        <label class="block text-slate-800 font-bold">Featured Image (Upload from PC or URL)</label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div>
                                <span class="text-[10px] text-slate-500 font-semibold uppercase block mb-1">Option 1: Upload from Computer</span>
                                <input type="file" name="image_file" accept="image/*" class="block w-full text-xs text-slate-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-900 file:text-white hover:file:bg-slate-800 cursor-pointer">
                            </div>
                            <div>
                                <span class="text-[10px] text-slate-500 font-semibold uppercase block mb-1">Option 2: Image URL Path</span>
                                <input type="text" x-model="blogForm.image_url" name="image_url" placeholder="/product1.jpg" class="w-full bg-white border border-slate-300 rounded-xl px-3 py-1.5 text-slate-900 focus:outline-none focus:border-[#e07a5f]">
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block text-slate-700 font-semibold mb-1">Short Excerpt / Summary *</label>
                        <textarea x-model="blogForm.excerpt" name="excerpt" rows="2" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]"></textarea>
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block text-slate-700 font-semibold mb-1">Full Article Content (Rich WYSIWYG Editor) *</label>
                        <div class="text-slate-900">
                            <textarea id="blogContentEditor" name="content" x-model="blogForm.content" rows="6" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]"></textarea>
                        </div>
                    </div>

                    <div class="flex items-center gap-6 sm:col-span-2">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" x-model="blogForm.is_featured" name="is_featured" value="1" class="w-4 h-4 rounded border-slate-300 text-[#e07a5f]">
                            <span class="text-slate-800 font-semibold">Featured Article</span>
                        </label>

                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" x-model="blogForm.is_published" name="is_published" value="1" class="w-4 h-4 rounded border-slate-300 text-[#e07a5f]">
                            <span class="text-slate-800 font-semibold">Published Live</span>
                        </label>
                    </div>
                </div>

                <div class="flex justify-end gap-3 pt-4 border-t border-slate-100 shrink-0">
                    <button type="button" @click="showBlogModal = false" class="px-4 py-2 border border-slate-200 rounded-xl text-slate-600 hover:bg-slate-50 cursor-pointer">Cancel</button>
                    <button type="submit" class="px-5 py-2 bg-slate-900 hover:bg-slate-800 text-white font-bold rounded-xl shadow-xs cursor-pointer">Save Article</button>
                </div>
            </form>
        </div>
    </div>

    <!-- PRINTABLE INVOICE TEMPLATE (HIDDEN UNTIL PRINT) -->
    <div id="printableInvoice" class="hidden">
        <div style="max-width: 800px; margin: 0 auto; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; background: #ffffff; color: #0f172a; padding: 24px;">
            
            <!-- OFFICIAL LETTERHEAD HEADER -->
            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #0f172a; padding-bottom: 16px; margin-bottom: 20px;">
                <div style="display: flex; align-items: center; gap: 14px;">
                    <img src="/logo.png" alt="SALTORA Logo" style="height: 48px; width: auto;">
                    <div>
                        <h1 style="font-family: 'Playfair Display', serif; font-size: 24px; font-weight: 700; color: #0f172a; margin: 0; line-height: 1;">SALTORA</h1>
                        <p style="font-size: 10px; font-weight: 700; color: #e07a5f; text-transform: uppercase; letter-spacing: 2px; margin: 4px 0 0 0;">Himalayan Pink Salt Exporter • Pakistan</p>
                        <p style="font-size: 9px; color: #64748b; margin: 2px 0 0 0;">Salt Range Mines Office, Khewra / Port of Karachi • Sales: +92 318 0735748 • saltora1329@gmail.com</p>
                    </div>
                </div>
                <div style="text-align: right;">
                    <h2 style="font-family: 'Playfair Display', serif; font-size: 20px; font-weight: 700; color: #0f172a; margin: 0; text-transform: uppercase;">PROFORMA INVOICE</h2>
                    <p style="font-family: monospace; font-size: 14px; font-weight: 700; color: #e07a5f; margin: 2px 0 0 0;" id="printOrderRef"></p>
                    <p style="font-size: 10px; color: #64748b; margin: 2px 0 0 0;" id="printOrderDate"></p>
                </div>
            </div>

            <!-- BUYER & DESTINATION GRID -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; font-size: 11px; background: #f8fafc; padding: 16px; border-radius: 12px; border: 1px solid #e2e8f0; margin-bottom: 20px;">
                <div>
                    <span style="font-size: 9px; font-weight: 700; color: #e07a5f; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 4px;">BUYER / IMPORTER DETAILS:</span>
                    <p style="font-weight: 700; color: #0f172a; font-size: 13px; margin: 0;" id="printCustomerCompany"></p>
                    <p style="color: #334155; margin: 3px 0 0 0;" id="printCustomerName"></p>
                    <p style="color: #64748b; margin: 2px 0 0 0;" id="printCustomerEmail"></p>
                </div>
                <div>
                    <span style="font-size: 9px; font-weight: 700; color: #e07a5f; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 4px;">SHIPMENT & PORT DESTINATION:</span>
                    <p style="font-weight: 700; color: #0f172a; font-size: 13px; margin: 0;" id="printDestinationPort"></p>
                    <p style="color: #334155; margin: 3px 0 0 0;">Fulfillment Status: <span style="background: #fef3c7; color: #92400e; font-weight: 700; padding: 2px 8px; border-radius: 9999px; font-size: 9px;">Pending Export Review</span></p>
                    <p style="color: #64748b; margin: 2px 0 0 0;">Payment Terms: <span style="font-weight: 600; color: #0f172a;">FOB Karachi — 50% Advance & 50% B/L</span></p>
                </div>
            </div>

            <!-- LINE ITEMS TABLE -->
            <div style="margin-bottom: 20px;">
                <h3 style="font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #64748b; margin: 0 0 8px 0;">Itemized Export Shipment Breakdown:</h3>
                <table style="width: 100%; text-align: left; border-collapse: collapse; font-size: 11px; border: 1px solid #cbd5e1; border-radius: 8px; overflow: hidden;">
                    <thead>
                        <tr style="background: #0f172a; color: #ffffff; text-transform: uppercase; font-size: 10px; letter-spacing: 0.5px;">
                            <th style="padding: 10px 14px; border-right: 1px solid #334155;">Product Name & Grade</th>
                            <th style="padding: 10px 14px; border-right: 1px solid #334155;">Export Category</th>
                            <th style="padding: 10px 14px; text-align: right;">Volume (Metric Tons)</th>
                        </tr>
                    </thead>
                    <tbody id="printItemsList" style="background: #ffffff;"></tbody>
                    <tfoot>
                        <tr style="background: #f8fafc; font-weight: 700; border-top: 2px solid #cbd5e1;">
                            <td colspan="2" style="padding: 10px 14px; color: #0f172a; text-transform: uppercase;">TOTAL ESTIMATED SHIPMENT VOLUME:</td>
                            <td style="padding: 10px 14px; text-align: right; font-family: monospace; font-size: 13px; color: #e07a5f;" id="printTotalTons"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <!-- BUYER NOTES -->
            <div id="printBuyerNotes" class="hidden" style="background: #fffbeb; border: 1px solid #fde68a; padding: 12px; border-radius: 8px; font-size: 10px; color: #78350f; margin-bottom: 20px;">
            </div>

            <!-- SIGNATURE & STAMP FOOTER -->
            <div style="padding-top: 24px; border-top: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: flex-end; font-size: 9px; color: #94a3b8;">
                <div>
                    <p style="font-weight: 700; color: #334155; text-transform: uppercase; margin: 0;">Authorized Signature & Export Desk Stamp</p>
                    <div style="width: 180px; height: 40px; border-bottom: 1px dashed #94a3b8; margin-top: 8px;"></div>
                </div>
                <div style="text-align: right;">
                    <p style="font-weight: 700; color: #334155; margin: 0;">SALTORA EXPORT DESK • PAKISTAN</p>
                    <p style="margin: 2px 0 0 0;">Document Generated automatically • www.saltora.net</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Alpine & Chart.js Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            @php
                // 1. Category Chart Data based on actual product counts per category
                $catLabels = !empty($catProductCounts) ? array_keys($catProductCounts) : ['Active Catalog'];
                $catValues = !empty($catProductCounts) ? array_values($catProductCounts) : [count($products)];
                $palette = ['#e07a5f', '#d4a373', '#3b82f6', '#10b981', '#8b5cf6', '#f59e0b', '#06b6d4', '#64748b'];
                $catColors = [];
                $cI = 0;
                foreach ($catValues as $v) {
                    $catColors[] = $palette[$cI % count($palette)];
                    $cI++;
                }

                // 2. Monthly B2B Inquiries & Direct Messages
                $monthlyQuotes = array_fill(0, 9, 0);
                $monthlyInquiries = array_fill(0, 9, 0);
                foreach ($quotes as $q) {
                    $m = (int)($q->created_at ? $q->created_at->format('n') : 9) - 1;
                    if ($m >= 0 && $m < 9) {
                        $monthlyQuotes[$m]++;
                    }
                }
                foreach ($inquiries as $inq) {
                    $m = (int)($inq->created_at ? $inq->created_at->format('n') : 9) - 1;
                    if ($m >= 0 && $m < 9) {
                        $monthlyInquiries[$m]++;
                    }
                }
            @endphp

            // 1. Monthly B2B Inquiries & Customer Messages Bar + Line Chart
            const ctx1 = document.getElementById('ordersChart')?.getContext('2d');
            if (ctx1) {
                new Chart(ctx1, {
                    type: 'bar',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                        datasets: [
                            {
                                type: 'bar',
                                label: 'Formal Quote Requests (RFQs)',
                                data: @json($monthlyQuotes),
                                backgroundColor: 'rgba(224, 122, 95, 0.85)',
                                hoverBackgroundColor: '#e07a5f',
                                borderRadius: 8,
                                barThickness: 24,
                            },
                            {
                                type: 'line',
                                label: 'Direct Customer Messages',
                                data: @json($monthlyInquiries),
                                borderColor: '#1e293b',
                                backgroundColor: '#1e293b',
                                borderWidth: 3,
                                pointRadius: 4,
                                pointHoverRadius: 6,
                                pointBackgroundColor: '#ffffff',
                                pointBorderWidth: 2,
                                tension: 0.35
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        interaction: { mode: 'index', intersect: false },
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top',
                                align: 'end',
                                labels: { boxWidth: 12, font: { size: 11, family: 'Plus Jakarta Sans', weight: '600' } }
                            },
                            tooltip: {
                                padding: 12,
                                cornerRadius: 10,
                                titleFont: { size: 12, weight: 'bold' },
                                bodyFont: { size: 11 },
                                callbacks: {
                                    label: function(context) {
                                        const count = context.parsed.y;
                                        return ' ' + context.dataset.label + ': ' + count + (count === 1 ? ' Inquiry' : ' Inquiries');
                                    }
                                }
                            }
                        },
                        scales: {
                            x: { grid: { display: false } },
                            y: {
                                beginAtZero: true,
                                grid: { color: '#f1f5f9' },
                                ticks: {
                                    precision: 0,
                                    stepSize: 1
                                },
                                title: { display: true, text: 'Inquiries & Leads', font: { size: 10, weight: 'bold' } }
                            }
                        }
                    }
                });
            }

            // 2. Product Category Distribution Doughnut Chart
            const ctx2 = document.getElementById('categoryChart')?.getContext('2d');
            if (ctx2) {
                new Chart(ctx2, {
                    type: 'doughnut',
                    data: {
                        labels: @json($catLabels),
                        datasets: [{
                            data: @json($catValues),
                            backgroundColor: @json($catColors),
                            borderWidth: 3,
                            borderColor: '#ffffff',
                            hoverOffset: 6
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: { display: false },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        const count = context.parsed;
                                        return ' ' + context.label + ': ' + count + (count === 1 ? ' Product' : ' Products');
                                    }
                                }
                            }
                        },
                        cutout: '72%'
                    }
                });
            }
        });

        let blogEditor = null;

        document.addEventListener('DOMContentLoaded', () => {
            const editorEl = document.querySelector('#blogContentEditor');
            if (editorEl && typeof ClassicEditor !== 'undefined') {
                ClassicEditor
                    .create(editorEl, {
                        toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo']
                    })
                    .then(editor => {
                        blogEditor = editor;
                    })
                    .catch(err => {
                        console.warn('CKEditor init skipped:', err);
                    });
            }
        });

        function adminDashboard() {
            const params = new URLSearchParams(window.location.search);
            let initialTab = params.get('tab') || 'overview';
            if (initialTab === 'quotes' || initialTab === 'orders') initialTab = 'overview';

            return {
                activeTab: initialTab,
                switchTab(tab) {
                    this.activeTab = tab;
                    const url = new URL(window.location.href);
                    const paramVal = (tab === 'orders') ? 'quotes' : tab;
                    if (tab === 'overview') {
                        url.searchParams.delete('tab');
                    } else {
                        url.searchParams.set('tab', paramVal);
                    }
                    window.history.pushState({}, '', url);
                },
                globalSearch: '',
                prodSearchQuery: '',
                prodStatusFilter: 'all',
                prodCategoryFilter: 'all',
                orderSearchQuery: '',
                orderStatusFilter: 'all',
                inquirySearchQuery: '',
                inquiryStatusFilter: 'all',
                blogSearchQuery: '',
                blogStatusFilter: 'all',

                matchBlog(title, author, category, isPublished) {
                    const search = (this.globalSearch || this.blogSearchQuery || '').toLowerCase().trim();
                    if (this.blogStatusFilter === 'published' && !isPublished) return false;
                    if (this.blogStatusFilter === 'draft' && isPublished) return false;
                    if (!search) return true;
                    const text = (title + ' ' + author + ' ' + category).toLowerCase();
                    return text.includes(search);
                },

                showProductModal: false,
                showViewProductModal: false,
                showQuoteModal: false,
                showInquiryModal: false,
                showBlogModal: false,
                isEditMode: false,
                isEditBlogMode: false,
                selectedQuote: null,
                selectedInquiry: null,
                selectedViewProduct: null,
                blogForm: { id: null, title: '', slug: '', category: 'Export Insights', author: 'SALTORA Export Desk', read_time: '5 min read', image_url: '', excerpt: '', content: '', is_published: true, is_featured: false },
                openCreateBlogModal() {
                    this.isEditBlogMode = false;
                    this.blogForm = { id: null, title: '', slug: '', category: 'Export Insights', author: 'SALTORA Export Desk', read_time: '5 min read', image_url: '', excerpt: '', content: '', is_published: true, is_featured: false };
                    if (typeof blogEditor !== 'undefined' && blogEditor) {
                        blogEditor.setData('');
                    }
                    this.showBlogModal = true;
                },
                editBlog(post) {
                    this.isEditBlogMode = true;
                    this.blogForm = { ...post };
                    if (typeof blogEditor !== 'undefined' && blogEditor) {
                        blogEditor.setData(post.content || '');
                    }
                    this.showBlogModal = true;
                },
                async saveBlogWithFile(event) {
                    const url = this.isEditBlogMode ? `/admin/blogs/${this.blogForm.id}` : '/admin/blogs';
                    const formData = new FormData(event.target);
                    if (this.isEditBlogMode) {
                        formData.append('_method', 'PUT');
                    }

                    if (typeof blogEditor !== 'undefined' && blogEditor) {
                        formData.set('content', blogEditor.getData());
                    }

                    try {
                        const response = await fetch(url, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                'Accept': 'application/json'
                            },
                            body: formData
                        });

                        const data = await response.json();
                        if (data.success) {
                            Swal.fire({ icon: 'success', title: 'Saved!', text: data.message, background: '#ffffff', color: '#1e293b', iconColor: '#e07a5f' })
                                .then(() => window.location.reload());
                        } else {
                            Swal.fire({ icon: 'error', title: 'Error', text: data.message || 'Validation failed.', background: '#ffffff', color: '#1e293b' });
                        }
                    } catch (e) {
                        Swal.fire({ icon: 'error', title: 'System Error', text: 'Operation failed.', background: '#ffffff', color: '#1e293b' });
                    }
                },
                async toggleBlogStatus(id) {
                    try {
                        const res = await fetch(`/admin/blogs/${id}/toggle`, {
                            method: 'POST',
                            headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'), 'Accept': 'application/json' }
                        });
                        const data = await res.json();
                        if (data.success) {
                            Swal.fire({ icon: 'success', title: 'Updated!', text: data.message, timer: 1200, showConfirmButton: false, background: '#ffffff', color: '#1e293b' }).then(() => window.location.reload());
                        }
                    } catch(e) {}
                },
                async deleteBlog(id, title) {
                    const confirm = await Swal.fire({
                        title: 'Delete Article?',
                        text: `Are you sure you want to delete "${title}"?`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, Delete',
                        cancelButtonText: 'Cancel',
                        background: '#ffffff',
                        color: '#1e293b',
                        confirmButtonColor: '#ef4444'
                    });

                    if (confirm.isConfirmed) {
                        try {
                            const res = await fetch(`/admin/blogs/${id}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                    'Accept': 'application/json'
                                }
                            });
                            const data = await res.json();
                            if (data.success) {
                                Swal.fire({ icon: 'success', title: 'Deleted', text: data.message, background: '#ffffff', color: '#1e293b' })
                                    .then(() => window.location.reload());
                            }
                        } catch(e) {}
                    }
                },

                matchProduct(name, category, isActive, desc) {
                    const search = (this.globalSearch || this.prodSearchQuery || '').toLowerCase().trim();
                    if (this.prodStatusFilter === 'active' && !isActive) return false;
                    if (this.prodStatusFilter === 'inactive' && isActive) return false;
                    if (this.prodCategoryFilter !== 'all' && String(category).trim() !== String(this.prodCategoryFilter).trim()) return false;
                    if (!search) return true;
                    const text = (name + ' ' + category + ' ' + (desc || '')).toLowerCase();
                    return text.includes(search);
                },

                matchOrder(quoteNumber, companyName, fullName, email, country, port, status) {
                    const search = (this.globalSearch || this.orderSearchQuery || '').toLowerCase().trim();
                    if (this.orderStatusFilter !== 'all' && String(status).trim() !== String(this.orderStatusFilter).trim()) return false;
                    if (!search) return true;
                    const text = (quoteNumber + ' ' + companyName + ' ' + fullName + ' ' + email + ' ' + country + ' ' + (port || '')).toLowerCase();
                    return text.includes(search);
                },

                matchInquiry(name, email, subject, message, status) {
                    const search = (this.globalSearch || this.inquirySearchQuery || '').toLowerCase().trim();
                    if (this.inquiryStatusFilter !== 'all' && String(status).trim() !== String(this.inquiryStatusFilter).trim()) return false;
                    if (!search) return true;
                    const text = (name + ' ' + email + ' ' + (subject || '') + ' ' + message).toLowerCase();
                    return text.includes(search);
                },
                showProductModal: false,
                showViewProductModal: false,
                showQuoteModal: false,
                showInquiryModal: false,
                isEditMode: false,
                selectedQuote: null,
                selectedInquiry: null,
                selectedViewProduct: null,
                customPriceUnit: false,
                customGrainSize: false,
                customPackagingType: false,
                categoriesMap: {
                    @foreach($categories as $c)
                    '{{ $c->id }}': [
                        @foreach($c->allSubcategories as $sub)
                        { id: '{{ $sub->id }}', name: '{{ addslashes($sub->name) }}' },
                        @endforeach
                    ],
                    @endforeach
                },
                populateSubcategories(catId, selectedSubId = '') {
                    const subSelect = document.getElementById('dashModalSubcatSelect');
                    if (!subSelect) return;
                    subSelect.innerHTML = '<option value="">' + (catId ? 'Select Subcategory *' : 'Select Category First...') + '</option>';
                    if (!catId || !this.categoriesMap[catId]) {
                        this.productForm.subcategory_id = '';
                        return;
                    }
                    this.categoriesMap[catId].forEach(sub => {
                        const opt = document.createElement('option');
                        opt.value = sub.id;
                        opt.textContent = sub.name;
                        if (selectedSubId && String(sub.id) === String(selectedSubId)) {
                            opt.selected = true;
                        }
                        subSelect.appendChild(opt);
                    });
                    this.productForm.subcategory_id = selectedSubId ? String(selectedSubId) : (subSelect.value || '');
                },
                handleCatChange(catId) {
                    this.productForm.category_id = catId;
                    this.populateSubcategories(catId, '');
                },
                productForm: { id: null, name: '', category_id: '', subcategory_id: '', category: '', price: null, price_unit: '', grain_size: '', packaging_type: '', package_weight: '', moq: '', mesh_size: '', purity: '', grade: '', packaging: '', image_url: '', short_desc: '', full_desc: '', badge: '', is_featured: false, is_active: true },
                openCreateProductModal() {
                    this.isEditMode = false;
                    this.customPriceUnit = false;
                    this.customGrainSize = false;
                    this.customPackagingType = false;
                    this.productForm = { id: null, name: '', category_id: '', subcategory_id: '', category: '', price: null, price_unit: '', grain_size: '', packaging_type: '', package_weight: '', moq: '', mesh_size: '', purity: '', grade: '', packaging: '', image_url: '', short_desc: '', full_desc: '', badge: '', is_featured: false, is_active: true };
                    this.showProductModal = true;
                    this.$nextTick(() => {
                        this.populateSubcategories('', '');
                    });
                },
                viewProductDetails(prod) {
                    this.selectedViewProduct = prod;
                    this.showViewProductModal = true;
                },
                editProduct(prod) {
                    this.isEditMode = true;
                    const catId = prod.category_id || (prod.category_ref ? prod.category_ref.id : (prod.categoryRef ? prod.categoryRef.id : ''));
                    const subId = prod.subcategory_id || (prod.subcategory_ref ? prod.subcategory_ref.id : (prod.subcategoryRef ? prod.subcategoryRef.id : ''));
                    this.productForm = {
                        ...prod,
                        category_id: catId ? String(catId) : '',
                        subcategory_id: subId ? String(subId) : '',
                        category: prod.categoryRef ? prod.categoryRef.name : (prod.category || '')
                    };
                    const standardUnits = ['', 'per kg', 'per piece', 'per 25kg bag', 'per 50kg bag', 'per metric ton', 'per pouch', 'per jar', 'per bottle', 'per set', 'per slab', 'per carton', 'per pallet'];
                    this.customPriceUnit = !!prod.price_unit && !standardUnits.includes(prod.price_unit);

                    const standardGrains = ['', 'Fine Salt (0.3 - 0.8 mm)', 'Extra Fine (0.1 - 0.3 mm)', 'Medium Salt (0.8 - 2 mm)', 'Coarse Salt (2 - 5 mm)', 'Crystal Salt (5 - 8 mm)', 'Natural Rock Lump Salt', 'Not Applicable (Crafted Lamp / Tile)'];
                    this.customGrainSize = !!prod.grain_size && !standardGrains.includes(prod.grain_size);

                    const standardPackaging = ['', 'Zip Pouch', 'PET Jar', 'Glass Jar', 'Grinder Bottle', 'Shaker Bottle', 'Food Grade PP Bag', '50kg Heavy-Duty Export Bag', '1-Ton Jumbo Bag (FIBC)', 'Single Piece / Wooden Base', 'Metal Wire Basket', 'Animal Salt Lick with Hanging Rope', 'Salt Lamp Set', 'Carton Box / Pallet'];
                    this.customPackagingType = !!prod.packaging_type && !standardPackaging.includes(prod.packaging_type);

                    this.showProductModal = true;
                    this.$nextTick(() => {
                        this.populateSubcategories(this.productForm.category_id, this.productForm.subcategory_id);
                    });
                },
                async saveProductWithFile(event) {
                    const url = this.isEditMode ? `/admin/products/${this.productForm.id}` : '/admin/products';
                    const formData = new FormData(event.target);
                    if (this.isEditMode) {
                        formData.append('_method', 'PUT');
                    }

                    try {
                        const response = await fetch(url, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                'Accept': 'application/json'
                            },
                            body: formData
                        });

                        const data = await response.json();
                        if (data.success) {
                            Swal.fire({ icon: 'success', title: 'Saved!', text: data.message, background: '#ffffff', color: '#1e293b', iconColor: '#e07a5f' })
                                .then(() => window.location.reload());
                        } else {
                            Swal.fire({ icon: 'error', title: 'Error', text: data.message || 'Validation failed.', background: '#ffffff', color: '#1e293b' });
                        }
                    } catch (e) {
                        Swal.fire({ icon: 'error', title: 'System Error', text: 'Operation failed.', background: '#ffffff', color: '#1e293b' });
                    }
                },
                printInvoice(order) {
                    if (!order) return;
                    document.getElementById('printOrderRef').innerText = 'REF #: ' + order.quote_number;
                    const dateObj = new Date(order.created_at);
                    document.getElementById('printOrderDate').innerText = 'Date: ' + (isNaN(dateObj) ? order.created_at : dateObj.toLocaleDateString('en-US', { year: 'numeric', month: 'short', day: 'numeric' }));
                    document.getElementById('printCustomerCompany').innerText = order.company_name;
                    document.getElementById('printCustomerName').innerText = 'Contact: ' + order.full_name + (order.phone ? ' | Phone: ' + order.phone : '');
                    document.getElementById('printCustomerEmail').innerText = 'Email: ' + order.email;
                    document.getElementById('printDestinationPort').innerText = order.destination_country + ' (' + (order.destination_port || 'Port Qasim / Karachi') + ')';
                    
                    let itemsHtml = '';
                    let totalTons = 0;
                    (order.items || []).forEach(item => {
                        const qty = parseInt(item.quantity || 20);
                        itemsHtml += `
                            <tr style="border-bottom: 1px solid #e2e8f0;">
                                <td style="padding: 10px 14px; font-weight: 700; color: #0f172a; border-right: 1px solid #e2e8f0;">${item.name}</td>
                                <td style="padding: 10px 14px; color: #64748b; text-transform: uppercase; font-size: 9px; font-weight: 600; border-right: 1px solid #e2e8f0;">${item.category || 'Salt Export'}</td>
                                <td style="padding: 10px 14px; text-align: right; font-family: monospace; font-weight: 700; color: #e07a5f;">${qty.toLocaleString()} Metric Tons</td>
                            </tr>
                        `;
                        totalTons += qty;
                    });
                    document.getElementById('printItemsList').innerHTML = itemsHtml;
                    document.getElementById('printTotalTons').innerText = totalTons.toLocaleString() + ' Metric Tons';

                    const printNotesEle = document.getElementById('printBuyerNotes');
                    if (printNotesEle) {
                        if (order.notes) {
                            printNotesEle.innerHTML = `<strong style="text-transform: uppercase;">Packaging Instructions / Buyer Notes:</strong> ${order.notes}`;
                            printNotesEle.classList.remove('hidden');
                        } else {
                            printNotesEle.classList.add('hidden');
                        }
                    }

                    const printContents = document.getElementById('printableInvoice').innerHTML;
                    const printWindow = window.open('', '', 'height=800,width=900');
                    printWindow.document.write('<!DOCTYPE html><html><head><title>SALTORA Proforma Invoice - ' + order.quote_number + '</title>');
                    printWindow.document.write('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">');
                    printWindow.document.write('<style>@page { size: A4 portrait; margin: 8mm 10mm; } body { font-family: system-ui, -apple-system, sans-serif; background: #ffffff; color: #0f172a; padding: 10px; margin: 0; } </style>');
                    printWindow.document.write('</head><body class="bg-white">');
                    printWindow.document.write(printContents);
                    printWindow.document.write('</body></html>');
                    printWindow.document.close();
                    setTimeout(() => {
                        printWindow.focus();
                        printWindow.print();
                    }, 500);
                },
                async toggleStatus(id) {
                    try {
                        const res = await fetch(`/admin/products/${id}/toggle`, {
                            method: 'POST',
                            headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'), 'Accept': 'application/json' }
                        });
                        const data = await res.json();
                        if (data.success) {
                            Swal.fire({ icon: 'success', title: 'Status Updated', text: data.message, timer: 1200, showConfirmButton: false, background: '#ffffff', color: '#1e293b' }).then(() => window.location.reload());
                        }
                    } catch(e) {}
                },
                async deleteProduct(id, name) {
                    const confirm = await Swal.fire({
                        title: 'Delete Product?', text: `Are you sure you want to delete "${name}"?`, icon: 'warning', showCancelButton: true, confirmButtonText: 'Yes, Delete', cancelButtonText: 'Cancel', background: '#ffffff', color: '#1e293b', confirmButtonColor: '#ef4444'
                    });

                    if (confirm.isConfirmed) {
                        try {
                            const res = await fetch(`/admin/products/${id}`, { method: 'DELETE', headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'), 'Accept': 'application/json' } });
                            const data = await res.json();
                            if (data.success) {
                                Swal.fire({ icon: 'success', title: 'Deleted', text: data.message, background: '#ffffff', color: '#1e293b' }).then(() => window.location.reload());
                            }
                        } catch(e) {}
                    }
                },
                async updateQuoteStatus(id, status) {
                    try {
                        const res = await fetch(`/admin/quotes/${id}/status`, {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'), 'Accept': 'application/json' },
                            body: JSON.stringify({ status })
                        });
                        const data = await res.json();
                        if (data.success) {
                            Swal.fire({ icon: 'success', title: 'Order Updated', text: data.message, timer: 1200, showConfirmButton: false, background: '#ffffff', color: '#1e293b' });
                        }
                    } catch(e) {}
                },
                async deleteQuote(id, number) {
                    const confirm = await Swal.fire({
                        title: 'Delete Bulk Order?',
                        text: `Are you sure you want to delete order "${number}"?`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, Delete',
                        cancelButtonText: 'Cancel',
                        background: '#ffffff',
                        color: '#1e293b',
                        confirmButtonColor: '#ef4444'
                    });

                    if (confirm.isConfirmed) {
                        try {
                            const res = await fetch(`/admin/quotes/${id}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                    'Accept': 'application/json'
                                }
                            });
                            const data = await res.json();
                            if (data.success) {
                                Swal.fire({ icon: 'success', title: 'Deleted', text: data.message, background: '#ffffff', color: '#1e293b' })
                                    .then(() => window.location.reload());
                            }
                        } catch(e) {}
                    }
                },
                async updateInquiryStatus(id, status) {
                    try {
                        const res = await fetch(`/admin/inquiries/${id}/status`, {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'), 'Accept': 'application/json' },
                            body: JSON.stringify({ status })
                        });
                        const data = await res.json();
                        if (data.success) {
                            Swal.fire({ icon: 'success', title: 'Message Updated', text: data.message, timer: 1200, showConfirmButton: false, background: '#ffffff', color: '#1e293b' });
                        }
                    } catch(e) {}
                },
                async deleteInquiry(id, name) {
                    const confirm = await Swal.fire({
                        title: 'Delete Message?',
                        text: `Are you sure you want to delete message from "${name}"?`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, Delete',
                        cancelButtonText: 'Cancel',
                        background: '#ffffff',
                        color: '#1e293b',
                        confirmButtonColor: '#ef4444'
                    });

                    if (confirm.isConfirmed) {
                        try {
                            const res = await fetch(`/admin/inquiries/${id}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                    'Accept': 'application/json'
                                }
                            });
                            const data = await res.json();
                            if (data.success) {
                                Swal.fire({ icon: 'success', title: 'Deleted', text: data.message, background: '#ffffff', color: '#1e293b' })
                                    .then(() => window.location.reload());
                            }
                        } catch(e) {}
                    }
                },
                viewQuoteDetails(quote) {
                    this.selectedQuote = quote;
                    this.showQuoteModal = true;
                },
                viewInquiry(inq) {
                    this.selectedInquiry = inq;
                    this.showInquiryModal = true;
                },
                viewInquiryDetails(inq) {
                    this.viewInquiry(inq);
                },
                parseInquiryMessage(msg) {
                    const result = { specs: [], buyerNote: '' };
                    if (!msg) return result;
                    const text = String(msg);
                    if (!text.includes('--- SPECIFICATIONS')) {
                        result.buyerNote = text.trim();
                        return result;
                    }
                    const parts = text.split(/-{10,}/);
                    const specBlock = parts[0] || '';
                    result.buyerNote = parts.slice(1).join('').trim();
                    specBlock.split('\n').forEach(line => {
                        const l = line.trim();
                        if (!l || l.startsWith('---')) return;
                        const idx = l.indexOf(':');
                        if (idx > 0) {
                            result.specs.push({ label: l.slice(0, idx).trim(), val: l.slice(idx + 1).trim() });
                        }
                    });
                    return result;
                }
            };
        }
    </script>
</body>
</html>
