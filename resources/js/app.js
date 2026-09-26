import './bootstrap';
import Alpine from 'alpinejs';

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

// Alpine Global Store for Product Quick View & Cart Toast
Alpine.data('shopManager', () => ({
    quickViewModalOpen: false,
    selectedProduct: null,
    cartToastOpen: false,
    toastMessage: '',
    cartCount: 0,
    quoteList: [],

    openQuickView(product) {
        this.selectedProduct = product;
        this.quickViewModalOpen = true;
    },

    closeQuickView() {
        this.quickViewModalOpen = false;
    },

    addToQuote(productName) {
        this.cartCount++;
        this.quoteList.push(productName);
        this.toastMessage = `"${productName}" added to your quote inquiry list!`;
        this.cartToastOpen = true;
        setTimeout(() => {
            this.cartToastOpen = false;
        }, 3500);
    }
}));

window.Alpine = Alpine;
Alpine.start();
