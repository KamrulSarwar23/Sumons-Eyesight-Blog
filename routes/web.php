<?php

use App\Http\Controllers\Backend\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\VideoController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Video Route
    Route::get('/video/index', [VideoController::class, 'index'])->name('video.index');
    Route::get('/video/create', [VideoController::class, 'create'])->name('video.create');
    Route::post('/video/store', [VideoController::class, 'store'])->name('video.store');
    Route::delete('/video/destroy/{id}', [VideoController::class, 'destroy'])->name('video.destroy');
    Route::get('/video/edit/{id}', [VideoController::class, 'edit'])->name('video.edit');
    Route::post('/video/update/{id}', [VideoController::class, 'update'])->name('video.update');


    // Article Route
    Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
    Route::delete('/article/destroy/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');
    Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
    Route::post('/article/update/{id}', [ArticleController::class, 'update'])->name('article.update');
});

require __DIR__ . '/auth.php';

Route::get('/', [HomeController::class, 'homePage'])->name('home.page.view');

Route::get('/videos', [HomeController::class, 'videoPage'])->name('videos.view');

Route::get('/blog', [HomeController::class, 'blogPage'])->name('blog.view');
