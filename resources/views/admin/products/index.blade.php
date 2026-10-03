<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50 text-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Products Management - SALTORA Admin</title>
    <link rel="icon" type="image/png" href="/logo.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons & Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="min-h-full font-sans antialiased bg-slate-50 text-slate-800 flex" x-data="adminProductsPage()">

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
                    <span class="text-[9px] font-bold text-[#e07a5f] uppercase tracking-widest block mt-0.5">Product Catalog</span>
                </div>
            </div>

            <!-- Navigation Links -->
            <nav class="p-4 space-y-1 text-xs font-semibold">
                <!-- 1. Dashboard Overview -->
                <a href="{{ route('admin.dashboard') }}" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <i class="fa-solid fa-chart-pie text-sm"></i>
                    <span>Dashboard Overview</span>
                </a>

                <!-- 2. Categories -->
                <a href="{{ route('admin.categories.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-layer-group text-sm"></i>
                        <span>Categories</span>
                    </div>
                    <span class="px-2 py-0.5 bg-slate-100 text-slate-600 text-[10px] rounded-full font-bold">{{ count($categories) }}</span>
                </a>

                <!-- 3. Subcategories -->
                <a href="{{ route('admin.subcategories.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-tags text-sm"></i>
                        <span>Subcategories</span>
                    </div>
                </a>

                <!-- 4. Product Catalog (Active) -->
                <a href="{{ route('admin.products.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 bg-[#e07a5f]/10 text-[#e07a5f] font-bold rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-cubes text-sm"></i>
                        <span>Product Catalog</span>
                    </div>
                    <span class="px-2 py-0.5 bg-[#e07a5f] text-white text-[10px] rounded-full font-bold">{{ count($products) }}</span>
                </a>

                {{--
                <!-- 5. Orders (COMMENTED OUT) -->
                <a href="{{ route('admin.dashboard') }}?tab=quotes" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 transition-all">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-bag-shopping text-sm"></i>
                        <span>Orders</span>
                    </div>
                </a>
                --}}

                <!-- 6. Customer Messages -->
                <a href="{{ route('admin.dashboard') }}?tab=inquiries" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 transition-all">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope-open-text text-sm"></i>
                        <span>Customer Messages</span>
                    </div>
                </a>

                <div class="pt-4 border-t border-slate-100">
                    <a href="{{ route('products') }}" target="_blank" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-500 hover:bg-slate-50 transition-all mt-1">
                        <i class="fa-solid fa-store text-sm text-[#e07a5f]"></i>
                        <span>View Live Store</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[9px] ml-auto opacity-60"></i>
                    </a>
                </div>
            </nav>
        </div>

        <div class="p-4 border-t border-slate-100 bg-slate-50/50">
            <div class="flex items-center justify-between text-xs">
                <span class="font-bold text-slate-900">{{ Auth::user()->name ?? 'Store Manager' }}</span>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-slate-400 hover:text-rose-600 cursor-pointer"><i class="fa-solid fa-right-from-bracket"></i></button>
                </form>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="flex-1 flex flex-col min-w-0">
        
        <!-- HEADER -->
        <header class="h-16 bg-white border-b border-slate-200/80 px-8 flex items-center justify-between sticky top-0 z-20">
            <h1 class="font-serif font-bold text-lg text-slate-900">Products Sub-Page Management</h1>
            <div class="flex items-center gap-3">
                <button type="button" @click="openCreateProductModal()" class="px-4 py-2 bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs rounded-xl shadow-xs transition-all flex items-center gap-2 cursor-pointer">
                    <i class="fa-solid fa-plus text-[10px]"></i> Add Salt Product
                </button>
            </div>
        </header>

        <main class="p-8 max-w-7xl w-full mx-auto space-y-6">
            
            <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs flex items-center justify-between flex-wrap gap-4">
                <div>
                    <h2 class="text-xl font-bold font-serif text-slate-900">Himalayan Salt Product Catalog</h2>
                    <p class="text-xs text-slate-500">Supports pure bulk export salt, retail packages (pouches/jars), and single crafted items (lamps/tiles) with prices, units & weights.</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="px-3 py-1 bg-orange-100 text-[#e07a5f] font-bold text-xs rounded-full">Total: {{ count($products) }} Products</span>
                </div>
            </div>

            <!-- Products Sub-Page Datatable -->
            <div class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-xs">
                <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between gap-4 flex-wrap">
                    <h3 class="font-serif text-base font-bold text-slate-900">Product List</h3>

                    <div class="flex items-center gap-3 flex-wrap">
                        <select x-model="statusFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f] cursor-pointer">
                            <option value="all">All Statuses</option>
                            <option value="active">Active Only</option>
                            <option value="inactive">Disabled Only</option>
                        </select>

                        <select x-model="categoryFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f] cursor-pointer">
                            <option value="all">All Categories</option>
                            @foreach($categories as $c)
                            <option value="{{ $c->name }}">{{ $c->name }}</option>
                            @endforeach
                        </select>

                        <div class="relative w-64">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                            <input type="text" x-model="searchQuery" placeholder="Search salt, pouch, lamp, price..." class="w-full pl-9 pr-4 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs focus:outline-none focus:border-[#e07a5f]">
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto relative">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="bg-slate-50 text-slate-500 text-[11px] uppercase tracking-wider border-b border-slate-200/80">
                                <th class="py-3.5 px-4 min-w-[200px]">Product Info</th>
                                <th class="py-3.5 px-4 min-w-[130px]">Category & Grade</th>
                                <th class="py-3.5 px-4 min-w-[120px]">Price & Unit</th>
                                <th class="py-3.5 px-4 min-w-[150px]">Grain & Packaging</th>
                                <th class="py-3.5 px-4 text-center min-w-[90px]">Status</th>
                                <th class="py-3.5 px-4 text-right whitespace-nowrap sticky right-0 bg-slate-50 z-20 shadow-[-8px_0_12px_-4px_rgba(0,0,0,0.08)] min-w-[190px]">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($products as $prod)
                            <tr class="hover:bg-slate-50/70 transition-colors group" x-show="matchProduct('{{ addslashes($prod->name) }}', '{{ addslashes($prod->categoryRef->name ?? $prod->category) }}', {{ $prod->is_active ? 'true' : 'false' }}, '{{ addslashes($prod->short_desc ?? '') }}', '{{ addslashes($prod->grain_size ?? $prod->mesh_size ?? '') }}', '{{ addslashes($prod->packaging_type ?? $prod->packaging ?? '') }}')">
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ $prod->image_url }}" alt="{{ $prod->name }}" class="w-11 h-11 rounded-xl object-cover bg-slate-100 border border-slate-200 shrink-0" onError="this.onerror=null;this.src='/product1.jpg';">
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
                                <td class="py-3 px-4">
                                    <span class="font-semibold text-slate-700 text-[11px] block whitespace-nowrap">{{ $prod->grain_size ?? $prod->mesh_size ?? 'Natural Grain' }}</span>
                                    <span class="text-slate-500 text-[10px] block whitespace-nowrap">
                                        {{ $prod->packaging_type ?? $prod->packaging ?? 'Export Packaging' }}
                                        @if($prod->package_weight)
                                        • <strong class="text-slate-700">{{ $prod->package_weight }}</strong>
                                        @endif
                                    </span>
                                </td>
                                <td class="py-3 px-4 text-center whitespace-nowrap">
                                    <button type="button" @click="toggleStatus({{ $prod->id }})"
                                        class="px-2.5 py-1 rounded-full text-[10px] font-bold border transition-all inline-flex items-center gap-1.5 cursor-pointer {{ $prod->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200 hover:bg-emerald-100' : 'bg-rose-50 text-rose-700 border-rose-200 hover:bg-rose-100' }}"
                                        title="Click to toggle status">
                                        <span class="w-1.5 h-1.5 rounded-full {{ $prod->is_active ? 'bg-emerald-600' : 'bg-rose-600' }}"></span>
                                        {{ $prod->is_active ? 'Active' : 'Disabled' }}
                                    </button>
                                </td>
                                <td class="py-3 px-4 text-right whitespace-nowrap sticky right-0 bg-white group-hover:bg-slate-50 z-10 shadow-[-8px_0_12px_-4px_rgba(0,0,0,0.08)]">
                                    <div class="flex items-center justify-end gap-1.5">
                                        <button type="button" @click="viewProductDetails({{ json_encode($prod) }})" class="px-2.5 py-1.5 bg-sky-50 hover:bg-sky-100 text-sky-700 border border-sky-200 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1 shadow-xs" title="View Details Popup">
                                            <i class="fa-solid fa-eye text-xs"></i>
                                            <span>View</span>
                                        </button>
                                        <button type="button" @click="editProduct({{ json_encode($prod) }})" class="px-2.5 py-1.5 bg-amber-50 hover:bg-amber-100 text-amber-700 border border-amber-200 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1 shadow-xs" title="Edit Product Popup">
                                            <i class="fa-solid fa-pen-to-square text-xs"></i>
                                            <span>Edit</span>
                                        </button>
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

        </main>
    </div>

    <!-- VIEW PRODUCT DETAILS MODAL (WITH COMPLETE SPECS FROM IMAGES) -->
    <div x-show="showViewProductModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto" x-cloak>
        <div class="bg-white border border-slate-200 rounded-2xl max-w-xl w-full p-6 shadow-2xl relative max-h-[85vh] flex flex-col my-auto">
            <div class="flex items-center justify-between border-b border-slate-100 pb-3 shrink-0">
                <div class="flex items-center gap-2">
                    <span class="px-2.5 py-1 bg-[#e07a5f]/10 text-[#e07a5f] text-xs font-bold rounded-lg" x-text="selectedViewProduct?.categoryRef?.name || selectedViewProduct?.category"></span>
                    <h3 class="text-lg font-bold font-serif text-slate-900 truncate max-w-sm" x-text="selectedViewProduct?.name"></h3>
                </div>
                <button @click="showViewProductModal = false" class="text-slate-400 hover:text-slate-800 cursor-pointer"><i class="fa-solid fa-xmark text-lg"></i></button>
            </div>

            <div class="space-y-4 text-xs overflow-y-auto custom-modal-scroll py-4 pr-2 flex-1">
                <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-xl border border-slate-200/80">
                    <img :src="selectedViewProduct?.image_url" :alt="selectedViewProduct?.name" class="w-24 h-24 object-cover rounded-xl border border-slate-200 shadow-xs bg-white shrink-0" onError="this.onerror=null;this.src='/product1.jpg';">
                    <div class="space-y-1.5">
                        <h4 class="text-base font-bold text-slate-900" x-text="selectedViewProduct?.name"></h4>
                        <p class="text-slate-600 italic text-[11px]" x-text="selectedViewProduct?.short_desc"></p>
                        <div class="flex items-center gap-2 pt-1 flex-wrap">
                            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold border" 
                                :class="selectedViewProduct?.is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-rose-50 text-rose-700 border-rose-200'">
                                <i class="fa-solid fa-circle text-[6px] mr-1"></i>
                                <span x-text="selectedViewProduct?.is_active ? 'Active in Catalog' : 'Disabled'"></span>
                            </span>
                            <template x-if="selectedViewProduct?.is_featured">
                                <span class="px-2 py-0.5 bg-amber-50 text-amber-800 border border-amber-200 text-[10px] font-bold rounded-full">
                                    <i class="fa-solid fa-star text-[9px] text-amber-500 mr-1"></i> Featured
                                </span>
                            </template>
                            <template x-if="selectedViewProduct?.badge">
                                <span class="px-2 py-0.5 bg-rose-50 text-rose-800 border border-rose-200 text-[10px] font-bold rounded-full" x-text="selectedViewProduct?.badge"></span>
                            </template>
                        </div>
                    </div>
                </div>

                <!-- Price & Unit Callout Banner -->
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

                <!-- Technical Specs Grid -->
                <div class="grid grid-cols-2 gap-3">
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Grain Size / Mesh</span>
                        <span class="font-bold text-slate-800 text-xs" x-text="selectedViewProduct?.grain_size || selectedViewProduct?.mesh_size || 'N/A'"></span>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Packaging Format</span>
                        <span class="font-bold text-slate-800 text-xs" x-text="selectedViewProduct?.packaging_type || selectedViewProduct?.packaging || 'Bulk Packaging'"></span>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Unit Weight / Capacity</span>
                        <span class="font-bold text-slate-800 text-xs" x-text="selectedViewProduct?.package_weight || 'Multiple Options'"></span>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Purity Grade</span>
                        <span class="font-bold text-slate-800 text-xs" x-text="selectedViewProduct?.purity || '98.5%+ NaCl'"></span>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80 col-span-2">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Quality Standard / Certifications</span>
                        <span class="font-bold text-slate-800 text-xs" x-text="selectedViewProduct?.grade || 'Food Grade ISO-22000 / CXS 150:1985 / Halal / Kosher'"></span>
                    </div>
                </div>

                <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200/80 space-y-1">
                    <span class="text-[10px] uppercase font-bold text-slate-400 block">Detailed Description</span>
                    <p class="text-slate-700 leading-relaxed whitespace-pre-line text-xs" x-text="selectedViewProduct?.full_desc || selectedViewProduct?.short_desc || 'No detailed description provided.'"></p>
                </div>
            </div>

            <div class="flex items-center justify-between pt-3 border-t border-slate-100 shrink-0">
                <button type="button" @click="showViewProductModal = false; editProduct(selectedViewProduct)" class="px-4 py-2 bg-amber-50 hover:bg-amber-100 text-amber-700 border border-amber-200 font-bold rounded-xl text-xs flex items-center gap-1.5 cursor-pointer">
                    <i class="fa-solid fa-pen-to-square"></i> Edit Product
                </button>
                <button type="button" @click="showViewProductModal = false" class="px-5 py-2 bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold rounded-xl text-xs cursor-pointer">Close</button>
            </div>
        </div>
    </div>

    <!-- CREATE / EDIT PRODUCT MODAL (POPUP ON SAME PAGE) -->
    <div x-show="showProductModal" @click.self="showProductModal = false" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto cursor-pointer" x-cloak>
        <div class="bg-white border border-slate-200 rounded-2xl max-w-2xl w-full p-6 shadow-2xl relative max-h-[85vh] flex flex-col my-auto cursor-default">
            
            <div class="flex items-center justify-between border-b border-slate-100 pb-3 shrink-0">
                <h3 class="text-lg font-bold font-serif text-slate-900" x-text="isEditMode ? 'Edit Store Product' : 'Add New Salt Product'"></h3>
                <button type="button" @click="showProductModal = false" class="text-slate-400 hover:text-slate-800 cursor-pointer"><i class="fa-solid fa-xmark text-lg"></i></button>
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
                            @foreach($categories as $c)
                            <option value="{{ $c->name }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Base Price ($ USD)</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 font-bold">$</span>
                            <input type="number" step="0.01" min="0" x-model="productForm.price" name="price" placeholder="1.45" class="w-full bg-slate-50 border border-slate-300 rounded-xl pl-7 pr-3 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                        </div>
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Price Unit</label>
                        <select x-model="productForm.price_unit" name="price_unit" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            <option value="per kg">per kg</option>
                            <option value="per piece">per piece (pcs)</option>
                            <option value="per 25kg bag">per 25kg bag</option>
                            <option value="per metric ton">per metric ton</option>
                            <option value="per pouch">per zip pouch</option>
                            <option value="per jar">per jar</option>
                            <option value="per bottle">per grinder bottle</option>
                            <option value="per set">per lamp set</option>
                            <option value="per slab">per cooking slab / tile</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Salt Grain / Mesh Size</label>
                        <select x-model="productForm.grain_size" name="grain_size" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            <option value="Fine Salt (0.3 - 0.8 mm)">Fine Salt (0.3 - 0.8 mm)</option>
                            <option value="Medium Salt (0.8 - 2 mm)">Medium Salt (0.8 - 2 mm)</option>
                            <option value="Coarse Salt (2 - 5 mm)">Coarse Salt (2 - 5 mm)</option>
                            <option value="Crystal Salt (5 - 8 mm)">Crystal Salt (5 - 8 mm)</option>
                            <option value="Natural Rock Lump Salt">Natural Rock Lump Salt</option>
                            <option value="Not Applicable (Crafted Lamp / Tile)">Not Applicable (Crafted Lamp / Tile / Lick)</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-slate-700 font-semibold mb-1">Packaging Type</label>
                        <select x-model="productForm.packaging_type" name="packaging_type" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            <option value="Zip Pouch">Zip Pouch (200g - 1kg)</option>
                            <option value="PET Jar">PET Jar (200g - 500g)</option>
                            <option value="Glass Jar">Glass Jar (250g - 500g)</option>
                            <option value="Grinder Bottle">Grinder Bottle (Ceramic Core)</option>
                            <option value="Shaker Bottle">Shaker Bottle</option>
                            <option value="Food Grade PP Bag">Food-Grade PP Bag (2kg - 25kg)</option>
                            <option value="1-Ton Jumbo Bag (FIBC)">1-Ton Jumbo Bag (FIBC Big Bag)</option>
                            <option value="Single Piece / Wooden Base">Single Piece / Wooden Base (Salt Lamp)</option>
                            <option value="Metal Wire Basket">Metal Wire Basket (Basket Lamp)</option>
                            <option value="Salt Lamp Set">Salt Lamp Set</option>
                            <option value="Carton Box / Pallet">Carton Box / Palletized Slabs</option>
                        </select>
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
                    <button type="submit" class="px-5 py-2 bg-slate-900 hover:bg-slate-800 text-white font-bold rounded-xl shadow-xs cursor-pointer">Save Product</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Alpine Script -->
    <script>
        function adminProductsPage() {
            return {
                searchQuery: '',
                statusFilter: 'all',
                categoryFilter: 'all',
                showViewProductModal: false,
                showProductModal: false,
                isEditMode: false,
                selectedViewProduct: null,
                productForm: { id: null, name: '', category: 'Edible Pink Salt', price: null, price_unit: 'per kg', grain_size: 'Fine Salt (0.3 - 0.8 mm)', packaging_type: 'Zip Pouch', package_weight: '500g', moq: '500 Units', mesh_size: '', purity: '98.8% NaCl', grade: 'Food Grade ISO-22000', packaging: '500g Stand-up Pouch', image_url: '/product1.jpg', short_desc: '', full_desc: '', badge: '', is_featured: false, is_active: true },
                openCreateProductModal() {
                    this.isEditMode = false;
                    this.productForm = { id: null, name: '', category: 'Edible Pink Salt', price: 1.45, price_unit: 'per pouch', grain_size: 'Fine Salt (0.3 - 0.8 mm)', packaging_type: 'Zip Pouch', package_weight: '500g', moq: '1,000 Pouches', mesh_size: '0.3-0.8 mm', purity: '99.1% NaCl', grade: 'Food Grade ISO-22000 / CXS 150:1985 / Halal / Kosher', packaging: '500g Stand-up Zip Pouch', image_url: '/product1.jpg', short_desc: '', full_desc: '', badge: 'Top Seller', is_featured: true, is_active: true };
                    this.showProductModal = true;
                },
                viewProductDetails(prod) {
                    this.selectedViewProduct = prod;
                    this.showViewProductModal = true;
                },
                editProduct(prod) {
                    this.isEditMode = true;
                    this.productForm = { ...prod, category: prod.categoryRef ? prod.categoryRef.name : (prod.category || 'Edible Pink Salt') };
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
                matchProduct(name, category, isActive, desc, grain, packaging) {
                    if (this.statusFilter === 'active' && !isActive) return false;
                    if (this.statusFilter === 'inactive' && isActive) return false;
                    if (this.categoryFilter !== 'all' && String(category).trim().toLowerCase() !== String(this.categoryFilter).trim().toLowerCase()) return false;
                    if (!this.searchQuery) return true;
                    const q = this.searchQuery.toLowerCase().trim();
                    return (name + ' ' + category + ' ' + (desc || '') + ' ' + (grain || '') + ' ' + (packaging || '')).toLowerCase().includes(q);
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
                        title: 'Delete Product?',
                        text: `Are you sure you want to delete "${name}"?`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, Delete Product',
                        cancelButtonText: 'Cancel',
                        background: '#ffffff',
                        color: '#1e293b',
                        confirmButtonColor: '#ef4444'
                    });

                    if (confirm.isConfirmed) {
                        try {
                            const res = await fetch(`/admin/products/${id}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                    'Accept': 'application/json'
                                }
                            });
                            const data = await res.json();
                            if (data.success) {
                                Swal.fire({ icon: 'success', title: 'Deleted!', text: data.message, background: '#ffffff', color: '#1e293b' })
                                    .then(() => window.location.reload());
                            }
                        } catch(e) {}
                    }
                }
            };
        }
    </script>
</body>
</html>
