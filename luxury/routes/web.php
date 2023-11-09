<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/trangchu', function () {
    return view('trangchu');
});

//Hien thi danh sach san pham
Route::resource('products', ProductController::class);
// Route::resource('products',ProductController::class, 'index');