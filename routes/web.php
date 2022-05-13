<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\ProductController::class, 'home'])
    ->name('home');

Route::get('pet-shop/food', [\App\Http\Controllers\ProductController::class, 'shopList' ] )
    ->name('pet-shop/food');

Route::get('pet-shop/blog', [\App\Http\Controllers\ProductController::class, 'blog' ] )
    ->name('pet-shop/blog');

Route::get('pet-shop/product-details', [\App\Http\Controllers\ProductController::class, 'productDetails'])
    ->name('pet-shop/product-details');

Route::get('pet-shop/blog-details', [\App\Http\Controllers\ProductController::class, 'blogDetails'])
    ->name('pet-shop/blog-details');

Route::get('pet-shop/about-us', function (){
    return view('pet-shop/about-us');
})->name('pet-shop/about-us');

Route::get('pet-shop/contact', function (){
    return view('pet-shop/contact');
})->name('pet-shop/contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
