<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Facade\FlareClient\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// public Route

// product
Route::get('/product', [ApiController::class, 'index1']);

Route::get('/product/show/{id}', [ApiController::class, 'show']);


// category
Route::get('/category', [ApiController::class, 'index']);

Route::get('/category/show/{id}', [ApiController::class, 'show1']);

// register
Route::post('/register',[AuthController::class, "register"]);

// login
Route::post('/login',[AuthController::class, "login"]);


// private Route
Route::group(['middleware' => ['auth:sanctum']], function(){
    // product
    Route::post('/product/store', [ApiController::class, 'store']);

    Route::post('/product/update/{id}', [ApiController::class, 'update']);

    Route::post('/product/destroy/{id}', [ApiController::class, 'destroy']);

    // category
    Route::post('/category/store', [ApiController::class, 'store1']);

    Route::post('/category/update/{id}', [ApiController::class, 'update1']);

    Route::post('/category/destroy/{id}', [ApiController::class, 'destroy1']);

    // logout
    Route::post('/logout',[AuthController::class, "logout"]);
});