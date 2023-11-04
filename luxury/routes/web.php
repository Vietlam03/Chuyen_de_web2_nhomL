<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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
    return view('home');
    // return env('DB_DATABASE');
});
// Route::get('/next', function () {
//     // return view('welcome');
//     return redirect('/');
// });
// Route::get('/cart', function () {
//     return view('cart');
// });

// Route::get('products', function () {
//    return view('products/index'); 
// });

Route::resource('products', ProductController::class);