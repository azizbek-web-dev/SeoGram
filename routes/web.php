<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{page}', [BlogController::class, 'view'])->name('blog.view');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    