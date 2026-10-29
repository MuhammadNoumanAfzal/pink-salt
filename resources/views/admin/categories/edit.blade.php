<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50 text-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Category: {{ $category->name }} - SALTORA Admin</title>
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
<body class="min-h-full font-sans antialiased bg-slate-50 text-slate-800 flex"
    x-data="{
        nameVal: '{{ old('name', addslashes($category->name)) }}',
        slugVal: '{{ $category->slug }}',
        imageMode: 'file',
        previewSrc: '{{ $category->image_url }}',
        updateSlug() {
            this.slugVal = this.nameVal.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');
        },
        previewImage(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (ev) => { this.previewSrc = ev.target.result; };
                reader.readAsDataURL(file);
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
                <a href="{{ route('admin.categories.show', $category->id) }}" class="p-2 rounded-lg text-slate-400 hover:text-slate-800 hover:bg-slate-100 transition-all" title="Back to Category Details">
                    <i class="fa-solid fa-arrow-left text-sm"></i>
                </a>
                <div>
                    <div class="flex items-center gap-2 text-[11px] text-slate-400">
                        <a href="{{ route('admin.categories.index') }}" class="hover:text-slate-600">Categories</a>
                        <span>/</span>
                        <a href="{{ route('admin.categories.show', $category->id) }}" class="hover:text-slate-600 truncate max-w-[120px]">{{ $category->name }}</a>
                        <span>/</span>
                        <span class="text-slate-600 font-semibold">Edit</span>
                    </div>
                    <h1 class="font-serif font-bold text-base sm:text-lg text-slate-900 leading-tight">Edit Category: {{ $category->name }}</h1>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('admin.categories.show', $category->id) }}" class="px-4 py-2 border border-slate-200 text-slate-700 font-semibold text-xs rounded-xl hover:bg-slate-100 transition-all">
                    Cancel
                </a>
                <button type="submit" form="categoryEditForm" class="px-5 py-2 bg-[#e07a5f] hover:bg-[#d0694e] text-white font-semibold text-xs rounded-xl shadow-xs transition-all flex items-center gap-2 cursor-pointer">
                    <i class="fa-solid fa-floppy-disk text-xs"></i>
                    <span>Update Category</span>
                </button>
            </div>
        </header>

        <!-- PAGE CONTENT -->
        <main class="p-4 sm:p-8 max-w-4xl w-full mx-auto space-y-6">

            @if ($errors->any())
            <div class="bg-rose-50 border border-rose-200 text-rose-800 rounded-2xl p-4 text-xs space-y-1">
                <div class="font-bold flex items-center gap-2 text-rose-700">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <span>Please correct the errors below:</span>
                </div>
                <ul class="list-disc list-inside pl-2 space-y-0.5">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form id="categoryEditForm" action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- General Information Card -->
                <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs space-y-5">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                        <h2 class="font-serif font-bold text-base text-slate-900 flex items-center gap-2">
                            <i class="fa-solid fa-layer-group text-[#e07a5f] text-sm"></i>
                            <span>Category Information</span>
                        </h2>
                        <span class="text-[11px] text-slate-400 font-medium">* Required fields</span>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Category Name *</label>
                            <input type="text" name="name" x-model="nameVal" @input="updateSlug()" required
                                value="{{ old('name', $category->name) }}"
                                placeholder="e.g. Pink Salt Lamps, Edible Pink Salt"
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs sm:text-sm font-medium text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] focus:ring-1 focus:ring-[#e07a5f] transition-all">
                            <div class="mt-1 text-[11px] text-slate-400">
                                Permanent URL Slug: <span class="font-mono text-slate-600">/category/<span x-text="slugVal || '{{ $category->slug }}'"></span></span>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Description</label>
                            <textarea name="description" rows="4"
                                placeholder="Detailed overview of this Himalayan salt grade category, suitable applications, purity specifications, etc."
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs sm:text-sm font-medium text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] focus:ring-1 focus:ring-[#e07a5f] transition-all">{{ old('description', $category->description) }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Media / Image Card -->
                <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs space-y-5">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                        <h2 class="font-serif font-bold text-base text-slate-900 flex items-center gap-2">
                            <i class="fa-solid fa-image text-[#e07a5f] text-sm"></i>
                            <span>Category Image & Banner</span>
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-center">
                        <div class="space-y-3">
                            <div class="flex items-center gap-2 mb-2">
                                <button type="button" @click="imageMode = 'file'" 
                                    :class="imageMode === 'file' ? 'bg-[#e07a5f] text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'"
                                    class="px-3 py-1 rounded-lg text-xs font-bold transition-colors cursor-pointer">
                                    <i class="fa-solid fa-upload mr-1"></i> Upload Replacement
                                </button>
                                <button type="button" @click="imageMode = 'url'" 
                                    :class="imageMode === 'url' ? 'bg-[#e07a5f] text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'"
                                    class="px-3 py-1 rounded-lg text-xs font-bold transition-colors cursor-pointer">
                                    <i class="fa-solid fa-link mr-1"></i> Image URL
                                </button>
                            </div>

                            <div x-show="imageMode === 'file'">
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Upload New Image</label>
                                <input type="file" name="image_file" @change="previewImage($event)" accept="image/*"
                                    class="w-full text-xs text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-[#e07a5f]/10 file:text-[#e07a5f] hover:file:bg-[#e07a5f]/20 cursor-pointer">
                                <p class="text-[10px] text-slate-400 mt-1">Leave empty to keep existing image. Supports WebP, JPG, PNG up to 4MB.</p>
                            </div>

                            <div x-show="imageMode === 'url'" x-cloak>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Direct Image URL</label>
                                <input type="text" name="image_url" value="{{ old('image_url', $category->image_url) }}"
                                    @input="previewSrc = $event.target.value"
                                    placeholder="https://images.unsplash.com/... or /category.jpg"
                                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs sm:text-sm font-medium text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] transition-all">
                            </div>
                        </div>

                        <!-- Preview Area -->
                        <div class="flex flex-col items-center justify-center p-4 bg-slate-50 border border-dashed border-slate-200 rounded-2xl text-center">
                            <template x-if="previewSrc">
                                <div class="space-y-2 w-full">
                                    <img :src="previewSrc" alt="Preview" class="w-full h-40 object-cover rounded-xl shadow-xs border border-slate-200" onerror="this.onerror=null;this.src='/product1.jpg';">
                                    <span class="text-[10px] font-bold text-slate-500 block">Current Image Preview</span>
                                </div>
                            </template>
                            <template x-if="!previewSrc">
                                <div class="py-6 space-y-2 text-slate-400">
                                    <i class="fa-regular fa-image text-4xl"></i>
                                    <p class="text-xs">No image configured</p>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>

                <!-- Status Settings Card -->
                <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs flex items-center justify-between">
                    <div>
                        <h2 class="font-serif font-bold text-base text-slate-900">Visibility & Status</h2>
                        <p class="text-xs text-slate-500 mt-0.5">Control whether this category and its products are visible to storefront shoppers.</p>
                    </div>

                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $category->is_active) ? 'checked' : '' }} class="sr-only peer">
                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-emerald-500"></div>
                        <span class="ml-3 text-xs font-bold text-slate-700">Active</span>
                    </label>
                </div>

                <!-- Bottom Action Row -->
                <div class="flex items-center justify-end gap-3 pt-4">
                    <a href="{{ route('admin.categories.show', $category->id) }}" class="px-5 py-2.5 border border-slate-200 text-slate-700 font-semibold text-xs rounded-xl hover:bg-slate-100 transition-all">
                        Cancel
                    </a>
                    <button type="submit" class="px-6 py-2.5 bg-[#e07a5f] hover:bg-[#d0694e] text-white font-bold text-xs rounded-xl shadow-md transition-all flex items-center gap-2 cursor-pointer">
                        <i class="fa-solid fa-floppy-disk text-xs"></i>
                        <span>Update Category</span>
                    </button>
                </div>
            </form>

        </main>
    </div>

</body>
</html>

