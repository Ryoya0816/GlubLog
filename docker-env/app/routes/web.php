<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\DisplayController;

// トップページ → 画面表示用
Route::get('/', [DisplayController::class, 'index'])->name('home');

Route::get('/hello', function () {
    return 'Hello GrubLog!';
});

// 認証関連
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/login-custom', [AuthController::class, 'showLoginForm'])->name('login.form');

Route::get('/register-custom', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/reg_check', [AuthController::class, 'showRegisterCheck'])->name('register.check');
Route::post('/register/final', [AuthController::class, 'doRegister'])->name('register.final');
Route::get('/reg_done', [AuthController::class, 'showRegisterDone'])->name('register.done');

Route::get('/pw_request', [AuthController::class, 'showPwRequestForm'])->name('pw.request');
Route::post('/pw_request', [AuthController::class, 'sendPwRequest'])->name('pw.send');

// 店舗
Route::get('/stores', [StoreController::class, 'index'])->name('stores.index');
// 店舗詳細ページ
Route::get('/store/{id}', [StoreController::class, 'show'])->name('store.detail');

// 違反報告フォーム（GETでレビューIDを渡す）
Route::get('/report/{id}', [ReportController::class, 'form'])->name('report.form');

// 店舗一覧
Route::get('/stores', [StoreController::class, 'index'])->name('store.index');

// 店舗詳細
Route::get('/store/{store}', [StoreController::class, 'show'])->name('store.detail');
Route::get('/review_new', [ReviewController::class, 'create'])->name('review.new');
Route::post('/review_store', [ReviewController::class, 'store'])->name('review.store');
