<script>
document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('submit', function(e) {
        const form = e.target;
        if (form && form.action && form.action.includes('admin/logout') && !form.dataset.confirmed) {
            e.preventDefault();
            if (typeof Swal === 'undefined') {
                if (confirm('Are you sure you want to sign out?')) {
                    form.dataset.confirmed = 'true';
                    form.submit();
                }
                return;
            }
            Swal.fire({
                title: 'Sign Out?',
                text: 'Are you sure you want to end your admin session?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#e07a5f',
                cancelButtonColor: '#64748b',
                confirmButtonText: '<i class="fa-solid fa-right-from-bracket mr-1.5"></i> Yes, Sign Out',
                cancelButtonText: 'Cancel',
                reverseButtons: true,
                background: '#ffffff',
                color: '#1e293b',
                customClass: {
                    popup: 'rounded-2xl shadow-2xl border border-slate-100',
                    confirmButton: 'rounded-xl px-4 py-2.5 font-semibold text-xs shadow-md shadow-[#e07a5f]/20',
                    cancelButton: 'rounded-xl px-4 py-2.5 font-semibold text-xs'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Signing Out...',
                        text: 'Ending admin session securely.',
                        icon: 'success',
                        timer: 800,
                        showConfirmButton: false,
                        background: '#ffffff',
                        color: '#1e293b',
                        timerProgressBar: true
                    }).then(() => {
                        form.dataset.confirmed = 'true';
                        form.submit();
                    });
                }
            });
        }
    });
});
</script>
