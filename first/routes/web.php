<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/shop', function() {
    return view('shop');
})->name('shop');

Route::get('/shop-detail', function() {
    return view('shopdetail');
})->name('shopdetail');

Route::get('/cart', function() {
    return view('cart');
})->name('cart');

Route::get('/checkout', function() {
    return view('checkout');
})->name('checkout');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');


Route::get('/user/register', [UserController::class, 'register']);
Route::get('/user/register', [UserController::class, 'login']);
Route::get('/user/register', [UserController::class, 'dashboard']);


// Route::get('/category/add', [CategoryController::class, 'add']);
// Route::get('/category/list', [CategoryController::class, 'list']);
// Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
// Route::get('/category/delete/{id}', [CategoryController::class, 'delete']);

Route::resource('category', CategoryController::class);