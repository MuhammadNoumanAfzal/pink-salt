<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50 text-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Add New Product - SALTORA Admin</title>
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
                <h1 class="font-serif font-bold text-lg text-slate-900">Add New Product Sub-Page</h1>
            </div>
            <a href="{{ route('admin.products.index') }}" class="px-4 py-2 border border-slate-300 hover:bg-slate-100 text-slate-700 font-semibold text-xs rounded-xl transition-all">
                Cancel & Return
            </a>
        </header>

        <main class="p-8 max-w-3xl w-full mx-auto space-y-6">
            
            <div class="bg-white border border-slate-200/80 rounded-2xl p-8 shadow-sm">
                <div class="mb-6 border-b border-slate-100 pb-4">
                    <h2 class="text-xl font-bold font-serif text-slate-900">Create New Salt Product</h2>
                    <p class="text-xs text-slate-500">Fill in the product specifications, category, descriptions, and catalog visibility.</p>
                </div>

                <form id="createProductForm" class="space-y-5 text-xs">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-slate-700 font-semibold mb-1">Product Name *</label>
                            <input type="text" name="name" required placeholder="e.g. Fine Himalayan Pink Salt" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                        </div>

                        <div>
                            <label class="block text-slate-700 font-semibold mb-1">Category *</label>
                            <select name="category" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
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
                            <input type="text" name="mesh_size" placeholder="e.g. 0.2mm – 0.8mm Fine" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                        </div>

                        <div>
                            <label class="block text-slate-700 font-semibold mb-1">Purity Grade</label>
                            <input type="text" name="purity" placeholder="e.g. 98.8% NaCl" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                        </div>

                        <div>
                            <label class="block text-slate-700 font-semibold mb-1">Badge Tag</label>
                            <input type="text" name="badge" placeholder="e.g. Top Seller / Export Grade" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                        </div>

                        <div>
                            <label class="block text-slate-700 font-semibold mb-1">Packaging Options</label>
                            <input type="text" name="packaging" placeholder="e.g. 25kg PP bags, 1 Ton Jumbo" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                        </div>

                        <div class="sm:col-span-2">
                            <label class="block text-slate-700 font-semibold mb-1">Product Image URL / Path</label>
                            <input type="text" name="image_url" placeholder="/product1.jpg" value="/product1.jpg" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                        </div>

                        <div class="sm:col-span-2">
                            <label class="block text-slate-700 font-semibold mb-1">Short Description *</label>
                            <textarea name="short_desc" required rows="2" placeholder="Brief summary for product cards..." class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]"></textarea>
                        </div>

                        <div class="sm:col-span-2">
                            <label class="block text-slate-700 font-semibold mb-1">Full Description</label>
                            <textarea name="full_desc" rows="3" placeholder="Detailed product specifications and applications..." class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]"></textarea>
                        </div>

                        <div class="flex items-center gap-6 sm:col-span-2">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" name="is_featured" value="1" checked class="w-4 h-4 rounded border-slate-300 text-[#e07a5f]">
                                <span class="text-slate-800 font-semibold">Feature on Homepage</span>
                            </label>

                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" name="is_active" value="1" checked class="w-4 h-4 rounded border-slate-300 text-[#e07a5f]">
                                <span class="text-slate-800 font-semibold">Active & Visible in Catalog</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex justify-end gap-3 pt-6 border-t border-slate-100 mt-6">
                        <a href="{{ route('admin.products.index') }}" class="px-5 py-2.5 border border-slate-300 rounded-xl text-slate-600 hover:bg-slate-100 font-semibold">Cancel</a>
                        <button type="submit" id="saveBtn" class="px-6 py-2.5 bg-slate-900 hover:bg-slate-800 text-white font-bold rounded-xl shadow-md transition-all">Save & Publish Product</button>
                    </div>
                </form>
            </div>

        </main>
    </div>

    <script>
        document.getElementById('createProductForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const btn = document.getElementById('saveBtn');
            btn.disabled = true;
            btn.innerText = 'Publishing...';

            try {
                const response = await fetch('/admin/products', {
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
                        title: 'Product Created!',
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
                    btn.innerText = 'Save & Publish Product';
                }
            } catch (err) {
                Swal.fire({ icon: 'error', title: 'Network Error', text: 'Operation failed.', background: '#ffffff', color: '#1e293b' });
                btn.disabled = false;
                btn.innerText = 'Save & Publish Product';
            }
        });
    </script>
</body>
</html>
