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
                <a href="{{ route('admin.dashboard') }}" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer whitespace-nowrap">
                    <i class="fa-solid fa-chart-pie text-sm shrink-0"></i>
                    <span class="whitespace-nowrap">Dashboard Overview</span>
                </a>

                <!-- 2. Categories -->
                <a href="{{ route('admin.categories.index') }}" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer whitespace-nowrap">
                    <i class="fa-solid fa-layer-group text-sm shrink-0"></i>
                    <span class="whitespace-nowrap">Categories</span>
                </a>

                <!-- 3. Subcategories -->
                <a href="{{ route('admin.subcategories.index') }}" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer whitespace-nowrap">
                    <i class="fa-solid fa-tags text-sm shrink-0"></i>
                    <span class="whitespace-nowrap">Subcategories</span>
                </a>

                <!-- 4. Product Catalog (Active) -->
                <a href="{{ route('admin.products.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 bg-[#e07a5f]/10 text-[#e07a5f] font-bold rounded-xl transition-all cursor-pointer whitespace-nowrap">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-cubes text-sm shrink-0"></i>
                        <span class="whitespace-nowrap">Product Catalog</span>
                    </div>
                    <span class="px-2 py-0.5 bg-[#e07a5f] text-white text-[10px] rounded-full font-bold">{{ count($products) }}</span>
                </a>

                <!-- 5. Customer Messages -->
                <a href="{{ route('admin.dashboard') }}?tab=inquiries" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer whitespace-nowrap">
                    <i class="fa-solid fa-envelope-open-text text-sm shrink-0"></i>
                    <span class="whitespace-nowrap">Customer Messages</span>
                </a>

                <!-- 6. Blogs & Insights -->
                <a href="{{ route('admin.dashboard') }}?tab=blogs" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer whitespace-nowrap">
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
    <div class="flex-1 flex flex-col min-w-0 overflow-x-hidden">
        
        <!-- HEADER -->
        <header class="h-16 bg-white border-b border-slate-200/80 px-6 sm:px-8 flex items-center justify-between sticky top-0 z-20">
            <h1 class="font-serif font-bold text-lg text-slate-900">Product Catalog Management</h1>
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.products.create') }}" class="px-4 py-2 bg-[#e07a5f] hover:bg-[#d46a4f] text-white font-semibold text-xs rounded-xl shadow-xs transition-all flex items-center gap-2 cursor-pointer">
                    <i class="fa-solid fa-plus text-[10px]"></i> Add Salt Product
                </a>
            </div>
        </header>

        <main class="p-4 sm:p-6 max-w-7xl w-full mx-auto space-y-5">
            
            <div class="bg-white border border-slate-200/80 rounded-2xl p-4 px-5 shadow-xs flex items-center justify-between flex-wrap gap-4">
                <div>
                    <h2 class="text-xl font-bold font-serif text-slate-900">Product Catalog</h2>
                </div>
                <div class="flex items-center gap-2 flex-wrap">
                    <span class="px-3 py-1 bg-[#e07a5f]/10 text-[#e07a5f] font-bold text-xs rounded-full border border-[#e07a5f]/20">
                        <i class="fa-solid fa-cubes text-[10px] mr-1"></i> Total: {{ $totalProducts }}
                    </span>
                    <span class="px-3 py-1 bg-emerald-50 text-emerald-700 font-bold text-xs rounded-full border border-emerald-200">
                        <i class="fa-solid fa-circle-check text-[10px] mr-1"></i> Active: {{ $activeProducts }}
                    </span>
                    <span class="px-3 py-1 bg-amber-50 text-amber-700 font-bold text-xs rounded-full border border-amber-200">
                        <i class="fa-solid fa-star text-[10px] mr-1"></i> Featured: {{ $featuredProducts }}
                    </span>
                </div>
            </div>

            <!-- Products Sub-Page Datatable -->
            <div class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-xs">
                <div class="px-5 py-3.5 border-b border-slate-100 flex items-center justify-between gap-3 flex-wrap">
                    <h3 class="font-serif text-base font-bold text-slate-900">Product List</h3>

                    <form method="GET" action="{{ route('admin.products.index') }}" class="flex items-center gap-2 flex-wrap text-xs">
                        <select name="status" onchange="this.form.submit()" class="px-2.5 py-1.5 bg-slate-50 border border-slate-200 rounded-lg font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f] cursor-pointer">
                            <option value="all" {{ request('status') === 'all' || !request('status') ? 'selected' : '' }}>All Statuses</option>
                            <option value="active" {{ request('status') === 'active' ? 'selected' : '' }}>Active Only</option>
                            <option value="inactive" {{ request('status') === 'inactive' ? 'selected' : '' }}>Disabled Only</option>
                        </select>

                        <select name="category_id" onchange="this.form.submit()" class="px-2.5 py-1.5 bg-slate-50 border border-slate-200 rounded-lg font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f] cursor-pointer max-w-[140px]">
                            <option value="all">All Categories</option>
                            @foreach($categories as $c)
                            <option value="{{ $c->id }}" {{ request('category_id') == $c->id ? 'selected' : '' }}>{{ $c->name }}</option>
                            @endforeach
                        </select>

                        <select name="sort" onchange="this.form.submit()" class="px-2.5 py-1.5 bg-slate-50 border border-slate-200 rounded-lg font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f] cursor-pointer">
                            <option value="latest" {{ request('sort', 'latest') === 'latest' ? 'selected' : '' }}>Latest Added</option>
                            <option value="name_asc" {{ request('sort') === 'name_asc' ? 'selected' : '' }}>Name: A to Z</option>
                        </select>

                        <select name="per_page" onchange="this.form.submit()" class="px-2.5 py-1.5 bg-slate-50 border border-slate-200 rounded-lg font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f] cursor-pointer">
                            <option value="10" {{ request('per_page', 10) == 10 ? 'selected' : '' }}>10 / page</option>
                            <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20 / page</option>
                            <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50 / page</option>
                        </select>

                        <div class="relative w-36 sm:w-44">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search..." class="w-full pl-8 pr-7 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs focus:outline-none focus:border-[#e07a5f]">
                            @if(request('search'))
                            <a href="{{ route('admin.products.index', array_filter(request()->except('search', 'page'))) }}" class="absolute right-2.5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 text-xs">
                                <i class="fa-solid fa-xmark"></i>
                            </a>
                            @endif
                        </div>

                        <button type="submit" class="px-3 py-1.5 bg-[#e07a5f] hover:bg-[#d0694e] text-white rounded-lg font-semibold transition-colors flex items-center gap-1 cursor-pointer">
                            <i class="fa-solid fa-filter text-[10px]"></i> Filter
                        </button>

                        @if(request()->filled('search') || (request()->filled('status') && request('status') !== 'all') || (request()->filled('category_id') && request('category_id') !== 'all') || (request()->filled('sort') && request('sort') !== 'latest') || request()->filled('per_page'))
                        <a href="{{ route('admin.products.index') }}" class="px-2.5 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-lg font-semibold flex items-center gap-1 transition-colors" title="Reset all filters">
                            <i class="fa-solid fa-rotate-left text-[10px]"></i> Reset
                        </a>
                        @endif
                    </form>
                </div>

                <div class="w-full overflow-hidden">
                    <table class="w-full text-left border-collapse text-xs table-fixed">
                        <colgroup>
                            <col class="w-[50%]">
                            <col class="w-[22%]">
                            <col class="w-[11%]">
                            <col class="w-[17%]">
                        </colgroup>
                        <thead>
                            <tr class="bg-slate-50 text-slate-500 text-[11px] uppercase tracking-wider border-b border-slate-200/80">
                                <th class="py-3 px-4">Product</th>
                                <th class="py-3 px-3">Category</th>
                                <th class="py-3 px-2 text-center">Status</th>
                                <th class="py-3 px-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($products as $prod)
                            <tr class="hover:bg-slate-50/70 transition-colors">
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-3 min-w-0">
                                        @if($prod->image_url)
                                        <img src="{{ $prod->image_url }}" alt="{{ $prod->name }}" class="w-9 h-9 rounded-lg object-cover bg-slate-100 border border-slate-200 shrink-0" onerror="this.onerror=null; this.src='/bulk.jpg';">
                                        @else
                                        <div class="w-9 h-9 rounded-lg bg-slate-100 border border-dashed border-slate-300 shrink-0 flex items-center justify-center text-slate-400">
                                            <i class="fa-solid fa-cube text-slate-300 text-xs"></i>
                                        </div>
                                        @endif
                                        <div class="font-bold text-slate-900 text-xs truncate min-w-0" title="{{ $prod->name }}">{{ $prod->name }}</div>
                                    </div>
                                </td>
                                <td class="py-3 px-3">
                                    <span class="font-semibold text-slate-800 text-xs block truncate" title="{{ $prod->categoryRef->name ?? $prod->category }}">{{ $prod->categoryRef->name ?? $prod->category }}</span>
                                </td>
                                <td class="py-3 px-2 text-center whitespace-nowrap">
                                    <button type="button" @click="toggleStatus({{ $prod->id }})"
                                        class="px-2.5 py-0.5 rounded-full text-[11px] font-bold border transition-all inline-flex items-center gap-1 cursor-pointer shrink-0 {{ $prod->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200 hover:bg-emerald-100' : 'bg-slate-100 text-slate-600 border-slate-200 hover:bg-slate-200' }}"
                                        title="Click to toggle status">
                                        <span class="w-1.5 h-1.5 rounded-full {{ $prod->is_active ? 'bg-emerald-600' : 'bg-slate-400' }}"></span>
                                        <span>{{ $prod->is_active ? 'Active' : 'Disabled' }}</span>
                                    </button>
                                </td>
                                <td class="py-3 px-4 text-right whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-1.5">
                                        <a href="{{ route('admin.products.show', $prod->id) }}" class="px-2.5 py-1 bg-sky-50 hover:bg-sky-100 text-sky-700 border border-sky-200 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1 shadow-xs" title="View Product Details">
                                            <i class="fa-solid fa-eye text-[11px]"></i>
                                            <span>View</span>
                                        </a>
                                        <a href="{{ route('admin.products.edit', $prod->id) }}" class="px-2.5 py-1 bg-amber-50 hover:bg-amber-100 text-amber-700 border border-amber-200 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1 shadow-xs" title="Edit Product">
                                            <i class="fa-solid fa-pen-to-square text-[11px]"></i>
                                            <span>Edit</span>
                                        </a>
                                        <button type="button" @click="deleteProduct({{ $prod->id }}, '{{ addslashes($prod->name) }}')" class="px-2.5 py-1 bg-rose-50 hover:bg-rose-100 text-rose-600 border border-rose-200 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1 shadow-xs" title="Delete Product">
                                            <i class="fa-solid fa-trash text-[11px]"></i>
                                            <span>Delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="4" class="p-8 text-center text-slate-400">No products found matching your criteria.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Footer -->
                <div class="px-6 py-4 border-t border-slate-100 flex items-center justify-between gap-4 flex-wrap bg-slate-50/50">
                    <div class="text-xs text-slate-500 font-medium">
                        Showing <span class="font-bold text-slate-800">{{ $products->firstItem() ?? 0 }}</span> to <span class="font-bold text-slate-800">{{ $products->lastItem() ?? 0 }}</span> of <span class="font-bold text-slate-800">{{ $products->total() }}</span> products
                    </div>
                    <div>
                        {{ $products->links('admin.partials.pagination') }}
                    </div>
                </div>
            </div>

        </main>
    </div>



    <!-- Alpine Script -->
    <script>
        function adminProductsPage() {
            return {


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
    @include('admin.partials.logout-script')
</body>
</html>
