<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/post', [PostController::class, 'store'])->name('post.create');


Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/terms', function() {
    return view('terms');
});
    



