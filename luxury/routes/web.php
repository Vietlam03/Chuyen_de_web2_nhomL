<?php

use Illuminate\Support\Facades\Route;

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
    return view('wellcome');
    // return env('DB_DATABASE');
});
Route::get('/next', function () {
    // return view('welcome');
    return redirect('/');
});
Route::get('/cart', function () {
    return view('cart');
});
