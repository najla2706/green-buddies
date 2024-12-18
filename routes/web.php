<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\ArticleController;
use App\Http\Controllers\User\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/article', [HomeController::class, 'article'])->name('article');
Route::get('/articles/{id}', [HomeController::class, 'show'])->name('article.show');


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');
Route::post('/register/submit', [AuthController::class, 'register'])->name('register');


Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Article
    Route::get('dashboard/article', [ArticleController::class, 'index'])->name('article.index');
    Route::get('dashboard/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('dashboard/article', [ArticleController::class, 'store'])->name('article.store');
    Route::get('dashboard/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('dashboard/article/{article}', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('dashboard/article/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');
});
