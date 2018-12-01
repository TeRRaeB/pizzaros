<?php

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
    return view('pages/index');
})->name('index');
Route::get('pages/products', function () {
    return view('pages/products');
})->name('products');
Route::get('pages/about', function () {
    return view('pages/about');
})->name('about');

Route::get('pages/blog', function () {
    return view('pages/blog');
})->name('blog');

Route::get('pages/blog-single', function () {
    return view('pages/blog-single');
})->name('blog-single');
Route::get('pages/store-local', function () {
    return view('pages/store-local');
})->name('store-local');
Route::get('pages/contacts', function () {
    return view('pages/contacts');
})->name('contacts');
Route::get('pages/faq', function () {
    return view('pages/faq');
})->name('faq');
Route::get('pages/cart', function () {
    return view('pages/cart');
})->name('cart');
Route::get('pages/terms-and-conditions', function () {
    return view('pages/terms-and-conditions');
})->name('terms-and-conditions');
