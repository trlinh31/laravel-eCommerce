<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Brian2694\Toastr\Toastr;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::prefix('shop')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/women', [ShopController::class, 'women'])->name('shop.women');
    Route::get('/men', [ShopController::class, 'men'])->name('shop.men');
    Route::get('/product/{id}', [ShopController::class, 'show'])->name('shop.show');
    Route::get('/search', [ShopController::class, 'search'])->name('shop.search');
    Route::get('/filter', [ShopController::class, 'filter'])->name('shop.filter');
    Route::post('/comment/{id}', [ShopController::class, 'postComment'])->name('shop.comment')->middleware('auth');
});
Route::prefix('account')->group(function () {
    Route::get('/login', [AccountController::class, 'login'])->name('account.login');
    Route::post('/login', [AccountController::class, 'checkLogin'])->name('account.login');
    Route::get('/logout', [AccountController::class, 'logout'])->name('account.logout');
    Route::get('/register', [AccountController::class, 'register'])->name('account.register');
    Route::post('/register', [AccountController::class, 'postRegister'])->name('account.register');
});
Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::get('/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/remove/{rowId}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/update/{rowId}', [CartController::class, 'update'])->name('cart.update');
    Route::get('/delete', [CartController::class, 'delete'])->name('cart.delete');
});
