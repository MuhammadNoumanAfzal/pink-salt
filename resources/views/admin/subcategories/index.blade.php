<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50 text-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Subcategories Management - SALTORA Admin</title>
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
<body class="min-h-full font-sans antialiased bg-slate-50 text-slate-800 flex" x-data="subcategoryManager()">

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
                <a href="{{ route('admin.categories.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-layer-group text-sm"></i>
                        <span>Categories</span>
                    </div>
                </a>

                <!-- 3. Subcategories -->
                <a href="{{ route('admin.subcategories.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 bg-[#e07a5f]/10 text-[#e07a5f] font-bold rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-tags text-sm"></i>
                        <span>Subcategories</span>
                    </div>
                    <span class="px-2 py-0.5 bg-[#e07a5f] text-white text-[10px] font-bold rounded-full">{{ count($subcategories) }}</span>
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

                <!-- 6. Messages -->
                <a href="{{ route('admin.dashboard') }}?tab=inquiries" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope text-sm"></i>
                        <span>Messages</span>
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
                <h1 class="text-xl font-serif font-bold text-slate-900">Subcategory Management</h1>
            </div>

            <button @click="openAddModal()" class="bg-[#e07a5f] hover:bg-[#d46a4f] text-white px-4 py-2 rounded-xl text-xs font-bold tracking-wider uppercase transition-all shadow-md flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-plus text-sm"></i>
                <span>Add Subcategory</span>
            </button>
        </header>

        <!-- Page Body -->
        <main class="p-6 md:p-8 space-y-6 max-w-7xl">

            <!-- Stats Bar -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-xs flex items-center justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Total Subcategories</span>
                        <div class="text-2xl font-bold text-slate-900 mt-1">{{ count($subcategories) }}</div>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold">
                        <i class="fa-solid fa-diagram-nested text-lg"></i>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-xs flex items-center justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Active Subcategories</span>
                        <div class="text-2xl font-bold text-emerald-600 mt-1">{{ $subcategories->where('is_active', true)->count() }}</div>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold">
                        <i class="fa-solid fa-circle-check text-lg"></i>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-xs flex items-center justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Parent Categories</span>
                        <div class="text-2xl font-bold text-[#e07a5f] mt-1">{{ count($categories) }}</div>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-[#e07a5f]/10 text-[#e07a5f] flex items-center justify-center font-bold">
                        <i class="fa-solid fa-folder-tree text-lg"></i>
                    </div>
                </div>
            </div>

            <!-- Subcategories Table Container -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between gap-4 flex-wrap">
                    <h3 class="font-serif text-base font-bold text-slate-900">All Subcategories</h3>

                    <div class="flex items-center gap-3">
                        <select x-model="statusFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f]">
                            <option value="all">All Statuses</option>
                            <option value="active">Active Only</option>
                            <option value="inactive">Inactive Only</option>
                        </select>

                        <select x-model="selectedCategoryFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f]">
                            <option value="">All Parent Categories</option>
                            @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>

                        <div class="relative w-64">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                            <input type="text" x-model="searchQuery" placeholder="Filter subcategories..." class="w-full pl-9 pr-4 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs focus:outline-none focus:border-[#e07a5f]">
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 border-b border-slate-200/80 text-[11px] font-bold text-slate-500 uppercase tracking-wider">
                                <th class="py-3.5 px-6">Subcategory Name</th>
                                <th class="py-3.5 px-4">Parent Category</th>
                                <th class="py-3.5 px-4">Products</th>
                                <th class="py-3.5 px-4">Status</th>
                                <th class="py-3.5 px-6 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-xs font-medium text-slate-700">
                            @forelse($subcategories as $sub)
                            <tr class="hover:bg-slate-50/80 transition-colors" x-show="matchesFilter('{{ $sub->category_id }}', '{{ strtolower(addslashes($sub->name)) }}', '{{ strtolower(addslashes($sub->slug)) }}', {{ $sub->is_active ? 'true' : 'false' }})">
                                <td class="py-4 px-6">
                                    <div class="font-bold text-slate-900 text-sm">{{ $sub->name }}</div>
                                    <div class="text-[11px] text-slate-400 line-clamp-1 max-w-xs">{{ $sub->description ?? 'No description' }}</div>
                                </td>
                                <td class="py-4 px-4 whitespace-nowrap">
                                    <span class="px-2.5 py-1 bg-[#e07a5f]/10 text-[#e07a5f] rounded-full text-[11px] font-bold border border-[#e07a5f]/20">
                                        <i class="fa-solid fa-folder text-[10px] mr-1"></i>
                                        {{ $sub->category->name ?? 'Unassigned' }}
                                    </span>
                                </td>
                                <td class="py-4 px-4 whitespace-nowrap">
                                    <span class="px-2.5 py-1 bg-sky-50 text-sky-700 rounded-full text-[11px] font-bold border border-sky-200/60 inline-flex items-center gap-1.5">
                                        <i class="fa-solid fa-cubes text-[10px]"></i>
                                        <span>{{ $sub->products_count }} Products</span>
                                    </span>
                                </td>
                                <td class="py-4 px-4 whitespace-nowrap">
                                    <button @click="toggleStatus({{ $sub->id }})" class="cursor-pointer">
                                        @if($sub->is_active)
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
                                        <button @click="viewSubcategory({{ json_encode($sub) }})" class="px-2.5 py-1.5 bg-sky-50 hover:bg-sky-100 text-sky-700 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1" title="View Details">
                                            <i class="fa-solid fa-eye text-xs"></i>
                                            <span>View</span>
                                        </button>
                                        <button @click="openEditModal({{ json_encode($sub) }})" class="px-2.5 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1" title="Edit Subcategory">
                                            <i class="fa-solid fa-pen-to-square text-xs"></i>
                                            <span>Edit</span>
                                        </button>
                                        <button @click="deleteSubcategory({{ $sub->id }}, '{{ addslashes($sub->name) }}')" class="px-2.5 py-1.5 bg-rose-50 hover:bg-rose-100 text-rose-600 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1" title="Delete Subcategory">
                                            <i class="fa-solid fa-trash text-xs"></i>
                                            <span>Delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="py-8 text-center text-slate-400">No subcategories found in store database.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>

    <!-- DEDICATED LUXURY VIEW SUBCATEGORY MODAL -->
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
            
            <!-- Subcategory Header Banner with Saltora Brand Accents -->
            <div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-[#1e293b] p-6 text-white shrink-0 overflow-hidden">
                <!-- Warm Glow Accent -->
                <div class="absolute -right-8 -top-8 w-40 h-40 bg-[#e07a5f]/25 rounded-full blur-2xl pointer-events-none"></div>

                <!-- Top Header Bar with Badges & Close Button -->
                <div class="flex items-center justify-between relative z-10 mb-4">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-bold tracking-widest uppercase bg-white/10 backdrop-blur-md text-amber-300 border border-white/20 shadow-xs">
                        <i class="fa-solid fa-tags text-[9px]"></i>
                        <span>Export Sub-Grade</span>
                    </span>
                    
                    <button type="button" @click="viewModalOpen = false" 
                        class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-all cursor-pointer border border-white/20 backdrop-blur-sm"
                        title="Close">
                        <i class="fa-solid fa-xmark text-sm"></i>
                    </button>
                </div>
                
                <!-- Bottom Banner Title & Badges -->
                <div class="relative z-10 space-y-2">
                    <div class="flex items-center gap-2 flex-wrap">
                        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold inline-flex items-center gap-1.5 backdrop-blur-md border shadow-xs"
                            :class="selectedSubcategory?.is_active ? 'bg-emerald-500/20 text-emerald-300 border-emerald-400/40' : 'bg-slate-500/20 text-slate-300 border-slate-400/40'">
                            <span class="w-1.5 h-1.5 rounded-full" :class="selectedSubcategory?.is_active ? 'bg-emerald-400 animate-pulse' : 'bg-slate-400'"></span>
                            <span x-text="selectedSubcategory?.is_active ? 'Active in Store' : 'Inactive / Draft'"></span>
                        </span>
                        
                        <template x-if="selectedSubcategory?.slug">
                            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono font-medium text-white/80 bg-white/10 backdrop-blur-md border border-white/15">
                                /<span x-text="selectedSubcategory?.slug"></span>
                            </span>
                        </template>
                    </div>

                    <h2 class="font-serif text-2xl sm:text-3xl font-bold text-white drop-shadow-md leading-tight" x-text="selectedSubcategory?.name"></h2>
                </div>
            </div>

            <!-- Content Body Area -->
            <div class="p-6 space-y-5 overflow-y-auto max-h-[calc(85vh-14rem)] custom-modal-scroll">
                
                <!-- Parent Category Callout -->
                <div class="p-3.5 bg-orange-50/70 border border-orange-200/80 rounded-2xl flex items-center justify-between">
                    <div>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-[#e07a5f] block">Parent Export Category</span>
                        <span class="text-sm font-bold text-slate-900 mt-0.5 block" x-text="selectedSubcategory?.category?.name || 'Primary Catalog'"></span>
                    </div>
                    <div class="w-9 h-9 rounded-xl bg-orange-100 border border-orange-200 text-[#e07a5f] flex items-center justify-center text-sm shrink-0">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                </div>

                <!-- Description Section -->
                <div class="space-y-1.5">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-info text-[#e07a5f]"></i>
                        <span>Subcategory Description</span>
                    </span>
                    <div class="bg-stone-50 border border-stone-200/80 rounded-2xl p-4 text-xs text-slate-700 leading-relaxed shadow-2xs">
                        <p x-text="selectedSubcategory?.description || 'No detailed specifications provided for this subcategory.'"></p>
                    </div>
                </div>

                <!-- Key Metrics Card -->
                <div class="bg-gradient-to-br from-sky-50/70 to-blue-50/40 border border-sky-200/70 rounded-2xl p-4 flex items-center justify-between shadow-2xs">
                    <div>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-sky-800/80 block">Associated Catalog Products</span>
                        <div class="flex items-baseline gap-1.5 mt-1">
                            <span class="text-2xl font-bold font-serif text-sky-950" x-text="selectedSubcategory?.products_count || 0"></span>
                            <span class="text-[11px] font-medium text-sky-700">active items</span>
                        </div>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-sky-100/80 border border-sky-200 text-sky-700 flex items-center justify-center text-base shrink-0">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                </div>
            </div>

            <!-- Footer Actions -->
            <div class="bg-slate-50/90 px-6 py-4 border-t border-slate-100 flex items-center justify-between gap-3 shrink-0">
                <a :href="'/products?category=' + (selectedSubcategory?.category?.slug || '')" target="_blank" 
                    class="text-xs font-semibold text-slate-600 hover:text-[#e07a5f] inline-flex items-center gap-1.5 transition-colors cursor-pointer">
                    <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    <span>Browse Parent Category</span>
                </a>

                <div class="flex items-center gap-2">
                    <button type="button" @click="viewModalOpen = false" 
                        class="px-4 py-2 bg-white hover:bg-slate-100 text-slate-700 border border-slate-200 font-semibold text-xs rounded-xl transition-all cursor-pointer">
                        Close
                    </button>
                    <button type="button" @click="viewModalOpen = false; openEditModal(selectedSubcategory)" 
                        class="px-4 py-2 bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs rounded-xl shadow-xs transition-all flex items-center gap-1.5 cursor-pointer">
                        <i class="fa-solid fa-pen-to-square text-[11px]"></i>
                        <span>Edit Subcategory</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL FOR ADD / EDIT SUBCATEGORY -->
    <div x-show="modalOpen" x-cloak class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div x-show="modalOpen" x-cloak x-transition.opacity class="fixed inset-0 bg-slate-900/60 backdrop-blur-xs transition-opacity" @click="modalOpen = false"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div x-show="modalOpen" x-cloak x-transition.scale class="inline-block align-bottom bg-white rounded-2xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full border border-slate-200">
                <form @submit.prevent="saveSubcategory()">
                    <div class="bg-white px-6 pt-6 pb-4 space-y-4">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                            <h3 class="text-lg font-serif font-bold text-slate-900" x-text="isEdit ? 'Edit Subcategory' : 'Add New Subcategory'"></h3>
                            <button type="button" @click="modalOpen = false" class="text-slate-400 hover:text-slate-600">
                                <i class="fa-solid fa-xmark text-lg"></i>
                            </button>
                        </div>

                        <div class="space-y-3">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Parent Category *</label>
                                <select x-model="form.category_id" required class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs font-semibold focus:outline-none focus:border-[#e07a5f]">
                                    <option value="">Select Parent Category...</option>
                                    @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Subcategory Name *</label>
                                <input type="text" x-model="form.name" required placeholder="e.g. Fine Table Salt (0.2-0.8mm)" class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-[#e07a5f]">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Description</label>
                                <textarea x-model="form.description" rows="3" placeholder="Brief summary of subcategory specifications..." class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-[#e07a5f]"></textarea>
                            </div>

                            <div class="flex items-center gap-2 pt-2">
                                <input type="checkbox" id="subActive" x-model="form.is_active" class="w-4 h-4 text-[#e07a5f] rounded border-slate-300 focus:ring-[#e07a5f]">
                                <label for="subActive" class="text-xs font-semibold text-slate-700 cursor-pointer">Subcategory Active & Visible in Store</label>
                            </div>
                        </div>
                    </div>

                    <div class="bg-slate-50 px-6 py-4 flex items-center justify-end gap-3 border-t border-slate-100">
                        <button type="button" @click="modalOpen = false" class="px-4 py-2 bg-white border border-slate-200 text-slate-700 rounded-xl text-xs font-bold uppercase tracking-wider hover:bg-slate-100 cursor-pointer">Cancel</button>
                        <button type="submit" class="px-5 py-2 bg-[#e07a5f] hover:bg-[#d46a4f] text-white rounded-xl text-xs font-bold uppercase tracking-wider shadow-md cursor-pointer flex items-center gap-2">
                            <i class="fa-solid fa-floppy-disk"></i>
                            <span x-text="isEdit ? 'Update Subcategory' : 'Save Subcategory'"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- AlpineJS Subcategory Manager -->
    <script>
        function subcategoryManager() {
            return {
                searchQuery: '',
                statusFilter: 'all',
                selectedCategoryFilter: '',
                modalOpen: false,
                viewModalOpen: false,
                selectedSubcategory: null,
                isEdit: false,
                editId: null,
                form: {
                    category_id: '',
                    name: '',
                    description: '',
                    is_active: true
                },
                matchesFilter(catId, name, slug, isActive) {
                    if (this.selectedCategoryFilter && String(catId) !== String(this.selectedCategoryFilter)) {
                        return false;
                    }
                    if (this.statusFilter === 'active' && !isActive) return false;
                    if (this.statusFilter === 'inactive' && isActive) return false;
                    if (!this.searchQuery) return true;
                    const q = this.searchQuery.toLowerCase();
                    return name.includes(q) || slug.includes(q);
                },
                viewSubcategory(sub) {
                    this.selectedSubcategory = sub;
                    this.viewModalOpen = true;
                },
                openAddModal() {
                    this.isEdit = false;
                    this.editId = null;
                    this.form = { category_id: '{{ $categories->first()?->id ?? "" }}', name: '', description: '', is_active: true };
                    this.modalOpen = true;
                },
                openEditModal(sub) {
                    this.isEdit = true;
                    this.editId = sub.id;
                    this.form = {
                        category_id: sub.category_id,
                        name: sub.name,
                        description: sub.description || '',
                        is_active: Boolean(sub.is_active)
                    };
                    this.modalOpen = true;
                },
                async saveSubcategory() {
                    const formData = new FormData();
                    formData.append('category_id', this.form.category_id);
                    formData.append('name', this.form.name);
                    formData.append('description', this.form.description);
                    if (this.form.is_active) formData.append('is_active', '1');

                    const csrf = document.querySelector('meta[name="csrf-token"]').content;
                    let url = '{{ route("admin.subcategories.store") }}';
                    if (this.isEdit) {
                        url = `/admin/subcategories/${this.editId}`;
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
                        const res = await fetch(`/admin/subcategories/${id}/toggle`, {
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
                async deleteSubcategory(id, name) {
                    const result = await Swal.fire({
                        title: 'Delete Subcategory?',
                        text: `Are you sure you want to delete "${name}"? Products linked to this subcategory will be unassigned.`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#e07a5f',
                        cancelButtonColor: '#64748b',
                        confirmButtonText: 'Yes, Delete Subcategory'
                    });

                    if (result.isConfirmed) {
                        const csrf = document.querySelector('meta[name="csrf-token"]').content;
                        try {
                            const res = await fetch(`/admin/subcategories/${id}`, {
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
</body>
</html>
