<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/certifications', function () {
    return view('certifications');
});

Route::get('/export-logistics', function () {
    return view('export-logistics');
});

Route::get('/contact', function () {
    return view('contact');
});
