<?php

use App\Http\Controllers\Web\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/article', [MainController::class, 'article'])->name('article');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
