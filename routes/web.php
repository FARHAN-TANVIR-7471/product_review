<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ProductController::class, 'index'])->name('product.list');
//product.show
Route::get('product-show/{id}', [ProductController::class, 'show'])->name('product.show');
Route::post('/create-review', [ReviewController::class, 'store'])->name('create.review');

Auth::routes();
Route::get('/add-product', [ProductController::class, 'formGet'])->name('add.product');
Route::post('/create-product', [ProductController::class, 'store'])->name('create.product');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

