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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
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
                <a href="{{ route('admin.categories.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-layer-group text-sm"></i>
                        <span>Categories</span>
                    </div>
                </a>

                <!-- 3. Subcategories -->
                <a href="{{ route('admin.subcategories.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all">
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

                <!-- 5. Bulk Orders -->
                <button @click="switchTab('orders')" 
                    :class="activeTab === 'orders' ? 'bg-[#e07a5f]/10 text-[#e07a5f] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'"
                    class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl transition-all text-left cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-bag-shopping text-sm"></i>
                        <span>Bulk Orders</span>
                    </div>
                    @if($stats['pending_quotes'] > 0)
                        <span class="px-2 py-0.5 bg-amber-100 text-amber-800 text-[10px] font-bold rounded-full animate-pulse">{{ $stats['pending_quotes'] }} Pending</span>
                    @else
                        <span class="px-2 py-0.5 bg-slate-100 text-slate-600 text-[10px] font-bold rounded-full">{{ count($quotes) }}</span>
                    @endif
                </button>

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

                <div class="pt-4 border-t border-slate-100">
                    <a href="/sitemap" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-500 hover:bg-slate-50 hover:text-slate-800 transition-all text-left">
                        <i class="fa-solid fa-sitemap text-sm text-emerald-600"></i>
                        <span>HTML Sitemap</span>
                    </a>

                    <a href="{{ route('products') }}" target="_blank" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-500 hover:bg-slate-50 hover:text-slate-800 transition-all text-left">
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
                    <button type="submit" class="p-2 text-slate-400 hover:text-rose-600 transition-colors" title="Logout">
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
                    <input type="text" placeholder="Search products, orders, customers..." class="w-full bg-slate-100/70 border border-slate-200/80 rounded-xl pl-9 pr-4 py-2 text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                </div>
            </div>

            <div class="flex items-center gap-3">
                <button @click="openCreateProductModal()" class="px-3.5 py-2 bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs rounded-xl shadow-xs transition-all flex items-center gap-2 cursor-pointer">
                    <i class="fa-solid fa-plus text-[10px]"></i>
                    <span>Add Product</span>
                </button>
            </div>
        </header>

        <!-- MAIN DASHBOARD CONTENT AREA -->
        <main class="p-4 sm:p-8 space-y-8 max-w-7xl w-full mx-auto">

            <!-- TAB 1: OVERVIEW -->
            <div x-show="activeTab === 'overview'" class="space-y-8">
                <div>
                    <h1 class="text-2xl font-bold font-serif text-slate-900">eCommerce Analytics & Overview</h1>
                    <p class="text-xs text-slate-500 mt-1">Real-time store performance, bulk export order metrics, and catalog inventory.</p>
                </div>

                <!-- Stat Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    <div @click="switchTab('products')" class="bg-white border border-slate-200/80 rounded-2xl p-5 shadow-xs flex items-center justify-between cursor-pointer hover:border-[#e07a5f]/40 transition-all">
                        <div>
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Total Products</span>
                            <h3 class="text-2xl font-bold font-serif text-slate-900 mt-1">{{ $stats['total_products'] }}</h3>
                            <span class="inline-flex items-center gap-1 text-[11px] text-emerald-600 font-semibold mt-1">
                                <i class="fa-solid fa-circle-check text-[9px]"></i> {{ $stats['active_products'] }} Active in Store
                            </span>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-orange-50 border border-orange-100 flex items-center justify-center text-[#e07a5f] text-xl">
                            <i class="fa-solid fa-boxes-stacked"></i>
                        </div>
                    </div>

                    <div @click="switchTab('orders')" class="bg-white border border-slate-200/80 rounded-2xl p-5 shadow-xs flex items-center justify-between cursor-pointer hover:border-amber-300 transition-all">
                        <div>
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Store Orders</span>
                            <h3 class="text-2xl font-bold font-serif text-slate-900 mt-1">{{ $stats['total_quotes'] }}</h3>
                            <span class="inline-flex items-center gap-1 text-[11px] text-amber-600 font-semibold mt-1">
                                <i class="fa-solid fa-clock text-[9px]"></i> {{ $stats['pending_quotes'] }} Pending Processing
                            </span>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-100 flex items-center justify-center text-amber-600 text-xl">
                            <i class="fa-solid fa-bag-shopping"></i>
                        </div>
                    </div>

                    <div @click="switchTab('inquiries')" class="bg-white border border-slate-200/80 rounded-2xl p-5 shadow-xs flex items-center justify-between cursor-pointer hover:border-rose-300 transition-all">
                        <div>
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Customer Messages</span>
                            <h3 class="text-2xl font-bold font-serif text-slate-900 mt-1">{{ $stats['total_inquiries'] }}</h3>
                            <span class="inline-flex items-center gap-1 text-[11px] text-rose-600 font-semibold mt-1">
                                <i class="fa-solid fa-envelope text-[9px]"></i> {{ $stats['unread_inquiries'] }} Unread Messages
                            </span>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-rose-50 border border-rose-100 flex items-center justify-center text-rose-600 text-xl">
                            <i class="fa-solid fa-comments"></i>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200/80 rounded-2xl p-5 shadow-xs flex items-center justify-between">
                        <div>
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Requested Tonnage</span>
                            <h3 class="text-2xl font-bold font-serif text-slate-900 mt-1">1,420 Tons</h3>
                            <span class="inline-flex items-center gap-1 text-[11px] text-emerald-600 font-semibold mt-1">
                                <i class="fa-solid fa-arrow-trend-up text-[9px]"></i> +18% vs last month
                            </span>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 border border-emerald-100 flex items-center justify-center text-emerald-600 text-xl">
                            <i class="fa-solid fa-truck-ramp-box"></i>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h3 class="font-bold text-slate-900 font-serif">Export Order Volume Trend</h3>
                                <p class="text-xs text-slate-400">Monthly total export tonnage (Metric Tons)</p>
                            </div>
                            <span class="px-2.5 py-1 bg-slate-100 text-slate-600 text-[11px] font-semibold rounded-lg">2026 YTD</span>
                        </div>
                        <div class="h-64 relative">
                            <canvas id="ordersChart"></canvas>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-slate-900 font-serif mb-1">Product Category Demand</h3>
                            <p class="text-xs text-slate-400 mb-4">Distribution by salt grade & use</p>
                            <div class="h-52 relative flex items-center justify-center">
                                <canvas id="categoryChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- TAB 2: PRODUCT CATALOG -->
            <div x-show="activeTab === 'products'" class="space-y-6">
                <div class="flex items-center justify-between gap-4 flex-wrap">
                    <div>
                        <h2 class="text-xl font-bold font-serif text-slate-900">Product Catalog</h2>
                        <p class="text-xs text-slate-500">Manage store products, grade specifications, and active status.</p>
                    </div>
                    <button @click="openCreateProductModal()" class="px-4 py-2 bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs rounded-xl shadow-xs transition-all flex items-center gap-2 cursor-pointer">
                        <i class="fa-solid fa-plus text-[10px]"></i> Add Salt Product
                    </button>
                </div>

                <div class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-xs">
                    <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between gap-4 flex-wrap">
                        <h3 class="font-serif text-sm font-bold text-slate-900">Catalog Products</h3>

                        <div class="flex items-center gap-3">
                            <select x-model="prodStatusFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f]">
                                <option value="all">All Statuses</option>
                                <option value="active">Active Only</option>
                                <option value="inactive">Disabled Only</option>
                            </select>

                            <select x-model="prodCategoryFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f]">
                                <option value="all">All Categories</option>
                                <option value="Edible Salt">Edible Salt</option>
                                <option value="Industrial & Chemical">Industrial & Chemical</option>
                                <option value="Animal Feed Salt">Animal Feed Salt</option>
                                <option value="De-Icing Salt">De-Icing Salt</option>
                                <option value="Salt Lamps & Craft">Salt Lamps & Craft</option>
                                <option value="Spa & Wellness">Spa & Wellness</option>
                            </select>

                            <div class="relative w-64">
                                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                                <input type="text" x-model="prodSearchQuery" placeholder="Search product..." class="w-full pl-9 pr-4 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs focus:outline-none focus:border-[#e07a5f]">
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse text-xs">
                            <thead>
                                <tr class="bg-slate-50 text-slate-500 text-[11px] uppercase tracking-wider border-b border-slate-200/80">
                                    <th class="p-4">Product Info</th>
                                    <th class="p-4">Category</th>
                                    <th class="p-4 text-center">Catalog Status</th>
                                    <th class="p-4 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                @forelse($products as $prod)
                                <tr class="hover:bg-slate-50/60 transition-colors" x-show="(prodStatusFilter === 'all' || ('{{ $prod->is_active }}' === '1' && prodStatusFilter === 'active') || ('{{ $prod->is_active }}' === '0' && prodStatusFilter === 'inactive')) && (prodCategoryFilter === 'all' || '{{ addslashes($prod->category) }}' === prodCategoryFilter) && (prodSearchQuery === '' || '{{ strtolower(addslashes($prod->name)) }} {{ strtolower(addslashes($prod->short_desc ?? '')) }}'.includes(prodSearchQuery.toLowerCase()))">
                                    <td class="p-4">
                                        <div class="flex items-center gap-3">
                                            <img src="{{ $prod->image_url }}" alt="{{ $prod->name }}" class="w-12 h-12 rounded-xl object-cover bg-slate-100 border border-slate-200 shrink-0">
                                            <div>
                                                <h4 class="font-bold text-slate-900 text-sm">{{ $prod->name }}</h4>
                                                <p class="text-slate-500 text-[11px] line-clamp-1 max-w-xs">{{ $prod->short_desc }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-4 font-semibold text-slate-700 whitespace-nowrap">{{ $prod->category }}</td>
                                    <td class="p-4 text-center whitespace-nowrap">
                                        <button @click="toggleStatus({{ $prod->id }})" 
                                            class="px-3 py-1 rounded-full text-[10px] font-bold border transition-all inline-flex items-center gap-1.5 cursor-pointer {{ $prod->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200 hover:bg-emerald-100' : 'bg-rose-50 text-rose-700 border-rose-200 hover:bg-rose-100' }}">
                                            <span class="w-1.5 h-1.5 rounded-full {{ $prod->is_active ? 'bg-emerald-600' : 'bg-rose-600' }}"></span>
                                            {{ $prod->is_active ? 'Active' : 'Disabled' }}
                                        </button>
                                    </td>
                                    <td class="p-4 text-right whitespace-nowrap">
                                        <div class="flex items-center justify-end gap-1.5">
                                            <button @click="viewProductDetails({{ json_encode($prod) }})" class="px-2.5 py-1.5 bg-sky-50 hover:bg-sky-100 text-sky-700 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1" title="View Details">
                                                <i class="fa-solid fa-eye text-xs"></i>
                                                <span>View</span>
                                            </button>
                                            <button @click="editProduct({{ json_encode($prod) }})" class="px-2.5 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1" title="Edit Product">
                                                <i class="fa-solid fa-pen-to-square text-xs"></i>
                                                <span>Edit</span>
                                            </button>
                                            <button @click="deleteProduct({{ $prod->id }}, '{{ addslashes($prod->name) }}')" class="px-2.5 py-1.5 bg-rose-50 hover:bg-rose-100 text-rose-600 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1" title="Delete Product">
                                                <i class="fa-solid fa-trash text-xs"></i>
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr><td colspan="4" class="p-8 text-center text-slate-400">No products found.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- TAB 3: BULK STORE ORDERS WITH PRINT INVOICE -->
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
                            <select x-model="orderStatusFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f]">
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
                                <tr class="hover:bg-slate-50/60 transition-colors" x-show="(orderStatusFilter === 'all' || '{{ $quote->status }}' === orderStatusFilter) && (orderSearchQuery === '' || '{{ strtolower(addslashes($quote->quote_number)) }} {{ strtolower(addslashes($quote->company_name)) }} {{ strtolower(addslashes($quote->full_name)) }} {{ strtolower(addslashes($quote->email)) }} {{ strtolower(addslashes($quote->destination_country)) }}'.includes(orderSearchQuery.toLowerCase()))">
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
                                            <button @click="viewQuoteDetails({{ json_encode($quote) }})" class="p-2 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg transition-all text-xs font-semibold cursor-pointer" title="View Order Details">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                            <button @click="printInvoice({{ json_encode($quote) }})" class="p-2 bg-amber-50 hover:bg-amber-100 text-amber-700 border border-amber-200 rounded-lg transition-all text-xs font-semibold cursor-pointer" title="Print Invoice">
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

            <!-- TAB 4: CUSTOMER MESSAGES -->
            <div x-show="activeTab === 'inquiries'" class="space-y-6">
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
                            <select x-model="inquiryStatusFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f]">
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
                                <tr class="hover:bg-slate-50/60 transition-colors" x-show="(inquiryStatusFilter === 'all' || '{{ $inq->status }}' === inquiryStatusFilter) && (inquirySearchQuery === '' || '{{ strtolower(addslashes($inq->name)) }} {{ strtolower(addslashes($inq->email)) }} {{ strtolower(addslashes($inq->subject ?? '')) }} {{ strtolower(addslashes($inq->message)) }}'.includes(inquirySearchQuery.toLowerCase()))">
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
                                            <button @click="viewInquiry({{ json_encode($inq) }})" class="p-2 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg transition-all text-xs font-semibold cursor-pointer" title="Read Message">
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

        </main>
    </div>

    <!-- CREATE / EDIT PRODUCT MODAL (FIXED SCROLLBAR & FILE UPLOAD FROM PC) -->
    <div x-show="showProductModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto" x-cloak>
        <div class="bg-white border border-slate-200 rounded-2xl max-w-2xl w-full p-6 shadow-2xl relative max-h-[85vh] flex flex-col my-auto">
            
            <div class="flex items-center justify-between border-b border-slate-100 pb-3 shrink-0">
                <h3 class="text-lg font-bold font-serif text-slate-900" x-text="isEditMode ? 'Edit Store Product' : 'Add New Salt Product'"></h3>
                <button @click="showProductModal = false" class="text-slate-400 hover:text-slate-800 cursor-pointer"><i class="fa-solid fa-xmark text-lg"></i></button>
            </div>

            <form @submit.prevent="saveProductWithFile($event)" class="space-y-4 text-xs overflow-y-auto custom-modal-scroll py-4 pr-2 flex-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Product Name *</label>
                        <input type="text" x-model="productForm.name" name="name" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Category *</label>
                        <select x-model="productForm.category" name="category" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] cursor-pointer">
                            <option value="Edible Salt">Edible Salt</option>
                            <option value="Industrial & Chemical">Industrial & Chemical</option>
                            <option value="Animal Feed Salt">Animal Feed Salt</option>
                            <option value="De-Icing Salt">De-Icing Salt</option>
                            <option value="Salt Lamps & Craft">Salt Lamps & Craft</option>
                            <option value="Spa & Wellness">Spa & Wellness</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Mesh / Grain Size</label>
                        <input type="text" x-model="productForm.mesh_size" name="mesh_size" placeholder="e.g. 2-5 mm Coarse" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Purity Grade</label>
                        <input type="text" x-model="productForm.purity" name="purity" placeholder="e.g. 98.8% NaCl" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Grade Standard</label>
                        <input type="text" x-model="productForm.grade" name="grade" placeholder="e.g. Food Grade ISO-22000" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Packaging Options</label>
                        <input type="text" x-model="productForm.packaging" name="packaging" placeholder="e.g. 25kg PP bags, 1 Ton Jumbo" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
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
                                <input type="text" x-model="productForm.image_url" name="image_url" placeholder="/product1.jpg" class="w-full bg-white border border-slate-300 rounded-xl px-3 py-1.5 text-slate-900 focus:outline-none focus:border-[#e07a5f]">
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
    <div x-show="showViewProductModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto" x-cloak>
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
                    <img :src="selectedViewProduct?.image_url" :alt="selectedViewProduct?.name" class="w-24 h-24 object-cover rounded-xl border border-slate-200 shadow-xs bg-white">
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

                <div class="grid grid-cols-2 gap-3">
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Mesh / Grain Size</span>
                        <span class="font-bold text-slate-800 text-xs" x-text="selectedViewProduct?.mesh_size || 'N/A'"></span>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Purity Grade</span>
                        <span class="font-bold text-slate-800 text-xs" x-text="selectedViewProduct?.purity || '98.5% NaCl'"></span>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Quality Standard</span>
                        <span class="font-bold text-slate-800 text-xs" x-text="selectedViewProduct?.grade || 'Food Grade ISO-22000'"></span>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Packaging Options</span>
                        <span class="font-bold text-slate-800 text-xs" x-text="selectedViewProduct?.packaging || '25kg PP Bags'"></span>
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

    <!-- VIEW ORDER DETAILS MODAL -->
    <div x-show="showQuoteModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs" x-cloak>
        <div class="bg-white border border-slate-200 rounded-2xl max-w-2xl w-full p-6 shadow-2xl relative">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-4">
                <div>
                    <h3 class="text-lg font-bold font-serif text-slate-900">Order Invoice Details <span class="text-[#e07a5f] font-mono" x-text="selectedQuote?.quote_number"></span></h3>
                    <p class="text-xs text-slate-400" x-text="'Placed on ' + selectedQuote?.created_at"></p>
                </div>
                <div class="flex items-center gap-2">
                    <button @click="printInvoice(selectedQuote)" class="px-3 py-1.5 bg-amber-500 hover:bg-amber-600 text-white rounded-lg text-xs font-semibold flex items-center gap-1.5 cursor-pointer">
                        <i class="fa-solid fa-print"></i> Print Invoice
                    </button>
                    <button @click="showQuoteModal = false" class="text-slate-400 hover:text-slate-800 cursor-pointer p-1"><i class="fa-solid fa-xmark text-lg"></i></button>
                </div>
            </div>

            <div class="space-y-4 text-xs">
                <div class="grid grid-cols-2 gap-4 bg-slate-50 p-4 rounded-xl border border-slate-200/80">
                    <div>
                        <span class="text-slate-400 uppercase tracking-wider text-[10px] font-bold">Buyer / Company</span>
                        <p class="font-bold text-slate-900 text-sm" x-text="selectedQuote?.company_name"></p>
                        <p class="text-slate-700" x-text="selectedQuote?.full_name"></p>
                        <p class="text-slate-500" x-text="selectedQuote?.email"></p>
                        <p class="text-slate-500" x-text="selectedQuote?.phone"></p>
                    </div>

                    <div>
                        <span class="text-slate-400 uppercase tracking-wider text-[10px] font-bold">Shipment Destination</span>
                        <p class="font-bold text-[#e07a5f]" x-text="selectedQuote?.destination_country"></p>
                        <p class="text-slate-700" x-text="'Target Port: ' + (selectedQuote?.destination_port || 'Port of Entry')"></p>
                        <p class="text-slate-500" x-text="'Delivery Timeline: ' + (selectedQuote?.target_date || 'Flexible')"></p>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-slate-800 mb-2">Cart Line Items Ordered:</h4>
                    <div class="bg-slate-50 rounded-xl border border-slate-200 divide-y divide-slate-200/60 max-h-48 overflow-y-auto">
                        <template x-for="item in selectedQuote?.items" :key="item.id">
                            <div class="p-3 flex items-center justify-between">
                                <div>
                                    <span class="font-bold text-slate-900 text-xs" x-text="item.name"></span>
                                    <span class="text-[10px] text-slate-500 block" x-text="item.category"></span>
                                </div>
                                <div class="text-right">
                                    <span class="font-mono text-[#e07a5f] font-bold" x-text="item.quantity + ' Metric Tons'"></span>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <div class="flex justify-end pt-4 border-t border-slate-100 mt-4">
                <button @click="showQuoteModal = false" class="px-5 py-2 bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold rounded-xl text-xs cursor-pointer">Close</button>
            </div>
        </div>
    </div>

    <!-- VIEW INQUIRY DETAILS MODAL -->
    <div x-show="showInquiryModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs" x-cloak>
        <div class="bg-white border border-slate-200 rounded-2xl max-w-xl w-full p-6 shadow-2xl relative">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-4">
                <h3 class="text-lg font-bold font-serif text-slate-900">Customer Message</h3>
                <button @click="showInquiryModal = false" class="text-slate-400 hover:text-slate-800 cursor-pointer"><i class="fa-solid fa-xmark text-lg"></i></button>
            </div>

            <div class="space-y-4 text-xs">
                <div class="bg-slate-50 p-4 rounded-xl border border-slate-200">
                    <p class="text-sm font-bold text-slate-900" x-text="selectedInquiry?.name"></p>
                    <p class="text-slate-600" x-text="selectedInquiry?.email"></p>
                </div>
                <div>
                    <span class="text-slate-400 text-[10px] font-bold uppercase">Message:</span>
                    <div class="bg-slate-50 p-4 rounded-xl border border-slate-200 text-slate-800 whitespace-pre-line mt-1" x-text="selectedInquiry?.message"></div>
                </div>
            </div>

            <div class="flex justify-end pt-4 border-t border-slate-100 mt-4">
                <button @click="showInquiryModal = false" class="px-5 py-2 bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold rounded-xl text-xs cursor-pointer">Close</button>
            </div>
        </div>
    </div>

    <!-- PRINTABLE INVOICE TEMPLATE (HIDDEN UNTIL PRINT) -->
    <div id="printableInvoice" class="hidden">
        <div class="max-w-3xl mx-auto p-8 border border-slate-300 rounded-lg space-y-6">
            <div class="flex items-center justify-between border-b-2 border-slate-900 pb-4">
                <div class="flex items-center gap-3">
                    <img src="/logo.png" alt="SALTORA Logo" class="w-10 h-10 object-contain">
                    <div>
                        <h1 class="text-2xl font-serif font-bold text-slate-900">SALTORA EXPORTER</h1>
                        <p class="text-xs text-slate-500 font-semibold uppercase tracking-widest">Himalayan Pink Salt Mines & Export Desk — Pakistan</p>
                    </div>
                </div>
                <div class="text-right">
                    <h2 class="text-xl font-bold font-mono text-[#e07a5f]">PROFORMA INVOICE</h2>
                    <p class="text-xs font-mono text-slate-600" id="printOrderRef"></p>
                    <p class="text-[10px] text-slate-400" id="printOrderDate"></p>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6 text-xs bg-slate-50 p-4 rounded-lg border border-slate-200">
                <div>
                    <span class="font-bold text-slate-900 uppercase text-[10px] text-[#e07a5f]">EXPORTER DESK:</span>
                    <p class="font-bold text-slate-900 mt-1">SALTORA Himalayan Pink Salt Export Desk</p>
                    <p class="text-slate-600">Port of Karachi / Port Qasim, Pakistan</p>
                    <p class="text-slate-600">Email: saltora1329@gmail.com | Phone: +92 318 0735748</p>
                </div>
                <div>
                    <span class="font-bold text-slate-900 uppercase text-[10px] text-[#e07a5f]">BUYER / IMPORTER DETAILS:</span>
                    <p class="font-bold text-slate-900 mt-1" id="printCustomerCompany"></p>
                    <p class="text-slate-700" id="printCustomerName"></p>
                    <p class="text-slate-600" id="printCustomerEmail"></p>
                    <p class="text-slate-600" id="printDestinationPort"></p>
                </div>
            </div>

            <div>
                <h3 class="font-bold text-xs uppercase tracking-wider text-slate-900 mb-2">Itemized Export Shipment Breakdown:</h3>
                <table class="w-full text-left border-collapse text-xs border border-slate-200">
                    <thead>
                        <tr class="bg-slate-100 text-slate-700 uppercase font-bold text-[10px]">
                            <th class="p-3 border border-slate-200">Product Name</th>
                            <th class="p-3 border border-slate-200">Export Category</th>
                            <th class="p-3 border border-slate-200 text-right">Tonnage Quantity</th>
                        </tr>
                    </thead>
                    <tbody id="printItemsList" class="divide-y divide-slate-200"></tbody>
                </table>
            </div>

            <div class="border-t border-slate-200 pt-4 flex justify-between items-center text-xs">
                <div>
                    <span class="font-bold uppercase text-[10px] text-slate-500 block">STANDARD EXPORT TERMS:</span>
                    <p class="text-slate-600 italic">FOB Karachi — 50% Advance & 50% upon presentation of Bill of Lading (B/L).</p>
                </div>
                <div class="text-right border border-slate-300 p-3 rounded-md bg-slate-50">
                    <span class="text-[10px] uppercase font-bold text-slate-500 block">Total Order Volume:</span>
                    <span class="text-lg font-bold font-mono text-slate-900" id="printTotalTons"></span>
                </div>
            </div>

            <div class="pt-8 border-t border-slate-200 flex justify-between items-end text-[10px] text-slate-400">
                <div>
                    <p class="font-bold text-slate-700">SALTORA EXPORT DESK STAMP & SIGNATURE</p>
                    <div class="w-32 h-12 border-b border-dashed border-slate-400 mt-2"></div>
                </div>
                <p>Generated automatically by SALTORA Admin Console • www.saltora.net</p>
            </div>
        </div>
    </div>

    <!-- Alpine & Chart.js Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const ctx1 = document.getElementById('ordersChart')?.getContext('2d');
            if (ctx1) {
                new Chart(ctx1, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                        datasets: [{
                            label: 'Order Tonnage (Tons)',
                            data: [80, 120, 160, 140, 220, 260, 210, 310, 380],
                            borderColor: '#e07a5f',
                            backgroundColor: 'rgba(224, 122, 95, 0.1)',
                            fill: true,
                            tension: 0.4,
                            borderWidth: 3
                        }]
                    },
                    options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } } }
                });
            }

            const ctx2 = document.getElementById('categoryChart')?.getContext('2d');
            if (ctx2) {
                new Chart(ctx2, {
                    type: 'doughnut',
                    data: {
                        labels: ['Edible Salt', 'Industrial Salt', 'Animal Feed & Lamps'],
                        datasets: [{ data: [45, 30, 25], backgroundColor: ['#e07a5f', '#d4a373', '#1e293b'], borderWidth: 0 }]
                    },
                    options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, cutout: '72%' }
                });
            }
        });

        function adminDashboard() {
            const params = new URLSearchParams(window.location.search);
            let initialTab = params.get('tab') || 'overview';
            if (initialTab === 'quotes') initialTab = 'orders';

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
                prodSearchQuery: '',
                prodStatusFilter: 'all',
                prodCategoryFilter: 'all',
                orderSearchQuery: '',
                orderStatusFilter: 'all',
                inquirySearchQuery: '',
                inquiryStatusFilter: 'all',
                showProductModal: false,
                showViewProductModal: false,
                showQuoteModal: false,
                showInquiryModal: false,
                isEditMode: false,
                selectedQuote: null,
                selectedInquiry: null,
                selectedViewProduct: null,
                productForm: { id: null, name: '', category: 'Edible Salt', mesh_size: '', purity: '98.5% NaCl', grade: 'Export Grade', packaging: '25kg PP Bags', image_url: '/product1.jpg', short_desc: '', full_desc: '', badge: '', is_featured: false, is_active: true },
                openCreateProductModal() {
                    this.isEditMode = false;
                    this.productForm = { id: null, name: '', category: 'Edible Salt', mesh_size: '2-5 mm Coarse', purity: '98.5% NaCl', grade: 'Food Grade ISO-22000', packaging: '25kg Woven Bags', image_url: '/product1.jpg', short_desc: '', full_desc: '', badge: 'Best Seller', is_featured: true, is_active: true };
                    this.showProductModal = true;
                },
                viewProductDetails(prod) {
                    this.selectedViewProduct = prod;
                    this.showViewProductModal = true;
                },
                editProduct(prod) {
                    this.isEditMode = true;
                    this.productForm = { ...prod };
                    this.showProductModal = true;
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
                    document.getElementById('printOrderRef').innerText = 'REF #: ' + order.quote_number;
                    document.getElementById('printOrderDate').innerText = 'Date: ' + new Date(order.created_at).toLocaleDateString();
                    document.getElementById('printCustomerCompany').innerText = order.company_name;
                    document.getElementById('printCustomerName').innerText = 'Contact: ' + order.full_name;
                    document.getElementById('printCustomerEmail').innerText = 'Email: ' + order.email;
                    document.getElementById('printDestinationPort').innerText = 'Destination: ' + order.destination_country + ' (' + (order.destination_port || 'Port Qasim') + ')';
                    
                    let itemsHtml = '';
                    let totalTons = 0;
                    (order.items || []).forEach(item => {
                        itemsHtml += `
                            <tr>
                                <td class="p-3 border border-slate-200 font-bold">${item.name}</td>
                                <td class="p-3 border border-slate-200 text-slate-600">${item.category}</td>
                                <td class="p-3 border border-slate-200 text-right font-mono font-bold">${item.quantity} Metric Tons</td>
                            </tr>
                        `;
                        totalTons += parseInt(item.quantity || 0);
                    });
                    document.getElementById('printItemsList').innerHTML = itemsHtml;
                    document.getElementById('printTotalTons').innerText = totalTons + ' Metric Tons';

                    const printContents = document.getElementById('printableInvoice').innerHTML;
                    const printWindow = window.open('', '', 'height=800,width=900');
                    printWindow.document.write('<html><head><title>SALTORA Proforma Invoice - ' + order.quote_number + '</title>');
                    printWindow.document.write('<script src="https://cdn.tailwindcss.com"><\/script>');
                    printWindow.document.write('</head><body class="bg-white p-8">');
                    printWindow.document.write(printContents);
                    printWindow.document.write('</body></html>');
                    printWindow.document.close();
                    setTimeout(() => {
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
                }
            };
        }
    </script>
</body>
</html>
