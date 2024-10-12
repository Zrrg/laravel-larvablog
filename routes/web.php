<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/posts', [PostController::class, 'store'])->name('post.store');

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('post.destroy');

 


Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/terms', function() {
    return view('terms');
});
    



