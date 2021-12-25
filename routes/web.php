<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;
use App\Models\Product;

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

// Category
Route::get('/home', [CategoryController::class, 'index1']);


Route::get('/category', [CategoryController::class, 'index']);

Route::get('/category/form',function(){
    return view('insertCate');
});

Route::post('/category/add', [CategoryController::class, 'add'])->name('king');

// Product

Route::get('/products', [ProductController::class, 'index']);

Route::post('/products/add', [ProductController::class, 'add'])->name('addking');

Route::get('/products/form',function(){
    return view('products.insert');
});

// indexcontroller
Route::get('/category/product/{cat_id}', [IndexController::class, 'CategoryWiseProduct']);
Route::get('/single-product/{pro_id}', [IndexController::class, 'ProductDetails']);


// Route::get('/single',function(){
//     return view('products.single-product');
// });
// Route::get('/productAll',function(){
//     return view('products.productAll');
// });
