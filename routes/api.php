<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',[AuthenticationController::class,'login']);

Route::middleware('api')->group(function(){
    Route::post('category/create',[CategoryController::class,'store']);
    Route::prefix('product')->group(function () {
        Route::post('create',[ProductController::class,'store']);
        Route::get('list',[ProductController::class,'getAllProducts']);
        Route::delete('delete/{id}',[ProductController::class,'delete']);
        Route::post('update',[ProductController::class,'update']);
    });
});
