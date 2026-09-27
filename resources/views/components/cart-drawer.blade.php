<!-- FLOATING TOAST NOTIFICATION -->
<div x-show="cartToastOpen" x-cloak x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-8" class="fixed bottom-6 right-6 z-50 bg-stone-900 text-white px-5 py-4 rounded-lg shadow-2xl border border-saltora-terracotta/40 flex items-center gap-3">
    <div class="w-8 h-8 rounded-full bg-saltora-terracotta text-white flex items-center justify-center shrink-0">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
        </svg>
    </div>
    <div>
        <h5 class="text-xs font-bold uppercase tracking-wider text-amber-100">ADDED TO SHOPPING CART</h5>
        <p class="text-xs text-stone-300 font-light" x-text="toastMessage"></p>
    </div>
    <button @click="cartToastOpen = false" class="text-stone-400 hover:text-white ml-3 cursor-pointer">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
    </button>
</div>

<!-- RIGHT SLIDE-OVER SHOPPING CART SIDEBAR DRAWER -->
<div x-show="cartSidebarOpen" class="fixed inset-0 z-50 overflow-hidden" x-cloak>
    <!-- Backdrop -->
    <div x-show="cartSidebarOpen" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/60 backdrop-blur-xs transition-opacity" @click="closeCartSidebar()"></div>

    <div class="fixed inset-y-0 right-0 max-w-full flex pl-10">
        <div x-show="cartSidebarOpen" x-transition:enter="transform transition ease-in-out duration-300 sm:duration-400" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-300 sm:duration-400" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" class="w-screen max-w-md bg-white border-l border-stone-200 text-stone-900 shadow-2xl flex flex-col justify-between">
            
            <!-- Drawer Header -->
            <div class="p-6 bg-stone-900 text-white flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-saltora-terracotta" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                    <h3 class="font-serif text-lg font-bold text-white" x-text="checkoutStep ? 'Export Order Checkout' : 'Shopping Cart & Orders'"></h3>
                </div>
                <button @click="closeCartSidebar()" class="text-stone-400 hover:text-white cursor-pointer p-1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Drawer Content Area -->
            <div class="p-6 flex-1 overflow-y-auto space-y-6">
                
                <!-- CART VIEW -->
                <template x-if="!checkoutStep">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between text-xs text-stone-500 border-b border-stone-100 pb-2">
                            <span>ORDER LINE ITEMS (<span x-text="cart.length"></span>)</span>
                            <span>VOLUME (TONS)</span>
                        </div>

                        <template x-if="cart.length === 0">
                            <div class="text-center py-12 text-stone-400 space-y-3">
                                <svg class="w-12 h-12 mx-auto text-stone-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"/>
                                </svg>
                                <p class="text-xs">Your shopping cart is currently empty.</p>
                                <button @click="closeCartSidebar()" class="px-4 py-2 bg-stone-900 text-white rounded-md text-xs font-bold uppercase tracking-wider cursor-pointer">Browse Salt Range</button>
                            </div>
                        </template>

                        <div class="divide-y divide-stone-100 max-h-96 overflow-y-auto">
                            <template x-for="(item, index) in cart" :key="index">
                                <div class="py-3 flex items-center justify-between text-xs">
                                    <div class="pr-2">
                                        <span class="font-bold text-stone-900 text-sm block" x-text="item.name"></span>
                                        <span class="text-[10px] text-stone-400 uppercase font-semibold" x-text="item.category"></span>
                                    </div>
                                    <div class="flex items-center gap-3 shrink-0">
                                        <div class="flex items-center border border-stone-200 rounded-lg overflow-hidden bg-stone-50">
                                            <button @click="updateQuantity(index, -5)" class="px-2.5 py-1 text-stone-600 hover:bg-stone-200 font-bold cursor-pointer">-</button>
                                            <span class="px-2 font-mono font-bold text-stone-900 text-xs" x-text="item.quantity + ' Tons'"></span>
                                            <button @click="updateQuantity(index, 5)" class="px-2.5 py-1 text-stone-600 hover:bg-stone-200 font-bold cursor-pointer">+</button>
                                        </div>
                                        <button @click="removeItem(index)" class="text-rose-500 hover:text-rose-700 p-1 cursor-pointer" title="Remove">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </template>

                <!-- CHECKOUT FORM VIEW -->
                <template x-if="checkoutStep">
                    <form @submit.prevent="submitOrder()" class="space-y-4 text-xs">
                        <div class="bg-stone-50 p-3 rounded-lg border border-stone-200 text-stone-700 flex items-center justify-between">
                            <span class="font-semibold">ORDER SUMMARY:</span>
                            <span class="font-bold font-mono text-[#e07a5f]" x-text="cart.length + ' Items | ' + totalTonnage + ' Tons'"></span>
                        </div>

                        <div>
                            <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Full Name *</label>
                            <input type="text" x-model="orderForm.full_name" required placeholder="John Doe" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-3.5 py-2.5 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                        </div>

                        <div>
                            <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Company Name *</label>
                            <input type="text" x-model="orderForm.company_name" required placeholder="Global Foods Trading LLC" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-3.5 py-2.5 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                        </div>

                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Business Email *</label>
                                <input type="email" x-model="orderForm.email" required placeholder="buyer@company.com" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-3.5 py-2.5 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            </div>
                            <div>
                                <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Phone / WhatsApp *</label>
                                <input type="tel" x-model="orderForm.phone" required placeholder="+1 234 567 8900" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-3.5 py-2.5 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Destination Country *</label>
                                <input type="text" x-model="orderForm.destination_country" required placeholder="United States / Germany" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-3.5 py-2.5 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            </div>
                            <div>
                                <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Destination Port</label>
                                <input type="text" x-model="orderForm.destination_port" placeholder="Port of Rotterdam / Hamburg" class="w-full bg-stone-50 border border-stone-200 rounded-lg px-3.5 py-2.5 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]">
                            </div>
                        </div>

                        <div>
                            <label class="block font-bold text-stone-800 uppercase tracking-wider mb-1 text-[10px]">Order Notes / Specifications</label>
                            <textarea x-model="orderForm.notes" rows="2" placeholder="Specify packaging details, bag size or special requirements..." class="w-full bg-stone-50 border border-stone-200 rounded-lg px-3.5 py-2.5 text-stone-900 focus:outline-none focus:bg-white focus:border-[#e07a5f]"></textarea>
                        </div>

                        <div class="pt-2 flex items-center justify-between gap-3">
                            <button type="button" @click="checkoutStep = false" class="px-4 py-2.5 border border-stone-200 rounded-xl text-stone-600 font-semibold hover:bg-stone-100 cursor-pointer">Back to Cart</button>
                            <button type="submit" :disabled="isSubmitting" class="flex-1 py-3 bg-[#e07a5f] hover:bg-stone-900 text-white font-bold text-xs rounded-xl shadow-lg transition-all uppercase tracking-wider cursor-pointer">
                                <span x-text="isSubmitting ? 'SUBMITTING ORDER...' : 'PLACE EXPORT ORDER NOW'"></span>
                            </button>
                        </div>
                    </form>
                </template>

            </div>

            <!-- Drawer Footer -->
            <div class="p-6 bg-stone-50 border-t border-stone-200 space-y-3">
                <template x-if="!checkoutStep">
                    <div>
                        <div class="flex items-center justify-between text-xs text-stone-600 font-semibold mb-3">
                            <span>TOTAL SHIPMENT VOLUME:</span>
                            <span class="font-mono font-bold text-base text-[#e07a5f]" x-text="totalTonnage + ' Metric Tons'"></span>
                        </div>
                        <button @click="proceedToCheckout()" :disabled="cart.length === 0" class="w-full py-3.5 bg-stone-900 hover:bg-black disabled:opacity-50 text-white font-bold text-xs rounded-xl shadow-md transition-all uppercase tracking-wider flex items-center justify-center gap-2 cursor-pointer">
                            <span>PROCEED TO ORDER CHECKOUT</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </template>
            </div>

        </div>
    </div>
</div>
