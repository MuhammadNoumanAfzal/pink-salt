<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminSubcategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes - SALTORA Himalayan Pink Salt Exporter
|--------------------------------------------------------------------------
*/

// Public Frontend Pages
Route::get('/', function () { return view('welcome'); })->name('home');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/products', [FrontendController::class, 'products'])->name('products');
Route::get('/certifications', function () { return view('certifications'); })->name('certifications');
Route::get('/export-logistics', function () { return view('export-logistics'); })->name('export-logistics');
Route::get('/contact', function () { return view('contact'); })->name('contact');

// Legal & Policy Pages
Route::get('/terms', function () { return view('terms'); })->name('terms');
Route::get('/privacy', function () { return view('privacy'); })->name('privacy');
Route::get('/return-policy', function () { return view('return-policy'); })->name('return-policy');

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
    
    // Category CRUD Operations
    Route::get('/categories', [AdminCategoryController::class, 'index'])->name('admin.categories.index');
    Route::post('/categories', [AdminCategoryController::class, 'store'])->name('admin.categories.store');
    Route::put('/categories/{id}', [AdminCategoryController::class, 'update'])->name('admin.categories.update');
    Route::post('/categories/{id}/toggle', [AdminCategoryController::class, 'toggleStatus'])->name('admin.categories.toggle');
    Route::delete('/categories/{id}', [AdminCategoryController::class, 'destroy'])->name('admin.categories.delete');
    Route::get('/categories/{id}/subcategories', [AdminCategoryController::class, 'getSubcategories'])->name('admin.categories.subcategories');

    // Subcategory CRUD Operations
    Route::get('/subcategories', [AdminSubcategoryController::class, 'index'])->name('admin.subcategories.index');
    Route::post('/subcategories', [AdminSubcategoryController::class, 'store'])->name('admin.subcategories.store');
    Route::put('/subcategories/{id}', [AdminSubcategoryController::class, 'update'])->name('admin.subcategories.update');
    Route::post('/subcategories/{id}/toggle', [AdminSubcategoryController::class, 'toggleStatus'])->name('admin.subcategories.toggle');
    Route::delete('/subcategories/{id}', [AdminSubcategoryController::class, 'destroy'])->name('admin.subcategories.delete');

    // Order Management
    Route::post('/quotes/{id}/status', [AdminDashboardController::class, 'updateQuoteStatus'])->name('admin.quotes.status');
    Route::delete('/quotes/{id}', [AdminDashboardController::class, 'deleteQuote'])->name('admin.quotes.delete');
    
    // Contact Submissions Management
    Route::post('/inquiries/{id}/status', [AdminDashboardController::class, 'updateContactStatus'])->name('admin.inquiries.status');
    Route::delete('/inquiries/{id}', [AdminDashboardController::class, 'deleteContact'])->name('admin.inquiries.delete');
});
