<?php

use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'front.pages.homepage');
Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');
Route::view('/cart', 'front.pages.cart');
Route::view('/profile/setting', 'front.pages.profile.profileSetting');
Route::view('/profile/account', 'front.pages.profile.account');
Route::view('/profile/address', 'front.pages.profile.address');
Route::view('/profile/addresses', 'front.pages.profile.addresses');
Route::view('/profile/orderhistory', 'front.pages.profile.orderHistory');
Route::view('/profile/wishlist', 'front.pages.profile.wishlist');
Route::view('/checkout', 'front.pages.checkout');
Route::view('/category', 'front.pages.category');
Route::view('/product', 'front.pages.product');
Route::view('/orderconfirmation', 'front.pages.orderConfirmation');
Route::view('/admin', 'admin.index');

// install the laravel/ui package
// Auth::routes();
