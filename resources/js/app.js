import './bootstrap';
import Alpine from 'alpinejs';
import Swal from 'sweetalert2';

// Make Swal available globally
window.Swal = Swal;

// Setup IntersectionObserver for Multi-Directional Smooth Scroll Reveal
document.addEventListener('DOMContentLoaded', () => {
    const selector = '.reveal-on-scroll, .reveal-from-left, .reveal-from-right, .reveal-from-bottom, .reveal-from-top, .reveal-scale';
    const revealElements = document.querySelectorAll(selector);
    
    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            root: null,
            threshold: 0.12,
            rootMargin: '0px 0px -40px 0px'
        });

        revealElements.forEach(el => revealObserver.observe(el));
    } else {
        // Fallback
        revealElements.forEach(el => el.classList.add('is-revealed'));
    }
});

// Alpine Global Store for Product Quick View, Cart Slide-Over Sidebar & Order Checkout
Alpine.data('shopManager', () => ({
    quickViewModalOpen: false,
    selectedProduct: null,
    cartSidebarOpen: false,
    checkoutStep: false,
    cartToastOpen: false,
    toastMessage: '',
    cart: JSON.parse(localStorage.getItem('saltora_cart') || localStorage.getItem('saltora_quote_cart') || '[]'),
    
    // Order Checkout Form state
    orderForm: {
        full_name: '',
        company_name: '',
        email: '',
        phone: '',
        destination_country: '',
        destination_port: '',
        target_date: '',
        notes: ''
    },
    isSubmitting: false,

    init() {
        this.$watch('cart', (val) => {
            localStorage.setItem('saltora_cart', JSON.stringify(val));
        });
    },

    get cartCount() {
        return this.cart.reduce((total, item) => total + (item.quantity || 1), 0);
    },

    get totalTonnage() {
        return this.cart.reduce((total, item) => total + (item.quantity || 0), 0);
    },

    openQuickView(product) {
        this.selectedProduct = product;
        this.quickViewModalOpen = true;
    },

    closeQuickView() {
        this.quickViewModalOpen = false;
    },

    // =========================================================================
    // ADD TO CART FUNCTIONALITY (COMMENTED OUT IN FAVOR OF DIRECT REQUEST A QUOTE)
    // =========================================================================
    /*
    addToCart(product) {
        let pName = typeof product === 'string' ? product : product.name;
        let pCategory = typeof product === 'object' ? product.category : 'Salt Export';
        let pId = typeof product === 'object' ? product.id : pName.toLowerCase().replace(/\s+/g, '-');

        let existing = this.cart.find(item => item.id === pId || item.name === pName);
        if (existing) {
            existing.quantity += 5; // default +5 metric tons
        } else {
            this.cart.push({
                id: pId,
                name: pName,
                category: pCategory,
                quantity: 20 // Default FCL tonnage (20 Metric Tons)
            });
        }

        // Open Shopping Cart Slide-Over Sidebar automatically!
        this.checkoutStep = false;
        this.cartSidebarOpen = true;

        // SweetAlert2 Toast
        Swal.fire({
            icon: 'success',
            title: 'Added to Cart!',
            html: `<b style="color: #e07a5f;">${pName}</b> (20 Metric Tons) added.`,
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true,
            background: '#ffffff',
            color: '#1e293b',
            iconColor: '#e07a5f'
        });
    },

    addToQuote(product) {
        this.addToCart(product);
    },
    */
    addToCart(product) {
        let pName = typeof product === 'string' ? product : (product?.name || '');
        window.location.href = '/contact' + (pName ? '?product=' + encodeURIComponent(pName) : '') + '#contactForm';
    },

    addToQuote(product) {
        this.addToCart(product);
    },

    updateQuantity(index, delta) {
        if (this.cart[index]) {
            this.cart[index].quantity += delta;
            if (this.cart[index].quantity <= 0) {
                this.cart.splice(index, 1);
            }
        }
    },

    removeItem(index) {
        this.cart.splice(index, 1);
    },

    openCartSidebar() {
        this.checkoutStep = false;
        this.cartSidebarOpen = true;
    },

    closeCartSidebar() {
        this.cartSidebarOpen = false;
    },

    proceedToCheckout() {
        if (this.cart.length === 0) {
            Swal.fire({
                icon: 'info',
                title: 'Cart is Empty',
                text: 'Please add products to your cart before proceeding to checkout.',
                background: '#ffffff',
                color: '#1e293b',
                confirmButtonColor: '#e07a5f'
            });
            return;
        }
        localStorage.setItem('saltora_cart', JSON.stringify(this.cart));
        window.location.href = '/checkout';
    },

    async submitOrder() {
        if (this.cart.length === 0) {
            Swal.fire({
                icon: 'warning',
                title: 'Cart is Empty',
                text: 'Please add items to your cart before placing an order.',
                confirmButtonColor: '#e07a5f'
            });
            return;
        }
        
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
        this.isSubmitting = true;

        try {
            const response = await fetch('/checkout', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken || '',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    ...this.orderForm,
                    items: this.cart
                })
            });

            const data = await response.json();

            if (data.success) {
                this.cart = []; // clear cart
                localStorage.removeItem('saltora_cart');
                localStorage.removeItem('saltora_quote_cart');

                // Redirect to Order Success Page
                if (data.redirect_url) {
                    window.location.href = data.redirect_url;
                } else {
                    window.location.href = '/order-success/' + data.quote_number;
                }
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Order Submission Failed',
                    text: data.message || 'Please fill in all required fields.',
                    background: '#ffffff',
                    color: '#1e293b',
                    confirmButtonColor: '#e07a5f'
                });
            }
        } catch (error) {
            Swal.fire({
                icon: 'error',
                title: 'Network Error',
                text: 'Could not connect to the server. Please check your network connection.',
                background: '#ffffff',
                color: '#1e293b',
                confirmButtonColor: '#e07a5f'
            });
        } finally {
            this.isSubmitting = false;
        }
    }
}));

window.Alpine = Alpine;
Alpine.start();
