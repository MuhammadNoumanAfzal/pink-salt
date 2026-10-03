<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50 text-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Product - {{ $product->name }} - SALTORA Admin</title>
    <link rel="icon" type="image/png" href="/logo.png">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="min-h-full font-sans antialiased bg-slate-50 text-slate-800 flex">

    <!-- MAIN CONTENT -->
    <div class="flex-1 flex flex-col min-w-0">
        
        <!-- HEADER -->
        <header class="h-16 bg-white border-b border-slate-200/80 px-8 flex items-center justify-between sticky top-0 z-20">
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.products.index') }}" class="p-2 text-slate-400 hover:text-slate-800 transition-colors">
                    <i class="fa-solid fa-arrow-left text-base"></i>
                </a>
                <h1 class="font-serif font-bold text-lg text-slate-900">Edit Product: {{ $product->name }}</h1>
            </div>
            <a href="{{ route('admin.products.index') }}" class="px-4 py-2 border border-slate-300 hover:bg-slate-100 text-slate-700 font-semibold text-xs rounded-xl transition-all">
                Cancel & Return
            </a>
        </header>

        <main class="p-8 max-w-4xl w-full mx-auto space-y-6">
            
            <div class="bg-white border border-slate-200/80 rounded-2xl p-8 shadow-sm">
                <div class="mb-6 border-b border-slate-100 pb-4">
                    <h2 class="text-xl font-bold font-serif text-slate-900">Update Product Specifications</h2>
                    <p class="text-xs text-slate-500">Edit price, unit, grain sizes, packaging specifications (pouches/jars/PP bags/lamps), and catalog visibility.</p>
                </div>

                <form id="editProductForm" class="space-y-6 text-xs">
                    @csrf
                    @method('PUT')

                    <!-- 1. GENERAL INFORMATION -->
                    <div>
                        <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] mb-3 flex items-center gap-2">
                            <i class="fa-solid fa-cube"></i> Basic Product Information
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Product Name *</label>
                                <input type="text" name="name" value="{{ $product->name }}" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            </div>

                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Product Classification / Type</label>
                                <select name="product_type" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                    <option value="pure_salt" {{ $product->product_type == 'pure_salt' ? 'selected' : '' }}>Pure Edible / Raw Salt (Mesh Grains)</option>
                                    <option value="packaged_retail" {{ $product->product_type == 'packaged_retail' ? 'selected' : '' }}>Retail Packaged Salt (Pouches / Jars / Grinders)</option>
                                    <option value="lamp_craft" {{ $product->product_type == 'lamp_craft' ? 'selected' : '' }}>Crafted Salt Lamp & Home Decor (Single Product / Set)</option>
                                    <option value="tile_brick" {{ $product->product_type == 'tile_brick' ? 'selected' : '' }}>Salt Cooking Tile / Spa Wall Brick</option>
                                    <option value="animal_lick" {{ $product->product_type == 'animal_lick' ? 'selected' : '' }}>Animal Feed Mineral Lick Salt</option>
                                    <option value="industrial" {{ $product->product_type == 'industrial' ? 'selected' : '' }}>Industrial / De-Icing Bulk Salt</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Category *</label>
                                <select name="category_id" id="category_id_select" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                    <option value="">Select Category...</option>
                                    @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }} data-subcategories="{{ json_encode($cat->allSubcategories) }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Subcategory</label>
                                <select name="subcategory_id" id="subcategory_id_select" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                    <option value="">Select Subcategory...</option>
                                    @if($product->categoryRef)
                                        @foreach($product->categoryRef->allSubcategories as $sub)
                                        <option value="{{ $sub->id }}" {{ $product->subcategory_id == $sub->id ? 'selected' : '' }}>{{ $sub->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Badge Tag</label>
                                <input type="text" name="badge" value="{{ $product->badge }}" placeholder="e.g. Best Seller, Top Export, Artisanal" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            </div>

                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Country of Origin</label>
                                <input type="text" name="origin" value="{{ $product->origin ?? 'Khewra Salt Range, Pakistan' }}" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            </div>
                        </div>
                    </div>

                    <!-- 2. PRICING & ORDER SPECS -->
                    <div class="pt-4 border-t border-slate-100">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] mb-3 flex items-center gap-2">
                            <i class="fa-solid fa-tag"></i> Pricing & Minimum Order (MOQ)
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Base Price ($ USD)</label>
                                <div class="relative">
                                    <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 font-bold">$</span>
                                    <input type="number" step="0.01" min="0" name="price" value="{{ $product->price }}" placeholder="1.45 or 12.50" class="w-full bg-slate-50 border border-slate-300 rounded-xl pl-8 pr-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>
                            </div>

                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Price Unit *</label>
                                <select name="price_unit" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                    @php $pu = $product->price_unit ?? 'per kg'; @endphp
                                    <option value="per kg" {{ $pu == 'per kg' ? 'selected' : '' }}>per kg</option>
                                    <option value="per piece" {{ $pu == 'per piece' ? 'selected' : '' }}>per piece (pcs)</option>
                                    <option value="per 25kg bag" {{ $pu == 'per 25kg bag' ? 'selected' : '' }}>per 25kg bag</option>
                                    <option value="per metric ton" {{ $pu == 'per metric ton' ? 'selected' : '' }}>per metric ton (1,000 kg)</option>
                                    <option value="per pouch" {{ $pu == 'per pouch' ? 'selected' : '' }}>per zip pouch</option>
                                    <option value="per jar" {{ $pu == 'per jar' ? 'selected' : '' }}>per jar</option>
                                    <option value="per bottle" {{ $pu == 'per bottle' ? 'selected' : '' }}>per grinder bottle</option>
                                    <option value="per set" {{ $pu == 'per set' ? 'selected' : '' }}>per lamp set</option>
                                    <option value="per slab" {{ $pu == 'per slab' ? 'selected' : '' }}>per cooking slab / tile</option>
                                    <option value="per carton" {{ $pu == 'per carton' ? 'selected' : '' }}>per carton / box</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Minimum Order Qty (MOQ)</label>
                                <input type="text" name="moq" value="{{ $product->moq }}" placeholder="e.g. 500 Bags, 100 Pcs, 20 MT" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            </div>
                        </div>
                    </div>

                    <!-- 3. GRAIN SIZE & PACKAGING -->
                    <div class="pt-4 border-t border-slate-100">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] mb-3 flex items-center gap-2">
                            <i class="fa-solid fa-boxes-stacked"></i> Grain Size, Packaging & Unit Weight
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Salt Grain / Mesh Size</label>
                                <select name="grain_size" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                    @php $gs = $product->grain_size ?? $product->mesh_size; @endphp
                                    <option value="Fine Salt (0.3 - 0.8 mm)" {{ str_contains($gs ?? '', 'Fine') || str_contains($gs ?? '', '0.3') ? 'selected' : '' }}>Fine Salt (0.3 - 0.8 mm)</option>
                                    <option value="Medium Salt (0.8 - 2 mm)" {{ str_contains($gs ?? '', 'Medium') || str_contains($gs ?? '', '0.8') ? 'selected' : '' }}>Medium Salt (0.8 - 2 mm)</option>
                                    <option value="Coarse Salt (2 - 5 mm)" {{ str_contains($gs ?? '', 'Coarse') || str_contains($gs ?? '', '2') ? 'selected' : '' }}>Coarse Salt (2 - 5 mm)</option>
                                    <option value="Crystal Salt (5 - 8 mm)" {{ str_contains($gs ?? '', 'Crystal') || str_contains($gs ?? '', '5') ? 'selected' : '' }}>Crystal Salt (5 - 8 mm)</option>
                                    <option value="Natural Rock Lump Salt" {{ str_contains($gs ?? '', 'Lump') || str_contains($gs ?? '', 'Rock') ? 'selected' : '' }}>Natural Rock Lump Salt (Uncrushed)</option>
                                    <option value="Not Applicable (Crafted Lamp / Tile)" {{ str_contains($gs ?? '', 'Applicable') || str_contains($gs ?? '', 'Solid') || str_contains($gs ?? '', 'Lamp') ? 'selected' : '' }}>Not Applicable (Crafted Lamp / Tile / Lick)</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Packaging Type</label>
                                <select name="packaging_type" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                    @php $pt = $product->packaging_type ?? ''; @endphp
                                    <option value="Zip Pouch" {{ str_contains($pt, 'Pouch') ? 'selected' : '' }}>1. Zip Pouch (Stand-Up Resealable)</option>
                                    <option value="PET Jar" {{ str_contains($pt, 'PET') ? 'selected' : '' }}>2. PET Jar (Screw Cap)</option>
                                    <option value="Glass Jar" {{ str_contains($pt, 'Glass') ? 'selected' : '' }}>3. Glass Jar (Flint w/ Metal Lid)</option>
                                    <option value="Grinder Bottle" {{ str_contains($pt, 'Grinder') ? 'selected' : '' }}>4. Grinder Bottle (Ceramic Core Mill)</option>
                                    <option value="Shaker Bottle" {{ str_contains($pt, 'Shaker') ? 'selected' : '' }}>5. Shaker Bottle (Dual Sift Top)</option>
                                    <option value="Food Grade PP Bag" {{ str_contains($pt, 'PP Bag') || str_contains($pt, 'Woven') ? 'selected' : '' }}>6. PP Bag (Food Grade Woven with PE Liner)</option>
                                    <option value="1-Ton Jumbo Bag (FIBC)" {{ str_contains($pt, 'Jumbo') || str_contains($pt, 'FIBC') ? 'selected' : '' }}>7. 1-Ton Jumbo Bag (FIBC Big Bag)</option>
                                    <option value="Single Piece / Wooden Base" {{ str_contains($pt, 'Wooden') || str_contains($pt, 'Piece') ? 'selected' : '' }}>8. Single Piece with Wooden Base (Salt Lamp)</option>
                                    <option value="Metal Wire Basket" {{ str_contains($pt, 'Basket') ? 'selected' : '' }}>9. Metal Basket + Salt Chunks (Basket Lamp)</option>
                                    <option value="Salt Lamp Set" {{ str_contains($pt, 'Set') ? 'selected' : '' }}>10. Salt Lamp Set (Multi-piece Box)</option>
                                    <option value="Carton Box / Pallet" {{ str_contains($pt, 'Carton') || str_contains($pt, 'Pallet') ? 'selected' : '' }}>11. Carton Box / Palletized Slabs</option>
                                    <option value="Bulk Loose Vessel" {{ str_contains($pt, 'Vessel') || str_contains($pt, 'Loose') ? 'selected' : '' }}>12. Bulk Loose Vessel Container Load</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Unit Weight / Capacity</label>
                                <input type="text" name="package_weight" value="{{ $product->package_weight }}" placeholder="e.g. 500g, 25 kg, 1 Ton, 2-3 kg (Lamp)" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            </div>

                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Packaging Summary Description</label>
                                <input type="text" name="packaging" value="{{ $product->packaging }}" placeholder="e.g. 25kg Food-grade PP bag w/ PE inner liner" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            </div>

                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Purity Grade</label>
                                <input type="text" name="purity" value="{{ $product->purity ?? '98.8% NaCl' }}" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            </div>

                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Quality Standard / Certifications</label>
                                <input type="text" name="grade" value="{{ $product->grade ?? 'Food Grade ISO 22000 / CXS 150:1985 / Halal / Kosher' }}" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            </div>
                        </div>
                    </div>

                    <!-- 4. PRODUCT MEDIA -->
                    <div class="pt-4 border-t border-slate-100">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] mb-3 flex items-center gap-2">
                            <i class="fa-solid fa-image"></i> Product Image
                        </h3>
                        <div class="bg-slate-50 p-4 rounded-xl border border-slate-200/80 space-y-3">
                            <div class="flex items-center gap-4 mb-2">
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-16 h-16 rounded-xl object-cover border border-slate-200 bg-white">
                                <div>
                                    <span class="text-xs font-bold text-slate-800">Current Image</span>
                                    <p class="text-[11px] text-slate-500">{{ $product->image_url }}</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-slate-800 font-semibold mb-1">Replace Image from Computer</label>
                                    <input type="file" name="image_file" accept="image/*" class="block w-full text-xs text-slate-500 file:mr-3 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-900 file:text-white hover:file:bg-slate-800 cursor-pointer">
                                </div>
                                <div>
                                    <label class="block text-slate-800 font-semibold mb-1">Or Direct Image URL / Path</label>
                                    <input type="text" name="image_url" value="{{ $product->image_url }}" class="w-full bg-white border border-slate-300 rounded-xl px-4 py-2 text-slate-900 focus:outline-none focus:border-[#e07a5f]">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 5. DESCRIPTIONS -->
                    <div class="pt-4 border-t border-slate-100">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] mb-3 flex items-center gap-2">
                            <i class="fa-solid fa-align-left"></i> Descriptions & Visibility
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Short Description *</label>
                                <textarea name="short_desc" required rows="2" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">{{ $product->short_desc }}</textarea>
                            </div>

                            <div>
                                <label class="block text-slate-700 font-semibold mb-1">Full Detailed Description</label>
                                <textarea name="full_desc" rows="3" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">{{ $product->full_desc }}</textarea>
                            </div>

                            <div class="flex items-center gap-6 pt-2">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" name="is_featured" value="1" {{ $product->is_featured ? 'checked' : '' }} class="w-4 h-4 rounded border-slate-300 text-[#e07a5f]">
                                    <span class="text-slate-800 font-semibold">Feature on Homepage Catalog</span>
                                </label>

                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" name="is_active" value="1" {{ $product->is_active ? 'checked' : '' }} class="w-4 h-4 rounded border-slate-300 text-[#e07a5f]">
                                    <span class="text-slate-800 font-semibold">Active & Visible in Catalog</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end gap-3 pt-6 border-t border-slate-100 mt-6">
                        <a href="{{ route('admin.products.index') }}" class="px-5 py-2.5 border border-slate-300 rounded-xl text-slate-600 hover:bg-slate-100 font-semibold">Cancel</a>
                        <button type="submit" id="updateBtn" class="px-7 py-2.5 bg-slate-900 hover:bg-slate-800 text-white font-bold rounded-xl shadow-md transition-all flex items-center gap-2">
                            <i class="fa-solid fa-check text-xs"></i>
                            <span>Update Product</span>
                        </button>
                    </div>
                </form>
            </div>

        </main>
    </div>

    <script>
        document.getElementById('category_id_select').addEventListener('change', function() {
            const subSelect = document.getElementById('subcategory_id_select');
            subSelect.innerHTML = '<option value="">Select Subcategory...</option>';
            const selectedOpt = this.options[this.selectedIndex];
            if (selectedOpt && selectedOpt.dataset.subcategories) {
                const subs = JSON.parse(selectedOpt.dataset.subcategories);
                subs.forEach(s => {
                    const opt = document.createElement('option');
                    opt.value = s.id;
                    opt.textContent = s.name;
                    subSelect.appendChild(opt);
                });
            }
        });

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
                        window.location.href = "{{ route('admin.products.index') }}";
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
</body>
</html>
