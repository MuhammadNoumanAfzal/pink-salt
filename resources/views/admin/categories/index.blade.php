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
                <a href="{{ route('admin.dashboard') }}" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer whitespace-nowrap">
                    <i class="fa-solid fa-chart-pie text-sm shrink-0"></i>
                    <span class="whitespace-nowrap">Dashboard Overview</span>
                </a>

                <!-- 2. Categories -->
                <a href="{{ route('admin.categories.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 bg-[#e07a5f]/10 text-[#e07a5f] font-bold rounded-xl transition-all cursor-pointer whitespace-nowrap">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-layer-group text-sm shrink-0"></i>
                        <span class="whitespace-nowrap">Categories</span>
                    </div>
                    <span class="px-2 py-0.5 bg-[#e07a5f] text-white text-[10px] font-bold rounded-full">{{ count($categories) }}</span>
                </a>

                <!-- 3. Subcategories -->
                <a href="{{ route('admin.subcategories.index') }}" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer whitespace-nowrap">
                    <i class="fa-solid fa-tags text-sm shrink-0"></i>
                    <span class="whitespace-nowrap">Subcategories</span>
                </a>

                <!-- 4. Product Catalog -->
                <a href="{{ route('admin.products.index') }}" class="w-full flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer whitespace-nowrap">
                    <i class="fa-solid fa-cubes text-sm shrink-0"></i>
                    <span class="whitespace-nowrap">Product Catalog</span>
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

            <a href="{{ route('admin.categories.create') }}" class="bg-[#e07a5f] hover:bg-[#d46a4f] text-white px-4 py-2 rounded-xl text-xs font-bold tracking-wider uppercase transition-all shadow-md flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-plus text-sm"></i>
                <span>Add Category</span>
            </a>
        </header>

        <!-- Page Body -->
        <main class="p-6 md:p-8 space-y-6 max-w-7xl">

            <!-- Stats Bar -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3.5">
                <div class="bg-white p-3.5 px-4 rounded-xl border border-slate-200/80 shadow-xs flex items-center justify-between">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Total Categories</span>
                        <div class="text-xl font-bold font-sans text-slate-900 tracking-tight mt-0.5">{{ $totalCategories }}</div>
                    </div>
                    <div class="w-9 h-9 rounded-lg bg-[#e07a5f]/10 text-[#e07a5f] flex items-center justify-center font-bold text-sm shrink-0">
                        <i class="fa-solid fa-folder-tree"></i>
                    </div>
                </div>

                <div class="bg-white p-3.5 px-4 rounded-xl border border-slate-200/80 shadow-xs flex items-center justify-between">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Active Categories</span>
                        <div class="text-xl font-bold font-sans text-emerald-600 tracking-tight mt-0.5">{{ $activeCategories }}</div>
                    </div>
                    <div class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-sm shrink-0">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                </div>

                <div class="bg-white p-3.5 px-4 rounded-xl border border-slate-200/80 shadow-xs flex items-center justify-between">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Total Subcategories</span>
                        <div class="text-xl font-bold font-sans text-amber-600 tracking-tight mt-0.5">{{ $totalSubcategories }}</div>
                    </div>
                    <div class="w-9 h-9 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-sm shrink-0">
                        <i class="fa-solid fa-diagram-nested"></i>
                    </div>
                </div>
            </div>

            <!-- Categories Table Container -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between gap-4 flex-wrap">
                    <h3 class="font-serif text-base font-bold text-slate-900">All Categories</h3>
                    
                    <form method="GET" action="{{ route('admin.categories.index') }}" class="flex items-center gap-3 flex-wrap">
                        <select name="status" onchange="this.form.submit()" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f] cursor-pointer">
                            <option value="all" {{ request('status') === 'all' || !request('status') ? 'selected' : '' }}>All Statuses</option>
                            <option value="active" {{ request('status') === 'active' ? 'selected' : '' }}>Active Only</option>
                            <option value="inactive" {{ request('status') === 'inactive' ? 'selected' : '' }}>Inactive Only</option>
                        </select>

                        <select name="per_page" onchange="this.form.submit()" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none focus:border-[#e07a5f] cursor-pointer">
                            <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5 per page</option>
                            <option value="10" {{ request('per_page', 10) == 10 ? 'selected' : '' }}>10 per page</option>
                            <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25 per page</option>
                            <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50 per page</option>
                        </select>

                        <div class="relative w-64">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Filter categories..." class="w-full pl-9 pr-8 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs focus:outline-none focus:border-[#e07a5f]">
                            @if(request('search'))
                            <a href="{{ route('admin.categories.index', array_filter(request()->except('search', 'page'))) }}" class="absolute right-2.5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 text-xs">
                                <i class="fa-solid fa-xmark"></i>
                            </a>
                            @endif
                        </div>

                        <button type="submit" class="px-3 py-1.5 bg-[#e07a5f] hover:bg-[#d0694e] text-white rounded-lg text-xs font-semibold transition-colors flex items-center gap-1 cursor-pointer">
                            <i class="fa-solid fa-filter text-[10px]"></i> Filter
                        </button>

                        @if(request()->filled('search') || (request()->filled('status') && request('status') !== 'all') || request()->filled('per_page'))
                        <a href="{{ route('admin.categories.index') }}" class="px-3 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-lg text-xs font-semibold flex items-center gap-1 transition-colors" title="Reset all filters">
                            <i class="fa-solid fa-rotate-left text-[10px]"></i> Reset
                        </a>
                        @endif
                    </form>
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
                            <tr class="hover:bg-slate-50/80 transition-colors">
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
                                        <a href="{{ route('admin.categories.show', $category->id) }}" class="px-2.5 py-1.5 bg-sky-50 hover:bg-sky-100 text-sky-700 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1" title="View Details">
                                            <i class="fa-solid fa-eye text-xs"></i>
                                            <span>View</span>
                                        </a>
                                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="px-2.5 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1" title="Edit Category">
                                            <i class="fa-solid fa-pen-to-square text-xs"></i>
                                            <span>Edit</span>
                                        </a>
                                        <button @click="deleteCategory({{ $category->id }}, '{{ addslashes($category->name) }}')" class="px-2.5 py-1.5 bg-rose-50 hover:bg-rose-100 text-rose-600 rounded-lg text-xs font-bold transition-all cursor-pointer flex items-center gap-1" title="Delete Category">
                                            <i class="fa-solid fa-trash text-xs"></i>
                                            <span>Delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="py-8 text-center text-slate-400">No categories found matching your criteria.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Footer -->
                <div class="px-6 py-4 border-t border-slate-100 flex items-center justify-between gap-4 flex-wrap bg-slate-50/50">
                    <div class="text-xs text-slate-500 font-medium">
                        Showing <span class="font-bold text-slate-800">{{ $categories->firstItem() ?? 0 }}</span> to <span class="font-bold text-slate-800">{{ $categories->lastItem() ?? 0 }}</span> of <span class="font-bold text-slate-800">{{ $categories->total() }}</span> categories
                    </div>
                    <div>
                        {{ $categories->links('admin.partials.pagination') }}
                    </div>
                </div>
            </div>

        </main>
    </div>

    <!-- Category Actions Script -->
    <script>
        function categoryManager() {
            return {
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
