<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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
    return view('welcome');
});

Route::get('product/create',[ProductController::class,'create']);
Route::post('product/store',[ProductController::class,'store'])->name('product.store');
Route::get('product/export',[ProductController::class,'export'])->name('product.export');

Route::get('category/create',[CategoryController::class,'create']);
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/export',[CategoryController::class,'export'])->name('category.export');
