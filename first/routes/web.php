<?php

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