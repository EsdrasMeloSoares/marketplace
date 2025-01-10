<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\StockController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Middleware\VerifyUserAuth;
use App\Http\Middleware\VerifyUserRole;
use Illuminate\Support\Facades\Route;

// Home Routes
Route::get('/', [HomeController::class, 'index'])->name('home');



// Auth Routes
Route::middleware([VerifyUserAuth::class])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Dashboard Routes
Route::middleware([VerifyUserRole::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    route::group([], function () {
        Route::get('/stock', [StockController::class, 'index'])->name('dashboard.stock');
        Route::get('/stock/create', [StockController::class, 'create'])->name('dashboard.stock.create');
        Route::post('/stock', [StockController::class, 'store'])->name('dashboard.stock.store');
        Route::get('/stock/{id}', [StockController::class, 'show'])->name('dashboard.stock.show');
        Route::get('/stock/{id}/edit', [StockController::class, 'edit'])->name('dashboard.stock.edit');
        Route::put('/stock/{id}', [StockController::class, 'update'])->name('dashboard.stock.update');
        Route::delete('/stock/{id}', [StockController::class, 'destroy'])->name('dashboard.stock.destroy');
    });
});