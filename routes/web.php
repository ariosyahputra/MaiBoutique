<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('landing');

Auth::routes(['reset' => false, 'confirm' => false, 'verify' => false]);

Route::get('/logout', [LogoutController::class, 'logoutRouteDisable']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/home', [ProductController::class, 'index'])->name('home')->middleware('auth');

Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('detailProduct')->middleware('auth');
Route::post('/detail/{id}', [ProductController::class, 'addToCart'])->name('addToCart')->middleware('auth');
Route::delete('/detail/{id}', [ProductController::class, 'deleteItem'])->name('deleteItem')->middleware('auth');

Route::get('/search', [SearchController::class, 'index'])->name('searchProduct')->middleware('auth');
Route::post('/search', [SearchController::class, 'search'])->name('search')->middleware('auth');

Route::get('/cart', [CartController::class, 'index'])->name('cart')->middleware('member');
Route::post('/cart', [CartController::class, 'checkOut'])->name('checkOut')->middleware('member');
Route::get('/manageCart/{id}', [CartController::class, 'detail'])->name('editPage')->middleware('member');
Route::put('/manageCart/{id}', [CartController::class, 'editCart'])->name('editCart')->middleware('member');
Route::delete('/manageCart/{id}', [CartController::class, 'deleteCart'])->name('deleteCart')->middleware('member');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('/editProfile', [ProfileController::class, 'editProfile'])->name('editProfile')->middleware('member');
Route::put('/editProfile', [ProfileController::class, 'saveProfile'])->name('saveProfile')->middleware('member');
Route::get('/editPassword', [ProfileController::class, 'editPassword'])->name('editPassword')->middleware('auth');
Route::put('/editPassword', [ProfileController::class, 'savePassword'])->name('savePassword')->middleware('auth');

Route::get('/history', [HistoryController::class, 'index'])->name('history')->middleware('member');

Route::get('/addItem', [ProductController::class, 'addItem'])->name('addItem')->middleware('admin');
Route::post('/addItem', [ProductController::class, 'add'])->name('add')->middleware('admin');
