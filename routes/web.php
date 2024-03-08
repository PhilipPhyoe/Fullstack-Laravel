<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/products', function () {
    return view('home');
});

Route::get('products/{product:slug}', function (Product $product) {
    return view('components.product', [
        'product' => $product
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('products', [
        'products' => $category->products
    ]);
});

Route::get('brands/{brand:name}', function (Brand $brand) {
    return view('products', [
        'products' => $brand->products
    ]);
});
