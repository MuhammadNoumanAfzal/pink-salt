<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50 text-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Product Sub-Page - SALTORA Admin</title>
    <link rel="icon" type="image/png" href="/logo.png">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                <h1 class="font-serif font-bold text-lg text-slate-900">Edit Product Sub-Page</h1>
            </div>
            <a href="{{ route('admin.products.index') }}" class="px-4 py-2 border border-slate-300 hover:bg-slate-100 text-slate-700 font-semibold text-xs rounded-xl transition-all">
                Cancel & Return
            </a>
        </header>

        <main class="p-8 max-w-3xl w-full mx-auto space-y-6">
            
            <div class="bg-white border border-slate-200/80 rounded-2xl p-8 shadow-sm">
                <div class="mb-6 border-b border-slate-100 pb-4">
                    <h2 class="text-xl font-bold font-serif text-slate-900">Edit Product: {{ $product->name }}</h2>
                    <p class="text-xs text-slate-500">Update product specs, grain size, packaging, and visibility in catalog.</p>
                </div>

                <form id="editProductForm" class="space-y-5 text-xs">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-slate-700 font-semibold mb-1">Product Name *</label>
                            <input type="text" name="name" value="{{ $product->name }}" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
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
                            <label class="block text-slate-700 font-semibold mb-1">Mesh / Grain Size</label>
                            <input type="text" name="mesh_size" value="{{ $product->mesh_size }}" placeholder="e.g. 0.2mm – 0.8mm Fine" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                        </div>

                        <div>
                            <label class="block text-slate-700 font-semibold mb-1">Purity Grade</label>
                            <input type="text" name="purity" value="{{ $product->purity }}" placeholder="e.g. 98.8% NaCl" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                        </div>

                        <div>
                            <label class="block text-slate-700 font-semibold mb-1">Badge Tag</label>
                            <input type="text" name="badge" value="{{ $product->badge }}" placeholder="e.g. Top Seller" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                        </div>

                        <div>
                            <label class="block text-slate-700 font-semibold mb-1">Packaging Options</label>
                            <input type="text" name="packaging" value="{{ $product->packaging }}" placeholder="e.g. 25kg PP bags" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                        </div>

                        <div class="sm:col-span-2">
                            <label class="block text-slate-700 font-semibold mb-1">Product Image URL / Path</label>
                            <input type="text" name="image_url" value="{{ $product->image_url }}" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                        </div>

                        <div class="sm:col-span-2">
                            <label class="block text-slate-700 font-semibold mb-1">Short Description *</label>
                            <textarea name="short_desc" required rows="2" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">{{ $product->short_desc }}</textarea>
                        </div>

                        <div class="sm:col-span-2">
                            <label class="block text-slate-700 font-semibold mb-1">Full Description</label>
                            <textarea name="full_desc" rows="3" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">{{ $product->full_desc }}</textarea>
                        </div>

                        <div class="flex items-center gap-6 sm:col-span-2">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" name="is_featured" value="1" {{ $product->is_featured ? 'checked' : '' }} class="w-4 h-4 rounded border-slate-300 text-[#e07a5f]">
                                <span class="text-slate-800 font-semibold">Feature on Homepage</span>
                            </label>

                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" name="is_active" value="1" {{ $product->is_active ? 'checked' : '' }} class="w-4 h-4 rounded border-slate-300 text-[#e07a5f]">
                                <span class="text-slate-800 font-semibold">Active & Visible in Catalog</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex justify-end gap-3 pt-6 border-t border-slate-100 mt-6">
                        <a href="{{ route('admin.products.index') }}" class="px-5 py-2.5 border border-slate-300 rounded-xl text-slate-600 hover:bg-slate-100 font-semibold">Cancel</a>
                        <button type="submit" id="updateBtn" class="px-6 py-2.5 bg-slate-900 hover:bg-slate-800 text-white font-bold rounded-xl shadow-md transition-all">Update Product</button>
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
            btn.innerText = 'Updating...';

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
                    btn.innerText = 'Update Product';
                }
            } catch (err) {
                Swal.fire({ icon: 'error', title: 'Network Error', text: 'Operation failed.', background: '#ffffff', color: '#1e293b' });
                btn.disabled = false;
                btn.innerText = 'Update Product';
            }
        });
    </script>
</body>
</html>
