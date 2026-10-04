<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50 text-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create Blog Article - SALTORA Admin</title>
    <link rel="icon" type="image/png" href="/logo.png">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] { display: none !important; }
        .ck-editor__editable_inline {
            min-height: 280px !important;
            border-bottom-left-radius: 12px !important;
            border-bottom-right-radius: 12px !important;
            background-color: #f8fafc !important;
            font-size: 13px !important;
            color: #0f172a !important;
        }
        .ck-toolbar {
            border-top-left-radius: 12px !important;
            border-top-right-radius: 12px !important;
            background-color: #ffffff !important;
            border-color: #cbd5e1 !important;
        }
    </style>
</head>
<body class="min-h-full font-sans antialiased bg-slate-50 text-slate-800 flex">

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
                </a>

                <!-- 3. Subcategories -->
                <a href="{{ route('admin.subcategories.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-tags text-sm"></i>
                        <span>Subcategories</span>
                    </div>
                </a>

                <!-- 4. Product Catalog -->
                <a href="{{ route('admin.dashboard') }}?tab=products" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-cubes text-sm"></i>
                        <span>Product Catalog</span>
                    </div>
                </a>

                <!-- 5. Customer Messages -->
                <a href="{{ route('admin.dashboard') }}?tab=inquiries" class="w-full flex items-center justify-between px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope-open-text text-sm"></i>
                        <span>Customer Messages</span>
                    </div>
                </a>

                <!-- 6. Blogs & Insights (Active) -->
                <a href="{{ route('admin.dashboard') }}?tab=blogs" class="w-full flex items-center justify-between px-3 py-2.5 bg-[#e07a5f]/10 text-[#e07a5f] font-bold rounded-xl transition-all cursor-pointer">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-newspaper text-sm"></i>
                        <span>Blogs & Insights</span>
                    </div>
                    <span class="px-2 py-0.5 bg-[#e07a5f] text-white text-[10px] rounded-full font-bold">New</span>
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
                <a href="{{ route('admin.dashboard') }}?tab=blogs" class="p-2 rounded-lg text-slate-400 hover:text-slate-800 hover:bg-slate-100 transition-all cursor-pointer" title="Back to Blogs">
                    <i class="fa-solid fa-arrow-left text-sm"></i>
                </a>
                <div>
                    <div class="flex items-center gap-2 text-[11px] text-slate-400">
                        <a href="{{ route('admin.dashboard') }}?tab=blogs" class="hover:text-slate-600">Blogs & Insights</a>
                        <span>/</span>
                        <span class="text-slate-600 font-semibold">New Article</span>
                    </div>
                    <h1 class="font-serif font-bold text-base sm:text-lg text-slate-900 leading-tight">Write New Blog Article</h1>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('admin.dashboard') }}?tab=blogs" class="px-3.5 py-2 border border-slate-200 hover:bg-slate-100 text-slate-700 font-semibold text-xs rounded-xl transition-all">
                    Cancel
                </a>
                <button type="button" onclick="document.getElementById('publishBtn').click()" class="px-4 py-2 bg-[#e07a5f] hover:bg-[#d46a4f] text-white font-bold text-xs rounded-xl shadow-xs transition-all flex items-center gap-2 cursor-pointer">
                    <i class="fa-solid fa-check text-xs"></i>
                    <span>Publish Article</span>
                </button>
            </div>
        </header>

        <!-- FULL-PAGE MAIN CONTENT FORM -->
        <main class="p-4 sm:p-8 w-full max-w-7xl mx-auto space-y-6">
            
            <form id="createBlogForm" class="space-y-6 text-xs">
                @csrf

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
                    
                    <!-- LEFT 8 COLUMNS: ARTICLE CONTENT -->
                    <div class="lg:col-span-8 space-y-6">

                        <!-- Title & Excerpt -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs space-y-4">
                            <div class="border-b border-slate-100 pb-3 flex items-center justify-between">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] flex items-center gap-2">
                                    <i class="fa-solid fa-newspaper"></i> Article Information
                                </h3>
                                <span class="text-[10px] text-slate-400">* Required Fields</span>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Article Title *</label>
                                    <input type="text" name="title" id="article_title" required placeholder="e.g. Why Saudi & Gulf Importers Prefer Pakistani Himalayan Pink Salt" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 text-sm focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>

                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Custom URL Slug (Optional)</label>
                                    <input type="text" name="slug" placeholder="auto-generated-from-title-if-empty" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>

                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Short Excerpt / Summary *</label>
                                    <textarea name="excerpt" rows="3" required placeholder="A compelling 1-2 sentence overview shown in blog cards and search results..." class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- WYSIWYG Content Editor -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs space-y-4">
                            <div class="border-b border-slate-100 pb-3 flex items-center justify-between">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] flex items-center gap-2">
                                    <i class="fa-solid fa-pen-nib"></i> Full Article Content *
                                </h3>
                                <span class="text-[10px] text-slate-400">Rich Formatting</span>
                            </div>

                            <div>
                                <textarea id="blogContentEditor" name="content" class="w-full rounded-xl"></textarea>
                            </div>
                        </div>

                    </div>

                    <!-- RIGHT 4 COLUMNS: FEATURED PHOTO, CATEGORY, METADATA -->
                    <div class="lg:col-span-4 space-y-6">

                        <!-- FEATURED IMAGE (PHOTO STUDIO) -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs space-y-4">
                            <div class="border-b border-slate-100 pb-3 flex items-center justify-between">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] flex items-center gap-2">
                                    <i class="fa-solid fa-camera"></i> Featured Image
                                </h3>
                                <span class="text-[10px] text-slate-400">Live Preview</span>
                            </div>

                            <!-- Live Picture Display Container -->
                            <div class="w-full aspect-video rounded-2xl bg-slate-100 border border-slate-200/80 overflow-hidden relative flex items-center justify-center group shadow-inner">
                                <img id="blog_image_preview" src="" alt="Blog Preview" class="w-full h-full object-cover hidden transition-all duration-300" onerror="this.classList.add('hidden'); document.getElementById('blog_image_placeholder').classList.remove('hidden');">
                                
                                <div id="blog_image_placeholder" class="text-center p-6 space-y-2">
                                    <div class="w-12 h-12 rounded-xl bg-white shadow-xs border border-slate-200 flex items-center justify-center mx-auto text-slate-400">
                                        <i class="fa-solid fa-image text-xl text-slate-300"></i>
                                    </div>
                                    <p class="text-xs font-semibold text-slate-600">No Featured Image</p>
                                    <p class="text-[10px] text-slate-400">Select computer file or enter URL below</p>
                                </div>

                                <button type="button" id="clear_blog_image_btn" class="hidden absolute top-2 right-2 p-1.5 rounded-lg bg-slate-900/80 hover:bg-rose-600 text-white text-xs transition-all shadow-md cursor-pointer" title="Remove Photo">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>

                            <!-- Upload Options -->
                            <div class="space-y-3 pt-2">
                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Option 1: Upload from Computer</label>
                                    <input type="file" id="blog_image_file" name="image_file" accept="image/*" class="block w-full text-xs text-slate-500 file:mr-3 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-900 file:text-white hover:file:bg-slate-800 cursor-pointer">
                                </div>

                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Option 2: Direct Image URL or Path</label>
                                    <input type="text" id="blog_image_url" name="image_url" placeholder="e.g. /blog-hero.jpg or /khewra-mine.jpg" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 text-xs focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>
                            </div>
                        </div>

                        <!-- CATEGORY & AUTHOR -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs space-y-4">
                            <div class="border-b border-slate-100 pb-3">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] flex items-center gap-2">
                                    <i class="fa-solid fa-tags"></i> Category & Author
                                </h3>
                            </div>

                            <div class="space-y-3">
                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Category *</label>
                                    <select name="category" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f] cursor-pointer">
                                        <option value="Export Insights">Export Insights</option>
                                        <option value="Logistics & Shipping">Logistics & Shipping</option>
                                        <option value="Mining & Production">Mining & Production</option>
                                        <option value="Culinary & Spa Grades">Culinary & Spa Grades</option>
                                        <option value="Industry Compliance">Industry Compliance</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Author Name *</label>
                                    <input type="text" name="author" value="SALTORA Export Desk" placeholder="Author name..." class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>

                                <div>
                                    <label class="block text-slate-700 font-semibold mb-1">Estimated Reading Time</label>
                                    <input type="text" name="read_time" value="5 min read" placeholder="e.g. 5 min read" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-slate-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                                </div>
                            </div>
                        </div>

                        <!-- STATUS & PUBLISH -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs space-y-4">
                            <div class="border-b border-slate-100 pb-3">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-[#e07a5f] flex items-center gap-2">
                                    <i class="fa-solid fa-sliders"></i> Publishing Options
                                </h3>
                            </div>

                            <div class="space-y-3">
                                <label class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 hover:bg-slate-100/80 border border-slate-200/60 cursor-pointer transition-all">
                                    <input type="checkbox" name="is_published" value="1" checked class="w-4 h-4 rounded border-slate-300 text-[#e07a5f] focus:ring-[#e07a5f]">
                                    <div>
                                        <span class="text-slate-800 font-bold block">Publish Immediately</span>
                                        <span class="text-[10px] text-slate-500">Visible on public blog and Google sitemap</span>
                                    </div>
                                </label>

                                <label class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 hover:bg-slate-100/80 border border-slate-200/60 cursor-pointer transition-all">
                                    <input type="checkbox" name="is_featured" value="1" class="w-4 h-4 rounded border-slate-300 text-[#e07a5f] focus:ring-[#e07a5f]">
                                    <div>
                                        <span class="text-slate-800 font-bold block">Featured Story</span>
                                        <span class="text-[10px] text-slate-500">Pinned at the top of the blog homepage</span>
                                    </div>
                                </label>
                            </div>

                            <div class="pt-4 border-t border-slate-100 space-y-2">
                                <button type="submit" id="publishBtn" class="w-full py-3 bg-[#e07a5f] hover:bg-[#d46a4f] text-white font-bold rounded-xl shadow-md shadow-[#e07a5f]/20 transition-all flex items-center justify-center gap-2 cursor-pointer text-sm">
                                    <i class="fa-solid fa-check text-xs"></i>
                                    <span>Publish Article</span>
                                </button>
                                <a href="{{ route('admin.dashboard') }}?tab=blogs" class="w-full py-2.5 border border-slate-300 hover:bg-slate-100 text-slate-600 font-semibold rounded-xl text-center block transition-all">
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
        let editorInstance = null;
        document.addEventListener('DOMContentLoaded', () => {
            const editorEl = document.querySelector('#blogContentEditor');
            if (editorEl && typeof ClassicEditor !== 'undefined') {
                ClassicEditor
                    .create(editorEl, {
                        toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo']
                    })
                    .then(editor => {
                        editorInstance = editor;
                    })
                    .catch(err => {
                        console.warn('CKEditor init skipped:', err);
                    });
            }
        });

        // Photo Studio Live Preview
        const previewEl = document.getElementById('blog_image_preview');
        const placeholderEl = document.getElementById('blog_image_placeholder');
        const clearBtn = document.getElementById('clear_blog_image_btn');
        const fileInput = document.getElementById('blog_image_file');
        const urlInput = document.getElementById('blog_image_url');

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
        document.getElementById('createBlogForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const btn = document.getElementById('publishBtn');
            btn.disabled = true;
            btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin text-xs"></i> Publishing...';

            // Sync CKEditor data
            if (editorInstance) {
                document.getElementById('blogContentEditor').value = editorInstance.getData();
            }

            const formData = new FormData(this);

            try {
                const response = await fetch('/admin/blogs', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json'
                    },
                    body: formData
                });

                const data = await response.json();
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Article Published!',
                        text: data.message,
                        background: '#ffffff',
                        color: '#1e293b',
                        confirmButtonColor: '#e07a5f'
                    }).then(() => {
                        window.location.href = "{{ route('admin.dashboard') }}?tab=blogs";
                    });
                } else {
                    Swal.fire({ icon: 'error', title: 'Error', text: data.message || 'Validation error', background: '#ffffff', color: '#1e293b' });
                    btn.disabled = false;
                    btn.innerHTML = '<i class="fa-solid fa-check text-xs"></i> Publish Article';
                }
            } catch (err) {
                Swal.fire({ icon: 'error', title: 'Network Error', text: 'Operation failed.', background: '#ffffff', color: '#1e293b' });
                btn.disabled = false;
                btn.innerHTML = '<i class="fa-solid fa-check text-xs"></i> Publish Article';
            }
        });
    </script>
    @include('admin.partials.logout-script')
</body>
</html>
