<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicFiles\PublicBlogController;
use App\Http\Controllers\PublicFiles\GlowController;

// public index route
Route::get('/', [PublicBlogController::class, 'index'])->name('index');
// Route::resource('/glow', GlowController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
