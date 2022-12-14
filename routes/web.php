<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductAvailableColorController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[HomeController::class,'index'])->name('/');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

require __DIR__.'/adminauth.php';

Route::get('/products',[ProductController::class,'index'])->name('products');
Route::get('/products/{slug}',[ProductController::class, 'show'])->name('products.details');
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
Route::get('/contact',[ContactController::class,'index'])->name('contact');


Route::prefix('/admin')->group(function() {
    Route::group(['middleware' => 'admin.auth'], function() {

        //Routes For Categpry
        Route::get('category/index',[CategoryController::class,'index'])->name('category.index');
        Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
        Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
        Route::get('category/{id}/edit',[CategoryController::class,'edit'])->name('category.edit');
        Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');

        // Routes for SubCategory
        Route::get('subcategory/index',[SubCategoryController::class,'index'])->name('subcategory.index');
        Route::get('subcategory/create',[SubCategoryController::class,'create'])->name('subcategory.create');
        Route::post('subcategory/store',[SubCategoryController::class,'store'])->name('subcategory.store');
        Route::get('subcategory/{id}/edit',[SubCategoryController::class,'edit'])->name('subcategory.edit');
        Route::post('subcategory/update/{id}',[SubCategoryController::class,'update'])->name('subcategory.update');

        // Routes for Size
        Route::get('size/index',[SizeController::class,'index'])->name('size.index');
        Route::get('size/create',[SizeController::class,'create'])->name('size.create');
        Route::post('size/store',[SizeController::class,'store'])->name('size.store');
        Route::get('size/{id}/edit',[SizeController::class,'edit'])->name('size.edit');
        Route::post('size/update/{id}',[SizeController::class,'update'])->name('size.update');

        // Routes for Color
        Route::get('color/index',[ColorController::class,'index'])->name('color.index');
        Route::get('color/create',[ColorController::class,'create'])->name('color.create');
        Route::post('color/store',[ColorController::class,'store'])->name('color.store');
        Route::get('color/{id}/edit',[ColorController::class,'edit'])->name('color.edit');
        Route::post('color/update/{id}',[ColorController::class,'update'])->name('color.update');

        // Routes For Brands
        Route::get('brand/index',[BrandController::class,'index'])->name('brand.index');
        Route::get('brand/create',[BrandController::class,'create'])->name('brand.create');
        Route::post('brand/store',[BrandController::class,'store'])->name('brand.store');
        Route::get('brand/{id}/edit',[BrandController::class,'edit'])->name('brand.edit');
        Route::post('brand/update/{id}',[BrandController::class,'update'])->name('brand.update');

        //Routes for Products
        Route::get('product/index',[AdminProductController::class,'index'])->name('product.index');
        Route::get('product/create',[AdminProductController::class,'create'])->name('product.create');
        Route::get('product/fetchsubcategory/',[AdminProductController::class,'fetchsubcategory'])->name('getsubcategory');
        Route::post('product/store',[AdminProductController::class,'store'])->name('product.store');
        Route::get('product/create',[AdminProductController::class,'create'])->name('product.create');
        Route::get('product-color/create',[ProductAvailableColorController::class,'create'])->name('productavailabecolor.create');
   });
});



