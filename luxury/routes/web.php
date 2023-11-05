<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
// use App\Models\Category;
// use App\Models\Comment;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\CommentController;
use App\Http\Controllers\OrderController;

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

Route::get('/', function () {
    return view('welcome');
    // return env('DB_DATABASE');
});
// Route::get('/cart', function () {
//     return view('cart');
// });
Route::get('/trangchu', function () {
    return view('trangchu');
});

Route::resource('products', ProductController::class);
Route::resource('cart', OrderController::class);
