<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50 text-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Portal Login - SALTORA Exporter</title>
    <link rel="icon" type="image/png" href="/logo.png">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome & SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full flex items-center justify-center p-4 font-sans antialiased bg-slate-100/80 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-orange-50/50 via-slate-100 to-stone-200">
    
    <div class="w-full max-w-md">
        <!-- Logo Header -->
        <div class="text-center mb-8">
            <a href="/" class="inline-flex items-center gap-3 group">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#e07a5f] to-[#d4a373] p-0.5 shadow-lg shadow-[#e07a5f]/20 group-hover:scale-105 transition-transform duration-300">
                    <div class="w-full h-full bg-white rounded-[10px] flex items-center justify-center">
                        <img src="/logo.png" alt="SALTORA Logo" class="w-7 h-7 object-contain">
                    </div>
                </div>
                <div class="text-left">
                    <span class="block font-serif text-2xl font-bold tracking-wider text-slate-900">SALTORA</span>
                    <span class="block text-[10px] tracking-[0.25em] text-[#e07a5f] uppercase font-bold">Store Admin Panel</span>
                </div>
            </a>
        </div>

        <!-- Login Card -->
        <div class="bg-white border border-slate-200/80 rounded-2xl p-8 shadow-2xl shadow-slate-200/60 relative overflow-hidden">
            <div class="absolute -top-24 -right-24 w-48 h-48 bg-[#e07a5f]/10 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="mb-6 text-center">
                <h1 class="text-xl font-bold font-serif text-slate-900">Admin Sign In</h1>
                <p class="text-xs text-slate-500 mt-1">Access product catalog, store orders, & customer inquiries.</p>
            </div>

            <form id="adminLoginForm" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="block text-xs font-semibold text-slate-700 mb-1.5 uppercase tracking-wider">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-solid fa-envelope text-sm"></i>
                        </div>
                        <input type="email" id="email" name="email" required placeholder="admin@saltora.com" 
                            class="w-full bg-slate-50 border border-slate-300 rounded-xl pl-10 pr-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:bg-white focus:border-[#e07a5f] focus:ring-2 focus:ring-[#e07a5f]/20 transition-all">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-xs font-semibold text-slate-700 mb-1.5 uppercase tracking-wider">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-solid fa-lock text-sm"></i>
                        </div>
                        <input type="password" id="password" name="password" required placeholder="••••••••" 
                            class="w-full bg-slate-50 border border-slate-300 rounded-xl pl-10 pr-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:bg-white focus:border-[#e07a5f] focus:ring-2 focus:ring-[#e07a5f]/20 transition-all">
                    </div>
                </div>

                <div class="flex items-center justify-between text-xs text-slate-500">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded bg-slate-100 border-slate-300 text-[#e07a5f] focus:ring-[#e07a5f]">
                        <span>Remember session</span>
                    </label>
                    <a href="/" class="text-[#e07a5f] hover:underline font-medium">Main Store Front &rarr;</a>
                </div>

                <button type="submit" id="loginBtn" class="w-full py-3.5 px-4 bg-slate-900 hover:bg-slate-800 text-white font-semibold text-sm rounded-xl shadow-lg shadow-slate-900/10 hover:shadow-slate-900/20 active:scale-[0.99] transition-all flex items-center justify-center gap-2">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <span>Log In to Store Console</span>
                </button>
            </form>

            <div class="mt-6 pt-5 border-t border-slate-100 text-center">
                <p class="text-xs text-slate-500">Demo Admin Credentials: <span class="text-slate-800 font-mono font-semibold">admin@saltora.com</span> / <span class="text-slate-800 font-mono font-semibold">password123</span></p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('adminLoginForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const btn = document.getElementById('loginBtn');
            const originalText = btn.innerHTML;
            
            btn.disabled = true;
            btn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Authenticating...';

            const formData = new FormData(this);

            try {
                const response = await fetch('{{ route("admin.login.submit") }}', {
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
                        title: 'Authenticated!',
                        text: data.message,
                        timer: 1500,
                        showConfirmButton: false,
                        background: '#ffffff',
                        color: '#1e293b',
                        iconColor: '#e07a5f'
                    }).then(() => {
                        window.location.href = data.redirect;
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Access Denied',
                        text: data.message || 'Invalid credentials provided.',
                        background: '#ffffff',
                        color: '#1e293b',
                        confirmButtonColor: '#e07a5f'
                    });
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                }
            } catch (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'System Error',
                    text: 'Unable to process login request right now.',
                    background: '#ffffff',
                    color: '#1e293b',
                    confirmButtonColor: '#e07a5f'
                });
                btn.disabled = false;
                btn.innerHTML = originalText;
            }
        });
    </script>
</body>
</html>
