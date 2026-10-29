<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50 text-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $product->name }} - Product Details - SALTORA Admin</title>
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
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="min-h-full font-sans antialiased bg-slate-50 text-slate-800 flex" x-data="{
    async toggleStatus() {
        const csrf = document.querySelector('meta[name=\'csrf-token\']').content;
        try {
            const res = await fetch('{{ route('admin.products.toggle', $product->id) }}', {
                method: 'POST',
                headers: { 'X-CSRF-TOKEN': csrf, 'Accept': 'application/json' }
            });
            const data = await res.json();
            if (data.success) {
                window.location.reload();
            }
        } catch (e) {
            Swal.fire('Error', 'Unable to toggle status', 'error');
        }
    },
    async deleteProduct() {
        const res = await Swal.fire({
            title: 'Delete Product?',
            text: 'Are you sure you want to delete \'{{ addslashes($product->name) }}\'? This action cannot be undone.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e07a5f',
            cancelButtonColor: '#94a3b8',
            confirmButtonText: 'Yes, Delete'
        });

        if (res.isConfirmed) {
            const csrf = document.querySelector('meta[name=\'csrf-token\']').content;
            const delRes = await fetch('{{ route('admin.products.delete', $product->id) }}', {
                method: 'DELETE',
                headers: { 'X-CSRF-TOKEN': csrf, 'Accept': 'application/json' }
            });
            const d = await delRes.json();
            if (d.success) {
                window.location.href = '{{ route('admin.products.index') }}';
            } else {
                Swal.fire('Error', d.message || 'Could not delete product', 'error');
            }
        }
    }
}">

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
                <a href="{{ route('admin.dashboard') }}" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all whitespace-nowrap">
                    <i class="fa-solid fa-chart-pie text-sm shrink-0"></i>
                    <span class="whitespace-nowrap">Dashboard Overview</span>
                </a>

                <a href="{{ route('admin.categories.index') }}" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all whitespace-nowrap">
                    <i class="fa-solid fa-layer-group text-sm shrink-0"></i>
                    <span class="whitespace-nowrap">Categories</span>
                </a>

                <a href="{{ route('admin.subcategories.index') }}" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all whitespace-nowrap">
                    <i class="fa-solid fa-tags text-sm shrink-0"></i>
                    <span class="whitespace-nowrap">Subcategories</span>
                </a>

                <a href="{{ route('admin.products.index') }}" class="w-full flex items-center gap-3 px-3 py-2.5 bg-[#e07a5f]/10 text-[#e07a5f] font-bold rounded-xl transition-all whitespace-nowrap">
                    <i class="fa-solid fa-cubes text-sm shrink-0"></i>
                    <span class="whitespace-nowrap">Product Catalog</span>
                </a>

                <a href="{{ route('admin.dashboard') }}?tab=inquiries" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all whitespace-nowrap">
                    <i class="fa-solid fa-envelope-open-text text-sm shrink-0"></i>
                    <span class="whitespace-nowrap">Customer Messages</span>
                </a>

                <a href="{{ route('admin.dashboard') }}?tab=blogs" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all whitespace-nowrap">
                    <i class="fa-solid fa-newspaper text-sm shrink-0"></i>
                    <span class="whitespace-nowrap">Blogs & Insights</span>
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

    <!-- MAIN CONTENT AREA -->
    <div class="flex-1 flex flex-col min-w-0">
        <!-- TOP HEADER BAR -->
        <header class="h-16 bg-white border-b border-slate-200/80 px-4 sm:px-8 flex items-center justify-between sticky top-0 z-20 shadow-xs">
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.products.index') }}" class="p-2 rounded-lg text-slate-400 hover:text-slate-800 hover:bg-slate-100 transition-all" title="Back to Products">
                    <i class="fa-solid fa-arrow-left text-sm"></i>
                </a>
                <div>
                    <div class="flex items-center gap-2 text-[11px] text-slate-400">
                        <a href="{{ route('admin.products.index') }}" class="hover:text-slate-600">Product Catalog</a>
                        <span>/</span>
                        <span class="text-slate-600 font-semibold truncate max-w-[140px]">{{ $product->name }}</span>
                    </div>
                    <h1 class="font-serif font-bold text-base sm:text-lg text-slate-900 leading-tight">{{ $product->name }}</h1>
                </div>
            </div>

            <div class="flex items-center gap-2.5">
                <a href="{{ route('admin.products.edit', $product->id) }}" class="px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white font-semibold text-xs rounded-xl shadow-xs transition-all flex items-center gap-1.5 cursor-pointer">
                    <i class="fa-solid fa-pen-to-square text-xs"></i>
                    <span>Edit Product</span>
                </a>
                <button type="button" @click="deleteProduct()" class="px-3 py-2 bg-rose-50 hover:bg-rose-100 text-rose-600 border border-rose-200 font-semibold text-xs rounded-xl transition-all cursor-pointer flex items-center gap-1.5" title="Delete">
                    <i class="fa-solid fa-trash text-xs"></i>
                    <span class="hidden sm:inline">Delete</span>
                </button>
            </div>
        </header>

        <!-- PAGE CONTENT -->
        <main class="p-4 sm:p-8 max-w-6xl w-full mx-auto space-y-6">

            <!-- Top Grid: Image + Highlights -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                
                <!-- Left Column: Product Image & Badges (5 cols) -->
                <div class="lg:col-span-5 space-y-4">
                    <div class="bg-white border border-slate-200/80 rounded-3xl p-4 shadow-xs">
                        <div class="relative rounded-2xl overflow-hidden bg-slate-100 border border-slate-200/80 aspect-square">
                            <img src="{{ $product->image_url ?? '/bulk.jpg' }}" alt="{{ $product->name }}" 
                                class="w-full h-full object-cover"
                                onerror="this.onerror=null;this.src='/bulk.jpg';">

                            <!-- Badges -->
                            <div class="absolute top-3 left-3 flex flex-col gap-1.5 items-start">
                                @if($product->badge)
                                <span class="px-2.5 py-1 bg-amber-500 text-white text-[10px] font-bold rounded-lg shadow-sm">
                                    {{ $product->badge }}
                                </span>
                                @endif
                                @if($product->is_featured)
                                <span class="px-2.5 py-1 bg-[#e07a5f] text-white text-[10px] font-bold rounded-lg shadow-sm flex items-center gap-1">
                                    <i class="fa-solid fa-star text-[9px]"></i> Featured
                                </span>
                                @endif
                            </div>

                            <div class="absolute top-3 right-3">
                                <button type="button" @click="toggleStatus()" 
                                    class="px-2.5 py-1 rounded-full text-[10px] font-bold inline-flex items-center gap-1.5 backdrop-blur-md shadow-sm transition-all cursor-pointer {{ $product->is_active ? 'bg-emerald-600/90 text-white hover:bg-emerald-700' : 'bg-slate-700/90 text-white hover:bg-slate-800' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $product->is_active ? 'bg-emerald-300' : 'bg-rose-400' }}"></span>
                                    <span>{{ $product->is_active ? 'Active' : 'Disabled' }}</span>
                                </button>
                            </div>
                        </div>

                        <!-- Pricing Bar -->
                        <div class="mt-4 p-4 bg-slate-50 rounded-2xl border border-slate-100 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 block">Export Pricing</span>
                                <div class="flex items-baseline gap-1 mt-0.5">
                                    @if($product->price > 0)
                                        <span class="text-2xl font-bold font-serif text-slate-900">${{ number_format($product->price, 2) }}</span>
                                        <span class="text-xs text-slate-500 font-medium">/ {{ ltrim($product->price_unit ?? 'kg', '/') }}</span>
                                    @else
                                        <span class="text-lg font-bold text-slate-700">Custom Quote Required</span>
                                    @endif
                                </div>
                            </div>
                            @if($product->moq)
                            <div class="text-right">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 block">Min. Order (MOQ)</span>
                                <span class="text-xs font-bold text-slate-800">{{ $product->moq }}</span>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Quick Storefront Button -->
                    <a href="/products" target="_blank" 
                        class="w-full py-3 bg-white hover:bg-slate-50 border border-slate-200 text-slate-700 rounded-2xl text-xs font-bold flex items-center justify-center gap-2 shadow-xs transition-colors">
                        <i class="fa-solid fa-arrow-up-right-from-square text-[#e07a5f]"></i>
                        <span>View on Buyer Storefront</span>
                    </a>
                </div>

                <!-- Right Column: Details & Technical Specifications (7 cols) -->
                <div class="lg:col-span-7 space-y-6">
                    
                    <!-- Overview Card -->
                    <div class="bg-white border border-slate-200/80 rounded-3xl p-6 shadow-xs space-y-5">
                        <div class="space-y-2 border-b border-slate-100 pb-4">
                            <div class="flex items-center gap-2 flex-wrap">
                                @if($product->categoryRef)
                                <a href="{{ route('admin.categories.show', $product->categoryRef->id) }}" 
                                    class="px-2.5 py-1 bg-amber-50 hover:bg-amber-100 text-amber-800 rounded-lg text-xs font-bold border border-amber-200/70 inline-flex items-center gap-1.5 transition-colors">
                                    <i class="fa-solid fa-layer-group text-[10px]"></i>
                                    <span>{{ $product->categoryRef->name }}</span>
                                </a>
                                @endif

                                @if($product->subcategoryRef)
                                <a href="{{ route('admin.subcategories.show', $product->subcategoryRef->id) }}" 
                                    class="px-2.5 py-1 bg-[#e07a5f]/10 hover:bg-[#e07a5f]/20 text-[#e07a5f] rounded-lg text-xs font-bold border border-[#e07a5f]/20 inline-flex items-center gap-1.5 transition-colors">
                                    <i class="fa-solid fa-tag text-[10px]"></i>
                                    <span>{{ $product->subcategoryRef->name }}</span>
                                </a>
                                @endif

                                <span class="px-2.5 py-1 bg-slate-100 text-slate-600 rounded-lg font-mono text-[11px]">
                                    /product/{{ $product->slug }}
                                </span>
                            </div>

                            <h2 class="font-serif font-bold text-2xl text-slate-900">{{ $product->name }}</h2>
                            @if($product->short_desc)
                            <p class="text-xs text-slate-500 leading-relaxed">{{ $product->short_desc }}</p>
                            @endif
                        </div>

                        <!-- Technical Specs Grid -->
                        <div class="space-y-3">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 block">Export Grade Specifications</span>
                            
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                                <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                                    <span class="text-[10px] text-slate-400 block font-medium">Salt Grade</span>
                                    <span class="text-xs font-bold text-slate-800 mt-0.5 block">{{ $product->grade ?? 'Food Grade' }}</span>
                                </div>

                                <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                                    <span class="text-[10px] text-slate-400 block font-medium">Grain Size</span>
                                    <span class="text-xs font-bold text-slate-800 mt-0.5 block">{{ $product->grain_size ?? 'Fine (0.3-0.8mm)' }}</span>
                                </div>

                                <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                                    <span class="text-[10px] text-slate-400 block font-medium">Mesh Size</span>
                                    <span class="text-xs font-bold text-slate-800 mt-0.5 block">{{ $product->mesh_size ?? '20-50 Mesh' }}</span>
                                </div>

                                <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                                    <span class="text-[10px] text-slate-400 block font-medium">Purity</span>
                                    <span class="text-xs font-bold text-slate-800 mt-0.5 block">{{ $product->purity ?? '98.5% NaCl' }}</span>
                                </div>

                                <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                                    <span class="text-[10px] text-slate-400 block font-medium">Packaging Type</span>
                                    <span class="text-xs font-bold text-slate-800 mt-0.5 block">{{ $product->packaging_type ?? 'Zip Pouch' }}</span>
                                </div>

                                <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                                    <span class="text-[10px] text-slate-400 block font-medium">Origin</span>
                                    <span class="text-xs font-bold text-slate-800 mt-0.5 block">{{ $product->origin ?? 'Khewra Mines, PK' }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Full Description -->
                        @if($product->full_desc)
                        <div class="space-y-2 pt-2 border-t border-slate-100">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 block">Complete Product Description</span>
                            <div class="p-4 bg-stone-50 border border-stone-200/70 rounded-2xl text-xs text-slate-700 leading-relaxed whitespace-pre-line">
                                {{ $product->full_desc }}
                            </div>
                        </div>
                        @endif

                    </div>

                </div>

            </div>

        </main>
    </div>

</body>
</html>

