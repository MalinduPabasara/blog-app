<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('getAllBlog');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/blog', [BlogController::class, 'index'])->name('getAllBlog');
    Route::get('/blog/all', [BlogController::class, 'getAllBlogData']);
    Route::post('/blog', [BlogController::class, 'store'])->name('addBlog');
    Route::get('/blog/{id}', [BlogController::class, 'destroy'])->name('deleteBlog');
    Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('updateBlog');
    Route::get('/blog/update/view/{id}', [BlogController::class, 'updateView'])->name('update.blog');
    Route::post('/blog/disable/{id}', [BlogController::class, 'disable'])->name('disableBlog');
    Route::get('/blog/view/{id}', [BlogController::class, 'show'])->name('viewBlog');
});


require __DIR__ . '/auth.php';
