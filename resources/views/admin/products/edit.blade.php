<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50 text-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Product: {{ $product->name }} - SALTORA Admin</title>
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
        priceUnitVal: '{{ addslashes($product->price_unit ?? '') }}',
        customPriceUnit: {{ in_array($product->price_unit ?? '', ['per kg', 'per piece', 'per 25kg bag', 'per 50kg bag', 'per metric ton', 'per pouch', 'per jar', 'per bottle', 'per set', 'per slab', 'per carton', 'per pallet', '']) ? 'false' : 'true' }},
        grainSizeVal: '{{ addslashes($product->grain_size ?? $product->mesh_size ?? 'Fine Salt (0.3 - 0.8 mm)') }}',
        customGrainSize: {{ in_array($product->grain_size ?? $product->mesh_size ?? '', ['Fine Salt (0.3 - 0.8 mm)', 'Extra Fine (0.1 - 0.3 mm)', 'Medium Salt (0.8 - 2 mm)', 'Coarse Salt (2 - 5 mm)', 'Crystal Salt (5 - 8 mm)', 'Natural Rock Lump Salt', 'Not Applicable (Crafted Lamp / Tile)', '']) ? 'false' : 'true' }},
        packagingTypeVal: '{{ addslashes($product->packaging_type ?? 'Zip Pouch') }}',
        customPackagingType: {{ in_array($product->packaging_type ?? '', ['Zip Pouch', 'PET Jar', 'Glass Jar', 'Grinder Bottle', 'Shaker Bottle', 'Food Grade PP Bag', '50kg Heavy-Duty Export Bag', '1-Ton Jumbo Bag (FIBC)', 'Single Piece / Wooden Base', 'Metal Wire Basket', 'Animal Salt Lick with Hanging Rope', 'Salt Lamp Set', 'Carton Box / Pallet', 'Bulk Loose Vessel', '']) ? 'false' : 'true' }}
    }">

    <!-- LEFT SIDEBAR NAVIGATION (PERSISTENT ACROSS ADMIN) -->
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
                <a href="{{ route('admin.dashboard') }}?tab=products" class="w-full flex items-center justify-between px-3 py-2.5 bg-[#e07a5f]/10 text-[#e07a5f] font-bold rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-cubes text-sm"></i>
                        <span>Product Catalog</span>
                    </div>
                    <span class="px-2 py-0.5 bg-[#e07a5f] text-white text-[10px] rounded-full font-bold">Editing</span>
                </a>

                <!-- 5. Customer Messages -->
                <a href="{{ route('admin.dashboard') }}?tab=inquiries" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope-open-text text-sm"></i>
                        <span>Customer Messages</span>
                    </div>
                </a>

                <!-- 6. Blogs & Insights -->
                <a href="{{ route('admin.dashboard') }}?tab=blogs" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
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

        <!-- Sidebar Footer -->
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
                    <button type="submit" class="p-2 text-slate-400 hover:text-rose-600 transition-colors cursor-pointer" title="Logout">
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
                <a href="{{ route('admin.dashboard') }}?tab=products" class="p-2 rounded-lg text-slate-400 hover:text-slate-800 hover:bg-slate-100 transition-all cursor-pointer" title="Back to Catalog">
                    <i class="fa-solid fa-arrow-left text-sm"></i>
                </a>
                <div>
                    <div class="flex items-center gap-2 text-[11px] text-slate-400">
                        <a href="{{ route('admin.dashboard') }}?tab=products" class="hover:text-slate-600">Product Catalog</a>
                        <span>/</span>
                        <span class="text-slate-600 font-semibold truncate max-w-[200px]">{{ $product->name }}</span>
                    </div>
                    <h1 class="font-serif font-bold text-base sm:text-lg text-slate-900 leading-tight">Edit Product: {{ $product->name }}</h1>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('admin.dashboard') }}?tab=products" class="px-3.5 py-2 border border-slate-200 hover:bg-slate-100 text-slate-700 font-semibold text-xs rounded-xl transition-all">
                    Cancel
                </a>
                <button type="button" onclick="document.getElementById('updateBtn').click()" class="px-4 py-2 bg-[#e07a5f] hover:bg-[#d46a4f] text-white font-bold text-xs rounded-xl shadow-xs transition-all flex items-center gap-2 cursor-pointer">
                    <i class="fa-solid fa-check text-xs"></i>
                    <span>Save Changes</span>
                </button>
            </div>
        </header>

        <!-- FULL-PAGE MAIN CONTENT FORM -->
        <main class="p-4 sm:p-8 w-full max-w-7xl mx-auto space-y-6">
            
            <form id="editProductForm" class="space-y-6 text-xs">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
                    
                    <!-- LEFT 8 COLUMNS: MAIN SPECIFICATIONS -->
                    <div class="lg:col-span-8 space-y-6">

                        <!-- 1. GENERAL INFORMATION -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs space-y-4">
                            <div class="border-b border-slate-100 pb-3 flex items-center justify-between">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] flex items-center gap-2">
                                    <i class="fa-solid fa-cube"></i> Basic Product Information
                                </h3>
                                <span class="text-[10px] text-slate-400">ID #{{ $product->id }}</span>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Product Name *</label>
                                    <input type="text" name="name" value="{{ $product->name }}" required placeholder="e.g. Fine Himalayan Pink Salt, Animal Salt Lick, or Natural Salt Lamp" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 text-sm focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-slate-700 font-semibold mb-1">Product Classification / Type</label>
                                        <select name="product_type" id="product_type_select" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] cursor-pointer">
                                            <option value="pure_salt" {{ $product->product_type === 'pure_salt' ? 'selected' : '' }}>Pure Edible / Raw Salt (Mesh Grains)</option>
                                            <option value="packaged_retail" {{ $product->product_type === 'packaged_retail' ? 'selected' : '' }}>Retail Packaged Salt (Pouches / Jars / Grinders)</option>
                                            <option value="lamp_craft" {{ $product->product_type === 'lamp_craft' ? 'selected' : '' }}>Crafted Salt Lamp & Home Decor (Single Product / Set)</option>
                                            <option value="tile_brick" {{ $product->product_type === 'tile_brick' ? 'selected' : '' }}>Salt Cooking Tile / Spa Wall Brick</option>
                                            <option value="animal_lick" {{ $product->product_type === 'animal_lick' ? 'selected' : '' }}>Animal Feed Mineral Lick Salt</option>
                                            <option value="industrial" {{ $product->product_type === 'industrial' ? 'selected' : '' }}>Industrial / De-Icing Bulk Salt</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label class="block text-slate-700 font-semibold mb-1">Badge Tag</label>
                                        <input type="text" name="badge" value="{{ $product->badge }}" placeholder="e.g. Best Seller, Top Export, Food Grade" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Country / Mine of Origin</label>
                                    <input type="text" name="origin" value="{{ $product->origin ?? 'Khewra Salt Range, Punjab, Pakistan' }}" placeholder="e.g. Khewra Salt Range, Punjab, Pakistan" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>
                            </div>
                        </div>

                        <!-- 2. PRICING & ORDER SPECS -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs space-y-4">
                            <div class="border-b border-slate-100 pb-3">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] flex items-center gap-2">
                                    <i class="fa-solid fa-tag"></i> Pricing & Minimum Order Quantity (MOQ)
                                </h3>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Base Price ($ USD)</label>
                                    <div class="relative">
                                        <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 font-bold">$</span>
                                        <input type="number" step="0.01" min="0" name="price" value="{{ $product->price }}" placeholder="1.45 or 12.50" class="w-full bg-slate-50 border border-slate-300 rounded-xl pl-8 pr-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                    </div>
                                    <span class="text-[10px] text-slate-400 mt-1 block">Leave empty for "Custom Quote"</span>
                                </div>

                                <!-- Price Unit with Runtime Custom Option -->
                                <div>
                                    <div class="flex items-center justify-between mb-1">
                                        <label class="block text-slate-700 font-semibold">Price Unit</label>
                                        <button type="button" @click="customPriceUnit = !customPriceUnit" class="text-[10px] text-[#e07a5f] hover:underline font-semibold cursor-pointer">
                                            <span x-show="!customPriceUnit">+ Custom</span>
                                            <span x-show="customPriceUnit">&larr; Presets</span>
                                        </button>
                                    </div>
                                    <div x-show="!customPriceUnit">
                                        <select x-model="priceUnitVal" @change="if($event.target.value === '__custom__') { customPriceUnit = true; priceUnitVal = ''; }" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] cursor-pointer">
                                            <option value="">Select Unit (Optional)...</option>
                                            <option value="per kg">per kg</option>
                                            <option value="per piece">per piece (pcs)</option>
                                            <option value="per 25kg bag">per 25kg bag</option>
                                            <option value="per 50kg bag">per 50kg bag</option>
                                            <option value="per metric ton">per metric ton (1,000 kg)</option>
                                            <option value="per pouch">per zip pouch</option>
                                            <option value="per jar">per jar</option>
                                            <option value="per bottle">per grinder bottle</option>
                                            <option value="per set">per lamp set</option>
                                            <option value="per slab">per cooking slab / tile</option>
                                            <option value="per carton">per carton / box</option>
                                            <option value="per pallet">per pallet</option>
                                            <option value="__custom__" class="font-bold text-[#e07a5f]">+ Custom Unit...</option>
                                        </select>
                                    </div>
                                    <div x-show="customPriceUnit" x-cloak>
                                        <input type="text" x-model="priceUnitVal" placeholder="e.g. per bucket, per drum" class="w-full bg-white border border-[#e07a5f] rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:ring-1 focus:ring-[#e07a5f]">
                                    </div>
                                    <input type="hidden" name="price_unit" :value="priceUnitVal">
                                </div>

                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Minimum Order Qty (MOQ)</label>
                                    <input type="text" name="moq" value="{{ $product->moq }}" placeholder="e.g. 500 Bags, 100 Pcs, 20 MT" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>
                            </div>
                        </div>

                        <!-- 3. GRAIN SIZE & PACKAGING -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs space-y-4">
                            <div class="border-b border-slate-100 pb-3">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] flex items-center gap-2">
                                    <i class="fa-solid fa-boxes-stacked"></i> Grain Size, Packaging & Quality Standard
                                </h3>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <!-- Salt Grain / Mesh Size -->
                                <div>
                                    <div class="flex items-center justify-between mb-1">
                                        <label class="block text-slate-700 font-semibold">Salt Grain / Mesh Size</label>
                                        <button type="button" @click="customGrainSize = !customGrainSize" class="text-[10px] text-[#e07a5f] hover:underline font-semibold cursor-pointer">
                                            <span x-show="!customGrainSize">+ Custom</span>
                                            <span x-show="customGrainSize">&larr; Presets</span>
                                        </button>
                                    </div>
                                    <div x-show="!customGrainSize">
                                        <select x-model="grainSizeVal" @change="if($event.target.value === '__custom__') { customGrainSize = true; grainSizeVal = ''; }" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] cursor-pointer">
                                            <option value="Fine Salt (0.3 - 0.8 mm)">Fine Salt (0.3 - 0.8 mm)</option>
                                            <option value="Extra Fine (0.1 - 0.3 mm)">Extra Fine (0.1 - 0.3 mm)</option>
                                            <option value="Medium Salt (0.8 - 2 mm)">Medium Salt (0.8 - 2 mm)</option>
                                            <option value="Coarse Salt (2 - 5 mm)">Coarse Salt (2 - 5 mm)</option>
                                            <option value="Crystal Salt (5 - 8 mm)">Crystal Salt (5 - 8 mm)</option>
                                            <option value="Natural Rock Lump Salt">Natural Rock Lump Salt (Raw Chunk)</option>
                                            <option value="Not Applicable (Crafted Lamp / Tile)">Not Applicable (Crafted Lamp / Tile)</option>
                                            <option value="__custom__" class="font-bold text-[#e07a5f]">+ Custom Mesh...</option>
                                        </select>
                                    </div>
                                    <div x-show="customGrainSize" x-cloak>
                                        <input type="text" x-model="grainSizeVal" placeholder="Type custom mesh (e.g. 20-40 mesh, 80 mesh)" class="w-full bg-white border border-[#e07a5f] rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:ring-1 focus:ring-[#e07a5f]">
                                    </div>
                                    <input type="hidden" name="grain_size" :value="grainSizeVal">
                                    <input type="hidden" name="mesh_size" :value="grainSizeVal">
                                </div>

                                <!-- Packaging Type -->
                                <div>
                                    <div class="flex items-center justify-between mb-1">
                                        <label class="block text-slate-700 font-semibold">Packaging Type</label>
                                        <button type="button" @click="customPackagingType = !customPackagingType" class="text-[10px] text-[#e07a5f] hover:underline font-semibold cursor-pointer">
                                            <span x-show="!customPackagingType">+ Custom</span>
                                            <span x-show="customPackagingType">&larr; Presets</span>
                                        </button>
                                    </div>
                                    <div x-show="!customPackagingType">
                                        <select x-model="packagingTypeVal" @change="if($event.target.value === '__custom__') { customPackagingType = true; packagingTypeVal = ''; }" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] cursor-pointer">
                                            <option value="Zip Pouch">1. Zip Pouch (Stand-Up Resealable)</option>
                                            <option value="PET Jar">2. PET Jar (Screw Cap)</option>
                                            <option value="Glass Jar">3. Glass Jar (Flint w/ Metal Lid)</option>
                                            <option value="Grinder Bottle">4. Grinder Bottle (Ceramic Core Mill)</option>
                                            <option value="Shaker Bottle">5. Shaker Bottle (Dual Sift Top)</option>
                                            <option value="Food Grade PP Bag">6. PP Bag (Food Grade Woven with PE Liner)</option>
                                            <option value="50kg Heavy-Duty Export Bag">7. 50kg Heavy-Duty Export Bag</option>
                                            <option value="1-Ton Jumbo Bag (FIBC)">8. 1-Ton Jumbo Bag (FIBC Big Bag)</option>
                                            <option value="Single Piece / Wooden Base">9. Single Piece with Wooden Base (Salt Lamp)</option>
                                            <option value="Metal Wire Basket">10. Metal Basket + Salt Chunks (Basket Lamp)</option>
                                            <option value="Animal Salt Lick with Hanging Rope">11. Animal Salt Lick with Hanging Rope</option>
                                            <option value="Salt Lamp Set">12. Salt Lamp Set (Multi-piece Box)</option>
                                            <option value="Carton Box / Pallet">13. Carton Box / Palletized Slabs</option>
                                            <option value="Bulk Loose Vessel">14. Bulk Loose Vessel Container Load</option>
                                            <option value="__custom__" class="font-bold text-[#e07a5f]">+ Custom Packaging...</option>
                                        </select>
                                    </div>
                                    <div x-show="customPackagingType" x-cloak>
                                        <input type="text" x-model="packagingTypeVal" placeholder="Type custom packaging (e.g. 500g Kraft Pouch)" class="w-full bg-white border border-[#e07a5f] rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:ring-1 focus:ring-[#e07a5f]">
                                    </div>
                                    <input type="hidden" name="packaging_type" :value="packagingTypeVal">
                                </div>

                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Unit Weight / Capacity</label>
                                    <input type="text" name="package_weight" value="{{ $product->package_weight }}" placeholder="e.g. 500g, 25 kg, 1 Ton, 2-3 kg (Lamp)" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                    <span class="text-[10px] text-slate-400 mt-1 block">Pouches: 200g-1kg | Bags: 25kg | Lamps: 2-3kg, 3-5kg</span>
                                </div>

                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Packaging Summary Description</label>
                                    <input type="text" name="packaging" value="{{ $product->packaging }}" placeholder="e.g. 25kg Food-grade PP bag w/ PE inner liner" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>

                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Purity Grade</label>
                                    <input type="text" name="purity" value="{{ $product->purity ?? '98.8% NaCl Pure' }}" placeholder="e.g. 98.8% NaCl Pure" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>

                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Quality Standard / Certifications</label>
                                    <input type="text" name="grade" value="{{ $product->grade ?? 'Food Grade ISO 22000 / CXS 150:1985 / Halal / Kosher' }}" placeholder="e.g. Food Grade ISO-22000" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>
                            </div>
                        </div>

                        <!-- 4. DESCRIPTIONS -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs space-y-4">
                            <div class="border-b border-slate-100 pb-3">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] flex items-center gap-2">
                                    <i class="fa-solid fa-align-left"></i> Product Descriptions
                                </h3>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Short Description (Catalog Cards)</label>
                                    <textarea name="short_desc" rows="2" placeholder="Brief summary shown on catalog cards and price lists..." class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">{{ $product->short_desc }}</textarea>
                                </div>

                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Full Detailed Description (Modal & Export Specs)</label>
                                    <textarea name="full_desc" rows="4" placeholder="Detailed product specifications, packaging dimensions, mineral assay, pallet loading details..." class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">{{ $product->full_desc }}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- RIGHT 4 COLUMNS: PHOTO STUDIO, CATEGORY & PUBLISH -->
                    <div class="lg:col-span-4 space-y-6">

                        <!-- PHOTO STUDIO (ADMIN SIDE SHOW PIC) -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs space-y-4">
                            <div class="border-b border-slate-100 pb-3 flex items-center justify-between">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] flex items-center gap-2">
                                    <i class="fa-solid fa-camera"></i> Product Picture
                                </h3>
                                <span class="text-[10px] text-slate-400">High Clarity</span>
                            </div>

                            <!-- Live Picture Display Container -->
                            <div class="w-full aspect-square rounded-2xl bg-slate-100 border border-slate-200/80 overflow-hidden relative flex items-center justify-center group shadow-inner">
                                <img id="product_image_preview" src="{{ $product->image_url ?? '' }}" alt="{{ $product->name }}" class="w-full h-full object-cover {{ empty($product->image_url) ? 'hidden' : '' }} transition-all duration-300" onerror="this.classList.add('hidden'); document.getElementById('product_image_placeholder').classList.remove('hidden');">
                                
                                <div id="product_image_placeholder" class="text-center p-6 space-y-2 {{ !empty($product->image_url) ? 'hidden' : '' }}">
                                    <div class="w-16 h-16 rounded-2xl bg-white shadow-xs border border-slate-200 flex items-center justify-center mx-auto text-slate-400">
                                        <i class="fa-solid fa-cube text-2xl text-slate-300"></i>
                                    </div>
                                    <p class="text-xs font-semibold text-slate-600">No Image Uploaded</p>
                                    <p class="text-[10px] text-slate-400">Select a computer file or enter URL below</p>
                                </div>

                                <button type="button" id="clear_image_btn" class="{{ empty($product->image_url) ? 'hidden' : '' }} absolute top-3 right-3 p-2 rounded-xl bg-slate-900/80 hover:bg-rose-600 text-white text-xs transition-all shadow-md cursor-pointer" title="Remove / Clear Photo">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>

                            <!-- Upload Options -->
                            <div class="space-y-3 pt-2">
                                <div>
                                    <label class="block text-slate-800 font-semibold mb-1">Replace Image from Computer</label>
                                    <input type="file" id="image_file_input" name="image_file" accept="image/*" class="block w-full text-xs text-slate-500 file:mr-3 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-900 file:text-white hover:file:bg-slate-800 cursor-pointer">
                                </div>

                                <div>
                                    <label class="block text-slate-800 font-semibold mb-1">Direct Image URL or Path</label>
                                    <input type="text" id="image_url_input" name="image_url" value="{{ $product->image_url }}" placeholder="e.g. /product1.jpg or https://..." class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 text-xs focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>
                            </div>
                        </div>

                        <!-- CATEGORY & SUBCATEGORY -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs space-y-4">
                            <div class="border-b border-slate-100 pb-3">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] flex items-center gap-2">
                                    <i class="fa-solid fa-folder-tree"></i> Organization
                                </h3>
                            </div>

                            <div class="space-y-3">
                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Category *</label>
                                    <select name="category_id" id="category_id_select" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] cursor-pointer font-semibold">
                                        <option value="">Select Category *</option>
                                        @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}" data-subcategories="{{ json_encode($cat->allSubcategories) }}" {{ (string)$product->category_id === (string)$cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Subcategory *</label>
                                    <select name="subcategory_id" id="subcategory_id_select" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] cursor-pointer font-semibold">
                                        <option value="">Select Subcategory *</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- VISIBILITY & PUBLISHING -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs space-y-4">
                            <div class="border-b border-slate-100 pb-3">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] flex items-center gap-2">
                                    <i class="fa-solid fa-sliders"></i> Status & Visibility
                                </h3>
                            </div>

                            <div class="space-y-3">
                                <label class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 hover:bg-slate-100/80 border border-slate-200/60 cursor-pointer transition-all">
                                    <input type="checkbox" name="is_active" value="1" {{ $product->is_active ? 'checked' : '' }} class="w-4 h-4 rounded border-slate-300 text-[#e07a5f] focus:ring-[#e07a5f]">
                                    <div>
                                        <span class="text-slate-800 font-bold block">Active & Published</span>
                                        <span class="text-[10px] text-slate-500">Visible to global buyers in store catalog</span>
                                    </div>
                                </label>

                                <label class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 hover:bg-slate-100/80 border border-slate-200/60 cursor-pointer transition-all">
                                    <input type="checkbox" name="is_featured" value="1" {{ $product->is_featured ? 'checked' : '' }} class="w-4 h-4 rounded border-slate-300 text-[#e07a5f] focus:ring-[#e07a5f]">
                                    <div>
                                        <span class="text-slate-800 font-bold block">Feature on Homepage</span>
                                        <span class="text-[10px] text-slate-500">Highlight in front-page export spotlight</span>
                                    </div>
                                </label>
                            </div>

                            <div class="pt-4 border-t border-slate-100 space-y-2">
                                <button type="submit" id="updateBtn" class="w-full py-3 bg-[#e07a5f] hover:bg-[#d46a4f] text-white font-bold rounded-xl shadow-md shadow-[#e07a5f]/20 transition-all flex items-center justify-center gap-2 cursor-pointer text-sm">
                                    <i class="fa-solid fa-check text-xs"></i>
                                    <span>Update Product</span>
                                </button>
                                <a href="{{ route('admin.dashboard') }}?tab=products" class="w-full py-2.5 border border-slate-300 hover:bg-slate-100 text-slate-600 font-semibold rounded-xl text-center block transition-all">
                                    Cancel & Return
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </form>

        </main>
    </div>

    <!-- SCRIPTS -->
    <script>
        const initialSubcategoryId = "{{ $product->subcategory_id }}";

        // Dynamic Subcategories Population
        function populateSubcategories() {
            const catSelect = document.getElementById('category_id_select');
            const subSelect = document.getElementById('subcategory_id_select');
            if (!catSelect || !subSelect) return;
            const currentSubVal = subSelect.value || initialSubcategoryId;
            subSelect.innerHTML = '<option value="">Select Subcategory *</option>';
            const selectedOpt = catSelect.options[catSelect.selectedIndex];
            if (selectedOpt && selectedOpt.dataset.subcategories) {
                try {
                    const subs = JSON.parse(selectedOpt.dataset.subcategories);
                    subs.forEach(s => {
                        const opt = document.createElement('option');
                        opt.value = s.id;
                        opt.textContent = s.name;
                        if (currentSubVal && String(currentSubVal) === String(s.id)) opt.selected = true;
                        subSelect.appendChild(opt);
                    });
                } catch(e) {
                    console.error('Error parsing subcategories', e);
                }
            }
        }
        document.getElementById('category_id_select').addEventListener('change', populateSubcategories);
        document.addEventListener('DOMContentLoaded', populateSubcategories);

        // Photo Studio Live Preview
        const previewEl = document.getElementById('product_image_preview');
        const placeholderEl = document.getElementById('product_image_placeholder');
        const clearBtn = document.getElementById('clear_image_btn');
        const fileInput = document.getElementById('image_file_input');
        const urlInput = document.getElementById('image_url_input');

        function showPreview(src) {
            if (src && src.trim() !== '') {
                previewEl.src = src;
                previewEl.classList.remove('hidden');
                placeholderEl.classList.add('hidden');
                clearBtn.classList.remove('hidden');
            } else {
                hidePreview();
            }
        }

        function hidePreview() {
            previewEl.src = '';
            previewEl.classList.add('hidden');
            placeholderEl.classList.remove('hidden');
            clearBtn.classList.add('hidden');
        }

        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                showPreview(URL.createObjectURL(file));
            }
        });

        urlInput.addEventListener('input', function(e) {
            const val = e.target.value.trim();
            if (val) {
                showPreview(val);
            } else if (!fileInput.files.length) {
                hidePreview();
            }
        });

        clearBtn.addEventListener('click', function() {
            fileInput.value = '';
            urlInput.value = '';
            hidePreview();
        });

        // Form Submission with SweetAlert2
        document.getElementById('editProductForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const btn = document.getElementById('updateBtn');
            btn.disabled = true;
            btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin text-xs"></i> Updating...';

            try {
                const response = await fetch('/admin/products/{{ $product->id }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json'
                    },
                    body: new FormData(this)
                });

                const data = await response.json();
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Product Updated!',
                        text: data.message,
                        background: '#ffffff',
                        color: '#1e293b',
                        confirmButtonColor: '#e07a5f'
                    }).then(() => {
                        window.location.href = "{{ route('admin.dashboard') }}?tab=products";
                    });
                } else {
                    Swal.fire({ icon: 'error', title: 'Error', text: data.message || 'Validation error', background: '#ffffff', color: '#1e293b' });
                    btn.disabled = false;
                    btn.innerHTML = '<i class="fa-solid fa-check text-xs"></i> Update Product';
                }
            } catch (err) {
                Swal.fire({ icon: 'error', title: 'Network Error', text: 'Operation failed.', background: '#ffffff', color: '#1e293b' });
                btn.disabled = false;
                btn.innerHTML = '<i class="fa-solid fa-check text-xs"></i> Update Product';
            }
        });
    </script>
    @include('admin.partials.logout-script')
</body>
</html>
