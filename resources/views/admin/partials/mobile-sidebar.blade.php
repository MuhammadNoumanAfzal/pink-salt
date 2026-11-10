<!-- Mobile Drawer Backdrop & Sidebar Navigation -->
<div x-show="mobileSidebarOpen" 
     x-cloak
     class="fixed inset-0 z-50 md:hidden"
     role="dialog" 
     aria-modal="true">
    <!-- Backdrop overlay -->
    <div x-show="mobileSidebarOpen"
         x-transition:enter="transition-opacity ease-linear duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="mobileSidebarOpen = false"
         class="fixed inset-0 bg-slate-900/60 backdrop-blur-xs"></div>

    <!-- Drawer Panel -->
    <div x-show="mobileSidebarOpen"
         x-transition:enter="transition ease-in-out duration-300 transform"
         x-transition:enter-start="-translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in-out duration-300 transform"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="-translate-x-full"
         class="relative flex flex-col max-w-[280px] w-full bg-white h-full shadow-2xl z-10 overflow-y-auto">
        
        <!-- Header with Brand & Close Button -->
        <div class="h-16 flex items-center justify-between px-5 border-b border-slate-100 shrink-0">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-[#e07a5f] to-[#d4a373] p-0.5 shadow-md shadow-[#e07a5f]/20">
                    <div class="w-full h-full bg-white rounded-[9px] flex items-center justify-center">
                        <img src="/logo.png" alt="SALTORA Logo" class="w-5 h-5 object-contain">
                    </div>
                </div>
                <div>
                    <span class="font-serif text-lg font-bold tracking-wider text-slate-900 block leading-none">SALTORA</span>
                    <span class="text-[9px] font-bold text-[#e07a5f] uppercase tracking-widest block mt-0.5">Admin Navigation</span>
                </div>
            </div>
            <button type="button" @click="mobileSidebarOpen = false" class="p-2 text-slate-400 hover:text-slate-800 rounded-lg hover:bg-slate-100 transition-colors cursor-pointer" aria-label="Close menu">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>
        </div>

        <!-- Navigation Links -->
        <nav class="p-4 space-y-1 text-xs font-semibold flex-1">
            <!-- 1. Dashboard Overview -->
            <a href="{{ route('admin.dashboard') }}" 
               class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all cursor-pointer {{ request()->routeIs('admin.dashboard') && !request('tab') ? 'bg-[#e07a5f]/10 text-[#e07a5f] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                <i class="fa-solid fa-chart-pie text-sm shrink-0"></i>
                <span>Dashboard Overview</span>
            </a>

            <!-- 2. Categories -->
            <a href="{{ route('admin.categories.index') }}" 
               class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all cursor-pointer {{ request()->routeIs('admin.categories.*') ? 'bg-[#e07a5f]/10 text-[#e07a5f] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                <i class="fa-solid fa-layer-group text-sm shrink-0"></i>
                <span>Categories</span>
            </a>

            <!-- 3. Subcategories -->
            <a href="{{ route('admin.subcategories.index') }}" 
               class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all cursor-pointer {{ request()->routeIs('admin.subcategories.*') ? 'bg-[#e07a5f]/10 text-[#e07a5f] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                <i class="fa-solid fa-tags text-sm shrink-0"></i>
                <span>Subcategories</span>
            </a>

            <!-- 4. Product Catalog -->
            <a href="{{ route('admin.products.index') }}" 
               class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all cursor-pointer {{ request()->routeIs('admin.products.*') ? 'bg-[#e07a5f]/10 text-[#e07a5f] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                <i class="fa-solid fa-cubes text-sm shrink-0"></i>
                <span>Product Catalog</span>
            </a>

            <!-- 5. Customer Messages / Inquiries -->
            <a href="{{ route('admin.dashboard') }}?tab=inquiries" 
               class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all cursor-pointer {{ request('tab') === 'inquiries' ? 'bg-[#e07a5f]/10 text-[#e07a5f] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                <i class="fa-solid fa-envelope-open-text text-sm shrink-0"></i>
                <span>Customer Messages</span>
            </a>

            <!-- 6. Store Orders -->
            <a href="{{ route('admin.dashboard') }}?tab=orders" 
               class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all cursor-pointer {{ request('tab') === 'orders' ? 'bg-[#e07a5f]/10 text-[#e07a5f] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                <i class="fa-solid fa-box-archive text-sm shrink-0"></i>
                <span>Store Orders</span>
            </a>

            <!-- 7. Blogs & Insights -->
            <a href="{{ route('admin.dashboard') }}?tab=blogs" 
               class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all cursor-pointer {{ request('tab') === 'blogs' || request()->routeIs('admin.blogs.*') ? 'bg-[#e07a5f]/10 text-[#e07a5f] font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                <i class="fa-solid fa-newspaper text-sm shrink-0"></i>
                <span>Blogs & Insights</span>
            </a>

            <div class="pt-4 border-t border-slate-100">
                <a href="{{ route('home') }}" target="_blank" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-500 hover:bg-slate-50 hover:text-slate-800 transition-all text-left cursor-pointer">
                    <i class="fa-solid fa-store text-sm text-[#e07a5f]"></i>
                    <span>View Live Store</span>
                    <i class="fa-solid fa-arrow-up-right-from-square text-[9px] ml-auto opacity-60"></i>
                </a>
            </div>
        </nav>

        <!-- Sidebar Footer / Logout -->
        <div class="p-4 border-t border-slate-100 bg-slate-50/50 shrink-0">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3 min-w-0">
                    <div class="w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center font-bold text-xs shrink-0">
                        {{ strtoupper(substr(Auth::user()->name ?? 'Admin', 0, 2)) }}
                    </div>
                    <div class="text-xs overflow-hidden min-w-0">
                        <span class="font-bold text-slate-900 block truncate">{{ Auth::user()->name ?? 'Store Manager' }}</span>
                        <span class="text-[10px] text-slate-500 block truncate">{{ Auth::user()->email ?? 'admin@saltora.com' }}</span>
                    </div>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST" class="shrink-0">
                    @csrf
                    <button type="submit" class="p-2 text-slate-400 hover:text-rose-600 transition-colors cursor-pointer" title="Logout">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
