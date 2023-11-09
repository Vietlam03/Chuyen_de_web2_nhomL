<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
// use App\Models\Category;
// use App\Models\Comment;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Customer;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\CommentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//Admin routing laravel --version 9
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->group(function () {
        //login route
        Route::get('login', [App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('login', [App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'store'])->name('adminlogin');
    });
    Route::get('dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');
});

Route::get('/create', function () {
    return view('products.create');
});

Route::get('/index', function () {
    return view('products.index');
});

Route::resource('categories', CategoryController::class);
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::resource('customers', CustomerController::class);
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
// Route::get('/cart', function () {
//     return view('cart');
// });
Route::get('/trangchu', function () {
    return view('trangchu');
});

Route::resource('products', ProductController::class);
Route::delete('/products/delete/{$product}','ProductController@delete');
Route::resource('order', OrderController::class);
Route::delete('/order/delete/{$order}','OrderController@delete');
Route::resource('customer', CustomerController::class);
