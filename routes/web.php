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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/cart', 'CartController@index')->name('cart');

Route::get('/checkout', 'CheckoutController@index')->name('checkout');

Route::get('/product', 'ProductController@index')->name('product');

Route::get('/shop', 'ShopController@index')->name('shop');

Route::get('/wishlist', 'WishlistController@index')->name('wishlist');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/blogpage', 'BlogPageController@index')->name('blogpage');

Route::get('/contact', 'ContactController@index')->name('contact');