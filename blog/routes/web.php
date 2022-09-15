<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicFiles\PublicBlogController;
use App\Http\Controllers\PublicFiles\GlowController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PublicBlogController::class, 'index'])->name('index');
Route::resource('/glow', GlowController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
