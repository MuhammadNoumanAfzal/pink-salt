<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes - SALTORA Himalayan Pink Salt Exporter
|--------------------------------------------------------------------------
*/

// Public Frontend Pages
Route::get('/', function () { return view('welcome'); })->name('home');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/products', function () { return view('products'); })->name('products');
Route::get('/certifications', function () { return view('certifications'); })->name('certifications');
Route::get('/export-logistics', function () { return view('export-logistics'); })->name('export-logistics');
Route::get('/contact', function () { return view('contact'); })->name('contact');

// Public Checkout & Order Confirmation Routes
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [FrontendController::class, 'submitOrder'])->name('checkout.submit');
Route::get('/order-success/{quote_number}', [FrontendController::class, 'orderSuccess'])->name('order.success');

// Public Action Endpoints
Route::post('/contact', [FrontendController::class, 'submitContact'])->name('contact.submit');
Route::post('/quote-request', [FrontendController::class, 'submitOrder'])->name('quote.submit');

// SEO HTML & XML Sitemaps
Route::get('/sitemap', function () { return view('sitemap'); })->name('html.sitemap');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Admin Authentication Routes
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::get('/login', function () { return redirect()->route('admin.login'); })->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin Protected Dashboard & Sub-Page Routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    
    // Dedicated Product Management Sub-Pages
    Route::get('/products', [AdminDashboardController::class, 'productsIndex'])->name('admin.products.index');
    Route::get('/products/create', [AdminDashboardController::class, 'productsCreate'])->name('admin.products.create');
    Route::get('/products/{id}/edit', [AdminDashboardController::class, 'productsEdit'])->name('admin.products.edit');
    
    // Product CRUD Operations
    Route::post('/products', [AdminDashboardController::class, 'storeProduct'])->name('admin.products.store');
    Route::put('/products/{id}', [AdminDashboardController::class, 'updateProduct'])->name('admin.products.update');
    Route::post('/products/{id}/toggle', [AdminDashboardController::class, 'toggleProductStatus'])->name('admin.products.toggle');
    Route::delete('/products/{id}', [AdminDashboardController::class, 'deleteProduct'])->name('admin.products.delete');
    
    // Order Management
    Route::post('/quotes/{id}/status', [AdminDashboardController::class, 'updateQuoteStatus'])->name('admin.quotes.status');
    
    // Contact Submissions Management
    Route::post('/inquiries/{id}/status', [AdminDashboardController::class, 'updateContactStatus'])->name('admin.inquiries.status');
});
