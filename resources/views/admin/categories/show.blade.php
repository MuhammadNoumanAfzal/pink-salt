<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50 text-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $category->name }} - Category Details - SALTORA Admin</title>
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
            const res = await fetch('{{ route('admin.categories.toggle', $category->id) }}', {
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
    async deleteCategory() {
        const res = await Swal.fire({
            title: 'Delete Category?',
            text: 'Are you sure you want to delete \'{{ addslashes($category->name) }}\'? This action cannot be undone.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e07a5f',
            cancelButtonColor: '#94a3b8',
            confirmButtonText: 'Yes, Delete'
        });

        if (res.isConfirmed) {
            const csrf = document.querySelector('meta[name=\'csrf-token\']').content;
            const delRes = await fetch('{{ route('admin.categories.delete', $category->id) }}', {
                method: 'DELETE',
                headers: { 'X-CSRF-TOKEN': csrf, 'Accept': 'application/json' }
            });
            const d = await delRes.json();
            if (d.success) {
                window.location.href = '{{ route('admin.categories.index') }}';
            } else {
                Swal.fire('Error', d.message || 'Could not delete category', 'error');
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

                <a href="{{ route('admin.categories.index') }}" class="w-full flex items-center gap-3 px-3 py-2.5 bg-[#e07a5f]/10 text-[#e07a5f] font-bold rounded-xl transition-all whitespace-nowrap">
                    <i class="fa-solid fa-layer-group text-sm shrink-0"></i>
                    <span class="whitespace-nowrap">Categories</span>
                </a>

                <a href="{{ route('admin.subcategories.index') }}" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all whitespace-nowrap">
                    <i class="fa-solid fa-tags text-sm shrink-0"></i>
                    <span class="whitespace-nowrap">Subcategories</span>
                </a>

                <a href="{{ route('admin.products.index') }}" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all whitespace-nowrap">
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
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-newspaper text-sm"></i>
                        <span>Blogs & Insights</span>
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
                <a href="{{ route('admin.categories.index') }}" class="p-2 rounded-lg text-slate-400 hover:text-slate-800 hover:bg-slate-100 transition-all" title="Back to Categories">
                    <i class="fa-solid fa-arrow-left text-sm"></i>
                </a>
                <div>
                    <div class="flex items-center gap-2 text-[11px] text-slate-400">
                        <a href="{{ route('admin.categories.index') }}" class="hover:text-slate-600">Categories</a>
                        <span>/</span>
                        <span class="text-slate-600 font-semibold truncate max-w-[140px]">{{ $category->name }}</span>
                    </div>
                    <h1 class="font-serif font-bold text-base sm:text-lg text-slate-900 leading-tight">{{ $category->name }}</h1>
                </div>
            </div>

            <div class="flex items-center gap-2.5">
                <a href="{{ route('admin.categories.edit', $category->id) }}" class="px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white font-semibold text-xs rounded-xl shadow-xs transition-all flex items-center gap-1.5 cursor-pointer">
                    <i class="fa-solid fa-pen-to-square text-xs"></i>
                    <span>Edit Category</span>
                </a>
                <button type="button" @click="deleteCategory()" class="px-3 py-2 bg-rose-50 hover:bg-rose-100 text-rose-600 border border-rose-200 font-semibold text-xs rounded-xl transition-all cursor-pointer flex items-center gap-1.5" title="Delete">
                    <i class="fa-solid fa-trash text-xs"></i>
                    <span class="hidden sm:inline">Delete</span>
                </button>
            </div>
        </header>

        <!-- PAGE CONTENT -->
        <main class="p-4 sm:p-8 max-w-6xl w-full mx-auto space-y-6">

            <!-- Hero Banner Card -->
            <div class="bg-white border border-slate-200/80 rounded-3xl overflow-hidden shadow-xs relative">
                <div class="relative h-64 sm:h-72 w-full bg-slate-900 overflow-hidden">
                    <img src="{{ $category->image_url ?? '/product1.jpg' }}" alt="{{ $category->name }}" 
                        class="w-full h-full object-cover opacity-85"
                        onerror="this.onerror=null;this.src='/product1.jpg';">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/60 to-black/30"></div>

                    <!-- Top Overlay Badges -->
                    <div class="absolute top-6 inset-x-6 flex items-center justify-between">
                        <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-white/20 backdrop-blur-md text-white border border-white/30 shadow-xs">
                            <i class="fa-solid fa-gem text-amber-300 text-xs"></i>
                            <span>Catalog Segment</span>
                        </span>

                        <div class="flex items-center gap-2">
                            <a href="/products?category={{ $category->slug }}" target="_blank"
                                class="px-3.5 py-1.5 rounded-full text-xs font-bold text-white bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/25 transition-all inline-flex items-center gap-1.5">
                                <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                <span>Live Storefront</span>
                            </a>
                        </div>
                    </div>

                    <!-- Bottom Overlay Info -->
                    <div class="absolute bottom-6 inset-x-6 space-y-2">
                        <div class="flex items-center gap-2.5 flex-wrap">
                            <button type="button" @click="toggleStatus()" 
                                class="px-3 py-1 rounded-full text-xs font-bold inline-flex items-center gap-2 backdrop-blur-md border shadow-xs transition-all cursor-pointer {{ $category->is_active ? 'bg-emerald-500/20 text-emerald-300 border-emerald-400/40 hover:bg-emerald-500/30' : 'bg-slate-500/20 text-slate-300 border-slate-400/40 hover:bg-slate-500/30' }}"
                                title="Click to toggle status">
                                <span class="w-2 h-2 rounded-full {{ $category->is_active ? 'bg-emerald-400 animate-pulse' : 'bg-slate-400' }}"></span>
                                <span>{{ $category->is_active ? 'Active in Store' : 'Inactive / Draft' }}</span>
                                <i class="fa-solid fa-arrows-rotate text-[10px] ml-1 opacity-70"></i>
                            </button>

                            <span class="px-3 py-1 rounded-full text-xs font-mono font-medium text-white/90 bg-white/10 backdrop-blur-md border border-white/20">
                                /category/{{ $category->slug }}
                            </span>

                            <span class="text-xs text-white/70 ml-auto hidden sm:inline">
                                Added {{ $category->created_at ? $category->created_at->format('M d, Y') : 'Recently' }}
                            </span>
                        </div>

                        <h2 class="font-serif text-2xl sm:text-4xl font-bold text-white drop-shadow-md leading-tight">{{ $category->name }}</h2>
                    </div>
                </div>

                <!-- Category Description Body -->
                <div class="p-6 sm:p-8 space-y-6">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 flex items-center gap-2 mb-2">
                            <i class="fa-solid fa-circle-info text-[#e07a5f]"></i>
                            <span>Category Overview</span>
                        </span>
                        <div class="bg-stone-50 border border-stone-200/80 rounded-2xl p-5 text-sm text-slate-700 leading-relaxed">
                            <p>{{ $category->description ?? 'No detailed description provided for this Himalayan salt category.' }}</p>
                        </div>
                    </div>

                    <!-- 3-Card Summary Stats -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="bg-gradient-to-br from-amber-50 to-orange-50/50 border border-amber-200/70 rounded-2xl p-5 flex items-center justify-between">
                            <div>
                                <span class="text-[11px] font-bold uppercase tracking-wider text-amber-800/80 block">Subcategories</span>
                                <div class="text-2xl font-bold font-serif text-amber-950 mt-1">{{ $category->all_subcategories_count ?? count($category->allSubcategories) }}</div>
                                <span class="text-[11px] font-medium text-amber-700">configured types</span>
                            </div>
                            <div class="w-12 h-12 rounded-xl bg-amber-100/90 border border-amber-200 text-amber-700 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-tags"></i>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-sky-50 to-blue-50/50 border border-sky-200/70 rounded-2xl p-5 flex items-center justify-between">
                            <div>
                                <span class="text-[11px] font-bold uppercase tracking-wider text-sky-800/80 block">Total Products</span>
                                <div class="text-2xl font-bold font-serif text-sky-950 mt-1">{{ $category->products_count ?? count($category->products) }}</div>
                                <span class="text-[11px] font-medium text-sky-700">assigned products</span>
                            </div>
                            <div class="w-12 h-12 rounded-xl bg-sky-100/90 border border-sky-200 text-sky-700 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-boxes-stacked"></i>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-emerald-50 to-teal-50/50 border border-emerald-200/70 rounded-2xl p-5 flex items-center justify-between">
                            <div>
                                <span class="text-[11px] font-bold uppercase tracking-wider text-emerald-800/80 block">Visibility Status</span>
                                <div class="text-2xl font-bold font-serif text-emerald-950 mt-1">{{ $category->is_active ? 'Active' : 'Disabled' }}</div>
                                <span class="text-[11px] font-medium text-emerald-700">{{ $category->is_active ? 'Visible on storefront' : 'Hidden from buyers' }}</span>
                            </div>
                            <div class="w-12 h-12 rounded-xl bg-emerald-100/90 border border-emerald-200 text-emerald-700 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Attached Subcategories Section -->
            <div class="bg-white border border-slate-200/80 rounded-3xl p-6 sm:p-8 shadow-xs space-y-4">
                <div class="flex items-center justify-between pb-3 border-b border-slate-100 flex-wrap gap-3">
                    <div>
                        <h3 class="font-serif font-bold text-lg text-slate-900">Subcategories under {{ $category->name }}</h3>
                        <p class="text-xs text-slate-500">Fine, Coarse, Granular and customized grades registered for this category.</p>
                    </div>

                    <a href="{{ route('admin.subcategories.create') }}?category_id={{ $category->id }}" 
                        class="px-4 py-2 bg-[#e07a5f] hover:bg-[#d0694e] text-white font-semibold text-xs rounded-xl shadow-xs transition-all flex items-center gap-1.5 cursor-pointer">
                        <i class="fa-solid fa-plus text-xs"></i>
                        <span>Add Subcategory</span>
                    </a>
                </div>

                @if($category->allSubcategories && count($category->allSubcategories) > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3.5">
                    @foreach($category->allSubcategories as $sub)
                    <div class="p-4 bg-slate-50/80 hover:bg-slate-100/80 rounded-2xl border border-slate-200/80 transition-all flex items-center justify-between gap-3">
                        <div class="min-w-0">
                            <div class="flex items-center gap-2">
                                <h4 class="font-bold text-sm text-slate-900 truncate">{{ $sub->name }}</h4>
                                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold {{ $sub->is_active ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-slate-200 text-slate-600' }}">
                                    {{ $sub->is_active ? 'Active' : 'Draft' }}
                                </span>
                            </div>
                            <p class="text-xs text-slate-500 line-clamp-1 mt-0.5">{{ $sub->description ?? 'No description' }}</p>
                        </div>
                        <div class="flex items-center gap-2 shrink-0">
                            <a href="{{ route('admin.subcategories.show', $sub->id) }}" class="px-3 py-1.5 bg-sky-50 hover:bg-sky-100 text-sky-700 border border-sky-200 rounded-lg text-xs font-bold transition-all" title="View Subcategory">
                                <i class="fa-solid fa-eye text-xs"></i>
                            </a>
                            <a href="{{ route('admin.subcategories.edit', $sub->id) }}" class="px-3 py-1.5 bg-white hover:bg-slate-100 text-slate-700 border border-slate-200 rounded-lg text-xs font-bold transition-all" title="Edit Subcategory">
                                <i class="fa-solid fa-pen-to-square text-xs"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="py-8 text-center text-slate-400 bg-slate-50 rounded-2xl border border-dashed border-slate-200">
                    <i class="fa-solid fa-tags text-2xl text-slate-300 mb-2"></i>
                    <p class="text-xs">No subcategories created for this category yet.</p>
                </div>
                @endif
            </div>

            <!-- Assigned Products Section -->
            <div class="bg-white border border-slate-200/80 rounded-3xl p-6 sm:p-8 shadow-xs space-y-4">
                <div class="flex items-center justify-between pb-3 border-b border-slate-100 flex-wrap gap-3">
                    <div>
                        <h3 class="font-serif font-bold text-lg text-slate-900">Products in this Category</h3>
                        <p class="text-xs text-slate-500">All registered products assigned to {{ $category->name }}.</p>
                    </div>

                    <a href="{{ route('admin.products.create') }}?category_id={{ $category->id }}" 
                        class="px-4 py-2 bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs rounded-xl shadow-xs transition-all flex items-center gap-1.5 cursor-pointer">
                        <i class="fa-solid fa-plus text-xs"></i>
                        <span>Add Product</span>
                    </a>
                </div>

                @if($category->products && count($category->products) > 0)
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="bg-slate-50 border-b border-slate-200/80 text-[11px] font-bold text-slate-500 uppercase tracking-wider">
                                <th class="py-3 px-4">Product</th>
                                <th class="py-3 px-4">Grade & Mesh</th>
                                <th class="py-3 px-4">Price</th>
                                <th class="py-3 px-4">Status</th>
                                <th class="py-3 px-4 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach($category->products as $prod)
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ $prod->image_url ?? '/bulk.jpg' }}" alt="{{ $prod->name }}" class="w-10 h-10 rounded-xl object-cover border border-slate-200 shrink-0" onerror="this.onerror=null;this.src='/bulk.jpg';">
                                        <div>
                                            <span class="font-bold text-slate-900 block truncate max-w-[200px]">{{ $prod->name }}</span>
                                            <span class="text-slate-400 text-[10px]">{{ $prod->badge ?? 'Product' }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4">
                                    <span class="font-semibold text-slate-800 block">{{ $prod->grade ?? 'Standard Grade' }}</span>
                                    <span class="text-slate-400 text-[10px]">{{ $prod->grain_size ?? 'N/A' }}</span>
                                </td>
                                <td class="py-3 px-4 font-bold text-slate-900">
                                    @if($prod->price > 0)
                                        ${{ number_format($prod->price, 2) }} <span class="text-slate-400 text-[10px] font-normal">/ {{ ltrim($prod->price_unit ?? 'kg', '/') }}</span>
                                    @else
                                        <span class="px-2 py-0.5 bg-slate-100 text-slate-600 rounded text-[10px]">Quote</span>
                                    @endif
                                </td>
                                <td class="py-3 px-4">
                                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold {{ $prod->is_active ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-slate-100 text-slate-600' }}">
                                        {{ $prod->is_active ? 'Active' : 'Disabled' }}
                                    </span>
                                </td>
                                <td class="py-3 px-4 text-right">
                                    <a href="{{ route('admin.products.show', $prod->id) }}" class="px-3 py-1.5 bg-sky-50 hover:bg-sky-100 text-sky-700 border border-sky-200 rounded-lg text-xs font-bold transition-all inline-flex items-center gap-1">
                                        <i class="fa-solid fa-eye text-xs"></i>
                                        <span>View</span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="py-8 text-center text-slate-400 bg-slate-50 rounded-2xl border border-dashed border-slate-200">
                    <i class="fa-solid fa-cubes text-2xl text-slate-300 mb-2"></i>
                    <p class="text-xs">No products currently assigned to this category.</p>
                </div>
                @endif
            </div>

        </main>
    </div>

</body>
</html>

