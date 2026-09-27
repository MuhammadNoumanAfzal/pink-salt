<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50 text-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Product Catalog Sub-Page - SALTORA Admin</title>
    <link rel="icon" type="image/png" href="/logo.png">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
    </style>
</head>
<body class="min-h-full font-sans antialiased bg-slate-50 text-slate-800 flex" x-data="adminProductsPage()">

    <!-- LEFT SIDEBAR -->
    <aside class="w-64 bg-white border-r border-slate-200/80 shrink-0 hidden md:flex flex-col justify-between h-screen sticky top-0 z-30 shadow-xs overflow-y-auto">
        <div>
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

            <nav class="p-4 space-y-1 text-xs font-semibold">
                <!-- 1. Dashboard Overview -->
                <a href="{{ route('admin.dashboard') }}" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 transition-all">
                    <i class="fa-solid fa-chart-line text-sm"></i>
                    <span>Dashboard Overview</span>
                </a>

                <!-- 2. Categories -->
                <a href="{{ route('admin.categories.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 transition-all">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-layer-group text-sm"></i>
                        <span>Categories</span>
                    </div>
                </a>

                <!-- 3. Subcategories -->
                <a href="{{ route('admin.subcategories.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 transition-all">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-tags text-sm"></i>
                        <span>Subcategories</span>
                    </div>
                </a>

                <!-- 4. Product Catalog -->
                <a href="{{ route('admin.products.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl bg-[#e07a5f]/10 text-[#e07a5f] font-bold transition-all">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-boxes-stacked text-sm"></i>
                        <span>Product Catalog</span>
                    </div>
                    <span class="px-2 py-0.5 bg-[#e07a5f] text-white text-[10px] rounded-full font-bold">{{ count($products) }}</span>
                </a>

                <!-- 5. Bulk Orders -->
                <a href="{{ route('admin.dashboard') }}?tab=quotes" class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 transition-all">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-bag-shopping text-sm"></i>
                        <span>Bulk Orders</span>
                    </div>
                </a>

                <!-- 6. Customer Messages -->
                <a href="{{ route('admin.dashboard') }}?tab=inquiries" class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 transition-all">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope-open-text text-sm"></i>
                        <span>Customer Messages</span>
                    </div>
                </a>

                <div class="pt-4 border-t border-slate-100">
                    <a href="/sitemap" target="_blank" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-500 hover:bg-slate-50 transition-all">
                        <i class="fa-solid fa-sitemap text-sm text-emerald-600"></i>
                        <span>HTML Sitemap</span>
                    </a>

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
            <button @click="openCreateProductModal()" class="px-4 py-2 bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs rounded-xl shadow-xs transition-all flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-plus text-[10px]"></i> Add New Product
            </button>
        </header>

        <main class="p-8 max-w-7xl w-full mx-auto space-y-6">
            
            <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-bold font-serif text-slate-900">Manage Store Salt Products</h2>
                    <p class="text-xs text-slate-500">Add, edit, view specs, toggle visibility or delete items from the catalog.</p>
                </div>
                <span class="px-3 py-1 bg-orange-100 text-[#e07a5f] font-bold text-xs rounded-full">Total: {{ count($products) }} Products</span>
            </div>

            <!-- Products Sub-Page Datatable -->
            <div class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-xs">
                <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between gap-4 flex-wrap">
                    <h3 class="font-serif text-base font-bold text-slate-900">Product List</h3>

                    <div class="flex items-center gap-3">
                        <select x-model="statusFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f]">
                            <option value="all">All Statuses</option>
                            <option value="active">Active Only</option>
                            <option value="inactive">Disabled Only</option>
                        </select>

                        <select x-model="categoryFilter" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f]">
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
                            <input type="text" x-model="searchQuery" placeholder="Search products..." class="w-full pl-9 pr-4 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs focus:outline-none focus:border-[#e07a5f]">
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="bg-slate-50 text-slate-500 text-[11px] uppercase tracking-wider border-b border-slate-200">
                                <th class="p-4">Product Info</th>
                                <th class="p-4">Category</th>
                                <th class="p-4 text-center">Catalog Status</th>
                                <th class="p-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($products as $prod)
                            <tr class="hover:bg-slate-50/60 transition-colors" x-show="matchProduct('{{ addslashes($prod->name) }}', '{{ addslashes($prod->category) }}', {{ $prod->is_active ? 'true' : 'false' }}, '{{ addslashes($prod->short_desc ?? '') }}')">
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

        </main>
    </div>

    <!-- CREATE / EDIT PRODUCT MODAL (POPUP WITH PC FILE UPLOAD) -->
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
                            <span class="text-slate-800 font-semibold">Active in Catalog</span>
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

    <!-- Alpine Script -->
    <script>
        function adminProductsPage() {
            return {
                searchQuery: '',
                statusFilter: 'all',
                categoryFilter: 'all',
                matchProduct(name, category, isActive, desc) {
                    if (this.statusFilter === 'active' && !isActive) return false;
                    if (this.statusFilter === 'inactive' && isActive) return false;
                    if (this.categoryFilter !== 'all' && String(category).trim() !== String(this.categoryFilter).trim()) return false;
                    if (!this.searchQuery) return true;
                    const q = this.searchQuery.toLowerCase().trim();
                    return (name + ' ' + category + ' ' + (desc || '')).toLowerCase().includes(q);
                },
                showProductModal: false,
                showViewProductModal: false,
                isEditMode: false,
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
