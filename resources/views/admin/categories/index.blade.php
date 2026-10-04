<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50 text-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Categories Management - SALTORA Admin</title>
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
<body class="min-h-full font-sans antialiased bg-slate-50 text-slate-800 flex" x-data="categoryManager()">

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
                <a href="{{ route('admin.dashboard') }}" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <i class="fa-solid fa-chart-pie text-sm"></i>
                    <span>Dashboard Overview</span>
                </a>

                <!-- 2. Categories -->
                <a href="{{ route('admin.categories.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 bg-[#e07a5f]/10 text-[#e07a5f] font-bold rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-layer-group text-sm"></i>
                        <span>Categories</span>
                    </div>
                    <span class="px-2 py-0.5 bg-[#e07a5f] text-white text-[10px] font-bold rounded-full">{{ count($categories) }}</span>
                </a>

                <!-- 3. Subcategories -->
                <a href="{{ route('admin.subcategories.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-tags text-sm"></i>
                        <span>Subcategories</span>
                    </div>
                </a>

                <!-- 4. Product Catalog -->
                <a href="{{ route('admin.products.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-cubes text-sm"></i>
                        <span>Product Catalog</span>
                    </div>
                </a>

                {{--
                <!-- 5. Orders (COMMENTED OUT) -->
                <a href="{{ route('admin.dashboard') }}?tab=quotes" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-bag-shopping text-sm"></i>
                        <span>Orders</span>
                    </div>
                </a>
                --}}

                <!-- 6. Customer Messages -->
                <a href="{{ route('admin.dashboard') }}?tab=inquiries" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope-open-text text-sm"></i>
                        <span>Customer Messages</span>
                    </div>
                </a>

                <!-- 7. Blogs & Insights -->
                <a href="{{ route('admin.dashboard') }}?tab=blogs" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-newspaper text-sm"></i>
                        <span>Blogs & Insights</span>
                    </div>
                </a>

                <div class="pt-4 border-t border-slate-100">
                    <a href="{{ route('products') }}" target="_blank" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-store text-sm"></i>
                            <span>Live Store</span>
                        </div>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px] text-slate-400"></i>
                    </a>
                </div>
            </nav>
        </div>

        <div class="p-4 border-t border-slate-100">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 text-rose-600 hover:bg-rose-50 rounded-xl transition-all text-xs font-semibold cursor-pointer">
                    <i class="fa-solid fa-arrow-right-from-bracket text-sm"></i>
                    <span>Sign Out</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- MAIN CONTENT AREA -->
    <div class="flex-1 flex flex-col min-w-0">
        <!-- Top Navbar -->
        <header class="h-16 bg-white border-b border-slate-200/80 px-6 flex items-center justify-between sticky top-0 z-20 shadow-xs">
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.dashboard') }}" class="md:hidden text-slate-500 hover:text-slate-800">
                    <i class="fa-solid fa-arrow-left text-lg"></i>
                </a>
                <h1 class="text-xl font-serif font-bold text-slate-900">Category Catalog Management</h1>
            </div>

            <button @click="openAddModal()" class="bg-[#e07a5f] hover:bg-[#d46a4f] text-white px-4 py-2 rounded-xl text-xs font-bold tracking-wider uppercase transition-all shadow-md flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-plus text-sm"></i>
                <span>Add Category</span>
            </button>
        </header>

        <!-- Page Body -->
        <main class="p-6 md:p-8 space-y-6 max-w-7xl">

            <!-- Stats Bar -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-xs flex items-center justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Total Categories</span>
                        <div class="text-2xl font-bold text-slate-900 mt-1">{{ count($categories) }}</div>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-[#e07a5f]/10 text-[#e07a5f] flex items-center justify-center font-bold">
                        <i class="fa-solid fa-folder-tree text-lg"></i>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-xs flex items-center justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Active Categories</span>
                        <div class="text-2xl font-bold text-emerald-600 mt-1">{{ $categories->where('is_active', true)->count() }}</div>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold">
                        <i class="fa-solid fa-circle-check text-lg"></i>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-xs flex items-center justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Total Subcategories</span>
                        <div class="text-2xl font-bold text-amber-600 mt-1">{{ $categories->sum('all_subcategories_count') }}</div>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold">
                        <i class="fa-solid fa-diagram-nested text-lg"></i>
                    </div>
                </div>
            </div>

            <!-- Categories Table Container -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between gap-4 flex-wrap">
                    <h3 class="font-serif text-base font-bold text-slate-900">All Categories</h3>
                    
                    <div class="flex items-center gap-3">
                        <select x-model="statusFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f]">
                            <option value="all">All Statuses</option>
                            <option value="active">Active Only</option>
                            <option value="inactive">Inactive Only</option>
                        </select>

                        <div class="relative w-64">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                            <input type="text" x-model="searchQuery" placeholder="Filter categories..." class="w-full pl-9 pr-4 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs focus:outline-none focus:border-[#e07a5f]">
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 border-b border-slate-200/80 text-[11px] font-bold text-slate-500 uppercase tracking-wider">
                                <th class="py-3.5 px-6">Category Details</th>
                                <th class="py-3.5 px-4">Subcategories</th>
                                <th class="py-3.5 px-4">Products</th>
                                <th class="py-3.5 px-4">Status</th>
                                <th class="py-3.5 px-6 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-xs font-medium text-slate-700">
                            @forelse($categories as $category)
                            <tr class="hover:bg-slate-50/80 transition-colors" x-show="matchCategory('{{ addslashes($category->name) }}', '{{ addslashes($category->description ?? '') }}', {{ $category->is_active ? 'true' : 'false' }})">
                                <td class="py-4 px-6 flex items-center gap-3">
                                    <img src="{{ $category->image_url ?? '/product1.jpg' }}" alt="{{ $category->name }}" class="w-11 h-11 rounded-lg object-cover border border-slate-200 shrink-0">
                                    <div>
                                        <div class="font-bold text-slate-900 text-sm">{{ $category->name }}</div>
                                        <div class="text-[11px] text-slate-400 line-clamp-1 max-w-xs">{{ $category->description ?? 'No description' }}</div>
                                    </div>
                                </td>
                                <td class="py-4 px-4 whitespace-nowrap">
                                    <span class="px-2.5 py-1 bg-amber-50 text-amber-700 rounded-full text-[11px] font-bold border border-amber-200/60 inline-flex items-center gap-1.5">
                                        <i class="fa-solid fa-tags text-[10px]"></i>
                                        <span>{{ $category->all_subcategories_count }} Subcategories</span>
                                    </span>
                                </td>
                                <td class="py-4 px-4 whitespace-nowrap">
                                    <span class="px-2.5 py-1 bg-sky-50 text-sky-700 rounded-full text-[11px] font-bold border border-sky-200/60 inline-flex items-center gap-1.5">
                                        <i class="fa-solid fa-cubes text-[10px]"></i>
                                        <span>{{ $category->products_count }} Products</span>
                                    </span>
                                </td>
                                <td class="py-4 px-4 whitespace-nowrap">
                                    <button @click="toggleStatus({{ $category->id }})" class="cursor-pointer">
                                        @if($category->is_active)
                                        <span class="px-2.5 py-1 bg-emerald-50 text-emerald-700 rounded-full text-[11px] font-bold border border-emerald-200/60 flex items-center gap-1.5 w-max">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                                        </span>
                                        @else
                                        <span class="px-2.5 py-1 bg-slate-100 text-slate-600 rounded-full text-[11px] font-bold border border-slate-200 flex items-center gap-1.5 w-max">
                                            <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span> Inactive
                                        </span>
                                        @endif
                                    </button>
                                </td>
                                <td class="py-4 px-6 text-right whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-1.5">
                                        <button @click="viewCategory({{ json_encode($category) }})" class="px-2.5 py-1.5 bg-sky-50 hover:bg-sky-100 text-sky-700 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1" title="View Details">
                                            <i class="fa-solid fa-eye text-xs"></i>
                                            <span>View</span>
                                        </button>
                                        <button @click="openEditModal({{ json_encode($category) }})" class="px-2.5 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1" title="Edit Category">
                                            <i class="fa-solid fa-pen-to-square text-xs"></i>
                                            <span>Edit</span>
                                        </button>
                                        <button @click="deleteCategory({{ $category->id }}, '{{ addslashes($category->name) }}')" class="px-2.5 py-1.5 bg-rose-50 hover:bg-rose-100 text-rose-600 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1" title="Delete Category">
                                            <i class="fa-solid fa-trash text-xs"></i>
                                            <span>Delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="py-8 text-center text-slate-400">No categories found in store database.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>

    <!-- DEDICATED LUXURY VIEW CATEGORY MODAL -->
    <div x-show="viewModalOpen" @click.self="viewModalOpen = false" 
        x-cloak
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm overflow-y-auto cursor-pointer"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
        
        <div class="bg-white border border-slate-200/90 rounded-3xl max-w-lg w-full shadow-2xl relative overflow-hidden flex flex-col my-auto cursor-default transform transition-all"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 scale-95">
            
            <!-- Category Image Header Banner -->
            <div class="relative h-56 w-full bg-slate-900 overflow-hidden shrink-0">
                <img :src="selectedCategory?.image_url || '/product1.jpg'" 
                    :alt="selectedCategory?.name" 
                    class="w-full h-full object-cover opacity-90 transition-transform duration-700 hover:scale-105"
                    onError="this.onerror=null;this.src='/product1.jpg';">
                
                <!-- Elegant Multi-Stop Dark Gradient -->
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/50 to-black/30"></div>
                
                <!-- Top Header Bar with Badges & Close Button -->
                <div class="absolute top-4 inset-x-4 flex items-center justify-between z-10">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-bold tracking-widest uppercase bg-white/20 backdrop-blur-md text-white border border-white/30 shadow-xs">
                        <i class="fa-solid fa-gem text-amber-300 text-[9px]"></i>
                        <span>Saltora Catalog Segment</span>
                    </span>
                    
                    <button type="button" @click="viewModalOpen = false" 
                        class="w-8 h-8 rounded-full bg-black/40 hover:bg-black/70 text-white flex items-center justify-center transition-all cursor-pointer border border-white/20 backdrop-blur-sm"
                        title="Close">
                        <i class="fa-solid fa-xmark text-sm"></i>
                    </button>
                </div>
                
                <!-- Bottom Banner Text Info -->
                <div class="absolute bottom-4 inset-x-5 z-10 space-y-1.5">
                    <div class="flex items-center gap-2 flex-wrap">
                        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold inline-flex items-center gap-1.5 backdrop-blur-md border shadow-xs"
                            :class="selectedCategory?.is_active ? 'bg-emerald-500/20 text-emerald-300 border-emerald-400/40' : 'bg-slate-500/20 text-slate-300 border-slate-400/40'">
                            <span class="w-1.5 h-1.5 rounded-full" :class="selectedCategory?.is_active ? 'bg-emerald-400 animate-pulse' : 'bg-slate-400'"></span>
                            <span x-text="selectedCategory?.is_active ? 'Active in Store' : 'Inactive / Draft'"></span>
                        </span>
                        
                        <template x-if="selectedCategory?.slug">
                            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono font-medium text-white/80 bg-white/10 backdrop-blur-md border border-white/15">
                                /<span x-text="selectedCategory?.slug"></span>
                            </span>
                        </template>
                    </div>

                    <h2 class="font-serif text-2xl sm:text-3xl font-bold text-white drop-shadow-md leading-tight" x-text="selectedCategory?.name"></h2>
                </div>
            </div>

            <!-- Content Body Area -->
            <div class="p-6 space-y-5 overflow-y-auto max-h-[calc(85vh-14rem)] custom-modal-scroll">
                
                <!-- Description Section -->
                <div class="space-y-1.5">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-info text-[#e07a5f]"></i>
                        <span>Segment Description</span>
                    </span>
                    <div class="bg-stone-50 border border-stone-200/80 rounded-2xl p-4 text-xs text-slate-700 leading-relaxed shadow-2xs">
                        <p x-text="selectedCategory?.description || 'No detailed description provided for this product category.'"></p>
                    </div>
                </div>

                <!-- 2-Card Metrics Grid -->
                <div class="grid grid-cols-2 gap-3.5">
                    <!-- Subcategories Card -->
                    <div class="bg-gradient-to-br from-amber-50/70 to-orange-50/40 border border-amber-200/70 rounded-2xl p-4 flex items-center justify-between shadow-2xs">
                        <div>
                            <span class="text-[10px] font-bold uppercase tracking-wider text-amber-800/80 block">Subcategories</span>
                            <div class="flex items-baseline gap-1.5 mt-1">
                                <span class="text-2xl font-bold font-serif text-amber-950" x-text="selectedCategory?.all_subcategories_count || (selectedCategory?.all_subcategories ? selectedCategory.all_subcategories.length : 0)"></span>
                                <span class="text-[11px] font-medium text-amber-700">types</span>
                            </div>
                        </div>
                        <div class="w-10 h-10 rounded-xl bg-amber-100/80 border border-amber-200 text-amber-700 flex items-center justify-center text-base shrink-0">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                    </div>

                    <!-- Products Card -->
                    <div class="bg-gradient-to-br from-sky-50/70 to-blue-50/40 border border-sky-200/70 rounded-2xl p-4 flex items-center justify-between shadow-2xs">
                        <div>
                            <span class="text-[10px] font-bold uppercase tracking-wider text-sky-800/80 block">Assigned Products</span>
                            <div class="flex items-baseline gap-1.5 mt-1">
                                <span class="text-2xl font-bold font-serif text-sky-950" x-text="selectedCategory?.products_count || 0"></span>
                                <span class="text-[11px] font-medium text-sky-700">active</span>
                            </div>
                        </div>
                        <div class="w-10 h-10 rounded-xl bg-sky-100/80 border border-sky-200 text-sky-700 flex items-center justify-center text-base shrink-0">
                            <i class="fa-solid fa-boxes-stacked"></i>
                        </div>
                    </div>
                </div>

                <!-- Attached Subcategories Pill List -->
                <template x-if="selectedCategory?.all_subcategories && selectedCategory.all_subcategories.length > 0">
                    <div class="space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 block">Export Grade Sub-types</span>
                        <div class="flex flex-wrap gap-1.5">
                            <template x-for="sub in selectedCategory.all_subcategories" :key="sub.id">
                                <span class="px-2.5 py-1 bg-slate-100 hover:bg-slate-200/70 text-slate-700 rounded-lg text-xs font-semibold border border-slate-200 transition-colors inline-flex items-center gap-1.5">
                                    <i class="fa-solid fa-tag text-[9px] text-[#e07a5f]"></i>
                                    <span x-text="sub.name"></span>
                                </span>
                            </template>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Footer Actions -->
            <div class="bg-slate-50/90 px-6 py-4 border-t border-slate-100 flex items-center justify-between gap-3 shrink-0">
                <a :href="'/products?category=' + (selectedCategory?.slug || '')" target="_blank" 
                    class="text-xs font-semibold text-slate-600 hover:text-[#e07a5f] inline-flex items-center gap-1.5 transition-colors cursor-pointer">
                    <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    <span>View in Storefront</span>
                </a>

                <div class="flex items-center gap-2">
                    <button type="button" @click="viewModalOpen = false" 
                        class="px-4 py-2 bg-white hover:bg-slate-100 text-slate-700 border border-slate-200 font-semibold text-xs rounded-xl transition-all cursor-pointer">
                        Close
                    </button>
                    <button type="button" @click="viewModalOpen = false; openEditModal(selectedCategory)" 
                        class="px-4 py-2 bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs rounded-xl shadow-xs transition-all flex items-center gap-1.5 cursor-pointer">
                        <i class="fa-solid fa-pen-to-square text-[11px]"></i>
                        <span>Edit Category</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL FOR ADD / EDIT CATEGORY -->
    <div x-show="modalOpen" x-cloak class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div x-show="modalOpen" x-cloak x-transition.opacity class="fixed inset-0 bg-slate-900/60 backdrop-blur-xs transition-opacity" @click="modalOpen = false"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div x-show="modalOpen" x-cloak x-transition.scale class="inline-block align-bottom bg-white rounded-2xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full border border-slate-200">
                <form @submit.prevent="saveCategory()">
                    <div class="bg-white px-6 pt-6 pb-4 space-y-4">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                            <h3 class="text-lg font-serif font-bold text-slate-900" x-text="isEdit ? 'Edit Category' : 'Add New Category'"></h3>
                            <button type="button" @click="modalOpen = false" class="text-slate-400 hover:text-slate-600">
                                <i class="fa-solid fa-xmark text-lg"></i>
                            </button>
                        </div>

                        <div class="space-y-3">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Category Name *</label>
                                <input type="text" x-model="form.name" required placeholder="e.g. Edible Pink Salt" class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-[#e07a5f]">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Description</label>
                                <textarea x-model="form.description" rows="3" placeholder="Brief summary of salt grade category..." class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-[#e07a5f]"></textarea>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Category Image (Optional)</label>
                                <input type="text" x-model="form.image_url" placeholder="http://example.com/image.jpg (Optional)" class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-[#e07a5f] mb-2">
                                <input type="file" @change="handleFileUpload($event)" accept="image/*" class="w-full text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-[#e07a5f]/10 file:text-[#e07a5f] hover:file:bg-[#e07a5f]/20 cursor-pointer">
                            </div>

                            <div class="flex items-center gap-2 pt-2">
                                <input type="checkbox" id="catActive" x-model="form.is_active" class="w-4 h-4 text-[#e07a5f] rounded border-slate-300 focus:ring-[#e07a5f]">
                                <label for="catActive" class="text-xs font-semibold text-slate-700 cursor-pointer">Category Active & Visible in Store</label>
                            </div>
                        </div>
                    </div>

                    <div class="bg-slate-50 px-6 py-4 flex items-center justify-end gap-3 border-t border-slate-100">
                        <button type="button" @click="modalOpen = false" class="px-4 py-2 bg-white border border-slate-200 text-slate-700 rounded-xl text-xs font-bold uppercase tracking-wider hover:bg-slate-100 cursor-pointer">Cancel</button>
                        <button type="submit" class="px-5 py-2 bg-[#e07a5f] hover:bg-[#d46a4f] text-white rounded-xl text-xs font-bold uppercase tracking-wider shadow-md cursor-pointer flex items-center gap-2">
                            <i class="fa-solid fa-floppy-disk"></i>
                            <span x-text="isEdit ? 'Update Category' : 'Save Category'"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- AlpineJS Category Manager -->
    <script>
        function categoryManager() {
            return {
                searchQuery: '',
                statusFilter: 'all',
                modalOpen: false,
                viewModalOpen: false,
                selectedCategory: null,
                isEdit: false,
                editId: null,
                form: {
                    name: '',
                    description: '',
                    image_url: '',
                    image_file: null,
                    is_active: true
                },
                matchesSearch(name, slug) {
                    if (!this.searchQuery) return true;
                    const q = this.searchQuery.toLowerCase();
                    return name.includes(q) || slug.includes(q);
                },
                matchCategory(name, desc, isActive) {
                    if (this.statusFilter === 'active' && !isActive) return false;
                    if (this.statusFilter === 'inactive' && isActive) return false;
                    if (!this.searchQuery) return true;
                    const q = this.searchQuery.toLowerCase().trim();
                    return (name + ' ' + (desc || '')).toLowerCase().includes(q);
                },
                viewCategory(cat) {
                    this.selectedCategory = cat;
                    this.viewModalOpen = true;
                },
                openAddModal() {
                    this.isEdit = false;
                    this.editId = null;
                    this.form = { name: '', description: '', image_url: '', image_file: null, is_active: true };
                    this.modalOpen = true;
                },
                openEditModal(cat) {
                    this.isEdit = true;
                    this.editId = cat.id;
                    this.form = {
                        name: cat.name,
                        description: cat.description || '',
                        image_url: cat.image_url || '',
                        image_file: null,
                        is_active: Boolean(cat.is_active)
                    };
                    this.modalOpen = true;
                },
                handleFileUpload(e) {
                    this.form.image_file = e.target.files[0];
                },
                async saveCategory() {
                    const formData = new FormData();
                    formData.append('name', this.form.name);
                    formData.append('description', this.form.description);
                    if (this.form.image_url) formData.append('image_url', this.form.image_url);
                    if (this.form.image_file) formData.append('image_file', this.form.image_file);
                    if (this.form.is_active) formData.append('is_active', '1');

                    const csrf = document.querySelector('meta[name="csrf-token"]').content;
                    let url = '{{ route("admin.categories.store") }}';
                    if (this.isEdit) {
                        url = `/admin/categories/${this.editId}`;
                        formData.append('_method', 'PUT');
                    }

                    try {
                        const res = await fetch(url, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': csrf,
                                'Accept': 'application/json'
                            },
                            body: formData
                        });

                        const data = await res.json();
                        if (data.success) {
                            Swal.fire({ icon: 'success', title: 'Success!', text: data.message, timer: 1500, showConfirmButton: false });
                            setTimeout(() => window.location.reload(), 1200);
                        } else {
                            Swal.fire({ icon: 'error', title: 'Error', text: data.message || 'Action failed.' });
                        }
                    } catch (err) {
                        Swal.fire({ icon: 'error', title: 'Error', text: 'Server communication error.' });
                    }
                },
                async toggleStatus(id) {
                    const csrf = document.querySelector('meta[name="csrf-token"]').content;
                    try {
                        const res = await fetch(`/admin/categories/${id}/toggle`, {
                            method: 'POST',
                            headers: { 'X-CSRF-TOKEN': csrf, 'Accept': 'application/json' }
                        });
                        const data = await res.json();
                        if (data.success) {
                            Swal.fire({ icon: 'success', title: 'Status Updated', text: data.message, timer: 1200, showConfirmButton: false });
                            setTimeout(() => window.location.reload(), 1000);
                        }
                    } catch(e) {}
                },
                async deleteCategory(id, name) {
                    const result = await Swal.fire({
                        title: 'Delete Category?',
                        text: `Are you sure you want to delete "${name}"? Subcategories & products linked to this category will be unassigned.`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#e07a5f',
                        cancelButtonColor: '#64748b',
                        confirmButtonText: 'Yes, Delete Category'
                    });

                    if (result.isConfirmed) {
                        const csrf = document.querySelector('meta[name="csrf-token"]').content;
                        try {
                            const res = await fetch(`/admin/categories/${id}`, {
                                method: 'DELETE',
                                headers: { 'X-CSRF-TOKEN': csrf, 'Accept': 'application/json' }
                            });
                            const data = await res.json();
                            if (data.success) {
                                Swal.fire({ icon: 'success', title: 'Deleted!', text: data.message, timer: 1500, showConfirmButton: false });
                                setTimeout(() => window.location.reload(), 1200);
                            }
                        } catch(e) {}
                    }
                }
            }
        }
    </script>
    @include('admin.partials.logout-script')
</body>
</html>
