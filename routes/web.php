<?php

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

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

Route::resource('/', CartController::class);
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::resource('/dashboard/menu', ProductController::class)->middleware('auth');
Route::resource('/dashboard/user', UserController::class)->middleware('auth');

Route::get('/kitchen', function () {
    return view('kitchen.index');
})->middleware('auth');;

Route::get('/kitchen/menu', function () {
    return view('kitchen.menu');
})->middleware('auth');;

Route::get('/kasir', function () {
    return view('kasir.index');
})->middleware('auth');;
