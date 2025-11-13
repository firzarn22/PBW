<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//========================// User pages \\=========================\\
Route::get('/', function () {return view('user.index');})->name('user.index');
Route::get('/profile', function () {return view('user.profile');})->name('user.profile');
Route::get('/cart', function () {return view('user.cart');})->name('user.cart');
Route::get('/about', function () {return view('user.about');})->name('user.about');
Route::get('/blog', function () {return view('user.blog');})->name('user.blog');
Route::get('/ours', function () {return view('user.ours');})->name('user.ours');
Route::get('/orderhistory', function () {return view('user.orderhistory');})->name('user.orderhistory');
Route::get('/checkout', function () {return view('user.checkout');})->name('user.checkout');

//========================// Admin pages \\=========================\\
Route::get('/admin', function () {return view('admin.index2');})->name('admin.index2');
Route::get('/admin/users', function () {return view('admin.users');})->name('admin.users');
Route::get('/admin/orders', function () {return view('admin.orders');})->name('admin.orders');
Route::get('/admin/products', function () {return view('admin.products');})->name('admin.products');

//========================// Auth pages \\=========================\\
Route::get('/auth/login', function () {return view('auth.login');})->name('login');
Route::get('/auth/register', function () {return view('auth.register');})->name('register');

// =========================
// Logout Route (POST)
// =========================
Route::post('/logout', function (Request $request) {
    Auth::logout();                        // Hapus session user
    $request->session()->invalidate();     // Hapus data session
    $request->session()->regenerateToken();// Buat CSRF token baru
    return redirect('/auth/login');        // Arahkan ke halaman login
})->name('logout');
