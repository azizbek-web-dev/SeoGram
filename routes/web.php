<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{page}', [BlogController::class, 'view']);
Route::get('/contact', [PageController::class, 'contact']);
