<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

